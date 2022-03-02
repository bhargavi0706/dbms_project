<?php 
  include('./main_include/header.php');
  include('./dbConnection.php');
?>
<!--start course page banner-->
<div class="container-fluid bg-dark">
  <div class="row">
    <img src="./images/coursebanner.jpg" alt="courses" style="height: 500px; width: 100% object-fit: cover;box-shadow: 10px;">
  </div>
</div>
<!--end course page banner-->
<!-- popular courses 1-->
<div class="container" style="margin-bottom: 50px;">
  <div>
    <div class="row">
      <div class="col-12 center">
        <h1 style="padding-top: 20px;">All Courses</h1>
      </div>
    </div>
  </div>
  
  <div class="row">
        <?php
      $sql = "SELECT * FROM courses";
      $result = $conn -> query($sql);
      if ($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()) {
          $course_id= $row['course_id'];
          echo '<div class="col-4">
      <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
        <div class="card">
          <img src="'.str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="course intro pic" >
          <div class="card-body">
            <h5 class="card-title">'.$row['course_name'].'</h5>
            <p class="card-text">'.$row['course_desc'].'</p>
          </div>
        
     
          <div class="card-footer">
            <p class="card-text d-inline">Price: <small><del>&#8377 '.$row['course_original_price'].'</del></small><span class="font-weight-bolder">&#8377 '.$row['course_price'].'</span>
            </p>
            <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right"> Enroll</a>
          </div>
        </div>
      </a>
    </div>';
        }
      }
      ?>
    
  </div>
</div>
<!-- popular courses 1-->
<?php
include('./main_include/footer.php');
?>