<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php member</title>
</head>
<body>
    <?php
        $id = $_GET['id'];
        if ($id) {
            $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
            $stmt = $pdo->prepare('SELECT * FROM example13_member WHERE id = ?');
            $stmt->execute([ $id ]);
            $item = $stmt->fetch();
        } else {
            $item = [];
        }

       

    ?>

    <h1>Join member form</h1>
    <form action="example13_member_action.php" method="post">
        <input type="hidden" name="id" value="<?=$item['id']?>" />
        <label>User id</label>
        <input type="text" name="userid" id="userid" placeholder="userid" maxlength="12" value="<?=$item['userid'] ?>"><br><br>
        <label>Password</label>
        <input type="password" name="userpw" id="userpw" placeholder="userpw" maxlength="15"><br><br>
        <label>Password check</label>
        <input type="password" name="userpw2" id="userpw2" placeholder="userpw2" maxlength="15"><br><br>
        <label>Firstname</label>
        <input type="text" name="firstname" id="firstname" placeholder="firstname" maxlength="20" value="<?=$item['firstname'] ?>"><br><br>
        <label>Middle name</label>
        <input type="text" name="middlename" id="middlename" placeholder="middlename" maxlength="20" value="<?=$item['middlename'] ?>"><br><br>
        <label>last name</label>
        <input type="text" name="lastname" id="lastname" placeholder="lastname" maxlength="20" value="<?=$item['lastname'] ?>"><br><br>
        <label>Birth day</label>
       <input type="date" name="birth" id="birth" value="<?=$item['birthday'] ?>"><br><br>
       <label>address</label>
       <input type="text" name="address" id="address" placeholder="address" size="40" value="<?=$item['address'] ?>"><br><br>
       <label>Post number</label>
       <input type="number" name="post" id="post" placeholder="post number" maxlength="4" value="<?=$item['post'] ?>"><br><br>
  
      
        <input type="submit" value="JOIN">
    
    
    </form>



</body>
</html>
