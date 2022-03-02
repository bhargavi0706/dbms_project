<?php
if(!isset($_SESSION)){
	session_start();
}
include_once('../dbConnection.php');




if (!isset($_SESSION['is_admin_login'])) {
	if(isset($_POST['checkLogEmail']) && isset($_POST['adminLogemail']) && isset($_POST['adminLogpass'])){
	$adminLogemail =$_POST['adminLogemail'];
	$adminLogpass =$_POST['adminLogpass'];

	$sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email='".$adminLogemail."' AND admin_pass = '".$adminLogpass."'";
	$result = $conn->query($sql);
	$row = $result->num_rows;
	
	if($row === 1){
		
		$_SESSION['is_admin_login'] = true;
		$_SESSION['adminLogemail'] = $adminLogemail;
		echo json_encode($row);


	}
	else if ($row === 0) {
		echo json_encode($row);
	}
}

}

?>