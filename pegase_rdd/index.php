<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//include 'session.php';        
include 'classes/classBaseDonnees.inc.php';
include 'classes/classReferentielPegase.inc.php';
include 'classes/classOdfPegase.inc.php';
include 'classes/classStructureUAI.inc.php';
include 'classes/classValidationFormations.inc.php';
include 'constantes.php';
include 'classes/classChaine.inc.php';
include 'initVariables.php';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    <center>
            <img src='images/logoGrenobleAlpes.png' height='125'/>
            <br>
            <img src="images/pegase.png" />
        
        <p>
            <b>
            
            Gestion des référentiels Pegase dans le cadre de la RDD
            </b>
            <?php if ($tem_visible=="visible") {$tem_visible='invisible';} else {$tem_visible='visible';} ?>
            <a href='index.php?tem_visible=<?php print $tem_visible ?>' target="_blanck">En savoir plus </a>
        </p>
        </center>
        
        <form method="post" action="index.php" name="formGestionReferentielPegase">
            
            
            
            <?php
            //echo '$_SERVER[REMOTE_ADDR]'.$_SERVER['REMOTE_ADDR'].' => '.gethostbyaddr($_SERVER['REMOTE_ADDR']).'<br>';
            if (strpos(gethostbyaddr($_SERVER['REMOTE_ADDR']),'grenet')) {
            
            ?>
            <br><br><br><br><br>
            Sélectionner l'etablissement sur lequel on travaille :
            <table width='100%'>
                <tr>
                    <td>            <a href='index.php?etabEncours=usmb' ><img src='images/logoSavoie.gif' height="70"/>   </a>    </td>
                    <td>            <a href='index.php?etabEncours=uga' ><img src='images/logoGrenobleAlpes.png'  height="50"/>   </a>    </td>
                    <td>            <a href='index.php?etabEncours=inp' ><img src='images/logoINPG.gif'  height="50" />   </a></td>
                    <td>            <a href='index.php?etabEncours=iep' ><img src='images/logoSciencesPo.png'  height="50" />   </a></td>
                    
                </tr>
            </table>
            <?php 
            }
            ?>
            
    <?php 
        

