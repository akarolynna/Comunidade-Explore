
INSERT INTO Categoria (categoria) VALUES
('PRAIA'),
('NEVE'),
('URBANO'),
('MONTANHA'),
('NATUREZA'),
('DESERTO'),
('HISTORIA'),
('AVENTURA'),
('MERGULHO'),
('ROMANCE');

INSERT INTO membro (foto, email, senha) VALUES 
('/fotos/perfil/john_doe.jpg', 'john.doe@example.com', 'senha123'),
('/fotos/perfil/jane_smith.jpg', 'jane.smith@example.com', 'abc@123'),
('/fotos/perfil/default_profile.jpg', 'user@example.com', 'password123');

INSERT INTO Guia (
    nomeDestino,
    localizacao,
    corPrincipal,
    descricao,
    clima,
    epocaVisita,
    culturaHistoria,
    areasContribuicao,
    fotoCapa,
    fotosSecundarias,
    publico,
    arquivado,
    categoriaId,
    criadorId
) VALUES (
    'Nome do Destino',
    'Localização',
    'Cor Principal',
    'Descrição',
    'Clima',
    'Época de Visita',
    'Cultura e História',
    '["PONTOS_TURISTICOS", "HOSPEDAGEM", "RESTAURANTES"]',
    '/caminho/foto_capa.jpg',
    '["/caminho/foto1.jpg", "/caminho/foto2.jpg", "/caminho/foto3.jpg"]',
    false,
    false, 
    1,
    1 
);

INSERT INTO Guia_Colaborador (guiaId, membroId) VALUES (2, 2);

INSERT INTO Desafio (titulo, descricao, guiaId) VALUES 
('Desafio de montanhismo', 'Conquiste o pico mais alto da região.', 2),
('Desafio gastronômico', 'Experimente pelo menos cinco pratos típicos locais.', 2),
('Desafio cultural', 'Visite três museus diferentes em um dia.', 2);


