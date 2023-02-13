CREATE TABLE students
(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    surname VARCHAR(255),
    birthday DATE,
    phone VARCHAR(255),
    description VARCHAR(255),
    image VARCHAR(255),
    has_experience BOOLEAN DEFAULT(FALSE)
);

ALTER TABLE students ADD profession VARCHAR(255) DEFAULT 'Unknown';
ALTER TABLE students MODIFY profession VARCHAR(200);
ALTER TABLE students RENAME COLUMN profession TO position;
ALTER TABLE students DROP COLUMN position;
