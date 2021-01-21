function loginNow(){

	var userEmail = document.getElementById('userLoginEmail').value;
	var userPassword = document.getElementById('userLoginPassword').value;
	var login = document.getElementById('btnlogin');
	
		var adminDetails = JSON.parse(localStorage.getItem('adminRegistrationDetails'));
		var userDetails = JSON.parse(localStorage.getItem('userLoginDetails'));
	var temp;
	if(login){
	if(adminDetails !== null){
			

            temp = adminDetails.name;

			if(userEmail === adminDetails.email ){
				if(userPassword === adminDetails.password){
				window.open('admin-dashboard.html'); //because of this session is not working
				//window.location.href = "/admin-dashboard.html";
				var loginTime = { username : temp,
					time : new Date().toLocaleTimeString()};
				sessionStorage.setItem("name", temp.name);
				sessionStorage.setItem('loginTime',JSON.stringify(loginTime));	
			}
				else{
					alert('Enter the correct password');
				}
			}
			
		}
		else{
			for(i in userDetails){
				temp = i.name;
				if(i.email === userEmail){
					if(userPassword === i.password){
				window.open('subUser-dashboard.html'); //because of this session is not working
				var loginTime = { username : temp,
					time : new Date().toLocaleTimeString()};
				sessionStorage.setItem("name", temp.name);
				sessionStorage.setItem('loginTime',JSON.stringify(loginTime));	
			}
			else{
					alert('Enter the correct password');
				}

				}
			}
		}
		
	}
	
}
	

function registerNow(){
	window.open('register.html');
}