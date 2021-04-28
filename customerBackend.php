<?php
//access the global array called $_POST to get the values from the text fields
  //PHP stylesheet
  echo "<style>";
    echo "#head{text-align: center;}";
    echo "#pass{text-align: center;}";
    echo "#r {
      text-align: center;
      margin: 25%;
    }";
  echo "</style>";

  //variables
  $email = $_POST['email'];
  $pass  = $_POST['password'];
  $phone = $_POST['Smart Phone'];
  $headphone  = $_POST['headphone'];
  $charger = $_POST['charger'];

  // math variables
  $phoneTotal = 0;
  $headphoneTotal = 0;
  $chargerTotal = 0;
  $phoneCount = 350;
  $headphoneCount  = 50;
  $chargerCount = 20;
  $total      = 0;


  echo "<h1 id='head'>Welcome $email!</h1>";
  echo "<p id='pass'>This is your password: $pass</p>";
	echo "<div id='r'>";
		echo "<table>";
			echo "<tr>";
				echo "<th></th>";
				echo "<th>Quantity</th>";
				echo "<th>Cost Per Item</th>";
				echo "<th>Sub total</th>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Smart Phones</th>";
				echo "<td>$phone</td>";
				echo "<td>350$</td>";
				$phoneTotal = $phone * $phoneCount;
				echo "<td>$phoneTotal</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Headphones</th>";
				echo "<td>$headphone</td>";
				echo "<td>50$</td>";
				$headphoneTotal = $headphone * $headphoneCount;
				echo "<td>$headphoneTotal</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Charger</th>";
				echo "<td>$charger</td>";
				echo "<td>20$</td>";
				$chargerTotal = $charger * $chargerCount;
				echo "<td>$chargerTotal</td>";
			echo "</tr>";
			echo "<tr>";
				echo "<th>Total Cost</th>";
				$total = $phoneTotal + $headphoneTotal + $chargerTotal;
				echo "<td>$total</td>";
			echo "</tr>";
		echo "</table>";
	echo "</div>";


?>
