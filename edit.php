<?php
include "connect.php";
?>

<!DOCTYPE html>
<html>
 	<head>
  		<meta charset="utf-8">
  		<title>header</title>
 	</head> 
 	<body>
	  	<header>
	   		<h1>Редактирование задачи</h1>
	  	</header>
	  	<form type="text" action="add.php" method="post">
	  		<label> Название задачи
	  			<input type="text" name="nameField">
			</label>

			
			<p>
				<button type="submit">Сохранить</button>
			</p>

		</form>
	  	<footer>
	    	Copyright Tasks. 2018
	  	</footer>
 	</body> 
</html>