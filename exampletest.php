<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Test</title>
    <style>
        header{
            position: sticky;
            top: 0;
            display: flex;
            width: 100%; height: 15vh;
            align-items: center;
            background: gray;
            margin-top: 25px;
        
        }
        
        .logo{
            flex: 1;
            margin-left: 50px;
        }
    p{
        flex: 2;
        align-items: space-around;
        font-size: 30px;
        color: black;
        padding: 20px;
        font-weight: bold;
    }
    form label{
        margin: 15px 25px;
        font-weight: bold;
    }
    .container {
       width: 100%;
       height: 100%;
       color: #000;
       background: linear-gradient(-45deg, #EE7752, #E73CFe, #234AD5, #23D5AB );
       background-size: 500% 500%;
       
       animation: change 10s ease-in-out infinite;
    }
    
.title   {
    margin: 15 25px;
    padding-top: 25px;
    font-size: 25px;

    }
    .button{
        text-align: center;
    }
    .button input{
        padding: 15px;
        background: black;
        font-size: 15px;
        color: white;
        font-weight: bold;
        border-radius: 5px;
    }
    .button input:hover{
        color: red;
        background: gray;
    }
    @keyframes change{
        0% {
            background-position: 0 50%;
        }
        50%{
            background-position: 100% 50%;
        }
       100% {
            background-position: 0 50%;
        }
    }
    
    
    
    </style>
</head>
<body>

<?php
     $id = $_GET['id'];
     if($id) {
        $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', 'zxcv1234');
        $stmt = $pdo->prepare('SELECT * FROM PHp_TESt WHERE id = ?');
        $stmt->execute([$id]);
        $item = $stmt->fetch();
     } else {
         $item = [];
     }

     ?>
    <header>
        <span class="logo">
        <img src="http://ittc.kr/files/attach/images/134/d9f472438769d56ac66bfb68834685b4.png" alt="ITTC">
        </span>
        <p>IT TRAINING CENTER [APPLICATION FORM]</p>
    </header>


     <div class="container">
    
            <h4 class="title">1. PERSONAL DATA:</h4>
            <form action="exampletest_insert.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?=$item['id']?>" />
            <label>Picture upload:</label>
            <input type="file" name="PictureUpload" id="PictureUpload" placeholder="PictureUpload" value="<?=$item['PictureUpload']?>"><br><br>
            <label>Name:</label>
            <input type="text" name="Name" id="Name"  placeholder="fullname" value="<?=$item['Name']?>"required><br><br>
            <label>Cellphone Number:</label>
            <input type="tel" name="Cellphone_Number" id="Cellphone_Number" maxlength="13" value="<?=$item['Cellphone_Number']?>"><br><br>
            <label>Address:</label>
            <input type="text" name="address" id="address" placeholder="address" size="60" value="<?=$item['Address']?>"><br><br>
            <label>Birthday:</label>   
            <input type="Date" name="birth" id="Birthday" value="<?=$item['Birthday']?>">&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Age:</label> 
            <input type="number" name="age" id="age" min="20" max="30" value="<?=$item['Age']?>"><br><br>  
            <label>Gender: Man</label>
            <input type="radio" name="gender" id="Gender" value="man" value="<?=$item['man']?>">
            <label>Woman</label>
            <input type="radio" name="gender" id="Gender" value="woman" value="<?=$item['woman']?>"><br><br>
            <label>Height:</label>
            <input type="number" name="height" id="height" value="<?=$item['height']?>">cm 
            <label>Weight:</label>
            <input type="number" name="weight" id="weight" value="<?=$item['weight']?>">kg<br><br>
            <label>Civil Status:</label>
            <input type="text" name="status" id="Status" placeholder="your country" value="<?=$item['Status']?>"><br><br>
            <label>Name of Spouse(if married):</label>
            <input type="text" name="Spouse" id="Spouse" value="<?=$item['Spouse']?>"><br><br>
            <label>Number of Children(if have):</label>
            <input type="number" name="Children" id="Children" value="<?=$item['Children']?>"><br><br>
            <label>Religious Affiliation:</label>
            <input type="text" name="Religion" id="Religion" value="<?=$item['Religion']?>"><br><br>
            <label>Name of Pastor:</label>
            <input type="text" name="Pastor" id="Pastor" value="<?=$item['Pastor']?>"><br><br>

        

            <h4 class="title">II. EDUCATIONAL BACKGROUND:</h4>
            <label>Elementery:</label>
            <input type="text" name="Elementary" id="Elementary" maxlength="40" value="<?=$item['Elementary']?>">
            <label>Year:</label>
            <input type="number" name="ElementaryYear" id="ElementaryYear" value="<?=$item['ElementaryYear']?>"><br><br>
            <label>High School:</label>
            <input type="text" name="High_School" id="High_School" maxlength="40" value="<?=$item['High_School']?>">
            <label>Year:</label>
            <input type="number" name="High_SchoolYear" id="High_SchoolYear" value="<?=$item['High_SchoolYear']?>"><br><br>
            <label>College:</label>
            <input type="text" name="College" id="College" maxlength="40" value="<?=$item['College']?>">
            <label>Year:</label>
            <input type="number" name="CollegeYear" id="CollegeYear" value="<?=$item['CollegeYear']?>"><br><br>
            <label>Post Graduate:</label>
            <input type="text" name="Post_Graduate" id="Post_Graduate" value="<?=$item['Post_Graduate']?>">
            <label>Year:</label>
            <input type="number" name="Post_GraduateYear" id="Post_GraduateYear" value="<?=$item['Post_GraduateYear']?>"><br><br>
            <label>Special Skills:</label>
            <textarea name="Skills" id="Skills" cols="30" rows="5"></textarea>


            <h4 class="title">III. QUESTIONS:</h4>
            <label>1. Are you a computer literate? </label>
                YES <input type="radio" name="literate" id="literate" value="yes" value="<?=$item['literate']?>">
            NO <input type="radio" name="literate" value="no" value="<?=$item['literate']?>"><br><br>
            <label>2. How long have you been using a computer?</label><br><br>
            <input type="number" name="years" id="years" value="<?=$item['years']?>">Years
            <input type="number" name="months" id="months" value="<?=$item['months']?>">Months <br><br>
            <label>3. If you rate your computer skills, Kindly check:</label>
            (1) Beginner user <input type="radio" name="user" id="user" value="beginner" value="<?=$item['user']?>">
            (2) Advanced user <input type="radio" name="user" id="user" value="advanced" value="<?=$item['user']?>">
            (3) Expert user<input type="radio" name="user" id="user" value="expert" value="<?=$item['user']?>"><br><br>
            <label>4. Are you currently employed?</label>
            YES<input type="radio" name="employed" id="employed-1" value="yes" value="<?=$item['employed']?>">
            NO<input type="radio" name="employed" id="employed-2" value="no" value="<?=$item['employed']?>"><br><br>
            <label>5. (4-if yes) Name of Company?</label><br><br>
            <label>Company</label>
            <input type="text" name="company" id="company" placeholder="Company Name" value="<?=$item['company']?>">
            <label>Position</label>
            <input type="text" name="position" id="position" placeholder="Position" value="<?=$item['company']?>">

            

            <h4 class="title">IV. CHARACTER REFERENCES:</h4>
            <label>Name 1:</label>
            <input type="text" name="name1" id="name1" placeholder="fullname" value="<?=$item['name1']?>"><br><br>
            <label> Address :</label>
            <input type="text" name="address1" id="address1" value="<?=$item['address1']?>"><br><br>
            <label>Name 2:</label>
            <input type="text" name="name2" id="name2" placeholder="fullname" value="<?=$item['name2']?>"><br><br>
            <label>Address :</label>
            <input type="text" name="address2" id="address2" value="<?=$item['address2']?>">

            

            <h4 class="title">V. Person to be contacted in case of emergency:</h4>
                <label>Name:</label>
                <input type="text" name="EmergencyName" id="EmergencyName" value="<?=$item['EmergencyName']?>">
                <label>Contact Number:</label>
                <input type="text" name="EmergencyNumber" id="EmergencyNumber" value="<?=$item['EmergencyNumber']?>"><br><br>

                <div class="button">
                <input type="submit" value=" SAVE DATA" >
        </div>
    </form>
    </div>
</body>
</html>                                               