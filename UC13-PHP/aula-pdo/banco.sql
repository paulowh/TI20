-- Active: 1701344957657@@127.0.0.1@3306@aulapdo
CREATE TABLE tb_produtos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(200),
    valor FLOAT(4,2),
    data_validade DATE
);

--CREATE (criando informações no nosso banco)
INSERT INTO tb_produtos (nome_produto, valor, data_validade) VALUES ("Arroz", 22.99, '2025-05-01');  
INSERT INTO tb_produtos (nome_produto, valor, data_validade) VALUES ("Feijão", 7.99, '2030-05-01');  
INSERT INTO tb_produtos (nome_produto, valor, data_validade) VALUES ("Monster", 8.75, '2024-01-15');  

SELECT * FROM tb_produtos;

--QUANDO A CONDIÇÃO FOR VERDADEIRA
SELECT * FROM tb_produtos WHERE id = 2;

--EXIBIR OS PRODUTOS QUE TENHAM A LETRA 'A' NO NOME
SELECT * FROM tb_produtos WHERE nome_produto LIKE "%a%";