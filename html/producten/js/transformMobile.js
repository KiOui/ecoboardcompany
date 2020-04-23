window.onresize = resize;

function resize() {

	if (window.innerWidth < 700) {
		var elements = document.getElementsByClassName("mobile");
		for (i = 0; i < elements.length; i++) {
			elements[i].classList.add("productOmschrijving-mobile");
			elements[i].classList.remove("productOmschrijving");
		}
	}
	else {
		var elements = document.getElementsByClassName("mobile");
		for (i = 0; i < elements.length; i++) {
			elements[i].classList.add("productOmschrijving");
			elements[i].classList.remove("productOmschrijving-mobile");
		}
	}

}

resize();