<?php

class ChangeString{
    public function build($string) {
      $newString='';
      for ($i=0; $i < strlen($string); $i++) {
        $asc = ord(substr($string, $i, 1));
        if ($asc > 64){  //Si no son numeros ni espacios
          switch ($asc) {
            case 90:  $letter = chr(65);     break;
            case 122: $letter = chr(97);     break;
            case 195: $letter = chr(111);    break;
            case 78:  $letter = 'Ñ';         break;
            case 110: $letter = 'ñ';         break;
            default:  $letter = chr($asc+1); break;
          }
           $newString .= $letter;
        }else{
           $newString .= chr($asc);
        }
      }
      return $newString;
    }
}
$a = new ChangeString();
echo $a->build('123 Nz bcd*3n');



 ?>
