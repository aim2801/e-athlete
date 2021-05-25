CREATE TABLE `company_sp` (
	`comp_sp_id` INT NOT NULL AUTO_INCREMENT,
	`sport` varchar(255) NOT NULL,
	`photo` varchar(255) NOT NULL,
	`comp_id` INT NOT NULL,
	PRIMARY KEY (`comp_sp_id`)
);

CREATE TABLE `users` (
	`users_id` INT NOT NULL AUTO_INCREMENT,
	`user_name` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	PRIMARY KEY (`users_id`)
);

CREATE TABLE `user` (
	`user_id` INT NOT NULL AUTO_INCREMENT,
	`first_name` varchar(255) NOT NULL,
	`last_name` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`zip` varchar(5) NOT NULL,
	`sex_id` INT(5) NOT NULL,
	`b_date` DATE NOT NULL,
	`users_id` INT NOT NULL,
	PRIMARY KEY (`user_id`)
);

CREATE TABLE `sex` (
	`sex_id` INT NOT NULL AUTO_INCREMENT,
	`sex` varchar(255) NOT NULL,
	PRIMARY KEY (`sex_id`)
);

CREATE TABLE `company` (
	`comp_id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`services` varchar(255) NOT NULL,
	`afm` varchar(9) NOT NULL,
	`doy` varchar(255) NOT NULL,
	`owner` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`area` varchar(255) NOT NULL,
	`street` varchar(255) NOT NULL,
	`number` varchar(6) NOT NULL,
	`zip` varchar(5) NOT NULL,
	`comp_users_id` INT(5) NOT NULL,
	`phone` varchar(10) NOT NULL,
	PRIMARY KEY (`comp_id`)
);

CREATE TABLE `comp_users` (
	`comp_users_id` INT NOT NULL AUTO_INCREMENT,
	`user_name` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	PRIMARY KEY (`comp_users_id`)
);

CREATE TABLE `kid` (
	`kid_id` INT NOT NULL AUTO_INCREMENT,
	`name` varchar(255) NOT NULL,
	`sex_id` INT(255) NOT NULL,
	`b_date` DATE NOT NULL,
	PRIMARY KEY (`kid_id`)
);

CREATE TABLE `user/kid` (
	`user_id` INT NOT NULL,
	`kid_id` INT NOT NULL
);

CREATE TABLE `kid_sport` (
	`kid_sport_id` INT NOT NULL AUTO_INCREMENT,
	`kid_id` INT NOT NULL,
	`comp_sp_id` INT NOT NULL,
	PRIMARY KEY (`kid_sport_id`)
);

CREATE TABLE `profile_comp` (
	`profile_comp_id` INT NOT NULL AUTO_INCREMENT,
	`comp_id` INT NOT NULL,
	`working_hours` varchar(255) NOT NULL,
	`summary` varchar(1200) NOT NULL,
	`comp_photo` varchar(255) NOT NULL,
	`documents` varchar(255) NOT NULL,
	`certificates` varchar(255) NOT NULL,
	PRIMARY KEY (`profile_comp_id`)
);

ALTER TABLE `company_sp` ADD CONSTRAINT `company_sp_fk0` FOREIGN KEY (`comp_id`) REFERENCES `company`(`comp_id`);

ALTER TABLE `user` ADD CONSTRAINT `user_fk0` FOREIGN KEY (`sex_id`) REFERENCES `sex`(`sex_id`);

ALTER TABLE `user` ADD CONSTRAINT `user_fk1` FOREIGN KEY (`users_id`) REFERENCES `users`(`users_id`);

ALTER TABLE `company` ADD CONSTRAINT `company_fk0` FOREIGN KEY (`comp_users_id`) REFERENCES `comp_users`(`comp_users_id`);

ALTER TABLE `kid` ADD CONSTRAINT `kid_fk0` FOREIGN KEY (`sex_id`) REFERENCES `sex`(`sex_id`);

ALTER TABLE `user/kid` ADD CONSTRAINT `user/kid_fk0` FOREIGN KEY (`user_id`) REFERENCES `user`(`user_id`);

ALTER TABLE `user/kid` ADD CONSTRAINT `user/kid_fk1` FOREIGN KEY (`kid_id`) REFERENCES `kid`(`kid_id`);

ALTER TABLE `kid_sport` ADD CONSTRAINT `kid_sport_fk0` FOREIGN KEY (`kid_id`) REFERENCES `kid`(`kid_id`);

ALTER TABLE `kid_sport` ADD CONSTRAINT `kid_sport_fk1` FOREIGN KEY (`comp_sp_id`) REFERENCES `company_sp`(`comp_sp_id`);

ALTER TABLE `profile_comp` ADD CONSTRAINT `profile_comp_fk0` FOREIGN KEY (`comp_id`) REFERENCES `company`(`comp_id`);

