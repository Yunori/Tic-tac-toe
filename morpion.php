#!/usr/bin/env php
<?php
// morpion.php for morpion in /home/jalet_y/morpion
// 
// Made by JALET Yvane
// Login   <jalet_y@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:10:07 2014 JALET Yvane
// Last update Tue Dec 16 17:58:16 2014 Bertocco Thomas-Killian
//
include_once("morpioncpu.php");
include_once("morpionvs.php");
include_once("begin.php");

function morpion()
{
  $q = 0;
  while ($q == 0)
    {
      echo "\n\n1: J1 vs cpu\n";
      echo "2: J1 vs J2\n";
      echo "0: exit\n";
      $mode =  fopen("php://stdin", "r");
      echo "$>";
      $line = fgets($mode);
      
      if($line == "1\n")
	morpioncpu();
      else if($line == "2\n")
	morpionvs();
      else if ($line == "0\n")
	{
	  echo("\n[ BYE BYE ─=≡Σ((( つ•̀ω•́)つ ]\n \n");
	  $q = 1;
	}
      else
	  echo "veuillez rentrer 0, 1 ou 2";
    }
}
begin();
