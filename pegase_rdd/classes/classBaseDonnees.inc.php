<?php
/**
 * Class Base de Donn�es
 * @author B. RIBET
 * @version 2.40
 * @package Classes
 * @subpackage BaseDeDonnees
 *
 * <b>Suivi de modification</b><br>
 * - 20110401 : 2.15 : Securisation du mot de passe
 * - 20140109 : 2.50 : Blocage appli si champ LIB_BLOC_APPLI renseign� dans TLABEL
 * - 26/03/2014 : 8.00 : Modification de la gestion des acces
 */

class BaseDeDonnees
{
    // Donnees de connexion a la base

    var $user='';
	var $pass='';
	var $etablissement='';
	var $serveur='';
	var $adrLdap='';
    var $base='';
    var $idConnexion='';
    var $requete='';
    var $timeOutPhp;

    // Gestion des anomalies liees aux bases de donnees
    var $fonction;
    var $codeAno;
    var $codeRequete;
    var $libAno;
    var $libUser;
    var $table;
    var $ordreSQL;
    var $fichier;
    var $dateAno;

	/**
	 * Variables de gestion d'acces : Droit administrateur
	 * @param Char usAdmin
	 */
	var $usAdmin;
	/**
	 * Variables de gestion d'acces : Droit en mise � jour
	 * @param Char usMaj;
	 */

	var $usMaj;

    function __construct ()
        {

        }


    function connexionLDAP ($pAdrLdap,$pEtab,$pUser, $pPass)
    {


	$ldap_host = $pAdrLdap; //inserer ici l'addresse du serveur LDAP
	//echo 'adresse '.$pAdrLdap.'<br>';

	$user = $this->user; // on traite les information recolt�es


	//$password = $this->pass;

	$user = $pUser; // on traite les information recolt�es
	$password = $pPass;

	$etab=strtolower($pEtab);
	//echo 'etab '.$etab.' user '.$user.'<br>';
/*
	$ds = ldap_connect($ldap_host) // connexion en anonymous
	 or  exit(">>Connexion au serveur LDAP echou�<<");
*/
	$ds = ldap_connect($ldap_host) // connexion en anonymous
	 or  exit(">>Connexion au serveur LDAP echou�<<");
	 

	if ($ds)
	 {

		 $dn = "uid=".$user.",ou=people,ou=".$etab.",dc=agalan,dc=org";
		 if ($password == "") $password = "@";
		 // bind ldap pour tester si il existe dans ldap
		 $r=@ldap_bind($ds, $dn, $password);

		return $r;

	 }
	else
	{

		echo 'connection ldap ko<br>';
		//echo  "Impossible de se connecter au serveur LDAP<br>";

	}

	return $ds;

	// echo 'ClasseBD : sortie connexionLDAP<br>';


	}




	function setFonction($pFonction){$this->fonction=$pFonction;}
	function setLibelleAnomalie($pLibAno){$this->libAno=$pLibAno;}
	function setUserAnomalie($pUserAno){$this->userAno=$pUserAno;}
	function setOrdreSQLPlante($pOrdreSQL){$this->ordreSQL=$pOrdreSQL;}
	function setCodeRequete($pCodRequete){$this->codeRequete=$pCodRequete;}
	function setCodeAnomalie($pCodAno){$this->codeAno=$pCodAno;}
	function setTableSQLAnomalie($pTable){$this->table=$pTable;}
	function setDateAno($pDt){$this->dateAno=$pDt;}
	function setFichierAnomalie($pFic){$this->fichier=$pFic;}
	function setUserAdmin($pTop){$this->usAdmin =$pTop;}
	function setUserMaj($pTop){$this->usMaj =$pTop;}
	function setUserLogin($pLogin){$this->user =$pLogin;}
	function setUserPassLogin($pPass){$this->pass =$pPass;}
	function setUserEtablissement($pEtab){$this->etablissement =$pEtab;}
	function setTimeOutPhp($pTimeOut){$this->timeOutPhp=$pTimeOut;}

