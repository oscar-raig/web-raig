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
			<?
				
				echo "Words!!!";
				$dbhost = 'localhost';
				$dbuser = 'oraig_oraig';
				$dbpass = 'syneraaaaaa';

				$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die  ('Error connecting to mysql');

				$dbname = 'oraig_db';
				mysql_select_db($dbname) or die (mysql_error());	
				$sql = "SELECT * FROM words";
				$result = mysql_query($sql) or die(mysql_error()); 
				echo "<table border='1'>";
				echo "<tr> <th>Name</th> <th>Description</th> </tr>";
				while($row = mysql_fetch_array( $result )) {
					// Print out the contents of each row into a table
					echo "<tr><td>"; 
					echo $row['word_name'];
					echo "</td><td>"; 
					echo $row['description'];
					echo "</td></tr>"; 
				} 
				echo "</table>";
			?>
		</div>
	</div>
	</body>	
</html>