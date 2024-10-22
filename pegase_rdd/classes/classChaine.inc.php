<?php
/**
 * Class Gestion des chaines de caract�res
 * Gestion methodes pour manipuler des chaines de caract�res
 * @author B. RIBET
 * @version 2.15
 * @package Classes
 */
class ChaineCaracteres
{
  static $vString;

	function __construct ()
	{

	}

	/**
	 * @method  : Decoupe une chaine de caracteres par rapport a un delimiteur
  	 */

	static function Decoupe_Adresse($string)
	{
  	$retour[] ='';
  	$delimiteurs = '?';
	  //Position du & dans la chaine de carac�re
  	$pos = strpos($string, $delimiteurs);
  	if ($pos<>0)
  	{
  		$retour[0]=substr($string, 0, $pos);
  		$retour[1]=substr($string, $pos, strlen($string));
	}
	else
	{
		$retour[0]=$string;
		$retour[1]='';
	}
  	return $retour;
	}

	/**
	 * Conversion de montant vers base de donnees
	 */

 	static function conversionMontant_Mysql($pString)
 	{

	$pos=strpos($pString,',');
	  //Position de la virgule dans la chaine de carac�re
      if ($pos == true)
      	{$pString=str_replace($pString,',','.');}

	  self::$vString=$pString;
	  return self::$vString;
	}

	/**
	 * Formatage des chaines de caract�res :
	 * - retrait des blanc en debut et fin de chaine
	 * - Transformation d'eventuel code HTML
	 */

 	static function FormatageChaineCaracteres($pString)
 	{
	$ch=trim($pString);
	$ch=htmlentities($ch);
	$ch=addslashes($ch);
	return $ch;
	}



	/**
	 * Affection des valeur Oui, Non � O et N provenant de la base
	 */

 	static function Complete_ON($string)
 	{

	  //Position du & dans la chaine de carac�re
	  if ($string=='O')
  		{ $string='Oui';}

  	  if ($string=='N')
  		{ $string='Non';}

  	  if ($string=='S')
  		{ $string='Sans Objet';}

	  self::$vString=$string;
	  return self::$vString;

	}

	/*
	 * @method : Transforme O(ui) en Ok et N(on) en Ko
	 */

 	static function transforme_ON_OK($string)
 	{

	  //Position du & dans la chaine de carac�re
	  if ($string=='O')
  		{ $string='OK';}

  	  if ($string=='N')
  		{ $string='KO';}

  	  if ($string=='S')
  		{ $string='Sans Objet';}

	  self::$vString=$string;
	  return self::$vString;
	}


	
	/*
	 * @method : Transforme O(ui) en Ok et N(on) en Ko
	 */

 	static function transforme_Connu_Inconnu_Helico($string)
 	{

	  //Position du & dans la chaine de carac�re
	  if ($string=='O')
  		{ $string='Inconnu';}

  	  if ($string=='N')
  		{ $string='Connu';}


	  self::$vString=$string;
	  return self::$vString;
	}

	
	/*
	 * @method : Affectation du sexe
	 */
	static function Complete_SEXE($string)
	{

    //Position du & dans la chaine de carac�re
  	if ($string=='M')
  		{ $string='MALE';}

  	if ($string=='F')
  		{ $string='FEMELLE';}

  	if ($string=='I')
  		{ $string='INDIFFERENT';}

	  self::$vString=$string;
	  return self::$vString;
	}




	static function est_selectionne($option,$mon_champ) {

    if (!isset($mon_champ)) {
            return FALSE;
    }

    for ($i = 0, $c = count($mon_champ); $i < $c; $i++) {

        if ($mon_champ[$i] == $option) {
//			echo 'dans if = mon champ '.$mon_champ[$i].'<br>';
            return TRUE;
        }
    }
    return FALSE;
}


        static function formatBooleanVersBD($param) {
            
            if ($param)  $valBoolean = 'true' ; else { $valBoolean ='false' ;}
            return $valBoolean;    
        }


        static function formatBooleanVersAPI($param) {

            
            if ($param=='t')
                $valBoolean=true ; 
                elseif ( $param=='f' ) 
                   $valBoolean = false ;
                else $valBoolean='null';

                //return boolval($valBoolean);    
                return $valBoolean;    
        }


}
?>
