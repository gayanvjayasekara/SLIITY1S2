<?php

require 'config.php';

$Buname=$_POST["Bname"];
$BEmail=$_POST["Bemail"];
$contact=$_POST["Bcontact"];
$specification=$_POST["Specification"];

$sql="DELETE FROM request_quotation where Name='$Buname'";

if($con->query($sql))
{
    echo "deleted";
}
else
{
    echo"Not success";
}









?>