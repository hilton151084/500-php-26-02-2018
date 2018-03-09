
CREATE DATABASE aula07;

USE aula07;

CREATE TABLE usuarios( id INT NOT NULL AUTO_INCREMENT, usuario VARCHAR(255) NOT NULL, senha VARCHAR(40) NOT NULL, PRIMARY KEY(id) );

CREATE TABLE posts(  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, usuario_id INT  NOT NULL, post VARCHAR(140) NOT NULL, FOREIGN KEY (usuario_id) REFERENCES usuarios(id));

INSERT INTO usuarios (usuario,senha) VALUES ('HILTON','123');

UPDATE usuarios SET senha = '123456' WHERE id = 2;

SELECT INTO usuarios (usuario,senha)

DELETE FROM usuarios WHERE id = 3;

INSERT INTO posts (usuario_id,post) VALUES (1,"Meu Primeiro Post");
INSERT INTO posts (usuario_id,post) VALUES (2,"Meu Primeiro Post");
INSERT INTO posts (usuario_id,post) VALUES (4,"Meu Primeiro Post");
INSERT INTO posts (usuario_id,post) VALUES (1,"Mais Posts");
INSERT INTO posts (usuario_id,post) VALUES (2,"Meu Posts");
INSERT INTO posts (usuario_id,post) VALUES (4,"Meu Posts");

SELECT * FROM posts ORDER BY usuario_id;
SELECT * FROM posts ORDER BY usuario_id LIMIT 2;

SELECT * FROM posts INNER JOIN usuarios ON posts.usuario_id = usuarios.id;
SELECT * FROM posts LEFT JOIN usuarios ON posts.usuario_id = usuarios.id;
SELECT * FROM posts RIGHT JOIN usuarios ON posts.usuario_id = usuarios.id;
SELECT * FROM usuarios u LEFT JOIN posts p ON u.id = posts.usuario_id;

sudo apt install php7.0-mysql

sudo service apache2 restart

CREATE USER 'hilton'@'localhost' IDENTIFIED BY '@da4linux';
GRANT ALL PRIVILEGES ON *.* TO 'hilton'@'localhost';