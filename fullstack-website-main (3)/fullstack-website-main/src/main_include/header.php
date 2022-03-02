<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" >
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" />


	<title>LEARNIT</title>
</head>
<body style="background-color: #8FC1D4;">
	<!-- NAV BAR -->
	<nav class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: #8FC1D4;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">LEARN IT</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav custom-nav">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="courses.php">Courses</a>
        </li>
        
        <?php 
          session_start();
          if(isset($_SESSION['is_login'])){
            echo '<li class="nav-item custom-nav-item">
          <a class="nav-link" href="student/studentProfile.php">My Profile</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>';
          }else{
            echo'<li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a>
        </li>';
          }



        ?>
        

       

      </ul>
    </div>
  </div>
</nav>