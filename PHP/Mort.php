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



    	 case 1: // Mort de connerie (suivre 111)

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1"> Bon ... </div>

	<div class="narrator-text ap3"> Oui... &#128556;</div>

	<div class="choices-container ap5">

		<a href="Mort.php?rep=0.1" class="BoutonV"> Ya moyen de revivre et d'avoir l'injection ? &#128517;</a>

		<a href="Mort.php?rep=0.2" class="BoutonV"> Bon rip, j'abandonne ... &#128531;</a>

	</div> 





<?php 

    break;

   		 case 0.1: // Moyen de revivre ? et d'injection 

    ?> 

<img class="i1" src="../Image/Injection.jpg"> 

	<div class="narrator-text ap1"> Tiens. </div>

	<div class="choices-container ap3">

		<a href="Mort.php?rep=0.11" class="BoutonV">Merci! Je fais comment pour revivre là ?</a>

	</div> 



<?php 

    break;

    case 0.11: // Moyen de revivre ? et d'injection suite

    ?> 

	<div class="narrator-text ap1"> Eho att... </div>

	<div class="narrator-text ap3"> <a href="Suivre.php?rep=23" class="BoutonV"> Ressucitation</a> </div> 

	<!-- Lien payant --> 



<?php 

    break;

    case 0.2: // Abandon  

    ?> 

<img class="i1" src="../Image/Abandon.jpg"> 

	<div class="narrator-text ap1"> Rip tu abandonnes ...  </div>

		<div class="narrator-text ap2"> N'abandonne jamais ! Car demain deviendra, peut-être, le jour qui paye. </div>

	<div class="choices-container ap5">

		<a href="Mort.php?rep=0.11" class="BoutonV">Merci ! Je fais comment pour revivre là ?</a>

	</div> 



<?php 

    break;

    case 2: //  Mourir d'ennuie  

    ?> 

<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1"> Bon ... </div>

	<div class="narrator-text ap2"> Oui... &#128556;</div>

	<div class="choices-container ap3">

		<a href="Mort.php?rep=20" class="BoutonV"> Ya moyen de revivre ? &#128517;</a>

		<a href="Mort.php?rep=0.2" class="BoutonV"> Bon rip, j'abandonne ... &#128531;</a>

	</div> 

<?php 

    break;

    case 20: // moyen de revivre  

    ?> 

	<div class="narrator-text ap1"> Oui ... tiens ...  </div>

	<div class="narrator-text ap2"> <a href="Suivre.php?rep=1" class="BoutonV"> Ressucitation</a> </div> 

	<!-- Lien payant --> 

<?php 

    break;

    case 2.1: //  Mourir d'ennuie  

    ?> 

<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1"> Bon ... </div>

	<div class="narrator-text ap2"> Oui... &#128556;</div>

	<div class="choices-container ap3">

		<a href="Mort.php?rep=20.1" class="BoutonV"> Ya moyen de revivre ? &#128517;</a>

		<a href="Mort.php?rep=0.2" class="BoutonV"> Bon rip, j'abandonne ... &#128531;</a>

	</div> 

<?php 

    break;

    case 20.1: // moyen de revivre  

    ?> 

	<div class="narrator-text ap1"> Oui ... tiens ...  </div>

	<div class="narrator-text ap3"> <a href="Suivre.php?rep=10" class="BoutonV"> Ressucitation</a> </div> 

	<!-- Lien payant --> 

<?php 

    break;

    case 3: // Mort 

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1"> Bon ... </div>

	<div class="narrator-text ap3"> Oui... &#128556;</div>

	<div class="choices-container ap5">

		<a href="Mort.php?rep=3.5" class="BoutonV"> Ya moyen de revivre ? &#128517;</a>

		<a href="Mort.php?rep=0.2" class="BoutonV"> Bon rip, j'abandonne ... &#128531;</a>

	</div> 





<?php 

    break;

    case 4: // Mort 

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1"> Bon ... </div>

	<div class="narrator-text ap3"> Oui... &#128556;</div>

	<div class="choices-container ap5">

		<a href="Mort.php?rep=3.5" class="BoutonV"> Ya moyen de revivre ? &#128517;</a>

		<a href="Mort.php?rep=0.2" class="BoutonV"> Bon rip, j'abandonne ... &#128531;</a>

	</div> 





<?php 

    break;

    case 3.5 : // Mort 

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1">Oui je peux ...</div>

	<div class="narrator-text ap5"> <a href="Suivre.php?rep=14" class="BoutonV"> Ressucitation</a></div> 





<?php 

 	break;

 	case 21: // Mort de connerie

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1"> Bon ... </div>

	<div class="narrator-text ap3"> Oui... &#128556;</div>

	<div class="choices-container ap5">

		<a href="Mort.php?rep=21.1" class="BoutonV"> Ya moyen de revivre ? &#128517;</a>

		<a href="Mort.php?rep=0.2" class="BoutonV"> Bon rip, j'abandonne ... &#128531;</a>

	</div> 





<?php 

    break;

    case 21.1 : // Mort 

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1">Oui je peux ...</div>

	<div class="narrator-text ap5"> <a href="Mikasa.php?rep=11" class="BoutonV"> Ressucitation</a></div> 





<?php 

 	break;

 	case 22: // Mort derière les barreaux 

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1"> Bon ('es mort derière les barreaux</div>

	<div class="narrator-text ap3"> Oui mdr je sais  &#128556;</div>

	<div class="choices-container ap5">

		<a href="Mort.php?rep=22.1" class="BoutonV"> Ya moyen de revivre ? &#128517;</a>

		<a href="Mort.php?rep=0.2" class="BoutonV"> Bon rip, j'abandonne ... &#128531;</a>

	</div> 





<?php 

    break;

    case 22.1 : // Mort 

    ?> 



<img class="i1" src="../Image/Mort.jpg">

	<div class="narrator-text ap1">Oui je peux ...</div>

	<div class="narrator-text ap5"> <a href="Mikasa.php?rep=11" class="BoutonV"> Ressucitation</a></div> 





<?php 

 	break;

  }  

?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>