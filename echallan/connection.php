<?php 
#connecting to database 
$servername = "localhost";
$username ="root";
$password ="";
// $database ="hrm";

$conn = new mysqli($servername,$username,$password);
//check whether database exists or not 
$dbexists = "SELECT SCHEMA_NAME             
FROM INFORMATION_SCHEMA.SCHEMATA
WHERE SCHEMA_NAME = 'wave'";

//firing command
$result = $conn->query($dbexists);

if($result->num_rows == 0){
    // Create Database
    $database = "wave";
    $db_query = "CREATE DATABASE ".$database.";";
    $conn->query($db_query);
    // Select Database
    $conn->select_db($database);
    // Create Table
    $create_table = "
    create table user(
        id int  AUTO_INCREMENT PRIMARY KEY,
        user_name varchar(80) DEFAULT NULL,
        user_password varchar(80) DEFAULT NULL
        
    );
    ";
    //fire create table code
    $conn->query($create_table);
    $add_value="
    INSERT INTO user(user_name,user_password) values('admin','admin123');";
    $conn->query($add_value);

    $conn ->select_db($database);
    //create table
    $c_table ="
    create table challanissue(
        ChallanNumber int(15) DEFAULT NULL,
        Name varchar(255) DEFAULT NULL,
        LicenseNumber int(15) DEFAULT NULL,
        Category varchar(255) DEFAULT NULL,
        Place varchar(255) DEFAULT NULL,
        Time time DEFAULT NULL,
        NumberPlate int(15) DEFAULT NULL,
        Date date DEFAULT NULL,
        Amount int(15) DEFAULT NULL,
        RuleBroken varchar(255)  DEFAULT NULL
        );";


    $conn->query($c_table); 

    $conn->select_db($database);  
    $cr_table ="create table driverdata(
        id int AUTO_INCREMENT PRIMARY KEY DEFAULT NULL,
        Name varchar(255) DEFAULT NULL,
        Address varchar(255)  DEFAULT NULL,
        Date_of_Birth date DEFAULT NULL,
        license_number int(15) DEFAULT NULL,
        password char(40) NOT NULL,
        PhoneNumber varchar(30) DEFAULT NULL
        );";
        $conn->query($cr_table); 
    
}

//if database exist or created select database
$conn->select_db("wave");



if ($conn -> connect_errno) {    
    echo "Failed to connect to MySQL: " .$mysqli -> connect_error;
    exit();     
}
?>