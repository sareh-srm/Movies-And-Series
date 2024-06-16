<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mands";

$sql1 = mysqli_connect("$servername", "$username", "$password", "$dbname");

if($sql1)
echo "connected";

else
echo "error";

?>