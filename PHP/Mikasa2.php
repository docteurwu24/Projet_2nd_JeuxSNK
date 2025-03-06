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

	 case 1: //   on give le lien

	 ?> 

	 <img class="i1" src="../Image/Mikasa-attend.jpg">

	 <div class="narrator-text ap1"> Bon tu sais ...</div>

	 <div class="narrator-text ap2"> Je suis trèèèès gentil </div>

	 <div class="narrator-text ap3"> Donc tiens ... </div> 

     <div class="choices-container ap4">

     	<a href="Mikasa3.php?rep=11" class="BoutonV"> Continuer </a> 

     	<a href="Mikasa2.php?rep=12" class="BoutonV"> Nan je veux attendre </a> 

     </div>

	

	 <?php 

	 break;

	 case 12: //   Attendre car veut attendre

	 ?> 

	 <div class="narrator-text ap1"> T'aimes bien attendre toi hein ...</div>

	 <div class="narrator-text ap2"> bah attend ... </div>

	 <div class="narrator-text ap6"> Bon ... </div> 

     <div class="choices-container ap7">

     	<a href="Mikasa3.php?rep=11" class="BoutonV"> Continuer </a> 

     </div>

							<!-- Lien pub --> 

<?php 

break;

}

?> 

</div>

<script src="../Javascript/loader.js"></script>



</body>

</html>