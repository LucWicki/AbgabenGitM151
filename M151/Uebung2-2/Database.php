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
         <th>Vorname</th>
         <th>Nachname</th>
         <th>Jobtitel</th>
         <th>Bestellungen</th>

     </tr>

         <?php
         $jobTitle = $_GET['job_title']; //?job_title=Owner, nicht vergessen

         $sql = "SELECT * FROM customers where job_title = :job_title";
         $statement = $conn->prepare($sql);
         $statement->execute([
             ':job_title' => $jobTitle
         ]);

        while ($row = $statement -> fetch()) {
             ?>
            <tr>
                <td> <?php echo $row['first_name']?> </td>
                <td> <?php echo $row['last_name']?> </td>
                <td> <?php echo $row['job_title']?> </td>
                <td> <a href="bestellungen.php"? id=".<?php $_GET['1']?>.">Bestellung Anzeigen</a> </td>

            </tr>
             <?php
         }
         ?>

 </table>