<?php 
session_start();

$message_text = $_SESSION['message_text'];
$message_type = $_SESSION['message_type'];  
$redirect_page = $_SESSION['redirect_page']; 
?>
<script>
function close_tab() {
    window.open("index.html", "_self");
}
</script>

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
        <div class="left"><img src="images/logo.jpeg" style="max-width: 18%; height: auto;"></div>
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
                    <li><a href="projects.html">PROJECTS</a></li> 
                    <li><a href="resume.html">RESUME</a></li>
            <!--        <li><a href="gallery.html">GALLERY</a></li> -->
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="clear"></div><br><br>
    <center><h4 style="font-size: 34px; font-weight: bold;color:#175fab;">Thanks for sending your query/suggestion!</h4></center>
<div class="container"> 
    <br><br><br><br><br><br>
<center>
            <h2> <?php echo '<span style="color:#175fab;">' . $message_text . '</span>'?> </h2>
</center>    
<div class="clear"></div><br><br>
                <center>
                     <button class="submit-button" onclick="close_tab();">Close</button>
                </center>
                <div class="clear"></div><br><br><br><br><br><br><br>
</div>

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
</footer>    
</html>