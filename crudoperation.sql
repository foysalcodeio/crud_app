create database crudoperation;
CREATE TABLE `crud` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `crud`(`id`, `name`, `email`, `mobile`, `password`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]');
INSERT INTO `crud`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')