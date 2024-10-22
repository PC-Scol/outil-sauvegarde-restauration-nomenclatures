<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classeReferentielPegase
 *
 * @author be101012ri
 */
class OdfPegase {
    
        
var  $typeNomenclature                                     ='';
var  $code                                                 ='';
var  $libelle                                              ='';
var  $libelleCourt                                         ='';
var  $libelleLong                                          ='';
var  $libelleAffichage                                     ='';
var  $dateDebut                                    ='';
var  $dateFin                                      ='';
var  $anneeUniversitaire                                   ='';
var  $active                                               =false;
var  $valideOuFutur                                        =false;


    function __construct ()
        {
           $this->typeNomenclature                                     ='';     
           $this->code                                                 ='';     
           $this->libelle                                              ='';     
           $this->libelleCourt                                         ='';     
           $this->libelleLong                                          ='';     
           $this->libelleAffichage                                     ='';     
           $this->dateDebut                                    ='';     
           $this->dateFin                                      ='';     
           $this->anneeUniversitaire                                   ='';     
           $this->active                                               =false;     
           $this->valideOuFutur                                        =false;     
        }




function setPeriodeMiseEnOeuvre  (  $pTypeNomenclature                                ,   
                                      $pCode                                            ,   
                                      $pLibelle ,
                                      $pLibelleCourt                                    ,   
                                      $pLibelleLong                                     ,   
                                      $pLibelleAffichage                                ,   
                                      $pDateDebutValidite                               ,   
                                      $pDateFinValidite                                 ,   
                                      $pAnneeUniversitaire                                   ,   
                                      $pActive                                     ,   
                                      $pValideOuFutur                                  
                                     )   {  
    $this->typeNomenclature                                = $pTypeNomenclature                                 ; 
    $this->code                                            = $pCode                                             ; 
    $this->libelle                                    = $pLibelle                                     ; 
    $this->libelleCourt                                    = $pLibelleCourt                                     ; 
    $this->libelleLong                                     = $pLibelleLong                                      ; 
    $this->libelleAffichage                                = $pLibelleAffichage                                 ; 
    $this->dateDebut                               = $pDateDebutValidite                                ; 
    $this->dateFin                                 = $pDateFinValidite                                  ; 
    $this->anneeUniversitaire                                       = $pAnneeUniversitaire                                      ; 
    $this->active                                          = $pActive                                   ; 
    $this->valideOuFutur                                        = $pValideOuFutur                                          ; 
                                     }
     


function setTypeNomenclature                                   ($pTypeNomenclature                                )  { $this->typeNomenclature                                = $pTypeNomenclature                                 ; }                 
function setCode                                               ($pCode                                            )  { $this->code                                            = $pCode                                             ; }                 
function setLibelle                                       ($pLibelleCourt                                    )  { $this->libelle                                    = $pLibelle                                     ; }                 
function setLibelleCourt                                       ($pLibelleCourt                                    )  { $this->libelleCourt                                    = $pLibelleCourt                                     ; }                 
function setLibelleLong                                        ($pLibelleLong                                     )  { $this->libelleLong                                     = $pLibelleLong                                      ; }                 
function setLibelleAffichage                                   ($pLibelleAffichage                                )  { $this->libelleAffichage                                = $pLibelleAffichage                                 ; }                 
function setDateDebutValidite                                  ($pDateDebutValidite                               )  { $this->dateDebut                               = $pDateDebutValidite                                ; }                 
function setDateFinValidite                                    ($pDateFinValidite                                 )  { $this->dateFin                                 = $pDateFinValidite                                  ; }                 
function setAnneeUniversitaire                                 ($pAnneeUniversitaire                                   )  { $this->anneeUniversitaire                                   = $pTemoinVisible                                    ; }                 
function setActive                                       ($pActive                                    )  { $this->active                                    = $pTemoinLivre                                      ; }                 
function setValideOuFutur                                      ($pValideOuFutur                                   )  { $this->valideOuFutur                                   = $pCategorieObjet                                   ; }                 


function getNomenclatureGenerique                              ( )  {  return $this ;                                                   }

function getTypeNomenclature                                   ( )  { return $this->typeNomenclature                                 ; }                 
function getCode                                               ( )  { return $this->code                                             ; }                 
function getLibelle                                       ( )  { return $this->libelle                                   ; }                 
function getLibelleCourt                                       ( )  { return $this->libelleCourt                                     ; }                 
function getLibelleLong                                        ( )  { return $this->libelleLong                                      ; }                 
function getLibelleAffichage                                   ( )  { return $this->libelleAffichage                                 ; }                 
function getDateDebutValidite                                  ( )  { return $this->dateDebut                                ; }                 
function getDateFinValidite                                    ( )  { return $this->dateFin                                  ; }                 
function getAnneeUniversitaire                                      ( )  { return $this->anneeUniversitaire                                 ; }                 
function getActive                                        ( )  { return $this->active                                     ; }                 
function getValideOuFutur                                   ( )  { return $this->valideOuFutur                                   ; }                 

    
static function formatDateFinValiditeVersPegase($date) {
    if ($date<>"") 
            $dateCalcule=$date;
            else $dateCalcule=null;
                
    return $dateCalcule;
                
    }    

function deletePeriodeMiseEnOeuvreDansBd ($pConnBd)
{
    
    $req='delete FROM local_rdd.rdd_periode';
        

        
        //echo "requete ".$req."<br>";
        $findResult = pg_query($pConnBd,$req);
        $numrows    = pg_num_rows($findResult);
                        
      return $numrows;
    
}

function insertPeriodeMiseEnOeuvreDansBd ($pConnBd, $pTabRef)
{
    
    
          $booBoucle=false;
        $i=0;
        while ($i<count($pTabRef)) {

            $this->code = "'".$pTabRef[$i]->code."'"; 
                
            if (!empty($pTabRef[$i]->libelle))       
                $this->libelle = "'".str_replace('\'','\'\'',$pTabRef[$i]->libelle)."'"; else $this->libelle = "''";


            if (!empty($pTabRef[$i]->libelleCourt))       
                $this->libelleCourt = "'".str_replace('\'','\'\'',$pTabRef[$i]->libelleCourt)."'"; else $this->libelleCourt = "''";
                
            if (!empty($pTabRef[$i]->libelleLong))        
                $this->libelleLong = "'".str_replace('\'','\'\'',$pTabRef[$i]->libelleLong)."'"; else $this->libelleLong = "''";
                
            if (!empty($pTabRef[$i]->libelleAffichage))   
                $this->libelleAffichage = "'".str_replace('\'','\'\'',$pTabRef[$i]->libelleAffichage)."'"; else $this->libelleAffichage = "''";
                
            if (!empty($pTabRef[$i]->dateDebut))  
                $this->dateDebut = "'".$pTabRef[$i]->dateDebut."'"; else $this->dateDebut = "''";
                
            if (!empty($pTabRef[$i]->dateFin))    
                $this->dateFin = "'".$pTabRef[$i]->dateFin."'"; else $this->dateFin = "''";
                //echo 'dateFin : '.$this->dateFin .'<br>';
                
             if ( isset($pTabRef[$i]->active))
                $this->active = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]->active);    
                
