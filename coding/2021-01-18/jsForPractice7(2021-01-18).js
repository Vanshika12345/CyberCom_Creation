function validate()
{
	var firstName = document.getElementById('userFirstName').value;
    var lastName = document.getElementById('userLastName').value;
    var street = document.getElementById('userStreet').value;
    var city = document.getElementById('userCity').value;
    var bio = document.getElementById('userBio').value;
    var image = document.getElementById('uploadImage').value;
    var age = document.getElementById('userAge').value;
    var car = document.getElementById('userFavCar').value;
    var submit = document.getElementById('btnSubmit');
    if(submit){
    	console.log('Done');
	if((firstName !== '') && (lastName !== '') && (street !== '') && (city !== '') && (bio !== '') && (image !== '') && (age !== '') && (car !== ''))
	{	//alert('Done');
		alert(Done);
		window.open("success.html");
	}
	else{
			alert("Please fill all the details");
	}
	}

}