-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 06:01 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `no_telepon` int(11) NOT NULL,
  `pin` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `photo_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

insert into admin (id_admin, nama_admin, no_telepon, pin, email, alamat, photo_admin) values ('1234', 'Kamilah', '082367379239', '123456', 'kflorey0@ustream.tv', '2112 Leroy Pass', 'profile_female');
insert into admin (id_admin, nama_admin, no_telepon, pin, email, alamat, photo_admin) values ('8402', 'Aubert', '083788424374', '127229', 'atowsie1@usda.gov', '03 Melrose Pass', 'profile_male');
insert into admin (id_admin, nama_admin, no_telepon, pin, email, alamat, photo_admin) values ('2997', 'Brandie', '085542259150', '005940', 'bmcguckin2@bigcartel.com', '4001 Oak Hill', 'profile_female');
insert into admin (id_admin, nama_admin, no_telepon, pin, email, alamat, photo_admin) values ('8286', 'Guillema', '085122671218', '505796', 'gvanvelden3@utexas.edu', '6 Union Avenue', 'profile_male');
insert into admin (id_admin, nama_admin, no_telepon, pin, email, alamat, photo_admin) values ('5884', 'Cedric', '086739106797', '460710', 'ctrippack4@wikimedia.org', '507 Schiller Pass', 'profile_male');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `no_ktm` int(11) NOT NULL,
  `no_telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

