<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 15</title>
</head>

<body>
    <center>
        <h1>Check whether a number is in a given range using functions.</h1>
        <form action="" method="POST">
            <input type="text" name="num1">
            <input type="text" name="num2">
            <input type="text" name="num3">
            <input type="submit" value="check" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $val_1 = $_POST['num1'];
            $val_2 = $_POST['num2'];
            $val_3 = $_POST['num3'];
            function contains_in_sequence($val_1, $val_2, $val_3)
            {
                if ($val_1 == $val_2)
                    return true;
                if (($val_2 - $val_1) * $val_3 > 0 &&
                    ($val_2 - $val_1) % $val_3 == 0
                )
                    return true;
                return false;
            }
            print_r("Is the number present in the sequence? ");
            if (contains_in_sequence($val_1, $val_2, $val_3))
                echo "Yes, it is present in the sequence";
            else
                echo "No, it is not present in the sequence";
        }
        ?>
    </center>
</body>

</html>