/* **************** Basic Program **********/
console.log("Hello World");

/***************** Variables And Datatypes *********/
	var intValue = 10;
	console.log("Integer Value "+intValue);
	var boolValue = true;
	console.log("Boolean Value "+boolValue);
	var stringValue = 'Vanshika';
	console.log("String Value "+stringValue);
	var undefinedVar;
	console.log("Undefined Variable "+undefinedVar);

/*********** Variable Mutuation And Type coercion ***************/
var no = 1;
 console.log("Value of no is "+no+" type of no is "+typeof(no));
no = "1";
	console.log("Value of no is "+no+" type of no is "+typeof(no));

/************** Operators in JavaScript ***********************/

//Math Operators
	var a = 10;
	var b = 20;
	console.log("Addition of "+a+" "+b+" is "+(a+b));	
	console.log("Subtraction of "+a+" "+b+" is "+(b-a));
	console.log("Multiplication of "+a+" "+b+" is "+(a*b));
	console.log("Division of "+a+" "+b+" is "+(b/a));

//Logical operators
	var c = a>b;
	console.log(c);


//typeof operator - type of variable(data type)
	console.log(typeof(a));
	console.log(typeof(d));
	e = 50;
	console.log(typeof(e));
//Operator precedence
	var isZero = b-(a + e); //-40 = first + then -
	console.log(isZero);
		
//Grouping () has the highest precedence
	var ageA = 35;
	var ageB = 29;

	var average = (ageB+ageA)/2;
	console.log(average); 

// Multiple assignments

	var x,y;
	x = (3+5)*4-6; // 8*4-6 //32-6 //26
	x= y = (3+5)*4-6;
	console.log(x,y);

/******************* Conditional and Logical Operators ****************/

 var pAge = 12;

//AND operators
 	if(pAge <13){
 		console.log("Boy");
 	}
 	else if( pAge > 13 && pAge <20)
 	{
 		console.log("Teen");
 	}
 	else{
 		console.log("Adult");
 	}

 //OR operator

 	var a = 12;
 	var b = "11";

 	if( a== b || a === b){
 		console.log("Both equal "+a+" "+b);
 	}
 	else{
 		console.log("Both different");
 	}

 //NOT operator
 	pAge = 21;
 	if (!pAge <13){
 		console.log("Boy");
 	}
 	else{
 		console.log("Young");
 	}

//Switch Case Statement
	var firstName = 'Jeremy';
	var job = 'faculty';
	switch(job){
		case 'designer':
			console.log(firstName+" is a designer");
			break;
		case 'faculty':
			console.log(firstName+' is a faculty');
			break;
		default:
			console.log(firstName+' is a business man');		
	}
//Ternary Operator
	var isFaculty = job =='faculty'? firstName+' teaches in school': firstName+' is a business man';
	console.log(isFaculty); 

/************* Truthy and Falsy Values *******************/

var a1 = 0;
if(a1){
	console.log('Value is greater than 0');
}
else{
	console.log('Value is zero');
}

var z;
if(z){
	console.log('Value is defined');
}
else{
	console.log('Value is not defined');
}

var b1 = 1;
if(b1){
	console.log('Value is greater than 0');
}
else{
	console.log('Value is zero');
}


/*********************** Equality Operator **********************/

a1 = 1;
b1 = '1';
if(a1 == b1){
	console.log('Values are same');
}
else{
	console.log('Values are not same');
}

if(a1 === b1){
	console.log('type of values are same');
}
else{
console.log('type of values are not same');}

/********************** Functions ****************************/

//function declarations
	function addition(a,b){
		return a+b;
	}	

	var c1 = addition(10,12);
	console.log("Addition : "+c1);

//function expression

	var myFunc = function(a,b){
		return a+b;
	}

	console.log(myFunc(10,12));

/************************ Arrays ***************************/

var array = (1,2,3);
//declaring using new keyword wen can assigned index greater than arrayslength bt not allowed in simple array declaration
	var new_array = new Array("Vanshika",3,2);

console.log(array);

//doesn't creates error bt doesnot pushes the value
	array[3] ="3rd"; 

	console.log(array[3]); //gives undefined

console.log(new_array);	
//adding element at the index which is more than length of array
	new_array[3] = "3rd";
	console.log(new_array);	

//pushs at the end
	new_array.push(4); 
	console.log(new_array);	

//removes from the end
	new_array.pop(); 
	console.log(new_array);

//pushes at the starting index	
	new_array.unshift(1);
	console.log(new_array);

