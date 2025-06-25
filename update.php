<?php

include "config.php";

$Buname=$_POST["Bname"];
$BEmail=$_POST["Bemail"];
$contact=$_POST["Bcontact"];
$specification=$_POST["Specification"];


if(empty($Buname)||empty($BEmail)||empty($contact)||empty($specification))
{
    echo "ALL REQUIRED";
}
else{
    $Sql="UPDATE request_quotation set Email='$BEmail',contact_No='$contact',Specification='$specification' WHERE Name='$Buname' ";
    if($con->query($Sql))
    {
        echo "updated";
    }
    else{
        echo "Not updated";
    }
}







?>