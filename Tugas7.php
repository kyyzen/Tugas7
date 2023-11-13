<?php
  $p = 5;
  $l = 15;
  for ($a = 0; $a<$p;$a++){
      echo "#";
    for ($b = 0;$b<=$l;$b++){
      if($a>0 && $a <$p-1){
        if($b==0 || $b <= $l-1){
          echo "×";
        }else{
          echo "#";
        }
      }else{
        echo "#";
      }
    }
	echo"<br>";
  }
?>