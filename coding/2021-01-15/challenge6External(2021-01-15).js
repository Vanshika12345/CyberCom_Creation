var no = parseInt(prompt("Enter the number of elements"));
var sum = 0;
var n1 = 0;
var n2 = 1;
console.log('Numbers: ');
console.log(n1);
console.log(n2);
for(var i = 2; i < no; i++){

	sum = n1 + n2;
	console.log(sum);
	n1 = n2;
	n2 = sum;
	
}

document.getElementById('result').innerHTML = 'Sum Of Series is :'+sum;