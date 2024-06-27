<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mands";

$sql1 = mysqli_connect("$servername", "$username", "$password", "$dbname");
$sql2 = "INSERT INTO signup (name, l_name, u_name, p_word, fav) VALUES ('$_POST[name]', '$_POST[l_name]', '$_POST[u_name]', '$_POST[p_word]', '$_POST[fav]')";

echo '<pre>';
print_r($_POST);
echo '</pre>';

if(mysqli_query($sql1, $sql2))
  echo "<h1>Welcome!</h1>";

else
  echo "error";
?>