<?php
  echo "<table>";
  for ($i = 0; $i <=100; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= 100; $j++) {
      if ($i == 0 && $j == 0) { //handles top left corner cases
        echo "<th></th>";
      }
      elseif ($i == 0) { //prints row index
        echo "<th>" . $j . "</th>";
      }
      elseif ($j == 0) { //prints column index
        echo "<th>" . $i . "</th>";
      }
      else { //prints column * row multiples
        echo "<td>" . $i*$j . "</td>";
      }
    }
    echo "</tr>";
  }
  echo "</table>";
?>
