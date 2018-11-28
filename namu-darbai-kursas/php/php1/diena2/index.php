<?php
echo "<table border=\"1\">";


for ($row = 1; $row <= 10; $row++) {
echo "<tr>\n";

for($col = 1; $col <= 10; $col++){

  $x = $col * $row;


  echo "<td>$x</td>\n";
}
echo "</tr>";

}

echo "</table>";


 ?>
