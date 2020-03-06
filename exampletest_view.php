<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_VIEW</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <style>
     body,html{
         width: 100%;
         height: 100%;
     }
     body{
         margin: 0;
         padding: 0;
         background: #9b59b6;
     }
     .row{
         width: 100%;
         height: 100%;
         z-index: 0;
         overflow: hidden;
         top: 0;
         left: 0;
     }
     .bubbles{
         position: absolute;
         background: #f1f1f1;
         border-radius: 50%;
         opacity: 0.5;
         animation: flying 10s infinite ease-in;
     }
     .bubbles:nth-child(1){
         width: 40px;
         height:40px;
         left:20%;
         animation-duration:8s;
     }
     .bubbles:nth-child(2){
         width: 15px;
         height:15px;
         left:10%;
         animation-duration:5s;
         animation-delay:1s;
     }
     .bubbles:nth-child(3){
         width: 50px;
         height: 50x;
         left: 35%;
         animation-duration: 7s;
         animation-delay: 0s;
     }
     .bubbles:nth-child(4){
         width: 80px;
         height:80px;
         left:50%;
         animation-duration: 10s;
         animation-delay: 0s;
     }
     .bubbles:nth-child(5){
         width: 35px;
         height: 35px;
         left: 55%;
         animation-duration: 6s;
         animation-delay: 0s;
     }
     .bubbles:nth-child(6){
         width:  40px;
         height: 40px; 
         left: 20%;
         animation-duration: 9s;
         animation-delay: 0s;
     }
     .bubbles:nth-child(7){
         width: 40px;
         height: 40px;
         left: 70%;
         animation-duration: 10s;
         animation-delay: 0s;
     }
     .bubbles:nth-child(8){
         width: 50px;
         height: 50px;
         left: 95%;
         animation-duration: 8s;
         animation-delay: 0s;
     }
     .bubbles:nth-child(9){
         width: 60px;
         height:60px;
         left: 48%;
         animation-duration: 6s;
         animation-delay: 0s;
     }
     .bubbles:nth-child(10){
         width: 50px;
         height: 50px;
         left: 70%;
         animation-duration: 9s;
         animation-delay: 0s;
     }

     .col{
         color: #000;
         font-weight: bold;
         font-family: 'Lobster', cursive;
         margin-left: 5%;
         font-size: 25px;
         margin-right: 5%;
     }
    .button{
        background: linear-gradient(90deg, #be2edd, #5f27cd);
        padding: 10px 45px;
        position: relative;
        left: 50%;
        margin-top: 10%;
        border-radius: 25px;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        cursor: pointer;
        transform: translate(-50%, -50%);
        letter-spacing: 3px;
        text-transform: uppercase;
       
    }
    .button:hover{
        background: #000;
    }
    .button::before{
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #000;
        border-radius: 25px;
        z-index: -1;
        transition: transform 0.5s;
        transform-origin: 0 0;
        transition-timing-origin: cubic-bezier(0.5,1.6,0.4,0.7);
    }
    #button {
        background: linear-gradient(90deg, #be2edd, #5f27cd);
        padding: 10px 45px;
        position: relative;
        left: 45%;
        margin-top: 10%;
        border-radius: 25px;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        cursor: pointer;
        transform: translate(-50%, -50%);
        float: left;
        letter-spacing: 3px;
        text-transform: uppercase;
        text-decoration: none;
    }
     #button:hover{
        background: #000;
        text-decoration: none;
        color: #fff;
    }
    #button::before{
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: #000;
        border-radius: 25px;
        z-index: -1;
        transition: transform 0.5s;
        transform-origin: 0 0;
        transition-timing-origin: cubic-bezier(0.5,1.6,0.4,0.7);
    }
    .button::before{
        transform: scaleX(0);
    }
    #button::before{
        transform: scaleY(0);
    }.button:hover::before{
        transform: scaleX(1);
    }
    #button:hover::before{
        transform: scaleY(1);
    }
    
    @keyframes flying {
       0%{
           bottom: -100px;
           transform: translateX(0);
       } 
       50%{
           transform: translateX(100px);
    }
    100%{
        bottom: 1080px;
        transform: translateX(-200px);
    }
    }
     
    </style>
