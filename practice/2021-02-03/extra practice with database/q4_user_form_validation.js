function validate(){
	var flag = false;
	var name = document.getElementById('name').value;
	var email = document.getElementById('email').value;
	var atpos = email.indexOf("@");
    var dotpos = email.lastIndexOf(".");
    var subject = document.getElementById('subject').value;
	var message = document.getElementById('message').value;
	var send = document.getElementById('send');
	var nameErr = emailErr = subjectErr = messageErr = '';

	if (send) {
		if (name !== '') {
			if (email !== '' && !(atpos < 1 || ( dotpos - atpos < 2 ))) {
				if (subject !== '') {
					if (message !== '') {
						flag = true;
					} else {
						messageErr = 'Message field is required';
						document.getElementById('messageErr').textContent = messageErr
					}
				} else {
					subjectErr = 'Subject is required';
					document.getElementById('subjectErr').textContent = subjectErr;
				}
			} else {
				emailErr = 'E-mail is required';
				document.getElementById('emailErr').textContent = emailErr;
			}
		} else {
			nameErr = 'Name is required';
			document.getElementById('nameErr').textContent = nameErr;
		}
	}
return flag;
}