# Atividade 5
- Clone do coopercred https://www.coopercredimplementos.com.br/

## Nome banco de dados
```sql
db_coopercredclone
```

## Criação de tabela(s)

### Tabela produtos
```sql
CREATE TABLE tb_produtos (id INTEGER AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(90) NOT NULL, descricao VARCHAR(255), preco DOUBLE NOT NULL, url VARCHAR(255), id_categorias INTEGER NOT NULL);
```

### Tabela parceiros
```sql
CREATE TABLE tb_parceiros (id INTEGER AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(90) NOT NULL, endereco VARCHAR(255), telefone VARCHAR(90), url VARCHAR(255));
```

### Tabela categoria de produtos
```sql
CREATE TABLE tb_categoriaprodutos (id INTEGER AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(90));
```

### Tabela usuário
```sql
CREATE TABLE tb_usuarios(id INTEGER AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(90) NOT NULL, email VARCHAR(90) NOT NULL, senha VARCHAR(90) NOT NULL);
```

### Tabela banner
```sql
CREATE TABLE tb_banners(id INTEGER AUTO_INCREMENT PRIMARY KEY, url VARCHAR(150) NOT NULL);
```

## Inserção Padrão

```sql
INSERT INTO tb_categoriaprodutos(nome) VALUES("Peças");
```

```sql
INSERT INTO tb_categoriaprodutos(nome) VALUES("Carretas");
```