-- ------------------------- --
-- Role: owner_local_rdd      --
-- ------------------------- --
-- Role propriétaire des tables de l'outil de sauvegarde et de restauration des référentiels pegase

CREATE ROLE owner_rdd_write;

-- ------------------------------------- --
-- SCHEMA: local_rdd                     --
-- ------------------------------------- --

-- DROP SCHEMA IF EXISTS local_rdd ;

CREATE SCHEMA IF NOT EXISTS local_rdd;

COMMENT ON SCHEMA local_rdd
 IS 'Schema utilisé pour les outils locaux dans le cadre de la RDD';


-- ------------------------- --
-- Role: role_rdd_write      --
-- ------------------------- --
-- Role utilisé par l'outil de sauvegarde et de restauration des référentiels pegase

-- DROP ROLE IF EXISTS role_rdd_write;
CREATE ROLE role_rdd_write;
COMMENT ON ROLE role_rdd_write IS 'Role permettant l''ecriture sur toutes les tables préfixées par rdd et pegase';
GRANT USAGE ON SCHEMA local_rdd TO role_rdd_write ;

CREATE ROLE usr_rdd_write WITH
  LOGIN
  PASSWORD '<mot de passe>';

GRANT role_rdd_write TO usr_rdd_write;

-- ------------------------------------- --
-- Table: local_rdd.rdd_ref_structure    --
-- ------------------------------------- --

-- DROP TABLE IF EXISTS local_rdd.rdd_ref_structure;

