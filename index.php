<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<style>
 a{
	 color:#fff;
	 text-decoration:none;
	 padding:15px;
	 position:relative;
	 width:200px;
	 background-color=#34495E;
 }

</style>
</head>

<body>
	<?php require_once("entete.php")?>
	<table width="100%">
  <tbody>
    <tr>
      <td width="10%" valign="top" ><div class="categorie">
	  <?php require_once("categorie.php")?></div></td>
      <td width="84%"><div id="contenu"><?php 
	if(isset($_GET['panier']))
	require_once("panier.php") ; 
	else 
	require_once("produit.php")?></div></td>
    </tr>
  </tbody>
</table>

</body>
</html>