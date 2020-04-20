drop database if exists LB_m151;
create database LB_m151;
use LB_m151;

drop user if exists "DB151_admin"@"localhost";
create USER "DB151_admin"@"localhost" identified by "root";
GRANT ALL PRIVILEGES ON LB_m151.* TO 'DB151_admin'@'localhost';

create table Kunde(
  kunde_id int not null auto_increment,
  name varchar(50),
  nachname varchar(50),
  strasse varchar(50),
  plz varchar(50),
  ort varchar(50),
  telefon varchar(50),
  bemerkung varchar(50),
  kundeSeit varchar(50),
  primary key(`kunde_id`)
);

create table Bestellung(
  bestell_id int not null auto_increment,
  kunde_id int not null,
  datum varchar(100),
  bemerkung varchar(200),
  primary key (`bestell_id`),
  foreign key (kunde_id) references kunde(kunde_id)
);

create table Artikel(
  artikel_id int not null auto_increment,
  bezeichnung varchar(100),
  preis float,
  primary key (`artikel_id`)
);

create table Inhalt(
  inhalt_id int not null auto_increment,
  name varchar(100),
  preis int,
  primary key (`inhalt_id`)
);

create table BestellPosition(
  bestellPos_id int not null auto_increment,
  bestell_id int not null,
  artikel_id int not null,
  primary key (`bestellPos_id`),
  foreign key (bestell_id) references Bestellung(bestell_id),
  foreign key (artikel_id) references Artikel(artikel_id)
);

create table BestellKonfiguration(
  bestellPos_id int not null,
  inhalt_id int not null,
  foreign key (bestellPos_id) references BestellPosition(bestellPos_id),
  foreign key (inhalt_id) references Inhalt(inhalt_id)
);

create table Konfiguration(
  artikel_id int not null,
  inhalt_id int not null,
  foreign key (artikel_id) references Artikel(artikel_id),
  foreign key (inhalt_id) references Inhalt(inhalt_id)
);

INSERT INTO Artikel(bezeichnung, preis) VALUES("Schere", 5);
INSERT INTO Artikel(bezeichnung, preis) VALUES("Bleistift", 5);
INSERT INTO Artikel(bezeichnung, preis) VALUES("Feder", 5);
INSERT INTO Artikel(bezeichnung, preis) VALUES("Lineal", 5);
INSERT INTO Artikel(bezeichnung, preis) VALUES("Marker", 5);
INSERT INTO Artikel(bezeichnung, preis) VALUES("Radiergummi", 5);
INSERT INTO Artikel(bezeichnung, preis) VALUES("Spitzer", 5);
INSERT INTO Artikel(bezeichnung, preis) VALUES("Zirkel", 5);

INSERT INTO Kunde(name, nachname, strasse, plz, ort, telefon, bemerkung, kundeSeit)
VALUES("Test1", "TestNachname", "TestStrasse1", "9000", "TestStrasse1", "043 300 30 20", "Keine", "28-09-12");

INSERT INTO Kunde(name, nachname, strasse, plz, ort, telefon, bemerkung, kundeSeit)
VALUES("Test2", "TestNachname", "TestStrasse2", "9000", "TestStrasse2", "043 300 30 20", "Keine", "28-10-12");

INSERT INTO Kunde(name, nachname, strasse, plz, ort, telefon, bemerkung, kundeSeit)
VALUES("Test3", "TestNachname", "TestStrasse3", "9000", "TestStrasse3", "043 300 30 20", "Keine", "28-11-12");

INSERT INTO Kunde(name, nachname, strasse, plz, ort, telefon, bemerkung, kundeSeit)
VALUES("Test4", "TestNachname", "TestStrasse4", "9000", "TestStrasse4", "043 300 30 20", "Keine", "28-05-12");
