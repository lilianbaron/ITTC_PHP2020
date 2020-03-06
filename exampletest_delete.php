<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       
       body{
           margin: 0;
           padding: 0;
           background: #4B0082;
           font-family: sans-serif;
       }
       a{
           position: absolute;
           top: 50%;
           left: 50%;
           text-transform: uppercase; 
           transform: translate(-50%, -50%);
           font-size: 45px;
           color: #000000;
           padding: 30px 60px;
           letter-spacing: 2px;
           text-decoration: none;
           box-shadow: 0 20px 50px rgba(0,0,0,.5);
       }
       a:before{
           content: '';
           position: absolute;
           top: 2px;
           left: 2px;
           bottom: 2px;
           width: 50%;
           background: rgba(255,255,255,0.05);
       }
       a span:nth-child(1){
           position: absolute;
           top: 0;
           left: 0;
           width: 100%;
           height: 2px;
           background: linear-gradient(to right, #0c002b, #1779ff);
           animation: animate1 linear infinite;
       }
       @keyframes animate1{
           0%{
               
           }
       }
       a span:nth-child(2){
           position: absolute;
           top: 0;
           right: 0;
           width: 2px;
           height: 100%;
           background: linear-gradient(to bottom, #0c002b, #1779ff);
       }
       a span:nth-child(3){
           position: absolute;
           bottom: 0;
           left: 0;
           width: 100%;
           height: 2px;
           background: linear-gradient(to left, #0c002b, #1779ff);
       }
       a span:nth-child(4){
           position: absolute;
           top: 0;
           left: 0;
           width: 2px;
           height: 100%;
           background: linear-gradient(to top, #0c002b, #1779ff);
       }
       
       
 
 
 
 
 
 
     </style>
    
       
</head>
<body>
    <?php
    $id = $_POST['ID'];

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
    $stmt = $pdo->prepare('DELETE  FROM PHp_TESt WHERE id = ?');
    $stmt->execute([$id]);
    ?>
    <a href="exampletest_list.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>

        Go To List
    
    </a>

    
</body>
</html>