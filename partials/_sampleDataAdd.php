<?php
CREATE DATABASE hospital_db;

USE hospital_db;

CREATE TABLE hospitals (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    city VARCHAR(50),
    surgery VARCHAR(50),
    price DECIMAL(10, 2),
    doctor_experience INT, -- in years
    total_days INT, -- total days stayed by a patient
    is_private BOOLEAN
);

INSERT INTO hospitals (name, city, surgery, price, doctor_experience, total_days, is_private) VALUES
('Hospital A', 'New York', 'Dialysis', 500.00, 10, 5, TRUE),
('Hospital B', 'Los Angeles', 'Hernia Surgery', 3000.00, 15, 3, FALSE),
('Hospital C', 'Chicago', 'Bariatric Surgery', 15000.00, 20, 7, TRUE);
?>