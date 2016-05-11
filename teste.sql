-- Pergunta 1
INSERT INTO `question` (`id`, `desc`) VALUES ('1', 'Um dos itens abaixo não pertence ao grupo.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('1', 'Amazonas', '0', '1'), 
('2', 'Nilo', '0', '1'), 
('3', 'Reno', '0', '1'), 
('4', 'Ontário', '1', '1');

-- Pergunta 2
INSERT INTO `question` (`id`, `desc`) VALUES ('2', 'Um dos personagens abaixo não faz parte do grupo.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('5', 'Pato Donald', '0', '2'), 
('6', 'Pateta', '1', '2'), 
('7', 'Tio Patinhas', '0', '2'), 
('8', 'Gastão', '0', '2');

-- Pergunta 3
INSERT INTO `question` (`id`, `desc`) VALUES ('3', 'O agente que causa a gripe é:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('9', 'Uma bactéria', '0', '3'), 
('10', 'Um helminto', '0', '3'), 
('11', 'Um protozoário', '0', '3'), 
('12', 'Um vírus', '1', '3');

-- Pergunta 4
INSERT INTO `question` (`id`, `desc`) VALUES ('4', 'Personagem das histórias em quadrinhos também chamado de "O Espírito que Anda."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('13', 'Batman', '0', '4'), 
('14', 'O Homem Aranha', '0', '4'), 
('15', 'O Fantasma', '1', '4'), 
('16', 'O Sombra', '0', '4');

-- Pergunta 5
INSERT INTO `question` (`id`, `desc`) VALUES ('5', 'Qual das construções abaixo, não tem nada em comum com as outras?');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('17', 'As pirâmides do Egito.', '0', '5'), 
('18', 'A Ponte Golden Gate nos Estados Unidos.', '0', '5'), 
('19', 'O Canal do Panamá.', '0', '5'), 
('20', 'O Grand Canyon nos Estados Unidos da América.', '1', '5');

-- Pergunta 6
INSERT INTO `question` (`id`, `desc`) VALUES ('6', 'Uma das afirmações abaixo está errada.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('21', 'Construções de formas piramidais são exclusivas do Egito antigo.', '1', '6'), 
('22', 'Estrelas semelhantes, ou maiores que o Sol, existem na Via Láctea.', '0', '6'), 
('23', 'O Mico-leão-dourado da cara prateada só existe na mata atlântica brasileira.', '0', '6'), 
('24', 'O mosquito da Dengue também pode transmitir a Febre Amarela.', '0', '6');

-- Pergunta 7
INSERT INTO `question` (`id`, `desc`) VALUES ('7', 'Na América do Sul existem dois idiomas oficiais, são eles:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('25', 'Inglês e Espanhol', '0', '7'), 
('26', 'Português e Portunhol', '0', '7'), 
('27', 'Espanhol e Castelhano', '0', '7'), 
('28', 'Espanhol e Português', '1', '7');

-- Pergunta 8
INSERT INTO `question` (`id`, `desc`) VALUES ('8', 'Tiradentes, o mártir da Inconfidência Mineira, era o apelido de quem?');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('29', 'João Cabral de Melo Neto.', '0', '8'), 
('30', 'Deodoro da Fonseca.', '0', '8'), 
('31', 'Joaquim Silvério dos Reis.', '0', '8'), 
('32', 'Joaquim José da Silva Xavier.', '1', '8');

-- Pergunta 9
INSERT INTO `question` (`id`, `desc`) VALUES ('9', 'PIB quer dizer:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('33', 'Produto Interno Brasileiro.', '0', '9'), 
('34', 'Produto Interno Bruto.', '1', '9'), 
('35', 'Propaganda Interna Básica.', '0', '9'), 
('36', 'Programa para Intercâmbio de Brasileiros.', '0', '9');

-- Pergunta 10
INSERT INTO `question` (`id`, `desc`) VALUES ('10', 'BIRD é um organismo internacional que tem por função:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('37', 'Conceder empréstimos para o desenvolvimento dos países ricos.', '0', '10'), 
('38', 'Dar empréstimos para o desenvolvimento dos países mais pobres.', '1', '10'), 
('39', 'Organizar as reuniões da ONU.', '0', '10'), 
('40', 'Impedir o avanço das ações terroristas.', '1', '10');

-- Pergunta 11
INSERT INTO `question` (`id`, `desc`) VALUES ('11', 'Podemos afirmar que Zona Franca é...');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('41', 'Lugar controlado pelo governo, onde tudo é de graça.', '0', '11'), 
('42', 'Região onde ninguém é dono de nada.', '0', '11'), 
('43', 'Região onde as empresas instaladas estão isentas de impostos.', '1', '11'), 
('44', 'A mesma coisa que "Casa da mãe Joana".', '0', '11');

-- Pergunta 12
INSERT INTO `question` (`id`, `desc`) VALUES ('12', 'Capital de Risco é...');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('45', 'A mesma coisa que Caderneta de Poupança.', '0', '12'), 
('46', 'Uma variedade de seguro contra incêndio industrial.', '0', '12'), 
('47', 'Dinheiro emprestado à juros elevados.', '0', '12'), 
('48', 'Um Tipo de investimento sem retorno financeiro garantido.', '1', '12');


-- Pergunta 13
INSERT INTO `question` (`id`, `desc`) VALUES ('13', 'Sobre a China podemos afirmar que...');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('49', 'A maioria das pessoas falam inglês.', '0', '13'), 
('50', 'Todos os cidadãos são livres para se expressar como quiserem.', '0', '13'), 
('51', 'Possui um sistema de Governo Comunista.', '1', '13'), 
('52', 'Toda população é alfabetizada.', '0', '13');

-- Pergunta 14
INSERT INTO `question` (`id`, `desc`) VALUES ('14', 'A letrinha símbolo do Email é conhecida como...');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('53', 'Til.', '0', '14'), 
('54', 'Ponto e vírgula.', '0', '14'), 
('55', 'Arroba.', '1', '14'), 
('56', 'Ampersand.', '0', '14');

-- Pergunta 15
INSERT INTO `question` (`id`, `desc`) VALUES ('15', '"Água mole em pedra dura, tanto bate até..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('57', 'Que a pedra fica polida.', '0', '15'), 
('58', 'Que cria lodo.', '0', '15'), 
('59', 'Que fura.', '1', '15'), 
('60', 'Que a pedra some.', '0', '15');

-- Pergunta 16
INSERT INTO `question` (`id`, `desc`) VALUES ('16', '"Casa de ferreiro, espeto..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('61', 'Bem afiado.', '0', '16'), 
('62', 'Longo.', '0', '16'), 
('63', 'De ouro.', '0', '16'), 
('64', 'De pau.', '1', '16');

-- Pergunta 17
INSERT INTO `question` (`id`, `desc`) VALUES ('17', '"Mais vale um pássaro na mão, que..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('65', 'Uma cobra.', '0', '17'), 
('66', 'Dois na gaiola.', '0', '17'), 
('67', 'Dois voando.', '1', '17'), 
('68', 'Um no alto de uma árvore.', '0', '17');

-- Pergunta 18
INSERT INTO `question` (`id`, `desc`) VALUES ('18', '"Quem semeia vento..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('69', 'Não tem medo de ventania.', '0', '18'), 
('70', 'Colhe tempestade.', '1', '18'), 
('71', 'Não conhece o calor.', '0', '18'), 
('72', 'Gosta de lugares frios.', '0', '18');

-- Pergunta 19
INSERT INTO `question` (`id`, `desc`) VALUES ('19', '"Diz-me com quem andas e te direi..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('73', 'Onde deves ir.', '0', '19'), 
('74', 'Qual o melhor caminho a seguir.', '0', '19'), 
('75', 'Com quantos paus se faz uma canoa.', '0', '19'), 
('76', 'Quem és.', '1', '19');

-- Pergunta 20
INSERT INTO `question` (`id`, `desc`) VALUES ('20', '"Em briga de marido e mulher, vizinho não..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('77', 'Pode ficar de fora.', '0', '20'), 
('78', 'Pode ficar sem ouvir.', '0', '20'), 
('79', 'Mete a colher.', '1', '20'), 
('80', 'Consegue dormir sossegado.', '0', '20');

-- Pergunta 21
INSERT INTO `question` (`id`, `desc`) VALUES ('21', '"Ama o teu próximo..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('81', 'E receberás um grande presente surpresa.', '0', '21'), 
('82', 'Senão o bicho vai pegar.', '0', '21'), 
('83', 'Ou serás castigado.', '0', '21'), 
('84', 'Como a ti mesmo.', '1', '21');

-- Pergunta 22
INSERT INTO `question` (`id`, `desc`) VALUES ('22', '"É mais fácil ridicularizar uma boa ação..."');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('85', 'Que comer sem estar com fome.', '0', '22'), 
('86', 'Que imitá-la.', '1', '22'), 
('87', 'Pedir uma coisa emprestada.', '0', '22'), 
('88', 'Negar alguma coisa.', '0', '22');

-- Pergunta 23
INSERT INTO `question` (`id`, `desc`) VALUES ('23', 'Nome do primeiro ser vivo a viajar pelo espaço sideral dentro de um foguete.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('89', 'Laika', '1', '23'), 
('90', 'Mika', '0', '23'), 
('91', 'Lassie', '0', '23'), 
('92', 'George', '0', '23');

-- Pergunta 24
INSERT INTO `question` (`id`, `desc`) VALUES ('24', 'O primeiro ser vivo a viajar pelo espaço sideral era:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('93', 'Um Inseto;', '0', '24'), 
('94', 'Uma Macaca;', '0', '24'), 
('95', 'Uma Cadela;', '1', '24'), 
('96', 'Um astronauta humano de origem russa;', '0', '24');

-- Pergunta 25
INSERT INTO `question` (`id`, `desc`) VALUES ('25', 'Tipo de literatura artesanal nordestina em forma de versos cuja capa é ilustrada com xilogravuras:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('97', 'Poemas', '0', '25'), 
('98', 'Cordel', '1', '25'), 
('99', 'Recital', '0', '25'), 
('100', 'Maracatu', '0', '25');

-- Pergunta 26
INSERT INTO `question` (`id`, `desc`) VALUES ('26', 'Personagem de Walt Disney dotado de grande sorte:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('101', 'Tio Patinhas;', '0', '26'), 
('102', 'Pato Donald;', '0', '26'), 
('103', 'Peninha;', '0', '26'), 
('104', 'Gastão;', '1', '26');

-- Pergunta 27
INSERT INTO `question` (`id`, `desc`) VALUES ('27', 'Alimento à base de milho verde ralado, que é cozido em saquinhos feitos com a palha do  próprio milho:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('105', 'Canjica', '0', '27'), 
('106', 'Cuzcuz', '0', '27'), 
('107', 'Mingau', '0', '27'), 
('108', 'Pamonha', '1', '27');

-- Pergunta 28
INSERT INTO `question` (`id`, `desc`) VALUES ('28', 'Ametista é:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('109', 'Uma pedra preciosa de cor púrpura ou violeta;', '1', '28'), 
('110', 'Planta violeta muito perfumada e cobiçada pela indústria cosmética;', '0', '28'), 
('111', 'Uma espécie de colar usado pelos índios como símbolo de proteção;', '0', '28'), 
('112', 'Um elemento químico muito usado para polir metais;', '0', '28');

-- Pergunta 29
INSERT INTO `question` (`id`, `desc`) VALUES ('29', 'Um dos itens abaixo se parece menos com os outros quatro.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('113', 'Macarrão', '0', '29'), 
('114', 'Biscoito', '0', '29'), 
('115', 'Pipoca', '0', '29'), 
('116', 'Refrigerante', '1', '29');


-- Pergunta 30
INSERT INTO `question` (`id`, `desc`) VALUES ('30', 'Nomenclatura usada para designar o Tipo de vegetal que é produzido sem o uso de pesticidas, aditivos químicos, ou modificação genética.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('117', 'Adubado', '0', '30'), 
('118', 'Resistente', '0', '30'), 
('119', 'Orgânico', '1', '30'), 
('120', 'Transgênico', '0', '30');

-- Pergunta 31
INSERT INTO `question` (`id`, `desc`) VALUES ('31', 'Combustível vegetal usado em veículos automotivos derivado da Cana de Açúcar, milho, ou outro.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('121', 'Linhaça', '0', '31'), 
('122', 'Etanol', '1', '31'), 
('123', 'Petróleo', '0', '31'), 
('124', 'Querosene', '0', '31');

-- Pergunta 32
INSERT INTO `question` (`id`, `desc`) VALUES ('32', 'Um dos países abaixo não está localizado no mesmo continente dos demais.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('125', 'Inglaterra', '0', '32'), 
('126', 'Alemanha', '0', '32'), 
('127', 'Itália', '0', '32'), 
('128', 'Egito', '1', '32');

-- Pergunta 33
INSERT INTO `question` (`id`, `desc`) VALUES ('33', 'Um dos objetos indicados não pertence ao mesmo grupo dos outros.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('129', 'Vassoura', '0', '33'), 
('130', 'Escova', '0', '33'), 
('131', 'Espanador', '0', '33'), 
('132', 'Almofada', '1', '33');

-- Pergunta 34
INSERT INTO `question` (`id`, `desc`) VALUES ('34', 'Ponta de terra que avança para dentro do mar.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('133', 'Praia', '0', '34'), 
('134', 'Cabo', '1', '34'), 
('135', 'Enseada', '0', '34'), 
('136', 'Recôncavo', '0', '34');

-- Pergunta 35
INSERT INTO `question` (`id`, `desc`) VALUES ('35', 'Uma das modalidades esportivas abaixo não combina com as outras.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('137', 'Tênis', '0', '35'), 
('138', 'Futebol', '1', '35'), 
('139', 'Sinuca', '0', '35'), 
('140', 'Beisebol', '0', '35');

-- Pergunta 36
INSERT INTO `question` (`id`, `desc`) VALUES ('36', 'A palavra "Panarício" significa:');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('141', 'Recorte de tecido muito pequeno ', '0', '36'), 
('142', 'Adesivo usado para colar botões ', '0', '36'), 
('143', 'Inflamação em volta da unha', '1', '36'), 
('144', 'Inflamação no Olho', '0', '36');

-- Pergunta 37
INSERT INTO `question` (`id`, `desc`) VALUES ('37', 'Capital brasileira conhecida como a Terra da Garoa.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('145', 'Belo Horizonte', '0', '37'), 
('146', 'São Paulo ', '1', '37'), 
('147', 'Porto Alegre ', '0', '37'), 
('148', 'Recife', '0', '37');

-- Pergunta 38
INSERT INTO `question` (`id`, `desc`) VALUES ('38', 'As fibras são ingredientes necessários para...');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('149', 'O aumento de peso do indivíduo.', '0', '38'), 
('150', 'O fortalecimento dos músculos.', '0', '38'), 
('151', 'Regular o intestino e equilibrar os níveis de gordura no organismo.', '1', '38'), 
('152', 'Melhoria da memória recente.', '0', '38');

-- Pergunta 39
INSERT INTO `question` (`id`, `desc`) VALUES ('39', 'Um dos alimentos a seguir é uma fonte pobre em fibras.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('153', 'Inhame.', '0', '39'), 
('154', 'Macaxeira.', '0', '39'), 
('155', 'Pão integral.', '0', '39'), 
('156', 'Cachorro quente com refrigerante.', '1', '39');

-- Pergunta 40
INSERT INTO `question` (`id`, `desc`) VALUES ('40', 'Apenas uma das afirmações sobre a vitamina "A" está CERTA.');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('157', 'Fortalece os ossos das mãos.', '0', '40'), 
('158', 'Melhora a força muscular.', '0', '40'), 
('159', 'Melhora a memória recente.', '0', '40'), 
('160', 'Tonifica os cabelos, olhos, pele e mucosas.', '1', '40');

-- Pergunta 41
INSERT INTO `question` (`id`, `desc`) VALUES ('41', 'NÃO é uma fonte de vitamina "C"...');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('161', 'Tomate', '0', '41'), 
('162', 'Acerola', '0', '41'), 
('163', 'As carnes', '1', '41'), 
('164', 'Laranja', '0', '41');

-- Pergunta 42
INSERT INTO `question` (`id`, `desc`) VALUES ('42', 'Uma das respostas abaixo está CORRETA');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('165', 'Miopia é uma deformação das unhas.', '0', '42'), 
('166', 'As cáries são causadas especialmente pelo gelo.', '0', '42'), 
('167', 'Meningite é uma infecção no nariz.', '0', '42'), 
('168', 'A luz do Sol é uma das melhores fontes de vitamina "D".', '1', '42');

-- Pergunta 43
INSERT INTO `question` (`id`, `desc`) VALUES ('43', 'A carência de vitamina "K" produz em nosso corpo...');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('169', 'Fraqueza muscular.', '0', '43'), 
('170', 'Sono.', '0', '43'), 
('171', 'Uma tendência ao surgimento de sangramentos.', '1', '43'), 
('172', 'Inquietação.', '0', '43');


-- Pergunta 44
INSERT INTO `question` (`id`, `desc`) VALUES ('44', 'As afirmativas abaixo estão CORRETAS, exceto UMA');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('173', 'Açúcar refinado reduz a absorção de Cálcio pelo organismo.', '0', '44'), 
('174', 'O excesso de Sal no organismo REDUZ a pressão arterial.', '1', '44'), 
('175', 'A Vitamina "E" é um dos melhores agentes contra o STRESS.', '0', '44'), 
('176', 'A carência de vitamina "A" enfraquece os cabelos.', '0', '44');

-- Pergunta 45
INSERT INTO `question` (`id`, `desc`) VALUES ('45', 'As afirmativas abaixo estão CORRETAS, exceto UMA');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('177', 'O cigarro provoca o envelhecimento irreversível da pele.', '0', '45'), 
('178', 'O cigarro MELHORA a capacidade Cardiovascular.', '1', '45'), 
('179', 'A fumaça do cigarro diminui a capacidade respiratória.', '0', '45'), 
('180', 'O cigarro provoca impotência masculina e promove a depressão.', '0', '45');

-- Pergunta 46
INSERT INTO `question` (`id`, `desc`) VALUES ('46', 'Um destes itens não pertence ao grupo');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('181', 'Liteira', '1', '46'), 
('182', 'Caiaque', '0', '46'), 
('183', 'Bote', '0', '46'), 
('184', 'Canoa', '0', '46');

-- Pergunta 47
INSERT INTO `question` (`id`, `desc`) VALUES ('47', 'Uma das afirmações abaixo está incorreta');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('185', 'Júpiter é um planeta do Sistema Solar.', '0', '47'), 
('186', 'Homeopatia é uma forma de tratamento para problemas de saúde.', '0', '47'), 
('187', 'Caieira é uma espécie de forno para cozimento de tijolos.', '0', '47'), 
('188', 'Timbó NÃO é uma espécie de planta narcótica usada para pescar.', '1', '47');

-- Pergunta 48
INSERT INTO `question` (`id`, `desc`) VALUES ('48', 'Identifique o ITEM que não está de acordo com os demais');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('189', 'Borboleta', '1', '48'), 
('190', 'Embuá', '0', '48'), 
('191', 'Aranha', '0', '48'), 
('192', 'Escorpião', '0', '48');

-- Pergunta 49
INSERT INTO `question` (`id`, `desc`) VALUES ('49', 'Tipo de Acessório usado pelos índios para selar acordos de paz');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('193', 'Cachimbo', '1', '49'), 
('194', 'Maracá', '0', '49'), 
('195', 'Peteca', '0', '49'), 
('196', 'Apito', '0', '49');

-- Pergunta 50
INSERT INTO `question` (`id`, `desc`) VALUES ('50', 'Um dos grupos abaixo tem um elemento indevido no meio');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('197', 'Laranja, limão, lima.', '0', '50'), 
('198', 'Cama, travesseiro, colchão.', '0', '50'), 
('199', 'Comunismo, democracia, autoritarismo.', '0', '50'), 
('200', 'Feijão, ervilha, pudim.', '1', '50');

-- Pergunta 51
INSERT INTO `question` (`id`, `desc`) VALUES ('51', 'Um dos itens a seguir não está relacionado à informática');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('201', 'Manivela', '1', '51'), 
('202', 'Porta serial', '0', '51'), 
('203', 'Mouse', '0', '51'), 
('204', 'Teclado', '0', '51');

-- Pergunta 52
INSERT INTO `question` (`id`, `desc`) VALUES ('52', 'Descubra qual das afirmações abaixo que é a verdadeira');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('205', 'Fotofobia é a mesma coisa que medo de fotografias.', '0', '52'), 
('206', 'Agorafobia é o medo de lugares fechados.', '0', '52'), 
('207', 'Winchester é outro nome para identificar o Disco Rígido ou HD.', '1', '52'), 
('208', 'Ágata é um tipo de madeira nobre usada para fazer espetos.', '0', '52');

-- Pergunta 53
INSERT INTO `question` (`id`, `desc`) VALUES ('53', 'Um dos alimentos abaixo NÃO contém a chamada Gordura Trans');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('209', 'Óleo de coco extra virgem.', '1', '53'), 
('210', 'Óleo vegetal.', '0', '53'), 
('211', 'Margarina.', '0', '53'), 
('212', 'Margarina light.', '0', '53');
