<?php
require "koneksi.php";

//MENJADIKAN JSON DATA UNTUK BUTTON
$response = query("SELECT * FROM switches");
$result = json_encode($response);
echo $result;


?>