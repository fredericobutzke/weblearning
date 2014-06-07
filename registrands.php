<?php 

    //connect to database
    mysql_connect('localhost', 'testuser', '123');
    mysql_select_db('TESTDB');

    //prepare query
    $sql = "select * from registration";

    //execute
    $result = mysql_query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
        <head>
                <title>Registrands!</title>
        </head>
        <body>
            <?php
                //iterate over result
                while ($row = mysql_fetch_assoc($result)) {
                    print($row["name"]);
                    print("<br>");
                }
            ?>
        </body>
</html>

