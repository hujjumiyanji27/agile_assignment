-- Create a database (if not already created)
CREATE DATABASE IF NOT EXISTS university;

-- Use the database
USE university;

-- Table to store student information
CREATE TABLE IF NOT EXISTS students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL, -- Hash passwords for security
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    -- Add other relevant fields as needed
    UNIQUE (username) -- Ensure unique usernames
);

-- Table to store schedules
CREATE TABLE IF NOT EXISTS schedules (
    schedule_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    day_of_week VARCHAR(20) NOT NULL, -- Example: Monday, Tuesday, etc.
    time_from TIME NOT NULL,
    time_to TIME NOT NULL,
    room_number VARCHAR(20) NOT NULL,
    description TEXT,
    FOREIGN KEY (student_id) REFERENCES students(student_id)
    -- Add other relevant fields as needed
);
