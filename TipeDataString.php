<?php 

  // Tipe data String adalah tipe data representasi dari teks
  // String bisa mengandung kosong atau banyak karakter

  // Single Quote - Kutip 1 (')
  // Membuat string dengan single quote / kutip 1

  echo 'Name : ';
  echo 'Yusfiandi';
  //  Menerapkan escape sequence di bagian single quote
  echo "\n";

  // Double Quote - Kutip 2 (")
  // Kelebihan dari double quote adalah bisa melakukan escape sequence
  // Seperti contoh :
  // \n untuk Enter
  // \t untuk Tab
  /* \" untuk double quote di dalam double quote */
  //  Contoh : echo "<div class=\"container\">";
  // kalo yg biasa echo "<div class='container'>";

  echo "Nama : ";
  echo "Yusfiandi";
  // Contoh \n ENTER 
  echo "\n";

  echo "Bisa juga dipanggil ";
  /* untuk double quote di dalam double quote \" \" */
  echo "\"Yusfi\"";
  echo "\n";

  echo "Dan ini untuk tab ";
  //  untuk \t TAB
  echo "\t Halo \t Selamat \t Pagi";
  echo "\n";
 
?>