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
class ReferentielPegase {
    
        
var  $typeNomenclature                                     ='';
var  $code                                                 ='';
var  $libelleCourt                                         ='';
var  $libelleLong                                          ='';
var  $libelleAffichage                                     ='';
var  $prioriteAffichage                                    =0;
var  $dateDebutValidite                                    ='';
var  $dateFinValidite                                      ='';
var  $temoinVisible                                        =false;
var  $temoinLivre                                          =false;
var  $categorieObjet                                       ='';
var  $codeBcn                                              ='';
var  $exoinsExtra                                          ='';
var  $temoinExoneration                                    =false;
var  $typeBourse                                           ='';
var  $exoinsCom                                            ='';
var  $codeSISEIns                                          =0;
var  $codeSISERslt                                         =0;
var  $temoinCVEC                                           =false;
var  $financementPossible                                  =false;
var  $droitABourse                                         =false;
var  $typeNomenclatureCursusFormation                      ='';
var  $codeCursusFormation                                  ='';
var  $typeNomenclatureNiveauFormation                      ='';
var  $codeNiveauFormation                                  ='';
var  $typeNomenclatureNatureDiplome                        ='';
var  $codeNatureDiplome                                    ='';
var  $typeNomenclatureTitreAcces                           ='';
var  $codeTitreAcces                                       ='';
var  $typeNomenclatureTypeBac                              ='';
var  $codeTypeBac                                          ='';
var  $typeDiplome                                          ='';
var  $typeNomenclatureDomaineformation                     ='';
var  $codeDomaineFormation                                 ='';
var  $ordre                                                ='';
var  $positif                                              =false;
var  $seqListeCodeNom                                      =0;
var  $continent                                            ='';
var  $libelleNationalite                                   ='';
var  $codeDrapeau                                          ='';
var  $temoinUnionEuropeenne                                =false;
var  $temoinAccords                                        =false;
var  $codeIso3611                                          ='';
var  $typeNomenclatureSituationEmploi                      ='';
var  $codeSituationEmploi                                  ='';
var  $typeNomenclatureCategorieSocioprofessionnelle8       ='';
var  $codeCategorieSocioprofessionnelle8                   ='';
var  $temoinDiplomeNationalAglae                           = false;
var  $temoinDiplomeHabiliteAglae                           = false;
var  $echelleSise                                          ='';
var  $commentaire                                          ='';

// Données appartenant au referentiel des communes. Cependant, ce référentiel n'est pas recuperé, car pas modifiable.
// Du coup, les données sont présentes pour la gestion des structures uniquement et par pour le référentiel en lui meme.
var  $codePostal                                           ='';
var  $codeInsee ='' ;
var  $codeInseeAncien='';
var  $ligne5='';
var  $libelleAcheminement ='';


