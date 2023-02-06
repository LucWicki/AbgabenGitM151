<?php
// Session Starten
session_start();

$zutaten = array('');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $zutat = $_POST['zutat'];

    if (isset($_SESSION[$zutat])) {
        $zutaten = $_SESSION[$zutat];
    }

    foreach ($zutaten as $element) {
        echo '<br>' . $element;
    }

//Daten Speichern
    $_SESSION[$zutat][] = $zutaten;
}
?>

<form method="POST" action="?">
    <input type="text" name="zutat" placeholder="Zutat" />
    <input type="submit" value="Absenden" />
</form>

