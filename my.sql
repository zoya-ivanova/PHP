-- 2. Создать файл my.sql, в котором должна создаваться таблица 
-- с информацией об одногруппниках. В таблице должно быть четыре поля: 
-- id, name, age, address. Все поля в таблице обязательны для заполнения.
-- Необходимо добавить 5-10 одногруппников в данную таблицу.
-- Необходимо написать запрос на получение имен всех одногруппников 
-- (только имен, без всего остального), которые живут в Москве и их возраст находится в диапазоне [18, 30) лет.

-- Ничего лучше не придумала как уменьшить до 29 лет.

-- create
CREATE TABLE GROUPMATES (
  Id INTEGER PRIMARY KEY AUTO_INCREMENT,
  name TEXT NOT NULL,
  age TEXT NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO GROUPMATES (name, age, address) VALUES ('Иванов Иван', '30', 'г.Москва');
INSERT INTO GROUPMATES (name, age, address) VALUES ('Петрова Мария', '21', 'г.Москва');
INSERT INTO GROUPMATES (name, age, address) VALUES ('Сидоров Борис', '20', 'г.Видное');
INSERT INTO GROUPMATES (name, age, address) VALUES ('Михайлова Елена', '18', 'г.Москва');
INSERT INTO GROUPMATES (name, age, address) VALUES ('Ельцина Юлия', '18', 'г.Химки');
INSERT INTO GROUPMATES (name, age, address) VALUES ('Мишин Сергей', '17', 'г.Москва');
INSERT INTO GROUPMATES (name, age, address) VALUES ('Чебыкина Анна', '20', 'г.Химки');

-- fetch 
SELECT name FROM GROUPMATES WHERE address = 'г.Москва' AND age BETWEEN 18 AND 29


