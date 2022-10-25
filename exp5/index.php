<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
</head>

<body>
    <center>
        <h1>Print the Multiplication Table</h1>

        <form action="" method="POST">
            <label for="num">Enter the any number: - </label>
            <input type="text" name="number">
            <input type="submit" value="Get" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $num = $_POST['number'];

            for ($i = 1; $i <= 10; $i++) {
                echo "<p style='text-align: center; color:red;'>$num" . " X " . "$i" . " = " . $num * $i . "</p>";
            }
        }
        ?>
    </center>
</body>

</html>