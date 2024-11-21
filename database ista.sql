
CREATE DATABASE IF NOT EXISTS ISTA;
USE ISTA;
CREATE TABLE IF NOT EXISTS STAGIAIRES (
    matstagiaire INT AUTO_INCREMENT PRIMARY KEY, 
    nomstagiaire VARCHAR(50) NOT NULL,          
    prenomstagiaire VARCHAR(50) NOT NULL,       
    filierestagiaire VARCHAR(100) NOT NULL,     
    anneeetude YEAR NOT NULL,                  
    typebac VARCHAR(50) NOT NULL,               
    anneebac YEAR NOT NULL                      
);
