<!DOCTYPE html>
<html>
<head>
	<title>Ajax: Auto Suggest</title>
</head>
<script type="text/javascript">
	function findMatch(){
	if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();

			} else {
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}

			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 &&xmlhttp.status == 200) {
					document.getElementById('result').innerHTML = xmlhttp.responseText;
				}
			}

			xmlhttp.open('GET', 'search_include.php?keyword='+document.search.keyword.value, true);	
			xmlhttp.send();
	}
</script>
<body>
	<form id="search" name="search">
		Type a name <input type="text" name="keyword" onkeyup="findMatch()">
	</form>

	<div id="result"></div>
</body>
</html>