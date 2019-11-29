<?php
	
	session_start();
	if (isset($_POST['submit'])) {

		$_SESSION['answer'] = $_POST['q1'];

		if($_SESSION['answer'] == '1') {
		 	 $_SESSION['score']++;
		 }else {
		 	 $_SESSION['score'];
		 }
	}
    
	?>

	<form action="q4.php" method="post">
		3)what is your fav color?<br>
		<input type="radio" name="q1" value="1">green <br>
		<input type="radio" name="q1" value="0">red  <br>
		<input type="radio" name="q1" value="0">blue  <br>
		<input type="submit" name="submit"value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
