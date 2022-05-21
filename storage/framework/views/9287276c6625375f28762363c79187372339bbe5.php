<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>THE 29</title>
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
				  
	  			<div class="col-lg-6 col-md-8 col-sm-9">
	  				<div class="mobile-menu-icon">
		              <i class="fa fa-bars"></i>
		            </div>
	  				<nav class="tm-nav">
						<ul>
							<li><a href="THE29" >Accueil</a></li>
                            <li><a href="activite">Activités</a></li>
							<li><a href="evenements">Evénements</a></li>
                            <li><a href="agenda.html" class="active">Agenda</a></li>
							<li><a href="contact">Contact</a></li>
						</ul>
					</nav>		
	  			</div>				
  			</div>
  		</div>	  	
  	</div>
	  <!--debut calendrier-->
	  <?php
// Récuperation des variables passées, on donne soit année; mois; année+mois
if(!isset($_GET['mois'])) $num_mois = date("n"); else $num_mois = $_GET['mois'];
if(!isset($_GET['annee'])) $num_an = date("Y"); else $num_an = $_GET['annee'];
 
// pour pas s'embeter a les calculer a l'affchage des fleches de navigation...
if($num_mois < 1) { $num_mois = 12; $num_an = $num_an - 1; }
elseif($num_mois > 12) { $num_mois = 1; $num_an = $num_an + 1; }
 
// nombre de jours dans le mois et numero du premier jour du mois
$int_nbj = date("t", mktime(0,0,0,$num_mois,1,$num_an));
$int_premj = date("w",mktime(0,0,0,$num_mois,1,$num_an));
 
// tableau des jours, tableau des mois...
$tab_jours = array("","Lu","Ma","Me","Je","Ve","Sa","Di");
$tab_mois = array("","Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre");
 
$int_nbjAV = date("t", mktime(0,0,0,($num_mois-1<1)?12:$num_mois-1,1,$num_an)); // nb de jours du moi d'avant
$int_nbjAP = date("t", mktime(0,0,0,($num_mois+1>12)?1:$num_mois+1,1,$num_an)); // b de jours du mois d'apres
 
