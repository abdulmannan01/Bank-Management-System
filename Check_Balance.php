<!DOCTYPE html>
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
</style>
</head>
<center>
<body>
<br/> <br/>
        
        <img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>

    <div>
        <h1>balance details</h1>
    </div>
<?php
session_start();
include("my_connect_str.php");
$text1=$_POST['text1'];
$uid = $_SESSION['uid'];
$query_str=oci_parse($con_str,"select accountnumber,balance from account where customerid = $uid");
if(!oci_execute($query_str))
        { print("problem  "); exit;}
while($data=oci_fetch_array($query_str))
{
	echo "<BR>";
    echo "<p>";
	echo "Your account number is: <b>$data[0]</b> <BR>";
	echo "</p>";
	echo "<p>";
    echo "Your current account balance is: <b>$data[1]</b> <BR>";
    echo "</p>";
}
?>
</body>
</center>
</html>




