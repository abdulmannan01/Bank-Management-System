<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}
.bg-img {
    /* The image used */
    background-image: url("image1.jpg");

    min-height: 380px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Add styles to the form container */
.container {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 30%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
p {
    text-indent: 50px;
    text-align: right;
    letter-spacing: 3px;
}

a {
    text-decoration: none;
    color: #008CBA;
}
</style>
</head>

<body>

<center>
<title> Log In </title>
<p>
<a href="customer.html">Sign up for internet banking</a>
</p>
<form method="POST" action="login_handler.php">
		<br/> <br/>
		<img src="bankoftu.png" alt="BANK OF TU" width="100" height="100">
		<h1>Log In</h1>
        	<div class="form-group">
            	<label><b>Username</b></label> <br/> <br/>
            	<input style="text-align: center; margin: 0 auto; max-width: 450px" type="text" class="form-control" id="username" name="username" placeholder="Enter username"> <br/>  <br/>
        	</div>
        	<div class="form-group">
            	<label><b>Password</b></label> <br/> <br/>
            	<input style="text-align: center; margin: 0 auto; max-width: 450px;" type="password" class="form-control" id="password" name="password"  placeholder="Password"> <br/>	<br/>
        	</div>
            	<?php
                	if(isset($_GET['msg1']))
                	{
                    	echo '<div class="col-md-12"><h3 style="color:red" class="text-center">Please Fill In All Details Carefully</h3></br></div>';
                	}
                	if(isset($_GET['msg2']))
                	{
                    	echo '<div class="col-md-12"><h3 style="color:red" class="text-center">Wrong Username or Password</h3></br></div>';
                	}
            	?>
            	<input type="submit" class="btn btn-success btn-lg yo1" value="Login">
        	</form>

	
</center>	
	</body>
</html>
