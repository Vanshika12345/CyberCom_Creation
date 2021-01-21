function loginNow(){

	var userEmail = document.getElementById('userLoginEmail').value;
	var userPassword = document.getElementById('userLoginPassword').value;
	var login = document.getElementById('btnlogin');
	if(login){
		var adminDetails = JSON.parse(localStorage.getItem('adminRegistrationDetails'));
	if(adminDetails !== null){
			

            temp = adminDetails.name;

			if(userEmail === adminDetails.email ){
				if(userPassword === adminDetails.password){
				window.open('admin-dashboard.html'); //because of this session is not working
				//window.location.href = "/admin-dashboard.html";
				sessionStorage.setItem("name", temp.name);	
			}
				else{
					alert('Enter the correct password');
				}
			}
			
		}
		else{
				alert('Please register First');
				window.open('register.html');}
	}
	
}
	

function registerNow(){
	window.open('register.html');
}