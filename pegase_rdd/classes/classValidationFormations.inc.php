<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classValidationFormations
 *
 * @author be101012ri
 */
class ValidationFormations {
    
    
    var $codeFormation='';
    var $versionFormation='';
    
    
function __construct ()        {
     
        
     $this->codeFormation ='';                                        
     $this->versionFormation='';              
     
}


function deleteFormationsValideesDansBD ($pConnBd)
{
    
    $req='delete FROM local_rdd.rdd_validation_formation';
        

        
        //echo "requete ".$req."<br>";
        $findResult = pg_query($pConnBd,$req);
        $numrows    = pg_num_rows($findResult);
                        
      return $numrows;
    
}



function insertFormationValideeDansBD ($pConnBd, $pTabRef)
{
    
    
        //$pNomenclature='BourseAideFinanciere';
        
        //echo 'MajRefNomenclatureGeneriqueDansPegase<br>'
        //    . 'Recuperation des referentiels inscrits dans la base de données<br>'
        //    . 'Pour '.$pNomenclature.'<br>';
       
        
        //echo '<br>Tableau de données<br>';
        //print_r($pTabRef);
        $i=0;
        $nbFormation=count($pTabRef);
        echo 'nombre de formations '.$nbFormation.'<br>';
                
        while ($i<count($pTabRef)) {

            
            // Code valeur obligatoire
            $this->codeFormation = "'".$pTabRef[$i]->code."'"; 
                
            if (!empty($pTabRef[$i]->version))       
                $this->versionFormation = "'".str_replace('\'','\'\'',$pTabRef[$i]->version)."'"; else $this->codeReferentielExterne = "''";
                
                
                
            $req='INSERT INTO local_rdd.rdd_validation_formation(
            code, version)
            VALUES ('.$this->codeFormation.
                     ','.$this->versionFormation.
                     ')';        
             
            //echo '<br><br><br>'.$req.'<br>';

            $findResult = pg_query($pConnBd,$req);
            $i++;

            };
         return $i;
}



function selectFormationsValideesDansBD ($connexion)
{
    

        //echo 'entrer dans selectRefNomenclatureGenerique<br>';
        $req='SELECT *
                FROM local_rdd.rdd_validation_formation'            ;
        
        //echo'req '.$req.'<br>';

        
        $findResult = pg_query($connexion,$req);
        $numrows    = pg_num_rows($findResult);
        
        
        $tabRef=array();
        $j=0;
        while ($data = pg_fetch_array($findResult)) {
            $tabRef[$j]=$data;
            $j++;
      }
      
      //echo '<br>';
      //print_r($tabRef);
      //echo '<br>';
                
      return $tabRef;

}



    function formatFormationsValidees ($bdRef) {
    
        
        $i=0;
        $selectionInfosBD=Array();
        while ($i<count($bdRef)) {

            //echo '<br>====> UAI :'.$bdRef[$i]['codeUAI'].'<br>';

                $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
                $selectionInfosBD[$i]['version']=$bdRef[$i]['version'];
            
            //echo 'Sortie formatage tableau avant json UAI : '.$selectionInfosBD[$i]['codeUai'].'<br>';
            $i++;
            
        }    

        return $selectionInfosBD;
    }

function formatJsonPourAppelAPIPegase($selectionInfosBD, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif ) {
    
    
        $resultat= array();               
        $i=0;
        while ($i<count($selectionInfosBD)) {
           
            $jsonRef = json_encode($selectionInfosBD[$i]);
            //echo '<pre>';
            //print_r($jsonRef);
            //echo '</pre><br>';
            //echo '<br><br>===> UAI '.$selectionInfosBD[$i]['codeUai'].'<br>';
                //echo '<br><br>Avec UAI<br><br>';
            $resultat= BaseDeDonnees::AppelAPIRecupReferentielMajInfos( $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif, $jsonRef);
            
            //echo 'resultat : '.print_r($resultat).'<br>';

            $i++;
            }

            echo 'Nombre de lignes traitées  : '.$i.'<br>';
            //print_r($resultat);
            return $resultat;

    
}
    

    
}
