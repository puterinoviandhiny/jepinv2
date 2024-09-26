<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataEvent = array(
            array(
                'id' => 1,
                'title' => 'Lomba Cipta Karya Teknologi Tepat Guna 2017',
                'slug' => 'lomba-cipta-karya-teknologi-tepat-guna-2017',
                'description' => '<p><strong>K</strong>ehadiran teknologi di masyarakat secara tidak langsung meningkatkan kemampuan produksi, memberikan nilai tambah pada komoditas lokal unggulan, menciptakan lapangan kerja dan meningkatkan pendapatan masyarakat. Tidak hanya itu saja, teknologi juga menciptakan kelompok &ndash; kelompok usaha mandiri yang berkemampuan dalam mendorong kegiatan ekonomi produktif.</p>
              <p><strong>T</strong>eknologi Tepat Guan adalah teknologi yang sesuai dengan kebutuhan masyarakat, dapat menjawab permasalahan masyarakat, tidak merusak lingkungan, dapat dimanfaatkan dan dipelihara oleh masyarakat secara mudah, serta menghasilkan nilai tambah dari aspek ekonomi dan aspek lingkungan ( Peraturan Menteri Dalam Negeri Nomor 10 Tahun 2010 tentang Pemberdayaan Masyarakat Melalui Pengelolaan Teknologi Tepat Guna). Dalam konteks pemberdayaan masyarakat, TTG merupakan pemicu pertumbuhan, pemanfaatannya secara optimal akan mampu mewujudkan efisiensi ongkos produksi, memperbaiki proses dan mutu produksi, meningkatkan kapasitas dan nilai tambah produk usaha masyarakat dengan meminimalisir kerusakan lingkungan sehingga dapat mensejahterakan, meningkatkan taraf hidup dan memberantas kemiskinan.</p>
              <p><strong>L</strong>omba Cipta Karya Teknologi Tepat Guna Kota Pontianak Tahun 2017 diharapkan dapat menjadi sarana terbuka masyarakat umum Kota POntianak untuk berkreasi dan berinovasi di bidang teknologi khususnya yang terkait 5 (lima) aspek strategis pemanfaatan energi baru dan terbarukan, aspek pengelolaan lingkungan, aspek penyediaan infrastruktur dan aspek pemampuan ekonomi (kerajinan dan ekonomi kreatif).</p>',
                'image' => 'uploads/default.jpg',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-1","W-2","W-3","H-24","H-25","H-26","K-19","K-20","K-21"]',
                'start_date' => '2019-07-03',
                'end_date' => '2019-07-10',
                'created_at' => '2019-06-27 02:04:55',
                'updated_at' => '2019-07-11 19:36:12',
                'deleted_at' => '2019-07-11 19:36:12',
            ),
            array(
                'id' => 2,
                'title' => 'Khafilah STQN Asal Kalbar Akui Telah Berikan Penampilan Terbaik',
                'slug' => 'khafilah-stqn-asal-kalbar-akui-telah-berikan-penampilan-terbaik',
                'description' => '<p>Pontianak &ndash; Kalimantan Barat berhasil memasuki babak final pada kompetisi Seleksi Tilawatil Quran (STQ) Nasional ke-XXV yang digelar di Kota Pontianak Provinsi Kalimantan Barat.</p>
              <p>Ketua Kafilah Kalimantan Barat pada ajang Seleksi Tilawatil Quran (STQ) Nasional 2019 Syahdan Lazis mengatakan para peserta asal Kalbar yang berhasil lolos ke babak final berhasil mengirim 4 wakilnya untuk berkompetisi di babak selanjutnya pada STQ Nasional 2019.</p>
              <p>"Alhamdulillah peserta tilawah anak-anak putri sudah tampil maksimal tentu kita berharap bisa menjadi juara satu. Kemudian di cabang hifzil Quran 10 juz, untuk 30 juz putra serta hafalan 100 hadis plus sanad dari Kalbar," ungkapnya kepada wartawan.</p>
              <p>Meski kemenangan belum diumumkan oleh pihak panitia, sebagai reward terhadap seluruh khafilah Kalbar, bonus yang sudah disiapkan oleh pemerintah daerah telah disiapkan atas upaya mengharumkan nama Kalimantan Barat.</p>
              <p>"Gubernur pada saat pelepasan kafilah insyaallah menyatakan jika &nbsp;juara akan dihajikan oleh beliau, yaitu juara 1, 2 atau 3 untuk juara harapan minimal umrah. Wali Kota Pontianak, dari perwakilan Pontianak insya allah akan diberi bonus umrah," jelasnya.</p>
              <p>Salah satu peserta asal Kota Pontianak dari 4 orang yang masuk final, Malika Khaira Khalqillah mengaku senang dan telah melakukan yang terbaik usai membacakan ayat suci Alquran pada babak final cabang tilawah golongan anak-anak.</p>
              <p>&ldquo;Final ini terasa lebih berat dibandingkan babak penyisihan, tapi saya optimis karena harapannya jadi yang terbaik. Lebih sulit final karena baru ayat nya baru dikasi 30 menit sebelum membaca," jelasnya.</p>
              <p>Malika menambahkan jika penampilannya saat final telah maksimal dibandingkan penampilan pada babak penyisihan. &ldquo;Tentu hanyabnbisa menjadi yang terbaik walau para peserta lain juga memiliki suara yang lebih baik,&rdquo; pungkasnya.</p>',
                'image' => 'uploads/event/Khafilah_STQN_Asal_Kalbar_Akui_Telah_Berikan_Penampilan_Terbaik1562291230.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => NULL,
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:47:11',
                'updated_at' => '2019-07-08 16:54:08',
                'deleted_at' => '2019-07-08 16:54:08',
            ),
            array(
                'id' => 3,
                'title' => 'Mentri Agama Akan Tutup STQ ke-XXV di Taman Alun Pontianak',
                'slug' => 'mentri-agama-akan-tutup-stq-ke-xxv-di-taman-alun-pontianak',
                'description' => '<p>Pontianak &ndash; Mentri Agama, Lukman Hakim Saifuddin akan menutup penyelenggaraan Seleksi Tilawatil Quran (STQ) ke-XXV di Taman Alun Kapuas pada Jumat 5 Juli 2019 pukul 19.25 WIB.</p>
              <p>Ketua Umum STQ Nasional ke-XXV Kota Pontianak, Syarif Kamaruzzaman menjelaskan jika Mentri Agama akan tiba di Bandara Supadio Kubu Raya Kalimantan Barat sore hari dan malam harinya akan menutup STQ ke-XXV bersama Gubernur Kalbar, Sutarmidji bersama beberapa Gubernur dan Wakil Gubernur yang telah terjadual hadir pada saat penutupan Jumat 5 Juli 2019.</p>
              <p>&ldquo;Penutupan langsung dilakukan oleh Menag pukul 19.25 Wib didampingi Gubernur Kalbar dan juga stakeholder terkait,&rdquo; ungkap Kamaruzzaman</p>
              <p>Mantan Pj Sekda Kalbar ini menambahkan jika proses penutupuan STQ kali ini juga akan ditandai dengan dentuman meriam sebanyak 25 kali yang akan dibunyikan oleh pihak panitia dibantu oleh masyarakat pinggir Sungai Kapuas sekaligus penyerahan piagam bagi seluruh khafilah yang akan mendapatkan penghargaan atas perlombaan STQ tersebut.</p>
              <p>&ldquo;Beberapa sama saat proses pembukaan seperti ditandai dengan dentuman meriam, namun pengisi acara kali ini tidak lagi dengan tarian tradisional tetapi menghadirkan tarian dengan lagu khas Kota Pontianak,&rdquo; pungkasnya.</p>',
                'image' => 'uploads/event/Mentri_Agama_Akan_Tutup_STQ_ke-XXV_di_Taman_Alun_Pontianak1562291306.webp',
                'type' => 'event',
                'user_id' => 3,
                'lokasi_lama' => '["W-11","H-37","H-40","H-41","H-45","H-55","H-57","K-20","K-22","K-56","K-59","K-64"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:48:26',
                'updated_at' => '2024-08-07 14:43:27',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 4,
                'title' => 'Anggota DPRD Harapkan Wisata Kota Pontianak Meningkat dengan Adanya STQ ke-XXV',
                'slug' => 'anggota-dprd-harapkan-wisata-kota-pontianak-meningkat-dengan-adanya-stq-ke-xxv',
                'description' => '<p>Pontianak &ndash; Pelaksanaan Seleksi Tilawatil Quran (STQ) Nasional ke-XXV tinggal menghitung hari lagi akan berakhir. Penyelenggaraan dua tahun sekali itu menghadirkan 1.500 peserta termasuk official dari seluruh Provinsi yang ada di Indonesia.</p>
              <p>Dengan hadirnya ribuan orang datang ke Kota Khatulistiwa itu, anggota DPRD Kota, Amalia Atika mengharapkan banyaknya pengunjung yang hadir maka selain memberikan dampak yang baik bagi penyelenggaraan STQ, tetapi juga dapat meningkatkan pariwisata yang ada di Kota Pontianak.</p>
              <p>&ldquo;Dengan adanya wisatawan baik para Khafilah maupun orang umum yang datang ke Pontianak harusnya juga dapat meningkatkan promo wisata di Pontianak itu sendiri,&rdquo; ungkap Amel kepada wartawan.</p>
              <p>Pemerintah Kota Pontianak, dijelaskan Amel kedepan, dengan adanya agenda nasional seperti STQ ini untuk lebih dapat lagi mengembangkan program dalam rangka peningkatan promo wisata di Kota Pontianak.</p>
              <p>&ldquo;Agar menarik seluruh kontingen menarik kembali untuk datang ke Pontianak lagi dikemudian hari bersama keluarga dengan adanya STQ Nasional kali ini, sehingga menjadi daya tarik bagi seluruh pengunjung yang telah datang ke Pontianak dan kembali dapat bertandang kesini karena promosi usai STQ ini,&rdquo; jelasnya.</p>
              <p>Termasuk pameran yang telah dilakukan oleh pihak Panitia STQ Ke- XXV, kedepannya beberapa kenangan dapat diberikan oleh Pemerintah Kota Pontianak kepada masyarakat yang hadir mengingat beberapa stand telah memberikan barang seperti buku dengan Cuma-Cuma agar dapat menjadi kenang-kenangan dikemudian hari.</p>
              <p>&ldquo;Tentu dengan beberapa barang yang khas, akan menjadi salah satu bentuk promosi Kota Pontianak bagi seluruh pengunjung apalagi yang hadir saat pameran adalah mereka yang berasal dari seluruh 33 Provinsi di Indonesia, akan jauh maksimal promo wisata untuk mereka kembali lagi ke Pontianak,&rdquo; jelasnya.</p>
              <p>Sebelumnya Ketua Umum STQ ke-XXV Kota Pontianak, Syarif Kamaruzzaman mengakui bahkan lebih dari dua ribu pengunjung saat STQ hadir saat pembukaan hingga penutupan yang akan dilaksanakan pada 5 Juli 2019 nanti.</p>
              <p>&ldquo;Diperkirakan dua ribu lebih wisatawan lokal datang ke Kalbar untuk melihat STQ dari seluruh Indonesia termasuk peserta STQ dan official termasuk pendukung lainnya seperti yang menyelenggarakan pameran serta wisatawan lain yang memang ingin hadir saat STQ Nasional di Kalbar,&rdquo; pungkasnya.</p>',
                'image' => 'uploads/event/Anggota_DPRD_Harapkan_Wisata_Kota_Pontianak_Meningkat_dengan_Adanya_STQ_ke-XXV1562291402.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-12","W-13","H-39","H-40","H-41","K-19","K-20","K-22","K-60","K-64"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:50:03',
                'updated_at' => '2024-08-07 14:43:28',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 5,
                'title' => 'Mulai dari Tanjak, Sepatu Kulit dan Batu Cincin Khas Kalimantan Warnai Pameran Stand STQ KE-XXV',
                'slug' => 'mulai-dari-tanjak-sepatu-kulit-dan-batu-cincin-khas-kalimantan-warnai-pameran-stand-stq-ke-xxv',
                'description' => '<p>Pontianak &ndash; Ajang perlombaan membacakan ayat suci alquran dalam Seleksi Tilawatil Quran (STQ) Nasional ke-XXV di Kota Pontianak diwarnai dengan berbagai kegiatan.</p>
              <p>Salah satu yang telah dilakukan selain melakukan Pawai Ta&rsquo;ruf pagi sebelum pembukaan, pembukaan stand dilingkungan Taman Alun Kapuas dan dibuka oleh Gubernur Kalbar Sutarmidji, Walikota Pontianak Edi Rusdi Kamtono, Ketua Panitia STQ Ke-XXV Syarif Kamaruzzaman, yang disaksikan oleh seluruh Gubernur se-33 Provinsi yang ada di Indonesia.</p>
              <p>Pameran diikuti oleh seluruh Provinsi yang hadir pada saat STQ dan diisi dengan berbagai produk khas daerah masing-masing seperti makanan khas Kota Pontianak seperti aloe vera, kemudian stand dari Jakarta, Jateng dan beberapa Provinsi lain turut meramaikan stand yang berada di posisi kanan dari Taman Alun Kapuas yang berada di pinggir Sungai Kapuas.</p>
              <p>Pantauan saat berada di lokasi pameran, Tanjak khas Kalimantan Barat turut memamerkan penutup kepala dengan berbagai bentuk ukuran dan warna. Di stand Provinsi Jawa Timur, beragam sepatu kulit dipamerkan dengan kualitas khas Jatim yang tak kalah dengan produk sepatu luar negeri.</p>
              <p>Tak mau kalah dengan sepatu dan tanjak, pecinta cincin batu mulia khas Kalbar juga eksis memamerkan segala jenis batu untuk diperkenalkan kepada masyarakat Kalbar dan se-Indonesia yang hadir pada STQ ke-XXV itu.</p>
              <p>Designer Stand Komunitas Soedarso Stone, Teguh Satrio Pribowo yang berada di Stand IKM Batu Mulia Kalbar mengatakan jika ia bersama komunitas batu yang telah dijalani selama ini selain ingin memperlihatkan aneka jenis batu kepada khalayak umum juga ingin berpartisipasi atas terselenggaranya STQ Nasional yang pada saat sebelum memutuskan untuk ikut pameran, melalui media sosial, woro-woro akan STQN di Pontianak telah lama ia dan seluruh komunitas mengetahuinya.</p>
              <p>&ldquo;Kita sudah tau akan ada pameran sehingga kita memutuskan untuk ikut selain ingin meramaikan acara juga ternyata setelah pameran dibuka, penggemar batu masih ada dan diluar ekspektasi yang hadir di pameran begitu ramai,&rdquo; ungkap Bowie, panggilan akrabnya.</p>
              <p>Selain perlombaan mengaji, diakui keyboardis Bangsawan Band itu mengakui bahwa daya tarik wisata begitu kuat memanggil masyarakat umum untuk hadir di kawasan Taman Alun Kapuas sehingga setiap harinya, kawasan Taman Alun termasuk pameran begitu banyak dikunjungi seluruh masyarakat yang antusias akan penyelenggaraan dua tahun sekali tersebut.</p>
              <p>&ldquo;Sangat ramai sekali yang ingin melihat STQ dan juga pameran, salut sama penyelenggara. Terutama Mimbar Tilawah yang unik dibangun monumen Tanjak yang kami perkirakan hanya sebuah bangunan ternyata itu tempat perlombaan STQ bagi khafilah yang melantukan ayat suci alquran, sangat luar biasa idenya,&rdquo; papar Bowie.</p>
              <p>Iapun berharap seluruh masyarakat dapat terus meramaikan acara yang akan ditutup pada 5 Juli 2019 itu hingga selesai para kontingen STQ kembali ke daerah masing-masing dengan tetap menjaga suasana aman dan nyaman.</p>
              <p>&ldquo;Tentu harapan kami seluruh masyarakat dapat menikmati STQ ini selain mendapatkan manfaat dapat melihat perlombaan ayat suci alquran juga dapat menikmati wisata tidak saja di Taman Alun Kapuas, tetapi juga diseluruh kawasan Mimbar Tilawatil Quran lainnya yang ada di Pontianak,&rdquo; pungkasnya</p>',
                'image' => 'uploads/event/Mulai_dari_Tanjak,_Sepatu_Kulit_dan_Batu_Cincin_Khas_Kalimantan_Warnai_Pameran_Stand_STQ_KE-XXV1562291465.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-5","H-38","H-39","H-41","H-45","H-46","H-50","K-19","K-23","K-56","K-61","K-63","K-64","K-65"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:51:06',
                'updated_at' => '2024-09-02 09:49:57',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 6,
                'title' => 'Menag Apresiasi Gubernur, Walikota dan Panitia STQ ke-XXV',
                'slug' => 'menag-apresiasi-gubernur-walikota-dan-panitia-stq-ke-xxv',
                'description' => '<p>Pontianak &ndash; Terselenggaranya Seleksi Tilawatil Quran (STQ) ke-XXV di Kota Pontianak Provinsi Kalimantan Barat diapresiasi juga oleh Mentri Agama, Lukman Hakim Saifuddin pada saat pembukaan STQ di Taman Alun Kapuas belum lama ini.</p>
              <p>Menjadi sebuah keunikan tersendiri, gelaran akbar perlombaan ayat suci alquran dengan lima venue yang berbeda dimana sebanyak 543 Khafilah yang mengikuti perlombaan melantunkan ayat suci dengan mimbar tilawah yang berbeda-beda.</p>
              <p>&ldquo;Dengan banyaknya venue terlebih ada yang di titik nol derajat lintang utara selatan, saya selaku Mentri Agama sangat berterimakasih sekali dan mengapresiasi Gubernur Kalbar, Walikota dan panitia STQ Nasional ke-XXV atas kelancaran STQ ini,&rdquo; ungkap Menag kepada wartawan.</p>
              <p>Menurutnya dari Kota Pontianak dengan terselenggaranya perlombaan yang dihelat dua tahun sekali ini, diharapkan Menag akan melahirkan hafidz dan hafidzah, Qori Qoriah yang bisa meneruskan penerus sebelumnya.</p>
              <p>&ldquo;Karena pada saat defile saya melihat begitu banyak generasi muda yang pasti akan menjadi qori qoriah yang membanggakan bagi Indonesia dikemudian hari. Dan menjadi sebuah harapan akan menjadi penerus terbaik,&rdquo; tuturnya.</p>
              <p>Menag berharap seluruh peserta meski tidak semua dapat keluar sebagai juara namun seluruh Khafilah memberikan penampilan terbaik.</p>
              <p>&ldquo;Yang jelas&nbsp; alquran dan alhadits tidak hanya dibaca dan dihafal, tetapi dapat diimplementasikan kedalam kehidupan sehari-hari bagi seluruh peserta STQ dan kepada seluruh masyarakat Indonesia pada umumnya,&rdquo; pungkasnya.</p>',
                'image' => 'uploads/event/Menag_Apresiasi_Gubernur,_Walikota_dan_Panitia_STQ_ke-XXV1562291536.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-12","W-13","H-37","H-41","H-43","H-50","H-55","K-19","K-20","K-21","K-63","K-64","K-65"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:52:16',
                'updated_at' => '2024-08-07 14:43:29',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 7,
                'title' => 'Warga Senang STQ Diselenggarakan di Pontianak, Terima Kasih Pak Gub',
                'slug' => 'warga-senang-stq-diselenggarakan-di-pontianak-terima-kasih-pak-gub',
                'description' => '<p>Pontianak &ndash; Penyelenggaraan Seleksi Tilawatil Quran (STQ) Nasional ke-XXV telah memasuki hari ketiga. Semenjak dibukanya ajang tilawatil Quran tingkat nasional dua tahun sekali itu, antusias masyarakat Kalimantan Barat untuk memeriahkan STQ dilima kawasan yang dibuat untuk perlombaan melantukan ayat suci alquran begitu responsif.</p>
              <p>Betapa tidak, setelah Mentri Agama membuka pelaksanaan STQ, terhitung dari hari pertama, baik di IAIN, Untan, Masjid Mujahidin, Tugu Khatulistiwa dan Taman Alun Kapuas, seluruh venue didatangi masyarakat setiap harinya dengan suasana penuh.</p>
              <p>Rombongan pelajar yang datang berkunjung membagikan rasa senang mereka karena terdaoat lima tempat terutama di Taman Alun dan Tugu sebagai tempat yang ingin dikunjungi mereka saat libur seperti saat ini. Salah satu pengunjung yang merupakan warga asli Kota Pontianak, Azizah mengaku sangat senang dengan terselenggaranya STQ di Kota Pontianak.</p>
              <p>&ldquo;Senang sekali, bisa sama temen sekarang dak Cuma di Taman Catur yang baru, sekarang Taman Alun udah cantik, banyak spot yang cantik untuk foto. Selain buat wisata ada perlombaan STQ bisa dengar ayat suci Alquran sambil wisata, senang sekali,&rdquo; ungkap Siswi Muhammadiyah ini.</p>
              <p>Iapun juga mengakui jika kelima venue terkait STQ menjadi salah satu kawasan yang akan terus mereka kunjungi mengingat libur sekolah masih lama.</p>
              <p>&ldquo;Karena liburnya masih lama masuknya jadi saya dan teman-teman mau ke tugu disana ada tempat yang bagus, bola dunia karena di Alun sudah sering, menarik dan ingin foto-foto juga. Selain mau liat khalifah yang ikut lomba,&rdquo; tuturnya.</p>
              <p>Salah satu pengunjung lainnya, Revo, warga Siantan ini telah dua kali semenjak dimulainya STQ mendatangi kawasan titik nol di Tugu Khatulistiwa itu.</p>
              <p>&ldquo;Dari hari pertama lomba STQ sudah kesini terus, tempatnya jadi bagus, selain lebih ramai. Bisa dengerin orang lomba ngaji juga,&rdquo; jelasnya.</p>
              <p>Ia bersama saudara jauhnya yang datang dari Kabupaten Landak-pun tak menyia-nyiakan waktu untuk berfoto dan mencoba kapal yang beberapa jam sekali berlayar dari Tugu menuju Taman Alun dan sebaliknya.</p>
              <p>&ldquo;Sebenarnya kapal untuk dewan juri dan peserta lomba tapi untuk orang umum juga bisa. Selain bisa menikmati sungai, dikapal ada jajanan lumayan bisa bolak balik Tugu-Alun Kapuas. Senang sekarang Kota Pontianak ada banyak kegiatan dengan beberapa kawasan yang diburu untuk didatangi, terima kasih Pak Gub,&rdquo; pungkasnya sembari tersenyum.</p>',
                'image' => 'uploads/event/Warga_Senang_STQ_Diselenggarakan_di_Pontianak,_Terima_Kasih_Pak_Gub1562291593.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-8","W-11","W-12","W-13","H-36","H-40","H-42","H-53","K-19","K-21","K-56","K-63","K-64","K-65"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:53:13',
                'updated_at' => '2024-08-07 14:43:29',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 8,
                'title' => 'Gubernur Apresiasi Dukungan Masyarakat Kalbar pada Pelaksanaan STQ',
                'slug' => 'gubernur-apresiasi-dukungan-masyarakat-kalbar-pada-pelaksanaan-stq',
                'description' => '<p>Pontianak &ndash; Pelaksanaan Seleksi Tilawatil Quran (STQ) Nasional ke-XXV yang diselenggarakan di lima kawasan di Kota Pontianak, diakui Gubernur Kalimantan Barat begitu ditanggapi positif oleh masyarakat sekitar termasuk para khalifah yang berasal dari seluruh provinsi yang ada di Indonesia.</p>
              <p>Saat mengunjungi kedua venue mimbar Tilawatil Quran di kawasan Tugu Khatulistiwa yang juga kawasan titik nol derajat lintang selatan-utara dan di Taman Alun Kapuas, orang nomor satu di Kalbar itu sangat mengapresiasi seluruh masayarakat yang membuktikan dukungan akan pelaksanaan tingkat nasional yang digelar dua tahun sekali itu.</p>
              <p>&ldquo;Kita lihat antusias masyarakat di Tugu sangat ramai dikunjungi masyarakat apalagi di Taman Alun Kapuas lebih ramai lagi,&rdquo; ungkapnya usai mengunjungi dua kawasan Mimbar Tilawah STQ ke-XXV, Selasa (2/7/2019).</p>
              <p>Menurutnya selain antusias masyarakat yang begitu besar dukungannya terhadap pelaksanaan STQ yang digelar Provinsi Kalbar, Bang Midji, sapaan akrab&nbsp;mantan Walikota Pontianak dua periode itu juga akan menjadi sejarah bagi ratusan khalifah se-34 Provinsi karena akan menjadi kenangan sendiri bagi mereka saat mengikuti perlombaan ayat suci Alquran telah membawakan ayat suci ditempat yang juga menjadi sejarah bagi Kota Pontianak Provinsi Kalbar.</p>
              <p>&ldquo;Didua lokasi mimbar tilawahnya menarik dan sudah menjadi favorit bagi masyarakat Pontianak bahkan sudah viral, dan syiarnya juga dapat sehingga menjadi kesan tersendiri bagi seluruh peserta STQ karena menjadi kenangan untuk mereka sudah membawakan ayat suci alquran ditempat yang bersejarah dan menarik,&rdquo; paparnya.</p>
              <p>Dengan keikutsertaan seluruh khalifah yang ada, dijelaskan pula oleh Gubernur Kalbar bahwa selain berkesan bagi para peserta, mereka bersama tim akan menjadi salah satu pendukung wisata di Provinsi Kalbar terutama yang ada di Kota Pontianak.</p>
              <p>&ldquo;Mereka akan mempromosikan seluruh tempat yang telah mereka kunjungi sehingga menjadi salah satu yang akan mempromosikan Kalbar kepada seluruh masyarakat Indonesia bahkan dunia,&rdquo; tuturnya.</p>
              <p>Bahwa para khalifah yang telah mengikuti lomba dan membawakan ayat suci alquran di titik nol derajat tentu dijelaskan Bang Midji akan selalu mereka kenang sehingga mereka akan terus mempromosikan Kalbar sepanjang umur mereka.</p>
              <p>&ldquo;STQ ini selain untuk menyelenggarakan kegiatan, syiarnya dapat wisatanya juga dapat. Mudah-mudahan peningkatan prestasi juga lahir dari STQ ke-XXV yang diadakan di Pontianak,&rdquo; pungkasnya</p>',
                'image' => 'uploads/event/Gubernur_Apresiasi_Dukungan_Masyarakat_Kalbar_pada_Pelaksanaan_STQ1562291654.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-8","W-13","H-39","H-40","H-41","K-19","K-21","K-23","K-61","K-64","K-66"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:54:15',
                'updated_at' => '2024-08-07 14:43:29',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 9,
                'title' => 'Pelantikan Dewan Hakim, Menteri Agama Ingatkan Profesionalitas dan Objektivitas',
                'slug' => 'pelantikan-dewan-hakim-menteri-agama-ingatkan-profesionalitas-dan-objektivitas',
                'description' => '<p>Pontianak &ndash; Pelantikan Dewan Pengawas, Dewan Hakim dan Panitera dilaksanakan pada Sabtu sore (29/06), Pelantikan dipimpin langsung oleh Menteri Agama RI, Lukman Hakim Saifuddin dan didampingi Wakil Gubernur Kalbar dan Ketua Umum Lembaga Pengembangan Tilawatil Quran (LPTQ) Nasional.</p>
              <p>Menteri Agama dalam kata sambutannya menyampaikan bahwa kualitas STQ tidak hanya dilihat dari hasil, tetapi juga pada prosesnya. &ldquo;Saya berpesan kepada kita semua, khususnya para dewan hakim agar memperhatikan setidaknya dua hal. Pertama, berilah nilai kepada peserta secara objektif, gunakan standar yang telah ditentukan dan gunakan (hati) nurani sebagai pemandu dengan melepaskan segala kepentingan. Baik kepentingan pribadi, kelompok maupun identitas&rdquo;.</p>
              <p>&ldquo;Dan kedua cermatlah dalam menentukan angka sebagai nilai yang ingin dibubuhkan dengan tingkat kehati-hatian yang tinggi, karena akan sangat menentukan kualitas musabaqoh. Saya yakin dan percaya penuh kepada anggota dewan hakim dan seluruh panitera yang mendapatkan tugas dan amanah pada STQ Nasional XXV akan mampu melaksanakan tugas dengan baik dan berperan dalam meningkatkan kualitas STQ sehingga menghasilkan output yang berkualitas dan dapat dipertanggungjawabkan&rdquo;, lanjut Menteri Agama.</p>
              <p>Menteri Agama berharap dewan pengawas, dewan hakim dan panitera bertugas sesuai kode etik yang telah ditentukan oleh LPTQ. Selain itu, Menteri Agama mengingatkan dewan pengawas agar menegur jika ada hal &ndash; hal yang menciderai kemuliaan STQ Nasional XXV.</p>',
                'image' => 'uploads/event/Pelantikan_Dewan_Hakim,_Menteri_Agama_Ingatkan_Profesionalitas_dan_Objektivitas1562291695.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-4","W-5","W-12","H-38","H-39","H-43","H-45","H-46","H-50","H-51","H-54","K-19","K-22","K-59","K-60","K-64"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:54:56',
                'updated_at' => '2021-01-11 17:10:38',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 10,
                'title' => 'Warga Ramaikan Pameran STQ',
                'slug' => 'warga-ramaikan-pameran-stq',
                'description' => '<p>Pontianak &ndash; Sejak dibuka secara resmi pada Sabtu (29/9/2019), pameran mulai dipadati oleh kunjungan warga. Pameran ini merupakan pameran kerajinan dan menjadi salah satu rangkaian dalam penyelenggaraan STQ nasional ke 25 di Pontianak. Penyelenggaraan STQ tingkat nasional ini untuk pertama kalinya dilaksanakan di Pontianak, sehingga warga pun turut antusias mendatangi pameran.</p>
              <p>&nbsp;</p>
              <p>Pameran yang bertempat di Alun-alun Pontianak ini diramaikan oleh 57 stand peserta. Adapun peserta yang mengisi stand terdiri dari stand Pemprov se-Indonesia, stand Kabupaten/Kota di Kalbar, stand UKM, stand Kementerian Agama, stand BNN, dan stand instansi vertikal lainnya. Stand tersebut akan diperlombakan, terdapat beberapa kriteria penilaian bagi stand peserta yang akan ditetapkan juara di antaranya kesesuaian tema, keindahan dan perilaku. Stand terbaik yang mendapat penilaian juri akan mendapatkan tali asih dari Gubernur Kalbar senilai Rp 20 juta.</p>
              <p>&nbsp;</p>
              <p>Selain pameran kerajinan di Alun-alun Kapuas, juga terdapat pameran khusus untuk pecinta kuliner. Bertempat di halaman Masjid Raya Mujahidin Pontianak, terdapat sekitar 30 stand makanan yang berstandar sertifikat halal. Disini pengunjung akan menikmati sajian khas Kalimantan Barat diantaranya bubur pedas, asam pedas, bingke, cincalok dan sajian nikmat lainya. (*rn)</p>',
                'image' => 'uploads/event/Warga_Ramaikan_Pameran_STQ1562291755.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-5","W-12","H-25","H-41","H-42","H-49","H-51","H-53","H-54","K-19","K-22","K-56","K-64"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:55:56',
                'updated_at' => '2024-08-07 14:43:30',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 11,
                'title' => 'STQ Nasional ke-25 Telah Resmi Dibuka',
                'slug' => 'stq-nasional-ke-25-telah-resmi-dibuka',
                'description' => '<p>Pontianak - Seleksi Tilawatil Qur&rsquo;an (STQ) Nasional ke-25 resmi dibuka pada Sabtu malam, (29/6/2019). Pembukaan STQ Nasional dipusatkan di venue Taman Alun-alun Kapuas Jalan Rahadi Oesman. Dentuman meriam karbit sebanyak 25 kali mengiringi pembukaan tersebut. Selain dentuman meriam karbit, tabuhan gendang yang ditabuh oleh Menteri Agama RI, Lukman Hakim Saifuddin, Gubernur Kalbar, Sutarmidji, Wakil Gubernur Kalbar, Ria Norsan, Wali Kota Pontianak, Edi Rusdi Kamtono juga menandai dibukanya STQ Tingkat Nasional. Sebelumnya tampil pula parade dari 34 kafilah yang mewakili masing-masing Provinsi se-Indonesia disambut gembira oleh masyarakat Kalbar.</p>
              <p>Menteri Agama, Lukman Hakim Saifuddin hadir dan dalam sambutannya menyampaikan apresiasi &nbsp;kepada seluruh pihak yang terlibat dalam mempersiapkan pelaksanaan STQ XXV Nasional ini. &nbsp;Ia berharap momentum STQ ini dapat menjadi wadah merajut tali persaudaraan dan kebersamaan pasca pemilu yang baru saja dilewati. &ldquo;Kita berharap event yang diadakan setiap 2 tahun ini, terus ditingkatkan sebab bisa menjadi stimulan bagi umat dalam memperkokoh kesatuan bangsa dan memperkuat kerukunan hidup beragama,&rdquo; ujarnya.</p>
              <p>&ldquo;Indonesia paling sering menyelenggarakan musabaqoh Al-qur&rsquo;an dan telah cukup banyak melahirkan qori dan qoriah yang berprestasi di tingkat internasional&rdquo;, ujarnya. &ldquo;Tahun lalu&rdquo;, lanjutnya, &ldquo;ada tujuh orang anak bangsa yang berhasil mengukir prestasi pada event MTQ Tingkat Internasional&rdquo;. &ldquo;Kita bangga dan mengapresiasi kepada mereka yang telah mengharumkan nama bangsa pada tingkat internasional&rdquo;, ucap Lukman.</p>
              <p>Gubernur Kalimantan Barat, dalam sambutannya menyampaikan &ldquo;pelaksanaan STQ kali ini sangat istimewa karena STQ ini dilantunkannya ayat suci Al-Qur&rsquo;an di atas Sungai Kapuas yang merupakan sungai terpanjang di Indonesia&rdquo;. &ldquo;Keistimewaan lainnya, selama satu minggu ayat suci dilantunkan di titik nol derajat lintang selatan, lintang utara di tugu khatulistiwa&rdquo;. &ldquo;Semoga kegiatan ini dapat mengungkap rahasia Allah, karna di tugu khatulistiwa mengandung keunikan yang sepenuhnya dapat terungkap&rdquo;. &ldquo;Diantaranya, barang yang mengapung di dua sisi selatan dan utara akan mudah berputar berlawanan arah&rdquo;, ujarnya. &ldquo;Selain itu, telur bisa mudah berdiri&rdquo;. &ldquo;Tanaman aloevera tempat ini, dari satu pelepah bisa memberikan hasil seberat 2,5 kg, ditempat lain tidak seberat itu&rdquo;, lanjutnya. &ldquo;Harapan dalam lima tahun kedepan akan mencetak paling sedikit 5000 hafiz/hafizah, nantinya akan ditempatkan di masjid agar kegiatan ibadah semakin dihayati&rdquo;, harapnya. (*rn)</p>',
                'image' => 'uploads/event/STQ_Nasional_ke-25_Telah_Resmi_Dibuka1562291840.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-11","W-12","H-36","H-37","H-41","H-43","H-50","H-54","K-19","K-20","K-63","K-64","K-65"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:57:21',
                'updated_at' => '2024-08-07 14:43:31',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 12,
                'title' => 'STQ ke-XXV di Taman Alun Kapuas Pontianak Dibuka oleh Mentri Agama',
                'slug' => 'stq-ke-xxv-di-taman-alun-kapuas-pontianak-dibuka-oleh-mentri-agama',
                'description' => '<p>Pontianak - Dengan diselenggarakannya Seleksi Tilawatil Quran (STQ) ke-XXV di Kota Pontianak Provinsi Kalimantan Barat,&nbsp; sangat diapresiasi oleh Menteri Agama, Luqmanul Hakim Syaifuddin.&nbsp;<br />"Bahwa kegiatan STQ ke-XXV ini menjadi mementum merajud persaudaan pasca pemilu dan harus disyukuri, STQ yang telah membudaya, kini terus berkembang," ungkapnya saat membuka Seleksi Tilawatil Quran (STQ) ke-XXV di alun-alun Sungai Kapuas Kota Pontianak Kalbar, Sabtu (29/6/2019) malam.&nbsp;</p>
              <p>Negara Indonesia, adalah negara yang tidak sedikit melahirkan qori dan qoriah yang berprestasi ditingkat Internasional.&nbsp;<br />"Tahun 2019, sebanyak tujuh orang anak bangsa yang berhasil menorehkan prestasi di event MTQ tingkat nasional," kata Menag.&nbsp;</p>
              <p>Iapun berharap, event STQ kedepan terus ditingkatkan karena telah menjadi stimulan bagi umat untuk memperkokoh kebangsaan lewat nilai-nilai keagamaan.&nbsp;<br />"Saya mendorong kedepan, prestasi tidak hanya di bidang membaca alquran namun harus ditingkatkan terutama mempelajari artinya sehingga bisa diamalkan ke kehidupan sehari-hari," paparnya.&nbsp;</p>
              <p>Melalui STQ ke-XXV ini, Menag kembali berharap, Kalbar sebagai tuan rumah bisa memunculkan bibit-bibit baru qori dan qoriah.&nbsp;&nbsp;<br />"Saya sampaikan apresiasi yang telah berperan dan berpartisipasi baik dari unsur pemerintah dan masyarakat di Kalbar," urainya.&nbsp;</p>
              <p>Gubernur Kalbar, Sutarmidji meyakinkan, pelaksanaan STQ Nasional ke-XXV di Kota Pontianak sangat berbeda dari STQ sebelum-sebelumnya.<br />"Dua mimbar tilawah dibuat di tempat yang tak biasa. Mimbar tilawah utama berbentuk tanjak berdiri diatas sungai terpanjang di Indonesia dan satu mimbar tilawah berbentuk bola dunia, dibuat tepat di nol derajat lintang utara dan lintang selatan garis khatulistiwa," kata Bang Midji, sapaan akrabnya.&nbsp;</p>
              <p>Mantan Walikota Pontianak dua periode itu juga menegaskan bahwa program lima tahun kedepan ia bersama Wakil Gubernur Kalbar,&nbsp; Ria Norsan salah satunya adalah mencetak hafidz dan hafidzah sebanyak lima ribu orang yang akan disebar diseluruh masjid yang ada di 14 Kabupaten/Kota di Kalbar.&nbsp;<br />"Sebanyak lima ribu khafidz bahkan lebih ini nantinya akan ada diseluruh masjid sehingga dapat bermanfaat bagi masyarakat Kalbar pada umumnya," cetusnya.&nbsp;</p>
              <p>Sebanyak 34 kafilah dari seluruh provinsi se-Indonesia, silih berganti melakukan parade. Pembukaan digelar sangat meriah dihadiri Gubernur dan Wakil Gubernur dan perwakilan dari seluruh Provinsi se-Indonesia yang dijejali oleh ribuan masyarakat di Taman Alun Kapuas yang ingin melihat langsung proses pembukaan STQ Nasional yang digelar dua tahun sekali itu.&nbsp;</p>
              <p>Seremoni pembukaan ditandai dengan pemukulan beduk oleh Menteri Agama, Gubernur Kalbar beserta Wakil, dan Wali Kota Pontianak. Serta, diiringi dentuman 25<br />kali meriam karbit secara beruntun yang dibunyikan langsung dari pinggiran sungai Kapuas yang ada di Kota Pontianak.&nbsp;</p>',
                'image' => 'uploads/event/STQ_ke-XXV_di_Taman_Alun_Kapuas_Pontianak_Dibuka_oleh_Mentri_Agama1562291906.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-4","W-5","W-8","W-13","H-37","H-38","H-41","H-43","H-50","H-54","K-19","K-20","K-21","K-22","K-56","K-61","K-65","K-66"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 18:58:27',
                'updated_at' => '2021-01-11 17:14:24',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 13,
                'title' => 'Pelepasan Peserta Pawai Ta’aruf jelang pembukaan STQ Nasional ke XXV',
                'slug' => 'pelepasan-peserta-pawai-taaruf-jelang-pembukaan-stq-nasional-ke-xxv',
                'description' => '<p>PONTIANAK&ndash;Pagi tadi puluhan mobil hias dari 16 provinsi se-Indonesia serta empat kabupaten/kota dari Kalbar menyemarakkan pawai ta\'aruf jelang pembukaan Seleksi Tilawatil Qur\'an (STQ) Nasional ke-25 di Pontianak, Kalimantan Barat Sabtu (29/6/2019).Belasan mobil hias tersebut mewakili Provinsi para peserta STQ Nasional dengan menampilkan ciri khas Provinsi masing-masing. Selain itu, terdapat sejumlah mobil hias dari Kabupaten dan Kota di Kalbar turut serta meramaikan pawai tersebut</p>
              <p>Pelepasan para peserta pawai ta\'aruf dilaksanakan di halaman Kantor Gubernur Kalimantan Barat oleh Gubernur Kalbar, &nbsp;H. Sutarmidji. Turut hadir pada acara tesebut Walikota Pontianak, Dirjen Bimbingan Masyarakat Islam, Wagub Kalbar, Forkopimda, rombongan kafilah, para pejabat beserta undangan lainnya. Sutarmidji menyatakan pawai ta\'aruf merupakan kegiatan bernuansa Islami dengan tujuan menyemarakan STQ ke -25 guna memperkenalkan adat dan budaya masing-masing daerah, walaupun promosi telah gencar dilakukan. Gubernur berharap tentunya moment STQ ini dijadikan setiap individu untuk lebih meresapi dan mengimplementasikan ajaran agama Islam dalam kehidupan berbangsa dan bernegara.</p>
              <p>Rute Pawai dimulai dari Kantor Gubernur Kalbar, melewati jalan Ahmad Yani - Jalan KH A Dahlan - Jalan KH Wahid Hasyim - Jalan H. Rais A Rahman - Jalan Martadinata - Jalan Kom Yos Sudarso - Jalan Pak kasih - dan finish di alun-alun Kapuas atau Jalan Rahadi Usman. Adapun peserta yang mengikuti pawai ta\'aruf di antaranya dari Kalimantan Barat (selaku tuan rumah), Provinsi Banten, Kalteng, DKI Jakarta, Riau, Kepulauan Bangka Belitung, Jawa Tengah, Kalimantan Utara, Sumatra Barat, Sumatra Selatan, Sulawesi Tenggara, Kepulauan Riau, Riau,Lampung,Jawa Barat, Kalimantan Selatan, dan peserta lainnya.</p>',
                'image' => 'uploads/event/Pelepasan_Peserta_Pawai_Ta’aruf_jelang_pembukaan_STQ_Nasional_ke_XXV1562292630.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-11","W-12","H-40","H-41","H-45","H-46","H-47","K-20","K-21","K-22","K-59","K-60","K-61","K-64"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:10:32',
                'updated_at' => '2024-08-07 14:43:32',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 14,
                'title' => 'Pawai Ta’ruf Wujud Semaraknya STQ ke-XXV di Kalimantan Barat',
                'slug' => 'pawai-taruf-wujud-semaraknya-stq-ke-xxv-di-kalimantan-barat',
                'description' => '<p>Pontianak &ndash; Sebanyak 16 mobil hias dengan 4 mobil hias penggembira mengikuti kegiatan Pawai Ta&rsquo;ruf yang mengikuti lomba saat Seleksi Tilawatil Quran (STQ) Nasional ke-XXV.</p>
              <p><br />Iring-iringan kendaraan hias berornamen Islami dengan ciri khas budaya masing-masing provinsi peserta Seleksi Tilawatil Quran (STQ) XXV Nasional dilepas oleh Gubernur Kalbar, Sutarmidji di depan Kantor Gubernur Kalbar. Seluruh kendaraan hias merupakan peserta pawai taaruf dari berbagai kafilah atau provinsi se-Indonesia.<br />Bang Midji, sapaan akrab Gubernur Kalbar mengatakan jika pawai taaruf ini menjadi bagian dari kegiatan-kegiatan yang bersifat Islami.&nbsp;<br />&ldquo;Tujuannya untuk menyemarakkan sekaligus sebagai wadah memberitahukan kepada masyarakat luas bahwa ada event nasional yakni STQ XXV di Kota Pontianak. Meskipun jauh sebelumnya kita sudah gencar mempromosikan STQ XXV ini," ungkapnya saat membuka Pawai Ta&rsquo;ruf di Halaman Kantor Gubernur Kalbar, Sabtu (29/6/2019).<br />Diakuinya, ketika dirinya berada di lokasi kegiatan STQ, hampir seluruh daerah provinsi ikut serta dalam STQ Nasional ini. "Saya sengaja luangkan waktu satu jam untuk mengenal satu-persatu para peserta dari berbagai provinsi yang ada di Indonesia," ujarnya.</p>
              <p><br />Wali Kota Pontianak, Edi Rusdi Kamtono yang juga hadir pada acara itu, menuturkan, pawai taaruf ini sebagai bagian dari sosialisasi bahwa ada perhelatan besar nasional di Kota Pontianak sebagai tuan rumah. "Selain itu, pawai taaruf ini juga diperlombakan sekaligus ikut memeriahkan STQ XXV Nasional," imbuhnya.</p>
              <p><br />Pihaknya menyiapkan segala sesuatu demi suksesnya penyelenggaraan STQ XXV Nasional. Pawai taaruf, dikatakannya sebagai bagian dari rangkaian STQ. Rute yang dilalui kendaraan hias itu adalah Jalan Ahmad Yani, Ahmad Dahlan, Wahid Hasyim, H Rais A Rahman, Martadinata, Kom Yos Sudarso, Pak Kasih dan finish di depan Taman Alun Kapuas Jalan Rahadi Usman.<br />&nbsp;"Saya mengajak seluruh masyarakat Kota Pontianak, mari kita sukseskan pelaksanaan STQ XXV Nasional ini dan berikan kesan yang baik bagi para tamu kita," tuturnya.</p>
              <p><br />Ketua Bidang Pawai Ta&rsquo;ruf STQ ke- XXV, Ignatius Ik menambahkan jika seluruh peserta Pawai Ta&rsquo;ruf menempuh perjalanan dari mulai Jalan Ahmad Ayani, Jalan Ahmad Dahlan, KH Wahid Hasyim, Jalan H Rais A Rahman, Jalan RE Martadinata, Komyos Sudarso, Jalan Pak Kasih.<br />&ldquo;Dan rute terakhir di Jalan Rahadi Usman di Taman Alun Kapuas,&rdquo; jelasnya.<br />Dari belasan peserta yang mengikuti perlombaan akan dipilih satu kendaraan hias yang menjadi peserta terbaik dengan uang tunai senilai 20 Juta Rupiah.<br />&ldquo;Dengan materi penilaian kesesuaian dan keserasian antara tema dan fisik kendaraan hias yang ditampilkan selain ketinggian dan keterkaitan hiasan kendaraan dengan nilai artistik Islami,&rdquo; pungkasnya.</p>',
                'image' => 'uploads/event/Pawai_Ta’ruf_Wujud_Semaraknya_STQ_ke-XXV_di_Kalimantan_Barat1562292793.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-11","H-39","H-40","H-41","H-46","H-51","H-57","K-19","K-20","K-21","K-22","K-61","K-64","K-65"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:13:14',
                'updated_at' => '2024-08-07 14:43:32',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 15,
                'title' => 'Bangun Venue Unik STQ, Edi Ingin Tamu Mengenang Pontianak',
                'slug' => 'bangun-venue-unik-stq-edi-ingin-tamu-mengenang-pontianak',
                'description' => '<p>Pontianak - Pelaksanaan Seleksi Tilawatil Quran (STQ) XXV Tingkat Nasional dilakukan di Kota Pontianak meski dalam waktu yang cukup singkat, kota dengan julukan Kota Khatulistiwa itu sebagai tuan rumah penyelenggaraan, mampu menyelesaikan venue atau mimbar tilawah di lima tempat dengan tepat waktu.&nbsp;</p>
              <p>"Alhamdulillah hingga saat ini sudah selesai 100 persen dan siap digunakan mulai besok sebagai tempat digelarnya lomba STQ," ujar Wali Kota Pontianak, Edi Rusdi Kamtono usai menghadiri malam takruf STQ XXV Nasional di Pendopo Gubernur Kalbar, Jumat (27/6/2019).</p>
              <p>Edi menjelaskan, sebagai tuan rumah, pihaknya diminta mempersiapkan venue di lima titik atau lokasi. Dua venue utama berada di Taman Alun Kapuas, tepatnya di Sungai Kapuas dan di Tugu Khatulistiwa. Di Sungai Kapuas, desain venue berbentuk menyerupai tanjak, sedangkan desain bola dunia berada di Tugu Khatulistiwa. Menurutnya, venue-venue itu menjadi hal yang unik karena menjadi ciri khas tersendiri. "Kita ingin para tamu STQ dari berbagai provinsi ini terkesan dan mengenang Kota Pontianak sebagai tuan rumah STQ XXV Nasional, khususnya tempat-tempat yang berada di lokasi outdoor," ungkapnya.</p>
              <p>Keunikan itu diantaranya mimbar tilawah berbentuk globe tepat berada di titik nol derajat Lintang Utara dan Lintang Selatan. Meskipun waktu yang cukup singkat dalam mempersiapkan lima venue itu, namun Edi mengaku semua itu sudah diperhitungkan secara matang selama dua bulan. "Karena dari sisi struktur, lokasi dan material tidak ada kendala sehingga selesai tepat waktu," katanya.</p>
              <p>Edi berpendapat, di era digital ini, tempat-tempat yang dibangun harus instagramable, di mana tidak hanya sebagai tempat untuk sebuah event, namun bisa dimanfaatkan sebagai spot-spot foto yang bisa diviralkan melalui smartphone. Para tamu juga tentunya memposting di media sosial dan dilihat banyak orang sehingga mengundang rasa penasaran untuk melihat langsung ke lokasi-lokasi tersebut. "Mereka senang karena lokasi perlombaan STQ di luar ruangan dan dekat dengan obyek wisata sehingga tidak terkesan monoton, melihat pemandangan dan melihat budaya kearifan lokal yang khas di Kota Pontianak," pungkasnya.</p>',
                'image' => 'uploads/event/Bangun_Venue_Unik_STQ,_Edi_Ingin_Tamu_Mengenang_Pontianak1562294585.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-11","W-12","H-34","H-39","H-40","H-41","H-46","H-55","K-19","K-20","K-21","K-59","K-63","K-64"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:43:06',
                'updated_at' => '2024-08-07 14:43:33',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 16,
                'title' => 'Sukseskan STQ, Walikota Pontianak ajak masyarakat selalu menjaga suasana aman dan kondusif',
                'slug' => 'sukseskan-stq-walikota-pontianak-ajak-masyarakat-selalu-menjaga-suasana-aman-dan-kondusif',
                'description' => '<p>Pontianak &ndash; Pelaksanaan Seleksi Tilawatil Qur&rsquo;an (STQ) ke-XXV tinggal satu hari lagi. Wali Kota Pontianak Edi Rusdi Kamtono menginstruksikan seluruh jajarannya di Pemerintah Kota Pontianak untuk ikut menyukseskan penyelenggaraan tingkat nasional yang digelar dari 29 Juni hingga 5 Juli 29 Juli 2019 itu.</p>
              <p>&ldquo;Saya mengajak seluruh masyarakat Kota Pontianak untuk mensukseskan kegiatan STQ ke-XXV ini dengan menjaga suasana aman dan nyaman selain untuk meramaikan acara hingga selesai pada 5 Juli 2019,&rdquo; ungkapnya kepada wartawan.</p>
              <p>&nbsp;Tidak hanya jajaran di Pemkot, tak terkecuali stakeholder dan pihak terkait, seluruh masyarakat Kota Pontianak juga ia minta untuk ikut memeriahkan ajang pemuliaan kitab suci Alquran tersebut. Selama pelaksanaan STQ nanti, Ia berpesan agar warga Pontianak memberikan kesan yang baik kepada para tamu yang datang dari 33 provinsi di Indonesia.</p>
              <p>"Sebagai tuan rumah yang baik, Pemkot Pontianak semuanya harus menunjang kelancaran acara termasuk camat dan lurah serta semua warga Kota Pontianak juga saya minta untuk ikut memeriahkan. Menjaga kondusifitas, tertib aturan, tidak membuat kumuh kota termasuk para pedagang termasuk kuliner, itu kan tamu banyak datang. Berilah kesan yang baik," tuturnya.</p>
              <p>Mantan Kadis dan Wakil Walikota Pontianak ini juga turut mendukung pernyataan Gubernur Kalbar yang meminta panitia pelaksana untuk semakin menggencarkan promosi kepada publik. &ldquo;Karena promosi yang dilakukan sudah cukup gencar, kita sudah promosikan sejak beberapa waktu lalu, terutama di media sosial, cetak dan elektronik. Momen-momen STQ mulai dari pendaftaran sampai ke penutupan, pameran dan pawai taruf itu saya rasa semuanya akan terpromosi dengan sendirinya," paparnya.</p>
              <p>Ketua Dewan Masjid Indonesia (DMI) Kota Pontianak ini menambahkan pihaknya sudah sangat siap menyelenggarakan ajang dua tahunan tersebut. Jika diukur secara presentase, lanjut dia, kesiapan Pemerintah Kota Pontianak sudah mencapai 99 persen.</p>
              <p>&ldquo;Tinggal menunggu pelaksanaan hingga proses perlombaan dan kita berharap masyarakat mendukung STQ ini agar sukses dan menjadi kenangan tersendiri bagi seluruh khafilah dan yang hadir ke Kota Pontianak,&rdquo; pungkasnya.</p>',
                'image' => 'uploads/event/Sukseskan_STQ,_Walikota_Pontianak_ajak_masyarakat_selalu_menjaga_suasana_aman_dan_kondusif1562294641.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-12","W-13","H-34","H-41","H-52","H-58","K-22","K-23","K-60","K-61","K-65","K-66"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:44:03',
                'updated_at' => '2024-08-07 14:43:33',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 17,
                'title' => 'Dinas Pariwisata Kalbar Siapkan 34 Guide Gratis untuk Peserta Khafilah',
                'slug' => 'dinas-pariwisata-kalbar-siapkan-34-guide-gratis-untuk-peserta-khafilah',
                'description' => '<p>Dinas Pariwisata Siapkan 34 Guide bagi Peserta Khafilah</p>
              <p>Pontianak &ndash; Mensukseskan penyelenggaraan Seleksi Tilawatil Quran (STQ) Ke-XXV yang diselenggarkan pada 29 Juni hingga 5 Juli 2019 menjadi tugas seluruh komponen masyarakat khusunya di Kalimantan Barat.<br />Demikian pula dengan seluruh panitia yang mempersiapkan segala sesuatu demi kelancaran dan kesuksesan acara akbar yang dilaksanakan dilima venue di Kota Pontianak itu.<br />Tak terkecuali Dinas Pemuda Olahraga dan Pariwisata Kalbar. Disporapar menyiapkan 34 Guide gratis untuk seluruh khalifah se-Indonesia pada 5 Juli 2019 untuk berpariwisata mengunjungi tiga tempat pariwisata yang ada di Kota Pontianak.<br />&ldquo;Pelaksanaan city tour dengan tiga rute yaitu Museum dan Dekranasda kemudian susur Sungai ke Keraton dan ke Rumah Radangk,&rdquo; ungkap Kadisporapar Natalia Karyawati, Jumat (28/6/2019).</p>
              <p>Menurutnya city tour ini merupakan salah satu rangkaian promosi yang dilakukan Disporapar mengingat ribuan wisatawan yang hadir ke Kota Pontianak hingga 6 Juli 2019.<br />&ldquo;City Tour ini kami rangkai dengan pelaksanaan STQ khusus untuk seluruh khalifah, gratis dan ada yang paket selain tiga tempat diseluruh kawasan wisata yang ada di Pontianak dan sekitarnya untuk umum,&rdquo; tuturnya</p>
              <p>Diakui Natalia Karyawati, paket city tour ini disiapkan dengan 34 Guide untuk 34 Provinsi seluruh khafilah yang ada di Indonesia meski ke-34 Guide yang disediakan juga siap untuk paket city tour lain yang berbayar yang juga dapat dinikmati oleh wisatawan umum lainnya.<br />&ldquo;Paket mandiri ini juga kami sediakan, namun free hanya kami sediakan pada Tanggal 5 Juli 2019 dengan Guide ke tiga tempat tersebut, namun jika yang ada yang ingin keSingkawang dan ketempat wisata lainnya kami juga menyediakan paket,&rdquo; urainya.</p>
              <p>Terkait fasilitas lainnya, Natalia Karyawati mengatakan jika Disporapar&nbsp; telah berkoordinasi dengan pihak terkait seperti Damri, ASITA serta seluruh stakeholder terkait kesiapan para khafilah yang akan melakukan city tour di Kota Pontianak usai melaksanakan perlombaan STQ yang telah dijadualkan oleh panitia.<br />&ldquo;Pengelola juga sudah kami koordinasikan agar seluruh khafilah yang akan mengikuti city tour termasuk mereka yang akan melakukan city tour ketempat lain siap kita fasilitasi,&rdquo; paparnya.</p>
              <p>Ketua Umum STQ Ke-XXV, Syarif Kamaruzzaman menambahkan jika kesiapan panitia sudah mencapai 100 persen terutama untuk kesiapan pembukaan STQ yang akan dilakukan pada 29 Juni 2019 di Taman Alun Kapuas&nbsp;<br />&ldquo;Terkait sarana dan prasarana khafid dan khafidzah seluruh khalifah STQ insha Allah di lima tempat telah siap,&rdquo; tuturnya.</p>
              <p>Dukungan masyarakat, dijelaskan mantan Pj Sekda Kalbar ini agar diberikan terutama mulai penyelenggaraan hingga selesainya kegiatan pada 5 Juli mendatang.<br />&ldquo;Dukungan masyarakat kami harapkan untuk meramaikan dan mensukseskan acara akbar ini,&rdquo; pungkasnya.</p>',
                'image' => 'uploads/event/Dinas_Pariwisata_Kalbar_Siapkan_34_Guide_Gratis_untuk_Peserta_Khafilah1562294746.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-4","W-11","W-12","H-33","H-34","H-40","H-41","H-42","H-47","H-49","H-52","H-58","K-20","K-21","K-22","K-23","K-56","K-60","K-61","K-63","K-65","K-66"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:45:47',
                'updated_at' => '2024-08-07 14:43:34',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 18,
                'title' => 'Gubernur harapkan peserta STQ asal Kalbar Berikan Penampilan yang Terbaik',
                'slug' => 'gubernur-harapkan-peserta-stq-asal-kalbar-berikan-penampilan-yang-terbaik',
                'description' => '<p>Pontianak - Pelepasan Kontingen Khafilah Seleksi Tilawatil Quran (STQ) ke - XXV dari Provinsi Kalimantan Barat dilakukan oleh Gubernur Kalbar, Sutarmidji, Kapolda Kalbar, Irjen Pol Didi Haryono didampingi Ketua Umum Panitia STQ ke-XXV, Syarif Kamaruzzaman di Pendopo Gubernur Kalbar Jalan Ahmad Yani Kota Pontianak.&nbsp;</p>
              <p>Gubernur Kalbar Sutarmidji mengharapkan seluruh Khafilah dari Provinsi Kalbar memberikan penampilan yang terbaik untuk dua belas dari tiga belas kategori lomba yang akan dilaksanakan dari 29 Juni hingga 5 Juli 2019 itu.&nbsp;<br />"Kita tidak ada target hanya berharap progressnya yang terbaik dari sebelumnya," ungkap Gubernur kepada wartawan, Rabu (26/6/2019).</p>
              <p>Menurutnya dari lima venue STQ yang ada di Kota Pontianak, selain menjadi ajang perlombaan tingkat nasional, kelima titik venue STQ itu juga menjadi salah satu promosi wisata Kalbar kepada seluruh masyarakat baik para peserta khafilah se-Indonesia yang datang ke Kalbar juga seluruh masyarakat yang terlibat dalam ajang nasional itu.&nbsp;<br />"Kelima tempat perlombaan ini menjadi ajang promosi wisata kita. Mimbar tilawahnya kita buat di titik objek wisata seperti di titik nol derajat lintang utara-selatan sehingga momen yang luar biasa bagi seluruh peserta karena dapat melantunkan ayat suci alquran," jelasnya.&nbsp;</p>
              <p>Gubernur juga menjelaskan terkait venue STQ tidak saja di satu tempat tetapi juga lima mimbar tilawah disiapkan panitia STQ sehingga perlombaan yang dilaksanakan di Kalbar ini akan menjadi momen dan pengalaman bagi seluruh peserta dengan properti salah satunya menyerupai tanjak dan bola dunia dengan latar belakang panggung yang sangat menarik.&nbsp;<br />"Tentu ini akan menjadi kenangan tidak saja bagi para peserta tetapi juga bagi masyarakat Kalbar karena STQ diadakan beberapa tahun sekali," urainya.&nbsp;</p>
              <p>Kapolda Kalbar, Irjen Pol Didi Haryono mengakui jika Polda Kalbar siap mengawal dari datangnya seluruh Khafilah se-Indonesia hingga pulangnya seluruh rombongan peserta STQ yang berasal dari 34 Provinsi itu.&nbsp;<br />"1800 personil kita siapkan ditambah dari temen-temen TNI siap mengawal seluruh kontingen khalifah," tuturnya.&nbsp;</p>
              <p>Kapolda berharap kepada seluruh masyarakat Kalbar untuk mendukung suksesnya pelaksanaan STQ sehingga acara yang digelar dapat berjalan lancar, sukses dan aman hingga selesainya acara akbar tingkat nasional itu.&nbsp;<br />"Jadilah tuan rumah yang baik dan kita harus mendukung pelaksanaan STQ ini hingga selesai dengan menjaga rasa aman nyaman dan damai," tegasnya.&nbsp;</p>
              <p>Ketua Umum Panitia STQ ke-XXV, Syarif Kamaruzzaman menambahkan jika sebanyak 18 khafilah asal Kalbar disiapkan menjadi peserta dan siap mengikuti seluruh&nbsp; kategori yang telah dipersiapkan.&nbsp;<br />"Meski dari tiga belas cabang yang ada Kalbar hanya mengikuti dua belas cabang karena SDM kita belum ada yaitu tafsir bahasa Arab. Meski demikian kita akan memberikan yang terbaik," kata Kamaruzzaman&nbsp;</p>
              <p>Iapun berharap pelaksanaan STQ berjalan aman lancar dan damai sehingga seluruh peserta tilawah dapat mengikuti perlombaan dengan baik hingga selesai acara.&nbsp;</p>',
                'image' => 'uploads/event/Gubernur_harapkan_peserta_STQ_asal_Kalbar_Berikan_Penampilan_yang_Terbaik1562294798.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-11","W-12","H-37","H-43","H-50","H-54","K-20","K-21","K-59","K-60","K-64","K-65"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:46:39',
                'updated_at' => '2024-08-07 14:43:34',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 19,
                'title' => 'Fokus persiapan Open Ceremony, panitia STQ yakin persiapan capai 99 persen  Berita STQ',
                'slug' => 'fokus-persiapan-open-ceremony-panitia-stq-yakin-persiapan-capai-99-persen-berita-stq',
                'description' => '<p>Pontianak - Pelaksanaan Seleksi Tilawatil Quran (STQ) ke-XXV memasuki H-4.</p>
              <p>Persiapan matang tentu terus dilakukan pihak panitia mempersiapkan hal teknis dan kesiapan lainnya.&nbsp;</p>
              <p>Ketua Umum Seleksi Tilawatil&nbsp;Qur\'an (STQ) Nasional di Pontianak, Syarif Kamaruzzman mengatakan saat ini persiapan untuk pelaksanaan agenda akbar dengan lima kawasan atau&nbsp;<em>venue</em>&nbsp;itu telah mencapai 99 persen.</p>
              <p>"Persiapan sudah mencapai 99 persen karena sudah memasuki tahap finalisasi persiapan STQ. Tinggal pembenahan sedikit-sedikit untuk memenuhi apa saja yang kurang," ungkapnya.&nbsp;</p>
              <p>Terkait&nbsp;<em>venue</em>&nbsp;STQ di tiga titik yaitu di Alun-alun Kapuas, Tugu Khatulistiwa dan Masjid Mujahidin Pontianak, semuanya sudah selesai pengerjaannya.&nbsp;</p>
              <p>"Saat ini panitia sedang fokus mempersiapkan kegiatan&nbsp;<em>Open Ceremony</em>&nbsp;untuk menampilkan berbagai pagelaran guna memeriahkan kegiatan pembukaannya," tuturnya.</p>
              <p>Mantan Pj Sekda Kalbar ini juga menjelaskan panitia STQ akan melakukan rapat terakhir demi finalisasi pelaksanaan .</p>
              <p>Sebelumnya, Gubernur Kalbar, Sutarmidji mengatakan, secara teknis, persiapan menyambut pembukaan STQ kini sudah selesai.&nbsp;</p>
              <p>"Semuanya sudah siap termasuk kafilah asal Kalbar yang akan berkompetisi di ajang STQ tingkat Nasional nantinya sudah menyiapkan diri dan saat ini sedang menjalani TC (<em>training center</em>)," katanya.</p>
              <p>Terhadap target prestasi sebagai tuan rumah, mantan Walikota Pontianak dua periode ini menegaskan yang penting capaian peserta STQ asal Kalbar bisa lebih baik dari STQ sebelumnya.&nbsp;</p>
              <p>"Target, yang penting ada progres yang lebih baik karena Kalbar punya 1.000 hingga 5.000 penghafal Quran, maka, fokus kita lebih kepada hafiz," urainya.&nbsp;</p>
              <p>Iapun berharap, seluruh masyarakat Kalbar ikut memeriahkan pagelaran STQ ke-XXV yang dipusatkan di Kota Pontianak.&nbsp;</p>
              <p>"Untuk menambah semarak, saya minta semua kantor di Pontianak memasang umbul-umbul," pungkasnya.&nbsp;</p>',
                'image' => 'uploads/event/Fokus_persiapan_Open_Ceremony,_panitia_STQ_yakin_persiapan_capai_99_persen__Berita_STQ1562294862.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-11","H-24","H-34","H-41","H-46","H-47","H-52","H-58","K-19","K-21","K-22","K-23","K-56","K-60","K-61","K-63","K-64"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:47:43',
                'updated_at' => '2024-08-07 14:43:34',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 20,
                'title' => 'Monitoring lima venue STQ dilakukan Walikota Pontianak',
                'slug' => 'monitoring-lima-venue-stq-dilakukan-walikota-pontianak',
                'description' => '<p>Pontianak -&nbsp;Monitoring terkait insfrastruktur dilima titik tempat pelaksanaan perlombaan terus dilakukan oleh Walikota Pontianak, Edi Rusdi Kamtono.&nbsp;</p>
              <p>Bersama Kementrian Agama dan Provinsi Kalbar, orang nomor satu di Kota Pontianak itu mengecek kesiapan bangunan serta tempat pembukaan di alun-alun Kapuas yang berada tepat di depan Kantor Walikota Pontianak.</p>
              <p>Pelaksanaan Seleksi Tilawatil Quran (STQ) ke-XXV dilaksanakan di Kota Pontianak tinggal menghitung hari.&nbsp;</p>
              <p>"Monitoring ini terus saya lakukan karena dalam waktu satu dua hari lagi semua venue dilima titik selesai dikerjakan," ungkapnya usai memonitor langsung venue STQ di Taman Alun Kapuas,&nbsp; Senin (24/6/2019).&nbsp;</p>
              <p>Menurutnya kelima titik terkait tempat pelaksanaan perlombaan Tilawatil Quran, diakui Walikota Pontianak menggunakan anggaran mencapai 11 Miliar dengan APBD Provinsi juga dari dana pusat.&nbsp;&nbsp;</p>
              <p>"Sementara Kota Pontianak melengkapi hal tekhnis terkait penggunaan tempat yang akan dijadikan perlombaan nanti termasuk lampu kemudian taman," tuturnya.&nbsp;</p>
              <p>Pengecekan dilakukan mulai dari depan bangunan pembukaan hingga ke taman alun yang nantinya digunakan terkait perlombaan para khalifah yang ada diseluruh Indonesia.&nbsp;</p>
              <p>"Saat ini kesiapan sudah 95 persen dan besok seluruh bangunan semua sudah siap digunakan dan selesai untuk pelaksanaan pembukaan pada 29 Juni 2019," jelasnya.&nbsp;</p>
              <p>Menurutnya sesuai dengan pengecekan yang dilakukan setelah bangunan selesai dikerjakan maka hal tekhnis seperti lampu dan sound system termasuk kelengkapan lainnya dilapangan juga dilima titik bangunan yang dalam waktu satu hingga dua hari ini selesai dikerjakan.&nbsp;</p>
              <p>"Beberapa bangunan semi terkait STQ akan kita gunakan untuk HUT Kota Pontianak pada October nanti," tegasnya.&nbsp;</p>
              <p>Parade, ditambahkan mantan Kadis PU Kota Pontianak ini akan dilakukan oleh seluruh peserta Tilawatil Quran se-Indonesia dan malam akan dilakukan pembukaan STQ yang diperkirakan dibuka oleh Mentri Agama.&nbsp;</p>
              <p>"Selain pawai Ta\'ruf juga akan dilakukan pembukaan pameran di taman alun hingga penutupan," pungkasnya.</p>',
                'image' => 'uploads/event/Monitoring_lima_venue_STQ_dilakukan_Walikota_Pontianak1562295017.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-11","H-43","H-50","H-54","H-55","K-19","K-20","K-21","K-22","K-56"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:50:18',
                'updated_at' => '2024-08-07 14:43:35',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 21,
                'title' => 'Gubernur Kalbar dan Walikota Pontianak Harap Dukungan Masyarakat Meriahkan STQ ke XXV',
                'slug' => 'gubernur-kalbar-dan-walikota-pontianak-harap-dukungan-masyarakat-meriahkan-stq-ke-xxv',
                'description' => '<p>Pontianak &ndash; Pelaksanaan Seleksi Tilawatil Quran Tingkat Nasional ke XXV yang akan segera digelar pada 27 Juni hingga 6 Juli, menjadi sangat sukses jika didukung pula oleh seluruh masyarakat Kalimantan Barat.</p>
              <p>Gubernur Kalbar, H Sutarmidji meminta dukungan itu diberikan oleh seluruh masyarakat termasuk pihak terkait agar memeriahkan acara nasional yang menjadi salah satu agenda nasional itu.</p>
              <p>&ldquo;Kepada seluruh masyarakat saya minta untuk memeriahkan termasuk seluruh kantor memasang umbul-umbul menyambut pelaksanaan STQ di Kalbar. Ini gawe nasional sehingga menjadi kebangkitan para Qori Qoriah yang ada di Indonesia,&rdquo; ungkapnya.</p>
              <p>Dengan dilaksanakannya STQ ke-XXV ini. diharapkannya pula selain menjadi kebangkitan para qori dan qoriah juga dengan digelarnya even nasional, Kalbar menjadi lumbung pembaca alquran terbaik.</p>
              <p>&ldquo;Kontingen khafilah dari Kalbar telah menyiapkan technical meeting dengan kesiapan terbaik. Minimal target Kalbar ada seribu penghapal quran sehingga para hafidz menjadi perhatian kita saat ini,&rdquo; tuturnya.</p>
              <p>Walikota Pontianak, Edi Rusdi Kamtono berharap dukungan seluruh masyarakat untuk memberikan sambutan yang hangat dan ramah terhadap para tamu yang datang ke Pontianak nanti. "Secara tidak langsung, kita berikan kesan bahwa Pontianak kota yang ramah, yang layak huni dan aman bagi peserta," katanya.&nbsp;</p>
              <p>Ketua Umum Panitia STQ ke-XXV, Syarif Kamaruzzaman berharap acara dapat berlangsung sukses, Kalbar sebagai penyelenggara tuan rumah dan prestasi dari para khalifah Kalbar dapat memberikan yang terbaik.</p>
              <p>&ldquo;Bahwa kita bsia jadi tuan rumah yang terbaik dan memberikan kenyamanan untuk pelayanan tamu yg datang sehingga mereka berkesan dengan kehadiran di Kota Pontianak,</p>',
                'image' => 'uploads/event/Gubernur_Kalbar_dan_Walikota_Pontianak_Harap_Dukungan_Masyarakat_Meriahkan_STQ_ke_XXV1562295182.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-11","H-43","H-50","H-54","K-19","K-21","K-56","K-63","K-64","K-65","K-66"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:53:03',
                'updated_at' => '2024-08-07 14:43:35',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 22,
                'title' => 'Walikota Pontianak Terus Pantau Kesiapan STQ ke XXV',
                'slug' => 'walikota-pontianak-terus-pantau-kesiapan-stq-ke-xxv',
                'description' => '<p>Pontianak - Persiapan Seleksi Tilawatil Quran (STQ) XXV Tingkat Nasional terus dilakukan panitia STQ Kota Pontianak.&nbsp;</p>
              <p>Karena dengan digelarnya STQ di lima titik yang ada di Pontianak, &nbsp;diperkirakan sekitar 1500 tamu dari berbagai daerah provinsi se-Indonesia akan datang ke Kota Pontianak.&nbsp;</p>
              <p>Kepastian kehadiran yang akan menghadiri STQ ke XXV dijelaskan Wali Kota Pontianak, Edi Rusdi Kamtono bahwa peserta STQ yang sudah memastikan keikutsertannya sekitar 600-an peserta, belum termasuk official dan para pendamping masing-masing perwakilan.&nbsp;</p>
              <p>"Saya setiap hari memonitor dan mengecek langsung kesiapan infrastruktur untuk pelaksanaan STQ ini," ujarnya.&nbsp;</p>
              <p>Adapun infrastruktur yang tengah dipersiapkan diantaranya panggung untuk acara pembukaan dan penutupan STQ, mimbar tilawah yang ada di Sungai Kapuas dan Tugu Khatulistiwa. Selain itu ada beberapa lokasi lainnya seperti di Masjid Raya Mujahidin, IAIN dan Untan. "Kita &nbsp;pastikan bahwa minimal H-7 sudah siap dan sudah bisa difungsikan. Termasuk penataan selain finishing, ada lighting, sound system serta sirkulasi orang dan barang," tuturnya.</p>
              <p>Di Taman Alun Kapuas, menurutnya juga akan dibangun stand pameran yang akan diisi oleh seluruh provinsi se-Indonesia. Untuk penataan stand-stand, disesuaikan dengan kondisi Taman Alun Kapuas supaya sirkulasi orang maupun barang lancar dan tidak terjadi kekroditan. "Konsep STQ sendiri bernuansa khas Kota Pontianak, diantaranya Istana Kadriyah, tanjak untuk mimbar tilawah di Sungai Kapuas dan bola dunia di Tugu Khatulistiwa serta ornamen-ornamen khas Pontianak yang kita tonjolkan," jelasnya.</p>
              <p>Disinggung soal target juara STQ, Edi berharap ada qori dan qoriah Kota Pontianak atau Provinsi Kalbar yang mendulang juara lomba tingkat nasional ini. "Kita doakan semoga ada qori qoriah dari Pontianak maupun Kalbar yang menunjukkan prestasinya pada STQ Nasional ini," pungkasnya.</p>',
                'image' => 'uploads/event/Walikota_Pontianak_Terus_Pantau_Kesiapan_STQ_ke_XXV1562295238.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-4","W-8","W-13","H-41","H-52","H-58","K-23","K-61","K-66"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:53:59',
                'updated_at' => '2024-08-07 14:43:26',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 23,
                'title' => 'Gubernur Kalbar, STQ di Pontianak siap digelar',
                'slug' => 'gubernur-kalbar-stq-di-pontianak-siap-digelar',
                'description' => '<p>Pontianak - Persiapan Seleksi Tilawatil Quran (STQ) ke-25 yang akan dilaksanakan di Kota Pontianak memasuki H - 9.</p>
              <p>Pada Tanggal 29 Juni 2019 nanti, acara yang diperkirakan akan dibuka oleh Mentri Agama itu dijelaskan Gubernur Kalimantan Barat, Sutarmidji sudah siap untuk digelar. "Panitia sudah siap 95 persen dan kesiapan lain termasuk penjemputan, parkir untuk pembukan dan penutupan secara tekhnis siap," ungkap Sutarmidji usai rapat final STQ di Balai Petitih Kantor Gubernur Kalbar.</p>
              <p>Diakuinya kesiapan panitia terkait kehadiran para kontingen STQ ini akan terus dimantapkan dengan beberapa pertemuan hingga hari pembukaan tiba. "Seperti panggung dibeberapa titik juga sudah siap dan ada juga yang sudah 98 persen," tuturnya.</p>
              <p>Bang Midji, panggilan akrab mantan Walikota juga menjelaskan saat ini tinggal menunggu ada beberapa kegiatan yang harus di gladi terkait open seremoni. "Dan persiapan venue sudah terus lakukan percepatan sehingga diharapkan H-7 minimal semua kondisi terkait pelaksanaan sudah running," urainya.</p>
              <p>Ketua Umum Panitia STQ Kalbar, Syarif Kamaruzzaman mengatakan sejauh ini tidak ada perubahan venue tapi ada sedikit penambahan karena memang melihat antispiasi terhadap faktor cuaca karena di lokasi seperti di salah satu titik yaitu di Alun Kapuas terkait dengan storing suara akibat dari Ferry, dan cuaca hujan antisipasi yang dilakukan panitia menggunakan gedung PCC.</p>
              <p>"Semua persiapan sudah dilakukan oleh pihak seksi seperti akomodasi dan PHRI yang mendukung. Dan sekarang lagi final untuk penjemputan LO yang didampingi oleh OPD dengan harapan bahwa tidak ada peserta yang terlantar untuk ke lokasi penginapan," kata Kamaruzzaman.</p>
              <p>Sehingga pihaknya akan terus melakukan persiapan terkait dengan armada bus yang nanti akan dipinjam seperti Damri melalui persiapan OPD yang ada dengan berbagai kekuatan yang ada di Pemprov dan jajaran untuk bisa memfasilitasi antar jemput kehadiran khafilah. "Kesiapan panitia akan terus kita lakukan hingga hari H. Beberapa sudah sangat siap selanjutnya koordinasi akan terus kami lakukan sehingga kedatangan khalifah hingga kepulangan mereka nanti," pungkasnya.</p>',
                'image' => 'uploads/event/Gubernur_Kalbar,_STQ_di_Pontianak_siap_digelar1562295300.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-3","W-4","W-11","W-12","H-38","H-39","H-43","H-45","H-50","H-51","H-54","K-20","K-21","K-60","K-61","K-64","K-65"]',
                'start_date' => '2019-06-26',
                'end_date' => '2019-07-06',
                'created_at' => '2019-07-04 19:55:02',
                'updated_at' => '2024-08-07 14:43:36',
                'deleted_at' => NULL,
            ),
            array(
                'id' => 24,
                'title' => 'Pontianak Food Fest 2019',
                'slug' => 'pontianak-food-fest-2019',
                'description' => '<p>Pontianak Food Festival kembali akan digelar tahun ini. Even yang diinisiasi oleh Perhimpunan Hotel dan Restoran Indonesia (PHRI) Kalimantan Barat, dan Bank Mandiri itu, rencananya akan digelar pada Februari 2019 mendatang.</p>
              <p>&ldquo;PHRI Kalimantan Barat dan Bank Mandiri kembali akan menyelenggarakan Pontianak Food Festival pada awal Februari tahun 2019,&rdquo; ungkap Ketua PHRI Kalbar, Yualiardi Qamal, kemarin.</p>
              <p>Sebagaimana kegiatan yang sama di tahun sebelumnya, kata dia, PFF tahun ini akan menggelar pameran kuliner terbesar di Kalimantan Barat. Dia mengatakan, pada tahun 2017 dan 2018, PFF telah mampu menghadirkan Chef ternama dan pemecahan Rekor Muri yaitu pemecahan &lsquo;Penggoreng Pisang Terbanyak&rsquo; di tahun 2017 dan &lsquo;Lomba Memasak Ikan Asam Pedas Oleh Peserta Terbanyak&rsquo; di tahun 2018. &ldquo;Dengan kesuksesan acara Pontianak Food Festival tersebut, maka kami akan kembali&nbsp; menyelenggarakan PFF untuk yang ketiga kalinya,&rdquo; jelansya.</p>
              <p>Untuk PFF tahun ini, Yuliardi memberikan sedikit bocoran. Acara ini akan kembali menghadirkan chef ternama, Rekor MURI, serta Pemilihan Duta Kuliner Kalimantan Barat. Di samping itu, acara ini akan dibalut dengan penampilan musik jazz, dan penampilan seni dari putra putri daerah. Dia mengatakan, Pontianak Food Festival ke-3 yang akan datang ini, bertajukan &lsquo;Pontianak Food Festival, Khatulistiwa Jazz, Pameran Dekranasda 2019.</p>
              <p>Tujuan dari kegaitan ini, kata dia, yakni untuk mendukung dan mensukseskan program pemerintah dalam mengenalkan serta mempromosikan&nbsp; Produk (Brand) serta Jajanan kuliner Khas kota pontianak.</p>
              <p>Di sisi lain, bagi pencinta pecinta musik Jazz lokal yang ada di Kalbar, mereka dapat lebih mengerti perkembangan musik jazz yang&nbsp; kian semangkin berkembang. Kehadiran musik Jazz diharapkan menjadi daya tarik, terutama bagi pemuda untuk hadir dalam even ini. Terlebih, musik menurutnya merupakan bahasa yang global yang digunakan untuk menyampaikan perasaan, situasi dan keadaan yang di gambarkan secara imajinatif dengan satu keselarasan dan perekat suatu kesatuan dan kebersamaan.</p>
              <p>&ldquo;Musik merupakan hal yang paling diminati oleh seluruh kalangan, karena&nbsp; musik tidak memandang&nbsp; perbedaan. Musik Jazz&nbsp; merupakan&nbsp; musik yang rileks dan menyentuh jiwa. Musik Jazz juga dapat dikombinasikan dengan mudah oleh musik-musik yang lain. Variasi-variasi yang unik dapat dibentuk oleh musik jazz,&rdquo; pungkasnya. (sti)</p>',
                'image' => 'uploads/event/Pontianak_Food_Fest_20191562740992.webp',
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["K-19","K-20","K-21","K-56","K-59","K-63","K-64","K-68","K-69","K-75"]',
                'start_date' => '2019-01-09',
                'end_date' => '2019-08-23',
                'created_at' => '2019-07-09 23:43:12',
                'updated_at' => '2019-07-09 23:43:51',
                'deleted_at' => '2019-07-09 23:43:51',
            ),
            array(
                'id' => 25,
                'title' => '<script>alert(1)</script>',
                'slug' => 'scriptalert1script',
                'description' => '<p>&lt;script&gt;alert(1)&lt;/script&gt;</p>',
                'image' => NULL,
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => '["W-5","H-27","K-22"]',
                'start_date' => '2021-05-04',
                'end_date' => '2021-05-05',
                'created_at' => '2021-05-02 13:44:05',
                'updated_at' => '2021-05-02 13:44:40',
                'deleted_at' => '2021-05-02 13:44:40',
            ),
            array(
                'id' => 26,
                'title' => 'Rangkaian Acara Hari Jadi Kota Pontianak ke- 252',
                'slug' => 'rangkaian-acara-hari-jadi-kota-pontianak-ke-252',
                'description' => '<p><img style="display: block; margin-left: auto; margin-right: auto;" src="https://jepin.pontianak.go.id/uploads/Event/1697596814.jpg" alt="" width="1080" height="1350" /></p>
              <p style="text-align: center;"><img src="https://jepin.pontianak.go.id/uploads/Event/1697596832.jpg" alt="" width="1080" height="1350" /></p>',
                'image' => NULL,
                'type' => 'event',
                'user_id' => 1,
                'lokasi_lama' => NULL,
                'start_date' => '2023-10-12',
                'end_date' => '2023-11-22',
                'created_at' => '2023-10-18 02:40:48',
                'updated_at' => '2023-10-18 02:40:48',
                'deleted_at' => NULL,
            )
        );

        DB::beginTransaction();
        try {
            foreach ($dataEvent as $event) {
                $lokasi = [];

                if ($event['lokasi_lama']) {
                    foreach (json_decode($event['lokasi_lama']) as $item) {
                        // Pisahkan huruf dan angka
                        preg_match('/([A-Za-z]+)-(\d+)/', $item, $matches);

                        if (!empty($matches)) {
                            $letter = $matches[1];
                            $number = $matches[2];

                            // Jika huruf belum ada dalam array, buat array baru
                            if (!isset($lokasi[$letter])) {
                                $lokasi[$letter] = [];
                            }

                            // Tambahkan nomor ke array sesuai huruf
                            $lokasi[$letter][] = $number;
                        }
                    }
                } else {
                    $lokasi[] = NULL;
                }


                $kategoriAbjad = array_keys($lokasi);
                $category = array();
                if ($kategoriAbjad) {
                    foreach ($kategoriAbjad as $abjad) {
                        $categoryId = NULL;
                        if ($abjad) {
                            switch ($abjad) {
                                case 'W':
                                    $categoryId = DB::table('event_category')->where('category', 'Wisata')->first()->id;
                                    break;

                                case 'H':
                                    $categoryId = DB::table('event_category')->where('category', 'Penginapan')->first()->id;
                                    break;

                                case 'K':
                                    $categoryId = DB::table('event_category')->where('category', 'Kuliner')->first()->id;
                                    break;

                                case 'U':
                                    $categoryId = DB::table('event_category')->where('category', 'Umum')->first()->id;
                                    break;

                                default:
                                    $categoryId = DB::table('event_category')->where('category', 'Oleh-Oleh')->first()->id;
                                    break;
                            }
                        }
                        $category[] = $categoryId;
                    }
                }

                $event = DB::table('events')->insertGetId([
                    // 'id' => $event['id'],
                    'title' => $event['title'],
                    'slug' => $event['slug'],
                    'description' => $event['description'],
                    'image' => $event['image'],
                    'type' => $event['type'],
                    'user_id' => $event['user_id'],
                    // 'lokasi_lama' => $event['lokasi_lama'],
                    'location' => json_encode($lokasi),
                    'category' => json_encode($category),
                    'start_date' => $event['start_date'],
                    'end_date' => $event['end_date'],
                    'created_at' => $event['created_at'],
                    'updated_at' => $event['updated_at'],
                    'deleted_at' => $event['deleted_at'],
                ]);
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
