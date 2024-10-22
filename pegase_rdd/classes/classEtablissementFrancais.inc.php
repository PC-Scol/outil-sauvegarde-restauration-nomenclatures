<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of classEtablissementFrancais
 *
 * @author be101012ri
 */

class EtablissementFrancais {
    
    
     var $typeNomenclature =''  ;
     var $libelleAffichage ='' ;
     var $prioriteAffichage =0;
     var $dateDebutValidite ='';
     var $dateFinValidite ='';
     var $temoinVisible = false;
     var $temoinLivre = false;
     var $numeroUai ='';
     var $typeNomenclatureUai =''  ;
     var $typeUai ='' ;
     var $typeUaiLibe ='' ;
     var $denominationPrincipale ='' ;
     var $natureUai ='' ;
     var $natureUaiLibe ='' ;
     var $etatEtablissement ='' ;
     var $etatEtablissementLibe  ='' ;
     var $ministereTutelle  ='' ;
     var $ministereTutelleLibe  ='' ;
     var $tutelle2  ='' ;
     var $tutelle2Libe  ='' ;
     var $secteurPublicPrive ='' ;
     var $secteurPublicPriveLibe ='' ;
     var $sigleUai ='' ;
     var $categorieJuridique ='' ;
     var $categorieJuridiqueLibe ='' ;
     var $contratEtablissement ='' ;
     var $contratEtablissementLibe ='' ;
     var $categorieFinanciere  ='' ;
     var $categorieFinanciereLibe  ='' ;
     var $situationComptable  ='' ;
     var $situationComptableLibe  ='' ;
     var $niveauUai  ='' ;
     var $niveauUaiLibe  ='' ;
     var $commune  ='' ;
     var $communeLibe  ='' ;
     var $academie  ='' ;
     var $academieLibe  ='' ;
     var $typeNomenclaturePays  ='' ;
     var $codePays  ='' ;
     var $typeNomenclatureDepartement  ='' ;
     var $codeDepartement  ='' ;
     var $patronymeUai  ='' ;
     var $hebergementEtablissement  ='' ;
     var $hebergementEtablissementLibe  ='' ;
     var $numeroSirenSiretUai  ='' ;
     var $numeroFinessUai  ='' ;
     var $dateDerniereMiseAJour  ='' ;
     var $lieuDitUai  ='' ;
     var $adresseUai ='' ;
     var $boitePostaleUai ='' ;
     var $codePostalUai ='' ;
     var $etatSiradUai ='' ;
     var $localiteAcheminementUai ='' ;
     var $paysEtrangerAcheminement ='' ;
     var $numeroTelephoneUai ='' ;
     var $numeroTelecopieurUai ='' ;
     var $mentionDistribution ='' ;
     var $melUai ='' ;
     var $siteWeb ='' ;
     var $coordonneeX ='' ;
     var $coordonneeY ='' ;
     var $appariement ='' ;
     var $appariementComplement ='' ;
     var $localisation ='' ;
     var $localisationComplement ='' ;
     var $dateGeolocalisation ='' ;
     var $source ='';    
    
