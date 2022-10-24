<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program to calculate Arithmetic operations</title>
</head>

<body>
    <center>
        <h1>PHP Program to calculate Arithmetic operations</h1>
        <form method="POST">
            <table border="0">
                <tr>
                    <td>
                        <label for="num1">Enter the First number: - </label>
                        <input type="text" name="num1" value="" placeholder="Enter 1st number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="num2">Enter the second number: - </label>
                        <input type="text" name="num2" value="" placeholder="Enter 2nd number">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="oprator">Enter the operator (+, -, *, /, **): - </label>
                        <input type="text" name="option" value="" placeholder="Enter the oprator">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Calculate" />
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $a = $_POST['num1'];
            $b = $_POST['num2'];
            $ch = $_POST['option'];

            switch ($ch) {
                case '+':
                    $r = $a + $b;
                    echo "Addition = " . $r;
                    break;
                case '-':
                    $r = $a - $b;
                    echo "Subtraction = " . $r;
                    break;

                case '*':
                    $r = $a * $b;
                    echo "Multiplication = " . $r;
                    break;
                case '/':
                    $r = $a / $b;
                    echo "Division = " . $r;
                    break;
                case '**':
                    $r = $a ** $b;
                    echo "Exponents = " . $r;
                    break;

                default:
                    echo "Invalid option!!";
                    break;
            }
        }
        ?>
    </center>
</body>

</html>