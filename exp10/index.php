<!-- Write a program to compute, the Average and Grade of students marks? -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Program 10</title>
</head>

<body>
    <center>
        <h1>Compute, the Average and Grade of students marks.</h1>
        <form action="" method="POST">
            <label for="num1">Enter the marks of subject 1: - </label>
            <input type="text" name="num1"><br><br>
            <label for="num2">Enter the marks of subject 2: - </label>
            <input type="text" name="num2"><br><br>
            <label for="num3">Enter the marks of subject 3: - </label>
            <input type="text" name="num3"><br><br>
            <label for="num4">Enter the marks of subject 4: - </label>
            <input type="text" name="num4"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            $num4 = $_POST['num4'];

            $make_marks = 400;

            $total = $num1 + $num2 + $num3 + $num4;
            $average = $total / 4;
            echo "<br>Total marks of Four subjects = " . $total . "<br>";
            echo "Average marks of Four subjects = " . $average . "<br>";

            if ($average >= 90) {
                $grade = "A";
            } elseif ($average >= 80 && $average < 90) {
                $grade = "B";
            } elseif ($average >= 70 && $average < 80) {
                $grade = "C";
            } elseif ($average >= 60 && $average < 70) {
                $grade = "D";
            } else {
                $grade = "E";
            }

            echo "The Grades is: - " . $grade;
        }
        ?>
    </center>
</body>

</html>