    function __construct ()
        {
           $this->typeNomenclature                                     ='';     
           $this->code                                                 ='';     
           $this->libelleCourt                                         ='';     
           $this->libelleLong                                          ='';     
           $this->libelleAffichage                                     ='';     
           $this->prioriteAffichage                                    =0;      
           $this->dateDebutValidite                                    ='';     
           $this->dateFinValidite                                      ='';     
           $this->temoinVisible                                        =false;  
           $this->temoinLivre                                          =false;  
           $this->categorieObjet                                       ='';     
           $this->codeBcn                                              ='';     
           $this->exoinsExtra                                          ='';     
           $this->temoinExoneration                                    =false;  
           $this->typeBourse                                           ='';     
           $this->exoinsCom                                            ='';     
           $this->codeSISEIns                                          =0;      
           $this->codeSISERslt                                         =0;      
           $this->temoinCVEC                                           =false;  
           $this->financementPossible                                  =false;  
           $this->droitABourse                                         =false;  
           $this->typeNomenclatureCursusFormation                      ='';     
           $this->codeCursusFormation                                  ='';     
           $this->typeNomenclatureNiveauFormation                      ='';     
           $this->codeNiveauFormation                                  ='';     
           $this->typeNomenclatureNatureDiplome                        ='';     
           $this->codeNatureDiplome                                    ='';     
           $this->typeNomenclatureTitreAcces                           ='';     
           $this->codeTitreAcces                                       ='';     
           $this->typeNomenclatureTypeBac                              ='';     
           $this->codeTypeBac                                          ='';     
           $this->typeDiplome                                          ='';     
           $this->typeNomenclatureDomaineformation                     ='';     
           $this->codeDomaineFormation                                 ='';     
           $this->ordre                                                ='';     
           $this->positif                                              =false;  
           $this->seqListeCodeNom                                      =0;      
           $this->continent                                            ='';     
           $this->libelleNationalite                                   ='';     
           $this->codeDrapeau                                          ='';     
           $this->temoinUnionEuropeenne                                =false;  
           $this->temoinAccords                                        =false;  
           $this->codeIso3611                                          ='';     
           $this->typeNomenclatureSituationEmploi                      ='';     
           $this->codeSituationEmploi                                  ='';     
           $this->typeNomenclatureCategorieSocioprofessionnelle8       ='';     
           $this->codeCategorieSocioprofessionnelle8                   ='';   
           $this->temoinDiplomeNationalAglae                           = false;
           $this->temoinDiplomeHabiliteAglae                           = false;
           $this->echelleSise                                          ='';
           $this->commentaire                                          ='';
        }




function setNomenclatureGenerique  (  $pTypeNomenclature                                ,   
                                      $pCode                                            ,   
                                      $pLibelleCourt                                    ,   
                                      $pLibelleLong                                     ,   
                                      $pLibelleAffichage                                ,   
                                      $pPrioriteAffichage                               ,   
                                      $pDateDebutValidite                               ,   
                                      $pDateFinValidite                                 ,   
                                      $pTemoinVisible                                   ,   
                                      $pTemoinLivre                                     ,   
                                      $pCategorieObjet                                  ,   
                                      $pCodeBcn                                         ,   
                                      $pExoinsExtra                                     ,   
                                      $pTemoinExoneration                               ,   
                                      $pTypeBourse                                      ,   
                                      $pExoinsCom                                       ,   
                                      $pCodeSISEIns                                     ,   
                                      $pCodeSISERslt                                    ,   
                                      $pTemoinCVEC                                      ,   
                                      $pFinancementPossible                             ,   
                                      $pDroitABourse                                    ,   
                                      $pTypeNomenclatureCursusFormation                 ,   
                                      $pCodeCursusFormation                             ,   
                                      $pTypeNomenclatureNiveauFormation                 ,   
                                      $pCodeNiveauFormation                             ,   
                                      $pTypeNomenclatureNatureDiplome                   ,   
                                      $pCodeNatureDiplome                               ,   
                                      $pTypeNomenclatureTitreAcces                      ,   
                                      $pCodeTitreAcces                                  ,   
                                      $pTypeNomenclatureTypeBac                         ,   
                                      $pCodeTypeBac                                     ,   
                                      $pTypeDiplome                                     ,   
                                      $pTypeNomenclatureDomaineformation                ,   
                                      $pCodeDomaineFormation                            ,   
                                      $pOrdre                                           ,   
                                      $pPositif                                         ,   
                                      $pSeqListeCodeNom                                 ,   
                                      $pContinent                                       ,   
                                      $pLibelleNationalite                              ,   
                                      $pCodeDrapeau                                     ,   
                                      $pTemoinUnionEuropeenne                           ,   
                                      $pTemoinAccords                                   ,   
                                      $pCodeIso3611                                     ,   
                                      $pTypeNomenclatureSituationEmploi                 ,   
                                      $pCodeSituationEmploi                             ,   
                                      $pTypeNomenclatureCategorieSocioprofessionnelle8  ,   
                                      $pCodeCategorieSocioprofessionnelle8               ,
                                      $pTemoinDiplomeNationalAglae,
                                      $pTemoinDiplomeHabiliteAglae,
                                      $pEchelleSise  )   {  
    $this->typeNomenclature                                = $pTypeNomenclature                                 ; 
    $this->code                                            = $pCode                                             ; 
    $this->libelleCourt                                    = $pLibelleCourt                                     ; 
    $this->libelleLong                                     = $pLibelleLong                                      ; 
    $this->libelleAffichage                                = $pLibelleAffichage                                 ; 
    $this->prioriteAffichage                               = $pPrioriteAffichage                                ; 
    $this->dateDebutValidite                               = $pDateDebutValidite                                ; 
    $this->dateFinValidite                                 = $pDateFinValidite                                  ; 
    $this->temoinVisible                                   = $pTemoinVisible                                    ; 
    $this->temoinLivre                                     = $pTemoinLivre                                      ; 
    $this->categorieObjet                                  = $pCategorieObjet                                   ; 
    $this->codeBcn                                         = $pCodeBcn                                          ; 
    $this->exoinsExtra                                     = $pExoinsExtra                                      ; 
    $this->temoinExoneration                               = $pTemoinExoneration                                ;                               
    $this->typeBourse                                      = $pTypeBourse                                       ;                               
    $this->exoinsCom                                       = $pExoinsCom                                        ;                               
    $this->codeSISEIns                                     = $pCodeSISEIns                                      ;                               
    $this->codeSISERslt                                    = $pCodeSISERslt                                     ;                               
    $this->temoinCVEC                                      = $pTemoinCVEC                                       ;                               
    $this->financementPossible                             = $pFinancementPossible                              ;                               
    $this->droitABourse                                    = $pDroitABourse                                     ;                               
    $this->typeNomenclatureCursusFormation                 = $pTypeNomenclatureCursusFormation                  ;                               
    $this->codeCursusFormation                             = $pCodeCursusFormation                              ;                               
    $this->typeNomenclatureNiveauFormation                 = $pTypeNomenclatureNiveauFormation                  ;                               
    $this->codeNiveauFormation                             = $pCodeNiveauFormation                              ;                               
    $this->typeNomenclatureNatureDiplome                   = $pTypeNomenclatureNatureDiplome                    ;                               
    $this->codeNatureDiplome                               = $pCodeNatureDiplome                                ;                               
    $this->typeNomenclatureTitreAcces                      = $pTypeNomenclatureTitreAcces                       ;                               
    $this->codeTitreAcces                                  = $pCodeTitreAcces                                   ;                               
    $this->typeNomenclatureTypeBac                         = $pTypeNomenclatureTypeBac                          ;                               
    $this->codeTypeBac                                     = $pCodeTypeBac                                      ;                               
    $this->typeDiplome                                     = $pTypeDiplome                                      ;                               
    $this->typeNomenclatureDomaineformation                = $pTypeNomenclatureDomaineformation                 ;                               
    $this->codeDomaineFormation                            = $pCodeDomaineFormation                             ;                               
    $this->ordre                                           = $pOrdre                                            ;                               
    $this->positif                                         = $pPositif                                          ;                               
    $this->seqListeCodeNom                                 = $pSeqListeCodeNom                                  ;                               
    $this->continent                                       = $pContinent                                        ;                               
    $this->libelleNationalite                              = $pLibelleNationalite                               ;                               
    $this->codeDrapeau                                     = $pCodeDrapeau                                      ;                               
    $this->temoinUnionEuropeenne                           = $pTemoinUnionEuropeenne                            ;                               
    $this->temoinAccords                                   = $pTemoinAccords                                    ;                               
    $this->codeIso3611                                     = $pCodeIso3611                                      ;                               
    $this->typeNomenclatureSituationEmploi                 = $pTypeNomenclatureSituationEmploi                  ;                               
    $this->codeSituationEmploi                             = $pCodeSituationEmploi                              ;                               
    $this->typeNomenclatureCategorieSocioprofessionnelle8  = $pTypeNomenclatureCategorieSocioprofessionnelle8   ;                               
    $this->codeCategorieSocioprofessionnelle8              = $pCodeCategorieSocioprofessionnelle8               ;                               
    $this->temoinDiplomeNationalAglae                       = $ptemoinDiplomeNationalAglae               ;                               
    $this->temoinDiplomeHabiliteAglae                       = $ptemoinDiplomeHabiliteAglae              ;                               
    $this->echelleSise                                      = $pEchelleSise               ;                               
}    


function setTypeNomenclature                                   ($pTypeNomenclature                                )  { $this->typeNomenclature                                = $pTypeNomenclature                                 ; }                 
function setCode                                               ($pCode                                            )  { $this->code                                            = $pCode                                             ; }                 
function setLibelleCourt                                       ($pLibelleCourt                                    )  { $this->libelleCourt                                    = $pLibelleCourt                                     ; }                 
function setLibelleLong                                        ($pLibelleLong                                     )  { $this->libelleLong                                     = $pLibelleLong                                      ; }                 
function setLibelleAffichage                                   ($pLibelleAffichage                                )  { $this->libelleAffichage                                = $pLibelleAffichage                                 ; }                 
function setPrioriteAffichage                                  ($pPrioriteAffichage                               )  { $this->prioriteAffichage                               = $pPrioriteAffichage                                ; }                 
function setDateDebutValidite                                  ($pDateDebutValidite                               )  { $this->dateDebutValidite                               = $pDateDebutValidite                                ; }                 
function setDateFinValidite                                    ($pDateFinValidite                                 )  { $this->dateFinValidite                                 = $pDateFinValidite                                  ; }                 
function setTemoinVisible                                      ($pTemoinVisible                                   )  { $this->temoinVisible                                   = $pTemoinVisible                                    ; }                 
function setTemoinLivre                                        ($pTemoinLivre                                     )  { $this->temoinLivre                                     = $pTemoinLivre                                      ; }                 
function setCategorieObjet                                     ($pCategorieObjet                                  )  { $this->categorieObjet                                  = $pCategorieObjet                                   ; }                 
function setCodeBcn                                            ($pCodeBcn                                         )  { $this->codeBcn                                         = $pCodeBcn                                          ; }                 
function setExoinsExtra                                        ($pExoinsExtra                                     )  { $this->exoinsExtra                                     = $pExoinsExtra                                      ; }                 
function setTemoinExoneration                                  ($pTemoinExoneration                               )  { $this->temoinExoneration                               = $pTemoinExoneration                                ; }                 
function setTypeBourse                                         ($pTypeBourse                                      )  { $this->typeBourse                                      = $pTypeBourse                                       ; }                 
function setExoinsCom                                          ($pExoinsCom                                       )  { $this->exoinsCom                                       = $pExoinsCom                                        ; }                 
function setCodeSISEIns                                        ($pCodeSISEIns                                     )  { $this->codeSISEIns                                     = $pCodeSISEIns                                      ; }                 
function setCodeSISERslt                                       ($pCodeSISERslt                                    )  { $this->codeSISERslt                                    = $pCodeSISERslt                                     ; }                 
function setTemoinCVEC                                         ($pTemoinCVEC                                      )  { $this->temoinCVEC                                      = $pTemoinCVEC                                       ; }                 
function setFinancementPossible                                ($pFinancementPossible                             )  { $this->financementPossible                             = $pFinancementPossible                              ; }                 
function setDroitABourse                                       ($pDroitABourse                                    )  { $this->droitABourse                                    = $pDroitABourse                                     ; }                 
function setTypeNomenclatureCursusFormation                    ($pTypeNomenclatureCursusFormation                 )  { $this->typeNomenclatureCursusFormation                 = $pTypeNomenclatureCursusFormation                  ; }                 
function setCodeCursusFormation                                ($pCodeCursusFormation                             )  { $this->codeCursusFormation                             = $pCodeCursusFormation                              ; }                 
function setTypeNomenclatureNiveauFormation                    ($pTypeNomenclatureNiveauFormation                 )  { $this->typeNomenclatureNiveauFormation                 = $pTypeNomenclatureNiveauFormation                  ; }                 
function setCodeNiveauFormation                                ($pCodeNiveauFormation                             )  { $this->codeNiveauFormation                             = $pCodeNiveauFormation                              ; }                 
function setTypeNomenclatureNatureDiplome                      ($pTypeNomenclatureNatureDiplome                   )  { $this->typeNomenclatureNatureDiplome                   = $pTypeNomenclatureNatureDiplome                    ; }                 
function setCodeNatureDiplome                                  ($pCodeNatureDiplome                               )  { $this->codeNatureDiplome                               = $pCodeNatureDiplome                                ; }                 
function setTypeNomenclatureTitreAcces                         ($pTypeNomenclatureTitreAcces                      )  { $this->typeNomenclatureTitreAcces                      = $pTypeNomenclatureTitreAcces                       ; }                 
function setCodeTitreAcces                                     ($pCodeTitreAcces                                  )  { $this->codeTitreAcces                                  = $pCodeTitreAcces                                   ; }                 
function setTypeNomenclatureTypeBac                            ($pTypeNomenclatureTypeBac                         )  { $this->typeNomenclatureTypeBac                         = $pTypeNomenclatureTypeBac                          ; }                 
function setCodeTypeBac                                        ($pCodeTypeBac                                     )  { $this->codeTypeBac                                     = $pCodeTypeBac                                      ; }                 
function setTypeDiplome                                        ($pTypeDiplome                                     )  { $this->typeDiplome                                     = $pTypeDiplome                                      ; }                 
function setTypeNomenclatureDomaineformation                   ($pTypeNomenclatureDomaineformation                )  { $this->typeNomenclatureDomaineformation                = $pTypeNomenclatureDomaineformation                 ; }                 
function setCodeDomaineFormation                               ($pCodeDomaineFormation                            )  { $this->codeDomaineFormation                            = $pCodeDomaineFormation                             ; }                 
function setOrdre                                              ($pOrdre                                           )  { $this->ordre                                           = $pOrdre                                            ; }                 
function setPositif                                            ($pPositif                                         )  { $this->positif                                         = $pPositif                                          ; }                 
function setSeqListeCodeNom                                    ($pSeqListeCodeNom                                 )  { $this->seqListeCodeNom                                 = $pSeqListeCodeNom                                  ; }                 
function setContinent                                          ($pContinent                                       )  { $this->continent                                       = $pContinent                                        ; }                 
function setLibelleNationalite                                 ($pLibelleNationalite                              )  { $this->libelleNationalite                              = $pLibelleNationalite                               ; }                 
function setCodeDrapeau                                        ($pCodeDrapeau                                     )  { $this->codeDrapeau                                     = $pCodeDrapeau                                      ; }                 
function setTemoinUnionEuropeenne                              ($pTemoinUnionEuropeenne                           )  { $this->temoinUnionEuropeenne                           = $pTemoinUnionEuropeenne                            ; }                 
function setTemoinAccords                                      ($pTemoinAccords                                   )  { $this->temoinAccords                                   = $pTemoinAccords                                    ; }                 
function setCodeIso3611                                        ($pCodeIso3611                                     )  { $this->codeIso3611                                     = $pCodeIso3611                                      ; }                 
function setTypeNomenclatureSituationEmploi                    ($pTypeNomenclatureSituationEmploi                 )  { $this->typeNomenclatureSituationEmploi                 = $pTypeNomenclatureSituationEmploi                  ; }                 
function setCodeSituationEmploi                                ($pCodeSituationEmploi                             )  { $this->codeSituationEmploi                             = $pCodeSituationEmploi                              ; }                 
function setTypeNomenclatureCategorieSocioprofessionnelle8     ($pTypeNomenclatureCategorieSocioprofessionnelle8  )  { $this->typeNomenclatureCategorieSocioprofessionnelle8  = $pTypeNomenclatureCategorieSocioprofessionnelle8   ; }                 
function setCodeCategorieSocioprofessionnelle8                 ($pCodeCategorieSocioprofessionnelle8              )  { $this->codeCategorieSocioprofessionnelle8              = $pCodeCategorieSocioprofessionnelle8               ; }
function setCommenaire                 ($pCommentaire             )  { $this->commentaire              = $pCommentaire               ; }


function getNomenclatureGenerique                              ( )  {  return $this ;                                                   }

function getTypeNomenclature                                   ( )  { return $this->$typeNomenclature                                 ; }                 
function getCode                                               ( )  { return $this->$code                                             ; }                 
function getLibelleCourt                                       ( )  { return $this->$libelleCourt                                     ; }                 
function getLibelleLong                                        ( )  { return $this->$libelleLong                                      ; }                 
function getLibelleAffichage                                   ( )  { return $this->$libelleAffichage                                 ; }                 
function getPrioriteAffichage                                  ( )  { return $this->$prioriteAffichage                                ; }                 
function getDateDebutValidite                                  ( )  { return $this->$dateDebutValidite                                ; }                 
function getDateFinValidite                                    ( )  { return $this->$dateFinValidite                                  ; }                 
function getTemoinVisible                                      ( )  { return $this->$temoinVisible                                    ; }                 
function getTemoinLivre                                        ( )  { return $this->$temoinLivre                                      ; }                 
function getCategorieObjet                                     ( )  { return $this->$categorieObjet                                   ; }                 
function getCodeBcn                                            ( )  { return $this->$codeBcn                                          ; }                 
function getExoinsExtra                                        ( )  { return $this->$exoinsExtra                                      ; }                 
function getTemoinExoneration                                  ( )  { return $this->$temoinExoneration                                ; }                 
function getTypeBourse                                         ( )  { return $this->$typeBourse                                       ; }                 
function getExoinsCom                                          ( )  { return $this->$exoinsCom                                        ; }                 
function getCodeSISEIns                                        ( )  { return $this->$codeSISEIns                                      ; }                 
function getCodeSISERslt                                       ( )  { return $this->$codeSISERslt                                     ; }                 
function getTemoinCVEC                                         ( )  { return $this->$temoinCVEC                                       ; }                 
function getFinancementPossible                                ( )  { return $this->$financementPossible                              ; }                 
function getDroitABourse                                       ( )  { return $this->$droitABourse                                     ; }                 
function getTypeNomenclatureCursusFormation                    ( )  { return $this->$typeNomenclatureCursusFormation                  ; }                 
function getCodeCursusFormation                                ( )  { return $this->$codeCursusFormation                              ; }                 
function getTypeNomenclatureNiveauFormation                    ( )  { return $this->$typeNomenclatureNiveauFormation                  ; }                 
function getCodeNiveauFormation                                ( )  { return $this->$codeNiveauFormation                              ; }                 
function getTypeNomenclatureNatureDiplome                      ( )  { return $this->$typeNomenclatureNatureDiplome                    ; }                 
function getCodeNatureDiplome                                  ( )  { return $this->$codeNatureDiplome                                ; }                 
function getTypeNomenclatureTitreAcces                         ( )  { return $this->$typeNomenclatureTitreAcces                       ; }                 
function getCodeTitreAcces                                     ( )  { return $this->$codeTitreAcces                                   ; }                 
function getTypeNomenclatureTypeBac                            ( )  { return $this->$typeNomenclatureTypeBac                          ; }                 
function getCodeTypeBac                                        ( )  { return $this->$codeTypeBac                                      ; }                 
function getTypeDiplome                                        ( )  { return $this->$typeDiplome                                      ; }                 
function getTypeNomenclatureDomaineformation                   ( )  { return $this->$typeNomenclatureDomaineformation                 ; }                 
function getCodeDomaineFormation                               ( )  { return $this->$codeDomaineFormation                             ; }                 
function getOrdre                                              ( )  { return $this->$ordre                                            ; }                 
function getPositif                                            ( )  { return $this->$positif                                          ; }                 
function getSeqListeCodeNom                                    ( )  { return $this->$seqListeCodeNom                                  ; }                 
function getContinent                                          ( )  { return $this->$continent                                        ; }                 
function getLibelleNationalite                                 ( )  { return $this->$libelleNationalite                               ; }                 
function getCodeDrapeau                                        ( )  { return $this->$codeDrapeau                                      ; }                 
function getTemoinUnionEuropeenne                              ( )  { return $this->$temoinUnionEuropeenne                            ; }                 
function getTemoinAccords                                      ( )  { return $this->$temoinAccords                                    ; }                 
function getCodeIso3611                                        ( )  { return $this->$codeIso3611                                      ; }                 
function getTypeNomenclatureSituationEmploi                    ( )  { return $this->$typeNomenclatureSituationEmploi                  ; }                 
function getCodeSituationEmploi                                ( )  { return $this->$codeSituationEmploi                              ; }                 
function getTypeNomenclatureCategorieSocioprofessionnelle8     ( )  { return $this->$typeNomenclatureCategorieSocioprofessionnelle8   ; }                 
function getCodeCategorieSocioprofessionnelle8                 ( )  { return $this->$codeCategorieSocioprofessionnelle8               ; }
function getCommentaire                 ( )  { return $this->commentaire               ; }
    
static function formatDateFinValiditeVersPegase($date) {
    if ($date<>"") 
            $dateCalcule=$date;
            else $dateCalcule=null;
                
    return $dateCalcule;
                
    }    

function deleteRefNomenclatureGeneriqueDansPegase ($pNomenclature,$pConnBd)
{
    
    $req='delete FROM local_rdd.rdd_ref_nomenclature_generique
                WHERE  local_rdd.rdd_ref_nomenclature_generique."typeNomenclature"=\''.$pNomenclature.'\'';
        

        
        //echo "requete ".$req."<br>";
        $findResult = pg_query($pConnBd,$req);
        $numrows    = pg_num_rows($findResult);
                        
      return $numrows;
    
}

function insertRefNomenclatureGeneriqueDansBd ($pNomenclature,$pConnBd, $pTabRef)
{
    
    
        //$pNomenclature='BourseAideFinanciere';
        
        //echo 'MajRefNomenclatureGeneriqueDansPegase<br>'
        //    . 'Recuperation des referentiels inscrits dans la base de données<br>'
        //    . 'Pour '.$pNomenclature.'<br>';
       
        
        //echo '<br>Tableau de données<br>';
        //print_r($pTabRef);
        $sq=0;
        $j=0;
        $k=0;
        $booDomaineFormation=true;
        $booCategorieSocioPro=true;        
        $booBoucle=false;
        $i=0;
        while ($i<count($pTabRef)) {

            //var_dump($pTabRef[$i]);
            //echo '<br><br>';
            
            

            
            if (!empty($pTabRef[$i]["typeNomenclature"]))  $this->typeNomenclature = "'".$pTabRef[$i]["typeNomenclature"]."'"; else $this->typeNomenclature = null;
            
            //echo 'typeNomenclature : '.$pTabRef[$i]["typeNomenclature"] .'<br>';
            
            // Code valeur obligatoire
            $this->code = "'".$pTabRef[$i]["code"]."'"; 
                
            if (!empty($pTabRef[$i]["libelleCourt"]))       
                $this->libelleCourt = "'".str_replace('\'','\'\'',$pTabRef[$i]["libelleCourt"])."'"; else $this->libelleCourt = "''";
                
            if (!empty($pTabRef[$i]["libelleLong"]))        
                $this->libelleLong = "'".str_replace('\'','\'\'',$pTabRef[$i]["libelleLong"])."'"; else $this->libelleLong = "''";
                
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
 
            if ((isset($pTabRef[$i]["categorieObjet"])) and (!empty($pTabRef[$i]["categorieObjet"])))   
                "'".$this->categorieObjet = "'".$pTabRef[$i]["categorieObjet"]."'"; else $this->categorieObjet = "''";
                
            if ((isset($pTabRef[$i]["codeBcn"]))        and (!empty($pTabRef[$i]["codeBcn"])))  
                "'".$this->codeBcn = "'".$pTabRef[$i]["codeBcn"]."'"; else $this->codeBcn = "''";
                
            if ((isset($pTabRef[$i]["exoinsExtra"]))    and (!empty($pTabRef[$i]["exoinsExtra"])))       
                "'".$this->exoinsExtra = "'".$pTabRef[$i]["exoinsExtra"]."'"; else $this->exoinsExtra = "''";
            
            if ( isset($pTabRef[$i]["temoinExoneration"]))      
                $this->temoinExoneration = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinExoneration"]);         
            else $this->temoinExoneration = 'null';
                
            if ((isset($pTabRef[$i]["typeBourse"])) and (!empty($pTabRef[$i]["typeBourse"])))         
                $this->typeBourse = "'".$pTabRef[$i]["typeBourse"]."'"; else $this->typeBourse = "''";
            
                
            if ((isset($pTabRef[$i]["exoinsCom"])) and (!empty($pTabRef[$i]["exoinsCom"])))           
                $this->exoinsCom = "'".$pTabRef[$i]["exoinsCom"]."'"; else $this->exoinsCom = "''";
                
            
            if ((isset($pTabRef[$i]["codeSISEIns"])) and (!empty($pTabRef[$i]["codeSISEIns"])))       
                $this->codeSISEIns = "'".$pTabRef[$i]["codeSISEIns"]."'"; else $this->codeSISEIns = 'null';
                
            if ((isset($pTabRef[$i]["codeSISERslt"])) and (!empty($pTabRef[$i]["codeSISERslt"])))     
                $this->codeSISERslt = "'".$pTabRef[$i]["codeSISERslt"]."'"; else $this->codeSISERslt = 'null';
            
            if ( isset($pTabRef[$i]["temoinCVEC"]))  
                $this->temoinCVEC = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinCVEC"]);  
            else $this->temoinCVEC = 'null'; 

            if ( isset($pTabRef[$i]["financementPossible"]))  
                $this->financementPossible = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["financementPossible"]);  
            else $this->financementPossible = 'null'; 
            
            if ( isset($pTabRef[$i]["droitABourse"]))  
                $this->droitABourse = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["droitABourse"]);    
            else $this->droitABourse = 'null';   
            
