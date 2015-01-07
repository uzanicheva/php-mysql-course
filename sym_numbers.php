<?
$sym_numbers = array ();

for ($i=0 ; $i<1000; $i++) {
		
		$number_elements = $i."";
		
		if ($number_elements[0] == $number_elements[strlen($number_elements)-1]){$sym_numbers[]=$i;}
			
	}

	echo implode(",", $sym_numbers);

?>
