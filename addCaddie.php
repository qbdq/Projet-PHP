<?php
session_start() ; 
if(isset($_SESSION['panier'])){ 
$panier=$_SESSION['panier'] ; }
else 
{$panier=array();}

$index=count($panier) ; 
$panier[$index]['ref']=$_GET['ref'] ; 
$panier[$index]['prix']=$_GET['prix'] ; 
$panier[$index]['designation']=$_GET['designation'] ; 
$panier[$index]['quantite']=$_GET['quantite'] ; 
$panier[$index]['photo']=$_GET['photo'] ; 
$_SESSION['panier']=$panier;
header('Location:http://localhost/web/index.php?panier=1');

?>