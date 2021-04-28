<?php
//Error reporting code given in lab pdf
error_reporting(E_ALL);
ini_set("display_errors", 1);
function multiTable()
{
      //creating table element
      echo "<table>";
      for ($i=1; $i <= 100; $i++)
      {
        //creating table rows
        echo "<tr>";
        for ($k=1; $k <= 100; $k++)
        {
          //calculating value for each area or square of the table
          $x = $i * $k;
          echo "<td>$x<td>";
        }

        echo "</tr>";
      }
      echo "</table>";
}
multiTable();
?>
