<?php

function reverseInt($num)
{

   $length = strlen($num); //4

   $arr = str_split($num);

   $res = '';

   if ($arr[0] == '-') {
       for ($i = $length; $i >= 1; $i--) {
           $res .= $arr[$i];
       }
       return $res * -1;
   } else {
       for ($i = $length; $i >= 0; $i--) {
           $res .= $arr[$i];
       }
       return $res * 1;
   }
}

echo reverseInt(12);