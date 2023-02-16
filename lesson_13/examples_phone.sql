DROP TABLE IF EXISTS products;

CREATE TABLE products
(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    manufacturer VARCHAR(20) NOT NULL,
    count INT DEFAULT 0,
    price DECIMAL NOT NULL
);

INSERT INTO products  (name, manufacturer, count, price) VALUES
('iPhone X', 'Apple', 3, 710),
('iPhone 8', 'Apple', 3, 560),
('Galaxy S9', 'Samsung', 6, 560),
('Galaxy S8', 'Samsung', 2, 460),
('Honor 10', 'Huawei', 3, 260);

SELECT DISTINCT manufacturer FROM products;
SELECT DISTINCT manufacturer, count FROM products;
SELECT * FROM products WHERE manufacturer IN ('Samsung', 'Apple');
SELECT * FROM products WHERE price BETWEEN 200 AND 500;
