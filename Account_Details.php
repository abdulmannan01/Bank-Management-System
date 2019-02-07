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
/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 25%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<center>
<body>
<br/> <br/>
        
        <img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>
		<div>
        <h1>Account details</h1>
    </div>
    <?php
    session_start();
    include("my_connect_str.php");
    $text1=$_POST['text1'];
    $uid = $_SESSION['uid'];
    $q1 = "SELECT * FROM account WHERE customerid = $uid";
    $query_str1 = oci_parse($con_str,$q1);
    oci_execute($query_str1);
    while($acdetails = oci_fetch_array($query_str1)){
		echo "<p>";
	echo "Account Number is: <b>$acdetails[0]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Account Type: <b>$acdetails[1]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Card Type: <b>$acdetails[4]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Card Expiry: <b>$acdetails[5]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Card Number: <b>$acdetails[6]</b> <BR>";
	echo "</p>";
    }
    $q2 = "SELECT * FROM phonenumber WHERE uniqueid = $uid";
    $query_str2 = oci_parse($con_str,$q2);
    oci_execute($query_str2);
   // print("<BR><b>Your contact numbers: </b>");
    while($phnumber = oci_fetch_array($query_str2)){
		echo "<p>";
	echo "Your Contact numbers : <b>$phnumber[1]</b> <BR>";
	echo "</p>";
           // print("$phnumber[1] ");
    }
    $q3 = "SELECT * FROM customer WHERE uniqueid = $uid";
    $query_str3 = oci_parse($con_str,$q3);
    oci_execute($query_str3);
    while($cdetails = oci_fetch_array($query_str3)){
       echo "<p>";
	echo "Address: <b>$cdetails[7]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "IFSC Code: <b>$cdetails[8]</b> <BR>";
	echo "</p>";
	   // print("<BR><b>Address:</b> $cdetails[7]<BR>IFSC Code: $cdetails[8]<BR><BR>");
	$_SESSION['IFSC'] = $cdetails[8];
    }
    ?>
    <form action = "Branch_Details.php">
        <input type="submit" class="btn btn-success btn-lg yo1" value = "VIEW BRANCH DETAILS.">
    </form>
</body>
</center>
</html>
