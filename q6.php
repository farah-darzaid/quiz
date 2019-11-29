<?php

    session_start();

	if(isset($_POST['submit'])){
		$_SESSION['answer'] = $_POST['q1'];
		if($_SESSION['answer'] == '1') {
			$_SESSION['score'] ++;
		}else {
			$_SESSION['score'];
			 $_SESSION['score'];
		}
	}
	?>

	<form action="q7.php" method="post">
		6)what is your fav car?<br>
		<input type="radio" name="q1" value="0">mersedes <br>
		<input type="radio" name="q1" value="1">BMW  <br>
		<input type="radio" name="q1" value="0">Mini  <br>
		<input type="submit" name="submit"value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
