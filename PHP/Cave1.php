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



			case 1: // Avec clé  

			?> 

			 

			<img class="i1 ap3" src="../Image/Cave-Bougie.jpg">

			<div class="narrator-text ap1"> Vous rentrez ... </div>

			<div class="narrator-text ap2"> Allumez la bougie ... </div> 

			<div class="narrator-text ap3"> Vous êtes dans la bibliotheque de votre père. </div>

			<div class="narrator-text ap4"> Qu'allez-vous faire ?</div>

			<div class="choices-container ap5">

				<a href="Suivre.php?rep=10" class="BoutonN"> Aller suivre papa maintenant </a>

				<a href="Cave1.php?rep=10" class="BoutonN"> Fouiller les potions </a>

				<a href="Cave1.php?rep=11" class="BoutonN"> Fouiller les livres </a>

			</div>

			<?php 

			break;



			case 12: // Avec clé  - Fouiller le tiroir 

			?> 

			<img class="i1" src="../Image/Cave-clé1.jpg"> 

			<div class="narrator-text ap1"> Vous avez besoin d'une clé. </div>

			<div class="narrator-text ap2"> Vous avez la clé.</div> 

			<div class="choices-container ap3">

				<a href="Cave1.php?rep=12.1" class="BoutonN"> Ouvrir </a>

				<a href="Cave1.php?rep=12.1" class="BoutonN"> Ouvrir  </a>

			</div>

		

			<?php 

			break;

			case 12.1: // Avec clé  - Fouiller le tiroir - partie 2 

			?> 

			<img class="i1" src="../Image/Cave-clé1.jpg"> 

			<div class="narrator-text ap1"> Vous avez besoin d'une clé. </div>

			<div class="narrator-text ap2"> Vous avez la clé.</div> 

			<img class="i1 ap3" src="../Image/Cave-Clé2.jpg">

			<div class="narrator-text ap4"> Vous ne trouvez que les livres </div>

			<img class="i1 ap4" src="../Image/Cave-tiroir-livre.jpg">

			<div class="choices-container ap5">

				<a href="Suivre.php?rep=10" class="BoutonN"> Aller suivre papa maintenant  </a>

				<br><br>

				<a href="Cave1.php?rep=10" class="BoutonN"> Fouiller les potions  </a>

				<br> <br>

				<a href="Cave1.php?rep=11" class="BoutonN"> Fouiller les livres  </a>

			</div>

		

			<?php 

			break;

			case 10: // clé - Potions

			?> 

			<img class="i1" src="../Image/Cave-Potion.jpg"> 

			<div class="narrator-text ap1"> Vous fouillez les potions... </div>

			<div class="narrator-text ap2"> ...</div> 

			<div class="narrator-text ap3"> Vous trouvez du liquide cérébrospinal  </div>

			<img class="i1 ap3" src="../Image/injection.jpg">

			<div class="choices-container ap4">

				<a href="Cave1.php?rep=101" class="BoutonN"> Prendre </a>

			</div>

		

			<?php 

			break;

			case 101: // clé - Potions

			?> 	 

			<img class="i1" src="../Image/injection.jpg">

			<div class="narrator-text ap2"> Tu peux te transformer en titan ! =) </div> 

			<div class="choices-container ap3">

				<a href="Suivre.php?rep=10" class="BoutonN"> Aller suivre papa maintenant  </a>

				<br><br>

				<a href="Cave1.php?rep=12" class="BoutonN"> Fouillez le tiroir  </a>

				<br> <br>

				<a href="Cave1.php?rep=11" class="BoutonN"> Fouiller les livres  </a>

			</div>

		

			<?php 

			break;



			case 11: // Avec clé  - Fouiller les livres  

			?> 

			<img class="i1" src="../Image/Cave-Livre.jpg"> 

			<div class="narrator-text ap1"> Vous cherchez sur l'étagère </div>

			<div class="narrator-text ap2"> ... </div> 

			<div class="narrator-text ap3"> Rien de spécial </div>

			<img class="i1 ap3" src="../Image/Cave-tiroir-livre.jpg">

			<div class="choices-container ap4">

				<a href="Suivre.php?rep=10" class="BoutonN"> Aller suivre papa maintenant  </a>

				<br><br>

				<a href="Cave1.php?rep=10" class="BoutonN"> Fouiller les potions  </a>

				<br> <br>

				<a href="Cave1.php?rep=12" class="BoutonN"> Fouillez le tiroir </a>

			</div>

		

			<?php 

			break;





			case 2: // Sans clé  

			?> 

			<img class="i1" src="../Image/Cave-Bougie.jpg">

			<div class="narrator-text ap1">Vous rentrez ...</div>

			<div class="narrator-text ap2">Allumez la bougie ...</div>

			<div class="narrator-text ap3">Vous êtes dans la bibliotheque de votre père. </div>

			<div class="narrator-text ap4">Qu'allez-vous faire ?</div>

			<div class="choices-container ap5">

				<a href="Cave1.php?rep=21" class="BoutonN"> Fouiller les livres </a>

				<a href="Cave1.php?rep=20" class="BoutonN"> Fouiller les potions  </a>

				<a href="Cave1.php?rep=22" class="BoutonN"> Fouillez le tiroir  </a>

			</div>

			<?php 

			break;

			case 22: // Sans clé  - Fouiller le tiroir - partie 2 

			?> 

			<img class="i1" src="../Image/Cave-clé1.jpg"> 

			<div class="narrator-text ap1"> Vous avez besoin d'une clé. </div>

			<div class="narrator-text ap2"> Vous n'avez pas la clé.</div> 

			<div class="narrator-text ap3"> Rippp </div>

			<div class="choices-container ap5">

				<a href="Suivre.php?rep=10" class="BoutonN"> Aller suivre papa maintenant  </a>

				<br><br>

				<a href="Cave1.php?rep=20" class="BoutonN"> Fouiller les potions  </a>

				<br> <br>

				<a href="Cave1.php?rep=21" class="BoutonN"> Fouiller les livres  </a>

			</div>

		

			<?php 

			break;

			case 20: //Sans clé - Potions

			?> 

			<img class="i1" src="../Image/Cave-Potion.jpg"> 

			<div class="narrator-text ap1"> Vous fouillez les potions... </div>

			<div class="narrator-text ap2"> ...</div> 

			<div class="narrator-text ap3"> Vous trouvez du liquide cerebrospinal  </div>

			<img class="i1 ap3" src="../Image/injection.jpg">

			<div class="choices-container ap4">

				<a href="Cave1.php?rep=201" class="BoutonN"> Prendre </a>

			</div>

		

			<?php 

			break;

			case 201: //Sans clé - Potions

			?> 	 

			<img class="i1" src="../Image/injection.jpg">

			<div class="narrator-text ap2"> Tu peux te transformer en titan ! =) </div> 

			<div class="choices-container ap3">

				<a href="Suivre.php?rep=10" class="BoutonN"> Aller suivre papa maintenant  </a>

				<br><br>

				<a href="Cave1.php?rep=22" class="BoutonN"> Fouillez le tiroir  </a>

				<br> <br>

				<a href="Cave1.php?rep=21" class="BoutonN"> Fouiller les livres  </a>

			</div>

		

			<?php 

			break;



			case 21: //Sans clé  - Fouiller les livres  

			?> 

			<img class="i1" src="../Image/Cave-Livre.jpg"> 

			<div class="narrator-text ap3"> Vous cherchez sur l'étagère </div>

			<div class="narrator-text ap2"> ... </div> 

			<div class="narrator-text ap3"> Rien de spécial </div>

			<img class="i1 ap3" src="../Image/Cave-tiroir-livre.jpg">

			<div class="choices-container ap4">

				<a href="Suivre.php?rep=10" class="BoutonN"> Aller suivre papa maintenant  </a>

				<br><br>

				<a href="Cave1.php?rep=20" class="BoutonN"> Fouiller les potions  </a>

				<br> <br>

				<a href="Cave1.php?rep=21" class="BoutonN"> Fouillez le tiroir </a>

			</div>

		

			<?php 

			break;



		

		}  

		?>

		</div>



		<script src="../Javascript/loader.js"></script>



	</body>

</html>