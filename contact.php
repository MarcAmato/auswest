<?php
    // CODE ADAPTED FROM: https://www.youtube.com/watch?v=Ge_IZlC4N4o

    // USER FILLS OUT THESE FIELDS
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'Auswest Concreting Site';
    $email_subject = 'New Message From Auswest Concreting Contact';
    // THIS IS WHERE THE USER INFO COMES IN
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    // WHERE WE WANT IT TO GO
    $to = "marc.amato@hotmail.com";

    // WHERE TO PUT THIS STUFF
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers); // NO SPACING BETWEEN COMMA'S!

    header("location: index.html");
?>
