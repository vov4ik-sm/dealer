<?php
require_once'connect.php';
?>
<form action="Запрос_insert_country.php" method="GET">
<p>Запрос_insert_country</p>
 Введите название страны:<input type="text" name="NameAuthor"><br>
<input type="submit" name="submit" value="Добавить в бд"><br>
</form>
</form><form method="post" action="http://dealer.ru/Main.php">
<input type="submit" name="submitButton" value="Menu" />
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO country(id_country, country)
  VALUES (0, '$_GET[NameAuthor]')");

}
?>