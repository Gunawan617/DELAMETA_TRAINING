<?php
//  require "koneksi.php"
$connection = mysqli_connect("localhost", "root", "", "db_iot");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $switchId  = $_POST["id"];
    $newStatus = $_POST["status"];
    
    $updateQuery= "UPDATE  tb_control SET control$switchId = $newStatus"; 
     mysqli_query($connection, $updateQuery); 

    $updateQuery = "UPDATE switches SET status = $newStatus WHERE id = $switchId";
    mysqli_query($connection, $updateQuery);
                            
   
    
    echo json_encode(["message" => "Switch status updated successfully."]);
}
?>
