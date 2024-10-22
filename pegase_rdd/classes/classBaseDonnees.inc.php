<?php
/**
 * Class Base de Donn�es
 * @author B. RIBET
 * @version 2.40
 * @package Classes
 * @subpackage BaseDeDonnees
 *
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
		if ($c=oci_connect($this->user, $this->pass, $pBase)){
		    return $c;
		  } else {
		    $err = OCIError();
		  }

		return $err;

	}

        
        
	
function recuperationTokenAPIPegase( $paramEtab) {
    
    
    
    $tuCurl = curl_init();
    curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_token']);
    curl_setopt($tuCurl, CURLOPT_VERBOSE, TRUE);
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, TRUE);
    
    $data="username=".$paramEtab['login_api']."&password=".$paramEtab['mdp_api']."&token=true";
    curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $data);
    
    
    $tuData = curl_exec($tuCurl);
     
    if(!curl_errno($tuCurl)){
    
      $info = curl_getinfo($tuCurl);
    
      echo 'Took ' . $info['total_time'] . ' seconds to send a request to ' . $info['url'];
    
    } else {
    
      echo 'Curl error: ' . curl_error($tuCurl).'<br>';
      var_dump($tuCurl);
      echo '<br>Code retour anomalie '.curl_errno($tuCurl);
      
      
    
    }
    
    curl_close($tuCurl);
    
    return $tuData;
    
}



static function AppelAPIRecupReferentielMajInfos ($pNomenclature, $paramEtab, $pEnv, $pToken, $pCheminRelatif,$pJson)
{
    //echo '<br>===> AppelAPIRecupReferentielMajInfos : Entree - '.$pCheminRelatif.' nomenclature '.$pNomenclature.'<br><br>';
    
    $tuCurl = curl_init();
    
   switch ($pNomenclature) {

        case 'Periode':
            
            $tab=json_decode($pJson,true);
            
            $url = $paramEtab['url_api_mof'].$pCheminRelatif;
            curl_setopt($tuCurl, CURLOPT_URL, $url);
            curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson);
            curl_setopt($tuCurl, CURLOPT_POST, TRUE);
            
            break;

       
        case 'Formation':
            
            $tab=json_decode($pJson,true);
            //print_r($tab);
            
            $url = $paramEtab['url_api_cof'].$pCheminRelatif.'/'.$tab["code"].'/'.$tab["version"].'/valider';
            //echo 'URL : '.$url.'<br>';
            curl_setopt($tuCurl, CURLOPT_URL, $url);
            curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson);
            curl_setopt($tuCurl, CURLOPT_POST, TRUE);
            
            break;

        case 'AssocierParentStructureUAI':
            
            
            echo 'AssocierParentStructureUAI :Prepration url api <br>';
            print_r($pJson);
            
            
            $tab=json_decode($pJson['json'],true);
            
            $url = $paramEtab['url_api_ref'].$pCheminRelatif.'/'.$pJson["codeEnfant"].'/associerParent';
            
            $pJson=$pJson['json'];
            curl_setopt($tuCurl, CURLOPT_URL, $url);
            curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson );
            curl_setopt($tuCurl, CURLOPT_CUSTOMREQUEST, "PUT");
            
            break;

        
        default:
            
            curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_ref'].$pCheminRelatif);
            curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $pJson);
            curl_setopt($tuCurl, CURLOPT_POST, TRUE);
            
            break;
        
        echo 'URL : '.$url.'<br>';
        
    }
                            
    
    curl_setopt($tuCurl, CURLOPT_VERBOSE, TRUE);
    
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, TRUE);
    
    $token="Authorization: Bearer ".trim($pToken);
    $auth=$paramEtab['login_api'].":".$paramEtab['mdp_api'];
    curl_setopt($tuCurl, CURLOPT_USERPWD,  $auth);
    $header = array ("Content-Type: application/json",$token);
    curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
    curl_setopt($tuCurl, CURLOPT_HTTPHEADER, $header);


    $tuData = curl_exec($tuCurl);
    
    
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
                
    return $tuData;

}



static function AppelAPIRecupReferentielRecupInfos ($pNomenclature, $paramEtab, $pEnv, $pToken, $pCheminRelatif)
{
    //echo '<br>===> AppelAPIRecupReferentielRecupInfos : Entree - '.$pCheminRelatif.' et nomenclatyre '.$pNomenclature.'<br>';

    
    $tuCurl = curl_init();
    
    echo 'AppelAPIRecupReferentielRecupInfos : '.$pCheminRelatif.' '.$paramEtab['url_api_mof'].' Nomenclature '.$pNomenclature.'<br>';
    
    switch ($pNomenclature) {

        case 'periode':
            
            curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_mof'].$pCheminRelatif);
            $token="Authorization: Bearer ".trim($pToken);
            $auth=$paramEtab['login_api'].":".$paramEtab['mdp_api'];
            curl_setopt($tuCurl, CURLOPT_USERPWD,  $auth);
            $header = array ("Content-Type: application/json",$token);
            curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
            curl_setopt($tuCurl, CURLOPT_HTTPHEADER, $header);            

            break;

        
        
        
        case 'formations':
            
            curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_cof'].$pCheminRelatif);
            $token="Authorization: Bearer ".trim($pToken);
            $auth=$paramEtab['login_api'].":".$paramEtab['mdp_api'];
            curl_setopt($tuCurl, CURLOPT_USERPWD,  $auth);
            $header = array ("Content-Type: application/json",$token);
            curl_setopt($tuCurl, CURLOPT_HEADER, TRUE);
            curl_setopt($tuCurl, CURLOPT_HTTPHEADER, $header);            
            
            break;
        
        default:
            
            curl_setopt($tuCurl, CURLOPT_URL, $paramEtab['url_api_ref'].$pCheminRelatif);
            
            break;
        
    }
                        
    curl_setopt($tuCurl, CURLOPT_VERBOSE, TRUE);
    curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, TRUE);


    $tuData = curl_exec($tuCurl);

    if(!curl_errno($tuCurl)){

      $info = curl_getinfo($tuCurl);


    } else {

      echo 'Curl error: ' . curl_error($tuCurl).'<br>';
      var_dump($tuCurl);
      echo '<br>Code retour anomalie '.curl_errno($tuCurl);



    }

    curl_close($tuCurl);
    
    return $tuData;

}





	function connect_postgres($paramEtab)
	{

     
                $chaineConnexion="host=".$paramEtab['host_bd']." port=".$paramEtab['port_bd']." dbname=".$paramEtab['instance']." user=".$paramEtab['login_bd']." password=".$paramEtab['mdp_bd'];
                if ( $connpg=pg_connect($chaineConnexion) )
                        return $connpg;
                    else {
                         $err = pg_last_error();
                         print_r($err);
                    }
		
		return $connpg;

	}

	
	



}

?>
