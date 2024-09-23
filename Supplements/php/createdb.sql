CREATE DATABASE customers;

USE php;

CREATE TABLE members
   (
       firstName VARCHAR(30),
       lastName VARCHAR(30),
       email VARCHAR(30),
       password VARCHAR(30),
       phoneNumber INT,
       member VARCHAR(10),
       cid INT,
       CONSTRAINT member_email PRIMARY KEY(email)
   );

INSERT INTO members VALUES('abbass','awada','abbass@awada',1234,'1111111','no','1');
INSERT INTO members VALUES('abbass','nouraldeen','abbass@nouraldeen',1122,'3333333','no','3');
INSERT INTO members VALUES('adam','moallem','adam@moallem',3344,'4444444','yes','4');
INSERT INTO members VALUES('hussein','alsharif','hussein@alsharif',5678,'2222222','yes','2');
