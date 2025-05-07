<?php
// File: admin/dbcon.php

$servername = "studentdb-maria.gl.umbc.edu";
$username = "skhan27";
$password = "skhan27";
$dbname = "project_DB_skhan27";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
