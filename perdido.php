<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perdiste</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .lose-message {
            font-size: 2em;
            color: red;
        }
        .button {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>

    <div class="lose-message">
        <h1>Lo siento, has perdido.</h1>
        <p>La palabra era: <?php echo $_SESSION['palabra']; ?></p>
    </div>
    
    <a href="index.php" class="button">Jugar de nuevo</a>

</body>
</html>

<?php
session_destroy();
?>

