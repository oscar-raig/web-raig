<?
session_start();
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
			Test
			<?
				
				if(isset($_SESSION['logged']))
				{
					echo "we are logged";
					exit();
				}
				else 
				{
					echo "We are not logged!!";
					if (isset($_POST['txtUserId']))
						if (isset($_POST['txtPassword']))
						{
							if(($_POST['txtUserId'] =='oscar') && ($_POST['txtPassword'] == 'synera'))
							{
								
								$_SESSION['logged']=true;
								exit();
							}
						}
				}
				
			?>
					<form method="post" name="frmLogin" id="frmLogin">
						<table width="400" border="1" align="center" cellpadding="2" cellspacing="2">
						<tr>
						<td width="150">User Id</td>
						<td><input name="txtUserId" type="text" id="txtUserId"></td>
						</tr>
						<tr>
						<td width="150">Password</td>
						<td><input name="txtPassword" type="password" id="txtPassword"></td>
						</tr>
						<tr>
						<td width="150">&nbsp;</td>
						<td><input type="submit" name="btnLogin" value="Login"></td>
						</tr>
						</table>
					</form>
				
			
		</div>
	</div>
	</body>	
</html>
