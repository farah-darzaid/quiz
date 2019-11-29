<?php 
	 session_start();
	
			  
			 if($_SESSION['answer'] == '1') {
			 	 $_SESSION['score'] ++;
			 	  $_SESSION['score'];
			 	 
			 }else {
			 	 $_SESSION['score'];
			 }
		 
	// $grad = $_SESSION['score'] ;
	 echo "<pre>";
	 echo "You finish the exam :) <br> Your score is :" . $_SESSION['score'];
 	
 	 session_unset();
?> 
<link rel="stylesheet" type="text/css" href="qstyle.css">


