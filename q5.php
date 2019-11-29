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

	<form action="q6.php" method="post">
		5)what will eat tomm ?<br>
		<input type="radio" name="q1" value="1">mansaf <br>
		<input type="radio" name="q1" value="0">pizza  <br>
		<input type="radio" name="q1" value="0">falafel  <br>
		<input type="submit" name="submit"value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
