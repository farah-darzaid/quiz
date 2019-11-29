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

	<form action="q10.php" method="post">
		9)Waht is your fav drink?<br>
		<input type="radio" name="q1" value="1">coffee <br>
		<input type="radio" name="q1" value="0">tea  <br>
		<input type="radio" name="q1" value="0">pepsi  <br>
		<input type="submit" name="submit"value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
