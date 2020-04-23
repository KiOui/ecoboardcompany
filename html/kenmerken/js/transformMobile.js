window.onresize = resize;

function resize() {
	var elementsImage = document.getElementsByClassName("image");
	var elementsText = document.getElementsByClassName("text");
	if (window.innerWidth < 900) {
		for (var i = 0; i < elementsImage.length; i++) {
			elementsImage[i].classList.add("left-image-mobile");
			elementsImage[i].classList.remove("left-image");
		}
		for (var i = 0; i < elementsText.length; i++) {
			elementsText[i].classList.add("right-text-mobile");
			elementsText[i].classList.remove("right-text");
		}
	}
	else {
		for (var i = 0; i < elementsImage.length; i++) {
			elementsImage[i].classList.add("left-image");
			elementsImage[i].classList.remove("left-image-mobile");
		}
		for (var i = 0; i < elementsText.length; i++) {
			elementsText[i].classList.add("right-text");
			elementsText[i].classList.remove("right-text-mobile");
		}

		var elements = document.getElementsByClassName("image");
		var input = document.getElementsByClassName("text");

		if (elements.length == input.length) {
			for (var i = 0; i < elements.length; i++) {
				elements[i].style.height = input[i].clientHeight + "px";
			}
		}
		else {
			console.log("Resize failed");
		}
	}
}

resize();