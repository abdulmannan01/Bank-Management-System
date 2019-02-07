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
<center>
<body>
<br/> <br/>
        
        <img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>

    <div>
        <h1>branch details</h1>
    </div>
</head>
</html>
<?php
session_start();
include("my_connect_str.php");
$text1=$_POST['text1'];
$IFSC = $_SESSION['IFSC'];
$q1 = "SELECT * from bankbranch where IFSC = '$IFSC'";
$query_str=oci_parse($con_str,$q1);
if(!oci_execute($query_str))
        { print("problem  ");}
while($data=oci_fetch_array($query_str))
{
	 echo "<p>";
	echo "IFSC Code: <b>$data[0]</b> <BR>";
	echo "</p>";
	 echo "<p>";
	echo "Branch Address: <b>$data[1]</b> <BR>";
	echo "</p>";
	 echo "<p>";
	echo "Manager Name: <b>Mr. $data[2] $data[3] $data[4]</b> <BR>";
	echo "</p>";
}
?>

