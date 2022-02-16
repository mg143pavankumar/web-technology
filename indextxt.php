<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // getting value from text field
    echo $_REQUEST["username"] . "</br>";

    // getting value from radio button 
    echo "gender: " . $_REQUEST['gender'];

    //getting value from list
    foreach ($_REQUEST["sport"] as $sport) {
        echo $sport;
    }

    ?>
</body>

</html>