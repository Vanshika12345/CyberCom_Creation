var john = {
	fullName: 'John Smith',
	mass: 50,
	height: 1.75,
	calBmi: function(){
		return this.mass/(this.height^2);
	}
};
var mark = {
	fullName: 'John Smith',
	mass: 60,
	height: 1.67,
	calBmi: function(){
		return this.mass/(this.height^2);
	}
};
console.log(john.calBmi());
console.log(mark.calBmi());

var johnBmi = john.calBmi();
var markBmi = mark.calBmi();
if(johnBmi > markBmi){
	console.log(john.fullName+' has the highest BMI '+johnBmi);
}

else if(johnBmi === markBmi){
	console.log(mark.fullName+' and'+john.fullName+' have the same BMI ');
}
else{
	console.log(mark.fullName+' has the highest BMI '+markBmi);
}