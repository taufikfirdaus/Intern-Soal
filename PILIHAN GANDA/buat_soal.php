<html>
	<head>
		<title> Input soal </title>
	</head>
<body>
	<form method="post" action="input_soal2.php">
		Pertanyaan:<textarea name="soal"></textarea><br>
		Jawaban A :<input type="text" name="a"><br>
		Jawaban B :<input type="text" name="b"><br>
		Jawaban C :<input type="text" name="c"><br>
		Jawaban D :<input type="text" name="d"><br>
		<label>Kunci Jawaban :</label>
			<select name="knc_jawaban">
				<option value="a">A</option>
				<option value="b">B</option>
				<option value="c">C</option>
				<option value="d">D</option>
			</select><br>
		<input type="submit" value="INPUT">
	</form>
</body>
</html>