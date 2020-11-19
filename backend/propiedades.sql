CREATE DATABASE syloper;
USE syloper;

CREATE TABLE Propiedades
(
Ubicacion VARCHAR(20) NOT NULL,
Ambientes INT(10) NOT NULL,
Precio INT(10) NOT NULL
);

INSERT INTO Propiedades
(Ubicacion, Ambientes, Precio) VALUES ('Rosario Norte', 3, 190000);
INSERT INTO Propiedades
(Ubicacion, Ambientes, Precio) VALUES ('Rosario Centro', 2, 120000);
INSERT INTO Propiedades
(Ubicacion, Ambientes, Precio) VALUES ('Rosario Sur', 5, 270000);

SELECT * FROM Propiedades 
