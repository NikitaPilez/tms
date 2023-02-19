SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `products` (
`id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
`manufacturer` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
`count` int DEFAULT '0',
`price` decimal(10,0) NOT NULL,
`currency` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `products` (`id`, `name`, `manufacturer`, `count`, `price`, `currency`) VALUES
(1, 'Samsung max 7', 'Samsung', 22, '1674', 'BYN'),
(2, 'Huawei plus 6', 'Huawei', 8, '1527', 'EUR'),
(3, 'LG max 12', 'LG', 6, '1693', 'BYN'),
(4, 'iPhone galaxy 6', 'iPhone', 21, '2070', 'BYN'),
(5, 'Google max 10', 'Google', 11, '2186', 'EUR'),
(6, 'iPhone plus 12', 'iPhone', 3, '1134', 'EUR'),
(7, 'iPhone max 7', 'iPhone', 14, '1172', 'EUR'),
(8, 'Xiaomi max 13', 'Xiaomi', 17, '1029', 'USD'),
(9, 'Samsung mega 13', 'Samsung', 44, '1629', 'EUR'),
(10, 'Samsung mega 9', 'Samsung', 6, '1128', 'BYN'),
(11, 'Xiaomi ultra 10', 'Xiaomi', 30, '1811', 'EUR'),
(12, 'Xiaomi plus 11', 'Xiaomi', 34, '2807', 'EUR'),
(13, 'Samsung galaxy 5', 'Samsung', 24, '460', 'BYN'),
(14, 'Samsung plus 7', 'Samsung', 18, '2067', 'USD'),
(15, 'LG galaxy 8', 'LG', 35, '2262', 'USD'),
(16, 'Samsung plus 4', 'Samsung', 11, '2578', 'USD'),
(17, 'Xiaomi galaxy 13', 'Xiaomi', 37, '1426', 'USD'),
(18, 'Huawei galaxy 7', 'Huawei', 46, '170', 'BYN'),
(19, 'iPhone plus 13', 'iPhone', 2, '358', 'BYN'),
(20, 'Huawei plus 10', 'Huawei', 28, '384', 'BYN'),
(21, 'Samsung mega 6', 'Samsung', 28, '1940', 'USD'),
(22, 'Xiaomi max 13', 'Xiaomi', 24, '205', 'BYN'),
(23, 'Google ultra 8', 'Google', 20, '2716', 'BYN'),
(24, 'Samsung plus 9', 'Samsung', 48, '1760', 'EUR'),
(25, 'Xiaomi mega 10', 'Xiaomi', 34, '803', 'BYN'),
(26, 'Samsung plus 9', 'Samsung', 8, '909', 'BYN'),
(27, 'iPhone mega 10', 'iPhone', 0, '1723', 'BYN'),
(28, 'Huawei galaxy 6', 'Huawei', 18, '1608', 'BYN'),
(29, 'Huawei max 6', 'Huawei', 40, '2802', 'EUR'),
(30, 'LG ultra 10', 'LG', 30, '872', 'USD'),
(31, 'Google galaxy 12', 'Google', 20, '958', 'EUR'),
(32, 'iPhone galaxy 8', 'iPhone', 35, '2207', 'BYN'),
(33, 'Google ultra 5', 'Google', 16, '2941', 'USD'),
(34, 'LG plus 9', 'LG', 2, '2994', 'EUR'),
(35, 'Google mega 4', 'Google', 28, '2429', 'BYN'),
(36, 'Xiaomi ultra 9', 'Xiaomi', 41, '1194', 'BYN'),
(37, 'LG max 7', 'LG', 8, '2285', 'EUR'),
(38, 'iPhone mega 9', 'iPhone', 24, '1109', 'BYN'),
(39, 'Xiaomi plus 13', 'Xiaomi', 3, '2481', 'USD'),
(40, 'Xiaomi max 7', 'Xiaomi', 45, '2507', 'USD'),
(41, 'LG galaxy 3', 'LG', 37, '231', 'USD'),
(42, 'Google galaxy 11', 'Google', 15, '2676', 'EUR'),
(43, 'Samsung mega 13', 'Samsung', 8, '407', 'USD'),
(44, 'Google plus 13', 'Google', 42, '1160', 'EUR'),
(45, 'iPhone mega 12', 'iPhone', 22, '499', 'EUR'),
(46, 'Samsung mega 4', 'Samsung', 22, '1371', 'BYN'),
(47, 'Xiaomi galaxy 8', 'Xiaomi', 6, '1312', 'USD'),
(48, 'Samsung plus 8', 'Samsung', 8, '2381', 'BYN'),
(49, 'Xiaomi max 9', 'Xiaomi', 23, '1904', 'BYN'),
(50, 'iPhone plus 5', 'iPhone', 22, '1153', 'BYN'),
(51, 'iPhone mega 5', 'iPhone', 11, '1778', 'EUR'),
(52, 'Samsung max 9', 'Samsung', 37, '1046', 'USD'),
(53, 'Huawei max 5', 'Huawei', 17, '981', 'EUR'),
(54, 'LG ultra 9', 'LG', 18, '2905', 'EUR'),
(55, 'Google max 4', 'Google', 20, '883', 'EUR'),
(56, 'Google mega 10', 'Google', 6, '2683', 'EUR'),
(57, 'Samsung galaxy 10', 'Samsung', 40, '395', 'BYN'),
(58, 'iPhone galaxy 7', 'iPhone', 46, '2244', 'USD'),
(59, 'LG galaxy 9', 'LG', 24, '589', 'USD'),
(60, 'Huawei max 7', 'Huawei', 17, '1930', 'EUR'),
(61, 'Google mega 3', 'Google', 48, '1874', 'EUR'),
(62, 'Huawei galaxy 4', 'Huawei', 46, '2256', 'USD'),
(63, 'Samsung ultra 10', 'Samsung', 35, '1111', 'USD'),
(64, 'Xiaomi max 6', 'Xiaomi', 37, '2504', 'EUR'),
(65, 'LG galaxy 11', 'LG', 23, '502', 'BYN'),
(66, 'Google max 13', 'Google', 23, '2656', 'BYN'),
(67, 'Xiaomi mega 5', 'Xiaomi', 49, '531', 'BYN'),
(68, 'LG mega 11', 'LG', 5, '2837', 'EUR'),
(69, 'LG mega 6', 'LG', 49, '2283', 'USD'),
(70, 'Samsung max 13', 'Samsung', 11, '471', 'EUR'),
(71, 'Samsung plus 10', 'Samsung', 31, '2878', 'BYN'),
(72, 'Google ultra 11', 'Google', 15, '177', 'USD'),
(73, 'Google max 3', 'Google', 31, '1974', 'USD'),
(74, 'iPhone ultra 6', 'iPhone', 1, '747', 'USD'),
(75, 'Xiaomi ultra 11', 'Xiaomi', 24, '1584', 'BYN'),
(76, 'Huawei mega 5', 'Huawei', 35, '351', 'EUR'),
(77, 'Huawei mega 4', 'Huawei', 47, '1236', 'BYN'),
(78, 'Xiaomi max 7', 'Xiaomi', 43, '2921', 'BYN'),
(79, 'Xiaomi max 8', 'Xiaomi', 35, '1894', 'BYN'),
(80, 'Google galaxy 9', 'Google', 35, '1867', 'EUR'),
(81, 'Samsung ultra 7', 'Samsung', 25, '753', 'USD'),
(82, 'Samsung ultra 13', 'Samsung', 50, '269', 'USD'),
(83, 'Google galaxy 12', 'Google', 40, '175', 'BYN'),
(84, 'Huawei max 3', 'Huawei', 40, '545', 'BYN'),
(85, 'iPhone plus 4', 'iPhone', 42, '2024', 'BYN'),
(86, 'LG max 8', 'LG', 3, '1319', 'EUR'),
(87, 'Xiaomi max 8', 'Xiaomi', 39, '699', 'USD'),
(88, 'Samsung mega 3', 'Samsung', 33, '1350', 'USD'),
(89, 'Huawei mega 5', 'Huawei', 25, '166', 'EUR'),
(90, 'Google max 12', 'Google', 38, '2721', 'EUR'),
(91, 'LG ultra 8', 'LG', 20, '2982', 'BYN'),
(92, 'Xiaomi max 12', 'Xiaomi', 5, '2968', 'USD'),
(93, 'LG mega 13', 'LG', 3, '321', 'BYN'),
(94, 'Huawei max 11', 'Huawei', 20, '2070', 'BYN'),
(95, 'Samsung ultra 10', 'Samsung', 4, '1163', 'BYN'),
(96, 'Samsung plus 3', 'Samsung', 16, '2956', 'BYN'),
(97, 'Xiaomi ultra 9', 'Xiaomi', 7, '1238', 'EUR'),
(98, 'Samsung plus 11', 'Samsung', 20, '1616', 'EUR'),
(99, 'iPhone plus 10', 'iPhone', 10, '2478', 'EUR'),
(100, 'Samsung plus 11', 'Samsung', 18, '2189', 'BYN');

ALTER TABLE `products`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;
