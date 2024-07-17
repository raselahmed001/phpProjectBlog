<?php

use PHPMailer\PHPMailer\PHPMailer; 

use PHPMailer\PHPMailer\Exception;

if(isset($_POST['name'])){

    require 'PHPMailer/src/Exception.php';

    require 'PHPMailer/src/PHPMailer.php';

    require 'PHPMailer/src/SMTP.php';

    require_once('../db/config.php');

    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    //$cpassword = $_POST['cpassword'];
    $code = rand(1,1000000);
    /*
    
    username and email uniquely identify
    
    */

    $query = "SELECT * FROM user where username ='$name' or email ='$username'";
    $sql = $conn->query($query);
        
    if ($sql->num_rows > 0){
        header('location:sign-up.php?message=Username and email already used');
    }
    else{
        $query = "INSERT INTO user(username,email,password,image,code) VALUES('$name ','$username ','$password','',$code)";
   // $query = "INSERT INTO user (username, email, password, image, code) VALUES (?, ?, ?, ?, ?)";

    $spl = $conn->query($query);
    

    if ($spl==true) {

        //mail send started
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
          
            $mail->Body    =  $code; 

            $mail->send();

           // echo 'Message has been sent';

        } catch (Exception $e) { // handle error.

            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;

        }

        //mail send ended

        header('location:usercodeupdate.php');
  
    }
    else{
        header('location:sign-up.php?message=Data not inserted successfully"');
       
    }

}
    }
    
    //end

    
else{
    header('location:sign-up.php?message=Something wrong');
}

//best way to

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require_once('../db/config.php');
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// if (isset($_POST['name'])) {
//     // Retrieve and sanitize user input
//     $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
//     $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
//     $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
//     $code = rand(1, 1000000);

//     // Prepare the SQL query
//     $query = "INSERT INTO user (username, email, password, image, code) VALUES (?, ?, ?, ?, ?)";
//     $stmt = $conn->prepare($query);
//     $image = ''; // Assuming image is not being set currently
//     $stmt->bind_param('ssssi', $name, $username, $password, $image, $code);

//     if ($stmt->execute()) {
//         // Initialize PHPMailer
//         $mail = new PHPMailer(true);

//         try {
//             $mail->isSMTP();
//             $mail->Host = 'smtp.gmail.com';
//             $mail->SMTPAuth = true;
//             $mail->Username = 'your-email@gmail.com'; // Replace with your email
//             $mail->Password = 'your-email-password'; // Replace with your email password
//             $mail->SMTPSecure = 'tls';
//             $mail->Port = 587;

//             $mail->setFrom('your-email@gmail.com', 'Sender'); // Replace with your email and name
//             $mail->addAddress($username, $name); // Send to user's email

//             $mail->isHTML(true);
//             $mail->Subject = 'Email verification from PHP';
//             $mail->Body = "<p>Your verification code is: <strong>$code</strong></p>";

//             $mail->send();
//         } catch (Exception $e) {
//             error_log('Mailer Error: ' . $mail->ErrorInfo);
//             header('Location: sign-up.php?message=Email could not be sent.');
//             exit();
//         }

//         header('Location: usercodeupdate.php');
//     } else {
//         header('Location: sign-up.php?message=Data not inserted successfully');
//     }

//     $stmt->close();
// } else {
//     header('Location: sign-up.php?message=Something went wrong');
// }

// $conn->close();

?>