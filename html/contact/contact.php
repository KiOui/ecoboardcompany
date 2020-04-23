<!DOCTYPE html>

<html>


<head>
	<LINK REL="SHORTCUT ICON" HREF="../img/logo.ico">
	<title>Contact us</title>
    <link rel="stylesheet" href="./css/contact.css">
    <meta name="description" content="Eco Boardcompany: Contact us"/>
</head>
<body>
    <?php include('../header/header-fixed.html'); ?>        
           
        
    <header id="header">
        <div class="showHeaderImage" id="headerImage">
            <img class="logo" src="./img/EcoBoard-Company-logo-balk.jpg">
            <div class="text" id="fade">
                <p id="top-text-fade">
                    Contact form
                </p>
            </div>
        </div>
    </header>

    <div class="form">
      <form action="./process-contact-request.php" method="post">
        <label for="fname">Full Name</label>
        <input type="text" id="fname" name="fullname" placeholder="Your name">

        <label for="lname">Email</label>
        <input type="email" id="lname" name="email" placeholder="Your E-mail">

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Your Phone Number">

        <label for="pActivity">Professional Activity</label>
        <select id="country" name="activity">
          <option value="designer">Architect / Designer</option>
          <option value="builder">Carpenter / House Builder</option>
          <option value="distributer">Distributor / Specialized Dealer</option>
          <option value="supplier">Furniture / Supplier Industry</option>
          <option value="institutions">Institutions / Associations</option>
          <option value="floorInstaller">Professional Floor Installer</option>
          <option value="publicProjects">Public Projects</option>
          <option value="privateProjects">Private Projects</option>
          <option value="fitter">Shop Fitter</option>
          <option value="student">Student / Individual</option>
          <option value="other">Other Activities</option>
        </select>

        <label for="phone">Company</label>
        <input type="text" id="company" name="company" placeholder="Your Company">

        <label for="phone">City</label>
        <input type="text" id="city" name="city" placeholder="Your City">

        <label for="phone">Country</label>
        <input type="text" id="country" name="country" placeholder="Your Country">

        <label for="phone">Subject</label>
        <input type="text" class="subject" name="subject" placeholder="Your Subject">

        <label for="phone">Message</label>
        <input type="text" class="Message" name="message" placeholder="Your message" style="height: 200px;">
        <input name="submit" type="submit" value="Submit" >
      </form>


    </div>
    <div class="bottom">
        <div class="information">
            <h1>Eco Boardcompany Headquarters</h1>
            <p>Industrieweg 62e</p>
            <p>8071CV Nunspeet</p>
            <p>Nederland</p>
            <p>06-26360183</p>
            <p>Email: info@ecoboardcompany.com</p>   
        </div>
    </div>

<?php include('../footer/footer.html'); ?>

</body>

</html>
