DROP DATABASE IF EXISTS ftgi;
CREATE DATABASE IF NOT EXISTS ftgi;
USE ftgi;

CREATE TABLE produse(produsId SMALLINT NOT NULL AUTO_INCREMENT,denumire VARCHAR(25) NOT NULL,pret INT NOT NULL,PRIMARY KEY(produsId));

CREATE TABLE contact(contactCrt INT NOT NULL AUTO_INCREMENT,strada VARCHAR(40) NOT NULL,numar INT NOT NULL,oras VARCHAR(24) NOT NULL,nrTelefon INT(12) NOT NULL, PRIMARY KEY(contactCrt));

INSERT INTO contact(strada,numar,oras,nrTelefon) VALUES('Rozelor',67,'Craiova',0737669949);
INSERT INTO contact(strada,numar,oras,nrTelefon) VALUES('Nicolae Panait',57,'Craiova',00);

