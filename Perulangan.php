<?php
  for($i=0;$i<10;$i++){
    echo "<h2>Ini perulangan ke-$i</h2>";
  }
   echo "==========<br>";
  
  $ulangi = 0;
  while($ulangi < 10){
    echo "<p>Ini adalah perulangan ke-$ulangi</p>";
    $ulangi++;
  }
   echo "==========<br>";
   
   $ulang = 10;
   do{
     echo "<p>Ini adalah perulangan ke-$ulang</p>";
     $ulang--;
   }while($ulang > 0);
   echo "==========<br>";
   
  $books = [
      "Panduan Belajar PHP untuk Pemula",
      "Membangun Aplikasi Web dengan PHP",
      "Tutorial PHP dan MySQL",
      "Membuat Chat Bot dengan PHP"
    ];
   
     echo "<h5>Judul Buku PHP:</h5>";
     echo "<ul>";
     foreach ($books as $buku){
       echo "<li>$buku</li>";
     }
    echo "</ul>";
   echo "==========<br>";
   
   for($a = 0;$a < 5;$a++){
     for($b = 0;$b < 10;$b++){
       echo "Ini perulangan ke ($a,$b)<br>";
     }
   }
   echo "==========<br>";
   
   $k = 0;
   while($k < 10){
     for($l = 0;$l < 10;$l++){
       echo "Ini perulangan ke ($k,$l)<br>";
     }
     $k++;
   }
?>