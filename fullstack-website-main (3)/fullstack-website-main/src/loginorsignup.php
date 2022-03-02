<?php 
  include('./main_include/header.php');
  include('./dbConnection.php');
?>

<div class="container-fluid bg-dark">
	<div class="row">
		<img src="./images/coursebanner.jpg" alt="courses" style="height: 300px; width: 100%; object-fit: cover; box-shadow: 10px;">
	</div>
</div>

<div class="container jumbotron mb-5" style="margin-top: 10px;">
	<div class="row">
		<div class="col-md-4">
			<h5 class="mb-3"> If Already registered! Login</h5>
			<form role="form" id="stuLoginForm">
				<div class="form-group" style="margin-bottom: 10px;">
					<i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email" name="stuLogEmail" class="form-control" placeholder="Email",id="stuLogEmail">
				</div>
				<div class="form-group" style="margin-bottom: 10px">
					<i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" name="stuLogPass" class="form-control" placeholder="Password",id="stuLogPass">
				</div>
				<button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
			</form><br>
			<small id="statusLogMsg"></small>
		</div>
		<div class="col-md-6 offset-md-1">
			<h5 class="mb-3">New User! Signup</h5>
			<form id ="stuRegForm">
  				<div class="mb-3">
    				<i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><small id = "statusMsg1"></small><input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
  				</div>
  				<div class="mb-3">
    				<i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email address</label><small id = "statusMsg2"></small><input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail" aria-describedby="emailHelp">
    				<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  				</div>
  				<div class="mb-3">
    			<i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New Password</label><small id = "statusMsg3"></small><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
  				</div>
  				<button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Signup</button>
			</form><br>
			<small id="successMsg"></small>

			</form>
		</div>
	</div>
</div>

<?php
include('./main_include/footer.php');
?>