            if (!empty($pTabRef[$i]["cursusFormation"]["typeNomenclature"]))  
                $this->typeNomenclatureCursusFormation = "'".$pTabRef[$i]["cursusFormation"]["typeNomenclature"]."'"; else $this->typeNomenclatureCursusFormation = "''";
                
            if (!empty($pTabRef[$i]["cursusFormation"]["code"])) 
                $this->codeCursusFormation = "'".$pTabRef[$i]["cursusFormation"]["code"]."'"; else $this->codeCursusFormation = "''";
                
            if (!empty($pTabRef[$i]["niveauFormation"]["typeNomenclature"]))  
                $this->typeNomenclatureNiveauFormation = "'".$pTabRef[$i]["niveauFormation"]["typeNomenclature"]."'"; else $this->typeNomenclatureNiveauFormation = "''";
                
            if (!empty($pTabRef[$i]["niveauFormation"]["code"])) 
                $this->codeNiveauFormation = "'".$pTabRef[$i]["niveauFormation"]["code"]."'"; else $this->codeNiveauFormation = "''";
                
            if (!empty($pTabRef[$i]["natureDiplome"]["typeNomenclature"]))  
                $this->typeNomenclatureNatureDiplome = "'".$pTabRef[$i]["natureDiplome"]["typeNomenclature"]."'"; else $this->typeNomenclatureNatureDiplome = "''";
                
