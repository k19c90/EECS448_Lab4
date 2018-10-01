<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table border =\"5\" style='border-collapse: collapse' 'boarder-style: double'>";
	for ($row=1; $row <= 100; $row++) 
        { 
            echo "<tr> \n";
            for ($column = 1; $column <= 100; $column++) 
            { 
               $multiplication = $column * $row;
               echo "<td>$multiplication</td> \n";
            }
                echo "</tr>";
		}
		echo "</table>";
?>