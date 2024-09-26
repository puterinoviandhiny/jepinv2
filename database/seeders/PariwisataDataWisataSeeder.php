<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PariwisataDataWisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $wisataId = DB::table('pariwisata_master')->where('name', 'Wisata')->first()->id;

        // ! Wisata
        $info_wisata = array(
            array(
                'id' => '1',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Taman Alun Kapuas',
                'address' => 'Jl. Rahadi Usman, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243, Indonesia',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '-',
                'email' => '-',
                'district' => '-',
                'created_at' => '2019-06-14 04:39:00',
                'updated_at' => '2019-07-07 20:41:11',
                'deleted_at' => NULL,
                'description' => '<p>Taman Alun Kapuas merupakan salah satu lokasi&nbsp;<a class="mw-redirect" title="Wisata" href="https://id.wikipedia.org/wiki/Wisata">wisata</a>&nbsp;di kota&nbsp;<a class="mw-redirect" title="Pontianak" href="https://id.wikipedia.org/wiki/Pontianak">Pontianak</a>&nbsp;Provinsi Kalimantan Barat. Tata letaknya di tengah kota menjadikan Taman Alun Kapuas bisa dikunjungi dari arah mana saja, maka wajar saja jika hampir setiap harinya lokasi ini ramai dikunjungi oleh masyarakat yang datang bersama keluarga dan sesekali tampak wisatawan asing datang ke tempat ini. Taman yang merupakan salah satu proyek &lsquo;Waterfront City&rsquo; dari Pemerintah Kota Pontianak<sup id="cite_ref-taman_1-0" class="reference"><a href="https://id.wikipedia.org/wiki/Taman_Alun_Kapuas#cite_note-taman-1">[1]</a></sup>, dan sering disebut dengan nama Taman Alun-alun Kapuas itu sendiri terletak di Pinggiran&nbsp;<a title="Sungai Kapuas" href="https://id.wikipedia.org/wiki/Sungai_Kapuas">Sungai Kapuas</a>, Pontianak, tepatnya berada di depan kantor&nbsp;<a title="Wali kota" href="https://id.wikipedia.org/wiki/Wali_kota">wali kota</a>&nbsp;Pontianak yakni di sekitaran Jalan&nbsp;<a class="new" title="Rahadi Usman (halaman belum tersedia)" href="https://id.wikipedia.org/w/index.php?title=Rahadi_Usman&amp;action=edit&amp;redlink=1">Rahadi Usman.</a><sup id="cite_ref-cendekia_2-0" class="reference"></sup></p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Kota')->first()->id
            ),
            array(
                'id' => '2',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Taman Digulis',
                'address' => 'Jl. Jenderal Ahmad Yani No.114, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112',
                'latitude' => '-0.055135',
                'longitude' => '109.35002099999997',
                'phone' => '0821-5321-0027',
                'email' => '-',
                'district' => '-',
                'created_at' => '2019-06-14 04:39:40',
                'updated_at' => '2019-07-07 20:40:59',
                'deleted_at' => NULL,
                'description' => '<p><em>Tugu Digulis</em>&nbsp;atau&nbsp;<em>Tugu Bambu Runcing</em>&nbsp;atau&nbsp;<em>Tugu Bundaran Untan</em>oleh warga setempat, merupakan sebuah monumen yang terletak di Bundaran Universitas Tanjungpura, Jalan Jend. Ahmad Yani, Kelurahan Bansir Laut, Kecamatan Pontianak Tenggara,&nbsp;<a title="Kota Pontianak" href="https://id.wikipedia.org/wiki/Kota_Pontianak">Kota Pontianak</a>.</p>
              <p>Taman menjadi satu di antara alternatif bagi warga maupun masyarakat untuk berrekreasi ataupun berwisata.</p>
              <p>Pemerintah&nbsp;<a title="Kota&nbsp;Pontianak" href="https://pontianak.tribunnews.com/tag/kota-pontianak">Kota&nbsp;Pontianak</a>&nbsp;telah berusaha memenuhi kebutuhan masyarakat tersebut dengan membuat taman-taman buatan.</p>
              <p>Taman Tugu Digulis Untan di Jalan Ayani 1 Pontianak Tenggara, Kalimantan Barat, merupakan salah satu destinasi taman yang sering dikunjungi wisatawan.</p>
              <p>Dari Pantauan, taman tersebut menyuguhkan panorama yang indah dan alami dengan masih banyaknya pepohonan yang tumbuh secara alami,taman tersebut juga dilengkapi fasilitas bermain anak, jogging track, tempat bermain sepeda jumping dan lapangan badminton.</p>
              <p>&nbsp;</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Kota')->first()->id
            ),
            array(
                'id' => '3',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Museum Kalbar',
                'address' => 'Jl. Jenderal Ahmad Yani, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78124',
                'latitude' => '-0.048427',
                'longitude' => '109.34270200000003',
                'phone' => '-',
                'email' => '-',
                'district' => '-',
                'created_at' => '2019-06-14 04:41:23',
                'updated_at' => '2019-07-07 20:40:48',
                'deleted_at' => NULL,
                'description' => '<p><strong>Museum Provinsi Kalimantan Barat</strong>&nbsp;adalah sebuah&nbsp;<a title="Museum" href="https://id.wikipedia.org/wiki/Museum">museum</a>&nbsp;yang berlokasi di Jalan Jenederal Achmad Yani, Kota&nbsp;<a class="mw-redirect" title="Pontianak" href="https://id.wikipedia.org/wiki/Pontianak">Pontianak</a>&nbsp;Provinsi Kalimantan Barat. Museum ini menyimpan berbagai benda-benda bernilai historis yang ada di Provinsi Kalimantan Barat salah satunya peninggalan-peninggalan sejarah dari peradaban beberapa jenis suku bangsa yang ada di Kalimantan Barat, yaitu: Suku Melayu, Suku Dayak, dan Suku Tionghoa</p>
              <p>Museum Provinsi Kalimantan Barat dirintis sejak tahun 1974 oleh Kantor Wilayah Depdikbud Provinsi Kalimantan Barat melalui Proyek Rehabilitasi dan Perluasan Permuseuman Kalimantan Barat. Fungsionalisasinya diresmikan pada tanggal 4 Oktober 1983 oleh Direktur Jenderal Kebudayaan Depdikbud<sup id="cite_ref-asosiasi_3-0" class="reference"><a href="https://id.wikipedia.org/wiki/Museum_Provinsi_Kalimantan_Barat#cite_note-asosiasi-3">[3]</a></sup>, sejak itu Museum Provinsi Kalimantan Barat dibuka untuk umum. Luas tanah museum ini &plusmn; 3905 meter persegi, sedangkan luas lahan keseluruhan &plusmn; 28.167 meter persegi</p>
              <p class="p1"><strong>Visi</strong><br />Terwujudnya Museum sebagi Lembaga Pelestarian dan Pengembangan Kebudayaan dan Pariwisata Kalimantan Barat.</p>
              <p class="p1"><strong>Misi</strong><br />Membina dan mengembangkan kebudayaan dan pariwisata di Kalimantan Barat sebagai sarana:</p>
              <ol>
              <li class="p1">Membina budaya lokal/daerah untuk memperkaya kebudayaan nasional.</li>
              <li class="p1">Melestarikan budaya lokal/daerah sebagai aset pariwisata daerah dan nasional.</li>
              <li class="p1">Menjadikan museum sebagai pusat pendidikan, penelitian, dan pengembangan kebudayaan.</li>
              <li class="p1">Menanamkan nilai-nilai luhur budaya bangsa untuk memperkokoh semangat persatuan.</li>
              <li class="p1">Menyebarluaskan informasi budaya sebagai sarana komunikasi mempererat semangat persatuan dan kesatuan dalam Negara Kesatuan Republik Indonesia.</li>
              </ol>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Budaya')->first()->id
            ),
            array(
                'id' => '4',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Istana Qadriyah',
                'address' => 'Jl. Tj. Raya No.1, Dalam Bugis, Pontianak Tim., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.028865',
                'longitude' => '109.34989500000006',
                'phone' => '-',
                'email' => '-',
                'district' => '-',
                'created_at' => '2019-06-14 04:44:47',
                'updated_at' => '2021-02-04 13:15:39',
                'deleted_at' => NULL,
                'description' => '<p>Istana Kesultanan Pontianak yang dikenal dengan nama Istana Qadriyah yang didirikan oleh Sultan Syarif Abdurrahman Alkadrie, pendiri dan sultan pertama dari Kesultanan Pontianak pada tahun 1771 hingga 1778 masehi. Pada awalnya istana ini didirikan diatas tanah yang lebih luas, terdiri atas 3 buah balai yaitu : Balai Cermin tempat sultan menerima tamu, Balai Kisi-Kisi tempat kerabat Sultan, dan Balai Sari tempat putri-putri istana. Setelah istana ini rusak, kemudian dilakukan pembangunan kembali pada lokasi istana yang ada sekarang ini dengan ukuran yang lebih kecil/sempit daripada ukuran aslinya..</p>
              <p>Bangunan Istana Qadriyah berbentuk rumah panggung diatas tiang-tiang, seperti bangunan tradisional yang terdapat di Kalimantan Barat. Istana terdiri dari: bangunan teras, ruang singgasana dan singgasananya, ruang belakang, dan ruang lain-lain. Atap bangunan istana bertingkat tiga. Pada pertengahan atap puncak yang muncul ke atas mengingatkan pada bentuk atap Rumah Belanda. Pengaruh Eropa dapat dilihat pada ukiran pintu, jendela yang lebar disertai kaca kristal yang beraneka warna. Pintu pada umumnya berlapis dua, tetapi sekarang yang tinggal hanya satu lapis. Pengaruh Eropa juga tampak dari koleksi yang masih tersimpan di keraton seperti keramik, mebel, singgasana, alat rumah tangga, meja marmer dan lain sebagainya. Selain pengaruh Eropa tersebut, nampak juga pengaruh Timur Tengah dari Bangunan Istana Qadriyah ini, yaitu pada tiang-tiang berlengkung dan hiasan kerawang yang berbentuk bulatan, bulan, bintang diatas pintu.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Budaya')->first()->id
            ),
            array(
                'id' => '5',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Khatulistiwa Park',
                'address' => 'Jl. Khatulistiwa, Batu Layang, Siantan, Kota Pontianak, Kalimantan Barat 78244, Indonesia',
                'latitude' => '0.001002',
                'longitude' => '109.32220400000006',
                'phone' => '+62 852-3674-0095',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:44:56',
                'updated_at' => '2019-07-07 20:40:23',
                'deleted_at' => NULL,
                'description' => '<p><strong>Tugu Khatulistiwa</strong>&nbsp;atau&nbsp;<em>Equator Monument</em>&nbsp;berada di Jalan&nbsp;<a title="Khatulistiwa" href="https://id.wikipedia.org/wiki/Khatulistiwa">Khatulistiwa</a>,&nbsp;<a class="mw-redirect" title="Pontianak" href="https://id.wikipedia.org/wiki/Pontianak">Pontianak</a>&nbsp;Utara, Provinsi&nbsp;<a title="Kalimantan Barat" href="https://id.wikipedia.org/wiki/Kalimantan_Barat">Kalimantan Barat</a>. Lokasinya berada sekitar 3&nbsp;km dari pusat&nbsp;<a title="Kota Pontianak" href="https://id.wikipedia.org/wiki/Kota_Pontianak">Kota Pontianak</a>, ke arah kota&nbsp;<a class="mw-redirect" title="Mempawah" href="https://id.wikipedia.org/wiki/Mempawah">Mempawah</a>.</p>
              <p>Tugu ini menjadi salah satu ikon wisata Kota Pontianak dan selalu dikunjungi masyarakat, khususnya wisatawan yang datang ke Kota Pontianak.</p>
              <p>Sejarah mengenai pembangunan tugu ini dapat dibaca pada catatan yang terdapat di dalam gedung.</p>
              <p>Dalam catatan tersebut disebutkan bahwa&nbsp;: Berdasarkan catatan yang diperoleh pada tahun 1941 dari V. en. W oleh Opzichter Wiese dikutip dari Bijdragen tot de geographie dari Chef Van den topographischen dienst in Nederlandsch- Indi&euml;&nbsp;: Den 31 sten Maart 1928 telah datang di Pontianak satu ekspedisi Internasional yang dipimpin oleh seorang ahli&nbsp;<a title="Geografi" href="https://id.wikipedia.org/wiki/Geografi">Geografi</a>&nbsp;berkebangsaan&nbsp;<a title="Belanda" href="https://id.wikipedia.org/wiki/Belanda">Belanda</a>&nbsp;untuk menentukan titik/tonggak garis&nbsp;<a title="Khatulistiwa" href="https://id.wikipedia.org/wiki/Khatulistiwa">equator</a>&nbsp;di kota Pontianak dengan konstruksi sebagai berikut&nbsp;:</p>
              <p>a. Tugu pertama dibangun tahun&nbsp;<a title="1928" href="https://id.wikipedia.org/wiki/1928">1928</a>&nbsp;berbentuk tonggak dengan anak panah.</p>
              <p>b. Tahun&nbsp;<a title="1930" href="https://id.wikipedia.org/wiki/1930">1930</a>&nbsp;disempurnakan, berbentuk tonggak dengan lingkarang dan anak panah.</p>
              <p>c. Tahun&nbsp;<a title="1938" href="https://id.wikipedia.org/wiki/1938">1938</a>&nbsp;dibangun kembali dengan penyempurnaan oleh opzicter / architech&nbsp;<a class="mw-redirect" title="Frederich Silaban" href="https://id.wikipedia.org/wiki/Frederich_Silaban">Silaban</a>. Tugu asli tersebut dapat dilihat pada bagian dalam.</p>
              <p>d. Tahun tahun 1990, kembali Tugu Khatulistiwa tersebut direnovasi dengan pembuatan kubah untuk melindungi tugu asli serta pembuatan duplikat tugu dengan ukuran lima kali lebih besar dari tugu yang aslinya. Peresmiannya pada tanggal&nbsp;<a title="21 September" href="https://id.wikipedia.org/wiki/21_September">21 September</a>&nbsp;<a title="1991" href="https://id.wikipedia.org/wiki/1991">1991</a>.</p>
              <p>Bangunan tugu terdiri dari 4 buah tonggak kayu belian (kayu besi), masing-masing berdiameter 0,30 meter, dengan ketinggian tonggak bagian depan sebanyak dua buah setinggi 3,05 meter dan tonggak bagian belakang tempat lingkaran dan anak panah penunjuk arah setinggi 4,40 meter.</p>
              <p>Diameter lingkaran yang ditengahnya terdapat tulisan&nbsp;<a class="new" title="EVENAAR (halaman belum tersedia)" href="https://id.wikipedia.org/w/index.php?title=EVENAAR&amp;action=edit&amp;redlink=1">EVENAAR</a>&nbsp;(bahasa Belanda yang berarti Equator) sepanjang 2,11 meter. Panjang penunjuk arah 2,15 meter.</p>
              <p>Tulisan plat di bawah anak panah tertera 109o 20\' OLvGr menunjukkan letak berdirinya tugu khatulistiwa pada garis Bujur Timur.</p>
              <p>Pada bulan Maret&nbsp;<a title="2005" href="https://id.wikipedia.org/wiki/2005">2005</a>, Tim&nbsp;<a title="Badan Pengkajian dan Penerapan Teknologi" href="https://id.wikipedia.org/wiki/Badan_Pengkajian_dan_Penerapan_Teknologi">Badan Pengkajian dan Penerapan Teknologi</a>&nbsp;(BPPT) melakukan koreksi untuk menentukan lokasi titik nol garis khatulistiwa di Kota Pontianak. Koreksi dilakukan dengan menggunakan gabungan metode terestrial dan ekstraterestrial yaitu menggunakan global positioning system (<a class="mw-redirect" title="GPS" href="https://id.wikipedia.org/wiki/GPS">GPS</a>) dan stake-out&nbsp;<a class="external text" href="http://www.geografiana.com/nasional/teknologi/posisi" rel="nofollow">titik nol garis khatulistiwa dikoreksi</a></p>
              <p>Hasil pengukuran oleh tim BPPT, menunjukkan, posisi tepat Tugu Khatulistiwa saat ini berada pada 0 derajat, 0 menit, 3,809 detik lintang utara; dan, 109 derajat, 19 menit, 19,9 detik bujur timur</p>
              <p>Sementara, posisi 0 derajat, 0 menit dan 0 detik ternyata melewati taman atau tepatnya 117 meter ke arah Sungai Kapuas dari arah tugu saat ini. Di tempat itulah kini dibangun patok baru yang masih terbuat dari pipa PVC dan belahan garis barat-timur ditandai dengan tali rafia.</p>
              <p>Mengenai posisi yang tertera dalam tugu (0 derajat, 0 menit dan 0 detik lintang, 109 derajat 20 menit, 0 detik bujur timur), berdasarkan hasil pelacakan tim BPPT, titik itu terletak 1,2&nbsp;km dari Tugu Khatulistiwa, tepatnya di belakang sebuah rumah di Jl Sungai Selamat, kelurahan Siantan Hilir.</p>
              <p>Peristiwa penting dan menakjubkan di sekitar Tugu Khatulistiwa adalah saat terjadinya titik&nbsp;<a class="new" title="Kulminasi (halaman belum tersedia)" href="https://id.wikipedia.org/w/index.php?title=Kulminasi&amp;action=edit&amp;redlink=1">kulminasi</a>&nbsp;matahari, yakni fenomena alam ketika&nbsp;<a title="Matahari" href="https://id.wikipedia.org/wiki/Matahari">Matahari</a>&nbsp;tepat berada di garis khatulistiwa. Pada saat itu posisi matahari akan tepat berada di atas kepala sehingga menghilangkan semua bayangan benda-benda dipermukaan bumi. Pada peristiwa kulminasi tersebut, bayangan tugu akan "menghilang" beberapa detik saat diterpa sinar Matahari. Demikian juga dengan bayangan benda-benda lain di sekitar tugu.</p>
              <p>Peristiwa titik kulminasi Matahari itu terjadi setahun dua kali, yakni antara tanggal 21-23 Maret dan 21-23 September. Peristiwa alam ini menjadi event tahunan kota Pontianak yang menarik kedatangan wisatawan&nbsp;<a class="external autonumber" href="http://www.pontianakpost.com/berita/index.asp?berita=Utama&amp;id=83917" rel="nofollow">[1]</a></p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '7',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Korem Pontianak',
                'address' => 'Jl. Tanjungpura Pontianak',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '(0561) 8176671',
                'email' => 'korem@email.com',
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-06-24 01:55:39',
                'updated_at' => '2019-06-24 01:57:17',
                'deleted_at' => '2019-06-24 01:57:17',
                'description' => '<p>Tempat wisata favorit masyarakat Pontianak</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '8',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Rumah Betang Radakng',
                'address' => 'Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.046921',
                'longitude' => '109.31990500000006',
                'phone' => '-',
                'email' => '-',
                'district' => '-',
                'created_at' => '2019-06-26 02:34:47',
                'updated_at' => '2019-07-07 20:40:07',
                'deleted_at' => NULL,
                'description' => '<p>Rumah Radakng atau bisa disebut dengan&nbsp;<em>longhouse&nbsp;</em>merupakan satu di antara ciri khas Provinsi Kalimantan Barat. Rumah Radakng adalah sebutan untuk rumah panjang suku Dayak Kanayatn di Provinsi Kalimantan Barat</p>
              <p>Rumah adat ini diresmikan langsung oleh Gubernur Kalimantan Barat Drs. Cornelis, MH dan menjadi satu di antara ikon Kalimantan Barat dan Kota Pontianak.</p>
              <p>Letaknya yang berada di Komplek Perkampungan Budaya di Jalan Sutan Syahrir, Kota Baru, Pontianak, berdampingan dengan Rumah Melayu Kota Pontianak, menjadikan rumah adat ini sebagai pendorong dan tonggak bukti tingginya toleransi antar umat berbudaya di Kota Pontianak dan Kalimantan Barat.</p>
              <p>Saat kita memasuki kawasan Rumah Radakng ini, maka mata kita akan langsung tertuju pada 6 tiang besar di depan Rumah Radakng yang di atasnya terdapat burung Enggang Gading yang menjadi simbol kegagahan dan kekuatan bagi Suku Dayak Kalimantan Barat.</p>
              <p>Tak heran jika banyak wisatawan lokal maupun mancanegara langsung mengeluarkan kameranya dan berfoto dengan latar keenam tiang besar tersebut, sebagai satu di antara ciri khas Rumah Radakng.</p>
              <p>Sisi lain yang menarik jika kita memasuki kawasan Rumah Radakng yaitu arsitektur yang digunakan. Sesuai dengan namanya, rumah adat ini merupakan rumah panggung dengan tinggi 7 meter.</p>
              <p>Bukan tanpa alasan rumah adat ini dibangun berbentuk panggung. Jika di pedalaman kalimantan, alasan rumah Suku Dayak dibentuk berpanggung dimaksudkan untuk melindungi keluarga dari serangan binatang buas dan antisipasi jika terjadi banjir.</p>
              <p>Selain tinggi 7 meter, kita bisa melihat bahwa Rumah Radakng memiliki 2 tiang utama sebagai penopang bangunan serta memiliki panjang bangunan 138 meter. Tak heran jika rumah ada ini sukses menjadi rumah adat terbesar di dunia, serta mendapatkan penghargaan dari Museum Rekor Indonesia (MURI) sebagai rumah adat terpanjang di Indonesia.</p>
              <p>Pada umumnya rumah adat panjang di Kalimantan Barat memiliki konstruksi yang unik, begitu juga dengan konstruksi yang dimiliki oleh Rumah Radakng.</p>
              <p>Bila kita melihat di deretan tiang 6 besar yang di atasnya terdapat Burung Enggang, maka kita dapat melihat tangga yang biasanya disebut Hejot.</p>
              <p>Jumlah tangga haruslah ganjil, sehingga pada Rumah Radakng kita bisa melihat 3 tangga di bagian tengah rumah, serta di ujung kiri dan kanan.</p>
              <p>Setelah kaki kita menaiki tangga yang terbuat dari kayu setapak demi setapak, maka kita akan sampai di badan rumah bagian atas. Badan rumah panjang pada umumnya menggunakan kayu ulin yang kokoh dan dapat bertahan lama.</p>
              <p>Setiap ruangan disekat-sekat dengan dinding yang terbuat dari papan kayu. Lantai rumah pada umumnya menggunakan kayu yang terbuat dari bambu, belahan batang pinang atau kayu bulat.</p>
              <p>Walaupun pada Rumah Radakng materialnya didominasi oleh beton, namun hal tersebut tidak menghilangkan kesan tradisional dan kearifan lokal dari Kalimantan Barat.</p>
              <p>Ciri khas kearifan lokal tersebut bisa kita lihat dari ukiran-ukiran motif dengan relief yang beraneka ragam. Motif-motif tersebut terdapat pada pintu-pintu di Rumah Radakng, lalu pada tiang penyangga, dan di dekat atap bagian atas.</p>
              <p>Motif tersebut dominan berwarna merah yang merupakan warna khas Suku Dayak. Warna merah melambangkan keberanian. Di dalam rumah adat ini, terdapat ruang utama yang mampu menampung hingga 600 orang.</p>
              <p>Di bagian belakang dari Rumah Radakng, kita bisa lihat halaman belakang yang begitu luas, serta terdapat taman-taman kecil di belakangnya. Hal tersebut menambah keindahan dan kemegahan dari Rumah Radakng.</p>
              <p>Halaman rumah adat ini memang didesain cukup luas untuk digunakan berbagai aktivitas budaya lainnya. Banyak event-event yang diadakan di Rumah Radakng ini, seperti Pekan Gawai Dayak XXXI, Pontianak Event Project, Gebyar Bulan Bung Karno (BBK) Kalimantan Barat 2016, dan acara lainnya.</p>
              <p>Jika kalian berkunjung dan liburan ke Kalimantan Barat, pastikan untuk berkunjung ke Rumah Radakng yang menjadi satu di antara ikon wisata adat di Kota Pontianak. Posisinya berada di depan Bundaran Kota Baru.</p>
              <p>Tampilan dan arsitekturnya yang unik nan megah, sering mengundang turis lokal maupun mancanegara untuk berkunjung ke tempat ini. Rumah adat yang menjadi rumah adat terbesar di dunia dan merupakan simbol semangat kekeluargaan, keagungnganm persaudaraan, gotong royong, dan kebersamaan masyarakat.</p>
              <p>Di bagian belakang dari Rumah Radakng, kita bisa lihat halaman belakang yang begitu luas, serta terdapat taman-taman kecil di belakangnya. Hal tersebut menambah keindahan dan kemegahan dari Rumah Radakng.</p>
              <p>Halaman rumah adat ini memang didesain cukup luas untuk digunakan berbagai aktivitas budaya lainnya. Banyak event-event yang diadakan di Rumah Radakng ini, seperti Pekan Gawai Dayak XXXI, Pontianak Event Project, Gebyar Bulan Bung Karno (BBK) Kalimantan Barat 2016, dan acara lainnya.</p>
              <p>Jika kalian berkunjung dan liburan ke Kalimantan Barat, pastikan untuk berkunjung ke Rumah Radakng yang menjadi satu di antara ikon wisata adat di Kota Pontianak. Posisinya berada di depan Bundaran Kota Baru.</p>
              <p>Tampilan dan arsitekturnya yang unik nan megah, sering mengundang turis lokal maupun mancanegara untuk berkunjung ke tempat ini. Rumah adat yang menjadi rumah adat terbesar di dunia dan merupakan simbol semangat kekeluargaan, keagungnganm persaudaraan, gotong royong, dan kebersamaan masyarakat.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Budaya')->first()->id
            ),
            array(
                'id' => '9',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Aloe Vera Center',
                'address' => 'Jl. Budi Utomo No.29, Siantan Hilir, Pontianak Utara, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '0.001302',
                'longitude' => '109.36162100000001',
                'phone' => '(0561) 887017',
                'email' => NULL,
                'district' => 'Pontianak Utara',
                'created_at' => '2019-06-26 02:37:47',
                'updated_at' => '2019-07-07 20:39:52',
                'deleted_at' => NULL,
                'description' => '<p>&nbsp; &nbsp;</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Kota')->first()->id
            ),
            array(
                'id' => '10',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Paradise-Q Waterpark',
                'address' => 'Jalan Arteri Supadio KM 12.8 No. 16, Sungai Raya, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat 78121',
                'latitude' => '-0.093176',
                'longitude' => '109.37076100000002',
                'phone' => '(0561) 762888',
                'email' => NULL,
                'district' => '-',
                'created_at' => '2019-06-26 02:40:22',
                'updated_at' => '2021-01-11 17:10:38',
                'deleted_at' => '2021-01-11 17:10:38',
                'description' => '<p>Bagi yang sering melewati Jl. A. Yani II mungkin sering melihat suatu kawasan baru dan megah yang sedang dibangun di wilayah tersebut. Kawasan tersebut nantinya akan menjadi suatu tempat wisata terpadu yang dinamakan&nbsp;<strong>QUBURESORT</strong>. Quburesort merupakan kawasan Taman Wisata Rekreasi sebagai Objek Wisata yang terpadu berbasis lingkungan, budaya, dan pemberdayaan masyarakat. Objek Wisata terbaru di Kalimanatan Barat, khususnya bertempat di Jl. Arteri Supadio No.16, Sungai Raya, Kabupaten Kubu Raya (depan Komp. Pondok Indah Lestari). QUBU RESORT adalah perwujudan nuansa Tropical Meningkatkan keselarasan, keserasian, dan keseimbangan pada kawasan Taman Wisata Rekreasi. Di daerah ini akan dibangun bebrbagai tempat seperti waterpark, foodcourt, cafe&amp;bar, function hall, resort, dsb.&nbsp;</p>
              <p>Beberapa waktu lalu, tim Pontinesia berkesempatan menjadi media partner dalam acara&nbsp;<em>soft launching</em>&nbsp;salah satu wahana dari Quburesort ini yaitu&nbsp;<strong>ParadiseQ Waterpark</strong>. Waterpark tersebut hanya buka sementara pada tanggal 3,8,9,10 Juli 2016 kemudian tutup kembali. Hal ini dimaksudkan untuk mengukur seberapa jauh kesiapan pihak pengelola dalam melayani pengunjung dari wahana tersebut. Untuk tanggal pastinya kapan wahana tersebut akan dibuka kembali belum ada kepastian. Dari pihak pengelola sendiri menyampaikan kemungkinan akhir Agustus 2016 bakal dibuka untuk umum. Mau tau ada apa saja di dalam tersebut.</p>
              <p>&nbsp;</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '11',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Kampung Beting Pontianak',
                'address' => 'Tim., 78243, Dalam Bugis, East Pontianak, Dalam Bugis, Pontianak Tim., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.025326',
                'longitude' => '109.34648199999992',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Pontianak Timur',
                'created_at' => '2019-06-26 02:48:23',
                'updated_at' => '2019-07-07 20:39:20',
                'deleted_at' => NULL,
                'description' => '<p>Kampung Beting merupakan suatu peradaban kota Pontianak dimasa lalu yang masih dijaga kelestariannya hingga saat ini.&nbsp;<strong>Kampung Beting</strong>, sebuah nama kampung yang cukup terkenal di Kota Pontianak. Jangan pernah mengaku sebagai anak Pontianak asli kalau tidak tahu dengan Kampung Beting. Bagi sebagian orang, banyak yang mengenal Kampung Beting dari sisi gelapnya, padahal jika dicermati secara mendalam maka banyak sisi terang yang sebenarnya bisa dikreasikan dari sini. Secara geografis, Kampung Beting berlokasi di&nbsp;<em>Kecamatan Pontianak Timur</em>, tepatnya di daerah pertemuan antara Sungai Kapuas dan Sungai Landak. Kampung ini dibangun diatas sungai dengan jembatan kayu yang menghubungkan dari rumah ke rumah, sehingga terlihat bagaikan lukisan yang indah. Eksotisme kehidupan pinggir sungai begitu nyata di kampung ini, banyak aktivitas yang melibatkan unsur sungai dalam keseharian masyarakatnya. Mulai dari mandi, mencuci hingga transportasi umumnya mereka masih menggunakan sampan sebagai alat penyeberangan ke&nbsp;<a href="http://www.wisatapontianak.com/"><strong>Kota Pontianak</strong>.</a>&nbsp;Pada jaman dahulu, sampan merupakan sarana utama untuk menunjang aktivitas kehidupan sehari-hari menyeberangi sungai Kapuas<strong>.&nbsp;</strong>Namun seiring perkembangan jaman, masyarakat sudah menggunakan speedboat untuk beraktivitas dan berlalu lintas sehari-hari, tanpa menghilangkan keberadaan sampan yang sudah ada sejak dulu.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Kota')->first()->id
            ),
            array(
                'id' => '12',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Hutan Kota (ARBORETUM SYLVA UNTAN)',
                'address' => 'Jl. Jenderal Ahmad Yani, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78115',
                'latitude' => '-0.056191',
                'longitude' => '109.349605',
                'phone' => '-',
                'email' => '-',
                'district' => '-',
                'created_at' => '2019-06-26 02:50:52',
                'updated_at' => '2019-07-07 20:31:50',
                'deleted_at' => NULL,
                'description' => '<p>Hutan Kota (Arboretum Sylva Untan) Pontianak. Jika kebetulan anda di Pontianak untuk waktu yang tidak lama anda dapat pergi ke Hutan Kota (Arboretum Sylva Untan).</p>
              <p>Tempat wisata alam Pontianak ini menyimpan koleksi pepohonan dan tanaman khas Pontianak. Tujuan dibuatnya hutan kota Pontianak ini adalah untuk melestarikan keaneka ragaman hayati di Pontianak.</p>
              <p>Selain itu juga bertujuan untuk pengembangan hutan kota, paru-paru kota, serta ruang publik untuk masyarakat kota.&nbsp; Pemandangan hijau yang berada di tengah kota tentu akan menjadi sesuatu istimewa, di tengah-tengah ruwetnya suasana kota</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Budaya')->first()->id
            ),
            array(
                'id' => '13',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Masjid Jami Sultan Syarif Abdurrahman',
                'address' => 'Dalam Bugis, Pontianak Timur, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.02673',
                'longitude' => '109.34767899999997',
                'phone' => '(0561) 8176671',
                'email' => 'masjidjami@email.com',
                'district' => 'Pontianak Timur',
                'created_at' => '2019-06-26 02:55:25',
                'updated_at' => '2019-07-07 20:17:18',
                'deleted_at' => NULL,
                'description' => '<p>Masjid Jami Sultan Syarif Abdurrahman, Pontianak. Di Pontianak ini ternyata dulu kala pernah berdiri sebuah kerajaan yang besar.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '14',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Tugu Khatulistiwa',
                'address' => 'Jl. Khatulistiwa No.Kel, Batu Layang, Pontianak Utara, Kota Pontianak, Kalimantan Barat 78244',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => '(0561) 886760',
                'email' => '-',
                'district' => 'Batu Layang',
                'created_at' => '2020-09-30 12:09:24',
                'updated_at' => '2020-09-30 12:09:24',
                'deleted_at' => NULL,
                'description' => '<p>Kota Pontianak identik dengan khatulistiwa. Kota ini menjadi salah satu kota yang dilalui garis khatulistiwa, garis lintang nol derajat atau biasa disebut sebagai equator. Di kota inilah dibangun sebuah menara yang diberi nama Tugu Khatulistiwa, sebuah menara yang di bangun oleh tim ekspedisi geografi yang dipimpin seorang ahli geografi berkebangsaan Belanda.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '15',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Rumah Betang',
                'address' => 'Jl. Letjen Sutoyo, Pontianak 78121 Indonesia',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Parit Tokaya',
                'created_at' => '2020-09-30 12:28:03',
                'updated_at' => '2020-09-30 12:28:03',
                'deleted_at' => NULL,
                'description' => '<p>Replika rumah adat ini sepertinya tetap masih menyandang predikat rumah adat terpanjang di Indonesia , dengan panjang 138 m, lebar 5 meter dan tinggi 7 meter.<br />Model nya simple , model rumah panggung dengan ornamen dayak .<br />Bagus untuk berfoto dan menikmati pemandangan bagian atas .</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '16',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Rumah Melayu',
                'address' => 'Kompleks Rumah Adat Melayu, Jalan Sutan Syahrir, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Sungai Bangkong',
                'created_at' => '2020-09-30 12:35:53',
                'updated_at' => '2020-09-30 12:35:53',
                'deleted_at' => NULL,
                'description' => '<p>Rumah Adat Melayu Kalimantan Barat (Kalbar) ini terletak Komplek Perkampungan Budaya, Jalan Sutan Syahrir Kota Pontianak.Secara historis, pembangunan Rumah Adat Melayu ini dimulai dengan penancapan tiang pertama pada tanggal 17 Mei 2003 hingga selesai dibangun pada tahun 2005.Selanjutnya, pada tanggal 9 November 2005Rumah Adat Melayu Kalbar diresmikan oleh Wakil Presiden RI Jusuf Kalla.Sejak diresmikan, bangunan berdiri diatas lahan seluas 1,4 Hektarini menjadi pusat/tempat diselenggarakannya berbagai kegiatan, resepsi pernikahan maupun salah satu destinasi kunjungan wisatawan lokal maupun mancanegara.Hakikat rumah/ruang balai adalah tempat melakukan kegiatan bermasyarakat dan kegiatan sosial, termasuk tempat mengadakan musyawarah dan sebagainya.Ungkapan diatas memberi petunjuk, bahwa rumah/ruang balai melambangkan falsafah hidup gotong royong, senasib sepenanggungan dan kesetiakawanan sosial pada masyarakat Melayu,"Adat dijunjung, budaya disanjung".Rumah Adat Melayu juga berfungsi sebagai tempat musyawarah Majelis Adat Budaya Melayu (MABM) yang berperan dalam menyelenggarakan berbagi event budaya Melayu di Kalbar, satu diantaranya adalah Festival Seni Budaya Melayu.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '17',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Promenade Waterfront',
                'address' => 'Jl. Barito, Benua Melayu Laut, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Benua Melayu Laut',
                'created_at' => '2020-09-30 12:46:05',
                'updated_at' => '2020-09-30 12:46:05',
                'deleted_at' => NULL,
                'description' => '<p>Waterfront dibangun oleh pemkot kota Pontianak mulai tahun 2017 lalu dan diresmikan awal tahun 2019. Merupakan wisata yang dibangun di tepian Sungai Kapuas yang membentang di kedua sisi sungai tersebut. Waterfront mulai diramaikan pengunjung saat peresmian nya baru-baru ini.Waktu yang cocok untuk berkunjung ke Waterfront ialah diwaktu sore hari hingga malam hari, karena selain dapat menikmati matahari terbenam yang menyoroti Sungai Kapuas, liners juga disuguhkan dengan kuliner khas Kalimantan Barat yang terbentang sepanjang Waterfront ini.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '18',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Makam Batu Layang',
                'address' => 'Jl. Khatulistiwa, Batu Layang, Pontianak Utara, Kota Pontianak, Kalimantan Barat 78114',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Batu Layang',
                'created_at' => '2020-09-30 12:57:51',
                'updated_at' => '2020-09-30 12:57:51',
                'deleted_at' => NULL,
                'description' => '<p>Makam Kesultanan Pontianak di Batu Layang merupakan aset ketiga warisan Kesultanan Pontianak sesudah Istana Kadriah dan Mesjid Sultan Abdurrahman. Konon ketiga lokasi ini mempunyai letak dengan garis lurus dari istana, dari arah timur ke barat. Komplek pemakaman dikhususkan bagi para Sultan Pontianak dan keluarganya. Makam Sultan Pontianak terletak di tepian Sungai Kapuas yang dahulunya hanya dapat ditempuh dengan berjalan kaki, namun saat ini akses menuju lokasi tersebut sudah dapat mengunakan kendaraan.Makam Sultan Pontianak dikunjungi oleh peziarah dan wisatawan untuk mengetahui lebih lengkap tentang riwayat para Sultan Pontianak, dengan segala bukti keberadaannya.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '19',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Kampung Batik Kamboja',
                'address' => 'Jl. Tanjung Pura Gg. Kamboja Baru No.rt.001/008, Benua Melayu Laut, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78123',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => '0812-5333-4554',
                'email' => NULL,
                'district' => 'Benua Melayu Laut',
                'created_at' => '2020-09-30 13:07:25',
                'updated_at' => '2020-09-30 13:07:25',
                'deleted_at' => NULL,
                'description' => '<div class="components__NormalWidth-sc-1ukv6c0-0 gIxCuB" data-key="4406547">
              <div class="Viewweb__StyledView-p5eu6e-0 eFqoRA track_paragraph" data-key="4406547">
              <div class="TextBoxweb__StyledTextBox-sc-1wzqkk1-0 dNLHxU"><span class="Textweb__StyledText-sc-1fa9e8r-0 jATCuv components__InlineTableText-ul8wq4-0 drMAgy">Kampung tenun di Kecamatan Pontianak Utara, Gang Kamboja di Kecamatan Pontianak Selatan juga bakal disulap sebagai satu destinasi wisata yang akan diberi nama kampung batik Kamboja.<br />Saat ini pihak Dekranasda Pontianak bersama Dinas Koperasi Usaha Mikro dan Perdagangan dan mitra memberikan pelatihan membatik. Sasarannya industri kecil dan menengah di kampung Kamboja.</span></div>
              </div>
              </div>
              <div class="components__NormalWidth-sc-1ukv6c0-0 gIxCuB" data-key="4406550">
              <div>&nbsp;</div>
              <div>&nbsp;</div>
              </div>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '20',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Kampung Tenun',
                'address' => 'Jl. Khatulistiwa Gg. Sambas Jaya, Batu Layang, Pontianak Utara, Kota Pontianak, Kalimantan Barat 78244',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => '0812-5760-183',
                'email' => NULL,
                'district' => 'Batu Layang',
                'created_at' => '2020-09-30 13:12:17',
                'updated_at' => '2020-09-30 13:12:17',
                'deleted_at' => NULL,
                'description' => '<p>Pengunjung Kampung Wisata Tenun Khatulistiwa bisa melihat beragam koleksi tenun khas Sambas. Ada juga kreasi tenun corak insang khas Pontianak. Selain melihat koleksi tenun, pengunjung juga bisa melihat proses pembuatannya.Menariknya, alat tenun di kampung tersebut dibuat secara mandiri oleh warga setempat. Keuletan dari pengrajin Kampung Wisata Tentun Khatulistiwa mendapat apresiasi dari banyak pihak.Tak tanggung-tanggung, hasil tenun warga Kampung Wisata Tenun itu dipamerkan dalam berbagai pameran. Hal ini juga tidak terlepas dari dukungan Pemkot Pontianak. Diketahui kampung wisata tersebut diresmikan akhir 2018.Upaya pemerintah untuk mendukung Kampung Wisata Tenun Khatulistiwa, diantaranya memperbaiki jalan di wilayah tersebut. Tak hanya membangun fisik, Pemkot Pontianak sudah beberapa kali mendatangkan narsumber untuk meningkatkan kemampuan dan keterampilan para penenun.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '21',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Taman Catur',
                'address' => 'Jl. Jenderal Ahmad Yani No.89, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Parit Tokaya',
                'created_at' => '2020-09-30 13:20:58',
                'updated_at' => '2020-09-30 13:20:58',
                'deleted_at' => NULL,
                'description' => '<p>Selain sebagai destinasi wisata murah meriah, taman catur juga berfungsi sebagai paru-paru kota. Hal ini dapat dibuktikan dari keberadaannya yang ditumbuhi pepohonan cukup rindang. Tak hanya dijadikan tempat wisata, taman ini sering digunakan sebagai arena diskusi oleh mahasiswa, lantaran letaknya tepat berada di antara kampus Universitas Tanjung Pura dan Politeknik Negeri Pontianak.<br /><br /><strong>Fasilitas</strong><br />Sesuai dengan namanya, Taman Catur diambil dari salah satu fasilitas yang juga menjadi icon taman ini, yaitu papan catur raksasa. Saat pertama kali datang, Anda akan disuguhkan dengan papan catur berukuran raksasa lengkap dengan pion-pionnya. Papan catur dengan pion seukuran orang dewasa seakan menjadi spot foto wajib di taman ini. Pasalnya, siapapun yang berkunjung tak melewatkan kesempatan untuk mengabadikan moment di papan catur tersebut.<br /><br />Selain papan catur raksasa, taman yang mengusung konsep fun and education ini dilengkapi fasilitas yang sesuai dengan konsep yang diusung. Skate park dan lapangan basket menjadi fasilitas paling sering digunakan oleh muda-mudi untuk berolahraga.</p>
              <p>Fasilitas lain seperti ayunan, prosotan dan jungkat-jungkit menjadi pilihan tepat bagi anak-anak yang berkunjung ke taman. Keindahan dan keasrian taman yang dihiasi berbagai jenis bunga menjadi daya tarik bagi pengunjung.<br /><br />Selain duduk santai di kursi taman menikmati kendaraan berlalu lalang, Anda dapat menambah wawasan seputar kota Pontianak melalui perpustakaan digital. Fasilitas lain yang tak kalah menarik dari taman ini adalah Stasiun Pengisian Listrik Umum (SPLU). Fasilitas SPLU memberikan Anda kenyamanan menikmati keindahan kota tanpa takut gagal mengabadikan moment akibat handphone mati.<br /><br />Dalam menjaga kebersihan dan keasrian taman, pemkot juga tlah menyediakan tempat sampah sesuai dengan jenis sampahnya. Jadi, tidak ada alasan bagi siapapun untuk buang sampah sembarangan.<br /><br />Lokasi strategis, area parkir yang luas dan ditambah fasilitas yang memadai menjadi alasan taman ini ramai dikunjungi. Untuk dapat menikmati seluruh fasilitas, Anda tidak perlu mengeluarkan biaya sepeser pun alias gratis. Cukup dengan tidak membuang sampah sembarangan dan tidak merusak fasilitas yang ada, maka Anda telah membantu menjaga dan merawat aset wisata berharga kota ini.<br /><br />Taman Catur buka setiap dari dari pukul 06.00 pagi sampai dengan 21.00 malam.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '22',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Taman Akcaya',
                'address' => 'Jalan Sultan Syahrir, Akcaya, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Akcaya',
                'created_at' => '2020-09-30 13:29:57',
                'updated_at' => '2020-09-30 13:29:57',
                'deleted_at' => NULL,
                'description' => '<p>Taman Akcaya Pontianak biasa digunakan warga sekitar sebagai tempat alternatif bersama keluarga untuk menghabiskan waktu di akhir pekan.</p>
              <p>Dengan suasana yang sejuk dan ditumbuhi pepohonan yang rindang membuat taman ini cocok untuk bersantai.</p>
              <p>Di&nbsp;Taman Akcaya&nbsp;kamu juga bisa menikmati fasilitas rumah baca, tempat belanja hingga arena bermain anak.</p>
              <p>Kehadiran rumah baca di taman kota&nbsp;Pontianak&nbsp;ini adalah fasilitas perpustakaan dengan koleksi buku yang lengkap.</p>
              <p>Kamu tidak perlu khawatir kepanasan ketika berada di rumah baca, karena ruangannya sudah dilengkapi dengan pendingin ruangan (AC).</p>
              <p>Menariknya lagi, di rumah baca sudah disediakan wifi gratis untuk memudahkan kamu terkoneksi dengan internet.</p>
              <p>&nbsp;</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '23',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Kampung Caping Pontianak',
                'address' => 'Gg. Mendawai, Kelurahan Bansir Laut, Kecamatan Pontianak Tenggara',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Bansir Laut',
                'created_at' => '2021-05-09 17:56:41',
                'updated_at' => '2021-05-09 17:56:41',
                'deleted_at' => NULL,
                'description' => '<p>Kampung Wisata Caping yang terletak di Gang Mendawai Kelurahan Bansir Laut, Kecamatan Pontianak&nbsp;Tenggara merupakan destinasi wisata yang baru di Kota Pontianak, Kalbar yang patut dikunjungi ketika berwisata ke kota khatulistiwa ini.</p>
              <p>Caping merupakan topi yang berbentuk kerucut yang umumnya terbuat dari anyaman bambu, sejenis daun pandan atau daun kelapa. Caping kerap digunakan oleh para petani maupun peladang ketika bercocok tanam. Caping digunakan sebagai tutup kepala untuk menghindari panas matahari.</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '24',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Taman Bermain Pal lima',
                'address' => 'Jl. Tabrani Ahmad (ujung)
              -+ 900 Meter Dr SMP 17 Kota Pontianak',
                'latitude' => '-0.030007702033911877',
                'longitude' => '109.28876828798086',
                'phone' => '0815-1313-8789',
                'email' => NULL,
                'district' => 'Kelurahan Pal Lima',
                'created_at' => '2024-03-18 00:51:29',
                'updated_at' => '2024-03-18 00:51:29',
                'deleted_at' => NULL,
                'description' => '<p>&nbsp;</p>
              <p class="p1">Salah satu wahana yang menjadi viral adalah seluncuran terpanjang di Pontianak, yang menjadi daya tarik utama dari tempat ini.<span class="Apple-converted-space">&nbsp;</span></p>
              <p class="p1">Namun, Wisata Pal 5 tidak hanya menyediakan seluncuran, melainkan juga berbagai wahana lain yang baru saja dibuka.</p>
              <p class="p1">Bagi para wisatawan yang ingin menguji adrenalin mereka, seluncuran di Wisata Pal 5 menjadi pilihan yang menarik.<span class="Apple-converted-space">&nbsp;</span></p>
              <p class="p1">Wisata ini terletak di Jalan Tabrani Ahmad Pal 5, dengan harga tiket masuk sebesar Rp 30 ribu per orang, sementara harga tiket wahana bermain bervariasi, mulai dari Rp 10 ribu hingga Rp 50 ribu.</p>
              <p class="p1">Berbagai wahana yang ditawarkan oleh Wisata Pal 5 sangat beragam, termasuk seluncuran, mobil-mobilan, dan bahkan bungee jumping. Selain itu, tempat ini juga menyediakan taman yang cocok untuk berfoto.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Taman Bermain')->first()->id
            ),
            array(
                'id' => '25',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Masjid Raya Mujahidin',
                'address' => 'Jl. Jenderal Ahmad Yani,
                Kel. Akcaya, Kec. Pontianak Sel.,
                Kota Pontianak, Kalimantan Barat',
                'latitude' => '-0.040840564364058494',
                'longitude' => '109.33597045881959',
                'phone' => '089-977-786-965 (Takmir Mujahidin)',
                'email' => 'yayasan-mujahidin.pontianak@gmail.com',
                'district' => 'Kelurahan Akcaya',
                'created_at' => '2024-03-18 01:00:55',
                'updated_at' => '2024-06-25 09:17:44',
                'deleted_at' => NULL,
                'description' => '<p>Berdirinya Masjid Raya Mujahidin dimulai dari adanya Kongres Muslimin Indonesia tahun 1953,dimana salah satu hasil kongres tersebut mencanangkan pembangunan Masjid &nbsp;Raya di semua Kota di Indonesia. Beberapa delegasi dari Kalimantan Barat Muzanie A Ranie, Ahmad Mawardi Djafar, Abdul Rani Mahmud serta Rekan rekan&nbsp;kemudian membentuk Yayasan Mujahidin untuk merealisasikan rintisan pembangunan fisik Masjid Raya Mujahidin. Tepatnya pada tanggal 2 Oktober 1953.</p>
                <p>Masjid Raya Mujahidin pada awalnya dibangun pada Tahun 1974 dengan nama Masjid<br />Mujahidin yang memiliki makna untuk mengenang perjuangan umat Islam didalam<br />kancah mengangkat Islam dan Jihad di Jalan Allah SWT.</p>
                <p>Dibangun diatas lahan seluas 6,4 Ha dan diselesaikan empat tahun kemudian, diresmikan oleh Bapak H. Soeharto presiden 2 Republik Indonesia pada tanggal 23 Oktober 1978 Bertepatan 20 Dzulhijah 1398 H bersamaan<br />Hari jadi kota Pontianak yang ke 207.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Religius')->first()->id
            ),
            array(
                'id' => '26',
                'user_id' => $superAdminId,
                'master_id' => $wisataId,
                'name' => 'Katredal Santo Yosef',
                'address' => 'Jl. Pattimura Indah No.195, Kelurahan Darat Sekip,
                Kec. Pontianak Kota, Kota Pontianak,
                Kalimantan Barat 78011',
                'latitude' => '-0.02736758462520524',
                'longitude' => '109.33837529440082',
                'phone' => '(0561) 734739',
                'email' => NULL,
                'district' => 'Kelurahan Darat Sekip',
                'created_at' => '2024-03-18 01:07:17',
                'updated_at' => '2024-06-25 09:17:11',
                'deleted_at' => NULL,
                'description' => '<p>Paroki Santo Yoseph Katedral&nbsp;Pontianak merupakan paroki dari&nbsp;Gereja Katolik Roma di pusat&nbsp;Keuskupan Agung Pontianak.&nbsp;Bangunan gereja pusat paroki ini,&nbsp;Gereja St Yoseph, merupakan&nbsp;gereja katedral --tempat tahta&nbsp;uskup Keuskupan Agung&nbsp;Pontianak; diresmikan pada 19&nbsp;Desember 2014 oleh Gubernur&nbsp;Kalbar Drs. Cornelis MH, dan&nbsp;pember-katannya pada 19 Maret&nbsp;2015. Pusat Paroki Katedral Pontianak berada di Jl. Pattimura No.195, Kelurahan Darat Sekip, Kecamatan Pontianak&nbsp;Kota, Kota Pontianak, Kalimantan&nbsp;Barat, 78011.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 1)->where('category', 'Religius')->first()->id
            )
        );

        $info_wisata_detail = array(
            array(
                'id' => 1,
                'user_id' => 1,
                'pariwisata_id' => 1,
                'file' => 'maxresdefault_5d03875440f85.jpg',
                'created_at' => '2019-06-14 04:39:00',
                'updated_at' => '2019-06-14 04:39:00',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 2,
                'user_id' => 1,
                'pariwisata_id' => 1,
                'file' => '84493929_5d038754418d0.jpg',
                'created_at' => '2019-06-14 04:39:00',
                'updated_at' => '2019-06-14 04:39:00',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 3,
                'user_id' => 1,
                'pariwisata_id' => 1,
                'file' => 'taman-alun-alun-malam-hari_5d03875441e8d.jpg',
                'created_at' => '2019-06-14 04:39:00',
                'updated_at' => '2019-06-14 04:39:00',
                'deleted_at' => NULL,
                'position' => 3
            ),
            array(
                'id' => 9,
                'user_id' => 1,
                'pariwisata_id' => 1,
                'file' => '02-630x380_5d09e918064a4.jpg',
                'created_at' => '2019-06-19 00:49:44',
                'updated_at' => '2019-06-19 00:49:44',
                'deleted_at' => NULL,
                'position' => 4
            ),
            array(
                'id' => 4,
                'user_id' => 1,
                'pariwisata_id' => 2,
                'file' => 'jogging-track-taman-digulis-pontianak_20170203_203105_5d03877c36e48.jpg',
                'created_at' => '2019-06-14 04:39:40',
                'updated_at' => '2019-06-14 04:39:40',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 10,
                'user_id' => 1,
                'pariwisata_id' => 2,
                'file' => 'jogging-track-taman-digulis-pontianak_20170203_203105_5d09ea76767df.jpg',
                'created_at' => '2019-06-19 00:55:34',
                'updated_at' => '2019-06-19 00:55:34',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 5,
                'user_id' => 1,
                'pariwisata_id' => 3,
                'file' => 'museum-ptk_5d0387e32ee6f.jpg',
                'created_at' => '2019-06-14 04:41:23',
                'updated_at' => '2019-06-14 04:41:23',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 11,
                'user_id' => 1,
                'pariwisata_id' => 3,
                'file' => 'museum-ptk_5d09eb41b0636.jpg',
                'created_at' => '2019-06-19 00:58:57',
                'updated_at' => '2019-06-19 00:58:57',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 6,
                'user_id' => 1,
                'pariwisata_id' => 4,
                'file' => 'Istana Kadriah2 @syarif_hairul_akbar_alqadrie_5d0388afa4537.jpg',
                'created_at' => '2019-06-14 04:44:47',
                'updated_at' => '2019-06-14 04:44:47',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 14,
                'user_id' => 1,
                'pariwisata_id' => 4,
                'file' => 'Istana Kadriah2 @syarif_hairul_akbar_alqadrie_5d09ebcc00b1c.jpg',
                'created_at' => '2019-06-19 01:01:16',
                'updated_at' => '2019-06-19 01:01:16',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 7,
                'user_id' => 1,
                'pariwisata_id' => 5,
                'file' => 'k4oxzrauej4axlyak2wy_5d0388b8bfbb2.png',
                'created_at' => '2019-06-14 04:44:56',
                'updated_at' => '2019-06-14 04:44:56',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 8,
                'user_id' => 1,
                'pariwisata_id' => 5,
                'file' => 'maxresdefault_5d0388b8c00b3.jpg',
                'created_at' => '2019-06-14 04:44:56',
                'updated_at' => '2019-06-14 04:44:56',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 12,
                'user_id' => 1,
                'pariwisata_id' => 5,
                'file' => 'k4oxzrauej4axlyak2wy_5d09ebaf89b8b.png',
                'created_at' => '2019-06-19 01:00:47',
                'updated_at' => '2019-06-19 01:00:47',
                'deleted_at' => NULL,
                'position' => 3
            ),
            array(
                'id' => 13,
                'user_id' => 1,
                'pariwisata_id' => 5,
                'file' => 'maxresdefault_5d09ebaf8a328.jpg',
                'created_at' => '2019-06-19 01:00:47',
                'updated_at' => '2019-06-19 01:00:47',
                'deleted_at' => NULL,
                'position' => 4
            ),
            array(
                'id' => 18,
                'user_id' => 1,
                'pariwisata_id' => 8,
                'file' => 'Rumah-Radakng_5d133c373a4eb.jpg',
                'created_at' => '2019-06-26 02:34:47',
                'updated_at' => '2019-06-26 02:34:47',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 19,
                'user_id' => 1,
                'pariwisata_id' => 9,
                'file' => '13736076_854970241274853_667789853_n_5d133cebad6a4.jpg',
                'created_at' => '2019-06-26 02:37:47',
                'updated_at' => '2019-06-26 02:37:47',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 21,
                'user_id' => 1,
                'pariwisata_id' => 11,
                'file' => '49016807_5d133f6743987.jpg',
                'created_at' => '2019-06-26 02:48:23',
                'updated_at' => '2019-06-26 02:48:23',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 22,
                'user_id' => 1,
                'pariwisata_id' => 12,
                'file' => '4052_5d133ffc51978.jpg',
                'created_at' => '2019-06-26 02:50:52',
                'updated_at' => '2019-06-26 02:50:52',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 23,
                'user_id' => 1,
                'pariwisata_id' => 13,
                'file' => 'Masjid-Jami-Pontianak-1-300x200_5d13410db0139.jpg',
                'created_at' => '2019-06-26 02:55:25',
                'updated_at' => '2019-06-26 02:55:25',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 24,
                'user_id' => 1,
                'pariwisata_id' => 14,
                'file' => 'tugu_5f753a55345bd.jpg',
                'created_at' => '2020-09-30 12:09:25',
                'updated_at' => '2020-09-30 12:09:25',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 25,
                'user_id' => 1,
                'pariwisata_id' => 15,
                'file' => 'betang1_5f753eb3933ab.jpg',
                'created_at' => '2020-09-30 12:28:03',
                'updated_at' => '2020-09-30 12:28:03',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 26,
                'user_id' => 1,
                'pariwisata_id' => 16,
                'file' => 'rumah melayu_5f75408a2ca7d.jpg',
                'created_at' => '2020-09-30 12:35:54',
                'updated_at' => '2020-09-30 12:35:54',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 27,
                'user_id' => 1,
                'pariwisata_id' => 17,
                'file' => 'waterfront_5f7542edf0379.jpg',
                'created_at' => '2020-09-30 12:46:05',
                'updated_at' => '2020-09-30 12:46:05',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 28,
                'user_id' => 1,
                'pariwisata_id' => 17,
                'file' => 'waterfrontsepi-1_5f7542edf0c94.jpg',
                'created_at' => '2020-09-30 12:46:05',
                'updated_at' => '2020-09-30 12:46:05',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 29,
                'user_id' => 1,
                'pariwisata_id' => 18,
                'file' => 'download_5f7545afa706c.jpg',
                'created_at' => '2020-09-30 12:57:51',
                'updated_at' => '2020-09-30 12:57:51',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 30,
                'user_id' => 1,
                'pariwisata_id' => 18,
                'file' => 'Makam-Kesultanan-Batulayang-300x225_5f7545afa78ab.jpg',
                'created_at' => '2020-09-30 12:57:51',
                'updated_at' => '2020-09-30 12:57:51',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 31,
                'user_id' => 1,
                'pariwisata_id' => 19,
                'file' => 'kmpung batik_5f7547eda075b.jpg',
                'created_at' => '2020-09-30 13:07:25',
                'updated_at' => '2020-09-30 13:07:25',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 32,
                'user_id' => 1,
                'pariwisata_id' => 20,
                'file' => 'tenun_5f754911d5abe.jpg',
                'created_at' => '2020-09-30 13:12:17',
                'updated_at' => '2020-09-30 13:12:17',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 33,
                'user_id' => 1,
                'pariwisata_id' => 20,
                'file' => 'kampung tenun_5f754911d62b6.jpg',
                'created_at' => '2020-09-30 13:12:17',
                'updated_at' => '2020-09-30 13:12:17',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 34,
                'user_id' => 1,
                'pariwisata_id' => 21,
                'file' => 'download (1)_5f754b1b6def8.jpg',
                'created_at' => '2020-09-30 13:20:59',
                'updated_at' => '2020-09-30 13:20:59',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 35,
                'user_id' => 1,
                'pariwisata_id' => 21,
                'file' => 'tmn catur_5f754b1b6e772.jpg',
                'created_at' => '2020-09-30 13:20:59',
                'updated_at' => '2020-09-30 13:20:59',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 36,
                'user_id' => 1,
                'pariwisata_id' => 22,
                'file' => 'taman-akcaya_20170419_204748_5f754d35e9e29.jpg',
                'created_at' => '2020-09-30 13:29:57',
                'updated_at' => '2020-09-30 13:29:57',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 37,
                'user_id' => 1,
                'pariwisata_id' => 22,
                'file' => 'taman-akcaya_5f754d35ea6b0.jpg',
                'created_at' => '2020-09-30 13:29:57',
                'updated_at' => '2020-09-30 13:29:57',
                'deleted_at' => NULL,
                'position' => 2
            ),
            array(
                'id' => 38,
                'user_id' => 1,
                'pariwisata_id' => 22,
                'file' => 'akcaya_5f754d35f15bb.jpg',
                'created_at' => '2020-09-30 13:29:57',
                'updated_at' => '2020-09-30 13:29:57',
                'deleted_at' => NULL,
                'position' => 3
            ),
            array(
                'id' => 40,
                'user_id' => 1,
                'pariwisata_id' => 23,
                'file' => 'WhatsApp Image 2021-05-10 at 2_6098e73a0a01b.37',
                'created_at' => '2021-05-09 17:56:42',
                'updated_at' => '2021-05-09 17:56:42',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 41,
                'user_id' => 1,
                'pariwisata_id' => 24,
                'file' => 'image_2024-03-18_074959037_65f790115ced3.png',
                'created_at' => '2024-03-18 00:51:29',
                'updated_at' => '2024-03-18 00:51:29',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 42,
                'user_id' => 1,
                'pariwisata_id' => 25,
                'file' => 'image_2024-03-18_080028260_65f79247ed398.png',
                'created_at' => '2024-03-18 01:00:55',
                'updated_at' => '2024-03-18 01:00:55',
                'deleted_at' => NULL,
                'position' => 1
            ),
            array(
                'id' => 43,
                'user_id' => 1,
                'pariwisata_id' => 26,
                'file' => 'image_2024-03-18_080644097_65f793c5bf40b.png',
                'created_at' => '2024-03-18 01:07:17',
                'updated_at' => '2024-03-18 01:07:17',
                'deleted_at' => NULL,
                'position' => 1
            )
        );

        $events = DB::table('events')->select(['id', 'user_id', 'location', 'created_at', 'updated_at', 'deleted_at'])->get();

        DB::beginTransaction();
        try {
            foreach ($info_wisata as $key => $value) {
                $wisata = DB::table('pariwisata')->insertGetId([
                    'id' => $value['id'],
                    'user_id' => $value['user_id'],
                    'master_id' => $value['master_id'],
                    'name' => $value['name'],
                    'address' => $value['address'],
                    'latitude' => $value['latitude'],
                    'longitude' => $value['longitude'],
                    'phone' => $value['phone'],
                    'email' => $value['email'],
                    'district' => $value['district'],
                    'created_at' => $value['created_at'],
                    'updated_at' => $value['updated_at'],
                    'deleted_at' => $value['deleted_at'],
                    'description' => $value['description'],
                    'category_id' => $value['category_id'],
                ]);

                // ! Menambah data Lokasi Event
                foreach ($events as $event) {
                    $data = json_decode($event->location, true);
                    if (isset($data['W'])) {
                        $eventWisataIds = $data['W'];
                        foreach ($eventWisataIds as $eventWisataId) {
                            if ($wisata == $eventWisataId) {
                                DB::table('event_locations')->insert([
                                    'user_id' => $event->user_id,
                                    'event_id' => $event->id,
                                    'pariwisata_id' => $wisata,
                                    'created_at' => $event->created_at,
                                    'updated_at' => $event->updated_at,
                                    'deleted_at' => $event->deleted_at,
                                ]);
                            }
                        }
                    }
                }
            }
            DB::table('pariwisata_images')->insert($info_wisata_detail);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
