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

	<form action="q9.php" method="post">
		8)Waht is your fav phone ?<br>
		<input type="radio" name="q1" value="1">IPhone <br>
		<input type="radio" name="q1" value="0">samsung  <br>
		<input type="radio" name="q1" value="0">hawawi  <br>
		<input type="submit" name="submit"value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
