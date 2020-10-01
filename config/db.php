<?php 
	// Имя хоста
	$hostname = "localhost";
	// Имя пользователя в базе данных
	$username = "root";
	// Пароль к базе данных
	$password = "";
	// Имя базы данных
	$dbname = "test";

	// Подключаем базу данных
	$conn = new mysqli($hostname,$username,$password,$dbname);
 ?>