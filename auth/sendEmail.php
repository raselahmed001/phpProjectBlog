<?php

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

   
 

        require 'PHPMailer/src/Exception.php';

        require 'PHPMailer/src/PHPMailer.php';

        require 'PHPMailer/src/SMTP.php';

        // create object of PHPMailer class with boolean parameter which sets/unsets exception.

        $mail = new PHPMailer(true);                              

        try {

            $mail->isSMTP(); // using SMTP protocol                                     

            $mail->Host = 'ssl://smtp.gmail.com'; // SMTP host as gmail 

            $mail->SMTPAuth = true;  // enable smtp authentication                             

            $mail->Username = 'jannat.mamurjor@gmail.com';  // sender gmail host              

            $mail->Password = 'ihztsijwheggbfmy'; // sender gmail host password   
            


            $mail->SMTPSecure = 'tls';  // for encrypted connection                           

            $mail->Port = 465;   // port for SMTP     

            $mail->isHTML(true); 

            $mail->setFrom('rahmed182001@bscse.uiu.ac.bd', "Sender"); // sender's email and name

            $mail->addAddress("raselahmed182001@gmail.com", "RASEL");  // receiver's email and name

            $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

            $mail->Subject = 'Email verification From Php';
          
              $mail->Body    =  "Love Php"; 

            $mail->send();

            echo 'Message has been sent';

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

  



?>