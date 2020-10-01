<?php  
	include "config/db.php";
	if(isset($_POST['button'])) {
		if ($_POST['name'] !== '') {
			$sql = "INSERT INTO `form` (`name`, `phone`) VALUES ('" . $_POST['name'] . "', '" . $_POST['phone'] . "')";
			mysqli_query($conn, $sql);
			header("location:/list.php");
		} else {
			echo "Введите имя!";
		}
	} 
 ?>