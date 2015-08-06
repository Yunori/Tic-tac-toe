<?php
// aff.php for morpion in /home/bertoc_t/PROJ/morpion
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:37:57 2014 Bertocco Thomas-Killian
// Last update Tue Dec 16 14:16:31 2014 JALET Yvane
//

function aff($case)
{
  //  static $case = array("A" => "A", "A1" => '1', "A2" => '2', "A3" => '3', "B" => "B", "B1" => '4', "B2" => '5', "B3" => '6', "C" => "C", "C1" => '7', "C2" => '8', "C3" => '9'); 
  $c = 0;
  $d = 0;
  echo "\n    1   2   3\n\n";
  foreach ($case as $key => $value){
    echo $case[$key];
    if($c != 3 && $c != 0)
      echo " | ";
    else
      echo "   ";
    $c++;
    if($c == 4 && $d != 2){
      $c = 0;
      echo "\n"."    _________"."\n";
      $d++;}
  }
  echo "\n\n";
}
?>