//removes from the first position
	new_array.shift();
	console.log(new_array.length);


/**************** Hoisting **********************/

//before actually declaring the function we are calling the function
//Using function declaration
	calculateAge(1999); //works
	function calculateAge(year)
	{
		console.log(2016-year);
	}
//Using Function expression
	//retirement(1999); //causes error
 	var retirement = function(year){
 		console.log(65 - (2016-year));
 	} 
 	retirement(1999);

//variables
	console.log(age); //undefined
	var age = 22; //declared in VO of global context
	console.log(age); //22

	function myFunction(){
		console.log(age);
		var age = 25; // declared in variable object of new execution context of myFunction
		console.log(age);
	}	

	myFunction(); //so after the execution of function completes the context is removed and value of age outside the function is 22
	console.log(age);

/**************** Scope **********************/

var a = 'Hello'; //Global Scope
first(); //Global Scope

function first(){
	var e = 'Hi!';//starts the first() scope
	second();

	function second(){
		var f = 'Hey'; //starts the second() scope
		//console.log(a+b+c);
		third();
	} 
}

function third(){
	var d = 'John';
	//console.log(a+e+f+d); //won't allow to access e and f
	console.log(a+d); //allows

}

/***************** The this Variable *************************/

/*ageCalculator(1999);

function ageCalculator(year){
	console.log(2016 - year);
	console.log(this);
}*/

var john = {
	name: 'John',
	yearOfBirth: 1990,
	calculateAge: function(){
		console.log(this);
		console.log(2016 - this.yearOfBirth);
	}
};

john.calculateAge(); //returns details of john

var mike = {

	name: 'Mike',
	yearOfBirth: 1999
};

mike.calculateAge = john.calculateAge;
mike.calculateAge(); //returns details of mike

/*************** Object And Properties ********************/
//declaring a object using object literal{}
	var john = {
		firstName: 'John',
		lastName: 'Doe',
		yearOfBirth: 1990,
		family:['Jane','Mark','Emily'],
		job:'Faculty',
		isMarried: false
	};
// using new Keyword
	var jane = new Object();
	jane.name = 'Jane';
	jane.lastName = 'Gilbert';
	jane['yearOfBirth'] = 1999;	

	console.log(john);
	console.log(jane);
//Accesing property using dot(.) notation	
	console.log(john.firstName);
	console.log(john.family[1]);
	console.log(jane.name);

//Accesing property using index or keyname	
		console.log(john['lastName']);
		console.log(jane['name']);

//Accesing property using variable	
	var birth = 'yearOfBirth';
	console.log(john[birth]);

//Mutuate object property
	john.lastName = 'Smith';
	console.log(john['lastName']);
	
/**************** Object and Methods *****************/

var john = {
	name: 'John',
	yearOfBirth: 1990,
	calculateAge: function(year){
		this.age = year - this.yearOfBirth; // adding a property age to object john direclty from the function in object
	}
};

john.calculateAge(2016); //by passing the year calculating age

//john.age = john.calculateAge(2016); //adding a property age to object john using the output of function in object
console.log(john);

/************************ Loops *********************/
//for loop
	var john = ['John','Doe',1999,'Faculty',false];
	console.log("** For loop ****");
	for (var i = 0; i < john.length; i++){
		console.log(john[i]);
	}
//while loop
	console.log("**** while loop *****");
	var i = 0;
	while(i < john.length){
		console.log(john[i]);
		i++;
	}
//continue statement
	console.log("**** continue *****");
	for (var i = 0; i < john.length; i++){

		if(typeof john[i] !== 'string')
			{ continue; }
			else
				{ console.log(john[i]);}
		}

		console.log("**** break *****");
//break statement
	for (var i = 0; i < john.length; i++){
		if(typeof john[i] !== 'string')
			{ break; }
			else
				{ console.log(john[i]);}
		}
//looping backwards	
	
	for (var i = john.length-1; i >= 0 ; i--){
		console.log(john[i]);
	}
	
//do while loop
	
	var i = 0;
	do{
		console.log(john[i]);
		i++;
	}while(i < john.length);

/****************** Objects And Functions *******************/


