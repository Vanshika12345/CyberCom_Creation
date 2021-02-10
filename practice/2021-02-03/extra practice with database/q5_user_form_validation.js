function validate(){
	var flag = false;
	var email = document.getElementById('email').value;
	var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
	var password = document.getElementById('password').value;
	var submit = document.getElementById('submit');
	var passwordErr = emailErr = '';
	if (submit) {
		if (email !== '' && !(atpos < 1 || ( dotpos - atpos < 2 ))) {
			if (password !== '') {
				flag = true;
			} else {
				passwordErr = 'Password is required';
				document.getElementById('passwordErr').textContent = passwordErr;
			} 
		} else {
				emailErr = 'Email is required';
				document.getElementById('emailErr').textContent = emailErr;	
		}
	}
return flag;
}