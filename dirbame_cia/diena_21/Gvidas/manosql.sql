CREATE TABLE IF NOT EXISTS parametrai (
	 id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 parametrai VARCHAR(60) NOT NULL,
     Duomenys VARCHAR(100) NOT null,
     prekesid INT NOT NULL,
     pozicija INT NOT NULL
	 );


	 ALTER TABLE img ADD prekesid INT;

	 ALTER TABLE visosprekes DROP COLUMN prekesid;

UPDATE visosprekes SET price = 64.81 WHERE id = 2;


INSERT INTO parametrai VALUES ('', 'wifi', 'Integruotas', 2, 0);
INSERT INTO img VALUES ('', 'preke4.jpg', 4, 4);

ALTER TABLE visosprekes MODIFY COLUMN price float;
