<?php 
$conn=mysqli_connect('localhost','root','','class');
$prénom=$_post['prénom'];
$prénom=$_post['nom'];
$prénom=$_post['téléphone'];
$prénom=$_post['mail'];
$prénom=$_post['adresse'];
$req="INSERT INTO client (prénom,nom,téléphone,mail,adresse) values ('$prénom','$nom','$téléphone','$mail','$adresse')";
$res=mysqli_query($conn,$req);
?>


