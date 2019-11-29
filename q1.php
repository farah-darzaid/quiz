<?php
	session_start();
	$_SESSION['score'] = 0;
	 
	?>

	<form action="q2.php" method="post">
		1)Waht is htu ?<br>
		<input type="radio" name="q1" value="1">HTU <br>
		<input type="radio" name="q1" value="0">JU  <br>
		<input type="radio" name="q1" value="0">GJU  <br>
		<input type="submit" name="submit" value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
