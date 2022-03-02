<!-- start footer-->
<footer class="container-fluid bg-dark text-center p-2">
  <small class="text-white"> Copyright &copy; 2021 || desgined by learnit ||<a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter" >admin login</a></small>
</footer>
<!-- end footer-->

<!-- start student registration modal (sign up)-->
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="RegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">STUDENT REGISTRATION</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- start FORM-->
        <?php include('studentRegistration.php');?>
        <!-- end FORM-->
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end student registration modal (sign up)-->

<!-- start student login  modal -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- start FORM-->
        <form id="stuLoginForm">
          <div class="mb-3">
            <i class="fas fa-envelope"></i>
            <label for="stuLogemail" class="pl-2 font-weight-bold" >Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <i class="fas fa-key"></i>
            <label for="stuLogpass" class="pl-2 font-weight-bold"> Password</label>
            <input type="password" class="form-control" placeholder="Password" name="stupLogass" id="stuLogpass">
          </div>
        </form>
        <!-- end FORM-->
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end student login modal -->

<!-- start admin login  modal -->
<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Login </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- start FORM-->
        <form id="adminLoginForm">
          <div class="mb-3">
            <i class="fas fa-envelope"></i>
            <label for="adminLogemail" class="pl-2 font-weight-bold">Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <i class="fas fa-key"></i>
            <label for="adminLogpass" class="pl-2 font-weight-bold"> Password</label>
            <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
        </form>
        <!-- end FORM-->
      </div>
      <div class="modal-footer">
        <small id="statusAdminLogMsg"></small>
        <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>
<!-- end admin login modal -->


  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- Owl Carousel -->
<script type="text/javascript", src="js/popper.min.js"></script>
<script type="text/javascript", src="js/bootstrap.min.js"></script>
<script type="text/javascript", src="js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- studentcall ajax call js -->
<script type="text/javascript" src="js/studentsignup.js"></script>
<!-- admin login -->
<script type="text/javascript" src="js/adminlogin.js"></script>

<!-- custom JS code after importing jquery and owl -->
<script type="text/javascript">
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel();
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>

</body>
</html>
