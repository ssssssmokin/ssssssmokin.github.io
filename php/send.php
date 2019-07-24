$yourname = $_POST['yourname'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

$yourname = htmlspecialchars($yourname);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$message = htmlspecialchars($message);

$yourname = urldecode($yourname);
$email = urldecode($email);
$tel = urldecode($tel);
$message = urldecode($message);

$yourname = trim($yourname);
$email = trim($email);
$tel = trim($tel);
$message = trim($message);



if (mail("ssssssmokin666@gmail.com", "Letter from site", "Name:".$yourname.".  E-mail: ".$email.". "Tel:".$tel.". "Message:".$message.". \r\n"))
 { 
    echo "Надіслано"; 
} else { 
    echo "Виникла помилка"; 
}