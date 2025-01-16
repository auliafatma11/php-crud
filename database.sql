CREATE DATABASE sekolah;
USE sekolah;

CREATE TABLE siswa(
id INT AUTO_INCREMENT PRIMARY KEY ,
nama VARCHAR(100) NOT NULL,
kelas INT(2) NOT NULL,
jurusan VARCHAR (4) NOT null
);

INSERT INTO siswa 
(nama,kelas,jurusan) VALUES 
("Aulia",11,"PPLG");