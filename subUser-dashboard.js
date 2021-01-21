var userdetails = JSON.parse(localStorage.getItem('userLoginDetails'));
	for(var i = 0; i < userdetails.length; i++){
			var userDate = (userdetails[i].dateofbirth.substring(userdetails[i].dateofbirth.indexOf('/')+1));
 				var today = new Date();
	var date = today.getDate();
				if(date === userDate){
				document.getElementById('displayMessage').innerHTML = 'Happy Birthday';
				}
				
 			}
