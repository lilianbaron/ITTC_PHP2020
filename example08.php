<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php while</title>
</head>
<body>
    <?php
        

        //while(condition){
        //    
        // }

            // $count = 1;
           //  while($count <= 10){
          //  echo $count . ' ';
         // ++$count;
        // }

        $roll = 0;
        while ($roll != 6){
            $roll = rand(1, 6);
            echo '<p>Random Number : ' . $roll . '</p>';

            if($roll == 6){
                echo '<p>Win</p>';
             }else {
                 echo '<p>lose</p>';
             }
        }

    ?>
</body>
</html>