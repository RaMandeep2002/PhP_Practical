<html>

<head>
    <title> PHP Program To find the roots of the given Quadratic Equation</title>
</head>

<body>
    <center>
        <h1>PHP Program To find the roots of the given Quadratic Equation</h1>
        <form method="post">
            <table border="0">
                <tr>
                    <td> <input type="text" name="num1" value="" placeholder="Enter 1st value" /> </td>
                </tr>
                <tr>
                    <td> <input type="text" name="num2" value="" placeholder="Enter 2nd value" /> </td>
                </tr>
                <tr>
                    <td> <input type="text" name="num3" value="" placeholder="Enter 3rd value" /> </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="submit" value="Submit" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $c = $_POST['num3'];
            $precision = 4;
            $d = $b * $b - 4 * $a * $c; // Discriminant of a quadratic equation
            if ($d < 0) {
                echo " Roots are complex numbers. ";
                echo " Roots of quadratic equation are: ";
                echo -$b / (2 * $a) . " + " . number_format(sqrt(-$d) / (2 * $a), $precision) . "i ";
                echo ", " . -$b / (2 * $a) . number_format(-sqrt(-$d) / (2 * $a), $precision) . "i";
            } else if ($d == 0) {
                echo "Both roots are equal.";
                $root1 = -$b / (2 * $a);
                echo "Root of quadratic equation is: " . $root1;
                return 0;
            } else {
                echo "Roots are real numbers.";
                $root1 = (-$b + sqrt($d)) / (2 * $a);
                $root2 = (-$b - sqrt($d)) / (2 * $a);
                echo "Roots of quadratic equation are: " . $root1 . $root2;
            }
            return 0;
        }
        ?>
    </center>
</body>

</html>