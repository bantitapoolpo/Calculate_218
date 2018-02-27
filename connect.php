<?php

	if ($_SERVER['HTTP_HOST']=='localhost') {
		$DB_SEVER = 'localhost';
		$DB_USER = 'root';
		$DB_PASS = "";
		$DB_NAME = 'db81213580_exchangerate';
	}else{
		//บน server imsu.co
		$DB_SEVER = 'localhost';
		$DB_USER = 'u13580218';
		$DB_PASS = 'a1LVbMZgmO';
		$DB_NAME = 'db13580218';
	}

	//คำสั่งต่อกับฐานข้อมูล

	$conn = new mysqli($DB_SEVER,$DB_USER,$DB_PASS,$DB_NAME);

	//เช็คว่าต่อเซิฟเวอร์สำเร็จไหม

	if ($conn -> connect_error) {
		die("connection failed".$conn -> connect_error);
	}

	mysqli_set_charset($conn, "utf8");

 ?>
