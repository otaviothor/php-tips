CREATE DATABASE `phptips`;
USE `phptips`;

CREATE TABLE `users` (
  `id` INT(11) NOT NULL,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `genre` VARCHAR(10) DEFAULT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT current_TIMESTAMP() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
);

ALTER TABLE `users` ADD PRIMARY KEY (`id`);

ALTER TABLE `users` MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;
