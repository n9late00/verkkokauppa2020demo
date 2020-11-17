drop DATABASE if EXISTS verkkokauppa;
create DATABASE verkkokauppa;
use verkkokauppa;

create TABLE tuoteryhma (
    id int PRIMARY KEY auto_increment,
    nimi VARCHAR(50) unique NOT NULL
);

insert INTO tuoteryhma (id, nimi) values (1, 'Asusteet');
insert INTO tuoteryhma (id, nimi) values (2, 'Kengät');
insert INTO tuoteryhma (id, nimi) values (3, 'Urheiluvälineet');
insert INTO tuoteryhma (id, nimi) values (4, 'Pyörät');
insert INTO tuoteryhma (id, nimi) values (5, 'Kellot');

CREATE TABLE tuote (
    id int PRIMARY KEY auto_increment,
    nimi VARCHAR(100) NOT NULL,
    kuvaus text NOT NULL,
    hinta DOUBLE(6,2) NOT NULL,
    kuva VARCHAR(50),
    varastomaara SMALLINT unsigned,
    tuoteryhma_id int NOT NULL,
    INDEX tuoteryhma_id (tuoteryhma_id),
    FOREIGN KEY (tuoteryhma_id) REFERENCES tuoteryhma(id)
    ON DELETE RESTRICT
);

INSERT INTO tuote (nimi, kuvaus, hinta, kuva, varastomaara, tuoteryhma_id)
VALUES ('The North Face','Halo Down Hoodie, miesten untuvatakki',70,'takki.png',10,1);

INSERT INTO tuote (nimi, kuvaus, hinta, kuva, varastomaara, tuoteryhma_id)
VALUES ('Haglöfs','Vision II GTX, miesten retkeilykengät',60,'kengät.png',10,2);

INSERT INTO tuote (nimi, kuvaus, hinta, kuva, varastomaara, tuoteryhma_id)
VALUES ('Bauer','Aikuisten luistimet',25,'luistimet.png',20,3);

INSERT INTO tuote (nimi, kuvaus, hinta, kuva, varastomaara, tuoteryhma_id)
VALUES ('Ghost','Kato 2,9 19 unisex maastopyörä',399,'pyora.png',5,4);

INSERT INTO tuote (nimi, kuvaus, hinta, kuva, varastomaara, tuoteryhma_id)
VALUES ('White','XC 290 Pro 19, unisex maastopyörä',849,'pyora2.png',10,4);

INSERT INTO tuote (nimi, kuvaus, hinta, kuva, varastomaara, tuoteryhma_id)
VALUES ('Suunto','Suunto 5, urheilukello sykemittarilla',249,'kello.png',35,5);