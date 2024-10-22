<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classStructureUAI
 *
 * @author be101012ri
 */

class StructureUAI {
    
    
    var $code ='';
    var $codeReferentielExterne='';
    var $codeUai ='';
    var $denominationPrincipale='';
    var $denominationComplementaire='';
    var $appellationOfficielle='';
    var $commentaire='';
    var $dateDebutValidite='';
    var $dateFinValidite='';
    var $temoinVisible=false;
    var $sigleUai='';
    var $typeUaiCode='';
    var $typeUaiLibelle='';
    var $categorieJuridiqueCode='';
    var $categorieJuridiqueLibelle='';
    var $adresse='';
    var $adresse1='';
    var $adresse2='';
    var $adresse3='';
    var $adresse4='';
    var $adresse5='';
    var $codePostal='';
    var $localiteAcheminement='';
    var $codePaysAcheminement                                 =0;
    var $libelleCourtPaysAcheminement='';
    var $pays='';
    var $commune='';
    var $responsable='';
    var $respNom='';
    var $respPrenom='';
    var $respTitre='';
    var $respDateDebutValidite='';
    var $respDateFinValidite='';
    var $parent='';
    var $estStructureMere='';
    
    
    
    function __construct ()        {
     
        
     $this->code ='';                                        
     $this->codeReferentielExterne='';                       
     $this->codeUai ='';                                      
     $this->denominationPrincipale='';                       
     $this->denominationComplementaire='';                   
     $this->appellationOfficielle='';                        
     $this->commentaire='';                                  
     $this->dateDebutValidite='';                            
     $this->dateFinValidite='';                              
     $this->temoinVisible=false;                             
     $this->sigleUai='';                                     
     $this->typeUaiCode='';                                  
     $this->typeUaiLibelle='';                               
     $this->categorieJuridiqueCode='';                       
     $this->categorieJuridiqueLibelle='';                    
     $this->adresse='';                                      
     $this->adresse1='';                                     
     $this->adresse2='';                                     
     $this->adresse3='';                                     
     $this->adresse4='';                                     
     $this->adresse5='';                                     
     $this->codePostal='';                                   
     $this->localiteAcheminement='';                         
     $this->libelleCourtPaysAcheminement='';                 
     $this->pays=new ReferentielPegase();               
     $this->commune=new ReferentielPegase();            
     $this->responsable='';                                  
     $this->respNom='';                                      
     $this->respPrenom='';                                   
     $this->respTitre='';                                    
     $this->respDateDebutValidite='';                        
     $this->respDateFinValidite='';     
     $this->parent=''; 
    }

    

function deleteStructureUAIDansBD ($pConnBd)
{
    
    $req='delete FROM local_rdd.rdd_ref_structure';
        

        
        //echo "requete ".$req."<br>";
        $findResult = pg_query($pConnBd,$req);
        $numrows    = pg_num_rows($findResult);
                        
      return $numrows;
    
}

function insertStructureDansBD ($pConnBd, $pTabRef)
{
    
    

        $i=0;
        while ($i<count($pTabRef)) {

            
            // Code valeur obligatoire
            $this->code = "'".$pTabRef[$i]["code"]."'"; 
                
            if (!empty($pTabRef[$i]["codeReferentielExterne"]))       
                $this->codeReferentielExterne = "'".str_replace('\'','\'\'',$pTabRef[$i]["codeReferentielExterne"])."'"; else $this->codeReferentielExterne = "''";
                
            if (!empty($pTabRef[$i]["codeUai"]))        
                $this->codeUai  = "'".str_replace('\'','\'\'',$pTabRef[$i]["codeUai"])."'"; else $this->codeUai  = "''";
                
            if (!empty($pTabRef[$i]["denominationPrincipale"]))   
                $this->denominationPrincipale = "'".str_replace('\'','\'\'',$pTabRef[$i]["denominationPrincipale"])."'"; else $this->denominationPrincipale = "''";
                
            if (!empty($pTabRef[$i]["denominationComplementaire"]))   
                $this->denominationComplementaire = "'".str_replace('\'','\'\'',$pTabRef[$i]["denominationComplementaire"])."'"; else $this->denominationComplementaire = "''";

            if (!empty($pTabRef[$i]["appellationOfficielle"]))   
                $this->appellationOfficielle = "'".str_replace('\'','\'\'',$pTabRef[$i]["appellationOfficielle"])."'"; else $this->appellationOfficielle = "''";

            if (!empty($pTabRef[$i]["commentaire"]))   
                $this->commentaire = "'".str_replace('\'','\'\'',$pTabRef[$i]["commentaire"])."'"; else $this->commentaire = "''";
                
            if (!empty($pTabRef[$i]["dateDebutValidite"]))  
                $this->dateDebutValidite = "'".$pTabRef[$i]["dateDebutValidite"]."'"; else $this->dateDebutValidite = "''";
                
            if (!empty($pTabRef[$i]["dateFinValidite"]))    
                $this->dateFinValidite = "'".$pTabRef[$i]["dateFinValidite"]."'"; else $this->dateFinValidite = "''";
                //echo 'dateFinValidite : '.$this->dateFinValidite .'<br>';
                
             if ( isset($pTabRef[$i]["temoinVisible"]))
                $this->temoinVisible = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinVisible"]);    
                
            if ((isset($pTabRef[$i]["sigleUai"])) and (!empty($pTabRef[$i]["sigleUai"])))   
                "'".$this->sigleUai = "'".$pTabRef[$i]["sigleUai"]."'"; else $this->sigleUai = "''";
                
            if ((isset($pTabRef[$i]["typeUaiCode"]))        and (!empty($pTabRef[$i]["typeUaiCode"])))  
                "'".$this->typeUaiCode = "'".$pTabRef[$i]["typeUaiCode"]."'"; else $this->typeUaiCode = "''";

            if (!empty($pTabRef[$i]["typeUaiLibelle"]))   
                $this->typeUaiLibelle = "'".str_replace('\'','\'\'',$pTabRef[$i]["typeUaiLibelle"])."'"; else $this->typeUaiLibelle = "''";

            if ((isset($pTabRef[$i]["categorieJuridiqueCode"]))    and (!empty($pTabRef[$i]["categorieJuridiqueCode"])))       
                "'".$this->categorieJuridiqueCode = "'".$pTabRef[$i]["categorieJuridiqueCode"]."'"; else $this->categorieJuridiqueCode = "''";

            if (!empty($pTabRef[$i]["categorieJuridiqueLibelle"]))   
                $this->categorieJuridiqueLibelle = "'".str_replace('\'','\'\'',$pTabRef[$i]["categorieJuridiqueLibelle"])."'"; else $this->categorieJuridiqueLibelle = "''";

            if (!empty($pTabRef[$i]["adresse"]["adresse1"]))   
                $this->adresse1 = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["adresse1"])."'"; else $this->adresse1 = "''";

            if (!empty($pTabRef[$i]["adresse"]["adresse2"]))   
                $this->adresse2 = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["adresse2"])."'"; else $this->adresse2 = "''";

