

CREATE TABLE licencies (
licencie_id INT AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30),
prenom VARCHAR(30),
contact_id INT
FOREIGN KEY (contact_id) REFERENCES contacts(contact_id)
);

CREATE TABLE categories (
categorie_id INT AUTO_INCREMENT PRIMARY KEY,
code_raccourci VARCHAR(30),
nom VARCHAR(30) NOT NULL
);

CREATE TABLE contacts (
contact_id INT AUTO_INCREMENT PRIMARY KEY,
nom VARCHAR(30),
prenom VARCHAR(30),
email VARCHAR (30),
numero VARCHAR (10)
);

CREATE TABLE educateurs (
educateur_id INT PRIMARY KEY ,
email VARCHAR(30),
mdp VARCHAR(30),
FOREIGN KEY educateur_id  REFERENCES licencies(licencie_id)
);

CREATE TABLE admins (
admin_id INT PRIMARY KEY ,
FOREIGN KEY admin_id  REFERENCES educateurs(educateur_id)
);
