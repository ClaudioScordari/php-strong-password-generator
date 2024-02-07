<?php
function getRandomPassword($lunghezzaDellaPassword)
{
    // DATI

    // Stringa di tutti i caratteri disponibili
    $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';

    // Lunghezza della mia stringa dei caratteri
    $lunghezzaCaratteri = strlen($caratteri);

    // Stringa vuota per mettere dentro i caratteri casuali
    $myString = '';

    /***************************************************************/

    for ($i = 0; $i < $lunghezzaDellaPassword; $i++) {

        do {
            $indiceCasuale = rand(0, $lunghezzaCaratteri - 1);

            // Ridammi un carattere casuale
            $carattereCasuale = substr($caratteri, $indiceCasuale, 1);
        } while (strpos($myString, $carattereCasuale));

        $myString .= $carattereCasuale;
    }

    return $myString;
}

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