    function __construct ()        {
     
     $this->typeNomenclature =''  ;
     $this->libelleAffichage ='' ;
     $this->prioriteAffichage =0;
     $this->dateDebutValidite ='';
     $this->dateFinValidite ='';
     $this->temoinVisible = false;
     $this->temoinLivre = false;
     $this->numeroUai ='';
     $this->typeNomenclatureUai =''  ;
     $this->typeUai ='' ;
     $this->typeUaiLibe ='' ;
     $this->denominationPrincipale ='' ;
     $this->natureUai ='' ;
     $this->natureUaiLibe ='' ;
     $this->etatEtablissement ='' ;
     $this->etatEtablissementLibe  ='' ;
     $this->ministereTutelle  ='' ;
     $this->ministereTutelleLibe  ='' ;
     $this->tutelle2  ='' ;
     $this->tutelle2Libe  ='' ;
     $this->secteurPublicPrive ='' ;
     $this->secteurPublicPriveLibe ='' ;
     $this->sigleUai ='' ;
     $this->categorieJuridique ='' ;
     $this->categorieJuridiqueLibe ='' ;
     $this->contratEtablissement ='' ;
     $this->contratEtablissementLibe ='' ;
     $this->categorieFinanciere  ='' ;
     $this->categorieFinanciereLibe  ='' ;
     $this->situationComptable  ='' ;
     $this->situationComptableLibe  ='' ;
     $this->niveauUai  ='' ;
     $this->niveauUaiLibe  ='' ;
     $this->commune  ='' ;
     $this->communeLibe  ='' ;
     $this->academie  ='' ;
     $this->academieLibe  ='' ;
     $this->typeNomenclaturePays  ='' ;
     $this->codePays  ='' ;
     $this->typeNomenclatureDepartement  ='' ;
     $this->codeDepartement  ='' ;
     $this->patronymeUai  ='' ;
     $this->hebergementEtablissement  ='' ;
     $this->hebergementEtablissementLibe  ='' ;
     $this->numeroSirenSiretUai  ='' ;
     $this->numeroFinessUai  ='' ;
     $this->dateDerniereMiseAJour  ='' ;
     $this->lieuDitUai  ='' ;
     $this->adresseUai ='' ;
     $this->boitePostaleUai ='' ;
     $this->codePostalUai ='' ;
     $this->etatSiradUai ='' ;
     $this->localiteAcheminementUai ='' ;
     $this->paysEtrangerAcheminement ='' ;
     $this->numeroTelephoneUai ='' ;
     $this->numeroTelecopieurUai ='' ;
     $this->mentionDistribution ='' ;
     $this->melUai ='' ;
     $this->siteWeb ='' ;
     $this->coordonneeX ='' ;
     $this->coordonneeY ='' ;
     $this->appariement ='' ;
     $this->appariementComplement ='' ;
     $this->localisation ='' ;
     $this->localisationComplement ='' ;
     $this->dateGeolocalisation ='' ;
     $this->source ='' ;
     }

    

function deleteEtablissementFrancaisDansBD ($pConnBd)
{
    
    $req='delete FROM local_rdd.rdd_ref_etablissement_francais';
        

        
        //echo "requete ".$req."<br>";
        $findResult = pg_query($pConnBd,$req);
        $numrows    = pg_num_rows($findResult);
                        
      return $numrows;
    
}

function insertEtablissementFrancaisDansBD ($pConnBd, $pTabRef)
{
    
    
        //$pNomenclature='BourseAideFinanciere';
        
        //echo 'MajRefNomenclatureGeneriqueDansPegase<br>'
        //    . 'Recuperation des referentiels inscrits dans la base de données<br>'
        //    . 'Pour '.$pNomenclature.'<br>';
       
        
        //echo '<br>Tableau de données<br>';
        //print_r($pTabRef);
        $i=0;
        while ($i<count($pTabRef)) {

            
            // Code valeur obligatoire
            $this->typeNomenclature = "'".$pTabRef[$i]["typeNomenclature"]."'"; 
                
            if (!empty($pTabRef[$i]["libelleAffichage"]))   
                $this->libelleAffichage = "'".str_replace('\'','\'\'',$pTabRef[$i]["libelleAffichage"])."'"; else $this->libelleAffichage = "''";

            if (!empty($pTabRef[$i]["prioriteAffichage"]))  
                $this->prioriteAffichage = $pTabRef[$i]["prioriteAffichage"]; else $this->prioriteAffichage = 0;                

            if (!empty($pTabRef[$i]["dateDebutValidite"]))  
                $this->dateDebutValidite = "'".$pTabRef[$i]["dateDebutValidite"]."'"; else $this->dateDebutValidite = "''";
                
            if (!empty($pTabRef[$i]["dateFinValidite"]))    
                $this->dateFinValidite = "'".$pTabRef[$i]["dateFinValidite"]."'"; else $this->dateFinValidite = "''";
                //echo 'dateFinValidite : '.$this->dateFinValidite .'<br>';

             if ( isset($pTabRef[$i]["temoinVisible"]))
                $this->temoinVisible = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinVisible"]);    
                
            if ( isset($pTabRef[$i]["temoinLivre"]))  
                $this->temoinLivre = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinLivre"]);
 
                
            if (!empty($pTabRef[$i]["numeroUai"]))   
                $this->numeroUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["numeroUai"])."'"; else $this->numeroUai = "''";

            if (!empty($pTabRef[$i]["typeUai"]["typeNomenclatureUai"]))   
                $this->typeNomenclatureUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["typeUai"]["typeNomenclatureUai"])."'"; else $this->typeNomenclatureUai = "''";

