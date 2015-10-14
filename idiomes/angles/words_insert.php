<?php 
session_start();
if(!isset($_SESSION['logged']))
{
	header('Location:http://www.raig.cat/idiomes/index_idiomes.php');
	exit();
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
			<a href="http://www.raig.cat/idiomes/angles/words.php">Llistar paraules en angl&eacute;s</a>	
			<a href="http://www.raig.cat/idiomes/angles/words_insert.php">Insertar nova paraula</a>		
		</div>
	</div>
	<div id="principal">
		<div id="inside_principal">
	
	<?php if (!isset($_POST['nom'])) { ?>	
		<form action="http://www.raig.cat/idiomes/angles/words_insert.php" method="POST">
		
			Nom:<input name = "nom" type="text"/>
			Descripc&oacute;:<input name = "descripcio" type="text"/>
			<input type="submit" value="Insertar Paraula"/>
		</form>
	<?php } else 	
	{
				$dbhost = 'localhost';
		//		$dbhost = 'localhost:/private/tmp/mysql.sock';
				$dbuser = 'oraig_oraig';
				$dbpass = 'syneraaaaaa';

				$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');

				$dbname = 'oraig_db';
				mysql_select_db($dbname) or die (mysql_error());	
				$sql = "INSERT INTO words(WORD_NAME,LANGUAGE,DESCRIPTION) values('" . $_POST['nom'] ."',1,'". $_POST['descripcio'] . "')";
				$result = mysql_query($sql) or die(mysql_error()); 
				mysql_close($conn);
	?>
	
	
	<?php }?>
		
	
		</div>
	</div>

	
	</body>	
</html>