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
    width: 30%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
    <body>
	<center>
	<br/> <br/>
		<img src="bankoftu.png" alt="BANK OF TU" width="100" height="100"> <br/> <br/>
	<div>
        <h1>Loan transaction details</h1>
    </div>	

    <?php
    
        session_start();
        include("my_connect_str.php");
        $text1=$_POST['text1'];
        $uid = $_SESSION['uid'];
        $q2 = "SELECT * FROM loans WHERE customer_id  = $uid";
        $query_str2 = oci_parse($con_str,$q2);
        oci_execute($query_str2);
        while($data = oci_fetch_array($query_str2)){
			echo "<p>";
	echo "Loan ID: <b>$data[0]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Amount: <b>$data[1]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Loan Type: <b>$data[2]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Period: <b>$data[3]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Approval Date: <b>$data[4]</b> <BR>";
	echo "</p>";
	echo "<p>";
	echo "Interest: <b>$data[6]</b> <BR>";
	echo "</p>";
	print("<BR> <BR>");
        }
        
    ?> 
	<br/> <br/>
	 <form action = "Loan_Transaction.php">
                    <input type="submit" class="btn" value = "Check my transactions. ">
    </form>

	</center>
    </body>
</html>
