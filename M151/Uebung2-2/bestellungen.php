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
?>
<table>
     <tr>
         <th>Bestellname</th> <!-- ship_name -->


     </tr>

<?php
$sql = "SELECT * FROM orders where custumer_id = ['id'] ";
$order = $_GET['id'];
$statement = $conn->prepare($sql);
$statement->execute([
    ':id' => $order
]);


while ($row = $statement -> fetch()) {
    ?>
    <tr>
        <td> <?php echo $row['ship_name']?> </td>
    </tr>
    <?php
}
?>

</table>



