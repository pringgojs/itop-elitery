CREATE DATABASE db_elitery_itop_fresh CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

CREATE USER 'eliteryitop'@'localhost' IDENTIFIED BY 'password';

GRANT ALL PRIVILEGES ON *.* TO 'eliteryitop'@'localhost';

FLUSH PRIVILEGES;