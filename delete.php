<?php

	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];

	$sql = "DELETE FROM exch812_history WHERE recordID = $id";

	require 'connect.php';

	$sql_exe = $conn -> query($sql);

	$conn->close();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<title>Delete</title>
 </head>
 <body>
 	<?php
		if ($sql_exe) {     	?>

			<center><h2 class='text-success'>Delete Complete! <br><small>Delete ID : <?php echo $id ?> THB = <?php echo $thb ?></small></h2></center>

			<center><a href="index.php" class="btn btn-primary">Back</a></center>

	<?php }else{?>

			<center><h1 class="text-danger">Delete Failed!</h1></center>

	<?php }					?>

 </body>
 </html>
