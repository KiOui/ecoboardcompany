
<!DOCTYPE html>

<html>
<head>

    <title>Values</title>

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
	        <h1>Values</h1>
	        <p>Our trademark ECO-BOARDS&trade; has been registered and the product has been certified as a biobased and environmentally sustainable building material under the requirements set by the The Netherlands Institute for Construction Biology and Ecology for BioBased certification.</p>
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
    	<div class="blockTextBanner" style="float: right;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Vision</h1>
	            <p class="field" style="color: white;">
	                We adhere to the “Cradle to Cradle” principle and will only produce sustainable products which meet the requirements of a circular economy. We are committed to become the leading manufacturer of high quality ecological building materials which are fully recycable, non-hazardous and have a negative carbon footprint. We are dedicated to invest on a global scale in production facilities with state-of-the-art environmentally friendly production technologies. We want to make a diffence by contributing to a circular economy which safeguards the environment and natural resources of the world. 
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>
    
    <div class="bgimg-2">
      <div class="blockTextBanner" style="float: left;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Mission</h1>
	            <p class="field" style="color: white;">
	                Our mission is to design, develop and deliver innovative, recycable and sustainable building materials that will contribute to the development of a circular economy. To become the world leader in the manufacturing of high quality ecological particle board produced from low value agricultural waste. To meet the increasing industry demand for ecological particle board and to satisfy consumers' needs for environmentally friendly and non-hazardous building materials. To positively address the climate change issue by producing products with a negative carbon footprint resulting from cradle-to-cradle carbon capture and storage.
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>

    <div class="bgimg-3">
      <div class="blockTextBanner" style="float: right;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Strategy</h1>
	            <p class="field" style="color: white;">
	                We have successfully designed and developed our patented technology to produce a formaldehyde-free particle board from agricultural biomass waste.  The product is certified to meet and exceed the industry international quality standards for OSB and MDF boards. This new ecological board will provide a green, 100% recyclable, cost competitive, higher quality alternative for traditional boards while simultaneously providing a sustainable application for agricultural waste. 
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>

    <div class="bgimg-4">
      <div class="blockTextBanner" style="float: left;">
	        <span class="border" style="background-color:transparent;">
	        	<h1>Facilities</h1>
	            <p class="field" style="color: white;">
	                Our first production facility is currently being developed in the harbour of Amsterdam, the Netherlands in combination with a feedstock pre-treatment plant in Almeria, Spain.  The annual production capacity will be 240.000 m3 and start-up is planned for Q1 2019. We will continue to build new production locations for future growth. Development plans for a second plant in the Netherlands and two plants in Spain are well under way. Within the next 5 years, we aim to successfully realize an installed base of 3 production locations with a total production capacity of 500.000 m3 per annum.
	            </p>
	        </span>
	        <a href="#" class="button">Learn More</a>
      	</div>
    </div>

    <div class="bgimg-5">
          <div class="values">
        <div class="core" style="color: white">
            <h1>Core values</h1>
        </div>
        <div class="value">
            <h3>Safety and Health</h3>
            <p> We allocate a personal and professional commitment to protecting the safety and
                health of our employees, our suppliers, our customers and the people of the
                communities in which we operate.
            </p>
        </div>
        <div class="value">
            <h3>Environmental Stewardship</h3>
            <p> We develop sustainable high quality products for our customers, always directing
                our businesses to protect the environment and preserve the earth’s natural
                resources, both for today and for generations into the future.
            </p>
        </div>
        <div class="value">
            <h3>Respect for People</h3>
            <p> We treat our employees and all our partners with professionalism, dignity and
                respect, promoting an environment where people can contribute, innovate and
                excel.
            </p>
        </div>
        <div class="value">
            <h3>Integrity</h3>
            <p> We conduct ourselves and our business activities in accordance with the uppermost
                ethical standards, and in compliance with all applicable laws, attempting always
                to be a respected corporate citizen. 
            </p>
        </div>
        <div class="value">
            <h3>Excellence</h3>
            <p> We strive constantly to improve our business affairs in order to meet and exceed
                the highest expectations of our customers, employees and shareholders. 
            </p>
        </div>
        <div class="value">
            <h3>Entrepreneurial Spirit</h3>
            <p> We encourage the spirit of entrepreneurship throughout our organization.
                Exploring new ideas, embracing change, identifying opportunities for our business
                and our people. Assessing risks and taking action are not only desired, they are
                encouraged and supported.
            </p>
        </div>
        <div class="value">
            <h3>Strategic Thinking</h3>
            <p> We challenge ourselves to see the bigger picture strategically and approach each
                aspect of our vision purposefully. We stay informed on business and market trends
                and align resources within the organization's strategic business plans. 
            </p>
        </div>

    </div>
    </div>

    <script src="./js/transformMobile.js"></script>
    <?php include('../footer/footer.html'); ?>
</body>

</html>
