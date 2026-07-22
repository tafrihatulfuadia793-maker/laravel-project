<?php

include(app_path('koneksi_uas.php'));

$id = $_GET['id'];

$query = mysqli_query($conn,
"DELETE FROM pendaftaran_baru WHERE id='$id'");

if($query){
    header("Location: /data");
    exit;
}else{
    echo "Data gagal dihapus";
}

?>