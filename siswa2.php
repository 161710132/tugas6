<?php

require_once 'siswa.php';

$data1 = new data;

echo"<h3> Data Kelas XI RPL 1 </h3>";
$data1-> set_nama('Melan Noerjanati');
echo "Nama         : ".$data1-> get_nama(). '<br>';
$data1->set_tempatlahir('Bandung');
echo "Tempat lahir : ".$data1-> get_tempatlahir(). '<br>';
$data1->set_kelas('XI RPL 2');
echo "Kelas  :       ".$data1-> get_kelas(). '<br>';
?> 