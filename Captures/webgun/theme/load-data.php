<?php
  include 'koneksi.php';
  $data = query("SELECT * FROM tb_monitoring")[0];

?> 

<!DOCTYPE html>
<html>
<head>
 <title></title>
 <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body >
<div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Ultrasonik</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?=$data["sensor1"];?> Cm</h1>
                                 
                                    <p class="text-white mb-0"><?=$data["waktu"];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-rss"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">LDR</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?=$data["sensor2"];?> lux</h2>
                                    <p class="text-white mb-0"><?=$data["waktu"];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Flame</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?=$data["sensor3"];?> %</h2>
                                    <p class="text-white mb-0"><?=$data["waktu"];?></p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-fire"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Comming soon</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
             </div>


 </div>


             

</body>
</html>


