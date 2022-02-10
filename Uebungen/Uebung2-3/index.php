<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}

  
?>

<table>
    <tr>
        <th>ID</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Bestellungen</th>
    </tr>

<?php

$sql = "SELECT * FROM customers";

$statement = $conn->prepare($sql);

$params = [
    ':id'=> $id
];

$statement->execute($params);

$result = $statement->fetchAll();

  foreach ($result as $row) {
     ?>
     <tr>
        <td> <?= $row['id']; ?> </td>
        <td> <?= $row['first_name']; ?> </td>
        <td> <?php echo $row['last_name']; ?> </td>
        <td> <a href="bestellungen.php?id=<?=$row['id'];?>">Link</a></td>
    </tr> 
    <?php
    }

?>

</table>