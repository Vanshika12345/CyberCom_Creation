$(document).ready(function() {
	readRecords(); 
	
});


function readRecords() {
	var blogrecords = 'blogrecords';
	$.ajax({
		url:'lib/connection.php',
		type: 'post',
		data: {blogrecords:blogrecords},
		success: function (data) {
			$('#datatable').html(data);
		}
	});
}


function deleteUser(blogdeleteid) {
	console.log('Delete');
	var conf = confirm('Are you sure?');
	if (conf==true) {
		$.ajax({
			url: 'lib/connection.php',
			type: 'post',
			data: {blogdeleteid:blogdeleteid},
			success: function(data,status) {
				readRecords();
			}

		});
	}
}


