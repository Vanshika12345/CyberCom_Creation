$(document).ready(function() {
	readRecords(); 
	
});


function readRecords() {
	var categoryrecords = 'categoryrecords';
	$.ajax({
		url:'lib/connection.php',
		type: 'post',
		data: {categoryrecords:categoryrecords},
		success: function (data) {
			$('#datatable').html(data);
		}
	});
}


function deleteUser(categorydeleteid) {
	console.log('Delete');
	var conf = confirm('Are you sure?');
	if (conf==true) {
		$.ajax({
			url: 'lib/connection.php',
			type: 'post',
			data: {categorydeleteid:categorydeleteid},
			success: function(data,status) {
				readRecords();
			}

		});
	}
}


