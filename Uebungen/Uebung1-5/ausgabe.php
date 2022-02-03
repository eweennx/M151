<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        $klasse = $_POST['klasse'];
        echo "Hallo {$username} der Klasse {$klasse}!";
    }
?>