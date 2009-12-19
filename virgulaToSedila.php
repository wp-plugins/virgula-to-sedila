<?php
/*
Plugin Name: Virgulă To Sedilă
Plugin URI: http://wordpress.org/extend/plugins/virgula-to-sedila/
Description: Înlocuieşte diacriticele "corecte", cu virgulă, cu cele "incorecte", cu sedilă, dar care se afişează corespunzător şi în Windows XP. Inspirat de plugin-ul lui John Kilroy, XHTML to HTML - http://www.kilroyjames.co.uk/2008/07/xhtml-to-html-wordpress-plugin/
Version: 0.1
Author: Radu Bilei
Author URI: http://twitter.com/radubilei/
*/
function virgulaToSedila($buffer) {
	
	$v[0] = '/Ș/'; // (S cu virgulă) latin capital letter s with comma below
	$v[1] = '/ș/'; // (s cu virgulă) latin small letter s with comma below
	$v[2] = '/Ț/'; // (T cu virgulă) latin capital letter t with comma below
	$v[3] = '/ț/'; // (t cu virgulă) latin small letter t with comma below
  
	$s[0] = 'Ş'; // (S cu sedilă) latin capital letter s with cedilla
	$s[1] = 'ş'; // (s cu sedilă) latin small letter s with cedilla
	$s[2] = 'Ţ'; // (T cu sedilă) latin capital letter t with cedilla
	$s[3] = 'ţ'; // (t cu sedilă) latin small letter t with cedilla
	
  return preg_replace($v, $s, $buffer);
}
ob_start("virgulaToSedila");
?>