<?php 
   
   require "koneksi.php";

   $ambilnamadevice	= $_GET["namadevice"];
   $sensor1		 	= $_GET["sensor1"];
   $sensor2  	 	= $_GET["sensor2"];
   $sensor3  	 	= $_GET["sensor3"];
   date_default_timezone_set("Asia/Jakarta");
   $tgl				= date("Y-m-d H:i:s");

   	  
	   	 	//UPDATE DATA REALTIME PADA TABEL tb_monitoring
	   	  	 $sql      = "UPDATE tb_monitoring SET 
	   	  	              waktu	= '$tgl',namadevice	= '$ambilnamadevice',
						  sensor1	= '$sensor1', sensor2	= '$sensor2', sensor3	= '$sensor3'";
	   	  	 $dbconnect->query($sql);
				  
		    //INSERT DATA REALTIME PADA TABEL tb_save  	 
			 $sqlsave = "INSERT INTO tb_save (waktu, namadevice,sensor1,sensor2,sensor3)
			 VALUES ('" . $tgl . "', '" . $ambilnamadevice . "', '" . $sensor1 . "', '" . $sensor2 . "', '" . $sensor3 . "')";
			 $dbconnect->query($sqlsave);	 

		//MENJADIKAN JSON DATA
		$response = query("SELECT * FROM tb_monitoring,tb_control")[0];
		//$response = query("SELECT * FROM tb_datarfid,tb_monitoring WHERE tb_datarfid.rfid='$ambilrfid'" )[0];
      	$result = json_encode($response);
     	echo $result;
 ?>