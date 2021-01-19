if (typeof(Storage) !== "undefined") {
  // Store
  try{
  sessionStorage.setItem("lastname", "Agarwal");
  // Retrieve
  document.getElementById("r").innerHTML = sessionStorage.getItem("lastname");
}catch(e){
  alert("Access Denied");
}}  
else {
  document.getElementById("r").innerHTML = "Sorry, your browser does not support this functionality...";
}



