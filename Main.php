<form action="Запрос_client_lada.php" method="GET">
<h1>Управление базой данных "dealer"</h1>
<h2>Вам доступны следующие функции:"</h2>
Запрос №1: Запрос_client_lada
<form method="post" action="http://dealer.ru/Запрос_client_lada.php">
<input type="submit" name="submitButton" value="Перейти" />
</form>
  <style>
   p {
    text-indent: 20px;
   }
  </style>
<p>Описание: данный запрос выводит код клиента по бренду автомобиля</p>
Запрос №2: Запрос_delete_client
<form method="post" action="http://dealer.ru/Запрос_delete_client.php">
<input type="submit" name="submitButton" value="Перейти" />
</form>
  <style>
   p {
    text-indent: 20px;
   }
  </style>
<p>Описание: данный запрос удалаяет всю информацию о клиенте из бд</p>
Запрос №3: Запрос_insert_brand
<form method="post" action="http://dealer.ru/Запрос_insert_brand.php">
<input type="submit" name="submitButton" value="Перейти" />
</form>
  <style>
   p {
    text-indent: 20px;
   }
  </style>
<p>Описание: данный запрос добавляет бренд в бд</p>
Запрос №4: Запрос_product_number_seats
<form method="post" action="http://dealer.ru/Запрос_product_number_seats.php">
<input type="submit" name="submitButton" value="Перейти" />
</form>
  <style>
   p {
    text-indent: 20px;
   }
  </style>
<p>Описание: данный запрос выводит бренд и модель автомобиля по количеству мест автомобиля</p>
Запрос №5: Запрос_insert_country
<form method="post" action="http://dealer.ru/Запрос_insert_country.php">
<input type="submit" name="submitButton" value="Перейти" />
</form>
  <style>
   p {
    text-indent: 20px;
   }
  </style>
<p>Описание: данный запрос добавляет страну в бд</p>
</form>
<?php
if($_GET['submit'])
{
	header('Location:Запрос_client_lada.php');
}
if($_GET['submit3'])
{
	header('Location:Запрос_insert_brand.php');
}
?>