<?php
session_start();
require('database.php');

if (isset($_POST['add'])){

$firstname = mysqli_escape_string($conn, $_POST ['firstname']);
$lastname = mysqli_escape_string($conn, $_POST ['lastname']);
$department = mysqli_escape_string($conn, $_POST ['department']);
$position = mysqli_escape_string($conn, $_POST ['position']);
$email = mysqli_escape_string($conn, $_POST ['email']);
$status = 1;
$username = mysqli_escape_string($conn, $_POST ['username']);
$password = 'info123';
$address = mysqli_escape_string($conn, $_POST ['address']);
$city = mysqli_escape_string($conn, $_POST ['city']);
$country = mysqli_escape_string($conn, $_POST ['country']);
$postal = mysqli_escape_string($conn, $_POST ['postal']);
$aboutme = mysqli_escape_string($conn, $_POST ['aboutme']);
$facebook = mysqli_escape_string($conn, $_POST ['facebook']);
$twitter = mysqli_escape_string($conn, $_POST ['twitter']);

	$sql ="SELECT * FROM useraccount WHERE user_name = '".$username."' ";
	$query = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);

	if ($count > 0)	{
		?>
				<script>
					window.location.href='../facultyUserAccount.php';
					alert('FAILED: Username already exist!');
				</script> 

		<?php
	}
	else  {
		$add = "INSERT INTO useraccount (
					user_firstname, 
					user_lastname, 
					user_department, 
					user_position, 	
					user_email, 
					user_status, 
					user_name, 
					user_pass, 
					user_address, 
					user_city, 
					user_country, 
					user_postal, 
					user_aboutme, 
					user_facebook, 
					user_twitter 
		)";

		$add .= "VALUES (
					'".$firstname."', 
					'".$lastname."',
					'".$department."',
					'".$position."',
					'".$email."',
					'".$status."',
					'".$username."',
					'".$password."',
					'".$address."', 
					'".$city."', 
					'".$country."', 
					'".$postal."', 
					'".$aboutme."',
					'".$facebook."',
					'".$twitter."'
					
		)";

		$add_query = mysqli_query($conn, $add);

			if ($add_query)	{
		?>
				<script>
					window.location.href='../facultyUserAccount.php';
					alert('Successfully Added New User Account!');
				</script> 

		<?php
				// $_SESSION['success_user_add'] = "New User Account Added";
				// header("Location: ../facultyUserAccount.php");
		}
	}
} 

if (isset($_POST['update'])){

$firstname = mysqli_escape_string($conn, $_POST ['firstname']);
$lastname = mysqli_escape_string($conn, $_POST ['lastname']);
$department = mysqli_escape_string($conn, $_POST ['department']);
$position = mysqli_escape_string($conn, $_POST ['position']);
$email = mysqli_escape_string($conn, $_POST ['email']);
// $status = mysqli_escape_string($conn, $_POST ['status']);
$username = mysqli_escape_string($conn, $_POST ['username']);
$user_id = mysqli_escape_string($conn, $_POST ['user_id']);
$address = mysqli_escape_string($conn, $_POST ['address']);
$city = mysqli_escape_string($conn, $_POST ['city']);
$country = mysqli_escape_string($conn, $_POST ['country']);
$postal = mysqli_escape_string($conn, $_POST ['postal']);
$aboutme = mysqli_escape_string($conn, $_POST ['aboutme']);
$facebook = mysqli_escape_string($conn, $_POST ['facebook']);
$twitter = mysqli_escape_string($conn, $_POST ['twitter']);

	$sql ="SELECT * FROM useraccount";
	$query = mysqli_query($conn, $sql);

		$update_sql = "UPDATE useraccount 
						SET user_firstname ='".$firstname."', 
							user_lastname ='".$lastname."', 
							user_department ='".$department."', 
							user_position = '".$position."', 
							user_email = '".$email."',  
							user_name = '".$username."',
							user_address ='".$address."', 
							user_city ='".$city."', 
							user_country ='".$country."', 
							user_postal ='".$postal."', 
							user_aboutme ='".$aboutme."', 
							user_facebook ='".$facebook."', 
							user_twitter ='".$twitter."' 
							WHERE user_id = '".$user_id."' ";
							

		$update_query = mysqli_query($conn, $update_sql) or die("Failed on Update Query");

	if ($update_query) {
		

		// echo $update_sql;
		// print_r($update_query);	
		
	?>
	<script>
		window.location.href='../facultyUserAccount.php';
		alert('Successfully Edited');
	</script> 

	<?php
	}
	}
	

if(isset($_GET['userid'])){

$sql ="UPDATE useraccount SET user_status = '".$_GET['status']."' WHERE user_id = '".$_GET['userid']."' ";
$query = mysqli_query($conn, $sql) or die("Activate / Deactivate Failed");
header("Location: ../facultyUserAccount.php");

}		

?>
