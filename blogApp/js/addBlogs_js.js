function validateRecords(){

var flag = false;
	var title = document.getElementById('ptitle');
	var content = document.getElementById('pcontent');
	var url = document.getElementById('purl');
	var published = document.getElementById('ppublishedAt');
	//var category = document.getElementById('pcategory');
	var image = document.getElementById('pimage');
	var submit = document.getElementById('btnSubmit');
	//var update = document.getElementById('btnUpdate');
	var titleErr = contentErr = urlErr = publishedErr = categoryErr = imageErr ='';
	if (submit) {
		if (title.value != "") {
			if (content.value != "" ) {
				if (url.value != "" ) {
					if (published.value != "") {
						if (image.value != "") {
								flag = true;
							} else {
								imageErr = "Please choose a image";
							document.getElementById('imageErr').textContent = imageErr;
							}
					} else {

							publishedErr = "Please choose pubhlished date";
							document.getElementById('publishedErr').textContent = publishedErr;
					}
				 
				} else {
					urlErr = "Enter your url";
					document.getElementById('urlErr').textContent = urlErr;
				}
			} else {
				contentErr = "Please enter your content";
							document.getElementById('contentErr').textContent = contentErr;
			}
		} else {
			titleErr = "Please Enter your Title";
							document.getElementById('titleErr').textContent = titleErr;
		}
	}
	return flag;
}