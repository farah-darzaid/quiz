<?php
	session_start();
	
    if (isset($_POST['submit'])) {
    	
		   $_SESSION['answer'] = $_POST['q1'];
		  //$_SESSION['answer'] = $radioVal;
		  
		 if($_SESSION['answer'] == '1') {
		 	 $_SESSION['score'] ++;
		 	 
		 }else {
		 	 $_SESSION['score'];
		 }
	} 
	?>

	<form action="q3.php" method="post">
		2)your fav lang ?<br>
		<input type="radio" name="q1" value="0">ar <br>
		<input type="radio" name="q1" value="1">en  <br>
		<input type="radio" name="q1" value="0">ger  <br>
		<input type="submit" name="submit"value="next">
	</form>
	<link rel="stylesheet" type="text/css" href="qstyle.css">
