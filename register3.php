<?php ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
        <head>
                <title>Registration!</title>
        </head>
        <body>
                <?php if (!$_GET["name"] or !$_GET["gender"] or $_GET["dorm"] == "") : ?>
                        You must provide your name, gender and dorm! Go <a href="dormregistration.html">back</a>

                <?php else : ?>
                     <br><h1>Confirmation for <?php echo($_GET["name"]) ?></h1><br>
                     Hi, you're sucefully registered!<br><br><br>
                     <form action="dormregistration.html">
                             <input type="submit" value="Return" />
                     </form>
                <?php endif ?>
        </body>
</html>

