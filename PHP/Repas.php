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



    	 case 1: // Sans clé 

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg"> 



	<div class="eren-text ap1">Cava Eren ? &#128522;</div>

	<div class="choices-container ap2">

		<a href="Repas.php?rep=11" class="BoutonV">Oui, cv tranquille &#128522;</a>

		<a href="Repas.php?rep=12" class="BoutonV">Non. &#128533;</a>

	</div>

<?php 

    break;

    case 11: // Sans clé - Oui tranquille

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg"> 



	<div class="eren-text ap1">Bien, mangeons alors &#128519;</div>

	<div class="narrator-text ap2">Ton but est d'empécher la mort de millier de personne, dont ta mère.</div>

	<div class="narrator-text ap3">Tu dois manger ton père au plus vite,<br>en modifiant le passé, certains évenement pourrait ne pas se reproduire !</div>

	<div class="narrator-text ap4">Après tu te débrouilles de comment, c'est toi le cerveau hein.</div>

	<div class="choices-container ap5">

		<a href="Repas.php?rep=110" class="BoutonV">Okk</a>

	</div>



<?php 

    break;

    case 110: // Sans clé - Oui tranquille- suite

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg"> 



	<div class="eren-text ap1"> <span class="italique">(maman) </span> Eren, tu manges pas ?</div>

	<div class="choices-container ap2">

		<a href="Suivre.php?rep=0" class="BoutonN"> Le suivre </a>

		<a href="Cave.php?rep=0" class="BoutonN"> Aller à la cave </a>

	</div>



<?php 

    break;

    case 12: // Sans clé 

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg"> 



	<div class="eren-text ap1">Ah, qu'est qu'on pourrait faire à notre petit ? &#128533;</div>

	<div class="narrator-text ap2">Ton but est d'empecher la mort de millier de personne, dont ta mère.</div>

	<div class="narrator-text ap3">Tu dois manger ton père au plus vite, <br> en modifiant le passé, certains évenement pourrait ne pas se reproduire !    </div>

	<div class="narrator-text ap4">  Après tu te débrouilles de comment, c'est toi le cerveau  </div>

	<div class="eren-text ap5">Eren t'es un peu dans les nuages là. Mange et on parle après ...</div>

	<div class="choices-container ap6">

		<a href="Repas.php?rep=110" class="BoutonV">Ok</a>

	</div>



<?php 

    break;

   		 case 2: //Avec la clé 

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg">

	<div class="eren-text ap1">  Cava Eren ?	&#128522; </div>

	<div class="choices-container ap2">

		<a href="Repas.php?rep=21" class="BoutonV">Oui, cv tranquille  &#128522;</a>

		<a href="Repas.php?rep=22" class="BoutonV"> Non. &#128533;</a>

	</div>





<?php 

    break;

    case 21: // Avec clé - Oui tranquille

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg"> 



	<div class="eren-text ap1">  Bien, mangeons alors &#128519;</div>

	<div class="narrator-text ap2"> Ton but est d'empecher la mort de millier de personne, dont ta mère. </div>

	<div class="narrator-text ap3"> Tu dois manger ton père au plus vite, <br> en modifiant le passé, certains évenement pourrait ne pas se reproduire !    </div>

	<div class="narrator-text ap4">  Après tu te débrouilles de comment, c'est toi le cerveau  </div>

	<div class="choices-container ap5">

		<a href="Repas.php?rep=210" class="BoutonV"> Okk </a>

	</div>



<?php 

    break;

    case 210: // Avec clé - suite

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg"> 



	<div class="eren-text ap1"> <span class="italique"> (maman) </span> Eren, tu manges pas ?</div>

	<div class="choices-container ap2">

		<a href="Suivre.php?rep=0" class="BoutonN"> Le suivre maintenant </a> 

		<a href="Cave.php?rep=10" class="BoutonN"> Aller à la cave d'abord</a>

	</div>



<?php 

    break;

    case 22: // Avec clé  - non pas tranquille 

    ?> 

<img class="i1" src="../Image/Fond-MaisonEren.jpg"> 



	<div class="eren-text ap1">Ah, qu'est qu'on pourrait faire à notre petit ? &#128533;</div>

	<div class="narrator-text ap2"> Ton but est d'empecher la mort de millier de personne, dont ta mère.</div>

	<div class="narrator-text ap3"> Tu dois manger ton père au plus vite, <br> en modifiant le passé, certains évenement pourrait ne pas se reproduire !    </div>

	<div class="narrator-text ap4">  Après tu te débrouilles de comment, c'est toi le cerveau  </div>

	<div class="eren-text ap5">Eren t'es un peu dans les nuages là. Mange et on parle après ...</div>

	<div class="choices-container ap5">

		<a href="Repas.php?rep=210" class="BoutonV"> Continuer </a>

	</div>

<?php 

    break;		  

  }  

?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>