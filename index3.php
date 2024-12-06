
	<?php
	$hostitel = $_SERVER['HTTP_HOST'];
		echo $hostitel;

		if ($hostitel === 'domena1.cz') {
    		echo "Toto je stránka pro doménu domena1.cz";
			} elseif ($hostitel === 'domena2.cz') {
    		echo "Toto je stránka pro doménu domena2.cz";
		} else {
    		echo "Tato doména není podporována.";
		}
	?>
