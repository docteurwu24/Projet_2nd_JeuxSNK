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



    	 case 0: // quand il arrive sur la page, il formule alors son choix et en f(x) on aura le cas 1 ou 2 

    ?> 

<img class="i1" src="../Image/Mikasa-Chambre.jpg"> 



	<div class="narrator-text ap1"> ... ? 

		<br> Eren ?</div>

	<div class="eren-text ap3"> <span class="bleu"> Eren ta tête brule,   </span>

		<br> <span class="ap4"> ça va ? &#128559;</span>

	</div>

	<div class="choices-container ap5">

		<a href="Debut.php?rep=1" class="BoutonV"> Je suis où là ?? &#128552; </a> 

		<a href="Debut.php?rep=1" class="BoutonV"> T'es si jeunee &#128563; </a> </div>



<?php 

    break;

   		 case 1: // Je suis où là

    ?> 

<img class="i1" src="../Image/Mikasa-Chambre.jpg">

	<div class="narrator-text ap1"> Eren, tu vas pas très bien,

		<br> T'as sûrement fait un mauvais rêve ... &#128556;

	</div>

	<div class="narrator-text ap2">  Viens manger, ça t'aidera 

	</div>



	<div class="eren-text ap3 italique"> Ceci n'était qu'un rêve ? &#128563;</div>



	<div class="choices-container ap4">

		<a href="Debut.php?rep=11" class="BoutonV"> Lui raconter le rêve</a> 

	<a href="Couloir.php?rep=0" class="BoutonV"> Aller manger &#129378; </a> </div>



<?php 

    break;

    case 11: //  Lui raconter le reve 

    ?> 

<img class="i1" src="../Image/eren-pensif.jpg">



	<div class="eren-text ap1"> Mikasa, mon rêve était si réel ...</div>

	<div class="eren-text ap2">  Les titans ...

		<br> <span class="ap2"> Les titans étaient là </span>

	</div>

	<div class="eren-text ap3"> Ils avaient mangé maman </div>

	<div class="eren-text ap4"> Nous étions rentrés, ensemble, dans le bataillon d'exploration 

	<br> pour explorer l'exterieur des murs</div> 

	<div class="eren-text ap5"> Je m'étais promis de tuer tout les titans ! &#128545; </div>

	<div class="eren-text ap6"> Ils y'avaient des traitres, mais au fond ...

	<br> Les titans n'étaient que nos frères </div>

	<div class="eren-text ap7"> Les mahrs !! Ils sont dans le même cas que nous. 

	Leurs vies ont été bouleversées du jour au lendemain, sans crier gare … et on leur a tout arraché</div>

	<div class="eren-text ap8"> Mikasa, j'etais le titan assaillant.</div>

	<div class="eren-text ap9"> Je suis très probalablement revenu dans le passé.</div>

	<div class="eren-text ap10"> Mikasa ... </div>



	<div class="choices-container ap12">

		<a href="Debut.php?rep=111" class="BoutonV"> Crois-moi &#128549;</a> 

 <a href="Couloir.php?rep=0" class="BoutonV">Aller manger &#129378;</a> </div>



<?php 

    break;

    case 111: // Crois moi  

    ?> 

<img class="i1" src="../Image/Mikasa-Chambre.jpg">

	<div class="eren-text ap1"> Si tu veux ... &#128554;

	</div>

	<div class="eren-text ap2"> Suis-je assez convaicant ?</div>

	<div class="eren-text ap3"> Retiens ce code : 24201505 </div>

	<div class="eren-text ap3">  Eren ?  </div>

	<div class="choices-container ap4">

		<a href="Debut.php?rep=1111" class="BoutonV">Se transformer &#9889;</a> 

	<a href="Couloir.php?rep=0" class="BoutonV">Allons manger ... &#129378;</a> </div>



<?php 

    break;

    case 1111: // Se transformer 

    ?> 

    <img class="i1" src="../Image/Eren-mordant.jpg">

	<div class="eren-text ap1"> CRAAATCH </div>

	<div class="eren-text ap2"> ...</div>

	<div class="eren-text ap3">Pourquoi tu t'es mordu la main !??</div>

	<div class="choices-container ap4">

		<a href="Debut.php?rep=11111" class="BoutonV">Recommencer &#9889; </a>  

	<a href="Couloir.php?rep=0" class="BoutonV">Allons manger ... &#129378;</a> </div>



<?php 

    break;

    case 11111: // transformation x2  

    ?> 

<img class="i1" src="../Image/Eren-mordant.jpg">

	<div class="eren-text ap1"> CRAATTH </div>

	<div class="eren-text ap2"> PK CA MARCHE PAS &#129324; </div>

	<div class="eren-text ap3">  Eren ????  </div>

	<div class="eren-text ap4"> Tu sais que t'as pas mangé ton père pour être un titan ? &#128528; <div> 

	<div class="choices-container ap4">

		<a href="Couloir.php?rep=0" class="BoutonV">Allons vite manger... &#129378;</a> </div>



<?php 

    break;

  }  

?>

</div>



<script src="../Javascript/loader.js"></script>



</body>

</html>