INSERT INTO `question` (`id`, `desc`) VALUES ('1', 'Porque a galinha atravessou a rua?'), ('2', 'Quanto é 1 + 1?');


INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('1', 'Pra chegar ao outro lado', '1', '1'), 
('2', 'Pois ela estava afim', '0', '1'), 
('3', 'Não sei cara', '0', '1'), 
('4', 'Tanto faz, na real', '0', '1');

INSERT INTO `question_option` (`id`, `desc`, `correct_answer`, `question_id`) VALUES 
('5', '1 + 1 = 9', '0', '2'), 
('6', '1 + 1 = 3', '0', '2'), 
('7', '1 + 1 = 2', '1', '2'), 
('8', '1 + 1 = 45', '0', '2');