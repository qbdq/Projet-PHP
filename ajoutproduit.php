<?php

if(isset($_POST['ajoute'])){
$r=$_POST['ref'];
$d=$_POST['designation'];
$p=$_POST['prix'];
$q=$_POST['quantite'];
$pr=$_POST['promo'];
$cat=$_POST['cat'];;
$conn=mysqli_connect('localhost','root','','bd') or die(mysqli_connect_error() );
mysqli_query($conn,"INSERT INTO produit(ref_produit,designation,prix,quantite,promotion,code_cat,photo,disponible,selectionne) VALUES('$r','$d','$p','$q','$pr','$cat','bbb',1,1);") or die(mysqli_error($conn));	
header('Location:http://localhost/web/gestionproduit.php') ;

}

?>

<html>
<header>
<style type="text/css">
h1 { 
  font-family: 'Amarante', Tahoma, sans-serif;
  font-weight: bold;
  font-size: 3.6em;
  line-height: 1.7em;
  margin-bottom: 10px;
  text-align: center;
}
.form-style-7{
	max-width:400px;
	margin:50px auto;
	background:#fff;
	border-radius:2px;
	padding:20px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 h1{
	display: block;
	text-align: center;
	padding: 0;
	margin: 0px 0px 20px 0px;
	color: #5C5C5C;
	font-size:x-large;
}
.form-style-7 ul{
	list-style:none;
	padding:0;
	margin:0;	
}
.form-style-7 li{
	display: block;
	padding: 9px;
	border:1px solid #DDDDDD;
	margin-bottom: 30px;
	border-radius: 3px;
}
.form-style-7 li:last-child{
	border:none;
	margin-bottom: 0px;
	text-align: center;
}
.form-style-7 li > label{
	display: block;
	float: left;
	margin-top: -19px;
	background: #FFFFFF;
	height: 14px;
	padding: 2px 5px 2px 5px;
	color: #B9B9B9;
	font-size: 14px;
	overflow: hidden;
	font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="date"],
.form-style-7 input[type="datetime"],
.form-style-7 input[type="email"],
.form-style-7 input[type="number"],
.form-style-7 input[type="search"],
.form-style-7 input[type="time"],
.form-style-7 input[type="url"],
.form-style-7 input[type="password"],
.form-style-7 textarea,
.form-style-7 select 
{
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	display: block;
	outline: none;
	border: none;
	height: 25px;
	line-height: 25px;
	font-size: 16px;
	padding: 0;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 input[type="date"]:focus,
.form-style-7 input[type="datetime"]:focus,
.form-style-7 input[type="email"]:focus,
.form-style-7 input[type="number"]:focus,
.form-style-7 input[type="search"]:focus,
.form-style-7 input[type="time"]:focus,
.form-style-7 input[type="url"]:focus,
.form-style-7 input[type="password"]:focus,
.form-style-7 textarea:focus,
.form-style-7 select:focus 
{
}
.form-style-7 li > span{
	background: #F3F3F3;
	display: block;
	padding: 3px;
	margin: 0 -9px -9px -9px;
	text-align: center;
	color: #C0C0C0;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
}
.form-style-7 textarea{
	resize:none;
}
.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
	background: #2471FF;
	border: none;
	padding: 10px 20px 10px 20px;
	border-bottom: 3px solid #5994FF;
	border-radius: 3px;
	color: #D2E2FF;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
	background: #6B9FFF;
	color:#fff;
}
 .form-style-7 select {
    border-radius: 0;
    font-weight: 200;
	font-size:10px;
	font-style: oblique;
	font-family:Apple Chancery, cursive;
    color: inherit;
    line-height: normal;
    transition: border-color 0.2s ease,
 outline 0.2s ease;}
 
 


</style>
</header> 
<body> 
<?php require_once("gestionadmin.php")?> 
<form class="form-style-7" action="" method="POST">
<h1>AJOUT PRODUIT </h1>
<ul>
<li>
    <label for="ref">REFERENCE</label>
    <input type="text" name="ref" maxlength="100">
    <span>AJOUTER LA REFERENCE DU PRODUIT </span>
</li>
<li>
    <label for="designation">DESIGNATION</label>
    <input type="text" name="designation" maxlength="100">
    <span>AJOUTER UNE DESIGNATION DU PRODUIT</span>
</li>
<li>
    <label for="prix">PRIX</label>
    <input type="text" name="prix" maxlength="100">
    <span>PRECISER LE PRIX</span>
</li>
<li>
    <label for="quantite">QUANTITE</label>
     <input type="text" name="quantite" maxlength="100">
    <span>AJOUTER LA QUANTITE</span>
</li>
<li>
    <label for="bio">CATEGORIE</label>
  <select required name ="cat">
    <option value="" hidden>CATEGORIE</option>
	 <option value="0"></option>
    <option value="1">SOIN ET BEAUTE</option>
    <option value="2">COMPLEMENT ALIMENTAIRES</option>
    <option value="3">Option 3</option>
    <option value="4">Option 4</option>
    <option value="5">Option 5</option>
  </select>
    <span>SLECTIONNER CATEGORIE</span>
</li>
<li>
    <label for="bio">PROMOTION</label>
  <select required name = "promo">
    <option value="" hidden>PROMOTION</option>
	 <option value="0"></option>
    <option value="1">OUI</option>
    <option value="2">NON</option>
  </select>
    <span>PRODUIT EN PROMOTION </span>
</li>
<li>
    <input type="submit" value="AJOUTER LE PRODUIT "  name="ajoute" >
</li>
</ul>
</form>
</body> 
</html> 