<head><title> Display Data </title> 
<link rel=stylesheet href=css/style.css> 
</head>

<?php
include 'member.php';


require 'dbcon.php';

$sql = "SELECT pid, pname, pemail, puniversity, pcourse 
FROM  tblprofessor_skhan27";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
<a href=nprofessor.php > Add New Professor         ---     <A Href=page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from Professor table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> Professor_ID </TD><TD> Professor_Name </TD><TD> Email</TD><TD> University </TD><TD> Course </TD><TD> </TD> <TD> Edit </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["pid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["pname"];
		echo "</TD>";
		echo "<TD>";
        echo $row["pemail"];
		echo "</TD>";
		echo "<TD>";
        echo $row["puniversity"];
		echo "</TD>";
		echo "<TD>";
        echo $row["pcourse"];
		echo "</TD>";
		echo "<TD>";
        echo "";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=> <img src=image/edit.gif width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=delprofessor.php?pid=$row[pid]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
		echo "</TD>";
		echo "</TR>";
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

$conn->close();



?>
