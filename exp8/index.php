<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Factorial Number</title>
</head>

<body>
    <center>
        <h1>Factorial Number</h1>
        <form action="" method="POST">
            <label for="num">Enter the Number: - </label>
            <input type="text" name="num" placeholder="Enter the number">
            <input type="submit" value="Submit" name="submit">
        </form><br><br>
        <?php
        if (isset($_POST['submit'])) {
            $fact = 1;
            $number = $_POST['num'];

            echo "Factorial number of $number :- <br><br>";
            for ($i = 1; $i <= $number; $i++) {
                $fact = $fact * $i;
            }
            echo $fact . "<br>";
        }
        ?>
    </center>
</body>

</html>