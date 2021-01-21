function addUsers(){
	var userDetails =[];
	var uname = document.getElementById('userName').value;
	var uemail = document.getElementById('userEmail').value;
	var upassword = document.getElementById('userPassword').value;
	var dob = new Date(document.getElementById('userDob').value);
	var add = document.getElementById('addUser');
	var udob = dob.getDate()+'/'+dob.getMonth()+'/'+dob.getFullYear();
	if(add){
		var userdetails = {
					name : uname,
					email : uemail,
					password : upassword,
					dateofbirth : udob
				};
		if(localStorage.getItem('userLoginDetails'))
	{
		userDetails = JSON.parse(localStorage.getItem('userLoginDetails'));
	}
		userDetails.push(userdetails);
		localStorage.setItem('userLoginDetails',JSON.stringify(userDetails));
		
	 	
	}
		
				
				
	}
	
var details = JSON.parse(localStorage.getItem('userLoginDetails'));
if(details === null){}
else{
	var today = new Date();
	var date = today.getFullYear();
 var table = "<table border = '1px'>";
 table += "<tr>";
 table += "<th> Name </th>";
 table += "<th> Email </th>";
 table += "<th> Password </th>";
 table += "<th> Date of Birth </th>";
 table += "<th> Age </th>";
 table += "</tr>";
		for(var i = 0; i < details.length; i++){
			var userDate = (details[i].dateofbirth.substring(details[i].dateofbirth.lastIndexOf('/')+1));
 			var age =  date - userDate;
 			table += "</tr>";
 			table += "<tr>";
 			table += "<td>" + details[i].name + "</td>";
 			table += "<td>" + details[i].email + "</td>";
 			table += "<td>" + details[i].password + "</td>";
 			table += "<td>" + details[i].dateofbirth + "</td>" + "<td>" + age + "</td>";
 			}

table += "</tr>";
table += "</table>";
document.getElementById('displayTable').innerHTML = table;
console.log(date);
}
		
	