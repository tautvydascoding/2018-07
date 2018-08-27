--/Applications/MAMP/Library/bin/mysql --host=localhost -umarbonas -pSmikisMq99


-- SUSIKURTI TABLE
-- susikuriam galerijos IMG lentele
CREATE TABLE
IF NOT EXISTS galleryIMG
(
      id INT AUTO_INCREMENT PRIMARY KEY, -- cia kolum1
      name VARCHAR
(30) not NULL-- cia kolum2
      
	  );

-- insertinam informacija i galerijos lentele
INSERT INTO galleryIMG
VALUES
      (null, "undoB.jpg");
INSERT INTO galleryIMG
VALUES
      (null, "ag4.jpeg");
INSERT INTO galleryIMG
VALUES
      (null, "ag5.jpeg");
INSERT INTO galleryIMG
VALUES
      ( null, "ag6.jpg");
INSERT INTO galleryIMG
VALUES
      (null, "ag8.jpeg");
INSERT INTO galleryIMG
VALUES
      (null, "ag9.jpeg");
INSERT INTO galleryIMG
VALUES
      (null, "ag10.jpeg");
INSERT INTO galleryIMG
VALUES
      (null, "sen.jpeg");
INSERT INTO galleryIMG
VALUES
      (null, "undoBlue.jpg");

-- susikuriam lentele caruselIMG
CREATE TABLE
IF NOT EXISTS caruselIMG
(
      id INT AUTO_INCREMENT PRIMARY KEY, -- cia kolum1
      name VARCHAR
(30) not NULL,-- cia kolum2
      article CHARACTER
(200) not NULL
      
	  );


--insertinam i caruselIMG



INSERT INTO caruselIMG
VALUES
      (null, "1.jpg", "Amazonės upė. Vingiuojanti ir maistu aprūpinanti daug gančių. 2015 m. Kovo 12d. Pietu amerika.");
INSERT INTO caruselIMG
VALUES
      (null, "2.jpeg", "Kopimas į kalnus, 2016 m. Vasario 15d. Alpės, Šiaurės Karolina, JAV");
INSERT INTO caruselIMG
VALUES
      (null, "3.jpeg", "Draugystė Kvailystė :) Kauno Tauro kalnas, 2014 m. Birželio 11 d.");
INSERT INTO caruselIMG
VALUES
      ( null, "4.jpg", "Heloweeeenas prezidentūroje 2014 m. Birželio 11 d.");
INSERT INTO caruselIMG
VALUES
      (null, "5.jpeg", " Skrydis į BALIO sala, 2014 m. Birželio 11 d.");
INSERT INTO caruselIMG
VALUES
      (null, "6.jpeg", "Longboardinimas mūsų kraujyje");
INSERT INTO caruselIMG
VALUES
      (null, "7.jpeg", " Mūsų kolega Jonas(pirmas)" );
INSERT INTO caruselIMG
VALUES
      (null, "8.jpeg", " Vėl Jonas, su kolega Tomu");
INSERT INTO caruselIMG
VALUES
      (null, "9.jpg", "Ilgai užtarnautas poilsis, Kreta, 2018 m. Rugpjūčio 28 d.");


-- susikuriam lentele aboutUsText
CREATE TABLE
IF NOT EXISTS aboutUsText
(
      id INT AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR
(30) not NULL,
      article TEXT
(400) not NULL
      
	  );

--INSERTINAM

INSERT INTO aboutUsText
VALUES
      (null, "Our TEAM!!", "Mūsų komanda yra nuostabi, šauni ir tiesiog nepakartojama! Mes nuolat viska darome kartu ");
INSERT INTO aboutUsText
VALUES
      (null, "For best experiance!", "Va šitoje vietoje turėtų būti kažkoks labai inspiring tekstas apie mūsų komanda.");
INSERT INTO aboutUsText
VALUES
      (null, "Never stop believing!", "Mūsų komandoje yrta vien genijai! Ne nu rimtai.. ");

--- nauja lentele HQ

CREATE TABLE
IF NOT EXISTS HQ
(
      id INT AUTO_INCREMENT PRIMARY KEY,
      city VARCHAR
(30) not NULL,
      address CHARACTER
(200) not NULL,
      phone_nr INTEGER
(30) not NULL,
      email VARCHAR
(30) not NULL
	  );


--insertinam

INSERT INTO HQ
VALUES
      (null, "Kaunas", "1430 Grozio gatve, apartamentai 200,LT-3344 ", 863311899, "info@undostudija.lt");
INSERT INTO HQ
VALUES
      (null, "London", "1430 Long street, apartments 12,11223", 40338633, "talk@undo.co.uk");
INSERT INTO HQ
VALUES
      (null, "Torronto", "1430 Short street, Hottel 11,11222233", 50338633, "talkUSA@undo.com");
INSERT INTO HQ
VALUES
      (null, "Beijing", "112 hépínglù, Apartments 1122, ", 1222145555, "beijing@undostudija.ch");

