<?php
  $ID = isset($_POST['ID']) ? $_POST['ID'] : '';
  session_start();
  include('conn.inc');
  $_SESSION['record_found'] = 1;
  $ID=$_SESSION['ID'];

  $NAME        = $_POST['NAME'];
  $EMAIL    = $_POST['EMAIL'];
  $SUBJECT     = $_POST['SUBJECT'];
  $MESSAGE    = $_POST['MESSAGE'];
    

    $sqlQry = "INSERT INTO CONTACT(NAME,EMAIL,SUBJECT,MESSAGE) VALUES(
            '" .$NAME. "',
            '" .$EMAIL. "',
            '" .$SUBJECT."',
            '" .$MESSAGE."')";
    $_SESSION['message_text'] = "I'll contact you soon.";
    
    if ($conn->query($sqlQry) === TRUE) {
        $_SESSION['message_type'] = 0; // success
        $_SESSION['redirect_page'] = "";
    } else {
        $_SESSION['message_text'] = $conn->error;
        $_SESSION['message_type'] = 1; // error
        $_SESSION['redirect_page'] = "#";
    }
    header('Location: message.php');
?>
