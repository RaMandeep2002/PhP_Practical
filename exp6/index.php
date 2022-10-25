<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of n natual number</title>
</head>

<body>
    <center>
        <h1>To calculate the Sum of n natural number 🔢</h1><br>
        <form action="" method="POST">
            <label for="num">Enter a Postive Natural number: - </label>
            <input type="text" name="number">
            <input type="submit" value="Sum" name="sum">
        </form>
        <?php
        if (isset($_POST['sum'])) {
            $num = $_POST['number'];
            $sum = 0;

            for ($i = 1; $i <= $num; $i++) {
                $sum = $sum + $i;
            }

            echo "The sum of $num is = " . $sum;
        }
        ?>
    </center>
</body>

</html>