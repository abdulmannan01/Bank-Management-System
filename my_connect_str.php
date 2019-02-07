<?php
 $con_str = oci_connect("kavel_csb16", "kavel", "192.168.125.4/oracle10");
    if (!$con_str)
        {
       $err = oci_error();
       print("Coulnot connect");
	exit;
     }



?>
