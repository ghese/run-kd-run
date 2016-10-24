<?php


$points = $_POST['fly'];
echo $points;

$filename = 'hc.txt';
$lines = file($filename);
$lines[0] = $lines[0]+$points;

echo $lines[0];

// Write.
file_put_contents($filename, $lines[0]);
?>
<form action="hc.php" method="POST">
Score: <input type="text" name="fly"><br>
<input type="submit">
</form>