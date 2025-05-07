<head>
    <title>Display Comments</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php
include 'member.php';
require 'dbcon.php';

// Approve comment
if (isset($_GET['approve'])) {
    $id = intval($_GET['approve']);
    $conn->query("UPDATE tblcomments_skhan27 SET capproved = 1 WHERE cid = $id");
}

// Delete comment
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM tblcomments_skhan27 WHERE cid = $id");
}

// Fetch unapproved comments
$sql = "SELECT * FROM tblcomments_skhan27 WHERE capproved = 0 ORDER BY cdate DESC";
$result = $conn->query($sql);

echo "<center>";
echo "<br><h2><br><br><br>
<a href=page1.php> [ Home ] </a> --- <a href=nprofessor.php>Add New Professor</a></h2><br><br><hr>";

echo "<h2>Pending Comments for Approval</h2><br>";

echo "<table border=0 width=80%>";
echo "<tr bgcolor=#85e085>";
echo "<td>Comment ID</td><td>Name</td><td>Message</td><td>Date</td><td>Actions</td>";
echo "</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["cid"] . "</td>";
        echo "<td>" . htmlspecialchars($row["cname"]) . "</td>";
        echo "<td>" . nl2br(htmlspecialchars($row["cmessage"])) . "</td>";
        echo "<td>" . date("F j, Y H:i", strtotime($row["cdate"])) . "</td>";
        echo "<td>";
        echo "<a href=?approve=" . $row["cid"] . " onclick=\"return confirm('Approve this comment?');\">✅ Approve</a> | ";
        echo "<a href=?delete=" . $row["cid"] . " onclick=\"return confirm('Delete this comment?');\">🗑️ Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan=5><center>No new comments to approve.</center></td></tr>";
}

echo "</table>";
echo "</center>";

$conn->close();
?>
