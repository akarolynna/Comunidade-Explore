
-- Inserir categorias
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

-- Inserir 10 membros
INSERT INTO Membro (imagem, nome, email, senha, apresentacao, aniversario, telefone, melhor_viagem, genero, estilo) VALUES
    ('foto1.jpg', 'João', 'joao@example.com', 'senha123', 'Apresentação João', '1990-01-01', '123456789', 'Praia', 'MASCULINO', 'VIAJANTE_AVENTUREIRO'),
    ('foto2.jpg', 'Maria', 'maria@example.com', 'senha456', 'Apresentação Maria', '1992-02-02', '987654321', 'Montanha', 'FEMININO', 'MOCHILEIRO_EXPERIENTE'),
    ('foto3.jpg', 'Carlos', 'carlos@example.com', 'senha789', 'Apresentação Carlos', '1995-03-03', '456789123', 'Natureza', 'MASCULINO', 'AVENTUREIRO_GLOBAL'),
    ('foto4.jpg', 'Ana', 'ana@example.com', 'senhaabc', 'Apresentação Ana', '1988-04-04', '789123456', 'Neve', 'FEMININO', 'EXPLORADOR_NOVATO'),
    ('foto5.jpg', 'Paulo', 'paulo@example.com', 'senhadef', 'Apresentação Paulo', '1986-05-05', '159357852', 'Deserto', 'MASCULINO', 'VIAJANTE_AVENTUREIRO'),
    ('foto6.jpg', 'Mariana', 'mariana@example.com', 'senhaghi', 'Apresentação Mariana', '1991-06-06', '852963741', 'História', 'FEMININO', 'MOCHILEIRO_EXPERIENTE'),
    ('foto7.jpg', 'Lucas', 'lucas@example.com', 'senhajkl', 'Apresentação Lucas', '1985-07-07', '369258147', 'Aventura', 'MASCULINO', 'AVENTUREIRO_GLOBAL'),
    ('foto8.jpg', 'Laura', 'laura@example.com', 'senhamno', 'Apresentação Laura', '1989-08-08', '753951852', 'Mergulho', 'FEMININO', 'EXPLORADOR_NOVATO'),
    ('foto9.jpg', 'Gabriel', 'gabriel@example.com', 'senhaopq', 'Apresentação Gabriel', '1993-09-09', '456123789', 'Romance', 'MASCULINO', 'VIAJANTE_AVENTUREIRO'),
    ('foto10.jpg', 'Julia', 'julia@example.com', 'senharst', 'Apresentação Julia', '1994-10-10', '987654321', 'Urbano', 'FEMININO', 'MOCHILEIRO_EXPERIENTE');

-- Inserir um diário de viagem para cada membro e cada categoria
INSERT INTO DiarioViagem (imagem, titulo, descricao, arquivado, categoria_id, criador_id) VALUES 
    ('https://example.com/foto_diario1', 'Aventura na Tailândia', 'Explorando praias paradisíacas e templos exóticos na Tailândia.', 0, 1, 1),
    ('https://example.com/foto_diario2', 'Esqui em Aspen', 'Descendo encostas cobertas de neve em uma aventura de esqui em Aspen.', 0, 2, 2),
    ('https://example.com/foto_diario3', 'Explorando a arquitetura urbana de Nova York', 'Descubra os marcos urbanos e a vida agitada de Nova York.', 0, 3, 3),
    ('https://example.com/foto_diario4', 'Trekking no Monte Everest', 'Desafiando os limites nas alturas do Monte Everest.', 0, 4, 4),
    ('https://example.com/foto_diario5', 'Acampamento na Amazônia', 'Vivenciando a natureza selvagem e a diversidade da Amazônia.', 0, 5, 5),
    ('https://example.com/foto_diario6', 'Expedição pelo deserto do Saara', 'Explorando a vastidão e a beleza do deserto do Saara.', 0, 6, 6),
    ('https://example.com/foto_diario7', 'Descobrindo os segredos da Grécia Antiga', 'Uma jornada pela história e mitologia da Grécia Antiga.', 0, 7, 7),
    ('https://example.com/foto_diario8', 'Rafting nas corredeiras do Rio Colorado', 'Embarcando em uma aventura emocionante de rafting.', 0, 8, 8),
    ('https://example.com/foto_diario9', 'Mergulho nos recifes de coral do Caribe', 'Explorando a vida marinha e os recifes do Caribe.', 0, 9, 9),
    ('https://example.com/foto_diario10', 'Romance em Paris', 'Descobrindo o encanto romântico de Paris.', 0, 10, 10);

