<?php
    require 'config.php';

    $Buname=$_POST["Bname"];
    $BEmail=$_POST["Bemail"];
    $contact=$_POST["Bcontact"];
    $specification=$_POST["Specification"];


$sql="INSERT INTO request_quotation  values('$Buname','$BEmail','$contact','$specification')";

if($con->query($sql))
{
    echo "Inserted successfully";
}
else{
    echo "Error".$con->error;
}
$con->close();

?>