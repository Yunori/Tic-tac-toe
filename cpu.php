<?php
// test.php for test in /home/bertoc_t/PROJ/morpion
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Tue Dec 16 14:17:58 2014 Bertocco Thomas-Killian
// Last update Tue Dec 16 15:25:16 2014 Bertocco Thomas-Killian
//
include_once("aff.php");
 
function cpu(&$case)
{
  $c = 0;
  while($c != 1){
    $p = rand(1, 3);
    $s = rand(1, 3);
    if($p == 1)
      $p = "A";
    if($p == 2)
      $p = "B";
    if($p == "3")
      $p = "C";
    if($case[$p.$s] == " "){
      $case[$p.$s] = "o";
      $c = 1;}}
}
?>