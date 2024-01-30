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
	) NOT NULL,
    PRIMARY KEY(id)
);

create table membro(
 id INTEGER NOT NULL AUTO_INCREMENT,
 foto varchar(255) not null,
 email varchar(150) not null,
 senha varchar(255) not null,
 CONSTRAINT PK_MEMBRO PRIMARY KEY(id) 
);

ALTER TABLE membro
 ADD COLUMN nome VARCHAR(255),
 ADD COLUMN aniversario VARCHAR(10),
 ADD COLUMN melhor_viagem VARCHAR(255),
 ADD COLUMN instagram VARCHAR(100),
 ADD COLUMN telefone VARCHAR(13),
 ADD COLUMN descricao VARCHAR(512)
;
CREATE TABLE Guia (
    id INT AUTO_INCREMENT,
    nomeDestino VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    corPrincipal VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    clima VARCHAR(255) NOT NULL,
    epocaVisita VARCHAR(255) NOT NULL,
    culturaHistoria VARCHAR(255) NOT NULL,
    areasContribuicao VARCHAR(255) NOT NULL,
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

CREATE TABLE Evento (
    id INT AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    dataInicio DATE NOT NULL,
    horaInicio TIME NOT NULL,
    dataTermino DATE NOT NULL,
    horaTermino TIME NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    fotoCapa VARCHAR(255) NOT NULL,
    maxParticipantes INT,
    arquivado BOOL DEFAULT false,
    categoriaId INT NOT NULL,
    criadorId INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (categoriaId) REFERENCES Categoria(id),
    FOREIGN KEY (criadorId) REFERENCES Membro(id)
);

CREATE TABLE Evento_Colaborador (
    eventoId INT NOT NULL,
    membroId INT NOT NULL,
    PRIMARY KEY (eventoId, membroId),
    FOREIGN KEY (eventoId) REFERENCES Evento(id),
    FOREIGN KEY (membroId) REFERENCES Membro(id)
);

CREATE TABLE Evento_Inscrito (
    eventoId INT NOT NULL,
    membroId INT NOT NULL,
    PRIMARY KEY (eventoId, membroId),
    FOREIGN KEY (eventoId) REFERENCES Evento(id),
    FOREIGN KEY (membroId) REFERENCES Membro(id)
);