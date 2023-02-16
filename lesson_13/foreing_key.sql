CREATE TABLE `teachers` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `surname` VARCHAR(55) NULL,
    `name` VARCHAR(55) NOT NULL,
    `course_id` INT NOT NULL,
    `email` VARCHAR(55) NOT NULL,
    `phone` VARCHAR(55) NULL,
    `description` TEXT NULL,
    `image_url` VARCHAR(255) NULL,
    FOREIGN KEY (course_id)  REFERENCES `courses` (id) ON DELETE CASCADE
);
