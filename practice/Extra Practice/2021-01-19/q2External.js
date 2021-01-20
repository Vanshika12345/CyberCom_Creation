//2 storing and fething an array of objects using local storage

var vanshika = {
	name:'Vanshika',
	age:22,
	email:'vanshikaagr544@gmail.com',
	phoneNo:9249198765
};
var anjali = {
	name:'Anjali',
	age:23,
	email:'sharmaanjali44@gmail.com',
	phoneNo:9249198657
};

 
 var objArray = [vanshika,anjali];
 if(typeof(Storage) !== 'undefined'){
 	localStorage.setItem('arrayOfObjects',JSON.stringify(objArray)); //converting object array into key value pair
 }
 
 var arr = JSON.parse(localStorage.getItem('arrayOfObjects')); 
 console.table(arr); 
 //or
 var table = "<table border = '2px'>";
 table += "<caption>Array Of Objects</caption>";
 table += "<tr>";
 table += "<th> Name </th>";
 table += "<th> Age </th>";
 table += "<th> Email </th>";
 table += "<th> Phone No </th>";
 table += "</tr>";
 for(var i = 0;i < arr.length; i++){
 	table += "<tr>";
 	table += "<td>" + arr[i].name + "</td>";
 	table += "<td>" + arr[i].age + "</td>";
 	table += "<td>" + arr[i].email + "</td>";
 	table += "<td>" + arr[i].phoneNo + "</td>";
 	table += "</tr>";
 }
table += "</table>";
document.getElementById('table').innerHTML = table;
