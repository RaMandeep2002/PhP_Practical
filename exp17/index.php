<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 17</title>
</head>

<body>
    <center>
        <h1>Design a program to reverse a string word by word.</h1>
        <form action="" method="POST">
            <label for="string">Enter the string: - </label>
            <input type="text" name="my_string">
            <input type="submit" value="Reverse" name="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $str = $_POST['my_string'];

            function Reverse($str)
            {
                return strrev($str);
            }

            echo Reverse($str);
        }
        ?>
    </center>
</body>

</html>