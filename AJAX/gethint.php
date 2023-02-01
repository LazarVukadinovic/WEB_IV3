<?php
// Array with names
$a[] = "Andrija";
$a[] = "Predrag";
$a[] = "Sara";
$a[] = "Nikola Vujovic";
$a[] = "Lazar";
$a[] = "Luka Vucicevic";
$a[] = "Luka Vuckovic";
$a[] = "Andjela";
$a[] = "Uros";
$a[] = "Anja";
$a[] = "Milosav";
$a[] = "Jovana";
$a[] = "Veljko";
$a[] = "Nikola Krsmanovic";
$a[] = "Ognjen";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "nema predloga" : $hint;
?>