<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['pid'];
$sql = "Delete FROM tblrating Where rid=$id";

$conn->query($sql);
$conn->close();


//echo "Data Deleted"
header('Location: displayrating.php');

?>