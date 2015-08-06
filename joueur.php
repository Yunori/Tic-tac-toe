<?php
// joueur.php for  in /home/jalet_y/morpion
// 
// Made by JALET Yvane
// Login   <jalet_y@etna-alternance.net>
// 
// Started on  Tue Dec 16 14:44:09 2014 JALET Yvane
// Last update Tue Dec 16 16:35:13 2014 JALET Yvane
//
include_once("morpion.php");

function joueur(&$case, $j)
{
  $correct = 0;
  aff($case);
  $pos =  fopen("php://stdin", "r");
  echo 'j'.$j.'>';
  $line = fgets($pos);
  fclose($pos);
  $line = str_replace("\n", "", $line);
  if ($line == "exit")
    {
      echo "Vous avez abandonne, vous avez donc perdu.\n";
      $correct = 2;
    }
  else if(strlen($line) != 2 || array_key_exists($line, $case) == false)
      echo "Rentrez une position existante.\n";
  else if($case[$line] == ' ')
    {
      if($j == 1)
	$case[$line] = "\033[31mX\033[0m";
      else if ($j == 2)
	$case[$line] = "\033[34mO\033[0m";
      $correct = 1;
    }
  else
      echo "Cette position et deja occupe\n";
    return $correct;
}