	function getFonction(){return $this->fonction;}
	function getLibelleAnomalie(){return $this->libAno;}
	function getUserAnomalie(){return $this->userAno;}
	function getOrdreSQLPlante(){return $this->ordreSQL;}
	function getCodeRequete(){return $this->codeRequete;}
	function getCodeAnomalie(){return $this->codeAno;}
	function getTableSQLAnomalie(){return $this->table;}
	function getDateAno(){return $this->dateAno;}
	function getFichierAnomalie(){return $this->fichier;}
	function getUserAdmin(){return $this->usAdmin;}
	function getUserMaj(){return $this->usMaj ;}
	function getUserLogin(){ return $this->user;}
	function getUserPassLogin(){ return $this->pass;}
	function getUserEtablissement(){ return $this->etablissement;}
	function getTimeOutPhp(){ return $this->timeOutPhp;}



	/***
	 * Gestion des acces � Oracle
	 */



	function connect_oracle($pBase, $pLogin, $pMDP)
	{

		//decodage du login / mot de passe
		$this->user=ChaineCaracteres::password_decode($pLogin);
		$this->pass=ChaineCaracteres::password_decode($pMDP);
		$this->base=$pBase;
		
		PutEnv("TNS_ADMIN=/etc/tnsnames.ora");

		//echo 'db '.$db.'<br>';
		if ($c=oci_connect($this->user, $this->pass, $pBase)){

		    return $c;
		  } else {
		    $err = OCIError();
		  }


		return $err;

	}

        
        
	
function recuperationTokenAPIPegase( $paramEtab) {
    
    
        
    if ( empty($paramEtab['login_api']) OR empty($paramEtab['mdp_api'])) return false;

    //echo "<br>recuperatoinTokenAPIPegase : Entree<br>";
    
    //$paramEtab=$tabParamEtab[$pEtab][$pEnv];
    //$paramEtab=$this->rechercheParamEtablissements($pEtab, $pEnv);
    
    //print_r($paramEtab);
    
    $tuCurl = curl_init();
    curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_token']);
    //curl_setopt($tuCurl, CURLOPT_PORT , 443);
    curl_setopt($tuCurl, CURLOPT_VERBOSE, TRUE);
    //curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
    //curl_setopt($tuCurl, CURLOPT_SSLVERSION, 3);
    //curl_setopt($tuCurl, CURLOPT_POST, TRUE);
    //curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, TRUE);
    
    $data="username=".$paramEtab['login_api']."&password=".$paramEtab['mdp_api']."&token=true";
    curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $data);
    //curl_setopt($tuCurl, CURLOPT_HTTPHEADER, array("Content-Type : application/x-www-form-urlencoded", "Content-length: ".strlen($data)));
    
    
    $tuData = curl_exec($tuCurl);
     
    if(!curl_errno($tuCurl)){
    
      $info = curl_getinfo($tuCurl);
    
      echo '<BR>Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
    
      curl_close($tuCurl);
    
      return $tuData;

    } else {
    
      echo 'Curl error: ' . curl_error($tuCurl).'<br>';
      var_dump($tuCurl);
      echo '<br>Code retour anomalie '.curl_errno($tuCurl);
      
      curl_close($tuCurl);
    
      return false;
        
    
    }    
    
}



