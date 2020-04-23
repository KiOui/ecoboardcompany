
<!DOCTYPE html>

<html>
<head>

    <title>Eco Boardcompany</title>

    <link rel="stylesheet" href="./css/main.css?ver=1.0">
    <script src="./js/scroll.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <LINK REL="SHORTCUT ICON" HREF="./img/logo.ico">
    <meta name="description" content="Eco Boardcompany: The green future in building"/>

</head>
<body>
    <?php include('./header/header-fixed.html'); ?>
    <header id="header">
        <div class="showHeaderImage" id="headerImage">
            <img class="logo" src="./img/ecob_logo.png">
            <div class="text" id="fade">
                <p id="top-text-fade">
                    The green future<br onclick="transition();">in building</br>
                </p>
                <div class="clickable" onclick="scrollToY(document.getElementById('headerImage').clientHeight + document.getElementById('nav_bar').clientHeight + 1, 5, 'easeInOutQuint');"><i class="arrow down" id="topArrow"></i>
                </div>
            </div>
        </div>
    </header>

    <script>
        window.setTimeout(fadeBlock, 1000);
        window.setTimeout(fadeText, 1200);
        window.setTimeout(fadeArrow, 1600);
        function fadeBlock() {
            var fade = document.getElementById("fade");
            fade.style.opacity = 1;
        }
        function fadeText() {
            var fade = document.getElementById("top-text-fade");
            fade.style.opacity = 1;
        }
        function fadeArrow() {
            var fade = document.getElementById("topArrow");
            fade.style.opacity = 1;
        }
    </script>
    

    <div class="middle">
        <div class="small-block">
            <h1>Mission</h1>
            <p>
                To develop, design and deliver innovative, recyclable and sustainable building materials that contribute to the development of a circular economy.
                <br><br>
                To become the world leader in the manufacturing of high quality ecological particle board produced from plant fibres originating from low value agricultural material.
                <br><br>
                To meet the increasing industry demand for ecological particle board and to satisfy the consumers' need for environmentally friendly and non-hazardous building materials. 
                <br><br>
                To positively address the climate change issue by producing products with a negative carbon footprint resulting from cradle-to-cradle carbon capture and storage.

            </p>
        </div>
        <div class="small-block">
            <h1>Vision</h1>
            <p>
                We fully embrace the “Cradle to Cradle” principle as we exclusively manufacture products that meet the requirements for achieving sustainable development and creating a circular economy. 
                <br><br>
                Our objective is to become the leading manufacturer of high quality ecological building materials that are non-hazardous, fully recyclable and which have a negative carbon footprint.  
                <br><br>
                We aim to invest on a global scale in production facilities based on technologies that are state-of-the-art and environmentally friendly.
                <br><br>
                We want to safeguard the world’s environment and natural resources by producing sustainable building materials that support the circular economy.
            </p>
        </div>
    </div>
    <div class="bgimg" style="background-image: url('./img/forest.jpg');"></div>
    <img class="bgimg-mobile" src="./img/forest.jpg"/>
    <div class="made">
        <div class="text-top" id="fade">
            <h1>Strategy</h1>
                <p>We have successfully developed our own patented technology for producing a formaldehyde-free particle board from residual agricultural biomass fibres.  This new ecological board has been certified to meet and even exceed the industry-specific international quality standards for OSB- and MDF-boards. The product provides a green, 100% recyclable, cost competitive, and higher quality alternative for the traditional boards while simultaneously offering a sustainable solution to residual agricultural fibre material. 
                <br><br>
                Our first production facility is currently being developed in the harbour of Amsterdam, the Netherlands, together with a feedstock pre-treatment plant in Almeria, Spain. Production is planned to start in the first quarter of 2020 with an annual capacity of 240,000 m3.
                <br><br>
                In the years to come, we will continue to build new production locations. Development plans for a second plant in the Netherlands and two plants in Spain are well under way. Within the next 5 years, we aim to successfully realise an installed base of 3 production locations with a total production capacity of 500,000 m3 per annum.
                </p><br>
        </div>
    </div>
    <div class="value-top">
        <div class="value-title"><h1>Values</h1></div>
        <div class="values">
            <div class="value-set">
                <div class="value">
                    <h3>Safety and Health</h3>
                    <p> We are committed, both on a personal and on a professional level, to protecting the safety and health of our employees, our suppliers, our customers and the people in the communities where we operate.
                    </p>
                </div>
                <div class="value">
                    <h3>Environmental Stewardship</h3>
                    <p> We develop sustainable high quality products for our customers, with a constant focus on the protection of the environment and the preservation of the earth’s natural resources, both today and in the future.
                    </p>
                </div>
                <div class="value">
                    <h3>Respect for People</h3>
                    <p> We treat all our employees and partners with professionalism, dignity and respect, thereby promoting an environment where people are given the opportunity to contribute, innovate and excel.
                    </p>
                </div>
            </div>
            <div class="value-set set-right">
                <div class="value">
                    <h3>Integrity</h3>
                    <p> We conduct ourselves and our business activities in accordance with the highest standards of ethics and corporate citizenship and in compliance with all applicable laws.
                    </p>
                </div>
                <div class="value">
                    <h3>Excellence</h3>
                    <p> We are constantly aiming to improve our business affairs in order to meet and exceed the high expectations of our customers, employees and shareholders.
                    </p>
                </div>
                <div class="value">
                    <h3>Entrepreneurial Spirit</h3>
                    <p> Throughout our organisation, we encourage the spirit of entrepreneurship by always exploring new ideas, embracing change, and seeking opportunities for our business and our people. Taking responsible risks and pursuing action are not only desired, they are encouraged and supported. 
                    </p>
                </div>
                <div class="value">
                    <h3>Strategic Thinking</h3>
                    <p> In a strategic sense, we challenge ourselves to see the bigger picture and try to approach each aspect of our vision purposefully. We make sure to stay informed on all business and market trends and align our resources towards the organisation's strategic business plans.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="news">
        <div class="news-title"><h1>Recent news</h1></div>
        <div class="bar-fullscreen-2"></div>
        <?php
            $maxitems = 2;

            $dataFileName = "shortItem.v";
            $titleFileName = "title.v";
            $imageDirName = "img";
            $imageName = "header.jpg";
            $dir = './news/items';
            $words = 20;
            $files = scandir($dir);
            $path = './news-page.php?item=';

            function date_sort($a, $b) {
                return strtotime($b) - strtotime($a);
            }

            usort($files, "date_sort");

            $counter = 0;

            foreach ($files as $file) {
                if ($counter == $maxitems) {
                    break;
                }

                if ($file != "." && $file != ".." && is_dir($dir.'/'.$file)) {
                    $counter = $counter + 1;
                    $url = './news/' . $path.$file;
                    $file = $dir.'/'.$file;
                    if (is_file($file.'/'.$dataFileName) && is_file($file.'/'.$titleFileName) && is_file($file.'/'.$imageDirName.'/'.$imageName)) {
                        $fh = fopen($file.'/'.$titleFileName, 'r');
                        $title = fgets($fh);
                        $date = fgets($fh);
                        fclose($fh);

                        $fh = fopen($file.'/'.$dataFileName, 'r');
                        $item = fgets($fh);
                        fclose($fh);

                        echo('
                            <div class="news-item">
                                <div onclick="window.location.href=\'' . $url . '\'" class="image-article" style="background-image: url(\'' . $file . '/' . $imageDirName . '/' . $imageName . '\');">
                                    <div class="news-text">
                                        <p> ' . $item .
                                        '</p>
                                    </div>
                                    <div class="item-date">
                                        ' . $date . '
                                    </div>
                                </div>
                                <div class="news-item-title" onclick="window.location.href = \'' . $url . '\';">
                                    <h1> ' . $title . '
                                    </h1>
                                </div>
                            </div>
                            ');
                    }
                }
            }
        ?>

<link rel="stylesheet" type="text/css" href="/fonts/fontAwesome/css/font-awesome.css">
<link rel="stylesheet" href="/css/footer.css">

<?php include('./footer/footer.html'); ?>
</body>

</html>
