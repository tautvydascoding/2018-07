-- sql komentaras
CREATE DATABASE hospital5;


-- pasitikrinimui:
show databases;
USE `hospital4`;   --!!!! isveda 'Database changed'
-- arba
USE hospital4;

-- kuriame seimos gydytoju lentele
CREATE TABLE doctors(
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(30),
        lname  VARCHAR(30)
);
-- pasitikrinimui
 show tables;

-- 'ALTER' stirta redaguot:
-- istrinti stulpeli, prideti papildoma, pakeisti stulpelio tipa
-- ! alter - neredaguoja duomenu (ji keicia tik lenteles, lenteles struktura)
--                         id     name   lname
INSERT INTO doctors VALUES ("", "Tim", "Logan");
INSERT INTO doctors VALUES ("", "Paul", "Leo");
INSERT INTO doctors VALUES ("", "Ona", "Onutaite");
INSERT INTO doctors VALUES ("", "Lite", "Rene");
INSERT INTO doctors VALUES ("", "Koris", "Pitas");
-- pasitikrinimas
 SELECT * FROM doctors;


 -- kuriame pacientu  lentele
 CREATE TABLE patients(
         id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
         name  VARCHAR(30),
         lname  VARCHAR(30),
         doctor_id  INT(6)
 );
INSERT INTO patients VALUES ("", "Mark", "John", 2);
INSERT INTO patients VALUES ("", "Tom", "karlos", 2 );
INSERT INTO patients VALUES ("", "Aris", "Tiedo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Kori", 3 );
INSERT INTO patients VALUES ("", "Co", "Jo", 1 );
INSERT INTO patients VALUES ("", "Tom", "Naro", 5 );
INSERT INTO patients VALUES ("", "Jili", "Joli", 4 );
 --pasitikrinimnas
 SELECT id, name, lname, doctor_id FROM patients;


  -- salygos:
   -- WHERE id=2;
   -- WHERE name='Co';
   -- WHERE name='Tom' AND lname = 'Kori';

SELECT * FROM doctors, patients  WHERE id = 2;
-- WHERE  CustomerID !=  10;
-- WHERE  NOT CustomerID =  10;

-- UZDUOTIS
-- pakeisti gydytojo 'paul' varda i 'paulius
--       lentele   stulp  nauja-reiksme       salyga
UPDATE doctors SET name="Paulius"           WHERE id=2 ;
 -- WHERE id=2 OR name="paul" OR lname="Leo";

-- kuriame paveikliuku  lentele
CREATE TABLE img (
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(100),
        patient_id  INT(6)
);
INSERT INTO img VALUES ("", "foto.jpg",  3 );
INSERT INTO img VALUES ("", "3.jpg",  1 );
INSERT INTO img VALUES ("", "1.jpg",  1 );
INSERT INTO img VALUES ("", "3.jpg",  3 );



--  iskome 3-cios nuotraukos savininko
SELECT patients.name, patients.lname
FROM patients
INNER JOIN img ON patients.id = img.patient_id
WHERE img.id = 3;



-- // uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors WHERE name="Koris";

-- // uzduotis 2: Pakeisti "Co" varda i "Karolis"
SELECT * FROM patients;
UPDATE patients SET name = "Karolis" WHERE id= 5;
SELECT * FROM patients;

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
SELECT * FROM patients;
UPDATE patients SET name = "Tomas" WHERE name='Tom';
SELECT * FROM patients;

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  doctor_id pakeisti i "4"
SELECT * FROM patients;
UPDATE patients SET doctor_id = 4 WHERE name LIKE 'T%';
SELECT * FROM patients;

-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT doctors.lname
FROM doctors, patients
WHERE    patients.doctor_id = doctors.id AND patients.name = 'Mark';

-- ARBA

SELECT doctors.lname
FROM doctors
WHERE  doctors.id IN (SELECT doctor_id FROM patients WHERE  name = 'Mark');


 --
