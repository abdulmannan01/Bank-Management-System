<!DOCTYPE html>
<html lang="en">
<center>
	<head>
       <title>Fund Transfer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}
* {
    box-sizing: border-box;
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
input[type=text], input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=text]:focus {
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
    width: 10%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
h1 {
    text-align: center;
    text-transform: uppercase;
    color: #4CAF50;
}

p {
    text-indent: 50px;
    text-align: justify;
    letter-spacing: 3px;
}
</style>
</head>
	<body>
	<br/> <br/>
		<img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>
        	<h1>Fund Transfer</h1>
    	<form method="POST" action="Fundtransfer_handler.php">
        	<div class="form-group">
		<br/>
            	<label><b>Payee Account Number</b></label> <br/> <br/>
            	<input style="text-align: center; margin: 0 auto; max-width: 450px" type="number" class="form-control" id="payee" name="payee" placeholder="Payee Account Number"> <br/> <br/>
        	</div>
        	<div class="form-group">
            	<label><b>Amount</b></label> <br/> <br/>
		<input style="text-align: center; margin: 0 auto; max-width: 450px;" type="number" class="form-control" id="Amount" name="Amount"  placeholder="Amount"> <br/>	<br/>
        	</div>
            	<?php
                	if(isset($_GET['msg1']))
                	{
                    	echo '<div class="col-md-12"><h3 style="color:red" class="text-center">Please Fill In All Details Carefully</h3></br></div>';
                	}
                	if(isset($_GET['msg2']))
                	{
                    	echo '<div class="col-md-12"><h3 style="color:red" class="text-center">Insufficient balance</h3></br></div>';
                	}
            	?>
		<br>
            	<input type="submit" class="btn btn-success btn-lg yo1" value="Submit">
        	</form>
        	<br/>
        	<br/>
    	</div>
	</body>
</center>
</html>





