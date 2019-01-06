//Open 12PM to 8PM Monday through Sunday


var d = new Date();
var currentHour = d.getHours();
console.log(currentHour);

var content = document.querySelector("#content");



 if (currentHour >= 12 && currentHour <= 20){

	content.innerHTML = "We are currently Open!!!";
	content.style.color = "green";
 }
 else{

	content.innerHTML = "We are currently Closed!!!";
	content.style.color = "red";
 }


