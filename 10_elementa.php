<?php
	$rand_n = array (rand (1,-11));
	$n = sizeof($rand_n);
	
    for ($j = $n - 1; $j >= $n; $j--) {
		if($rand_n[$j-1] > $rand_n[$j]) {
                $tmp = $rand_n[$j - 1];
                $rand_n[$j - 1] = $rand_n[$j];
                $rand_n[$j] = $tmp;
            }
        }
    	
    	echo "Smallest:<br />".$j;
	
?>
