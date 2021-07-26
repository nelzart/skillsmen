#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: TypeCocktail
#------------------------------------------------------------

CREATE TABLE TypeCocktail(
        Typ_Id       Int  Auto_increment  NOT NULL ,
        Type_Libelle Varchar (100) NOT NULL
	,CONSTRAINT TypeCocktail_PK PRIMARY KEY (Typ_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Ingredients
#------------------------------------------------------------

CREATE TABLE Ingredients(
        Ing_Id        Int  Auto_increment  NOT NULL ,
        Ing_Nom       Varchar (100) NOT NULL ,
        Ing_Categorie Varchar (50) NOT NULL
	,CONSTRAINT Ingredients_PK PRIMARY KEY (Ing_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Droits
#------------------------------------------------------------

CREATE TABLE Droits(
        Drt_Id      Int  Auto_increment  NOT NULL ,
        Drt_Libelle Varchar (50) NOT NULL ,
        Drt_Niveau  Int NOT NULL
	,CONSTRAINT Droits_PK PRIMARY KEY (Drt_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateurs
#------------------------------------------------------------

CREATE TABLE Utilisateurs(
        Uti_Id              Int  Auto_increment  NOT NULL ,
        Uti_Pseudo          Varchar (50) NOT NULL ,
        Uti_Login           Varchar (50) NOT NULL ,
        Uti_Mdp             Varchar (50) NOT NULL ,
        Uti_Droit           Int NOT NULL ,
        Uti_DateInscription Date NOT NULL ,
        Drt_Id              Int NOT NULL
	,CONSTRAINT Utilisateurs_PK PRIMARY KEY (Uti_Id)

	,CONSTRAINT Utilisateurs_Droits_FK FOREIGN KEY (Drt_Id) REFERENCES Droits(Drt_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Cocktail
#------------------------------------------------------------

CREATE TABLE Cocktail(
        Coc_Id           Int  Auto_increment  NOT NULL ,
        Coc_Nom          Varchar (100) NOT NULL ,
        Coc_Recette      Text NOT NULL ,
        Coc_DateCreation Date NOT NULL ,
        Uti_Id           Int NOT NULL
	,CONSTRAINT Cocktail_PK PRIMARY KEY (Coc_Id)

	,CONSTRAINT Cocktail_Utilisateurs_FK FOREIGN KEY (Uti_Id) REFERENCES Utilisateurs(Uti_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Favoris
#------------------------------------------------------------

CREATE TABLE Favoris(
        Fav_Id           Int  Auto_increment  NOT NULL ,
        Fav_DateCreation Date NOT NULL ,
        Coc_Id           Int NOT NULL ,
        Uti_Id           Int NOT NULL
	,CONSTRAINT Favoris_PK PRIMARY KEY (Fav_Id)

	,CONSTRAINT Favoris_Cocktail_FK FOREIGN KEY (Coc_Id) REFERENCES Cocktail(Coc_Id)
	,CONSTRAINT Favoris_Utilisateurs0_FK FOREIGN KEY (Uti_Id) REFERENCES Utilisateurs(Uti_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commentaires
#------------------------------------------------------------

CREATE TABLE Commentaires(
        Com_Id           Int  Auto_increment  NOT NULL ,
        Com_Contenu      Text NOT NULL ,
        Com_dateCreation TimeStamp NOT NULL ,
        Coc_Id           Int NOT NULL ,
        Uti_Id           Int NOT NULL
	,CONSTRAINT Commentaires_PK PRIMARY KEY (Com_Id)

	,CONSTRAINT Commentaires_Cocktail_FK FOREIGN KEY (Coc_Id) REFERENCES Cocktail(Coc_Id)
	,CONSTRAINT Commentaires_Utilisateurs0_FK FOREIGN KEY (Uti_Id) REFERENCES Utilisateurs(Uti_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Likes
#------------------------------------------------------------

CREATE TABLE Likes(
        Lik_Id           Int  Auto_increment  NOT NULL ,
        Lik_DateCreation Date NOT NULL ,
        Coc_Id           Int NOT NULL ,
        Uti_Id           Int NOT NULL
	,CONSTRAINT Likes_PK PRIMARY KEY (Lik_Id)

	,CONSTRAINT Likes_Cocktail_FK FOREIGN KEY (Coc_Id) REFERENCES Cocktail(Coc_Id)
	,CONSTRAINT Likes_Utilisateurs0_FK FOREIGN KEY (Uti_Id) REFERENCES Utilisateurs(Uti_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Images
#------------------------------------------------------------

CREATE TABLE Images(
        Img_Id      Int  Auto_increment  NOT NULL ,
        Img_Nom     Varchar (100) NOT NULL ,
        Img_Adresse Varchar (100) NOT NULL ,
        Coc_Id      Int NOT NULL ,
        Uti_Id      Int NOT NULL
	,CONSTRAINT Images_PK PRIMARY KEY (Img_Id)

	,CONSTRAINT Images_Cocktail_FK FOREIGN KEY (Coc_Id) REFERENCES Cocktail(Coc_Id)
	,CONSTRAINT Images_Utilisateurs0_FK FOREIGN KEY (Uti_Id) REFERENCES Utilisateurs(Uti_Id)
	,CONSTRAINT Images_Cocktail_AK UNIQUE (Coc_Id)
	,CONSTRAINT Images_Utilisateurs0_AK UNIQUE (Uti_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CompositionCocktail
#------------------------------------------------------------

CREATE TABLE CompositionCocktail(
        Ing_Id Int NOT NULL ,
        Coc_Id Int NOT NULL
	,CONSTRAINT CompositionCocktail_PK PRIMARY KEY (Ing_Id,Coc_Id)

	,CONSTRAINT CompositionCocktail_Ingredients_FK FOREIGN KEY (Ing_Id) REFERENCES Ingredients(Ing_Id)
	,CONSTRAINT CompositionCocktail_Cocktail0_FK FOREIGN KEY (Coc_Id) REFERENCES Cocktail(Coc_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CategorieCocktail
#------------------------------------------------------------

CREATE TABLE CategorieCocktail(
        Typ_Id Int NOT NULL ,
        Coc_Id Int NOT NULL
	,CONSTRAINT CategorieCocktail_PK PRIMARY KEY (Typ_Id,Coc_Id)

	,CONSTRAINT CategorieCocktail_TypeCocktail_FK FOREIGN KEY (Typ_Id) REFERENCES TypeCocktail(Typ_Id)
	,CONSTRAINT CategorieCocktail_Cocktail0_FK FOREIGN KEY (Coc_Id) REFERENCES Cocktail(Coc_Id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Discuter
#------------------------------------------------------------

CREATE TABLE Discuter(
        Dis_EmetteurId          Int NOT NULL ,
        Dis_RecepteurId			Int NOT NULL ,
        Dis_DateCreation    TimeStamp NOT NULL ,
        Dis_Id              Int  Auto_increment  NOT NULL , 
        Dis_Contenu         Text NOT NULL,
	CONSTRAINT Discuter_PK PRIMARY KEY (Dis_id)

	,CONSTRAINT Discuter_Utilisateurs_FK FOREIGN KEY (Dis_EmetteurId) REFERENCES Utilisateurs(Uti_Id)
	,CONSTRAINT Discuter_Utilisateurs0_FK FOREIGN KEY (Dis_RecepteurId) REFERENCES Utilisateurs(Uti_Id)
)ENGINE=InnoDB;