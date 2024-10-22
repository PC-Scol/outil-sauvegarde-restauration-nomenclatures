<?php
/**
 * Demarrage de la session php et alimentation des variables environnements
 * <b>Suivi des modifications</b><br>
 * - 20101129 : ajout de PutEnv("NLS_LANG=FRENCH_FRANCE.WE8ISO8859P1"); pour la gestion des
 * caractères accentués
 * 
 * @package Heliweb
 * @subpackage Commun
 * 
 */
session_start();

$booDebug=true;
//PutEnv("NLS_LANG=FRENCH_FRANCE.WE8ISO8859P1");
// NLS_LANG utilisé sur le serveur de BD orabd19c-pr4
PutEnv("NLS_LANG=FRENCH_FRANCE.AL32UTF8");
if (!$booDebug)
{
	ini_set('display_errors', false);
	ini_set('html_errors', false);
}
else
{
	ini_set('display_errors', true);
	ini_set('html_errors', true);
}
date_default_timezone_set('Europe/Paris');
/*
echo 'session<br>';
//print_r($_SESSION);
echo '<br>fin session<br>';
*/
?>
