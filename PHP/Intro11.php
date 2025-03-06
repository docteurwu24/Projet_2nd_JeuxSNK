<!DOCTYPE html>

<html>

	<head>

		<?php include("../Inclusion/en_tete.php"); ?>

		<?php include("../Inclusion/loader.php"); ?>

	</head>

<body class="dialogue-background">

	<?php include("../Inclusion/menuingame.php"); ?>

	<div class="dialogue-container">

		<?php

		switch ($_GET['rep']) {

			case 0: // quand il arrive sur la page, il formule alors son choix et en f(x) on aura le cas 1 ou 2 

		?> 

		<div class="narrator-text ap1">

			Bienvenu à toi Eren Jaeger 

			<br> (ㆆ_ㆆ)

		</div>

		<div class="narrator-text ap2">

			Tu connais sûrement ton monde ... 

			<br> <span class="ap3">	non ?? </span>

		</div>

		<div class="choices-container ap4">

			<a href="Intro11.php?rep=1" class="BoutonV"> Bah ouii</a>

			<a href="Intro11.php?rep=2" class="BoutonV">Euh non, trou de memoire tu connais</a>

		</div>



	<?php 

		break;

		

		case 1: // cas bah ouii 

	?>

	<div class="narrator-text ap1"> J'avais eu peur &#128554; </div>



	<div class="narrator-text ap2"> Normalement tu devrais pas tarder à te réveiller ... </div>





	<div class="choices-container ap3">

		<a href="Intro11.php?rep=1.1" class="BoutonV"> Pourquoi y'avait marqué "renouveau" ?? </a>

		<a href="Intro11.php?rep=1.2" class="BoutonV">Je vais me reveiller où ??</a> 

	</div>



	<?php 

		break;



		case 1.1 : // cas Pk renouveau ? 

	?>

	<div class="narrator-text ap1"> Pourquoi renouveau ... </div>

	<div class="narrator-text ap2"> Eh bien enfaite, t'as remonté un peu le temps  &#128517; </div>

	<div class="choices-container ap3">

		<a href="Intro11.php?rep=1.11" class="BoutonV"> Un peu ?  &#129300;</a>

		<a href="Intro11.php?rep=1.11" class="BoutonV">WTF comment ca ? &#128552; </a> 

	</div>

	<?php 

	break;



	case 1.2 : // où ? 

	?>

	<div class="narrator-text ap1"> Chez toi ... ta maison d'enfance &#128513;

	</div>

	<div class="choices-container ap2">

		<a href="Intro11.php?rep=1.11" class="BoutonV" > Mais wtff &#129327; </a>

	</div>



	<?php 

	break;



	case 1.11 : // Stop de la conv renvoie à la page suivante.

	?>

	<div class="narrator-text ap1"> Pas le temps de t'expliquer déso &#128556; </div>

	<div class="narrator-text ap11"> Tu te reveilles !! </div>

	<div class="narrator-text ap2"> Dans 6h, 2 titans vont attaquer le mur Maria !</div>

	<div class="narrator-text ap3">

		J'essayerai de te parler dès que je peux, promis ! 

	</div>

	<div class="choices-container ap4">

		<a href="Debut.php?rep=0" class="BoutonV" > <span class="italic"> Se reveiller &#128164; </span> </a>

	</div>



	<?php 

	break;



	case 2 : // cas euuh nop : faudra donc expliquer

	?>

	<div class="narrator-text ap1"> Oh non, t'a eu une perte de mémoire &#128577; </div>

	<div class="narrator-text ap2"> Tu t'appelles Eren</div>

	<div class="narrator-text ap3"> Ton père a un gros secret dans son grenier </div>

	<div class="narrator-text ap4"> Jor une seringue qui peut te transformer en titan. &#128137; </div>

	<div class="narrator-text ap5"> Dans 6h, des titans vont attaquer le mur Maria !</div>

	<div class="narrator-text ap6"> Ton but est donc de les empecher et de faire la paix avec eux </div>

	<div class="narrator-text ap7"> Pour ne pas revivre l'enfer ... (comme par exemple voir ta mère se faire manger)</div>

	<div class="narrator-text ap8"> Bon je dois te laisser ! J'essayerai de te parler dès que je peux, promis ! </div>

	<div class="narrator-text ap9"> PS : Juste en embrassant la reine (et en mangeant ton père), tu auras les pouvoirs de l'originel (jor le titan surpuissant) </div>

	<div class="choices-container ap10">

		<a href="Debut.php?rep=0" class="BoutonV" > <span class="italic"> Se reveiller &#128164;</span> </a>

	</div>

	<?php 

	break;

}

?>

	</div>

	<script src="../Javascript/loader.js"></script>

</body>

</html>