static function AppelAPIRecupReferentielMajInfos ($pNomenclature, $paramEtab, $pEnv, $pToken, $pCheminRelatif,$pJson)
{
    //echo '<br>===> AppelAPIRecupReferentielMajInfos : Entree - '.$pCheminRelatif.' nomenclature '.$pNomenclature.'<br><br>';
    
    $tuCurl = curl_init();
    
   switch ($pNomenclature) {

        //case 'Periode':
        //    
        //    $tab=json_decode($pJson,true);
            //print_r($tab);
        //    $url = $paramEtab['url_api_mof'].$pCheminRelatif;
            //echo 'URL : '.$url.'<br>';
        //    curl_setopt($tuCurl, CURLOPT_URL, $url);
        //    curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson);
        //    curl_setopt($tuCurl, CURLOPT_POST, TRUE);
        //    break;

       
        //case 'Formation':
        //    
        //    $tab=json_decode($pJson,true);
        //    //print_r($tab);
        //    
        //    $url = $paramEtab['url_api_cof'].$pCheminRelatif.'/'.$tab["code"].'/'.$tab["version"].'/valider';
            //echo 'URL : '.$url.'<br>';
        //    curl_setopt($tuCurl, CURLOPT_URL, $url);
        //    curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson);
        //    curl_setopt($tuCurl, CURLOPT_POST, TRUE);
        //    break;

        case 'AssocierParentStructureUAI':
            
            
            echo 'AssocierParentStructureUAI :Prepration url api <br>';
            print_r($pJson);
            
            
            $tab=json_decode($pJson['json'],true);
            echo 'Json transforme<bR>';
            print_r($tab);
            
            //$url = $paramEtab['url_api_ref'].$pCheminRelatif.'/'.$tab["code"].'/'.$tab["version"].'/valider';
            
            $url = $paramEtab['url_api_ref'].$pCheminRelatif.'/'.$pJson["codeEnfant"].'/associerParent';
            ///structures/codePegase/codeEnfant/associerParent
            echo '<br>URL : '.$url.'<br>';
            
            $pJson=$pJson['json'];
            //echo 'json put : '.$pJson.'<br>';
            curl_setopt($tuCurl, CURLOPT_URL, $url);
            curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson );
            //curl_setopt($tuCurl, CURLOPT_POSTFIELDS, http_build_query( $pJson ) );
            curl_setopt($tuCurl, CURLOPT_CUSTOMREQUEST, "PUT");
            
            break;

        
        default:
            
            curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_ref'].$pCheminRelatif);
            curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson);
            curl_setopt($tuCurl, CURLOPT_POST, TRUE);
            
            //echo 'StructureUAI :Prepration url api <br>';
            //print_r($pJson);
            
            
            break;
        
        echo 'URL : '.$url.'<br>';
        
    }
                            
    
    //bab- curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_ref'].$pCheminRelatif);
    
    
    //curl_setopt($tuCurl, CURLOPT_PORT , 443);[
    curl_setopt($tuCurl, CURLOPT_VERBOSE, TRUE);
    
    //curl_setopt($tuCurl, CURLOPT_SSLVERSION, 3);
    
    //curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson);
    
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, TRUE);
    
    //curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $data);
    $token="Authorization: Bearer ".trim($pToken);
    $auth=$paramEtab['login_api'].":".$paramEtab['mdp_api'];
    curl_setopt($tuCurl, CURLOPT_USERPWD,  $auth);
    $header = array ("Content-Type: application/json",$token);
    curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
    curl_setopt($tuCurl, CURLOPT_HTTPHEADER, $header);


    $tuData = curl_exec($tuCurl);
    //echo 'affichage du message retour<br><pre>';
    //var_dump($tuData);
    //echo '</pre>';
    
    
    $posMessage=stripos($tuData,'"message"' );
    if ($posMessage>0) {
        $lenMessage=strlen($tuData)-$posMessage;
        $message= substr($tuData,$posMessage,$lenMessage-1);
        $tabAno= json_decode($message);
        //echo "Anomalie sur la mise à jour de l'occurance<pre>";
        echo "Ocurance en anomalie : ".$pJson.'<br>';
        print_r($message);
        echo '</pre><br><br>';
    }
    
    
    
    
    if(curl_errno($tuCurl)){
      echo 'Curl error: ' . curl_error($tuCurl).'<br>';
      var_dump($tuCurl);
      echo '<br>Code retour anomalie '.curl_errno($tuCurl);
      echo '<br><br><br>';


    }

    curl_close($tuCurl);
    //var_dump($tuData);
                
    return $tuData;

}



