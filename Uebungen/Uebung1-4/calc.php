<?php


$x = intval($_GET['x']);
$y = intval($_GET['y']);

if($_GET['mode']=="plus"){
    $resultat = $x + $y;
}
elseif($_GET['mode']=="minus"){
    $resultat = $x - $y;
}
elseif($_GET['mode']=="mal"){
    $resultat = $x * $y;
}
elseif($_GET['mode']=="div"){
    $resultat = $x / $y;
}

echo "Das Resultat ist $resultat";

?>