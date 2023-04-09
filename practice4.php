<?php
/*
* Create a PHP program that receives a size and displays a multiplication table from 1 to the
* number. You also need to print the row and column indexes in the table.
*/
$size = $_POST['size'];

echo "<table border='1'>";
for ($i = 0; $i <= $size; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= $size; $j++) {
        if ($i == 0 && $j == 0) {
            echo "<td></td>";
        } else if ($i == 0) {
            echo "<td><b>$j</b></td>";
        } else if ($j == 0) {
            echo "<td><b>$i</b></td>";
        } else {
            echo "<td>" . $i * $j . "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

?>