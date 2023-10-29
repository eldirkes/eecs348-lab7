<?php
	$number = $_POST['number'];

	echo "<p>Multiplication table for 1 to $number:</p>";
	echo "<table border='1'>";
	echo "<tr><th>&nbsp;</th>";

	for ($i = 1; $i <= $number; $i++) {
		echo "<th>$i</th>";
	}

	echo "</tr>";

	for ($i = 1; $i <= $number; $i++) {
		echo "<tr><th>$i</th>";

		for ($j = 1; $j <= $number; $j++) {
			$result = $i * $j;
			echo "<td>$result</td>";
		}

		echo "</tr>";
	}

	echo "</table>";
?>