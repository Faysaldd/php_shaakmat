<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Schaakbord</title>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            width: 400px;
        }

        .square {
            width: 50px;
            height: 50px;
        }

        .white {
            background-color: white; 
        }
        .black {
            background-color: black; 
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
    $colors = ['white', 'black']; // omdat de achtergrond wit is doe ik grijs dus white->grey
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            $class = $colors[(($row + $col) % 2)];
            echo "<div class='square $class'></div>";
        }
    }
    ?>
    </div>
</body>
</html>     