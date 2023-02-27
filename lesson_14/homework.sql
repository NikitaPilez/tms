SELECT l.id, c.title AS course_title, l.title, l.description FROM `lessons` AS l
JOIN courses AS c ON c.id = l.course_id;

SELECT s.id, c.title, c.start_date, c.end_date,  s.name, s.phone, s.country FROM `courses` as c
join course_student as cs on cs.course_id = c.id
join students as s on s.id = cs.student_id;

SELECT p.id, p.name, s.name, pp.price, c.unit FROM `products` AS p
INNER JOIN product_prices AS pp ON pp.product_id = p.id
INNER JOIN currencies AS c ON c.id = pp.currency_id
INNER JOIN stores AS s ON s.id = pp.store_id
WHERE p.id = 1;