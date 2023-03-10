#--DATABASE
   /*     create database takalo;
        use takalo;*/
# ----UTILISATEUR
            create table utilisateur (
                idUtilisateur INTEGER(50) PRIMARY KEY auto_increment,
                nom VARCHAR (10)  DEFAULT 'koto',
                email VARCHAR (50)  DEFAULT 'koto@gmail.com',
                mdp VARCHAR (7)NOT NULL,
                type INTEGER(2)
            );
            insert into utilisateur values (null,'ranto','ranto@gmail.com','11111',1);

# ----CATEGORIES
        create table categories (
            idCategories INTEGER(50) PRIMARY KEY auto_increment,
            descCategories VARCHAR (50) NOT NULL
        );
        insert into categories values (null,'meubles');
        insert into categories values (null,'ustensiles');
        insert into categories values (null,'tissus');
# ----OBJET
        create table objet (
            idObjet INTEGER(50) PRIMARY KEY auto_increment,
            idCategories INTEGER(50) references categories (idCategories),
            objet VARCHAR (50) NOT NULL,
            prix decimal(7,2),
            image varchar(100)
        );
        insert into objet values (null,1,'canape',2000,'1.jpg');
        insert into objet values (null,1,'pouf',1000,'2.jpg');
        insert into objet values (null,2,'table',6000,'3.jpg');
        insert into objet values (null,2,'armoire',7500,'4.jpg');

        insert into objet values (null,2,'louche',6000,'5.jpg');
        insert into objet values (null,2,'marmite',1200,'6.jpg');

        insert into objet values (null,2,'rideau',3000,'7.jpg');
        insert into objet values (null,2,'robe',500,'8.jpg');
        insert into objet values (null,2,'nappe de table',1300,'9.jpg');
# ----IMAGES
        create table Images (
            idImage INTEGER(50) PRIMARY KEY auto_increment,
            idObjet INTEGER(50) references categories (idCategories),
            nomImage VARCHAR (50) NOT NULL
        );
        insert into Images values (null,1,'1.jpg');
        insert into Images values (null,1,'1.jpg');

        insert into Images values (null,2,'3.jpg');
        insert into Images values (null,2,'3.jpg');

        insert into Images values (null,3,'4.jpg');
        insert into Images values (null,3,'4.jpg');

        insert into Images values (null,4,'2.jpg');
        insert into Images values (null,4,'2.jpg');

        insert into Images values (null,5,'cart1.jpg');
        insert into Images values (null,5,'cart1.jpg');

        insert into Images values (null,6,'cart2.jpg');
        insert into Images values (null,6,'cart2.jpg');

        insert into Images values (null,7,'8.jpg');
        insert into Images values (null,7,'8.jpg');

        insert into Images values (null,8,'b5');

        insert into Images values (null,9,'b6');
        insert into Images values (null,9,'b7');

# ----OBJET_PROPRIETAIRE
       create table objet_proprietaire(
           idObjet  INTEGER(50) references categories (idCategories),
           idUtilisateur  INTEGER(50) references categories (idCategories)
       );
       insert into objet_proprietaire values (1,1);
       insert into objet_proprietaire values (2,3);
       insert into objet_proprietaire values (3,1);
       insert into objet_proprietaire values (4,3);
       insert into objet_proprietaire values (5,3);
       insert into objet_proprietaire values (6,1);
       insert into objet_proprietaire values (7,3);
       insert into objet_proprietaire values (8,2);
       insert into objet_proprietaire values (9,2);
# --VUES
       select op.idObjet idObjet, c.idCategories idCategorie,
       descCategories descriptionCategorie, prix, u.idUtilisateur idUtilisateur, u.nom nomUtilisateur
       from objet
       join objet_proprietaire op on objet.idObjet = op.idObjet
       join utilisateur u on op.idUtilisateur = u.idUtilisateur
       join categories c on objet.idCategories = c.idCategories;
# ---- HISTORIQ ECHANGE
        create table historique_echange
        (
            idHistorique   int auto_increment primary key,
            idObjet1       int  references objet(idObjet),
            idObjet2       int  references objet(idObjet),
            idUtilisateur1 int  references utilisateur(idUtilisateur),
            idUtilisateur2 int  references utilisateur(idUtilisateur),
            etatEchange int ,
            dateEchange    date null
        );
        insert into  historique_echange values (null,1,2,2,1,0,'2023-02-08');
        insert into  historique_echange values (null,4,3,3,1,0,'2023-02-08');
        insert into  historique_echange values (null,9,6,2,1,0,'2023-02-08');

        insert into  historique_echange values (null,1,7,1,3,0,'2023-02-05');
        insert into  historique_echange values (null,3,8,1,2,0,'2023-02-05');

        insert into  historique_echange values (null,4,6,3,1,0,'2023-02-05');

Select * from historique_echange where etatEchange=1;
select idUtilisateur, nom, coalesce(count(idHistorique),0) nombreEchange
from utilisateur left outer join historique_echange he on utilisateur.idUtilisateur = he.idUtilisateur1
     or utilisateur.idUtilisateur = he.idUtilisateur2 group by idUtilisateur;
select * from utilisateur left outer join historique_echange he
    on utilisateur.idUtilisateur = he.idUtilisateur1 or utilisateur.idUtilisateur = he.idUtilisateur2