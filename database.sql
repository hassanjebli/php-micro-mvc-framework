-- Create the database
CREATE DATABASE myapp;

-- Switch to the newly created database
USE myapp;

-- Create the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(100)
);

-- Create the notes table with ON DELETE CASCADE
CREATE TABLE notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    body TEXT,
    user_id INT,
    CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
