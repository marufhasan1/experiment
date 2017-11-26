CREATE TABLE `daily_sale` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sale_date` date NOT NULL,
  `voucher_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sale_product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sale_product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `sale_price` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `products` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `purchase` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `voucher_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `purchase_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `stock_product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock_product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `stock_date` date NOT NULL,
  `purchase_price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sale_price` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `exp_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `supplier` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `supplier_address` text COLLATE utf8_unicode_ci NOT NULL,
  `supplier_note` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `privilege` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci; 
 
INSERT INTO `daily_sale` ( `id`, `sale_date`, `voucher_no`, `sale_product_id`, `sale_product_name`, `quantity`, `sale_price`) VALUES 
('1', '2016-10-25', '201610250001', '002', 'Product1', '16', '70'), 
('2', '2016-10-25', '201610250001', '001', 'Product1', '7', '60'), 
('3', '2016-10-25', '201610250001', '003', 'Product3', '12', '550'), 
('4', '2016-11-06', '201611060004', 'sg375', 'Sunsilk shampoo (gold) 375', '2', '260'), 
('5', '2016-11-06', '201611060004', 'sw375', 'Sunsilk shampoo (white) 375', '1', '260'), 
('6', '2016-11-06', '201611060004', 'sb375', 'Sunsilk shampoo (black) 375', '3', '260'), 
('7', '2016-11-14', '201611140007', 'ksc001', 'Kool shaving crem', '2', '60'), 
('8', '2016-11-30', '201611300008', '001', 'Product1', '40', '50'), 
('9', '2016-11-30', '201611300009', '002', 'Product1', '19', '60'), 
('10', '2017-02-17', '201702170010', '003', 'Product3', '1', '550');  



INSERT INTO `products` ( `id`, `company_name`, `product_name`, `product_brand`, `product_id`, `product_unit`, `date`) VALUES 
('10', 'FT Enterprise', 'Product1', 'Acme', '001', 'PCS', '2016-10-25'), 
('11', 'FT Enterprise', 'Product1', 'Uniliver', '002', 'PCS', '2016-10-25'), 
('12', 'FT Enterprise', 'Product3', 'Other', '003', 'PCS', '2016-10-25'), 
('13', 'Uniliver', 'Sunsilk shampoo (black) 375', 'Sunsilk', 'sb375', 'PCS', '2016-11-06'), 
('14', 'Uniliver', 'Sunsilk shampoo (gold) 375', 'Sunsilk', 'sg375', 'PCS', '2016-11-06'), 
('15', 'Uniliver', 'Sunsilk shampoo (white) 375', 'Sunsilk', 'sw375', 'PCS', '2016-11-06'), 
('16', 'Uniliver', 'Sunsilk shampoo (black) 275', 'Sunsilk', 'sb275', 'PCS', '2016-11-06'), 
('17', 'Uniliver', 'Sunsilk shampoo (gold) 275', 'Sunsilk', 'sg275', 'PCS', '2016-11-06'), 
('18', 'Uniliver', 'Sunsilk shampoo (white) 375', 'Sunsilk', 'sw275', 'PCS', '2016-11-06'), 
('19', 'Uniliver', 'Sunsilk shampoo (black) 75', 'Sunsilk', 'sb75', 'PCS', '2016-11-06'), 
('20', 'Uniliver', 'Sunsilk shampoo (gold) 75', 'Sunsilk', 'sg75', 'PCS', '2016-11-06'), 
('21', 'Uniliver', 'Sunsilk shampoo (white) 75', 'Sunsilk', 'sw75', 'PCS', '2016-11-06'), 
('22', 'PNG', 'Ghellete Fome', 'Ghellete ', 'gf001', 'PCS', '2016-11-14'), 
('23', 'PNG', 'Ghellete Gale', 'Ghellete', 'gg002', 'PCS', '2016-11-14'), 
('24', 'PNG', 'Ghellete Blade', 'Ghellete', 'gb003', 'PCS', '2016-11-14'), 
('25', 'Square', 'Jui hair oil', 'Jui', 'jho001', 'PCS', '2016-11-14'), 
('26', 'Square', 'Kool shaving crem', 'Kool', 'ksc001', 'PCS', '2016-11-14');  



