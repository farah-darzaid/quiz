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

	<form action="q5.php" method="post">
		4)what is your fav pl ?<br>
		<input type="radio" name="q1" value="0">java <br>
		<input type="radio" name="q1" value="1">php  <br>
		<input type="radio" name="q1" value="0">c++  <br>
		<input type="submit" name="submit"value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
