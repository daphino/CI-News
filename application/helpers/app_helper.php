<?php

if (!function_exists('date_formatted'))
{
  function date_formatted($date = false) 
  {
    if (!$date) {
      $date;
    }

    $dt = new DateTime($date);
    return $dt->format('d M Y H:i') . ' WIB';
  }
}