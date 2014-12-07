<!DOCTYPE html>
<html>
	<head>
		<title>film search</title>
		<meta charset="utf-8"/>
		<style>
			
			.frame
				{
					width:400px;
					height:300px;
					background:#F7A360;
					padding-top:30px;
					padding-left:30px;
					color:#F4DAC5;
				}
			
			.film_name
				{
					font-family:verdana;
					font-weight:bold;
				}
			
			.film_name_span
				{
					margin:18px;
				}
			
			.actor
				{
					font-family:verdana;
					font-weight:bold;
				}
			
			.actor_span
				{
					margin:10px;
				}
			
			.genre
				{
					font-family:verdana;
					font-weight:bold;
				}	
			
			.genre_span
				{
					margin:10px;
					padding-left:18px;
				}
			
			div
				{
				 margin:10px;
				}
				
			.buttons
				{
				padding-left:168px;	
				}
			
		</style>
	</head>

	<body>
		<div class="frame">
			
			<form action="film_search1.php" method="get">

				<div class="film_name">
					<span class="film_name_span">Име на филм</span>
					<input type="text" name="film_name" />
				</div><br>
				
				<div class="actor">
					<span class="actor_span">Избери актьор</span>
						<select name="actor">
					    	<option value="Bashar_Rahal">Башар Рахал</option>
					    	<option value="Asen_Blatechki">Асен Блатечки</option>
					    	<option value="Yavor_Baharov">Явор Бахаров</option>
						    <option value="Yana_Marinova">Яна Маринова</option>
						    <option value="Stoyanka_Mutafova">Стоянка Мутафова</option>
						    <option value="Tatyana_Lolova">Татяна Лолова</option>
						</select>
				</div><br>
				
				<div class="genre">
					<span class="genre_span">Избери жанр</span>
						<select name="genre" multiple="yes">
					    	<option value="Action">Екшън</option>
					    	<option value="Comedy">Комедия</option>
					    	<option value="Turkish Soap Opera">Турски сериал</option>
						    <option value="Drama">Драма</option>
						    <option value="Tradegy">Ужаси</option>
						    <option value="Soap_Opera">Сапунена опера</option>
						</select>
				</div><br>
							
				<div class="buttons">
					<input type="reset" value="Изчисти" />
					<input type="submit" value="Търси" />
				</div>
		</form>
		</div>
	</body>
</html>
