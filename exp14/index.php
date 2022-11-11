<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 14</title>
</head>

<body>
    <center>
        <h1>PHP program to Sort a String in Alphabetical Order.</h1>
        <form action="" method="POST">
            <label for="num1">Enter a String: - </label>
            <input type="text" name="myString">
            <input type="submit" value="Sort" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {

            $myString = $_POST['myString'];

            $str_arr = str_split($myString);

            sort($str_arr);

            echo "The sorting string is: - " . implode($str_arr);
        }
        ?>
    </center>
</body>

</html>