-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2024 at 10:54 PM
-- Server version: 10.4.33-MariaDB-log
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aryana_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_detail` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `product_detail`, `status`) VALUES
('Vm1K8ScRzgkVzNuZw2gh', 'Americano', '2', 'Americano.jpg', 'Made by diluting an espresso with hot water, giving it a similar strength to drip coffee but with a different flavor.', 'active'),
('MeFCHkRgqnWr4CajyE1W', 'Cappuccino', '4', 'Cappuccino.jpeg', 'Similar to a latte but with a thicker layer of milk foam and often equal parts espresso, steamed milk, and foam.\r\n\r\n', 'active'),
('zNlVwhwQ5aPQAMQ2WUx0', 'Latte', '3', 'latte.jpg', 'A combination of espresso and steamed milk, topped with a small amount of milk foam.', 'active'),
('nqSg5uPtYj5iTNdeo7A8', 'Macchiato', '6', 'caramel-macchiato.jpg', 'An espresso &#34;stained&#34; or &#34;marked&#34; with a small amount of steamed milk or foam.', 'active'),
('HahU1LE8IZ8ITok8fkwh', 'Mocha', '5', 'Mocha.jpg', 'A latte with added chocolate syrup or cocoa powder, sometimes topped with whipped cream.', 'active'),
('gVjUTxMv9b9wJiHz6elD', 'Black Tea', '1', 'Black Tea.jpg', 'A fully oxidized tea known for its robust flavor and dark color, made from the leaves of the Camellia sinensis plant.', 'active'),
('x1aslSCyCXUqzC4RbDSb', 'Green Tea', '1', 'green-tea.webp', 'A lightly oxidized tea known for its delicate flavor and light green color, made from the unfermented leaves of the Camellia sinensis plant.', 'active'),
('C7c7Y0mmjUorMEzmZmJh', 'Cold Brew', '3', 'cold_brew.webp', 'A smooth, less acidic coffee made by steeping coarsely ground coffee beans in cold water for an extended period.', 'active'),
('1AFJFfGU3tkJH7vyKUrA', 'Ice Coffee', '2', 'ice_coffee.webp', 'A chilled coffee beverage made by brewing hot coffee and then cooling it over ice.', 'active'),
('p14Y0UVM32sIwuxzLZVO', 'Mango Slush', '7', 'Mango-Slush.jpg', 'A refreshing frozen drink made by blending ice, mango puree, and sweeteners.', 'active'),
('I6s5ARVDqL9SPXfKVVNN', 'Strawberry Slush', '7', 'Strawberry-Slush.jpg', 'A chilled, fruity beverage created by mixing ice, fresh strawberries, and sweeteners.', 'active'),
('E3M0SPA7Nb0MDaqhT904', 'Watermelon Slush', '7', 'watermelon-slush.jpg', 'A cooling summer drink made with blended ice, fresh watermelon, and sweeteners.', 'active'),
('4qEbDesgtLYUweNWbwJR', 'Oreo Frappé', '8', 'oreofr.webp', 'a creamy, blended beverage combining ice, milk, coffee, and Oreo cookies.', 'active');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
