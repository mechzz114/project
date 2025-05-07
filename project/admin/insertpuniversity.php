<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$catname = "";

$puniversity = $_POST['puniversity'];


  $sql = "INSERT INTO tblpuniversity_skhan27 (puniversity) 
  VALUES 
  ('$puniversity' )";
  
  echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: displayprofessor.php');
?>