
<!DOCTYPE html>

<html>
<head>

    <title>Duurzaamheid</title>

    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="../css/fullscreen_image_blocks.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <LINK REL="SHORTCUT ICON" HREF="../img/logo.ico">

</head>
<body>
	<?php include('../header/header-fixed.html'); ?>
	    <script src="./js/scroll.js"></script>
    <div class="made" id="whitespace">
    	<div class="text-top" id="fade">
	        <h1>"ECO-Boards&trade; has a negative carbon footprint"</h1>
		    <div class="arrow-top" id="arrow-fade">
		    	<i class="arrow down" onclick="scrollToY(document.getElementById('whitespace').clientHeight, 5, 'easeInOutQuint');"></i>
		    </div>
	    </div>

    </div>

    <script>
    	window.setTimeout(fadeText, 1000);
    	window.setTimeout(fadeArrow, 1200);
    	function fadeText() {
	    	var fade = document.getElementById("fade");

	    	fade.style.opacity = 1;
	    }

	    function fadeArrow() {
	    	var fade = document.getElementById("arrow-fade");

	    	fade.style.opacity = 1;
	    }
    </script>

    <div class="bgimg-1">
    	<div class="blockTextBanner" style="float: left;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Environmentally friendly</h1>
	            <p class="field" style="color: white;">
	                ECO-BOARDS&trade; is a fully recycable board which complies to the “Cradle-to-Cradle” concept as developed by McDonough Braungart Design Chemistry. Our patented production process results in a product that can be re-used as feedstock after it has served its primary purpose. This waste up-cycling into a high-quality product also sequesters the carbon of the feedstock for the long term.  Traditional wood-based particle board products can never be up-cycled due to the applied resins and additives. 
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>
    
    <div class="bgimg-2">
      <div class="blockTextBanner" style="float: right;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Cradle-to-Cradle</h1>
	            <p class="field" style="color: white;">
	                ECO-BOARDS&trade; is a fully recycable board which complies to the “Cradle-to-Cradle” concept as developed by McDonough Braungart Design Chemistry. Our patented production process results in a product that can be re-used as feedstock after it has served its primary purpose. This waste up-cycling into a high-quality product also sequesters the carbon of the feedstock for the long term.  Traditional wood-based particle board products can never be up-cycled due to the applied resins and additives. 
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>

    <div class="bgimg-3">
      <div class="blockTextBanner" style="float: left;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Formaldehyde-free</h1>
	            <p class="field" style="color: white;">
	                The production process of ECO-BOARDS&trade; makes use of a completely formaldehyde-free resin called PMDI.  As a result, the product conforms to the strict European formaldehyde emission norm E0 according to EN 120 / EN 717 as well as the USA formaldehyde norm HUD 24. This makes the boards extremely suitable for use in environmental and health sensitive areas. 
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>
    <div class="bgimg-4">
      <div class="blockTextBanner" style="float: right;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Negative Carbon Footprint</h1>
	            <p class="field" style="color: white;">
	                Due to our unique production process and the use of agriculture waste materials as feedstock, ECO-BOARDS&trade; has a negative carbon footprint.  An independent study showed that our first production facility with a capacity of 240.000 m3 board material accounts for a reduction of 130 ktons of CO2 emissions compared to composting the applied feedstock. 
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>
    <?php include('../footer/footer.html'); ?>
</body>

</html>
