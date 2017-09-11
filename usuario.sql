mysql> CREATE USER 'alterador'@'localhost' IDENTIFIED BY '123456';

mysql> GRANT insert, select, update ON DOAMAIS.* TO 'alterador'@'localhost';


