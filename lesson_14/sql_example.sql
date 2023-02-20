SELECT p.id, p.name, sum(pq.quantity) as quantity FROM `products` as p
LEFT JOIN product_quantity as pq ON p.id = pq.product_id
group by name;

SELECT p.id, p.name, pf.name, pfv.value FROM `products` as p
INNER JOIN product_feature_values as pfv ON pfv.product_id = p.id
INNER JOIN product_feature as pf ON pfv.feature_id = pf.id
WHERE p.id = 1;

SELECT p.name, c.name, pp.price, cur.unit FROM `products` as p
LEFT JOIN categories as c ON p.category_id = c.id
LEFT JOIN product_prices as pp ON p.id = pp.product_id
INNER JOIN currencies as cur ON cur.id = pp.currency_id
WHERE p.id = 1;
