<?php
require_once'connect.php';
?>
<form action="Запрос_insert_country.php" method="GET">
 Автор:<input type="text" name="NameAuthor"><br>
<input type="submit" name="submit" value="Ввод"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"INSERT HIGH_PRIORITY INTO country(id_country, country)
  VALUES (0, '$_GET[NameAuthor]')");

}
?>