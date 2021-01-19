var johnAverageScore = (89+120+103)/3; //104

			var mikeAverageScore = (116+94+123)/3; //111
			
				//based on question both teams score is compared 
			if ( mikeAverageScore > johnAverageScore) {
				console.log("Mike's Team Wins "+ ' Score '+mikeAverageScore);
			}
			else{
				console.log("John's Team Wins "+ ' Score '+johnAverageScore);
			}

			

					//3. Changing of scores 
			 johnAverageScore = (89+130+110)/3; //109.6667
			 mikeAverageScore = (116+98+123)/3; //112.3333
			 
			 
			// changing score of both team to make john's team win
			if(johnAverageScore > mikeAverageScore){

			console.log("John's Team Wins "+' Score '+ johnAverageScore);}
			else{
				console.log("Mike's Team Wins "+' Score '+ mikeAverageScore);
			}
					

					// Draw of match situation
			 johnAverageScore = (89+100+110)/3; //99.666

			  mikeAverageScore = (89+100+110)/3; //99.666
			  // Average score are equal of both teams
			  if( johnAverageScore == mikeAverageScore)
				{
			console.log("Draw of match "+" Mike's Score "+mikeAverageScore+" John's Score "+johnAverageScore);	}	
			else if ( mikeAverageScore > johnAverageScore) {
				console.log("Mike's Team Wins "+ ' Score '+mikeAverageScore);
			}	
			else{

			console.log("John's Team Wins "+' Score '+ johnAverageScore);}


			//4.Extra Adding mary's score with others
			johnAverageScore = (89+120+103)/3; //104
			mikeAverageScore = (116+94+123)/3; //111
		var	maryAverageScore = (97+134+105)/3; //112

			// comparing mary's score wth other teams 
			 if(maryAverageScore > johnAverageScore && maryAverageScore > mikeAverageScore){
			 	console.log("Mary's Team Wins "+" Score "+maryAverageScore);
			 }
			 else if ( mikeAverageScore > johnAverageScore && mikeAverageScore > maryAverageScore) {
				console.log("Mike's Team Wins "+ ' Score '+mikeAverageScore);
			}	
			else{

			console.log("John's Team Wins "+' Score '+ johnAverageScore);}

			

					// Draw of match situation
			johnAverageScore = (97+134+105)/3; //112

			mikeAverageScore = (97+134+105)/3; //112
			maryAverageScore = (97+134+105)/3; 112
			
			// average score of all three teams are same
			if(maryAverageScore == johnAverageScore && maryAverageScore == mikeAverageScore && mikeAverageScore == johnAverageScore){
				console.log("Draw of Match "+" John SCore "+johnAverageScore+ " Mike Score "+ mikeAverageScore+ " Mary Score " + maryAverageScore);
			}
			
			else{
				if(maryAverageScore > johnAverageScore && maryAverageScore > mikeAverageScore){
			 		console.log("Mary's Team Wins "+" Score "+maryAverageScore);
			 	}
				 else if ( mikeAverageScore > johnAverageScore && mikeAverageScore > maryAverageScore) {
					console.log("Mike's Team Wins "+ ' Score '+mikeAverageScore);
				}	
				else{
					console.log("John's Team Wins "+' Score '+ johnAverageScore);}
				}

			
			// Changing of scores of all three teams

			johnAverageScore = (100+140+115)/3; //118.333

			mikeAverageScore = (106+95+121)/3; //107.333
			maryAverageScore = (100+135+112)/3; //115.666
			// average score of all three teams are same
			if(maryAverageScore < johnAverageScore && johnAverageScore > mikeAverageScore){
				console.log("John Wins "+" Score "+johnAverageScore);}

			else if ( mikeAverageScore > johnAverageScore && mikeAverageScore > maryAverageScore) {
					console.log("Mike's Team Wins "+ ' Score '+mikeAverageScore);}
			else{
			 		console.log("Mary's Team Wins "+maryWins+" Score "+maryAverageScore);
			 	}

			 			



	