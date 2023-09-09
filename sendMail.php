<?php
    
    if(isset($_POST['btn-send']))
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $message = $_POST['message'];
        $headers = 'From: got1ssei@gmail.com' . "/r/n";

        if(empty($firstName) || empty($lastName) || empty($email) || empty($mobile) || empty($message))
        {
            header('location:contact.php?error');
        }
        else
        {
            $to = "got1ssei@gmail.com";

            if(mail($to,$firstName,$lastName,$message,$headers))
            {
                header("location:contact.php?success");
            }
        }
    }







?>