-- veiksmai pasileidus mysqul.

--1 
show databases;

--2
use hospital7 -- issirenki duomenu baze!!!!!
-- SUKURIAM NAUJA USERI
 --3
 CREATE USER 'marbonas'@'localhost' IDENTIFIED BY 'SmikisMq99'; PASSWORD EXPIRE NEVER; -- gali ir neveikti


--4
 GRANT ALL PRIVILEGES ON * . * TO 'marbonas'@'localhost' WITH GRANT OPTION;







-- SUSIKURTI TABLE
-- susikuriam doctors table
  CREATE TABLE IF NOT EXISTS doctors (
      id INT AUTO_INCREMENT PRIMARY KEY, -- cia kolum1
      name VARCHAR(30) not NULL,-- cia kolum2
      lname VARCHAR(30) NOT NULL-- cia kolum3
	  );


    -- susikuriame patients table
  CREATE TABLE IF NOT EXISTS patients (
      id INT AUTO_INCREMENT PRIMARY KEY,-- cia kolum 1
      name VARCHAR(30) not NULL,-- cia kolum 2
      lname VARCHAR(30) NOT NULL,-- cia kolum 3
      doctor_id INT-- cia kolum 4
	  );

    -- PASITIKRINIMUI
    show tables;

    -- DUOMENU IDEJIMAS
-- jei tuscias id, ar kitas skaicius, kur bus AUTO_INCREMENT - nurodyti tai null, o ne tuscia stringa.

-- idedame info i doctors lentele
                             -- 1 col,  2 col,   3 columas;   
    INSERT INTO doctors VALUES (null, "Timas","Loganas");
    INSERT INTO doctors VALUES ( null,"Paul","Leo");
    INSERT INTO doctors VALUES ( null,"Ona","Onute");
    INSERT INTO doctors VALUES ( null,"Lita","Nota");
    INSERT INTO doctors VALUES ( null,"Koris","Pita");
-- idedame info i patients lentele !! mes errora, jei desime i lentele maziau info, nei buvo sukurta colum
    INSERT INTO patients VALUES (null, "Mark","John", 2);
    INSERT INTO patients VALUES ( null,"Tom","Karlos", 2);
    INSERT INTO patients VALUES ( null,"Aris","Tido", 1);
    INSERT INTO patients VALUES ( null,"Tom","Kiko", 3);
    INSERT INTO patients VALUES ( null,"Co","John", 1);
    INSERT INTO patients VALUES ( null,"Tom","Naro", 5);
    INSERT INTO patients VALUES ( null,"Jili","Jato", 4);

-- sukuriame img lentele
CREATE TABLE IF NOT EXISTS img (
  id INT AUTO_INCREMENT primary key, -- cia kolum
  name VARCHAR(30) not null,
  patient_id INT
);

INSERT INTO img VALUES (null, "fot.jpg",3);
INSERT INTO img VALUES (null, "3.jpg", 1);
INSERT INTO img VALUES (null, "1.jpg", 1);
INSERT INTO img VALUES ( null, "3.gif", 2);
INSERT INTO img VALUES (null, "0.png", 4);