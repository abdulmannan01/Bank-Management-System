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
<body>
<center>
<br/> <br/>
		<img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>
		<div>
        <h1>Withdrawal Records</h1>
    </div>
<?php
session_start();
include("my_connect_str.php");
$text1=$_POST['text1'];
$uid = $_SESSION['uid'];
$q1 = "SELECT accountnumber FROM account WHERE customerid = $uid"; 
$query_str1 = oci_parse($con_str,$q1);
oci_execute($query_str1);
while($acnumber = oci_fetch_array($query_str1)){
    $newac = $acnumber[0];
}
$q2 = "SELECT * FROM withdrawal WHERE withdrawal_accno  = '$newac'"; 
$query_str2 = oci_parse($con_str,$q2);
oci_execute($query_str2);
while($data = oci_fetch_array($query_str2)){
    echo "<p>";
	echo "Transaction ID:<b> $data[0]</b>";
	echo "</p>";
    echo "<p>";
	echo "Amount Withdrawn:<b> $data[1]</b>";
	echo "</p>";
    echo "<p>";
	echo "Withdrawal Mode:<b> $data[2]</b>";
	echo "</p>";
    echo "<p>";
	echo "Date:<b> $data[3]</b>";
	echo "</p>";
}

?>
</center>
</body>
</html>



