<?php

namespace App\Http\Controllers\Cp;

class Helper
{
  public static function removeUpload($path)
  {
    if(file_exists($path)){
      unlink($path);
    }
  }

}