            if (!empty($pTabRef[$i]["adresse"]["adresse3"]))   
                $this->adresse3 = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["adresse3"])."'"; else $this->adresse3 = "''";

            if (!empty($pTabRef[$i]["adresse"]["adresse4"]))   
                $this->adresse4 = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["adresse4"])."'"; else $this->adresse4 = "''";

            if (!empty($pTabRef[$i]["adresse"]["adresse5"]))   
                $this->adresse5 = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["adresse5"])."'"; else $this->adresse5 = "''";

            if (!empty($pTabRef[$i]["adresse"]["codePostal"]))   
                $this->codePostal = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["codePostal"])."'"; else $this->codePostal = "''";

            if (!empty($pTabRef[$i]["adresse"]["localiteAcheminement"]))   
                $this->localiteAcheminement = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["localiteAcheminement"])."'"; else $this->localiteAcheminement = "''";

            if (!empty($pTabRef[$i]["adresse"]["codePaysAcheminement"]))   
                "'".$this->codePaysAcheminement = $pTabRef[$i]["adresse"]["codePaysAcheminement"]; else $this->codePaysAcheminement = 'null';
                //echo "codePaysAcheminement :".$this->codePaysAcheminement."<br>";

            if (!empty($pTabRef[$i]["adresse"]["libelleCourtPaysAcheminement"]))   
                $this->libelleCourtPaysAcheminement = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["libelleCourtPaysAcheminement"])."'"; else $this->libelleCourtPaysAcheminement = "''";

            if (!empty($pTabRef[$i]["adresse"]["pays"]["typeNomenclature"]))    
                $this->pays->typeNomenclature = "'".$pTabRef[$i]["adresse"]["pays"]["typeNomenclature"]."'"; else $this->pays->typeNomenclature = "''";
                
            if (!empty($pTabRef[$i]["adresse"]["pays"]["code"]))   
                $this->pays->code = $pTabRef[$i]["adresse"]["pays"]["code"]; else $this->pays->code  = 'null';

            if (!empty($pTabRef[$i]["adresse"]["pays"]["libelleCourt"]))   
                $this->pays->libelleCourt = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["pays"]["libelleCourt"])."'"; else $this->pays->libelleCourt  = "''";
                
            if (!empty($pTabRef[$i]["adresse"]["pays"]["libelleLong"]))   
                $this->pays->libelleLong = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["pays"]["libelleLong"])."'"; else $this->pays->libelleLong  = "''";
                
            if (!empty($pTabRef[$i]["adresse"]["pays"]["libelleAffichage"]))   
                $this->pays->libelleAffichage = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["pays"]["libelleAffichage"])."'"; else $this->pays->libelleAffichage  = "''";
                
            if (!empty($pTabRef[$i]["adresse"]["pays"]["prioriteAffichage"]))   
                $this->pays->prioriteAffichage = $pTabRef[$i]["adresse"]["pays"]["prioriteAffichage"]; else $this->pays->prioriteAffichage  = 'null';
                
            if (!empty($pTabRef[$i]["adresse"]["pays"]["dateDebutValidite"]))  
                $this->pays->dateDebutValidite = "'".$pTabRef[$i]["adresse"]["pays"]["dateDebutValidite"]."'"; else $this->pays->dateDebutValidite = "''";
                
            if (!empty($pTabRef[$i]["adresse"]["pays"]["dateFinValidite"]))    
                $this->pays->dateFinValidite = "'".$pTabRef[$i]["adresse"]["pays"]["dateFinValidite"]."'"; else $this->pays->dateFinValidite = "''";
                //echo 'paysDateFinValidite : '.$this->pays->dateFinValidite .'<br>';
                
             if ( isset($pTabRef[$i]["adresse"]["pays"]["temoinVisible"]))
                $this->pays->temoinVisible = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["adresse"]["pays"]["temoinVisible"]);
             else $this->pays->temoinVisible = 'null';
                
             if ( isset($pTabRef[$i]["adresse"]["pays"]["temoinLivre"]))
                $this->pays->temoinLivre = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["adresse"]["pays"]["temoinLivre"]);    
             else $this->pays->temoinLivre='null';
                
             if ( isset($pTabRef[$i]["adresse"]["pays"]["continent"]))
                $this->pays->continent = "'".$pTabRef[$i]["adresse"]["pays"]["continent"]."'"; else $this->pays->continent = "''";
                
             if ( isset($pTabRef[$i]["adresse"]["pays"]["libelleNationalite"]))
                $this->pays->libelleNationalite = "'".$pTabRef[$i]["adresse"]["pays"]["libelleNationalite"]."'"; else $this->pays->libelleNationalite = "''";
                
             if ( isset($pTabRef[$i]["adresse"]["pays"]["codeDrapeau"]))
                $this->pays->codeDrapeau = "'".$pTabRef[$i]["adresse"]["pays"]["codeDrapeau"]."'"; else $this->pays->codeDrapeau = "''";
                
             if ( isset($pTabRef[$i]["adresse"]["pays"]["temoinUnionEuropeenne"]))
                $this->pays->temoinUnionEuropeenne = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["adresse"]["pays"]["temoinUnionEuropeenne"]);    
             else $this->pays->temoinUnionEuropeenne='null';
             
             if ( isset($pTabRef[$i]["adresse"]["pays"]["temoinAccords"]))
                $this->pays->temoinAccords = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["adresse"]["pays"]["temoinAccords"]);    
              else $this->pays->temoinAccords='null';
             
             if ( isset($pTabRef[$i]["adresse"]["pays"]["codeIso3611"]))
                $this->pays->codeIso3611 = "'".$pTabRef[$i]["adresse"]["pays"]["codeIso3611"]."'"; else $this->pays->codeIso3611 = "''";

            if (!empty($pTabRef[$i]["adresse"]["commune"]["typeNomenclature"]))    
                $this->commune->typeNomenclature = "'".$pTabRef[$i]["adresse"]["commune"]["typeNomenclature"]."'"; else $this->commune->typeNomenclature = "''";
                
             if ( isset($pTabRef[$i]["adresse"]["commune"]["code"]))
                $this->commune->code = "'".$pTabRef[$i]["adresse"]["commune"]["code"]."'"; else $this->commune->code = "''";
             
            if (!empty($pTabRef[$i]["adresse"]["commune"]["libelleCourt"]))   
                $this->commune->libelleCourt = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["commune"]["libelleCourt"])."'"; else $this->commune->libelleCourt = "''";
             
            if (!empty($pTabRef[$i]["adresse"]["commune"]["libelleLong"]))   
                $this->commune->libelleLong = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["commune"]["libelleLong"])."'"; else $this->commune->libelleLong = "''";
             
            if (!empty($pTabRef[$i]["adresse"]["commune"]["libelleAffichage"]))   
                $this->commune->libelleAffichage = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["commune"]["libelleAffichage"])."'"; else $this->commune->libelleAffichage = "''";

             if ( isset($pTabRef[$i]["adresse"]["commune"]["prioriteAffichage"]))
                $this->commune->prioriteAffichage = $pTabRef[$i]["adresse"]["commune"]["prioriteAffichage"]; else $this->commune->prioriteAffichage = 'null';

            if (!empty($pTabRef[$i]["adresse"]["commune"]["dateDebutValidite"]))  
                $this->commune->dateDebutValidite = "'".$pTabRef[$i]["adresse"]["commune"]["dateDebutValidite"]."'"; else $this->commune->dateDebutValidite = "''";
                
            if (!empty($pTabRef[$i]["adresse"]["commune"]["dateFinValidite"]))    
                $this->commune->dateFinValidite = "'".$pTabRef[$i]["adresse"]["commune"]["dateFinValidite"]."'"; else $this->commune->dateFinValidite = "''";

            if ( isset($pTabRef[$i]["adresse"]["commune"]["temoinVisible"]))
                $this->commune->temoinVisible = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["adresse"]["commune"]["temoinVisible"]);    
            else $this->commune->temoinVisible='null';
                
             if ( isset($pTabRef[$i]["adresse"]["commune"]["temoinLivre"]))
                $this->commune->temoinLivre = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["adresse"]["commune"]["temoinLivre"]);    
             else $this->commune->temoinLivre='null';
                
            if (!empty($pTabRef[$i]["adresse"]["commune"]["codePostal"]))    
                $this->commune->codePostal = "'".$pTabRef[$i]["adresse"]["commune"]["codePostal"]."'"; else $this->commune->codePostal = "''";

            if (!empty($pTabRef[$i]["adresse"]["commune"]["codeInsee"]))    
                $this->commune->codeInsee = "'".$pTabRef[$i]["adresse"]["commune"]["codeInsee"]."'"; else $this->commune->codeInsee = "''";

            if (!empty($pTabRef[$i]["adresse"]["commune"]["codeInseeAncien"]))    
                $this->commune->codeInseeAncien = "'".$pTabRef[$i]["adresse"]["commune"]["codeInseeAncien"]."'"; else $this->commune->codeInseeAncien = "''";

            if (!empty($pTabRef[$i]["adresse"]["commune"]["ligne5"]))    
                $this->commune->ligne5 = "'".$pTabRef[$i]["adresse"]["commune"]["ligne5"]."'"; else $this->commune->ligne5 = "''";

            if (!empty($pTabRef[$i]["adresse"]["commune"]["libelleAcheminement"]))    
                $this->commune->libelleAcheminement = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresse"]["commune"]["libelleAcheminement"])."'"; else $this->commune->libelleAcheminement = "''";
                
                
                
            if (!empty($pTabRef[$i]["responsable"]["nom"]))   
                $this->respNom = "'".str_replace('\'','\'\'',$pTabRef[$i]["responsable"]["nom"])."'"; else $this->respNom = "''";

            if (!empty($pTabRef[$i]["responsable"]["prenom"]))   
                $this->respPrenom = "'".str_replace('\'','\'\'',$pTabRef[$i]["responsable"]["prenom"])."'"; else $this->respPrenom = "''";

            if (!empty($pTabRef[$i]["responsable"]["titre"]))   
                $this->respTitre = "'".str_replace('\'','\'\'',$pTabRef[$i]["responsable"]["titre"])."'"; else $this->respTitre = "''";
                
            if (!empty($pTabRef[$i]["responsable"]["dateDebutValidite"]))  
                $this->respDateDebutValidite = "'".$pTabRef[$i]["responsable"]["dateDebutValidite"]."'"; else $this->respDateDebutValidite = "''";
                
            if (!empty($pTabRef[$i]["responsable"]["dateFinValidite"]))    
                $this->respDateFinValidite = "'".$pTabRef[$i]["responsable"]["dateFinValidite"]."'"; else $this->respDateFinValidite = "''";

            if (!empty($pTabRef[$i]["parent"]))   
                $this->parent = "'".str_replace('\'','\'\'',$pTabRef[$i]["parent"])."'"; else $this->parent = "''";

             if ( isset($pTabRef[$i]["estStructureMere"]))
                $this->estStructureMere = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["estStructureMere"]);    
             else $this->estStructureMere=false;

                
                
            $req='INSERT INTO local_rdd.rdd_ref_structure(
            code, "codeReferentielExterne", "codeUAI", "denominationPrincipale", "appellationOfficielle", commentaire, "dateDebutValidite", 
            "dateFinValidite", "temoinVisible", "sigleUai", "typeUaiCode", "typeUaiLibelle", "categorieJuridiqueCode", 
            "categorieJuridiqueLibelle", adresse1, adresse2, adresse3, adresse4, adresse5, "codePostal", "localiteAcheminement", 
            "codePaysAcheminement", "libelleCourtPaysAcheminement", "paysCode", "paysLibelleCourt", "paysLibelleLong", 
            "paysPrioriteAffichage", "paysDateDebutValidite", "paysDateFinValidite", "paysTemoinVisible", "paysLibelleAffichage", 
            "paysTemoinLivre", "paysContinent", "paysLibelleNationalite", "paysCodeDrapeau", "paysTemoinUnionEuropeenne", 
            "paysTemoinAccords", "commCode", "commLibelleCourt", "commLibelleLong", "commPrioriteAffichage", "commDateDebutValidite", 
            "commDateFinValidite", "commTemoinVisible", "respNom", "respPrenom", "respTitre", "respDateDebutValidite", 
            "respDateFinValidite", "denominationComplementaire", "paysCodeIso3611", "paysTypeNomenclature", "commTypeNomenclature", 
            "commLibelleAffichage", "commTemoinLivre", "commCodePostal", "commCodeInsee", "commCodeInseeAncien", "commLigne5", 
            "commLibelleAcheminement","parent","estStructureMere")
            VALUES ('.$this->code.
                     ','.$this->codeReferentielExterne.
                     ','.$this->codeUai. 
                     ','.$this->denominationPrincipale.                    
                     ','.$this->appellationOfficielle          .                     
                     ','.$this->commentaire         .                     
                     ','.$this->dateDebutValidite         .                     
                     ','.$this->dateFinValidite           .                     
                     ','.$this->temoinVisible             .                     
                     ','.$this->sigleUai               .                     
                     ','.$this->typeUaiCode            .                     
                     ','.$this->typeUaiLibelle                   .                     
                     ','.$this->categorieJuridiqueCode               .                     
                     ','.$this->categorieJuridiqueLibelle         .                     
                     ','.$this->adresse1                .                     
                     ','.$this->adresse2                 .                     
                     ','.$this->adresse3               .                     
                     ','.$this->adresse4              .                     
                     ','.$this->adresse5   .                     
                     ','.$this->codePostal       .                     
                     ','.$this->localiteAcheminement              .     
                     ','.$this->codePaysAcheminement              .                     
                     ','.$this->libelleCourtPaysAcheminement .
                     ','.$this->pays->code.                
                     ','.$this->pays->libelleCourt             .               
                     ','.$this->pays->libelleLong .               
                     ','.$this->pays->prioriteAffichage             .               
                     ','.$this->pays->dateDebutValidite   .               
                     ','.$this->pays->dateFinValidite               .               
                     ','.$this->pays->temoinVisible      .               
                     ','.$this->pays->libelleAffichage                  .               
                     ','.$this->pays->temoinLivre         .               
                     ','.$this->pays->continent                     .               
                     ','.$this->pays->libelleNationalite                     .               
                     ','.$this->pays->codeDrapeau.               
                     ','.$this->pays->temoinUnionEuropeenne            .               
                     ','.$this->pays->temoinAccords                           .               
                     ','.$this->commune->code                         .               
                     ','.$this->commune->libelleCourt                 .               
                     ','.$this->commune->libelleLong                 .               
                     ','.$this->commune->prioriteAffichage                       .               
                     ','.$this->commune->dateDebutValidite              .               
                     ','.$this->commune->dateFinValidite                     .               
                     ','.$this->commune->temoinVisible           .               
                     ','.$this->respNom                   .               
                     ','.$this->respPrenom                     .               
                     ','.$this->respTitre .               
                     ','.$this->respDateDebutValidite             .               
                     ','.$this->respDateFinValidite. 
                     ','.$this->denominationComplementaire .
                     ','.$this->pays->codeIso3611 .
                     ','.$this->pays->typeNomenclature .
                     ','.$this->commune->typeNomenclature .
                     ','.$this->commune->libelleAffichage .
                     ','.$this->commune->temoinLivre .
                     ','.$this->commune->codePostal .
                     ','.$this->commune->codeInsee .
                     ','.$this->commune->codeInseeAncien .
                     ','.$this->commune->ligne5 .
                     ','.$this->commune->libelleAcheminement .
                     ','.$this->parent .
                     ','.$this->estStructureMere .
                     ')';        
             
            //echo '<br><br><br>'.$req.'<br>';

            $findResult = pg_query($pConnBd,$req);
            
            
            $i++;

            };
         return $i;
}

    


