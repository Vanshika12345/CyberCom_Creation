//4 Storing the value from form into an array as an object 

function setData(){
	var userDetails = [];
var submit = document.getElementById('btnSubmit');
	if(submit)
	{
		var usrname = document.getElementById('userName').value;
		var uremail = document.getElementById('userEmail').value;
		var usrdateOfBirth = document.getElementById('userDob').value;
		var userdetails = {
				name : usrname,
				emailId : uremail,
				bod : usrdateOfBirth
			};
	if(localStorage.getItem('userDetails'))
	{
		userDetails = JSON.parse(localStorage.getItem('userDetails'));
	}
		userDetails.push(userdetails);
		localStorage.setItem('userDetails',JSON.stringify(userDetails));
	 	
	}
	
	window.open('view.html');
};

