<?php 
$dsn ='mysql:host=localhost;dbname=test';
$user = 'root';
$password = '';


    try{
$pdo = new PDO($dsn, $user , $password);


    }
    catch(PDOException $e){
        echo 'this an error  ' . $e ->getMessage() ;

    }

    $status = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $password = $_POST['code_page'];
    $email = $_POST['email'];
   
}

if( empty($password) || empty($email)){
    $status = 'please enter all fields';
}else{
    if(strlen($password)>=255){
        $status = 'Put A Correct Username ';
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status  = 'enter correct email address';

    }else{
        
        $sql = "INSERT INTO registration ( email, password)VALUES(:email, :password)";
        $stmt = $pdo ->prepare($sql);
        $stmt -> execute(['email' => $email , 'password' => $password ]);

        $email = '';
        
        $password = '';
        $status = 'the information has been send';
    }
}

echo $status;

    ?>
    <!--
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="" method="POST">
        <label >username</label>
            <input type="text" name="username" id="">
            <br>
            <label >email</label>
            <input type="email" name="email" id="">
            <br>
            <label>password</label>
            <input type="password" name="password" id="">
            <br>
            <input type="submit" value="send">
            <h1></h1>
        </form>
        
    </body>
    </html>