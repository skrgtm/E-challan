<?php
session_start();
include("connection.php");

if(isset($_POST['payment'])){
    $amount = $_SESSION['Amount'];
    $Name = $_SESSION['Name'];
    $Challannumber = $_SESSION['ChallanNumber'];
    $LicenseNumber = $_SESSION['LicenseNumber'];
    $Place = $_SESSION['Place'];
    $time = $_SESSION['Time'];
    $date = $_SESSION['Date'];
    $category = $_SESSION['Category'];
    $numberplate = $_SESSION['NumberPlate'];
    $rulebroken= $_SESSION['RuleBroken'];
    
    $db_select = "SELECT * from challanissue where LicenseNumber ='$LicenseNumber' and NumberPlate = '$numberplate'";

    $result = $conn -> query($db_select);
    $delete_db = "DELETE from challanissue where LicenseNumber ='$LicenseNumber' and NumberPlate = '$numberplate'";
    $result1 = $conn -> query($delete_db);
    
    echo '<script>
    alert(Data Successfully Deleted!);
     <script>';
     header('Location:driver-home.php');
    



}
?> 