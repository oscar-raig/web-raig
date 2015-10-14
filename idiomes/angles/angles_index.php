<?
session_start();
if (!isset($_SESSION['logged'])) {
		header( 'Location: http://www.raig.cat/login/login.php' ) ;
	}
?>
<html>
	<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="http://www.raig.cat/css_raig.css">
	</head>

	<body>
	<div id="menu">
		<div id="home">
			<a href="http://www.raig.cat">Inici</a>
			
		</div>
	</div>
	<div id="principal">
		<div id="inside_principal">
			<h1>Angl&egrave;s</h1><br>
			<p><p>
			
			<a class="anchor_index" href= "http://www.raig.cat/idiomes/angles/the_hobbit_angles_catala.php">Vocabulari del llibre The Hobbit</a><br><br>
			<a class="anchor_index" href= "http://www.raig.cat/idiomes/angles/the_fellowship_of_the_ring.html">Vocabulari del llibre The Fellowship of The Ring </a><br><br>
			<hr/>
		</div>
	</div>
	</body>	
</html>words_insert.php