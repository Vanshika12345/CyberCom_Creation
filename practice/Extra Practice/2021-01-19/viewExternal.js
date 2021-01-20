if(typeof(Storage) !== 'undefined'){
var userName = localStorage.getItem('usrName');
var userEmail = localStorage.getItem('usrEmail');
var userDob = localStorage.getItem('usrDob');
document.getElementById('userName').textContent = userName;
document.getElementById('userEmail').textContent = userEmail;
document.getElementById('userDob').textContent = userDob;
}

