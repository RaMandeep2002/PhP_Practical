<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime number</title>
</head>

<body>
    <center>
        <h1>Determine prime numbers within a specific range.</h1>
        <form action="" method="POST">
            <label for="num">Enter the number:- </label>
            <input type="text" name="number" placeholder="Enter a number">
            <input type="submit" value="Check" name="submit">
        </form><br><br>
        <?php
        if (isset($_POST['submit'])) {
            $number = $_POST['number'];

            for ($i = 2; $i < $number; $i++) {
                if ($number % $i == 0) {
                    echo "Number is not prime.";
                    break;
                } else {
                    echo "Number is prime.";
                    break;
                }
            }
        }
        ?>
    </center>
</body>

</html>