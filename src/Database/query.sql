CREATE DATABASE CareerLink;
USE CareerLink;

CREATE TABLE Role (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_role VARCHAR(50) NOT NULL
);

CREATE TABLE User (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role_id INT NOT NULL,
    FOREIGN KEY (role_id) REFERENCES Role(id) ON DELETE CASCADE
);

CREATE TABLE Recruteur (
    id INT PRIMARY KEY,
    nom_entreprise VARCHAR(100) NOT NULL,
    user_id INT UNIQUE NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE
);

CREATE TABLE Administrateur (
    id INT PRIMARY KEY,
    user_id INT UNIQUE NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE
);

CREATE TABLE Candidat (
    id INT PRIMARY KEY,
    skills TEXT,
    user_id INT UNIQUE NOT NULL,
    FOREIGN KEY (user_id) REFERENCES User(id) ON DELETE CASCADE
);

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE Tag (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE OffresEmploi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    poste VARCHAR(100) NOT NULL,
    salaire FLOAT NOT NULL,
    lieu VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    categorie_id INT NOT NULL,
    recruteur_id INT NOT NULL,
    FOREIGN KEY (categorie_id) REFERENCES Categorie(id) ON DELETE CASCADE,
    FOREIGN KEY (recruteur_id) REFERENCES Recruteur(id) ON DELETE CASCADE
);

CREATE TABLE Postulation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_postulation DATE NOT NULL,
    candidat_id INT NOT NULL,
    offre_id INT NOT NULL,
    FOREIGN KEY (candidat_id) REFERENCES Candidat(id) ON DELETE CASCADE,
    FOREIGN KEY (offre_id) REFERENCES OffresEmploi(id) ON DELETE CASCADE
);

CREATE TABLE OffresEmploi_Tag (
    offre_id INT NOT NULL,
    tag_id INT NOT NULL,
    PRIMARY KEY (offre_id, tag_id),
    FOREIGN KEY (offre_id) REFERENCES OffresEmploi(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES Tag(id) ON DELETE CASCADE
);
