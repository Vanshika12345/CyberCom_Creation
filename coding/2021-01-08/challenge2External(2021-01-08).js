var fJohnScore = 89;
			var sJohnScore = 120;
			var tJohnScore = 103;
			var fMikeScore = 116;
			var sMikeScore = 94;
			var tMikeScore = 123;

			var johnAverageScore = (fJohnScore+sJohnScore+tJohnScore)/3; //104

			var mikeAverageScore = (fMikeScore+sMikeScore+tMikeScore)/3; //111
			//based on question both teams score is compared 
			var mikeWins = mikeAverageScore > johnAverageScore;

			console.log("Mike's Team Wins "+mikeWins+ ' Score '+mikeAverageScore);

//3. Changing of scores 
			 fJohnScore = 89;
			 sJohnScore = 130;
			 tJohnScore = 110;
			 fMikeScore = 116;
			 sMikeScore = 98;
			 tMikeScore = 123;

			 johnAverageScore = (fJohnScore+sJohnScore+tJohnScore)/3; // 109.6667

			 mikeAverageScore = (fMikeScore+sMikeScore+tMikeScore)/3; //112.333
			// changing score of both team to make john's team win
			var johnWins = johnAverageScore > mikeAverageScore;

			console.log("John's Team Wins "+johnWins+' Score '+ johnAverageScore);
// Draw of match situation


			 fJohnScore = 89;
			 sJohnScore = 100;
			 tJohnScore = 110;
			 fMikeScore = 89;
			 sMikeScore = 100;
			 tMikeScore = 110;

			 johnAverageScore = (fJohnScore+sJohnScore+tJohnScore)/3; //99.666

			  mikeAverageScore = (fMikeScore+sMikeScore+tMikeScore)/3; //99.666
			  // Average score are equal of both teams
			  var whoWins = johnAverageScore == mikeAverageScore;

			console.log("Draw of match "+whoWins+" Mike's Score "+mikeAverageScore+" John's Score "+johnAverageScore);			

//4.Extra Adding mary's score with others

			fMaryScore = 97;
			sMaryScore = 134;
			tMaryScore = 105; 
			fJohnScore = 89;
			sJohnScore = 120;
			tJohnScore = 103; 
			fMikeScore = 116;
			sMikeScore = 94;
			tMikeScore = 123; 

			johnAverageScore = (fJohnScore+sJohnScore+tJohnScore)/3; //104
			mikeAverageScore = (fMikeScore+sMikeScore+tMikeScore)/3; //111
		var	maryAverageScore = (fMaryScore+sMaryScore+tMaryScore)/3; //112
			// comparing mary's score wth other teams 
			var maryWins = (maryAverageScore > johnAverageScore) && (maryAverageScore) > (mikeAverageScore);

			console.log("Mary's Team Wins "+maryWins+" Score "+maryAverageScore);

// Draw of match situation

			fMaryScore = 97;
			sMaryScore = 134;
			tMaryScore = 105; 
			fJohnScore = 97;
			sJohnScore = 134;
			tJohnScore = 105; 
			fMikeScore = 97;
			sMikeScore = 134;
			tMikeScore = 105; 

			johnAverageScore = (fJohnScore+sJohnScore+tJohnScore)/3; //112

			mikeAverageScore = (fMikeScore+sMikeScore+tMikeScore)/3; //112
			maryAverageScore = (fMaryScore+sMaryScore+tMaryScore)/3; 112
			// average score of all three teams are same
			var whoWins = (maryAverageScore == johnAverageScore) && (maryAverageScore) == (mikeAverageScore) && (mikeAverageScore == johnAverageScore);

			console.log("Draw of Match "+whoWins+" John SCore "+johnAverageScore+ " Mike Score "+ mikeAverageScore+ " Mary Score " + maryAverageScore);

// Changing of scores of all three teams

			 fJohnScore = 100;
			 sJohnScore = 140;
			 tJohnScore = 115;
			 fMikeScore = 106;
			 sMikeScore = 95;
			 tMikeScore = 121;
			 fMaryScore = 100;
			 sMaryScore = 135;
			 tMaryScore = 112; 
			

			johnAverageScore = (fJohnScore+sJohnScore+tJohnScore)/3; //118.333

			mikeAverageScore = (fMikeScore+sMikeScore+tMikeScore)/3; //107.333
			maryAverageScore = (fMaryScore+sMaryScore+tMaryScore)/3; //115.666
			// average score of all three teams are same
			var johnWins = (maryAverageScore < johnAverageScore) && (johnAverageScore > mikeAverageScore);

			console.log("John Wins "+johnWins+" Score "+johnAverageScore); 			

