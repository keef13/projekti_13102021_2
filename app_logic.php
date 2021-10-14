<?php  
 require 'rekisteroidy/Exception.php';
require 'rekisteroidy/PHPMailer.php';
require 'rekisteroidy/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

   
    // Database connection
   // include('config/db.php');
?>


<?php 

session_start();
$errors = [];
$user_id = "";
// connect to database
//$db = mysqli_connect('localhost', 'root', '', 'your_database_name');
require_once './config/db.php';



 echo $_POST['login_user'];

// LOG USER IN
if (isset($_POST['login_user'])) {
  // Get username and password from login form
  $user_id = mysqli_real_escape_string($connection, $_POST['user_id']);
  
  
 
  
  $password = mysqli_real_escape_string($connection, $_POST['password']);
  // validate form
  if (empty($user_id)) array_push($errors, "Username or Email is required");
  if (empty($password)) array_push($errors, "Password is required");

  // if no error in form, log user in
  if (count($errors) == 0) {
    $password = md5($password);
    $sql = "SELECT * FROM users WHERE username='$user_id' OR email='$user_id' AND password='$password'";
    $results = mysqli_query($connection, $sql);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $user_id;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong credentials");
    }
  }
}

/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  // ensure that the user exists on our system
  $query = "SELECT email FROM users WHERE email='$email'";
  $results = mysqli_query($connection, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(mysqli_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_reset(email, token) VALUES ('$email', '$token')";
    $results = mysqli_query($connection, $sql);
	
	// alkaa 12102021
	echo "moro";
    // Send email to user with the token in a link they can click on
    $emailFrom = "omniakurssi@email.com";
	$emailFromName = "Ohjelmointikurssi";
	$emailToName = "";
	$mail = new PHPMailer;
	$mail->isSMTP(); 
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
	$mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
	$mail->Port = 587; // TLS only
	$mail->SMTPSecure = 'tls'; // ssl is depracated
	$mail->SMTPAuth = true;
	$mail->Username = "terolaakso802@gmail.com";
	$mail->Password = "Storykeef#13!!!";
	$mail->setFrom($emailFrom, $emailFromName);
	$mail->addAddress($email, $emailToName);
	$mail->Subject = "Resetoi salasana";
	
	$msg = "Hi there, click on this <a href=\"//terol.azurewebsites.net/new_password.php?token=" . $token . "\">link</a> to reset your password on our site";
	
	
  //$msg = "Hi there, click on this <a href=\"new_password.php?token=\">link</a> to reset your password on our site";
	
    $msg = wordwrap($msg,70);
	
	
	$mail->msgHTML($msg); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
	$mail->AltBody = 'HTML messaging not supported';
	
// $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
if(!$mail->send()){
    $tulos = false;
	
	echo "virhe";
	
   // debuggeri("Mailer Error: " . $mail->ErrorInfo);
}else{
    $tulos = true;
    //debuggeri("Message sent!");
}
    header('location: pending.php?email=' . $email);
  }
    //debuggeri("Message sent!");
}
              
  

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
  $new_pass = mysqli_real_escape_string($connection, $_POST['new_pass']);
  $new_pass_c = mysqli_real_escape_string($connection, $_POST['new_pass_c']);

  // Grab to token that came from the email link
  $token = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_reset WHERE token='$token' LIMIT 1";
    $results = mysqli_query($connection, $sql);
    $email = mysqli_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE users SET password='$new_pass' WHERE email='$email'";
      $results = mysqli_query($connection, $sql);
      header('location: index.php');
    }
  }
}
?>