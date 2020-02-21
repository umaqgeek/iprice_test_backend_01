<?php

// validation of arguments.
if (!isset($argv[1]) || empty($argv[1])) {
  echo "Ops! Need at least 1 parameter.\n";
  return;
}

// capture all arguments in one string.
$str = "";
for ($i=1; $i < $argc; $i++) {
  $str .= $argv[$i];
  if ($i != ($argc-1)) {
    $str .= " ";
  }
}

// converting the original string to uppercase.
include('./func.php');
$func1 = new Func();
$func1->setString($str);
$func1->convertAllCaps();
$str1 = $func1->getString();
echo $str1 . "\n";

// converting the original string to alternate upper and lower case.
$func2 = new Func();
$func2->setString($str);
$func2->convertAltCaps();
$str2 = $func2->getString();
echo $str2 . "\n";

// print above results to CSV file.
$func3 = new Func();
$strLines = array($str, $str1, $str2);
$func3->printToCsv($strLines);
echo "CSV created!\n";

die();
