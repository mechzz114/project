<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Rate MyProfessor</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/stylemenu.css">

    <style>
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

        .contact-form-container {
            background-color: #fff;
            max-width: 600px;
            margin: 30px auto;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 30px;
            /* text-align: center; */
        }

        .contact-form-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            background-color: #f9f9f9;
        }

        input[type="submit"] {
            padding: 12px 25px;
            background-color: #222;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            margin-top: 15px;
        }

        input[type="submit"]:hover {
            background-color: #444;
        }

        footer {
            background-color: #222;
            color: white;
            padding: 15px 0;
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'admin/dbcon.php';
?>

<header class="banner">
    <img src="images/logo.svg">

    <div class="panel panel-nav">
        <center>
            <div class="dropdown">
                <button class="dropbtn"><a href="home1.php"><b>HOME</b></a></button>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="admin/index1.html"><b>Login</b></a></button>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="contactus.php"><b>Contact Us</b></a></button>
            </div>
            <div class="dropdown">
                <button class="dropbtn"><a href="details.php"><b>Details</b></a></button>
            </div>
        </center>
    </div>
</header>

<main>
    <article>
        <center>
            <div class="hero-image">
                <div class="hero-text">
                    <img src="bglogo.svg" alt="Logo" />
                    <h2>Contact Us</h2>
                    <p>We would love to hear from you! Please fill out the form below to get in touch.</p>
                </div>
            </div>

            <!-- Contact Us Form -->
            <div class="contact-form-container">
                <h1>Send Us a Message</h1>
                <form method="POST" action="">
                    <label for="cname">Name:</label>
                    <input type="text" id="cname" name="cname" required>

                    <label for="cemail">Email:</label>
                    <input type="email" id="cemail" name="cemail" required>

                    <label for="csubject">Subject:</label>
                    <input type="text" id="csubject" name="csubject" required>

                    <label for="ccomments">Message:</label>
                    <textarea id="ccomments" name="ccomments" rows="5" required></textarea>

                    <input type="submit" name="submit" value="Send Message">
                </form>

                <?php
                if (isset($_POST['submit'])) {
                    $name = mysqli_real_escape_string($conn, $_POST['cname']);
                    $email = mysqli_real_escape_string($conn, $_POST['cemail']);
                    $subject = mysqli_real_escape_string($conn, $_POST['csubject']);
                    $comments = mysqli_real_escape_string($conn, $_POST['ccomments']);

                    $sql = "INSERT INTO tblcontactus_skhan27 (cname, cemail, csubject, ccomments) 
                            VALUES ('$name', '$email', '$subject', '$comments')";

                    if ($conn->query($sql) === TRUE) {
                        echo "<p style='color:green; text-align:center;'>Thank you! Your message has been sent.</p>";
                    } else {
                        echo "<p style='color:red; text-align:center;'>Error: " . $conn->error . "</p>";
                    }
                }
                ?>
            </div>
        </center>
    </article>
</main>

<footer>
    <center>
        Footer information
    </center>
</footer>

</body>
</html>
