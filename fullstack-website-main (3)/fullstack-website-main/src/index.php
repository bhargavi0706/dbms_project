<?php 
include('./dbConnection.php');
include('./main_include/header.php');
?>

<!-- bg video -->
<div class="container-fluid remove-vid-marg">
  <div class="video-parent">
    <video playsinline autoplay muted loop>
      <source src="video/bgvideo.mp4">
    </video>
    <div class="vid-overlay"></div>
  </div>
  <div class="vid-content">
    <h1 class="my-content">Welcome To Learn It</h1>
    <?php
      if(!isset($_SESSION['is_login'])){
        echo '<a href="#" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started
        </a>';
      }
      else{
        echo'<a class="btn btn-primary mt-3" href="student/studentProfile.php">My Profile</a>';
      }

    ?>

  </div>
</div>

<!-- text banner -->
<div class="container-fluid txt-banner bg-danger">
  <div class="row bottom-banner">
    <div class="col-sm">
      <h5><i class="fas fa-book-open mr-3"></i> 50+ Online Courses</h5>
    </div> 
    <div class="col-sm">
      <h5><i class="fas fa-users mr-3"></i> Expert Instructors</h5>
    </div>
    <div class="col-sm">
      <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>
    </div>
  </div>
</div>

<!-- popular courses 1-->
<div class="container">
  <div>
    <div class="row">
      <div class="col-12 center">
        <h1 style="padding-top: 20px;">Popular Courses</h1>
      </div>
    </div>
  </div>
  
  <div class="row">
    <?php
      $sql = "SELECT * FROM courses LIMIT 6";
      $result = $conn -> query($sql);
      if ($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()) {
          $course_id= $row['course_id'];
          echo '<div class="col-4">
      <a href="coursedetails.php?course_id=" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
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
    <div class="text-center m-2">
      <a href="courses.php" class="btn btn-danger btn-sm" style="margin-top: 20px; margin-bottom: 20px;">View All Courses</a>
    </div>
  </div>
</div>


<!-- student feedback -->
<h1 style="padding-top: 1em; padding-bottom: 1em; text-align: center;">OUR STUDENT FEEDBACKS</h1>
<div class="owl-carousel owl-theme" style="padding-right: 1.5em; padding-left:1.5em ; text-align: center;">
    <?php
      $sql = "SELECT s.stu_name,s.stu_occ,s.stu_img,f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id= f.stu_id";
      $result = $conn -> query($sql);
      if($result-> num_rows > 0){
        while ($row = $result -> fetch_assoc()) {
          $s_img= $row['stu_img'];
          $n_img = str_replace('..','.',$s_img);

    ?>
    <div class="item">
      <div class="card">
          <img src="<?php echo $n_img?>" class="card-img-top img-thumbnail rounded-circle" alt="course intro pic" style="height: 150px; width: 150px; align-self: center;">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['stu_name']?> </h5>
            <p class="card-text"><?php echo $row['f_content'] ?></p>
          </div>
        </div>
    </div>
    <?php
        }
      }
    ?>
    
        </div>
    </div>
</div>
<div class="container-fluid bg-danger">
  <div class="row text-white text-center p-1">
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-twitter"></i> Twitter</a>
    </div>
    <div class="col-sm">
      <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
  </div>
</div>

<div class="container-fluid p-4" style="background-color: #E9ECEF">
  <div class="container" style="background-color: #E9ECEF">
    <div class="row text-center">
      <div class="col-sm">
        <h5>About Us</h5>
        <p>LearnIt provides universal access to the world's best education, partnering with top universities and organizations to offer courses online.</p>
      </div>
      
      <div class="col-sm">
        <h5>Contact Us</h5>
        <p>LEARNIT Pvt Ltd <br> HYDERABAD,TELANGANA <br> Ph. 000000000 </p>
      </div>
    </div>
  </div>
</div>
<?php
include('./main_include/footer.php');
?>