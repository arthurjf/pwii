## SQL

### Criação de Tabela(s)

> CREATE TABLE usuarios(id integer auto_increment primary key, nome VARCHAR(50), telefone VARCHAR(50), cpf VARCHAR(50), datanascimento VARCHAR(50), email VARCHAR(90), senha VARCHAR(40));

> CREATE TABLE alunos (id integer AUTO_INCREMENT PRIMARY KEY, id_usuarios integer, FOREIGN KEY(id_usuarios) REFERENCES usuarios(id));

> CREATE TABLE escolas (id integer AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(50), endereco VARCHAR(50));

> CREATE TABLE aluno_escola(id integer AUTO_INCREMENT PRIMARY KEY, id_aluno integer, id_escola integer, FOREIGN KEY (id_aluno) REFERENCES alunos(id), FOREIGN KEY (id_escola) REFERENCES escolas(id));

> CREATE TABLE motoristas (id integer AUTO_INCREMENT PRIMARY KEY, id_usuarios integer, FOREIGN KEY (id_usuarios) REFERENCES usuarios(id));

> CREATE TABLE frota (id integer AUTO_INCREMENT PRIMARY KEY, placa VARCHAR(50), modelo VARCHAR(60), cor VARCHAR(50));

> CREATE TABLE servidores (id integer AUTO_INCREMENT PRIMARY KEY, id_usuarios integer, FOREIGN KEY (id_usuarios) REFERENCES usuarios(id));

> CREATE TABLE rotas (id integer AUTO_INCREMENT PRIMARY KEY, rota VARCHAR(255));