-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.infinityfree.com
-- Generation Time: Jun 16, 2024 at 02:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_36069592_database_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `database1`
--

CREATE TABLE `database1` (
  `id_no` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tanggal_lahir` varchar(20) DEFAULT NULL,
  `negara` varchar(20) DEFAULT NULL,
  `kelamin` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_tlp` varchar(20) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `website` varchar(20) DEFAULT NULL,
  `github` varchar(20) DEFAULT NULL,
  `twitter` varchar(20) DEFAULT NULL,
  `instagram` varchar(20) DEFAULT NULL,
  `facebook` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `database1`
--

INSERT INTO `database1` (`id_no`, `email`, `nama`, `tanggal_lahir`, `negara`, `kelamin`, `password`, `alamat`, `no_tlp`, `foto`, `website`, `github`, `twitter`, `instagram`, `facebook`) VALUES
(5, 'arifhida1647@gmail.com', 'arif hidayat', '2022-10-12', 'Australia', 'Pria', '$2y$10$Q6ssnH7rEsbhq2178aQrl.7K7fdjgY8.LSUSdHkf1ELnACoB9xX1e', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `database_card`
--

CREATE TABLE `database_card` (
  `no` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `Kategori` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(20) DEFAULT NULL,
  `image_resize` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `database_card`
--

INSERT INTO `database_card` (`no`, `nama`, `harga`, `Kategori`, `keterangan`, `image`, `image_resize`) VALUES
(1, 'Sons Of The Forest', '250.000,00', 'Survival', 'Every human inhabiting the world of Alcia is branded by a “Count” or a number written on their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss, never to be seen again. But her mother’s last words send Hina on a quest to find a legendary hero from the Waste War - the fabled Ace!', 'sotf_1.png', 'sotf_12.png'),
(2, 'Far Cry 6', '600.000,00', 'Survival', 'Welcome to Yara, a tropical paradise frozen in time. As the dictator of Yara, Antón Castillo is intent on restoring his nation to its former glory by any means necessary, with his son, Diego, following in his bloody footsteps. Their oppressive rule has ignited a revolution. Play as Dani Rojas, a local Yaran, as you fight alongside a modern-day guerrilla revolution to liberate Yara. Play the full game solo or with a friend in co-op.\r\n', 'far_cry6.png', 'far_cry62.png'),
(3, 'Call Of Duty Modern ', '1.040.000,00', 'Action', 'Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141. From small-scale, high-stakes infiltration tactical ops to highly classified missions, players will deploy alongside friends in a truly immersive experience.', 'cod.png', 'cod2.png'),
(4, 'Dead Space', '527.200,00', 'Action', 'The sci-fi survival-horror classic Dead Space™ returns, completely rebuilt from the ground up to offer a deeper, more immersive experience. This remake brings jaw-dropping visual fidelity, suspenseful atmospheric audio, and improvements to gameplay while staying faithful to the original game’s thrilling vision.', 'dead_space.png', 'dead_space2.png'),
(5, 'God Of War', '729.000,00', 'Adventure', 'With an over the shoulder camera that brings the player closer to the action than ever before, fights in God of War™ mirror the pantheon of Norse creatures Kratos will face: grand, gritty and grueling. A new main weapon and new abilities retain the defining spirit of the God of War series while presenting a vision of conflict that forges new ground in the genre.', 'gow.png', 'gow2.png'),
(6, 'FIFA 22', '659.000,00', 'Adventure', 'EA SPORTS™ FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology that delivers even more gameplay realism, both the men’s and women’s FIFA World Cup™ coming to the game as post-launch updates, the addition of women’s club teams, cross-play features*, and more. Experience unrivaled authenticity with over 19,000 players, 700+ teams, 100 stadiums, and over 30 leagues in FIFA 23.', 'FIFA2.png', 'FIFA22.png'),
(7, 'Need For Speed Unbou', '759.000,00', 'Racing', 'Tearing up the streets with friends brings more challenges, as Need for Speed™ Unbound Vol 2 introduces new ways to compare and compete with the squad in Lakeshore Online, and even more opportunities to risk it all for rewards. Hit up your homies for an exhilarating cop chase through the streets or battle it out on a packed grid, making the most of every twist and turn to outsmart your friends and let them know who runs these streets! Further your legacy by racing against the clock in Hot Laps events that bring an intense blast of speed for you to master your driving skills. There are even more new ways to play, with new Daily Challenges bringing different ways to earn fresh rewards to celebrate your driving skills, including the luxurious Mercedes-Maybach S 680 2021, and hot new Custom Build, Lotus Emira Balmain Edition 2021.', 'NFS.png', 'NFS1.png'),
(8, 'Forza Horizon 5', '50', 'Racing', 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars.', 'FORZA.png', 'FORZA2.png'),
(9, 'Dead Island 2', '527.200,00', 'Action', 'Paradise meets Hell!\r\nWelcome to the zombie apocalypse experience of a lifetime – and now more beautiful than ever. Caught in the midst of an epic zombie outbreak on the tropical island of Banoi, your only thought is: Survive!', 'dead_island1.png', 'dead_island2.png'),
(10, 'Cyberpunk 2077', '699.000,00', 'Adventure', 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the megalopolis of Night City, where you play as a cyberpunk mercenary wrapped up in a do-or-die fight for survival. Improved and featuring all-new free additional content, customize your character and playstyle as you take on jobs, build a reputation, and unlock upgrades. The relationships you forge and the choices you make will shape the story and the world around you. Legends are made here. ', 'cyberpunk1.png', 'cyberpunk2.png'),
(11, 'Starwars: Jedi Survival', '759.000,00', 'Adventure', 'The story of Cal Kestis continues in Star Wars Jedi: Survivor™, a third-person, galaxy-spanning, action-adventure game from Respawn Entertainment, developed in collaboration with Lucasfilm Games. This narratively driven, single-player title picks up 5 years after the events of Star Wars Jedi: Fallen Order™ and follows Cal’s increasingly desperate fight as the galaxy descends further into darkness. Pushed to the edges of the galaxy by the Empire, Cal will find himself surrounded by threats new and familiar. As one of the last surviving Jedi Knights, Cal is driven to make a stand during the galaxy’s darkest times — but how far is he willing to go to protect himself, his crew, and the legacy of the Jedi Order?', 'jedi1.png', 'jedi2.png'),
(12, 'Hogwarts Legacy', '700.000,00', 'Action', 'Hogwarts Legacy is an open-world action RPG set in the world first introduced in the Harry Potter books. Embark on a journey through familiar and new locations as you explore and discover magical beasts, customize your character and craft potions, master spell casting, upgrade talents and become the wizard you want to be.', 'hogwart1.png', 'hogwart12.png'),
(13, 'Ready or Not', '800.000,00', 'Action', 'Ready or Not is an intense, tactical, first-person shooter that depicts a modern-day world in which SWAT police units are called to defuse hostile and confronting situations.', 'ron1.png', 'ron12.png'),
(14, 'Resident Evil 4', '1.000.000,00', 'Action', 'Survival is just the beginning. Six years have passed since the biological disaster in Raccoon City. Leon S. Kennedy, one of the survivors, tracks the president\'s kidnapped daughter to a secluded European village, where there is something terribly wrong with the locals.', 'resident evil 1.png', 'resident evil 12.png'),
(15, 'Grounded', '459.000,00', 'Survival', 'The world is a vast, beautiful and dangerous place – especially when you have been shrunk to the size of an ant. Can you thrive alongside the hordes of giant insects, fighting to survive the perils of the backyard?', 'gounded1.png', 'gounded12.png'),
(16, 'NARAKA: BLADEPOINT', '220.000,00', 'Survival', 'NARAKA: BLADEPOINT is an up to 60-player PVP mythical action combat experience with martial arts inspired melee combat, gravity defying mobility, vast arsenals of melee & ranged weapons, legendary customizable heroes with epic abilities - inspired by the legends of the Far East.', 'naraka1.png', 'naraka12.png'),
(17, 'Raft', '135.999,00', 'Survival', 'Raft throws you and your friends into an epic oceanic adventure! Alone or together, players battle to survive a perilous voyage across a vast sea! Gather debris, scavenge reefs and build your own floating home, but be wary of the man-eating sharks!', 'raft.png', 'raft1.png'),
(18, 'DayZ', '550.000,00', 'Survival', 'How long can you survive a post-apocalyptic world? A land overrun with an infected \"zombie\" population, where you compete with other survivors for limited resources. Will you team up with strangers and stay strong together? Or play as a lone wolf to avoid betrayal? This is DayZ – this is your story.', 'Day_Z_cover1.png', 'Day_Z_cover12.png'),
(19, 'Assetto Corsa', '108.999,00', 'Racing', 'Assetto Corsa features an advanced DirectX 11 graphics engine that recreates an immersive environment, dynamic lighthing and realistic materials and surfaces. The advanced physics engine is being designed to provide a very realistic driving experience, including features and aspects of real cars, never seen on any other racing simulator such as tyre flat spots, heat cycles including graining and blistering, very advanced aerodynamic simulation with active movable aerodynamics parts controlled in real time by telemetry input channels, hybrid systems with kers and energy recovery simulation.', 'Assetto1.png', 'Assetto2.png'),
(20, 'LEGO 2K Drive', '649.000,00', 'Racing', 'Welcome to Bricklandia, home of a massive open-world LEGO® driving adventure. Race anywhere, play with anyone, build your dream rides, and defeat a cast of wild racing rivals for the coveted Sky Trophy!', 'leggo 3k drive.png', 'leggo 3k drive1.png'),
(21, 'The Crew 2', '515.000,00', 'Racing', 'Take on the American motorsports scene, discover exhilarating landscapes and pick your favorite vehicles among hundreds. Experience the thrill and excitement of competing across the USA as you test your skills in a wide range of disciplines. Record every heart-pounding moment and share them with the push of a button - fame is yours to take! Play with up to seven friends online.', 'the crew2.png', 'the crew21.png'),
(23, 'Horizon Zero Dawn', '729.000,00', 'Adventure', 'Experience Aloy’s legendary quest to unravel the mysteries of a future Earth ruled by Machines. Use devastating tactical attacks against your prey and explore a majestic open world in this award-winning action RPG!', 'horizon.png', 'horizon1.png'),
(24, 'Rust', '289.999,00', 'Adventure', 'The only aim in Rust is to survive. Everything wants you to die - the island’s wildlife and other inhabitants, the environment, other survivors. Do whatever it takes to last another night', 'rust.png', 'rust1.png');

-- --------------------------------------------------------

--
-- Table structure for table `database_card1`
--

CREATE TABLE `database_card1` (
  `no` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `Kategori` varchar(20) NOT NULL,
  `keterangan` text NOT NULL,
  `image` varchar(20) DEFAULT NULL,
  `image_resize` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `database_card1`
--

INSERT INTO `database_card1` (`no`, `nama`, `harga`, `Kategori`, `keterangan`, `image`, `image_resize`) VALUES
(1, 'Sons Of The Forest', '250.000,00', 'Survival', 'Every human inhabiting the world of Alcia is branded by a “Count” or a number written on their body. For Hina’s mother, her total drops to 0 and she’s pulled into the Abyss, never to be seen again. But her mother’s last words send Hina on a quest to find a legendary hero from the Waste War - the fabled Ace!', 'sotf_1.png', 'sotf_12.png'),
(2, 'Far Cry 6', '600.000,00', 'Survival', 'Welcome to Yara, a tropical paradise frozen in time. As the dictator of Yara, Antón Castillo is intent on restoring his nation to its former glory by any means necessary, with his son, Diego, following in his bloody footsteps. Their oppressive rule has ignited a revolution. Play as Dani Rojas, a local Yaran, as you fight alongside a modern-day guerrilla revolution to liberate Yara. Play the full game solo or with a friend in co-op.\r\n', 'far_cry6.png', 'far_cry62.png'),
(3, 'Call Of Duty Modern ', '1.040.000,00', 'FPS', 'Call of Duty®: Modern Warfare® II drops players into an unprecedented global conflict that features the return of the iconic Operators of Task Force 141. From small-scale, high-stakes infiltration tactical ops to highly classified missions, players will deploy alongside friends in a truly immersive experience.', 'cod.png', 'cod2.png'),
(4, 'Dead Space', '527.200,00', 'Action', 'The sci-fi survival-horror classic Dead Space™ returns, completely rebuilt from the ground up to offer a deeper, more immersive experience. This remake brings jaw-dropping visual fidelity, suspenseful atmospheric audio, and improvements to gameplay while staying faithful to the original game’s thrilling vision.', 'dead_space.png', 'dead_space2.png'),
(5, 'God Of War', '729.000,00', 'Action, Adventure', 'With an over the shoulder camera that brings the player closer to the action than ever before, fights in God of War™ mirror the pantheon of Norse creatures Kratos will face: grand, gritty and grueling. A new main weapon and new abilities retain the defining spirit of the God of War series while presenting a vision of conflict that forges new ground in the genre.', 'gow.png', 'gow2.png'),
(6, 'FIFA 22', '659.000,00', 'Simulation, Sports', 'EA SPORTS™ FIFA 23 brings The World’s Game to the pitch, with HyperMotion2 Technology that delivers even more gameplay realism, both the men’s and women’s FIFA World Cup™ coming to the game as post-launch updates, the addition of women’s club teams, cross-play features*, and more. Experience unrivaled authenticity with over 19,000 players, 700+ teams, 100 stadiums, and over 30 leagues in FIFA 23.', 'FIFA2.png', 'FIFA22.png'),
(7, 'Need For Speed Unbou', '759.000,00', 'Racing', 'Tearing up the streets with friends brings more challenges, as Need for Speed™ Unbound Vol 2 introduces new ways to compare and compete with the squad in Lakeshore Online, and even more opportunities to risk it all for rewards. Hit up your homies for an exhilarating cop chase through the streets or battle it out on a packed grid, making the most of every twist and turn to outsmart your friends and let them know who runs these streets! Further your legacy by racing against the clock in Hot Laps events that bring an intense blast of speed for you to master your driving skills. There are even more new ways to play, with new Daily Challenges bringing different ways to earn fresh rewards to celebrate your driving skills, including the luxurious Mercedes-Maybach S 680 2021, and hot new Custom Build, Lotus Emira Balmain Edition 2021.', 'NFS.png', 'NFS1.png'),
(8, 'Forza Horizon 5', '50', 'Racing', 'Your Ultimate Horizon Adventure awaits! Explore the vibrant and ever-evolving open world landscapes of Mexico with limitless, fun driving action in hundreds of the world’s greatest cars.', 'FORZA.png', 'FORZA2.png'),
(9, 'Dead Island 2', '527.200,00', 'Action', 'Paradise meets Hell!\r\nWelcome to the zombie apocalypse experience of a lifetime – and now more beautiful than ever. Caught in the midst of an epic zombie outbreak on the tropical island of Banoi, your only thought is: Survive!', 'dead_island1.png', 'dead_island2.png'),
(10, 'Cyberpunk 2077', '699.000,00', 'RPG', 'Cyberpunk 2077 is an open-world, action-adventure RPG set in the megalopolis of Night City, where you play as a cyberpunk mercenary wrapped up in a do-or-die fight for survival. Improved and featuring all-new free additional content, customize your character and playstyle as you take on jobs, build a reputation, and unlock upgrades. The relationships you forge and the choices you make will shape the story and the world around you. Legends are made here. ', 'cyberpunk1.png', 'cyberpunk2.png'),
(11, 'Starwars: Jedi Survi', '759.000,00', 'Action, Adventure', 'The story of Cal Kestis continues in Star Wars Jedi: Survivor™, a third-person, galaxy-spanning, action-adventure game from Respawn Entertainment, developed in collaboration with Lucasfilm Games. This narratively driven, single-player title picks up 5 years after the events of Star Wars Jedi: Fallen Order™ and follows Cal’s increasingly desperate fight as the galaxy descends further into darkness. Pushed to the edges of the galaxy by the Empire, Cal will find himself surrounded by threats new and familiar. As one of the last surviving Jedi Knights, Cal is driven to make a stand during the galaxy’s darkest times — but how far is he willing to go to protect himself, his crew, and the legacy of the Jedi Order?', 'jedi1.png', 'jedi2.png');

-- --------------------------------------------------------

--
-- Table structure for table `database_porto1_user`
--

CREATE TABLE `database_porto1_user` (
  `no_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `address2` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `phone_home` int(11) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `database_porto1_user`
--

INSERT INTO `database_porto1_user` (`no_user`, `email`, `nama`, `last_name`, `tanggal_lahir`, `password`, `address`, `address2`, `phone`, `phone_home`, `country`, `image`) VALUES
(20, 'reynaldihati6@gmail.com', '', '', '0000-00-00', '123', '', '', 0, 0, '', ''),
(21, 'aff@gmail.com', '', '', '0000-00-00', '123', '', '', 0, 0, '', ''),
(23, 'roxxane1@gmail.com', '', '', '0000-00-00', '123', '', '', 0, 0, '', ''),
(24, 'jeftaanj@gmail.com', '', '', '0000-00-00', '123', '', '', 0, 0, '', ''),
(25, 'arifhia@gmail.com', 'arif', 'Hidayat', '0000-00-00', '123', 'jl kesatrian rempoa', '', 202020, 202020, 'Indonesia', 'kamal.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `no` int(11) NOT NULL,
  `judul` varchar(20) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`no`, `judul`, `keterangan`, `image`) VALUES
(1, 'Cyberverse Chronicle', 'Permainan video terbaru yang sangat dinantikan, \'Cyberverse Chronicles\', telah dirilis dan mendapatkan sambutan positif dari para pemain di seluruh dunia.', 'news1.png'),
(2, 'Guardians of Valor', 'Industri game mencatat rekor penjualan baru dengan perilisan game aksi epik \'Guardians of Valor\' yang terjual lebih dari 5 juta kopi dalam waktu satu minggu.', 'news2.png'),
(3, 'Realm of Legends', 'Perusahaan pengembang game terkenal, Stellar Games, mengumumkan perilisan game RPG ambisius mereka, \'Realm of Legends\', yang menjanjikan petualangan epik dan dunia yang luas untuk dieksplorasi oleh para pemain.', 'news3.png'),
(4, 'Horizon Forbidden We', 'Sony Interactive Entertainment merilis trailer baru untuk game aksi eksklusif PlayStation 5 mereka, \'Horizon Forbidden West\', yang mengungkapkan dunia yang menakjubkan dan cerita yang mendalam, memicu antusiasme para penggemar.', 'news4.png'),
(5, 'Mindscape', 'Perusahaan game indie yang sedang naik daun, PixelWorks Studios, meluncurkan game puzzle yang unik dan inovatif, \'Mindscape\', yang menggunakan elemen realitas virtual untuk menghadirkan teka-teki yang menantang dan lingkungan yang menakjubkan.', 'news5.png'),
(6, 'Assassin\'s Creed Val', 'Ubisoft mengumumkan ekspansi besar-besaran untuk game open-world populer mereka, \'Assassin\'s Creed Valhalla\', dengan tambahan wilayah baru, misi menarik, dan peningkatan fitur yang akan memperkaya pengalaman pemain.', 'news6.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL COMMENT 'Primary Key',
  `judul` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='newTable';

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `judul`) VALUES
(1, 'arif hidayat'),
(2, 'arif hidayat 2'),
(3, 'arif hidayat 3'),
(4, 'arif hidayat 4'),
(5, 'arif hidayat 5'),
(6, 'arif hidayat 6'),
(7, 'arif hidayat'),
(8, 'arif hidayat'),
(9, 'arif hidayat'),
(10, 'arif hidayat'),
(11, 'arif hidayat'),
(12, 'arif hidayat'),
(13, 'arif hidayat'),
(14, 'arif hidayat'),
(15, 'arif hidayat'),
(16, 'arif hidayat'),
(17, 'arif hidayat'),
(18, 'arif hidayat'),
(19, 'arif hidayat'),
(20, 'arif hidayat'),
(21, 'arif hidayat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `database1`
--
ALTER TABLE `database1`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `database_card`
--
ALTER TABLE `database_card`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `database_card1`
--
ALTER TABLE `database_card1`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `database_porto1_user`
--
ALTER TABLE `database_porto1_user`
  ADD PRIMARY KEY (`no_user`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `database1`
--
ALTER TABLE `database1`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `database_card`
--
ALTER TABLE `database_card`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `database_card1`
--
ALTER TABLE `database_card1`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `database_porto1_user`
--
ALTER TABLE `database_porto1_user`
  MODIFY `no_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