CREATE TABLE IF NOT EXISTS local_rdd.rdd_ref_structure
(
    code text COLLATE pg_catalog."default" NOT NULL,
    "codeReferentielExterne" text COLLATE pg_catalog."default",
    "codeUAI" text COLLATE pg_catalog."default",
    "denominationPrincipale" text COLLATE pg_catalog."default",
    "appellationOfficielle" text COLLATE pg_catalog."default",
    commentaire text COLLATE pg_catalog."default",
    "dateDebutValidite" text COLLATE pg_catalog."default",
    "dateFinValidite" text COLLATE pg_catalog."default",
    "temoinVisible" boolean,
    "sigleUai" text COLLATE pg_catalog."default",
    "typeUaiCode" text COLLATE pg_catalog."default",
    "typeUaiLibelle" text COLLATE pg_catalog."default",
    "categorieJuridiqueCode" text COLLATE pg_catalog."default",
    "categorieJuridiqueLibelle" text COLLATE pg_catalog."default",
    adresse1 text COLLATE pg_catalog."default",
    adresse2 text COLLATE pg_catalog."default",
    adresse3 text COLLATE pg_catalog."default",
    adresse4 text COLLATE pg_catalog."default",
    adresse5 text COLLATE pg_catalog."default",
    "codePostal" text COLLATE pg_catalog."default",
    "localiteAcheminement" text COLLATE pg_catalog."default",
    "codePaysAcheminement" text COLLATE pg_catalog."default",
    "libelleCourtPaysAcheminement" text COLLATE pg_catalog."default",
    "paysCode" integer,
    "paysLibelleCourt" text COLLATE pg_catalog."default",
    "paysLibelleLong" text COLLATE pg_catalog."default",
    "paysPrioriteAffichage" integer,
    "paysDateDebutValidite" text COLLATE pg_catalog."default",
    "paysDateFinValidite" text COLLATE pg_catalog."default",
    "paysTemoinVisible" boolean,
    "paysLibelleAffichage" text COLLATE pg_catalog."default",
    "paysTemoinLivre" boolean,
    "paysContinent" text COLLATE pg_catalog."default",
    "paysLibelleNationalite" text COLLATE pg_catalog."default",
    "paysCodeDrapeau" text COLLATE pg_catalog."default",
    "paysTemoinUnionEuropeenne" boolean,
    "paysTemoinAccords" boolean,
    "commCode" text COLLATE pg_catalog."default",
    "commLibelleCourt" text COLLATE pg_catalog."default",
    "commLibelleLong" text COLLATE pg_catalog."default",
    "commPrioriteAffichage" integer,
    "commDateDebutValidite" text COLLATE pg_catalog."default",
    "commDateFinValidite" text COLLATE pg_catalog."default",
    "commTemoinVisible" boolean,
    "respNom" text COLLATE pg_catalog."default",
    "respPrenom" text COLLATE pg_catalog."default",
    "respTitre" text COLLATE pg_catalog."default",
    "respDateDebutValidite" text COLLATE pg_catalog."default",
    "respDateFinValidite" text COLLATE pg_catalog."default",
    "denominationComplementaire" text COLLATE pg_catalog."default",
    "paysCodeIso3611" text COLLATE pg_catalog."default",
    "paysTypeNomenclature" text COLLATE pg_catalog."default",
    "commTypeNomenclature" text COLLATE pg_catalog."default",
    "commLibelleAffichage" text COLLATE pg_catalog."default",
    "commTemoinLivre" boolean,
    "commCodePostal" text COLLATE pg_catalog."default",
    "commCodeInsee" text COLLATE pg_catalog."default",
    "commCodeInseeAncien" text COLLATE pg_catalog."default",
    "commLigne5" text COLLATE pg_catalog."default",
    "commLibelleAcheminement" text COLLATE pg_catalog."default",
    parent text COLLATE pg_catalog."default",
    "estStructureMere" boolean,
    CONSTRAINT rdd_ref_structure_pkey PRIMARY KEY (code)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS local_rdd.rdd_ref_structure
    OWNER to "owner_rdd_write";

GRANT ALL ON TABLE local_rdd.rdd_ref_structure TO role_rdd_write;

--GRANT SELECT, INSERT, DELETE, UPDATE ON TABLE local_rdd.rdd_ref_structure TO "owner_rdd_write";

-- ------------------------------------------------ --
-- Table: local_rdd.rdd_ref_nomenclature_generique  --
-- ------------------------------------------------ --

-- DROP TABLE IF EXISTS local_rdd.rdd_ref_nomenclature_generique;

CREATE TABLE IF NOT EXISTS local_rdd.rdd_ref_nomenclature_generique
(
    "typeNomenclature" text COLLATE pg_catalog."default" NOT NULL,
    code text COLLATE pg_catalog."default" NOT NULL,
    "libelleCourt" text COLLATE pg_catalog."default" NOT NULL,
    "libelleLong" text COLLATE pg_catalog."default" NOT NULL,
    "libelleAffichage" text COLLATE pg_catalog."default",
    "prioriteAffichage" integer,
    "dateDebutValidite" text COLLATE pg_catalog."default" NOT NULL,
    "dateFinValidite" text COLLATE pg_catalog."default",
    "temoinVisible" boolean,
    "temoinLivre" boolean,
    "categorieObjet" text COLLATE pg_catalog."default",
    "codeBcn" text COLLATE pg_catalog."default",
    "exoinsExtra" text COLLATE pg_catalog."default",
    "temoinExoneration" boolean,
    "typeBourse" text COLLATE pg_catalog."default",
    "exoinsCom" text COLLATE pg_catalog."default",
    "codeSISEIns" integer,
    "codeSISERslt" integer,
    "temoinCVEC" boolean,
    "financementPossible" boolean,
    "droitABourse" boolean,
    "typeNomenclatureCursusFormation" text COLLATE pg_catalog."default",
    "codeCursusFormation" text COLLATE pg_catalog."default",
    "typeNomenclatureNiveauFormation" text COLLATE pg_catalog."default",
    "codeNiveauFormation" text COLLATE pg_catalog."default",
    "typeNomenclatureNatureDiplome" text COLLATE pg_catalog."default",
    "codeNatureDiplome" text COLLATE pg_catalog."default",
    "typeNomenclatureTitreAcces" text COLLATE pg_catalog."default",
    "codeTitreAcces" text COLLATE pg_catalog."default",
    "typeNomenclatureTypeBac" text COLLATE pg_catalog."default",
    "codeTypeBac" text COLLATE pg_catalog."default",
    "typeDiplome" text COLLATE pg_catalog."default",
    "typeNomenclatureDomaineformation" text COLLATE pg_catalog."default",
    "codeDomaineFormation" text COLLATE pg_catalog."default",
    ordre text COLLATE pg_catalog."default",
    positif boolean,
    "seqListeCodeNom" integer NOT NULL DEFAULT 0,
    continent text COLLATE pg_catalog."default",
    "libelleNationalite" text COLLATE pg_catalog."default",
    "codeDrapeau" text COLLATE pg_catalog."default",
    "temoinUnionEuropeenne" boolean,
    "temoinAccords" boolean,
    "codeIso3611" text COLLATE pg_catalog."default",
    "typeNomenclatureSituationEmploi" text COLLATE pg_catalog."default",
    "codeSituationEmploi" text COLLATE pg_catalog."default",
    "typeNomenclatureCategorieSocioprofessionnelle8" text COLLATE pg_catalog."default",
    "codeCategorieSocioprofessionnelle8" text COLLATE pg_catalog."default",
    "temoinDiplomeNationalAglae" boolean,
    "temoinDiplomeHabiliteAglae" boolean,
    "echelleSise" text COLLATE pg_catalog."default",
    commentaire text COLLATE pg_catalog."default",
    CONSTRAINT rdd_ref_nomenclature_generique_pkey PRIMARY KEY ("typeNomenclature", code, "dateDebutValidite", "seqListeCodeNom")
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS local_rdd.rdd_ref_nomenclature_generique
    OWNER to "owner_rdd_write";

GRANT ALL ON TABLE local_rdd.rdd_ref_nomenclature_generique TO role_rdd_write;

COMMENT ON TABLE local_rdd.rdd_ref_nomenclature_generique
    IS 'Table contenant le referentiel generique de pegase ';

COMMENT ON COLUMN local_rdd.rdd_ref_nomenclature_generique."typeDiplome"
    IS 'Type de diplome (licence, master..)';

COMMENT ON COLUMN local_rdd.rdd_ref_nomenclature_generique."typeNomenclatureDomaineformation"
    IS 'Type de nomenclature Domaine de formation';

COMMENT ON COLUMN local_rdd.rdd_ref_nomenclature_generique."codeDomaineFormation"
    IS 'Code Domaine formation';

