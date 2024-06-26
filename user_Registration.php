<!DOCTYPE html>
<html>
<head>
	<title> User Registration Form</title>
<style>	
	*{
  
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  align-items: center;
	justify-content: center;
	margin-top: 40px;
	color: black;
	background-size:100% 120%;
	font-size: 18px;
}

.d1{
  position: relative;
  max-width: 500px;
  width: 100%;
  background: #A9A9A9;
  padding: 20px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}

.d1 form{
  margin-top: 5px;
}


</style>
</head>
<body>
<center>
<div class="d1">	
<form name="f1" method="POST">
	<h1 style="background: white;"> User Registration Form</h1>
  <p>(Kindly fill up all the details shown below)</p>
	<br><br>
	<label>Enter the Username: </label>
	<input type="text" name="uname" required><br><br>
	<label>Enter your Email: </label> &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="email" name="uemail" required><br><br>
	<label>Enter the Password: </label>
	<input type="password" name="upwd" required><br><br>

	<input type="submit" name="submit" value="Submit" style="font-size: 18px; height: 25px; width: 90px; background-color: #2E8B57; color: white;"><br>
</form>
</div>
</center>
</body>
<?php
  if(isset($_POST['submit']))
  {
  	 $a=$_POST['uname'];
	 $b=$_POST['uemail'];
	 $c=$_POST['upwd'];

	 if (!empty($a) && !empty($c)) 
		{
		   if(filter_var($b,FILTER_VALIDATE_EMAIL))
		 	{
		 		$conn=mysqli_connect("localhost","root","","abc");
		        if ($conn) 
		          {
					echo "Connection Successful";
					$q="insert into user values ('".$a."','".$b."','".$c."')";
					if(mysqli_query($conn,$q))
					{
						echo "Data inserted<br>";
					}
					else
					{
						echo "Data not inserted<br>";
					}
				  }
		        else
			     {
				    echo "Connection not Successful<br>";
			     }
		 	}
		 }
   }
?>
</html>