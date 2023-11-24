<!-- Write a program to create a chess board on the screen -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .chessboard {
            display: grid;
            grid-template-columns: repeat(8, 50px);
            grid-template-rows: repeat(8, 50px);
        }

        .square {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            border: 1px solid #333; /* Add border style, width, and color */

        }

        .white {
            background-color: #f0d9b5;
        }

        .black {
            background-color: #b58863;
        }
    </style>
    <title>Chessboard</title>
</head>
<body>

<?php
    // Function to determine if a square should be black or white
    function isBlackSquare($row, $col) {
        return ($row + $col) % 2 === 1;
    }
?>

<div class="chessboard">
    <?php
        // Generating the chessboard
        for ($row = 0; $row < 8; $row++) {
            for ($col = 0; $col < 8; $col++) {
                $squareClass = isBlackSquare($row, $col) ? 'black' : 'white';
                echo "<div class='square $squareClass'></div>";
            }
        }
    ?>
</div>

</body>
</html>
