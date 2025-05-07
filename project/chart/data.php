<?php
header('Content-Type: application/json');
require 'admin/dbcon.php';

//$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";
$sqlQuery = "SELECT rrating from tblrating_skhan27 p_fk=$id";


//$sqlQuery = "SELECT student_id,student_name,marks FROM tbl_marks ORDER BY student_id";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>