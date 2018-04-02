<?php
include('database.php');

if($_POST['action']=='activate'){

$sql ="UPDATE section SET sec_status = '".$_POST['status']."' WHERE sec_id = '".$_POST['secid']."' ";

$query = mysqli_query($conn, $sql) or die("Activate / Deactivate Failed");
header("Location: ../facultySection.php");
$response = "success";
return $response;
}



?>