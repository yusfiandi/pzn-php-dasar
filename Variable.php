<?php

  // Variable
  // Variable adalah tempat menyimpan data.
  // sehingga bisa kita gunakan lagi di kode program SELANJUTNYA

  // PHP variable / Variable di PHP
  // Bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data

  // Variable PHP : $

  // Variable php tidak boleh mengandung SPASI / SPACE ???

  $nama = "Yusfiandi";
  $umur = 19;

  echo "Halo, Nama ku $nama";
  echo "\n";
  echo "Umur saya $umur";
  echo "\n\n";

  // Atau bisa juga
  
  echo "Halo, Nama ku ";
  echo $nama;
  echo "\n";
  echo "Umur saya ";
  echo $umur;
  echo "\n\n";

  // Variable variables
  
  // PHP memiliki variable variables, yaitu variable dari string value variable
  
  // Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas
  // Jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
  
  // Untuk membuat variable dari value variable kita bisa menggunakan $$ di ikuti dengan nama variablenya

  $namaKu = "Yusfi";
  $$namaKu = "Pede";

  // ATAU
  // $Yusfi = "Pede";

  echo "\$namaKu : ";
  echo $namaKu;
  echo "\n";
  echo "Yusfi : ";
  echo $Yusfi;
  echo "\n";
  echo "Yusfi juga : ";
  echo $Yusfi;
  echo "\n\n";

?>  