# brief5

#les commande que j'ais utiliser :
CREATE DATABASE DATAWARE

use dataware;

CREATE TABLE member (
    iD INT PRIMARY KEY,
    Fname VARCHAR(50),
    Lname VARCHAR(50),
    email VARCHAR(50),
    equipe VARCHAR(50),
    phone int,
    role VARCHAR(50),
    STATU VARCHAR(50)
);


CREATE TABLE Team (
    teamID INT PRIMARY KEY, 
    teamName varchar(50),
    creationDate date
);



INSERT INTO member (
iD ,Fname ,Lname,email ,equipe ,phone ,role,STATU)
 VALUES (1,"yassir", "oulma","ytoop@gmail.com","SkyLanders",+212614313337,"vise" ,"presidant","celibe");

INSERT INTO member (
iD ,Fname ,Lname,email ,equipe ,phone ,role,STATU)
 VALUES (2,"mohamed", "Daeli","dadp@gmail.com","nightcrowlers",+212611223344,"Presidant","celibe");

INSERT INTO member (
iD ,Fname ,Lname,email ,equipe ,phone ,role,STATU)
 VALUES (3,"Otman", "ToTo","toto@gmail.com","Faceless",+212620152235,"Chef de projet","celibe");
INSERT INTO `member` (`iD`, `Fname`, `Lname`, `email`, `phone`, `role`, `STATU`, `equipe`) VALUES ('5', 'chaemaa', 'houas', 'houas@gmail.com', '+2126142578', 'chef', 'celibe', '2');


SELECT member.Fname, member.equipe,team.teamName FROM member INNER JOIN team ON member.equipe=team.teamID;



ALTER TABLE member
ADD equipe int(11),
add FOREIGN KEY (equipe) REFERENCES team(teamID);


-ID: int
-firstname: string
-flasttname: string
-email: string
-phone:int
+role
+equipe:string
+statu
-





- teamID: int
-teamName: string
-creationDate
