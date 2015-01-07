<?php
include("fitnes_db_connect.php");

$halls_options_string = "";

		$fit_hall_list_result = mysql_query("SELECT * FROM fit_hall_list");
		
		if (mysql_num_rows($fit_hall_list_result) > 0)
		{
            while ($fit_hall = mysql_fetch_assoc($fit_hall_list_result)) {
                
                $halls_options_string .= '<tr><td class="cell_A">'.$fit_hall['fit_hall_list_ID'].'</td><td class="cell_B"><a href="clients_list.php?hall='.$fit_hall['fit_hall_list_ID'].'">'.$fit_hall['fit_hall_list_name'].'</a></td><td class="cell_C">'.$fit_hall['fit_hall_list_area']." кв. м".'</td></tr>';
                //$halls_options_string .= "<option value='".$fit_hall['fit_hall_list_ID']."'>".$fit_hall['fit_hall_list_name']."</option>";
                
            }
        }

include ("common/header.html");
	
	echo 'Fitnes halls list ('.mysql_num_rows($fit_hall_list_result).')';

	echo '<table class="table_halls">
	<tr class="caption"><td class="cell_A">#</td><td class="cell_B">ОName</td><td class="cell_C">area</td></tr>
	'.$halls_options_string."</table>";
	 
include ("common/footer.html");
?>
