<?php
	include('./dbConnection.php');
	session_start();
	if(!isset($_SESSION['stuLogEmail'])){
		echo "<script> location.href='loginorsignup.php'</script>";
	}else{
			header("Pragma: no-cache");
			header("Cache-Control: no-cache");
			header("Expires: 0");
			$stuemail = $_SESSION['stuLogEmail'];

		?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="GENERATOR" content="Evrsoft First Page">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" >
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+Tokumin:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  
	<title>Checkout Page</title>
</head>
<body>

	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-6 offset-sm-3 jumbotron">
				<h3 class="mb-5">Welcome to LearnIt Payment Page</h3>
				<form method="post" action="./paytm/pgRedirect.php">
					<div class="form-group-row">
						<label for='ORDER_ID' class="col-sm-4 col-form-label">Order ID</label>
						<div class="col-sm-8">
							<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
						</div>
					</div>
					<div class="form-group-row">
						<label for='CUST_ID' class="col-sm-4 col-form-label">Student Email</label>
						<div class="col-sm-8">
							<input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($stuemail)){echo $stuemail;}?>" readonly>
						</div>
					</div>
					<div class="form-group-row">
						<label for='TXN_AMOUNT' class="col-sm-4 col-form-label">Amount</label>
						<div class="col-sm-8">
							<input title="TXN_AMOUNT" class="form-control" tabindex="10" type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){echo $_POST['id']; } ?>" readonly>
						</div>
					</div>
					<div class="form-group-row">
						<div class="col-sm-8">
							<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" type="hidden" readonly>
						</div>
					</div>
					<div class="form-group-row">
						<div class="col-sm-8">
							<input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" type="hidden" readonly>
						</div>
					</div>
				<div class="text-centre mt-5">
					<input type="submit" value="Check Out" class="btn btn-primary">
					<a href="./courses.php" class="btn btn-secondary">Cancel</a>
				</div>
			</form>
			</div>
		</div>
		
	</div>
</body>
</html>
<?php }

?>