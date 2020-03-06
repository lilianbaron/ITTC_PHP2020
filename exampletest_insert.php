<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP_INSERT_ACTION</title>

    <style>
        body{
            
        }

    
    </style>


</head>
<body>
    <?php
    $filepath = null;
    if ($_FILES['PictureUpload']['error']=== UPLOAD_ERR_OK) {

        $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
        $uploadfile = $uploaddir . basename($_FILES['PictureUpload']['name']);

        if(!is_dir($uploaddir)){
            mkdir($uploaddir);
        }

        if(move_uploaded_file($_FILES['PictureUpload']['tmp_name'], $uploadfile)){
            // echo "file upload success.";
            $filepath = '/uploads/'.basename($_FILES['PictureUpload']['name']);
        } else {
            echo 'files information:';
            print_r($_FILES);
        }

    }

        $id = $_POST['id'];
        $Name = $_POST['Name'];
        $Cellphone_Number = $_POST['Cellphone_Number'];
        $Address = $_POST['address'];
        $Birthday = $_POST['birth'];
        $Age = $_POST['age'];
        $Gender = $_POST['gender'];
        $Height = $_POST['height'];
        $Weight = $_POST['weight'];
        $CivilStatus = $_POST['status'];
        $Spouse = $_POST['Spouse'];
        $Children = $_POST['Children'];
        $Religion = $_POST['Religion'];
        $Pastor = $_POST['Pastor'];
        $Elementary = $_POST['Elementary'];
        $ElementaryYear = $_POST['ElementaryYear'];
        $High_School = $_POST['High_School'];
        $High_SchoolYear = $_POST['High_SchoolYear'];
        $College = $_POST['College'];
        $CollegeYear = $_POST['CollegeYear'];
        $Post_Graduate = $_POST['Post_Graduate'];
        $Post_GraduateYear = $_POST['Post_GraduateYear'];
        $Skills = $_POST['Skills'];
        $literate = $_POST['literate'];
        $years = $_POST['years'];
        $months = $_POST['months'];
        $user = $_POST['user'];
        $employed = $_POST['employed'];
        $company = $_POST['company'];
        $position = $_POST['position'];
         $name1 = $_POST['name1'];
        $address1 = $_POST['address1'];
        $name2 = $_POST['name2'];
        $address2 = $_POST['address2'];

        // if ($Age === '') {
        //     $Age = null; 
        // }
        if ($years ===''){
            $years = null;
        }
          
  


        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');

        if ($id) {
            $sql = 'UPDATE PHp_TESt
            SET Name = :Name,
            Cellphone_Number = :Cellphone_Number,
            Address = :Address,
            Birthday = :Birthday,
            Age = :Age,
            Gender = :Gender,
            Height = :Height,
            Weight =:Weight,
            Status = :Status,
            Spouse = :Spouse,
            Children = :Children,
            Religion = :Religion,
            Pastor = :Pastor,
            Elementary = :Elementary,
            ElementaryYear = :ElementaryYear,
            High_School = :High_School,
            High_SchoolYear = :High_SchoolYear,
            College = :College,
            CollegeYear = :CollegeYear,
            Post_Graduate = :Post_Graduate,
            Post_GraduateYear = :Post_GraduateYear,
            Skills = :Skills,
            literate = :literate,
            years = :years,
            months = :months,
            user = :user,
            employed = :employed,
            company = :company,
            position = :position,
            name1 = :name1,
            address1 = :address1,
            name2 = :name2,
            address2 = :address2,
            Picture = :Picture

            WHERE id = :id';
            $stmt = $pdo->prepare($sql);
            $params = [
               'Name'  => $Name,
               'Cellphone_Number' => $Cellphone_Number,
               'Address' => $Address,
               'Birthday' => $Birthday,
               'Age' => $Age,
               'Gender' => $Gender,
               'Height' => $Height,
               'Weight' => $Weight,
               'Status' => $Status,
               'Spouse' => $Spouse,
               'Children' => $Children,
               'Religion' => $Religion,
               'Pastor' => $Pastor,
               'Elementary' => $Elementary,
               'ElementaryYear' => $ElementaryYear,
               'High_School' => $High_School,
               'High_SchoolYear' => $High_SchoolYear,
               'College' => $CollegeYear,
               'Post_Graduate' => $Post_Graduate,
               'Post_GraduateYear' => $Post_GraduateYear,
               'Skills' => $Skills,
               'literate' => $literate,
               'years' => $years,
               'months' => $months,
               'user' => $user,
               'employed' => $employed,
               'company' => $company,
               'position' => $position,
               'name1' => $name1,
               'Address1' => $Address1,
               'name2' => $name2,
               'Address2' => $Address2, 
               'Picture' => $filepath,
            ];
            $stmt->execute($params);
        } else {
                $stmt = $pdo->prepare('INSERT INTO PHp_TESt (
                    Name, Cellphone_Number, Address, Birthday, Age, Gender, Height, Weight, Status, Spouse, Children,  Religion, Pastor, Elementary, ElementaryYear, High_School, High_SchoolYear, College, CollegeYear, Post_Graduate, Post_GraduateYear, Skills, literate, years, months, user, employed, company, position, name1, address1, name2, address2, Picture
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)');

                $stmt->execute([ $Name, $Cellphone_Number, $Address, $Birthday, $Age, $Gender,  $Height,  $Weight, $Status, $Spouse, $Children,  $Religion,  $Pastor, $Elementary, $ElementaryYear, $High_School, $High_SChoolYear, $College, $CollegeYear, $Post_Graduate, $Post_GraduateYear, $Skills, $literate, $years, $months, $user, $employed, $company, $position, $name1, $address1, $name2, $address2, $filepath]);
            }

            print_r($stmt->errorInfo());

             echo 'Name : ' . $Name .'<br><br>';
             echo 'Cellphone_Number : ' . $Cellphone_Number .'<br><br>';
             echo 'Address : ' . $Address .'<br><br>';
             echo 'Birthday : ' . $Birthday .'<br><br>';
             echo 'Age : ' . $Age .'<br><br>';
             echo 'Gender : ' . $Gender .'<br><br>';
             echo 'Height : ' . $Height .'<br><br>';
             echo 'Weight : ' . $Weight .'<br><br>';
             echo 'Status : ' . $Status .'<br><br>';
             echo 'Spouse : ' . $Spouse .'<br><br>';
             echo 'Children : ' . $Children .'<br><br>';
             echo 'Religion : ' . $Religion .'<br><br>';
             echo 'Pastor : ' . $Pastor .'<br><br>';
             echo 'Elementary : ' . $Elementary .'<br><br>';
             echo 'ElementaryYear : ' . $ElementaryYear .'<br><br>';
             echo 'High_School : ' . $High_School .'<br><br>';
             echo 'High_SchoolYear : ' . $High_SchoolYear .'<br><br>';
             echo 'College : ' . $College .'<br><br>';
             echo 'CollegeYear : ' . $CollegeYear .'<br><br>';
             echo 'Post_Graduate : ' . $Post_Graduate .'<br><br>';
             echo 'Post_GraduateYear : ' . $Post_GraduateYear .'<br><br>';
             echo 'Skills : ' . $Skills .'<br><br>';
             echo 'literate : ' . $literate .'<br><br>';
             echo 'years : ' . $years .'<br><br>';
             echo 'months : ' . $months .'<br><br>';
             echo 'user : ' . $user .'<br><br>';
             echo 'employed : ' . $employed .'<br><br>';
             echo 'company : ' . $company .'<br><br>';
             echo 'position : ' . $position .'<br><br>';
             echo 'name1 : ' . $name1 .'<br><br>';
             echo 'address1 : ' . $address1 .'<br><br>';
             echo 'name2 : ' . $name2 .'<br><br>';
             echo 'address2 : ' . $address2 .'<br><br>';
             echo 'Picture : ' . $filepath .'<br><br>'; 

      
    ?>

         
        

    <a href="exampletest_list.php">Go to List</a>
</body>
</html>