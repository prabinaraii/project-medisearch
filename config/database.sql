CREATE DATABASE medisearch_db;
USE medisearch_db;

CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(150) UNIQUE,
    location VARCHAR(255) NOT NULL,
    password VARCHAR(255)
);

CREATE TABLE pharmacy (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pharmacy_name VARCHAR(255),
    pan_no VARCHAR(50) UNIQUE,
    phone_no VARCHAR(20),
    nmc_license VARCHAR(255),
    dda_license VARCHAR(255),
     location VARCHAR(255) NOT NULL,
    password VARCHAR(255)
);

CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    pharmacy_id INT
);

CREATE TABLE medicine (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pharmacy_id INT NOT NULL,
    medicine_name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10,2),
    stock INT DEFAULT 0,
    expiry_date DATE,

    FOREIGN KEY (pharmacy_id) REFERENCES pharmacy(id)
);
