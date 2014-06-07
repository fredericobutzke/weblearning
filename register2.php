<?php
        /*
                Comments
        */

        //validate submission(sanity check)
        if ($_GET["name"] and $_GET["gender"] and $_GET["dorm"] != ""){
                $to = "butzkefrederico@gmail.com";
                $subject = "Registration";
                $body = "This person just registered:\n\n" .
                        "Name: " . $_GET["name"] . "\n" .
                        "Gender: " . $_GET["gender"] . "\n" .
                        "Dorm: " . $_GET["dorm"] ;
                $headers = "From: butzkefrederico@gmail.com\r\n";
                mail($to, $subject, $body, $headers);
        }
        else{
                header("Location: http://cs50/dormregistration.html");
                exit();
        }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
        <head>
                <title>Registration!</title>
        </head>
        <body>
                <br><h1>Confirmation</h1><br>
                <?php echo($_GET["name"]) ?> you're sucefully registered!<br><br><br>
                <form action="dormregistration.html">
                        <input type="submit" value="Return" />
                </form>
        </body>
</html>