if ( isset($_POST['etabEncours']) or isset($_GET['etabEncours']))
    {$etabEncours = ( isset($_POST['etabEncours']) ) ? $_POST['etabEncours'] : $_GET['etabEncours'];}

    else
    {	$etabEncours= 'pcscol';   }

    
    ?>
    
    <div class="<?php print $tem_visible ?>">        
            
        <p style='text-align: left'>
        La mise à jour du référentiel pegase doit passer apres que l'initialisation des référentiels soient passées avec l'outil de RDD.
        <ul style="text-align:left">S'il y a des anomalies qui apparaissent, verifier :
        <li>Le fichier nomenclature du référentiel concernée</li>
        <li>Le contenu de la table RDD_REF_NOMENCLATURE_GENERIQUE sur http://postgresql-pgadmin.grenet.fr/browser/ </li>
        <li>Le contenu dans pegase</li>
        </ul>
        Si les éléments référentiels ont bien été ajouté dans pegase, vous pouvez faire une recuperation du référentiel de pegase, pour le sauvegarder 
        dans la BD pour la prochaine fois. C'est souvent lié à des changements de valeur de date de validité ou d'initialisation de certain champ.
        Si ce n'est pas cohérent, voir les scripts de maj ou de recuperation des référentiels.
        <br>
        <br>
        <ul>Les référentiels rappatriés sont les suivants :
            <li>Bourse Aide Financiere</li>
            <li>Categorie Socio Professionnelle
                <ul>
                <li>Categorie Socio Professionelle 8</li>
                <li>Situation Emploi</li>
                <li>Categorie Socio Professionelle</li>
                </ul>
            </li>
            <li>Mention Diplome
                <ul>
                <li>Domaine Formation</li>
                <li>Mention Diplome</li>
                </ul>
            </li>
            <li>Niveau Diplome</li>
            <li>Pays Nationalite : Mettre la priorité d'affichage</li>
         
            <li>Profil Exonerant = Profil Specificite</li>
            <li>Regime Inscription</li>
            <li>Serie Bac
                <ul>
                <li>Titre Acces</li>
                <li>Type Bac</li>
                <li>Serie Bac</li>
                </ul>
            </li>
            <li>Situation Militaire    </li>
            <li>Specialites bac général</li>
            <li>Structure Organisationnelle et Hierarchie   </li>
            <li>Type Dernier Diplome Obtenu</li>
            <li>Type Diplome
                <ul>
                <li>Cursus Formation
                <li>Nature Diplome</li>
                <li>Niveau Formation</li>
                <li>Type Diplome</li>
                </ul>
            </li>
            <li>Type Formation</li>
            <li>Type Objet Formation    </li>
            <li>Type Resultat</li>
            <li>Quotite Activité</li>
            
        </ul>
        
        
        </p>    
    </div>
            
        <input type="hidden" name="etabEncours" value="<?php print $etabEncours ?>" >    
        <input type="hidden" name="token" value="<?php print $token ?>" >    
		<input type="hidden" name="environnement" value="<?php print $environnement ?>" >
            
        <table width='100%' border='1'>
            <tr>
                <?php 
                if ( $etabEncours ==  "usmb"
                    or $etabEncours ==  "uga"
                    or $etabEncours ==  "inp"
                    or $etabEncours ==  "iep") {
                ?>
                <th align='center' >Etablissement en cours</th>
                <?php 
                }
                ?>
                <th>Environnement  </th> <th> Pegase => Base locale de sauvegarde </th>
                <th align='center'>Base locale de sauvegarde => Pegase</th>
            </tr>
            
            <tr>
            <?php 
                if ( $etabEncours ==  "usmb"
                    or $etabEncours ==  "uga"
                    or $etabEncours ==  "inp"
                    or $etabEncours ==  "iep") {
                ?>
                <td width='20%'>
                <?php
                    switch ($etabEncours) {
                    case 'usmb':
                        print_r("<img src='images/logoSavoie.gif' height='100'/>");
                        break;
                    case 'uga':
                        print_r("<img src='images/logoGrenobleAlpes.png' height='100'/>");
                        break;
                    case 'inp':
                        print_r("<img src='images/logoINPG.gif' height='100'/>");
                        break;
                    case 'iep':
                        print_r("<img src='images/logoSciencesPo.png' height='100'/>");
                        break;
                    }
                ?>
                </td>
                
                <?php
                }
                ?>
                
                <td  width='10%'> 
                    <select onchange="document.formGestionReferentielPegase.action='index.php';document.formGestionReferentielPegase.submit();" name="environnement">
                    <option selected value="<?php print $environnement ?>"><?php print $environnement ?></option>
                    <option  value="rdd"><?php print 'RDD' ?></option>
                    <option  value="test"><?php print 'Test' ?></option>
                    <option  value="pilote"><?php print 'Pilote' ?></option>
                    <!--<option  value="prod"><?php print 'Prod' ?></option>-->
                </select>
                
                </td>
                
                <td  width='30%'>Action : 
                    <select onchange="document.formGestionReferentielPegase.action='index.php';document.formGestionReferentielPegase.submit();" name="actionRecup">
                    <option selected value="<?php print $actionRecup ?>"><?php print $actionRecup ?></option>
                    <option  value=""></option>
                    <option  value="BourseAideFinanciere"><?php print 'Bourses et Aides Financieres' ?></option>
                    <option  value="CategorieSocioPro"><?php print 'Catégorie socio professionnelle' ?></option>
                    <option  value="MentionDiplome"><?php print 'Mention Diplome' ?></option>
                    <option  value="NiveauDiplome"><?php print 'Niveau Diplome' ?></option>
                    <option  value="PaysNationalite"><?php print 'Pays Nationalité' ?></option>
                    <option  value="ProfilExonerant"><?php print 'Profil Exonerant' ?></option>
                    <option  value="QuotiteActivite"><?php print 'Quotité Activité' ?></option>
                    <option  value="RegimeInscription"><?php print 'Régime Inscription' ?></option>
                    <option  value="SerieBac"><?php print 'Série Bac' ?></option>
                    <option  value="SituationMilitaire"><?php print 'Situation Militaire' ?></option>
                    <option  value="SpecialitesBacGeneral"><?php print 'Specialites Bac General' ?></option>
                    <option  value="TypeDernierDiplomeObtenu"><?php print 'Type Dernier Diplome Obtenu' ?></option>
                    <option  value="TypeDiplome"><?php print 'TypeDiplome' ?></option>
                    <option  value="TypeFormation"><?php print 'TypeFormation' ?></option>
                    <option  value="TypeObjetFormation"><?php print 'Type Objet Formation' ?></option>
                    <option  value="TypeResultat"><?php print 'Type Resultat' ?></option>
                    <option  ><?php print '========================================' ?></option>
                    <option  value="StructureUAI"><?php print 'Structure UAI' ?></option>
                    <option  value="Formation"><?php print 'Formation pour validation' ?></option>
                    </select>
                    <br>
                    <span style="background: red; color: white">Recuperation des référentiel de pegase vers la BD 
                    La récuperation des référentiels doit etre faite lorsque cela est necessaire, les données récupérée etant 
                    ensuite reinjecter dans pegase. Donc cette fonctionnalité est utilisé lorsqu' un reférentiel a été modifié manuellement
                    dans pegase, afin que les utilisateurs n'aient pas à les resaisir lors de l'initialisation de l'instance Pegase.
                    </span>
                </td>
                
                <td  width='30%'> Action : Mise à jour des référentiel de pegase à partir de la BD
                <select onchange="document.formGestionReferentielPegase.action='index.php';document.formGestionReferentielPegase.submit();" name="actionMaj">
                    <option selected value="<?php print $actionMaj ?>"><?php print $actionMaj ?></option>
                    <option  value=""><?php print '' ?></option>
                    <option  value="BourseAideFinanciere"><?php print 'Bourses et Aides Financieres' ?></option>
                    <option  value="CategorieSocioPro"><?php print 'Catégorie socio professionnelle' ?></option>
                    <option  value="MentionDiplome"><?php print 'Mention Diplome' ?></option>
                    <option  value="NiveauDiplome"><?php print 'Niveau Diplome' ?></option>
                    <option  value="PaysNationalite"><?php print 'Pays Nationalité' ?></option>
                    <option  value="ProfilExonerant"><?php print 'Profil Exonerant' ?></option>
                    <option  value="QuotiteActivite"><?php print 'Quotité Activité' ?></option>
                    <option  value="RegimeInscription"><?php print 'Régime Inscription' ?></option>
                    <option  value="SerieBac"><?php print 'Série Bac' ?></option>
                    <option  value="SituationMilitaire"><?php print 'Situation Militaire' ?></option>
                    <option  value="SpecialitesBacGeneral"><?php print 'Specialites Bac General' ?></option>
                    <option  value="TypeDernierDiplomeObtenu"><?php print 'Type Dernier Diplome Obtenu' ?></option>
                    <option  value="TypeDiplome"><?php print 'Type de Diplome' ?></option>
                    <option  value="TypeFormation"><?php print 'Type de Formation' ?></option>
                    <option  value="TypeObjetFormation"><?php print 'Type Objet Formation' ?></option>
                    <option  value="TypeResultat"><?php print 'Type Resultat' ?></option>
                    <option  ><?php print '======================' ?></option>
                    <option  value="StructureUAI"><?php print 'Structure UAI' ?></option>
                    <option  value="AssocierParentStructureUAI"><?php print 'Hierarchie Structure Organisationnelle' ?></option>
                    <option  value="Formation"><?php print 'Formation pour validation' ?></option>
                    <option  ><?php print '======================' ?></option>
                    <option  value="InjectionSpecialiteBac"><?php print 'Injection de la nomenclature specialité Bac dans pegase' ?></option>
                </select>
                
                </td>
                
            </tr>

            
            
            
            
        </table>
        
        </form>
        <p style="text-align:left">
        <?php
        

        echo '=======================================================================<br>';
        echo 'Etablissement : '.$etabEncours.'/'.$environnement.' Action Recup : '.$actionRecup.' / Maj : '.$actionMaj.'<br>';
        echo '=======================================================================<br>';
        
        if (isset($etabEncours) and !empty($etabEncours) and isset ($environnement) and !empty($environnement)) {
            $conn=new BaseDeDonnees();
            $client=$conn->connect_postgres($tabParamEtab[$etabEncours][$environnement]);
            if (!$client) {
                echo '<BR>====> Connexion à la base locale de travail impossible : tous les paramètres n\'ont pas été sélectionnés ou des paramétrages de l\'outil sont manquants';
                echo pg_last_error();
            } else {
                echo '<BR>====> Connexion à la base locale de travail OK';
            }
            // Recherche du token
            $token=$conn->recuperationTokenAPIPegase($tabParamEtab[$etabEncours][$environnement]);
            
            if (!$token){
                echo '<BR>====> Récupération token non effectuée : tous les paramètres n\'ont pas été sélectionnés, des paramétrages de l\'outil sont manquants ou aucune action n\'a été demandée';
            } else {
                echo '<BR>====> Token '.$token;
            }
            
            $paramsEtab=$tabParamEtab[$etabEncours][$environnement];
            $choixflux='0';
            
            
            //Appel à l'api de recuperation du referentiel
            $refGen=new ReferentielPegase();
            $refStructure=new StructureUAI();
            $formation=new ValidationFormations();   
            $refPeriode=new OdfPegase();
            
            if (isset($actionRecup) and !empty($actionRecup)) {
                
                echo '<BR><BR><BR>===================== DEBUT DE TRAITEMENT DE RECUPERATION ===============<br>';
                
                $actionMaj="";
                $choixflux='1';
                

                
                $cheminRelatif=$paramAppelApiRef[$actionRecup];
                //print_r($cheminRelatif);
                $nbOccurs=count($cheminRelatif);
                $x=1;
                while ($x<=$nbOccurs) {

                    //echo 'cheminRelatif['.$x.'][chemin_recup] '.$cheminRelatif[$x]['chemin_recup'].'<br>';
                    $jsonRef= BaseDeDonnees::AppelAPIRecupReferentielRecupInfos ($cheminRelatif[$x]['type_nomenclature'], $paramsEtab, $environnement, $token, $cheminRelatif[$x]['chemin_recup']);
                    //echo 'recup du JSON<br><br>';
                    //print_r($jsonRef);
                    $tabRef = json_decode($jsonRef,true);
                    //echo '<br>';

                    
                    
                    switch ($actionRecup) {

                        case 'Periode':
                            echo '====> Debut traitement Periode de mise en oeuvre<br>';
                            //print_r($tabRef);
                            

                            $posMessage=stripos($jsonRef,'[{' );
                            $lenMessage=strlen($jsonRef)-$posMessage;
                            $message= substr($jsonRef,$posMessage,$lenMessage);
                            $tabRef= json_decode($message);

                            
                            if (!isset ($tabRef["status"]) or $tabRef["status"]==200) {
                                $nbSupp=$refPeriode->deletePeriodeMiseEnOeuvreDansBd($client );
                                //echo 'Lignes supprimées : '.$nbSupp.'<br>';

                                $resultat=$refPeriode->insertPeriodeMiseEnOeuvreDansBd($client, $tabRef);
                                echo 'Nombre de lignes traitées : '.$resultat.'<br>';
                            }
                            
                            
                            break;

                        
                        case 'StructureUAI':
                            echo '====> Debut traitement structure UAI<br>';
                            //print_r($tabRef);
                            $tabRef = json_decode($jsonRef,true);

                            
                            if (!isset ($tabRef["status"]) or $tabRef["status"]==200) {
                                $nbSupp=$refStructure->deleteStructureUAIDansBD($client );
                                //echo 'Lignes supprimées : '.$nbSupp.'<br>';

                                $resultat=$refStructure->insertStructureDansBD($client, $tabRef);
                                echo 'Nombre de lignes traitées : '.$resultat.'<br>';
                            }
                            
                            
                            break;
                        
                        case 'Formation' :
                            
                            echo '====> Debut traitement des formations a valider<br>';
                            //print_r($tabRef);

                            $posMessage=stripos($jsonRef,'[{' );
                            $lenMessage=strlen($jsonRef)-$posMessage;
                            $message= substr($jsonRef,$posMessage,$lenMessage);
                            $tabRef= json_decode($message);
                            
                            //echo "Anomalie sur la mise à jour de l'occurance<pre>";
                            //echo "json transforme en tableau<br>';
                            //print_r($tabRef);
                            //echo '</pre>';
                            
                            
                            if (!isset ($tabRef["status"]) or $tabRef["status"]==200) {
                                $nbSupp=$formation->deleteFormationsValideesDansBD($client );
                                //echo 'Lignes supprimées : '.$nbSupp.'<br>';

                                $resultat=$formation->insertFormationValideeDansBD($client, $tabRef);
                                echo 'Nombre de lignes traitées : '.$resultat.'<br>';
                            }
                            
                            
                            
                            break;
                        
                        default:

                            $tabRef = json_decode($jsonRef,true);
                            //Mise à jour de la BD
                            if (!isset ($tabRef["status"]) or $tabRef["status"]==200) {
                                $nbSupp=$refGen->deleteRefNomenclatureGeneriqueDansPegase($cheminRelatif[$x]['type_nomenclature'], $client );
                                //echo 'Lignes supprimées : '.$nbSupp.'<br>';

                                $resultat=$refGen->insertRefNomenclatureGeneriqueDansBD($actionRecup,$client, $tabRef);
                                echo 'Nombre de lignes traitées : '.$resultat.'<br>';
                            }
                            
                            
                            break;
                    }
                    
                    echo "<pre><p style='text-align: left'>";
                    print_r($tabRef);
                    echo "</p></pre>";
                    
                    $x++;
                }
                
                echo '<BR>===================== FIN DE TRAITEMENT DE RECUPERATION ===============';
            }
            
            if (isset($actionMaj)  and !empty($actionMaj)) {
                
                echo '<BR><BR><BR>===================== DEBUT DE TRAITEMENT DE MAJ ===============';
                
                $actionRecup='';
                $choixflux='2';
                
                //$refGen=new ReferentielPegase();
                //$refStructure=new StructureUAI();

                $cheminRelatif=$paramAppelApiRef[$actionMaj];
                $selectionInfosBD=array();

                switch ($actionMaj) {
                    case 'BourseAideFinanciere':
                        echo '<br>=====> Traitement Bourse et aide financiere '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionInfosBD=$refGen->formatRefBourseAideFinancieres($bdRef);
                        if (empty($selectionInfosBD)) {
                            echo 'Aucune bourse ou aide financière sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionInfosBD, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    case 'CategorieSocioPro' :
                        echo '<br>=====> Traitement Categorie Socio Professionelle 8 '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[2]['type_nomenclature'],$client);
                        $selectionCatSocPro8=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionCatSocPro8)) {
                            echo 'Aucune catégorie socio professionnelle8 sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionCatSocPro8, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[2]['chemin_maj'] );
                        }
                        
                        echo '<br>=====> Traitement Situation Emploi '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionSitEmploi=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionSitEmploi)) {
                            echo 'Aucune situation emploi sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionSitEmploi, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        
                        echo '<br>=====> Traitement Categorie Socio Professionelle '.$cheminRelatif[3]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[3]['type_nomenclature'],$client);
                        $selectionCatSocPro=$refGen->formatRefCategorieSocioPro($bdRef,$selectionSitEmploi, $selectionCatSocPro8);
                        if (empty($selectionCatSocPro)) {
                            echo 'Aucune catégorie socio professionnelle sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionCatSocPro, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[3]['chemin_maj'] );
                        }
                        break;

                    case 'MentionDiplome' :
                        echo '<br>=====> Traitement Domaine Formation '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionDomaineFormation=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionDomaineFormation)) {
                            echo 'Aucun domaine de formation sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionDomaineFormation, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        echo '<br>=====> Traitement Mention Diplome '.$cheminRelatif[2]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[2]['type_nomenclature'],$client);
                        $selectionMentionDiplome=$refGen->formatRefMentionDiplome($bdRef,$selectionDomaineFormation);
                        if (empty($selectionMentionDiplome)) {
                            echo 'Aucune mention de diplome sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionMentionDiplome, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[2]['chemin_maj'] );
                        }
                        break;

                    case 'NiveauDiplome' :
                        echo '<br>=====> Traitement Niveau Diplome '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionNiveauDiplome=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionNiveauDiplome)) {
                            echo 'Aucun niveau de diplôme sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionNiveauDiplome, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    case 'PaysNationalite' :
                        echo '<br>=====> Traitement Pays Nationalite '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionPays=$refGen->formatRefPaysNationalite($bdRef);
                        if (empty($selectionPays)) {
                            echo 'Aucun pays sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionPays, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;
                        
                    case 'ProfilExonerant':
                        echo '<br>=====> Traitement Profil Exonerant '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionInfosBD=$refGen->formatRefProfilExonerant($bdRef);
                        if (empty($selectionInfosBD)) {
                            echo 'Aucun profil exonérant sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionInfosBD, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;
                        
                    case 'RegimeInscription' :
                        echo '<br>=====> Traitement Regime Inscription '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionRegimeInscrip=$refGen->formatRefRegimeInscription($bdRef);
                        if (empty($selectionRegimeInscrip)) {
                            echo 'Aucun régime d\'inscription sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionRegimeInscrip, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;
                        
                    case 'SerieBac' :
                        echo '<br>=====> Traitement Titre Acces '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionTitreAcces=$refGen->formatRefGenerique($bdRef);
                        if (empty($selectionTitreAcces)) {
                            echo 'Aucun titre d\'accès sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionTitreAcces, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }

                        echo '<br>=====> Traitement Type Bac '.$cheminRelatif[2]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[2]['type_nomenclature'],$client);
                        $selectionTypeBac=$refGen->formatRefGenerique($bdRef);
                        if (empty($selectionTypeBac)) {
                            echo 'Aucun type baccalauréat sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionTypeBac, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[2]['chemin_maj'] );
                        }

                        echo '<br>=====> Serie Bac '.$cheminRelatif[3]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[3]['type_nomenclature'],$client);
                        $selectionCatSocPro=$refGen->formatRefSerieBac($bdRef,$selectionTitreAcces, $selectionTypeBac);
                        if (empty($selectionCatSocPro)) {
                            echo 'Aucune série de baccalauréat sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionCatSocPro, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[3]['chemin_maj'] );
                        }
                        break;

                    case 'SituationMilitaire' :
                        echo '<br>=====> Traitement Situation Militaire '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionSituationMilitaire=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionSituationMilitaire)) {
                            echo 'Aucune situation militaire sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionSituationMilitaire, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;
                        
                    case 'SpecialitesBacGeneral' :
                        echo '<br>=====> Traitement Specialites Bac General '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionSpecialitesBacGeneral=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionSpecialitesBacGeneral)) {
                            echo 'Aucune spécialité bac général sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionSpecialitesBacGeneral, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;
                        
                    case 'TypeDernierDiplomeObtenu' :
                        echo '<br>=====> Traitement Type Dernier Diplome Obtenu '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionTypeDernierDiplomeObtenu=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionTypeDernierDiplomeObtenu)) {
                            echo 'Aucun type dernier diplôme obtenu sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionTypeDernierDiplomeObtenu, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    case 'TypeDiplome' :
                        echo '<br>=====> Traitement Cursus Formation '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionCursusFormation=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionCursusFormation)) {
                            echo 'Aucun cursus formation sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionCursusFormation, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }

                        echo '<br>=====> Traitement Niveau Formation '.$cheminRelatif[2]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[2]['type_nomenclature'],$client);
                        $selectionNiveauFormation=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionNiveauFormation)) {
                            echo 'Aucun niveau formation sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionNiveauFormation, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[2]['chemin_maj'] );
                        }
                        
                        echo '<br>=====> Traitement Nature Diplome '.$cheminRelatif[3]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[3]['type_nomenclature'],$client);
                        $selectionNatureDiplome=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionNatureDiplome)) {
                            echo 'Aucune nature diplôme sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionNatureDiplome, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[3]['chemin_maj'] );
                        }
                        
                        echo '<br>=====> Traitement Type Diplome '.$cheminRelatif[4]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[4]['type_nomenclature'],$client);
                        $selectionTypeDiplome=$refGen->formatRefTypeDiplome($bdRef,$selectionCursusFormation, $selectionNiveauFormation,$selectionNatureDiplome);
                        if (empty($selectionTypeDiplome)) {
                            echo 'Aucun type diplôme sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionTypeDiplome, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[4]['chemin_maj'] );
                        }
                        break;
                        
                    case 'TypeFormation' :
                        echo '<br>=====> Traitement Type Formation '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionTypeFormation=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionTypeFormation)) {
                            echo 'Aucun type formation sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionTypeFormation, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    case 'TypeObjetFormation' :
                        echo '<br>=====> Traitement Type Objet Formation '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionTypeObjetFormation=$refGen->formatRefTypeObjetFormation($bdRef);
                        if (empty($selectionTypeObjetFormation)) {
                            echo 'Aucun type objet formation sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionTypeObjetFormation, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    case 'TypeResultat' :
                        echo '<br>=====> Traitement Type Resultat '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionTypeResultat=$refGen->formatRefTypeResultat($bdRef);
                        if (empty($selectionTypeResultat)) {
                            echo 'Aucun type résultat sauvegardé en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionTypeResultat, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    case 'QuotiteActivite' :
                        echo '<br>=====> Traitement Quotite Activitee '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectRefNomenclatureGeneriqueDansBD($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionQuotiteActivite=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionQuotiteActivite)) {
                            echo 'Aucune quotité d\'activité sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionQuotiteActivite, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    case 'StructureUAI' :
                        echo '<br>=====> Traitement Structure UAI'.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        
                        $bdStructure=$refStructure->selectStructureUAIDansBD($client);
                        //echo 'recuperation de la BD <br>';
                        //print_r($bdStructure);
                        //echo '<br>';
                        $selectionStructureResultat=$refStructure->formatStructure($bdStructure);
                        if (empty($selectionStructureResultat)) {
                            echo 'Aucune structure sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            //echo 'transformation de la BD : selectionStructureResultat <br>';
                            //print_r($selectionStructureResultat);
                            //echo '<br>';
                            //echo '<br>Token <br>';
                            //echo $token.'<br>';
                            $resultatAppelAPI=$refStructure->formatJsonPourAppelAPIPegase($selectionStructureResultat, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj']['sans_uai'], $cheminRelatif[1]['chemin_maj']['avec_uai'] );
                        }
                        break;

                    case 'AssocierParentStructureUAI' :
                        echo '<br>=====> Traitement Hierarchie Structure UAI'.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        
                        $bdStructure=$refStructure->selectStructureUAIDansBD($client);
                        //echo 'recuperation de la BD <br>';
                        //print_r($bdStructure);
                        $selectionStructureResultat=$refStructure->formatHierarchieStructure($bdStructure);
                        if (empty($selectionStructureResultat)) {
                            echo 'Aucune hiérarchie de structure sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            echo 'transformation de la BD <br><pre>';
                            print_r($selectionStructureResultat);
                            echo '<br></pre>';
                            //echo $token.'<br>';
                            $resultatAppelAPI=$refStructure->formatJsonHierarchiePourAppelAPIPegase($selectionStructureResultat, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj']);
                        }
                        break;


                    case 'Formation' :
                        echo '<br>=====> Traitement formations '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        
                        $bdFormations=$formation->selectFormationsValideesDansBD($client);
                        //echo 'recuperation de la BD <br>';
                        //print_r($bdStructure);
                        $selectionFormationsResultat=$formation->formatFormationsValidees($bdFormations);
                        //echo 'transformation de la BD <br>';
                        //print_r($selectionStructureResultat);
                        //echo '<br>Token <br>';
                        //echo $token.'<br>';
                        $resultatAppelAPI=$formation->formatJsonPourAppelAPIPegase($selectionFormationsResultat, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        
                        
                        break;
                    
                    case 'InjectionSpecialiteBac' :
                        echo '<br>=====> Traitement injection des specialites BAC '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                        $bdRef=$refGen->selectNomenclatureSpecialiteBacInitiale($cheminRelatif[1]['type_nomenclature'],$client);
                        $selectionSpecialitesBacGeneral=$refGen->formatRefGeneriqueAvecCBN($bdRef);
                        if (empty($selectionSpecialitesBacGeneral)) {
                            echo 'Aucune spécialité de baccalauréat sauvegardée en base locale => aucune maj de Pégase';
                        } else {
                            $resultatAppelAPI=$refGen->formatJsonPourAppelAPIPegase($selectionSpecialitesBacGeneral, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );
                        }
                        break;

                    //case 'Periode' :
                    //    echo '<br>=====> Traitement Periode de mise en oeuvre '.$cheminRelatif[1]['type_nomenclature'].'<br>';
                    //    $bdRef=$refPeriode->selectPeriodeDansBD($client);
                    //    $selectionPeriode=$refPeriode->formatPeriodeMiseEnOeuvre($bdRef);
                    //    $resultatAppelAPI=$refPeriode->formatJsonPourAppelAPIPegase($selectionPeriode, $actionMaj, $paramsEtab, $environnement, $token, $cheminRelatif[1]['chemin_maj'] );

                    //    break;

                    }

            echo '<BR>===================== FIN DE TRAITEMENT DE MAJ DE PEGASE ===============<BR>';
            }
            
        }
        
        
        ?>
        </p>
    </body>
</html>
