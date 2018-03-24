<?php
include "connect.php";
?>
<?php
if (isset($_POST['save'])) 
        {
        $nameField=mysql_real_escape_string($_POST['nameField']);
        $ttype='t1';
        //$ttype=
        $query=mysql_query("INSERT INTO `list` (`id`,`tname`,`ttype`) VALUES ('','$nameField','$ttype')");
    	}
    	//header("Location: index.php");
    	//exit;

?>

<!DOCTYPE html>
<html>
 	<head>
  		<meta charset="utf-8">
  		<title>header</title>
 	</head> 
 	<body>
	  	<header>
	   		<h1>Создание задачи</h1>
	  	</header>
	  	<form type="text" action="add.php" method="post">
	  		<label>Название задачи
	  			<input type="text" name="nameField">
	  		</label>
			<p>
				<button type="submit" name="save">Сохранить</button>
			</p>

		</form>
	  	<footer>
	    	Copyright Tasks. 2018
	  	</footer>
 	</body> 
</html>