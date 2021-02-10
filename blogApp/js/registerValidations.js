function validate() {
	var flag = false;
	var prefix =  document.getElementById('prefix').value;
	var fname = document.getElementById('firstName');
	var lname =document.getElementById('lastName');
	var email = document.getElementById('email');
	var atpos = (email.value).indexOf("@");
    var dotpos = (email.value).lastIndexOf(".");
	var mobile = document.getElementById('mobileNumber');
	var info = document.getElementById('information');
	var accept = document.getElementById('accept');
	var submit = document.getElementById('btn-submit');
	var password = document.getElementById('password');
	var confirmPassword = document.getElementById('confirmPassword');
	var firstNameErr = lastNameErr = emailErr = mobileErr = infoErr = acceptErr = passwordErr = confirmPErr = "";

	if (submit) { 
		if (fname.value != '') {
			if(lname.value != '') {
				if (email.value != '' && !(atpos < 1 || ( dotpos - atpos < 2 ))) {
					if (mobile.value != '' && ((mobile.value).length) == 10) {
						if (password.value != '') {
							if (confirmPassword.value != ''){
								if (password.value == confirmPassword.value) {
									if (information.value != '') {
										if (accept.checked == true) {
										flag = true;
									} else {

									acceptErr = 'Please Accept the Terms & Conditions';
									document.getElementById('acceptErr').textContent = acceptErr;}
								} else {
										infoErr = 'Please Enter Your information';
									document.getElementById('infoErr').textContent = infoErr;
								}
									
								} else {
										confirmPErr = 'Both Password Should be same';
									document.getElementById('confirmPErr').textContent = confirmPErr;

								}
							} else {

			confirmPErr = 'Please Re-enter Your Password';
			document.getElementById('confirmPErr').textContent = confirmPErr;

							}
						} else {
							passwordErr = 'Please Enter Your Password';
			document.getElementById('passwordErr').textContent = passwordErr;

						}
						} else {
								mobileErr = 'Please Enter Your Mobile Number';
			document.getElementById('mobileErr').textContent = mobileErr;

						}
					} else {
	emailErr = 'Please Enter Your Email';
			document.getElementById('emailErr').textContent = emailErr;
					}
				} else {

lastNameErr = 'Please Enter Your Last Name';
			document.getElementById('lastNameErr').textContent = lastNameErr;
				}
			} else {
				firstNameErr = 'Please Enter Your First Name';
			document.getElementById('firstNameErr').textContent = firstNameErr;	
			}
			

		}

return flag;

}