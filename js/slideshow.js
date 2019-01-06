var stringArr = ["breadsticks.jpeg", "cheese-pizza5.jpg", "chicken.jpg", "meatballs.jpg", "pepperonipizza.jpg"];
var i = 0;

var currentImage = document.querySelector("img");



function switchImage() {
	
	if (i > 3 ) {
		currentImage.src = "../imgs/" + stringArr[i];	
		i = 0;
		i++;
	}
	else {
		currentImage.src = "../imgs/" + stringArr[i];
		i++;	
	}
	
}



	 setInterval(switchImage, 5000);