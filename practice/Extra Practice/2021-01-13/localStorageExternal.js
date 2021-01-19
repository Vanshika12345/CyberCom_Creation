
if (typeof(Storage) !== "undefined") {
  // Store
 try{
  localStorage.setItem("firstname", "Vanshika");
  // Retrieve
  document.getElementById("r").innerHTML = localStorage.getItem("firstname");
}catch(e){
  alert("Access Denied");
}} 
else {
  document.getElementById("r").innerHTML = "Sorry, your browser does not support this funtionality...";
}




