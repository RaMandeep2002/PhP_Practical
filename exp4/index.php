<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a program to determine whether a triangle is isosceles or not?</title>
</head>

<body>
    <center>
        <h1> To determine whether a Triangle is isosceles or not?</h1>

        <form action="" method="POST">
            <label for="num1">Enter the first side: - </label>
            <input type="text" name="num1" placeholder="Side One"><br><br>
            <label for="num2">Enter the second side: - </label>
            <input type="text" name="num2" placeholder="Side Two"><br><br>
            <label for="num3">Enter the Thrid side: - </label>
            <input type="text" name="num3" placeholder="Side Three"><br><br>
            <input type="submit" value="Check" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['num3'];


            if (($a == $b) || ($b == $c) || ($c == $a)) {
                echo "Triangle is Isosceles triangle";
            } else {
                echo "Triangle is not Isosceles triangle";
            }
        }
        ?>
    </center>
</body>

</html>