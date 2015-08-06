<?php
// morpionvs.php for vs in /home/jalet_y/morpion
// 
// Made by JALET Yvane
// Login   <jalet_y@etna-alternance.net>
// 
// Started on  Tue Dec 16 15:20:45 2014 JALET Yvane
// Last update Tue Dec 16 17:52:11 2014 JALET Yvane
//
include_once("aff.php");
include_once("joueur.php");

function morpionvs()
{
  echo "Rentrer la position d'ou vous voulez posez votre pion le premier joueur a aligner 3 pions pour gagnez.\n\n\n\n";
  $v = 0;
  $wj = 0;
  $wc = 0;
  $r = 0;
  while ($r == 0 || $r == "o")
    {
      $case = array("A" => "A", "A1" => ' ', "A2" => ' ', "A3" => ' ', "B" => "B", "B1" => ' ', "B2" => ' ', "B3" => ' ', " C" => "C", "C1" => ' ', "C2" => ' ', "C3" => ' ');
      while ($v == 0 && in_array (" " , $case) == 1)
	{
	  for($correct=0; $correct == 0; NULL)
	  {
		$correct = joueur($case, 1);
		if($correct == 2)
		  exit();
	  }
	  $v = victory($case);
	  if($v == 1){
	    $j = 1;
	    $wj++;
	    break;}
	  if($v == 0 && in_array (" " , $case) == 1)
	  	for($correct=0; $correct == 0; NULL)
		{
			$correct = joueur($case, 2);
			if($correct == 2)
			  exit();
		}
		$v = victory($case);
	  if($v == 1)
	    {
	      $j = "2";
	      $wc++;
	    }
	}
      aff($case);
      if($v == 1)
        echo "Joueur ".$j." a gagne\n";
      else
        echo "egalite\n";
      echo "score\n";
      echo "j1:" . $wj;
      echo "\nj2:" . $wc;
      $pos =  fopen("php://stdin", "r");
      echo "\nvoulez-vous rejouer? o/n:";
      $r = fgets($pos);
      fclose($pos);
      $r = str_replace("\n", "", $r);
      if ($r == 'o')
	$v = 0;
      else if ($r != 'n')
	$r = 0;
      else if($r == 'n')
	break;
    }    
}