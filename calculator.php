<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple calculator </title>
</head>

<body>

    <?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op  = $_POST['op'];

    $res = "";

    if (is_numeric($n1) && is_numeric($n2)) {
        switch ($op) {
            case "Addition":
                $res = $n1 + $n2;
                break;
            case "Subtraction":
                $res = $n1 - $n2;
                break;
            case "Multiplication":
                $res = $n1 * $n2;
                break;
            case "Division":
                $res = $n1 / $n2;
                break;
        }
    }
    ?>


    <form action="" method="POST">
        <div>
            <input type="number" name="n1" id="n1" placeholder="Enter first number" value="<?php echo $n1; ?>" />
        </div>
        <div>
            <input type="number" name="n2" id="n2" placeholder="Enter second number" value="<?php echo $n2; ?>" />
        </div>

        <p>Result: <input type="number" name="result" value="<?php echo $res; ?>"></p>

        <input type="submit" value="Addition" name="op" />
        <input type="submit" value="Subtraction" name="op" />
        <input type="submit" value="Division" name="op" />
        <input type="submit" value="Multiplication" name="op" />
    </form>



</body>

</html>