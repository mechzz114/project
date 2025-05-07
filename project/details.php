<!DOCTYPE html>
<html>
<head>
    <title>Send Your Thoughts Anonymously</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stylemenu.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero-image {
            background-image: url("bg.png");
            background-color: #cccccc;
            height: 350px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }

        .hero-text {
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
        }

        .content-box {
            width: 70%;
            background: #f9f9f9;
            padding: 20px;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h1, h2 {
            color: #333;
        }

        form table {
            margin: 0 auto;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            background-color: #0073aa;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #005e8c;
        }

        .comment-block {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<?php
require 'admin/dbcon.php';
?>

<header class="banner">
    <img src="images/logo.svg">
    <div class="panel panel-nav">
        <center>
            <div class="dropdown"><button class="dropbtn"><a href="home1.php"><b>HOME</b></a></button></div>
            <div class="dropdown"><button class="dropbtn"><a href="admin/index1.html"><b>Login</b></a></button></div>
            <div class="dropdown"><button class="dropbtn"><a href="contactus.php"><b>Contact Us</b></a></button></div>
        </center>
    </div>
</header>

<main>
    <center>
        <!-- Hero Section -->
        <div class="hero-image">
            <div class="hero-text">
                <h1 style="color:white !important">Send Your Thoughts Anonymously</h1>
                <p>Share your thoughts with us, no names required. Your feedback is important to us!</p>
            </div>
        </div>
    </center>

    <br><hr style="width:70%;"><br>

    <div class="content-box">
        <h2>Leave a Comment</h2>
        <form method="POST" action="">
            <table width="100%" border="0" cellpadding="10">
                <tr>
                    <td>Name (optional):</td>
                    <td><input type="text" name="cname"></td>
                </tr>
                <tr>
                    <td>Comment:</td>
                    <td><textarea name="cmessage" rows="5" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="submit_comment" value="Submit Comment">
                    </td>
                </tr>
            </table>
        </form>

        <?php
        if (isset($_POST['submit_comment'])) {
            $cname = mysqli_real_escape_string($conn, $_POST['cname']);
            $cmessage = mysqli_real_escape_string($conn, $_POST['cmessage']);
            if (empty($cname)) {
                $cname = "Anonymous";
            }
            $sql = "INSERT INTO tblcomments_skhan27 (cname, cmessage, capproved)
                    VALUES ('$cname', '$cmessage', 0)";
            if ($conn->query($sql) === TRUE) {
                echo "<p style='color:green;'>Your comment has been submitted for review.</p>";
            } else {
                echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>

    <br><hr style="width:70%;"><br>

    <div class="content-box">
        <h2>Previous Comments</h2>
        <?php
        $sql = "SELECT cname, cdate, cmessage FROM tblcomments_skhan27 
                WHERE capproved = 1 ORDER BY cdate DESC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='comment-block'>";
                echo "<strong>" . htmlspecialchars($row['cname']) . "</strong> ";
                echo "<em>on " . date("F j, Y", strtotime($row['cdate'])) . "</em><br>";
                echo "<p>" . nl2br(htmlspecialchars($row['cmessage'])) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No comments yet.</p>";
        }
        $conn->close();
        ?>
    </div>
</main>

<footer>
    <center>Footer information</center>
</footer>

</body>
</html>