            if (!empty($pTabRef[$i]["natureDiplome"]["code"]))   
                $this->codeNatureDiplome = "'".$pTabRef[$i]["natureDiplome"]["code"]."'"; else $this->codeNatureDiplome = "''";
                
            if (!empty($pTabRef[$i]["titreAcces"]["typeNomenclature"]))  
                $this->typeNomenclatureTitreAcces = "'".$pTabRef[$i]["titreAcces"]["typeNomenclature"]."'"; else $this->typeNomenclatureTitreAcces = "''";
            
            
            if (!empty($pTabRef[$i]["titreAcces"]["code"]))      
                $this->codeTitreAcces = "'".$pTabRef[$i]["titreAcces"]["code"]."'"; else $this->codeTitreAcces = "''";
                
            if (!empty($pTabRef[$i]["typeBac"]["typeNomenclature"]))  
                $this->typeNomenclatureTypeBac = "'".$pTabRef[$i]["typeBac"]["typeNomenclature"]."'"; else $this->typeNomenclatureTypeBac = "''";
                
            if (!empty($pTabRef[$i]["typeBac"]["code"]))         
                $this->codeTypeBac = "'".$pTabRef[$i]["typeBac"]["code"]."'"; else $this->codeTypeBac = "''";
                
            if (!empty($pTabRef[$i]["typeDiplome"]))         
                $this->typeDiplome = "'".$pTabRef[$i]["typeDiplome"]."'"; else $this->typeDiplome = "''";
                
            if (isset($pTabRef[$i]["domaineFormationLst"]) and (!empty($pTabRef[$i]["domaineFormationLst"]))) {
                
                $booDomaineFormation=true;
                $nbOccurs=count($pTabRef[$i]["domaineFormationLst"]);
                if ($nbOccurs>0 and  $k<$nbOccurs )  { 
                    $booNewInsertMentionDiplome=true;
                    $booBoucle=true;
                }

                if (isset($pTabRef[$i]["domaineFormationLst"][$k]["typeNomenclature"]) and !empty($pTabRef[$i]["domaineFormationLst"][$k]["typeNomenclature"])) {  
                    $this->typeNomenclatureDomaineformation = "'".$pTabRef[$i]["domaineFormationLst"][$k]["typeNomenclature"]."'"; 
                } else $this->typeNomenclatureDomaineformation = "''";
                
                if (!empty($pTabRef[$i]["domaineFormationLst"][$k]["code"])) 
                    $this->codeDomaineFormation = "'".$pTabRef[$i]["domaineFormationLst"][$k]["code"]."'"; 
                else $this->codeDomaineFormation = "''";

                
            }    
            else {
                $this->typeNomenclatureDomaineformation = "''";
                $this->codeDomaineFormation = "''";
            }                

            
            if (!empty($pTabRef[$i]["ordre"]))               
                $this->ordre = "'".$pTabRef[$i]["ordre"]."'"; else $this->ordre = "''";

