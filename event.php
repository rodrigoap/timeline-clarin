<html>
	<body>
		<form method="POST" action="saveEvent.php">
			Fecha:
			<input type="text" name="day" size="2" value=""/>
			<input type="text" name="month" size="2" value=""/>
			<input type="text" name="year" size="4" value=""/>
			<br>
			Titulo:
			<input type="text" name="title" size="120" value=""/>
			<br>
			Texto:
			<textarea name="text" rows="10" cols="50"></textarea>
			<br>
			<input type="submit"/>
		</form>
	</body>
</html>