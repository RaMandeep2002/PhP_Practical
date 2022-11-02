<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Click here ot calculate the area of Rectangle, triangle, Tripozoid and Parallelogram.</title>
</head>

<body>
    <center>
        <h1>Here you can Find the area of Rectangle, Triangle, Trapezoid and Parallelogram.</h1>
        <form action="#" method="POST">
            <select name="area">
                <option value="rectangle">Rectangle</option>
                <option value="triangle">Triangle</option>
                <option value="trapezoid">Trapezoid</option>
                <option value="parallelogram">Parallelogram</option>
            </select><br><br>
            <label for="num1">Enter the first number: - </label>
            <input type="text" name="num1" placeholder="Enter the number 1"><br><br>
            <label for="num2">Enter the second number: - </label>
            <input type="text" name="num2" placeholder="Enter the number 2"><br><br>
            <input type="submit" value="submit" name="submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $pi = 3.14;
            $base = $_POST['num1'];
            $height = $_POST['num2'];
            $width = $_POST['num2'];
            $shapes = $_POST['area'];

            switch ($shapes) {
                case 'rectangle':
                    $area_of_reatangle = (int)$height * (int)$width;
                    echo "Your lenght is " . (int)$height . " and width is " . (int)$widht;
                    echo "The area of rectangle is: - " . $area_of_reatangle;
                    break;
                case 'triangle':
                    $area_of_triangle = $base * $height / 2;
                    echo "The area of triangle is:- " . $area_of_triangle;
                    break;
                case 'trapezoid':
                    $area_of_trapezoid = ($base + $height) * $height / 2;
                    echo "The area of trapezoid is: - " . $area_of_trapezoid;
                    break;
                case 'parallelogram':
                    $area_of_parallelogram = $base * $height;
                    echo "The area of parallelogram is: - " . $area_of_parallelogram;
                    break;
                default:
                    echo "Invalid input!!";
                    break;
            }
        }
        ?>
    </center>
</body>

</html>