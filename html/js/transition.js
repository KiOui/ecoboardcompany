var TRANSITION_NEXT_IMAGE = 0;
var IMAGE_ARRAY = ["forest1.jpg", "forest2.jpg", "forest3.jpg", "imgHeader.jpg"];

function transition() {
	var element = document.getElementById("headerImage");
	if (TRANSITION_NEXT_IMAGE >= IMAGE_ARRAY.length) {
		TRANSITION_NEXT_IMAGE = 0;
	}
	if (element) {
		element.style.backgroundImage = "url('./IMG/" + IMAGE_ARRAY[TRANSITION_NEXT_IMAGE] + "')";
	}
	TRANSITION_NEXT_IMAGE++;
}

window.setInterval(transition, 5000);