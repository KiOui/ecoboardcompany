<!DOCTYPE html>

<html>
<head>

    <title>News</title>

    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <LINK REL="SHORTCUT ICON" HREF="../img/logo.ico">
    <meta name="description" content="Eco Boardcompany: News"/>

</head>

<body>

	<?php include('../header/header-fixed.html'); ?>

	<div class="content-middle">
		<div class="body-layout">

			<div class="news-text"><h1>News</h1></div>

			<div class="news-container">
				<?php

					$dataFileName = "shortItem.v";
					$titleFileName = "title.v";
					$imageDirName = "img";
					$imageName = "header.jpg";
					$dir = './items';
					$words = 20;
					$files = scandir($dir);
					$path = './news-page.php?item=';

					function date_sort($a, $b) {
					    return strtotime($b) - strtotime($a);
					}

					usort($files, "date_sort");

					foreach ($files as $file) {
						if ($file != "." && $file != ".." && is_dir($dir.'/'.$file)) {
							$url = $path.$file;
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
										<div class="news-image" style="background-image: url(\''.$file.'/'.$imageDirName.'/'.$imageName.'\');"></div>
										<div class="news-border">
											<h1 class="title">
												'.$title.'
											</h1>
											<p class="text">'
												.$item.

											'</p>

											<div class="item-bottom">
												<div class="middle">
													<div class="side-arrow" onclick=\'window.location.href="'.$url.'";\'>
									                	<i class="arrow right" style = "border-color: #4A7D13"></i>
									                </div>
									            </div>

												<div class="date-field">
													<div class="date">
														'.$date.'
													</div>
												</div>
												
									        </div>

										</div>
									</div>
								');

							}
						}
					}

				?>
			</div>
		</div>
	</div>

	


	<?php include('../footer/footer.html'); ?>
	<script src="./js/transformMobile.js"></script>
</body>