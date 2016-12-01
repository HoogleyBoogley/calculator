<?php

    // Declaring Varriables
    $x1 = $_GET['x1'];
    $y1 = $_GET['y1'];
    $x2 = $_GET['x2'];
    $y2 = $_GET['y2'];

    // Doing the math
    // Quadratics
    $neg_b = $b * -1;
    $two_b = $b * 2;
    $ac = $a * $c;
    $four_ac = $ac * 4;
    $sqrt = $two_b - $four_ac;
    $sqrt2 = sqrt($sqrt);
    $sub_b = $neg_b - $sqrt2;
    $add_b = $neg_b + $sqrt2;
    $two_a = $a * 2;
    $sub_div = $sub_b / $two_a;
    $add_div = $add_b / $two_a;

    // The Logic
    if ($sqrt < 0) {
        echo "No solution!";
    } else {
        $sub_convert = $sub_div * -1;
        $add_convert = $add_div * -1;

        $sub_equ = $sub_convert / $a;

        echo "{" . $sub_equ . "," . $add_convert . "}";

    };

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Quadractic Calculator</title>
    </head>
    <body>
        <form method="GET" action="index.php">
            <input type="text" value="<?php $a ?>" name="x1" />
            <input type="text" value="<?php $b ?>" name="y1" />
            <input type="text" value="<?php $c ?>" name="x2" />
            <input type="text" value="<?php $c ?>" name="y2" />
            <input type="submit" name="submit" />
        </form>
        <img src=""
    </body>
</html>
