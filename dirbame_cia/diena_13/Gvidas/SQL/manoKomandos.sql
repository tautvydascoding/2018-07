show databases;

use hospital7; --!!! isirenki duomenu baze
-- sukuria vartotoja
CREATE USER 'gvidas'@'localhost' IDENTIFIED BY 'gvidas2001'  PASSWORD EXPIRE NEVER;

-- suteikia visas privilegijas (SUPER vartotojas)
GRANT ALL PRIVILEGES ON * . * TO 'gvidas'@'localhost' WITH GRANT OPTION;

-- sukurti lentele
CREATE TABLE IF NOT EXISTS patients (
     id INT    AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL,
     doctor_id INT
     );

-- irasyti reiksmes i lenete
INSERT INTO doctors VALUES ('', 'Koris', 'Pita');
INSERT INTO patients VALUES ('', 'Jili', 'Jato', 4);
INSERT INTO img VALUES ('', '0.jpg', 4);

-- sukurti lentele
CREATE TABLE IF NOT EXISTS img (
	 id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(60) not NULL,
	 patiens_id INT(6) NOT NULL
	 );

-- pakeisti pagal ID
UPDATE doctors SET lname = 'Makalas' WHERE id = 5;
-- pakeisti pagal varda IR pavarde
UPDATE doctors SET lname = 'Paulaitis' WHERE name = 'Koris' AND lname = 'Makalas';

-- Suranda visus gydytojus kuriu pavarde prasideda "L" raide
SELECT * FROM doctors WHERE lname LIKE 'l%';

-- is dvieju leneteliu paiimti duomenis
SELECT doctors.name FROM doctors
UNION
SELECT img.id FROM img;

-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja

SELECT * FROM doctors WHERE id=4 OR id=5;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

SELECT * FROM doctors WHERE name = 'Tim' OR lname = 'Leo';

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4

SELECT * FROM doctors WHERE id < 4;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'

SELECT * FROM doctors WHERE name <> 'ona';

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda

SELECT * FROM patients ORDER BY name ASC;

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'

UPDATE doctors SET name = 'Litas' WHERE id = 4;

-- ----------------------------------------------------------------------------------

-- // uzduotis 1: istrinti gydytoja "Koris"

DELETE FROM doctors WHERE name = 'koris';

-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"

UPDATE patients SET name = 'Karolis' WHERE name = 'Co';

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

UPDATE patients SET name = 'Tomas' WHERE name = 'Tom';

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"

UPDATE patients SET doctor_id = 4 WHERE name LIKE 'T%';

-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde

SELECT doctors.lname FROM patients INNER JOIN doctors ON patients.doctor_id = doctors.id WHERE patients.name = 'Mark';

SELECT doctors.lname AS daktaras FROM (SELECT patients.doctor_id, doctors.id FROM patients, doctors WHERE patients.doctor_id = doctors.id) WHERE patients.name = 'Mark'; -- NEVEIKIA
