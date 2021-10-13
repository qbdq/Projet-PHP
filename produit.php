<?php
$conn=mysqli_connect('localhost','root','','bd') or die(mysqli_connect_error() );
if(isset($_GET['idCat'])){
	$idc=$_GET['idCat'] ; 
	$req="select * from produit where code_cat=$idc" ; 
}
else if(isset($_GET['promo'])){ 
	$req="select * from produit where promotion=1" ; 
}
else if(isset($_GET['motCle'])){
	$mc=$_GET['motCle'] ; 
	$req="select * from produit where designation like '%$mc%'" ; 
}
else {
	$req="select * from produit where selectionne = 1 " ; }

$resProd = mysqli_query($conn,$req) or die("erreur produit") ; 
?> 
<header>
<style>
url('https://fonts.googleapis.com/css?family=Amarante');

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
  outline: none;
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html { overflow-y: scroll; }
body { 
  background: #eee url('https://i.imgur.com/eeQeRmk.png'); /* https://subtlepatterns.com/weave/ */
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  font-size: 62.5%;
  line-height: 1;
  color: #585858;
  padding: 22px 10px;
  padding-bottom: 55px;
}

::selection { background: #5f74a0; color: #fff; }
::-moz-selection { background: #5f74a0; color: #fff; }
::-webkit-selection { background: #5f74a0; color: #fff; }

br { display: block; line-height: 1.6em; } 

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section { display: block; }
ol, ul { list-style: none; }

input, textarea { 
  -webkit-font-smoothing: antialiased;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none; 
}

blockquote, q { quotes: none; }
blockquote:before, blockquote:after, q:before, q:after { content: ''; content: none; }
strong, b { font-weight: bold; } 

table { border-collapse: collapse; border-spacing: 0; }
img { border: 0; max-width: 50%; }

h1 { 
  font-family: 'Amarante', Tahoma, sans-serif;
  font-weight: bold;
  font-size: 2em;
  line-height: 1.7em;
  margin-bottom: 10px;
  text-align: center;
}


/** page structure **/
#wrapper {
  display: block;
  width: 850px;
  background: #fff;
  margin: 0 auto;
  padding: 10px 17px;
  -webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
}

#keywords {
  margin: 0 auto;
  font-size: 1.5em;
  margin-bottom: 15px;
}


#keywords thead {
  cursor: pointer;
  background: #c9dff0;
}
#keywords thead tr th { 
  font-weight: bold;
  padding: 12px 30px;
  padding-left: 42px;
}
#keywords thead tr th span { 
  padding-right: 20px;
  background-repeat: no-repeat;
  background-position: 100% 100%;
}

#keywords thead tr th.headerSortUp, #keywords thead tr th.headerSortDown {
  background: #acc8dd;
}

#keywords thead tr th.headerSortUp span {
  background-image: url('https://i.imgur.com/SP99ZPJ.png');
}
#keywords thead tr th.headerSortDown span {
  background-image: url('https://i.imgur.com/RkA9MBo.png');
}


#keywords tbody tr { 
  color: #555;
}
#keywords tbody tr td {
  text-align: center;
  padding: 15px 10px;
}
#keywords tbody tr td.lalign {
  text-align: left;
}
</style>
</header>

<body>
<div class="produit">
 <div id="wrapper">
  <h1>LISTE DES PRODUITS</h1>
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
        <th><span>PRODUIT</span></th>
        <th><span>DESIGNATION</span></th>
        <th><span>PRIX</span></th>
        <th><span>QUANTITE</span></th>
        <th><span>ACHAT</span></th>
      </tr>
    </thead>
    <tbody>
	<tr>
	<?php while ($p= mysqli_fetch_assoc($resProd)){ ?>
	<td class="lalign"><img src="image/<?php echo ($p["photo"])?>"> </td> 
	<td class="lalign"><?php echo ($p["designation"])?></td>
	<td class="lalign"><?php echo ($p["prix"])?></td>
	<td class="lalign"><?php echo ($p["quantite"])?></td>
	 <td class="lalign" >
		<form methpd="post" action="addCaddie.php">
		<input type="hidden" name="ref" value="<?php echo ($p["ref_produit"])?>"/>
		<input type="hidden" name="designation" value="<?php echo ($p["designation"])?>"/>
		<input type="hidden" name="prix" value="<?php echo ($p["prix"])?>"/>
		<input type="hidden" name="photo" value="<?php echo ($p["photo"])?>"/>
		 <input type="text" name="quantite" size="5"/>
		 <input type="image" src="image/basket2.jpg" value = "submit">
		</form> </td></div>
		
	
</tr>
	<?php }?>
</table>
	</body>







