--Melihat data user musel
USE mysql;
SELECT user,host FROM user;

--Membuat User
CREATE USER 'budi'@'localhost' IDENTIFIED BY '123';

--Menghapus User
DROP USER budi;
DROP USER 'budi'@'localhost';

--Mengubah Password User
SET PASSWORD FOR budi@localhost = PASSWORD('rahasia');

--Melihat Hak Akses User
SHOW GRANTS FOR 'admin'@'localhost';

--Memberi hak akses user
GRANT SELECT,UPDATE,DELETE,INSERT ON db_sttnf.tb_mhs TO 'budi'@'localhost';

--Menghapus hak akses user
REVOKE SELECT,UPDATE,DELETE,INSERT ON db_sttnf.tb_mhs FROM 'budi'@'localhost';