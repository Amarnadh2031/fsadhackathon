-- Database: tournament

-- Drop existing tables if they exist
DROP TABLE IF EXISTS contact;
DROP TABLE IF EXISTS register;

-- Table structure for table contact
CREATE TABLE contact (
    id SERIAL PRIMARY KEY,
    name VARCHAR(1024) NOT NULL,
    email VARCHAR(320) NOT NULL,
    subject VARCHAR(1024) NOT NULL,
    message TEXT NOT NULL
);

-- Table structure for table register
CREATE TABLE register (
    id SERIAL PRIMARY KEY,
    crew VARCHAR(32) NOT NULL,
    l_nickname VARCHAR(100) NOT NULL,
    l_email VARCHAR(320) NOT NULL,
    l_phone VARCHAR(10) NOT NULL,
    l_cid VARCHAR(12) NOT NULL,
    p2 VARCHAR(12) NOT NULL,
    p3 VARCHAR(12) NOT NULL,
    p4 VARCHAR(12) NOT NULL,
    payment VARCHAR(100) NOT NULL
);