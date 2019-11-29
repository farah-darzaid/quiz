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

	<form action="q11.php" method="post">
		10)Waht wll do after 10 years ?<br>
		<input type="radio" name="q1" value="1">live in germany <br>
		<input type="radio" name="q1" value="0">marries  <br>
		<input type="radio" name="q1" value="0">still take cources  <br>
		<input type="submit" name="submit"value="finish">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
