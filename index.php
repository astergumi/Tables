<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 11.7</title>
</head>

<body>
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>A</th>
                <th>B</th>
                <th>!A</th>
                <th>A || B</th>
                <th>A && B</th>
                <th>A xor B</th>
            </tr>
        </thead>

        <tbody>
            <!--Первая строка -->
            <tr>
                <th><?php
                    $a = 0;
                    echo $a;
                    ?></th>
                <th><?php
                    $b = 0;
                    echo $b;
                    ?></th>
                <th>
                    <?php
                    $a = 0;
                    if ($a === 0) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 0;
                    $b = 0;
                    $c = ($a || $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 0;
                    $b = 0;
                    $c = ($a && $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 0;
                    $b = 0;
                    $c = ($a xor $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
            </tr>
            <!--Вторая строка -->
            <tr>
                <th><?php
                    $a = 0;
                    echo $a;
                    ?></th>
                <th><?php
                    $b = 1;
                    echo $b;
                    ?></th>
                <th>
                    <?php
                    $a = 0;
                    if ($a === 0) {
                        echo 1;
                    } else {
                        echo 0;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 0;
                    $b = 1;
                    $c = ($a || $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 0;
                    $b = 1;
                    $c = ($a && $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 0;
                    $b = 1;
                    $c = ($a xor $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
            </tr>
            <!--Третья строка -->
            <tr>
                <th><?php
                    $a = 1;
                    echo $a;
                    ?></th>
                <th><?php
                    $b = 0;
                    echo $b;
                    ?></th>
                <th>
                    <?php
                    $a = 1;
                    if ($a === 1) {
                        echo 0;
                    } else {
                        echo 1;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 1;
                    $b = 0;
                    $c = ($a || $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 1;
                    $b = 0;
                    $c = ($a && $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 1;
                    $b = 0;
                    $c = ($a xor $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
            </tr>
            <!--Четвертая строка -->
            <tr>
                <th><?php
                    $a = 1;
                    echo $a;
                    ?></th>
                <th><?php
                    $b = 1;
                    echo $b;
                    ?></th>
                <th>
                    <?php
                    $a = 1;
                    if ($a === 1) {
                        echo 0;
                    } else {
                        echo 1;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 1;
                    $b = 1;
                    $c = ($a || $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 1;
                    $b = 1;
                    $c = ($a && $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $a = 1;
                    $b = 1;
                    $c = ($a xor $b);
                    if ($c === false) {
                        echo 0;
                    } else {
                        echo $c;
                    }
                    ?>
                </th>
            </tr>
        </tbody>
    </table>
 <!-- «Гибкое сравнение в PHP» -->
    <table border="1" style="width: 100%">
        <caption>
            «Гибкое сравнение в PHP»
        </caption>
        <thead>
            <tr>
                <th style="background-color:pink">==</th>
                <th style="background-color:pink">true</th>
                <th style="background-color:pink">false</th>
                <th style="background-color:pink">1</th>
                <th style="background-color:pink">0</th>
                <th style="background-color:pink">-1</th>
                <th style="background-color:pink">"1"</th>
                <th style="background-color:pink">null</th>
                <th style="background-color:pink">"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th style="background-color:pink">true</th>
                <th>
                    <?php
                    $y = true;
                    $x = true;
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = true;
                    $x = false;
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = true;
                    $x = 1;
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = true;
                    $x = 0;
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = -1;
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = "1";
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = null;
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = "php";
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:pink">false</th>
                <th>
                    <?php
                    $y = false;
                    $x = true;
                    if ($y == $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = false;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = 1;
                    if ($y == $x) {
                        print "$y";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = 0;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = -1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = "1";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = null;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = "php";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:pink">1</th>
                <th>
                    <?php
                    $y = 1;
                    $x = true;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = false;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = 1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = 0;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = -1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = "1";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = null;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = "php";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:pink">0</th>
                <th>
                    <?php
                    $y = 0;
                    $x = true;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = false;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = 1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = 0;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = -1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = "1";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = null;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = "php";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:pink">-1</th>
                <th>
                    <?php
                    $y = -1;
                    $x = true;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = false;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = 1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = 0;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = -1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = "1";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = null;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = "php";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:pink">"1"</th>
                <th>
                    <?php
                    $y = "1";
                    $x = true;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = false;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = 1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = 0;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = -1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = "1";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = null;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = "php";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:pink">null</th>
                <th>
                    <?php
                    $y = null;
                    $x = true;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = false;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = 1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = 0;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = -1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = "1";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = null;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = "php";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:pink">"php"</th>
                <th>
                    <?php
                    $y = "php";
                    $x = true;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = false;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = 1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = 0;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = -1;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = "1";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = null;
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = "php";
                    if ($y == $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
        </tbody>
    </table>
<!-- «Жёсткое сравнение в PHP» -->
    <table border="1" style="width: 100%">
        <caption>
            «Жёсткое сравнение в PHP»
        </caption>
        <thead>
            <tr>
                <th style="background-color:yellow">===</th>
                <th style="background-color:yellow">true</th>
                <th style="background-color:yellow">false</th>
                <th style="background-color:yellow">1</th>
                <th style="background-color:yellow">0</th>
                <th style="background-color:yellow">-1</th>
                <th style="background-color:yellow">"1"</th>
                <th style="background-color:yellow">null</th>
                <th style="background-color:yellow">"php"</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th style="background-color:yellow">true</th>
                <th>
                    <?php
                    $y = true;
                    $x = true;
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = true;
                    $x = false;
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = true;
                    $x = 1;
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = true;
                    $x = 0;
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = -1;
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = "1";
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = null;
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>

                <th>
                    <?php
                    $y = true;
                    $x = "php";
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:yellow">false</th>
                <th>
                    <?php
                    $y = false;
                    $x = true;
                    if ($y === $x) {
                        print 'true';
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = false;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = 1;
                    if ($y === $x) {
                        print "$y";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = 0;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = -1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = "1";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = null;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = false;
                    $x = "php";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:yellow">1</th>
                <th>
                    <?php
                    $y = 1;
                    $x = true;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = false;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = 1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = 0;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = -1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = "1";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = null;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 1;
                    $x = "php";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:yellow">0</th>
                <th>
                    <?php
                    $y = 0;
                    $x = true;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = false;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = 1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = 0;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = -1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = "1";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = null;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = 0;
                    $x = "php";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:yellow">-1</th>
                <th>
                    <?php
                    $y = -1;
                    $x = true;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = false;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = 1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = 0;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = -1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = "1";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = null;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = -1;
                    $x = "php";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:yellow">"1"</th>
                <th>
                    <?php
                    $y = "1";
                    $x = true;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = false;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = 1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = 0;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = -1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = "1";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = null;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "1";
                    $x = "php";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:yellow">null</th>
                <th>
                    <?php
                    $y = null;
                    $x = true;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = false;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = 1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = 0;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = -1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = "1";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = null;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = null;
                    $x = "php";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
            <tr>
                <th style="background-color:yellow">"php"</th>
                <th>
                    <?php
                    $y = "php";
                    $x = true;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = false;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = 1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = 0;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = -1;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = "1";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = null;
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
                <th>
                    <?php
                    $y = "php";
                    $x = "php";
                    if ($y === $x) {
                        print "true";
                    } else {
                        echo 'false';
                    }
                    ?>
                </th>
            </tr>
        </tbody>
    </table>
</body>

</html>