-- Inserir três posts para cada diário de viagem
INSERT INTO Post (imagens, conteudo, data, diario_id) VALUES 
    ('["https://example.com/foto_post1"]', 'Explorando praias paradisíacas e templos exóticos na Tailândia.', '2023-08-01', 1),
    ('["https://example.com/foto_post2", "https://example.com/foto_post3"]', 'Entre fotografias e palavras, guardo memórias de cada jornada.', '2023-08-02', 1),
    ('["https://example.com/foto_post4", "https://example.com/foto_post5", "https://example.com/foto_post6"]', 'Cada postagem é um pedaço do meu mapa de experiências.', '2023-08-03', 1),
    ('["https://example.com/foto_post7"]', 'Diário de bordo: registros de emoções, sonhos e descobertas.', '2023-08-04', 2),
    ('["https://example.com/foto_post8", "https://example.com/foto_post9"]', 'Páginas preenchidas com as cores de cada lugar visitado.', '2023-08-05', 2),
    ('["https://example.com/foto_post10"]', 'Viajar é colecionar momentos, escrever é eternizá-los.', '2023-08-06', 2),
    ('["https://example.com/foto_post11", "https://example.com/foto_post12", "https://example.com/foto_post13"]', 'Em cada linha, a essência de um lugar ganha vida.', '2023-08-07', 3),
    ('["https://example.com/foto_post14"]', 'Cada relato é um pedaço do meu coração deixado pelo mundo.', '2023-08-08', 3),
    ('["https://example.com/foto_post15", "https://example.com/foto_post16"]', 'Cada postagem é uma ponte entre memória e realidade.', '2023-08-09', 3),
    ('["https://example.com/foto_post17"]', 'Cada passo é uma nova descoberta, uma nova aventura.', '2023-08-10', 4),
    ('["https://example.com/foto_post18", "https://example.com/foto_post19"]', 'A vida é uma jornada cheia de histórias para contar.', '2023-08-11', 4),
    ('["https://example.com/foto_post20"]', 'As páginas se enchem de emoções a cada parada.', '2023-08-12', 4),
    ('["https://example.com/foto_post21"]', 'Os detalhes transformam uma viagem em uma experiência única.', '2023-08-13', 5),
    ('["https://example.com/foto_post22", "https://example.com/foto_post23"]', 'Cada paisagem é um quadro que guardo com carinho.', '2023-08-14', 5),
    ('["https://example.com/foto_post24", "https://example.com/foto_post25", "https://example.com/foto_post26"]', 'A imensidão da natureza me faz sentir pequeno e grato.', '2023-08-15', 5),
    ('["https://example.com/foto_post27"]', 'O deserto é uma tela em branco esperando para ser explorada.', '2023-08-16', 6),
    ('["https://example.com/foto_post8"]', 'As dunas são páginas de um livro que a natureza escreveu.', '2023-08-17', 6),
    ('["https://example.com/foto_post9", "https://example.com/foto_post10"]', 'O silêncio do deserto conta histórias que só o coração entende.', '2023-08-18', 6),
    ('["https://example.com/foto_post11"]', 'Cada ruína é um capítulo da história que ainda ressoa.', '2023-08-19', 7),
    ('["https://example.com/foto_post12", "https://example.com/foto_post13"]', 'A mitologia é a alma de cada pedra e coluna.', '2023-08-20', 7),
    ('["https://example.com/foto_post14"]', 'Os templos guardam segredos sussurrados pelos ventos do passado.', '2023-08-21', 7),
    ('["https://example.com/foto_post15"]', 'Nas águas rápidas, encontro a serenidade da aventura.', '2023-08-22', 8),
    ('["https://example.com/foto_post16", "https://example.com/foto_post17"]', 'Cada remada é um novo capítulo no rio da vida.', '2023-08-23', 8),
    ('["https://example.com/foto_post18", "https://example.com/foto_post19", "https://example.com/foto_post20"]', 'A adrenalina flui junto com a correnteza do rio.', '2023-08-24', 8),
    ('["https://example.com/foto_post21"]', 'Entre corais coloridos, encontro a paz do mergulho.', '2023-08-25', 9),
    ('["https://example.com/foto_post22"]', 'Cada mergulho é uma nova imersão na beleza do mar.', '2023-08-26', 9),
    ('["https://example.com/foto_post23", "https://example.com/foto_post24"]', 'A vida marinha é um espetáculo embaixo das ondas.', '2023-08-27', 9),
    ('["https://example.com/foto_post25"]', 'Embarcando em uma aventura emocionante de rafting.', '2023-08-08', 10),
    ('["https://example.com/foto_post26", "https://example.com/foto_post27"]', 'Explorando a vida marinha e os recifes do Caribe.', '2023-08-09', 10),
    ('["https://example.com/foto_post10"]', 'Descobrindo o encanto romântico de Paris.', '2023-08-10', 10);

