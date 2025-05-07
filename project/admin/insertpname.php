<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$catname = "";

$pname = $_POST['pname'];


  $sql = "INSERT INTO tblpname_skhan27 (pname) 
  VALUES 
  ('$pname' )";
  
  echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: displayprofessor.php');
?>