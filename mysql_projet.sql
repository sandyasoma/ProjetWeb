#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        numUtilisateur   int (11) Auto_increment  NOT NULL ,
        loginUtilisateur Varchar (25) ,
        mdpUtilisateur   Varchar (25) ,
        PRIMARY KEY (numUtilisateur )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Enfant
#------------------------------------------------------------

CREATE TABLE Enfant(
        numEnfant       int (11) Auto_increment  NOT NULL ,
        nomEnfant       Varchar (25) ,
        prenomEnfant    Varchar (25) ,
        dateNaissEnfant Varchar (25) ,
        mailEnfant      Varchar (25) ,
        telEnfant       Int ,
        categorieEnfant Varchar (25) ,
        apportEnfant    Float ,
        consoEnfant     Float ,
        numCompte       Int ,
        numCommande     Int ,
        PRIMARY KEY (numEnfant )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Compte
#------------------------------------------------------------

CREATE TABLE Compte(
        numCompte int (11) Auto_increment  NOT NULL ,
        numEnfant Int NOT NULL ,
        dateSolde Date ,
        PRIMARY KEY (numCompte )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        numCommande  int (11) Auto_increment  NOT NULL ,
        qteCommande  Int ,
        numProduit   Int NOT NULL ,
        numProduit_1 Int ,
        PRIMARY KEY (numCommande )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        numProduit       int (11) Auto_increment  NOT NULL ,
        nomProduit       Varchar (25) ,
        qteProduitDispo  Int ,
        prixVenteProduit Float ,
        PRIMARY KEY (numProduit )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ListeCourse
#------------------------------------------------------------

CREATE TABLE ListeCourse(
        numListe           int (11) Auto_increment  NOT NULL ,
        qteNecessaireListe Int ,
        montantGlobalListe Float ,
        PRIMARY KEY (numListe )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: est chargé
#------------------------------------------------------------

CREATE TABLE est_charge(
        numUtilisateur Int NOT NULL ,
        numEnfant      Int NOT NULL ,
        PRIMARY KEY (numUtilisateur ,numEnfant )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: est composé de
#------------------------------------------------------------

CREATE TABLE est_compose_de(
        qteComposition Int ,
        numProduit     Int NOT NULL ,
        numProduit_1   Int NOT NULL ,
        PRIMARY KEY (numProduit ,numProduit_1 )
)ENGINE=InnoDB;

ALTER TABLE Enfant ADD CONSTRAINT FK_Enfant_numCompte FOREIGN KEY (numCompte) REFERENCES Compte(numCompte);
ALTER TABLE Enfant ADD CONSTRAINT FK_Enfant_numCommande FOREIGN KEY (numCommande) REFERENCES Commande(numCommande);
ALTER TABLE Commande ADD CONSTRAINT FK_Commande_numProduit_1 FOREIGN KEY (numProduit_1) REFERENCES Produit(numProduit);
ALTER TABLE est_charge ADD CONSTRAINT FK_est_charge_numUtilisateur FOREIGN KEY (numUtilisateur) REFERENCES Utilisateur(numUtilisateur);
ALTER TABLE est_charge ADD CONSTRAINT FK_est_charge_numEnfant FOREIGN KEY (numEnfant) REFERENCES Enfant(numEnfant);
ALTER TABLE est_compose_de ADD CONSTRAINT FK_est_compose_de_numProduit FOREIGN KEY (numProduit) REFERENCES Produit(numProduit);
ALTER TABLE est_compose_de ADD CONSTRAINT FK_est_compose_de_numProduit_1 FOREIGN KEY (numProduit_1) REFERENCES Produit(numProduit);
