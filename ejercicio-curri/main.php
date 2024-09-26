<!DOCTYPE html>
<html>

<head>
	<title>Joe Bloggs - Curriculum Vitae</title>

	<meta name="viewport" content="width=device-width" />
	<meta name="description" content="The Curriculum Vitae of Joe Bloggs." />
	<meta charset="UTF-8">

	<link type="text/css" rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

	<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<!-- Nombre, apellidos, movil, deportes, idiomas, sexo, edad , fecha de nacimiento (calendar)  nivel de desarrollo-->

<?php

if (!isset($_POST["deporte"])|| !isset($_POST["nacionalidad"])|| !isset($_POST["idioma"])|| !isset($_POST["nvling"])|| !isset($_POST["sexo"])|| !isset($_POST["fechan"])) {
	print("<p class=\"error\">Por favor, rellene todos los datos antes de generar el cv</p>");
	print ("<a href=\"http://pruebas/ejercicio-curri/index.php\"><button>Volver al formulario</button></a>");
}
else{

$sport="";
foreach ($_POST["deporte"] as $key => $value) {
	$sport=$sport." <li> ".$value." </li> ";
}

$idiomas="";
foreach ($_POST["idioma"] as $key => $value) {
	$idiomas=$idiomas." <li> ".$value." </li> ";
}

print('

<body id="top">
	<div id="cv" class="instaFade">
		<div class="mainDetails">
			<div id="headshot" class="quickFade">
				<img src="headshot.jpg" alt="Alan Smith" />
			</div>

			<div id="name">
				<h1 class="quickFade delayTwo">'.$_POST["nombre"].'</h1>
				<h2 class="quickFade delayThree">'.$_POST["apellidos"].'</h2>
			</div>

			<div id="contactDetails" class="quickFade delayFour">
				<ul>
					<li>email: <a href="'.$_POST["correo"].'" target="_blank">'.$_POST["correo"].'</a></li>
					<li>sexo: '.$_POST["sexo"].'</li>
					<li>Fecha nac: '.$_POST["fechan"].'</li>
					<li>tlf: '.$_POST["tlfn"].'</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>

		<div id="mainArea" class="quickFade delayFive">


			<section>
				<div class="sectionTitle">
					<h1>Deportes que practico</h1>
				</div>
				<div class="sectionContent">
					<ul class="keySkills">
						'.$sport.'
					</ul>
				</div>
				<div class="clear"></div>
			</section>


			<section>
				<div class="sectionTitle">
					<h1>Nacionalidad</h1>
				</div>

				<div class="sectionContent">
					<article>
						<h2>'.$_POST["nacionalidad"].'</h2>
					</article>
				</div>
				<div class="clear"></div>
			</section>

			<section>
				<div class="sectionTitle">
					<h1>Idiomas</h1>
				</div>
				<div class="sectionContent">
					<ul class="keySkills">
						'.$idiomas.'
					</ul>
				</div>
				<div class="clear"></div>
			</section>

			<section>
				<div class="sectionTitle">
					<h1>Nivel de inglés</h1>
				</div>

				<div class="sectionContent">
					<article>
						<h2>'.$_POST["nvling"].'</h2>
					</article>
				</div>
				<div class="clear"></div>
			</section>

		</div>
	</div>
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src=\'" + gaJsHost + "google-analytics.com/ga.js\' type=\'text/javascript\'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-3753241-1");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>
</body>

');
}
?>





</html>