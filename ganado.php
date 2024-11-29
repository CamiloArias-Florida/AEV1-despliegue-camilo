<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¡Ganaste!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .win-message {
            font-size: 2em;
            color: green;
        }
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="win-message">
        <h1>¡Enhorabuena, has ganado!</h1>
        <p>La palabra era: <?php echo $_SESSION['palabra']; ?></p>
    </div>
    
    <a href="index.php" class="button">Jugar de nuevo</a>

</body>
</html>

<?php
session_destroy();
?>