</head>
<body>

    
      
    <?php
        $Name = $_GET['id'];
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
        $stmt = $pdo->prepare('SELECT * FROM PHp_TESt WHERE ID = ?');
        $stmt->execute([$Name]);
        $item = $stmt->fetch();

       
    //   echo 'Name : ' . $item['Name'] .'<br><br>';
    //     echo 'Picture : <img src="' . $item['Picture'] . '" style="width: 200px;"> <br><br>';
    //         echo 'Cellphone_Number : ' . $item['Cellphone_Number'] .'<br><br>';
    //          echo 'Address : ' . $item['Address'] .'<br><br>';
    //          echo 'Birthday : ' . $item['Birthday'] .'<br><br>';
    //         echo 'Age : ' . $item['Age'] .'<br><br>';
    //         echo 'Gender : ' . $item['Gender'] .'<br><br>';
    //         echo 'Height : ' . $item['Height'] .'<br><br>';
    //         echo 'Weight : ' . $item['Weight'] .'<br><br>';
    //         echo 'Status : ' . $item['Status'] .'<br><br>';
    //         echo 'Spouse : ' . $item['Spouse'] .'<br><br>';
    //         echo 'Children : ' . $item['Children'] .'<br><br>';
    //         echo 'Religion : ' . $item['Religion'] .'<br><br>';
    //         echo 'Pastor : ' . $item['Pastor'] .'<br><br>';
    //         echo 'Elementary : ' . $item['Elementary'] .'<br><br>';
    //         echo 'ElementaryYear : ' . $item['ElementaryYear'] .'<br><br>';
    //         echo 'High_School : ' . $item['High_School'] .'<br><br>';
    //         echo 'High_SchoolYear : ' . $item['High_SchoolYear'] .'<br><br>';
    //         echo 'College : ' . $item['College'] .'<br><br>';
    //         echo 'CollegeYear : ' . $item['CollegeYear'] .'<br><br>';
    //         echo 'Post_Graduate : ' . $item['Post_Graduate'] .'<br><br>';
    //         echo 'Post_GraduateYear : ' . $item['Post_GraduateYear'] .'<br><br>';
    //         echo 'Skills : ' . $item['Skills'] .'<br><br>';
    //         echo 'literate : ' . $item['literate'] .'<br><br>';
    //         echo 'years : ' . $item['years'] .'<br><br>';
    //         echo 'months : ' . $item['months'] .'<br><br>';
    //         echo 'user : ' . $item['user'] .'<br><br>';
    //         echo 'employed : ' . $item['employed'] .'<br><br>';
    //         echo 'company : ' . $item['company'] .'<br><br>';
    //         echo 'position : ' . $item['position'] .'<br><br>';
    //         echo 'name1 : ' . $item['name1'] .'<br><br>';
    //         echo 'address1 : ' . $item['address1'] .'<br><br>';
    //         echo 'name2 : ' . $item['name2'] .'<br><br>';
    //         echo 'address2 : ' . $item['address2'] .'<br><br>';

          
   ?>

   <div class="row">
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
         <div class="bubbles"></div>
      <div class="col">

         <span>Name</span>: <span><?=$item['Name']?></span><br><br>
          <span>Picture</span>: <span><?=$item['Picture']?></span><br><br>
          <span>Cellphone Number</span>: <span><?=$item['Cellphone Number']?></span><br><br>
          <span>Address</span>: <span><?=$item['Address']?></span><br><br>
          <span>Birthday</span>: <span><?=$item['Birthday']?></span><br><br>
          <span>Age</span>: <span><?=$item['Age']?></span><br><br>
          <span>Gender</span>: <span><?=$item['Gender']?></span><br><br>
          <span>Height</span>: <span><?=$item['Height']?></span><br><br>
          <span>weight</span>: <span><?=$item['weight']?></span><br><br>
          <span>Status</span>: <span><?=$item['Status']?></span><br><br>
          <span>Spouse</span>: <span><?=$item['Spouse']?></span><br><br>
          <span>Children</span>: <span><?=$item['Children']?></span><br><br>
          <span>Religion</span>: <span><?=$item['Religion']?></span><br><br>
          <span>Pastor</span>: <span><?=$item['Pastor']?></span><br><br>
          <span>Elementary</span>: <span><?=$item['Elementary']?></span><br><br>
          <span>ElementaryYear</span>: <span><?=$item['ElementaryYear']?></span><br><br>
          <span>High_School</span>: <span><?=$item['High_School']?></span><br><br>
      
        </div>

      <div class="col">
         
        
          <span>High_SchoolYear</span>: <span><?=$item['High_SchoolYear']?></span><br><br>
          <span>College</span>: <span><?=$item['College']?></span><br><br>
          <span>CollegeYear</span>: <span><?=$item['CollegeYear']?></span><br><br>
          <span>Post-Graduate</span>: <span><?=$item['Post_Graduate']?></span><br><br>
          <span>Post_GraduateYear</span>: <span><?=$item['Post_GraduateYear']?></span><br><br>
          <span>Skills</span>: <span><?=$item['Skills']?></span><br><br>
          <span>literate</span>: <span><?=$item['literate']?></span><br><br>
          <span>years</span>: <span><?=$item['years']?></span><br><br>
          <span>months</span>: <span><?=$item['months']?></span><br><br>
          <span>user</span>: <span><?=$item['user']?></span><br><br>
          <span>employed</span>: <span><?=$item['employed']?></span><br><br>
          <span>company</span>: <span><?=$item['company']?></span><br><br>
          <span>position</span>: <span><?=$item['name1']?></span><br><br>
          <span>name1</span>: <span><?=$item['']?></span><br><br>
          <span>address1</span>: <span><?=$item['address1']?></span><br><br>
          <span>name2</span>: <span><?=$item['name2']?></span><br><br>
          <span>address2</span>: <span><?=$item['address2']?></span><br><br>
          
         </div>
          
   </div>
        
         
       
         
        
          
   <button id="button"><a href="exampletest.php?id=<?=$item['ID'] ?>">Edit</a></button>
 
   <form id="delete-form" action="exampletest_delete.php" method="post">
       <input type="hidden" name="ID" value="<?=$item['ID'] ?>" />
       <button class="button" type="submit">Delete</button>
   </form>
<script>
$(function(){
    $('delete-form').submit(function(event){
        if( !confirm('Do you want to DELETE this?')){
            event.preventDefault();
        }
    });

});
</script>
</body>
</html>+