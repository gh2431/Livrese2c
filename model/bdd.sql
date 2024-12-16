/* connecter à mysql */
sudo mysql

/* quitter mysql */

exit
quit

/*commandes de base*/

show databases; /*liste de base des données sur le serveur*/
create database livres_e2c; /*créer une bdd*/
use livres_e2c /*utiliser une bdd*/

/*gestion de compte*/
create user 'livres_e2c_admin'@'localhost' identified by "F98_emM5--a";
grant all privileges on livres_e2c.* to 'livres_e2c_admin'@'localhost';

/*se connecter à mysql avec un compte utilisateur spécifique*/

mysql -h localhost -u livres_e2c_admin -p

/*créer une table*/
create table if not exists users (
    id smallint unsigned not null auto_increment primary key,
    pseudo varchar(50) not null,
    email varchar(255) not null unique,
    nom varchar(50) not null,
    prenom varchar(50) not null,
    telephone char(10),
    site varchar(30) not null
)ENGINE=InnoDB;

/* voir les tables et le détail des tables*/
show tables;
describe users;

/*ajouter une colonne*/
alter table users
add password varchar(30) not null;

/*ajouter des donnée*/
insert into users(prenom,nom,pseudo,password,email,telephone,site)
values ('gael','hely','gh','gh123456789','helygael16@gmail.com','0123456789','lille');

insert into users(prenom, nom, pseudo, password, email, site)
values ('sophie','carpentier','sc','lapnumcestcool','sc@e2c.fr','lille'),
       ('amando','ruiz','ar','vivementlephp','ar@e2c.fr','lille'),
       ('adrien','grandjean','neuromancer','williamg1bson','ag@e2c.fr','lille');

/*lire toute les données d'une table*/

select * from users;
select prenom, nom, email from users;
select prenom, nom, email from users order by prenom asc;
select prenom, nom, email from users order by prenom desc;
select pseudo, password from users where pseudo='Neuromancer';
select pseudo, password from users where pseudo='bisounours';
select prenom, nom, email, pseudo from users where site='lille';

/*gestion des site*/
create table if not exists sites(
    id tinyint unsigned not null auto_increment primary key,
    name varchar(20) not null
)engine=innodb;

insert into sites (name)
values('lille'),('roubaix'),('armentiere'), ('saint-omer');

select * from sites;

/*premiere relation*/

alter table users
add site_id tinyint unsigned not null;

update users set site_id=1;
select * from users;

alter table users
add constraint fk_sites
    foreign key (site_id)
    references sites(id);

update users set site_id = 1 where site="lille";
update users set site_id = 2 where site="roubaix";
update users set site_id = 3 where site="armentiere";
update users set site_id = 4 where site="saint-omer";

update users set site_id = 5;

alter table users 
drop site;

/*jointure*/

select users.pseudo, users.email, sites.name from users inner join sites on users.site_id = sites.id;

/*les livres*/

create table if not exists genre(
    id tinyint unsigned not null auto_increment primary key,
    name varchar(255) not null unique
)engine=innodb;

create table if not exists livres (
    id smallint unsigned not null auto_increment primary key,
    titre varchar(255) not null,
    auteur varchar(255) not null default "Inconnu",
    genre_id tinyint unsigned not null default 1,
    synopsis text,
    date_of_edition char(4) not null default '-nc-',
    pages smallint, 
    site_id tinyint unsigned not null,
    constraint fk_genre
        foreign key (genre_id)
        references genre(id),
    constraint fk_sites_book
        foreign key (site_id)
        references sites(id)
)engine=innodb;