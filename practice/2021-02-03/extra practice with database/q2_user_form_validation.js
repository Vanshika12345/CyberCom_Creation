function validate(){
	var flag = false;
	var firstname = document.getElementById('firstname').value;
	var password = document.getElementById('password').value;
	var male = document.getElementById('male').checked;
	var female = document.getElementById('female').checked;
	var address = document.getElementById('address').value;
	var day = document.getElementById('day').value;
	var year = document.getElementById('year').value;
	var month = document.getElementById('month').value;
	var hockey = document.getElementById('hockey').checked;	
	var volleyball = document.getElementById('volleyball').checked;
	var cricket = document.getElementById('cricket').checked;
	var badminton = document.getElementById('badminton').checked;
	var football = document.getElementById('football').checked;
	var married = document.getElementById('married').checked;
	var unmarried = document.getElementById('unmarried').checked;
	var accept = document.getElementById('accept').checked; 
	var submit = document.getElementById('submit');
	var nameErr = passwordErr = genderErr = addressErr = dobErr = gameErr = statusErr = acceptErr = ''; 

if (submit) {
	if (firstname !== '') {
		if (password !== '') {
			if (male || female) {
				if (address !== '') {
					if (month !== 'month' || day !== 'day' || year !== 'year') {
							if (hockey || volleyball || cricket || badminton || football) {
								if (married || unmarried) {
									if (accept) {
										flag = true;
										//console.log('Perfect');
									} else {
											acceptErr = 'Please accept the agreement';
											document.getElementById('acceptErr').textContent = acceptErr;
									}
								} else {
										statusErr = 'Please choose the marital status';
											document.getElementById('statusErr').textContent = statusErr;
									}
							} else {
									gameErr = 'Please choose atleast one game';
									document.getElementById('gameErr').textContent = gameErr;
								}
						} else {
						dobErr = 'Please choose the birth date';
						document.getElementById('dobErr').textContent =dobErr;
					}
			} else {
					addressErr = 'Please enter your address';
					document.getElementById('addressErr').textContent = addressErr;
				}
		} else {
				genderErr = 'Please choose your gender';
				document.getElementById('genderErr').textContent = genderErr;
			}
	} else {
			passwordErr = 'Please enter the password';
			document.getElementById('passwordErr').textContent = passwordErr;
		}
} else {
		nameErr = 'Please enter your name';
		document.getElementById('nameErr').textContent = nameErr;
	}
}

return flag;
}