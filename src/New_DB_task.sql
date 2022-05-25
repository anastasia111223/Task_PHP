CREATE DATABASE IF NOT EXISTS mysql_task1;
USE mysql_task1;
CREATE TABLE IF NOT EXISTS good (
id_good INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_good VARCHAR(50) NOT NULL,
discripton VARCHAR(255) NOT NULL,
quantity INT NOT NULL,
price FLOAT NOT NULL,
pic VARCHAR(255) DEFAULT 'goods.png'
);
CREATE TABLE IF NOT EXISTS category (
id_cat INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name_cat VARCHAR(100) NOT NULL
);
INSERT INTO good(name_good, discripton, quantity, price, pic)
VALUES ('Гитара','Струнный щипковый музыкальный инструмент.', 20, 25900, 'guitar.jpg'),
('Укулеле' ,'Струнный щипковый музыкальный инструмент.', 10, 7900, 'ukulele.jpg'),
('Пианино' ,'Клавишный струнный музыкальный инструмент.', 43, 55500, 'piano.jpg'),
('Барабаны' ,'Музыкальный инструмент из семейства ударных.', 15, 21500, 'drum.jpg'),
('Флейта' ,'Лабиальный духовой музыкальный инструмент.', 5, 43000, 'flute.jpg'),
('Чехол' ,'Чехол для акустической гитары.', 8, 2000, 'bag1.jpg'),
('Стойка' ,'Х-стойка для клавишных инструментов.', 8, 2000, 'lock.jpg');
INSERT INTO category(name_cat)
VALUES ('Музыкальные инструменты'),
('Аксессуары'),
('Гитара'),
('Клавишные инструменты');
CREATE TABLE IF NOT EXISTS goods_category (
    id_g INT NOT NULL,
    id_c INT NOT NULL,
    CONSTRAINT `FK_good` FOREIGN KEY (`id_g`) 
        REFERENCES `Good` (`id_good`) ON DELETE CASCADE,
    CONSTRAINT `FK_category` FOREIGN KEY (`id_c`) 
        REFERENCES `category` (`id_cat`) ON DELETE CASCADE
        );
INSERT INTO goods_category(id_g, id_c) VALUES
(1, 1),
(1, 3),
(2, 1),
(3, 1),
(3, 4),
(4, 1),
(5, 1),
(6, 2),
(6, 3),
(7, 2),
(7, 4);
