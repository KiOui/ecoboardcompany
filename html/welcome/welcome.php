
<!DOCTYPE html>

<html>
<head>

    <title>Eco-Board Company</title>

    <link rel="stylesheet" href="./css/welcome.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <LINK REL="SHORTCUT ICON" HREF="../img/logo.ico">
    <meta name="description" content="Eco Boardcompany: Get a job!"/>

</head>
<body>

    <?php include('../header/header-fixed.html'); ?>
    <div class="holder">
        <div class="middle-block">
            <div class="top">
                <img class="top-banner" src="./img/jobs.png">
                <div class="hire">
                    Get hired now!
                </div>
            </div>
            <div class="hire-block">
                <p>
                    Eco Board Company International is a dynamic company that manufactures sustainable building materials. Our work-crew consists of a miscellaneous blend of skillful and dedicated people. Although at the moment we do not have any vacancies, we are always on the lookout for new talent! If you are convinced that you can make a unique contribution to our company, and if our core values are your core values, take this chance and contact us.
                </p>
            </div>
            <div class="downloads">
                <table class="download-table">
                      <tr>
                        <td>Download our company folder</td>
                        <td class="hover-me" onclick="window.location.href='./download/Leaflet.pdf';"><i class="fa fa-download fa"></i> Download</td>
                      </tr>
                </table>
            </div>
            <div class="contact-link">
                <i onclick="window.location.href='../contact/contact.php';" class="arrow right side-arrow"></i><p class="contact-text">Get in touch with us now!</p>
            </div>
        </div>
    </div>

    <?php include('../footer/footer.html'); ?>
</body>

</html>
