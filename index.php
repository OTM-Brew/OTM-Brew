<!DOCTYPE html>
<html>
<head>
	<title>OTM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="bg">
	  <!-- <div class="stars"></div>
		<div class="twinkling"></div> -->
		<div class="clouds"></div>
	</div>
	
	<div class="bgImage">
		<div class="row linear">
			<div class="col-md-12 col-sm-12 col-xs-12 bookbutton">
				<div class="col-md-2 col-sm-3 col-xs-12" style="z-index: 1;">
				 	<button type="button" class="reservation" data-toggle="modal" data-target="#skin-hair">BOOK A RESERVATION</button>
					<!-- <a href="tel:+919987639293">
						<button type="button" class="reservation">BOOK A RESERVATION</button>
					</a> -->
				</div>
				<div class="col-md-offset-8 col-md-2 col-sm-offset-6 col-sm-3 col-xs-6">
					<img src="image/logo@3x.png" class="img-responsive logoImage" alt="logo">
				</div>
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 heroText">
				<h1>
					<span class="word">
						<span class="blink blink-5">O</span>
						<span class="blink blink-1 blink-5">V</span>
						<span class="blink blink-2 blink-5">E</span>
						<span class="blink blink-3 blink-5">R</span>
					</span>
					<span class="word">
						<span class="blink blink-5">T</span>
						<span class="blink blink-1 blink-5">H</span>
						<span class="blink blink-2 blink-5">E</span>
					</span>
					<span class="word">
						<span class="blink blink-5">M</span>
						<span class="blink blink-1 blink-5">O</span>
						<span class="blink blink-2 blink-5">O</span>
						<span class="blink blink-3 blink-5">N</span>
					</span>
					<br/>
					<span class="word">
						<span class="blink blink-5">B</span>
						<span class="blink blink-1 blink-5">R</span>
						<span class="blink blink-2 blink-5">E</span>
						<span class="blink blink-3 blink-5">W</span>
					</span>
					<span class="word">
						<span class="blink blink-5">C</span>
						<span class="blink blink-1 blink-5">O</span>
						<span class="blink blink-3 blink-5">.</span>
					</span>
				</h1>
			</div>
			<div class="col-xs-12 hidden-md hidden-sm hidden-lg arrow">
				<a href="#event" id="scroll" >
					<img src="image/arrow-down.png" class="img-responsive" alt="arrow-down">
					<!-- <button type="button"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></button> -->
				</a>
			</div>
		</div>
	</div>

	<div class="modal" id="skin-hair" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content" style="width: 210px;">
				<!-- <div class="row"> -->
			 		<div class="modal-header" style="border-bottom: none;">
			   		<h4 class="modal-title" style="display: inline-grid;">
			   			<a href="tel:+919100623334" style="color: black; display: flex; padding: 10px">
								<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+919100623334
							</a>
							<a href="tel:+919100623335" style="color: black; display: flex; padding: 10px">
								<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+919100623335
							</a>
			   		</h4>
			 		</div>
				<!-- </div> -->
			</div>
		</div>
	</div>

	<div class="row" style="z-index: 8">
		<!-- Event List -->
		<div id="event" class="col-md-12 col-sm-12 col-xs-12 topSpace" id="event">
			<h1 class="center h1-font-size">Events</h1>
		</div>
		
		<div class="col-md-12 col-sm-12 col-xs-12 topSpace center eventlist" style="margin-bottom: 5%;">
			<div class="col-md-3 col-sm-3 col-xs-12" style="height: 150px;">
				<div id="f1_container">
					<div id="f1_card" class="shadow">
				  	<div class="front face face1">
				    	<!-- <img src="/image/Windows Logo.jpg" class="img-responsive" alt="event calender1" style="width: 100%; height: 281px;"> -->
				    	<h1 style="margin-top: 10px;">1st To 6th August</h1>
				  	</div>
				  	<div class="back face face1 center">
				    	<div>
				    		<p>2nd August – Paradise Circus</p>
								<p>4th August – Seven</p>
								<p>5th August – Dj Kave</p>
								<p>6th August - The Rugmuffins (Evening) + Morning (Shawn)</p>
				    	</div>
				  	</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12" style="height: 150px;">
				<div id="f2_container">
					<div id="f2_card" class="shadow">
					  	<div class="front face face1">
					  	<h1>7th To 13th August</h1>
					    	<!-- <img src="/image/Windows Logo.jpg" class="img-responsive" alt="event calender2" style="width: 100%; height: 281px;"> -->
					  	</div>
					  	<div class="back face face1 center">
				    		<div>
				    			<p>9th August - (Looking for Sufi Artist)</p>
									<p>11th August - Junkyard Groove </p>
									<p>13th August - Afternoon - Shiv Menon / Evening - When Chai Met Toast</p>
				    		</div>
					  	</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12" style="height: 150px;">
				<div id="f3_container">
					<div id="f3_card" class="shadow">
					  	<div class="front face face1">
					  	<h1>14th To 20th August</h1>
					    	<!-- <img src="/image/Windows Logo.jpg" class="img-responsive" alt="event calender3" style="width: 100%; height: 281px;"> -->
					  	</div>
					  	<div class="back face face1 center">
					    	<div>
					    		<p>16th August – Three of us and her</p>
									<p>18th August – Vernon Duo</p>
									<p>19th August – Dj Cas</p>
									<p>20th August – Arpit Chourey (Afternoon and Duo in the evening)</p>
					    	</div>
					  	</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12" style="height: 150px;">
				<div id="f4_container">
					<div id="f4_card" class="shadow">
				  	<div class="front face face1">
				  	<h1>21st To 31st August</h1>
				    	<!-- <img src="/image/Windows Logo.jpg" class="img-responsive" alt="event calender3" style="width: 100%; height: 281px;"> -->
				  	</div>
				  	<div class="back face face1 center">
				    	<div>
				    		<p>23rd August – Tapa Corda</p>
								<p>25th August – Mixed Pickle</p>
								<p>27th August – Vernon Duo (Evening and Afternoon)</p>
								<p>30th August – Paradise Circus</p>
				    	</div>
				  	</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Event List -->

		<?php include 'partial/standard.php';?>

		<!-- Testimonials -->
		<div id="testimonials" class="col-md-12 col-sm-12 col-xs-12 topSpace">
			<div class="col-md-offset-2 col-sm-8 col-sm-offset-2 col-md-8 col-xs-12" style="text-align: center;">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
		      	<div class="item active">
			        <blockquote style="height: 125px; border-left: none;">
								<p style="font-family: Roboto-Regular;">&#39;Everything you see at Over The Moon Brew Co. is there for a purpose&#39;</p>
								<footer style="font-family: Roboto-Regular;">Ameet Mirpuri</footer>
							</blockquote>
							<img src="image/outside-area-800-500.png" class="img-responsive" alt="outside-area" style="margin: 0 auto;">
		      	</div>
						<div class="item">
			        <blockquote style="height: 125px; border-left: none;">
								<p style="font-family: Roboto-Regular;">All we tried to dohere is create a one o f kind experience where people have everything they’d want</p>
								<footer style="font-family: Roboto-Regular;">Sanjay Bathla</footer>
							</blockquote>
							<img src="image/testimonial2.png" class="img-responsive" alt="testimonial2">
		      	</div>
			    </div>
		  	</div>
			</div>
			<!-- <div class="col-md-offset-2 col-md-8 col-sm-6 col-xs-12">
				<img src="image/outside-area-800-500.png" class="img-responsive" alt="outside-area" style="margin: 0 auto;">
			</div> -->
		</div>
		<!-- End Testimonials -->

		<!-- Menus Item List -->
		<div id="ourMenu" class="col-md-12 col-sm-12 col-xs-12 topSpace">
			<h1 class="center h1-font-size menuh1">Explore Our Menus</h1>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 topSpace menuheight">
			<a href="#">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div id="f_container">
						<div id="f_card" class="shadow">
							<div class="front face">
								<h1 class="center h1-font-size-remove" style="font-family: Roboto-Medium;">FOOD</h1>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="#">
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div id="f_container">
						<div id="f_card" class="shadow">
							<div class="front face">
								<h1 class="center h1-font-size-remove" style="font-family: Roboto-Medium;">OTM SPECIALS</h1>
							</div>
						</div>
					</div>
				</div>
			</a>
			<a href="#">
				<div class="col-md-4 col-sm-4 col-xs-12 h1-font-size-remove">
					<div id="f_container">
						<div id="f_card" class="shadow">
							<div class="front face">
								<h1 class="center h1-font-size-remove" style="font-family: Roboto-Medium;">BAR</h1>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<!-- End Menus Item List -->

		<!-- OSO Image & Content -->
		<div class="col-md-12 col-sm-12 col-xs-12 topSpace">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="image/UPSTAIRS-white-area-1600-1000.png" class="img-responsive" alt="UPSTAIRS">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 oso-content osomobile">
				<p style="font-family: Roboto-Regular;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
		</div>
		<!-- End OSO Image & Content -->

		<!-- About area -->
		<div id="about" class="col-md-12 col-sm-12 col-xs-12 aboutImage">
			<div class="linear">
				<!-- <div class="col-md-6 col-sm-6 hidden-xs"></div> -->
				<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12 about-content">
					<div>
						<h1 class="h1-font-size">About Us</h1>
						<p>Another edition of Over The Moon with the same old soul but with whole new concept!</p>
						<p>Gachibowli’s First Brew House</p>
						<p>&#39;Where old world charm meets modern twist’</p>
						<p>Over The Moon Brew Company is sprawling young and vibrant place to entertain the crowd with a one of a kind experience. We’ve got afancy food tuck called the truc ker’s shop which will woo you away and make you go all gaga over our delightful delicacies.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End About area -->
	</div>

	<!-- <footer>
		<div class="col-md-12 col-sm-12 col-xs-12 topSpace">
			<div class="col-md-6 col-sm-6 col-xs-12" >
				<img src="image/200_200.png" class="img-responsive" alt="logo-brew" style="width: 160px;">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.4084494100134!2d78.35971831431912!3d17.44015398804706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93eb3178390f%3A0x2259b0abaed2b868!2sOver+the+Moon+Brew+Co.!5e0!3m2!1sen!2sin!4v1501487986687" frameborder="0" allowfullscreen class="map"></iframe>
				<p class="logoCenter">Address: Plot No. B 2, Quiet Lands, Gachibowli, Serlingampally,<br/>Hyderabad, Telangana 500049</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 osomobile">
				<div class="otm-logo-size">
					<img src="image/logo@3x.png" class="img-responsive" alt="logo" style="width: 100px;">
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.481601416379!2d78.39649621431907!3d17.43664858804903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91450809eb7b%3A0xcbb0caa89bb19c6b!2sOver+The+Moon!5e0!3m2!1sen!2sin!4v1501488664270" frameborder="0" allowfullscreen class="map"></iframe>
				<p class="logoCenter">Address: 8th Floor, Daspalla Hotel, Road No. 37, Beside Bajaj <br/>Electronics, Jubilee Hills, Hyderabad, Telangana 500081</p>
			</div>
		</div>
	</footer>
	<div class="col-md-12 col-sm-12 col-xs-12 topSpace footer-nav-center" style="list-style-type: none;">
		<li><a href="#about">About Us</a></li>
		<li><a href="#event">Events</a></li>
		<li><a href="#ourMenu">Our Menus</a></li>
		<li><a href="#testimonials">Testimonials</a></li>
	</div> -->


	<script>
		$("#scroll").click(function () {
			$('html,body').animate({
		    scrollTop: $("#event").offset().top
		  }, 1000);
		});
	</script>
</body>
</html>