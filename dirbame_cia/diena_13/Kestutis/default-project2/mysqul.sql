show databases;

use hospital17;  --isirenku duomenu baze

CREATE USER 'kestutis'@'localhost' INDENTIFIED BY 'kestutispasword' PASSWORD EXPIRE NEVER;
// 'kestutispasword' - spaltazodis
CREATE DATABASE  `liginine100`;

CREATE TABLE IF NOT EXISTS doctors (
      id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) not NULL,
      lname VARCHAR(30) NOT NULL
	  );

    INSERT INTO doctors
    	VALUES ('', "Tim", "Logan");

      INSERT INTO doctors
      	VALUES ('', "Naujokas", "Naujokauskas");

        INSERT INTO doctors
          VALUES ('', "Antanas", "Radvila");

          INSERT INTO doctors
            VALUES ('', "Grafas", "Radvila");

            INSERT INTO doctors
              VALUES ('', "Grafas", "Sapiega");


    CREATE TABLE IF NOT EXISTS patients (
         id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
         name VARCHAR(30) not NULL,
         lname VARCHAR(30) NOT NULL,
         doctor_id INT NOT NULL
         );

         CREATE TABLE IF NOT EXISTS img (
        	 id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
        	 name VARCHAR(60) not NULL,
        	 doctor_id INT NOT NULL
        	 );

           INSERT INTO img
            VALUES('', "nuotraukospavadinimas1", 1);

            INSERT INTO img
             VALUES('', "nuotraukos pavadinimas2", 1);

             INSERT INTO img
              VALUES('', "nuotraukos pavadinimas3", 2);

              INSERT INTO img
               VALUES('', "nuotraukos pavadinimas4.jpg", 2);

               INSERT INTO img
                VALUES('', "nuotraukos pavadinimas5.png", 1);

                INSERT INTO patients
                  VALUES('', "Grafas", "Sapiega" 1);

                  SELECT AVG(column_name)
	FROM table_name
	WHERE condition;

  SELECT * FROM doctors;

  SELECT name, lname
  FROM doctors
  WHERE name LIKE 'L%' OR  lname LIKE 'L%';

  SELECT doctors.name, img.id
FROM doctors, img;

SELECT name, lname
FROM doctors
WHERE id=5 or id=4;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors
WHERE name = 'Tim' or lname = 'Leo';

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors
WHERE id < 4;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors
WHERE name <> 'Ona';

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT name FROM patients ORDERED BY;

SELECT * FROM patients
ORDER BY name;

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors
SET name = 'Litas'
WHERE doctors id = 3;

UPDATE doctors
SET name='Litas'
WHERE name='Naujokas';

SELECT * FROM doctors;

-- uzduotis 1: istrinti gydytoja "Koris"
-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
UPDATE patients
SET name = 'Karolis'
WHERE name = 'Mark';

--// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

 --uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"

 UPDATE patients
 SET id = '4'
 WHERE name LIKE 'T%';

 UPDATE patients
SET id = 4
WHERE  name LIKE 'T%';
