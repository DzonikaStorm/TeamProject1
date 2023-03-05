<?php
include "db_conn.php";

if (isset($_POST['userName']) && isset($_POST['password'])){
    if (empty($_POST['userName'])){
        header("Location: login.php?error=User Name is Required");
        exit();
    } elseif (empty($_POST['password'])) {
        header("Location: login.php?error=Password is Required");
        exit();
    } else {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE userName = '$userName' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result === false) {
            header("Location: login.php?error=Database Error");
            exit();
        }

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if ($row['userName'] === $userName && $row['password'] === $password){
                header("Location: index.php?succesful=Welcome". $userName); // Redirect to home page
                exit();
            } else{
                if ($row['userName'] !== $userName) {
                    $error = "Invalid Username";
                } else {
                    $error = "Invalid Password";
                }
                header("Location: login.php?error=$error");
                exit();
            }
        } else {
            header("Location: login.php?error=Invalid Credentials");
            exit();
        }
    }
} 

   
?>