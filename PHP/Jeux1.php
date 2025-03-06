<!DOCTYPE html>
<html>
	<head>
		<?php include("../Inclusion/en_tete.php"); ?>
		<?php include("../Inclusion/loader.php"); ?>

			<style>
				body {
  							 background-image: url('../Image/fond-jeux1.jpg');
	 						 background-repeat: no-repeat;
	  						 background-attachment: fixed;
 							 background-size: cover;
 							 background-position : center;
 							 cursor: none;
						}
			</style>
	</head>
<body>

	<?php include("../Inclusion/menuingame.php"); ?>


	<h2> <span class="center blanc">SNK- renouveau </span> </h2>


	<?php $nombre_d_episodes=3 ?>

	<p class="blanc"> Avant de commencer, </p>

	<p class="blanc"> <?php echo"Il y'a $nombre_d_episodes épisodes !"; ?> 
		<br> <br> T'en es où ? </p> 	

<p > <a href="Intro1.php?rep=0" class="BoutonV">Episode 1</a> <a href="Intro2.php" class="BoutonV">Episode 2</a> </p>


	<a href="../FAQ.php"> <img class="help" src="../Image/aide.gif"></a>

		<script src="../Javascript/loader.js"></script>

</body>
</html>
