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

 Date: 19/11/2022 12:19:34
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
INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`, `nama`, `log`) VALUES (58, 'admin1 ', 'unF10Aq88Ly42', 'idm@idm.or.id', 'admin', 'admin', '2021-07-30 21:41:37');
INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`, `nama`, `log`) VALUES (64, 'unesadmin', 'unF10Aq88Ly42', '', 'admin', 'anggota', '2021-07-30 21:41:37');
INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `level`, `nama`, `log`) VALUES (65, 'irfanthomi', 'unMiD.hEYSzo.', '', 'user', 'irfan thomi', '2021-08-24 10:58:10');
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
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (85, 'Balada Dosen dan Publikasi', 'balada-dosen-dan-publikasi', '<p>Jakarta - Accepted. Ya, itu adalah kata yang sangat sakral dan ditunggu-tunggu bagi siapapun yang sedang submit sebuah jurnal. Kita bisa berjingkat kegirangan saat ada surel masuk bertuliskan kata sakti tersebut. Tidak bisa dipungkiri bahwa pembahasan terkait dunia publikasi jurnal ini tidak ada habisnya dan masih dianggap \"seksi\" bagi siapapun yang terjun di kancah \"persilatan\" akademisi, di antaranya motivasinya faktor kewajiban dalam mengamalkan Tri Dharma Perguruan Tinggi, faktor kebanggaan karena mendapat \"legitimasi\" sebagai seorang ilmuwan, juga mungkin terkait dalam hal mengerek kenaikan jabatan yang berimbas pada perbaikan ekonomi.<br>\r\n<br>\r\nDi mata sang idealis, tentu semua itu juga berkontribusi dalam meningkatkan sumber daya manusia Indonesia. Sayangnya, semangat yang begitu heroik tersebut sering tersandung dengan mahalnya biaya publikasi jurnal. Tidak heran, masih sangat banyak kita jumpai seorang dosen yang sudah mengabdi belasan bahkan puluhan tahun, tapi jumlah publikasinya bisa dihitung jari, bahkan banyak juga yang jalan di tempat. Jadi sampai lebaran kuda pun jangan harap bisa menyandang gelar profesor tanpa adanya publikasi jurnal ini.<br>\r\n<br>\r\nDalam aturan Pedoman Operasional/Penilaian Angka Kredit (PO-PAK) Kemendikbud, sangat jelas porsi kewajiban penelitian ini sangat besar yakni antara 25%-45% tergantung jabatan fungsionalnya. Sedangkan kita tahu, salah satu produk penting dari sebuah penelitian adalah publikasi jurnal.<br>\r\n<br>\r\nJurnal sangat banyak macamnya, dari mulai jurnal kelas \"gurem\" sampai dengan jurnal kelas \"tier tinggi\" alias Jurnal Internasional Bereputasi. Rata-rata jurnal ini bersandar pada lembaga pengindeks Scopus dan Web of Science, sedangkan untuk jurnal lokal berkiblat pada lembaga Sinta.<br>\r\n<br>\r\nHarus diakui, produktivitas karya ilmiah para ilmuwan di negara kita masih tergolong rendah. Menilik dari website lembaga pemeringkat terkemuka yakni Scimagojr, Indonesia cuma berada di peringkat ke-45 di dunia, bahkan di kancah Asia Tenggara pun kita masih kalah dari Thailand, Singapura, dan Malaysia. Jadi masih jauh panggang dari api, padahal kita memiliki potensi di atas mereka.<br>\r\n<br>\r\nKenapa fenomena ini bisa terjadi? Salah satu yang paling besar pengaruhnya adalah karena mahalnya biaya publikasi ini. Coba kita telisik lebih dalam kenapa publikasi Jurnal Ilmiah Bereputasi ini dikatakan mahal.<br>\r\n<br>\r\nHarga dalam sebuah jurnal dikenal dengan istilah Article Publishing Charge (APC). Sebagai contoh, harga APC (tier Q1) dari Jurnal Internasional Bereputasi:<br>\r\n-Nurse Education Today USD 4.090 = Rp 58.7 juta<br>\r\n-International Journal of Nursing Studies USD 4.470 = Rp 64.1 juta<br>\r\n-Journal of the American Medical Directors Association USD 4.370 = Rp 62,7 juta<br>\r\n<br>\r\nDan, masih banyak jurnal lain, yang mayoritas berharga di angka puluhan juta rupiah. Bagi seorang dosen yang bekerja di luar negeri yang digaji dengan dolar, mungkin APC ini tidak akan jadi sebuah masalah, dan tinggal \"sat set sat set\". Tapi bagi seorang dosen yang tinggal di Indonesia dengan gaji rupiah, nominal tersebut tentu sangatlah fantastis. Bayangkan harga dari sebuah jurnal saja, jika dikonversikan terhadap gaji seseorang yang berbasis UMR, itu sudah setara dengan gaji 2 tahun penuh, belum lagi kalau terkena pajak penghasilan.<br>\r\n<br>\r\nApakah ada jurnal yang gratis? Jawabannya ada. Memang betul ada yang gratis, Tapi, perlu diperhatikan Jurnal Internasional Bereputasi yang gratis sangatlah sedikit; anak muda mengenalnya dengan istilah \"barang ghaib\". Jadi begini, mayoritas Jurnal Internasional Bereputasi menerapkan open access; semua orang bisa download dan membaca paper jurnal kita dengan cuma-cuma alias gratis.<br>\r\n<br>\r\nKalau begitu siapa yang menanggung beban biaya operasional dari si penerbit jurnal? Jawabannya, Ya jelas kita yang submit ke jurnal tersebut. Jadi itulah alasan kenapa mayoritas jurnal berbayar. Banyak yang beralasan semua itu karena ada kartel bisnis di dalamnya. Begini saja; coba dipikirkan: sebuah penerbit jurnal mengakomodasi ribuan paper yang di submit oleh para peneliti di seluruh dunia. Jelas ini akan membutuhkan cost operasional yang tidaklah murah bukan?<br>\r\n<br>\r\nJika berbicara soal jurnal gratis, saya analogikan sebagai \"sebuah pintu\"; ukuran pintu ini sangatlah kecil dan jumlahnya sedikit, sedangkan yang mau masuk saja butuh antrean panjang dan berjibun. Otomatis kita menjadi sangat sulit bergerak dan akan terjadi \"baku hantam\" dalam prosesnya. Belum lagi masalah ketidaksesuaian topik penelitian kita dengan jurnal tersebut.<br>\r\n<br>\r\nApakah pemerintah perlu untuk turun tangan dalam pembiayaan APC ini? Jelas sangat perlu, karena kalau hanya mengandalkan kantong pribadi seorang dosen, maka hal itu adalah mustahil. Dari pihak kampus memang biasanya menyediakan bantuan publikasi, tapi ini sifatnya pun terbatas dan harus berkompetisi terlebih dahulu dengan rekan sejawat. Dan, perlu diingat juga, masih banyak juga kampus kampus kecil lain yang mengalami keterbatasan pendanaan ini.<br>\r\n<br>\r\nJurnal-jurnal bereputasi memang mahal, tapi mahalnya sebanding dengan tingkat reputasi yang dijaganya. Siapapun para peneliti, walaupun katakanlah punya dana melimpah, tapi jika kualitas publikasinya tidak berkualitas, ya tidak akan pernah bisa masuk ke jurnal jurnal bereputasi tersebut.<br>\r\n<br>\r\nJurnal bereputasi ini sangat kredibel dan ketat dalam menerapkan peer-review, bahkan mayoritas mereka menerapkan double-blind review. Jadi tidak ada celah lagi. Kecuali submit-nya ke jurnal abal-abal atau bahkan terperosok ke jurnal \"predator\". Itu namanya zonk, jurnal fraud --uang hilang dan jurnal kita tidak ada nilainya.<br>\r\n<br>\r\nKita semua tahu bahwa Indonesia butuh pemerataan sumber daya manusia yang berkualitas. Sokongan penuh dari pemerintah akan menambah daya dorong dalam mengakselerasi produktivitas karya-karya ilmiah ilmuwan Indonesia.<br>\r\n<br>\r\nYayu Nidaul Fithriyyah, S.Kep, Ns, M.Kep dosen PSIK-FKKMK UGM<br>\r\n<br>\r\nBaca artikel detiknews, \"Balada Dosen dan Publikasi Ilmiah\" selengkapnya <a href=\"https://news.detik.com/kolom/d-6022967/balada-dosen-dan-publikasi-ilmiah\">https://news.detik.com/kolom/d-6022967/balada-dosen-dan-publikasi-ilmiah</a>.<br>\r\n<br>\r\nDownload Apps Detikcom Sekarang https://apps.detik.com/detik/</p>\r\n\r\n<p>Sumber : https://news.detik.com/kolom/d-6022967/balada-dosen-dan-publikasi-ilmiah </p>\r\n', 'file_1656551510.jpg', '58', '35', '', '2022-06-30');
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (80, 'Dirjen Dikti: Tri Dharma Perguruan Tinggi Tidak Berhenti Meski Pandemi Covid-19', 'dirjen-dikti-tri-dharma-perguruan-tinggi-tidak-berhenti-mesk', '<p>Lampung – Pandemi Covid-19 telah menjadi disruptor terbesar pada abad ke-21 yang tidak pernah terduga sebelumnya. Namun, hal ini tidak menghalangi pelaksanaan Tri Dharma Perguruan Tinggi yang merupakan kewajiban perguruan tinggi untuk menyelenggarakan pendidikan, penelitian, dan pengabdian kepada masyarakat. Dalam acara Seminar Nasional Penelitian dan Pengabdian kepada Masyarakat Universitas Muhammadiyah Metro, Rabu (21/10), Direktur Jenderal Pendidikan Tinggi, Nizam, menyampaikan beberapa hal dalam mengimplementasikan Tri Dharma Perguruan Tinggi pada saat pandemi Covid-19.</p>\r\n\r\n<p>Dalam hal pendidikan, pembelajaran diselenggarakan dalam konteks menggerakkan interaksi kampus dengan dunia kerja yang dilakukan dengan program Merdeka Belajar Kampus Merdeka, dimana mahasiswa akan mempunyai pengalaman, wawasan, hard skill dan soft skill yang lebih kuat. Selain itu, pembelajaran daring memungkinkan mahasiswa untuk dapat mengambil lintas prodi dan lintas kampus, mengikuti kegiatan relawan mahasiswa, mengikuti proyek mandiri mahasiswa, melakukan riset terapan bersama dosen, dan pengabdian kepada masyarakat.</p>\r\n\r\n<p>“Salah satu contoh program kegiatan yang dilakukan relawan mahasiswa yaitu program Relawan Covid-19 (RECON) yang diikuti oleh sebanyak 15.000 mahasiswa kesehatan yang mendaftar sebagai relawan. Para relawan tersebut memiliki beberapa tugas, yaitu menjalankan program Komunikasi, Informasi, dan Edukasi (KIE), promotive, preventive tracing, screening, dan lainnya,” ucapnya.</p>\r\n\r\n<p>Selain itu, terdapat beberapa kegiatan lain yang dilakukan mahasiswa untuk pengabdian kepada masyarakat yang meliputi KKN Tematik Covid-19, Kampus Mengajar yang terbagi menjadi dua yaitu Mengajar Dari Rumah (MDR) dan Kampus Mengajar Perintis (KMP), Duta Edukasi Perubahan Perilaku, dan Kampus Merdeka untuk ketahanan pangan dan pemulihan ekonomi yang direncanakan untuk tahun 2021.</p>\r\n\r\n<p><a href=\"https://dikti.kemdikbud.go.id/kabar-dikti/kabar/kemendikbud-serahkan-bantuan-apd-ke-relawan-dan-rumah-sakit-pendidikan/\" rel=\"nofollow\" target=\"_blank\">Baca Juga :  Kemendikbud Serahkan Bantuan APD Ke Relawan dan Rumah Sakit Pendidikan</a></p>\r\n\r\n<p>“Terdapat beberapa pembelajaran yang dapat diambil dalam hal ini, yaitu terjadinya adaptasi yang sangat cepat terhadap penggunaan teknologi pembelajaran, kerja dari rumah tidak kalah produktif dengan kerja di kantor, energi kreatif justru meningkat saat pandemi, lebih dari 1.000 invensi dan inovasi dihasilkan oleh perguruan tinggi, dan semangat gotong royong untuk bangkit dan kuat,” jelas Nizam.</p>\r\n\r\n<p>Pada kesempatan tersebut, Nizam juga menjelaskan bahwa Direktorat Jenderal Pendidikan Tinggi (Ditjen Dikti) sedang berkoordinasi dengan Kementerian Komunikasi dan Informatika (Kemenkominfo) dan penyedia jasa internet untuk membebaskan biaya akses sumber belajar daring di perguruan tinggi maupun Ditjen Dikti Kemendikbud. Lebih lanjut Nizam menjelaskan bahwa sejak bulan April, sebanyak 98% perguruan tinggi sudah melakukan metode pembelajaran daring walau masih ada perguruan tinggi yang belum memiliki kapasitas untuk pembelajaran daring.</p>\r\n\r\n<p>“Ditjen Dikti telah menyiapkan platform Learning Management System &#40;LMS&#41; nasional atau Sistem Pembelajaran Daring (SPADA) Indonesia untuk menjadi repositori bagi perguruan tinggi yang belum siap dengan modul pembelajaran daring. Saat ini, sebanyak 244 perguruan tinggi telah bergotong royong dan berbagi melalui SPADA ini dengan lebih dari 3.000 modul pembelajaran yang bisa diakses oleh seluruh dosen dan mahasiswa,” ujarnya.</p>\r\n\r\n<p><a href=\"https://dikti.kemdikbud.go.id/kabar-dikti/kabar/ditjen-dikti-adakan-sosialisasi-netralitas-asn-dalam-masa-pilkada-2020/\" rel=\"nofollow\" target=\"_blank\">Baca Juga :  Ditjen Dikti Adakan Sosialisasi Netralitas ASN dalam Masa Pilkada 2020</a></p>\r\n\r\n<p>Di masa pandemi ini, Nizam mengungkapkan bahwa ponsel masih menjadi alat utama pembelajaran dengan menggunakan moda pembelajaran campuran antara asynchronous dan synchronous. Jika dibandingkan keduanya, penggunaan moda asynchronous masih lebih unggul dengan persentase sebesar 34,70% dimana tingginya biaya akses internet dan pulsa menjadi kendala utama dari sistem pembelajaran daring. Selain itu, meskipun situasi pandemi ini tak terduga dan tanpa persiapan, namun survei tersebut menunjukkan sebanyak 44,87% mahasiswa siap mengadaptasi perubahan sistem pembelajaran dan menunjukkan kualitas perkuliahan yang baik. Di sisi lain, untuk meningkatkan kesiapan dosen dalam sistem pembelajaran daring, Ditjen Dikti juga mengadakan pelatihan pembelajaran daring selama bulan Juni-Agustus yang diikuti oleh lebih dari 100.000 dosen.</p>\r\n\r\n<p>“Menurut survei yang ditujukan kepada 230.000 mahasiswa ini, penilaian kualitas perkuliahan cukup baik dan positif. Yang menjadi penting juga, bahan ajar yang diberikan oleh dosen dinilai cukup baik oleh mahasiswa. Ini dikarenakan dosen membagikan seluruh bahan ajar kepada mahasiswa untuk belajar sendiri. Namun kendala utama tetap pada biaya koneksi yang korelasinya tidak terlalu positif dengan pencapaian pembelajaran,” jelasnya.</p>\r\n\r\n<p>“Beberapa hal yang sudah dijelaskan sebelumnya adalah hal-hal yang dapat dilakukan dalam mengerjakan Tri Dharma Perguruan Tinggi yang tidak berhenti meskipun adanya pandemi Covid-19. Inilah saatnya kita membuktikan Indonesia dapat berdaulat di dalam teknologi dan ilmu pengetahuan,” pungkasnya.<br>\r\n(YH/DZI/FH/DH/NH/MFS/VAL/YJ/ITR)</p>\r\n\r\n<p>Humas Ditjen Dikti<br>\r\nKementerian Pendidikan dan Kebudayaan</p>\r\n\r\n<p>https://dikti.kemdikbud.go.id/kabar-dikti/kabar/dirjen-dikti-tri-dharma-perguruan-tinggi-tidak-berhenti-meski-pandemi-covid-19/</p>\r\n', 'file_1656551876.png', '58', '35', '', '2022-06-30');
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (81, 'Dosen Harus Terapkan Tridharma Perguruan Tinggi', 'dosen-harus-terapkan-tridharma-perguruan-tinggi', '<p>REPUBLIKA.CO.ID, TASIKMALAYA--Setiap dosen memiliki kewajiban untuk melaksanakan tridharma perguruan tinggi yang terdiri dari pengajaran, penelitian dan pengabdian masyarakat. Hal ini dilengkapi dengan kegiatan penunjang seperti keikutsertaan dosen dalam berbagai kegiatan akademik maupun non akademik, baik sebagai peserta maupun panitia.</p>\r\n\r\n<p>Setiap akhir semester, dosen Universitas BSI (Bina Sarana Informatika) wajib melaporkan beban kinerja dosen (BKD) yang merupakan implementasi dari tridharma perguruan tinggi. Pelaporan dilakukan pada aplikasi internal kampus yang disebut MySimliz. Tanpa terkecuali, dosen Universitas BSI kampus Tasikmalaya.</p>\r\n\r\n<p>LPPM (Lembaga Penelitian dan Pengabdian pada Masyarakat) sebagai verifikator bidang penelitian, pengabdian masyarakat dan kegiatan penunjang melakukan cek-ricek atas laporan yang telah diunggah oleh dosen.</p>\r\n\r\n<p>Tuti Alawiyah, salah satu tim verifikator dan juga staf LPPM Universitas BSI kampus Tasikmalaya mengatakan sistem laporan BKD dengan menggunakan aplikasi MySimliz ini sangat membantu LPPM dalam mengelola data penelitian dan pengabdian masyarakat yang telah dilakukan dosen Universitas BSI.</p>\r\n\r\n<p>“Hal ini sangat membantu LPPM dalam melakukan input kinerja penelitian dan kinerja abdimas pada aplikasi simlitabmas Ristekdikti,” ujarnya dalam keterangan tertulisnya, Jumat (30/7).</p>\r\n\r\n<p>Ia menyebutkan partisipasi dosen dalam melaporkan kegiatan tridharma, sangat membantu LPPM dalam mengumpulkan data. Khsusunya untuk berbagai kebutuhan seperti akreditasi dan input data simlitabmas Ristekdikti. “Adanya kewajiban melaporkan BKD pada setiap akhir semester, mendorong dosen Universitas BSI untuk aktif melaksanakan tridharma perguruan tinggi,” ungkap Tuti.</p>\r\n\r\n<p>Sementara itu, Kaprodi Sistem Informasi Universitas BSI Kampus Tasikmalaya, Deddy Supriadi menyebutkan pada semester lalu 100 persen dosen Universitas BSI kampus Tasikmalaya aktif melaksanakan tridharma perguruan tinggi dan telah melaporkannya pada aplikasi MySimliz.</p>\r\n\r\n<p>“Sedangkan untuk semesteri ini, dosen Universitas BSI kampus Tasikmalaya masih dalam input dan unggah laporan BKD semester genap 2020/2021 dan LPPM secara bertahap melakukan verifikasi atas laporan tersebut. Semoga semester ini pun, dosen Universitas BSI kampus Tasikmalaya juga mencapai target 100 persen penyelesaian input laporan BKD. Dan tidak ada yang menemui kendala atau halangan yang berarti, karena ini akan jadi salah satu penilaian kondite para dosen,” tuturnya.</p>\r\n\r\n<p>Sumber : https://www.republika.co.id/berita/qx1ie0380/dosen-harus-terapkan-tridharma-perguruan-tinggi</p>\r\n', 'file_1656551720.jpg', '58', '35', '', '2022-06-30');
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (95, 'Tutorial Tracking Status PAK', 'tutorial-tracking-status-pak', '<p>Ditjen Dikti Kemendikbud telah meluncurkan aplikasi pelacakan atau penelusuran proses pengajuan usulan kenaikan pangkat dosen melalui Sistem Pelacakan Secara Mandiri Penilaian Angka Kredit (Selancar PAK).</p>\r\n\r\n<p>https://pak.kemdikbud.go.id/portalv2/selancar-pak/</p>\r\n', 'file_1656551267.png', '58', '35', '', '2022-06-30');
INSERT INTO `artikel` (`id_artikel`, `judul`, `judul_seo`, `isi`, `gambar`, `id_user`, `kategori`, `hits`, `tanggal`) VALUES (96, 'Layanan Sumber Daya', 'layanan-sumber-daya', '<h1>Direktorat Jenderal Pendidikan Tinggi, Riset, dan Teknologi<br>\r\nKementerian Pendidikan, Kebudayaan, Riset, dan Teknologi</h1>\r\n\r\n<h1>Layanan Sumber Daya</h1>\r\n\r\n<h2>SUMBER DAYA</h2>\r\n\r\n<p>Direktorat Sumber Daya mempunyai tugas menyelenggarakan perumusan dan pelaksanaan kebijakan di bidang sumber daya pendidikan tinggi serta perumusan, koordinasi, dan sinkronisasi pelaksanaan kebijakan di bidang sumber daya.</p>\r\n\r\n<p><strong>1. Penilaian Angka Kredit (PAK) Pendidik</strong></p>\r\n\r\n<p>Mengacu pada Undang-Undang Nomor 20 tahun 2003 tentang Sistem Pendidikan Nasional, Undang-Undang Nomor 14 tahun 2005 tentang Guru dan Dosen, Peraturan Pemerintah Nomor 37 tahun 2009 tentang Dosen dan Undang-Undang Nomor 12 tahun 2012 tentang Pendidikan Tinggi, PAK Pendidik adalah Sistem Kenaikan Jabatan Akademik berdasarkan angka kredit bagi Dosen sebagai upaya peningkatan mutu dan kualitas pendidikan. Dengan kepentingan akuntabilitas, standar, tata cara dan prosedur penilaian angka kredit untuk pengusulan kenaikan jabatan akademik/pangkat dosen diupayakan dapat memberikan kemudahan kenaikan jabatan akademik/pangkat kepada yang berhak secara terandal. Informasi lebih lanjut dapat mengakses tautan berikut :</p>\r\n\r\n<p><a href=\"https://pak.kemdikbud.go.id/portal/\">https://pak.kemdikbud.go.id/portal/</a></p>\r\n\r\n<p><strong>2. Sertifikasi Dosen</strong></p>\r\n\r\n<p>Berdasarkan pada UU Nomor 20 Tahun 2003 tentang Sistem Pendidikan Nasional, UU Nomor 14 Tahun 2005 tentang Guru dan Dosen, dan Peraturan Pemerintah R.I No. 37 Tahun 2009 tentang Dosen dan Peraturan Mendiknas RI Nomor 47 Tahun 2009 tentang Sertifikasi Pendidik Untuk Dosen, Program Sertifikasi Dosen merupakan penghargaan dengan memberikan sertifikat pendidik kepada dosen sebagai upaya meningkatkan mutu pendidikan nasional, mendukung kesejahteraan, dan meningkatkan profesionalitasnya. Proses penilaian akhir portofolio dilakukan oleh asesor, yang diusulkan oleh perguruan tinggi penyelenggara sertifikasi dosen setelah mengikuti pembekalan sertifikasi, dan mendapatkan pengesahan dari Direktorat Jenderal Pendidikan Tinggi.</p>\r\n\r\n<p><strong>3. Penilaian Angka Kredit Pranata Laboratorium Pendidikan (PAK PLP)</strong></p>\r\n\r\n<p>Merujuk pada Peraturan Menteri Pendayagunaan aparatur Negara dan Reformasi Birokrasi Nomor 03 Tahun 2010 tentang Jabatan Fungsional Pranata Laboratorium Pendidikan dan Angka Kreditnya, Penilaian Angka Kredit Pranata Laboratorium Pendidikan adalah Sistem Kenaikan Jabatan Akademik berdasarkan angka kredit bagi Pranata Laboratorium Pendidikan sebagai upaya peningkatan mutu dan kualitas pendidikan. Yang selanjutnya, penetapan jenjang jabatan, pangkat, dan golongan ruang untuk masing- masing jenjang jabatan PLP ditentukan berdasarkan jumlah angka kredit yang ditetapkan oleh pejabat yang berwenang.</p>\r\n\r\n<p><strong>4. Layanan Beasiswa Pendidikan Pascasarjana Dalam Negeri (BPP DN)</strong></p>\r\n\r\n<p>BPP-DN adalah Beasiswa Pendidikan Pascasarjana Dalam Negeri yang disediakan oleh Direktorat Jenderal Pendidikan Tinggi untuk dosen atau tenaga kependidikan di bawah lingkup Kementerian Ristek dan Dikti. Beasiswa yang diperuntukkan bagi dosen Perguruan Tinggi Negeri (PTN) dan Perguruan Tinggi Swasta (PTS) ini meliputi jenjang S2 atau S3 di perguruan tinggi dalam negeri. Dikti ini terbuka bagi dosen perguruan tinggi negeri (PTN) maupun perguruan tinggi swasta (PTS). Selain biaya pendidikan, beasiswa BPP-DN meliputi biaya hidup, biaya domisili, biaya penelitian, biaya buku, hingga biaya perjalanan.</p>\r\n\r\n<p><strong>5. Layanan Beasiswa Pendidikan Luar Negeri (BPP LN)</strong></p>\r\n\r\n<p>Selain beasiswa BPP-DN, Ditjen Dikti turut menawarkan beasiswa BPP-LN atau Beasiswa Pendidikan Pascasarjana Luar Negeri. Beasiswa ini ditujukan bagi dosen atau tenaga kependidikan yang ingin meraih gelar S2 atau S3 di pergruan tinggi luar negeri. Kandidat terpilih beasiswa BPP-LN ini akan diberikan beasiswa penuh meliputi uang kuliah, biaya hidup, tunjangan biaya hidup untuk keluarga yang menyertai, tiket pesawat, asuransi kesehatan, dan biaya buku. Selain itu disediakan pula biaya penyesuaian saat kedatangan, biaya program khusus, biaya penulisan tugas akhir/tesis/disertasi, serta biaya biaya pendaftaran ke perguruan tinggi luar negeri.</p>\r\n\r\n<p><strong>6. Layanan Beasiswa Pendidikan Magister Menuju Doktor untuk Sarjana Unggul (PMDSU)</strong></p>\r\n\r\n<p>Program Beasiswa Pendididikan Magister Menuju Doktor untuk Sarjana Unggul (PMDSU) merupakan jalur akselerasi bagi yang berminat menjadi dosen yang ditujukan bagi lulusan sarjana (S1) terbaik (fresh graduate) dengan menempuh pendidikan hingga doktor (S3) selama empat tahun. Hal ini merupakan upaya pemerintah untuk memenuhi kebutuhan jumlah dosen bergelar doktor di tanah air. Beasiswa PMDSU di antaranya meliputi biaya riset di kelompok peneliti/, outsourcing fasilitas riset di dalam dan luar negeri, biaya seminar, biaya pendidikan (SPP/UKT), biaya hidup dan tunjangan mahasiswa, dan biaya administrasi.</p>\r\n\r\n<p><strong>7. Layanan Beasiswa Tendik Berprestasi (PasTi).</strong></p>\r\n\r\n<p>Selain beasiswa untuk Mahasiswa dan Dosen, Ditjen Dikti melalui Direktorat Sumber Daya mengelola Beasiswa Tendik Berprestasi. Peningkatan peran Tenaga Kependidikan ini sebagai upaya dalam mendukung peningkatan mutu pendidikan tinggi menuju world class university yang mampu bersaing secara global, serta mampu menciptakan keselarasan dengan perkembangan teknologi dan keterampilan baru, dalam rangka mendukung dan mengimplementasikan Era Industri 4.0. Sehingga perlu peningkatan kualitas Tendik berprestasi di perguruan tinggi guna mengangkat kualitas pengelolaan dan manajemen di perguruan tinggi.</p>\r\n\r\n<p>8. <strong>Beban Kerja Dosen (BKD)</strong></p>\r\n\r\n<p>BKD merupakan kegiatan yang dibebankan kepada dosen dalam menjalankan tugas dan kewajibannya sebagai pendidik profesional dan ilmuwan pada kurun waktu tertentu. Secara detail di jelaskan dalam<strong> UU No.14 Tahun 2005 Tentang Guru dan Dosen, Pasal 72:</strong></p>\r\n\r\n<ul>\r\n <li><em>BKD </em><em>mencakup kegiatan pokok</em><em>; pembelajaran (</em><em>merencanakan, melaksanakan proses, </em><em>dan </em><em>melakukan evaluasi</em><em>), </em><em>membimbing dan melatih, </em><em>melakukan penelitian, melakukan tugas tambahan, serta melakukan pengabdian kepada masyarakat,</em></li>\r\n <li><em>BKD </em><em>paling sedikit</em><em> sepadan dengan 12 (dua belas) satuan kredit semester dan </em><em>paling banyak</em><em> 16 (enam belas) satuan kredit semester, dan</em></li>\r\n <li><em>k</em><em>etentuan lebih lanjut mengenai BKD diatur oleh setiap satuan pendidikan tinggi sesuai dengan peraturan perundang-undangan</em></li>\r\n</ul>\r\n\r\n<p>BKD merupakan cerminan atas Indikator Kinerja Dosen, yang <strong>Secara Langsung dan Tidak Langsung </strong>Menunjang Indikator Kinerja Utama Perguruan Tinggi, dan menunjang Indikator Kinerja Kementerian. Atas dasar itu, BKD merupakan tonggak dari  <strong>Transformasi dan Reformasi Manajemen SDM Pendidikan Tinggi.</strong></p>\r\n\r\n<p>Terima kasih atas penilaian, kritik dan sarannya sehingga Layanan Direktorat Sumber Daya dapat meraih nilai Indeks Kepuasan Masyarakat (IKM) 81,83 pada triwulan I tahun 2022.</p>\r\n\r\n<p>http://dikti.kemdikbud.go.id/layanan-sumber-daya/ </p>\r\n', 'file_1656551081.png', '58', '35', '', '2022-06-30');
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
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of halaman
-- ----------------------------
BEGIN;
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (25, 'Tentang', '<h2><strong>About</strong></h2>\r\n', '58', '', '2022-11-17', NULL);
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (35, 'Visi & Misi', '<p><strong>VISI KAMI</strong><br>\r\nMenjadi perusahaan terkemuka di industri besi.</p>\r\n\r\n<p><strong>MISI KAMI</strong><br>\r\nSelalu turut serta dalam perkembangan perekonomian Indonesia dan mendukung setiap program pemerintah.<br>\r\nMemberikan layanan prima dan berkualitas kepada seluruh pelanggan.</p>\r\n', '58', '', '2022-11-17', 'file_1668685957.jpeg');
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (33, 'Contact', '<h2>Alamat</h2>\r\n\r\n<ul>\r\n <li>Head Office Gedung covesia Lt2.2,J.Veteran No.69F,Purus,Kec.Padang Barat,Kota Padang Sumatera Barat</li>\r\n <li>085274516100</li>\r\n <li>admin.ho@treco.id</li>\r\n <li>www.treco.id</li>\r\n</ul>\r\n', '58', '', '2022-11-17', 'file_1668654086.jpeg');
INSERT INTO `halaman` (`id_halaman`, `judul`, `isi`, `id_user`, `hits`, `tanggal`, `gambar`) VALUES (34, 'Galery', '<main id=\"main\">\r\n\r\n    &lt;!-- ======= Breadcrumbs ======= --&gt;\r\n    <section id=\"breadcrumbs\" class=\"breadcrumbs\">\r\n      <div class=\"container\">\r\n\r\n        <ol>\r\n          <li><a href=\"index.html\">Home</a></li>\r\n          <li>Portfolio</li>\r\n        </ol>\r\n        <h2>Portfolio</h2>\r\n\r\n      </div>\r\n    </section>&lt;!-- End Breadcrumbs --&gt;\r\n\r\n    &lt;!-- ======= Portfolio Section ======= --&gt;\r\n    <section id=\"portfolio\" class=\"portfolio\">\r\n      <div class=\"container\">\r\n\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-12 d-flex justify-content-center\">\r\n            <ul id=\"portfolio-flters\">\r\n              <li data-filter=\"*\" class=\"filter-active\">All</li>\r\n              <li data-filter=\".filter-app\">App</li>\r\n              <li data-filter=\".filter-card\">Card</li>\r\n              <li data-filter=\".filter-web\">Web</li>\r\n            </ul>\r\n          </div>\r\n        </div>\r\n\r\n        <div class=\"row portfolio-container\">\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-1.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>App 1</h4>\r\n                <p>App</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-1.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 1\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-2.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Web 3</h4>\r\n                <p>Web</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-2.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-3.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>App 2</h4>\r\n                <p>App</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-3.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 2\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-4.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Card 2</h4>\r\n                <p>Card</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-4.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 2\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-5.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Web 2</h4>\r\n                <p>Web</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-5.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 2\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-6.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>App 3</h4>\r\n                <p>App</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-6.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"App 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-7.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Card 1</h4>\r\n                <p>Card</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-7.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 1\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-card\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-8.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Card 3</h4>\r\n                <p>Card</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-8.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Card 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n          <div class=\"col-lg-4 col-md-6 portfolio-item filter-web\">\r\n            <div class=\"portfolio-wrap\">\r\n              <img src=\"assets/img/portfolio/portfolio-9.jpg\" class=\"img-fluid\" alt=\"\">\r\n              <div class=\"portfolio-info\">\r\n                <h4>Web 3</h4>\r\n                <p>Web</p>\r\n                <div class=\"portfolio-links\">\r\n                  <a href=\"assets/img/portfolio/portfolio-9.jpg\" data-gallery=\"portfolioGallery\" class=\"portfolio-lightbox\" title=\"Web 3\"><i class=\"bx bx-plus\"></i></a>\r\n                  <a href=\"portfolio-details.html\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>\r\n                </div>\r\n              </div>\r\n            </div>\r\n          </div>\r\n\r\n        </div>\r\n\r\n      </div>\r\n    </section>&lt;!-- End Portfolio Section --&gt;\r\n\r\n    &lt;!-- ======= Clients Section ======= --&gt;\r\n    <section id=\"clients\" class=\"clients\">\r\n      <div class=\"container\">\r\n\r\n        <div class=\"section-title\">\r\n          <h2>Clients</h2>\r\n          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n        </div>\r\n\r\n        <div class=\"clients-slider swiper\">\r\n          <div class=\"swiper-wrapper align-items-center\">\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-1.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-2.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-3.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-4.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-5.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-6.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-7.png\" class=\"img-fluid\" alt=\"\"></div>\r\n            <div class=\"swiper-slide\"><img src=\"assets/img/clients/client-8.png\" class=\"img-fluid\" alt=\"\"></div>\r\n          </div>\r\n          <div class=\"swiper-pagination\"></div>\r\n        </div>\r\n\r\n      </div>\r\n    </section>&lt;!-- End Clients Section --&gt;\r\n\r\n  </main>&lt;!-- End #main --&gt;\r\n', '58', '', '2022-11-17', 'file_1668655379.jpeg');
COMMIT;

