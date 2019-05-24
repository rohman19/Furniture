<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Transaksi</title>
</head>
<body>
	<style type="text/css">
	.table-data{
width: 100%;
border-collapse: collapse;
}
.table-data tr th,
.table-data tr td{
border : 1px solid black;
font-size: 16;
}
	</style>
	</style>
	<center><img src="http://peyfurniture.000webhostapp.com/cv_gemilang.png" width="100%" height="50%"></center>
<hr>
<center><h1>LAPORAN DATA TRANSAKSI</h1></center>
<br/>
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>
			<th>No Order</th>
			<th>Nama User</th>
			<th>Total</th>
			<th>Tujuan</th>
			<th>Kode Pos</th>
			<th>Kota</th>
			<th>Kurir</th>
			<th>Jenis Pelayanan</th>
			<th>Tanggal Pesan</th>
			<th>Batas Bayar</th>
			<th>Status Pembayaran</th>

		</tr>
	</thead>
	<tbody>
		<center><?php
		$no = 1;
		foreach ($t_order as $b) {
		?></center>
		<tr>
			<td><center><?php echo $no++; ?></center></td>

			<td><center><?php echo $b->id_order ?></center></td>
			<td><center><?php echo $b->fullname; ?></center></td>
			<td><center><?php echo $b->total; ?></center></td>
			<td><center><?php echo $b->tujuan; ?></center></td>	
			<td><center><?php echo $b->pos; ?></center></td>	
			<td><center><?php echo $b->kota; ?></center></td>
			<td><center><?php echo $b->kurir; ?></center></td>
			<td><center><?php echo $b->service; ?></center></td>	
			<td><center><?php echo $b->tgl_pesan; ?></center></td>
			<td><center><?php echo $b->bts_bayar; ?></center></td>
			<td><center><?php echo $b->status_byr; ?></center></td>		
			
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<pre>
	






















										Tangerang Selatan,<?php echo date('l,d-m-Y');?>

											Mengetahui,


												Direktur




											(__________________________)
</pre>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