            if ( isset($pTabRef[$i]->valideOuFutur))  
                $this->valideOuFutur = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]->valideOuFutur);
 
            if ((isset($pTabRef[$i]->anneeUniversitaire)) and (!empty($pTabRef[$i]->anneeUniversitaire)))   
                "'".$this->anneeUniversitaire = "'".$pTabRef[$i]->anneeUniversitaire."'"; else $this->anneeUniversitaire = "''";
                
                 
            $req='INSERT INTO local_rdd.rdd_periode(
             code, libelle, "libelleCourt", "libelleLong", "libelleAffichage",  "dateDebut", "dateFin", 
            "anneeUniversitaire", "active", "valideOuFutur")
            VALUES ('.$this->code.
                     ','.$this->libelle. 
                     ','.$this->libelleCourt. 
                     ','.$this->libelleLong.                    
                     ','.$this->libelleAffichage          .                     
                     ','.$this->dateDebut         .                     
                     ','.$this->dateFin           .                     
                     ','.$this->anneeUniversitaire             .                     
                     ','.$this->active               .                     
                     ','.$this->valideOuFutur            .                     
                     ')';        
             
            //echo '<br>'.$req.'<br>';

            $findResult = pg_query($pConnBd,$req);

            $i++;
            
            };
         return $i;
}




function selectPeriodeDansBD ( $connexion)
{
    

        //echo 'entrer dans selectRefNomenclatureGenerique<br>';
        $req='SELECT *
                FROM local_rdd.rdd_periode order by local_rdd.rdd_periode.code';
        
        //echo'req '.$req.'<br>';

        
        $findResult = pg_query($connexion,$req);
        $numrows    = pg_num_rows($findResult);
        
        
        $tabRef=array();
        $j=0;
        while ($data = pg_fetch_array($findResult)) {
            $tabRef[$j]=$data;
            $j++;
      }
      
                
      return $tabRef;

}


function formatJsonPourAppelAPIPegase($selectionInfosBD, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif ) {
    
    
        $resultat= array();               
        $i=0;
        while ($i<count($selectionInfosBD)) {
           
            $jsonRef = json_encode($selectionInfosBD[$i]);
            //echo '<pre>';
            //print_r($jsonRef);
            //echo '</pre><br>';
            $resultat= BaseDeDonnees::AppelAPIRecupReferentielMajInfos( $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif, $jsonRef);
            //echo 'resultat : '.print_r($resultat).'<br>';

            $i++;
            }

            echo 'Nombre de ligne traitées : '.$i.'<br>';
            //print_r($resultat);
            return $resultat;

    
}

    
function formatPeriodeMiseEnOeuvre ($bdRef) {
    
        //echo 'Entrer dans formatRefBourseAideFinancieres '.count($bdRef).'<br>';
        //print_r($bdRef[3]);
        $i=0;
        while ($i<count($bdRef)) {

            //echo '$i'.$i.'<br>';
          
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelle']=$bdRef[$i]['libelle'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['dateDebut']=$bdRef[$i]['dateDebut'];
            
            $selectionInfosBD[$i]['dateFin']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFin']);
            $selectionInfosBD[$i]['active']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['active']);

            $selectionInfosBD[$i]['valideOuFutur']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['valideOuFutur']);
  
            $selectionInfosBD[$i]['anneeUniversitaire']=$bdRef[$i]['anneeUniversitaire'];

            $i++;
            
        }    

        //echo 'sortie de formatRefBourseAideFinancieres<br>';
        return $selectionInfosBD;
    }

    
    
}