function registerNow(){

	var adname = document.getElementById('adminRegisterName').value;
	var ademail = document.getElementById('adminRegisterEmail').value;
	var adpassword = document.getElementById('adminRegisterPassword').value;				
	var adconfirmPassword = document.getElementById('adminRegisterConfirmPassword').value;
	var adcity = document.getElementById('adminCity').value;
	var adstate = document.getElementById('adminState').value;
	var checkBoxTicked = document.getElementById('termsAndConditions');
	var register = document.getElementById('btnRegister');
		if(register){
		if(adpassword === adconfirmPassword){
			console.log('yes');
			if(localStorage.getItem('registrationDetails')){
				//document.getElementById('btnRegister').style.display ='none';
				alert('Admin already registered');
				window.open ("login.html");
			}
			else{
				
				var adminDetails = {
					name : adname,
					email : ademail,
					password : adpassword,
					city : adcity,
					state : adstate
				};

				localStorage.setItem('registrationDetails',JSON.stringify(adminDetails));
				window.open("login.html");

			}
		}
		else{
			console.log('No');
			alert("Both password should be same");
		}}
}