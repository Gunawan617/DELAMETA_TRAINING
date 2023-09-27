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
             <!-- data table -->
             <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
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
                            </div>
                        </div>                        
                    </div>
                </div>


             

</body>
</html>


