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



			case 10: // Avec clé  

			?> 

			<img class="i1" src="../Image/Cave-Serrure.jpg"> 

			<div class="narrator-text ap1"> Vous patientez quelques instants que plus personne ne vous voit </div>

			<div class="narrator-text ap2"> Vous entrez dans la cave... </div>

			<div class="narrator-text ap3"> La porte au fond ne s'ouvre pas avec la clé que vous avez </div>

			<div class="narrator-text ap4"> Vous le saviez evidemment !</div>

			<div class="narrator-text ap5"> Vous vous souvenez que c'etait Livaï qui avait détruit la porte ... </div>

			<img class="i2 ap5" src="../Image/Cave-Livaï.jpg"> 

			<div class="narrator-text ap6"> Qu'allez-vous faire ?</div>

			<div class="choices-container ap7">

				<a href="Cave.php?rep=101" class="BoutonN"> Défoncer la porte comme Livaï </a>

				<a href="Suivre.php?rep=10" class="BoutonN"> Faire demi-tour  </a>

			</div>

			<?php 

			break;

			case 101: // Casser la porte

			?> 

			<img class="i1" src="../Image/Eren-blessé.jpg"> 

			<div class="narrator-text ap1">Ca a été assez compliqué ...</div>

			<div class="narrator-text ap2">Mais vous reussisez à rentrer ... avec quelques blessures &#128162;</div>

			<div class="narrator-text ap3">EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;</div>

			<div class="choices-container ap4">

				<a href="Cave.php?rep=101.2" class="BoutonV">hoo chut &#128580;</a>

				<a href="Cave.php?rep=101.1" class="BoutonV">Désolééé</a>

			</div>

			<?php 

			break;

			case 101.1: // Casser la porte - desoléé

			?> 

			<img class="i1" src="../Image/Eren-blessé.jpg"> 

			<div class="narrator-text ap1">Ca a été assez compliqué ...</div>

			<div class="narrator-text ap2">Mais vous reussisez à rentrer ... avec quelques blessures &#128162;</div>

			<div class="narrator-text ap3">EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;</div>

			<div class="eren-text ap4">Désolééé</div>

			<div class="narrator-text ap5">Oui bon ... C'est ton corps hein.</div>

			<div class="choices-container ap6">

				<a href="Cave1.php?rep=1" class="BoutonV">Continuer</a>

			</div>

			<?php 

			break;

			case 101.2: // Casser la porte - ho chut

			?> 

			<img class="i1" src="../Image/Eren-blessé.jpg"> 

			<div class="narrator-text ap1">Ca a été assez compliqué ...</div>

			<div class="narrator-text ap2">Mais vous reussisez à rentrer ... avec quelques blessures &#128162;</div>

			<div class="narrator-text ap3">EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;</div>

			<div class="eren-text ap4">hoo chut &#128580;</div>

			<div class="narrator-text ap5">T'es sérieux là ? Ok je te parle plus !</div>

			<div class="choices-container ap6">

				<a href="Cave.php?rep=101.3" class="BoutonV">Tanpis</a>

				<a href="Cave.php?rep=101.4" class="BoutonV">C'est une blague rooh &#129313;</a>

			</div>

			<?php 

			break;

			case 101.3: // Casser la porte - ho chut - Tanpis

			?> 

			<img class="i1" src="../Image/Eren-blessé.jpg"> 

			<div class="narrator-text ap1">Ca a été assez compliqué ...</div>

			<div class="narrator-text ap2">Mais vous reussisez à rentrer ... avec quelques blessures &#128162;</div>

			<div class="narrator-text ap3">EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;</div>

			<div class="eren-text ap4">hoo chut &#128580;</div>

			<div class="narrator-text ap5">T'es sérieux là ? Ok je te parle plus !</div>

			<div class="eren-text ap6">Tanpis</div>

			<div class="narrator-text ap7">OK</div>

			<div class="choices-container ap8">

				<a href="Cave1.php?rep=1" class="BoutonV">Continuer</a>

			</div>

			<?php 

			break;

			case 101.4: // Casser la porte - ho chut - C'est une blague roo 

			?> 

			<img class="i1" src="../Image/Eren-blessé.jpg"> 



			<h5 >  Ca a été assez compliqué ... </h5>

			<h5 >  Mais vous reussisez à rentrer ... avec quelques blessures  &#128162;	</h5>

				<h4 >  EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;	</h4>

				<h3> hoo chut &#128580;</h3>

				<h4 >  T'es sérieux là ? Ok je te parle plus ! 	</h4>

				<h3 class="ap2">  C'est une blague rooh  &#129313;</h3>

				<h4 class="ap3"> Nul ta blague &#128530; </h4>

				<h3 class="ap4"> <a href="Cave1.php?rep=1" class="BoutonV"> Continuer </a> </h3>

				



				<?php 

			break;







		case 0: //Sans clé

			 ?> 

			 <img class="i1" src="../Image/Cave-Serrure.jpg"> 

			 <div class="narrator-text ap1"> Vous patientez quelques instants que plus personne ne vous voit </div>

			 <div class="narrator-text ap2"> Vous entrez dans la cave... </div>

			 <div class="narrator-text ap3"> La porte au fond ne s'ouvre pas avec la clé que vous avez </div>

			 <div class="narrator-text ap4"> Vous le saviez evidemment !</div>

			 <div class="narrator-text ap5"> Vous vous souvenez que c'etait Livaï qui avait détruit la porte ... </div>

			 <img class="i2 ap5" src="../Image/Cave-Livaï.jpg"> 

			 <div class="narrator-text ap6"> Qu'allez-vous faire ?</div>

			 <div class="choices-container ap7">

			 <a href="Cave.php?rep=011" class="BoutonN"> Défoncer la porte comme Livaï </a>

			 <a href="Suivre.php?rep=10" class="BoutonN"> Faire demi-tour  </a>

			 </div>

			 <?php 

			 break;

		case 011: // Casser la porte

		?> 

		<img class="i1" src="../Image/Eren-blessé.jpg"> 



		<h5 class="ap1 ">  Ca a été assez compliqué ... </h5>

			<h5 class="ap2 ">  Mais vous reussisez à rentrer ... avec quelques blessures  &#128162;	</h5>

			<h4 class="ap3 ">  EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;	</h4>

			<h3 class="ap4"> <a href="Cave.php?rep=011.2" class="BoutonV"> hoo chut &#128580;</a> <a href="Cave.php?rep=011.1" class="BoutonV"> Désolééé </a> </h3>

			



			<?php 

		break;

		case 011.1: // Casser la porte - desoléé

		?> 

		<img class="i1" src="../Image/Eren-blessé.jpg"> 



		<h5 class="ap1 ">  Ca a été assez compliqué ... </h5>

		<h5 class="ap2 ">  Mais vous reussisez à rentrer ... avec quelques blessures  &#128162;	</h5>

			<h4 class="ap3">  EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;	</h4>

			<h3 class="ap4"> Désolééé </a> </h3>

			<h4 class="ap5 "> Oui bon ... C'est ton corps hein. </h4>

			<h3 class="ap6"> <a href="Cave1.php?rep=2" class="BoutonV"> Continuer </a> </h3>



			<?php 

		break;

		case 011.2: // Casser la porte - ho chut 

		?> 

		<img class="i1" src="../Image/Eren-blessé.jpg"> 



		<h5 >  Ca a été assez compliqué ... </h5>

		<h5 >  Mais vous reussisez à rentrer ... avec quelques blessures  &#128162;	</h5>

			<h4 >  EHHH calme toi, t'as pas la même force que quand t'étais plus agé !&#128552;	</h4>

			<h3 class="ap2"> hoo chut &#128580;</h3>

			<h4 class="ap3 ">  T'es sérieux là ? Ok je te parle plus ! 	</h4>

			<h3 class="ap4"> <a href="Cave.php?rep=011.3" class="BoutonV"> Tanpis  </a> <a href="Cave.php?rep=011.4" class="BoutonV"> C'est une blague rooh  &#129313;</a> </h3>

			



			<?php 

		break;

		case 011.3: // Casser la porte - ho chut - Tanpis

		?> 

		<img class="i1" src="../Image/Eren-blessé.jpg"> 



		<h5 >  Ca a été assez compliqué ... </h5>

		<h5 >  Mais vous reussisez à rentrer ... avec quelques blessures  &#128162;	</h5>

			<h4 >  EHHH calme toi, t'as pas la même force que quand t'étais plus agé !	&#128552; </h4>

			<h3> hoo chut &#128580;</h3>

			<h4 > T'es sérieux là ? Ok je te parle plus ! 	</h4>

			<h3 class="2"> Tanpis </h3>

			<h4 class="3"> OK </h4>

			<h3 class="ap4"> <a href="Cave1.php?rep=2" class="BoutonV"> Continuer </a> </h3>

			



			<?php 

		break;

		case 011.4: // Casser la porte - ho chut - C'est une blague roo 

		?> 

		<img class="i1" src="../Image/Eren-blessé.jpg"> 



		<h5 >  Ca a été assez compliqué ... </h5>

		<h5 >  Mais vous reussisez à rentrer ... avec quelques blessures  &#128162; 	</h5>

			<h4 >  EHHH calme toi, t'as pas la même force que quand t'étais plus agé ! &#128552;	</h4>

			<h3> hoo chut &#128580;</h3>

			<h4 >  T'es sérieux là ? Ok je te parle plus ! 	</h4>

			<h3 class="ap2">  C'est une blague rooh &#129313; </h3>

			<h4 class="ap3"> Nul ta blague &#128530; </h4>

			<h3 class="ap4"> <a href="Cave1.php?rep=2" class="BoutonV"> Continuer </a> </h3>

		<?php  	

		break;

		}  

		?>

		</div>



		<script src="../Javascript/loader.js"></script>



	</body>

	</html>