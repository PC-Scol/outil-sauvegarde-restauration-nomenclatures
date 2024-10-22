<?php
/**
 * Class ListeAnomalies
 * Cette classe permet de gerer les anomalies d'acces aux bases de données
 * - Base MySQL spécifique au SAH
 * - Base Oracle Apogee de chaque établissements de Grenoble Université
 *
 * @author B. RIBET
 * @version 1.0
 * @package Classes
 */

 Class ListeAnomalies
 {
 	    var $vListeAno;
 	    var $vNbAno;

 /**
 * @param :
  */

    function ListeAnomalies ()
        {

        $this->vListeAno[][]='';
        $this->vNbAno=0;

        }

/**
 *
 * @method  : Recupere le tableau contenant la liste des evenements
 */

    function getTableAnomalies()
        {
        	return $this->vListeAno;        }

/**
 *
 * @method  : Recupere le nombre d'objet inscrit dans le tableau
 */

    function getNbAnomalies ()
        {        return $this->vNbAno;        }



	/**
	 * Selection des anomalies graves
	 * => SQL
	 * => traitement fichier
 	 */

	function Selection_ListeAnomalies()
  	{

        $Tab[][]='';

   		$req = mysql_query("
			SELECT  Err_Fonction,  Err_CodeAno , Err_CodeRequete,  Err_LibAno ,
					Err_LibUser ,  Err_Table, Err_Ordre , Err_Fichier, Err_DateAno
			FROM	 ammy_erreur
			ORDER BY Err_DateAno desc
			");

		$retour=mysql_errno();

       	if (mysql_errno()<>0)
            {
            $tab_err["Err_Fonction"]='Selection_ListeAnomalies';
            $tab_err["Err_CodeAno"]=mysql_errno();
            $tab_err["Err_CodeRequete"]=0050;
            $tab_err["Err_LibAno"]=mysql_error();
            $tab_err["Err_LibUser"]='Page encours : '.$_SERVER['PHP_SELF'];
            $tab_err["Err_Table"]='ammy_erreur';
            $tab_err["Err_Ordre"]='Select';
            $tab_err["Err_Fichier"]='ClassBaseDonnees.php';
	        $conn=new BaseDeDonnees();
    	    $conn->Insert_Anomalie($tab_err);

            }

		$i=0;
		while ($ligne=mysql_fetch_array($req))
			{
			$dt=new DateApp();
            $ev=new BaseDeDonnees();
            $ev->setDateAno($ligne['Err_DateAno']);
            $ev->setFonction($ligne['Err_Fonction']);
            $ev->setCodeAnomalie($ligne['Err_CodeAno']);
            $ev->setLibelleAnomalie($ligne['Err_LibAno']);
            $ev->setCodeRequete($ligne['Err_CodeRequete']);
            $ev->setUserAnomalie($ligne['Err_LibUser']);
            $ev->setTableSQLAnomalie($ligne['Err_Table']);
            $ev->setOrdreSQLPlante($ligne['Err_Ordre']);
            $ev->setFichierAnomalie($ligne['Err_Fichier']);
        	$this->vListeAno[$i]=$ev;
			$i=$i+1;
			}
			//echo 'nombre devenement '.$i.'<br>';

		$this->vNbAno=$i;
    }


 }


?>
