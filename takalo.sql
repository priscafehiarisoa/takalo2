--DATABASE
        create database takalo;
        use takalo;
----UTILISATEUR
            create table utilisateur (
                idUtilisateur INTEGER(50) PRIMARY KEY auto_increment,
                nom VARCHAR (10)  DEFAULT 'koto',
                email VARCHAR (50)  DEFAULT 'koto@gmail.com',
                mdp VARCHAR (7)NOT NULL,
                type INTEGER(2)
            );
            insert into utilisateur values (null,'ranto','ranto@gmail.com','11111',1);

----CATEGORIES
        create table categories (
            idCategories INTEGER(50) PRIMARY KEY auto_increment,
            descCategories VARCHAR (50) NOT NULL
        );
        insert into categories values (null,'meubles');
        insert into categories values (null,'ustensiles');
        insert into categories values (null,'tissus');
----OBJET
        create table objet (
            idObjet INTEGER(50) PRIMARY KEY auto_increment,
            idCategories INTEGER(50) references categories (idCategories),
            objet VARCHAR (50) NOT NULL,
            prix decimal(7,2)
        );
        insert into objet values (null,1,'canape',2000);
        insert into objet values (null,1,'pouf',1000);
        insert into objet values (null,2,'table',6000);
        insert into objet values (null,2,'armoire',7500);

        insert into objet values (null,2,'louche',6000);
        insert into objet values (null,2,'marmite',1200);

        insert into objet values (null,2,'rideau',3000);
        insert into objet values (null,2,'robe',500);
        insert into objet values (null,2,'nappe de table',1300);
----IMAGES
        create table Images (
            idImage INTEGER(50) PRIMARY KEY auto_increment,
            idObjet INTEGER(50) references categories (idCategories),
            nomImage VARCHAR (50) NOT NULL
        );
        insert into Images values (null,1,'1.jpg');
        insert into Images values (null,1,);

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

----OBJET_PROPRIETAIRE
       create table objet_proprietaire (
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
--VUES
       select op.idObjet idObjet, c.idCategories idCategorie,
       descCategories descriptionCategorie, prix, u.idUtilisateur idUtilisateur, u.nom nomUtilisateur
       from objet
       join objet_proprietaire op on objet.idObjet = op.idObjet
       join utilisateur u on op.idUtilisateur = u.idUtilisateur
       join categories c on objet.idCategories = c.idCategories;

