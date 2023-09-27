<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FSWD_PDF</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
	<style>
		* {
			font-family: 'PT Sans', sans-serif;
			padding: 0;
			box-sizing: border-box;
			margin: 0;
		}

		table {
			width: 100%;
			height: 63.5%;
		}

		.outer-table {
			padding: 50px 55px auto 41px;
			background: skyblue;
		}

		.identity td {
			line-height: 20px;
			vertical-align: top;
			padding-bottom: .2rem;
			font-size: 16px;
		}

		.profile_picture {
			width: 127px;
			height: 169px;
			object-fit: cover;
		}

		.title {
			text-align: center;
			font-size: 18px;
			line-height: 23.3px;
		}
	</style>
</head>

<body>
	<table class="outer-table">
		<tr>
			<td colspan="4" style="padding-bottom: 33px;">
				<h1 class="title">Provinsi Jawa Timur <br>Kota Malang</h1>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="vertical-align: top;">
				<table class="identity">
					<tr>
						<td>Nama</td>
						<td colspan="3"> : <?= $identity->name ?></td>
					</tr>
					<tr>
						<td>Tempat/Tgl Lahir</td>
						<td colspan="3"> : <?= $identity->place_of_birth . ', ' . $identity->date_birth ?></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td colspan="3"> : <?= $identity->address ?></td>
					</tr>
				</table>
			</td>
			<td style="text-align: right; vertical-align: top;">
				<img src="<?= $profile_picture ?>" class="profile_picture" alt="">
			</td>
		</tr>
	</table>

</body>

</html>
