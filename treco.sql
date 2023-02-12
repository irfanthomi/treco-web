/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : treco

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 12/02/2023 19:45:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `log` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `id_admin` (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------
BEGIN;
INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`, `nama`, `log`) VALUES (58, 'admin1 ', 'unF10Aq88Ly42', 'idm@idm.or.id', 'admin', 'admin', '2021-07-30 07:41:37');
INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`, `nama`, `log`) VALUES (64, 'unesadmin', 'unF10Aq88Ly42', '', 'admin', 'anggota', '2021-07-30 07:41:37');
INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`, `nama`, `log`) VALUES (65, 'irfanthomi', 'unMiD.hEYSzo.', '', 'user', 'irfan thomi', '2021-08-23 20:58:10');
COMMIT;

-- ----------------------------
-- Table structure for album
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id_album` int NOT NULL AUTO_INCREMENT,
  `nama_album` varchar(100) NOT NULL,
  PRIMARY KEY (`id_album`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of album
-- ----------------------------
BEGIN;
INSERT INTO `album` (`id_album`, `nama_album`) VALUES (1, 'Masjid');
INSERT INTO `album` (`id_album`, `nama_album`) VALUES (2, 'Perumahan');
INSERT INTO `album` (`id_album`, `nama_album`) VALUES (3, 'Umum');
COMMIT;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id_artikel` bigint unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(60) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `hits` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of artikel
-- ----------------------------
BEGIN;
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (85, 'Bangkitkan Ekonomi, Sandiaga Uno Resmikan Pabrik di Sumatera Barat', 'bangkitkan-ekonomi-sandiaga-uno-resmikan-pabrik-di-sumatera-', '<p>Pabrik baja ringan Treco Truss dan OKEOCE Truss di Kota Pariaman, Sumatera Barat, diresmikan untuk mendukung pengembangan desa-desa wisata setempat.</p>\r\n\r\n<p>Peresmian pabrik tersebut dilakukan oleh Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) RI Sandiaga Salahuddin Uno secara virtual pada Rabu (9/2).</p>\r\n\r\n<p>Peresmian itu dilakukan Sandiaga guna mengebut pemulihan sektor pariwisata dan ekonomi kreatif (parekraf) demi kebangkitkan ekonomi.</p>\r\n\r\n<p>Terlebih, saat ini Kemenparekrat tengah mengebut pengembangan desa-desa wisata, sehingga peuang usaha tercipta, lapangan kerja seluas-luasnya pun terbuka bagi masyarakat.</p>\r\n\r\n<p> </p>\r\n\r\n<p>\"Banyak yang bertanya kepada saya bagaimana sektor parekraf bisa bangkit dan berkembang? Bagaimana kebangkitan ekonomi dan pembukaan lapangan kerja? Apa yang sudah dilakukan oleh teman-teman dengan membuka pabrik baja ringan untuk membangun suatu ekosistem rantai pasok parekraf ini perlu kita apresiasi,\" ujar Sandiaga.</p>\r\n\r\n<p>Di sisi lain, Sandiaga menambahkan bahwa pihaknya mengapresiasi Treco Truss sebagai bentuk kontribusi dan kolaborasi dalam mengembangkan bakat untuk kebaikan bersama.</p>\r\n\r\n<p>Diakuinya, seluruh pihak kini tengah berjuang melawan covid-19 yang berdampak besar bagi sektor pariwisata dan ekonomi kreatif.</p>\r\n', 'file_1676037502.png', '58', '35', '', '2023-02-10');
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (81, 'Diresmikan Sandiaga Uno, Pabrik Baja Pertama Sumbar Serap Tenaga Kerja', 'diresmikan-sandiaga-uno-pabrik-baja-pertama-sumbar-serap-ten', '<p>Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Uno secara resmi meresmikan Pabrik Baja ringan pertama di Sumatera Barat (Sumbar) di Kota Pariaman, Rabu (9/2/2022).</p>\r\n\r\n<p> </p>\r\n\r\n<p>Sandiaga Uno melalui Zoom Meeting menyampaikan apresiasi yang tinggi terhadap Owner Treco Trus, Harpen Agus Bulyandi atas inisiatifnya dalam membangun industri kreatif di Sumatera Barat.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Menurutnya hal tersebut akan berdampak pada pertumbuhan ekonomi masyarakat, khusunya menciptakan lapangan pekerjaan atau menyerap tenaga kerja.</p>\r\n\r\n<p> </p>\r\n\r\n<p>“Dengan menggucapkan Bismilahirrohmannirrohi, maka Pabrik baja ringan Treco Trus dan Oke Oce Trus, saya nyatakan secara resmi dibuka,” tutur Sandiaga Uno melalui Zoom Meeting, Rabu (9/2/2022).</p>\r\n\r\n<p> </p>\r\n\r\n<p>Sandiaga Uno sedianya meresmikan Pabrik baja ringan Treco di Pariaman hari ini secara langsung ke lokasi. Namun hal tersebut urung karena dalam suasana duka mertuanya meninggal dunia.</p>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p>“Rencananya iya, namun sekarang Pak Sandi ada kemalangan (musibah). Ada keluarga yang meninggal dunia, jadi batal hadir langsung untuk meresmikan,” tutur Chief Customer Officer, Tedi Rahmat.</p>\r\n\r\n<p> </p>\r\n\r\n<p>CEO TRECO, Harpen Agus Bulyandi mengungkapkan bahwa rangka atap baja ringan saat ini tengah menjadi tren baru di dalam teknik bangunan rumah dan gedung. Hal tersebut tak lain karena penemuan terbaru di bidang pembangunan rumah ini memiliki bahan yang disebut-sebut dapat mengalahkan keunggulan atap kayu dan atap baja konvensional.</p>\r\n\r\n<p> </p>\r\n\r\n<p>“Rangka atap baja ringan ini tahan lama, mudah dibentuk dan disambung, bahkan dapat didaur ulang,” jelasnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Produk baja ringan yang dihadirkan perusahaan TRECO, katanya, bersifat kuat dan andal serta berkualitas SNI. “Dari segi harga lebih terjangkau dibanding dengan produk rangka atap baja ringan lainnya,” jelasnya.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Harpen mengatakan bahwa produk TRECO merupakan karya “anak nagari” dari Sumatera Barat yang tujuannya meningkatkan perekonomian.</p>\r\n\r\n<p> </p>\r\n\r\n<p>“Hasil produk kita sesuai standar SNI yang tentunya bagus dan aman digunakan. Ini juga karya warga Sumbar yang salah satu tujuannya menggerakkan perekonomian lokal,” ujarnya.</p>\r\n', 'file_1676037308.png', '58', '35', '', '2023-02-10');
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (95, 'MENPAREKRAF PUJI INDUSTRI KREATIF PABRIK BAJA RINGAN TRECO', 'menparekraf-puji-industri-kreatif-pabrik-baja-ringan-treco', '<p><span xss=removed><span xss=removed><span xss=removed>Menteri Pariwisata dan Ekonomi Kreatif (Menparekraf) Sandiaga Uno secara resmi meresmikan Pabrik Baja ringan pertama di Sumatera Barat (Sumbar) di Kota Pariaman, Rabu (9/2).</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>Sandiaga Uno melalui Zoom Meeting menyampaikan apresiasi yang tinggi terhadap Owner Treco Trus, Harpen Agus Bulyandi atas inisiatifnya dalam membangun industri kreatif di Sumatera Barat. Menurutnya hal tersebut akan berdampak pada pertumbuhan ekonomi masyarakat, khusunya menciptakan lapangan pekerjaan.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>“Dengan menggucapkan Bismilahirrohmannirrohim, maka Pabrik baja ringan Treco Trus dan Oke Oce Trus, saya nyatakan secara resmi dibuka,” tutur Sandiaga Uno melalui Zoom Meeting.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>CEO TRECO, Harpen Agus Bulyandi mengungkapkan bahwa rangka atap baja ringan saat ini tengah menjadi tren baru di dalam teknik bangunan rumah dan gedung. Hal tersebut tak lain karena penemuan terbaru di bidang pembangunan rumah ini memiliki bahan yang disebut-sebut dapat mengalahkan keunggulan atap kayu dan atap baja konvensional.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>“Rangka atap baja ringan ini tahan lama, mudah dibentuk dan disambung, bahkan dapat didaur ulang,” jelasnya.</span></span></span></p>\r\n\r\n<p xss=removed> </p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>“Produk baja ringan yang dihadirkan perusahaan TRECO bersifat kuat dan andal serta berkualitas SNI. Dari segi harga lebih terjangkau dibanding dengan produk rangka atap baja ringan lainnya,” jelasnya.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>Harpen mengatakan bahwa produk TRECO merupakan karya “anak nagari” dari Sumatera Barat yang tujuannya meningkatkan perekonomian.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>“Hasil produk kita sesuai standar SNI yang tentunya bagus dan aman digunakan. Ini juga karya warga Sumbar yang salah satu tujuannya menggerakkan perekonomian lokal,” ujarnya.</span></span></span></p>\r\n\r\n<p xss=removed><span xss=removed><span xss=removed><span xss=removed>Harpen menambahkan TRECO baja ringan ini sama dengan produk rangka atap baja ringan yang sebelumnya sudah ada di pasaran. Kelebihan lainnya adalah TRECO lebih bersaing soal harga.</span></span></span></p>\r\n', 'file_1676036073.png', '58', '35', '', '2023-02-10');
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (96, 'Wakil Gubernur Sumbar Launching Pelatihan Aplikator Baja Ringan di Pariaman', 'wakil-gubernur-sumbar-launching-pelatihan-aplikator-baja-rin', '<p><img>&lt;/>\r\n\r\n&lt;>>\r\n\r\n&lt;>>\r\n\r\n&lt;>>\r\n\r\n&lt;>“>\r\n\r\n&lt;>>\r\n\r\n&lt;>“>\r\n\r\n&lt;>>\r\n', 'file_1676035768.png', '58', '35', '', '2023-02-11');
COMMIT;

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id_banner` int NOT NULL AUTO_INCREMENT,
  `url` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_banner`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banner
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for download
-- ----------------------------
DROP TABLE IF EXISTS `download`;
CREATE TABLE `download` (
  `id_download` int NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `id_admin` int NOT NULL,
  PRIMARY KEY (`id_download`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of download
-- ----------------------------
BEGIN;
INSERT INTO `download` (`id_download`, `nama_file`, `tanggal_upload`, `id_admin`) VALUES (2, '011528567180.docx', '2018-06-09', 1);
INSERT INTO `download` (`id_download`, `nama_file`, `tanggal_upload`, `id_admin`) VALUES (3, '011528807395.docx', '2018-06-12', 60);
COMMIT;

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_admin` varchar(50) NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of galeri
-- ----------------------------
BEGIN;
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (1, 'Mesjid Al-Itthihad Indaruang', '1', 'file_1668657095.jpeg', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (2, 'Surau Pakandangan', '1', 'file_1668658640.jpeg', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (3, 'Pertashop Pariaman', '3', 'file_1668660407.jpeg', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (4, 'Rumah Ramah Gempa', '2', 'file_1668660486.png', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (5, 'Perumahan Arsela 7', '2', 'file_1668660526.jpeg', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (6, 'Musholla Arahman perumahan bmkg bandara', '1', 'file_1668660559.png', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (7, 'Perumahan arosuka', '2', 'file_1668660595.jpeg', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (8, 'Mesjid Al-Itthihad Indaruang', '1', 'file_1668660650.jpeg', '2022-11-17', '58');
INSERT INTO `galeri` (`id_galeri`, `judul`, `album`, `foto`, `tanggal`, `id_admin`) VALUES (9, 'Mesjid Darel Iman', '1', 'file_1668660697.jpeg', '2022-11-17', '58');
COMMIT;

-- ----------------------------
-- Table structure for halaman
-- ----------------------------
DROP TABLE IF EXISTS `halaman`;
CREATE TABLE `halaman` (
  `id_halaman` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `id_user` varchar(60) NOT NULL,
  `hits` varchar(60) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_halaman`),
  KEY `id_user` (`id_user`),
  KEY `id_halaman` (`id_halaman`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of halaman
-- ----------------------------
BEGIN;
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (25, 'Tentang', '<p xss=removed><img height=\"120\" src=\"https://dev-web.treco.id/rn/upload/file_1676083543.png\" width=\"334\"></p>\r\n', '58', '', '2023-02-11', NULL);
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (35, 'Visi & Misi', '<p><strong>VISI KAMI</strong><br>\r\nMenjadi perusahaan terkemuka di industri besi.</p>\r\n\r\n<p><strong>MISI KAMI</strong><br>\r\nSelalu turut serta dalam perkembangan perekonomian Indonesia dan mendukung setiap program pemerintah.<br>\r\nMemberikan layanan prima dan berkualitas kepada seluruh pelanggan.</p>\r\n', '58', '', '2022-11-17', 'file_1668685957.jpeg');
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (33, 'Contact', '<h2>Alamat</h2>\r\n\r\n<ul>\r\n <li>Head Office Gedung covesia Lt2.2,J.Veteran No.69F,Purus,Kec.Padang Barat,Kota Padang Sumatera Barat</li>\r\n <li>085274516100</li>\r\n <li>admin.ho@treco.id</li>\r\n <li>www.treco.id</li>\r\n</ul>\r\n', '58', '', '2022-11-17', 'file_1668654086.jpeg');
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (34, 'Galery', '<main id=\"main\">\r\n\r\n    &lt;!-- ======= Breadcrumbs ======= --&gt;\r\n    <section id=\"breadcrumbs\" class=\"breadcrumbs\">\r\n      <div class=\"container\">\r\n\r\n        <ol>\r\n          <li><a href=\"index.html\">Home</a></li>\r\n          <li>Portfolio</li>\r\n        </ol>\r\n        <h2>Portfolio</h2>\r\n\r\n      </div>\r\n    </section>&lt;!-- End Breadcrumbs --&gt;\r\n\r\n    &lt;!-- ======= Portfolio Section ======= --&gt;\r\n    <section id=\"portfolio\" class=\"portfolio\">\r\n      <div class=\"container\">\r\n\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-12 d-flex justify-content-center\">\r\n            <ul id=\"portfolio-flters\">\r\n              <li data-filter=\"*\" class=\"filter-active\">All</li>\r\n              <li data-filter=\".filter-app\">App</li>\r\n              <li data-filter=\".filter-card\">Card</li>\r\n              <li data-filter=\".filter-web\">Web</li>\r\n            </ul>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"row portfolio-container\">\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-1.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>App 1</h4>\r\n                <p>App</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-1.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-2.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Web 3</h4>\r\n                <p>Web</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-2.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-3.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>App 2</h4>\r\n                <p>App</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-3.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-4.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Card 2</h4>\r\n                <p>Card</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-4.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-5.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Web 2</h4>\r\n                <p>Web</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-5.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-6.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>App 3</h4>\r\n                <p>App</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-6.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-7.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Card 1</h4>\r\n                <p>Card</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-7.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-8.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Card 3</h4>\r\n                <p>Card</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-8.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-9.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Web 3</h4>\r\n                <p>Web</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-9.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n\r\n      </div>\r\n    </section>&lt;!-- End Portfolio Section --&gt;\r\n\r\n    &lt;!-- ======= Clients Section ======= --&gt;\r\n    <section id=\"clients\" class=\"clients\">\r\n      <div class=\"container\">\r\n\r\n        <div class=\"section-title\">\r\n          <h2>Clients</h2>\r\n          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n        </div>\r\n\r\n        <div class=\"clients-slider swiper\">\r\n          <div class=\"swiper-wrapper align-items-center\">\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-1.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-2.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-3.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-4.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-5.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-6.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-7.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-8.png\" class=\"img-fluid\" alt=\"\"></div>\r\n          </div>\r\n          <div class=\"swiper-pagination\"></div>\r\n        </div>\r\n\r\n      </div>\r\n    </section>&lt;!-- End Clients Section --&gt;\r\n\r\n  </main>&lt;!-- End #main --&gt;\r\n', '58', '', '2022-11-17', 'file_1668655379.jpeg');
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (38, 'Sertifikat', '<h2 style=\"text-align: center;\" xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">UJI TARIK </span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">PRODUK </span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">TRECO </span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">BAJA RINGAN</span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Laboratorium</span></span></span></span></span> <span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Manufaktur</span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Jurusan</span></span></span></span></span> </span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Teknik </span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Mesin</span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"> Universitas </span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Negeri </span></span></span></span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Padang </span></span></span></span></span></span></span></span></span></h2>\r\n\r\n<p style=\"text-align: center;\" xss=\"removed\"> </p>\r\n\r\n<p style=\"text-align: center;\" xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">LEMBAR HASIL UJI TARIK PRODUK TRECO  </span></span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">dari Universitas Negeri Padang</span></span></span></span></span></span></p>\r\n\r\n<p style=\"text-align: center;\" xss=\"removed\"><img height=\"500\" src=\"http://localhost:8888/rn/upload/file_1676199604.png\" width=\"382\"><img height=\"494\" src=\"http://localhost:8888/rn/upload/file_1676199613.png\" width=\"376\"><img height=\"494\" src=\"http://localhost:8888/rn/upload/file_1676199623.png\" width=\"374\"><img height=\"500\" src=\"http://localhost:8888/rn/upload/file_1676199629.png\" width=\"380\"></p>\r\n\r\n<h2 style=\"text-align: center;\" xss=\"removed\"> </h2>\r\n\r\n<h2 style=\"text-align: center;\" xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Sertifikat</span></span></span></span></span> </span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Produk</span></span></span></span></span> </span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Penggunaan</span></span></span></span></span> </span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Tanda</span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"> SNI</span></span></span></span></span></span></span></span></span></h2>\r\n\r\n<h4 style=\"text-align: center;\" xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">LEMBAR </span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Sertifikat</span></span></span></span></span> <span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Produk</span></span></span></span></span> <span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Penggunaan</span></span></span></span></span> <span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\">Tanda</span></span></span></span></span><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"><span xss=\"removed\"> SNI</span></span></span></span></span></span></span></span></span></h4>\r\n\r\n<p style=\"text-align: center;\" xss=\"removed\"><img height=\"492\" src=\"http://localhost:8888/rn/upload/file_1676199979.png\" width=\"348\">  <img height=\"492\" src=\"http://localhost:8888/rn/upload/file_1676199963.png\" width=\"348\"></p>\r\n\r\n<p style=\"text-align: center;\" xss=\"removed\"> </p>\r\n', '58', '', '2023-02-12', 'file_1676199435.png');
COMMIT;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of jabatan
-- ----------------------------
BEGIN;
INSERT INTO `jabatan` (`id`, `jabatan`) VALUES (2, 'Staff IT');
INSERT INTO `jabatan` (`id`, `jabatan`) VALUES (3, 'Admin');
INSERT INTO `jabatan` (`id`, `jabatan`) VALUES (4, 'Pengurus');
COMMIT;

-- ----------------------------
-- Table structure for journal
-- ----------------------------
DROP TABLE IF EXISTS `journal`;
CREATE TABLE `journal` (
  `id_journal` int NOT NULL AUTO_INCREMENT,
  `journal` varchar(200) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  PRIMARY KEY (`id_journal`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of journal
-- ----------------------------
BEGIN;
INSERT INTO `journal` (`id_journal`, `journal`, `deskripsi`) VALUES (10, 'Journal Scopus', 'ini Journal Scopus');
INSERT INTO `journal` (`id_journal`, `journal`, `deskripsi`) VALUES (11, 'Prosiding Scopus', 'ini Prosiding Scopus');
COMMIT;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `kategori` varchar(60) NOT NULL,
  `kategori_seo` varchar(60) NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of kategori
-- ----------------------------
BEGIN;
INSERT INTO `kategori` (`id_kategori`, `kategori`, `kategori_seo`) VALUES (35, 'berita', 'berita');
INSERT INTO `kategori` (`id_kategori`, `kategori`, `kategori_seo`) VALUES (36, 'Informasi', 'informasi');
INSERT INTO `kategori` (`id_kategori`, `kategori`, `kategori_seo`) VALUES (33, 'pengumuman', 'pengumuman');
INSERT INTO `kategori` (`id_kategori`, `kategori`, `kategori_seo`) VALUES (34, 'agenda', 'agenda');
COMMIT;

-- ----------------------------
-- Table structure for link_ex
-- ----------------------------
DROP TABLE IF EXISTS `link_ex`;
CREATE TABLE `link_ex` (
  `id_link` int NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `posisi` enum('bottom','top','fakultas','fasilitas_digital','home') NOT NULL,
  PRIMARY KEY (`id_link`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of link_ex
-- ----------------------------
BEGIN;
INSERT INTO `link_ex` (`id_link`, `link`, `judul`, `isi`, `posisi`) VALUES (22, 'idm.or.id/JCS', 'Jurnal JCS', '', 'bottom');
INSERT INTO `link_ex` (`id_link`, `link`, `judul`, `isi`, `posisi`) VALUES (32, 'idm.or.id/JSER', 'Jurnal JSER', '', 'bottom');
INSERT INTO `link_ex` (`id_link`, `link`, `judul`, `isi`, `posisi`) VALUES (33, 'idkm.or.id/JCS', 'Jurnal JSCR', '', 'bottom');
COMMIT;

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `id_parent` int NOT NULL DEFAULT '0',
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  `position` enum('Top','Bottom') DEFAULT 'Bottom',
  `urutan` int NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=246 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
BEGIN;
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (178, 0, 'kontak', 'halaman/detail/33/contact', 'Ya', 'Bottom', 6);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (174, 0, 'Profil', '#', 'Ya', 'Bottom', 1);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (188, 0, 'Product', 'product', 'Ya', 'Bottom', 4);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (193, 0, 'Galery', 'galeri', 'Ya', 'Bottom', 5);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (214, 174, 'Tentang Kami', 'halaman/detail/25/tentang', 'Ya', 'Bottom', 2);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (231, 174, 'Visi dan Misi', 'halaman/detail/35/visi--misi', 'Ya', 'Bottom', 3);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (241, 0, 'Kalkulator', 'kalkulator', 'Ya', 'Bottom', 8);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (244, 0, 'Sertifikat', 'halaman/detail/38/sertifikat', 'Ya', 'Bottom', 7);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (245, 0, 'Projects', 'project', 'Ya', 'Bottom', 9);
COMMIT;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` int NOT NULL,
  `product_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ctreateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createBy` int DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
BEGIN;
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`, `status`, `price`) VALUES (1, 'TRECO TRUSS - Rangka Atap Baja Ringan', 3, 'file_1668834563.jpeg', 'PROFIL RENG TRECO TRUSS :\r\n PANJANG : 6 M\r\n TEBAL : 0,40 MM (TCT) – 0,45 MM (TCT)\r\n\r\nPROFIL KANAL C  TRECO TRUSS :\r\n PANJANG : 6 M\r\n TEBAL : 0,75 MM (TCT) – 1 MM (TCT)\r\n\r\nSCREW TRECO TRUSS :\r\n BAUT 10 X 16\r\n BAUT 10 X 19\r\n', '2022-11-17 20:34:01', '2023-02-12 10:52:43', NULL, 'new', 20000.00);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`, `status`, `price`) VALUES (2, 'TRECO METAL FURING - Rangka Plafon', 1, 'file_1668834583.png', 'ADALAH PRODUK RANGKA PLAFOND YANG TERBUAT DARI BAHAN GALVALUM & GALVANIS\r\n\r\nPROFIL METAL FURING TRECO TRUSS :\r\n PANJANG : 3,6 - 4 M\r\nTEBAL : 0,30 MM (TCT)\r\n', '2022-11-17 20:34:24', '2023-02-12 10:51:58', NULL, 'new', 20000.00);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`, `status`, `price`) VALUES (3, 'TRECO ROOF - Atap dan Dinding Gelombang', 4, 'file_1668834599.png', 'ADALAH PRODUK PENUTUP ATAP DAN DINDING GELOMBANG DARI BAHAN GALVALUM. TERSEDIA DALAM BERBAGAI PILIHAN WARNA (PAINTED) DAN NON WARNA (BASE). TERSEDIA DALAM BERBAGAI TIPE KETEBALAN.\r\n', '2022-11-17 20:35:07', '2023-02-12 10:44:55', NULL, 'new', 20000.00);
COMMIT;

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `product_category_id` int NOT NULL AUTO_INCREMENT,
  `product_category_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`product_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of product_category
-- ----------------------------
BEGIN;
INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_description`) VALUES (1, 'Besi', 'Kategori Besi');
INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_description`) VALUES (2, 'Kayu', 'kategory kayu');
INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_description`) VALUES (3, 'Atap Baja Ringan', 'Atap Baja Ringan');
INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_description`) VALUES (4, 'Rangka Atap', 'Semua Rangka Atap');
COMMIT;

-- ----------------------------
-- Table structure for product_images
-- ----------------------------
DROP TABLE IF EXISTS `product_images`;
CREATE TABLE `product_images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `image_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `createAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of product_images
-- ----------------------------
BEGIN;
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (1, 13, 'Untitled_31.png', '2023-02-11 06:57:58');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (2, 13, 'Untitled_3cs.png', '2023-02-11 06:57:58');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (3, 13, 'Untitled_5h.png', '2023-02-11 06:57:58');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (4, 13, 'Untitled_6.png', '2023-02-11 06:57:58');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (5, 13, 'Untitled_312.png', '2023-02-11 06:57:58');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (6, 14, 'Untitled_32.png', '2023-02-11 06:59:32');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (7, 15, 'sdsd.png', '2023-02-11 07:00:26');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (8, 16, 'Untitled_33.png', '2023-02-11 07:19:03');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (9, 17, 'Untitled_34.png', '2023-02-11 07:21:19');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (10, 17, 'Untitled_3cs1.png', '2023-02-11 07:21:19');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (11, 17, 'Untitled_5h1.png', '2023-02-11 07:21:19');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (12, 17, 'Untitled_61.png', '2023-02-11 07:21:19');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (13, 17, 'Untitled_3121.png', '2023-02-11 07:21:19');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (14, 17, 'Untitled_3546.png', '2023-02-11 07:21:19');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (32, 18, '18-sdsd1.png', '2023-02-12 09:04:10');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (33, 18, '18-ukt.png', '2023-02-12 09:04:10');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (47, 19, '19-ddddd-5.png', '2023-02-12 09:09:19');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (52, 19, '19-ddddd-1.png', '2023-02-12 10:03:34');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (54, 1, '1-Rangka_Atap_Baja_Ringan-1.png', '2023-02-12 10:34:16');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (55, 2, '2-Rangka_Plafon-1.png', '2023-02-12 10:39:07');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (56, 2, '2-Rangka_Plafon-2.png', '2023-02-12 10:39:07');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (57, 2, '2-Rangka_Plafon-3.png', '2023-02-12 10:39:07');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (62, 3, '3-TRECO_ROOF_-_Atap_dan_Dinding_Gelombang-1.png', '2023-02-12 10:49:51');
INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `createAt`) VALUES (63, 3, '3-TRECO_ROOF_-_Atap_dan_Dinding_Gelombang-2.png', '2023-02-12 10:49:51');
COMMIT;

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id_setting` int NOT NULL AUTO_INCREMENT,
  `Nama` varchar(100) NOT NULL,
  `gambar_header` varchar(100) NOT NULL,
  `kunci` text NOT NULL,
  `addsense` text NOT NULL,
  `deskripsi` text NOT NULL,
  `fans_page` text NOT NULL,
  `map_google` text NOT NULL,
  `verfication` text NOT NULL,
  `favicon` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepone` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_rektor` varchar(50) NOT NULL,
  `video_profil` varchar(100) NOT NULL,
  `tentang_universitas` text NOT NULL,
  PRIMARY KEY (`id_setting`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting
-- ----------------------------
BEGIN;
INSERT INTO `setting` (`id_setting`, `Nama`, `gambar_header`, `kunci`, `addsense`, `deskripsi`, `fans_page`, `map_google`, `verfication`, `favicon`, `logo`, `alamat`, `telepone`, `email`, `nama_rektor`, `video_profil`, `tentang_universitas`) VALUES (1, 'Treco', '', '', 'fgfgjhklhk', 'adalah brand baja ringan lokal berasal dari Sumatera Barat dan sudah Go Nasional. Nama TRECO merupakan Akronim dari Three Colour yang bermakna Tiga Warna yang diidentifikasi di dalamnya adalah warna \r\n“TIGO TUNGKU SAJARANGAN” yang selama ini menjadi pilar kehidupan masyarakat Minang.\r\nBerdasarkan  filosofi tersebut dapat dicirikan bahwa TRECO adalah perusahaan yang didirikan di Sumatera Barat oleh putra daerahnya demi memenuhi kebutuhan masyarakat Sumatera Barat terhadap rangka atap baja ringan berkualitas SNI yang selama ini mayoritas disuplay dari luar daerah Sumatera Barat.\r\n\r\n', '', '', '', 'favx.png', 'logox.png', 'Jl. Veteran No.69f, Purus, Kec. Padang Bar., Kota Padang, Sumatera Barat 25115', '+6285263263269', 'admin.ho@treco.id', 'Treco.id', '', 'adalah brand baja ringan lokal berasal dari Sumatera Barat dan sudah Go Nasional. Nama TRECO merupakan Akronim dari Three Colour yang bermakna Tiga Warna yang diidentifikasi di dalamnya adalah warna \r\n“TIGO TUNGKU SAJARANGAN” yang selama ini menjadi pilar kehidupan masyarakat Minang.');
COMMIT;

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id_slider` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) DEFAULT NULL,
  `isi` varchar(200) NOT NULL,
  `url` varchar(100) NOT NULL,
  `gambar` varchar(30) DEFAULT NULL,
  `tanggal_upload` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_slider`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slider
-- ----------------------------
BEGIN;
INSERT INTO `slider` (`id_slider`, `judul`, `isi`, `url`, `gambar`, `tanggal_upload`) VALUES (81, 'Baja Ringan', 'Menyediakan Besi Perumahan', '', 'file_1668653329.jpeg', '2022-11-17');
INSERT INTO `slider` (`id_slider`, `judul`, `isi`, `url`, `gambar`, `tanggal_upload`) VALUES (82, 'rumah', '', '', 'file_1668653188.jpeg', '2022-11-17');
COMMIT;

-- ----------------------------
-- Table structure for submission
-- ----------------------------
DROP TABLE IF EXISTS `submission`;
CREATE TABLE `submission` (
  `id_submission` int NOT NULL AUTO_INCREMENT,
  `id_journal` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `afiliasi` varchar(200) NOT NULL,
  `artikel` varchar(200) NOT NULL,
  PRIMARY KEY (`id_submission`),
  KEY `id_journal` (`id_journal`),
  KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of submission
-- ----------------------------
BEGIN;
INSERT INTO `submission` (`id_submission`, `id_journal`, `nama`, `email`, `no_hp`, `afiliasi`, `artikel`) VALUES (17, 11, 'tes2022', 'irfanthomi@gmail.com', '878', 'uhj', 'tes2022_file_1652294945.docx');
COMMIT;

-- ----------------------------
-- Table structure for team
-- ----------------------------
DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id_team` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `riwayat_pendidikan` text NOT NULL,
  `deskripsi_singkat` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jabatan` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of team
-- ----------------------------
BEGIN;
INSERT INTO `team` (`id_team`, `nama`, `username`, `password`, `nip`, `riwayat_pendidikan`, `deskripsi_singkat`, `foto`, `jabatan`, `email`, `fb`) VALUES (30, 'irfan thomi', 'irfanthomi', 'unj92lRet.9mI', '000', '-', 'IT', 'team1630684461.png', 3, 'idm@idm.ac.id', NULL);
INSERT INTO `team` (`id_team`, `nama`, `username`, `password`, `nip`, `riwayat_pendidikan`, `deskripsi_singkat`, `foto`, `jabatan`, `email`, `fb`) VALUES (34, '[removed]alert&#40;\"rr\"&#41;[removed]', '[removed]alert(', 'unl26TICB8PYQ', '1212', '212', '[removed]alert&#40;\"rr\"&#41;[removed]', 'team1659963931.jpeg', 2, 'irfanthomi@gmail.com', NULL);
COMMIT;

-- ----------------------------
-- Table structure for testimonial
-- ----------------------------
DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE `testimonial` (
  `id_testimonial` int NOT NULL AUTO_INCREMENT,
  `isi` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_testimonial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of testimonial
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for video
-- ----------------------------
DROP TABLE IF EXISTS `video`;
CREATE TABLE `video` (
  `id_video` int NOT NULL,
  `url` varchar(50) NOT NULL,
  `id_yt` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `tampil_depn` enum('N','Y','') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of video
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for widget
-- ----------------------------
DROP TABLE IF EXISTS `widget`;
CREATE TABLE `widget` (
  `id_widget` int NOT NULL AUTO_INCREMENT,
  `parameter` text NOT NULL,
  `nilai` text NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_widget`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of widget
-- ----------------------------
BEGIN;
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
