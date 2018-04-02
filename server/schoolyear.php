<?php
session_start();
require('database.php');

if (isset($_POST['add'])){

$school_year = mysqli_escape_string($conn, $_POST ['school_year']);
$status = 1;


	$sql ="SELECT * FROM school_year WHERE school_year = '".$school_year."' ";
	$query = mysqli_query($conn, $sql);
	
		$add = "INSERT INTO school_year (
					school_year,
					status
		)";

		$add .= "VALUES (
					'".$school_year."', 	
					'".$status."' 	
		)";

		$add_query = mysqli_query($conn, $add);

			if ($add_query)	{
		?>
				<script>
					window.location.href='../facultySchoolYear.php';
					alert('Successfully Added New User Account!');
				</script> 

		<?php
				// $_SESSION['success_user_add'] = "New User Account Added";
				// header("Location: ../facultyUserAccount.php");
		}
}


if (isset($_POST['update'])){

$school_year = mysqli_escape_string($conn, $_POST ['school_year']);
$school_year_id = mysqli_escape_string($conn, $_POST ['school_year_id']);

	$sql ="SELECT * FROM school_year WHERE school_year = '".$school_year."' ";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);

	if ($count > 0) {

		?>
				<script>
					window.location.href='../facultySchoolYear.php';
					alert('FAILED: School year already exist!');
				</script> 

<?php
	}
	else  {

		$update_sql = "UPDATE school_year 
						  SET school_year ='".$school_year."' 
						WHERE school_year_id = '".$school_year_id."' ";
							

		$update_query = mysqli_query($conn, $update_sql) or die("Failed on Update Query");

			if ($update_query) {
		

		// echo $update_sql;
		// print_r($update_query);	
		
?>
				<script>
					window.location.href='../facultySchoolYear.php';
					alert('Successfully Edited');
				</script> 

<?php
			}
	}
}


if(isset($_GET['syid'])){

$sql ="UPDATE school_year SET status = '".$_GET['status']."' WHERE school_year_id = '".$_GET['syid']."' ";

$query = mysqli_query($conn, $sql) or die("Activate / Deactivate Failed");

header("Location: ../facultySchoolYear.php");
}
		

?>
