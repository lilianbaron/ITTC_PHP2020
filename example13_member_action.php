<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>join action</title>
</head>
<body>
    <?php
        $id = $_POST['id'];
        $userid = $_POST[userid];
        $userpw = $_POST[userpw];
        $userpw2 = $_POST[userpw2];
        $firstname = $_POST[firstname];
        $middlename = $_POST[middlename];
        $lastname = $_POST[lastname];
        $birthday = $_POST[birth];
        $address = $_POST[address];
        $postnumber = $_POST[post];

        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
   
        if ($id) {
            // edit record
            $sql = 'UPDATE example13_member
            SET userid = :userid,
            firstname = :firstname,
            middlename = :middlename,
            lastname = :lastname,
            birthday = : birthday,
            address = :address,
            post = :post';
            if ($userpw) {
                $sql = ',password = :password';
            }
            $sql .= 'WHERE id = :id';
            $stmt = $pdo->prepare($sql);
            $params = [
                'userid' => $userid,
                'firstname' => $firstname,
                'middlename' => $middlename,
                'lastname' => $lastname,
                'birthday' => $birthday,
                'address' => $address,
                'post' => $post,
                'id' => $id,
            ];
            if($userpw) {
                $params ['password'] = $userpw;
            }
            $stmt->execute($params);
        } else {
            // create new record
            $stmt = $pdo->prepare('INSERT INTO example13_member (
                userid, password, firstname, middlename, lastname, birthday, address, post
                ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? )');
            
            $stmt->execute([ $userid, $userpw, $firstname, $middlename, $lastname, $birthday, $address, $postnumber ]);
    
        }
       
            print_r($stmt->errorInfo());

        echo 'USER ID : ' . $userid .'<br><br>';
        echo  'password : ' . $userpw .'<br><br>';
        echo 'password2 : ' . $userpw2 . '<br><br>';
        echo 'firstname : ' . $firstname . '<br><br>';
        echo 'middlename : ' . $middlename . '<br><br>';
        echo 'lastname : ' . $lastname . '<br><br>';
        echo 'birthday : ' . $birthday . '<br><br>';
        echo 'address : ' . $address . '<br><br>';
        echo 'post number : ' . $postnumber . '<br><br>';

    ?>
        <a href="example13_list.php">Go to List </a>
</body>
</html>
