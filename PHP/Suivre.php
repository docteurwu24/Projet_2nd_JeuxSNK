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



		<h2> ...  </h2>



		<div class="dialogue-container">

			<?php 



			switch ($_GET['rep']) {



			case 0: // Sans seringue 

			?> 

			 

			<img class="i1 ap3" src="../Image/Suivre-Espion.jpg">

			<div class="narrator-text ap1"> Vous suivez votre père  </div>

			<div class="narrator-text ap2"> Vous vous cachez tel un espion &#128373;</div> 

			<div class="narrator-text ap3"> Vous êtes maintenant dans une rue un plus calme ...</div>

			<div class="choices-container ap5">

				<a href="Suivre.php?rep=11" class="BoutonN"> Attaquer ! </a>

				<a href="Suivre.php?rep=12" class="BoutonN"> Continuer de le suivre </a>

			</div>

			<?php 

			break;

			case 11: // Attaquer sans seringue  

			?> 

			<img class="i1" src="../Image/Eren-vener.jpg"> 

			<div class="narrator-text ap1"> Vous allez  attaquer ! </div>

			<div class="choices-container ap3">

				<a href="Suivre.php?rep=12.1" class="BoutonN"> Se transformer &#9889; </a>

			</div>

		

		<?php 

		break;

		case 12.1: // Se transformer 

		?> 

		<img class="i1" src="../Image/Eren-mordant.jpg">

		<div class="eren-text ap1"> CRAAATCH </div>

		<div class="narrator-text ap2"> ...</div>

		<div class="narrator-text ap3">Pourquoi tu t'es mordu la main !??</div>

		<div class="narrator-text ap4">T'es bête ouuu ?</div>

		<div class="narrator-text ap5">Pour te transformer faut le liquide cérébrospinal !</div>

		<div class="choices-container ap6">

			<a href="Mort.php?rep=1" class="BoutonV"> Mourir de connerie &#129313;</a>

		</div>



		<?php 

		break;

		case 12: // Continuer de suivre 

		?> 

		<img class="i1" src="../Image/Suivre-Espion.jpg">

		<div class="narrator-text ap1"> Vous continuer de le suivre </div>

		<div class="narrator-text ap3"> Vous êtes maintenant face à un cul de sac</div>

		<div class="choices-container ap5">

			<a href="Suivre.php?rep=11" class="BoutonN"> Attaquer ! </a>

			<a href="Suivre.php?rep=16" class="BoutonN"> Continuer de le suivre </a>

		</div>

		<?php 

		break;

		case 16: //suivre - puit 

		?>

		<img class="i1" src="../Image/Suivre-puit.jpg"> 

		<div class="narrator-text ap1"> Vous continuer de le suivre encore ... </div>

		<div class="narrator-text ap3"> Vous etes maintenant juste un coté d'un puit ... </div>

		<div class="choices-container ap5">

			<a href="Suivre.php?rep=11.1" class="BoutonN"> Le jeter dedans et attaquer ! </a>

			<a href="Suivre.php?rep=19" class="BoutonN"> Ne rien faire. </a>

		</div>

		<?php 

		break;



		case 11.1: // Le jeter dedans et attaquer sans seringue. 

		?> 

		<img class="i1" src="../Image/Suivre-puit.jpg"> 

		<div class="narrator-text ap1"> Vous le jetez ! </div>

		<div class="narrator-text ap2"> Il ne peut plus se defendre en titan !</div> 

		<div class="choices-container ap3">

			<a href="Suivre.php?rep=12.1" class="BoutonN"> Se transformer &#9889; </a>

		</div>



		<?php 

		break;

		case 19: // Ne rien faire 

		?> 	 

		<img class="i1" src="../Image/nerienfaire.jpg">

		<div class="narrator-text ap2"> Vous faites rien </div> 

		<div class="choices-container ap3">

			<a href="Mort.php?rep=2" class="BoutonN">Mourir d'ennui </a>

		</div>



		<?php 

		break;



		case 10: // Suivre avec seringue  

		?> 

		<img class="i1" src="../Image/erenquifuit.jpg"> 

		<div class="narrator-text ap1"> Vous courez pour le rattraper, vous avez perdu du temps.</div>

		<div class="narrator-text ap2"> Où allez vous ? </div> 

		<div class="choices-container ap4">

			<a href="Suivre.php?rep=10.2" class="BoutonN"> Aller à droite </a>

			<a href="Suivre.php?rep=10.1" class="BoutonN"> Aller à gauche </a>

		</div>



		<?php 

		break;





		case 10.1: // Aller à gauche   

		?> 

		<img class="i1" src="../Image/erenquifuit.jpg">

		<div class="narrator-text ap1">Vous allez à gauche.</div>

		<div class="narrator-text ap2">Et maintenant ?</div>

		<div class="choices-container ap3">

			<a href="Suivre.php?rep=13" class="BoutonN">Aller à droite</a>

			<a href="Suivre.php?rep=10.11" class="BoutonN">Aller à gauche</a>

		</div>



		<?php 

		break;

		case 10.11: // Encore à gauche  

		?> 

		<img class="i1" src="../Image/erenquifuit.jpg">

		<div class="narrator-text ap1">Vous allez encore à gauche.</div>

		<div class="narrator-text ap2">Et maintenant ?</div>

		<div class="choices-container ap3">

			<a href="Suivre.php?rep=14" class="BoutonN">Aller à droite</a>

			<a href="Suivre.php?rep=14" class="BoutonN">Aller à gauche</a>

		</div>



		<?php 

		break;

		case 10.2: // droite  

		?> 

		<img class="i1" src="../Image/erenquifuit.jpg">

		<div class="narrator-text ap1">Vous allez à droite</div>

		<div class="narrator-text ap2">Et maintenant ?</div>

		<div class="choices-container ap3">

			<a href="Suivre.php?rep=10.22" class="BoutonN">Aller à droite</a>

			<a href="Suivre.php?rep=10.1" class="BoutonN">Aller à gauche</a>

		</div>



		<?php 

		break;

		case 10.22: // encore à droite 

		?> 

		<img class="i1" src="../Image/erenquifuit.jpg">

		<div class="narrator-text ap1">Vous allez encore à droite</div>

		<div class="narrator-text ap2">T'as une statégie ??</div>

		<div class="narrator-text ap3">Et maintenant ?</div>

		<div class="choices-container ap4">

			<a href="Suivre.php?rep=14" class="BoutonN">Aller à droite</a>

			<a href="Suivre.php?rep=14" class="BoutonN">Aller à gauche</a>

		</div>



		<?php 

		break;

		case 13: // Changement de direction

		?> 

		<img class="i1" src="../Image/erenquifuit.jpg">

		<div class="narrator-text ap1">Vous changez de direction.</div>

		<div class="narrator-text ap2">T'as une statégie ??</div>

		<div class="narrator-text ap3">Où allez vous ?</div>

		<div class="choices-container ap4">

			<a href="Suivre.php?rep=14" class="BoutonN">Aller à droite</a>

			<a href="Suivre.php?rep=14" class="BoutonN">Aller à gauche</a>

		</div>



		<?php 

		break;











	case 14: // Vous le trouvez enfin !   ///////////////////////////////////////////////////

	?> 

	 

	<img class="i1" src="../Image/Suivre-Espion.jpg">

	<div class="narrator-text ap1">Vous le trouvez enfin !</div>

	<div class="narrator-text ap2">Vous vous cachez tel un espion &#128373;</div>

	<div class="narrator-text ap3">Vous êtes maintenant dans une rue un peu plus calme...</div>

	<div class="choices-container ap5">

		<a href="Suivre.php?rep=21" class="BoutonN">Attaquer !</a>

		<a href="Suivre.php?rep=22" class="BoutonN">Continuer de le suivre</a>

	</div>

	<?php 

	break;

	case 21: // Attaquer 

	?> 

	<img class="i1" src="../Image/Eren-vener.jpg"> 

	<div class="narrator-text ap1">Vous allez attaquer !</div>

	<div class="choices-container ap3">

		<a href="Suivre.php?rep=22.1" class="BoutonN">Se transformer &#9889;</a>

	</div>



	<?php 

	break;

	case 22.1: // Se transformer 1

	?> 

	<img class="i1" src="../Image/Injection.jpg">

	<div class="narrator-text ap1">(bruit d'une personne qui se plante une seringue)</div>

	<div class="narrator-text ap2">Vous transformez en titan primaire</div>

	<img class="i1" src="../Image/Titan1.jpg">

	<div class="narrator-text ap3">Vous allez manger votre père !</div>

	<div class="narrator-text ap5">Ckkkr</div>

	<div class="narrator-text ap6">Le grand Livaï vous tue instantanement &#128163;</div>

	<img class="i1" src="../Image/Livai.jpg"> 

	<div class="choices-container ap7">

		<a href="Mort.php?rep=3" class="BoutonV"> Mourir </a>

	</div> 



	<?php 

	break;

	case 22: // Continuer de suivre

	?>

	<img class="i1" src="../Image/Suivre-Espion.jpg">
	<div class="narrator-text ap1">Vous continuer de le suivre</div>
	<div class="narrator-text ap3">Vous etes maintenant devant un cul de sac</div>
	<div class="choices-container ap5">
		<a href="Suivre.php?rep=21.2" class="BoutonN">Attaquer !</a>
		<a href="Suivre.php?rep=23" class="BoutonN">Continuer de le suivre</a>
	</div>

	<?php
	break;
	case 23: //suivre - puit
	?>
	<img class="i1" src="../Image/Suivre-puit.jpg">
	<div class="narrator-text ap1">Vous continuer de le suivre encore</div>
	<div class="narrator-text ap3">Vous etes maintenant juste un coté d'un puit...</div>
	<div class="choices-container ap5">
		<a href="Suivre.php?rep=21.1" class="BoutonN">Le jeter dedans et attaquer !</a>
		<a href="Suivre.php?rep=29" class="BoutonN">Ne rien faire.</a>
	</div>



	case 21.1: // Le jeter dedans et attaquer

	?>

	<img class="i1" src="../Image/Suivre-puit.jpg">
	<div class="narrator-text ap1">Vous le jetez !</div>
	<div class="narrator-text ap2">Il ne peut plus se defendre en titan !</div>
	<div class="narrator-text ap3">Vous vous tranformez</div>
	<img class="i1" src="../Image/Injection.jpg">
	<div class="narrator-text ap4">(bruit d'une personne qui se plante une seringue)</div>
	<div class="narrator-text ap5">Vous transformez en titan primaire</div>
	<img class="i1" src="../Image/Titan1.jpg">
	<div class="narrator-text ap7">Vous allez manger votre père !</div>
	<div class="narrator-text ap10"> &#10024; Vous reussissez à le manger &#10024; </div>
	<div class="narrator-text ap12"> Mais petit soucis, vous etes bloqué dans le puit &#128171;</div>
	<div class="choices-container ap13">
		<a href="Puit.php?rep=0" class="BoutonN"> Continuer </a>
	</div>



	<?php 

	break;

	case 29: // Ne rien faire 

	?> 	 

	<img class="i1" src="../Image/nerienfaire.jpg">

	<div class="narrator-text ap2"> Vous faites rien </div> 

	<div class="choices-container ap3">

		<a href="Mort.php?rep=2.1" class="BoutonN">Mourir d'ennui </a>

	</div>



	<?php 

	break;



	}  

	?>

	</div>



	<script src="../Javascript/loader.js"></script>



	</body>

	</html>