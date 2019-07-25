<?php
$result = mail ("interclasskhm@gmail.com", "Letter from site", " Name: $_POST[yourname] \n Email: $_POST[email] \n Tel: $_POST[tel] \n Message: $_POST[message]. \r\n");
 if ($result) { 
    echo "<script>alert(\"Ваше повідомлення надіслано!\");</script>"; 
    echo '<script>window.location.href = "http://interclass.net.ua/"</script>;';
    }

    else { 
        echo "<script>alert(\"Error\");</script>";
    } 
?>
