<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $klasse = $_POST['klasse'];
        echo "Hallo {$username} der Klasse {$klasse}!";

        
    }
?>

<form method="POST" action="ausgabe.php">
    <input type="text" name="name" placeholder="Benutzername" />
    <br><br>
    <label for="klasse">Klasse</label>
  <select id="klasse" name="klasse">
    <option value="INF19a">INF19a</option>
    <option value="INF19b">INF19b</option>
    <option value="INF19c">INF19c</option>
    <option value="INF19d">INF19d</option>
  </select>
    <br><br>
    <input type="submit" value="Absenden" />
</form>