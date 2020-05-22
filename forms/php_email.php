<?php 
if(isset($_GET['submit'])){
    print_r($_GET);
    $to = "t.aharon.25@gmail.com"; // this is your Email address
    $from = $_GET['email']; // this is the sender's Email address
    $full_name = $_GET['name'];
    $subject = $_GET['subject'];
    $message = $_GET['message'];
//    $message2 = "Here is a copy of your message " . $full_name . "\n\n" . $_GET['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
//    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>