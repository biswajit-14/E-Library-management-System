<?php
  include "connection.php";
  include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  
  <style type="text/css">
    body
	{
		
		height:750px;
		background-image: url("images/11.JPEG");
		background-repeat: no-repeat;
	}
	.wrapper
	{
		width: 400px;
		height: 400px;
		margin:100px auto;
		background-color: black;
		opacity: .9;
		color: white;
		padding:
	}
	.form-control
	{
		width:300px;
	}
	</style>
</head>
<body>
   <div class="wrapper">
     <div style="text-align:center;">
      <h1 style="text-align: center; font-size: 35px;font-family:Lucida consol;">Change Your Password</h1><br>
	  </div>
	  <div style="padding-left: 50px">
	  <form action="" method="post">
	    <input type="text" name="username" class="form-control" placeholder="username" required=""><br>
		<input type="text" name="email" class="form-control" placeholder="Email" required=""><br>
		<input type="text" name="password" class="form-control" placeholder="New Password" required=""><br><br>
		 &nbsp &nbsp &nbsp
		<button class="btn btn-default" type="submit" name="submit" >Update</button>
	  
	  </form>
	  </div>
   </div>
   <?php
    if(isset($_POST['submit']))
	{
	if(mysqli_query($db,"UPDATE student SET password='$_POST[password]' WHERE
	username='$_POST[username]' AND email='$_POST[email]' ;"))
	{
		?>
		 <script type="text/javascript">
		 alert("The Password Update Successfully.")
		 </script>
		<?php
	}
	}
   ?>
</body>
</html>  