/* 	var john = {
	name: 'John',
	yearOfBirth: 1990,
	job: 'Faculty'
	
};*/
console.log('******* Objects ********');
//Function constructor name always start from capital letter
	var Person = function(name,yearOfBirth,job){
		this.name = name;
		this.yearOfBirth = yearOfBirth;
		this.job = job;
	};
	// creating protoype property for constructor Person 
	Person.prototype.calculatesAge = function(){
			console.log(2016 - this.yearOfBirth);
		};
	// creating prototype
	Person.prototype.college = 'GLS';	
	var john = new Person('John',1990,'Faculty'); //instantiation of object
	console.log(john.yearOfBirth);
	john.calculatesAge(); //objects are able to access the method as it is present in the Person's prototype
	console.log(john.college);
	var jane = new Person('Jane',1999,'Programmer');
	var mike = new Person('Mike',1960,'Designer');
	//jane.calculatesAge();
	//mike.calculatesAge();

// Object.create method one way
	var personProto = {
		calculatesAge: function(){
			console.log(2016 - this.yearOfBirth);
		}
	};

	var johnProto = Object.create(personProto);
	johnProto.name = 'John';
	johnProto.yearOfBirth = 1990;
	console.log("    ");
	console.log(johnProto);
//Object.create method other way	
	var mikeProto = Object.create(personProto,{
		name: {value: 'Mike'},
		yearOfBirth: {value: 1999}
	});

/******** Primitive v/s Objects **************/
//Primitives	
	var x = 10;
	var y = x;
	x = 20;
	console.log(x); // the value x is 20
	console.log(y); // but the value of y remains 10	

//Objects	
	var obj1 = {name: 'Bear'};
	var obj2 = obj1;
	obj1.name = 'Tiger';
	console.log(obj1.name);
	console.log(obj2.name); // name of obj2 also changes to Tiger

//Functions
	var age = 27;
	var obj3 = {
		name: 'Priti',
		city: 'Ahmedabad'
	};

	function change(a,b){
		a = 30;
		b.city = 'Baroda';
		console.log(a); // 30 - only changes inside the function
	}

	change(age,obj3);
	console.log(age); // 27
	console.log(obj3.city); //Baroda


/************ Passing Functions as arguments ******************/
	 var years = [1990,1965,1937,2005,1998];

	 function arrayCal(arr,fn){
	 	var arrRes = [];
	 	for(var i = 0; i < arr.length; i++){
	 		arrRes.push(fn(arr[i])); //pushes the values return by fn(calAge) into arrRes
	 	}
	 	return arrRes;
	 };	

	 function calAge(age){
	 	return 2016 - age;
	 }

	 var result = arrayCal(years,calAge); // arr =years & fn = calAge();
	 console.log(result); //prints the ages

/******************* functions returning functions***************/

function interviewQuestions(job){
	if (job === 'designer'){
		return function(name){
			console.log(name + ', can you please explain what UX design is?');
		}
	}
	else if(job === 'teacher'){
		return function(name){
			console.log('what subject do you teach? '+name);
		}
	}
	else{
		return function(name){
			console.log(name + ', what do you do ?');
		}
	}	

}

var teacherQuestions = interviewQuestions('teacher');
teacherQuestions('Anjali');
interviewQuestions('developer')('Ronak');
interviewQuestions('designer')('Vanshika');


/*********************** Immediately Invoked Function expression(IIFE) ***************/

function game(){
	var score = Math.round(Math.random()*10);
	console.log(score);
}

game(); // a simple function calling
 
(function(no){
	var score = Math.round(Math.random()*10);
	console.log(score >= 5 - no); //this condition always get true as score will always be greater than 0
})(5);

/******************* Closures *********************/
//variable of outer function is accessible in inner function even after the outer function is returned- Closures
function interviewQuestions(job){
	return function(name){
	if (job === 'designer'){ //job variable is accessible even after the fucntion is returned- Closure
		console.log(name + ', can you please explain what UX design is?');
		}
	
	else if(job === 'teacher'){
		console.log('what subject do you teach? '+name);
	}
	else{
			console.log(name + ', what do you do ?');
		}
	}	
	}
interviewQuestions('teacher')('John');	

/*************************** bind,call and apply methods *****************************/

var john = {
	name: 'John',
	age: 26,
	job: 'Teacher',
	presentation: function(style,timeOfDay){
		if(style === 'formal'){
			console.log('Good '+ timeOfDay+', Ladies and gentleman! I\'m '+this.name+' I\'m a '+this.job);
		}
		else if(style === 'friendly'){
			console.log('Hey! What\'s up ? I\'m '+this.name+' I\'m a '+this.job+' Have a nice '+timeOfDay);
		}
			
	}
}

var emily = {
	name: 'Emily',
	age: 35,
	job: 'designer' 
};
john.presentation('formal','Morning');
//call method
 john.presentation.call(emily,'friendly','Morning'); //call method - borrowing a method

