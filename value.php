<?php 
$username = "root"; 
$password = ""; 
$database = "project1"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM employees where";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["first_name"];
        $field6name = $row["address"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>