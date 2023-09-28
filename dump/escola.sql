CREATE DATABASE escola;

USE escola;

CREATE TABLE aluno (
    id_alu INT AUTO_INCREMENT PRIMARY KEY,
    nome_alu VARCHAR(255),
    cidade_alu VARCHAR(255),
    tel_alu VARCHAR(15),
    sexo_al CHAR(1),
    email_alu VARCHAR(255)
);

INSERT INTO aluno (nome_alu, cidade_alu, tel_alu, sexo_al, email_alu)
VALUES
    ('Albert Einstein', 'Berlim', '123-456-7890', 'M', 'einstein@example.com'),
    ('Marie Curie', 'Varsóvia', '987-654-3210', 'F', 'curie@example.com'),
    ('Isaac Newton', 'Woolsthorpe', '555-555-5555', 'M', 'newton@example.com'),
    ('Charles Darwin', 'Shrewsbury', '111-222-3333', 'M', 'darwin@example.com'),
    ('Galileo Galilei', 'Pisa', '999-888-7777', 'M', 'galilei@example.com'),
    ('Ada Lovelace', 'Londres', '777-777-7777', 'F', 'lovelace@example.com'),
    ('Nikola Tesla', 'Smiljan', '444-333-2222', 'M', 'tesla@example.com'),
    ('Alan Turing', 'Maida Vale', '222-333-4444', 'M', 'turing@example.com'),
    ('Stephen Hawking', 'Oxford', '666-555-4444', 'M', 'hawking@example.com'),
    ('Jane Goodall', 'Londres', '777-666-5555', 'F', 'goodall@example.com'),
    ('Roberto','Rio Pomba','123-4536-7890','M','roberto@oi.com.br');

SELECT * FROM aluno;

UPDATE aluno
SET nome_alu = 'Roberto Carlos'
WHERE id_alu = 11;

DELETE FROM aluno
WHERE id_alu = 11;
