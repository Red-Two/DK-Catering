function validatePlatter(){
	var x = document.forms["platterform"]["name"].value;
	if(x == null || x == ""){
		alert("Please fill out a name!")
		return false;
	}
}
function validateDesert(){
	var y = document.forms["desertform"]["name"].value;
	if(y == null || y == ""){
		alert("Please fill out a name!")
		return false;
	}
}
function validateDinner(){
	var z = document.forms["dinnerform"]["name"].value;
	if(z == null || z == ""){
		alert("Please fill out a name!")
		return false;
	}
}
function validateLunch(){
	var a = document.forms["lunchform"]["name"].value;
	if(a == null || a == ""){
		alert("Please fill out a name!")
		return false;
	}
}
function validateBreakfast(){
	var b = document.forms["breakfastform"]["name"].value;
	if(b == null || b == ""){
		alert("Please fill out a name!")
		return false;
	}
}

function returnHomeBreakfast(){
	window.location = "breakfast.php";
}
function returnHomeLunch(){
	window.location = "lunch.php";
}
function returnHomeDinner(){
	window.location = "dinner.php";
}
function returnHomeDesert(){
	window.location = "desert.php";
}
function returnHomePlatter(){
	window.location = "platter.php";
}