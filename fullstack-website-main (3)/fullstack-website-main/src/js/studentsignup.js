$(document).ready(function(){
	// checking if email is already exists
	$("#stuemail").on("keypress  blur", function(){
		let reg =/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		let stuemail = $("#stuemail").val();
		$.ajax({
			url: 'student/addstudent.php',
			method:'POST',
			data:{
				checkemail: "checkemail",
				stuemail: stuemail,
			},
			success:function(data){
				if(data != 0){
					$("#statusMsg2").html('<small style="color:red;"> Email Already Exists </small>');
					$("#signup").attr("disabled", true);
				}
				else if(data == 0 && reg.test(stuemail)){
					$("#statusMsg2").html('<small style="color:green;"> There you go! </small>');
					$("#signup").attr("disabled", false);
				}
				else if(!reg.test(stuemail)){
					$("#statusMsg2").html('<small style="color:red;"> Please enter Vaild email e.g example@email.com</small>');
					$("#signup").attr("disabled", false);
				}

			},
				
		});
	});
});







function addStu() {
	let reg =/^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
	let stuname = $("#stuname").val();
	let stuemail = $("#stuemail").val();
	let stupass = $("#stupass").val();
	// checking form fileds on form submission
	if (stuname.trim() == "") {
		$("#statusMsg1").html('<small style="color:red;"> Please enter Name</small>');
		$("stuname").focus();
		return false;
	}
	else if (stuemail.trim() == "") {
		$("#statusMsg2").html('<small style="color:red;"> Please enter Email</small>');
		$("stuemail").focus();
		return false;
	}
	else if (stuemail.trim() != "" && !reg.test(stuemail)){
		$("#statusMsg2").html('<small style="color:red;"> Please enter Vaild email e.g example@email.com</small>');
		$("stuemail").focus();
		return false;
	}

	else if (stupass.trim() == "") {
		$("#statusMsg3").html('<small style="color:red;"> Please enter password</small>');
		$("stupass").focus();
		return false;
	}

	else {
		$.ajax({
			url:'student/addstudent.php',
			method: 'POST',
			dataType: "json",
			data:{
				stusignup: "stusignup",
				stuname: stuname,
				stuemail: stuemail,
				stupass: stupass,
			},
			success:function(data){
				console.log(data)
				if (data == "ok"){
					$('#successMsg').html("<span class='alert-success'> Registration Successful !</span>");
					clearStuRegFelid()
				}

				else if (data == "failed"){
					$('#successMsg').html("<span class='alert-danger'> Registration 	Unsuccessful !</span>");
				}
			},
		});
	}
}

// emptying form 
function clearStuRegFelid(){
	$("#stuRegForm").trigger("reset");
	$("#statusMsg1").html(" ");
	$("#statusMsg1").html(" ");
	$("#statusMsg1").html(" ");

}

// Studet Login
function checkStuLogin(){
	let stuLogEmail = $("#stuLogemail").val();
	let stuLogPass = $("#stuLogpass").val();
	$.ajax({
		url:'student/addstudent.php',
		method: 'POST',
		data:{
			checkLogEmail: 'checkLogEmail',
			stuLogEmail: stuLogEmail,
			stuLogPass: stuLogPass,
		},
		success:function(data){
			if(data == 0){
				$("#statusLogMsg").html('<small class= alert-danger>Invaild Email or Password</small>');
			}
			else if(data == 1){
				$("#statusLogMsg").html('<div class ="spinner-border text-success" role = "status"></div>');
				setTimeout(()=>{
					window.location.href="index.php";
				}, 1000);

			}
		},
	});
};

