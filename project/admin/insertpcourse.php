<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$catname = "";

$pcourse = $_POST['pcourse'];


  $sql = "INSERT INTO tblpcourse_skhan27 (pcourse) 
  VALUES 
  ('$pcourse' )";
  
  echo $sql;
  
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location: displayprofessor.php');
?>