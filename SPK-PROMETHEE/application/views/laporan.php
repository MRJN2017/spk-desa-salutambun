<!DOCTYPE html>
<html>

<head>
	<title>Sistem Pendukung Keputusan Metode PROMETHEE</title>
</head>
<style>
	table {
		border-collapse: collapse;
	}

	table,
	th,
	td {
		border: 1px solid black;
	}
</style>

<body>
	<h4>Hasil Akhir Perankingan</h4>
	<table border="1" width="100%">
		<thead>
			<tr align="center">
				<th>Kode Alternatif</th>
				<th>Usulan RKP</th>
				<th>Net Flow</th>
				<th width="15%">Ranking</th>
			</tr>
		</thead>
		<tbody>
		<span>
						<div class="font-weight-bold">Keterangan Kode Alternatif:</div>
						<div>
							Penyelenggaraan (P)
						</div>
						<div>
							Pembangunan Desa (PD)
						</div>
						<div>
							Pembinaan Kemasyarakatan (PK)
						</div>
						<div>
							Pemberdayaan Masyarakat (PM)
						</div>
						<div>
							Penanggulangan Bencana (PB)
						</div>
					</span>
					<br>
			<?php
			$no = 1;
			foreach ($hasil as $keys) : ?>
				<tr align="center">
					<td align="center">
						<?php
						$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
						echo $nama_alternatif['kode_alternatif'];
						?>
					</td>
					<td align="left">
						<?php
						$nama_alternatif = $this->Perhitungan_model->get_hasil_alternatif($keys->id_alternatif);
						echo $nama_alternatif['nama'];
						?>
					</td>
					<td><?= $keys->nilai ?></td>
					<td><?= $no; ?></td>
				</tr>
			<?php
				$no++;
			endforeach ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>