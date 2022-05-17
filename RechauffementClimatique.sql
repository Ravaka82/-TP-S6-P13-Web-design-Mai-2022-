drop database Climat;

CREATE DATABASE Climat;
USE Climat ;

CREATE TABLE Pays(
	idPays int not null primary key auto_increment,
	nomPays varchar(256) not null
);
CREATE TABLE Actualite(
	idActualite int not null primary key auto_increment,
	idPays int references Region(idRegion),
	titre varchar(356) not null,
	dateActualite Date ,
	image varchar(256) not null,
	descri varchar(456) not null,
	url varchar(256)not null
);
      
CREATE TABLE Contenu(
	idContenu int not null primary key auto_increment,
	idActualite int references Actualite(idActualite),
	descriContenu varchar(2000)not null,
	imageContenu varchar(200)not null
);
CREATE TABLE Admin(
    idAdmin int not null primary key auto_increment,
    login varchar(256)not null,
    mdp varchar(256)not null
);
insert into Admin values(null,'admin',sha1('123'));
    
insert into Pays values(null,'Australie');
insert into Pays values(null,'Arctique');
insert into Pays values(null,'France');
insert into Pays values(null,'Irak');

insert into Actualite values(null,1,'corail subi un  blanchissement','2022/05/12','4.webp','Les coraux blanchis de la Grande Barriere de corail restent vivants et peuvent se retablir si les conditions s ameliorent','corail-subi-un-blanchissement');
insert into Actualite values(null,2,'record vague de chaleur','2022/04/18','arctique.webp','En mars l Antarctique a connu une vague de chaleur record et des chutes de neige inhabituellement élevées a certains endroits','record-vague-de-chaleur');
insert into Actualite values(null,3,'secheresses plus frequentes','2022/05/12','france.webp','L hiver on a trop d eau l ete on n en a plus assez  Les agriculteurs francais face au dilemme de la gestion de l eau','secheresses-plus-frequentes');
insert into Actualite values(null,4,' agriculture  en crise ','2022/05/08','irak.webp','Des secheresses de plus en plus frequentes  des tempetes de sable plus nombreuses et le prix du carburant qui augmente','agriculture-en-crise');

insert into Contenu values(null,1,'En Australie environ 91 pourcent de la Grande Barriere de corail a
 subi un  blanchissement  en raison d une vague de chaleur prolongee lors de l ete austral 
 selon un nouveau rapport gouvernemental publie mardi soir  Sur les 719 recifs etudies 654
  soit 91 pourcent, presentent un certain niveau de blanchiment des coraux  C est la premiere fois que le plus
   grand recif corallien du monde est touche par un tel blanchissement au cours du phenomene climatique La Nina
    habituellement caracterise par une temperature anormalement basse des eaux
 Le changement climatique s intensifie et le recif en subit deje les consequences 
  met en garde le rapport de surveillance qui rappelle qu il s agit de la quatrieme vague de  blanchissement
   a frapper le recif depuis 2016 Entre septembre 2021 et mars 2022 l autorite maritime de la Grande Barriere de corail qui a publie cette 
   etude a procede a des releves exhaustifs sur ce recif inscrit sur la liste du patrimoine mondial de l Unesco','13.webp');


insert into Contenu values(null,2,'La base de recherche franco italienne de Concordia 
 installee sur le Dome C du plateau antarctique a 
 plus de 3000m d altitude a enregistre le 18 mars une temperature de  moin 11 virgule 5 degree Cette temperature 
 negative demeure une chaleur jamais enregistree jusque la nous precise Gaetan Heymes, meteorologue e Meteo France 
 cette valeur est plus de 30 degree superieure e ce qu on observe d habitude e la mi mars en Antarctique
 Meme pendant l ete austral entre decembre et janvier une telle temperature n a jamais ete enregistree 
 En effet ce record absolu est un ecart de pres de 40 degree pour la saison
 Au debut de l automne sur la base de Concordia on enregistre normalement des temperatures de 
 45 degree Il faut noter que cette vague de chaleur est liee a une riviere atmospherique et que ce phenomene est connu des scientifiques
 ce phenomene se caracterise par un apport massif de vapeur d eau dans l atmosphere et un tres net rechauffement des temperatures a son passage
 Ce changement atmospherique n est pas inedit mais son intensite est sans precedent','8.webp');

insert into Contenu values(null,3,'La menace d une secheresse plane sur la France Avant meme le debut de l ete, quinze departements sont deja
 soumis a des restrictions d eau Les agriculteurs assurent d ores et deja que la periode actuelle aura un impact sur les cultures
Decryptage.Chacun se refuse a ce stade a parler de catastrophe Mais tous les signes d une secheresse record sont la
 La FNSEA, syndicat agricole majoritaire, a dresse, mardi 10 mai, un constat alarmiste Aucune region n est epargnee
  Chaque jour qui passe, on voit des sols se craqueler  Hier, j etais chez un agriculteur du Puy-de-Dome, il arrose son ble Si cela continue comme ca , ceux qui ont la possibilite d irriguer vont s en sortir, les autres auront des baisses de
   rendement dramatiques, a prevenu Christiane Lambert, sa presidente a l AFP Depuis octobre-novembre, il y a d enormes secheresses au Portugal et en Espagne, qui remontent en Occitanie et en Provence et le long de la vallee du Rhone  Ce qui est inhabituel en cette saison, c est que la secheresse touche des regions au nord de la Loire, a-t-elle poursuivi ','11.webp');

insert into Contenu values(null,4,'Des secheresses de plus en plus frequentes, des tempetes de sable plus nombreuses, et le prix du carburant qui augmente a cause de la guerre en Ukraine  pour les agriculteurs en Irak, la situation est critique
Kamel Hamed a recolte cette annee moitie moins de ble que ce qu il avait pu produire l annee derniere
En ce moment, ma famille et moi ne savons pas comment continuer a vivre  Je n ai pas d emploi ni de salaire Ou puis-je aller ? l etat ne nous aide pas avec le probleme de l eau
 Nous avons une secheresse et nous ne pourrons probablement pas planter l annee prochaine Nous ne pourrons 
 rien planter l annee prochaine si les choses ne changent pas La guerre en Ukraine a fait grimper le prix des huiles pour moteur et des graines a haut rendement, explique Kamel 
Mais ce sont les 41 millions d Irakiens qui ressentent quotidiennement les consequences des penuries d eau et du rechauffement climatique 
desertification, tempetes de sable a repetition, chute des precipitations et baisse du niveau des fleuves
A Bagdad, on prevoit que la recolte au niveau national n atteindra pas trois millions de tonnes de ble cette annee
 Il faudra importer, reconnait le gouvernement','6.webp');


ALTER TABLE Pays CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Actualite CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Contenu CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;
ALTER TABLE Admin CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;