function validate(){
var flag = false;	
 var name = document.getElementById('username').value;
 var address = document.getElementById('address').value;
var age = document.getElementById('age').value;
var password = document.getElementById('userpassword').value;
var fileupload = document.getElementById('fileupload').value;
var male = document.getElementById('male').checked;
var female = document.getElementById('female').checked;
var hockey = document.getElementById('hockey').checked;
var volleyball = document.getElementById('volleyball').checked;
var cricket = document.getElementById('cricket').checked;
var badminton = document.getElementById('badminton').checked;
var football = document.getElementById('football').checked;
var submit = document.getElementById('submit');
var nameErr = passwordErr = addressErr = gameErr = genderErr = ageErr = fileErr = '';
if(submit){ 
if (name !== '') {
	if(password !== ''){
		if (address !== '') {
			if (hockey || volleyball || cricket || badminton || football) {
				if (male || female) {
					if (age !== "Age") {
						if (fileupload !== "") {
							flag = true;
							//console.log("Details submitted");
						} else {
							fileErr = 'Choose a file';
							document.getElementById('fileErr').textContent = fileErr;
						//	alert(fileErr);
						}
					} else {
						ageErr = 'Please select the age';
						document.getElementById('ageErr').textContent = ageErr;
					//	alert(ageErr);	
					}
				} else {
					genderErr = 'Choose the gender';
					document.getElementById('genderErr').textContent = genderErr;
							//alert(genderErr);
				}
			} else {
				gameErr = 'Choose atleast one game';
				document.getElementById('gameErr').textContent = gameErr;
						//alert(gameErr);
				}
		} else {
			addressErr = 'Enter the address ';
			document.getElementById('addressErr').textContent = addressErr;
			//alert(addressErr);
		}
	} else{
		passwordErr = 'Enter the password';
		document.getElementById('passwordErr').textContent = passwordErr;
		//alert(passwordErr);	
	}
} else{
	nameErr = 'Enter the name';
	document.getElementById('nameErr').textContent = nameErr;
	//alert(nameErr);
}
}
return flag;
}
 

/*
var game = document.getElementByName('hockey');
var count = 0;

for($i =0; $i<game.length; i++){
	if(game.item(i) == false){
		count++;
	}
	if(count === game.length()){
		alert();
	}
}
*/