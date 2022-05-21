<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>THE 29</title>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

  <link rel="icon" href="29.jpg"> 
  
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
  <body class="tm-gray-bg">
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
						<li style="margin-top: -10px;"><a href="" class="active"><h5>Accueil</h5></a></li>
                            <li style="margin-top: -10px;"><a href="activite"><h5>Activités</h5></a></li>
                            <li style="margin-top: -10px;"><a href="evenements"><h5>Evénements</h5></a></li>
							<li style="margin-top: -10px;"><a href="planning"><h5>Planning</h5></a></li>
                            <li style="margin-top: -10px;"><a href="contact"><h5>Contact</h5></a></li>
                            
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
			    <div class="tm-banner-inner">
				<h1 class="tm-banner-title">La culture  <span class="tm-yellow-text"> de l’esprit est un autre soleil </span> pour les gens instruits</h1>
					<p class="tm-banner-subtitle"></p>
						
				</div>
				<img src="<?php echo e(url('img/centre1.jpg')); ?>" alt="Image" />	
		    </li>
		    <li>
			<div class="tm-banner-inner">
			<h1 class="tm-banner-title">L’homme  <span class="tm-yellow-text">sans culture est un arbre </span> sans fruit</h1>
					<p class="tm-banner-subtitle"></p>
  </div>
		      <img src="<?php echo e(url('img/centre2.jpg')); ?>" alt="Image" />
		    </li>
		    <li>
			  <div class="tm-banner-inner">
			  <h1 class="tm-banner-title">Une culture  <span class="tm-yellow-text">se doit d’être insatisfaite,</span>  sinon elle succombe</h1>
					<p class="tm-banner-subtitle"></p>
  </div>
		      <img src="<?php echo e(url('img/centre3.jpg')); ?>" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>



	<!-- gray bg -->	
    <!-- gray bg -->    
    <section class="container tm-home-section-1" id="more">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <!-- Nav tabs -->
                <div class="tm-home-box-1">
                    <ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
                        <li role="presentation" class="active">
                            <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Client</a>
                        </li>
                        <li role="presentation">
                            <a href="#car" aria-controls="car" role="tab" data-toggle="tab">Prarticipant</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                            <div class="tm-search-box effect2">
                                <form action="client.php" method="post" class="hotel-search-form">
                                    <div class="tm-form-inner">
                                        <div class="form-group">
                                            <input type="text" id="contact_nom" class="form-control" placeholder="NOM" /><br>
                                            <input type="text" id="contact_prénom" class="form-control" placeholder="PRENOM" /><br>
                                            <input type="text" id="contact_téléphone" class="form-control" placeholder="TELEPHONE"/><br>
                                            <input type="text" id="contact_mail" class="form-control" placeholder="MAIL" /><br>
                                            <input type="text" id="contact_adresse" class="form-control" placeholder="ADRESSE" />
                                        </div>
                                        <div class="form-group margin-bottom-0">
                                            </select> 
                                        </div>
                                    </div>                          
                                    <div class="form-group tm-yellow-gradient-bg text-center">
                                        <input type="submit" name="submit" class="tm-yellow-btn"/>
                                    </div>  
                                </form>
                            </div>
                        </div>
  
                        <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
                            <div class="tm-search-box effect2">
                                <form action="#" method="post" class="hotel-search-form">
                                    <div class="tm-form-inner">
                                        <div class="form-group">
                                        <input type="text" id="contact_nom" class="form-control" placeholder="NOM" /><br>
                                        <input type="text" id="contact_prénom" class="form-control" placeholder="PRENOM" /><br>
                                        
										<br>
                                                    <div class="form-group margin-bottom-0">
                                                    <select class="form-control">
                                                        <option value="">-- sexe -- </option>
                                                        <option value="1">homme</option>
                                                       <option value="2">femme</option>
                                                    </select>
                                                    </div>     
                                        </div>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker3'>
                                                <input type='text' class="form-control" placeholder="date de naissance" />
                                                <span class="input-group-addon">
                                                    <span class="fa fa-calendar"></span>
                                                </span> 
												<br>
												
                                            </div> <br>
											<select class="form-control">
                                            <option value="">-- Choisir l'activité 1 --  </option>
                                            <form method="post" action="traitement.php">
                                                <option value="peinture" >Peinture</option>
                                                <option value="dessin">Dessin</option>
                                                <option value="gravure">Gravure</option>
                                                <option value="céramique">Céramique</option>
                                                <option value="peinture" >Aquarelle</option>
                                                <option value="dessin">Bricolage</option>
                                                <option value="gravure">Origamie</option>
                                                <option value="céramique">Art culinaire</option>
                                                <option value="peinture" >Théatre</option>
                                                <option value="dessin">Musique</option>
                                                <option value="dessin">Scratch</option>
                                                <option value="gravure">Informatique</option>
                                                <option value="céramique">Robotique</option>
                                                <option value="peinture" >Jeu d'échec</option>
                                                <option value="dessin">Dévelopement humain</option>
                                                <option value="gravure">Entreprenariat</option>
                                                <option value="céramique">Creation d'entreprise</option>
                                                <option value="peinture" >Atelier français</option>
                                                <option value="dessin">Atelier anglais</option>
                                                <option value="dessin">Atelier arabe</option>
                                                <option value="dessin">Story boarding</option>
                                                <option value="dessin">Bande déssinée</option>
                                            </form>
  </select><br>
											<select class="form-control">
                                            <option value="">-- Choisir l'activité 2 --  </option>
                                            <form method="post" action="traitement.php">
                                                <option value="peinture" >Peinture</option>
                                                <option value="dessin">Dessin</option>
                                                <option value="gravure">Gravure</option>
                                                <option value="céramique">Céramique</option>
                                                <option value="peinture" >Aquarelle</option>
                                                <option value="dessin">Bricolage</option>
                                                <option value="gravure">Origamie</option>
                                                <option value="céramique">Art culinaire</option>
                                                <option value="peinture" >Théatre</option>
                                                <option value="dessin">Musique</option>
                                                <option value="dessin">Scratch</option>
                                                <option value="gravure">Informatique</option>
                                                <option value="céramique">Robotique</option>
                                                <option value="peinture" >Jeu d'échec</option>
                                                <option value="dessin">Dévelopement humain</option>
                                                <option value="gravure">Entreprenariat</option>
                                                <option value="céramique">Creation d'entreprise</option>
                                                <option value="peinture" >Atelier français</option>
                                                <option value="dessin">Atelier anglais</option>
                                                <option value="dessin">Atelier arabe</option>
                                                <option value="dessin">Story boarding</option>
                                                <option value="dessin">Bande déssinée</option>
										
                                            </form>
                                            
                                            </select> <br>
											<select class="form-control">
                                            <option value="">-- Choisir l'activité 3 --  </option>
                                            <form method="post" action="traitement.php">
                                                <option value="peinture" >Peinture</option>
                                                <option value="dessin">Dessin</option>
                                                <option value="gravure">Gravure</option>
                                                <option value="céramique">Céramique</option>
                                                <option value="peinture" >Aquarelle</option>
                                                <option value="dessin">Bricolage</option>
                                                <option value="gravure">Origamie</option>
                                                <option value="céramique">Art culinaire</option>
                                                <option value="peinture" >Théatre</option>
                                                <option value="dessin">Musique</option>
                                                <option value="dessin">Scratch</option>
                                                <option value="gravure">Informatique</option>
                                                <option value="céramique">Robotique</option>
                                                <option value="peinture" >Jeu d'échec</option>
                                                <option value="dessin">Dévelopement humain</option>
                                                <option value="gravure">Entreprenariat</option>
                                                <option value="céramique">Creation d'entreprise</option>
                                                <option value="peinture" >Atelier français</option>
                                                <option value="dessin">Atelier anglais</option>
                                                <option value="dessin">Atelier arabe</option>
                                                <option value="dessin">Story boarding</option>
                                                <option value="dessin">Bande déssinée</option>
                                            </form>
  </select><br>
                                        </div>
                                       
                                        </div>
										
											     
                                    </div>                          
                                    <div class="form-group tm-orange-gradient-bg text-center">
                                        <input type="button" onclick='window.location' href='traitement.php' name="submit" class="tm-yellow-btn">S'inscrire</input>
                                    </div>  
                                </form>
								<br>
                            </div>
                        </div>
                    </div>
					<br>
					<br>
					<br>
                </div>
                <div class="tm-testimonials-box">
                    <h2 class="tm-testimonials-title">THE 29</h2>
                    <div class="tm-testimonials-content">
                        <div class="tm-testimonial">
                            <p>Un sourire esquissé aux bords des lèvres joyeuses, dessiné grâce à des moments «KIDS et FRIENDLY » dans un lieu où bien-être rejoint partage et apprentissage et où l’on peut se rendre avec ses enfants sans gérer….désormais, c’est possible</p>                           	
                        </div>                          
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="tm-home-box-1 tm-home-box-1-2 tm-home-box-1-center">
                        <img src="img/29.jpg" alt="image" class="img-responsive">
                        <a href="#">
                      </a>			
                   </div>				
                </div>	
                </div>                                 
            </div>					
                </div>
            </div>
        </div>
	
		
        </div>
		<br>
		
		<br>
	

		
		<div class="section-margin-top">
            <div class="row">               
                <div class="tm-section-header">
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>
                    <div class="col-lg-6 col-md-6 col-sm-6"><h2 class="tm-section-title">THE 29 centre de loisirs et de culture</h2></div>
                    <div class="col-lg-3 col-md-3 col-sm-3"><hr></div>  
                </div>
            </div>
			<br>
            <section class="container tm-home-section-1" id="more">
                <div class="row">
                    <!-- slider -->
                    <div class="flexslider effect2 effect2-contact .tm-presentation-box-1">
                        <ul class="slides">
                            <li>
                                
                                <div class=".presentation-text">
                                    <h2 class="slider-title"><center> THE 29</center> </h2>
                                    <p> Délente,synergie parents-enfants et échanges entre amis sont le coeur battant de notre espace alliant loisirs et culture
										Des activités artistiques, culturelles et éducatives ludiques et évolutives serons  aux rendez-vous pour
										vous offrir des moments de partage et de pur plaisir. </p>
                                        <p> Nos coaches-spécialistes et artistes-invités
										d’honneurs nous permettront de faire la différence parce que votre bien-être sera notre bonheur
										Le centre se trouve sur l’avenue d’Afrique d’El Manzah 5. <p>  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                        <p >  Il offre : <p>
                                        <p style="font-size: 15px ; ">	- Une salle polyvalente agrémentée d’une bibliothèque et de jeux de sociétés ; </p>
                                        <p style="font-family: 15px;">	- Un espace de jeux artistique et d’éveil ; </p>
										<p style="font-family: 15px;"> - Une salle de formation dédiée aux activités nécessitant une certaine concentration en
										l’occurrence les ateliers de langues et de lecture-écriture, de robotique, de l’informatique
										etc…  </p>
										<p style="font-family: 15px;"> - Une jolie buvette superbement agencée, un petit carré vert aménagé et même des
										sanitaires réservés aux enfants, outre ceux des adultes, ont été pensé pour rejoindre à la
										sécurité de nos petits et satisfaire les attentes de nos visiteurs. </p>
                                            <br>
										<p>Si notre programme d’activités met à l’honneur les enfants, les adultes se plairont aussi dans
										notre espace de culture et loisirs.</p>
                                        <p>Les enfants seront pris en charge par nos animatrices spécialisées pour jouer avec eux, les initier à
										diverses activités enfantines et leur faire découvrir des savoirs et des savoir-faire spécifique. Aussi, à
										travers un planning riche, les enfants préalablement inscris, pourront participer à des activités
										d’apprentissage d’informatique, robotique, dessin, peinture, théâtre, jeux d’echec.. Chacune des
										activités sera chapotée par le coach ou le formateur spécialiste et chevronné </p>
										<p>Par ailleurs, désirant que les jeunes et les parents soient également impliqués, noous mettrons à
										leurs dispositions des jeux de sociétés et une bibliothèque garnie d’ouvrage de référence et
										diversifiés. </p>
										<p>Il nous semble enfin important de préciser que ce projet est l’initiative d’un homme de l’éducation
										sensible aux attentes des enfants et de la jeunesse et désirant offrir un espace de partage de savoir
										et d’enrichissement.</p>
										<p>Ce projet pourra démarrer son activité au début de l’année prochaine 2022. Il permettrait, outre les
										formateurs qui seront impliqués ponctuellement en fonction de la demande pour assurer certains
										ateliers, de faire travailler en son sein au mois neufs personnes entre gérant, animatrices ou encore
										femme de ménage.    </p>    




                                </div>                
                            </li>
                        </ul>
                    </div>
                </div>
            </section>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <div class="row">
                </div>
            </div>          
        </div>
    </section> 
	
	<!-- white bg -->
	<section class="tm-white-bg section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Les réalisations de nos participants</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>
				<div class="col-lg-6">
					<div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="<?php echo e(url('img/1.jpg')); ?>" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description"></p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3"></span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>					
			     </div>
			     <div class="col-lg-6">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="img/1.jpg')}}" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description"></p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3"></span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
				</div>
				<div class="col-lg-6">
				    <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="<?php echo e(url('img/1.jpg')); ?>" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description"></p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3"></span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
			    </div>
			    <div class="col-lg-6">
			        <div class="tm-home-box-3">
						<div class="tm-home-box-3-img-container">
							<img src="<?php echo e(url('img/1.jpg')); ?>" alt="image" class="img-responsive">	
						</div>						
						<div class="tm-home-box-3-info">
							<p class="tm-home-box-3-description"></p>
					        <div class="tm-home-box-2-container">
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
							<a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3"></span></a>
							<a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
						</div>
						</div>						
					</div>
			   	</div>
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
	<script type="text/javascript" src="<?php echo e(url('js/jquery-1.11.2.min.js')); ?>"></script>      		<!-- jQuery -->
  	<script type="text/javascript" src="<?php echo e(url('js/moment.js')); ?>"></script>							<!-- moment.js -->
	<script type="text/javascript" src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>					<!-- bootstrap js -->
	<script type="text/javascript" src="<?php echo e(url('js/bootstrap-datetimepicker.min.js')); ?>"></script>	<!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
	<script type="text/javascript" src="<?php echo e(url('js/jquery.flexslider-min.js')); ?>"></script>
