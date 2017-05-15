<?php
function isBitten($fname) {
    if($fname<=1)
	{
		echo "Charlie ate my lunch!";
	}
	else
	{
		echo "Charlie did not eat my lunch";
	}
	
}

isBitten(rand(0,2));

?>
