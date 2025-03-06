<!DOCTYPE html>

<html>

	<head>

		<?php include("../Inclusion/en_tete.php"); ?>

		<?php include("../Inclusion/loader.php"); ?>



			<style>

				body {

							 background-color:#000;

	 						 background-repeat: no-repeat;

	  						 background-attachment: fixed;

 							 background-size: cover;

 							 background-position : center;

 							 align-items: center;

 							 margin: 0;

 							 padding: 0;

 							 min-height: 100vh;

 							 display: flex;

 							 flex-direction: column;

 							 justify-content: center;

 							 cursor: none;



						}

						.BoutonN { 

						position: relative; }

				.video-container {

					position: relative;

					width: 100%;

					max-width: 1000px;

					margin: 0 auto;

					box-shadow: 0 0 50px rgba(255, 255, 255, 0.1);

				}

				.video-wrapper {

					position: relative;

					padding-bottom: 56.25%; /* Ratio 16:9 */

					height: 0;

					overflow: hidden;

				}

				.video-wrapper iframe {

					position: absolute;

					top: 0;

					left: 0;

					width: 100%;

					height: 100%;

					border: none;

				}

				.skip-button {

					margin-top: 2rem;

					text-align: center;

				}

				/* Effet cinéma */

				.cinema-effect {

					position: fixed;

					top: 0;

					left: 0;

					right: 0;

					height: 15vh;

					background: linear-gradient(to bottom, #000 0%, transparent 100%);

					pointer-events: none;

					z-index: 10;

				}

				.cinema-effect-bottom {

					position: fixed;

					bottom: 0;

					left: 0;

					right: 0;

					height: 15vh;

					background: linear-gradient(to top, #000 0%, transparent 100%);

					pointer-events: none;

					z-index: 10;

				}

			</style>

	</head>

<body>

	<div class="cinema-effect"></div>
	<div class="cinema-effect-bottom"></div>

	<div class="video-container">
		<div class="video-wrapper">
			<iframe width="663" height="409.5" src="https://www.youtube.com/embed/CbvQKBaDUWI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>

	<div class="skip-button">
		<p> <a href="Intro11.php?rep=0" class="BoutonN">Passer</a></p>
	</div>

		<script src="../Javascript/loader.js"></script>

</body>

</html>

