<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	include('./admininclude/header.php');
	include("../dbConnection.php");

	// following files need to be included
	require_once("../paytm/lib/config_paytm.php");
	require_once("../paytm/lib/encdec_paytm.php");

	$ORDER_ID = "";
	$requestParamList = array();
	$responseParamList = array();

	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

		// In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
		$ORDER_ID = $_POST["ORDER_ID"];

		// Create an array having all required parameters for status query.
		$requestParamList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);  
		
		$StatusCheckSum = getChecksumFromArray($requestParamList,PAYTM_MERCHANT_KEY);
		
		$requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

		// Call the PG's getTxnStatusNew() function for verifying the transaction status.
		$responseParamList = getTxnStatusNew($requestParamList);
	}

?>
<div class="container" style="position: absolute;" >
<h2 class="text-center my-4">Payment Status</h2>
	<form method="post" action="">
		<div class="form-group row">
			<label class="offset-sm-3 col-form-control" style="text-align: left;">Order ID :</label>
			<div>
				<input style="position: absolute; right: 570px; " id="ORDER_ID" tabindex="1" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
			</div>
			<div>
				<input class="btn btn-primary" value="View" type="submit" style="margin-left: 250px; margin-top: 40px;">
				
			</div>
		</div>	
  </form>	 
</div>
  <?php
   if (isset($responseParamList) && count($responseParamList)>0 )
	{ 
	?>
	<div class=" justify-content-center" style="position:absolute; top: 250px; left: 150px;">
		<div class="col-auto">
			<h2 class="text-center">Payment Receipt</h2>
			<table class="table table-bordered">
				<tbody>
					<?php
						foreach($responseParamList as $paramName => $paramValue) {
					?>
					<tr>
						<td><label><?php echo $paramName?></label></td>
						<td><?php echo $paramValue?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<?php
	}
	?>
	<tr>
		<td><button type="button" class="btn btn-primary" onclick="javascript:window.print();" style="margin-top: 400px;">Print</button></td>
	</tr>


<?php 
	include('./admininclude/footer.php'); 
?>