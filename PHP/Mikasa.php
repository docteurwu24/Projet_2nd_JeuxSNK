<!DOCTYPE html>

<html>

	<head>

		<?php include("../Inclusion/en_tete.php"); ?>

		<?php include("../Inclusion/loader.php"); ?>		

	</head>

<body class="dialogue-background">



<?php include("../Inclusion/menuingame.php"); ?>





<h2> ... </h2>





<div class="dialogue-container">

	<?php if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] ==  "24201505") {
	?>
		<img class="i1" src="../Image/Mikasa-cherche.jpg">
		<div class="narrator-text ap1">Mikasa vous cherche ...</div>
		<div class="eren-text ap2">EHOOO Eren ! T'es ouu </div>   
		<div class="choices-container ap3">
			<a href="Mikasa3.php?rep=11" class="BoutonV"> Mikasa je suis làà ! </a>
			<a href="Mikasa3.php?rep=12" class="BoutonV"> Ne rien dire. </a>
		</div>
	<?php
	}
	else {
		echo '<div class="narrator-text ap1">Bon tu vas rester coincer comme ça longtemps.</div>
		<div class="choices-container ap2">
			<a href="Mikasa2.php?rep=1" class="BoutonV"> Je fais comment &#129301; ?? </a>
		</div>';
	}
	?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>