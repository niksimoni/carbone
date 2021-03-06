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

</head>

<style type="text/css">
	#myVideo {
		  position: fixed;
		  top: 50%;
		  left: 50%;
		  transform: translateX(-50%) translateY(-50%);
		  min-width: 100%;
		  min-height: 100%;
		  height: auto;
		  width: auto;
	}

	body, html {
		height: 100%;
	}


</style>
<body>


 <video id="myVideo" muted autoplay>
   <source src="videos/movie.mp4" type="video/mp4">
   Your browser does not support the video tag.
 </video>

<center id="logo" style="display: none;">
		<a href="home.php"><img src="schermata-cliccabile.png" style="position:fixed;top:0;left:0;height:100%;width:100%;"></a>
</center>


<script type='text/javascript'>
$( document ).ready(function() {
	var vid = document.getElementById("myVideo");
	var log = document.getElementById("logo");
	vid.webkitRequestFullScreen();

	vid.onended = function() {
	   vid.remove();
	   log.style.removeProperty("display");
  }
});

</script>

</body>
</html>