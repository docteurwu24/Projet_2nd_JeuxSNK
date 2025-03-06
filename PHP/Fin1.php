<!DOCTYPE html>

<html>

	<head>

		<?php include("../Inclusion/en_tete.php"); ?>

		<?php include("../Inclusion/loader.php"); ?>		



			<style>

				body {

							 background-color: #000;

	 						 background-repeat: no-repeat;

	  						 background-attachment: fixed;

 							 background-size: cover;

 							 background-position : center;

 							 cursor: none;

						}

			</style>

	</head>

<body class="dialogue-background">



<?php include("../Inclusion/menuingame.php"); ?>





<h2> ... </h2>



<div class="dialogue-container">

	<?php 

		switch ($_GET['rep']) {

	 case 1 //  Chateau

	 ?> 

	 <img class="i1" src="../Image/Chateau.jpg">

	 <div class="narrator-text ap1">Vous allez au chateau</div>

	 <div class="narrator-text ap2">Retiens le code suivant :  </div>

	 <div class="narrator-text ap3">2442</div>

     <div class="choices-container ap5">

	 <a href="Index.php" class="BoutonV"> Accueil </a> </div>

	

	 <?php 

	 break;

	 case 2 //  En dehors des murs

	 ?> 

	 <img class="i1" src="../Image/Mur.jpg">

	 <div class="narrator-text ap1">Vous allez en dehors des murs</div>

	 <div class="narrator-text ap2">Retiens le code suivant :  </div>

	 <div class="narrator-text ap3">2442</div>

	 <div class="choices-container ap5">

	 <a href="Index.php" class="BoutonV"> Accueil </a> </div>

	

	 <?php 

	 break;

	 case 3 //  Chez toi

	 ?> 

	 <img class="i1" src="../Image/Fond-MaisonEren.jpg">

	 <div class="narrator-text ap1">Vous rentrez chez vous</div>

	 <div class="narrator-text ap2">Retiens le code suivant :  </div>

	 <div class="narrator-text ap3">2442</div>

	 <div class="choices-container ap5">

	 <a href="Index.php" class="BoutonV"> Accueil </a> </div>

	

	 <?php 

	 break;

	 

}

?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>