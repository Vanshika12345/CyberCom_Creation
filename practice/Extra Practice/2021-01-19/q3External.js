//3 Sorting an array of objects
	function compareName(a,b){
		if(a.name > b.name){
		return 1;
		}
		else if(a.name < b.name){
		return -1;
		}
		else{
		return 0;
		}
	}
	console.log(objArray.sort(compareName)); //returns an array sorted by name property 