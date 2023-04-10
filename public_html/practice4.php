<?php
$size = $_POST["size"];
$b = 0;

echo "<table border = '1'>";
echo "<tr>";
echo "<td>".$b."</td>";

for ($i = 1; $i <= $size; $i++){
    echo "<td>" .$i. "</td>";
}
echo "</tr>";

for ($i = 1; $i <= $size; $i++){
    echo "<tr>";
    echo "<td>".$i."</td>";
    for($j = 1; $j <= $size; $j++){
        echo "<td>".$i*$j."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>