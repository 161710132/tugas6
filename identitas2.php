<?php 

require_once 'identitas.php';

$manusia1 = new manusia;
echo"<h3> Data Kelas XI RPL 1 </h3>";
$manusia1-> set_nama('Ica Cahyani');
echo "Nama         : ".$manusia1-> get_nama(). '<br>';
$manusia1->set_tempatlahir('Bandung');
echo "Tempat lahir : ".$manusia1-> get_tempatlahir(). '<br>';
?> 