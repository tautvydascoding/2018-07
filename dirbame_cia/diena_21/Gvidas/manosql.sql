CREATE TABLE IF NOT EXISTS pranesimai (
	 id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
	 vardas VARCHAR(60) NOT NULL,
     tema VARCHAR(100) NOT null,
     email VARCHAR(150) NOT null,
	 pranesimas VARCHAR(500) NOT null
	 );


	 ALTER TABLE img ADD prekesid INT;

	 ALTER TABLE visosprekes DROP COLUMN prekesid;

UPDATE visosprekes SET price = 64.81 WHERE id = 2;


INSERT INTO visosprekes VALUES ('', 'preke-4.php', 'Alfawise X5 Mini PC', 78.34, 5, 4);
INSERT INTO img VALUES ('', 'preke4.jpg', 4, 4);

ALTER TABLE visosprekes MODIFY COLUMN price float;
