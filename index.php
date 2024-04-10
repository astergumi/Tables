<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 11.7</title>
</head>
<body>
    <table border="1">
        <thead>
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
                    <th>0</th>
                    <th>0</th>
                    <th>
                        <?php
                        $a=0;
                        if($a === 0){
                            echo 1;
                        }else{
                            echo $a;
                        }
                        ?>
                    </th>
                    <th>
                    <?php
                        $a=0;
                        $b=0;
                        $c=($a || $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
                    </th>
                    <th>
                    <?php
                        $a=0;
                        $b=0;
                        $c=($a && $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
                    </th>
                    <th>
                    <?php
                        $a=0;
                        $b=0;
                        $c=($a xor $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
                    </th>
                </tr>
<!--Вторая строка -->
<tr>
    <th>0</th>
    <th>1</th>
    <th>
    <?php
                        $a=0;
                        if($a === 0){
                            echo 1;
                        }else{
                            echo $a;
                        }
                        ?>
    </th>
    <th>
    <?php
                        $a=0;
                        $b=1;
                        $c=($a || $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
    </th>
    <th>
    <?php
                        $a=0;
                        $b=1;
                        $c=($a && $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
    </th>
    <th>
<?php
                        $a=0;
                        $b=1;
                        $c=($a xor $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
</th>
</tr>
<!--Третья строка -->
<tr>
    <th>1</th>
    <th>0</th>
    <th>
    <?php
                        $a=1;
                        if($a === 1){
                            echo 0;
                        }else{
                            echo $a;
                        }
                        ?>
    </th>
    <th>
    <?php
                        $a=1;
                        $b=0;
                        $c=($a || $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
    </th>
    <th>
    <?php
                        $a=1;
                        $b=0;
                        $c=($a && $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
    </th>
    <th>
    <?php
                        $a=1;
                        $b=0;
                        $c=($a xor $b);
                        if($c === false){
                            echo 0;
                        }else{
                            echo $c;
                        }
                        ?>
    </th>
</tr>
            </tbody>
        </thead>
    </table>
</body>
</html>