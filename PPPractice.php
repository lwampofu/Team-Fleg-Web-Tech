<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="Prac.js"></script>
</head>
<body>
	<h1>WELLCOME</h1>
	<hr />
	<form onsubmit="return PrintInfo()" action="emma.php" method="GET">
		<fieldset>
		NAME:<input type="text" name="USERNAME"  id="User"><br >
		<br >
		Email : <input type="text" name="MAIL"  id="EMAIL"><br >
		<br >
		WHAT IS YOUR FAVORITE MOVIE?<select id="MOVIE">
			<option>AVENGERS</option>
			<option>X-MEN</option>
		</select><br />
		<br />
		<input type="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>