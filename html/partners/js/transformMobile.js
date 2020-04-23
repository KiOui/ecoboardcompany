window.onresize = resize;

function resize() {
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

resize();