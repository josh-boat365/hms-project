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

// $query_users = mysqli_query($link, "INSERT INTO users(
//     email, 
//     password, 
//     login_time)
//     VALUES(
//         'admin@amasaman.hospital.com',
//          'adminTest@2021',
//           now()
//          )");
// if($query_users){
//     printf("Inserted Successfully!!");
//     mysqli_close($link);
   
// }else{
//     printf("ERROR: ". $query_users."<br>". mysqli_error($link));
// }
// mysqli_close($link);


//Creating User Id's
function admin_id(){
    $randnum = rand();
    $ad = "AD".$randnum;
    return $ad;
}

function patient_id(){
    $randnum = rand();
    $pa = "PA".$randnum;
    return $pa;
}

function doctor_id(){
    $randnum = rand();
    $dc = "DC".$randnum;
    return $dc;
}

function nurse_id(){
    $randnum = rand();
    $ns = "NS".$randnum;
    return $ns;
}

function receptionist_id(){
    $randnum = rand();
    $rp = "RP".$randnum;
    return $rp;
}

function accountant_id(){
    $randnum = rand();
    $ac = "AC".$randnum;
    return $ac;
}

function pharmacist_id(){
    $randnum = rand();
    $ph = "PH".$randnum;
    return $ph;
}

function labTechnician_id(){
    $randnum = rand();
    $lb = "LB".$randnum;
    return $lb;
}
//creating random password for users

function admin_pass(){
    $rnd_password = rand(0,100);
    $adm_pass = "admin@Test".$rnd_password;
    return $adm_pass;
}
function patient_pass(){
    $rnd_password = rand(0,100);
    $pat_pass = "patient@Test".$rnd_password;
    return $pat_pass;
}
function doctor_pass(){
    $rnd_password = rand(0,100);
    $doc_pass = "doctor@Test".$rnd_password;
    return $doc_pass;
}
function nurse_pass(){
    $rnd_password = rand(0,100);
    $nur_pass = "nurse@Test".$rnd_password;
    return $nur_pass;
}
function receptionist_pass(){
    $rnd_password = rand(0,100);
    $rec_pass = "receptionist@Test".$rnd_password;
    return $rec_pass;
}
function accountant_pass(){
    $rnd_password = rand(0,100);
    $acc_pass = "accountant@Test".$rnd_password;
}
function lab_pass(){
    $rnd_password = rand(0,100);
    $lab_pass = "admin@Test".$rnd_password;
    return $lab_pass;
}


//user account ID's
$admin_id = admin_id();
$patient_id = patient_id();
$doctor_id = doctor_id();
$nurse_id = nurse_id();
$receptionist_id = receptionist_id();
$account_id = accountant_id();
$lab_technician = labTechnician_id();

// user account passwords
$admin_pass = admin_pass();
$patient_pass = patient_pass();
$doctor_pass = doctor_pass();
$nurse_pass = nurse_pass();
$receptionist_pass = receptionist_pass();
$account_pass = accountant_pass();
$lab_pass = lab_pass();



?>