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
         <th>Kundenname    </th> <!-- ship_name -->
         <th>Addresse      </th>
         <th>Stadt         </th>
         <th>State/Province</th>
     </tr>

<?php
$sql = "SELECT * FROM orders where customer_id = :id ";
$order = $_GET['id'];
$statement = $conn->prepare($sql);
$statement->execute([
    ':id' => $order
]);


while ($row = $statement -> fetch()) {
    ?>
    <tr>
        <td> <?php echo $row['ship_name']?> </td>
        <td> <?php echo $row['ship_address']?> </td>
        <td> <?php echo $row['ship_city']?> </td>
        <td> <?php echo $row['ship_state_province']?> </td>

    </tr>
    <?php
}
?>

</table>



