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

						}

			</style>

	</head>

<body class="dialogue-background">



<?php include("../Inclusion/menuingame.php"); ?>





<h2> ...  </h2>





<div class="dialogue-container">

	<?php 



	switch ($_GET['rep']) {



    	 case 0: // quand il arrive sur la page, il formule alors son choix et en f(x) on aura le cas 1 ou 2 

    ?> 

<img class="i1" src="../Image/Couloir.jpg"> 



	<div class="narrator-text ap1"> En passant, vous apercevez dans le manteau de votre père :

		<br> la Clé pour ouvrir le tiroir secret de la cave

	</div>

	<div class="choices-container ap2">

		<a href="Couloir.php?rep=1" class="BoutonV"> Prendre la clé  </a>

		<a href="Repas.php?rep=1" class="BoutonV"> Ne rien faire  </a>

	</div>

<?php 

    break;

   		 case 1: // Take la clé 

    ?> 

<img class="i1" src="../Image/lacle.jpg">

	<div class="narrator-text ap1"> Vous reussissez sans problème à prendre la clé	</div>

	<div class="choices-container ap2">

		<a href="Repas.php?rep=2" class="BoutonV"> Continuer </a>

	</div>



<?php 

    break;

    

  }  

?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>