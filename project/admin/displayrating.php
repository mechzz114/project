<head><title> Display Rating </title> 
<link rel=stylesheet href=css/style.css> 
</head>

<?php
include 'member.php';


require 'dbcon.php';

$sql = "SELECT pid, pname, pemail, pcourse, puniversity, rid, p_fk, rdate, rrating, rdifficulty, rtag,   ragain, rcomments from tblprofessor_skhan27 JOIN tblrating_skhan27 ON tblprofessor_skhan27.pid = tblrating_skhan27.p_fk order by pname asc";
				//echo $sql;";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
Echo "<H2><BR><BR><BR>
<a href=nprofessor.php > Professor         ---     <A Href=page1.php> [ Home ] </A></a></H2>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Professor Rating</h2> <Br>";

echo "<Table border=0 width=90%>";
echo "<TR bgcolor=#85e085>";
echo "<TD> PName </TD><TD> Email</TD><TD> Uni </TD><TD> Course </TD>
		<TD> Rating </TD><TD> Difficulity </TD><TD> again</TD><TD> rtage </TD><TD> Date </TD><TD> Comments </TD>
     <TD> Edit </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
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
		echo "<TD>";
        echo $row["rrating"];
		echo "</TD>";
		echo "<TD>";
        echo $row["rdifficulty"];
		echo "</TD>";
		echo "<TD>";
        echo $row["ragain"];
		echo "</TD>";
		echo "<TD>";
        echo $row["rtag"];
		echo "</TD>";
		echo "<TD>";
        echo $row["rdate"];
		echo "</TD>";
		echo "<TD width=20%>";
        echo $row["rcomments"];
		echo "</TD>";
		echo "<TD>";
		echo "<A href=updaterating.php?nid=$row[rid]> <img src=image/edit.gif width=25 height=25> </A>";
		echo "</TD>";
		echo "<TD>";
		echo "<A href=delrating.php?pid=$row[rid]> <img src=image/delete.gif width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this rating?');\"> </A> ";
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
