<!DOCTYPE html>
<html lang="en">

<head>
	<title>NCU TeleHealth</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/aos.css">

	<link rel="stylesheet" href="../css/ionicons.min.css">

	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">

	<?php
	session_start();
	require_once "../signin/regappointment.php" ?>


</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	<div class="py-1 bg-black top">
		<div class="container">
			<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
				<div class="col-lg-12 d-block">
					<div class="row d-flex">
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
							<span class="text">+876 989 0725</span>
						</div>
						<div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
							<span class="text">NcuMedical@ncu.edu.jm</span>
						</div>
						<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
							<p class="mb-0 register-link"><a href="../signup/signup.php" class="mr-3">Sign Up</a>
								<a href="../signin/signin.php">Sign In</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.html">NCU Cares</a>
			<button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav nav ml-auto">
					<li class="nav-item"><a href="home.php" class="nav-link"><span>Home</span></a></li>
					<li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
					<li class="nav-item"><a href="#department-section" class="nav-link"><span>Department</span></a></li>
					<li class="nav-item"><a href="#doctor-section" class="nav-link"><span>Doctors</span></a></li>
					<li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
					<li class="nav-item cta mr-md-2"><a href="#apointment_submission" class="nav-link">Appointment</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="hero-wrap js-fullheight" style="background-image: url('../images/BuildingNCU.jpeg');" data-section="home" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
				<div class="col-md-6 pt-5 ftco-animate">
					<div class="mt-5">
						<span class="subheading">Welcome to Norther Caribbean University Medical Center</span>
						<h1 class="mb-4" style="color: white;">We are here <br>for your Care</h1>
						<p class="mb-4" style="color: white;">When you have a dream, you've got to grab it and never let go.</p>
						<p><a href="#apointment_submission" class="btn btn-primary py-3 px-4">Make an appointment</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 col-lg-5 d-flex">
					<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(https://i.imgur.com/FC1fSmR.jpg);">
					</div>
				</div>
				<div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
								<h2 class="mb-4">We Are <span>Northern Caribbean University Medical Clinic</span></h2>
								<p>What you get by achieving your goals is not as important as what you become by achieving your goals.</p>
								<p><a href="#apointment_submission" class="btn btn-primary py-3 px-4">Make an appointment</a> <a href="#" class="btn btn-secondary py-3 px-4">Contact us</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-7 py-5">
					<div class="py-lg-5">
						<div class="row justify-content-center pb-5">
							<div class="col-md-12 heading-section ftco-animate">
								<h2 class="mb-3">Our Services</h2>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-ambulance"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Emergency Services</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-dropper"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Lab Tests</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-doctor"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">Qualified Doctors</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 d-flex align-self-stretch ftco-animate">
								<div class="media block-6 services d-flex">
									<div class="icon justify-content-center align-items-center d-flex"><span class="flaticon-stethoscope"></span></div>
									<div class="media-body pl-md-4">
										<h3 class="heading mb-3">On Campus Checkup</h3>
										<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-5 d-flex">
					<div class="appointment-wrap bg-white p-4 p-md-5 d-flex align-items-center">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="appointment-form ftco-animate">
							<h3 id="apointment_submission">Consultation</h3>

							<div class="">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="First Name" name="First-Name">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Last Name" name="Last-Name">
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="ion-ios-arrow-down"></span></div>
											<select name="service" id="" class="form-control">
												<option value="">Select Your Services</option>
												<option value="Dental">Dental</option>
												<option value="Medical">Medical</option>
												<option value="Lab">Lab Work</option>
												<option value="Check Up">Check up</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<input type="number" class="form-control" name="contact" placeholder="Phone">
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<div class="input-wrap">
										<input type="date" name="appdate" class="form-control appointment_date" placeholder="Date">
									</div>
								</div>
								<div class="form-group">
									<div class="input-wrap">
										<input type="time" name="apptime" class="form-control appointment_time" placeholder="Time">
									</div>
								</div>
							</div>
							<div class="">
								<div class="form-group">
									<textarea name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message - 200 word limit" maxlength="200"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="sub_appointment" value="Appointment" class="btn btn-secondary py-3 px-4">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro img" style="background-image: url(../images/ncuStaff.jpg); width: auto;margin: auto;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-center">
					<h2>Your Health is Our Priority</h2>
					<p>We can manage your dream building A small river named Duden flows by their place</p>
					<p class="mb-0"><a href="#" class="btn btn-white px-4 py-3">Search Places</a></p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb" id="department-section">
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md-4 d-flex">
					<div class="img img-dept align-self-stretch" style="background-image: url(../images/ncuppl.jpg);"></div>
				</div>

				<div class="col-md-8">
					<div class="row no-gutters">
						<div class="col-md-4">


							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="flaticon-doctor"></span>
									</div>
									<h3><a href="#">Dental</a></h3>
									<p>Far far away, behind the word mountains</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="flaticon-heart-rate"></span>
									</div>
									<h3><a href="#">Medical</a></h3>
									<p>Far far away, behind the word mountains</p>
								</div>
							</div>
							<div class="department-wrap p-4 ftco-animate">

							</div>
							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="flaticon-dropper"></span>
									</div>
									<h3><a href="#">Lab Tests</a></h3>
									<p>Far far away, behind the word mountains</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">

							<div class="department-wrap p-4 ftco-animate">
								<div class="text p-2 text-center">
									<div class="icon">
										<span class="flaticon-stethoscope"></span>
									</div>
									<h3><a href="#">Check ups</a></h3>
									<p>Far far away, behind the word mountains</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section" id="doctor-section">
		<div class="container-fluid px-5">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-8 text-center heading-section ftco-animate">
					<h2 class="mb-4">Our Qualified Doctors</h2>
					<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(../images/jdcoc1.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. Rebecca Wilson</h3>
							<span class="position mb-2">Dentist</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(../images/jdoc2.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. John Parker</h3>
							<span class="position mb-2">Psychiatrist </span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(../images/jdoc3.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. Ian Smith</h3>
							<span class="position mb-2">Dentist</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(../images/jdoc4.jpg);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3 class="mb-2">Dr. Alicia Henderson</h3>
							<span class="position mb-2">Pediatrician</span>
							<div class="faded">
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social text-center">
									<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
									<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-facts img ftco-counter" style="background-image: url(../images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col-md-5 heading-section heading-section-white">
					<span class="subheading">Fun facts</span>
					<h2 class="mb-4">Over 5,100 patients trust us</h2>
					<p class="mb-0"><a href="#apointment_submission" class="btn btn-secondary px-4 py-3">Make an appointment</a></p>
				</div>
				<div class="col-md-7">
					<div class="row pt-4">
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="30">0</strong>
									<span>Years of Experienced</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="4500">0</strong>
									<span>Happy Patients</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="84">0</strong>
									<span>Number of Doctors</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18">
								<div class="text">
									<strong class="number" data-number="300">0</strong>
									<span>Number of Staffs</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section testimony-section img" style="background-image: url(../images/bg_3.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-3">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Read testimonials</span>
					<h2 class="mb-4">Our Patient Says</h2>
				</div>
			</div>
			<div class="row ftco-animate justify-content-center">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel ftco-owl">
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(../images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Execptional.</p>
									<p class="name">Andrew Gooden</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(../images/person_6.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Phenominal.</p>
									<p class="name">Mikarlo Franis</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(../images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">They were good.</p>
									<p class="name">Zachary Berry</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(../images/person_5.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Phenominal Experience.</p>
									<p class="name">Mickailia Reid</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap text-center py-4 pb-5">
								<div class="user-img" style="background-image: url(../images/brian.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text px-4">
									<p class="mb-4">Exceptional.</p>
									<p class="name">Brian Miller</p>
									<span class="position">Patients</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section contact-section" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<h2 class="mb-4">Contact Us</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>
			<div class="row d-flex contact-info mb-5">
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center bg-light">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-map-signs"></span>
						</div>
						<h3 class="mb-4">Address</h3>
						<p>Northern Caribbean University Manchester Rd.
							Mandeville
							Manchester
							Jamaica</p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center bg-light">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-phone2"></span>
						</div>
						<h3 class="mb-4">Contact Number</h3>
						<p><a href="tel://876999998">+ 876 999 9998</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center bg-light">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-paper-plane"></span>
						</div>
						<h3 class="mb-4">Email Address</h3>
						<p><a href="mailto:NcuMedical@ncu.edu.jm">NcuMedical@ncu.edu.jm
							</a></p>
					</div>
				</div>
				<div class="col-md-6 col-lg-3 d-flex ftco-animate">
					<div class="align-self-stretch box p-4 text-center bg-light">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="icon-globe"></span>
						</div>
						<h3 class="mb-4">Website</h3>
						<p><a href="https://www.ncu.edu.jm/">Northern Caribbean University</a></p>
					</div>
				</div>
			</div>
			<div class="row no-gutters block-9">
				<div class="col-md-6 order-md-last d-flex">
					<form action="#" class="bg-light p-5 contact-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Your Email">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message-max 200 words" maxlength="200"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-secondary py-3 px-5">
						</div>
					</form>

				</div>

				<div class="col-md-6 d-flex">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3244.7337505919218!2d-77.5017808856383!3d18.015682589123003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8edb95897b011ce9%3A0xccc9afeef93177c1!2sNorthern%20Caribbean%20University!5e1!3m2!1sen!2sjm!4v1613875176399!5m2!1sen!2sjm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" id="map"></iframe>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section img" style="background-image: url(../images/footer-bg.jpg);">
		<div class="overlay"></div>
		<div class="container-fluid px-md-5">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Ncu Cares</h2>
						<p>Far far away, behind the word mountains, far from the countries.</p>
						<ul class="ftco-footer-social list-unstyled mt-5">
							<li class="ftco-animate"><a href="https://twitter.com/ncueducation?lang=en"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="https://web.facebook.com/ncueducation/?_rdc=1&_rdr"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/ncu_jamaica/?hl=en"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Departments</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Labs</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Medical</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Dental</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-4">
						<h2 class="ftco-heading-2">Links</h2>
						<ul class="list-unstyled">
							<li><a href="home.php"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
							<li><a href="#department-section"><span class="icon-long-arrow-right mr-2"></span>Departments</a></li>
							<li><a href="#doctor-section"><span class="icon-long-arrow-right mr-2"></span>Doctors</a></li>
							<li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Services</h2>
						<ul class="list-unstyled">
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Emergency Services</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Qualified Doctors</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>On Campus Checkup</a></li>
							<li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Lab tests</a></li>

						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">Northern Caribbean University Manchester Rd.
										Mandeville
										Manchester
										Jamaica</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 876 999 9998</span></a></li>
								<li><a href="mailto:fallensky200@gmail.com"><span class="icon icon-envelope pr-4"></span><span class="text">NcuMedical@ncu.edu.jm </span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">

					<p>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/jquery.stellar.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/aos.js"></script>
	<script src="../js/jquery.animateNumber.min.js"></script>
	<script src="../js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="../js/google-map.js"></script>

	<script src="../js/main.js"></script>

</body>

</html>