CREATE TABLE `teachers` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `surname` VARCHAR(55) NULL,
    `name` VARCHAR(55) NOT NULL,
    `email` VARCHAR(55) NOT NULL,
    `phone` VARCHAR(55) NULL,
    `description` TEXT NULL,
    `image_url` VARCHAR(255) NULL
);

CREATE TABLE `partners` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(55) NOT NULL,
    `description` TEXT NULL,
    `image_url` VARCHAR(255) NULL,
    `is_display` BOOLEAN NULL DEFAULT TRUE,
);

CREATE TABLE `courses` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(55) NOT NULL,
    `description` TEXT NULL,
    `is_display` BOOLEAN NOT NULL DEFAULT TRUE,
    `start_date` DATETIME NOT NULL,
    `end_date` DATETIME NOT NULL
);

CREATE TABLE `articles` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `title` VARCHAR(55) NOT NULL,
    `content` TEXT NOT NULL,
    `is_draft` BOOLEAN NOT NULL DEFAULT FALSE,
    `publication_at` DATETIME NOT NULL,
    `slug` VARCHAR(255) NULL,
    `image_url` VARCHAR(255) NOT NULL
);

CREATE TABLE `students` (
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(55) NOT NULL,
    `description` TEXT NOT NULL,
    `email` VARCHAR(55) NOT NULL,
    `phone` VARCHAR(55) NULL
);
