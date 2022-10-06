<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="cobacss.css">
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<title><?php echo $_GET['judul'];?></title>
</head>
<body>
	<div class="ini-poster">
		<table id="ini-tabel-poster">
			<tr>
				<td align="center">
					<img src="<?php echo $_GET['link'];?>" width="405px" >
				</td>
			</tr>
			<tr>
				<td>
					<h2><?php echo $_GET['judul']," (",$_GET['tahun'],")";?></h2>
					<p><?php echo $_GET['desc'];?></p>
				</td>
			</tr>
			<tr>
				<td>
					<p>Directed by: <b><?php echo $_GET['direct'];?></b></p>
				</td>
			</tr>
		</table>
		<p>By: <?php echo $_GET['nama'];?></p>
	</div>
</body>
</html>