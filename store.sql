SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET AUTOCOMMIT = 0;

START TRANSACTION;

SET time_zone = "+00:00";



--

-- Database: `store`

--



-- --------------------------------------------------------



--

-- Table structure for table `items`

--



CREATE TABLE `items` (

  `id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,

  `price` int(11) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Dumping data for table `items`

--



INSERT INTO `items` (`id`, `name`, `price`) VALUES

(1, 'Jaquet Droz', 36000),

(2, 'Blancpain', 57000),

(3, 'Quartz', 39000),

(4, 'GUOU', 37000),

(5, 'Eoniq', 45000),

(6, 'Tissot', 39000),

(7, 'Hasani', 50000),

(8, 'Baguette ', 40000),

(9, 'Sanda', 32000),

(10, 'Rolex', 60000),

(11, 'Gucci', 45000),

(12, 'SMAEL', 30000),

(13, 'Orologio Da Parete', 23000),

(14, 'Roman Skeleton', 25000),

(15, 'Eslabon', 25000),

(16, 'TBEST', 28000),

(17, 'Apple', 36000),

(18, 'Y6', 55000),

(19, 'Bozlun', 65000),

(20, 'iPhone', 63000);



-- --------------------------------------------------------



--

-- Table structure for table `users`

--



CREATE TABLE `users` (

  `id` int(11) NOT NULL,

  `name` varchar(255) NOT NULL,

  `email` varchar(255) NOT NULL,

  `password` varchar(255) NOT NULL,

  `contact` varchar(255) NOT NULL,

  `city` varchar(255) NOT NULL,

  `address` varchar(255) NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Dumping data for table `users`

--



INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES

(1, 'Manik Dash', 'manik99@gmail.com', 'e78672833e2b8c80e79d286cde6a1c4a', '9090909090', 'Shillong', 'in front of assam house, Dhankheti, Shillong, Meghalaya'),

(2, 'Mansis Dash', 'mansis@deka.com', '0fa624e3ad0ec67fc4f9c75f1015b209', '9898989898', 'Nalbari', 'assam'),

(3, 'Barry Allen', 'barryallen@gmail.com', '0aa42d4addee6016a46d0a29518e402a', '9878987898', 'Delhi', 'Central City');



-- --------------------------------------------------------



--

-- Table structure for table `users_items`

--



CREATE TABLE `users_items` (

  `id` int(11) NOT NULL,

  `user_id` int(11) NOT NULL,

  `item_id` int(11) NOT NULL,

  `status` enum('Added to cart','Confirmed') NOT NULL

) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--

-- Dumping data for table `users_items`

--



INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES

(2, 1, 6, 'Confirmed'),

(3, 1, 3, 'Confirmed'),

(4, 2, 4, 'Added to cart'),

(5, 1, 4, 'Confirmed'),

(6, 1, 6, 'Added to cart');



--

-- Indexes for dumped tables

--



--

-- Indexes for table `items`

--

ALTER TABLE `items`

  ADD PRIMARY KEY (`id`);



--

-- Indexes for table `users`

--

ALTER TABLE `users`

  ADD PRIMARY KEY (`id`);



--

-- Indexes for table `users_items`

--

ALTER TABLE `users_items`

  ADD PRIMARY KEY (`id`),

  ADD KEY `user_id` (`user_id`),

  ADD KEY `item_id` (`item_id`);



--

-- AUTO_INCREMENT for dumped tables

--



--

-- AUTO_INCREMENT for table `items`

--

ALTER TABLE `items`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;



--

-- AUTO_INCREMENT for table `users`

--

ALTER TABLE `users`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;



--

-- AUTO_INCREMENT for table `users_items`

--

ALTER TABLE `users_items`

  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;



--

-- Constraints for dumped tables

--



--

-- Constraints for table `users_items`

--

ALTER TABLE `users_items`

  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`),

  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

COMMIT;

