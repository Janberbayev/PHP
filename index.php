<?php
include "connect.php";
include "menu.php";

	//$table=mysql_query("select * from `list` where `tname`='$e_telephone'");
    //$row=mysql_fetch_array($table);
?>

<!DOCTYPE html>
<html>
 	<head>
  		<meta charset="utf-8">
  		<title>header</title>
  		<style>
   			a { 
    			text-decoration: none; 
   			} 
  		</style>
 	</head> 
 	<body>
	  	<header>
	   		<h1>Список задач</h1>
	  	</header>
	  	<form type="text" action="index.php" method="post">
	  		<p><select name="typeTask">
			        <option value="0">Все задачи</option>
			        <option value="t1">Новая задача</option>
			    	<option value="t2">Выполеннная задача</option>
			     	<option value="t3">Отмененные задачи</option>
			    </select>
			    <button type="submit">Применить</button>
				<button type="button" name="addTask"><a href="add.php">Добавить задачу</a></button>

			</p>


		</form>
			<table>
				<thead>
					<th>id</th>
					<th>Название</th>
					<th>Тип Задачи</th>
				</thead>
				<tbody>
					
					<?
						if (@$_POST['typeTask']==true) $typeTask = " AND `ttype`='".$_POST['typeTask']."'";
							else $typeTask = " 1 ";
							
						if ($query = mysql_query("SELECT * FROM `list` WHERE ".$typeTask." ORDER by `id` DESC")){
							    while ($row = mysql_fetch_assoc($query)) {
							    	echo '<tr>';
							        echo '<td>'.$row["id"].'</td>';
							        echo '<td>'.$row["tname"].'</td>';
							        echo '<td>'.$row["ttype"].'</td>';
							    	echo '</tr>';

							    }
						}
					?>

				</tbody>
			</table>
	  	<footer>
	    	Copyright Tasks. 2018
	  	</footer>
 	</body> 
</html>

