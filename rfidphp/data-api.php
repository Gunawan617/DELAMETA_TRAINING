<?php 
   error_reporting(0);
   require "koneksidb.php";

   $ambilrfid	 = $_GET["rfid"];
   $ambillokasi	 = $_GET["lokasi"];
   $tgl=date("Y-m-d H:i:s");

//   AMBIL NAMA TOLL RUBAH KE BAYAR
	$gettol = query("SELECT  * FROM tb_tol WHERE namatol='$ambillokasi'")[0];
	$harganya=$gettol['harga'];

	
	//AMBIL RESPON UNTUK RFID TERDAFTAR
	$response = query("SELECT * FROM tb_daftarrfid WHERE rfid='$ambilrfid'")[0];
	$cekrfid	= $response['rfid'];
	$saldoawal 	= $response['saldo'];
	
	if($cekrfid!=null and $saldoawal<$harganya){
		$ceksaldo="Saldo Kurang";
	}else if($cekrfid!=null and $saldoawal>=$harganya){
		$ceksaldo="Saldo Cukup";
	}else if ($cekrfid==null){
		$ceksaldo="Tidak Terdaftar";
	}

	//UPDATE DATA REALTIME PADA TABEL tb_monitoring
	$sql      = "UPDATE tb_monitoring SET 
				tanggal	= '$tgl',rfid	= '$ambilrfid',status	= '$ceksaldo',namatol='$ambillokasi'";
	$koneksi->query($sql);
		
	//INSERT DATA REALTIME PADA TABEL tb_save  	

	$sqlsave = "INSERT INTO tb_simpan (tanggal, rfid)
	VALUES ('" . $tgl . "', '" . $ambilrfid . "')";
	$koneksi->query($sqlsave);

		if($cekrfid==null){
			//KIRIM DATA DUMY KE ARDUINO JIKA REQUEST RFID TIDAK TERDAFTAR
			$datadumy=array('tanggal'=>'0','rfid'=>$ambilrfid,'status'=>'Tidak Terdaftar','id'=>'null','nama'=>'null','alamat'=>'null','telepon'=>'null','saldo'=>'null');
			$result = json_encode($datadumy); //MENJADIKAN JSON DATA
			echo $result;
		}else{
			if($saldoawal>=$harganya){
				$saldoahir=$saldoawal-$harganya;
				$sqlupdate   = "UPDATE tb_daftarrfid SET 
								saldo	= '$saldoahir' 
								WHERE tb_daftarrfid.rfid='$ambilrfid'";
				$koneksi->query($sqlupdate);
			}

			//MENGABIL DATA UNTUK DIJADIKAN JSON DAN DIKIRIM KE ARDUIO
			$response = query("SELECT * FROM tb_daftarrfid,tb_monitoring WHERE tb_daftarrfid.rfid='$ambilrfid'" )[0];
			$result = json_encode($response); //MENJADIKAN JSON DATA
			echo $result;
		}
      	

 ?>