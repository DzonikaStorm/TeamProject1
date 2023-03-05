<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="login_register.css">
    <link rel="stylesheet" href="alert.css">

</head>
<body>
<?php if (!empty($_GET['error'])){
        ?>
    
    <div class="col-sm-12">
            <div class="alert fade alert-simple alert-warning alert-dismissible text-left font__family-montserrat font__size-16 font__weight-light brk-library-rendered rendered show" role="alert" data-brk-library="component__alert">
                <i class="start-icon fa fa-exclamation-triangle faa-flash animated"></i>
                <strong class="font__weight-semibold">Warning!</strong> <?php echo $_GET['error']; ?>
            </div>
      </div> 

      <?php }?>

<div class="login-page">
        <div class="form">
            <h1>Register</h1>
                <form class="login-form" method="POST" action="register.php">
                    <input type="text" placeholder="Username" name="userName"/>
                    <input type="text" placeholder="Email" name="email"/>
                    <input type="password" placeholder="Password" name="password"/>
                        <button>Register</button>
                    <p class="message">Already got account? <a href="login.php">Log in!</a></p>
                </form>
        </div>
    </div>   

    <?php
        // assuming that $conn is initialized and contains the database connection
        include "db_conn.php";
        if (isset($_POST['userName']) && isset($_POST['email']) && isset($_POST['password'])){
            $userName = $_POST['userName'];
            $password = $_POST['password'];
            $email = $_POST['email'];

            if (empty($userName) || empty($password) || empty($email)){
                if (empty($userName)){
                    header("Location: register.php?error=Username required");
                    exit();
                } elseif (empty($password)){
                    header("Location: register.php?error=Password required");
                    exit();
                } else{
                    header("Location: register.php?error=Email required");
                    exit();
                }
            } else {
                if(strlen($password)<6){
                    header("Location: register.php?error=Password too short, Must be at least 6");
                    exit();
                }
                $sql = "SELECT * FROM users WHERE userName = '$userName' OR email = '$email'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo 'Email or User already taken';
                } else {
                    $sql = "INSERT INTO users (userName, password, email) VALUES ('$userName','$password','$email')";
                    if (mysqli_query($conn, $sql)){
                        header ("Location: login.php");
                    }
                }
            }
        } 
    ?>

</body>
</html>
