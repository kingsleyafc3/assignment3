<?php

echo '<table width="300px" cellpadding= "1px" cellspacing="1px" border="1px">';
for ($i = 0;$i < 8;$i++)  {
	echo '<tr>';
	for ($j = 0;$j < 8;$j++) {
		if ($i % 2 ==0) {
			$checkerboard = ($i+$j)%2 ==1 ?'red':'black';
		}
		else{
			$checkerboard = ($i+$j)%2 >=1?'red':'black';
		}		
		echo '<td width="35px" height="35px" bgcolor="'.$checkerboard.'"/>';
	}

	echo '</tr>';
}
echo '</table>';
?>