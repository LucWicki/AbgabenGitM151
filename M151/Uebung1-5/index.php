<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['name'];
    if(isset($_POST['form_submit'])){
    if (empty($_POST['name'])) {
         echo "Username is required";
    }
   else {

       echo "Hallo {$username}!";
   }
}
}
?>
<form method="POST" action="?">
    <label for="class">Choose a class:</label>
    <select name="class" >
        <option value="D20a">D20a</option>
        <option value="D21a">D21a</option>
        <option value="D20b">D20b</option>
        <option value="D21b">D21b</option>
    </select>
    <input type="text" name="name" placeholder="Benutzername" />
    <input type="submit" name ="form_submit" value="Absenden" />


</form>
