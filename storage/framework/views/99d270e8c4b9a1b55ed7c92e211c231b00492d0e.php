<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
<!--
Holiday Template
http://www.templatemo.com/tm-475-holiday
-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<!-- Header -->
	<div class="tm-header">
	<div class="container">
  			<div class="row">
  				<div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
				  <img style="margin-top: -14px;" src="<?php echo e(url('img/29.jpg')); ?>" width="70" height="57"  />
	</div>
				  
				<div class="col-lg-6 col-md-8 col-sm-9">
					<div class="mobile-menu-icon">
						<i class="fa fa-bars"></i>
					</div>
					<nav class="tm-nav">
					<ul>
                            <li style="margin-top: -10px;"><a href="THE 29" ><h5>Accueil</h5></a></li>
                            <li style="margin-top: -10px;"><a href="activite"><h5>Activités</h5></a></li>
                            <li style="margin-top: -10px;"><a href="evenements"><h5>Evénements</h5></a></li>
							<li style="margin-top: -10px;"><a href="planning"><h5>Planning</h5></a></li>
                            <li style="margin-top: -10px;"><a href="contact"class="active"><h5>Contact</h5></a></li>
                            
                        </ul>

					</nav>		
				</div>				
			</div>
		</div>	  	
	</div>

	<!-- Banner -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			   

	<!-- gray bg -->	
	
	
	<!-- white bg -->
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h3 class="tm-section-title">Contactez-Nous</h3></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<form action="#" method="post" class="tm-contact-form">
					<div class="col-lg-6 col-md-6">
					
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.7585114249055!2d10.178290514891561!3d36.848259179938644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34a543f67785%3A0xa6770e927e6f46db!2s5%20Ave%20d&#39;Afrique%2C%20Ariana!5e0!3m2!1sfr!2stn!4v1652372537559!5m2!1sfr!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						<div class="contact-social">
							<a href="https://www.facebook.com/the29menzah5" target="_blanck" class="tm-social-icon tm-social-facebook"><i class="fa fa-facebook"></i></a>
							<a href="https://www.instagram.com/the_29_menzah5/" target="_blanck" class="tm-social-icon tm-social-instagram"><i class="fa fa-instagram"></i></a>
				      		
				
						</div>
						<br>
					</div> 
					<div class="col-lg-6 col-md-6 tm-contact-form-input">
						<div class="form-group">
							<input type="text" id="contact_name" class="form-control" placeholder="Nom" />
						</div>
						<div class="form-group">
							<input type="email" id="contact_email" class="form-control" placeholder="Mail" />
						</div>
						<div class="form-group">
							<input type="text" id="contact_subject" class="form-control" placeholder="Sujet" />
						</div>
						<div class="form-group">
							<textarea id="contact_message" class="form-control" rows="6" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<button class="tm-submit-btn" type="submit" name="submit">Envoyer</button> 
						</div>               
					</div>
				</form>
			</div>			
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name</p>
			</div>
		</div>		
	</footer>
	<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
	<script type="text/javascript" src="js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
	<script>
		/* Google map
      	------------------------------------------------*/
      	var map = '';
      	var center;

      	function initialize() {
	        var mapOptions = {
	          	zoom: 14,
	          	center: new google.maps.LatLng(37.769725, -122.462154),
	          	scrollwheel: false
        	};
        
	        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

	        google.maps.event.addDomListener(map, 'idle', function() {
	          calculateCenter();
	        });
        
	        google.maps.event.addDomListener(window, 'resize', function() {
	          map.setCenter(center);
	        });
      	}

	    function calculateCenter() {
	        center = map.getCenter();
	    }

	    function loadGoogleMap(){
	        var script = document.createElement('script');
	        script.type = 'text/javascript';
	        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
	        document.body.appendChild(script);
	    }
	
      	// DOM is ready
		$(function() {

			// https://css-tricks.com/snippets/jquery/smooth-scrolling/
			$('a[href*=#]:not([href=#])').click(function() {
				if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
					if (target.length) {
						$('html,body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});

		  	// Flexslider
		  	$('.flexslider').flexslider({
		  		controlNav: false,
		  		directionNav: false
		  	});

		  	// Google Map
		  	loadGoogleMap();
		  });
	</script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\THE29\resources\views/contact.blade.php ENDPATH**/ ?>