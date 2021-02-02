function validate(){
	var flag = false;
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var day = document.getElementById('day').value;
	var year = document.getElementById('year').value;
	var month = document.getElementById('month').value;
	var male = document.getElementById('male').checked;
	var female = document.getElementById('female').checked;
	var country = document.getElementById('country').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;	
	var password = document.getElementById('password').value;
	var confirm_password = document.getElementById('confirmpassword').value;		
	var accept = document.getElementById('accept').checked; 
	var submit = document.getElementById('submit');
	var firstNameErr = passwordErr = confirmpasswordErr = genderErr = lastNameErr = dobErr = countryErr = emailErr = phoneErr = acceptErr = ''; 

if (submit) {
	if (firstName !== '') {
		if (lastName !== '') {
			if (month !== '' || day !== '' || year !== '') {
				if (male || female) {
					if (country !== '') {
							if (email !== '') {
								if (phone !== '' && !isNaN(phone)) {
										if(password === confirm_password){ 
											if(password !== '' && confirm_password !== '') {
											if (accept) {
												flag = true;
												//console.log('Perfect');
											} else {
												acceptErr = 'Please accept the agreement';
												document.getElementById('acceptErr').textContent = acceptErr;
												}
										} else {
											passwordErr = 'Enter a valid Password ';
											document.getElementById('passwordErr').textContent = passwordErr;
										}
									} else {
										passwordErr = 'Both Password should be same';
											document.getElementById('passwordErr').textContent = passwordErr;
										}
									} else {
										phoneErr = 'Enter a valid phone';
											document.getElementById('phoneErr').textContent = phoneErr;
									}
									
								} else {
										emailErr = 'Please enter your email';
											document.getElementById('emailErr').textContent = emailErr;
									}
							} else {
									countryErr = 'Please choose your country';
									document.getElementById('countryErr').textContent = countryErr;
								}
						} else {
						genderErr = 'Please choose your gender';
						document.getElementById('genderErr').textContent =genderErr;
					}
			} else {
					dobErr = 'Please choose your birthdate';
					document.getElementById('dobErr').textContent = dobErr;
				}
		} else {
				lastNameErr = 'Please enter your lastname';
				document.getElementById('lastNameErr').textContent = lastNameErr;
			}
	} else {
			firstNameErr = 'Please enter your firstname';
			document.getElementById('firstNameErr').textContent = firstNameErr;

		}

		
}

return flag;
}

