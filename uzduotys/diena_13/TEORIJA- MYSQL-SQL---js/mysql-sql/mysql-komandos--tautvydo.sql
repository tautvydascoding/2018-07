mysql>

show databases;
use duomenuBazesPavadinimas; -- !!! nurodai su kuria DB nuo siol dirbsi !!!
show tables;  -- parodo visas DB lenteles

-- '*' yra stulpeliu pavadinimai
-- 'user' yra lenteles pavadinimas
SELECT * FROM user;    -- issirenki duomenis, kuriuos nori surasti DB-je
SELECT USER, PASSWORD, password_expired FROM user;

 CREATE USER 'tautvydas10'@'localhost' IDENTIFIED BY 'tratata'  PASSWORD EXPIRE NEVER;  
 // tratata - spaltazodis

" "
' '
` ` - tables, db pavadinimams
 word kabute - !!!! neveikia



 GRANT ALL PRIVILEGES ON * . * TO 'tautvydas10'@'localhost' WITH GRANT OPTION;


 // username - pas kai kuriuos negali tureti skaiciu!!!
 CREATE USER 'tautvydasDelete'@'localhost' IDENTIFIED BY 'tratata'    PASSWORD EXPIRE NEVER;  
GRANT ALL PRIVILEGES ON * . * TO 'tautvydasDelete'@'localhost' WITH GRANT OPTION;

 CREATE DATABASE  `hospital4`;

 CREATE DATABASE IF NOT EXISTS `ligonine4` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;





USER     IF NOT EXISTS
 CREATE DATABASE IF NOT EXISTS  `hospital6` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
		TABLE    IF NOT EXISTS



// ====== naudingos kitos:
// reset autoincreament :
ALTER TABLE tablename AUTO_INCREMENT = 1;   // A) budas
DBCC CHECKIDENT (mytable, RESEED, 0);       // B) budas

//===========pvz============
use duomenuBazesPavadinimas;   // pasikeisti DB  pries kuriant lenteles

 CREATE TABLE IF NOT EXISTS doctors (
      id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(30) not NULL,
      lname VARCHAR(30) NOT NULL
	  );


CREATE TABLE IF NOT EXISTS patients (
     id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL,
     doctor_id INT(6) NOT NULL
     );

CREATE TABLE IF NOT EXISTS img (
	 id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(60) not NULL,
	 doctor_id INT(6) NOT NULL
	 );



// -------SQL komandos----------------------
` - geros kabutes
' - geros kabutes
‘  - blogos kabutes


SELECT column1, column2, ...
	FROM table_name
	WHERE condition1 AND condition2 AND condition3 ...;
	WHERE condition1 OR condition2 OR condition3 ...;
	WHERE NOT condition;
	WHERE CustomerName LIKE 'a%'; 				 // PRASIDEDA "a" zodis
	ORDER BY column1, column2, ... ASC|DESC;     // rikiavimas
	ORDER BY Country ASC, CustomerName DESC;

INSERT INTO table_name
	VALUES (value1, value2, value3, ...);

INSERT INTO Customers (CustomerName, City, Country)
	VALUES ('Cardinal', 'Stavanger', 'Norway');


DELETE FROM table_name
	WHERE condition;

UPDATE table_name
	SET column1 = value1, column2 = value2, ...
	WHERE condition;


 SELECT TOP 3 * FROM Customers;
 // BEVEIK TAS PATS
 SELECT * FROM Customers LIMIT 3;


// rikiuoti pagal kaina
SELECT MIN(column_name)
	FROM table_name
	WHERE condition;

SELECT MIN(Price) AS SmallestPrice
	FROM Products;

SELECT AVG(column_name)
	FROM table_name
	WHERE condition;

SELECT * FROM Customers
	WHERE City LIKE 'ber%';
	WHERE Country IN ('Germany', 'France', 'UK');
	WHERE Country NOT IN ('Germany', 'France', 'UK');
	WHERE Country IN (SELECT Country FROM Suppliers);

SELECT * FROM Products
	WHERE Price BETWEEN 10 AND 20;

SELECT Orders.OrderID, Customers.CustomerName
	FROM Orders
	INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;














//-------------DOCTORS----------
INSERT INTO doctors  VALUES  ('', 'Tom', 'Opsa');
INSERT INTO doctors  VALUES  ('', 'Paul', 'Tor');
INSERT INTO doctors  VALUES  ('', 'Jo', 'Oto');
INSERT INTO doctors  VALUES  ('', 'Lili', 'Lekso');
INSERT INTO doctors  VALUES  ('', 'Timy', 'So');
//-------------patients---------------
	INSERT INTO patients  VALUES  ('', 'Ari', 'Amon', '3');
	INSERT INTO patients  VALUES  ('', 'Tim', 'Taros', '2');
	INSERT INTO patients  VALUES  ('', 'Ana', 'Tomson', '2');
	INSERT INTO patients  VALUES  ('', 'Tom', 'Alis', '3');
	INSERT INTO patients  VALUES  ('', 'Karis', 'Katis', '1');
	INSERT INTO patients  VALUES  ('', 'Jo', 'Oporas', '5');
//-------------IMG---------------
INSERT INTO img  VALUES  ('', 'pic-46.jpg', '5');
INSERT INTO img  VALUES  ('', 'pic-46.PNG', '1');
INSERT INTO img  VALUES  ('', 'pic-456.jpg', '3');
INSERT INTO img  VALUES  ('', 'pic-4234234.GIF', '2');
INSERT INTO img  VALUES  ('', 'pic-4622.GIF', '4');

// uzduotis 1: istrinti gydytoja "Sara"
// uzduotis 2 : Pakeisti "Timo" varda i "Tomas"
// uzduotis 3 : visu pacientu, kurius vardas prasideda "T" -  daktarus pakeisti i "6"
// uzduotis 4: gauti paciento "Tomo" daktaro pavarde




























































//=====Ats.:=======
3) sprendimas
UPDATE patients
  SET doctor_id = 6
  WHERE name like 'T%';















4) sprendimas
SELECT doctors.lname     	// ko ieskome ir ka grazins
	FROM patients, doctors  // su kokiomis lentelemis dirbsime
	WHERE patients.name = 'Tom' AND patients.doctor_id = doctors.id;

// OR

SELECT doctors.lname      // ko ieskome ir ka grazins
	FROM doctors          // pagal kurios lenteles duomenis
	INNER JOIN patients ON patients.doctor_id = doctors.id
	WHERE patients.name = 'Tom';     /// AND patients.password = $pass;



SELECT doctors.lname
	FROM patients, doctors
	WHERE patients.name = 'Tom' AND patients.doctor_id = doctors.id;
// OR
SELECT doctors.lname
	FROM doctors
	INNER JOIN patients ON patients.doctor_id = doctors.id
	WHERE patients.name = 'Tom';
