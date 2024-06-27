<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mands";
echo "<table border='1px'>
<tr><th>Name</th> <th>Last Name</th> <th>Username</th> <th>Favorite</th>";

$sql1 = mysqli_connect("$servername", "$username", "$password", "$dbname");
$sql2 = "SELECT * FROM signup";
$sql3 = mysqli_query($sql1, $sql2);
while ($sql4 = mysqli_fetch_array($sql3))
{
    echo "<tr>";
    echo "<td>".$sql4['name']."</td>";
    echo "<td>".$sql4['l_name']."</td>";
    echo "<td>".$sql4['u_name']."</td>";
    echo "<td>".$sql4['fav']."</td>";
    echo "</tr>";
}
?>