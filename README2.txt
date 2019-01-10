cd c:\xampp\mysql\bin
mysql.exe -u root --password

<!-- CRIAR DB -->

mysql> CREATE DATABASE a_minha_db;
----Query OK, 1 row affected (0.5 sec)

<!-- USAR A DB QUE FOI CRIADA -->

mysql> USE a_minha_db;
----Database changed
/***********************************************************/

<!-- Criar Tabela -->
mysql> CREATE TABLE leonardo_marinheiro
	->(
	->`id` INT(11) NOT NULL AUTO_INCREMENT,
	->`first_name` VARCHAR(50) NOT NULL,
	->`last_name` VARCHAR(50) NOT NULL,
	->`email` VARCHAR(100) NOT NULL,
	->`password` VARCHAR(100) NOT NULL,
	->`hash` VARCHAR(32) NOT NULL,
	->`active` BOOL NOT NULL DEFAULT 0,
	->PRIMARY KEY (`id`)
	->);
----Query OK, 1 row affected (0.3 sec)
