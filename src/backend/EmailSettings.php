<?php

require_once('../vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

define("HOST", "");
define("PORT", );
define("USER", "");
define("PASS", "");


function SendMessage(string $name, string $last_name, string $email, string $message){

    $html = ReturnHTMLBody($name, $last_name, $email, $message);
  
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = HOST;  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = USER;                 // SMTP username
        $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = PORT;                                    // TCP port to connect to
  
        //Recipients
        $mail->setFrom($email, $name); //
        $mail->addAddress('caldeiran391@gmail.com', $subject);     // Add a recipient
  
        //Content
        $mail->isHTML(true);// Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $html;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
  
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'ERROR: ', $mail->ErrorInfo;
        return false;
    }
  }


  function ReturnHTMLBody(string $name, string $last_name, string $email, string $message){

    $dateTime = date("Y/m/d H:i:s");
    $ipAddress = $_SERVER["REMOTE_ADDR"];
    $browser = $_SERVER['HTTP_USER_AGENT'];
  
    $html =  "<div style='padding: 5px;'>".
                "<h1 style='text-align: center; color: #212121; font-weight: 300'>Mail send by my website</h1>".
                "<div style='border:1px solid #BDBDBD;'></div>".
                "<p><span style='font-weight: bold;'>Full name: </span> {$name}</p>".
                "<p><span style='font-weight: bold;'>Email: </span> {$last_name}</p>".
                "<p><span style='font-weight: bold;'>Subject: </span> {$email}</p>".
                "<p><span style='font-weight: bold;'>Date time: </span> {$dateTime}</p>".
                "<p><span style='font-weight: bold;'>IP Address: </span> {$ipAddress}</p>".
                "<p><span style='font-weight: bold;'>Browser: </span> {$browser}</p>".
                "<p><span style='font-weight: bold;'>Message: </span> {$message}</p>".
            "</div>";
            
    return $html;
    
  }

?>