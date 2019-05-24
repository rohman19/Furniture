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
</style>
	<center><img src="http://peyfurniture.000webhostapp.com/cv_gemilang.png" width="100%" height="50%"></center>
<hr>
<center><h1>LAPORAN DATA USER</h1></center>
<br/>
<table class="table-data">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jenis Kelamin</th>
			<th>No Telepon</th>
			<th>Alamat</th>
		</tr>
	</thead>
	<tbody>
		<center><?php
		$no = 1;
		foreach ($t_users as $b) {
		?></center>
		<tr>
			<td><center><?php echo $no++; ?></center></td>
		
			<td><center><?php echo $b->fullname; ?></center></td>
			<td><center><?php echo $b->email; ?></center></td>
			<td><center><?php echo $b->jk; ?></center></td>	
		
				<td><center><?php echo $b->telp; ?></center></td>
				<td><center><?php echo $b->alamat; ?></center></td>	
			
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
