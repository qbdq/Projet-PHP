<?php
session_start() ; 
$index=$_GET['index'];
$panier=$_SESSION['panier'] ; 
if(($index+1) == count ($panier)){
unset($panier[$index]);}
else {
	for ($i=$index;$i<=count($panier)-1;$i++)
		$panier[$i]=$panier[$i+1];}
$_SESSION['panier']=$panier; 
header('Location:http://localhost/web/index.php?panier=1');
?>