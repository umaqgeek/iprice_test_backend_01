<?php

class Func {

  private $str;

  function setString($str) {
    $this->str = $str;
  }

  function getString() {
    return $this->str;
  }

  function convertAllCaps() {
    $this->str = strtoupper($this->str);
  }

  function convertAltCaps() {
    $str = str_split($this->str);
    $newStr = "";
    $i=1;
    foreach ($str as $s) {
      $newStr .= ($i%2==0 ? strtoupper($s) : strtolower($s));
      $i+=1;
    }
    $this->str = $newStr;
  }
  
  function printToCsv($strLines = array(), $filename = "csv_data.csv") {
    $file = fopen($filename, "w");
    foreach ($strLines as $str) {
      $chars = str_split($str);
      fputcsv($file, $chars);
    }
    fclose($file);
  }
}
