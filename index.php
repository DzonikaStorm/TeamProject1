<!DOCTYPE html>
<html lang="en">
    <head>
        <title>O nama</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
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
                "smjer" => ""
            ];

        ?>

        <h1>O nama: </h1>

        <table border = "1">
            <tr>
                <td>Ime</td>
                <td>Prezime</td>
                <td>Godiste</td>
                <td>Smjer</td>
            </tr>
            <tr>
                <td><?php echo $ena['ime']?></td>
                <td><?php echo $ena['prezime']?></td>
                <td><?php echo $ena['godiste']?></td>
                <td><?php echo $ena['smjer']?></td>
            </tr>
            <tr>
                <td><?php echo $nikola['ime']?></td>
                <td><?php echo $nikola['prezime']?></td>
                <td><?php echo $nikola['godiste']?></td>
                <td><?php echo $nikola['smjer']?></td>
            </tr>
            <tr>
                <td><?php echo $milos['ime']?></td>
                <td><?php echo $milos['prezime']?></td>
                <td><?php echo $milos['godiste']?></td>
                <td><?php echo $milos['smjer']?></td>
            </tr>
        </table>


    </body>
    </html>
