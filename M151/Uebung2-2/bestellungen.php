<?php
$dbType = "mysql";
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

try {
    $conn = new PDO("$dbType:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM orders where custumer_id = ['id'] ";
$order = $_GET['orders'];
$statement = $conn->prepare($sql);
$statement->execute([
    ':order' => $order
]);


while($row = $statement -> fetch()){
    d($row);
}
function d($args){
    echo "<pre>";
    var_dump($args);
    echo "</pre>";
}

?>
