<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
    <?php
        $id = $_GET['id'];

        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
        $stmt = $pdo->prepare('SELECT * FROM example13_member WHERE id = ?');
        $stmt->execute([ $id ]);
        $item = $stmt->fetch();


        echo 'USER ID : ' . $item['userid'].'<br><br>';
        echo  'password : ' . $item['password'] .'<br><br>';
        echo 'firstname : ' . $item['firstname'] . '<br><br>';
        echo 'middlename : ' . $item['middlename'] . '<br><br>';
        echo 'lastname : ' . $item['lastname'] . '<br><br>';
        echo 'birthday : ' . $item['birthday'] . '<br><br>';
        echo 'address : ' . $item['address'] . '<br><br>';
        echo 'post number : ' . $item['post'] . '<br><br>';
    ?>
    <a href="example13_member.php?id=<?=$item['id'] ?>">Edit</a>
    <form id="delete-form" action="example13_member_delete.php" method="post">
        <input type="hidden" name="id" value="<?=$item['id'] ?>" />
        <button type="submit">Delete</button>
    </form>
    <script>
    $(function() {
        $('#delete-form').submit(function(event){
            if ( !confirm('Do you want to delete this REAllY?')) {
                event.preventDefault();
            }
        });
    });
    
    </script>
</body>
</html>