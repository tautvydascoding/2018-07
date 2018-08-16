show databases;

use hospital7; --!!! isirenki duomenu baze

CREATE USER 'gvidas'@'localhost' IDENTIFIED BY 'gvidas2001'  PASSWORD EXPIRE NEVER;

GRANT ALL PRIVILEGES ON * . * TO 'gvidas'@'localhost' WITH GRANT OPTION;

CREATE TABLE IF NOT EXISTS patients (
     id INT    AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL,
     doctor_id INT
     );

INSERT INTO doctors VALUES ('', 'Koris', 'Pita');
INSERT INTO patients VALUES ('', 'Jili', 'Jato', 4);
INSERT INTO img VALUES ('', '0.jpg', 4);

CREATE TABLE IF NOT EXISTS img (
	 id INT(6) UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 name VARCHAR(60) not NULL,
	 patiens_id INT(6) NOT NULL
	 );