static function AppelAPIRecupReferentielRecupInfos ($pNomenclature, $paramEtab, $pEnv, $pToken, $pCheminRelatif)
{
    //echo '<br>===> AppelAPIRecupReferentielRecupInfos : Entree - '.$pCheminRelatif.' et nomenclatyre '.$pNomenclature.'<br>';

    
    $tuCurl = curl_init();
    
    echo 'AppelAPIRecupReferentielRecupInfos : '.$pCheminRelatif.' Nomenclature '.$pNomenclature.'<br>';
    
    switch ($pNomenclature) {

        //case 'periode':
        //    
        //    curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_mof'].$pCheminRelatif);
        //    $token="Authorization: Bearer ".trim($pToken);
        //    $auth=$paramEtab['login_api'].":".$paramEtab['mdp_api'];
        //    curl_setopt($tuCurl, CURLOPT_USERPWD,  $auth);
        //    $header = array ("Content-Type: application/json",$token);
        //    curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
        //    curl_setopt($tuCurl, CURLOPT_HTTPHEADER, $header);            
        //    break;

        
        
        
        //case 'formations':
            
        //    curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_cof'].$pCheminRelatif);
        //    $token="Authorization: Bearer ".trim($pToken);
        //    $auth=$paramEtab['login_api'].":".$paramEtab['mdp_api'];
        //    curl_setopt($tuCurl, CURLOPT_USERPWD,  $auth);
        //    $header = array ("Content-Type: application/json",$token);
        //    curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
        //    curl_setopt($tuCurl, CURLOPT_HTTPHEADER, $header);            
        //    break;
        
        default:
            
            curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_ref'].$pCheminRelatif);
            
            break;
        
    }
                        
    //echo 'Chemin API : '.$paramEtab['url_api_cof'].$pCheminRelatif.'<br>';
    
    
    //curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_ref'].$pCheminRelatif);
    
    //curl_setopt($tuCurl, CURLOPT_PORT , 443);
    curl_setopt($tuCurl, CURLOPT_VERBOSE, TRUE);
    //curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
    //curl_setopt($tuCurl, CURLOPT_SSLVERSION, 3);
    //curl_setopt($tuCurl, CURLOPT_POST, TRUE);
    //curl_setopt($tuCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, TRUE);


    $tuData = curl_exec($tuCurl);
    //echo 'status<br>';
    //$status = curl_getinfo($tuCurl,CURLINFO_HTTP_CODE);
    //print_r($status);

    if(!curl_errno($tuCurl)){

      $info = curl_getinfo($tuCurl);

      //echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];

    } else {

      echo 'Curl error: ' . curl_error($tuCurl).'<br>';
      var_dump($tuCurl);
      echo '<br>Code retour anomalie '.curl_errno($tuCurl);



    }

    curl_close($tuCurl);
    
    //echo '<br>Recuperation des formations apres appel API<br>';
    //var_dump($tuData);
    //echo '<br><br>';
    
    return $tuData;

}





	function connect_postgres($paramEtab)
	{
		//include './constantes.php';
        //$paramEtab=$tabParamEtab[$pEtabEncours][$pEnv];
        //$paramEtab=$this->rechercheParamEtablissements($pEtabEncours, $pEnv);
        //echo '<pre>';
        //var_dump($paramEtab[$pEnv]);
        //echo '</pre>';
        //echo 'instance postgres '.$paramEtab[$pEnv]['instance'].'<br>';

        $chaineConnexion="host=".$paramEtab['host_bd']." port=".$paramEtab['port_bd']." dbname=".$paramEtab['instance']." user=".$paramEtab['login_bd']." password=".$paramEtab['mdp_bd'];
        //echo 'Chaine de connexion '.$chaineConnexion.'<br>';
        
        if ( empty($paramEtab['host_bd'])
            OR empty($paramEtab['port_bd'])
            OR empty($paramEtab['instance'])
            OR empty($paramEtab['login_bd'])
            OR empty($paramEtab['mdp_bd'])) {
            return false;
        } else return pg_connect($chaineConnexion);
	}

	
	



}

?>
