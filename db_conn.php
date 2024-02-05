<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "second_try";

$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn)
{
    die("Connect failed " . mysqli_connect_error());
}
// echo "Connect successfully";

?>