insert into mahasiswa (no_ktm, no_telepon) values (162019000, '089754389346');
insert into mahasiswa (no_ktm, no_telepon) values (162019001, '088675088893');
insert into mahasiswa (no_ktm, no_telepon) values (162019002, '089657131560');
insert into mahasiswa (no_ktm, no_telepon) values (162019003, '084469747608');
insert into mahasiswa (no_ktm, no_telepon) values (162019004, '086888624312');
insert into mahasiswa (no_ktm, no_telepon) values (162019005, '080255634727');
insert into mahasiswa (no_ktm, no_telepon) values (162019006, '086691763179');
insert into mahasiswa (no_ktm, no_telepon) values (162019007, '081625560487');
insert into mahasiswa (no_ktm, no_telepon) values (162019008, '084177704147');
insert into mahasiswa (no_ktm, no_telepon) values (162019009, '083129450200');
insert into mahasiswa (no_ktm, no_telepon) values (162019010, '086632802128');
insert into mahasiswa (no_ktm, no_telepon) values (162019011, '084801107222');
insert into mahasiswa (no_ktm, no_telepon) values (162019012, '086574884378');
insert into mahasiswa (no_ktm, no_telepon) values (162019013, '084597922526');
insert into mahasiswa (no_ktm, no_telepon) values (162019014, '088513511105');
insert into mahasiswa (no_ktm, no_telepon) values (162019015, '080828435792');
insert into mahasiswa (no_ktm, no_telepon) values (162019016, '089508411086');
insert into mahasiswa (no_ktm, no_telepon) values (162019017, '088877504955');
insert into mahasiswa (no_ktm, no_telepon) values (162019018, '081717379085');
insert into mahasiswa (no_ktm, no_telepon) values (162019019, '083630618166');
insert into mahasiswa (no_ktm, no_telepon) values (162019020, '087987993847');
insert into mahasiswa (no_ktm, no_telepon) values (162019021, '084566746270');
insert into mahasiswa (no_ktm, no_telepon) values (162019022, '081018089997');
insert into mahasiswa (no_ktm, no_telepon) values (162019023, '081411321645');
insert into mahasiswa (no_ktm, no_telepon) values (162019024, '086647130760');
insert into mahasiswa (no_ktm, no_telepon) values (162019025, '088449328780');
insert into mahasiswa (no_ktm, no_telepon) values (162019026, '080189037019');
insert into mahasiswa (no_ktm, no_telepon) values (162019027, '084182232788');
insert into mahasiswa (no_ktm, no_telepon) values (162019028, '081233061817');
insert into mahasiswa (no_ktm, no_telepon) values (162019029, '086501832735');
insert into mahasiswa (no_ktm, no_telepon) values (162019030, '084152817420');
insert into mahasiswa (no_ktm, no_telepon) values (162020000, '086256537387');
insert into mahasiswa (no_ktm, no_telepon) values (162020001, '089883515018');
insert into mahasiswa (no_ktm, no_telepon) values (162020002, '080220599543');
insert into mahasiswa (no_ktm, no_telepon) values (162020003, '080575317286');
insert into mahasiswa (no_ktm, no_telepon) values (162020004, '089349335964');
insert into mahasiswa (no_ktm, no_telepon) values (162020005, '083442276284');
insert into mahasiswa (no_ktm, no_telepon) values (162020006, '089597551983');
insert into mahasiswa (no_ktm, no_telepon) values (162020007, '084053275233');
insert into mahasiswa (no_ktm, no_telepon) values (162020008, '081211100117');
insert into mahasiswa (no_ktm, no_telepon) values (162020009, '081318477087');
insert into mahasiswa (no_ktm, no_telepon) values (162020010, '086632253713');
insert into mahasiswa (no_ktm, no_telepon) values (162020011, '089095432894');
insert into mahasiswa (no_ktm, no_telepon) values (162020012, '087317610839');
insert into mahasiswa (no_ktm, no_telepon) values (162020013, '084544653661');
insert into mahasiswa (no_ktm, no_telepon) values (162020014, '085487908513');
insert into mahasiswa (no_ktm, no_telepon) values (162020015, '081839053449');
insert into mahasiswa (no_ktm, no_telepon) values (162020016, '089446974424');
insert into mahasiswa (no_ktm, no_telepon) values (162020017, '084453467514');
insert into mahasiswa (no_ktm, no_telepon) values (162020018, '080940756723');
insert into mahasiswa (no_ktm, no_telepon) values (162020019, '081481527347');
insert into mahasiswa (no_ktm, no_telepon) values (162020020, '083224253498');
insert into mahasiswa (no_ktm, no_telepon) values (162020021, '082048517002');
insert into mahasiswa (no_ktm, no_telepon) values (162020022, '083485496010');
insert into mahasiswa (no_ktm, no_telepon) values (162020023, '083635057309');
insert into mahasiswa (no_ktm, no_telepon) values (162020024, '089311300673');
insert into mahasiswa (no_ktm, no_telepon) values (162020025, '086562267479');
insert into mahasiswa (no_ktm, no_telepon) values (162020026, '089578312863');
insert into mahasiswa (no_ktm, no_telepon) values (162020027, '088418919984');
insert into mahasiswa (no_ktm, no_telepon) values (162020028, '089280263141');
insert into mahasiswa (no_ktm, no_telepon) values (162020029, '086003821012');
insert into mahasiswa (no_ktm, no_telepon) values (162020030, '086233953111');
insert into mahasiswa (no_ktm, no_telepon) values (162021000, '081192861243');
insert into mahasiswa (no_ktm, no_telepon) values (162021001, '081947186646');
insert into mahasiswa (no_ktm, no_telepon) values (162021002, '085376667485');
insert into mahasiswa (no_ktm, no_telepon) values (162021003, '086815286413');
insert into mahasiswa (no_ktm, no_telepon) values (162021004, '083279120844');
insert into mahasiswa (no_ktm, no_telepon) values (162021005, '083948282778');
insert into mahasiswa (no_ktm, no_telepon) values (162021006, '085820574505');
insert into mahasiswa (no_ktm, no_telepon) values (162021007, '084037567503');
insert into mahasiswa (no_ktm, no_telepon) values (162021008, '083419117807');
insert into mahasiswa (no_ktm, no_telepon) values (162021009, '087391747374');
insert into mahasiswa (no_ktm, no_telepon) values (162021010, '081032865246');
insert into mahasiswa (no_ktm, no_telepon) values (162021011, '083415155777');
insert into mahasiswa (no_ktm, no_telepon) values (162021012, '087535828691');
insert into mahasiswa (no_ktm, no_telepon) values (162021013, '081575667554');
insert into mahasiswa (no_ktm, no_telepon) values (162021014, '087310612548');
insert into mahasiswa (no_ktm, no_telepon) values (162021015, '088142857283');
insert into mahasiswa (no_ktm, no_telepon) values (162021016, '085326117223');
insert into mahasiswa (no_ktm, no_telepon) values (162021017, '084594145242');
insert into mahasiswa (no_ktm, no_telepon) values (162021018, '084161794443');
insert into mahasiswa (no_ktm, no_telepon) values (162021019, '088297843203');
insert into mahasiswa (no_ktm, no_telepon) values (162021020, '080989837021');
insert into mahasiswa (no_ktm, no_telepon) values (162021021, '087328898614');
insert into mahasiswa (no_ktm, no_telepon) values (162021022, '084969499747');
insert into mahasiswa (no_ktm, no_telepon) values (162021023, '088130169103');
insert into mahasiswa (no_ktm, no_telepon) values (162021024, '087363041736');
insert into mahasiswa (no_ktm, no_telepon) values (162021025, '087152105940');
insert into mahasiswa (no_ktm, no_telepon) values (162021026, '086298631473');
insert into mahasiswa (no_ktm, no_telepon) values (162021027, '085058931786');
insert into mahasiswa (no_ktm, no_telepon) values (162021028, '080150504550');
insert into mahasiswa (no_ktm, no_telepon) values (162021029, '087810890382');
insert into mahasiswa (no_ktm, no_telepon) values (162021030, '080809823649');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id_membership` int(11) NOT NULL,
  `no_ktm` int(11) NOT NULL,
  `jenis_kendaraan` varchar(100) NOT NULL,
  `masa_berlaku` date NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2468, 162019000, 'Motor', '2022-09-18 01:35:14', 'D1643NNT', 'dneate0@google.it', '2 Fuller Way');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2480, 162019001, 'Mobil', '2022-01-21 00:16:14', 'D4939APF', 'wtalkington1@techcrunch.com', '581 Boyd Park');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2492, 162019002, 'Motor', '2021-11-16 18:28:16', 'D8803NTU', 'mvenner2@google.fr', '0781 Harbort Trail');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2504, 162019003, 'Motor', '2023-02-13 14:30:01', 'D5836EXR', 'averheijden3@kickstarter.com', '643 Lunder Junction');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2516, 162019004, 'Mobil', '2023-02-08 22:26:20', 'D3155ZVR', 'cdowse4@bravesites.com', '51759 Truax Court');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2528, 162019005, 'Motor', '2023-02-23 21:14:45', 'D5222RLL', 'dbeatty5@walmart.com', '4 South Point');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2540, 162019006, 'Mobil', '2022-03-07 04:33:06', 'D1983FOK', 'kveracruysse6@live.com', '4738 Novick Street');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2552, 162019007, 'Mobil', '2022-01-02 15:37:13', 'D0325NYM', 'ltredwell7@themeforest.net', '03912 Oneill Avenue');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2564, 162019008, 'Motor', '2022-07-08 16:07:38', 'D3058ICH', 'jvater8@boston.com', '94258 Randy Court');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2576, 162019009, 'Mobil', '2022-09-06 18:30:34', 'D8419EID', 'ppree9@parallels.com', '03 Upham Center');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2588, 162019010, 'Mobil', '2022-03-19 20:11:43', 'D9678YLE', 'jconninghama@ifeng.com', '0 Garrison Center');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2600, 162019011, 'Mobil', '2023-02-25 06:47:42', 'D7703HWG', 'ipauncefortb@microsoft.com', '1 Helena Avenue');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2612, 162019012, 'Motor', '2023-02-06 22:24:38', 'D4023YCR', 'clofthousec@tinyurl.com', '32 Forest Run Drive');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2624, 162019013, 'Mobil', '2022-05-27 00:18:31', 'D9467XNG', 'mchominskid@mysql.com', '737 8th Road');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2636, 162019014, 'Mobil', '2022-11-25 15:02:51', 'D0131HJF', 'fcathralle@psu.edu', '363 Lakewood Hill');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2648, 162019015, 'Mobil', '2023-03-21 10:09:19', 'D2702FWH', 'dcastaignetf@zimbio.com', '5 Milwaukee Point');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2660, 162019016, 'Motor', '2022-08-17 21:57:15', 'D2472BEG', 'dbarrickg@redcross.org', '2169 Eagle Crest Plaza');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2672, 162019017, 'Motor', '2023-02-25 09:51:51', 'D6739DXQ', 'nmckeah@rediff.com', '50 Vera Street');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2684, 162019018, 'Motor', '2023-01-23 11:56:42', 'D1458HDA', 'wdodshuni@skyrock.com', '3054 Artisan Crossing');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2696, 162019019, 'Motor', '2022-07-20 03:19:45', 'D5115ZPE', 'lgaylorj@chronoengine.com', '01 Northfield Crossing');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2708, 162019020, 'Mobil', '2022-03-25 13:29:24', 'D1184RFL', 'blangabeerk@github.com', '21092 Lakeland Lane');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2720, 162019021, 'Motor', '2022-01-28 10:29:05', 'D8601WKK', 'hgimletl@merriam-webster.com', '9577 Mccormick Street');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2732, 162019022, 'Mobil', '2023-03-28 05:30:16', 'D4013YZF', 'askillernm@macromedia.com', '84359 Warrior Road');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2744, 162019023, 'Mobil', '2023-02-06 11:57:30', 'D4638JBF', 'hchapellown@bigcartel.com', '037 Rusk Drive');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2756, 162019024, 'Motor', '2022-03-09 05:02:58', 'D3917YXQ', 'nstillingo@archive.org', '8133 Lakewood Pass');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2768, 162019025, 'Mobil', '2021-12-17 07:08:40', 'D5991HFO', 'ncolkettp@acquirethisname.com', '53 Golden Leaf Plaza');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2780, 162019026, 'Motor', '2022-04-28 01:26:50', 'D3257TAW', 'ltophamq@4shared.com', '3547 Almo Park');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2792, 162019027, 'Mobil', '2022-11-19 18:01:21', 'D3648PKC', 'pshieldsr@yale.edu', '5961 Veith Street');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2804, 162019028, 'Mobil', '2022-02-14 21:09:52', 'D0901LOD', 'hstonelakes@msn.com', '63848 Lighthouse Bay Point');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2816, 162019029, 'Mobil', '2022-10-10 00:11:56', 'D1660RTR', 'pheibelt@imgur.com', '40 Tomscot Avenue');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (2828, 162019030, 'Motor', '2022-10-24 13:06:34', 'D3107SNH', 'rchaloneru@simplemachines.org', '0 Brentwood Pass');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3468, 162020000, 'Motor', '2022-12-20 23:33:18', 'D0840BLX', 'hmobius0@ning.com', '41836 Thompson Junction');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3480, 162020001, 'Motor', '2023-03-06 08:58:18', 'D6228EKK', 'cwhoolehan1@arstechnica.com', '7224 Goodland Road');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3492, 162020002, 'Mobil', '2022-05-04 06:21:51', 'D1452WYU', 'gelderkin2@posterous.com', '277 Columbus Lane');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3504, 162020003, 'Motor', '2021-11-07 19:49:31', 'D9751UAF', 'slenglet3@symantec.com', '8749 Hollow Ridge Center');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3516, 162020004, 'Motor', '2022-04-16 20:42:38', 'D8241HKM', 'medland4@nydailynews.com', '43135 Esch Center');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3528, 162020005, 'Mobil', '2022-06-23 08:40:23', 'D8375OAJ', 'fgyngell5@myspace.com', '67229 Waxwing Road');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3540, 162020006, 'Motor', '2021-12-01 16:36:51', 'D2840BDZ', 'gbettam6@51.la', '101 Lyons Junction');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3552, 162020007, 'Mobil', '2022-07-21 01:09:13', 'D0719HDF', 'gwhiscard7@mlb.com', '34617 John Wall Street');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3564, 162020008, 'Motor', '2022-06-01 15:44:41', 'D1572NXL', 'wgherardini8@dell.com', '4 Lakewood Gardens Alley');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3576, 162020009, 'Mobil', '2023-01-21 13:03:41', 'D4742VQW', 'smounsie9@goodreads.com', '590 Stone Corner Place');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3588, 162020010, 'Motor', '2021-12-08 07:11:01', 'D2549TGJ', 'ckingstnea@sfgate.com', '68603 Mesta Place');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3600, 162020011, 'Mobil', '2022-09-01 01:13:26', 'D9388TTI', 'ndakeb@techcrunch.com', '20121 Bunker Hill Way');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3612, 162020012, 'Motor', '2022-10-26 15:41:58', 'D7351JLX', 'wwentc@mac.com', '4008 Center Hill');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3624, 162020013, 'Motor', '2022-08-03 23:33:11', 'D8465CRN', 'bgotcliffed@dell.com', '72375 Pearson Terrace');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3636, 162020014, 'Mobil', '2022-01-12 01:09:48', 'D2804RSX', 'vwandse@google.cn', '75650 Clarendon Terrace');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3648, 162020015, 'Motor', '2021-11-11 10:26:05', 'D4948NTP', 'hdanetf@netscape.com', '8600 Ilene Point');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3660, 162020016, 'Motor', '2022-04-07 02:47:49', 'D4869AFT', 'gudieg@europa.eu', '48 Killdeer Street');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3672, 162020017, 'Mobil', '2022-07-05 21:53:19', 'D6160EAZ', 'mfeavyourh@vinaora.com', '29088 Service Plaza');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3684, 162020018, 'Mobil', '2023-03-26 03:25:05', 'D3931GAC', 'bradnedgei@joomla.org', '51 Kinsman Point');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3696, 162020019, 'Motor', '2022-06-21 14:10:40', 'D3768BMJ', 'jquaylej@wired.com', '144 Saint Paul Alley');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3708, 162020020, 'Motor', '2023-01-15 06:39:14', 'D0646QTU', 'uduguidk@yahoo.co.jp', '6878 Pond Place');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3720, 162020021, 'Motor', '2022-03-06 19:38:12', 'D7718NQD', 'pjuzal@telegraph.co.uk', '39530 Grayhawk Park');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3732, 162020022, 'Mobil', '2022-08-03 05:56:20', 'D3963IPI', 'vranyardm@ftc.gov', '9 Porter Road');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3744, 162020023, 'Mobil', '2022-05-01 11:26:11', 'D2055YYU', 'kcolvinn@auda.org.au', '941 David Trail');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3756, 162020024, 'Motor', '2022-03-09 22:10:00', 'D9699UKT', 'dmusterdo@purevolume.com', '14507 Lukken Road');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3768, 162020025, 'Mobil', '2022-08-04 23:09:33', 'D7777CSF', 'codellp@columbia.edu', '8 Schlimgen Point');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3780, 162020026, 'Motor', '2021-12-07 02:36:46', 'D4259YCU', 'tpietranekq@ow.ly', '247 Jenna Place');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3792, 162020027, 'Mobil', '2023-01-01 20:34:51', 'D0685AYX', 'asinkinsonr@etsy.com', '06 Golf Course Parkway');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3804, 162020028, 'Mobil', '2023-02-11 06:16:51', 'D4191MCN', 'swilkss@home.pl', '2792 Dorton Lane');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3816, 162020029, 'Motor', '2021-12-29 05:49:16', 'D6807ZKC', 'nhucklebyt@meetup.com', '43 Texas Street');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (3828, 162020030, 'Mobil', '2022-04-26 20:56:57', 'D9118OJZ', 'mlageu@etsy.com', '301 Heffernan Parkway');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4468, 162021000, 'Motor', '2022-12-27 02:25:00', 'D9197GCM', 'mainslee0@merriam-webster.com', '69 Pleasure Crossing');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4480, 162021001, 'Mobil', '2021-11-17 07:30:53', 'D0088XTA', 'jchetwynd1@washington.edu', '0 Tennessee Place');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4492, 162021002, 'Motor', '2022-01-02 15:21:02', 'D7727LBG', 'ssephton2@craigslist.org', '8616 Graedel Center');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4504, 162021003, 'Mobil', '2023-03-30 11:49:59', 'D9466RFV', 'wcahen3@aboutads.info', '3 New Castle Way');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4516, 162021004, 'Motor', '2022-06-09 20:00:53', 'D5441FFE', 'aworsom4@adobe.com', '9 Iowa Parkway');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4528, 162021005, 'Mobil', '2022-08-15 09:40:11', 'D2869TJX', 'ahebditch5@nhs.uk', '2 Knutson Drive');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4540, 162021006, 'Motor', '2023-03-20 01:35:26', 'D5369NEE', 'aloudyan6@nhs.uk', '1 Graedel Hill');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4552, 162021007, 'Motor', '2021-12-05 22:11:55', 'D4582JEC', 'cburcher7@senate.gov', '5 Cordelia Center');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4564, 162021008, 'Motor', '2022-07-04 08:09:46', 'D2202ZKH', 'rrodge8@wiley.com', '0 Union Parkway');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4576, 162021009, 'Motor', '2022-06-05 20:49:49', 'D9720SZB', 'swhittenbury9@statcounter.com', '8 Montana Junction');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4588, 162021010, 'Mobil', '2022-07-24 05:19:39', 'D7688THV', 'mkarlolczaka@reference.com', '023 American Lane');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4600, 162021011, 'Motor', '2022-03-21 18:35:08', 'D3769QVC', 'lmerrywetherb@cyberchimps.com', '76 Summerview Way');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4612, 162021012, 'Mobil', '2022-12-03 22:07:33', 'D9513AVX', 'bludwikiewiczc@bing.com', '4 Sauthoff Terrace');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4624, 162021013, 'Mobil', '2022-07-01 07:56:37', 'D3911FFR', 'cwinskilld@sciencedirect.com', '92 Rieder Junction');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4636, 162021014, 'Motor', '2022-11-20 14:57:38', 'D6746KCC', 'ichavrine@harvard.edu', '194 7th Junction');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4648, 162021015, 'Motor', '2023-01-22 03:01:55', 'D4286GRQ', 'ltrewhellaf@who.int', '5081 Cascade Place');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4660, 162021016, 'Mobil', '2022-05-17 14:40:01', 'D8755GTB', 'dparslowg@printfriendly.com', '16 Helena Circle');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4672, 162021017, 'Motor', '2023-02-20 17:18:40', 'D6934UGG', 'wdudbridgeh@admin.ch', '27 Hoffman Pass');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4684, 162021018, 'Mobil', '2022-07-20 09:14:00', 'D9768AWH', 'jpickeringi@omniture.com', '1 Randy Junction');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4696, 162021019, 'Mobil', '2023-03-15 04:12:17', 'D4664ALZ', 'fcridlinj@tuttocitta.it', '4 Clarendon Pass');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4708, 162021020, 'Motor', '2022-06-11 04:36:04', 'D7689SHR', 'mtompkinsonk@fema.gov', '30 Anthes Plaza');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4720, 162021021, 'Mobil', '2022-08-01 07:43:55', 'D8753YRR', 'gwallworkl@macromedia.com', '29 Holmberg Court');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4732, 162021022, 'Motor', '2021-11-23 20:51:45', 'D4699CAE', 'oeggersm@jigsy.com', '581 Darwin Avenue');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4744, 162021023, 'Motor', '2022-12-16 03:08:54', 'D7088ODS', 'acorcutn@printfriendly.com', '16 Caliangt Crossing');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4756, 162021024, 'Mobil', '2022-11-22 09:49:48', 'D4105ZKF', 'rmyrtleo@flickr.com', '885 Village Lane');
insert into membership (id_membership, no_ktm , jenis_kendaraan, masa_berlaku, no_plat, email, alamat	) values (4768, 162021025, 'Motor', '2022-02-27 07:47:21', 'D7343UVY', 'dmcowenp@ezinearticles.com', '77117 Golden Leaf Way');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`no_ktm`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id_membership`),
  ADD KEY `no_ktm` (`no_ktm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id_membership` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `FK__mahasiswa` FOREIGN KEY (`no_ktm`) REFERENCES `mahasiswa` (`no_ktm`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;