            if (!empty($pTabRef[$i]["typeUai"]["typeUai"]))   
                $this->typeUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["typeUai"]["typeUai"])."'"; else $this->typeUai = "''";

            if (!empty($pTabRef[$i]["typeUai"]["typeUaiLibe"]))   
                $this->typeUaiLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["typeUai"]["typeUaiLibe"])."'"; else $this->typeUaiLibe = "''";

            if (!empty($pTabRef[$i]["denominationPrincipale"]))   
                $this->denominationPrincipale = "'".str_replace('\'','\'\'',$pTabRef[$i]["denominationPrincipale"])."'"; else $this->denominationPrincipale = "''";

            if (!empty($pTabRef[$i]["natureUai"]))   
                $this->natureUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["natureUai"])."'"; else $this->natureUai = "''";

            if (!empty($pTabRef[$i]["natureUaiLibe"]))   
                $this->natureUaiLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["natureUaiLibe"])."'"; else $this->natureUaiLibe = "''";

            if (!empty($pTabRef[$i]["etatEtablissement"]))   
                $this->etatEtablissement = "'".str_replace('\'','\'\'',$pTabRef[$i]["etatEtablissement"])."'"; else $this->etatEtablissement = "''";

            if (!empty($pTabRef[$i]["etatEtablissementLibe"]))   
                $this->etatEtablissementLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["etatEtablissementLibe"])."'"; else $this->etatEtablissementLibe = "''";

            if (!empty($pTabRef[$i]["ministereTutelle"]))   
                $this->ministereTutelle = "'".str_replace('\'','\'\'',$pTabRef[$i]["ministereTutelle"])."'"; else $this->ministereTutelle = "''";

            if (!empty($pTabRef[$i]["tutelle2"]))   
                $this->tutelle2 = "'".str_replace('\'','\'\'',$pTabRef[$i]["tutelle2"])."'"; else $this->tutelle2 = "''";

            if (!empty($pTabRef[$i]["ministereTutelleLibe"]))   
                $this->tutelle2Libe = "'".str_replace('\'','\'\'',$pTabRef[$i]["tutelle2Libe"])."'"; else $this->tutelle2Libe = "''";

            if (!empty($pTabRef[$i]["secteurPublicPrive"]))   
                $this->secteurPublicPrive = "'".str_replace('\'','\'\'',$pTabRef[$i]["secteurPublicPrive"])."'"; else $this->secteurPublicPrive = "''";

            if (!empty($pTabRef[$i]["secteurPublicPriveLibe"]))   
                $this->secteurPublicPriveLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["secteurPublicPriveLibe"])."'"; else $this->secteurPublicPriveLibe = "''";

            if (!empty($pTabRef[$i]["sigleUai"]))   
                $this->sigleUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["sigleUai"])."'"; else $this->sigleUai = "''";

            if (!empty($pTabRef[$i]["categorieJuridique"]))   
                $this->categorieJuridique = "'".str_replace('\'','\'\'',$pTabRef[$i]["categorieJuridique"])."'"; else $this->categorieJuridique = "''";

            if (!empty($pTabRef[$i]["categorieJuridiqueLibe"]))   
                $this->categorieJuridiqueLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["categorieJuridiqueLibe"])."'"; else $this->categorieJuridiqueLibe = "''";

            if (!empty($pTabRef[$i]["contratEtablissement"]))   
                $this->contratEtablissement = "'".str_replace('\'','\'\'',$pTabRef[$i]["contratEtablissement"])."'"; else $this->contratEtablissement = "''";

            if (!empty($pTabRef[$i]["contratEtablissementLibe"]))   
                $this->contratEtablissementLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["contratEtablissementLibe"])."'"; else $this->contratEtablissementLibe = "''";

            if (!empty($pTabRef[$i]["categorieFinanciere"]))   
                $this->categorieFinanciere = "'".str_replace('\'','\'\'',$pTabRef[$i]["categorieFinanciere"])."'"; else $this->categorieFinanciere = "''";
                
            if (!empty($pTabRef[$i]["categorieFinanciereLibe"]))   
                $this->categorieFinanciereLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["categorieFinanciereLibe"])."'"; else $this->categorieFinanciereLibe = "''";

            if (!empty($pTabRef[$i]["situationComptable"]))   
                $this->situationComptable = "'".str_replace('\'','\'\'',$pTabRef[$i]["situationComptable"])."'"; else $this->situationComptable = "''";

            if (!empty($pTabRef[$i]["situationComptableLibe"]))   
                $this->situationComptableLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["situationComptableLibe"])."'"; else $this->situationComptableLibe = "''";

            if (!empty($pTabRef[$i]["niveauUai"]))   
                $this->niveauUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["niveauUai"])."'"; else $this->niveauUai = "''";

            if (!empty($pTabRef[$i]["niveauUaiLibe"]))   
                $this->niveauUaiLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["niveauUaiLibe"])."'"; else $this->niveauUaiLibe = "''";

            if (!empty($pTabRef[$i]["commune"]))   
                $this->commune = "'".str_replace('\'','\'\'',$pTabRef[$i]["commune"])."'"; else $this->commune = "''";

            if (!empty($pTabRef[$i]["communeLibe"]))   
                $this->communeLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["communeLibe"])."'"; else $this->communeLibe = "''";

            if (!empty($pTabRef[$i]["academie"]))   
                $this->academie = "'".str_replace('\'','\'\'',$pTabRef[$i]["academie"])."'"; else $this->academie = "''";

            if (!empty($pTabRef[$i]["academieLibe"]))   
                $this->academieLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["academieLibe"])."'"; else $this->academieLibe = "''";

            if (!empty($pTabRef[$i]["pays"]["typeNomenclaturePays"]))   
                $this->typeNomenclaturePays = "'".str_replace('\'','\'\'',$pTabRef[$i]["pays"]["typeNomenclaturePays"])."'"; else $this->typeNomenclaturePays = "''";

            if (!empty($pTabRef[$i]["pays"]["codePays"]))   
                $this->codePays = "'".str_replace('\'','\'\'',$pTabRef[$i]["pays"]["codePays"])."'"; else $this->codePays = "''";

            if (!empty($pTabRef[$i]["Departement"]["typeNomenclatureDepartement"]))   
                $this->typeNomenclatureDepartement = "'".str_replace('\'','\'\'',$pTabRef[$i]["Departement"]["typeNomenclatureDepartement"])."'"; else $this->typeNomenclatureDepartement = "''";

            if (!empty($pTabRef[$i]["Departement"]["codeDepartement"]))   
                $this->codeDepartement = "'".str_replace('\'','\'\'',$pTabRef[$i]["Departement"]["codeDepartement"])."'"; else $this->codeDepartement = "''";

            if (!empty($pTabRef[$i]["patronymeUai"]))   
                $this->patronymeUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["patronymeUai"])."'"; else $this->patronymeUai = "''";

            if (!empty($pTabRef[$i]["hebergementEtablissement"]))   
                $this->hebergementEtablissement = "'".str_replace('\'','\'\'',$pTabRef[$i]["hebergementEtablissement"])."'"; else $this->hebergementEtablissement = "''";

            if (!empty($pTabRef[$i]["hebergementEtablissementLibe"]))   
                $this->hebergementEtablissementLibe = "'".str_replace('\'','\'\'',$pTabRef[$i]["hebergementEtablissementLibe"])."'"; else $this->hebergementEtablissementLibe = "''";

            if (!empty($pTabRef[$i]["numeroSirenSiretUai"]))   
                $this->numeroSirenSiretUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["numeroSirenSiretUai"])."'"; else $this->numeroSirenSiretUai = "''";

            if (!empty($pTabRef[$i]["numeroFinessUai"]))   
                $this->numeroFinessUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["numeroFinessUai"])."'"; else $this->numeroFinessUai = "''";

            if (!empty($pTabRef[$i]["dateDerniereMiseAJour"]))   
                $this->dateDerniereMiseAJour = "'".str_replace('\'','\'\'',$pTabRef[$i]["dateDerniereMiseAJour"])."'"; else $this->dateDerniereMiseAJour = "''";

            if (!empty($pTabRef[$i]["lieuDitUai"]))   
                $this->lieuDitUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["lieuDitUai"])."'"; else $this->lieuDitUai = "''";

            if (!empty($pTabRef[$i]["adresseUai"]))   
                $this->adresseUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["adresseUai"])."'"; else $this->adresseUai = "''";

            if (!empty($pTabRef[$i]["boitePostaleUai"]))   
                $this->boitePostaleUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["boitePostaleUai"])."'"; else $this->boitePostaleUai = "''";

            if (!empty($pTabRef[$i]["codePostalUai"]))   
                $this->codePostalUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["codePostalUai"])."'"; else $this->codePostalUai = "''";

            if (!empty($pTabRef[$i]["etatSiradUai"]))   
                $this->etatSiradUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["etatSiradUai"])."'"; else $this->etatSiradUai = "''";

            if (!empty($pTabRef[$i]["localiteAcheminementUai"]))   
                $this->localiteAcheminementUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["localiteAcheminementUai"])."'"; else $this->localiteAcheminementUai = "''";

            if (!empty($pTabRef[$i]["paysEtrangerAcheminement"]))   
                $this->paysEtrangerAcheminement = "'".str_replace('\'','\'\'',$pTabRef[$i]["paysEtrangerAcheminement"])."'"; else $this->paysEtrangerAcheminement = "''";

            if (!empty($pTabRef[$i]["numeroTelephoneUai"]))   
                $this->numeroTelephoneUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["numeroTelephoneUai"])."'"; else $this->numeroTelephoneUai = "''";

            if (!empty($pTabRef[$i]["numeroTelecopieurUai"]))   
                $this->numeroTelecopieurUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["numeroTelecopieurUai"])."'"; else $this->numeroTelecopieurUai = "''";

            if (!empty($pTabRef[$i]["mentionDistribution"]))   
                $this->mentionDistribution = "'".str_replace('\'','\'\'',$pTabRef[$i]["mentionDistribution"])."'"; else $this->mentionDistribution = "''";

            if (!empty($pTabRef[$i]["melUai"]))   
                $this->melUai = "'".str_replace('\'','\'\'',$pTabRef[$i]["melUai"])."'"; else $this->melUai = "''";

            if (!empty($pTabRef[$i]["siteWeb"]))   
                $this->siteWeb = "'".str_replace('\'','\'\'',$pTabRef[$i]["siteWeb"])."'"; else $this->siteWeb = "''";

            if (!empty($pTabRef[$i]["coordonneeX"]))   
                $this->coordonneeX = "'".str_replace('\'','\'\'',$pTabRef[$i]["coordonneeX"])."'"; else $this->coordonneeX = "''";
            if (!empty($pTabRef[$i]["coordonneeY"]))   
                $this->coordonneeY = "'".str_replace('\'','\'\'',$pTabRef[$i]["coordonneeY"])."'"; else $this->coordonneeY = "''";

            if (!empty($pTabRef[$i]["appariement"]))   
                $this->appariement = "'".str_replace('\'','\'\'',$pTabRef[$i]["appariement"])."'"; else $this->appariement = "''";

            if (!empty($pTabRef[$i]["appariementComplement"]))   
                $this->appariementComplement = "'".str_replace('\'','\'\'',$pTabRef[$i]["appariementComplement"])."'"; else $this->appariementComplement = "''";

            if (!empty($pTabRef[$i]["localisation"]))   
                $this->localisation = "'".str_replace('\'','\'\'',$pTabRef[$i]["localisation"])."'"; else $this->localisation = "''";

            if (!empty($pTabRef[$i]["localisationComplement"]))   
                $this->localisationComplement = "'".str_replace('\'','\'\'',$pTabRef[$i]["localisationComplement"])."'"; else $this->localisationComplement = "''";

            if (!empty($pTabRef[$i]["dateGeolocalisation"]))   
                $this->dateGeolocalisation = "'".str_replace('\'','\'\'',$pTabRef[$i]["dateGeolocalisation"])."'"; else $this->dateGeolocalisation = "''";

            if (!empty($pTabRef[$i]["source"]))   
                $this->source = "'".str_replace('\'','\'\'',$pTabRef[$i]["source"])."'"; else $this->source = "''";
                 
                
                
            $req='INSERT INTO local_rdd.rdd_ref_structure(
            "typeNomenclature", "libelleAffichage", "prioriteAffichage", "dateDebutValidite", "dateFinValidite", "temoinVisible", "temoinLivre", 
            "numeroUai", "typeNomenclatureUai", "typeUai", "typeUaiLibe", "denominationPrincipale", "natureUai", "natureUaiLibe", "etatEtablissement", 
            "etatEtablissementLibe", "ministereTutelle", "ministereTutelleLibe", tutelle2, "tutelle2Libe", "secteurPublicPrive", "secteurPublicPriveLibe", 
            "sigleUai", "categorieJuridique", "categorieJuridiqueLibe", "contratEtablissement", "contratEtablissementLibe", "categorieFinanciere", 
            "categorieFinanciereLibe", "situationComptable", "situationComptableLibe", "niveauUai", "niveauUaiLibe", commune, "communeLibe", academie, 
            "academieLibe", "typeNomenclaturePays", "codePays", "typeNomenclatureDepartement", "codeDepartement", "patronymeUai", "hebergementEtablissement", 
            "hebergementEtablissementLibe", "numeroSirenSiretUai", "numeroFinessUai", "dateDerniereMiseAJour", "lieuDitUai", "adresseUai", "boitePostaleUai", 
            "codePostalUai", "etatSiradUai", "localiteAcheminementUai", "paysEtrangerAcheminement", "numeroTelephoneUai", "numeroTelecopieurUai", 
            "mentionDistribution", "melUai", "siteWeb", "coordonneeX", "coordonneeY", appariement, "appariementComplement", localisation, 
            "localisationComplement", "dateGeolocalisation", source)
            VALUES ('.$this->typeNomenclature .
     ','.$this->libelleAffichage  .
     ','.$this->prioriteAffichage .
     ','.$this->dateDebutValidite .
     ','.$this->dateFinValidite .
     ','.$this->temoinVisible .
     ','.$this->temoinLivre.
     ','.$this->numeroUai .
     ','.$this->typeNomenclatureUai   .
     ','.$this->typeUai  .
     ','.$this->typeUaiLibe  .
     ','.$this->denominationPrincipale  .
     ','.$this->natureUai  .
     ','.$this->natureUaiLibe  .
     ','.$this->etatEtablissement  .
     ','.$this->etatEtablissementLibe   .
     ','.$this->ministereTutelle   .
     ','.$this->ministereTutelleLibe   .
     ','.$this->tutelle2   .
     ','.$this->tutelle2Libe   .
     ','.$this->secteurPublicPrive  .
     ','.$this->secteurPublicPriveLibe  .
     ','.$this->sigleUai  .
     ','.$this->categorieJuridique  .
     ','.$this->categorieJuridiqueLibe  .
     ','.$this->contratEtablissement  .
     ','.$this->contratEtablissementLibe  .
     ','.$this->categorieFinanciere   .
     ','.$this->categorieFinanciereLibe   .
     ','.$this->situationComptable   .
     ','.$this->situationComptableLibe   .
     ','.$this->niveauUai   .
     ','.$this->niveauUaiLibe   .
     ','.$this->commune   .
     ','.$this->communeLibe   .
     ','.$this->academie   .
     ','.$this->academieLibe   .
     ','.$this->typeNomenclaturePays   .
     ','.$this->codePays   .
     ','.$this->typeNomenclatureDepartement   .
     ','.$this->codeDepartement   .
     ','.$this->patronymeUai   .
     ','.$this->hebergementEtablissement   .
     ','.$this->hebergementEtablissementLibe   .
     ','.$this->numeroSirenSiretUai   .
     ','.$this->numeroFinessUai   .
     ','.$this->dateDerniereMiseAJour   .
     ','.$this->lieuDitUai   .
     ','.$this->adresseUai  .
     ','.$this->boitePostaleUai  .
     ','.$this->codePostalUai  .
     ','.$this->etatSiradUai  .
     ','.$this->localiteAcheminementUai  .
     ','.$this->paysEtrangerAcheminement  .
     ','.$this->numeroTelephoneUai  .
     ','.$this->numeroTelecopieurUai  .
     ','.$this->mentionDistribution  .
     ','.$this->melUai  .
     ','.$this->siteWeb  .
     ','.$this->coordonneeX  .
     ','.$this->coordonneeY  .
     ','.$this->appariement  .
     ','.$this->appariementComplement  .
     ','.$this->localisation  .
     ','.$this->localisationComplement  .
     ','.$this->dateGeolocalisation  .
     ','.$this->source  .
                     ')';        
             
            //echo '<br><br><br>'.$req.'<br>';

            $findResult = pg_query($pConnBd,$req);
            
            
            $i++;

            };
         return $i;
}

    