function selectStructureUAIDansBD ($connexion)
{
    

        //echo 'entrer dans selectRefNomenclatureGenerique<br>';
        $req='SELECT *
                FROM local_rdd.rdd_ref_structure'            ;
        
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
    

    function formatStructure ($bdRef) {
    
        //echo 'Entrer dans formatRefCategorieSocioPro '.count($bdRef).'<br>';
        $i=0;
        $selectionInfosBD=Array();
        while ($i<count($bdRef)) {

            //echo '<br>====> UAI :'.$bdRef[$i]['codeUAI'].'<br>';
            
            if (empty($bdRef[$i]['codeUAI']) or $bdRef[$i]['codeUAI']=="" ) {
                

                $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
                $selectionInfosBD[$i]['codeReferentielExterne']=$bdRef[$i]['codeReferentielExterne'];
                $selectionInfosBD[$i]['codeUai']=$bdRef[$i]['codeUAI'];
                $selectionInfosBD[$i]['denominationPrincipale']=$bdRef[$i]['denominationPrincipale'];
                $selectionInfosBD[$i]['denominationComplementaire']=$bdRef[$i]['denominationComplementaire'];
                $selectionInfosBD[$i]['appellationOfficielle']=intval($bdRef[$i]['appellationOfficielle']);
                $selectionInfosBD[$i]['commentaire']=$bdRef[$i]['commentaire'];
                $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
                $selectionInfosBD[$i]['dateFinValidite']= ReferentielPegase::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
                $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);  
                $selectionInfosBD[$i]['sigleUai']=$bdRef[$i]['sigleUai'];
                $selectionInfosBD[$i]['typeUaiCode']=$bdRef[$i]['typeUaiCode'];
                $selectionInfosBD[$i]['typeUaiLibelle']=$bdRef[$i]['typeUaiLibelle'];
                $selectionInfosBD[$i]['categorieJuridiqueCode']=$bdRef[$i]['categorieJuridiqueCode'];
                $selectionInfosBD[$i]['categorieJuridiqueLibelle']=$bdRef[$i]['categorieJuridiqueLibelle'];
                $selectionInfosBD[$i]['denominationComplementaire']=$bdRef[$i]['denominationComplementaire'];

                $selectionInfosBD[$i]['adresse']['adresse1']=$bdRef[$i]['adresse1'];
                $selectionInfosBD[$i]['adresse']['adresse2']=$bdRef[$i]['adresse2'];
                $selectionInfosBD[$i]['adresse']['adresse3']=$bdRef[$i]['adresse3'];
                $selectionInfosBD[$i]['adresse']['adresse4']=$bdRef[$i]['adresse4'];
                $selectionInfosBD[$i]['adresse']['adresse5']=$bdRef[$i]['adresse5'];
                $selectionInfosBD[$i]['adresse']['codePostal']=$bdRef[$i]['codePostal'];
                $selectionInfosBD[$i]['adresse']['localiteAcheminement']=$bdRef[$i]['localiteAcheminement'];
                $selectionInfosBD[$i]['adresse']['codePaysAcheminement']=$bdRef[$i]['codePaysAcheminement'];
                $selectionInfosBD[$i]['adresse']['libelleCourtPaysAcheminement']=$bdRef[$i]['libelleCourtPaysAcheminement'];
                $selectionInfosBD[$i]['adresse']['pays']['typeNomenclature']='PaysNationalite';
                $selectionInfosBD[$i]['adresse']['pays']['code']=$bdRef[$i]['paysCode'];
                $selectionInfosBD[$i]['adresse']['pays']['libelleCourt']=$bdRef[$i]['paysLibelleCourt'];
                $selectionInfosBD[$i]['adresse']['pays']['libelleLong']=$bdRef[$i]['paysLibelleLong'];
                $selectionInfosBD[$i]['adresse']['pays']['libelleAffichage']=$bdRef[$i]['paysLibelleAffichage'];
                $selectionInfosBD[$i]['adresse']['pays']['prioriteAffichage']=$bdRef[$i]['paysPrioriteAffichage'];
                $selectionInfosBD[$i]['adresse']['pays']['dateDebutValidite']=$bdRef[$i]['paysDateDebutValidite'];
                $selectionInfosBD[$i]['adresse']['pays']['dateFinValidite']=$bdRef[$i]['paysDateFinValidite'];
                $selectionInfosBD[$i]['adresse']['pays']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['paysTemoinVisible']);
                $selectionInfosBD[$i]['adresse']['pays']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['paysTemoinLivre']);
                $selectionInfosBD[$i]['adresse']['pays']['continent']=$bdRef[$i]['paysContinent'];
                $selectionInfosBD[$i]['adresse']['pays']['libelleNationalite']=$bdRef[$i]['paysLibelleNationalite'];
                $selectionInfosBD[$i]['adresse']['pays']['codeDrapeau']=$bdRef[$i]['paysCodeDrapeau'];
                $selectionInfosBD[$i]['adresse']['pays']['temoinUnionEuropeenne']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['paysTemoinUnionEuropeenne']);
                $selectionInfosBD[$i]['adresse']['pays']['temoinAccords']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['paysTemoinAccords']);
                $selectionInfosBD[$i]['adresse']['pays']['codeIso3611']=$bdRef[$i]['paysCodeIso3611'];

                $selectionInfosBD[$i]['adresse']['commune']['typeNomenclature']='Commune';
                $selectionInfosBD[$i]['adresse']['commune']['code']=$bdRef[$i]['commCode'];
                $selectionInfosBD[$i]['adresse']['commune']['libelleCourt']=$bdRef[$i]['commLibelleCourt'];
                $selectionInfosBD[$i]['adresse']['commune']['libelleLong']=$bdRef[$i]['commLibelleLong'];
                $selectionInfosBD[$i]['adresse']['commune']['libelleAffichage']=$bdRef[$i]['commLibelleAffichage'];
                $selectionInfosBD[$i]['adresse']['commune']['prioriteAffichage']=$bdRef[$i]['commPrioriteAffichage'];
                $selectionInfosBD[$i]['adresse']['commune']['dateDebutValidite']=$bdRef[$i]['commDateDebutValidite'];
                $selectionInfosBD[$i]['adresse']['commune']['dateFinValidite']=$bdRef[$i]['commDateFinValidite'];
                $selectionInfosBD[$i]['adresse']['commune']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['commTemoinVisible']);
                $selectionInfosBD[$i]['adresse']['commune']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['commTemoinLivre']);
                $selectionInfosBD[$i]['adresse']['commune']['codePostal']=$bdRef[$i]['commCodePostal'];
                $selectionInfosBD[$i]['adresse']['commune']['codeInsee']=$bdRef[$i]['commCodeInsee'];
                $selectionInfosBD[$i]['adresse']['commune']['codeInseeAncien']=$bdRef[$i]['commCodeInseeAncien'];
                $selectionInfosBD[$i]['adresse']['commune']['ligne5']=$bdRef[$i]['commLigne5'];
                $selectionInfosBD[$i]['adresse']['commune']['libelleAcheminement']=$bdRef[$i]['commLibelleAcheminement'];

                $selectionInfosBD[$i]['responsable']['nom']=$bdRef[$i]['respNom'];
                $selectionInfosBD[$i]['responsable']['prenom']=$bdRef[$i]['respPrenom'];
                $selectionInfosBD[$i]['responsable']['titre']=$bdRef[$i]['respTitre'];
                $selectionInfosBD[$i]['responsable']['dateDebutValidite']=$bdRef[$i]['respDateDebutValidite'];
                $selectionInfosBD[$i]['responsable']['dateFinValidite']=$bdRef[$i]['respDateFinValidite'];
                
                $selectionInfosBD[$i]['parent']=$bdRef[$i]['parent'];
                $selectionInfosBD[$i]['estStructureMere']=$bdRef[$i]['estStructureMere'];
            
            }        else {
                
                $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
                $selectionInfosBD[$i]['codeReferentielExterne']=$bdRef[$i]['codeReferentielExterne'];
                $selectionInfosBD[$i]['codeUai']=$bdRef[$i]['codeUAI'];
                $selectionInfosBD[$i]['denominationPrincipale']=$bdRef[$i]['denominationPrincipale'];
                $selectionInfosBD[$i]['denominationComplementaire']=$bdRef[$i]['denominationComplementaire'];
                $selectionInfosBD[$i]['appellationOfficielle']=intval($bdRef[$i]['appellationOfficielle']);
                $selectionInfosBD[$i]['commentaire']=$bdRef[$i]['commentaire'];
                $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
                $selectionInfosBD[$i]['dateFinValidite']= ReferentielPegase::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
                $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);  

                $selectionInfosBD[$i]['commentaire']=$bdRef[$i]['commentaire'];
                $selectionInfosBD[$i]['responsable']['nom']=$bdRef[$i]['respNom'];
                $selectionInfosBD[$i]['responsable']['prenom']=$bdRef[$i]['respPrenom'];
                $selectionInfosBD[$i]['responsable']['titre']=$bdRef[$i]['respTitre'];
                $selectionInfosBD[$i]['responsable']['dateDebutValidite']=$bdRef[$i]['respDateDebutValidite'];
                $selectionInfosBD[$i]['responsable']['dateFinValidite']=$bdRef[$i]['respDateFinValidite'];

                $selectionInfosBD[$i]['parent']=$bdRef[$i]['parent'];
                $selectionInfosBD[$i]['estStructureMere']=$bdRef[$i]['estStructureMere'];
                
            }
            
            //echo 'Sortie formatage tableau avant json UAI : '.$selectionInfosBD[$i]['codeUai'].'<br>';
            $i++;
            
        }    

        return $selectionInfosBD;
    }



    function formatHierarchieStructure ($bdRef) {
    
        //echo 'Entrer dans formatRefCategorieSocioPro '.count($bdRef).'<br>';
        $i=0;
        $selectionInfosBD=Array();
        while ($i<count($bdRef)) {

            //echo '<br>====> UAI :'.$bdRef[$i]['codeUAI'].'<br>';
            
            $selectionInfosBD[$i]['codeEnfant']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['parent'];
            
            //echo 'Sortie formatage tableau avant json UAI : '.$selectionInfosBD[$i]['codeUai'].'<br>';
            $i++;
            
        }    

        return $selectionInfosBD;
    }    
    
    
