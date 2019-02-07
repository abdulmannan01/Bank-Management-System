<html>
<center>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 3px;
    color: #008CBA;
}

* {
    box-sizing: border-box;
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
div {
    border: 1px solid gray;
    padding: 8px;
}

h1 {
    text-align: center;
    text-transform: uppercase;
    color: #4CAF50;
}
a {
	color: #0000ff;
}
a2 {
        font-family: "Times New Roman", Times, serif;
	color: #4CAF50;
	font-size: 35px;
}
</style>
</head>
	<br/>
		<img src="bankoftu.png" alt="BANK OF TU" width="100" height="100">
	</br> </br>
        <?php
            session_start();
            include("my_connect_str.php");
            $text1=$_POST['text1'];
            $uid = $_SESSION['uid'];
            $q1 = "SELECT customer_fn,customer_mn,customer_ln FROM customer WHERE uniqueid = $uid";
            $query_str1 = oci_parse($con_str,$q1);
            oci_execute($query_str1);
            while($cname = oci_fetch_array($query_str1)){
               
				echo "<div>";
				echo "<h1> Hello! <a>Mr. $cname[0] $cname[1] $cname[2]</a> </h1>";
				echo "<a2>What would you like to do today? </a2>";
				echo "</div>";
            
            }

    	?>
    <body>
	<br/> <br/>
        <form action = "Account_Details.php">
        	<input type="submit" class="btn" value = "Account Details">
    	</form>
    	<form action = "Check_Balance.php">
        	<input type="submit" class="btn" value = "Check Balance">
    	</form>
        <form action = "FundTransfer.php">
        	<input type="submit" class="btn" value = "Fund Transfer">
    	</form>
        <form action = "CheckWithdrawRecord.php">
        	<input type="submit" class="btn" value = "Check Withdraw Record">
    	</form>
        <form action = "CheckDepositRecord.php">
        	<input type="submit" class="btn" value = "Check Deposit Record">
    	</form>
        <form action = "Loan_status.php">
        	<input type="submit" class="btn" value = "Check Loan Status">
    	</form>
    	
	</body>
</center>
</html>




