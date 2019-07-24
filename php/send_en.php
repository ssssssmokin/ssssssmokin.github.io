<?php
$result = mail ("interclass@gmail.com", "Letter from site", " Name: $_POST[yourname] \n Email: $_POST[email] \n Tel: $_POST[tel] \n Message: $_POST[message]. \r\n");
 if ($result) { 
    echo "<script>alert(\"Your message has been sent!\");</script>"; 
    echo '<script>window.location.href = "http://interclass.test/"</script>;';
    }

    else { 
        echo "<script>alert(\"Error\");</script>";
    } 
?>
