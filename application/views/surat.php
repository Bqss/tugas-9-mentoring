<style>
	* {
		font-family: 'Times New Roman', Times, serif;
	}
	.logo {
		width: 150px;
		height: 150px;
	}

	.instance_name {
		text-align: center;
		display: block;
		font-size: 1.5rem;
	}

	.village_name {
		text-align: center;
		display: block;
		font-weight: 700;
		font-size: 1.5rem;
		margin-top: .3rem;
	}

	.etc {
		text-align: center;
		margin-top: .3rem;
	}

	

	.line {
		display: block;
		width: 100%;
		height: 4px;
		background: #000;
	}
</style>
<table>
	<tr>
		<td style="padding:1rem;">
			<img src="<?= $logo ?>" alt="" class="logo">
		</td>
		<td>
			<span class="instance_name"><?= strtoupper($nama_lembaga) ?></span>
			<span class="village_name" ><?= strtoupper($nama_desa) ?></span>
			<p class="etc">Alamat : <?= $alamat ?> Email: <?= $email ?> Kode Pos: <?= $kode_pos ?> Telp/Hp. <?= $telepon ?> Website: <?= $website ?></p>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<span class="line"></span>
		</td>
	</tr>
</table>