<!--
	<script src="js/froogaloop.js"></script>
	<script src="js/jquery.fitvid.js"></script>
-->
   	<script type="text/javascript" src="<?php echo e(url('js/templatemo-script.js')); ?>"></script>      		<!-- Templatemo Script -->
	<script>
		// HTML document is loaded. DOM is ready.
		$(function() {

			$('#hotelCarTabs a').click(function (e) {
			  e.preventDefault()
			  $(this).tab('show')
			})

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();

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
		});
		
		// Load Flexslider when everything is loaded.
		$(window).load(function() {	  		
			// Vimeo API nonsense

/*
			  var player = document.getElementById('player_1');
			  $f(player).addEvent('ready', ready);
			 
			  function addEvent(element, eventName, callback) {
			    if (element.addEventListener) {
			      element.addEventListener(eventName, callback, false)
			    } else {
			      element.attachEvent(eventName, callback, false);
			    }
			  }
			 
			  function ready(player_id) {
			    var froogaloop = $f(player_id);
			    froogaloop.addEvent('play', function(data) {
			      $('.flexslider').flexslider("pause");
			    });
			    froogaloop.addEvent('pause', function(data) {
			      $('.flexslider').flexslider("play");
			    });
			  }
*/

			 
			 
			  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
/*

			  $(".flexslider")
			    .fitVids()
			    .flexslider({
			      animation: "slide",
			      useCSS: false,
			      animationLoop: false,
			      smoothHeight: true,
			      controlNav: false,
			      before: function(slider){
			        $f(player).api('pause');
			      }
			  });
*/


			  

//	For images only
		    $('.flexslider').flexslider({
			    controlNav: false
		    });


	  	});
	</script>
 </body>
 </html><?php /**PATH C:\xampp\htdocs\THE29\resources\views/layout.blade.php ENDPATH**/ ?>