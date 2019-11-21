CREATE TABLE pweb;

CREATE table participante (
	part_id integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
	part_idade integer,
	part_peso float,
	part_altura float,
	part_curso varchar(45),
	part_facilidade_logica varchar(45),
	part_frequencia_cardiaca integer
);


CREATE table resultado (
	res_id integer PRIMARY KEY NOT NULL AUTO_INCREMENT,
	part_id integer,
	res_frequencia_cardiaca integer,
	res_acertos integer,
	res_tempo float,
	FOREIGN KEY (part_id) REFERENCES participante(part_id)
);