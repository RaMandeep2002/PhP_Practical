<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of Square and circle</title>
</head>

<body>
    <center>
        <h1>here you can Find the area of square and circle</h1>
        <form action="" method="POST">
            <select name="area" name="area">
                <option value="square">Square</option>
                <option value="circle">Circle</option>
            </select><br>
            <label for="num1">Enter the number: - </label>
            <input type="text" name="num1">
            <input type="submit" name="submit" value="Calculate"><br>
        </form>
    </center>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $choice = $_POST['area'];

        switch ($choice) {

            case 'square':
                $area_of_square = $num1 * $num1;
                echo "<center>The area of Square is " . $area_of_square . "</center>";
                break;
            case 'circle':
                $area_of_circle = 3.14 * $num1 * $num1;
                echo "<center>The area of circle is " . $area_of_circle . "</center>";
        }
    }
    ?>
</body>

</html>