-- Inserir 10 eventos
INSERT INTO Evento (titulo, localizacao, data_hora_inicio, data_hora_termino, descricao, imagens, max_participantes, categoria_id, criador_id) VALUES
    ('Festa na Praia', 'Praia de Copacabana, Rio de Janeiro', '2023-07-15 18:00:00', '2023-07-15 23:59:00', 'Uma festa incrível na praia com música ao vivo e fogueira.', '["festa_praia_1.jpg", "festa_praia_2.jpg"]', 200, 1, 1),
    ('Trilha na Montanha', 'Parque Nacional da Serra dos Órgãos, Petrópolis', '2023-08-20 07:00:00', '2023-08-20 17:00:00', 'Trilha desafiadora pelas montanhas com vistas espetaculares.', '["trilha_montanha_1.jpg", "trilha_montanha_2.jpg"]', 50, 2, 2),
    ('Piquenique no Parque', 'Parque Ibirapuera, São Paulo', '2023-09-10 11:00:00', '2023-09-10 15:00:00', 'Um dia de diversão com piquenique, jogos e atividades ao ar livre.', '["piquenique_parque_1.jpg", "piquenique_parque_2.jpg"]', 80, 3, 3),
    ('Expedição no Deserto', 'Deserto do Atacama, Chile', '2023-10-05 08:00:00', '2023-10-15 18:00:00', 'Uma aventura intensa explorando o deserto em busca de paisagens surreais.', '["expedicao_deserto_1.jpg", "expedicao_deserto_2.jpg"]', 20, 4, 4),
    ('Encontro de Mergulho', 'Fernando de Noronha, Pernambuco', '2023-11-12 09:00:00', '2023-11-12 14:00:00', 'Um evento para apaixonados por mergulho descobrirem novos pontos de mergulho.', '["mergulho_noronha_1.jpg", "mergulho_noronha_2.jpg"]', 30, 5, 5),
    ('Roteiro Histórico', 'Centro Histórico de Ouro Preto, Minas Gerais', '2023-12-03 10:00:00', '2023-12-03 16:00:00', 'Um passeio pelo patrimônio histórico e cultural da cidade.', '["roteiro_historico_1.jpg", "roteiro_historico_2.jpg"]', 40, 6, 6),
    ('Noite de Aventura Urbana', 'Centro de Buenos Aires, Argentina', '2024-01-07 19:00:00', '2024-01-08 02:00:00', 'Explorando a vida noturna da cidade com diversas atividades.', '["aventura_urbana_1.jpg", "aventura_urbana_2.jpg"]', 150, 7, 7),
    ('Romance nas Montanhas', 'Vale do Quilombo, Gramado', '2024-02-14 18:00:00', '2024-02-14 23:59:00', 'Um jantar romântico com vista para as montanhas.', '["romance_montanhas_1.jpg", "romance_montanhas_2.jpg"]', 10, 8, 8),
    ('Sessão de Yoga na Natureza', 'Chapada dos Veadeiros, Goiás', '2024-03-20 08:00:00', '2024-03-20 10:00:00', 'Um momento de conexão com a natureza e práticas de yoga.', '["yoga_natureza_1.jpg", "yoga_natureza_2.jpg"]', 25, 9, 9),
    ('Tour Gastronômico', 'Centro de Lyon, França', '2024-04-05 12:00:00', '2024-04-05 17:00:00', 'Descobrindo os sabores da culinária francesa em um passeio gastronômico.', '["tour_gastronomico_1.jpg", "tour_gastronomico_2.jpg"]', 60, 10, 10);

