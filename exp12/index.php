<center>
    <h1>Count total number of vowels in a word “Develop & Empower Individuals”.</h2>

        <?php
        $string = "Develop & Empower Individuals";
        $vowels = array('a', 'e', 'i', 'o', 'u');
        $len = strlen($string);
        $num = 0;
        for ($i = 0; $i < $len; $i++) {
            if (in_array($string[$i], $vowels)) {
                $num++;
            }
            // echo "$num";
        }

        echo "Number of vowels : <span style='color:green; font-weight:bold;'>" . $num . "</span>";
        ?>
</center>