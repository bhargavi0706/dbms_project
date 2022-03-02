<?php 
if(!isset($_SESSION)){
	session_start();

}
include('../dbConnection.php');

if (isset($_SESSION['is_login'])) {
	$stuEmail = $_SESSION['stuLogEmail'];

}else {
	echo "<script> location.href='../index.php'; </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Watch Course</title>
	<!--Boostrap css-->
	<link rel="stylesheet"  href="../css/bootstrap.min.css">
	<!--font awesome css-->
	<link rel="stylesheet" href="../css/all.min.css">
	<!--gooogle font-->
	<link rel="stylesheet"  href="https://fonts.googleapis.com/css?family=Ubuntu">
	<!--custom css-->
	<link rel="stylesheet" type="text/css" href="../css/stustyle.css">
</head>
<body>
	<div class="container-fluid bg-success p-2">
		<h3>Welcome to LearnIt</h3>
		<a href="./myCourse.php" class="btn btn-danger">My Courses</a>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 border-right">
				<h4 class="text-centre">Lessons</h4>
				<ul id="playlist" class="nav flex-column">
					<?php
					if (isset($_GET['course_id'])) {
						$course_id = $_GET['course_id'];
						$sql="SELECT * FROM lesson WHERE course_id='$course_id'";
						$result = $conn-> query($sql);
						if($result -> num_rows >0){
							while ($row = $result-> fetch_assoc()) {

							 echo'<li class="nav-item border-bottom py-2" movieurl='.$row['lesson_link'].' style="cursor:pointer;">'.$row['lesson_name'].'</li>';
							 
				

							}
						}
					}
					?>
				</ul>
			</div>
			<div class="col-sm-8">
				<video id="videoarea" src='../lessonvid/bgvideo.mp4'class="mt-5 w-75 ml-2" controls></video>
			</div>
		</div>
	</div>

<script type="text/javascript", src="../js/popper.min.js"></script>
<script type="text/javascript", src="../js/bootstrap.min.js"></script>
<script type="text/javascript", src="../js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
</body>
</html>