-- ----------------------------
-- Table structure for jabatan
-- ----------------------------
DROP TABLE IF EXISTS `jabatan`;
CREATE TABLE `jabatan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
BEGIN;
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (178, 0, 'kontak', 'halaman/detail/33/contact', 'Ya', 'Bottom', 7);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (174, 0, 'Profil', '#', 'Ya', 'Bottom', 1);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (188, 0, 'Product', '#', 'Ya', 'Bottom', 5);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (193, 0, 'Galery', 'galeri', 'Ya', 'Bottom', 6);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (214, 174, 'Tentang Kami', 'halaman/detail/25/tentang', 'Ya', 'Bottom', 2);
INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES (231, 174, 'Visi dan Misi', 'halaman/detail/35/visi--misi', 'Ya', 'Bottom', 3);
COMMIT;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `product_category` int NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `ctreateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updateAt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createBy` int DEFAULT NULL,
  PRIMARY KEY (`product_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of product
-- ----------------------------
BEGIN;
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (1, 'Besi Lunak', 1, 'file_1668834563.jpeg', 'kj', '2022-11-18 10:34:01', '2022-11-19 12:09:23', NULL);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (2, 'Baja Ringan', 1, 'file_1668834583.png', 'kjnkjn', '2022-11-18 10:34:24', '2022-11-19 12:09:43', NULL);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (3, 'Kayu Jati', 2, 'file_1668834599.png', 'klk', '2022-11-18 10:35:07', '2022-11-19 12:09:59', NULL);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (4, 'Kayu mahogani', 2, 'product_1668756910.png', 'jhkj', '2022-11-18 14:35:10', '2022-11-19 12:02:46', NULL);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (5, 'Besi basian', 1, 'product_1668756981.png', NULL, '2022-11-18 14:36:21', '2022-11-18 14:36:21', NULL);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (6, 'rtx', 1, 'product_1668757112.jpeg', NULL, '2022-11-18 14:38:32', '2022-11-18 14:38:32', NULL);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (7, 'Kayu mahogani 123', 2, 'product_1668757931.jpg', 'sdqsdqqwewe', '2022-11-18 14:52:11', '2022-11-18 14:52:11', NULL);
INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_image`, `product_description`, `ctreateAt`, `updateAt`, `createBy`) VALUES (8, 'basi123', 1, 'product_1668758147.jpg', '09807', '2022-11-18 14:55:47', '2022-11-19 12:03:09', NULL);
COMMIT;

-- ----------------------------
-- Table structure for product_category
-- ----------------------------
DROP TABLE IF EXISTS `product_category`;
CREATE TABLE `product_category` (
  `product_category_id` int NOT NULL AUTO_INCREMENT,
  `product_category_name` varchar(255) NOT NULL,
  `product_category_description` varchar(255) NOT NULL,
  PRIMARY KEY (`product_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of product_category
-- ----------------------------
BEGIN;
INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_description`) VALUES (1, 'Besi', 'Kategori Besi');
INSERT INTO `product_category` (`product_category_id`, `product_category_name`, `product_category_description`) VALUES (2, 'Kayu', 'kategory kayu');
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
INSERT INTO `setting` (`id_setting`, `Nama`, `gambar_header`, `kunci`, `addsense`, `deskripsi`, `fans_page`, `map_google`, `verfication`, `favicon`, `logo`, `alamat`, `telepone`, `email`, `nama_rektor`, `video_profil`, `tentang_universitas`) VALUES (1, 'Treco', '', '', 'fgfgjhklhk', 'seskripsi', '', '', '', 'favx.png', 'logox.png', 'Jl. Islamic Centre Makmur Tengah (ICM Tengah) No. B3  Cikadut, Kecamatan Cimenyan, Kabupaten Bandung', '+6285263263269', 'Idm.bandoeng@gmail.com', 'danyl mallisza', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.fhg\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.\r\n\r\n Ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n Duis aute irure dolor in reprehenderit in voluptate velit.\r\n Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.');
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
