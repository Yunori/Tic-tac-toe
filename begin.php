#!/usr/bin/env php
<?php
// begin.php for begin in /home/jalet_y/morpion
// 
// Made by JALET Yvane
// Login   <jalet_y@etna-alternance.net>
// 
// Started on  Tue Dec 16 15:40:28 2014 JALET Yvane
// Last update Tue Dec 16 16:48:45 2014 JALET Yvane
//
include_once("morpion.php");

function begin()
{
  echo "\033[2J \033[0m";
  echo "███╗   ███╗ ██████╗ ██████╗ ██████╗ ██╗ ██████╗ ███╗   ██╗
 ████╗ ████║██╔═══██╗██╔══██╗██╔══██╗██║██╔═══██╗████╗  ██║
 ██╔████╔██║██║   ██║██████╔╝██████╔╝██║██║   ██║██╔██╗ ██║
 ██║╚██╔╝██║██║   ██║██╔══██╗██╔═══╝ ██║██║   ██║██║╚██╗██║
 ██║ ╚═╝ ██║╚██████╔╝██║  ██║██║     ██║╚██████╔╝██║ ╚████║
 ╚═╝     ╚═╝ ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝ ╚═════╝ ╚═╝  ╚═══╝ \n\n\n\n\n\n\n\n";
  morpion();
}