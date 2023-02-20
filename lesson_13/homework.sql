-- Выбрать все телефоны которые есть в наличии, отсортировать по порядку алфавита
-- Сгрупировать все телефоны по моделям
-- Вывести все телефоны с моделью iPhone дороже 2000 рублей
-- Найти телефоны только линейки plus либо max
-- Найти телефон в наличии и ценовом диапазане от 1000 до 2000 р
-- Найти все телефоны моделей Google, iPhone, Samsung
-- Сделать запрос который выведет среднюю цену всех телефонов и количество таких телефонов сгруппированнах по моделям (использовать alias)
-- Сделать запрос который группирует телефоны по моделям, при этом сортирует это все по порядку алфавита

SELECT * FROM `products` WHERE count > 0 ORDER BY name;
SELECT * FROM `products` GROUP BY manufacturer;
SELECT * FROM `products` WHERE manufacturer = 'iphone' AND ((price > 2000 AND currency = 'BYN')  OR (price > 800 AND currency = 'USD') OR (price > 745 AND currency = 'EUR'));
SELECT * FROM `products` WHERE name LIKE '%plus%' OR name LIKE '%max%';
SELECT * FROM `products` WHERE count > 0 AND ((price BETWEEN 1000 and 2000 AND currency = 'BYN') OR (price BETWEEN 370 AND 740 AND currency = 'USD') OR (price BETWEEN 345 AND 690 AND currency = 'EUR'));
SELECT * FROM `products` WHERE manufacturer IN ('google', 'iphone', 'samsung');
SELECT SUM(count) AS amount, AVG(price) as average_price, manufacturer FROM `products` GROUP BY manufacturer ORDER BY amount;
SELECT * FROM `products` GROUP BY manufacturer ORDER BY manufacturer;