//apply method
	//john.presentation.apply(emily,['friendly','Afternoon']);

//bind method (similar to call method[bt generate a copy of function], allows us to preset values for method)
	var johnFriendly = john.presentation.bind(john,'friendly'); //the function is stored in johnFriendly as a copy with a present value friendly

	johnFriendly('Morning');

	var emilyFormal = john.presentation.bind(emily,'formal'); //the function is stored in emilyFormal as a copy with a present value formal

	emilyFormal('Morning');

//bind method second example

var years = [1990,1965,1937,2005,1998];

	 function arrayCal(arr,fn){
	 	var arrRes = [];
	 	for(var i = 0; i < arr.length; i++){
	 		arrRes.push(fn(arr[i])); //pushes the values return by fn(calAge) into arrRes
	 	}
	 	return arrRes;
	 };	

	 function calAge(age){
	 	return 2016 - age;
	 }

	 function isFullAge(limit,el){
	 	return el >= limit;
	 }

	 var ages = arrayCal(years,calAge);
	 var fullJapan = arrayCal(ages,isFullAge.bind(this,20)); //for isFullAge 20 is preset for the limit argument
	 console.log(fullJapan);

/********************** Blocks and IIFE **************************/
//ES6
//block defined {}
{
	let p = 2;
	const q = 1;
	var t = 10; // accessible outside 
	console.log(p+q);  //accessible from here
	
	//q = 10; // reassignment is causing error(const)
}
//console.log(p+q); //not accessible here
console.log(t);
//ES5 the same thing happens this way[IIFE]
(function(){
	var p = 10;
})();
//console.log(p); //not accessible outside the function

/******************* Strings in ES6 *************************/

let fName = 'john';
let lName = 'Smith';
const yearOfBirth = 1990;

function calAge(year){
	return 2016 - year;
}

//ES5
console.log('This is '+ fName + lName + ' He was born in '+ yearOfBirth + 'Today he is ' + calAge(yearOfBirth));

//ES6

console.log(`This is  ${fName} ${lName}`); //using template literal

// methods of String in ES6
	const n = `${fName} ${lName}`;
//for starting letter or first letter checking
	n.startsWith('j'); //case-sensitive
// for ending letter or last letter checking
	n.endsWith('h'); //case-sensitive
//for  checking the middle string
	n.includes('oh');
//for repeat a string for no of times
	fName.repeat(3);	//repeats john for 3 times for spacing we can use template literals
/*************** Arrow Functions ********************/
//with simple functions and variables
//ES5
	const ageyears = [1998,1997,1996,1999];
	var ages5 = ageyears.map(function(el){
		return 2020 - el;
	});
	//using prototype 
console.log(ages5);
//ES6
	//with one argument	
	/*var ages6 = ageyears.map(el => 2016 - el); //arrow functions
	console.log(ages6);
	//with two arguments
	var ages6 = ageyears.map((el,index) => `Age element at ${index + 1} is ${2016 - el}`); //using template literal
	console.log(ages6);
	*/
	//more than one line inside the function
	var ages6 = ageyears.map((el,index) => { 
		const age = 2016 - el;
	return `Age element at ${index + 1} is ${age}`
	}); //using template literal

	
	console.log(ages6);
	//with no arguments
	//var ages6 = (() => "Without argument");
	//console.log(ages6);


//With objects
//ES5	
	var box5 = {
		color: 'green',
		position: 1,
		clickMe: function(){
			var self = this; //stores the this variable of function
			document.querySelector('.box1').addEventListener('click',function(){
				alert("Box 1 with color " + self.color);  //so it return the color green 
			});
		}
	};

	box5.clickMe(); // using 'this' directly returns undefined as the anonymous functions this pointer points to window object

//ES6
		const box6 = {
		color: 'green',
		position: 1,
		clickMe: function(){
			//var self = this; //this variable is not needed for arrow function
			document.querySelector('.box2').addEventListener('click',() => {
				alert("Box 1 with color " + this.color);  //as they share same 'this' variable so directly using 'this.color'returns green  
			});
		}
	};

	box6.clickMe();
//Function constructor
	function Person5(names){
		this.names = names;
	}
//ES5
		
	Person5.prototype.myFriends5 = function(friends){
		var arr = friends.map(function(el) {
			return this.names + ' is friends with ' + el;	
		}.bind(this)); //bind methods creates a copy of function with manually defined this variable instead of defining a variable for it
		console.log(arr);
		
	};

	var friends = ['Anjali','Ronak','Jinal'];
	new Person5('Vanshika').myFriends5(friends);
