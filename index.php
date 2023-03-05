<!DOCTYPE html>
<html lang="en">
    <head>
        <title>O nama</title>
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
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
        <?php 
        
            $ena = [
                "ime" => "Ena",
                "prezime" => "Rondic",
                "godiste" => 2007,
                "smjer" => "Razvoj veb i mobilnih aplikacija"
            ];

            $nikola = [
                "ime" => "Nikola",
                "prezime" => "Pejovic",
                "godiste" => 2007,
                "smjer" => "Razvoj veb i mobilnih aplikacija"
            ];

            $milos = [
                "ime" => "Milos",
                "prezime" => "Krsikapa",
                "godiste" => 2007,
                "smjer" => "Elektronika"
            ];

        ?>

        <h1>O nama: </h1>

        <table border="1">
            <tr>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Godiste</th>
                <th>Smjer</th>
            </tr>
            <tr>
                <td><?php echo $ena['ime'] ?></td>
                <td><?php echo $ena['prezime'] ?></td>
                <td><?php echo $ena['godiste'] ?></td>
                <td><?php echo $ena['smjer'] ?></td>
            </tr>
            <tr>
                <td><?php echo $nikola['ime'] ?></td>
                <td><?php echo $nikola['prezime'] ?></td>
                <td><?php echo $nikola['godiste'] ?></td>
                <td><?php echo $nikola['smjer'] ?></td>
            </tr>
            <tr>
                <td><?php echo $milos['ime'] ?></td>
                <td><?php echo $milos['prezime'] ?></td>
                <td><?php echo $milos['godiste'] ?></td>
                <td><?php echo $milos['smjer'] ?></td>
            </tr>
        </table>
    </body>
</html>
