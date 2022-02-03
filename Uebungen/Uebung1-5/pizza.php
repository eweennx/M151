<h3>Pizza Konfigurator</h3>

<p>Deine Pizza besteht aus folgenden Toppings:</p>

<?php
    $zutaten = array();

    foreach ($zutaten as $zutat){
        echo "<ul>$zutat</ul>";
    }
?>

<form method="POST" action="">
<label>Füge weitere Zutaten hinzu:</label>    
<input type="text" name="name" placeholder="Zutat" />
    <br><br>
    <input type="submit" value="Absenden" />
</form>