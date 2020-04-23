window.onresize = resize;

function resize() {

	var elements = document.getElementsByClassName("text");

	resetMaxHeight(elements);

	elements = document.getElementsByClassName("title");

	resetMaxHeight(elements);

	elements = document.getElementsByClassName("text");

	setElementAsOthers(elements);

	elements = document.getElementsByClassName("title");

	setElementAsOthers(elements);

}

function resetMaxHeight(elements) {
	for (var i = 0; i < elements.length; i++) {
		elements[i].style.height = "";
	}
}

function setElementAsOthers(elements) {
	var max = -1;
	for (var i = 0; i < elements.length; i++) {
		if (max < elements[i].clientHeight) {
			max = elements[i].clientHeight;
		}
	}
	if (max == -1) {
		console.log("Resize failed");
	}
	else {
		var string = max + "px";
		console.log("Maxsize set to: " + max);
		for (var i = 0; i < elements.length; i++) {
			elements[i].style.height = string;
		}
	}
}

resize();