-- Inserir mais 5 eventos
INSERT INTO Evento (titulo, localizacao, data_hora_inicio, data_hora_termino, descricao, imagens, max_participantes, categoria_id, criador_id) VALUES
    ('Festival de Música Eletrônica', 'Ibiza, Espanha', '2024-05-25 18:00:00', '2024-05-26 06:00:00', 'Um festival emocionante com DJs renomados e shows incríveis.', '["festival_ibiza_1.jpg", "festival_ibiza_2.jpg"]', 300, 1, 1),
    ('Aula de Fotografia Urbana', 'Brooklyn, Nova York', '2024-06-10 10:00:00', '2024-06-10 13:00:00', 'Um workshop prático de fotografia explorando a beleza urbana.', '["fotografia_brooklyn_1.jpg", "fotografia_brooklyn_2.jpg"]', 20, 2, 2),
    ('Viagem de Balão ao Amanhecer', 'Capadócia, Turquia', '2024-07-03 05:00:00', '2024-07-03 08:00:00', 'Uma jornada emocionante sobre a Capadócia ao nascer do sol.', '["viagem_balao_capadocia_1.jpg", "viagem_balao_capadocia_2.jpg"]', 15, 3, 3),
    ('Competição de Surf', 'North Shore, Havaí', '2024-08-18 08:00:00', '2024-08-18 16:00:00', 'Um campeonato de surf com os melhores atletas do mundo.', '["surf_havai_1.jpg", "surf_havai_2.jpg"]', 50, 4, 4),
    ('Acampamento de Verão', 'Yellowstone National Park, EUA', '2024-09-05 14:00:00', '2024-09-08 12:00:00', 'Um acampamento divertido com trilhas, fogueiras e observação de estrelas.', '["acampamento_yellowstone_1.jpg", "acampamento_yellowstone_2.jpg"]', 40, 5, 5);

-- Inserir 5 guias
INSERT INTO Guia (cor_principal, nome_destino, localizacao, descricao, clima, epoca_visita, publico, arquivado, areas_contribuicao, categoria_id, criador_id) VALUES 
    ('#3498db', 'Machu Picchu', 'Machu Picchu, Peru', 'Descubra os mistérios das ruínas incas em uma jornada única.', 'Temperado', 'Verão', 'Turistas', false, 'PONTOS_TURISTICOS', 1, 1),
    ('#27ae60', 'Paris', 'Paris, França', 'Experimente a culinária francesa em restaurantes tradicionais e modernos.', 'Temperado', 'Primavera', 'Amantes da Gastronomia', false, 'RESTAURANTES', 2, 2),
    ('#c0392b', 'Monte Everest', 'Monte Everest, Nepal', 'Uma expedição desafiadora até o topo do mundo.', 'Frio', 'Inverno', 'Alpinistas', false, 'ESPORTES_AVENTURA', 3, 3),
    ('#f1c40f', 'Tóquio', 'Tóquio, Japão', 'Explore a cidade como um morador local e descubra lugares escondidos.', 'Temperado', 'Outono', 'Viajantes Curiosos', false, 'DICAS_LOCAIS', 4, 4),
    ('#8e44ad', 'Orlando', 'Orlando, EUA', 'Uma experiência mágica para todas as idades nos parques temáticos da Disney.', 'Quente', 'Verão', 'Famílias', false, 'FAMILIA', 5, 5);
