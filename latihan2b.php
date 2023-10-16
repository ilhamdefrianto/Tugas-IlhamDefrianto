<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modul 2-Latihan 2b</title>
    <style>
        .number-box {
            padding: 10px;
            border: 2px solid black;
            display: inline-block;
            margin-right: 4px;
            margin-bottom: 9px;
        }
        .box {
            border: 3px solid chocolate;
            padding: 15px;
            margin: 15px;
            width: 40%;
        }
        .genap{
            background-color: light brown;
            color: black;
        }
        .ganjil{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
<div class="box"> 
    <?php
    for ($x = 1; $x <= 5; $x++) {
        $Angkailham = ($x % 2 == 0) ? 'genap' : 'ganjil';

        for ($y = 1; $y <= $x; $y++) {
            echo "<div class='number-box $Angkailham'>" . $y . "</div>";
        }
        echo "<br>"; 
    }
    ?>
</div>
</body>
</html>