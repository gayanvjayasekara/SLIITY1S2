<?php
require 'config.php';

$sql="SELECT Name,Email,contact_No,Specification FROM request_quotation";

$result=$con->query($sql);

if($result->num_rows>0)
{
    echo "<table border='1'>";
    echo "<tr><th>Name</th><th>Email</th><th>Contact Number</th><th>Specification</th>";
  while($row=$result->fetch_assoc())
  {
    echo "<tr>";
    foreach ($row as $key=>$value){
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";

  }
  echo "</table>";

}
else{
    echo "No result";
}




$con->close();

?>