CREATE TABLE employes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100),
  prenom VARCHAR(100),
  email VARCHAR(100),
  telephone VARCHAR(20),
  role VARCHAR(50)
);

CREATE TABLE produits (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(50),
  type ENUM('cacao','café','hévéa'),
  quantite INT
);

CREATE TABLE magasins (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100),
  localisation VARCHAR(100),
  principal BOOLEAN
);

CREATE TABLE plannings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  employe_id INT,
  date_debut DATE,
  date_fin DATE,
  FOREIGN KEY (employe_id) REFERENCES employes(id)
);

CREATE TABLE comptabilite (
  id INT AUTO_INCREMENT PRIMARY KEY,
  type ENUM('depense','revenu'),
  montant DECIMAL(10,2),
  date DATE,
  description TEXT
);
