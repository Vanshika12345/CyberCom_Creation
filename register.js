function registerNow(){

	var adname = document.getElementById('adminRegisterName').value;
	var ademail = document.getElementById('adminRegisterEmail').value;
	var adpassword = document.getElementById('adminRegisterPassword').value;				
	var adconfirmPassword = document.getElementById('adminRegisterConfirmPassword').value;
	var adcity = document.getElementById('adminCity').value;
	var adstate = document.getElementById('adminState').value;
	var adBod = document.getElementById('adminDob').value;
	var checkBoxTicked = document.getElementById('termsAndConditions');
	var register = document.getElementById('btnRegister');
		if(register){
		if(adpassword === adconfirmPassword){
			if(localStorage.getItem('adminRegistrationDetails')){
				//document.getElementById('btnRegister').style.display ='none';
				alert('Admin already registered');
				window.open ("login.html");
			}
			else{
				
				var adminDetails = {
					name : adname,
					email : ademail,
					bod : adBod,
					password : adpassword,
					city : adcity,
					state : adstate
				};
				var adminLogin = {
					name : adname,
					email : ademail,
					bod : adBod,
					password : adpassword
				};
				
				localStorage.setItem('adminRegistrationDetails',JSON.stringify(adminDetails));
				localStorage.setItem('userLoginDetails',JSON.stringify(adminLogin));
				window.open("login.html");

			}
		}
		else{
			alert("Both password should be same");
		}}
}