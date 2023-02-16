-- Select all
SELECT * FROM students;
-- Select by column
SELECT name, description FROM students;
-- Select distinct
SELECT DISTINCT name FROM students;
-- Select where (= < > >= <= BETWEEN LIKE IN)
SELECT * FROM students where name = 'Ivan';
SELECT * FROM students where year BETWEEN 2000 AND 2010;
-- Select AND OR NOT
SELECT * FROM students WHERE city = 'Minsk' AND name = 'Ivan';
-- NULL , NOT NULL
SELECT * FROM students WHERE description IS NULL;
-- MIN MAX
SELECT MIN(year) FROM students;
-- COUNT, AVG, SUM
SELECT COUNT(salary) FROM teachers;
SELECT AVG(salary) FROM teachers;
-- AS
SELECT t.name as teaher_name FROM teachers as t where t.name = 'Ivan';
-- UNION
-- GROUP BY
SELECT * FROM students GROUP BY country
-- LIMIT
SELECT * FROM students LIMIT 2,3
