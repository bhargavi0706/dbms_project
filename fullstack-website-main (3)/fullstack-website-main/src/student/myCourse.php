<?php 
if (!isset($_SESSION)) {
	session_start();
}

include('./stuInclude/header.php');
include_once('../dbConnection.php');

if (isset($_SESSION['is_login'])) {
 	$stuLogEmail = $_SESSION['stuLogEmail'];
 } else {
 	echo "<script> location.href='../index.php';</script>";
 }

?>
<div class="container" style="position: absolute; top: 100px; left: 200px;">
	<div class="row" style="align-items: centre;">
		<div class="col-12-centre">
			<h4 style="right: 350px;">All Courses</h4>
		</div>
	<div class="row">
		<?php
		if (isset($stuLogEmail)){
			$sql="SELECT co.order_id,c.course_id,c.course_name,c.course_duration,c.course_desc,c.course_img,c.course_author,c.course_original_price,c.course_price FROM courseorder AS co JOIN courses AS c on c.course_id = co.course_id WHERE co.stu_email = '$stuLogEmail'";
			$result = $conn->query($sql);
			if ($result -> num_rows > 0) {
				while ($row = $result -> fetch_assoc()) { ?>
						
						
					<div class="col-5">
						<div class="card">
							<img src="<?php echo $row['course_img'];?>" class="card-img-top mt-4 " alt="pic">
						</div>
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['course_name'];?></h5>
							<p class="card-text"><?php echo $row['course_desc'];?></p>
						</div>
						<div class="card-footer">
							<a href="watchcourse.php?course_id=<?php echo $row['course_id'];?>" class="btn btn-primary float-right">Watch Course</a>
						</div>
					</div>
						
						<?php 
					}
				}
			}
			?>
		</div>
			<hr>		
		</div>
	</div>
</div>



<?php 
include('./stuInclude/footer.php');
?>
