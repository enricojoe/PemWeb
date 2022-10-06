<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cobacss.css">
	<title>Film Inputter</title>
</head>
<body>
	<h1>Penampil Poster Film</h1>
	
	<div class="ini-form">
		<fieldset>
			<h2>Data Film</h2>
			<form action="hasil.php" method="get" id="data-film">
				<div class="form-isi">
					<label for="nama">Nama penginput: </label>
					<input type="text" name="nama" id="nama" required>
				</div>
				<div class="form-isi">
					<label for="nama">Judul Film: </label>
					<input type="text" name="judul" id="judul" required>
				</div>
				<div class="form-isi">
					<label for="nama">Tahun: </label>
					<input type="text" name="tahun" id="tahun" required>
				</div>
				<div class="form-isi">
					<label for="nama">Direktor: </label>
					<input type="text" name="direct" id="direct" required>
				</div>
				<div class="form-isi">
					<label for="nama">Deskripsi Singkat: </label>
					<textarea type="text" name="desc" id="desc" rows="5" required></textarea>
				</div>
				<div class="form-isi">
					<label for="nama">Link Poster Film: </label>
					<input type="text" name="link" id="link" required>
				</div>
				<div class="form-isi">
					<input type="submit">
				</div>
			</form>
		</fieldset>
	</div>
</body>
</html>