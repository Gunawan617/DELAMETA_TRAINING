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
<div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Temperature Sensor</p>
                      <p class="card-title"><?=$data["sensor1"];?> C<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?=$data["waktu"];?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Humidity</p>
                      <p class="card-title"><?=$data["sensor2"];?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  <?=$data["waktu"];?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">LDR</p>
                      <p class="card-title"><?=$data["sensor3"];?>Lux<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  <?=$data["waktu"];?>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Flame</p>
                      <p class="card-title"><?=$data["sensor3"];?>%<p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  <?=$data["waktu"];?>
                </div>
              </div>
            </div>
          </div>
        </div>
		<div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">TABEL REALTIME 10 DATA</h5>
                <p class="card-category">24 Hours performance</p>
              </div>
              <div class="card-body ">
               <!-- ini untuk realtime tabel yang 10 baris -->
               <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead>
                   <tr>
					<th>ID</th>
					<th>Waktu</th>
					<th>Nama Device</th>
					<th>Sensor ULTRASONIC</th>
					<th>Sensor LDR</th>
					<th>Sensor Flame</th>
                    </tr>
                  </thead>
                  <tbody>
										<?php
											$datatampil = mysqli_query($dbconnect, "SELECT * from tb_save ORDER BY id DESC LIMIT 10");
											$id=1;
											foreach ($datatampil as $row){
												echo "<tr class= bg-white >
														<td>$id</td>
														<td>".$row['waktu']."</td>
														<td>".$row['namadevice']."</td>
														<td>".$row['sensor1']."</td>
														<td>".$row['sensor2']."</td>
														<td>".$row['sensor3']."</td>
														</tr>";
													$id++;
												}
											$dbconnect->close();
											?>
									</tbody>
                </table>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
              </div>
            </div>
          </div>
        </div>

</body>
</html>


