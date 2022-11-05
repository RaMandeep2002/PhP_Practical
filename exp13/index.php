<!DOCTYPE html>
<html lang="en">

<head>

    <title>Check String in Palidrome or not?</title>
</head>

<body>
    <center>
        <h1>Determine whether a string is palindrome or not? </h1>
        <form action="" method="POST">
            <label for="string">Enter a string: - </label>
            <input type="text" name="string" placeholder="Enter a string">
            <input type="submit" value="Check" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $string = $_POST['string'];

            function palindrome($string)
            {
                $revString = strrev($string);

                if ($revString == $string) {
                    echo $string . " is a Palindrome.\n";
                } else {
                    echo $string . " is not a Palindrome.\n";
                }
            }
            palindrome($string);
        }
        ?>
    </center>
</body>

</html>