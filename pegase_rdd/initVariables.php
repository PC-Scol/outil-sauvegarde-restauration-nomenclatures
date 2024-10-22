<?php
/**
 * Initialisation des boutons des diff�rents ecrans
 * 
 * <b>Suivi de modification</b><br>
 * - 11/04/2012 : Prise en compte de la connexion vers le CAS
 *
 * @author B. RIBET
 * @version 2.25
 * @package Heliweb
 * @subpackage Commun
 */

/* initialisation des boutons */


if ( isset($_POST['etabEncours']) or isset($_GET['etabEncours']))
    {$etabEncours = ( isset($_POST['etabEncours']) ) ? $_POST['etabEncours'] : $_GET['etabEncours'];}

    else
    {	$etabEncours= '';   }

if ( isset($_POST['environnement']) or isset($_GET['environnement']))
    {$environnement = ( isset($_POST['environnement']) ) ? $_POST['environnement'] : $_GET['environnement'];}

    else
    {	$environnement= '';   }
    
if ( isset($_POST['token']) or isset($_GET['token']))
    {$token = ( isset($_POST['token']) ) ? $_POST['token'] : $_GET['token'];}

    else
    {	$token= '';   }


    
if ( isset($_POST['actionMaj']) or isset($_GET['actionMaj']))
    {$actionMaj = ( isset($_POST['actionMaj']) ) ? $_POST['actionMaj'] : $_GET['actionMaj'];}

    else
    {	$actionMaj= '';   }

if ( isset($_POST['actionRecup']) or isset($_GET['actionRecup']))
    {$actionRecup = ( isset($_POST['actionRecup']) ) ? $_POST['actionRecup'] : $_GET['actionRecup'];}

    else
    {	$actionRecup= '';   }    

if ( isset($_POST['tem_visible']) or isset($_GET['tem_visible']))
    {$tem_visible = ( isset($_POST['tem_visible']) ) ? $_POST['tem_visible'] : $_GET['tem_visible'];}

    else
    {	$tem_visible= 'visible';   }        
    ?>