// on affiche les jours du mois et aussi les jours du mois avant/apres, on les indique par une * a l'affichage on modifie l'apparence des chiffres *
$tab_cal = array(array(),array(),array(),array(),array(),array()); // tab_cal[Semaine][Jour de la semaine]
$int_premj = ($int_premj == 0)?7:$int_premj;
$t = 1; $p = "";
for($i=0;$i<6;$i++) {
    for($j=0;$j<7;$j++) {
        if($j+1 == $int_premj && $t == 1) { $tab_cal[$i][$j] = $t; $t++; } // on stocke le premier jour du mois
        elseif($t > 1 && $t <= $int_nbj) { $tab_cal[$i][$j] = $p.$t; $t++; } // on incremente a chaque fois...
        elseif($t > $int_nbj) { $p="*"; $tab_cal[$i][$j] = $p."1"; $t = 2; } // on a mis tout les numeros de ce mois, on commence a mettre ceux du suivant
        elseif($t == 1) { $tab_cal[$i][$j] = "*".($int_nbjAV-($int_premj-($j+1))+1); } // on a pas encore mis les num du mois, on met ceux de celui d'avant
    }
}
?>
<?php
/* Si tu optes pour la solution "générer différemment au moment de la création"
 
Cela signifie qu'entre le moment ou tu conçois ta liste de jours (la première partie toute PHP) et le moment où tu génères concrètement le code HTML qui est envoyé au navigateur pour affichage (la seconde partie hybride en PHP/HTML) il faut intercaler une nouvelle partie qui soit en capacité de /!\récupérer une liste de dates/!\ qui seront /!\"coloriées"/!\.
 
Ensuite, dans ta /!\/!\boucle/!\ qui permet de générer tes /!\"cases"/!\ avec les dates à l'intérieur/!\, il faut /!\avant/!\ de créer le code de la "case" elle-même réaliser trois opérations :
    1/ d'abord savoir à quelle date tu en es dans l'usage courant de la boucle ;
    2/ ensuite comparer cette date "en cours" avec ta liste de date à colorier afin de choisir quoi faire ;
    3/ enfin décider de la couleur selon que la date est à colorier, ou non. Cela suppose donc juste l'ajout d'un test qui modifie une variable $couleur que tu reprends ensuite dans la ligne suivante à la place de style="color: #FFFFFF; background-color: #000000;" pour devenir style="color: #FFFFFF; background-color: #'.$couleur.';"
     
    Existance de 3-4 couleur :
        $tarif1 = $couleur1
        $tarif2 = $couleur2
        $tarif3 = $couleur3
        $tarifR (réservé) = $couleurR
     
     
    /!\récupérer une liste de dates/!\ -> $datelist
    1/ d'abord savoir à quelle date tu en es dans l'usage courant de la boucle ;  ->
    2/ ensuite comparer cette date "en cours" avec ta liste de date à colorier afin de choisir quoi faire ; ->
    3/ enfin décider de la couleur selon que la date est à colorier, ou non. Cela suppose donc juste l'ajout d'un test qui modifie une variable $couleur que tu reprends ensuite dans la ligne suivante à la place de style="color: #FFFFFF; background-color: #000000;" pour devenir style="color: #FFFFFF; background-color: #'.$couleur.';" ->
     
*/ 
?>
<?php
 
    $datelist = /* requete sql récupérer par un formulaire pour connaitre les dates de reservation */
        /* crer une bdd (table) pour connaitre les tarifs EN FONCTION des dates (ID auto / COULEUR 4 choix (modifiable (pour un futur)) / DATE de à) */
         
    $tarif1 = 'couleur 1 sans le #';
    $tarif2 = 'idem 1';
    $tarif3 = 'idem 1';
    $tarifR = 'idem 1';
    $couleurN = "000000";
     
    /* crer un $datelist = array(couleur, date) provenant de la bdd */
     
    if($datelist['couleur'] == $tarif1){
        $couleur = $tarif1;
    }
    elseif($datelist['couleur'] == $tarif2){
        $couleur = $tarif2;
    }
    elseif($datelist['couleur'] == $tarif3){
        $couleur = $tarif3;
    }
    elseif($datelist['couleur'] == $tarifR){
        $couleur = $tarifR;
    }
    else {
        $couleur = $couleurN;
    }
     
 
 
?>
 
<html>
<head><title>Calendrier</title>
</head>
<body>
<table width="430" border="5" cellpadding="5" cellspacing="0" class="calendrierPerso"><!--<table> a l'origine -->
    <tr>
        <td height="50" colspan="7"><!--<td colspan="7" align="center"> a l'origine-->
            <table width="381" border="0" cellpadding="0" celspacing="0">
                <tr>
                    <td>&nbsp;&nbsp;<?php echo $tab_mois[$num_mois];  ?>&nbsp;&nbsp;</td>
                    <td>&nbsp;&nbsp;<?php echo $num_an;  ?>&nbsp;&nbsp;</td>
                    <td><a href="test2.php?mois=<?php echo $num_mois-1; ?>&amp;annee=<?php echo $num_an; ?>"><img border="0" src="img/prec.png" /></a></td>
                    <td><a href="test2.php?mois=<?php echo $num_mois+1; ?>&amp;annee=<?php echo $num_an; ?>"><img border="0" src="img/suiv.png" /></a></td>
                </tr>
            </table>
        </td>
    </tr>
<!--<tr>                                             Changement d'année !!
    <td colspan="7" align="center">
    <a href="test2.php?mois=<?php //echo $num_mois; ?>&amp;annee=<?php //echo $num_an-1; ?>"><<</a>
    <a href="test2.php?mois=<?php //echo $num_mois; ?>&amp;annee=<?php //echo $num_an+1; ?>">>></a>
    </td>
    </tr>-->
    <?php
        echo'<tr align="center" class="jours">';
        for($i = 1; $i <= 7; $i++){
            echo('<td width="60">'.$tab_jours[$i].'</td>');
        }
        echo'</tr>';
 
        for($i=0;$i<6;$i++) {
            echo '<tr align="center" class="jours">';
            for($j=0;$j<7;$j++); {
                
            };
            echo "</tr>";
        }
    ?>
</body>



    
    <?php /**PATH C:\xampp\htdocs\THE29\resources\views/Agenda.blade.php ENDPATH**/ ?>