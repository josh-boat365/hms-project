<?php
//connecting to mysql server

$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "hms-php";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// return $conn;
// Check connection
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// mysqli_close($conn);
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// try{
// $db_host = "localhost";
// $db_username = "root";
// $db_password = "";
// $db_name = "hms-php";

// $conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// $conn -> set_charset("utf8mb4");


// return $conn;
// echo "connection successful";
// }catch(Exception $e){
//     error_log($e -> getMessage());
//       exit("Error: problem connecting to database ");
// }
















?>