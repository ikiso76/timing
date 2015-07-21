<?php

$connection = pg_connect("host=localhost port=5433 dbname=m2 user=postgres password=malipas");

// let me know if the connection fails
if (!$connection) {
    print("Connection Failed.");
    exit;
}


$myresult = pg_exec($connection, "SELECT IME FROM radnik WHERE id_ak = 9998");

// process results
//$myvalue = pg_result($myresult);
 $myvalue = pg_numrows($myresult);
// print results
print("My Value: $myvalue<br />\n");
?>
