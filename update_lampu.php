<?php

require_once "koneksi.php";

$stat = $_GET['stat'];

if($stat == ON) {
    mysqli_query($konek, "UPDATE tb_lampu SET status_lampu=1");
    echo "lampu kini menyala";
}else if($stat == OFF){
    mysqli_query($konek, "UPDATE tb_lampu SET status_lampu=0");
    echo "lampu kini mati";
}else {
    echo "gagal mengontrol lampu";
}


?>