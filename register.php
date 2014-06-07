<?php
        /*
                Comments
        */

        //validate submission(sanity check)
        if (!$_GET["name"] or !$_GET["gender"] or $_GET["dorm"] == ""){
                header("Location: http://cs50/dormregistration.html");
                exit();
        }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
        <head>
                <title>Registration</title>
        </head>
        <body>
                <br><h1>Confirmation!</h1><br>
                <?php echo($_GET["name"]) ?> you're sucefully registered!<br><br><br>
                <form action="dormregistration.html">
                        <input type="submit" value="Return" />
                </form>
        </body>
</html>
