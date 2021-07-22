<?php

  // Nilai NULL mempresentasikan sebuah variable tanpa nilai.
  
  // Saat ktia membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut
  // Kita bisa menggunakan NULL / null untuk mengkosongkan variable tersebut

  // Untuk membuat data Null / null, kita bisa menggunakan kata kunci NULL (Case Sensitive)

  $nama = "Yusfi";
  $umur = null;
  $nama = null;

  echo "Nama : ";
  echo $nama;
  echo "\n\n";

  echo "Umur : ";
  echo $umur;
  echo "\n\n";

  // CHECK DATA NULL
  // Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan 
  
  // function is_null($variable)

  // Cara ke-1
  echo "Apakah benar nilai null ? = ";
  echo is_null($nama); // 1 (true)
  echo "\n\n";
  
  // return dari is_null($nama);
  // boolean : 1 dan 0. true = 1 dan false = 0

  // Atau bisa memakai var_dump

  // Cara ke-2
  echo "Nilai null ? = ";
  var_dump(is_null($nama)); // bool (true)
  echo "\n\n";

  // Cara ke-3
  $isNull = is_null($umur);
  var_dump($isNull);

  // NOTE : 
  // null bisa berfungsi jika variable mengandung nilai kosong / null
  // null tidak bisa digunakan jika variablenya tidak ada

?>