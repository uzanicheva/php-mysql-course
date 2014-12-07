<!DOCTYPE html>
<html>
	<head>
	
	<title>Рожден ден</title>
	
	<meta charset="utf-8">
	
	<style>
	.frame
		{
		width:450px;
		height:225px;
		background:#A5F291;
		color:#4FBA32;	
		}	
	
	div
		{
		margin:10px;
		padding:10px;	
		}
			
	</style>
	
	</head>
	
	<body>
		<div class="frame">	
			<form action="birthday1.php" method="get">
			
				<div>
					<span>Дата на раждане</span>
					<select name="date">
						<option value="1">01</option>
						<option value="2">02</option>
						<option value="3">03</option>
						<option value="4">04</option>
						<option value="5">05</option>
						<option value="6">06</option>
						<option value="7">07</option>
						<option value="8">08</option>
						<option value="9">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
				</div>
				
				<div>
					<span>Месец на раждане</span>
						<select name="month">
							<option value="Jan">01</option>
							<option value="Feb">02</option>
							<option value="Mar">03</option>
							<option value="Apr">04</option>
							<option value="May">05</option>
							<option value="June">06</option>
							<option value="July">07</option>
							<option value="Aug">08</option>
							<option value="Sep">09</option>
							<option value="Oct">10</option>
							<option value="Nov">11</option>
							<option value="Dec">12</option>
						</select>
				</div>
				
				<div>
					<span>Година на раждане</span>
					<input type="text" name="year">
				</div>
					
				<div>	
					<input type="reset" value="Изчисти" />
					<input type="submit" value="На колко години съм?" />
				</div>
				
			</form>
		</div>
	</body>
</html>
