<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Flominence Foundation | Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="project-charity.css">
	<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<script src="jquery-3.4.1.js" type="text/javascript"></script>
    <script src="bootstrap/dist/bootstrap.min.js" type="text/javascript"></script>
    <script src="bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light header">
	  <a class="navbar-brand" href="#"><img src="cross.jpg" class="header-logo"><span class="foundation">Flominence Foundation</span></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#about-mission">VISION/MISSION</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">OUTREACH</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	          <a class="dropdown-item" href="about.html#about-the-organisation">ABOUT THE ORGANISATION</a>
	          <a class="dropdown-item" href="about.html#about-the-founder">ABOUT THE FOUNDER</a>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link contact-active" href="#">CONTACT US</a>
	      </li>
	    </ul>
	    <button href="#" class="donate">DONATE</button>
	  </div>
	</nav>

	<div class="jumbotron-stuff">
		<h2 class="about-us">Contact</h2>
	</div>
	<div class="bread-crumb">
		<div class="bread-crumb-child">
			<p><a href="index.html" class="bread-crumb-home-link">Home</a><span class="bread-crumb-arrow">></span><span class="bread-crumb-link">Contact</span></p>
		</div>
	</div>


	<div class="container body-top">
		<div class="about-body-text" id="about-the-organisation">
			<h3 class="about-heading">We can't wait to hear from you</h3>
			<div class="">
				<p class="about-paragraph">Thank you for choosing to be a part of the good work we're doing at Flominence Foundation.
					We'll respond to your inquiry within 3 days. If it's an urgent and time sensitive inquiry, please contact us directly at...
				</p>
			</div>
		</div>
		<div class="contact-form">
			<formb action="contact.php">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12">
							<p class="form-text">First Name <span class="form-asterisk">*</span></p>
							<input type="text" name="" placeholder="First Name" class="form-control">
						</div>
						<div class="col-lg-6 col-12">
							<p class="form-text">Last Name<span class="form-asterisk">*</span></p>
							<input type="text" name="" placeholder="Last Name" class="form-control">
						</div>
						<div class="col-lg-6 col-12">
							<p class="form-text">Email <span class="form-asterisk">*</span></p>
							<input type="email" name="" placeholder="Email" class="form-control">
						</div>
						<div class="col-lg-6 col-12">
							<p class="form-text">Phone <span class="form-asterisk">*</span></p>
							<input type="text" name="" placeholder="Phone Number" class="form-control">
						</div>
						<div class="col-12">
							<p class="form-text">Address <span class="form-asterisk">*</span></p>
							<input type="address" name="" placeholder="Address" class="form-control">
						</div>
						<div class="col-lg-4 col-12">
							<p class="form-text">City</p>
							<input type="text" name="" placeholder="City" class="form-control">
						</div>
						<div class="col-lg-4 col-12">
							<p class="form-text">State</p>
							<input type="text" name="" placeholder="State" class="form-control">
						</div>
						<div class="col-lg-4 col-12">
							<p class="form-text">Country <span class="form-asterisk">*</span></p>
							<input type="text" name="" placeholder="Country" class="form-control">
						</div>
						<div class="col-12">
							<p class="form-text">Message <span class="form-asterisk">*</span></p>
							<textarea  placeholder="Message" class="form-control" cols="4" rows="4"></textarea>
						</div>
						<div class="col-12">
                            <button type="submit" class="btn btn-primary submit-form">Send a message</button>
                        </div>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
<footer>
	<div class="container-fluid footer-div">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 footer-brand-div">
				<a class="footer-brand" href="#"><img src="cross.jpg" class="header-logo"><span class="footer-foundation">Flominence Foundation</span></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 social-div">
				<div class="col-12">
					<p class="mission-first">GO SOCIAL. FOLLOW US</p>
				</div>
				<div class="col-12">
					<p><a href="#" class=""><span class="fa fa-twitter twitter"></span></a><a href="#" class="social"><span class="fa fa-instagram instagram"></span></a><a href="#" class="social"><span class="fa fa-facebook facebook"></span></a></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 compliance-div">
				<p>Flominence foundation is a registered non-profit charitable organisation (reg ID number 769-8653577) in compliance with Section 6(c) of the Nigerian NGO code</p>
				<p>
					<button href="#" class="donate">DONATE</button>
				</p>
			</div>
		</div>
	</div>
	<div class="container footer-links">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<p class="footer-space">DISCOVER</p>
				<p><a href="#">Who we are</a>
				<p><a href="#">Our Work</a>
				<p><a href="#">Outreach</a>
				<p><a href="#">About Us</a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<p class="footer-space">SUPPORT</p>
				<p><a href="#">Donate Now</a>
				<p><a href="#">Contact Us</a>
				<p><a href="#">Suggest a Project</a>
				<p><a href="#">Volunteer</a>
			</div>
		</div>
	</div>
	<p class="copyright">&copy; 2021 Flominence Foundation. All rights reserved. Designed by Scriptkidd</p>
</footer>
</html>