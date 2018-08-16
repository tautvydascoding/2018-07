show databases;

use hospital7;   -- !!! isisrenki duomenu Baze


 CREATE USER 'tautvydas7'@'localhost' IDENTIFIED BY 'tratata' ;
ALTER USER 'tautvydas7'@'localhost' PASSWORD EXPIRE NEVER;


GRANT ALL PRIVILEGES ON * . * TO 'tautvydas7'@'localhost' WITH GRANT OPTION;


 CREATE TABLE IF NOT EXISTS doctors (
      id INT      AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) not NULL,
      lname VARCHAR(30) NOT NULL
    );
 show tables; -- pasitikrinimui

INSERT INTO  doctors VALUES ( "", "Tim", "Logan" );
SELECT    id, name, lname    FROM doctors;  -- pasitikrinti
SELECT    *    FROM doctors;  -- pasitikrinti

INSERT INTO  doctors VALUES ( "", "Paul", "Leo" );
INSERT INTO  doctors VALUES ( "", "Ona", "Onutaite" );
INSERT INTO  doctors VALUES ( "", "Lita", "Nota" );
INSERT INTO  doctors VALUES ( "", "Koris", "Pita" );

INSERT INTO patients VALUES ( null, "Mark", "Jonas", 2);
INSERT INTO patients VALUES ( null, "Tom", "Karolis", 2);
INSERT INTO patients VALUES ( null, "Aris", "Tido", 1);
INSERT INTO patients VALUES ( null, "Tom", "Kiko", 3);
INSERT INTO patients VALUES ( null, "Co", "John", 1);
INSERT INTO patients VALUES ( null, "Tom", "Naro", 5);
INSERT INTO patients VALUES ( null, "Jili", "Jato", 4);

INSERT INTO img VALUES ( null, "4foto.jpg", 4);
INSERT INTO img VALUES ( null, "5foto.jpg", 1);
INSERT INTO img VALUES ( null, "6foto.jpg", 1);
SELECT    *    FROM doctors;  -- pasitikrinti


SELECT    img.id, doctors.name    FROM doctors, img;  -- pasitikrinti

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)

UPDATE doctors SET lname = 'Makalas'  WHERE  id=5;
UPDATE doctors SET `lname` = 'Makalas'  WHERE  id=5;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal ir pavarde)
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides 

--
UPDATE doctors SET lname = 'Paulaitis'  WHERE  name='Koris' AND lname = 'Makalas';

SELECT doctors.name  FROM doctors
UNION
SELECT  img.name FROM img;
