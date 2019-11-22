<?php 
        //This program sends a reset email to user
        require_once './vendor/autoload.php';

        // Create the Transport
        $transport=(new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl')) ->setUsername("teamfleg@gmail.com") ->setPassword("fleg2019");

        // Create the Mailer using your created Transport
        $mailer=new Swift_Mailer($transport);
        function SendResetEmail($email, $token) {
    
            global $mailer;
            $body='<!DOCTYPE html>
                <html lang="en">
                    <head><meta charset="UTF-8">
                        <title>Reset Email</title>
                        <style>
                            .wrapper {
                                         padding: 20px;
                                         color: #444;
                                         font-size: 1.3em;
                            }
                                    a {
                                        background: black;
                                        text-decoration: none;
                                        padding: 8px 15px;
                                        border-radius: 5px;
                                        color: white;
                            }
                        </style>
                    </head>
                        <body>
                            <div class="wrapper">
                                <p>If you requested to reset your password kindly click on the link below and paste this token <strong>'.$token.'</strong>.
                                   If you did not request then ignore this but you may want to login and change your password as someone might be trying to steal 
                                   your information. The link expires after 48 hours!!!</p>
                                   <a href="http://cs.ashesi.edu.gh/~emmanuel_odonkor/Team_Project/compile/new_password.php">Reset Password!</a>
                            </div>
                        </body>
                </html>';
        // Create a message
        $message=(new Swift_Message('Reset Your Password')) ->setFrom("teamfleg@gmail.com") ->setTo($email) ->setBody($body, 'text/html');
        // Send the message
        try {
            $result=$mailer->send($message);
            }
        catch(Swift_TransportException $exception) {
            //to work on making this display when there is no internet
            return "Check your internet connection and retry";
            }
        if ($result > 0) {
            return true;
        }
        else {
             return false;
        }
    }