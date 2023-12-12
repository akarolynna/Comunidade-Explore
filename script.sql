CREATE DATABASE comunidadeexplore;


CREATE TABLE Categoria (
    id INT AUTO_INCREMENT PRIMARY KEY,
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
	)
);

CREATE TABLE Membro (
	id INT NOT NULL AUTO_INCREMENT,
    foto VARCHAR(255),
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(255),
    apresentacao VARCHAR(255),
    aniversario DATE,
    telefone VARCHAR(255),
    melhor_viagem VARCHAR(255),
    genero ENUM('MASCULINO', 'FEMININO'),
    estilo ENUM('EXPLORADOR_NOVATO', 'VIAJANTE_AVENTUREIRO', 'MOCHILEIRO_EXPERIENTE', 'AVENTUREIRO_GLOBAL'),    
    PRIMARY KEY(id)	
);

CREATE TABLE DiarioViagem (
	id INT NOT NULL AUTO_INCREMENT,
    foto VARCHAR(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    arquivado BOOL NOT NULL,
    categoria_id INT NOT NULL,
    criador_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (categoria_id) REFERENCES Categoria(id),
    FOREIGN KEY (criador_id) REFERENCES Membro(id)
);

CREATE TABLE Post (
	id INT NOT NULL AUTO_INCREMENT,
    fotos VARCHAR(1000) NOT NULL,
    conteudo VARCHAR(500) NOT NULL,
    diario_viagem_id INT NOT NULL,
    PRIMARY KEY(id)
);