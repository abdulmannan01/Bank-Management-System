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
</style>
</head>
<body>
<center>
<br/> <br/>
		<img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>
		<div>
        <h1>loan transaction</h1>
    </div>
<?php
session_start();
include("my_connect_str.php");
$text1=$_POST['text1'];
$uid = $_SESSION['uid'];
$q2 = "SELECT * FROM loantransaction WHERE customer_id  = $uid";
$query_str2 = oci_parse($con_str,$q2);
oci_execute($query_str2);
while($data = oci_fetch_array($query_str2)){
	echo "<p>";
	echo "Loan ID: <b>$data[0]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "EMI: <b>$data[1]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "LAst Transaction Date: <b>$data[2]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Next Transaction Date: <b>$data[3]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Amount Left: <b>$data[4]</b> <BR>";
	echo "</p>";
    //print("<b>Loan ID: $data[0]<BR>EMI: $data[1] <BR>Last Transaction Date: $data[2] <BR>Next Transaction Date: $data[3] <BR>Amount Left: $data[4]</b>");
    print("<BR> <BR>");
}
?>
</center>
</body>
</html>
