CREATE DATABASE aula_php;
USE aula_php;

CREATE TABLE cliente(
    var_id INT PRIMARY KEY,
    var_nome VARCHAR(100),
    var_email VARCHAR(255) NOT NULL
);

CREATE TABLE fornecedor(
    var_id INT PRIMARY KEY,
    var_nome VARCHAR(100),
    var_cidade VARCHAR(50) NOT NULL
);

DELIMITER $$
CREATE PROCEDURE salvar_cliente(
    IN var_id INT,
    IN var_nome VARCHAR(100),
    IN var_email VARCHAR(255)
)
BEGIN
    INSERT INTO cliente(var_id, var_nome, var_email)
    VALUES(var_id, var_nome, var_email);
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE salvar_fornecedor(
    IN var_id INT,
    IN var_nome VARCHAR(100),
    IN var_cidade VARCHAR(50)
)
BEGIN
    INSERT INTO fornecedor(var_id, var_nome, var_cidade)
    VALUES(var_id, var_nome, var_cidade);
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE listar_cliente()
BEGIN
    SELECT var_id, var_nome, var_email FROM cliente;
END$$
DELIMITER ;

DELIMITER $$
CREATE PROCEDURE listar_fornecedor()
BEGIN
    SELECT var_id, var_nome, var_cidade FROM fornecedor;
END$$
DELIMITER ;

CALL salvar_cliente(1, 'Lucas Almeida', 'lucas@email.com');
CALL salvar_cliente(2, 'Maria Silva', 'maria@email.com');

CALL salvar_fornecedor(1, 'Distribuidora Tech', 'São Paulo');
CALL salvar_fornecedor(2, 'Fornece Tudo', 'Campinas');

CALL listar_cliente();
CALL listar_fornecedor();