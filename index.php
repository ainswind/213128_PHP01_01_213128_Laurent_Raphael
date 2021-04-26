
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="travels.php" method="post">
	<label>Nom</label><input type="text" name="nom">
	<label>Prénom</label><input type="text" name="prénom">
	<label>email</label><input type="email" name="email">
	<label>Téléphone</label><input type="tel" name="tel">
	<label> ville de départ :</label>
	<select name="ville" >
		<option value="choix"></option>
		<option value="Paris">Paris</option>
		<option value="Orléans">Orléans</option>
		<option value="Dublin">Dublin</option>
		<option value="Nice">Nice</option>
		<option value="Tours">Tours</option>
	</select>
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
</body>
</html>
