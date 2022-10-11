-- Database: `usermanagement`
-- ---------------------------
-- Table structure for table `tblusers`

CREATE TABLE `tblusers` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `tblusers`

INSERT INTO `tblusers` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Address`, `CreationDate`, `Country`) VALUES
(13, 'jai', 'S', 9879887711, 'jai@gmail.com', 'Thiruvanmiyur,chennai', '2020-10-16 13:51:16', NULL),
(14, 'nikki', 's', 4654564111, 'nikki@gmail.com', 'London', '2020-10-16 15:21:12', NULL),
(20, 'geetha', 'boss', 908776543, 'geetha@gmail.com', 'london', '2021-03-03 05:42:04', NULL),
(34, 'dana', 's', 2323298830, 'sayhh@dsnm.com', 'London\r\n', '2021-10-19 06:36:47', NULL),
(36, 'hasan', 'd', 2987123390, 'sade12@gmail.com', 'Sweden', '2021-10-19 06:36:02', NULL),
(43, 'sagar', 'f', 3333333333, 'sagar@gmail.com', 'London', '2021-10-19 06:36:28', NULL);

-- Indexes for dumped tables

-- Indexes for table `tblusers`
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

-- AUTO_INCREMENT for dumped tables

-- AUTO_INCREMENT for table `tblusers`

ALTER TABLE `tblusers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;