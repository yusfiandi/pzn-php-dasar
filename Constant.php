<?php

  // Variable di PHP sifatnya mutable, yaitu bisa berubah
  // Jika tidak ingin membuat variable yang immutable(tidak bisa dirubah / tetap), maka tidak bisa dilakukan di PHP

  // Sebagai gantinya, terdapat fitur yang namanya constant
  
  // Constant
  // adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan

  // Untuk membuat constant kita bisa menggunakan
  // function define()

  // Best Practice pembuatan nama constant adalah menggunakan UPPER_CASE

   // define (-- "nama constant" -- , -- "Value / data" --)
  define("AUTHOR", "Yusfiandi");
  define("VERSION", 1);
  
  // Jika constant dibawah ini dipakai, maka akan terjadi error
  // define("VERSION", 1);

  // Apabila ada Constant yang sama, maka akan error
  // Notif error VSCODE dengan syarat instal plugin intelephense :
  // Duplicate symbol declaration '(nama constant yang ada)'
  
  // Notif error running PHP di cmd :
  // PHP Warning: Constant (nama constant yang ada) already defined in (path file) on line 10(dibaris)
  // Warning: Constant (nama constans yang ada) already defined in (path file) on line 10(dibaris ke berapa error)

  // Pemanggilan constant tinggal ketik nama constant (AUTHOR), disaat memanggil nama Constant namanya harus sama. Karena Case Sensitive
  echo AUTHOR;
  echo "\n";
  
  echo VERSION;
  echo "\n";

?>