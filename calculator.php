<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A basic calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <input type="submit">
    </form>

    <?php
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    echo $n1+$n2;
    ?>

</body>
</html>