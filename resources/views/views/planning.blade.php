



    
    <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Planning</title>
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
				  <img style="margin-top: -14px;" src="{{ url('img/29.jpg')}}" width="70" height="57"  />
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
							<li style="margin-top: -10px;"><a href="planning" class="active" ><h5>Planning</h5></a></li>
                            <li style="margin-top: -10px;"><a href="contact"><h5>Contact</h5></a></li>
                            
                        </ul>

					</nav>		
				</div>				
			</div>
		</div>	  	
	</div>

	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Agenda en PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<?php
$list_fer=array(7);//Liste pour les jours ferié; EX: $list_fer=array(7,1)==>tous les dimanches et les Lundi seront des jours fériers

$list_spe=array('1986-10-31','2009-4-12','2009-9-23');//Mettez vos dates des evenements ; NB format(annee-m-j)

$lien_redir="date_info.php";//Lien de redirection apres un clic sur une date, NB la date selectionner va etre ajouter à ce lien afin de la récuperer ultérieurement 

$clic=1;//1==>Activer les clic sur tous les dates; 2==>Activer les clic uniquement sur les dates speciaux; 3==>Désactiver les clics sur tous les dates

$col1="#d6f21a";//couleur au passage du souris pour les dates normales

$col2="#8af5b5";//couleur au passage du souris pour les dates speciaux

$col3="#6a92db";//couleur au passage du souris pour les dates férié

$mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août","Septembre", "Octobre", "Novembre", "Décembre");

if(isset($_GET['mois']) && isset($_GET['annee']))
{
	$mois=$_GET['mois'];
	$annee=$_GET['annee'];
}
else
{
	$mois=date("n");
	$annee=date("Y");
}
$ccl2=array($col1,$col2,$col3);
$l_day=date("t",mktime(0,0,0,$mois,1,$annee));
$x=date("N", mktime(0, 0, 0, $mois,1 , $annee));
$y=date("N", mktime(0, 0, 0, $mois,$l_day , $annee));
$titre=$mois_fr[$mois]." : ".$annee;
//echo $l_day;
?>
<body>
<center>
<form name="dt" method="get" action="">
<select name="mois" id="mois" onChange="change()" class="liste">
<?php
	for($i=1;$i<13;$i++)
	{
		echo '<option value="'.$i.'"';
		if($i==$mois)
			echo ' selected ';
		echo '>'.$mois_fr[$i].'</option>';
	}
?>
</select>
<select name="annee" id="annee" onChange="change()" class="liste">
<?php
	for($i=1950;$i<2035;$i++)
	{
		echo '<option value="'.$i.'"';
		if($i==$annee)
			echo ' selected ';
		echo '>'.$i.'</option>';
	}
?>
</select>
</form>
<table class="tableau"><caption><?php echo $titre ;?></caption>
<tr><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr>
<tr>
<?php
//echo $y;
$case=0;
if($x>1)
	for($i=1;$i<$x;$i++)
	{
		echo '<td class="desactive">&nbsp;</td>';
		$case++;
	}
for($i=1;$i<($l_day+1);$i++)
{
	$f=$y=date("N", mktime(0, 0, 0, $mois,$i , $annee));
	$da=$annee."-".$mois."-".$i;
	$lien=$lien_redir;
	$lien.="?dt=".$da;
	echo "<td";
	if(in_array($da, $list_spe))
	{
		echo " class='special' onmouseover='over(this,1,2)'";
		if($clic==1||$clic==2)
			echo " onclick='go_lien(\"$lien\")' ";
	}
	else if(in_array($f, $list_fer))
	{
		echo " class='ferier' onmouseover='over(this,2,2)'";
		if($clic==1)
			echo " onclick='go_lien(\"$lien\")' ";
	}
	else 
	{
		echo" onmouseover='over(this,0,2)' ";
		if($clic==1)
			echo " onclick='go_lien(\"$lien\")' ";
	}
	echo" onmouseout='over(this,0,1)'>$i</td>";
	$case++;
	if($case%7==0)
		echo "</tr><tr>";
	
}
if($y!=7)
	for($i=$y;$i<7;$i++)
	{
		echo '<td class="desactive">&nbsp;</td>';
	}
?></tr>
</table>
</center>
</body></html>

<script type="text/javascript">
function change()
{
	document.dt.submit();
}
	function over(this_,a,t)
{
	<?php 
	echo "var c2=['$ccl2[0]','$ccl2[1]','$ccl2[2]'];";
	?>
	var col;
	if(t==2)
		this_.style.backgroundColor=c2[a];
	else
		this_.style.backgroundColor="";
}
function go_lien(a)
{
	top.document.location=a;
}