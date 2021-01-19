var names = [];
names[0] = 'Agarwal';
names[1] = 'Vanshika';
localStorage.setItem("names", JSON.stringify(names));
//localStorage.setItem("names", JSON.stringify(['Agarwal','Vanshika']));
//localStorage.setItem("names", JSON.parse(names)); error
var storedNames = JSON.parse(localStorage.getItem("names"));