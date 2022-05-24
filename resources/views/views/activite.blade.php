<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>THE 29 -activités</title>
<!--
THE 29 Template
http://www.templatemo.com/tm-475-THE29
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
				  <img style="margin-top: -14px;" src="{{ url('img/29.jpg')}}" width="70" height="57"  />
  </div>
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <div class="mobile-menu-icon">
                      <i class="fa fa-bars"></i>
                    </div>
                    <nav class="tm-nav">
                        <ul>
						<li style="margin-top: -10px;"><a href="THE 29"><h5>Accueil</h5></a></li>
                            <li style="margin-top: -10px;"><a href="activite"  class="active"><h5>Activités</h5></a></li>
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
        <!-- Flexslider -->
        
    
    <!-- white bg -->
	<section class="tm-banner">
		<!-- Flexslider -->
		<div class="flexslider flexslider-banner">
		  <ul class="slides">
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"> <span class="tm-yellow-text"> “La plus grande difficulté de l'éducation, c'est de transformer les idées en expérience.”</span></h1>
					<p class="tm-banner-subtitle"></p>
						
				</div>
				<img src="{{url('img/centre4.jpg')}}" alt="Image" />	
		    </li>
		    <li>
			    <div class="tm-banner-inner">
				
					<p class="tm-banner-subtitle"> </p>
					<h1 class="tm-banner-title"> <span class="tm-yellow-text"> “Tous les enfants ont du génie, le tous c'est de le faire apparaître ”</span></h1>
					<p class="tm-banner-subtitle"></p>
				</div>
		      <img src="{{url('img/centre5.jpg')}}" alt="Image" />
		    </li>
		    <li>
			    <div class="tm-banner-inner">
					<h1 class="tm-banner-title"> <span class="tm-yellow-text"> “La curiosité des enfants est un penchant de la nature qui va comme au-devant de l’instruction ; ne manquez pas d’en profiter.”</span> </h1>
					<p class="tm-banner-subtitle"> </p>
					
				</div>
		      <img src="{{url('img/centre6.jpg')}}" alt="Image" />
		    </li>
		  </ul>
		</div>	
	</section>
	<br>
	<br>

			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="-2">						
						<img src="{{url('img/index-01.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act1 }}</h2> </div>
						</div>						
					
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-02.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							<p></p>	

							<div class="tm-tours-box-2-link"><h2>{{ $act2 }}<h2>  </div>
							
							
						</div>						
						
					</div>
				</div>
						<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-03.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>

							<p></p>
							<div class="tm-tours-box-2-link"><h2>{{ $act3 }}</h2>  </div>
						
							
						</div>						
					
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-04.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
				<p></p>
							<div class="tm-tours-box-2-link"><h2>{{ $act4 }}</h2> </div>
						
						</div>						
						
					</div>
				</div>
				<br>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-05.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
						
							<p></p>
							<div class="tm-tours-box-2-link"><h2>{{ $act5 }}</h2>  </div>	
						</div>						
				
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-06.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>
							<div class="tm-tours-box-2-link"><h2>{{ $act6 }}</h2>  </div>	
						</div>						
		
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-07.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act7 }}</h2>  </div>
						</div>						
					
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-08.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>
							<div class="tm-tours-box-2-link"><h2>{{ $act8 }}</h2>  </div>	
						</div>						
					
						
					</div>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-09.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"> </h3>
					
							<p></p>
							<div class="tm-tours-box-2-link"><h2>{{ $act9 }}</h2> </div>	
						</div>						
					
					</div>
				</div>
				<br>

				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="{{url('img/index-10.jpg')}}" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act10 }}</h2>  </div>
						</div>						
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-12.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act11 }}</h2> </div>
							

						</div>						
						
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src=img/index-13.jpg alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>
							<div class="tm-tours-box-2-link"><h2>{{ $act12 }}</h2></div>	
						</div>						
					
					</div>
				</div>
				
  </div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-14.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act13 }}</h2> </div>
						</div>						
					
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-15.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act14 }}</h2> </div>
						</div>						
						
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-16.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act15 }}</h2></div>
						</div>						
						
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-17.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act16 }}</h2>  </div>	
						</div>						
						
					</div>
				</div>
				
			</div>
			<br>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-18.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
						
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act17 }}</h2> </div>
						</div>						

					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-19.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act18 }}</h2> </div>
						</div>						
				
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-20.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act19 }}</h2> </div>
						</div>						
				
					</div>
				</div>
			<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-22.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act20 }}</h2> </div>	
						</div>						
				
					</div>
				</div>
				<br>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-22.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act21 }}</h2></div>		
						</div>						
						
					</div>
				</div>
				<br>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-xxs-12">
					<div class="tm-tours-box-2">						
						<img src="img/index-21.jpg" alt="image" class="img-responsive">
						<div class="tm-tours-box-2-info">
							<h3 class="margin-bottom-15"></h3>
							<p></p>	
							<div class="tm-tours-box-2-link"><h2>{{ $act22 }}</h2> </div>	
						</div>						
					
					</div>
				</div>
				<br>
				
			<div class="row">
				<div class="col-lg-12">
					<p class="home-description">
					</p>					
				</div>
			</div>	
		</div>
	</section>
	<footer class="tm-black-bg">
		<div class="container">
			<div class="row">
				<p class="tm-copyright-text">Copyright &copy; 2084 Your Company Name 
                
                | Designed by templatemo</p>
			</div>
		</div>		
	</footer>
    </footer>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>              <!-- jQuery -->
    <script type="text/javascript" src="js/moment.js"></script>                         <!-- moment.js -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>                  <!-- bootstrap js -->
    <script type="text/javascript" src="js/bootstrap-datetimepicker.min.js"></script>   <!-- bootstrap date time picker js, http://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/templatemo-script.js"></script>              <!-- Templatemo Script -->
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
            $('a[href*=#]:not([href=#])').ck(function() {
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
            $('.flexslider').flexslider({
                controlNav: false
            });
        });
    </script>
 </body>
 </html>