<!DOCTYPE html>
<html>
<head>
	<title>Ajax: Listing File Content</title>
</head>
<body>
	<script type="text/javascript">
		function load(divname,filename) {
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();

			} else {
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 &&xmlhttp.status == 200) {
					document.getElementById(divname).innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open('GET', filename, true);	
			xmlhttp.send();

		}
	</script>
	<!--	<input type="submit" onclick="load()">-->
		<input type="submit" onclick="load('mDiv','fileContent.php')">
		<div id="mDiv"></div>
	
</body>
</html>