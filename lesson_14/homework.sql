SELECT l.id, c.title AS course_title, l.title, l.description FROM `lessons` AS l JOIN courses AS c ON c.id = l.course_id;
SELECT s.id, c.title, c.start_date, c.end_date,  s.name, s.phone, s.country FROM `courses` as c join course_student as cs on cs.course_id = c.id join students as s on s.id = cs.student_id;
