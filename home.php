<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Coltura</title>
		<meta name="description" content="Coltura.it descrizione">
		<meta name="keywords" content="Coltura, vestiti, abbigliamento">
		<link rel="icon" href="img/favicon.png" />
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/268db6c06d.js" crossorigin="anonymous"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
	<style type="text/css">
	#footer{background:black;padding:0 0 30px 0;color:white;font-size:14px;left: 0;bottom: 0;width: 100%;}
	#footer .copyright{text-align:center;padding-top:30px;}
	.logo a {
			text-decoration: none;
			color: black;
	}

	.navbar-default {
		background-color: white !important;
		border-color: white !important;
	} 
	@font-face {
		font-family: messapiaRegular;
		src: url(Messapia-Regular.woff);
	}
	@font-face {
		font-family: messapiaBold;
		src: url(Messapia-Bold.woff);
	}

	html * {
	 font-family: messapiaRegular !important;
	}

	@media (max-width: 767px) {

		svg {
					height:40px !important;
		}
	}


	body {
		background-image: url('sfondo-home-smaller.png');
		background-repeat: no-repeat;
		background-attachment: fixed;
	}

	</style>
</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<header id="header" class="fixed-top header-transparent header-scrolled">
			<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1460 60">
				<image width="1460" height="60" xlink:href="logo-home-smaller.png"></image><a xlink:href="home.php">
					<rect x="21" y="0" fill="#fff" opacity="0" width="271" height="60"></rect>
				</a>
			</svg>
			<div class="container">
				 <nav id="tf-menu" class="navbar navbar-default">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							 <div class="navbar-brand logo float-left">
							 </div>
						 </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#tf-manifesto">Manifesto</a></li>
								<li><a href="#tf-video">Video</a></li>
								<li><a href="c01.html">C01</a></li>
								<li><a href="about.html">About</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<div class="container">
			<div id="tf-manifesto" style="margin-top: 60px;">
				<div class="text-center">
					<h1 style="font-family: messapiaBold !important;">Il manifesto</h1>
				</div>
				<div class="row" style="margin-top: 30px;">
					<div class="col-lg-offset-1 col-lg-10" style="position: relative;">

						<p style="font-size: 20px; font-family: Arial;">
										Pensiamo alla rivoluzione novecentesca che ha avuto sviluppo agli inizi del novecento nel<br>
										campo dell’architettura.<br>
										Le Corbusier e i suoi 5 punti che caratterizzano la sua<br>
										“machine à habiter”.<br>
										Minimalismo e funzionalità,<br>
										via inutili orpelli decorativi e pacchiani.<br>
										La bellezza prenmde forma nell’espressione stessa dei materiali che la compongono, nella<br>
										sua utilità e funzionalità.<br>
										Macchine per abitare,<br>
										un’espressione che coniuga due concetti che possono sembrare opposti:<br>
										la comodità e il calore di una casa,<br>
										con la freddezza e l’impersonalità degli ingranaggi di un macchinario.<br>
										Mai, invece, due termini sono stati così vicini;<br>
										Comodità e funzionalità.<br>
										Ecco questo è ciò da cui noi cerchiamo di muovere per realizzare i nostri prodotti, l’unione<br>
										tra il comodo e il funzionale.</p>

					</div>
				</div>
			</div>

			<div id="tf-video">
				<div class="col-md-12" style="margin-top: 200px;padding-bottom: 100px;">
					<div class="col-md-offset-3 col-md-6">
						<div class="embed-responsive embed-responsive-16by9" style="margin-top:15px;">
							<video width="320" height="240" controls controlsList="nodownload">
								<source src="videos/cbet.mkv" type="video/mp4">
									Your browser does not support the video tag.
							</video>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer">
				<div class="container">
					<div class="copyright">
						© Copyright <strong><span>Coltura</span></strong>. All Rights Reserved
					</div>
				</div>
		</footer>

	</body>
</html>