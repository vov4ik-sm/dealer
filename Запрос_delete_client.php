<?php
require_once'connect.php';
?>
<form action="Запрос_delete_client.php" method="GET">
 Автор:<input type="text" name="NameAuthor"><br>
<input type="submit" name="submit" value="Удалить"><br>
</form>
<?php
if($_GET['submit'])
{
	$result=mysqli_query($link,"DELETE LOW_PRIORITY QUICK
  FROM clients
  WHERE surname = '$_GET[NameAuthor]'
  LIMIT 100");
}
?>