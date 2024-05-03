-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 05:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypharm`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(50) NOT NULL,
  `MRP (₹)` float NOT NULL,
  `Manufacturer` text NOT NULL,
  `MFG_DATE` date NOT NULL,
  `EXP_DATE` date NOT NULL,
  `Packaging` text DEFAULT NULL,
  `Location_Code` varchar(10) NOT NULL,
  `Storage_Requirements` text DEFAULT NULL,
  `How_To_Use` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`Product_ID`, `Product_Name`, `MRP (₹)`, `Manufacturer`, `MFG_DATE`, `EXP_DATE`, `Packaging`, `Location_Code`, `Storage_Requirements`, `How_To_Use`) VALUES
('PID1', 'AB-Flo-N 100mg / 600mg Tablet (10\'S)', 207.25, 'Lupin Ltd', '2022-01-01', '2022-12-23', 'Strip of 10 Tablet', 'A1', 'N/A', 'AB-Flo-N 100mg/600mg Tablet (10\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID10', 'Hopace 10mg Tablet (10\'S)', 236.5, 'Micro Labs Ltd', '2022-01-10', '2023-04-02', 'Strip of 10 Tablet', 'D8', 'Store at a temperature range of 15 to 30 degree C. in a well closed container and protect from moisture.', 'Hopace 10mg Tablet (10\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID11', 'Biocid 20mg Capsule (10\'S)', 24.55, 'Biochem Pharmaceutical Industries', '2022-01-11', '2022-12-12', 'Strip of 10 Capsule', 'D8', 'Store at 15 - 30 degree C in a tightly closed container. Protect from light.', 'Biocid 20mg Capsule (10\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID12', 'Biocilin 500mg (Injection)', 20.13, 'Biochem Pharmaceutical Industries', '2022-01-12', '2023-01-25', 'Vial of 1 Injection', 'C8', 'Store the drug at 15 - 30 degree C in a tightly closed container. Keep out of the reach of children', 'N/A'),
('PID13', 'Divacon 500mg Tablet (10\'S)', 93, 'Mayflower India', '2022-01-13', '2023-01-25', 'Strip of 10 Tablet', 'B4', 'Store at 15 - 30 degree C. Protect from heat and light. Keep out of the reach of children', 'Divacon 500mg Tablet (10\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID14', 'Divakon 500mg Tablet (10\'S)', 120, 'Ikon Pharmachem Pvt Ltd', '2022-01-01', '2023-01-25', 'Strip of 10 Tablet', 'A1', 'Store at 15 - 30 degree C. Protect from heat and light. Keep out of the reach of children', 'Divakon 500mg Tablet (10\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID15', 'Doctor\'s Best Glucosamine Sulfate with GreenGrown ', 2485, 'Doctor\'s Best Inc', '2022-01-15', '2023-01-25', 'Bottle of 180 Vegicap', 'E3', 'Store in cool (<30 degree C) and dark place', 'N/A'),
('PID16', 'Dolima D3 Capsule (8\'S)', 263.78, 'Sun Pharmaceutical Industries Ltd', '2022-01-16', '2022-11-01', 'Strip of 8 Capsule', 'B4', 'N/A', 'N/A'),
('PID17', 'Dolo 650mg Tablet (15\'S)', 30.91, 'Micro Labs Ltd', '2022-01-13', '2023-02-25', 'Strip of 15 Tablet', 'C8', 'Store at 15-30 degree C in a tightly closed container. Protect from heat and moisture. Keep out of the reach of children.', 'N/A'),
('PID18', 'Duronet Eye Drop (5ml)', 136, 'Sunways India Pvt Ltd', '2022-04-09', '2023-02-25', 'Packet of 5ml Eye Drop', 'D8', 'N/A', 'N/A'),
('PID19', 'DV Para 250mg Oral Suspension (60ml)', 35, 'Dvm Life Sciences Pvt Ltd', '2022-01-19', '2022-12-12', 'Bottle of 60ml Oral Suspension', 'E3', 'Store at 15-30 degree C in a tightly closed container. Protect from heat and moisture. Keep out of the reach of children.', 'N/A'),
('PID2', 'Aceclo 100mg Tablet (10\'S)', 48, 'Aristo Pharmaceuticals Pvt Ltd', '2022-01-13', '2022-11-01', 'Strip of 10 Tablet', 'A1', 'Store below 25 degree C', 'Aceclo 100mg Tablet (10\'S) is to be taken with food.'),
('PID20', 'Enoxarin 40mg Injection', 427.93, 'Zuventus Healthcare Ltd', '2022-01-25', '2023-05-02', 'Prefilled Syringe of 0.4ml Injection', 'C8', 'N/A', 'N/A'),
('PID21', 'Eptoin 300mg Tablet ER (30\'S)', 195.48, 'Abbott', '2022-01-21', '2023-04-01', 'Bottle of 30 Tablet Er', 'B4', 'Store at 15 - 30 degree C. Protect from heat, light and moisture', 'N/A'),
('PID22', 'Eufox 400mg Tablet (10\'S)', 61.12, 'Lupin Ltd', '2022-04-09', '2023-04-02', 'Strip of 10 Tablet', 'A1', 'Store at 15 - 30 degree C in a tightly closed container.', 'Eufox 400mg Tablet (10\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID23', 'Exifine Cream (10gm)', 49.88, 'Dr Reddy\'s Laboratories Ltd', '2022-01-23', '2023-04-01', 'Tube of 10gm Cream', 'E3', 'The drug should be kept at 30 degree C.Keep away from moisture and light.', 'N/A'),
('PID24', 'Fair & Lovely Men\'s Face Wash Instant Oil Clear (1', 146, 'Hindustan Unilever Ltd', '2022-01-24', '2023-04-02', 'Tube of 100gm Face Wash', 'B4', 'N/A', 'N/A'),
('PID25', 'Famtac 20mg Soflets', 19.9, 'Abbott', '2022-01-25', '2022-12-23', 'Strip of 14 Soflets', 'C8', 'Store at 15 - 30 degree C in a tightly closed container. Protect from light.', 'Famtac 20mg Soflets is to be taken with food.'),
('PID26', 'Faronac 200mg Tablet (6\'S)', 535, 'Micro Labs Ltd', '2022-01-26', '2023-02-25', 'Strip of 6 Tablet', 'D8', 'N/A', 'Faronac 200mg Tablet (6\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID27', 'Faxim 1000mg Dry Syrup (30ml)', 33.75, 'Abbott', '2022-01-01', '2023-02-25', 'Bottle of 30ml Dry Syrup', 'A4', 'N/A', 'Faxim 1000mg Dry Syrup (30ml) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID28', 'Gastrium 10mg Tablet DT (10\'S)', 25.2, 'Micro Labs Ltd', '2022-01-13', '2023-02-25', 'Strip of 10 Tablet Dt', 'S3', 'Store at room temperature (15 - 30 degree C). Protect from direct sun light and moisture', 'Gastrium 10mg Tablet DT (10\'S) is to be taken empty stomach.'),
('PID29', 'Gecycle 50mg Injection (1ml)', 3087.5, 'Indoco Remedies Ltd', '2022-01-29', '2023-08-11', 'Vial of 1ml Injection', 'S1', 'N/A', 'N/A'),
('PID3', 'Acgel Nano Gel (15gm)', 92, 'Rapross Pharmaceuticals Pvt Ltd', '2022-01-25', '2022-12-12', 'Tube of 15gm Gel', 'A2', 'Store in a cool dark place. Keep away from heat and moisture.', 'N/A'),
('PID30', 'Glycomet 1gm Tablet SR (15\'S)', 61.49, 'USV Ltd', '2022-01-25', '2023-05-02', 'Strip of 15 Tablet Sr', 'S4', 'Store at room temperature at a range of 15 to 30 degree C. in a well closed container.Keep out of reach of children.', 'Glycomet 1gm Tablet SR (15\'S) is to be taken with food.'),
('PID31', 'M.V.I. Injection (10ml)', 25, 'USV Ltd', '2022-04-09', '2023-05-02', 'Ampoule of 10ml Injection', 'S3', 'N/A', 'N/A'),
('PID32', 'Rosuvas 10mg Tablet (15\'S)', 266, 'Rosuvastatin(10mg)', '2022-02-01', '2023-04-01', 'Strip of 15 Tablet', 'S1', 'Store at room temperature below 25 degree C.', 'N/A'),
('PID33', 'P Pan D 30mg / 40mg Capsule SR (10\'S)', 104.5, 'Domperidone(30mg), Pantoprazole(40mg)', '2022-02-02', '2023-04-01', 'Strip of 10 Capsule Sr', 'S4', 'N/A', 'P Pan D 30mg/40mg Capsule SR (10\'S) is to be taken empty stomach.\nTake it preferably 30 minutes before food.'),
('PID34', 'Intaglip-M Tablet (10\'S)', 93, 'Metformin(500mg), Vildagliptin(50mg)', '2022-02-03', '2023-08-30', 'Strip of 10 Tablet', 'A3', 'N/A', 'N/A'),
('PID35', 'Evion 400mg capsule (10\'S)', 32.7, 'Vitamin E(400mg)', '2022-02-04', '2023-04-01', 'Strip of 10 Capsule', 'A3', 'Store in a well closed container in a cool dry place. Protect from light.', 'N/A'),
('PID36', 'Telma 20mg Tablet (15\'S)', 61.33, 'Telmisartan(20mg)', '2022-02-05', '2023-08-30', 'Strip of 15 Tablet', 'A4', 'Store at room temperature at a range of 15 to 30 degree C. protects from direct heat and light and store in a tightly closed container. Do not remove blisters until just before taking tablets', 'N/A'),
('PID37', 'Zoryl 1mg Tablet (15\'S)', 60.48, 'Glimepiride(1mg)', '2022-01-13', '2022-12-23', 'Strip of 15 Tablet', 'S3', 'Store at room temperature at a range of 15 to 30 degree C. in a well closed container away from light. Protect from excess heat and moisture. Keep out of reach of children.', 'Zoryl 1mg Tablet (15\'S) is to be taken with food.'),
('PID38', 'Zoryl M 1 Forte Tablet (15\'S)', 157, 'Glimepiride(1mg), Metformin(1000mg)', '2022-04-09', '2023-12-23', 'Strip of 15 Tablet Pr', 'S1', 'N/A', 'Zoryl M 1 Forte Tablet (15\'S) is to be taken with food.\nZoryl M 1 Forte Tablet PR may cause stomach upset if taken empty stomach.'),
('PID39', 'Istamet 50mg / 500mg Tablet (15\'S)', 405.31, 'Sitagliptin(50mg), Metformin(500mg)', '2022-01-25', '2023-08-30', 'Strip of 15 Tablet', 'S4', 'N/A', 'N/A'),
('PID4', 'Denim P 500mg Tablet (10\'S)', 59.95, 'Dew Drops Lab', '2022-01-25', '2023-01-25', 'Strip of 10 Tablet', 'A4', 'Store at 15-30 degree C in a tightly closed container. Protect from heat and moisture. Keep out of the reach of children.', 'Denim P 500mg Tablet (10\'S) is to be taken with food.'),
('PID40', 'Telmikind 40mg Tablet (10\'S)', 34.85, 'Telmisartan(40mg)', '2022-01-01', '2023-08-30', 'Strip of 10 Tablet', 'B6', 'Store at room temperature at a range of 15 to 30 degree C. protects from direct heat and light and store in a tightly closed container. Do not remove blisters until just before taking tablets', 'N/A'),
('PID41', 'Glimestar-M 1 Tablet PR (10\'S)', 65.82, 'Glimepiride(1mg), Metformin(500mg)', '2022-02-10', '2023-09-30', 'Strip of 10 Tablet Pr', 'B4', 'N/A', 'N/A'),
('PID42', 'Amaryl M 1mg Tablet PR (15\'S)', 157.7, 'Glimepiride(1mg), Metformin(500mg)', '2022-04-09', '2023-08-30', 'Strip of 15 Tablet Pr', 'C8', 'N/A', 'N/A'),
('PID43', 'Oxra 10mg Tablet (14\'S)', 420, 'Dapagliflozin(10mg)', '2022-02-12', '2023-02-14', 'Strip of 14 Tablet', 'D8', 'N/A', 'N/A'),
('PID44', 'Janumet 50 mg / 1000 mg Tablet (15\'S)', 415, 'Sitagliptin(50mg), Metformin(1000mg)', '2022-02-13', '2023-02-14', 'Strip of 15 Tablet', 'B6', 'N/A', 'N/A'),
('PID45', 'Arkamin Tablet (30\'S)', 66.05, 'Clonidine(100mcg)', '2022-01-25', '2022-12-23', 'Strip of 30 Tablet', 'B4', 'Store at room temperature.Protect from heat and light.Keep away from children.', 'Arkamin Tablet (30\'S) may be taken with or without food, but it is better to take it at a fixed time.'),
('PID5', 'Derinide 1mg Respules', 380.1, 'Zydus Cadila', '2022-01-13', '2022-11-01', 'Packet of 14 Respules', 'A5', 'Store at 20 to 25 degree C in a well closed container. Keep out of the reach of children.', 'N/A'),
('PID6', 'Hyphoral 200mg Tablet (10\'S)', 318, 'Ipca Laboratories Ltd', '2022-01-06', '2023-01-25', 'Strip of 10 Tablet', 'B6', 'The drug should be stored in room temperature. Keep away from moisture and sunlight.', 'Hyphoral 200mg Tablet (10\'S) is to be taken with food.'),
('PID7', 'Hyocimax-S 0.125mg Tablet MD', 49.5, 'Zydus Cadila', '2022-01-07', '2023-01-25', 'Strip of 10 Disintegrating Strip', 'B4', 'N/A', 'Hyocimax-S 0.125mg Tablet MD is to be taken empty stomach.'),
('PID8', 'Hyla Fusion Eye Drop (10ml)', 515, 'Entod Pharmaceuticals Ltd', '2022-04-08', '2023-01-25', 'Packet of 10ml Eye Drop', 'C8', 'Store in 2-8 degree C. Protect from freezing. Protect from light. It should be allowed to attain room temperature (approximately 30 minutes) prior to use.', 'N/A'),
('PID9', 'Hydrazide 25mg Tablet (10\'S)', 16.8, 'Cipla Ltd', '2022-04-09', '2023-04-02', 'Strip of 10 Tablet', 'D8', 'Store at room temperature in a well closed container and protected from light.', 'Hydrazide 25mg Tablet (10\'S) is to be taken with food.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
