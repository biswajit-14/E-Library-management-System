<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		e - Library Management System
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">nav
{
	float:right;
	word-spacing:30px;
	padding:50px;
}
nav li
{
	display: inline-block;
	line-height:10px;
}
</style>
</head>


<body>
	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/9.JFIF">
		</div>
		   <?php
		   if(isset($_SESSION['login_user']))
		   {
		   ?>
			<nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav> 
            <?php			
		   }
		   else
		   {
			   ?>
			  <nav>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="books.php">BOOKS</a></li>
                    <li><a href="student_login.php">STUDENT_LOGIN</a></li>
					<li><a href="feedback.php">FEEDBACK</a></li>
				</ul>
			</nav>
			   <?php
		   }
		     
		   ?>
			
		</header>
		<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px;">WELCOME TO e-LIBRARY MANAGEMENT SYSTEM</h1><br><br>
			</div>
		</div>
		</section>
		<footer>
          
	  <p style="color:white;text-align: center;">
	  <br><br>
		Email:&nbsp biswajitswain820@gmail.com <br><br>
		Mobile:&nbsp &nbsp +91 82492*****
	   </p>
       </footer>
	</div>

</body>

</html>