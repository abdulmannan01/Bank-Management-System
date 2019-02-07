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
    text-align: center;
    letter-spacing: 3px;
}

a {
    text-decoration: none;
    color: #008CBA;
}
</style>
</head>
<body
<div>
<h1>Wait for Approval</h1>
</div>
<?php
	require 'my_connect_str.php';
        $FName = $_POST['FName'];
	$LName = $_POST['LName'];
	$Address = $_POST['Address'];
	$Gender = $_POST['sex'];
	$Contact_No = $_POST['Contact_No'];
	$Email_ID = $_POST['Email_ID'];
	$AadharNo = $_POST['AadharNo'];
	$ID = $_POST['ID'];
        $query = "INSERT into managerapproval values('$FName', '$Lname', '$Address', '$Gender', '$Contact_No', '$Email_ID', '$AadharNo', '$ID')";
        $stdid = oci_parse($con_str, $query);
        if(!oci_execute($stdid)){
		print("Error. ");
	}
	else{
		echo "<br>";
		echo "<p>Entry Made. Application to be reviewed by manager. Contact will be made upon account validation.</p>";
	}
?>
