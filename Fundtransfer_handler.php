<!DOCTYPE>
<html>
<head>
<style>
div {
    border: 1px solid gray;
    padding: 8px;
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

a {
    text-decoration: none;
    color: #008CBA;
}
</style>
<body>
<center>
<br/> <br/>
		<img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>
		<div>
			<h1>Transaction Successful. </h1>
		</div>

<?php
session_start();
include "my_connect_str.php";
$payee=$_POST['payee'];
$amount=$_POST['Amount'];
$uid = $_SESSION['uid'];
if(empty($payee)||empty($amount))
{
    	header("location:FundTransfer.php?msg1=false");
}
else
{
        $q1 = "SELECT accountnumber FROM account WHERE customerid = $uid"; 
        $query_str1 = oci_parse($con_str,$q1);
        oci_execute($query_str1);
        while($acnumber = oci_fetch_array($query_str1)){
        }
        $q2 = "SELECT balance FROM account WHERE customerid = $uid";
        $query_str2 = oci_parse($con_str,$q2);
        oci_execute($query_str2);
        while($balance_payer = oci_fetch_array($query_str2)){

          if($balance_payer[0]<$amount){
               
               header("location:FundTransfer.php?msg2=false");
	       exit();
          }
          
	     $balance_up = $balance_payer[0] - $amount;
        }
        $q3 = "SELECT balance FROM account WHERE accountnumber ='$payee'";
        $query_str3 = oci_parse($con_str,$q3);
        if(!oci_execute($query_str3)){
			print("error.\n");
	}
	while($balance_payee = oci_fetch_array($query_str3)){
		$balance_new = $balance_payee[0] + $amount;

	}
        $q4 = "UPDATE account SET balance = $balance_new WHERE accountnumber = '$payee'";
        $query_str4 = oci_parse($con_str,$q4);
        if(!oci_execute($query_str4)){
             print("Update error 1. \n");
        }
	$q5 = "UPDATE account SET balance = $balance_up WHERE customerid = $uid";
        $query_str5 = oci_parse($con_str,$q5);
        if(!oci_execute($query_str5)){
             print("Update error 2. \n");
        }

        $q6 = "SELECT balance FROM account WHERE customerid = $uid";
        $query_str6 = oci_parse($con_str,$q6);
        if(!oci_execute($query_str6)){
             print("Error. \n");
        }
        while($updated_balance = oci_fetch_array($query_str6)){
            	
		echo"<p>";
		echo "<br>";
		echo"<b>Your updated balance is:</b> $updated_balance[0]";
		echo"</p>";
        }
}
?>
</center>
</body>
</html>
