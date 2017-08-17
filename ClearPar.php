<?php
class ClearPar{
   public function build($string){
      $nElementos = strlen($string);
      $nBusquedas = $nElementos -1;
      $par = "()";
      $posGoodPares = array();
      $toRemove = array();
      $newString = $string;
      $x = 0;
      for ($i=0; $i < $nBusquedas; $i++) {
         if (($string[$i].$string[$i+1]) == $par){
            $posGoodPares[] = $i;
            $posGoodPares[] = $i+1;
         }
      }

      if (count($posGoodPares) > 0){

          for ($i=0; $i <= $posGoodPares[count($posGoodPares)-1]; $i++) {
             if (!in_array($i,$posGoodPares)){
               $toRemove[] = $i;
             }
          }

          for ($i=0; $i < count($toRemove) ; $i++) {
             $newString = substr_replace($newString, '', ($toRemove[$i] - $x), 1);
             $x += 1;
          }

      }else{
          $newString = '';
      }

      return $newString;

   }
}
//
$a = new ClearPar();
echo $a->build('()()()()(()))))())((()');

 ?>
