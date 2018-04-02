<?php
session_start();
require('database.php');

if (isset($_POST['add'])){

$description = mysqli_escape_string($conn, $_POST ['description']);
$code = mysqli_escape_string($conn, $_POST ['code']);
$unit = mysqli_escape_string($conn, $_POST ['unit']);
$term = mysqli_escape_string($conn, $_POST ['term']);
$sc = mysqli_escape_string($conn, $_POST ['sc']);
$classification = mysqli_escape_string($conn, $_POST ['classification']);
$status = 1;

	$sql ="SELECT * FROM subject WHERE subj_name = '".$description."' ";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);

	if ($count > 0)	{
		?>
				<script>
					window.location.href='../facultySubject.php';
					alert('FAILED: Subject already exist!');
				</script> 

		<?php
	}
	else  {
		$add = "INSERT INTO subject (
					subj_name, 
					subj_code, 
					subj_unit, 
					subj_term, 
					sc_id, 
					room_classification, 
					subj_status 	
		)";

		$add .= "VALUES (
					'".$description."', 
					'".$code."',
					'".$unit."',
					'".$term."',
					'".$sc."',
					'".$classification."',
					'".$status."'	
		)";


		$add_query = mysqli_query($conn, $add);

			if ($add_query)	{
		?>
				<script>
					window.location.href='../facultySubject.php';
					alert('Successfully Added New Subject!');
				</script> 

		<?php
				// $_SESSION['success_user_add'] = "New User Account Added";
				// header("Location: ../facultyUserAccount.php");
		}
	}
} 
 print($add_query);
if (isset($_POST['update'])){

$description = mysqli_escape_string($conn, $_POST ['description']);
$number = mysqli_escape_string($conn, $_POST ['number']);
$classification = mysqli_escape_string($conn, $_POST ['classification']);
$room_id = mysqli_escape_string($conn, $_POST ['room_id']);

	$sql ="SELECT * FROM rooms";
	$query = mysqli_query($conn, $sql);

		$update_sql = "UPDATE rooms 
						SET room_name ='".$description."', 
							room_number ='".$number."', 
							room_classification ='".$classification."' 
							WHERE room_id = '".$room_id."' ";
							

		$update_query = mysqli_query($conn, $update_sql) or die("Failed on Update Query");

	if ($update_query) {
		

		// echo $update_sql;
		// print_r($update_query);	
		
	?>
	<script>
		window.location.href='../facultyRoom.php';
		alert('Successfully Edited');
	</script> 

	<?php
	}
	}
	

if(isset($_GET['roomid'])){

$sql ="UPDATE rooms SET room_status = '".$_GET['status']."' WHERE room_id = '".$_GET['roomid']."' ";
$query = mysqli_query($conn, $sql) or die("Activate / Deactivate Failed");
header("Location: ../facultyRoom.php");

}		

?>
