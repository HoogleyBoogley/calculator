<?php

$x1 = $_GET[x1];
$y1 = $_GET[y1];
$x2 = $_GET[x2];
$y2 = $_GET[y2];


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
            <input type="text" value="<?php $x1 ?>" name="x1" />
            <input type="text" value="<?php $y1 ?>" name="y1" />
            <input type="text" value="<?php $x2 ?>" name="x2" />
            <input type="text" value="<?php $y2 ?>" name="y2" />
            <input type="submit" name="submit" />
        </form>
    </body>
</html>
