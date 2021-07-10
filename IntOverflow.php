<?php
// Integer Overflow adalah melewati batas kapasitas integer
// Jika membuat number integer yang melebihi nilai tersebut. 
// Maka secara otomatis tipe numbernya akan berubah menjadi floting point
// Info Lebih detail bisa nonton tutorial Programming Zaman Now membership

//Maksimal kapasitas integer di 64-bit
echo "Max Capacity Integer :";
var_dump(9_223_372_036_854_775_807);

//Jika Melebihi data diatas maka akan menjadi floating point / integer Overflow
echo "Over Capacity Integer / Integer Overflow :";
var_dump(9_999_999_999_999_999_999);

?>