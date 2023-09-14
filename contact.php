<?php
session_start();
include('conn.inc');
$ID = '';
if (isset($_POST['ID'])) {
    $ID = $_POST['ID'];
} elseif (isset($_GET['ID'])) {
    $ID = trim($_GET['ID']);
}
$_SESSION['ID']=$ID;

$NAME = "";
$EMAIL = "";
$SUBJECT = "";
$MESSAGE    = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niladri Khan</title>
    <link rel="icon" href="images/logo.jpeg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body style="background-color:  #E1E1D6;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <header>
        <nav>
        <div class="left"><img src="images/logo.jpeg" style="max-width: 18%; height: auto;border-radius: 10px;"></div>
            <div class="right">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li class="dropdown">
                        <a class="drop" href="#">SKILLS &#9662;</a>
                        <div class="dropdown-content">
                            <a href="academic.html">ACADEMICS</a>
                            <a href="my_courses.html">COURSES</a>
                        </div>
                    </li>
                    <li><a href="achievement.html">ACHIEVEMENTS</a></li> 
                    <li><a href="#">PROJECTS</a></li> 
                    <li><a href="resume.html">RESUME</a></li>
                    <!--<li><a href="#">GALLERY</a></li> -->
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </header> 
    <div class="clear"></div><br><br>
    <h1 style="color: #003a74;"><center><b>Get in Touch!!!</b></center></h1>
    <div class="contact-container">
        <div class="address">

        <h4 style="color: #004489;"></h4>
            <p style="font-size: 17px; color: #0e97ed;">
            <i class="ri-home-4-line" style="font-size: 24px; margin-right: 10px; vertical-align: middle;color:  #004489;"></i>
            <b style="vertical-align: middle;">BA-6/8, Salt Lake City,<br>Sector 1, Kolkata-700064,West Bengal</b>
            </p>
            <p style="font-size: 17px; color: #0e97ed;">
            <i class="ri-mail-line" style="font-size: 24px; margin-right: 10px; vertical-align: middle;color:  #004489;"></i>
            <b style="vertical-align: middle;">niladri.khan03@gmail.com</b>
            </p>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.6908658023253!2d88.40010939999999!3d22.5906625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0277402dff97ff%3A0x88881019bb4ed528!2ssalt%20lake%2C%20BA%206%2C%20BA%20Block%2C%20Sector%201%2C%20Bidhannagar%2C%20Kolkata%2C%20West%20Bengal%20700064!5e0!3m2!1sen!2sin!4v1692288478217!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="box form-container">
            <center><h4 style="font-size: 28px; font-weight: bold;color:  #004489;">For any Query/Suggestion</h4></center>
            <form action="contact_itementry.php" method="POST">
                <div class="clear"></div><br>
                <div class="form-field">
                    <input type="text" placeholder="Enter Your Name" id="NAME" name="NAME" required>
                </div>
                <div class="form-field">
                    <input type="email" placeholder="Enter Email Address" id="EMAIL" name="EMAIL" required>
                </div>
                <div class="form-field">
                    <input type="text" placeholder="Enter Subject" id="SUBJECT" name="SUBJECT" required>
                </div>
                <div class="form-field">
                <textarea id="MESSAGE" placeholder="Enter Your Suggestion/Query" name="MESSAGE" rows="5" required></textarea>
                </div>
                    <center>
                    <button type="submit" class="submit-button">Send Message</button>
                    </center>
            </form>
        </div>
    </div>
</body>
<footer style="background-color: rgb(37, 36, 36); font-size: 0.8rem; color: #fff; padding: 20px;">
    <div style="display: flex; justify-content: space-between; align-items: center; font-size: 16px;">
        <div>Copyright &copy; 2023 - All rights reserved | niladrikhan.com</div>
        <div><center>
            <a href="https://instagram.com/_.niladri_khan._?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank"><i class="ri-instagram-line" style="font-size: 24px; color: #fff; margin: 0 10px;"></i></a>
            <a href="https://m.facebook.com/profile.php/?id=100056565297063" target="_blank"><i class="ri-facebook-circle-line" style="font-size: 24px; color: #fff; margin: 0 10px;"></i></a>
            <a href="https://twitter.com/Jungkoo30492186?t=BmzGAXvfLE6FozQaF_43nQ&s=09" target="_blank"><i class="ri-twitter-line" style="font-size: 24px; color: #fff; margin: 0 10px;"></i></a> 
            <a href="https://www.linkedin.com/in/niladri-khan-482551218/" target="_blank"><i class="ri-linkedin-box-line" style="font-size: 24px; color: #fff; margin: 0 10px;"></i></a>
        </center></div>
        <div>Developed by Niladri Khan.</div>
    </div>
</html>
