-- 1- 
-- A)
SELECT * FROM organizacao 
ORDER BY data_fundacao DESC LIMIT 1;

--B)
SELECT * FROM colaborador 
ORDER BY salario DESC LIMIT 1;

--C)
SELECT nome, data_nascimento 
FROM colaborador ORDER BY salario DESC;

--D)
SELECT nome, DATE_PART('years', NOW()) - DATE_PART('years', data_nascimento) AS idade 
FROM colaborador;

--E)
SELECT colaborador.nome as nome_colaborador, organizacao.nome as nome_empresa 
FROM colaborador 
LEFT JOIN organizacao ON colaborador.organizacao_id = organizacao.id

-- 2-
SELECT * 
FROM organizacao 
WHERE id= (SELECT organizacao_id 
            FROM colaborador
            ORDER BY salario ASC LIMIT 1);

-- 3-
SELECT org.nome as nome_empresa, col.organizacao_id AS id_empresa, AVG(col.salario) AS media_salarial 
FROM colaborador col 
LEFT JOIN organizacao org ON col.organizacao_id = org.id 
GROUP BY col.organizacao_id, org.nome
 
-- 4-
SELECT org.nome AS nome_empresa, col.nome AS nome_colaborador, DATE_PART('years', NOW()) - DATE_PART('years', col.data_nascimento) AS idade 
FROM colaborador col
LEFT JOIN organizacao org ON col.organizacao_id = org.id
ORDER BY idade ASC
LIMIT 1
 