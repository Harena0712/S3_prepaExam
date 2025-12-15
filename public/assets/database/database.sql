create database prepaExam;
use prepaExam;

CREATE TABLE cooperativeChauffeur(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
);

CREATE TABLE cooperativeVehicule(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50)
);

CREATE TABLE cooperativeTrajet(
    id INT PRIMARY KEY AUTO_INCREMENT,
    dateDebut DATETIME,
    dateFin DATETIME,
    montantRecette DECIMAL(15,2),
    montantCarburant DECIMAL(15,2),
    km DECIMAL(15,2)
);

CREATE TABLE cooperativeMouvement(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idChauffeur INT,
    idVehicule INT,
    idTrajet INT,
    daty DATETIME,
    FOREIGN KEY (idChauffeur) REFERENCES cooperativeChauffeur(id),
    FOREIGN KEY (idVehicule) REFERENCES cooperativeVehicule(id)
);

INSERT INTO cooperativeChauffeur (nom) VALUES
('Rakoto Jean'),
('Rasoa Michel'),
('Andry Tiana'),
('Hery Fred');

INSERT INTO cooperativeVehicule (nom) VALUES
('Toyota Hiace'),
('Mazda BT-50'),
('Isuzu NPR'),
('Renault Trafic');

INSERT INTO cooperativeTrajet (dateDebut, dateFin, montantRecette, montantCarburant, km) VALUES
('2025-01-10 08:00:00', '2025-01-10 12:30:00', 350000.00, 90000.00, 120.5),
('2025-01-11 09:15:00', '2025-01-11 15:00:00', 420000.00, 110000.00, 145.0),
('2025-01-12 06:45:00', '2025-01-12 10:15:00', 280000.00, 70000.00, 95.3),
('2025-01-13 14:00:00', '2025-01-13 19:20:00', 500000.00, 130000.00, 160.8);

INSERT INTO cooperativeMouvement (idChauffeur, idVehicule, idTrajet, daty) VALUES
(1, 1, 1, '2025-01-10 07:50:00'),
(2, 2, 2, '2025-01-11 09:00:00'),
(3, 3, 3, '2025-01-12 06:30:00'),
(4, 4, 4, '2025-01-13 13:45:00');