            if ( isset($pTabRef[$i]["positif"])) 
                $this->positif = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["positif"]);    
            else $this->positif = 'null';   
                
                
            if (!empty($pTabRef[$i]["continent"]))           
                $this->continent = "'".$pTabRef[$i]["continent"]."'"; else $this->continent = "''";
                
            if ( !empty($pTabRef[$i]["libelleNationalite"]))  
                $this->libelleNationalite = "'".$pTabRef[$i]["libelleNationalite"]."'"; else $this->libelleNationalite = 'null';
                
            if (!empty($pTabRef[$i]["codeDrapeau"]))         
                $this->codeDrapeau = "'".$pTabRef[$i]["codeDrapeau"]."'"; else $this->codeDrapeau = 'null';

            if ( isset($pTabRef[$i]["temoinUnionEuropeenne"])) 
                $this->temoinUnionEuropeenne = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinUnionEuropeenne"]);
            else $this->temoinUnionEuropeenne = 'null';     
            
            if ( isset($pTabRef[$i]["temoinAccords"]))
                $this->temoinAccords = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinAccords"]);    
             else $this->temoinAccords = 'null'; 
              
               
            if (!empty($pTabRef[$i]["codeIso3611"]))         
                $this->codeIso3611 = "'".$pTabRef[$i]["codeIso3611"]."'"; else $this->codeIso3611 = 'null';
            
            if (isset($pTabRef[$i]["situationEmploiLst"]) and (!empty($pTabRef[$i]["situationEmploiLst"]))) {
                
                $nbOccurs=count($pTabRef[$i]["situationEmploiLst"]);

                if ($nbOccurs>0 and  $k<$nbOccurs ) $booBoucle=true;

                if (!empty($pTabRef[$i]["situationEmploiLst"][$k]["typeNomenclature"])) {  
                    
                    $this->typeNomenclatureSituationEmploi = "'".$pTabRef[$i]["situationEmploiLst"][$k]["typeNomenclature"]."'"; 
                } else $this->typeNomenclatureSituationEmploi = "''";
                
                if (!empty($pTabRef[$i]["situationEmploiLst"][$k]["code"])) 
                    $this->codeSituationEmploi = "'".$pTabRef[$i]["situationEmploiLst"][$k]["code"]."'"; else $this->codeSituationEmploi = "''";
                    
                
            }    
            else {
                $this->typeNomenclatureSituationEmploi = "''";
                $this->codeSituationEmploi = "''";
            }
            
            
            if ((!empty($pTabRef[$i]["typeNomenclature"])) and (!empty($pTabRef[$i]["categorieSocioprofessionnelle8"]))) {  
                if (!empty($pTabRef[$i]["categorieSocioprofessionnelle8"]["typeNomenclature"])) {  
                    $this->typeNomenclatureCategorieSocioprofessionnelle8 = "'".$pTabRef[$i]["categorieSocioprofessionnelle8"]["typeNomenclature"]."'"; 
                } else $this->typeNomenclatureCategorieSocioprofessionnelle8 = "''";
                
                //echo 'pTabRef[$i]["categorieSocioprofessionnelle8"]["code"] '.$pTabRef[$i]["categorieSocioprofessionnelle8"]["code"].'<br>';
                if (!empty($pTabRef[$i]["categorieSocioprofessionnelle8"]["code"]))  {
                    $this->codeCategorieSocioprofessionnelle8 = "'".$pTabRef[$i]["categorieSocioprofessionnelle8"]["code"]."'"; 
                    } else { $this->codeCategorieSocioprofessionnelle8 = "''"; }
                //echo 'codeCategorieSocioprofessionnelle8 '.$this->codeCategorieSocioprofessionnelle8 .'<br>'; 
                
            } else {
                $this->typeNomenclatureCategorieSocioprofessionnelle8 = "''";
                $this->codeCategorieSocioprofessionnelle8 = "''";
            }

            if ( isset($pTabRef[$i]["temoinDiplomeNationalAglae"]))  
                $this->temoinDiplomeNationalAglae = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinDiplomeNationalAglae"]);  
            else $this->temoinDiplomeNationalAglae = 'null'; 

            if ( isset($pTabRef[$i]["temoinDiplomeHabiliteAglae"]))  
                $this->temoinDiplomeHabiliteAglae = ChaineCaracteres::formatBooleanVersBD($pTabRef[$i]["temoinDiplomeHabiliteAglae"]);  
            else $this->temoinDiplomeHabiliteAglae = 'null'; 

            if ( !empty($pTabRef[$i]["echelleSise"]))  
                $this->echelleSise = "'".$pTabRef[$i]["echelleSise"]."'"; else $this->echelleSise = 'null';

            if ( !empty($pTabRef[$i]["commentaire"]))  
                $this->commentaire = "'".str_replace('\'','\'\'',$pTabRef[$i]["commentaire"])."'"; else $this->commentaire = "''";
            
            
            /*
             * Permet de gerer les listes présentent et appelle dans certain referentiel
             */
            
                if (!$booBoucle) { 
                    $this->seqListeCodeNom = 1; 
                }
                else {
                    $this->seqListeCodeNom = $k+1;
                }
                
            $req='INSERT INTO local_rdd.rdd_ref_nomenclature_generique(
            "typeNomenclature", code, "libelleCourt", "libelleLong", "libelleAffichage", "prioriteAffichage", "dateDebutValidite", "dateFinValidite", 
            "temoinVisible", "temoinLivre", "categorieObjet", "codeBcn", "exoinsExtra", "temoinExoneration", "typeBourse", "exoinsCom", "codeSISEIns", 
            "codeSISERslt", "temoinCVEC", "financementPossible", "droitABourse", "typeNomenclatureCursusFormation", "codeCursusFormation", 
            "typeNomenclatureNiveauFormation", "codeNiveauFormation", "typeNomenclatureNatureDiplome", "codeNatureDiplome", "typeNomenclatureTitreAcces",
            "codeTitreAcces", "typeNomenclatureTypeBac", "codeTypeBac", "typeDiplome", "typeNomenclatureDomaineformation", "codeDomaineFormation", ordre, 
            positif, "seqListeCodeNom", continent, "libelleNationalite", "codeDrapeau", 
            "temoinUnionEuropeenne", "temoinAccords", "codeIso3611", 
            "typeNomenclatureSituationEmploi", "codeSituationEmploi", "typeNomenclatureCategorieSocioprofessionnelle8", "codeCategorieSocioprofessionnelle8",
            "temoinDiplomeNationalAglae","temoinDiplomeHabiliteAglae","echelleSise", "commentaire")
            VALUES ('.$this->typeNomenclature.
                     ','.$this->code.
                     ','.$this->libelleCourt. 
                     ','.$this->libelleLong.                    
                     ','.$this->libelleAffichage          .                     
                     ','.$this->prioriteAffichage         .                     
                     ','.$this->dateDebutValidite         .                     
                     ','.$this->dateFinValidite           .                     
                     ','.$this->temoinVisible             .                     
                     ','.$this->temoinLivre               .                     
                     ','.$this->categorieObjet            .                     
                     ','.$this->codeBcn                   .                     
                     ','.$this->exoinsExtra               .                     
                     ','.$this->temoinExoneration         .                     
                     ','.$this->typeBourse                .                     
                     ','.$this->exoinsCom                 .                     
                     ','.$this->codeSISEIns               .                     
                     ','.$this->codeSISERslt              .                     
                     ','.$this->temoinCVEC   .                     
                     ','.$this->financementPossible       .                     
                     ','.$this->droitABourse              .                     
                     ','.$this->typeNomenclatureCursusFormation.                
                     ','.$this->codeCursusFormation             .               
                     ','.$this->typeNomenclatureNiveauFormation .               
                     ','.$this->codeNiveauFormation             .               
                     ','.$this->typeNomenclatureNatureDiplome   .               
                     ','.$this->codeNatureDiplome               .               
                     ','.$this->typeNomenclatureTitreAcces      .               
                     ','.$this->codeTitreAcces                  .               
                     ','.$this->typeNomenclatureTypeBac         .               
                     ','.$this->codeTypeBac                     .               
                     ','.$this->typeDiplome                     .               
                     ','.$this->typeNomenclatureDomaineformation.               
                     ','.$this->codeDomaineFormation            .               
                     ','.$this->ordre                           .               
                     ','.$this->positif                         .               
                     ','.$this->seqListeCodeNom                 .               
                     ','.$this->continent                       .               
                     ','.$this->libelleNationalite              .               
                     ','.$this->codeDrapeau                     .               
                     ','.$this->temoinUnionEuropeenne           .               
                     ','.$this->temoinAccords                   .               
                     ','.$this->codeIso3611                     .               
                     ','.$this->typeNomenclatureSituationEmploi .               
                     ','.$this->codeSituationEmploi             .               
                     ','.$this->typeNomenclatureCategorieSocioprofessionnelle8. 
                     ','.$this->codeCategorieSocioprofessionnelle8 .
                     ','.$this->temoinDiplomeNationalAglae .
                     ','.$this->temoinDiplomeHabiliteAglae .
                     ','.$this->echelleSise .
                     ','.$this->commentaire .
                     ')';        
             
            //echo '<br>'.$req.'<br>';

            $findResult = pg_query($pConnBd,$req);

            if (!$booBoucle) { 
                $i++;
                $k=0;
            }
            else {
                $k++;
                if ($k>=$nbOccurs) {
                    $booNewInsertMentionDiplome=false;
                    $booBoucle=false;
                    $k=0;
                    $i++;
                }
                    
            }
                
            
            };
         return $i;
}




