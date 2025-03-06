<!DOCTYPE html>

<html>

	<head>

		<?php include("../Inclusion/en_tete.php"); ?>

		<?php include("../Inclusion/loader.php"); ?>		

	</head>

<body class="dialogue-background">



<?php include("../Inclusion/menuingame.php"); ?>





<h2> ...  </h2>





<div class="dialogue-container">

	<?php 



	switch ($_GET['rep']) {



    	 case 0: //Bloqué dans le puit 

    ?> 



<img class="i1" src="../Image/Suivre-puit.jpg">

	<div class="narrator-text ap0">Vous êtes bloqué dans le puit</div>

	<div class="narrator-text">Veuillez entrer un mot de passe pour continuer &#128526; (si t'en a pas valide quand même)</div>

        <form action="Mikasa.php" method="post">

            <div class="choices-container">

            <input type="password" name="mot_de_passe" />

            <input type="submit" value="Valider" />

            </div>

        </form>



<?php 



  }  

?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>

