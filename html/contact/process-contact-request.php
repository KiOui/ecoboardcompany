<?php

	$mailto = "info@ecoboardcompany.com";

	$headers = "From: Eco Boarcompany <info@ecoboardcompany.com> \r\n";

	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['fullname']) || empty($_POST['email'] || empty($_POST['subject'] || empty($_POST['message'])))) {
			$error = "Some of the required fields were not entered.";
		}
		else
		{

			$fullname = $_POST['fullname'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$activity = $_POST['activity'];
			$company = $_POST['company'];
			$city = $_POST['city'];
			$country = $_POST['country'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];

			$regex = "/[^a-zA-Z0-9 .,!@#$%&*()]+/";


			// To protect email injection attacks
			$subject = preg_replace($regex, "", $subject);
			$message = preg_replace($regex, "", $message);
			$fullname = preg_replace($regex, "", $fullname);
			//email does not need replacements
			$phone = preg_replace($regex, "", $phone);
			$activity = preg_replace($regex, "", $activity);
			$company = preg_replace($regex, "", $company);
			$city = preg_replace($regex, "", $city);
			$country = preg_replace($regex, "", $country);

			$mailbody = wordwrap("The contact form has been filled out.\n\n" .
						"Name: " . $fullname . "\n" .
						"Email: " . $email . "\n" .
						"Phone: " . $phone . "\n" .
						"Activity type: " . $activity . "\n" .
						"Company name: " . $company . "\n" .
						"Country: " . $country . "\n" .
						"City: " . $city . "\n" .
						"Subject: " . $subject . "\n\n" .
						"--- Start of message ---\n\n" . $message . "\n\n" .
						"--- End of message ---" . "\n\n" .
						"This message was automatically generated.", 70);

			$mailbodyuser = wordwrap("Thanks for contacting us, we will reply shortly.\n\n" .
						"Name: " . $fullname . "\n" .
						"Email: " . $email . "\n" .
						"Phone: " . $phone . "\n" .
						"Activity type: " . $activity . "\n" .
						"Company name: " . $company . "\n" .
						"Country: " . $country . "\n" .
						"City: " . $city . "\n" .
						"Subject: " . $subject . "\n\n" .
						"--- Start of message ---\n\n" . $message . "\n\n" .
						"--- End of message ---" . "\n\n" .
						"This message was automatically generated.", 70);

			mail($mailto, "Contact form: " . $subject, $mailbody, $headers);
			mail($email, "Contact form: " . $subject, $mailbodyuser, $headers);

		}
	}


?>

<!DOCTYPE html>

<html>
<head>

    <title>Eco-Board Company</title>

    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <LINK REL="SHORTCUT ICON" HREF="../img/logo.ico">
    <meta http-equiv="refresh" content="2; URL=./contact.php">


</head>
<body>
	Done, a mail was send to <?php echo($email) ?>. You are now being redirected...
</body>

</html>