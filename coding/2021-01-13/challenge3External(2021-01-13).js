var payAmount = new Array();
var tips = new Array;

function tripCalculator(billAmount){
if (billAmount < 50){
	var tip = (billAmount*20)/100;
	tips.push(tip);
	payAmount.push(billAmount+tip);
}
else if (billAmount >= 50 && billAmount < 200){
	var tip = (billAmount*15)/100;
	tips.push(tip);
	payAmount.push(billAmount+tip);
}
else{
var tip = (billAmount*10)/100;
	tips.push(tip);
	payAmount.push(billAmount+tip);

}
}

tripCalculator(124);
tripCalculator(48);
tripCalculator(268);
console.log("Bill Amounts: ");
console.log(payAmount);
console.log("Tips: ");
console.log(tips);