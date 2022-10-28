<?php
require 'Pegawai.php';
// MEMBUAT OBJECT
$p1 = new Pegawai(19001, 'Ranti Gunardi', 'Kabag', 'Islam', 'Belum Menikah');
$p2 = new Pegawai(19002, 'Ratna Gunarta', 'Staff', 'Kristen', 'Belum Menikah');
$p3 = new Pegawai(19003, 'Reski Gurjali', 'Manager', 'Islam', 'Menikah');
$p4 = new Pegawai(19004, 'Retno Gunanti', 'Staff', 'Islam', 'Menikah');
$p5 = new Pegawai(19005, 'Restu Gursapu', 'Asisten', 'Hindu', 'Belum Menikah');

//CETAK
$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();
