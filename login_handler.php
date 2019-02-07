<?php
session_start();
include "my_connect_str.php";
$user=$_POST['username'];
$pass=$_POST['password'];
if(empty($user)||empty($pass))
{
        header("location:login.php?msg1=false");
}
else
{
        $q = "SELECT uniqueID FROM customer WHERE username='$user' AND password='$pass'";
        $query_str = oci_parse($con_str,$q);
        if(!oci_execute($query_str)){
			print("<BR>Problem<BR>");
			
        }
        while($data=oci_fetch_array($query_str))
        {
				
			print("Query success!");
			$array = array();
			$array = $data[0];
			print($data[0]);
			$_SESSION['uid'] = $data[0];
			setcookie("username",$user);
			header("location:menu.php");
	}

	if(empty($array))
	{
		header("location:login.php?msg2=false");
	}
		
}
?>
