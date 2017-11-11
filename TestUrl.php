<!DOCTYPE html>


<body>

<form method="POST" action="TestURL.php">
Saisir l'URL : <input type="text" name="adresse" value="URL" size="30"></input>
<input type = "submit" value = "Envoyer">
</form>

<?php

$adresse = $_POST['adresse'];

$start = microtime(true);
file_get_contents($adresse);
$total = microtime(true) - $start;

echo $total; 

?>


</body>
</HTML>