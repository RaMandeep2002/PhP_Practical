<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 16</title>
</head>

<body>
    <center>
        <h1>Write a program accepts a string and calculates number of upper case letters
            and lower case letters available in that string.</h1>

        <form action="" method="POST">
            <label for="char">Enter the string: - </label>
            <input type="text" name="my_string">
            <input type="submit" value="check" name="submit"><br>
        </form>
        <?php
        if (isset($_POST['submit'])) {

            function Countt($str)
            {
                $upper = 0;
                $lower = 0;
                $number = 0;
                $special = 0;
                for ($i = 0; $i < strlen($str); $i++) {
                    if (
                        $str[$i] >= 'A' &&
                        $str[$i] <= 'Z'
                    )
                        $upper++;
                    else if (
                        $str[$i] >= 'a' &&
                        $str[$i] <= 'z'
                    )
                        $lower++;
                    else if (
                        $str[$i] >= '0' &&
                        $str[$i] <= '9'
                    )
                        $number++;
                    else
                        $special++;
                }
                echo "Upper case letters: ", $upper, "\n";
                echo "Lower case letters : ", $lower, "\n";
                echo "Number : ", $number, "\n";
                echo "Special characters : ", $special;
            }

            $str = $_POST['my_string'];
            Countt($str);
        }

        ?>
    </center>
</body>

</html>