<?php
// victory.php for morpion in /home/bertoc_t/PROJ/morpion
// 
// Made by Bertocco Thomas-Killian
// Login   <bertoc_t@etna-alternance.net>
// 
// Started on  Tue Dec 16 15:51:26 2014 Bertocco Thomas-Killian
// Last update Tue Dec 16 16:40:06 2014 Bertocco Thomas-Killian
//

function victory($case)
{
  $v = 0;
  $t = array_keys($case);
  for($c = 1; $c < 9; $c = $c + 4)
    if($case[$t[$c]] != ' ' && $case[$t[$c]] == $case[$t[$c + 1]] && $case[$t[$c + 1]] == $case[$t[$c + 2]])
      $v = 1;
  for($c = 1; $c < 4; $c++)
    if($case[$t[$c]] != ' ' && $case[$t[$c]] == $case[$t[$c + 4]] && $case[$t[$c + 4]] == $case[$t[$c + 8]])
      $v = 1;
  $c = 1;
  if($case[$t[$c]] != ' ' && $case[$t[$c]] == $case[$t[$c + 5]] && $case[$t[$c + 5]] == $case[$t[$c + 10]])
    $v = 1;
  if($case[$t[$c + 2]] != ' ' && $case[$t[$c + 2]] == $case[$t[$c + 5]] && $case[$t[$c + 5]] == $case[$t[$c + 8]])
    $v = 1;
  return $v;
}