function selectRefNomenclatureGeneriqueDansBD ($pNomenclature, $connexion)
{
    

        //echo 'entrer dans selectRefNomenclatureGenerique<br>';
        $req='SELECT *
                FROM local_rdd.rdd_ref_nomenclature_generique
                WHERE  local_rdd.rdd_ref_nomenclature_generique."typeNomenclature"=\''.$pNomenclature.'\''
                . 'order by local_rdd.rdd_ref_nomenclature_generique."typeNomenclature", local_rdd.rdd_ref_nomenclature_generique."code", local_rdd.rdd_ref_nomenclature_generique."seqListeCodeNom"';
        
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




function selectNomenclatureSpecialiteBacInitiale ($pNomenclature, $connexion)
{
    

        //echo 'entrer dans selectRefNomenclatureGenerique<br>';
        $req='SELECT \'SpecialitesBacGeneral\' as "typeNomenclature",code , "libelleCourt" , 	"libelleLong", "libelleAffichage" , "prioriteAffichage" , "dateDebutValidite" , 
	"dateFinValidite" , "temoinVisible" , 	"temoinLivre" ,	"codeBcn"
                FROM local_rdd.pegase_ref_spe_bac
                order by local_rdd.pegase_ref_spe_bac.code';
        
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
function formatRefBourseAideFinancieres ($bdRef) {
    
        //echo 'Entrer dans formatRefBourseAideFinancieres '.count($bdRef).'<br>';
        //print_r($bdRef[3]);
        $i=0;
        while ($i<count($bdRef)) {

            //echo '$i'.$i.'<br>';
            $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
            
            $selectionInfosBD[$i]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            
            $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);
            $selectionInfosBD[$i]['exoinsExtra']=$bdRef[$i]['exoinsExtra'];
            $selectionInfosBD[$i]['codeBcn']=$bdRef[$i]['codeBcn'];

            //echo 'exoneration '.$i. ' '.$bdRef[$i]['temoinExoneration'].'<br>';
            
            $selectionInfosBD[$i]['temoinExoneration']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinExoneration']);
            //$selectionInfosBD[$i]['temoinExoneration']=$bdRef[$i]['temoinExoneration'];    
            $selectionInfosBD[$i]['typeBourse']=$bdRef[$i]['typeBourse'];
            $selectionInfosBD[$i]['exoinsCom']=$bdRef[$i]['exoinsCom'];

            $i++;
            
        }    

        //echo 'sortie de formatRefBourseAideFinancieres<br>';
        return $selectionInfosBD;
    }

    
function formatRefProfilExonerant ($bdRef) {
    
        //echo 'Entrer dans formatRefBourseAideFinancieres '.count($bdRef).'<br>';
        //print_r($bdRef[3]);
        $i=0;
        while ($i<count($bdRef)) {

            //echo '$i'.$i.'<br>';
            $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
            
            $selectionInfosBD[$i]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);

            //echo 'livre '.$bdRef[$i]['temoinLivre'].'<br>';        
            
            $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);
  
            $selectionInfosBD[$i]['exoinsExtra']=$bdRef[$i]['exoinsExtra'];
            $selectionInfosBD[$i]['commentaire']=$bdRef[$i]['commentaire'];

            $i++;
            
        }    

        //echo 'sortie de formatRefBourseAideFinancieres<br>';
        return $selectionInfosBD;
    }

    
