if(typeof(Storage) !== 'undefined'){
var userDetails = JSON.parse(localStorage.getItem('userDetails'));
		document.write('<table border = "1" id = "table1">');
		document.write('<tr>');
		document.write('<th>Name</th> <th>Email</th> <th>Date Of Birth</th> </tr> <tr>');

		for(var k = 0 ; k < userDetails.length; k++)
				{	
					document.write('<td>'+ userDetails[k].name + '</td>' );
					document.write('<td>'+ userDetails[k].emailId + '</td>' );
					document.write('<td>'+ userDetails[k].bod + '</td>' );
					document.write('</tr>');
				}
				document.write('</table>');	
}

