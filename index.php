<?php
require_once "assets/scssphp/scss.inc.php";
use Leafo\ScssPhp\Compiler;

$md5_scss = md5_file("assets/sass/main.scss");
$md5_data = file_get_contents("assets/data/data_md5", FILE_USE_INCLUDE_PATH);

if ($md5_scss != $md5_data) {
	$scss = new Compiler();
	$scss->setImportPaths('assets/sass/');
	$css = $scss->compile('@import "main.scss";');

	$file_css = fopen("assets/css/main.css", "w");
	$file_data = fopen("assets/data/data_md5", "w");
	fwrite($file_css, $css);
	fwrite($file_data, $md5_scss);
}

?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css">
	</head>
	<body>
		<div class="button">
			<h2 style="color:white">Bouton avec transition<hr></h2>
			<div class="button_section">
				<a href="https://fr.wikipedia.org/wiki/Poulet"><div class="b_ b_1">Coucou les poulets</div></a>
				<a href="https://fr.wikipedia.org/wiki/Poulet"><div class="b_ b_2">Coucou les poulets</div></a>
				<a href="https://fr.wikipedia.org/wiki/Poulet"><div class="b_ b_3">Coucou les poulets</div></a>
			</div>
		</div><hr>
		<div class="menu">
			<h2 style="color:white">Menu</h2><hr>
			<div class="menu_section">
				<ul>
					<li><div class="menu_1_img_div"><img class="menu_1_img" src="assets/img/motorcyclist-helmet.svg" height="42" width="42"></div><div class="menu_1_txt">Home</div></li>
					<li><div class="menu_2_img_div"><img class="menu_2_img" src="assets/img/checkered-flag.svg" height="42" width="42"></div><div class="menu_2_txt">About</div></li>
					<li><div class="menu_3_img_div"><img class="menu_3_img" src="assets/img/multiple-users.svg" height="42" width="42"></div><div class="menu_3_txt">Team</div></li>
					<li><div class="menu_4_img_div"><img class="menu_4_img" src="assets/img/puzzle-part.svg" height="42" width="42"></div><div class="menu_4_txt">Process</div></li>
					<li><div class="menu_5_img_div"><img class="menu_5_img" src="assets/img/line-graph.svg" height="42" width="42"></div><div class="menu_5_txt">Stats</div></li>
					<li><div class="menu_6_img_div"><img class="menu_6_img" src="assets/img/picture.svg" height="42" width="42"></div><div class="menu_6_txt">Picture</div></li>
					<li><div class="menu_7_img_div"><img class="menu_7_img" src="assets/img/chiken-head.svg" height="42" width="42"></div><div class="menu_7_txt">Chiken</div></li>
					<li><div class="menu_8_img_div"><img class="menu_8_img" src="assets/img/hand.svg" height="42" width="42"></div><div class="menu_8_txt">Contact</div></li>
				</ul>
			</div>
		</div><hr>
		<div class="star_wars">
			<h2 style="color:white">Star Wars</h2><hr>
			<div class="star_wars_section">
				<div class="star_wars_title">
					<p class="title">A long time ago in a galaxy far,</p>
					<p class="title">far away. . . .</p>
				</div>
				<div class="star_wars_bg"></div>
				<div class="logo"></div>
				<div class="text">
					<center><p class="text_title">La vim ou la mort</p></center>
					<p class="text_p">August croyait aux théories des univers multiples, il affirmait : " C'est de la physique pur tu veux voir ma machine ? " . Bruce lui n'y croyait pas trop : " Mais comment est-ce possible ? " .

Suite à une longue discussion Bruce décide de suivre August dans son aventure. Il rentre tous les deux dans la machine, un bruit sourd s'en dégage Grrrrrrrrr Clac.

Et les voilà perdu dans le vim entre les mondes.

"Mais comment sortir de là", s'exclame Bruce ...

"Je ne sais pas du tout!! Que s'est il passé?" demanda August.

Les deux personnages voulèrent sortir de la machine, mais il y a un problème..

La machine est dans l'espace ! s'exclamèrent August et Bruce.

Plus le temps passait plus l'air se rafraichissait, et le plus le bruit de la vitre qui se brisait s'intensifiait.

C'est a ce moment qu'apparu ..</p>
				</div>
			</div>
		</div><hr>
		<div class="card">
			<h2 style="color:white">Card</h2><hr>
			<div class="card_section">
				<img src="assets/img/mokona.jpg" alt="Avatar" style="width:100%">
				<div class="card_txt">
					<p class="card_photo">PHOTOS</p>
					<h4><b>TheDoudou</b></h4> 
					<p>Interior Designer</p> 
				</div>
			</div>
		</div>
	</body>
</html>










