# Wst-
File Configuration
sudo chown -R daemon:daemon /opt/lampp/htdocs/Wst/uploads
sudo chmod -R 755 /opt/lampp/htdocs/Wst/uploads
CREATE TABLE Song (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    artist VARCHAR(255) NOT NULL,
    image_path VARCHAR(255)
);

-- Drop existing table
DROP TABLE IF EXISTS Song;

-- Recreate table
CREATE TABLE Song (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    artist VARCHAR(255) NOT NULL,
    image_path VARCHAR(255)
);

-- Reset auto-increment
ALTER TABLE Song AUTO_INCREMENT = 1;