//ES6
	function Person6(name){
		this.name = name;
	}	
	Person6.prototype.myFriends6 = function(friends){
		var arr = friends.map(el => {
			return this.name + ' is friends with ' + el;	
		});
		console.log(arr);
		
	};

	var friends = ['Anjali','Ronak','Jinal'];
	new Person6('Vanshika').myFriends6(friends);
/**************** Desctructing ***************/

//Destructuring the array johnD
var johnD = ['John',23];
var name = johnD[0];
var age = johnD[1];
console.log(' Name ' + name + ' Age ' + age);

var objJohn = {
	firstName: 'John',
	lastName: 'Smith'
};
//Destructuring the object objJohn
var {firstName,lastName} = objJohn;
console.log(' Name ' + firstName + lastName);
var {firstName : fname , lastName: lname} = objJohn;
console.log(' Name ' + fname + lname);
/**************** Arrays ***********************/

//Changing the bg color of all boxes
	// ES5
		const boxes = document.querySelectorAll('.box'); // returns nodelist

		/*var arrayBox5 = Array.prototype.slice.call(boxes); //converts to an array

		arrayBox5.forEach(function(cur) {
			cur.style.backgroundColor =  'blue';
		});*/
	// ES6

		var arrayBox6 = Array.from(boxes);  // converts the node list to array
		arrayBox6.forEach(cur => {
			cur.style.backgroundColor =  'green';
		});

//Changing the text of the box

	//ES5 for loop
	/*
		for (var i = 0; i <= arrayBox5.length; i++) {
	 
			if (arrayBox5[i].className === 'box 2') {
				continue;
			}
			else{
				arrayBox5[i].textContent = 'Box 3';
			}
		}*/

	//ES6 forof loop	

		for (const curr of arrayBox6) {	
			if (curr.className === 'box 2')  // also can use curr.className.includes('2')
			{
				continue;
			}
			else{
				curr.textContent = 'Box 3';
			}
		}

	//indexOf in ES5
 		var ages = [11,12,14,17,18,21];

 		var full = ages.map(function(curr){
 			return curr > 18;
 		});

 		console.log(full.indexOf(true)); //returns the first index where the value is true

 	//ES6
 		console.log(ages.findIndex(curr => curr > 18)); // returns the index

		 console.log('Age greater than 18 ' + ages.find(curr => curr > 18)); // returns the value > 1998

/******************* Classes ***************/

//ES5 - function constructor
	var Personn5 = function(pname,pdob,pjob){
		this.pname = pname;
		this.pdob = pdob;
		this.pjob = pjob;
	}

	

	Personn5.prototype.ageCalc = function(){
			console.log(2020 - this.pdob);
		};
	

	var p5 = new Personn5('JOhn',1999,'Coder');
	p5.ageCalc();

//ES6-class

class Personn6
{
	constructor(pname,pdob,pjob){
		this.pname = pname;
		this.pdob = pdob;
		this.pjob = pjob;
	}

	ageCalc(){
			console.log(2020 - this.pdob);
		}
	static greeting() //attached in class bt not inherited in instances
	{
		console.log("Morning");
	}
}

const p6 = new Personn6('JOhn',1999,'Designer');
p6.ageCalc();
Personn6.greeting();

/******************* Classes and Subclasses *********************/

//ES5 - 
	//Personn5 is the super class
	//Employee5 will be the subclass of it
	var Employee5 = function(pname,pdob,pjob,experience){
		Personn5.call(this,pname,pdob,pjob); // calling the function constructor Personn5 and passing the object of Employee5 as this
		this.experience = experience;

	}

	Employee5.prototype = Object.create(Personn5.prototype); //To create prototype chain
	//adding a prototype should be done after the above line incase we  add prototype of parent 
	Employee5.prototype.printDetails = function(){
		console.log('Name: ' + this.pname + ' DOB: ' + this.pdob + ' Experience: ' + this.experience + ' years');
	}
	var e5 = new Employee5('John',1989,'Designer',10);
	e5.ageCalc(); 
	e5.printDetails();

//ES6 -
	//Personn6 is the super class
	//Employee6 will be the subclass of it

	class Employee6 extends Personn6{
		constructor(pname,pdob,pjob,experience){
			super(pname,pdob,pjob);
			this.experience = experience;
		}
		printDetails(){
			console.log('Name: ' + this.pname + ' DOB: ' + this.pdob + ' Experience: ' + this.experience + ' years');
		}
	}

	var e6 = new Employee6('John',1999,'Designer',5);
	e6.printDetails();