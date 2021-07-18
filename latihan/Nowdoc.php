<?php

  // Mutliline String

  // Fitur Nowdoc
  //  Mirip dengan Heredoc bedanya tidak memiliki kemampuan parsing seperti Heredoc atau Double Quote.

  // Nowdoc mirip dengan single quote.

  // NOTE : apabila PTSD menjadi pemanggil atau variable.
  //        maka nilai atau isinya tidak bisa di isi PTSD juga
  //        misalkan ada itu akan memotong codenya saja.

  echo <<<'PTSD'
  (Post Traumatic Stress Disorder) atau gangguan stres pascatrauma adalah
  gangguan mental yang muncul setelah seseorang mengalami atau menyaksikan peristiwa yang tidak menyenangkan.
  Merupakan gangguan kecemasan yang membuat penderitanya teringat pada kejadian traumatis. Peristiwa traumatis yang dapat memicu gangguan stress pascatrauma
  antara lain perang, kecelakaan, bencana alam, dan pelecahan seksual.

  PTSD;

?>