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

	 case 11 //   Mikasa trouve Eren 

	 ?> 

	 <img class="i1 ap3" src="../Image/Mikasa-souriante.jpg">

	 <div class="eren-text ap1"> Eren !</div>

	 <div class="narrator-text ap2"> Mikasa s'approche et vous trouve </div>

	 <div class="eren-text ap3"> Eren !!  </div>

	 <img class="i1 ap3" src="../Image/Mikasa-souriante.jpg">

	 <div class="eren-text ap4">Tu fais quoi ici ?? &#128552; </div> 

     <div class="choices-container ap5">

     	<a href="Mikasa3.php?rep=13" class="BoutonV"> J'ai mangé papa &#128524; </a> 

     	<a href="Mikasa3.php?rep=14" class="BoutonV"> Je suis tombé &#128531; </a>

     </div>

	

	 <?php 

	 break;

	 case 13: // J'ai mangé papa

	 ?> 

	 <img class="i1" src="../Image/Mikasa-effrayee.jpg">

	 <div class="narrator-text ap1"> Mikasa remarque le stem et les lunettes du père </div>

	 <div class="eren-text ap3"> &#128563;  </div>

	 <div class="eren-text ap4"> &#128561; </div> 

	 <div class="eren-text ap5"> AHHHHHHHHHHHHHH </div>

     <div class="choices-container ap6">

     	<a href="Mikasa3.php?rep=13.1" class="BoutonN"> Se transformer &#9889; et la tuer </a> 

     	<a href="Mikasa3.php?rep=13.2" class="BoutonV"> Je peux t'expliquer ! </a>

     </div>

	

	 <?php 

	 break;

	  case 13.1: // Se transformer - MORT 

	 ?> 

	 <img class="i1" src="../Image/Eren-mordant.jpg">

	 <div class="narrator-text ap1"> Vous vous transformez ! </div> 

	 <div class="eren-text ap3"> Vous mourez de suffocation </div>

	 <div class="eren-text ap4"> T'es vraiment bête toi &#129313; </div>

     <div class="choices-container ap5">

     	<a href="Mort.php?rep=21" class="BoutonV"> Mourir de connerie &#129318;</a>  																				</div>

	

	 <?php 

	 break;

	  case 13.2: // Je peux t'expliquer !!

	 ?> 

	 <img class="i1" src="../Image/Mikasa-nn.gif">

	 <div class="eren-text ap1"> NAN NAN !  </div>

	 <div class="eren-text ap2"> Tu peux rien expliquer, t'es parti beaucoup trop loin !!! </div> 

	 <div class="narrator-text ap3"> Les secours arrivent  </div>

	 <div class="narrator-text ap4"> Vous menotte, et vous envoie en taule. </div>

     <div class="choices-container ap5">

     	<a href="Mort.php?rep=22" class="BoutonV"> Mourir en taule &#129319; </a>

     </div>

	

	 <?php 

	 break;

	 case 14 //   Je suis tombé 

	 ?> 

	 <img class="i1" src="../Image/Mikasa-souriante.jpg">

	 <div class="eren-text ap1"> Olala que t'es bête.  </div>

	 <div class="eren-text ap2"> &#129318; </div> 

	 <div class="narrator-text ap3"> Elle cherche une corde et vous fait sortir </div>

	 <div class="eren-text ap5"> Et heureusement que je suis là ! </div>

	 <div class="eren-text ap6"> T'aurais pu te faire très mal </div>

	 <img src="ap6 i2" src="../Image/Eren-blessé.jpg">

     <div class="choices-container ap7">

     	<a href="Mikasa3.php?rep=14.1" class="BoutonV"> Continuer </a>

     </div>

	 <?php 

	 break;

	 case 14.1 //   Je suis tombé -2

	 ?> 

	 <img class="i1" src="../Image/Mikasa-souriante.jpg">

	 <div class="eren-text ap1"> Bref, je dois te laisser  </div>

	 <div class="eren-text ap2"> Prend attention à toi, Eren. </div> 

	 <div class="eren-text ap3"> Elle a raison ... </div>

	 <img src="ap3 i2" src="../Image/Mikasa-Blg.jfif"> 

	 <div class="narrator-text ap4"> Elle part </div>

     <div class="choices-container ap5">

     	<a href="Fin1.php?rep=1" class="BoutonV"> Aller au chateau </a>

     	<a href="Fin1.php?rep=2" class="BoutonV"> Aller en dehors des murs </a>

     	<a href="Fin1.php?rep=3" class="BoutonV"> Aller chez toi </a>

     </div>

	 <?php 

	 break;

}

?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>