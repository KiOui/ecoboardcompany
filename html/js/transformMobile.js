window.onresize = resize;

function resize() {
	if (window.innerWidth < 950) {
		document.getElementById("discover").style.height="250px";
		document.getElementById("leftText").style.height="100px";
		document.getElementById("leftText").style.marginTop="75px";
		document.getElementById("leftText").style.marginBottom="75px";
	}
	else {
		document.getElementById("discover").style.height="500px";
		document.getElementById("leftText").style.height="200px";
		document.getElementById("leftText").style.marginTop="150px";
		document.getElementById("leftText").style.marginBottom="150px";
	}
}

resize();