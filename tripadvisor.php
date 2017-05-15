<?php
//$rows = array("Aviva by Kameel", "Bone’s Restaurant", "Umi Sushi Buckhead", "Fandangles","Capital Grille","Canoe","One Flew South","Fox Bros. BBQ ","South City Kitchen Midtown ")


$restaurant = array(
	array("Chama Gaucha", "40.50"),
	array("Aviva by Kameel","15.00"),
  	array("Bone’s Restaurant","65.00"),
  	array("Umi Sushi Buckhead", "40.50"),
  	array("Fandangles","30.00"),
	array("Capital Grille","60.50"),
	array("Canoe","35.50"),
	array("One Flew South","21.00"),
	array("Fox Bros. BBQ ","15.00"),
	array("South City Kitchen Midtown ","29.00")
  );


echo "<div style='text-align:center'><h1>Top 10 best Restaurants in Atlanta</h1></div>";
echo "<table width='600' cellpadding='5' cellspacing='0' border='4' align='center'>";
echo "<th>Restaurant</th>";
echo "<th>Cost ($$)</th>";
echo "<tr><td>" .$restaurant[0][0] . "</td><td>" .$restaurant[0][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[1][0] . "</td><td>" .$restaurant[1][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[2][0] . "</td><td>" .$restaurant[2][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[3][0] . "</td><td>" .$restaurant[3][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[4][0] . "</td><td>" .$restaurant[4][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[5][0] . "</td><td>" .$restaurant[5][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[6][0] . "</td><td>" .$restaurant[6][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[7][0] . "</td><td>" .$restaurant[7][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[8][0] . "</td><td>" .$restaurant[8][1] ."</td></tr>";
echo "<tr><td>" .$restaurant[9][0] . "</td><td>" .$restaurant[9][1] ."</td></tr>";
echo "</table>";

echo "<div style='text-align:center'><h1>Top 10 best Restaurants in Atlanta by price</h1></div>";
$diners = array("Chama Gaucha", "Aviva by Kameel", "Bone’s Restaurant", "Umi Sushi Buckhead", "Fandangles","Capital Grille","Canoe","One Flew South","Fox Bros. BBQ ","South City Kitchen Midtown ");
$prices = array("$40.50"," $15.00","$65.00","$40.50","$30.00","$60.50","$35.50","$21.00","$15.00","$29.00");
array_multisort($prices, $diners);

echo "<table width='600' cellpadding='5' cellspacing='0' border='4' align='center'>";
echo "<th>Restaurant</th>";
echo "<th>Cost ($$)</th>";
echo "<tr><td>" .$diners[0] . "</td><td>" .$prices[0] ."</td></tr>";
echo "<tr><td>" .$diners[1] . "</td><td>" .$prices[1] ."</td></tr>";
echo "<tr><td>" .$diners[2] . "</td><td>" .$prices[2] ."</td></tr>";
echo "<tr><td>" .$diners[3] . "</td><td>" .$prices[3] ."</td></tr>";
echo "<tr><td>" .$diners[4] . "</td><td>" .$prices[4] ."</td></tr>";
echo "<tr><td>" .$diners[5] . "</td><td>" .$prices[5] ."</td></tr>";
echo "<tr><td>" .$diners[6] . "</td><td>" .$prices[6] ."</td></tr>";
echo "<tr><td>" .$diners[7] . "</td><td>" .$prices[7] ."</td></tr>";
echo "<tr><td>" .$diners[8] . "</td><td>" .$prices[8] ."</td></tr>";
echo "<tr><td>" .$diners[9] . "</td><td>" .$prices[9] ."</td></tr>";
echo "</table>";

echo "<div style='text-align:center'><h1>Top 10 best Restaurants in Atlanta by name</h1></div>";
array_multisort($diners, $prices);

echo "<table width='600' cellpadding='5' cellspacing='0' border='4' align='center'>";
echo "<th>Restaurant</th>";
echo "<th>Cost ($$)</th>";
echo "<tr><td>" .$diners[0] . "</td><td>" .$prices[0] ."</td></tr>";
echo "<tr><td>" .$diners[1] . "</td><td>" .$prices[1] ."</td></tr>";
echo "<tr><td>" .$diners[2] . "</td><td>" .$prices[2] ."</td></tr>";
echo "<tr><td>" .$diners[3] . "</td><td>" .$prices[3] ."</td></tr>";
echo "<tr><td>" .$diners[4] . "</td><td>" .$prices[4] ."</td></tr>";
echo "<tr><td>" .$diners[5] . "</td><td>" .$prices[5] ."</td></tr>";
echo "<tr><td>" .$diners[6] . "</td><td>" .$prices[6] ."</td></tr>";
echo "<tr><td>" .$diners[7] . "</td><td>" .$prices[7] ."</td></tr>";
echo "<tr><td>" .$diners[8] . "</td><td>" .$prices[8] ."</td></tr>";
echo "<tr><td>" .$diners[9] . "</td><td>" .$prices[9] ."</td></tr>";
echo "</table>";
?>