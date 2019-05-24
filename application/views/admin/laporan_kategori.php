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
<center><img src="https://peyfurniture.000webhostapp.com/cv_gemilang.png" width="100%" height="50%"></center>
<center>____________________________________________________________________________________________</center>
<center><h1>LAPORAN DATA KATEGORI</h1></center>
<br/>
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th>URL</th>
		</tr>
	</thead>
	<tbody>
		<center><?php
		$no = 1;
		foreach ($t_kategori as $b) {
		?></center>
		<tr>
			<td><center><?php echo $no++; ?></center></td>
		
			<td><center><?php echo $b->kategori; ?></center></td>
			<td><center><?php echo $b->url; ?></center></td>
			
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