function formatRefGeneriqueAvecCBN ($bdRef) {
    
        //echo 'Entrer dans formatRefBourseAideFinancieres '.count($bdRef).'<br>';
        //print_r($bdRef[3]);
        $i=0;
        while ($i<count($bdRef)) {

            //echo '$i'.$i.'<br>';
            $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
            
            $selectionInfosBD[$i]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            
            $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);
            $selectionInfosBD[$i]['codeBcn']=$bdRef[$i]['codeBcn'];

            $i++;
            
        }    

        //echo 'sortie de formatRefBourseAideFinancieres<br>';
        return $selectionInfosBD;
    }


    
    
    function formatRefCategorieSocioPro ($bdRef, $situationEmploi, $catSocioPro8) {
    
        //echo 'Entrer dans formatRefCategorieSocioPro '.count($bdRef).'<br>';
        
        //print_r($bdRef);
        
        $i=0;
        $l=-1;
        $k=0;
        $savCodeCsp='';
        while ($i<count($bdRef)) {

            //echo '$savCodeCsp '.$savCodeCsp.' $bdRef['.$i.'][code] '.$bdRef[$i]['code'].'<br>';    
            if ($savCodeCsp != $bdRef[$i]['code']) {
                $l++;
                $k=0;
            }
            //echo 'Dans boucle formatage tableau categorie socio pro $i'.$i.'<br>';
            $selectionInfosBD[$l]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$l]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$l]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$l]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$l]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$l]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);
           //echo '$bdRef['.$i.'][dateDebutValidite]'.$bdRef[$i]['dateDebutValidite'].'<br>';
            $selectionInfosBD[$l]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
           
            $selectionInfosBD[$l]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);

            
            $selectionInfosBD[$l]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            $selectionInfosBD[$l]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);

            $selectionInfosBD[$l]['codeBcn']=$bdRef[$i]['codeBcn'];

             $j=0;
            $booTrouve=false;
            while ($j<=count($catSocioPro8) and !$booTrouve) {
                
                if ($bdRef[$i]['codeCategorieSocioprofessionnelle8']==$catSocioPro8[$j]['code']) {
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['typeNomenclature']=$catSocioPro8[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['code']=$catSocioPro8[$j]['code'];
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['libelleCourt']=$catSocioPro8[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['libelleLong']=$catSocioPro8[$j]['libelleLong'];
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['libelleAffichage']=$catSocioPro8[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['prioriteAffichage']= intval($catSocioPro8[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['dateDebutValidite']=$catSocioPro8[$j]['dateDebutValidite'];
                    
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['dateFinValidite']= $this::formatDateFinValiditeVersPegase($catSocioPro8[$j]['dateFinValidite']);
                    
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($catSocioPro8[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($catSocioPro8[$j]['temoinLivre']);
                    
                    
                    $selectionInfosBD[$l]['categorieSocioprofessionnelle8']['codeBcn']=$catSocioPro8[$j]['codeBcn'];
                    $booTrouve=true;
                }
                $j++;
            }

           $j=0;
            $booTrouve=false;
            while ($j<count($situationEmploi) ) {
                
                if ( $bdRef[$i]['codeSituationEmploi']==$situationEmploi[$j]['code']) {
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['typeNomenclature']=$situationEmploi[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['code']=$situationEmploi[$j]['code'];
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['libelleCourt']=$situationEmploi[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['libelleLong']=$situationEmploi[$j]['libelleLong'];
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['libelleAffichage']=$situationEmploi[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['prioriteAffichage']= intval($situationEmploi[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['dateDebutValidite']=$situationEmploi[$j]['dateDebutValidite'];
                    
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($situationEmploi[$j]['dateFinValidite']);
                    
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($situationEmploi[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['situationEmploiLst'][$k]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($situationEmploi[$j]['temoinLivre']);
                    
                     $selectionInfosBD[$l]['situationEmploiLst'][$k]['codeBcn']=$situationEmploi[$j]['codeBcn'];

                    $k++;
                    
                }
                
                
                $j++;
                
            }

            

 
            $savCodeCsp=$bdRef[$i]['code'];
            $i++;
            
            
        }    

        return $selectionInfosBD;
    }


    
    function formatRefMentionDiplome ($bdRef, $domaineFormation ) {
    
    //   echo 'Entrer dans formatRefMentionDiplome '.count($bdRef).'<br>';
        
        //print_r($bdRef);
        
        $i=0;
        $l=-1;
        $k=0;
        $savCodeMentionDiplome='';
        while ($i<count($bdRef)) {


            if ($savCodeMentionDiplome != $bdRef[$i]['code']) {
                $l++;
                $k=0;
            }

            $selectionInfosBD[$l]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$l]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$l]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$l]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$l]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$l]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);

            $selectionInfosBD[$l]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
           
            $selectionInfosBD[$l]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            
            $selectionInfosBD[$l]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            $selectionInfosBD[$l]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);
            
            $selectionInfosBD[$l]['codeBcn']=$bdRef[$i]['codeBcn'];
            $selectionInfosBD[$l]['typeDiplome']=$bdRef[$i]['typeDiplome'];


           $j=0;
            $booTrouve=false;
            while ($j<count($domaineFormation) ) {
                
                if ( $bdRef[$i]['codeDomaineFormation']==$domaineFormation[$j]['code']) {
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['typeNomenclature']=$domaineFormation[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['code']=$domaineFormation[$j]['code'];
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['libelleCourt']=$domaineFormation[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['libelleLong']=$domaineFormation[$j]['libelleLong'];
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['libelleAffichage']=$domaineFormation[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['prioriteAffichage']= intval($domaineFormation[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['dateDebutValidite']=$domaineFormation[$j]['dateDebutValidite'];
                    
                    
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($domaineFormation[$j]['dateFinValidite']);
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($domaineFormation[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($domaineFormation[$j]['temoinLivre']);
                    
                    $selectionInfosBD[$l]['domaineFormationLst'][$k]['codeBcn']=$domaineFormation[$j]['codeBcn'];

                    $k++;
                    
                }
                
                
                $j++;
                
            }


            $savCodeMentionDiplome=$bdRef[$i]['code'];
            $i++;
            
            
        }    

        return $selectionInfosBD;
    }

    

    
    function formatRefPaysNationalite ($bdRef ) {
    
    //    echo 'Entrer dans formatRefPaysNationalite '.count($bdRef).'<br>';
        
      
        
        $i=0;
        $l=0;
        while ($i<count($bdRef)) {


            $selectionInfosBD[$l]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$l]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$l]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$l]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$l]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$l]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$l]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
           
            $selectionInfosBD[$l]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
                
            $selectionInfosBD[$l]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            $selectionInfosBD[$l]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);
                
            $selectionInfosBD[$l]['continent']=$bdRef[$i]['continent'];
            $selectionInfosBD[$l]['libelleNationalite']=$bdRef[$i]['libelleNationalite'];
            $selectionInfosBD[$l]['codeDrapeau']=$bdRef[$i]['codeDrapeau'];            
            
            
            $selectionInfosBD[$l]['temoinUnionEuropeenne']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinUnionEuropeenne']);
            $selectionInfosBD[$l]['temoinAccords']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinAccords']);
            
            $selectionInfosBD[$l]['codeIso3611']=$bdRef[$i]['codeIso3611'];


            $i++;
            $l++;
            
            
        }    

        return $selectionInfosBD;
    }
    
    function formatRefRegimeInscription ($bdRef) {
    
        $i=0;
        while ($i<count($bdRef)) {

            $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['prioriteAffichage']=intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
            
            $selectionInfosBD[$i]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            
            $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);

            $selectionInfosBD[$i]['codeSISEIns']=$bdRef[$i]['codeSISEIns'];
            $selectionInfosBD[$i]['codeSISERslt']=$bdRef[$i]['codeSISERslt'];
            $selectionInfosBD[$i]['temoinCVEC']= ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinCVEC']);
            $selectionInfosBD[$i]['financementPossible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['financementPossible']);
            $selectionInfosBD[$i]['droitABourse']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['droitABourse']);
            $selectionInfosBD[$i]['codeBcn']=$bdRef[$i]['codeBcn'];


            $i++;
            
        }    

        return $selectionInfosBD;
    }
  

    function formatRefTypeObjetFormation ($bdRef) {
    
        //echo 'Entrer dans formatRefCategorieSocioPro '.count($bdRef).'<br>';
        $i=0;
        while ($i<count($bdRef)) {

            $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['prioriteAffichage']=intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
            
            $selectionInfosBD[$i]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            
            $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);

            $selectionInfosBD[$i]['categorieObjet']=$bdRef[$i]['categorieObjet'];


            $i++;
            
        }    

        return $selectionInfosBD;
    }


    function formatRefTypeResultat ($bdRef) {
    
        //echo 'Entrer dans formatRefCategorieSocioPro '.count($bdRef).'<br>';
        $i=0;
        while ($i<count($bdRef)) {

            $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['prioriteAffichage']=intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
            
            $selectionInfosBD[$i]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            
            $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);
            $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);

            $selectionInfosBD[$i]['ordre']=$bdRef[$i]['ordre'];
            $selectionInfosBD[$i]['positif']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['positif']);


            $i++;
            
        }    

        return $selectionInfosBD;
    }

    
    function formatRefSerieBac($bdRef,$selectionTitreAcces, $selectionTypeBac)      {
        
    //    echo 'Entrer dans formatRefMentionDiplome '.count($bdRef).'<br>';
        
      
        
        $i=0;
        $l=0;

        while ($i<count($bdRef)) {

            $selectionInfosBD[$l]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$l]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$l]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$l]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$l]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$l]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$l]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
           
            $selectionInfosBD[$l]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            
            $selectionInfosBD[$l]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);  
            $selectionInfosBD[$l]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);
            $selectionInfosBD[$l]['codeBcn']=$bdRef[$i]['codeBcn'];
            
            
             $j=0;
            $booTrouve=false;
            while ($j<=count($selectionTitreAcces) and !$booTrouve) {
                
                if ($bdRef[$i]['codeTitreAcces']==$selectionTitreAcces[$j]['code']) {
                    $selectionInfosBD[$l]['titreAcces']['typeNomenclature']=$selectionTitreAcces[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['titreAcces']['code']=$selectionTitreAcces[$j]['code'];
                    $selectionInfosBD[$l]['titreAcces']['libelleCourt']=$selectionTitreAcces[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['titreAcces']['libelleLong']=$selectionTitreAcces[$j]['libelleLong'];
                    $selectionInfosBD[$l]['titreAcces']['libelleAffichage']=$selectionTitreAcces[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['titreAcces']['prioriteAffichage']= intval($selectionTitreAcces[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['titreAcces']['dateDebutValidite']=$selectionTitreAcces[$j]['dateDebutValidite'];
                    
                    $selectionInfosBD[$l]['titreAcces']['dateFinValidite']= $this::formatDateFinValiditeVersPegase($selectionTitreAcces[$j]['dateFinValidite']);
                    $selectionInfosBD[$l]['titreAcces']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($selectionTitreAcces[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['titreAcces']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($selectionTitreAcces[$j]['temoinLivre']);
                    $booTrouve=true;
                }
                $j++;
            }


             $j=0;
            $booTrouve=false;
            while ($j<=count($selectionTypeBac) and !$booTrouve) {
                
                if ($bdRef[$i]['codeTypeBac']==$selectionTypeBac[$j]['code']) {
                    $selectionInfosBD[$l]['typeBac']['typeNomenclature']=$selectionTypeBac[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['typeBac']['code']=$selectionTypeBac[$j]['code'];
                    $selectionInfosBD[$l]['typeBac']['libelleCourt']=$selectionTypeBac[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['typeBac']['libelleLong']=$selectionTypeBac[$j]['libelleLong'];
                    $selectionInfosBD[$l]['typeBac']['libelleAffichage']=$selectionTypeBac[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['typeBac']['prioriteAffichage']= intval($selectionTypeBac[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['typeBac']['dateDebutValidite']=$selectionTypeBac[$j]['dateDebutValidite'];
                    
                    $selectionInfosBD[$l]['typeBac']['dateFinValidite']= $this::formatDateFinValiditeVersPegase($selectionTypeBac[$j]['dateFinValidite']);
                    $selectionInfosBD[$l]['typeBac']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($selectionTypeBac[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['typeBac']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($selectionTypeBac[$j]['temoinLivre']);
                    
                    $booTrouve=true;
                }
                $j++;
            }            

            $i++;
            $l++;
            
            
        }    

        return $selectionInfosBD;        
        
        
        
    }  
    
    
  
    function formatRefTypeDiplome($bdRef,$selectionCursusFormation, $selectionNiveauFormation,$selectionNatureDiplome)      {
        
    //    echo 'Entrer dans formatRefTypeDiplome '.count($bdRef).'<br>';
        
      
        
        $i=0;
        $l=0;

        while ($i<count($bdRef)) {

            $selectionInfosBD[$l]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$l]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$l]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$l]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$l]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$l]['prioriteAffichage']= intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$l]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
           
            $selectionInfosBD[$l]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            
            $selectionInfosBD[$l]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);  
            $selectionInfosBD[$l]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);

            $selectionInfosBD[$l]['codeBcn']=$bdRef[$i]['codeBcn'];
            
            
             $j=0;
            $booTrouve=false;
            while ($j<=count($selectionCursusFormation) and !$booTrouve) {
                
                if ($bdRef[$i]['codeCursusFormation']==$selectionCursusFormation[$j]['code']) {
                    $selectionInfosBD[$l]['cursusFormation']['typeNomenclature']=$selectionCursusFormation[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['cursusFormation']['code']=$selectionCursusFormation[$j]['code'];
                    $selectionInfosBD[$l]['cursusFormation']['libelleCourt']=$selectionCursusFormation[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['cursusFormation']['libelleLong']=$selectionCursusFormation[$j]['libelleLong'];
                    $selectionInfosBD[$l]['cursusFormation']['libelleAffichage']=$selectionCursusFormation[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['cursusFormation']['prioriteAffichage']= intval($selectionCursusFormation[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['cursusFormation']['dateDebutValidite']=$selectionCursusFormation[$j]['dateDebutValidite'];
                    
                    $selectionInfosBD[$l]['cursusFormation']['dateFinValidite']= $this::formatDateFinValiditeVersPegase($selectionCursusFormation[$j]['dateFinValidite']);

                    $selectionInfosBD[$l]['cursusFormation']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($selectionCursusFormation[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['cursusFormation']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($selectionCursusFormation[$j]['temoinLivre']);
                    $selectionInfosBD[$l]['cursusFormation']['codeBcn']=$selectionCursusFormation[$j]['codeBcn'];
                    $booTrouve=true;
                }
                $j++;
            }


             $j=0;
            $booTrouve=false;
            while ($j<=count($selectionNiveauFormation) and !$booTrouve) {
                
                if ($bdRef[$i]['codeNiveauFormation']==$selectionNiveauFormation[$j]['code']) {
                    $selectionInfosBD[$l]['niveauFormation']['typeNomenclature']=$selectionNiveauFormation[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['niveauFormation']['code']=$selectionNiveauFormation[$j]['code'];
                    $selectionInfosBD[$l]['niveauFormation']['libelleCourt']=$selectionNiveauFormation[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['niveauFormation']['libelleLong']=$selectionNiveauFormation[$j]['libelleLong'];
                    $selectionInfosBD[$l]['niveauFormation']['libelleAffichage']=$selectionNiveauFormation[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['niveauFormation']['prioriteAffichage']= intval($selectionNiveauFormation[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['niveauFormation']['dateDebutValidite']=$selectionNiveauFormation[$j]['dateDebutValidite'];
                    
                    $selectionInfosBD[$l]['niveauFormation']['dateFinValidite']= $this::formatDateFinValiditeVersPegase($selectionNiveauFormation[$j]['dateFinValidite']);
                    $selectionInfosBD[$l]['niveauFormation']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($selectionNiveauFormation[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['niveauFormation']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($selectionNiveauFormation[$j]['temoinLivre']);
  
                    $selectionInfosBD[$l]['niveauFormation']['codeBcn']=$selectionNiveauFormation[$j]['codeBcn'];
                    $booTrouve=true;
                }
                $j++;
            }            

             $j=0;
            $booTrouve=false;
            while ($j<=count($selectionNatureDiplome) and !$booTrouve) {
                
                if ($bdRef[$i]['codeNatureDiplome']==$selectionNatureDiplome[$j]['code']) {
                    $selectionInfosBD[$l]['natureDiplome']['typeNomenclature']=$selectionNatureDiplome[$j]['typeNomenclature'];
                    $selectionInfosBD[$l]['natureDiplome']['code']=$selectionNatureDiplome[$j]['code'];
                    $selectionInfosBD[$l]['natureDiplome']['libelleCourt']=$selectionNatureDiplome[$j]['libelleCourt'];
                    $selectionInfosBD[$l]['natureDiplome']['libelleLong']=$selectionNatureDiplome[$j]['libelleLong'];
                    $selectionInfosBD[$l]['natureDiplome']['libelleAffichage']=$selectionNatureDiplome[$j]['libelleAffichage'];
                    $selectionInfosBD[$l]['natureDiplome']['prioriteAffichage']= intval($selectionNatureDiplome[$j]['prioriteAffichage']);
                    $selectionInfosBD[$l]['natureDiplome']['dateDebutValidite']=$selectionNatureDiplome[$j]['dateDebutValidite'];
                    
                    $selectionInfosBD[$l]['natureDiplome']['dateFinValidite']= $this::formatDateFinValiditeVersPegase($selectionNatureDiplome[$j]['dateFinValidite']);

                    $selectionInfosBD[$l]['natureDiplome']['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($selectionNatureDiplome[$j]['temoinVisible']);
                    $selectionInfosBD[$l]['natureDiplome']['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($selectionNatureDiplome[$j]['temoinLivre']);
                    $selectionInfosBD[$l]['natureDiplome']['codeBcn']=$selectionNatureDiplome[$j]['codeBcn'];
                    $booTrouve=true;
                }
                $j++;
            }
            
            //echo '$bdRef['.$i.'][temoinDiplomeNationalAglae] '. $bdRef[$i]['temoinDiplomeNationalAglae'].' [temoinDiplomeHabiliteAglae] '.$bdRef[$i]['temoinDiplomeHabiliteAglae']. '<br>';
            $selectionInfosBD[$l]['temoinDiplomeNationalAglae']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinDiplomeNationalAglae']);
            $selectionInfosBD[$l]['temoinDiplomeHabiliteAglae']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinDiplomeHabiliteAglae']);
            $selectionInfosBD[$l]['echelleSise']=$bdRef[$i]['echelleSise'];

            
            $i++;
            $l++;
            
            
        }    

        return $selectionInfosBD;        
        
        
        
    }      
    
    
    function formatRefGenerique ($bdRef) {
    
        //echo 'Entrer dans formatRefCategorieSocioPro '.count($bdRef).'<br>';
        $i=0;
        while ($i<count($bdRef)) {

            $selectionInfosBD[$i]['typeNomenclature']=$bdRef[$i]['typeNomenclature'];
            $selectionInfosBD[$i]['code']=$bdRef[$i]['code'];
            $selectionInfosBD[$i]['libelleCourt']=$bdRef[$i]['libelleCourt'];
            $selectionInfosBD[$i]['libelleLong']=$bdRef[$i]['libelleLong'];
            $selectionInfosBD[$i]['libelleAffichage']=$bdRef[$i]['libelleAffichage'];
            $selectionInfosBD[$i]['prioriteAffichage']=intval($bdRef[$i]['prioriteAffichage']);
            $selectionInfosBD[$i]['dateDebutValidite']=$bdRef[$i]['dateDebutValidite'];
            
            $selectionInfosBD[$i]['dateFinValidite']= $this::formatDateFinValiditeVersPegase($bdRef[$i]['dateFinValidite']);
            $selectionInfosBD[$i]['temoinVisible']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinVisible']);  
            $selectionInfosBD[$i]['temoinLivre']=ChaineCaracteres::formatBooleanVersAPI($bdRef[$i]['temoinLivre']);

            $i++;
            
        }    

        return $selectionInfosBD;
    }
    
    
    
}