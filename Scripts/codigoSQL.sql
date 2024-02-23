CREATE DATABASE comunidadeexplore;
use comunidadeexplore;

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
 nome VARCHAR(255),
 email varchar(255) not null,
 senha varchar(255) not null,
 apresentacao varchar(600),
 aniversario DATE,
 telefone VARCHAR(255),
 melhor_viagem VARCHAR(255),
 foto varchar(255) not null,
 instagram VARCHAR(100),
 CONSTRAINT PK_MEMBRO PRIMARY KEY(id) 
);

CREATE TABLE DiarioViagem (
	id INT NOT NULL AUTO_INCREMENT,
    foto VARCHAR(255) NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descricao VARCHAR(255),
    arquivado BOOL,
    localizacao VARCHAR(120),
    categoria_id INT,
    criador_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (categoria_id) REFERENCES Categoria(id),
    FOREIGN KEY (criador_id) REFERENCES Membro(id)
);

CREATE TABLE Post (
	id INT NOT NULL AUTO_INCREMENT,
    fotos JSON NOT NULL,
    descricao VARCHAR(500) NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    diario_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (diario_id) REFERENCES DiarioViagem(id)
);

CREATE TABLE Guia (
    id INT AUTO_INCREMENT,
    nomeDestino VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    corPrincipal VARCHAR(255) NOT NULL,
    descricao VARCHAR(1000) NOT NULL,
    clima VARCHAR(1000) NOT NULL,
    epocaVisita VARCHAR(1000) NOT NULL,
    culturaHistoria VARCHAR(1000) NOT NULL,
    areasContribuicao VARCHAR(1000) NOT NULL,
    fotoCapa VARCHAR(1000) NOT NULL,
    fotosSecundarias JSON NOT NULL,
    publico BOOLEAN NOT NULL,
    categoriaId INT NOT NULL,
    criadorId INT NOT NULL,
    
    PRIMARY KEY(id),
    FOREIGN KEY (categoriaId) REFERENCES Categoria(id),
    FOREIGN KEY (criadorId) REFERENCES Membro(id) ON DELETE CASCADE
);

CREATE TABLE Guia_Colaborador (
    guiaId INT NOT NULL,
    membroId INT NOT NULL,

    PRIMARY KEY (guiaId, membroId),
    FOREIGN KEY (guiaId) REFERENCES Guia(id) ON DELETE CASCADE,
    FOREIGN KEY (membroId) REFERENCES Membro(id) ON DELETE CASCADE
);

CREATE TABLE Guia_Seguidor (
    guiaId INT NOT NULL,
    membroId INT NOT NULL,

    PRIMARY KEY (guiaId, membroId),
    FOREIGN KEY (guiaId) REFERENCES Guia(id) ON DELETE CASCADE,
    FOREIGN KEY (membroId) REFERENCES Membro(id) ON DELETE CASCADE
);

CREATE TABLE Desafio (
    id INT AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NOT NULL,
    guiaId INT NOT NULL,

    PRIMARY KEY (id),
    FOREIGN KEY (guiaId) REFERENCES Guia(id) ON DELETE CASCADE
);

CREATE TABLE Evento (
    id INT AUTO_INCREMENT,
    titulo VARCHAR(255) NOT NULL,
    localizacao VARCHAR(255) NOT NULL,
    dataInicio DATE NOT NULL,
    horaInicio TIME NOT NULL,
    dataTermino DATE NOT NULL,
    horaTermino TIME NOT NULL,
    fotoCapa VARCHAR(255) NOT NULL,
    maxParticipantes INT,
    categoriaId INT NOT NULL,
    criadorId INT NOT NULL,    
    
    PRIMARY KEY(id),
    FOREIGN KEY (categoriaId) REFERENCES Categoria(id),
    FOREIGN KEY (criadorId) REFERENCES Membro(id) ON DELETE CASCADE
);

CREATE TABLE Evento_Colaborador (
    eventoId INT NOT NULL,
    membroId INT NOT NULL,
    PRIMARY KEY (eventoId, membroId),
    FOREIGN KEY (eventoId) REFERENCES Evento(id) ON DELETE CASCADE,
    FOREIGN KEY (membroId) REFERENCES Membro(id) ON DELETE CASCADE
);

CREATE TABLE Evento_Inscrito (
    eventoId INT NOT NULL,
    membroId INT NOT NULL,
    PRIMARY KEY (eventoId, membroId),
    FOREIGN KEY (eventoId) REFERENCES Evento(id) ON DELETE CASCADE,
    FOREIGN KEY (membroId) REFERENCES Membro(id) ON DELETE CASCADE
);