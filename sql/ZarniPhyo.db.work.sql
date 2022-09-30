CREATE TABLE `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `description` varchar(255) NOT NULL,
 `quantity` decimal(10,0) NOT NULL,
 `uom` decimal(10,0) NOT NULL,
 `unit_price` decimal(10,0) NOT NULL,
 `amount` decimal(10,0) NOT NULL,
 PRIMARY KEY (`id`)
)
