<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Item</title>
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
	<center><img src="http://peyfurniture.000webhostapp.com/cv_gemilang.png" width="100%" height="50%"></center>
<hr>
<center><h1>LAPORAN DATA ITEM</h1></center>
<br/>
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Item</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Gambar</th>
			<th>Deskripsi</th>
		</tr>
	</thead>
	<tbody>
		<center><?php
		$no = 1;
		foreach ($t_items as $b) {
		?></center>
		<tr>
			<td><center><?php echo $no++; ?></center></td>
		
			<td><center><?php echo $b->nama_item; ?></center></td>
			<td><center><?php echo $b->harga; ?></center></td>
			<td><center><?php echo $b->berat; ?></center></td>	
			<td><center><img src="<?php echo base_url().'/assets/upload/'.$b->gambar; ?>" widht="80" height="80"o-oo alt="gambar tidak ada"></center></td>
				<td><center><?php echo $b->deskripsi; ?></center></td>	
			
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
