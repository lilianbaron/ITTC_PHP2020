<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php array 02</title>
</head>
<body>
    <h1>array</h1>

        <?php

            $numbers = [];

            $numbers[1] = "one";
            $numbers[2] = "two";
            $numbers[3] = "three";
            $numbers[4] = "four";
            $numbers[5] = "five";
            $numbers[6] = "six";

            echo $numbers[3] . '<br>';
            echo $numbers[5] . '<br>';
            
            $var1 = 3;
            $var2 = 5;

            echo $numbers[$var1] . '<br>';
            echo $numbers[$var2] . '<br><hr>';



            $phil = [
                1 => 'one',
                2 => 'two',
                3 => 'three',
                4 => 'four',
                5 => 'five',
                6 => 'six'
            ];

           $roll = rand(1, 6);
           echo '<p> Random number is : ' . $phil[$roll] . '</p>';

            if($roll == 6){
                echo '<p>You win!</p><hr>';
            }else{
                echo '<p>You lose!</p> <hr>';
            }

            $birthday['Lilian'] = '01-jan-1995';
            $birthday['John'] = '27-Sept-1997';
            $birthday['anna'] = '14-april-2005';
            echo 'John birthday : ' . $birthday['John'] . '<br><hr>';

            $birthday = [

                'Lilian' => '01-20-1995',
                'John'   => '27-Sept-1997',
                'anna'   => '14-april-2005'
            ];
            echo 'anna birthday : ' . $birthday['anna'] . '<br><hr>';

        ?>




</body>
</html>