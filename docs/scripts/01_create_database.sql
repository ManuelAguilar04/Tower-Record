CREATE SCHEMA `nw201903` ;
CREATE USER 'demouser'@'%' IDENTIFIED BY 'carm3l1t4s';
GRANT ALL ON nw201903.* TO 'demouser'@'%';

--CREATE USER 'demouser'@'localhost' IDENTIFIED BY 'carm3l1t4s';
--GRANT ALL ON nw201903.* TO 'demouser'@'localhost' IDENTIFIED BY 'carm3l1t4s';
--FLUSH PRIVILEGES