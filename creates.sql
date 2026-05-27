CREATE TABLE gofragem (
	id SERIAL PRIMARY KEY,
	tipo VARCHAR(50),
	gramatura CHAR(3),
	tamanho VARCHAR(10),
	acabamento VARCHAR(100)
);

CREATE TABLE servico (
	id SERIAL PRIMARY KEY,
	grafica VARCHAR(100),
	data date,
	quantidade INT,
	tempo int
);
