<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['pid'];
$sql = "Delete FROM tblprofessor_skhan27 Where pid=$id";

//echo $sql;

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displayprofessor.php');

?>