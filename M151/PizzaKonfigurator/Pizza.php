<?php
// Session Starten
session_start();

//1. Daten aus Session lesen
$ingredients = [];

//2. Daten aus Session lesen

if (array_key_exists('ingredients', $_SESSION)) {
    $ingredients = $_SESSION['ingredients'];
}
//3. Daten verändern
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $newingredients = array_key_exists('ingredient', $_POST) ? $_POST['ingredient'] : '';
    if($newingredients) {
        array_push($ingredients, $newingredients);
        //
    }
}
//Daten Speichern
    $_SESSION['ingredients'] = $ingredients;

?>
<h1>Zutat hinzufügen</h1>
<form method="POST" action="?">
    <input type="text" name="ingredient" placeholder="Zutat eingeben" />
    <input type="submit" value="Hinzufügen" />
</form>
<h2>Deine Zutaten</h2>

<ul>
    <?php
        foreach($ingredients as $ingredient){
    echo "<li>{$ingredient}</li>";
    }
    ?>
</ul>

