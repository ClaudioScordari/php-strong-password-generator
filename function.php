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
            $carattereCasuale = substr($caratteri, $indiceCasuale, 1);
        } while (strpos($myString, $carattereCasuale));

        $myString .= $carattereCasuale;
    }

    return $myString;
}
