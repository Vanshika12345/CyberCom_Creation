function loginNow(){

	var userEmail = document.getElementById('userLoginEmail').value;
	var userPassword = document.getElementById('userLoginPassword').value;
	var login = document.getElementById('btnlogin');
	if(login){
	if(localStorage.getItem('adminRegistrationDetails')){
	var userDetails = JSON.parse(localStorage.getItem('adminRegistrationDetails'));
			if(userEmail === userDetails.email ){
				if(userPassword === userDetails.password){
				window.open('admin-dashboard.html');	
			}
				else{
					alert('Enter the correct password');
				}
			}
			else if(localStorage.getItem('userLoginDetails'))
			{
					var userDetails = JSON.parse(localStorage.getItem('userLoginDetails'));
					for(var i=0 ; i<userDetails.length();i++){
						if(userEmail === userDetails.email){
							if(userPassword === userDetails.password){
								window.open('User-dashboard.html');	
									var sessionDetails = {
										name : userDetails.name,
										loginTime : new Date()
									};
									sessionStorage.setItem('userSessionDetails',JSON.stringify(sessionDetails));
							}
							else{
							alert('Enter the correct password');
				
							}}
							
						
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