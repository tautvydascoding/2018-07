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


-- PAKEITIMAS
-- nurodoma kad update,ka keisime ir i ka, ir   kur keisim(cia id)
           UPDATE doctors SET lname = "Makalas" WHERE id = 5;

-- pakeitimas su  conditionu be id. kad ieskotu tokio vardo ir pavardes.
UPDATE doctors SET lname = "Makalauskas" WHERE name = "Koris" and lname  = "Makalas";

-- pajamti visus daktarus, kuriu pavarde prasideda is l raides

select * from doctors where lname like "L%";

-- pajamti visus duomenis is name daugiau nei vienos lenteles ;
-- UNION paima ir sujungia duomenis i viena lentele.
select doctors.name from doctors
union
select img.name from img;


-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja

select * from doctors where id = 5 or id = 4;


-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

select * from doctors where name = "Timas" or lname = "Leo";

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4

select * from doctors where id <4;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'

select * from doctors where not name = "Ona";

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda

select * from doctors order by name ASC;

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'

update doctors set name = "Litas" where name = "Lita";

--// uzduotis 1: istrinti gydytoja "Koris"
delete from doctors where id = 5;

--// uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"

update patients set name = "Karolis" where name = "Co";
--// uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

update patients set name = "Tomas" where name = "tom";

--// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"

update patients set doctor_id = 4 where name like "T%";

--// uzduotis 4: gauti paciento "Mark" daktaro pavarde

select patients.name, doctors.lname
from patients
inner join doctors 
on doctors.id = patients.doctor_id 
where patients.name = 'Mark';






