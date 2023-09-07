<?php
  include 'koneksi.php';
  $data = query("SELECT * FROM tb_monitoring")[0];

?> 

<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body >
		<table border=5 width=50% align="center">
        <tr >
		<td bgcolor=grey colspan="5" align="center"><font color=white size=20>DASHBOARD MONITORING</td>
		</tr>
		
		<tr bgcolor=yellow>
			<td><h1 >NAMA DEVICE</h1></td>
			<td><h1 >WAKTU</h1></td>
			<td><h1 >SENSOR 1</h1></td>
			<td><h1 >SENSOR 2</h1></td>
			<td><h1 >SENSOR 3</h1></td>
		</tr>
		<tr>
			<td><h1 class="mb-1"><?=$data["namadevice"];?></h1></td>
			<td><h1 class="mb-1"><?=$data["waktu"];?></h1></td>
			<td><h1 class="mb-1"><?=$data["sensor1"];?></h1></td>
			<td><h1 class="mb-1"><?=$data["sensor2"];?></h1></td>
			<td><h1 class="mb-1"><?=$data["sensor3"];?></h1></td>
		</tr>
		
		</table>


</body>
</html>


