var johnMass = 50;
		var markMass = 60;
		var johnHeight = 1.75;
		var markHeight = 1.67;

		var johnBmi = johnMass/(johnHeight^2);
		var markBmi = markMass/(markHeight^2);
		var markBmiHigher = markBmi > johnBmi;
		console.log("Is Mark's BMI higher than Johns?"+ markBmiHigher);

