<?php
include("fitnes_db_connect.php");

$client_id = -1;
$halls_options_string = "";

		$fit_hall_list_result = mysql_query("SELECT * FROM fit_hall_list");
		
		if (mysql_num_rows($fit_hall_list_result) > 0)
		{
            while ($fit_hall = mysql_fetch_assoc($fit_hall_list_result)) {
                
                //echo $fit_hall['fit_hall_list_name'].",".$fit_hall['fit_hall_list_area']."</br>";
                $halls_options_string .= "<option value='".$fit_hall['fit_hall_list_ID']."'>".$fit_hall['fit_hall_list_name']."</option>";
                
            }
        }

include ("common/header.html");

echo 'Add new client<br>';

echo "<form method='post'>";

echo('<input type="hidden" name="do_action" value="save"><br>');
echo('<input type="hidden" name="client_id" value="'.$client_id.'"><br>');

echo('Fitnes Hall: <select>'.$halls_options_string.'</select><br>');
echo('Client Name: <input type="text" name="client_name"><br>');
echo('Age: <input type="text" name="client_age"><br>');
echo('Exp. Date: <input type="text" name="exp_date"><br>');
echo "<input type='submit' value='Save Client'><br>";
echo "</form>";

	 
include ("common/footer.html");
?>
