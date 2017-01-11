<?php

    // Site information
    $title = "Quadractic Calculator"

    // Declaring Varriables
    $a = $_GET['a'];
    $b = $_GET['b'];
    $c = $_GET['c'];

    // Doing the math
    // Quadratics
    $neg_b = $b * -1;
    $two_b = $b * $b;
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
        <style>
            header {
                width: 100%;
                height: 50px;
                line-height: 50px;
                color: rgba(0,0,0,0.8);
                background-color: #fafafa;
                font-size: 24p;
            }
        
        
        </style>
        <meta charset="utf-8" />
        <title>Quadractic Calculator</title>
    </head>
    <body>
        <header></header>
        <form method="GET" action="index.php">
            <input type="text" value="<?php $a ?>" name="a" />
            <input type="text" value="<?php $b ?>" name="b" />
            <input type="text" value="<?php $c ?>" name="c" />
            <input type="submit" name="submit" />
        </form>
    </body>
</html>
