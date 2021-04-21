<?php
session_start();

try{
    $conn = new PDO("mysql:host=localhost;port=3306;dbname=projet_web;charset=utf8", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["login"]))
    {
        if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $message = '<label>Tous les champs sont requis</label>';
        }
        else
        {
            $query ="SELECT * FROM admin WHERE username = :username AND password = :password";
            $statement = $conn->prepare($query);
            $statement->execute(
                array(
                    'username'      =>      $_POST["username"],
                    'password'      =>      $_POST["password"]
                )
            );
            $count = $statement->rowCount();
            if($count > 0)
            {
                $_SESSION["username"] = $_POST["username"];
                header("location:dashboard.php");
            }
            else
            {
                $message = '<label>Vos donnees sont incorrectes</label>';
            }
        
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}
?>

<html>
<head>
<title>Se connecter</title>
<link rel="stylesheet" href="login.css">
</head>

<body>
<form action="#" method="post">
<div class="imgcontainer">
    <img src="user2.png" alt="Avatar" class="avatar">
</div>
<div class="login-box">
<h2>Login</h2>
    <div class="text">
        <input class="label" type="text" placeholder="Username" name="username" required>
    </div>
    <div class="text">
        <input class="label" type="password" placeholder="Password" name="password" required>
    </div>
        <input type="submit" class="button" name="login" value="Sign in" /> 

    
</form>
</div>
</body>

</html>