CREATE DATABASE HippoCheer;
use HippoCheer;
CREATE TABLE utilisateurs(
id_utilisateur INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom_utilisateur VARCHAR(50) NOT NULL,
prenom_utilisateur VARCHAR(50) NOT NULL,
mail_utilisateur VARCHAR(100) NOT NULL,
pseudo_utilisateur VARCHAR(50) NOT NULL,
password_utilisateur VARCHAR(255) NOT NULL)
Engine=InnoDB;
CREATE TABLE enfants(
id_enfant INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
prenom_enfant VARCHAR(50) NOT NULL,
nombre_point INT NOT NULL,
id_parent INT NOT NULL)
Engine=InnoDB;
CREATE TABLE recompenses(
id_recompense INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
intitule_recompense VARCHAR(100) NOT NULL,
statut_recompense TINYINT(1) DEFAULT 1,
cout_recompense INT NOT NULL,
enfant_recompense INT NOT NULL)
Engine=InnoDB;
CREATE TABLE regles(
id_regle INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
intitule_regle VARCHAR(100) NOT NULL,
statut_regle TINYINT(1) DEFAULT 1,
valeur_regle INT NOT NULL,
nom_parent INT NOT NULL,
nom_enfant INT NOT NULL)
Engine=InnoDB;
ALTER TABLE recompenses
ADD nom_parent_associe INT NOT NULL;

alter table enfants
add constraint fk_avoir_parent
foreign key(id_parent)
references utilisateurs(id_utilisateur);

alter table recompenses
add constraint fk_ecrire_parent
foreign key(nom_parent_associe)
references utilisateurs(id_utilisateur);

alter table recompenses
add constraint fk_obtenir_enfant
foreign key(enfant_recompense)
references enfants(id_enfant);

alter table regles
add constraint fk_editer_parent
foreign key(nom_parent)
references Utilisateurs(id_utilisateur);

alter table regles
add constraint fk_lier_enfant
foreign key(nom_enfant)
references enfants(id_enfant);