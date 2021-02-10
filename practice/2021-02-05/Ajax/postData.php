<!DOCTYPE html>
<html>
<head>
	<title>Ajax: Posting Data</title>
</head>
<body>
	<script type="text/javascript">
		function update() {
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();

			} else {
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 &&xmlhttp.status == 200) {
					document.getElementById('insertDiv').innerHTML = xmlhttp.responseText;
				}
			}

			var parameter = 'insert='+document.getElementById('insert').value;
			xmlhttp.open('POST', 'update_include.php', true);
			//set a request header for sending the post data
			xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');	
			xmlhttp.send(parameter);
			
		}
	</script>
	
		Insert: <input type="text" id ='insert' name="insert"> 
		<input type="submit" onclick="update()">

		<div id='insertDiv'></div>
</body>
</html>