<?php
$conn=mysqli_connect('localhost','root','','bd') or die(mysqli_connect_error() );
if ($_POST['login']=='' && $_POST['password'] == ''){
	header('Location:http://localhost/web/login.php');
}
else {
$login=$_POST['login'];
$pass=$_POST['password'] ; 
$req="select * from users where login like '$login' and pass like '$pass'" ; 
$resProd = mysqli_query($conn,$req);} 
if($resProd == false){
header('Location:http://localhost/web/login.php');	
}
else {
	
header('Location:http://localhost/web/gestionadmin.php');
}







?> 