INSERT INTO `purchase` ( `id`, `company_name`, `voucher_number`, `date`, `purchase_data`) VALUES 
('1', 'FT Enterprise', '1234', '2016-10-25', '[{"purchase_product_id":"001","purchase_quantity":"22","purchase_price":"50","purchase_sale_price":"60","purchase_exp_date":"2017-1-1"},{"purchase_product_id":"002","purchase_quantity":"32","purchase_price":"60","purchase_sale_price":"70","purchase_exp_date":"2017-1-1"},{"purchase_product_id":"003","purchase_quantity":"22","purchase_price":"500","purchase_sale_price":"550","purchase_exp_date":"2017-1-1"}]'), 
('2', 'FT Enterprise', '14521', '2016-10-25', '[{"purchase_product_id":"001","purchase_quantity":"15","purchase_price":"50","purchase_sale_price":"60","purchase_exp_date":"2017-1-1"}]'), 
('3', 'FT Enterprise', '555', '2016-11-06', '[{"purchase_product_id":"001","purchase_quantity":"4","purchase_price":"50","purchase_sale_price":"60","purchase_exp_date":"2-6-9"}]'), 
('4', 'FT Enterprise', '5555', '2016-11-06', '[{"purchase_product_id":"001","purchase_quantity":"4","purchase_price":"505","purchase_sale_price":"510","purchase_exp_date":"2-0-0"}]'), 
('5', 'FT Enterprise', 'dddfff', '2016-11-06', '[{"purchase_product_id":"002","purchase_quantity":"4","purchase_price":"50","purchase_sale_price":"60","purchase_exp_date":"2-0-0"}]'), 
('6', 'FT Enterprise', '5588', '2016-11-06', '[{"purchase_product_id":"001","purchase_quantity":"2","purchase_price":"505","purchase_sale_price":"510","purchase_exp_date":"2024-03-05"}]'), 
('7', 'Uniliver', '2016123', '2016-11-04', '[{"purchase_product_id":"sb375","purchase_quantity":"50","purchase_price":"237","purchase_sale_price":"260","purchase_exp_date":"2-0-0"},{"purchase_product_id":"sg375","purchase_quantity":"30","purchase_price":"237","purchase_sale_price":"260","purchase_exp_date":"0-1-1"},{"purchase_product_id":"sw375","purchase_quantity":"20","purchase_price":"237","purchase_sale_price":"260","purchase_exp_date":"1--"}]'), 
('8', 'Uniliver', '2016000', '2016-11-06', '[{"purchase_product_id":"sb375","purchase_quantity":"10","purchase_price":"237","purchase_sale_price":"260","purchase_exp_date":"2018-01-01"}]'), 
('9', 'Square', '00123456', '2016-11-14', '[{"purchase_product_id":"jho001","purchase_quantity":"20","purchase_price":"70","purchase_sale_price":"85","purchase_exp_date":"2017-01-01"},{"purchase_product_id":"ksc001","purchase_quantity":"20","purchase_price":"50","purchase_sale_price":"60","purchase_exp_date":"2018-01-01"}]'), 
('10', 'Square', '555566', '2016-11-14', '[{"purchase_product_id":"ksc001","purchase_quantity":"5","purchase_price":"50","purchase_sale_price":"60","purchase_exp_date":"2018-01-01"}]');  



INSERT INTO `sessions` ( `session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES 
('30a4661129536025d81b3548bd976c0d', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0', '1487648996', 'a:6:{s:9:"user_data";s:0:"";s:4:"name";s:11:"Maruf hasan";s:8:"username";s:10:"marufhasan";s:5:"image";s:36:"private/upload/users/users_62767.jpg";s:9:"privilege";s:5:"super";s:7:"logedin";b:1;}'), 
('3dc0c842f669ccc9c200c3cde9864d5b', '::1', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0', '1487739874', 'a:6:{s:9:"user_data";s:0:"";s:4:"name";s:11:"Maruf hasan";s:8:"username";s:10:"marufhasan";s:5:"image";s:36:"private/upload/users/users_62767.jpg";s:9:"privilege";s:5:"super";s:7:"logedin";b:1;}'), 
('a87b8ffc903ada3a76dcf18cf51501d2', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:51.0) Gecko/20100101 Firefox/51.0', '1487647875', 'a:6:{s:9:"user_data";s:0:"";s:4:"name";s:11:"Maruf hasan";s:8:"username";s:10:"marufhasan";s:5:"image";s:36:"private/upload/users/users_94710.jpg";s:9:"privilege";s:5:"super";s:7:"logedin";b:1;}');  



INSERT INTO `stock` ( `id`, `stock_product_id`, `stock_product_name`, `stock_quantity`, `stock_date`, `purchase_price`, `sale_price`, `exp_date`) VALUES 
('1', '001', 'Product1', '0', '2016-11-06', '505', '510', '2024-03-05'), 
('2', '002', 'Product1', '1', '2016-11-06', '50', '60', '0002-00-00'), 
('3', '003', 'Product3', '9', '2016-10-25', '500', '550', '2017-01-01'), 
('4', 'sb375', 'Sunsilk shampoo (black) 375', '57', '2016-11-06', '237', '260', '2018-01-01'), 
('5', 'sg375', 'Sunsilk shampoo (gold) 375', '28', '2016-11-06', '237', '260', '0000-01-01'), 
('6', 'sw375', 'Sunsilk shampoo (white) 375', '19', '2016-11-06', '237', '260', '0000-00-00'), 
('7', 'jho001', 'Jui hair oil', '20', '2016-11-14', '70', '85', '2017-01-01'), 
('8', 'ksc001', 'Kool shaving crem', '23', '2016-11-14', '50', '60', '2018-01-01');  



INSERT INTO `supplier` ( `id`, `company_name`, `supplier_name`, `supplier_mobile`, `supplier_email`, `supplier_id`, `supplier_address`, `supplier_note`, `date`) VALUES 
('3', 'FT Enterprise', 'Mokhlas', '64654654654654654', 'emarufhasan@gmail.com', 'asdfasdfasdf', 'asdfasdfasd', 'asdfasdfasdf', '2016-09-14'), 
('5', 'RA Computer', 'Abadul Haque Raju', '01711056715', 'abadulhaque@gmail.com', '00100', 'Golpukirpar,Mymensingh', '', '2016-09-25'), 
('6', 'Lotus Computer', 'Abdul baki', '017888999444', 'lotus@gmail.com', 'lotusmym', 'Mymesingh,Dhaka,Bangladesh', '', '2016-09-29'), 
('7', 'Uniliver', 'Montu', '', '', '001', '', '', '2016-11-06'), 
('8', 'PNG', 'Salim', '', '', '002', '', '', '2016-11-14'), 
('9', 'Square', 'Solaiman', '', '', '004', '', '', '2016-11-14');  



INSERT INTO `users` ( `id`, `name`, `birth_date`, `username`, `password`, `privilege`, `image`, `mobile`, `email`) VALUES 
('1', 'Maruf hasan', '1993-12-06', 'marufhasan', 'c178651dfcbfbac009b6f87832bbd39d', 'super', 'private/upload/users/users_62767.jpg', '01735189237', 'emarufhasan@gmail.com'); 