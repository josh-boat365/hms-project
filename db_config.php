<?php
include 'conn.php';
$link = $conn;

// $query = "CREATE TABLE users (
//     id INT NOT NULL  AUTO_INCREMENT,
//     email VARCHAR(52) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     login-time datetime,
//     PRIMARY KEY (id)
// )";
// $result = mysqli_query($link, "CREATE TABLE users (
//     id INT NOT NULL  AUTO_INCREMENT,
//     email VARCHAR(52) NOT NULL,
//     password VARCHAR(255) NOT NULL,
//     login_time datetime,
//     PRIMARY KEY (id)
// )" );
// if($result){
//     printf(" Created Table");
//      mysqli_close($link); 
    
// }else{
//     printf("Table not Created");
   
// }

$query_users = mysqli_query($link, "INSERT INTO users(
    email, 
    password, 
    login_time)
    VALUES(
        'admin@amasaman.hospital.com',
         'adminTest@2021',
          now()
         )");
if($query_users){
    printf("Inserted Successfully!!");
    mysqli_close($link);
   
}else{
    printf("ERROR: ". $query_users."<br>". mysqli_error($link));
}
mysqli_close($link);
?>