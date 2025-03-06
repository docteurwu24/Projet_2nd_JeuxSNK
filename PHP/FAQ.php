<!DOCTYPE html>

<html>

	<head>

		<meta charset=«utf-8»/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>▄ 𝔻ωᑭℓ𝕒𝕪 ▄</title>

		<link rel="stylesheet" href="CSS/Style.css">

		<link rel="icon" type="image/jpg" sizes="16x16" href="image/iconege.jpg">

		<?php include("../Inclusion/en_tete.php"); ?>

		<style>

			body {

				background-image: url('../Image/fond-accueil.jpg');

				background-repeat: no-repeat;

				background-attachment: fixed;

				background-size: cover;

				background-position : center;

				cursor: none;

			}

			.faq-container {

				max-width: 800px;

				margin: 30px auto;

				padding: 20px;

			}

			.faq-section {

				background: rgba(12, 77, 77, 0.8);

				border-radius: 15px;

				margin-bottom: 20px;

				overflow: hidden;

				backdrop-filter: blur(5px);

				border: 1px solid rgba(255, 255, 255, 0.1);

			}

			.faq-question {

				background: rgba(12, 77, 77, 0.9);

				padding: 15px 20px;

				cursor: pointer;

				display: flex;

				justify-content: space-between;

				align-items: center;

				transition: background-color 0.3s ease;

			}

			.faq-question:hover {

				background: rgba(68, 193, 182, 0.3);

			}

			.faq-question h3 {

				margin: 0;

				color: white;

				font-size: 1.5vw;

			}

			.faq-answer {

				padding: 0 20px;

				max-height: 0;

				overflow: hidden;

				transition: max-height 0.3s ease-out;

			}

			.faq-answer p {

				padding: 20px 0;

				margin: 0;

				font-size: 1.3vw;

			}

			.faq-section.active .faq-answer {

				max-height: 500px;

			}

			.toggle-icon {

				color: white;

				font-size: 1.5vw;

			}

			.faq-section.active .toggle-icon {

				transform: rotate(45deg);

			}

		</style>

	</head>

<body>

	<?php include("../Inclusion/loader.php"); ?>

	<?php include("../Inclusion/menuprincipal.php"); ?>

	

	<h1> <span class="center">FAQ</span></h1>

	<div class="faq-container">

		<div class="faq-section">

			<div class="faq-question">

				<h3>Comment jouer aux jeux ?</h3>

				<span class="toggle-icon">+</span>

			</div>

			<div class="faq-answer">

				<p>Pour jouer, il suffit de cliquer sur le jeu de votre choix dans la section "Jeux". 

				Suivez ensuite l'histoire et faites vos choix en cliquant sur les options proposées.</p>

			</div>

		</div>



		<div class="faq-section">

			<div class="faq-question">

				<h3>Les jeux sont-ils gratuits ?</h3>

				<span class="toggle-icon">+</span>

			</div>

			<div class="faq-answer">

				<p>Oui, tous les jeux sur DWplay sont entièrement gratuits !</p>

			</div>

		</div>



		<div class="faq-section">

			<div class="faq-question">

				<h3>Comment signaler un bug ?</h3>

				<span class="toggle-icon">+</span>

			</div>

			<div class="faq-answer">

				<p>Si vous rencontrez un bug pendant le jeu, utilisez le menu "Bug" en haut à droite 

				pour accéder au formulaire de signalement. Décrivez le problème en détail pour nous aider à le résoudre.</p>

			</div>

		</div>



		<div class="faq-section">

			<div class="faq-question">

				<h3>Y aura-t-il de nouveaux jeux ?</h3>

				<span class="toggle-icon">+</span>

			</div>

			<div class="faq-answer">

				<p>Oui ! Nous travaillons constamment sur de nouveaux jeux et histoires. 

				Restez à l'écoute pour les prochaines sorties !</p>

			</div>

		</div>

	</div>

	<script>

		document.querySelectorAll('.faq-question').forEach(question => {

			question.addEventListener('click', () => {

				const section = question.parentElement;

				section.classList.toggle('active');

			});

		});

	</script>

	<script src="../Javascript/loader.js"></script>

</body>

</html>