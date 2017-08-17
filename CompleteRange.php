<?php

class CompleteRange{
  public function build($array)
  {
     $newArray = '';
     for ($i=$array[0]; $i <= $array[count($array)-1]; $i++) {
       if (in_array($i, $array)) {
           $newArray .= $i.',';
       }else{
           $newArray .= '<b style="color:red;">'.$i.'</b>,';
       }
     }
     return $newArray;
  }
}

$a = new CompleteRange();
echo $a->build(array(2,9,19));




 ?>
