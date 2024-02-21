CREATE DATABASE comunidadeexplore;
USE comunidadeexplore;

CREATE TABLE Categoria (
    id INT AUTO_INCREMENT,
    categoria ENUM(
		'PRAIA', 
        'NEVE', 
        'URBANO', 
        'MONTANHA', 
        'NATUREZA', 
        'DESERTO', 
        'HISTORIA', 
        'AVENTURA', 
        'MERGULHO', 
        'ROMANCE'
	),
    PRIMARY KEY(id)
);

CREATE TABLE Membro (
	id INT NOT NULL AUTO_INCREMENT,
    imagem VARCHAR(255),
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    apresentacao VARCHAR(255),
    aniversario DATE,
    telefone VARCHAR(255),
    melhor_viagem VARCHAR(255),
    -- genero ENUM('MASCULINO', 'FEMININO'),
    -- estilo ENUM('EXPLORADOR_NOVATO', 'VIAJANTE_AVENTUREIRO', 'MOCHILEIRO_EXPERIENTE', 'AVENTUREIRO_GLOBAL'),    
    PRIMARY KEY(id)	
);

CREATE TABLE DiarioViagem (
	id INT NOT NULL AUTO_INCREMENT,
    imagem VARCHAR(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    arquivado BOOL NOT NULL,
    categoria_id INT NOT NULL,
    criador_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (categoria_id) REFERENCES Categoria(id),
    FOREIGN KEY (criador_id) REFERENCES Membro(id)
);

-- CREATE TABLE Post (
-- 	id INT NOT NULL AUTO_INCREMENT,
--     imagens JSON NOT NULL,
--     conteudo VARCHAR(500) NOT NULL,
--     data DATE,
--     diario_id INT NOT NULL,
--     PRIMARY KEY(id),
--     FOREIGN KEY (diario_id) REFERENCES DiarioViagem(id)
-- );
CREATE TABLE Post (
	id INT NOT NULL AUTO_INCREMENT,
    fotos JSON NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    diario_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (diario_id) REFERENCES DiarioViagem(id)
);

CREATE TABLE Evento (
    id INT AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    data_hora_inicio DATETIME NOT NULL,
    data_hora_termino DATETIME NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    imagens JSON NOT NULL,
    max_participantes INT,
    arquivado BOOL DEFAULT false,
    categoria_id INT NOT NULL,
    criador_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (categoria_id) REFERENCES Categoria(id),
    FOREIGN KEY (criador_id) REFERENCES Membro(id)
);

CREATE TABLE Evento_Colaborador (
    evento_id INT NOT NULL,
    membro_id INT NOT NULL,
    PRIMARY KEY (evento_id, membro_id),
    FOREIGN KEY (evento_id) REFERENCES Evento(id),
    FOREIGN KEY (membro_id) REFERENCES Membro(id)
);

CREATE TABLE Evento_Inscrito (
    evento_id INT NOT NULL,
    membro_id INT NOT NULL,
    PRIMARY KEY (evento_id, membro_id),
    FOREIGN KEY (evento_id) REFERENCES Evento(id),
    FOREIGN KEY (membro_id) REFERENCES Membro(id)
);







