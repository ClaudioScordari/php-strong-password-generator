<?php
require __DIR__ . '/function.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>

<body>
    <h1>Password</h1>

    <div>
        <form action="index.php" method="GET">
            <input name="number" type="number" placeholder="Inserisci un numero">
            <button>
                Invia
            </button>
        </form>
    </div>

    <div>
        <h2>
            <?php echo getRandomPassword($_GET['number']); ?>
        </h2>
    </div>
</body>

</html>