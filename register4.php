<?php 

    if($_POST["name"] == "" or $_POST["dorm"] == "" or $_POST["gender"] == ""){
         header("Location: http://cs50/dormregistration2.php");
         exit;
    }

    //connect to database
    mysql_connect('localhost', 'testuser', '123');
    mysql_select_db('TESTDB');

    //scrub inputs
    $name = mysql_real_escape_string($_POST["name"]);
 
    if($_POST["captain"]){
        $captain = 1;
    } else {
        $captain = 0;
    }

    $gender = $_POST["gender"];
    $dorm = $_POST["dorm"];

    //prepare query
    $sql = "insert into registration(name, captain, gender, dorm) values
    ('$name', $captain, '$gender', '$dorm');";

    //execute
    mysql_query($sql);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
        <head>
                <title>Registration!</title>
        </head>
        <body>
                     <br><h1>Confirmation for <?php echo($_POST["name"]) ?></h1><br>
                    You're sucefully registered!<br><br><br>
                     <form action="dormregistration2.php">
                             <input type="submit" value="Return" />
                     </form>
        </body>
</html>

