<?php
include_once 'config.php';
?>
<?php


    $Fullname = $_POST["fullname"];
    $address = $_POST["address"];
    $Email=$_POST["email"];
    $Mobile = $_POST["Mobile"];
    $vehicle = $_POST["vehicle"];
    $YOM = $_POST["YOM"];
    $value=$_POST["value"];
    $Vnumber=$_POST["Vnumber"];
    $usage=$_POST["Usage"];
    $make=$_POST["make"];
    $F_type = $_POST["Ftype"];
    $NIC=$_POST["NIC"];
    $less=$_POST["less"];
    $existing=$_POST["existing"];
   

   
    $sql = "INSERT INTO buy (Fullname, address, Email, Mobile, Ve_type, YOM, M_value, Ve_num, V_Usage, Manufacturing_Year, F_type, NIC, less, existing) 
    VALUES ('$Fullname', '$address', '$Email', '$Mobile', '$vehicle', '$YOM', '$value', '$Vnumber', '$usage', '$make', '$F_type', '$NIC', '$less', '$existing')";

        if(mysqli_query($con, $sql)){
            echo "<script>alert('Record Inserted Successfully!!'); window.location.href='getinsurance2.html';</script>";
        } else {
            echo "<script>alert('Error in Insertion!');</script>";
        }
    

?>
