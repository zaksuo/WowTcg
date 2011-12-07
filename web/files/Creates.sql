-- ----------------------------------------------------------------------
-- MySQL Migration Toolkit
-- SQL Create Script
-- ----------------------------------------------------------------------

SET FOREIGN_KEY_CHECKS = 0;

CREATE DATABASE IF NOT EXISTS `gde`
  CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `gde`;
-- -------------------------------------
-- Tables

DROP TABLE IF EXISTS `gde`.`fusion`;
CREATE TABLE `gde`.`fusion` (
  `id_fusion` INT(8) NOT NULL,
  `code_entite_absorbe` VARCHAR(10) BINARY NOT NULL,
  `code_entite_absorbeur` VARCHAR(10) BINARY NOT NULL,
  `date_ag_absorbe` DATETIME NOT NULL,
  `date_ag_absorbeur` DATETIME NOT NULL,
  `date_effet_fusion` DATETIME NOT NULL,
  `id_commentaire` INT(8) NULL,
  `login_cre` VARCHAR(20) BINARY NOT NULL,
  `login_maj` VARCHAR(20) BINARY NOT NULL,
  `date_cre` DATETIME NOT NULL,
  `date_maj` DATETIME NOT NULL,
  `date_publicite_absorbeur` DATETIME NULL,
  `date_publicite_absorbe` DATETIME NULL,
  PRIMARY KEY (`id_fusion`),
  INDEX `idx_e06a_fk` (`code_entite_absorbe`(10)),
  INDEX `idx_e06b_fk` (`code_entite_absorbeur`(10)),
  CONSTRAINT `fk_fusion_c09_comm` FOREIGN KEY `fk_fusion_c09_comm` (`id_commentaire`)
    REFERENCES `gde`.`commentaire` (`id_commentaire`)
    ON DELETE SET NULL
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fusion_e06a_ent` FOREIGN KEY `fk_fusion_e06a_ent` (`code_entite_absorbe`)
    REFERENCES `gde`.`entite` (`code_entite`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fusion_e06b_ent` FOREIGN KEY `fk_fusion_e06b_ent` (`code_entite_absorbeur`)
    REFERENCES `gde`.`entite` (`code_entite`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION
)
ENGINE = INNODB
CHARACTER SET utf8 COLLATE utf8_general_ci;



-- -------------------------------------
-- Routines

-- DROP PROCEDURE IF EXISTS `gde`.`update_sequence`;
-- PROCEDURE update_sequence (
-- seq_name IN VARCHAR2, table_name IN VARCHAR2, col_name IN VARCHAR2) AS
-- 
-- start_with INTEGER;
-- total INTEGER;
-- 
-- BEGIN  
--   EXECUTE IMMEDIATE 'SELECT count(1) FROM '||table_name INTO total;
-- 
--   IF total > 0 THEN
--   EXECUTE IMMEDIATE 'DROP SEQUENCE '||seq_name;
--   EXECUTE IMMEDIATE 'SELECT max('||col_name||') FROM '||table_name INTO start_with;
--   start_with := start_with + 1;
--   EXECUTE IMMEDIATE 'CREATE SEQUENCE ' ||seq_name||' INCREMENT BY 1 START WITH '||start_with||' MAXVALUE 999999999999999999999999999 MINVALUE 1 NOCYCLE CACHE 20 NOORDER';
--   END IF;
-- END update_sequence;



SET FOREIGN_KEY_CHECKS = 1;

-- ----------------------------------------------------------------------
-- EOF