function formatJsonPourAppelAPIPegase($selectionInfosBD, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatifSansUAI, $cheminRelatifAvecUAI ) {
    
    
        $resultat= array();               
        $i=0;
        while ($i<count($selectionInfosBD)) {
           
            $jsonRef = json_encode($selectionInfosBD[$i]);

            if (!empty($selectionInfosBD[$i]['codeUai']) and $selectionInfosBD[$i]['codeUai']<>"") {
                //echo '<br><br>Avec UAI<br><br>';
                $resultat= BaseDeDonnees::AppelAPIRecupReferentielMajInfos( $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatifAvecUAI, $jsonRef);
            } else {
                //echo '<br><br>Sans UAI<br><br>';
                $resultat= BaseDeDonnees::AppelAPIRecupReferentielMajInfos( $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatifSansUAI, $jsonRef);
            }
            
            //echo 'resultat : '.print_r($resultat).'<br>';

            $i++;
            }

            echo 'Nombre de lignes traitées  : '.$i.'<br>';
            //print_r($resultat);
            return $resultat;

    
}


function formatJsonHierarchiePourAppelAPIPegase($selectionInfosBD, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif  ) {
    
    
        $resultat= array();               
        $i=0;
        while ($i<count($selectionInfosBD)) {
           
            //print_r($selectionInfosBD[$i]);
            $selectionParamPost = array();
            $selectionParamPost['code']=$selectionInfosBD[$i]['code'];
            //print_r($selectionParamPost);
            $jsonRef = json_encode($selectionParamPost);

            $selectionInfosBD[$i]['json']=$jsonRef;

            $resultat= BaseDeDonnees::AppelAPIRecupReferentielMajInfos( $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif, $selectionInfosBD[$i]);
            
            //echo 'resultat : '.print_r($resultat).'<br>';

            $i++;
            }

            echo 'Nombre de lignes traitées  : '.$i.'<br>';
            //print_r($resultat);
            return $resultat;

    
}
    
}
