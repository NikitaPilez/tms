SELECT o.id, cus.name, cus.phone, o.pay_type as "payment type", p.name, c.name as "category name", s.address, s.work_hours, pp.price, cur.unit FROM `orders` AS o
INNER JOIN order_product AS op ON op.order_id = o.id
INNER JOIN products AS p ON p.id = op.product_id
INNER JOIN product_prices AS pp ON pp.product_id = p.id
INNER JOIN stores AS s ON s.id = pp.store_id
INNER JOIN currencies AS cur ON cur.id = pp.currency_id
INNER JOIN customers AS cus on cus.id = o.customer_id
LEFT JOIN categories AS c ON c.id = p.category_id
WHERE pp.store_id = 2 AND cus.id = 1;
