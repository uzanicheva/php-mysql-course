<?php
include("fitnes_db_connect.php");

if(isset($_GET['hall']))$f_hall_id=$_GET['hall'];else $f_hall_id=1;

$hall = mysql_query("SELECT * FROM fit_hall_list WHERE fit_hall_list_ID = ".$f_hall_id);
$hall_data = mysql_fetch_assoc($hall);

$client_options_string = "";


		$client_result = mysql_query("SELECT * FROM clients WHERE fit_hall_list_ID = ".$f_hall_id);
		
		if (mysql_num_rows($client_result) > 0)
		{
            while ($client = mysql_fetch_assoc($client_result)) {
                
                $class='';
                if(strtotime($client['clientCardExpDate'])<time())$class="error";
                $client_options_string .= '<tr class="row'.$class.'"><td class="cell_A">'.$client['clientID'].'</td><td class="cell_B">'.$client['clientName'].''.'</td><td class="cell_C">'.$client['clientCardExpDate'].'</td></tr>';
               
            }
        }

include ("common/header.html");
	
echo 'Users for fitness '.$hall_data['fit_hall_list_name'].' ('.mysql_num_rows($client_result).')<br>';
echo '<a href="fitnes_list.php">Back to list >></a>';

	echo '<table class="table_client">
	<tr class="caption"><td class="cell_A">#</td><td class="cell_B">ОName</td><td class="cell_C">area</td></tr>
	'.$client_options_string."</table>
	<input type='button' value='Add new Client [+]' onClick='document.location=\"add_client.php\"'>
	";
	 
include ("common/footer.html");
?>
