<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci series</title>
</head>

<body>
    <center>
        <h1>Fibonacci series</h1>

        <form action="" method="POST">
            <label for="num">Enter the number: - </label>
            <input type="text" name="number">
            <input type="submit" value="Find" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $num = $_POST['number'];

            function Fibonacci($num)
            {

                $num1 = 0;
                $num2 = 1;

                $counter = 0;
                while ($counter < $num) {
                    echo ' ' . $num1;
                    $num3 = $num2 + $num1;
                    $num1 = $num2;
                    $num2 = $num3;
                    $counter = $counter + 1;
                }
            }

            // Driver Code
            Fibonacci($num);
        }
        ?>
    </center>
</body>

</html>