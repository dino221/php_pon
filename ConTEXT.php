<?php

if (isset($_POST['subject'], $_POST['']))

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 TRANSITIONAL//EN">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Test - SlothScript Tutorials</title>
</head>
    <body>
        <form method = "post" action = "">
            <label for = "subject">Subject: </label>
                <input type = "text" id = "subject" name ="subject" /><br />
            <label for = "sender">Your eMail: </label>
                <input type = "text" id = "sender" name = "semder" /><br />
            <label for = "reciever">Recievers eMail</label>
                <input type =  "text" id = "reciever" name = "reciever" /> <br />
            <label for = "body">Message: </label>
                <textarea id = "body" name = "body" cols = "100" rows = "20"></textarea><br />
                <input type = "submit" value = "Send eMail!" />
        </form>
    
    </body>
</html>