function selectEtablissementFrancaisDansBD ($connexion)
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
      
      //echo '<br>';
      //print_r($tabRef);
      //echo '<br>';
                
      return $tabRef;

}
    

    function formatEtablissementFrancais ($bdRef) {
    
        //echo 'Entrer dans formatRefCategorieSocioPro '.count($bdRef).'<br>';
        $i=0;
        $selectionInfosBD=Array();
        while ($i<count($bdRef)) {

            //echo '<br>====> UAI :'.$bdRef[$i]['codeUAI'].'<br>';
                $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
                $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
                $selectionInfosBD[$i]['prioriteAffichage']=$bdRef[$i]['prioriteAffichage'];
                $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
                $selectionInfosBD[$i]['dateFinValidite']= ReferentielPegase::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
                $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);  
                $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);
                $selectionInfosBD[$i]['numeroUai']=$bdRef[$i]['numeroUai'];

                $selectionInfosBD[$i]['typeUai']['typeNomenclatureUai']=$bdRef[$i]['typeNomenclatureUai'];
                $selectionInfosBD[$i]['typeUai']['typeUai']=$bdRef[$i]['typeUai'];
                $selectionInfosBD[$i]['typeUai']['typeUaiLibe']=$bdRef[$i]['typeUaiLibe'];
                
                $selectionInfosBD[$i]['denominationPrincipale']=$bdRef[$i]['denominationPrincipale'];
                $selectionInfosBD[$i]['natureUai']=$bdRef[$i]['natureUai'];
                $selectionInfosBD[$i]['natureUaiLibe']=$bdRef[$i]['natureUaiLibe'];
                $selectionInfosBD[$i]['etatEtablissement']=$bdRef[$i]['etatEtablissement'];
                $selectionInfosBD[$i]['etatEtablissementLibe']=$bdRef[$i]['etatEtablissementLibe'];
                $selectionInfosBD[$i]['ministereTutelle']=$bdRef[$i]['ministereTutelle'];
                $selectionInfosBD[$i]['ministereTutelleLibe']=$bdRef[$i]['ministereTutelleLibe'];
                $selectionInfosBD[$i]['tutelle2']=$bdRef[$i]['tutelle2'];
                $selectionInfosBD[$i]['tutelle2Libe']=$bdRef[$i]['tutelle2Libe'];
                $selectionInfosBD[$i]['secteurPublicPrive']=$bdRef[$i]['secteurPublicPrive'];
                $selectionInfosBD[$i]['secteurPublicPriveLibe']=$bdRef[$i]['secteurPublicPriveLibe'];
                $selectionInfosBD[$i]['sigleUai']=$bdRef[$i]['sigleUai'];
                $selectionInfosBD[$i]['categorieJuridique']=$bdRef[$i]['categorieJuridique'];
                $selectionInfosBD[$i]['categorieJuridiqueLibe']=$bdRef[$i]['categorieJuridiqueLibe'];
                $selectionInfosBD[$i]['contratEtablissement']=$bdRef[$i]['contratEtablissement'];
                $selectionInfosBD[$i]['contratEtablissementLibe']=$bdRef[$i]['contratEtablissementLibe'];
                $selectionInfosBD[$i]['categorieFinanciere']=$bdRef[$i]['categorieFinanciere'];
                $selectionInfosBD[$i]['categorieFinanciereLibe']=$bdRef[$i]['categorieFinanciereLibe'];
                $selectionInfosBD[$i]['situationComptable']=$bdRef[$i]['situationComptable'];
                $selectionInfosBD[$i]['situationComptableLibe']=$bdRef[$i]['situationComptableLibe'];
                $selectionInfosBD[$i]['niveauUai']=$bdRef[$i]['niveauUai'];
                $selectionInfosBD[$i]['niveauUaiLibe']=$bdRef[$i]['niveauUaiLibe'];
                $selectionInfosBD[$i]['commune']=$bdRef[$i]['commune'];
                $selectionInfosBD[$i]['communeLibe']=$bdRef[$i]['communeLibe'];
                $selectionInfosBD[$i]['academie']=$bdRef[$i]['academie'];
                $selectionInfosBD[$i]['academieLibe']=$bdRef[$i]['academieLibe'];
                
                $selectionInfosBD[$i]['pays']['typeNomenclaturePays']=$bdRef[$i]['typeNomenclaturePays'];
                $selectionInfosBD[$i]['pays']['codePays']=$bdRef[$i]['codePays'];

                $selectionInfosBD[$i]['departement']['typeNomenclatureDepartement']=$bdRef[$i]['typeNomenclatureDepartement'];
                $selectionInfosBD[$i]['departement']['codeDepartement']=$bdRef[$i]['codeDepartement'];

                $selectionInfosBD[$i]['patronymeUai']=$bdRef[$i]['patronymeUai'];                
                $selectionInfosBD[$i]['hebergementEtablissement']=$bdRef[$i]['hebergementEtablissement'];
                $selectionInfosBD[$i]['hebergementEtablissementLibe']=$bdRef[$i]['hebergementEtablissementLibe'];
                $selectionInfosBD[$i]['numeroSirenSiretUai']=$bdRef[$i]['numeroSirenSiretUai'];                
                $selectionInfosBD[$i]['numeroFinessUai']=$bdRef[$i]['numeroFinessUai'];
                $selectionInfosBD[$i]['dateDerniereMiseAJour']=$bdRef[$i]['dateDerniereMiseAJour'];
                $selectionInfosBD[$i]['lieuDitUai']=$bdRef[$i]['lieuDitUai'];                
                $selectionInfosBD[$i]['adresseUai']=$bdRef[$i]['adresseUai'];
                $selectionInfosBD[$i]['boitePostaleUai']=$bdRef[$i]['boitePostaleUai'];
                $selectionInfosBD[$i]['codePostalUai']=$bdRef[$i]['codePostalUai'];                
                $selectionInfosBD[$i]['etatSiradUai']=$bdRef[$i]['etatSiradUai'];
                $selectionInfosBD[$i]['localiteAcheminementUai']=$bdRef[$i]['localiteAcheminementUai'];
                $selectionInfosBD[$i]['paysEtrangerAcheminement']=$bdRef[$i]['paysEtrangerAcheminement'];                
                $selectionInfosBD[$i]['numeroTelephoneUai']=$bdRef[$i]['numeroTelephoneUai'];
                $selectionInfosBD[$i]['numeroTelecopieurUai']=$bdRef[$i]['numeroTelecopieurUai'];
                $selectionInfosBD[$i]['mentionDistribution']=$bdRef[$i]['mentionDistribution'];                
                $selectionInfosBD[$i]['melUai']=$bdRef[$i]['melUai'];
                $selectionInfosBD[$i]['siteWeb']=$bdRef[$i]['siteWeb'];
                $selectionInfosBD[$i]['coordonneeX']=$bdRef[$i]['coordonneeX'];                
                $selectionInfosBD[$i]['coordonneeY']=$bdRef[$i]['coordonneeY'];
                $selectionInfosBD[$i]['appariement']=$bdRef[$i]['appariement'];
                $selectionInfosBD[$i]['appariementComplement']=$bdRef[$i]['appariementComplement'];                
                $selectionInfosBD[$i]['localisation']=$bdRef[$i]['localisation'];
                $selectionInfosBD[$i]['localisationComplement']=$bdRef[$i]['localisationComplement'];
                $selectionInfosBD[$i]['dateGeolocalisation']=$bdRef[$i]['dateGeolocalisation'];                
                $selectionInfosBD[$i]['source']=$bdRef[$i]['source'];

            
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
            //echo '<pre>';
            //print_r($jsonRef);
            //echo '</pre><br>';
            //echo '<br><br>===> UAI '.$selectionInfosBD[$i]['codeUai'].'<br>';
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


    
}
