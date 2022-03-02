//admin Login
function checkAdminLogin(){
	let adminLogemail = $("#adminLogemail").val();
	let adminLogpass = $("#adminLogpass").val();
	$.ajax({
		url:"Admin/admin.php",
		method: "POST",
		data:{
			checkLogEmail: 'checkLogEmail',
			adminLogemail: adminLogemail,
			adminLogpass: adminLogpass,
		},
		success:function(data){
			if(data == 0){
				$("#statusAdminLogMsg").html('<small class= alert-danger>Invaild Email or Password</small>');
			}
			else if(data == 1){
				$("#statusAdminLogMsg").html('<small class= alert-success> Login Success</small>');
				setTimeout(()=>{
					window.location.href="Admin/adminDashboard.php";
				}, 1000);

			}
		},
	});
};