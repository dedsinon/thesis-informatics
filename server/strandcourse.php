<?php
session_start();
require('database.php');

if (isset($_POST['add'])){

$description = mysqli_escape_string($conn, $_POST ['description']);
$code = mysqli_escape_string($conn, $_POST ['code']);
$classification = mysqli_escape_string($conn, $_POST ['classification']);
$status = 1;

	$sql ="SELECT * FROM strand_course WHERE sc_name = '".$description."' ";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);

	if ($count > 0)	{
		?>
				<script>
					window.location.href='../facultyStrandCourse.php';
					alert('FAILED: Strand & Course already exist!');
				</script> 

		<?php
	}
	else  {
		$add = "INSERT INTO strand_course (
					sc_name, 
					sc_code, 
					sc_sc, 
					sc_status 	
		)";

		$add .= "VALUES (
					'".$description."', 
					'".$code."',
					'".$classification."',
					'".$status."'	
		)";

		$add_query = mysqli_query($conn, $add);

			if ($add_query)	{
		?>
				<script>
					window.location.href='../facultyStrandCourse.php';
					alert('Successfully Added New Strand Course!');
				</script> 

		<?php
				// $_SESSION['success_user_add'] = "New User Account Added";
				// header("Location: ../facultyUserAccount.php");
		}
	}
} 

if (isset($_POST['update'])){

$description = mysqli_escape_string($conn, $_POST ['description']);
$code = mysqli_escape_string($conn, $_POST ['code']);
$classification = mysqli_escape_string($conn, $_POST ['classification']);
$sc_id = mysqli_escape_string($conn, $_POST ['sc_id']);

	$sql ="SELECT * FROM strand_course";
	$query = mysqli_query($conn, $sql);

		$update_sql = "UPDATE strand_course 
						SET sc_name ='".$description."', 
							sc_code ='".$code."', 
							sc_sc ='".$classification."' 
							WHERE sc_id = '".$sc_id."' ";
							

		$update_query = mysqli_query($conn, $update_sql) or die("Failed on Update Query");

	if ($update_query) {
		

		// echo $update_sql;
		// print_r($update_query);	
		
	?>
	<script>
		window.location.href='../facultyStrandCourse.php';
		alert('Successfully Edited');
	</script> 

	<?php
	}
	}
	

if(isset($_GET['scid'])){

$sql ="UPDATE strand_course SET sc_status = '".$_GET['status']."' WHERE sc_id = '".$_GET['scid']."' ";
$query = mysqli_query($conn, $sql) or die("Activate / Deactivate Failed");
header("Location: ../facultyStrandCourse.php");

}		

?>
