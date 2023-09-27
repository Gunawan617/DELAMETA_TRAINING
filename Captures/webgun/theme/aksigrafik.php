<?php
  include 'koneksi.php';
//  $datax = query("SELECT * FROM tb_save ORDER BY waktu DESC LIMIT 10");

// menghubungkan ke database
$conn = mysqli_connect("localhost", "root", "", "db_iot");

// query untuk mendapatkan data sensor
$sql = "SELECT * FROM tb_save ORDER BY waktu DESC LIMIT 5";
$result = mysqli_query($conn, $sql);

// inisialisasi array untuk data grafik
$labels = array();
$values = array();

// memasukkan data sensor ke dalam array
while ($row = mysqli_fetch_array($result)) {
    // $labels[] = $row['waktu'];
    $waktuLengkap = $row['waktu']; // Contoh format: "YYYY-MM-DD HH:MM:SS"
    // Pisahkan tanggal dan waktu
    $pecah = explode(' ', $waktuLengkap);
    $waktuHanya = $pecah[1]; // Bagian waktu setelah spasi

    // Sekarang, Anda dapat mengambil hanya jam, menit, dan detik
    $jamMenitDetik = substr($waktuHanya, 0, 8); // Mengambil 8 karakter pertama (HH:MM:SS)
    
    $labels[]  = $jamMenitDetik;
    $values1[] = $row['sensor1'];
    $values2[] = $row['sensor2'];
    $values3[] = $row['sensor3'];
}

// Menutup koneksi database
mysqli_close($conn);

// Mengembalikan data dalam format JSON
$data = [
    'labels' => $labels,
    'values1' => $values1,
    'values2' => $values2,
    'values3' => $values3
];

header('Content-Type: application/json');
echo json_encode($data);
?>
