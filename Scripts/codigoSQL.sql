CREATE DATABASE comunidadeexplore;
use comunidadeexplore;
show tables;

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

create table membro(
 id INTEGER NOT NULL AUTO_INCREMENT,
 foto varchar(255) not null,
 email varchar(150) not null,
 senha varchar(255) not null,
 CONSTRAINT PK_MEMBRO PRIMARY KEY(id) 
);
 
CREATE TABLE Guia (
    id INT AUTO_INCREMENT,
    nomeDestino VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    corPrincipal VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    clima VARCHAR(255) NOT NULL,
    epocaVisita VARCHAR(255) NOT NULL,
    culturaHistoria VARCHAR(255) NOT NULL,
    areasContribuicao ENUM(
		'TODOS', 
        'PONTOS_TURiSTICOS', 
        'HOSPEDAGEM', 
        'RESTAURANTES', 
        'FESTIVAIS', 
        'ENTRETENIMENTO', 
        'TRANSPORTE', 
        'RELAXAMENTO', 
        'DICAS_LOCAIS', 
        'FAMILIA', 
        'ESPORTES_AVENTURA'
	),
    fotoCapa VARCHAR(255) NOT NULL,
    fotosSecundarias JSON NOT NULL,
    publico BOOLEAN NOT NULL,
    arquivado BOOLEAN NOT NULL,
    categoriaId INT NOT NULL,
    criadorId INT NOT NULL,

    PRIMARY KEY(id),
    FOREIGN KEY (categoriaId) REFERENCES Categoria(id),
    FOREIGN KEY (criadorId) REFERENCES Membro(id)
);

CREATE TABLE Guia_Colaborador (
    guiaId INT NOT NULL,
    membroId INT NOT NULL,

    PRIMARY KEY (guiaId, membroId),
    FOREIGN KEY (guiaId) REFERENCES Guia(id),
    FOREIGN KEY (membroId) REFERENCES Membro(id)
);

CREATE TABLE Desafio (
    id INT AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    guiaId INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (guiaId) REFERENCES Guia(id)
);