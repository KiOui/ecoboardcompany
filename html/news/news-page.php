<!DOCTYPE html>

<html>
<head>

    <title>News item</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="./css/news-page.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <LINK REL="SHORTCUT ICON" HREF="../img/logo.ico">

    <meta name="description" content="Eco Boardcompany: News"/>

	<?php

		$file = $_GET['item'];
		$dataFileName = "shortItem.v";
		$titleFileName = "title.v";
		$textFileName = "item.v";
		$imageDirName = "img";
		$imageName = "header.jpg";
		$dir = './items';

		$file = $dir.'/'.$file;

		if (is_dir($file.'/'.$imageDirName)) {
			$files = scandir($file.'/'.$imageDirName);
			foreach($files as $image) {
				if ($image != "." && $image != ".." && $image != $imageName) {
					echo('<link rel="preload" as="image" href="'.$file.'/'.$imageDirName.'/'.$image.'">');
				}
			}
		}
	?>



</head>

<body>

	<?php include('../header/header-fixed.html'); ?>
	<div class="content-middle">
		<div class="box adapt">
			<?php
				if (is_dir($file.'/'.$imageDirName)) {
					if (is_file($file.'/'.$imageDirName.'/'.$imageName)) {
						echo('<div id="headerImage" class="showImage" style="background-image: url(\''.$file.'/'.$imageDirName.'/'.$imageName.'\');"></div>');
					}
				}
			?>
			<div class="title adapt">
				<?php

					if (is_dir($file)) {
						$fh = fopen($file.'/'.$titleFileName, 'r');
						$title = fgets($fh);
						$date = fgets($fh);
						fclose($fh);
						echo($title);
					}
				?>
			</div>
			<script>
				var TRANSITION_NEXT_IMAGE = 0;

				var IMAGE_ARRAY = [

				<?php
					if (is_dir($file.'/'.$imageDirName)) {
						$files = scandir($file.'/'.$imageDirName);
						if (is_file($file.'/'.$imageDirName.'/'.$imageName)) {
							echo('"'.$file.'/'.$imageDirName.'/'.$imageName.'"');
						}
						foreach($files as $image) {
							if ($image != "." && $image != ".." && $image != $imageName && $image != "Thumbs.db") {
								echo(',"'.$file.'/'.$imageDirName.'/'.$image.'"');
							}
						}
					}
				?>

				];

				function transition() {
					var element = document.getElementById("headerImage");
					if (TRANSITION_NEXT_IMAGE >= IMAGE_ARRAY.length) {
						TRANSITION_NEXT_IMAGE = 0;
					}
					if (element) {
						element.style.backgroundImage = "url(" + IMAGE_ARRAY[TRANSITION_NEXT_IMAGE] + ")";
					}
					TRANSITION_NEXT_IMAGE++;
				}
				if (IMAGE_ARRAY.length > 1) {
					window.setInterval(transition, 5000);
				}
			</script>

			<div class="text">
            	<?php
            		if ($text = fopen($file.'/'.$textFileName, "r")) {
					    while(!feof($text)) {
					        $line = fgets($text);
					        echo('
					        	<p class="field">
					        		'.$line.'
				                </p>
					        ');
					    }
					    fclose($text);
					}
            	?>
			</div>
			<div class="back">
				<div class="side-arrow" onclick="window.location.href='./news.php';">
                	<i class="arrow left" style = "border-color: #4A7D13"></i>
                </div>
			</div>
		</div>
	</div>

	<?php include('../footer/footer.html'); ?>
</body>