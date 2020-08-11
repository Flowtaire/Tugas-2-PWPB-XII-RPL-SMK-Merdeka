<?php
$nama_buah = 'Mangga';
$keterangan = ' Masuk Kedalam Kategori';
switch ($nama_buah)
{
  case 'Lemon' :
    $kategori_buah = $keterangan.' Buah Asam';
    break;
  case 'Mangga' :
    $kategori_buah = $keterangan.' Buah Manis';
    break;
  default:
    $kategori_buah = ' Tidak Termasuk kategori';
}
echo 'Buah '.$nama_buah.$kategori_buah;
?>