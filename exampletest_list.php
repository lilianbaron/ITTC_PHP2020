<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>PHP_LIST_ACTION</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
    
    <style>
    body{
       margin: 0;
       padding: 0;
       font-family: 'sans-serif';
    }
    .button{
        top: 50%;
        left:50%;

    }
    span a{
        position: absolute;
        top: 80%;
        left: 40%;
    }
    .title-form{
        text-align: center;
        margin-top: 35px;
        font-size: 40px;
    }
   
    #test{
        text-decoration: none;  
        border-radius: 10px;
        background: black;
        color: white;
        padding: 15px;
        margin: 20px ;
        font-weight: bold;
    }
    #test:hover{
        color: pink;
        background: black;
    }
    
    table{
        
        margin-top: 50px;
        margin-left: 15%;
        margin-bottom: 5%;
    
    }
 th{
       font-size: 30px;
       font-family: 'sans-serif';
       padding: 20px;
       text-align: center;
    }
    
  td{
      color: #000;
      font-size: 20px;
      text-align: center;
      font-weight: bold;
      opacity: 0.8;
      font-family: 'Sriracha', cursive;
  }
  
  tr a{
      padding-top: 20px;
      font-size: 25px;
      color: black;
      font-family: sans-serif';
  }
  tr a:hover{
      text-decoration: none;
  }
  img{
      width: 150px;
  }
  
    </style>
</head>
<body>
    <?php

$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
$stmt = $pdo->prepare('SELECT * FROM PHp_TESt');
$stmt->execute();
$list = $stmt->fetchAll();

    ?>
    <div class="title-form">APPLICATION FORM(List_Action)</div>
   
       <span><a id="test"href="exampletest.php">Create Member</a></span>
   

<table>
  <thead>
    <tr  class="text">
      <th>Name</th>
      <th>Address</th>
      <th>Birthday</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Religion</th>
      <th>Picture</th>
    </tr>
  </thead>
              <?php foreach ($list as $item) {?>
                <tr>
                    <td><a href="exampletest_view.php?id=<?=$item['ID']?>"><?=$item['Name']?></a></td>
                    <td><?=$item['Address']?></td>
                    <td><?=$item['Birthday']?></td>
                    <td><?=$item['Gender']?></td>
                    <td><?=$item['Age']?></td>
                    <td><?=$item['Religion']?></td>
                    <td> <img src="<?=$item['Picture']?>" alt=""></td>
                </tr>  
             <?php } ?>
          </tbody>
    </table>
  

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>