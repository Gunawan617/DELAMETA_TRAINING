<?php
require "koneksidb.php";

//Cheat Code
error_reporting(0);

$data = query("SELECT * FROM tb_monitoring")[0];
$Getdaftar =  query("SELECT * FROM tb_monitoring,tb_daftarrfid WHERE tb_daftarrfid.rfid=tb_monitoring.rfid")[0];

$cek = $Getdaftar["nama"];

if ($cek == null) {
	$id 		= "TIDAK TERDAFTAR";
	$rfid 		= "TIDAK TERDAFTAR";
	$nama 		= "TIDAK TERDAFTAR";
	$alamat 	= "TIDAK TERDAFTAR";
	$telepon 	= "TIDAK TERDAFTAR";
	$saldo 		= "TIDAK TERDAFTAR";
} else {
	$id 		= $Getdaftar["id"];
	$rfid 		= $Getdaftar["rfid"];
	$nama 		= $Getdaftar["nama"];
	$alamat 	= $Getdaftar["alamat"];
	$telepon 	= $Getdaftar["telepon"];
	$saldo 		= $Getdaftar["saldo"];
}

?>


<!DOCTYPE html>
<html>

<head>
	<title> </title>
</head>

<body>

	<div class="row">
		<div class="col-xl-6 col-lg-3 col-md-6 col-sm-12 col-12">
			<div class="card border-3 border-top border-top-primary">
				<div class="card-body">
					<h2 class="text-muted">MONITORING</h2>
					<div class="metric-value d-inline-block">
						<h1 class="mb-1"><?= $data["tanggal"]; ?></h1>
						<h1 class="mb-1"><?= $data["rfid"]; ?></h1>
						<h1 class="mb-1"><?= $data["namatol"]; ?></h1>
						<h1 class="mb-1"><?= $data["status"]; ?></h1>
					</div>
					<div class="metric-label d-inline-block float-right text-success font-weight-bold">
						<span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">update</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-xl-6 col-lg-3 col-md-6 col-sm-12 col-12">
			<div class="card border-3 border-top border-top-primary">
				<div class="card-body">
					<h2 class="text-muted">DAFTAR RFID</h2>
					<div class="metric-value d-inline-block">
						<h1 class="mb-1">ID : <?= $id; ?></h1>
						<h1 class="mb-1">RFID : <?= $rfid; ?></h1>
						<h1 class="mb-1">NAMA : <?= $nama; ?></h1>
						<h1 class="mb-1">ALAMAT : <?= $alamat; ?></h1>
						<h1 class="mb-1">TELEPON: <?= $telepon; ?></h1>
						<h1 class="mb-1">SALDO : <?= $saldo; ?></h1>
					</div>
					<div class="metric-label d-inline-block float-right text-success font-weight-bold">
						<span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">update</span>
					</div>
				</div>
			</div>
		</div>
	</div>




</body>

</html>