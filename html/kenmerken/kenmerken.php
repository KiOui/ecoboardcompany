
<!DOCTYPE html>

<html>
<head>

    <title>Features</title>

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
	        <h1>Features</h1>
	        <p>ECOBoards are NOT made from WOOD, but use agricultural fibres, residue or by-products from harvests, a product that is usually burned as a waste problem. The result is a board that is far more superior to MDF or particleboards on the market today.</p>
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
    	<div class="blockTextBanner" style="float: right;"">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Moisture resistance</h1>
	            <p class="field" style="color: white;">
	                Unlike traditional wood based boards, ECOBoards are extremely moisture resistant and are specified for use in the most strenuous humid domestic interior conditions where dimensional stability and retained strength are of great importance such as Kitchen & Bathroom furniture, skirting boards, moldings, wall cladding, shelving and flooring. After contact with water, swelling is reduced up to a third compared to MDF, while structural integrity is preserved. 
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>
    
    <div class="bgimg-2">
      <div class="blockTextBanner" style="float: left;">
	        <span class="border" style="background-color:transparent;">
	        	<h1> Fire resistance </h1>
	            <p class="field" style="color: white;">
	                The standard fire retardant properties of ECOBoards are untreated already 30 min fire retardant. They are non-rated since they scorch rather than burn, therefore leading to the fact that ECOBoards are the perfect “green” material to produce fire retardant doors and fire retardant door cores.
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>

    <div class="bgimg-3">
      <div class="blockTextBanner" style="float: right;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Insulating & Constructive properties</h1>
	            <p class="field" style="color: white;">
	                ECOBoard Softboard was pressed under lower pressure in order to maintain the voids of the straws, meaning the thermal conductivity therefore is close to that of foamed plastic while still being less than 0.65 W/(m*K). The thermal capacity is higher than that of inorganic materials.
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>

    <div class="bgimg-4">
      <div class="blockTextBanner" style="float: left;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Screw Tightness</h1>
	            <p class="field" style="color: white;">
	                ECOBoards have a tenacious screw holding ability that adds to the choice of fitments that can be used.
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>
    <script src="./js/transformMobile.js"></script>
    <?php include('../footer/footer.html'); ?>
</body>

</html>
