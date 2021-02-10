function validate() {
	var flag = false;
	var email =  document.getElementById('email');
	var password = document.getElementById('password');
	var submit = document.getElementById('btn-register');
	var passwordErr = emailErr = '';
	if (submit) {
		if (email.value != '') {
			if (password.value != '') {
				flag = true;
			} else {
					passwordErr = 'Please Enter Your Password';
			document.getElementById('passwordErr').textContent = passwordErr;
				}
		} else {
	emailErr = 'Please Enter Your Email';
			document.getElementById('emailErr').textContent = emailErr;
				}
	}
	
return flag;
}