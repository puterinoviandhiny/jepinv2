<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PariwisataDataKulinerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $kulinerId = DB::table('pariwisata_master')->where('name', 'Kuliner')->first()->id;
        // ! Kuliner
        $info_hotel_restoran = array(
            array(
                'id' => '12',
                'id_lama' => '12',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'DYNASTY CHINESE RESTAURANT',
                'address' => 'Aston Hotel & Convention Center, Jalan Gajah Mada, Gang Gajah Mada 21, Benua Melayu Darat, Pontianak Selatan, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.036238',
                'longitude' => '109.34305100000006',
                'phone' => '(0561) 761118',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:33:28',
                'updated_at' => '2019-07-08 19:49:20',
                'deleted_at' => '2019-07-08 19:49:20',
                'description' => '<p><strong>Dynasty Chinese Restaurant&nbsp;</strong>merupakan salah satu restoran di Pontianak yang menyediakan berbagai menu khas Tionghua. Restoran ini terletak&nbsp;di dalam Hotel Aston Pontianak yang terletak di Jalan Gajah Mada Gang Gajah Mada 6.&nbsp;<strong>Dynasty Chinese Restaurant</strong>&nbsp;menyediakan berbagai menu seperti olahan daging ikan dan ayam dan sayur sesuai dengan cita rasa khas Negeri Tirai Bambu,&nbsp;<em>dimsum</em>, dan yang lainnya.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '13',
                'id_lama' => '13',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restaurant Gajah Mada',
                'address' => 'Jl. Gajah Mada No.202, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.037495',
                'longitude' => '109.34314700000004',
                'phone' => '(0561) 766526',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:34:18',
                'updated_at' => '2019-07-08 19:46:16',
                'deleted_at' => '2019-07-08 19:46:16',
                'description' => '<p>This restaurant is good if you have big family gatherings if you are celebrating something like a birthday or a christening. It is best to make a booking so that you do not miss out on any tables. This is a nice Chinese restaurant and all the food is very delicious . It is also air conditioned so that you are out of the heat. It is best to order a few dishes so that you can try different varieties foods and the different ways they can be prepared. This restaurant is also very close to the Harris Hotel so it is only a 5 minute walk away.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '14',
                'id_lama' => '14',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Seafood Ayam Kaleo',
                'address' => 'Jl. Urai Bawadi No No.13ABC, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78116',
                'latitude' => '-0.04136',
                'longitude' => '109.32310699999994',
                'phone' => '0857-8726-3631',
                'email' => 'https://seafood-ayam-caleo.business.site',
                'district' => NULL,
                'created_at' => '2019-06-14 04:35:15',
                'updated_at' => '2019-07-08 19:43:28',
                'deleted_at' => '2019-07-08 19:43:28',
                'description' => '<p>Masakannya mantab, terutama steam Thai ikan (must try!) Pelayan ramah ramah dan menguasai menu. Saya ga akan tau kalo Steam Thai ikan itu enak klo gak dikasih tau pelayan. Cuma aga lama pelayanannya, dan toilet aga kurang bersih. Itu aja sih, makanya bintang 4.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Rumah Makan')->first()->id,
            ),

            array(
                'id' => '15',
                'id_lama' => '15',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Sari Bento',
                'address' => 'Komplek Museum Pontianak, Jl. Jend. Ahmad Yani, Parit Tokaya, Pontianak Selatan, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.049594',
                'longitude' => '109.34229299999993',
                'phone' => '(0561) 760796',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:35:52',
                'updated_at' => '2019-07-08 19:39:43',
                'deleted_at' => '2019-07-08 19:39:43',
                'description' => '<p>&nbsp;Restoran ini menyajikan cita rasa Jepang dan Indonesia. Suasama pada hari minggu siang cukup ramai. Kebanyakan orang memesan shabu set, namun karena saya hanya sendiri akhirnya saya memesan bento set tempura seharga 53rb sudah termasuk sup dan teh botol. Menurut saya rasanya enak dan porsi nya besar, sesuai dengan harganya. Tempat restoran ini cukup nyaman? Tersedia musholla dan lesehan di luar. Restoran ini letaknya di dalam kompleks museum kalimantan barat. Jadi sempatkan diri anda untuk ke restoran ini setelah berkunjung ke museum. Ohiya restoran ini juga mendapatkan sertifikasi halal dari MUI jadi tidak perlu ragu.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '16',
                'id_lama' => '16',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Sky Garden Pontianak',
                'address' => 'Jl. Gajah Mada, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.0391',
                'longitude' => '109.342893',
                'phone' => '(0561) 740661',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:36:36',
                'updated_at' => '2019-07-08 19:32:12',
                'deleted_at' => '2019-07-08 19:32:12',
                'description' => `<p>Suasana yang nyaman dan makanan enak tentu menjadi satu di antara hal yang kita idamkan ketika bersantap bersama sahabat maupun keluarga. Kesibukan yang kerap menghampiri akhir-akhir ini bisa saja membuat kita ingin merefresh sejenak fikiran dari berbagai hal yang memusingkan.</p>
                    <p>Mau kemana minggu ini? Mungkin Anda bisa sedikit meluangkan waktu untuk menikmati senja di Sky Garden Hotel Star Pontianak yang berlokasi di Jalan Gajahmada Pontianak.</p>
                    <p>Tentu nama Sky Garden sudah tak asing di telinga Anda, restoran ini merupakan pencetus hadirnya restoran bernuansa 'Sky' yang akhir-akhir ini mulai marak di Pontianak.<br />Angin dan pemandangan Pontianak dari atas tentu menjadi satu di antara hal menarik yang bisa anda nikmati dari restoran yang terletak di lantai 8 ini.</p>
                    <p><br /><br />Artikel ini telah tayang di&nbsp;<a href="http://pontianaksmartcity.idekite.id/gerbang/info-hotel-restoran/16/http:">tribunpontianak.co.id</a>&nbsp;dengan judul Menikmati Senja Sambil Bersantap di Sky Garden Pontianak,&nbsp;<a href="https://pontianak.tribunnews.com/2015/08/09/menikmati-senja-sambil-bersantap-di-sky-garden-pontianak">https://pontianak.tribunnews.com/2015/08/09/menikmati-senja-sambil-bersantap-di-sky-garden-pontianak</a>.<br />Penulis: Listya Sekar Siwi <br />Editor: Mirna Tribun</p>`,
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '17',
                'id_lama' => '17',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'malibu',
                'address' => 'pontianak',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '086578689',
                'email' => 'hvfghsjdvfh@email.com',
                'district' => 'tenggara',
                'created_at' => '2019-06-24 01:52:57',
                'updated_at' => '2019-06-24 01:55:07',
                'deleted_at' => '2019-06-24 01:55:07',
                'description' => '<p>dfsdfsd</p>
                    <p>dsfsdfgsdg</p>
                    <p>sdgsdfgsadg</p>
                    <p>sadgfsadgsad</p>
                    <p>&nbsp;</p>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '19',
                'id_lama' => '19',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Sky Garden Pontianak',
                'address' => 'Jl. Gajah Mada, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.0391',
                'longitude' => '109.342893',
                'phone' => '(0561) 740661',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 19:39:12',
                'updated_at' => '2019-07-09 00:01:28',
                'deleted_at' => NULL,
                'description' => "<p>Suasana yang nyaman dan makanan enak tentu menjadi satu di antara hal yang kita idamkan ketika bersantap bersama sahabat maupun keluarga. Kesibukan yang kerap menghampiri akhir-akhir ini bisa saja membuat kita ingin merefresh sejenak fikiran dari berbagai hal yang memusingkan.<br />Mau kemana minggu ini? Mungkin Anda bisa sedikit meluangkan waktu untuk menikmati senja di Sky Garden Hotel Star Pontianak yang berlokasi di Jalan Gajahmada Pontianak.<br />Tentu nama Sky Garden sudah tak asing di telinga Anda, restoran ini merupakan pencetus hadirnya restoran bernuansa 'Sky' yang akhir-akhir ini mulai marak di Pontianak.</p>
                    <p>Angin dan pemandangan Pontianak dari atas tentu menjadi satu di antara hal menarik yang bisa anda nikmati dari restoran yang terletak di lantai 8 ini.</p>
                    <p>&nbsp;</p>",
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '20',
                'id_lama' => '20',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Sari Bento',
                'address' => 'Komplek Museum Pontianak, Jl. Jend. Ahmad Yani, Parit Tokaya, Pontianak Selatan, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.049594',
                'longitude' => '109.34229299999993',
                'phone' => '(0561) 760796',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 19:43:20',
                'updated_at' => '2019-07-08 23:59:34',
                'deleted_at' => NULL,
                'description' => '<p>Restoran ini menyajikan cita rasa Jepang dan Indonesia. Suasama pada hari minggu siang cukup ramai. Kebanyakan orang memesan shabu set, namun karena saya hanya sendiri akhirnya saya memesan bento set tempura seharga 53rb sudah termasuk sup dan teh botol. Menurut saya rasanya enak dan porsi nya besar, sesuai dengan harganya. Tempat restoran ini cukup nyaman? Tersedia musholla dan lesehan di luar. Restoran ini letaknya di dalam kompleks museum kalimantan barat. Jadi sempatkan diri anda untuk ke restoran ini setelah berkunjung ke museum. Ohiya restoran ini juga mendapatkan sertifikasi halal dari MUI jadi tidak perlu ragu.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '21',
                'id_lama' => '21',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Seafood Ayam Kaleo',
                'address' => 'Jl. Urai Bawadi No No.13ABC, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78116',
                'latitude' => '-0.04136',
                'longitude' => '109.32310699999994',
                'phone' => '0857-8726-3631',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 19:45:51',
                'updated_at' => '2019-07-08 23:58:57',
                'deleted_at' => NULL,
                'description' => '<p>Masakannya mantab, terutama steam Thai ikan (must try!) Pelayan ramah ramah dan menguasai menu. Saya ga akan tau kalo Steam Thai ikan itu enak klo gak dikasih tau pelayan. Cuma aga lama pelayanannya, dan toilet aga kurang bersih. Itu aja sih, makanya bintang 4.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '22',
                'id_lama' => '22',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restaurant Gajah Mada',
                'address' => 'Jl. Gajah Mada No.202, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.037495',
                'longitude' => '109.34314700000004',
                'phone' => '(0561) 766526',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 19:48:49',
                'updated_at' => '2019-07-08 23:58:13',
                'deleted_at' => NULL,
                'description' => '<p>This restaurant is good if you have big family gatherings if you are celebrating something like a birthday or a christening. It is best to make a booking so that you do not miss out on any tables. This is a nice Chinese restaurant and all the food is very delicious . It is also air conditioned so that you are out of the heat. It is best to order a few dishes so that you can try different varieties foods and the different ways they can be prepared. This restaurant is also very close to the Harris Hotel so it is only a 5 minute walk away.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '23',
                'id_lama' => '23',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'DYNASTY CHINESE RESTAURANT',
                'address' => 'Aston Hotel & Convention Center, Jalan Gajah Mada, Gang Gajah Mada 21, Benua Melayu Darat, Pontianak Selatan, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.036238',
                'longitude' => '109.34305100000006',
                'phone' => '(0561) 761118',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 19:53:33',
                'updated_at' => '2019-07-09 01:46:23',
                'deleted_at' => NULL,
                'description' => '<p><strong>Dynasty Chinese Restaurant</strong> merupakan salah satu restoran di Pontianak yang menyediakan berbagai menu khas Tionghua. Restoran ini terletak&amp;nbsp;di dalam Hotel Aston Pontianak yang terletak di Jalan Gajah Mada Gang Gajah Mada 6.</p>
            <p><strong>Dynasty Chinese Restaurant</strong> menyediakan berbagai menu seperti olahan daging ikan dan ayam dan sayur sesuai dengan cita rasa khas Negeri Tirai Bambu, <em>dimsum</em>, dan yang lainnya.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '35',
                'id_lama' => '35',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Tanggooe Pizeria',
                'address' => 'Jl. Arteri Supadio, Sungai Raya, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat 78121',
                'latitude' => '-0.08964',
                'longitude' => '109.37291500000003',
                'phone' => '+62 822-5126-0100',
                'email' => NULL,
                'district' => 'Kubu Raya',
                'created_at' => '2019-07-08 23:13:08',
                'updated_at' => '2021-01-14 17:28:43',
                'deleted_at' => '2021-01-14 17:28:43',
                'description' => '<p>Ruangan makan terbagi dua. Di dalam dan di luar ruangan. Untuk d luar ruangan Anda bisa memilih yang menghadap ke kolam renang Hotel Dangau, atau bisa juga di teras yang menghadap ke sawah di bagian belakang hotel dengan di batasi sungai kecil. Spectacular.</p>
                    <p>Untuk ruang dalam, disusun sangat cozzy dan bernuansa jazzy! Kumpulan foto-foto penyanyi legendaris dunia dalam format foto black and white terpajang di dinding barat dan timur dengan paduan lampu gantung yang temaram membuat suasana relax dan menyenangkan. Selain itu ada layar besar untuk mendengarkan lagu-lagu atau dapat digunakan untuk nonton bareng, serta berita pagi hari. Lagu latar belakang berirama Jaz sesuai dengan suasana di dalam restoran ini.</p>
                    <p>Sangat dianjurkan untuk memesan makanan dengan cepat, baru menikmati suasana restoran ini, karena biasanya order memasak tidak terlalu cepat. Anda juga bisa menikmati WiFi gratis di dalam restoran ini.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '56',
                'id_lama' => '56',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Terrazza Steak House Pontianak',
                'address' => 'Mega Mall, Blok. G No. 19-20 Komplek Ruko A. Yani, Jl. Jenderal Ahmad Yani, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78115',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '(0561) 573337',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 00:06:08',
                'updated_at' => '2019-07-09 18:08:32',
                'deleted_at' => NULL,
                'description' => '<p>restoran Pontianak yang berlokasi di Ayani Megamall Pontianak, Kompleks Ayani Megamall (blok G no. 19-20) ini.. Restoran ini sudah tergolong cukup lama untuk openingnya.</p>
            <p>&nbsp;</p>
            <p>pemilik restoran ini adalah dulunya chef di Sydney, Australia dan membuka Restoran ini di kota tercintanya.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '59',
                'id_lama' => '59',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Nasi Akwang',
                'address' => 'Jl. Pahlawan No.238/9, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78115',
                'latitude' => '-0.040333',
                'longitude' => '109.34718799999996',
                'phone' => '(0561) 739267',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 00:18:23',
                'updated_at' => '2021-01-11 17:17:36',
                'deleted_at' => NULL,
                'description' => '<p>Apa yang terlintas dikepala anda begitu mendengar kata &ldquo;Nasi Campur&rdquo;? Pastinya Daging Babi cincang yang mendominasi isi piring, paduan nasi hainam dan hiasan acar timun&hellip;kaannnn?! &nbsp;Seolah terlihat jelas di dalam imajinasi kita, tentang bentuk dari tampilan nasi campur yang padat berisi dan tentunya&hellip;.Mengenyangkan!&nbsp;Dan Ini dia&nbsp; Nasi Akwang, restoran milik bapak Lai Sin Kong</p>
                    <p>Begitu memasuki restoran ini, terlihat nuansa oriental yang sangat kental.&nbsp;Di bagian kanan depan restoran ini ada etalase yg memajang babi panggang, babi merah, sosis babi, ayam bakar dengan aroma yang menggoda.&nbsp;Rumah Makan &ldquo;Nasi Akwang&rdquo; ini hanya menjual 2 menu makanan. Yang pertama adalah Nasi Ayam (Koi Peng) atau yang biasa kita kenal dengan nama nasi campur. Terdiri dari babi bakar (babi panggang), babi merah, sosis babi, ayam bakar, telur, dan sayur asin.</p>
                    <p style="font-weight: 400;">Menu yang kedua adalah nasi tim, perbedaan nasi ayam dengan nasi tim ada di proses pengolahan ayam, pada nasi tim ini menggunakan ayam rebus yang ditim bersama nasi sehingga nasi memiliki rasa. Campuran lainnya sama persis dengan nasi ayam.&nbsp;Bagi yang suka rasa pedas, nasi akwang menyediakan 2 macam sambal, sambal biasa dan sambal terasi.&nbsp;Kelebihan nasi campur&nbsp;Pontianak&nbsp;terletak pada kuah kental yang disiram langsung di nasinya, kuah kental di nasi akwang ini memiliki aroma khas yang membuat kita selalu ingin kembali ke rumah makan yang satu ini. Nasi Akwang cocok disantap untuk makan siang, karena jika sudah sore, biasanya menunya sudah tidak lengkap lagi. Harga untuk nasi ayam Rp.30.000,- dan harga untuk seporsi nasi tim Rp.32.000,-.</p>
                    <p style="font-weight: 400;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    <p style="font-weight: 400;">&nbsp;Berminat mencoba kelezatan dari Nasi Akwang?</p>
                    <p style="font-weight: 400;">&nbsp;</p>',
                'halal' => 'tidak',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '60',
                'id_lama' => '60',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'The Ebony Restaurant and Bar',
                'address' => 'Jl. Jenderal Ahmad Yani No.91, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '(0561) 577888',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-09 00:23:45',
                'updated_at' => '2019-07-09 18:25:18',
                'deleted_at' => NULL,
                'description' => '<p>The Ebony Restaurant and Bar adalah restoran yang terdapat di Mercure Hotel Pontianak ini menyajikan pemandangan kolam renang yang sangat modern, design kontemporer yang merekat di dalam restoran ini membuat anda akan terasa menyenangkan dan menu yang memiliki jenis mulai dari&nbsp;Asian, Western, dan makanan ciri khas dari Indonesia.</p>
                    <div>&nbsp;</div>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '61',
                'id_lama' => '61',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Pondok Ale Ale Podomoro',
                'address' => 'Jl. Putri Candramidi, Gg. Podomoro Dalam No.Kel, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78116',
                'latitude' => '-0.038365',
                'longitude' => '109.32712700000002',
                'phone' => '(0561) 740789',
                'email' => NULL,
                'district' => 'Pontianak Barat',
                'created_at' => '2019-07-09 00:31:19',
                'updated_at' => '2019-07-09 18:39:37',
                'deleted_at' => NULL,
                'description' => '<p>Tempat ini&nbsp;merupakan salah satu pilihan cocok untuk menemukan banyak pilihan menu tradisional. Sempat beberapa kali ke Pondok Ale Ale membuat saya berani merekomendasikannya ke teman-teman tukang makan yang berpengalaman, tentu masalah rasa jadi prioritas.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '62',
                'id_lama' => '62',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Honjee Restaurant',
                'address' => 'Jl. WR Supratman No.34, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.035398',
                'longitude' => '109.33911599999999',
                'phone' => '(0561) 575555',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 00:39:00',
                'updated_at' => '2024-09-02 09:49:58',
                'deleted_at' => '2024-09-02 09:49:58',
                'description' => '<p><strong>Honjee Restaurant&nbsp;</strong>merupakan restoran di kota Pontianak yang menyajikan menu-menu khas Indonesia&nbsp;dan Eropa.&nbsp;<strong>Honjee Restaur</strong><strong>ant</strong>&nbsp;terletak di Jalan W.R. Supratman Komplek Business Point Nomor A1 (dari Jalan Ahmad Yani sebelah kiri). Restoran ini menyajikan menu-menu seperti olahan&nbsp;<em>steak</em>,&nbsp;<em>spa</em><em>ghett</em><em>i</em>,&nbsp;soto ayam, lontong sayur, sate, siomay, nasi tumpeng,&nbsp;berbagai&nbsp;jenis cemilan seperti kue apedan&nbsp;kue tradisional</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '63',
                'id_lama' => '63',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'New Hawaii Pontianak',
                'address' => 'Jl. Letjend Suprapto No.Kel, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.039055',
                'longitude' => '109.34149100000002',
                'phone' => '(0561) 737874',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 00:52:08',
                'updated_at' => '2021-01-11 17:17:15',
                'deleted_at' => NULL,
                'description' => '<p>Restoran Hawai Merupakan Restaurant Yang menyediakan makanana china di Kota Pontianak,&nbsp; Terletak di jantung kota dan gampang dicari, makanannya enak dan agak sedikit merogoh kantong, bisa menampung banyak orang dan kadang tempatnya dibikin resepsi pernikahan atau ulang tahun</p>',
                'halal' => 'tidak',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '64',
                'id_lama' => '64',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Terasky Transera Restaurant Pontianak',
                'address' => 'Transera Hotel Lt. 9, Jalan Gajah Mada No. 21, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.035569',
                'longitude' => '109.34430399999997',
                'phone' => '(0561) 570555',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 00:59:01',
                'updated_at' => '2019-07-09 19:24:42',
                'deleted_at' => NULL,
                'description' => '<p>Terletak di salah satu&nbsp;<a href="http://www.batiqa.com/">hotel bintang 3</a>&nbsp;di pontianak, di jalan gajah mada yaitu&nbsp;<a href="http://www.jdlines.com/2015/08/kuliner-makan-tupai-di-pontianak.html">Transera Hotel Pontianak</a>. Lokasi yang berada di lantai paling atas dimana menawarkan pemandangan ibukota pontianak yang sangat menarik. Dengan menu yang beragam mulai dari chinese food sampai makanan western yang bisa anda nikmati.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '65',
                'id_lama' => '65',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Pondok Nelayan',
                'address' => 'Jl. Gajah Mada No.46, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.039182',
                'longitude' => '109.34349099999997',
                'phone' => '(0561) 747045',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 01:08:58',
                'updated_at' => '2019-07-09 18:58:31',
                'deleted_at' => NULL,
                'description' => '<p>buat kamu pecinta&nbsp;<a title="seafood" href="https://pontianak.tribunnews.com/tag/seafood">seafood</a>, kamu gak bakal kekurangan tempat yang asik dan sajian&nbsp;<a title="seafood" href="https://pontianak.tribunnews.com/tag/seafood">seafood</a>&nbsp;yang nikmati untuk berbuka puasa jika berada di Kota Khatulistiwa ini.Satu di antaranya Restoran Pondok Nelayan di Jalan Gajah Mada No.46, Benua Melayu Darat, Pontianak Selatan, namanya saja sudah Pondok Nelayan.</p>
            <p>Di sana kamu bakal dibikin bingung mau pilih menu yang mana, saking banyak nya pilihan&nbsp;<a title="seafood" href="https://pontianak.tribunnews.com/tag/seafood">seafood</a>&nbsp;yang tersedia, dan seolah berasa di pondok nelayan beneran, kamu bakal disajikan menu&nbsp;<a title="seafood" href="https://pontianak.tribunnews.com/tag/seafood">seafood</a>&nbsp;yang masih segar.</p>
            <p>Ups, katanya menu sayur pakis mudanya juga rekomendid lho.<br /><br /></p>
            <p><br /><br /><br /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '66',
                'id_lama' => '66',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Abang Kepiting Pontianak',
                'address' => 'Jl. Hijas, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 02:01:52',
                'updated_at' => '2019-07-09 19:27:07',
                'deleted_at' => NULL,
                'description' => '<p>Di Pontianak tidak terlalu dekat dengan laut tapi masih bisa mendapatkan hasil laut segar karena masih bisa dijangkau dalam beberapa jam untuk proses pengirimannya. Bahan masak yang segar, bumbu yang tepat dan cara masak yang tepat pasti menghasilkan makanan yang enak dan lezat. Ada beberapa tempat di Pontianak yang bisa dikunjungi untuk menikmati makanan laut yang segar dan enak. Kali ini saya mengajak menikmati di Abang Kepiting Jalan Hijas Dalam atau masuk saja dari Jalan Gajahmada menuju hotel Transera lalu berbelok ke sebelah kanan. Mudah terlihat karena aroma bakaran lezat akan membawa anda mendekat.</p>
                    <p>&nbsp;</p>
                    <p>Datang dan disambut dengan aroma bakaran sungguh membuat berbinar. Dibagian depan saya disambut dengan kotak-kotak berisi hasil laut segar yang sudah ditaburi es batu. Jika punya pengalaman memilih hasil laut segera cari yang sesuai lalu timbang dan silakan pilih mau dihidangkan dengan bumbu apa. Saya memilih kerang dara untuk direbus, kepiting dimasak asap, udang digoreng dengan telur asin, cumi goreng krispi dan ikan senangin bakar. Tentu saja ditambah dengan capcay seafood, tumis kangkung tauco dan tumis pakis terasi. Jangan lupa ditambah dengan es lemon cui. Sedap dan segar. Tinggal menunggu dengan seksama.</p>
                    <p>&nbsp;</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Umum')->first()->id,
            ),

            array(
                'id' => '67',
                'id_lama' => '67',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Warkop Suprapto',
                'address' => 'Jl. Letjend Suprapto, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.041395',
                'longitude' => '109.33902799999998',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 20:05:35',
                'updated_at' => '2024-09-02 09:50:58',
                'deleted_at' => '2024-09-02 09:50:58',
                'description' => '<p>Warung kopi Suprapto merupakan tempat ngopi bareng yang asyik di Pontianak. Terletak di Jalan Suprapto, kami memastikan selalu tersedia tempat duduk bagi Anda yang ingin mampir untuk sekedar kumpul dengan teman disini.</p>
                    <p>Warkop Suprapto menyediakan berbagai jenis makanan dan minuman, dari nasi goreng, jus, dan tentu saja kopi nikmat bagi Anda pecinta minuman kopi.</p>
                    <p>Kami juga menyediakan internet WiFi dengan kecepatan terkencang di dunia. Tidak hanya itu, koneksi yang stabil mendukung permainan atau game mobile agar tidak lag atau terputus. Datang dan buktikan sendiri kecepatan download di warkop Suprapto.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Warung Kopi')->first()->id,
            ),

            array(
                'id' => '68',
                'id_lama' => '68',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Warkop Upgrade',
                'address' => 'Jl. Letjend Suprapto, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat',
                'latitude' => '-0.041046',
                'longitude' => '109.339519',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 20:13:54',
                'updated_at' => '2019-07-09 20:13:54',
                'deleted_at' => NULL,
                'description' => '<p>Bagi yang suka Nongki,Gaming, tapi butuh hiburan live music, dan tentunya ditemenin cemilan, makanan, dan didukung oleh wifi yang lancar kalian bingung cari tempat seperti ini?<br /><br />Jangan khawatir, di Pontianak sudah menyediakan paket lengkap mau hangout, ngajakin pacar, game sama teman, kalian bisa datang ke Warkop Upgrade yang baru buka beberapa hari lalu.<br /><br />Warkop Upgrade menyediakan tempat yang luas, dan ruang terbuka dengan dua lantai, dan ada juga ruangsn ber AC dilengkapi sofa.<br />Jajanannya lengkap banget, mulai dari makanan, cemilan, sampai minuman yang murah meriah.<br />Warkop Upgrade juga menyediakan alat lengkap live music untuk menghibur pengunjung.&nbsp;<br />Alamat&nbsp;<a title="Warkop&nbsp;Upgrade" href="https://pontianak.tribunnews.com/tag/warkop-upgrade">Warkop&nbsp;Upgrade</a>&nbsp;di Jalan Letjend Suprapto, Benua Melayu Darat, Pontianak Selatan, Kota Pontianak, Kalimantan Barat.</p>
                    <p><br /><br /><br /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Warung Kopi')->first()->id,
            ),

            array(
                'id' => '69',
                'id_lama' => '69',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Warkop Asiang',
                'address' => 'Jl. Merapi, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.028968',
                'longitude' => '109.34089100000006',
                'phone' => '0813-1718-1918',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 20:46:40',
                'updated_at' => '2019-07-09 20:46:40',
                'deleted_at' => NULL,
                'description' => '<p>Asiang adalah nama pemilik kedai kopi di jalan Merapi Pontianak. Usianya kini lebih dari 60 tahun dan dikaruniai dua putra dari satu istri. Ia adalah turunan ke dua pengelola warung kopi yang (salah satu) paling terkenal di Pontianak, Kalimantan Barat (Kalbar). Ia adalah turunan ke dua setelah ayahnya menyerahkan tongkat estafet pengelolaan kedai tersebut sejak tiga dekade terakhir.</p>
                    <p>Warung dan kopi Asiang memang tampil beda. Beberapa hal yang membedakan kopi Asiang yang memiliki nama alias "Yohanes Fendi" ini &nbsp;antara lain adalah :</p>
                    <ol>
                    <li>Warung kopi ini hanya buka dari jam 03.00 pagi sampai pukul 13.00 siang saja. Setelah itu, jangan harap &nbsp;Asiang akan melayani tamunya meskipun mengemis dengan berbagai alasan.</li>
                    <li>Selama menjalankan tugasnya sebagai penjual kopi Asiang tidak menggunakan baju sama sekali meskipun ia menggunakan celana pendek (boxer).</li>
                    <li>Asiang meracik sendiri kopinya sampai menjadi bubuk kopi melalui resep sendiri yang tidak disebutkan apa rahasia resepnya.</li>
                    <li>Asiang menggunakan gelas atau cawan yang terbuat dari tanah liat dan dipesan khusus ke salah satu pabrik gelas di Johor, Malaysia. Gelas unik bermotif aksara dan bercorak gaya China itu bentuknya menarik, selain kuat dan tebal juga memiliki tekstur seni dari China.</li>
                    <li>Warung kopi ini tidak menyediakan jaringan internet (wifi) untuk pengunjungnya sehingga kita tidak akan menemukan pengunjung yang membuka laptop atau apapun yang berkaitan dengan kebutuhan terhadap internet.</li>
                    </ol>
                    <p>Warung kopi ini telah buka dari tahun 1958. Selama 54 tahun berkecimpung dalam bisnis ini Asiang mampu menahan gempuran pesaing di berbagai kedai atau warung yang banyak tersebar di sekitar lokasi warung Asiang. Resepnya adalah :</p>
                    <ul>
                    <li>Citarasa kopi yang memang mampu membedakannya dengan di warung lainnya.</li>
                    <li>Layanan ramah dan bersahabat istri dan Asiang sendiri terhadap tamu-tamunya, Mereka tetap memberi senyuman dan memberi jawaban apapun yang ingin mengetahui sejarah dan latar belakang warug kopi ini, kecuali satu hal : Resep atau Bumbu apa yang mereka gunakan.</li>
                    <li>Ciri khas Asiang yang tak lazim dan mungkin tak masuk dalam etika bisnis manapun di atas muka bumi tentang layanan terhadap pelanggan dengan tidak memakai baju sehingga&nbsp;<em>-maaf-</em>&nbsp;terlihat ketiak Asiang pun terlihat saat mengangkat tinggi-tinggi satu ceret ke tempat saringannya berulang-ulang. Tak pernah ada yang menilai hal itu sesuatu yang tabu dan menilai kurang sedap &nbsp;tentang hal ini.</li>
                    </ul>
                    <p>Akibatnya tak heran, berbagai media cetak dan elektronik telah mewawancarai Asiang baik dalam dan luar negeri. Media besar nasional seperti Kompas dan Suara Pembaharuan dan Jawa Pos telah berulang kali menayangkan berita tentang keunikan dan kehebatan sang maestro kopi dari Pontianak ini.</p>
                    <p>Tak heran juga, di warung kesayangannya ini kita dapat menemukan sekelompok orang berbisnis di kedai ini saja tanpa meninggalkan mejanya untuk beberapa jam. Banyak pengusaha bertransaksi di sini. Ada pengusaha pompa air yang berkantor di Jakarta tapi sering nongkrong di sini dan hanya menerima laporan lewat telepon terus menerus dari wakilnya diperusahaannya, seperti, Setiawan Sanjaya.</p>
                    <p>&nbsp;</p>
                    <p>Lain lagi pengalaman Hanafi pedagang permata dia melakukan pembcaraan sambil ngopi dengan pengunjung (tamu) lainnya, tak ayal Hanafi mampu menjual batu permata seharga Rp.170 juta rupiah dalam sehari. Hanafi terus menggeluti pola dagang seperti ini hampir setahun terakhir ia mangkal di warung Asiang dari pagi sampai petang. Masih banyak pedagang lainnya &nbsp;seperti Hanafi yang beromzet puluhan bahkan ratusan juta bernegosiasi di warkop ajaib yang satu ini meskipun tidak tentu sukses setiap hari.</p>
                    <p>Tidak saja kedua tokoh disebutkan di atas, di warung ini juga tempat mangkal para pekerja kantoran dan perusahaan serta BUMN menjalin komunikasi dan negosiasi dengan klien dan pelanggan mereka. Bahkan untuk urusan politik pun sering ada pertemuan di warung ini, misalnya pada saat keributan FPI dan warga Dayak beberapa waktu lalu, salah tokoh masyarakat Melayu, Erwin Odang "Datuk Melayu" mengimbau kepada warga Melayu agar tidak terpancing isue dan &nbsp;masuk dalam konflik karena persoalannya tidak seperti yang didesas-desuskan dari mulut ke mulut. Erwin dinilai berhasil menenangkan emosi warga terutama warga Melayu.</p>
                    <p>Ia tak sungkan melayani tamunya yang datang berjubel, mulai dari Gubernur Kalbar, Kapolda, Pangdam, Pejabat teras negara, pengusaha papan atas dan para artis serta tokoh-tokoh parpol yang tidak dapat disebutkan satu persatu dalam tulisan ini.<em>&nbsp;</em></p>
                    <blockquote>
                    <p>&nbsp;</p>
                    <p><em>"Jika ingin bertemu dengan petinggi pejabat daerah yang berkunjung ke warkop ini datanglah pada hari Jumat, Sabtu dan Minggu, biasanya mereka datang pada akhir pekan,"</em>&nbsp;kata Asiang kepada penulis yang sempat mengajaknya ngobrol ringan disela-sela kesibukannya, Senin (14/5).</p>
                    </blockquote>
                    <p>&nbsp;</p>
                    <p>Ketenaran Asiang memang luar biasa, tak ayal media cetak dari Malaysia, Singapore bahkan Jepang meliput kehebatan warkop ajaib yang satu ini. Salah satu majalah di Jepang, kalau tak salah menulis nama majalah itu adalah&nbsp;<strong><em>"Nan Kyoku Sei"</em></strong>&nbsp;edisi Januari 2011 lalu memasukkan warkop ini dalam liputan mereka. Asiang sendiri memberikan majalah tersebut kepada penulis.</p>
                    <p>&nbsp;</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Warung Kopi')->first()->id,
            ),

            array(
                'id' => '70',
                'id_lama' => '70',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Warung Kopi Aming',
                'address' => 'Jl. Haji Abbas 1 No.111, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.031144',
                'longitude' => '109.34258799999998',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 20:58:03',
                'updated_at' => '2019-07-09 20:58:03',
                'deleted_at' => NULL,
                'description' => '<p class="track_paragraph components__TextParagraph-zjjpg2-0 fOXrDP" data-key="156512">Warung kopi yang terletak di Jalan H. Abbas ini sudah berdiri sejak 1970, hingga kini kurang lebih sudah berumur 49 tahun.</p>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <p class="track_paragraph components__TextParagraph-zjjpg2-0 fOXrDP" data-key="156516">Kini Warung kopi Aming juga sudah membuka gerai di sejumlah pusat perbelanjaan. Di pagi hari, semua golongan masyarakat baik tua maupun muda, tumpah ruah di warung kopi ini.</p>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <p class="track_paragraph components__TextParagraph-zjjpg2-0 fOXrDP" data-key="156520">Menu idola di sini adalah kopi saring dan kopi susunya. Oh ya, telur setengah matang juga andalan mereka, <em data-key="156558">lho</em>!</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Warung Kopi')->first()->id,
            ),

            array(
                'id' => '71',
                'id_lama' => '71',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Siomay Bandung',
                'address' => 'Jl. Zainuddin No.36, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.023715',
                'longitude' => '109.33698700000002',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Pontianak Kota',
                'created_at' => '2019-07-09 21:40:36',
                'updated_at' => '2019-07-09 21:40:36',
                'deleted_at' => NULL,
                'description' => '<p>Salah satu spot kuliner anak muda Pontianak yang lumayan terkenal adalah&nbsp;<strong><a href="http://www.simplyasep.com/2017/10/siomay-bandung-yang-enak-di-pontianak.html">Siomay Bandung</a>&nbsp;</strong>yang berlokasi di samping Matahari Mall atau sekitar RRI Pontianak Jalan Zainuddin Pontianak.&nbsp;&nbsp;<br /><br />Siomay Bandung yang menjadi<em>&nbsp;highlight</em>&nbsp;kedai yang digawangi oleh Mas Eko ini memang membuat lidah selalu bergoyang. Bagaimana tidak tekstur Siomay Bandung yang menjadi jualan utamanya itu benar benar menggoda selera. Siapa yang tidak tergoda melihat bongkahan siomay Bandung yang berukuran cukup besar dalam sebuah porsi siomay Bandung.&nbsp; Bagaimana dengan rasanya? Wow gurih aseli ikan Tenggiri.<br /><br /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Rumah Makan')->first()->id,
            ),

            array(
                'id' => '72',
                'id_lama' => '72',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Rumah Makan Melda',
                'address' => 'Jl. Terminal Hijas No.11, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.034634',
                'longitude' => '109.346272',
                'phone' => '(0561) 734492',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 21:48:48',
                'updated_at' => '2019-07-09 21:48:48',
                'deleted_at' => NULL,
                'description' => '<p>Rumah makan melda pontianak selalu saja ramai di kunjungi warga pontianak maupun wisatawan. Harap maklum saja, selain masakannya enak, berciri khas masakan padang yang super lezat, rumah makan ini merupakan salah satu rumah makan yang buka 24 jam di pontianak. Jadi anda tidak perlu khawatir kalau kelaparan tengah malam. Anda bisa datang langsung ke rumah makan melda.</p>
                    <p>Warga Pontianak banyak menghabiskan jam makan siang di rumah makan Padang sembari berbincang dengan rekan kerja. Jam makan siang rumah makan melda selalu padat. Karena karyawannya ramai, jadi tidak perlu mengantri lama untuk menikmati makanan anda.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Rumah Makan')->first()->id,
            ),

            array(
                'id' => '73',
                'id_lama' => '73',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Warunk BossMan',
                'address' => 'Jl. Moh. Sohor No.18, Akcaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.044725',
                'longitude' => '109.33170900000005',
                'phone' => '0822-4010-5786',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 22:38:50',
                'updated_at' => '2019-07-09 22:38:50',
                'deleted_at' => NULL,
                'description' => '<p>Warunk Bossman berlokasi di Jalan Dewi Sartika nomor 171, Benua Melayu Darat. Beragam menu dapat kita pilih disini, diantaranya rice bowl, mi goreng, green chili chicken, fish and chip, dan lain-lain.</p>
                     <p>Menu yang ditawarkan sangat kekinian dan sesuai dengan selera anak muda. Selain itu, Warunk Bossman juga menyediakan banyak dekorasi yang kreatif. Cafe buka pukul 11 siang sampai pukul 11 malam.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '74',
                'id_lama' => '74',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Whatsup Cafe',
                'address' => 'Jl. Zainuddin, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78111',
                'latitude' => '-0.023966',
                'longitude' => '109.33702800000003',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Pontianak Kota',
                'created_at' => '2019-07-09 22:52:49',
                'updated_at' => '2021-01-11 17:16:35',
                'deleted_at' => NULL,
                'description' => '<p>What&rsquo;s Up Cafe berlokasi di Jalan Zainudin, Pontianak Kota. What&rsquo;s Up Cafe menyediakan live music sehingga suasana makan dan kumpul anda lebih nyaman.</p>
                    <p>What&rsquo;s Up Cafe menyediakan menu Indomi kekinian dengan berbagai variasi masakan, camilan, nasi Beef Bulgogi, dan lain-lan.</p>
                    <p>Selain makanan yang bervariasi, cafe ini juga mempunyai spot foto yang instagramable. Cafe ini buka dari pukul 10 pagi sampai dengan pukul 1 malam.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '75',
                'id_lama' => '75',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Kedai Qahwah',
                'address' => 'Jl. Alianyang No.119D, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78116',
                'latitude' => '-0.033549',
                'longitude' => '109.32109300000002',
                'phone' => '0821-5673-3068',
                'email' => NULL,
                'district' => 'Pontianak Kota',
                'created_at' => '2019-07-09 23:02:17',
                'updated_at' => '2021-01-11 17:16:18',
                'deleted_at' => NULL,
                'description' => '<p>Kedai Qahwah berlokasi di Jalan Alianyang nomor 119D, Sungai Bangkong. Cafe kekinian ini buka sejak pagi. Menu khasnya adalah buburnya enak, cocok bagi Anda yang ingin sarapan. Selain itu, ada pula menu Kopi Americano, dark chocolate, camilan, sambal ubi goreng, dan sate.</p>
                    <p>Kedai Qahwah menyediakan ruang rapat di lantai dua yang nyaman. Walaupun kedai ini berukuran kecil namun tetap menyuguhkan suasana yang cozy.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Warung Kopi')->first()->id,
            ),

            array(
                'id' => '76',
                'id_lama' => '76',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Canopy Center',
                'address' => 'Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78115',
                'latitude' => '-0.059731',
                'longitude' => '109.32302300000003',
                'phone' => '(0561) 8172701',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 23:07:45',
                'updated_at' => '2019-07-09 23:07:45',
                'deleted_at' => NULL,
                'description' => '<p>Cafe selanjutnya adalah Canopy Center, cafe yang didominasi dekorasi kayu tradisional ini berlokasi di Jalan Purnama, parit tokaya, Pontianak Selatan.</p>
                    <p>Selain menyuguhkan makanan dan minuman berkelas, cafe ini juga menyuguhkan musik akustik untuk menghibur para pengunjungnya.</p>
                    <p>Perpaduan ini cocok untuk Anda yang menginginkan suasana santai, tenang, dan jauh dari riuhnya kota. Cafe ini tutup pukul 11 malam.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '77',
                'id_lama' => '77',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Waka Waka',
                'address' => 'Jl. DR. Setia Budi, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.032157',
                'longitude' => '109.342805',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 23:22:15',
                'updated_at' => '2024-09-02 09:51:48',
                'deleted_at' => '2024-09-02 09:51:48',
                'description' => '<p>Cafe kekinian berikutnya mempunyai nama yang cukup unik, Cafe Waka-Waka. Lokasi cafe ini di Jalan DR Setia Budi nomor 213, Benua Melayu Darat, Pontianak Selatan.</p>
                    <p>Jam buka mulai pukul 7 sampai dengan pukul 2 malam. Cafe ini dilengkapi dengan banyak grafiti, tempat yang luas, free wifi, dan juga live music dari band lokal.</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '78',
                'id_lama' => '78',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Roemah Eyang',
                'address' => 'Jl. Moh. Sohor No.60, Akcaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '0896-7346-9161',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 23:28:44',
                'updated_at' => '2019-07-09 23:28:44',
                'deleted_at' => NULL,
                'description' => '<p><strong>Masakan&nbsp;</strong>khas Jawa tak kalah enak dengan menu Western. Penyukanya juga banyak. Tak hanya orangtua, para anak muda juga menyukainya. Keberadaan aneka menu makanan nusantara ini juga menjadi cara memperkenalkan keberagaman Indonesia.&nbsp;</p>
                    <p>Terdapat beberapa tempat di Pontianak yang menyediakan masakan khas Jawa. Satu diantaranya Rumah Eyang di Jalan M. Sohor Pontianak No. 60. Ada beberapa menu khas Jawa bisa dijumpai di tempat ini.&nbsp;</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Rumah Makan')->first()->id,
            ),

            array(
                'id' => '79',
                'id_lama' => '79',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Warunk Upnormal',
                'address' => 'Jl. Gajah Mada No.10, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.040944',
                'longitude' => '109.34477900000002',
                'phone' => '(0561) 8107751',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-09 23:35:48',
                'updated_at' => '2019-07-09 23:35:48',
                'deleted_at' => NULL,
                'description' => '<p>Nyaman itu sesederhana menemukan tempat nyantai yang memiliki fasilitas, menu dan harga yang oke. Kebayang, kan, mengerjakan tugas kuliah atau deadline job ditemani dengan nyamannya suasana tempat ngobrol atau wifi-an, ditambah lagi ruangannya yang ber-AC, colokkan disetiap pojokan meja, games, dan reading corner? Semua itu terangkum di Warunk Upnormal Pontianak.&nbsp;</p>
                    <p>Ditambah dengan varian menu yang beda banget dari tempat nongki lainnya, keunikan itu bisa terlihat dari nama-nama menu yang sedikit &ldquo;nyeleneh&rdquo;. Seperti Indomie Upnormal Saus Keju, Indomie Nuklir, Indomie Sadis Mampus, Indomie Anak Kos, Indomie Goreng Mawut Magelangan + Telur, Nasi Tanggal Tua + Telur, Nasi Cici (Chicken Chili) + Telur, dll. Tidak hanya makanan berat, disini juga menawarkan menu ringan lainnya, seperti Dessert, Kopi Gayo Khas Aceh, Cireng Pandawa, Roti Toast, Pisang Bakar, dsb.&nbsp;</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '93',
                'id_lama' => '93',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restoran Pondok Kakap',
                'address' => 'Jl. Ismail Marzuki No.33A, Benua Melayu Darat, Kec.
                    Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.03246246437598338',
                'longitude' => '109.33758705881974',
                'phone' => '0561733606',
                'email' => NULL,
                'district' => 'Benua Melayu Darat',
                'created_at' => '2022-11-18 03:11:36',
                'updated_at' => '2024-03-18 01:34:16',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '94',
                'id_lama' => '94',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Terasky Restaurant',
                'address' => 'Transera Hotel Lt. 9, Jalan Gajah Mada No. 21, Benua Melayu
                    Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat
                    78243',
                'latitude' => '-0.03630104971485804',
                'longitude' => '109.34249858531679',
                'phone' => '0561570555',
                'email' => NULL,
                'district' => 'Benua Melayu Darat',
                'created_at' => '2022-11-18 03:18:26',
                'updated_at' => '2022-11-18 03:18:26',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '95',
                'id_lama' => '95',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restoran Sari Bento',
                'address' => 'X82R+5WH, Komplek Museum Pontianak, Jl. Jend. Ahmad
                    Yani, Parit Tokaya, Pontianak Selatan, Parit Tokaya, Kec.
                    Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.04919199084831818',
                'longitude' => '109.34231801119557',
                'phone' => '0561760796',
                'email' => NULL,
                'district' => 'Parittokaya',
                'created_at' => '2022-11-18 03:23:20',
                'updated_at' => '2022-11-18 03:26:48',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '96',
                'id_lama' => '96',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restoran Kartika',
                'address' => 'X8HQ+JG4, Tengah, Kec. Pontianak Kota, Kota Pontianak,
                    Kalimantan Barat 78243',
                'latitude' => '-0.01938891598499934',
                'longitude' => '109.33854577870504',
                'phone' => '-',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2022-11-18 03:31:19',
                'updated_at' => '2022-11-18 03:31:19',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '97',
                'id_lama' => '97',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'American Fried Chicken',
                'address' => 'Jl. H. Agus Salim No.114, Benua Melayu Darat, Kec. Pontianak
                    Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.028887796295971654',
                'longitude' => '109.34022562468866',
                'phone' => '081345782695',
                'email' => NULL,
                'district' => 'Benua Melayu Darat',
                'created_at' => '2022-11-18 03:33:38',
                'updated_at' => '2022-11-18 03:33:38',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '98',
                'id_lama' => '98',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Richeese Factory Pontianak',
                'address' => 'Jl. Jendral Urip No.8, Tengah, Kec. Pontianak Kota, Kota
                    Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.019572',
                'longitude' => '109.3356655535242',
                'phone' => '-',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2022-11-18 03:35:37',
                'updated_at' => '2022-11-18 03:35:37',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '99',
                'id_lama' => '99',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Richeese Factory Pontianak',
                'address' => 'Jl. Jendral Urip No.8, Tengah, Kec. Pontianak Kota, Kota
                    Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.024837338624283434',
                'longitude' => '109.3356655535242',
                'phone' => '-',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2022-11-18 03:37:33',
                'updated_at' => '2024-03-18 01:10:11',
                'deleted_at' => '2024-03-18 01:10:11',
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '100',
                'id_lama' => '100',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Cazasuki',
                'address' => 'Jl. Nusa Indah III No.109-111, Darat Sekip, Kec. Pontianak
                    Kota, Kota Pontianak, Kalimantan Barat 78117',
                'latitude' => '-0.02615809445145378',
                'longitude' => '109.3387177977025',
                'phone' => '0561733420',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2022-11-18 03:39:18',
                'updated_at' => '2024-03-15 06:04:20',
                'deleted_at' => '2024-03-15 06:04:20',
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '101',
                'id_lama' => '101',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Cazasuki',
                'address' => 'Jl. Nusa Indah III No.109-111, Darat Sekip, Kec. Pontianak
                    Kota, Kota Pontianak, Kalimantan Barat 78117',
                'latitude' => '-0.019572',
                'longitude' => '109.3387177977025',
                'phone' => '0561733420',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2022-11-18 03:41:34',
                'updated_at' => '2022-11-18 03:41:34',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '102',
                'id_lama' => '102',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Pondok Cafe & Resto',
                'address' => 'Jl. Gajah Mada No.46, Benua Melayu Darat, Kec. Pontianak
                    Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.03919275213788508',
                'longitude' => '109.34331626701747',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Benua Melayu Darat',
                'created_at' => '2022-11-18 03:42:46',
                'updated_at' => '2022-11-18 03:42:46',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '103',
                'id_lama' => '103',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restoran Aneka Rasa',
                'address' => 'Jl. Merdeka Barat No.114, Tengah, Kec. Pontianak Kota, Kota
                    Pontianak, Kalimantan Barat 78112',
                'latitude' => '-',
                'longitude' => '109.3291536059952',
                'phone' => '0561731965',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2022-11-18 03:45:06',
                'updated_at' => '2022-11-18 03:45:06',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '104',
                'id_lama' => '104',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => '.Restaurant Gadjah Mada',
                'address' => 'Jl. Gajah Mada No.202, Benua Melayu Darat, Kec. Pontianak
                    Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.037299067496476365',
                'longitude' => '109.34313254899021',
                'phone' => '0895350002076',
                'email' => NULL,
                'district' => 'Benua Melayu Darat',
                'created_at' => '2022-11-18 04:03:27',
                'updated_at' => '2022-11-18 04:03:27',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '105',
                'id_lama' => '105',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Grill Me',
                'address' => 'Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak,
                    Kalimantan Barat 78243',
                'latitude' => '-0.03535905396836942',
                'longitude' => '109.34268825722329',
                'phone' => '081806052292',
                'email' => NULL,
                'district' => 'Benua Melayu Darat',
                'created_at' => '2022-11-18 04:05:23',
                'updated_at' => '2022-11-18 04:05:23',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '106',
                'id_lama' => '106',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restoran Cabe Merah',
                'address' => 'W9F9+6JW, Jl. Major Alianyang, Sungai Raya, Kec. Sungai
                    Raya, Kabupaten Kubu Raya, Kalimantan Barat 78391',
                'latitude' => '-0.0765951216354711',
                'longitude' => '109.36905544003127',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Sungai Raya',
                'created_at' => '2022-11-24 00:38:26',
                'updated_at' => '2022-11-24 00:38:26',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '107',
                'id_lama' => '107',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Restoran Tekko',
                'address' => 'W9F9+6M, Sungai Raya, Kec. Sungai Raya, Kabupaten Kubu
                    Raya, Kalimantan Barat',
                'latitude' => '0.40803175669886865',
                'longitude' => '109.44536336050324',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Sungai Raya',
                'created_at' => '2022-11-24 00:40:45',
                'updated_at' => '2022-11-24 00:40:45',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '108',
                'id_lama' => '108',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'The Urban Garden Resto',
                'address' => 'Jl. Danau Sentarum No.26A, Sungai Bangkong, Kec. Pontianak
                    Kota, Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.04290016562639411',
                'longitude' => '109.31154345215036',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Sungai Bangkong',
                'created_at' => '2022-11-24 00:48:02',
                'updated_at' => '2022-11-24 00:48:02',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '109',
                'id_lama' => '109',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Nasi Ayam Asan 333',
                'address' => 'Jl. Diponegoro No.247-187, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117',
                'latitude' => '-0.02962403878549027',
                'longitude' => '109.3381446222856',
                'phone' => '(0561) 742899',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-15 07:27:27',
                'updated_at' => '2024-03-15 07:31:17',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710487618.png" alt="" width="679" height="569" /></p>',
                'halal' => 'tidak',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Rumah Makan')->first()->id,
            ),

            array(
                'id' => '110',
                'id_lama' => '110',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => "KING'S",
                'address' => 'Jl. Teuku Umar No.69, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.033553280953713946',
                'longitude' => '109.33257798117158',
                'phone' => '-',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-18 00:37:16',
                'updated_at' => '2024-03-18 00:37:16',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710722159.png" alt="" width="693" height="398" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Cafe')->first()->id,
            ),

            array(
                'id' => '112',
                'id_lama' => '112',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Ayam Dadakan',
                'address' => 'Jl. Teuku Umar, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.03324037325923403',
                'longitude' => '109.33258425256776',
                'phone' => '(0561) 577055',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-18 00:44:00',
                'updated_at' => '2024-03-18 00:44:00',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710722560.png" alt="" width="1262" height="420" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '113',
                'id_lama' => '113',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Bakmie Wong Tie',
                'address' => 'Jl. Teuku Umar, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat',
                'latitude' => '-0.03321820582894727',
                'longitude' => '109.33303763864002',
                'phone' => '081257358125',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-18 00:48:44',
                'updated_at' => '2024-03-18 00:48:44',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710722864.png" alt="" width="716" height="490" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '115',
                'id_lama' => '115',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Toss Cafe',
                'address' => 'Jl. Teuku Umar, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.03301997650360718',
                'longitude' => '109.33301483544206',
                'phone' => '089634801759',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-18 00:53:40',
                'updated_at' => '2024-03-18 00:53:40',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710723175.png" alt="" width="774" height="423" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '116',
                'id_lama' => '116',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Ayam Gepuk Djogja',
                'address' => "Gg. Sa'aman No.12, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243",
                'latitude' => '-0.033031094391024446',
                'longitude' => '109.33313421716132',
                'phone' => '082111899998',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-18 00:59:29',
                'updated_at' => '2024-03-18 00:59:29',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710723466.png" alt="" width="421" height="202" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '118',
                'id_lama' => '118',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Mie Ayam Jakarta 991',
                'address' => 'Jl. Teuku Umar No.78, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.032856110521278896',
                'longitude' => '109.33332339069315',
                'phone' => '081345213681',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-18 01:09:22',
                'updated_at' => '2024-03-18 01:09:22',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710724106.png" alt="" width="902" height="416" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '122',
                'id_lama' => '122',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Raja Uduk',
                'address' => 'Jl. Teuku Umar No.76, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117',
                'latitude' => '-0.032748151628172566',
                'longitude' => '109.33349639317463',
                'phone' => '08115692299',
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-03-18 01:32:50',
                'updated_at' => '2024-03-18 01:32:50',
                'deleted_at' => NULL,
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710725557.png" alt="" width="529" height="328" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            ),

            array(
                'id' => '123',
                'id_lama' => '123',
                'user_id' => $superAdminId,
                'master_id' => $kulinerId,
                'name' => 'Sugeban',
                'address' => 'Jl. Alianyang No.36, Sungai Bangkong, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78116',
                'latitude' => '-0.033252812896922876',
                'longitude' => '109.32198550260652',
                'phone' => '(0561) 767128',
                'email' => NULL,
                'district' => 'Sungai Bangkong',
                'created_at' => '2024-03-18 01:44:51',
                'updated_at' => '2024-06-25 08:52:31',
                'deleted_at' => '2024-06-25 08:52:31',
                'description' => '<p><img src="https://jepin.pontianak.go.id/uploads/berita/1710726226.png" alt="" width="683" height="476" /></p>',
                'halal' => 'ya',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 3)->where('category', 'Restoran')->first()->id,
            )

        );

        $info_hotel_restoran_detail = array(
            array(
                'id' => '2',
                'user_id' => $superAdminId,
                'pariwisata_id' => '2',
                'file' => 'transera_5d037bd6a5b49.jpg',
                'created_at' => '2019-06-14 03:49:58',
                'updated_at' => '2019-06-14 03:49:58',
                'deleted_at' => NULL
            ),
            array(
                'id' => '3',
                'user_id' => $superAdminId,
                'pariwisata_id' => '3',
                'file' => 'd22996a88f10ad7b316150a5cacbf734_5d037c09a6ba2.jpg',
                'created_at' => '2019-06-14 03:50:49',
                'updated_at' => '2019-06-14 03:50:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '4',
                'user_id' => $superAdminId,
                'pariwisata_id' => '4',
                'file' => '30000001000164192_5d037c725faff.JPG',
                'created_at' => '2019-06-14 03:52:34',
                'updated_at' => '2019-06-14 03:52:34',
                'deleted_at' => NULL
            ),
            array(
                'id' => '5',
                'user_id' => $superAdminId,
                'pariwisata_id' => '5',
                'file' => '149151470_5d03830d2726b.jpg',
                'created_at' => '2019-06-14 04:20:45',
                'updated_at' => '2019-06-14 04:20:45',
                'deleted_at' => NULL
            ),
            array(
                'id' => '6',
                'user_id' => $superAdminId,
                'pariwisata_id' => '6',
                'file' => '26608309_5d038339665a9.jpg',
                'created_at' => '2019-06-14 04:21:29',
                'updated_at' => '2019-06-14 04:21:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '7',
                'user_id' => $superAdminId,
                'pariwisata_id' => '7',
                'file' => '30000002100323580_5d03837710e4f.JPG',
                'created_at' => '2019-06-14 04:22:31',
                'updated_at' => '2019-06-14 04:22:31',
                'deleted_at' => NULL
            ),
            array(
                'id' => '8',
                'user_id' => $superAdminId,
                'pariwisata_id' => '8',
                'file' => 'abang kepiting_5d03842d68a79.jpg',
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-06-14 04:25:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '9',
                'user_id' => $superAdminId,
                'pariwisata_id' => '8',
                'file' => 'ayam-cabai-hijau_20151129_132735_5d03842d69160.jpg',
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-06-14 04:25:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '10',
                'user_id' => $superAdminId,
                'pariwisata_id' => '8',
                'file' => 'ayam-kaleo-pontianak_5d03842d69503.jpg',
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-06-14 04:25:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '11',
                'user_id' => $superAdminId,
                'pariwisata_id' => '8',
                'file' => 'download (1)_5d03842d698f3.jpg',
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-06-14 04:25:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '12',
                'user_id' => $superAdminId,
                'pariwisata_id' => '8',
                'file' => 'download_5d03842d69c5c.jpg',
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-06-14 04:25:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '13',
                'user_id' => $superAdminId,
                'pariwisata_id' => '8',
                'file' => 'getlstd-property-photo_5d03842d69f8d.jpg',
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-06-14 04:25:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '14',
                'user_id' => $superAdminId,
                'pariwisata_id' => '8',
                'file' => 'Hawaii-Restaurant-Seafood-Chinese-Food_5d03842d6a2d3.jpg',
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-06-14 04:25:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '15',
                'user_id' => $superAdminId,
                'pariwisata_id' => '9',
                'file' => '30000001000169104_wh_1_5d03851481e3f.jpeg',
                'created_at' => '2019-06-14 04:29:24',
                'updated_at' => '2019-06-14 04:29:24',
                'deleted_at' => NULL
            ),
            array(
                'id' => '16',
                'user_id' => $superAdminId,
                'pariwisata_id' => '10',
                'file' => '2001e7f0_z_5d03858b13654.jpg',
                'created_at' => '2019-06-14 04:31:23',
                'updated_at' => '2019-06-14 04:31:23',
                'deleted_at' => NULL
            ),
            array(
                'id' => '17',
                'user_id' => $superAdminId,
                'pariwisata_id' => '11',
                'file' => '18267002_5d0385bb94d60.jpg',
                'created_at' => '2019-06-14 04:32:11',
                'updated_at' => '2019-06-14 04:32:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '18',
                'user_id' => $superAdminId,
                'pariwisata_id' => '12',
                'file' => 'img-20160905-201918-largejpg_5d038608c4967.jpg',
                'created_at' => '2019-06-14 04:33:28',
                'updated_at' => '2019-06-14 04:33:28',
                'deleted_at' => NULL
            ),
            array(
                'id' => '19',
                'user_id' => $superAdminId,
                'pariwisata_id' => '13',
                'file' => 'rgm1_5d03863a615c8.jpg',
                'created_at' => '2019-06-14 04:34:18',
                'updated_at' => '2019-06-14 04:34:18',
                'deleted_at' => NULL
            ),
            array(
                'id' => '20',
                'user_id' => $superAdminId,
                'pariwisata_id' => '14',
                'file' => 'ayam-kaleo-pontianak_5d038673c4cb2.jpg',
                'created_at' => '2019-06-14 04:35:15',
                'updated_at' => '2019-06-14 04:35:15',
                'deleted_at' => NULL
            ),
            array(
                'id' => '21',
                'user_id' => $superAdminId,
                'pariwisata_id' => '15',
                'file' => 'a2750a15e64e01be46e1ae4a369a1cca_5d03869897300.jpg',
                'created_at' => '2019-06-14 04:35:52',
                'updated_at' => '2019-06-14 04:35:52',
                'deleted_at' => NULL
            ),
            array(
                'id' => '22',
                'user_id' => $superAdminId,
                'pariwisata_id' => '16',
                'file' => 'sky-garden-restaurant_5d0386c424a5d.jpg',
                'created_at' => '2019-06-14 04:36:36',
                'updated_at' => '2019-06-14 04:36:36',
                'deleted_at' => NULL
            ),
            array(
                'id' => '25',
                'user_id' => $superAdminId,
                'pariwisata_id' => '17',
                'file' => 'IMG-20180330-WA0000-215x215_5d108f69a5ed6.jpg',
                'created_at' => '2019-06-24 01:52:57',
                'updated_at' => '2019-06-24 01:52:57',
                'deleted_at' => NULL
            ),
            array(
                'id' => '27',
                'user_id' => $superAdminId,
                'pariwisata_id' => '18',
                'file' => 'ale-ale_5d1090b917406.jpg',
                'created_at' => '2019-06-24 01:58:33',
                'updated_at' => '2019-06-24 01:58:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '46',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => 'sky-garden_5d23fe5072b42.jpg',
                'created_at' => '2019-07-08 19:39:12',
                'updated_at' => '2019-07-08 19:39:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '47',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => 'sky-garden1_5d23fe5073516.jpg',
                'created_at' => '2019-07-08 19:39:12',
                'updated_at' => '2019-07-09 20:39:33',
                'deleted_at' => '2019-07-09 20:39:33'
            ),
            array(
                'id' => '48',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => 'sky-garden2_5d23fe50739e8.jpg',
                'created_at' => '2019-07-08 19:39:12',
                'updated_at' => '2019-07-08 19:39:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '49',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => 'sky-garden3_5d23fe5073e8c.jpg',
                'created_at' => '2019-07-08 19:39:12',
                'updated_at' => '2019-07-08 19:39:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '50',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => 'sari-bento2_5d23ff48449c9.jpg',
                'created_at' => '2019-07-08 19:43:20',
                'updated_at' => '2019-07-08 19:43:20',
                'deleted_at' => NULL
            ),
            array(
                'id' => '51',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => 'sari-bento3_5d23ff484506a.jpg',
                'created_at' => '2019-07-08 19:43:20',
                'updated_at' => '2019-07-09 20:37:51',
                'deleted_at' => '2019-07-09 20:37:51'
            ),
            array(
                'id' => '52',
                'user_id' => $superAdminId,
                'pariwisata_id' => '21',
                'file' => 'ayam-kaleo_5d23ffdf7d682.jpg',
                'created_at' => '2019-07-08 19:45:51',
                'updated_at' => '2019-07-08 19:45:51',
                'deleted_at' => NULL
            ),
            array(
                'id' => '53',
                'user_id' => $superAdminId,
                'pariwisata_id' => '21',
                'file' => 'ayam-kaleo1_5d23ffdf7dcd1.jpg',
                'created_at' => '2019-07-08 19:45:51',
                'updated_at' => '2019-07-08 19:45:51',
                'deleted_at' => NULL
            ),
            array(
                'id' => '54',
                'user_id' => $superAdminId,
                'pariwisata_id' => '21',
                'file' => 'ayam-kaleo2_5d23ffdf7e055.jpg',
                'created_at' => '2019-07-08 19:45:51',
                'updated_at' => '2019-07-08 19:45:51',
                'deleted_at' => NULL
            ),
            array(
                'id' => '55',
                'user_id' => $superAdminId,
                'pariwisata_id' => '22',
                'file' => 'restoran-gadjahmada_5d240091c884e.jpg',
                'created_at' => '2019-07-08 19:48:49',
                'updated_at' => '2019-07-09 20:36:43',
                'deleted_at' => '2019-07-09 20:36:43'
            ),
            array(
                'id' => '56',
                'user_id' => $superAdminId,
                'pariwisata_id' => '22',
                'file' => 'restoran-gadjahmada1_5d24009235298.jpg',
                'created_at' => '2019-07-08 19:48:50',
                'updated_at' => '2019-07-08 19:48:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '57',
                'user_id' => $superAdminId,
                'pariwisata_id' => '22',
                'file' => 'restoran-gadjahmada2_5d2400923577f.jpg',
                'created_at' => '2019-07-08 19:48:50',
                'updated_at' => '2019-07-08 19:48:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '58',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dynasty-chinese_5d2401ae07032.jpg',
                'created_at' => '2019-07-08 19:53:34',
                'updated_at' => '2019-07-08 19:53:34',
                'deleted_at' => NULL
            ),
            array(
                'id' => '59',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dynasty-chinese1_5d2401ae0793b.jpg',
                'created_at' => '2019-07-08 19:53:34',
                'updated_at' => '2019-07-09 20:32:36',
                'deleted_at' => '2019-07-09 20:32:36'
            ),
            array(
                'id' => '60',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dynasty-chinese2_5d2401ae080eb.jpg',
                'created_at' => '2019-07-08 19:53:34',
                'updated_at' => '2019-07-09 20:33:57',
                'deleted_at' => '2019-07-09 20:33:57'
            ),
            array(
                'id' => '61',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini1_5d24069701bc1.jpg',
                'created_at' => '2019-07-08 20:14:31',
                'updated_at' => '2019-07-08 20:14:31',
                'deleted_at' => NULL
            ),
            array(
                'id' => '62',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini2_5d240697021e7.jpg',
                'created_at' => '2019-07-08 20:14:31',
                'updated_at' => '2019-07-08 20:14:31',
                'deleted_at' => NULL
            ),
            array(
                'id' => '63',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini3_5d24069702709.jpg',
                'created_at' => '2019-07-08 20:14:31',
                'updated_at' => '2019-07-08 20:14:31',
                'deleted_at' => NULL
            ),
            array(
                'id' => '64',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip_5d24074762066.jpg',
                'created_at' => '2019-07-08 20:17:27',
                'updated_at' => '2019-07-08 20:17:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '65',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip1_5d2407476273d.jpg',
                'created_at' => '2019-07-08 20:17:27',
                'updated_at' => '2019-07-08 20:17:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '66',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip2_5d24074762b8d.jpg',
                'created_at' => '2019-07-08 20:17:27',
                'updated_at' => '2019-07-08 20:17:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '67',
                'user_id' => $superAdminId,
                'pariwisata_id' => '26',
                'file' => 'orchardz_5d2407cb76073.jpg',
                'created_at' => '2019-07-08 20:19:39',
                'updated_at' => '2019-07-08 20:19:39',
                'deleted_at' => NULL
            ),
            array(
                'id' => '68',
                'user_id' => $superAdminId,
                'pariwisata_id' => '26',
                'file' => 'orchardz1_5d2407cb767c1.jpg',
                'created_at' => '2019-07-08 20:19:39',
                'updated_at' => '2019-07-08 20:19:39',
                'deleted_at' => NULL
            ),
            array(
                'id' => '69',
                'user_id' => $superAdminId,
                'pariwisata_id' => '26',
                'file' => 'orchardz2_5d2407cb76beb.jpg',
                'created_at' => '2019-07-08 20:19:39',
                'updated_at' => '2019-07-08 20:19:39',
                'deleted_at' => NULL
            ),
            array(
                'id' => '70',
                'user_id' => $superAdminId,
                'pariwisata_id' => '27',
                'file' => 'hotel-merpati_5d2408701d14a.jpg',
                'created_at' => '2019-07-08 20:22:24',
                'updated_at' => '2019-07-08 20:22:24',
                'deleted_at' => NULL
            ),
            array(
                'id' => '71',
                'user_id' => $superAdminId,
                'pariwisata_id' => '27',
                'file' => 'hotel-merpati1_5d2408701d702.jpg',
                'created_at' => '2019-07-08 20:22:24',
                'updated_at' => '2019-07-08 20:22:24',
                'deleted_at' => NULL
            ),
            array(
                'id' => '72',
                'user_id' => $superAdminId,
                'pariwisata_id' => '27',
                'file' => 'hotel-merpati2_5d2408701dbe1.jpg',
                'created_at' => '2019-07-08 20:22:24',
                'updated_at' => '2019-07-08 20:22:24',
                'deleted_at' => NULL
            ),
            array(
                'id' => '73',
                'user_id' => $superAdminId,
                'pariwisata_id' => '27',
                'file' => 'hotel-merpati3_5d2408701df19.JPG',
                'created_at' => '2019-07-08 20:22:24',
                'updated_at' => '2019-07-08 20:22:24',
                'deleted_at' => NULL
            ),
            array(
                'id' => '74',
                'user_id' => $superAdminId,
                'pariwisata_id' => '28',
                'file' => 'richard-home_5d2409829cc83.jpg',
                'created_at' => '2019-07-08 20:26:58',
                'updated_at' => '2019-07-11 16:58:23',
                'deleted_at' => '2019-07-11 16:58:23'
            ),
            array(
                'id' => '75',
                'user_id' => $superAdminId,
                'pariwisata_id' => '28',
                'file' => 'richard-home1_5d2409829d3df.jpg',
                'created_at' => '2019-07-08 20:26:58',
                'updated_at' => '2019-07-11 16:57:59',
                'deleted_at' => '2019-07-11 16:57:59'
            ),
            array(
                'id' => '76',
                'user_id' => $superAdminId,
                'pariwisata_id' => '28',
                'file' => 'richard-home3_5d2409829d8f5.jpg',
                'created_at' => '2019-07-08 20:26:58',
                'updated_at' => '2019-07-08 20:26:58',
                'deleted_at' => NULL
            ),
            array(
                'id' => '77',
                'user_id' => $superAdminId,
                'pariwisata_id' => '28',
                'file' => 'richard-home4_5d2409829dcb6.jpg',
                'created_at' => '2019-07-08 20:26:58',
                'updated_at' => '2019-07-08 20:26:58',
                'deleted_at' => NULL
            ),
            array(
                'id' => '78',
                'user_id' => $superAdminId,
                'pariwisata_id' => '29',
                'file' => 'hotel-gajahmada_5d240a3d5b457.jpg',
                'created_at' => '2019-07-08 20:30:05',
                'updated_at' => '2019-07-08 20:30:05',
                'deleted_at' => NULL
            ),
            array(
                'id' => '79',
                'user_id' => $superAdminId,
                'pariwisata_id' => '29',
                'file' => 'hotel-gajahmada1_5d240a3d5bb98.jpg',
                'created_at' => '2019-07-08 20:30:05',
                'updated_at' => '2019-07-08 20:30:05',
                'deleted_at' => NULL
            ),
            array(
                'id' => '80',
                'user_id' => $superAdminId,
                'pariwisata_id' => '29',
                'file' => 'hotel-gajahmada2_5d240a3d5c2cf.jpg',
                'created_at' => '2019-07-08 20:30:05',
                'updated_at' => '2019-07-08 20:30:05',
                'deleted_at' => NULL
            ),
            array(
                'id' => '81',
                'user_id' => $superAdminId,
                'pariwisata_id' => '29',
                'file' => 'hotel-gajahmada3_5d240a3d5c6f7.jpg',
                'created_at' => '2019-07-08 20:30:05',
                'updated_at' => '2019-07-08 20:30:05',
                'deleted_at' => NULL
            ),
            array(
                'id' => '82',
                'user_id' => $superAdminId,
                'pariwisata_id' => '30',
                'file' => 'grand-mahkota_5d240bc1a3aed.jpg',
                'created_at' => '2019-07-08 20:36:33',
                'updated_at' => '2019-07-08 20:36:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '83',
                'user_id' => $superAdminId,
                'pariwisata_id' => '30',
                'file' => 'grand-mahkota1_5d240bc1a4240.jpg',
                'created_at' => '2019-07-08 20:36:33',
                'updated_at' => '2019-07-08 20:36:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '84',
                'user_id' => $superAdminId,
                'pariwisata_id' => '30',
                'file' => 'grand-mahkota2_5d240bc1a45ed.jpg',
                'created_at' => '2019-07-08 20:36:33',
                'updated_at' => '2019-07-08 20:36:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '85',
                'user_id' => $superAdminId,
                'pariwisata_id' => '31',
                'file' => 'grand-hotel_5d240d1647342.jpg',
                'created_at' => '2019-07-08 20:42:14',
                'updated_at' => '2019-07-08 20:42:14',
                'deleted_at' => NULL
            ),
            array(
                'id' => '86',
                'user_id' => $superAdminId,
                'pariwisata_id' => '31',
                'file' => 'grand-hotel1_5d240d1647ebb.jpg',
                'created_at' => '2019-07-08 20:42:14',
                'updated_at' => '2019-07-08 20:42:14',
                'deleted_at' => NULL
            ),
            array(
                'id' => '87',
                'user_id' => $superAdminId,
                'pariwisata_id' => '31',
                'file' => 'grand-hotel2_5d240d1648584.jpg',
                'created_at' => '2019-07-08 20:42:14',
                'updated_at' => '2019-07-08 20:42:14',
                'deleted_at' => NULL
            ),
            array(
                'id' => '88',
                'user_id' => $superAdminId,
                'pariwisata_id' => '32',
                'file' => 'mercure_5d240dfc1f3d0.jpg',
                'created_at' => '2019-07-08 20:46:04',
                'updated_at' => '2019-07-08 20:46:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '89',
                'user_id' => $superAdminId,
                'pariwisata_id' => '32',
                'file' => 'mercure1_5d240dfc1fc10.jpg',
                'created_at' => '2019-07-08 20:46:04',
                'updated_at' => '2019-07-08 20:46:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '90',
                'user_id' => $superAdminId,
                'pariwisata_id' => '32',
                'file' => 'mercure2_5d240dfc20201.jpg',
                'created_at' => '2019-07-08 20:46:04',
                'updated_at' => '2019-07-08 20:46:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '91',
                'user_id' => $superAdminId,
                'pariwisata_id' => '32',
                'file' => 'mercure3_5d240dfc20614.jpg',
                'created_at' => '2019-07-08 20:46:04',
                'updated_at' => '2019-07-08 20:46:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '92',
                'user_id' => $superAdminId,
                'pariwisata_id' => '32',
                'file' => 'mercure4_5d240dfc20d3f.jpg',
                'created_at' => '2019-07-08 20:46:04',
                'updated_at' => '2019-07-08 20:46:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '93',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'transera_5d240edee442e.jpg',
                'created_at' => '2019-07-08 20:49:50',
                'updated_at' => '2019-07-08 20:49:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '94',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'transera1_5d240edee4b65.jpg',
                'created_at' => '2019-07-08 20:49:50',
                'updated_at' => '2019-07-08 20:49:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '95',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'transera2_5d240edee4fa8.jpg',
                'created_at' => '2019-07-08 20:49:50',
                'updated_at' => '2019-07-08 20:49:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '96',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'transera3_5d240edee53a4.jpg',
                'created_at' => '2019-07-08 20:49:50',
                'updated_at' => '2019-07-08 20:49:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '98',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'tanggoe pizeria2_5d24307498640.jpg',
                'created_at' => '2019-07-08 23:13:08',
                'updated_at' => '2019-07-09 20:26:13',
                'deleted_at' => '2019-07-09 20:26:13'
            ),
            array(
                'id' => '99',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'tanggoe pizeria3_5d24307498cbd.jpg',
                'created_at' => '2019-07-08 23:13:08',
                'updated_at' => '2019-07-09 20:26:58',
                'deleted_at' => '2019-07-09 20:26:58'
            ),
            array(
                'id' => '100',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'tanggoe pizzeria_5d24307499267.jpg',
                'created_at' => '2019-07-08 23:13:08',
                'updated_at' => '2019-07-09 20:27:19',
                'deleted_at' => '2019-07-09 20:27:19'
            ),
            array(
                'id' => '101',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'tanggoe pizzeria2_5d243074996a4.jpg',
                'created_at' => '2019-07-08 23:13:08',
                'updated_at' => '2019-07-09 20:27:29',
                'deleted_at' => '2019-07-09 20:27:29'
            ),
            array(
                'id' => '103',
                'user_id' => $superAdminId,
                'pariwisata_id' => '36',
                'file' => 'green leaf in_5d2430899e310.jpg',
                'created_at' => '2019-07-08 23:13:29',
                'updated_at' => '2019-07-08 23:13:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '104',
                'user_id' => $superAdminId,
                'pariwisata_id' => '36',
                'file' => 'green leaf in_5d24313851ee8.jpg',
                'created_at' => '2019-07-08 23:16:24',
                'updated_at' => '2019-07-08 23:16:24',
                'deleted_at' => NULL
            ),
            array(
                'id' => '105',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => '87618785_jWzsw8KMAe-5asZnyfUmUDg0AzYW2qxn5tu1ZsPC2KQ_5d2431ae2c41c.jpg',
                'created_at' => '2019-07-08 23:18:22',
                'updated_at' => '2019-07-09 20:35:35',
                'deleted_at' => '2019-07-09 20:35:35'
            ),
            array(
                'id' => '106',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dim-sum-aston_20180317_110808_5d2431ae2c965.jpg',
                'created_at' => '2019-07-08 23:18:22',
                'updated_at' => '2019-07-09 20:34:37',
                'deleted_at' => '2019-07-09 20:34:37'
            ),
            array(
                'id' => '107',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dynasty-chinese-restoran-aston-pontianak_20180317_111715_5d2431ae2cca9.jpg',
                'created_at' => '2019-07-08 23:18:22',
                'updated_at' => '2019-07-09 20:35:02',
                'deleted_at' => '2019-07-09 20:35:02'
            ),
            array(
                'id' => '108',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'getlstd-property-photo_5d2431ae2cfdc.jpg',
                'created_at' => '2019-07-08 23:18:22',
                'updated_at' => '2019-07-08 23:18:22',
                'deleted_at' => NULL
            ),
            array(
                'id' => '109',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'img-20160905-201918-largejpg_5d2431ae2d28b.jpg',
                'created_at' => '2019-07-08 23:18:22',
                'updated_at' => '2019-07-08 23:18:22',
                'deleted_at' => NULL
            ),
            array(
                'id' => '110',
                'user_id' => $superAdminId,
                'pariwisata_id' => '37',
                'file' => 'HotelSurya_5d24324bb934c.jpg',
                'created_at' => '2019-07-08 23:20:59',
                'updated_at' => '2019-07-08 23:20:59',
                'deleted_at' => NULL
            ),
            array(
                'id' => '111',
                'user_id' => $superAdminId,
                'pariwisata_id' => '38',
                'file' => 'kapuas dharma_5d2432e436b1e.png',
                'created_at' => '2019-07-08 23:23:32',
                'updated_at' => '2019-07-08 23:23:32',
                'deleted_at' => NULL
            ),
            array(
                'id' => '112',
                'user_id' => $superAdminId,
                'pariwisata_id' => '22',
                'file' => '20180623_115024_5d24330c5ef60.png',
                'created_at' => '2019-07-08 23:24:12',
                'updated_at' => '2019-07-08 23:24:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '113',
                'user_id' => $superAdminId,
                'pariwisata_id' => '22',
                'file' => 'restoran-gajah-mada_5d24330c5f98a.jpg',
                'created_at' => '2019-07-08 23:24:12',
                'updated_at' => '2019-07-09 20:36:29',
                'deleted_at' => '2019-07-09 20:36:29'
            ),
            array(
                'id' => '114',
                'user_id' => $superAdminId,
                'pariwisata_id' => '22',
                'file' => 'studio-bangunan_20170909_220341_5d24330c5fe0a.jpg',
                'created_at' => '2019-07-08 23:24:12',
                'updated_at' => '2019-07-08 23:24:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '115',
                'user_id' => $superAdminId,
                'pariwisata_id' => '39',
                'file' => 'star hotel_5d2433996c6ae.jpg',
                'created_at' => '2019-07-08 23:26:33',
                'updated_at' => '2019-07-08 23:26:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '116',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera_5d2433a9b1af8.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '117',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera1_5d2433a9b2091.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '118',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera2_5d2433a9b23fc.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '119',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera3_5d2433a9b2739.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '120',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera4_5d2433a9b2a35.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '121',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera5_5d2433a9b2d41.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '122',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera6_5d2433a9b3046.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '123',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera7_5d2433a9b333d.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '124',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera8_5d2433a9b3623.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '125',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera9_5d2433a9b39c9.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '126',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera10_5d2433a9b3d02.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '127',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera11_5d2433a9b4261.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '128',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera12_5d2433a9b45c6.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '129',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera13_5d2433a9b49df.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '130',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera14_5d2433a9b4d80.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '131',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera15_5d2433a9b510b.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '132',
                'user_id' => $superAdminId,
                'pariwisata_id' => '33',
                'file' => 'hotel-transera16_5d2433a9b546b.jpg',
                'created_at' => '2019-07-08 23:26:49',
                'updated_at' => '2019-07-08 23:26:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '133',
                'user_id' => $superAdminId,
                'pariwisata_id' => '40',
                'file' => '1269932_16080813300045293078_5d24342a93a15.jpg',
                'created_at' => '2019-07-08 23:28:58',
                'updated_at' => '2019-07-08 23:28:58',
                'deleted_at' => NULL
            ),
            array(
                'id' => '134',
                'user_id' => $superAdminId,
                'pariwisata_id' => '21',
                'file' => '2017-11-07_5d243472ede6b.jpg',
                'created_at' => '2019-07-08 23:30:10',
                'updated_at' => '2019-07-08 23:30:10',
                'deleted_at' => NULL
            ),
            array(
                'id' => '135',
                'user_id' => $superAdminId,
                'pariwisata_id' => '21',
                'file' => '2053180_wn_QHGi9MDqoxJRYuVs9GXP8OA_A-6EUZsvm7iREyBc_5d243472ee496.jpg',
                'created_at' => '2019-07-08 23:30:10',
                'updated_at' => '2019-07-08 23:30:10',
                'deleted_at' => NULL
            ),
            array(
                'id' => '136',
                'user_id' => $superAdminId,
                'pariwisata_id' => '21',
                'file' => 'ayam-kaloe_20180520_080921_5d243472ee8d1.jpg',
                'created_at' => '2019-07-08 23:30:10',
                'updated_at' => '2019-07-09 20:37:26',
                'deleted_at' => '2019-07-09 20:37:26'
            ),
            array(
                'id' => '137',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini4_5d2434944cca8.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '138',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini5_5d2434944d2ad.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '139',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini6_5d2434944d69a.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '140',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini7_5d2434944dbc3.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '141',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini8_5d2434944df32.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '142',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini9_5d2434944e216.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '143',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini10_5d2434944e5a0.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '144',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini11_5d2434944e8d1.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '145',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini12_5d2434944ebec.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '146',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini13_5d2434944eeca.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '147',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini14_5d2434944f1cd.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '148',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini15_5d2434944f550.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '149',
                'user_id' => $superAdminId,
                'pariwisata_id' => '24',
                'file' => 'hotel-kini16_5d2434944f933.jpg',
                'created_at' => '2019-07-08 23:30:44',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '150',
                'user_id' => $superAdminId,
                'pariwisata_id' => '41',
                'file' => 'sentosa guest house_5d2434d194911.jpg',
                'created_at' => '2019-07-08 23:31:45',
                'updated_at' => '2019-07-08 23:31:45',
                'deleted_at' => NULL
            ),
            array(
                'id' => '151',
                'user_id' => $superAdminId,
                'pariwisata_id' => '42',
                'file' => '60629960_325265268148504_5165233994649309784_n_5d243542d1fda.jpg',
                'created_at' => '2019-07-08 23:33:38',
                'updated_at' => '2019-07-08 23:33:38',
                'deleted_at' => NULL
            ),
            array(
                'id' => '152',
                'user_id' => $superAdminId,
                'pariwisata_id' => '43',
                'file' => 'md_62017-01-11_5d2435eae899b.jpg',
                'created_at' => '2019-07-08 23:36:26',
                'updated_at' => '2019-07-08 23:36:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '153',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => '008QAE6A06221A76BD79A2lv_5d2435edc9680.jpg',
                'created_at' => '2019-07-08 23:36:29',
                'updated_at' => '2019-07-09 20:38:50',
                'deleted_at' => '2019-07-09 20:38:50'
            ),
            array(
                'id' => '154',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => '008SEAB5DAC2EE3A8EDD32lv_5d2435edc9dc7.jpg',
                'created_at' => '2019-07-08 23:36:29',
                'updated_at' => '2019-07-08 23:36:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '155',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => 'alamat-dan-menu-di-rm-sari-bento-pontianak_5d2435edca267.jpg',
                'created_at' => '2019-07-08 23:36:29',
                'updated_at' => '2019-07-08 23:36:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '156',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => 'fc4309cbfea6227fe5721456772e21be_5d2435edca733.jpg',
                'created_at' => '2019-07-08 23:36:29',
                'updated_at' => '2019-07-09 20:38:27',
                'deleted_at' => '2019-07-09 20:38:27'
            ),
            array(
                'id' => '160',
                'user_id' => $superAdminId,
                'pariwisata_id' => '45',
                'file' => 'md_77Garuda-Hotel-Pontianak_5d243710a19ed.jpg',
                'created_at' => '2019-07-08 23:41:20',
                'updated_at' => '2019-07-08 23:41:20',
                'deleted_at' => NULL
            ),
            array(
                'id' => '161',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => '12-opening-sky-garden-facebook-ok_5d243716690ee.jpg',
                'created_at' => '2019-07-08 23:41:26',
                'updated_at' => '2019-07-08 23:41:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '162',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => 'download_5d243716695f9.jpg',
                'created_at' => '2019-07-08 23:41:26',
                'updated_at' => '2019-07-08 23:41:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '163',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => 'sky-garden-hotel-star-pontianak_20150809_113041_5d24371669930.jpg',
                'created_at' => '2019-07-08 23:41:26',
                'updated_at' => '2019-07-08 23:41:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '164',
                'user_id' => $superAdminId,
                'pariwisata_id' => '46',
                'file' => '2759362_v1_5d243794a8639.jpg',
                'created_at' => '2019-07-08 23:43:32',
                'updated_at' => '2019-07-08 23:43:32',
                'deleted_at' => NULL
            ),
            array(
                'id' => '165',
                'user_id' => $superAdminId,
                'pariwisata_id' => '47',
                'file' => '328618816_WxH_5d2438026ef6b.jpg',
                'created_at' => '2019-07-08 23:45:22',
                'updated_at' => '2019-07-11 16:04:13',
                'deleted_at' => '2019-07-11 16:04:13'
            ),
            array(
                'id' => '166',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => '008QAE6A06221A76BD79A2lv_5d2438bb4ed06.jpg',
                'created_at' => '2019-07-08 23:48:27',
                'updated_at' => '2019-07-08 23:48:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '167',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => '008SEAB5DAC2EE3A8EDD32lv_5d2438bb4f369.jpg',
                'created_at' => '2019-07-08 23:48:27',
                'updated_at' => '2019-07-09 20:38:17',
                'deleted_at' => '2019-07-09 20:38:17'
            ),
            array(
                'id' => '168',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => 'alamat-dan-menu-di-rm-sari-bento-pontianak_5d2438bb4f9d9.jpg',
                'created_at' => '2019-07-08 23:48:27',
                'updated_at' => '2019-07-09 20:38:33',
                'deleted_at' => '2019-07-09 20:38:33'
            ),
            array(
                'id' => '169',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => 'fc4309cbfea6227fe5721456772e21be_5d2438bb50052.jpg',
                'created_at' => '2019-07-08 23:48:27',
                'updated_at' => '2019-07-08 23:48:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '170',
                'user_id' => $superAdminId,
                'pariwisata_id' => '48',
                'file' => 'beautiful-night-at-gardenia_5d2438f8e088e.jpg',
                'created_at' => '2019-07-08 23:49:28',
                'updated_at' => '2019-07-08 23:49:28',
                'deleted_at' => NULL
            ),
            array(
                'id' => '171',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => '87618785_jWzsw8KMAe-5asZnyfUmUDg0AzYW2qxn5tu1ZsPC2KQ_5d24393957ce8.jpg',
                'created_at' => '2019-07-08 23:50:33',
                'updated_at' => '2019-07-09 20:34:51',
                'deleted_at' => '2019-07-09 20:34:51'
            ),
            array(
                'id' => '172',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dim-sum-aston_20180317_110808_5d2439395829d.jpg',
                'created_at' => '2019-07-08 23:50:33',
                'updated_at' => '2019-07-09 20:33:43',
                'deleted_at' => '2019-07-09 20:33:43'
            ),
            array(
                'id' => '173',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dynasty-chinese-restoran-aston-pontianak_20180317_111715_5d2439395861c.jpg',
                'created_at' => '2019-07-08 23:50:33',
                'updated_at' => '2019-07-09 20:33:35',
                'deleted_at' => '2019-07-09 20:33:35'
            ),
            array(
                'id' => '174',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'getlstd-property-photo_5d243939589a2.jpg',
                'created_at' => '2019-07-08 23:50:33',
                'updated_at' => '2019-07-09 20:33:17',
                'deleted_at' => '2019-07-09 20:33:17'
            ),
            array(
                'id' => '175',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'img-20160905-201918-largejpg_5d24393958cd5.jpg',
                'created_at' => '2019-07-08 23:50:33',
                'updated_at' => '2019-07-09 20:32:58',
                'deleted_at' => '2019-07-09 20:32:58'
            ),
            array(
                'id' => '176',
                'user_id' => $superAdminId,
                'pariwisata_id' => '49',
                'file' => 'harris hotel_5d24399732b6a.jpg',
                'created_at' => '2019-07-08 23:52:07',
                'updated_at' => '2019-07-08 23:52:07',
                'deleted_at' => NULL
            ),
            array(
                'id' => '177',
                'user_id' => $superAdminId,
                'pariwisata_id' => '50',
                'file' => '30000002100590637_5d243a059a597.jpg',
                'created_at' => '2019-07-08 23:53:57',
                'updated_at' => '2019-07-08 23:53:57',
                'deleted_at' => NULL
            ),
            array(
                'id' => '178',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => '87618785_jWzsw8KMAe-5asZnyfUmUDg0AzYW2qxn5tu1ZsPC2KQ_5d243a4b1c1a8.jpg',
                'created_at' => '2019-07-08 23:55:07',
                'updated_at' => '2019-07-09 20:26:50',
                'deleted_at' => '2019-07-09 20:26:50'
            ),
            array(
                'id' => '179',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'dim-sum-aston_20180317_110808_5d243a4b1c70c.jpg',
                'created_at' => '2019-07-08 23:55:07',
                'updated_at' => '2019-07-09 20:25:47',
                'deleted_at' => '2019-07-09 20:25:47'
            ),
            array(
                'id' => '180',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'dynasty-chinese-restoran-aston-pontianak_20180317_111715_5d243a4b1caa7.jpg',
                'created_at' => '2019-07-08 23:55:07',
                'updated_at' => '2019-07-09 20:27:09',
                'deleted_at' => '2019-07-09 20:27:09'
            ),
            array(
                'id' => '181',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'getlstd-property-photo_5d243a4b1cdf5.jpg',
                'created_at' => '2019-07-08 23:55:07',
                'updated_at' => '2019-07-09 20:26:26',
                'deleted_at' => '2019-07-09 20:26:26'
            ),
            array(
                'id' => '182',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'img-20160905-201918-largejpg_5d243a4b1d14e.jpg',
                'created_at' => '2019-07-08 23:55:07',
                'updated_at' => '2019-07-09 20:25:37',
                'deleted_at' => '2019-07-09 20:25:37'
            ),
            array(
                'id' => '183',
                'user_id' => $superAdminId,
                'pariwisata_id' => '51',
                'file' => 'hotel aston pontianak_5d243a74861dc.jpg',
                'created_at' => '2019-07-08 23:55:48',
                'updated_at' => '2019-07-08 23:55:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '185',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dynasty-chinese-restoran-aston-pontianak_20180317_111715_5d243aac7521b.jpg',
                'created_at' => '2019-07-08 23:56:44',
                'updated_at' => '2019-07-08 23:56:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '187',
                'user_id' => $superAdminId,
                'pariwisata_id' => '22',
                'file' => 'restoran-gajah-mada_5d243b05c9e3e.jpg',
                'created_at' => '2019-07-08 23:58:13',
                'updated_at' => '2019-07-08 23:58:13',
                'deleted_at' => NULL
            ),
            array(
                'id' => '188',
                'user_id' => $superAdminId,
                'pariwisata_id' => '21',
                'file' => 'ayam-kaloe_20180520_080921_5d243b31e59a8.jpg',
                'created_at' => '2019-07-08 23:58:57',
                'updated_at' => '2019-07-09 20:37:03',
                'deleted_at' => '2019-07-09 20:37:03'
            ),
            array(
                'id' => '189',
                'user_id' => $superAdminId,
                'pariwisata_id' => '20',
                'file' => '008SEAB5DAC2EE3A8EDD32lv_5d243b560a952.jpg',
                'created_at' => '2019-07-08 23:59:34',
                'updated_at' => '2019-07-09 20:38:58',
                'deleted_at' => '2019-07-09 20:38:58'
            ),
            array(
                'id' => '190',
                'user_id' => $superAdminId,
                'pariwisata_id' => '53',
                'file' => 'maestro_5d243b59b0fb4.jpg',
                'created_at' => '2019-07-08 23:59:37',
                'updated_at' => '2019-07-08 23:59:37',
                'deleted_at' => NULL
            ),
            array(
                'id' => '191',
                'user_id' => $superAdminId,
                'pariwisata_id' => '19',
                'file' => 'sky-garden-hotel-star-pontianak_20150809_113041_5d243bc872819.jpg',
                'created_at' => '2019-07-09 00:01:28',
                'updated_at' => '2019-07-09 20:39:19',
                'deleted_at' => '2019-07-09 20:39:19'
            ),
            array(
                'id' => '192',
                'user_id' => $superAdminId,
                'pariwisata_id' => '54',
                'file' => 'HI111019318_5d243c52ddb6d.jpg',
                'created_at' => '2019-07-09 00:03:46',
                'updated_at' => '2019-07-09 00:03:46',
                'deleted_at' => NULL
            ),
            array(
                'id' => '193',
                'user_id' => $superAdminId,
                'pariwisata_id' => '55',
                'file' => 'exterior_5d243cb3a642d.jpg',
                'created_at' => '2019-07-09 00:05:23',
                'updated_at' => '2019-07-09 00:05:23',
                'deleted_at' => NULL
            ),
            array(
                'id' => '194',
                'user_id' => $superAdminId,
                'pariwisata_id' => '56',
                'file' => '008SDVC89FF0F73BB03DE4px_5d243ce0881f8.jpg',
                'created_at' => '2019-07-09 00:06:08',
                'updated_at' => '2019-07-09 00:06:08',
                'deleted_at' => NULL
            ),
            array(
                'id' => '195',
                'user_id' => $superAdminId,
                'pariwisata_id' => '57',
                'file' => '30000002100235041_5d243d155a239.jpg',
                'created_at' => '2019-07-09 00:07:01',
                'updated_at' => '2019-07-09 00:07:01',
                'deleted_at' => NULL
            ),
            array(
                'id' => '197',
                'user_id' => $superAdminId,
                'pariwisata_id' => '59',
                'file' => 'nasi akwang_5d243fbf44698.jpg',
                'created_at' => '2019-07-09 00:18:23',
                'updated_at' => '2019-07-09 00:18:23',
                'deleted_at' => NULL
            ),
            array(
                'id' => '198',
                'user_id' => $superAdminId,
                'pariwisata_id' => '60',
                'file' => 'Ebony Restaurant_5d244101b9443.jpg',
                'created_at' => '2019-07-09 00:23:45',
                'updated_at' => '2019-07-09 00:23:45',
                'deleted_at' => NULL
            ),
            array(
                'id' => '199',
                'user_id' => $superAdminId,
                'pariwisata_id' => '61',
                'file' => 'Pondok Ale Ale POdomoro_5d2442c7e7708.jpg',
                'created_at' => '2019-07-09 00:31:19',
                'updated_at' => '2019-07-09 00:31:19',
                'deleted_at' => NULL
            ),
            array(
                'id' => '201',
                'user_id' => $superAdminId,
                'pariwisata_id' => '63',
                'file' => '130920125846_5d2447a8ae2a5.jpg',
                'created_at' => '2019-07-09 00:52:08',
                'updated_at' => '2019-07-09 00:52:08',
                'deleted_at' => NULL
            ),
            array(
                'id' => '202',
                'user_id' => $superAdminId,
                'pariwisata_id' => '64',
                'file' => 'rooftop_5d244946247c1.jpg',
                'created_at' => '2019-07-09 00:59:02',
                'updated_at' => '2019-07-09 00:59:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '203',
                'user_id' => $superAdminId,
                'pariwisata_id' => '65',
                'file' => 'pondok-nelayan-06_5d244b9aea68d.jpg',
                'created_at' => '2019-07-09 01:08:58',
                'updated_at' => '2019-07-09 01:08:58',
                'deleted_at' => NULL
            ),
            array(
                'id' => '204',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => '87618785_jWzsw8KMAe-5asZnyfUmUDg0AzYW2qxn5tu1ZsPC2KQ_5d24545f9b36e.jpg',
                'created_at' => '2019-07-09 01:46:23',
                'updated_at' => '2019-07-09 01:46:23',
                'deleted_at' => NULL
            ),
            array(
                'id' => '205',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dim-sum-aston_20180317_110808_5d24545f9b84d.jpg',
                'created_at' => '2019-07-09 01:46:23',
                'updated_at' => '2019-07-09 01:46:23',
                'deleted_at' => NULL
            ),
            array(
                'id' => '206',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'dynasty-chinese-restoran-aston-pontianak_20180317_111715_5d24545f9bb5b.jpg',
                'created_at' => '2019-07-09 01:46:23',
                'updated_at' => '2019-07-09 20:32:48',
                'deleted_at' => '2019-07-09 20:32:48'
            ),
            array(
                'id' => '207',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'getlstd-property-photo_5d24545f9bea1.jpg',
                'created_at' => '2019-07-09 01:46:23',
                'updated_at' => '2019-07-09 20:32:42',
                'deleted_at' => '2019-07-09 20:32:42'
            ),
            array(
                'id' => '208',
                'user_id' => $superAdminId,
                'pariwisata_id' => '23',
                'file' => 'img-20160905-201918-largejpg_5d24545f9c173.jpg',
                'created_at' => '2019-07-09 01:46:23',
                'updated_at' => '2019-07-09 20:33:07',
                'deleted_at' => '2019-07-09 20:33:07'
            ),
            array(
                'id' => '209',
                'user_id' => $superAdminId,
                'pariwisata_id' => '66',
                'file' => '20170920_184942_5d2458004bd29.jpg',
                'created_at' => '2019-07-09 02:01:52',
                'updated_at' => '2019-07-09 02:01:52',
                'deleted_at' => NULL
            ),
            array(
                'id' => '210',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'tanggoe pizeria2_5d2459a3b22a5.jpg',
                'created_at' => '2019-07-09 02:08:51',
                'updated_at' => '2019-07-09 20:25:23',
                'deleted_at' => '2019-07-09 20:25:23'
            ),
            array(
                'id' => '214',
                'user_id' => $superAdminId,
                'pariwisata_id' => '35',
                'file' => 'tanggooe-pizzeria4_5d2459a3b335a.jpg',
                'created_at' => '2019-07-09 02:08:51',
                'updated_at' => '2019-07-09 20:27:43',
                'deleted_at' => '2019-07-09 20:27:43'
            ),
            array(
                'id' => '215',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip3_5d2539c72ce24.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '216',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip4_5d2539c72d4a4.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '217',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip5_5d2539c72d7f6.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '218',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip6_5d2539c72dab9.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '219',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip7_5d2539c72dd80.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '220',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip8_5d2539c72e0ad.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '221',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip9_5d2539c72e386.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '222',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip10_5d2539c72e65b.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '223',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip11_5d2539c72e930.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '224',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip12_5d2539c72ec0f.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '225',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip13_5d2539c72ef12.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '226',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip14_5d2539c72f1f1.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '227',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip15_5d2539c72f51d.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '228',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip16_5d2539c72fa35.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '229',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip17_5d2539c72fd66.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '230',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip18_5d2539c730074.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '231',
                'user_id' => $superAdminId,
                'pariwisata_id' => '25',
                'file' => 'golden-tulip19_5d2539c730345.jpg',
                'created_at' => '2019-07-09 18:05:11',
                'updated_at' => '2019-07-09 18:05:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '232',
                'user_id' => $superAdminId,
                'pariwisata_id' => '56',
                'file' => '1_5d253a90a9914.jpg',
                'created_at' => '2019-07-09 18:08:32',
                'updated_at' => '2019-07-09 18:08:32',
                'deleted_at' => NULL
            ),
            array(
                'id' => '233',
                'user_id' => $superAdminId,
                'pariwisata_id' => '56',
                'file' => '1st-floor (1)_5d253a90aa503.jpg',
                'created_at' => '2019-07-09 18:08:32',
                'updated_at' => '2019-07-09 18:08:32',
                'deleted_at' => NULL
            ),
            array(
                'id' => '234',
                'user_id' => $superAdminId,
                'pariwisata_id' => '56',
                'file' => '008SDVC89FF0F73BB03DE4px_5d253a90aabe4.jpg',
                'created_at' => '2019-07-09 18:08:32',
                'updated_at' => '2019-07-09 20:31:50',
                'deleted_at' => '2019-07-09 20:31:50'
            ),
            array(
                'id' => '235',
                'user_id' => $superAdminId,
                'pariwisata_id' => '56',
                'file' => 'vfVvKq5ujlSvMKoVRitRsDAquC+mdUQ==_5d253a90aaf62.jpg',
                'created_at' => '2019-07-09 18:08:32',
                'updated_at' => '2019-07-09 18:08:32',
                'deleted_at' => NULL
            ),
            array(
                'id' => '236',
                'user_id' => $superAdminId,
                'pariwisata_id' => '56',
                'file' => 'ZpsnshWkWpNsYYwR6DbN3FOzns2vB8Ed_5d253a90ab23f.jpg',
                'created_at' => '2019-07-09 18:08:32',
                'updated_at' => '2019-07-09 18:08:32',
                'deleted_at' => NULL
            ),
            array(
                'id' => '237',
                'user_id' => $superAdminId,
                'pariwisata_id' => '59',
                'file' => '3BPTDT180963B12870D180lv_5d253c1c0d0d6.jpg',
                'created_at' => '2019-07-09 18:15:08',
                'updated_at' => '2019-07-09 18:15:08',
                'deleted_at' => NULL
            ),
            array(
                'id' => '238',
                'user_id' => $superAdminId,
                'pariwisata_id' => '59',
                'file' => '00270d4f-9530-4335-ad0f-3f26d80ff1cb_5d253c1c0d872.jpg',
                'created_at' => '2019-07-09 18:15:08',
                'updated_at' => '2019-07-09 18:15:08',
                'deleted_at' => NULL
            ),
            array(
                'id' => '239',
                'user_id' => $superAdminId,
                'pariwisata_id' => '59',
                'file' => 'nasi akwang_5d253c1c0e2ab.jpg',
                'created_at' => '2019-07-09 18:15:08',
                'updated_at' => '2019-07-09 20:30:36',
                'deleted_at' => '2019-07-09 20:30:36'
            ),
            array(
                'id' => '240',
                'user_id' => $superAdminId,
                'pariwisata_id' => '60',
                'file' => '12974159_Pe3neqbdzBGswnpZ3U8f-gn28S2KX2PUnr6Cv-h_ngg_5d253e7ef2bc5.jpg',
                'created_at' => '2019-07-09 18:25:18',
                'updated_at' => '2019-07-09 18:25:18',
                'deleted_at' => NULL
            ),
            array(
                'id' => '241',
                'user_id' => $superAdminId,
                'pariwisata_id' => '60',
                'file' => '37646046020_ba3528a71a_5d253e7ef331e.jpg',
                'created_at' => '2019-07-09 18:25:18',
                'updated_at' => '2019-07-09 18:25:18',
                'deleted_at' => NULL
            ),
            array(
                'id' => '242',
                'user_id' => $superAdminId,
                'pariwisata_id' => '60',
                'file' => 'mercure-hotel-menghadirkan-sajian_20160417_105721_5d253e7ef36ec.jpg',
                'created_at' => '2019-07-09 18:25:18',
                'updated_at' => '2019-07-09 18:25:18',
                'deleted_at' => NULL
            ),
            array(
                'id' => '243',
                'user_id' => $superAdminId,
                'pariwisata_id' => '60',
                'file' => 'restaurant3_5d253e7ef3a66.jpg',
                'created_at' => '2019-07-09 18:25:18',
                'updated_at' => '2019-07-09 18:25:18',
                'deleted_at' => NULL
            ),
            array(
                'id' => '244',
                'user_id' => $superAdminId,
                'pariwisata_id' => '61',
                'file' => 'maxresdefault_5d2541d9dfe07.jpg',
                'created_at' => '2019-07-09 18:39:37',
                'updated_at' => '2019-07-09 18:39:37',
                'deleted_at' => NULL
            ),
            array(
                'id' => '245',
                'user_id' => $superAdminId,
                'pariwisata_id' => '61',
                'file' => 'Pondok-Ale-Ale-Pontianak-Ruangan_5d2541d9e04f5.jpg',
                'created_at' => '2019-07-09 18:39:37',
                'updated_at' => '2019-07-09 18:39:37',
                'deleted_at' => NULL
            ),
            array(
                'id' => '246',
                'user_id' => $superAdminId,
                'pariwisata_id' => '61',
                'file' => 'tempura-di-pondok-ale-ale_5d2541d9e0858.jpg',
                'created_at' => '2019-07-09 18:39:37',
                'updated_at' => '2019-07-09 18:39:37',
                'deleted_at' => NULL
            ),
            array(
                'id' => '250',
                'user_id' => $superAdminId,
                'pariwisata_id' => '63',
                'file' => '51129051_GMVMfffIGJOp3FzoP5BaFTgXaRG_dMrvjCzIIwa8kh4_5d25458082bf1.jpg',
                'created_at' => '2019-07-09 18:55:12',
                'updated_at' => '2019-07-09 18:55:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '251',
                'user_id' => $superAdminId,
                'pariwisata_id' => '63',
                'file' => 'address-of-the-restaurant_5d25458083219.jpg',
                'created_at' => '2019-07-09 18:55:12',
                'updated_at' => '2019-07-09 18:55:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '252',
                'user_id' => $superAdminId,
                'pariwisata_id' => '63',
                'file' => 'restoran-hawaii_5d25458083810.jpg',
                'created_at' => '2019-07-09 18:55:12',
                'updated_at' => '2019-07-09 18:55:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '253',
                'user_id' => $superAdminId,
                'pariwisata_id' => '65',
                'file' => 'one-section-of-restaurant_5d254647005e0.jpg',
                'created_at' => '2019-07-09 18:58:31',
                'updated_at' => '2019-07-09 18:58:31',
                'deleted_at' => NULL
            ),
            array(
                'id' => '254',
                'user_id' => $superAdminId,
                'pariwisata_id' => '65',
                'file' => 'sajian-makanan-di-restoran-pondok-nelayan-pontianak_20180522_102001_5d25464700bca.jpg',
                'created_at' => '2019-07-09 18:58:31',
                'updated_at' => '2019-07-09 18:58:31',
                'deleted_at' => NULL
            ),
            array(
                'id' => '255',
                'user_id' => $superAdminId,
                'pariwisata_id' => '64',
                'file' => '406838_16050311590042003826_5d254c6ab29e4.jpg',
                'created_at' => '2019-07-09 19:24:42',
                'updated_at' => '2019-07-09 19:24:42',
                'deleted_at' => NULL
            ),
            array(
                'id' => '256',
                'user_id' => $superAdminId,
                'pariwisata_id' => '64',
                'file' => 'terasky-dining_5d254c6ab35d9.jpg',
                'created_at' => '2019-07-09 19:24:42',
                'updated_at' => '2019-07-09 19:24:42',
                'deleted_at' => NULL
            ),
            array(
                'id' => '257',
                'user_id' => $superAdminId,
                'pariwisata_id' => '66',
                'file' => 'Abang-kepiting-pontianak_5d254cfb807e3.jpg',
                'created_at' => '2019-07-09 19:27:07',
                'updated_at' => '2019-07-09 19:27:07',
                'deleted_at' => NULL
            ),
            array(
                'id' => '258',
                'user_id' => $superAdminId,
                'pariwisata_id' => '66',
                'file' => 'abang-kepiting-restaurant_5d254cfb80ef3.jpg',
                'created_at' => '2019-07-09 19:27:07',
                'updated_at' => '2019-07-09 19:27:07',
                'deleted_at' => NULL
            ),
            array(
                'id' => '259',
                'user_id' => $superAdminId,
                'pariwisata_id' => '66',
                'file' => 'content_e07d821d-f6f7-45e4-95e8-f0fc59bf1560_5d254cfb813a8.jpeg',
                'created_at' => '2019-07-09 19:27:07',
                'updated_at' => '2019-07-09 19:27:07',
                'deleted_at' => NULL
            ),
            array(
                'id' => '263',
                'user_id' => $superAdminId,
                'pariwisata_id' => '68',
                'file' => 'upgrade1_5d2557f2d4828.jpg',
                'created_at' => '2019-07-09 20:13:54',
                'updated_at' => '2019-07-09 20:13:54',
                'deleted_at' => NULL
            ),
            array(
                'id' => '264',
                'user_id' => $superAdminId,
                'pariwisata_id' => '68',
                'file' => 'upgrade2_5d2557f2d4e76.jpg',
                'created_at' => '2019-07-09 20:13:54',
                'updated_at' => '2019-07-09 20:13:54',
                'deleted_at' => NULL
            ),
            array(
                'id' => '265',
                'user_id' => $superAdminId,
                'pariwisata_id' => '68',
                'file' => 'upgrade3_5d2557f2d5292.jpg',
                'created_at' => '2019-07-09 20:13:54',
                'updated_at' => '2019-07-09 20:13:54',
                'deleted_at' => NULL
            ),
            array(
                'id' => '266',
                'user_id' => $superAdminId,
                'pariwisata_id' => '69',
                'file' => '626244_731140f6-27b3-4121-ba8e-cfeb0572302a_5d255fa100b78.jpg',
                'created_at' => '2019-07-09 20:46:41',
                'updated_at' => '2019-07-09 20:46:41',
                'deleted_at' => NULL
            ),
            array(
                'id' => '267',
                'user_id' => $superAdminId,
                'pariwisata_id' => '69',
                'file' => '2005226asiang-arii780x390_5d255fa10132e.jpg',
                'created_at' => '2019-07-09 20:46:41',
                'updated_at' => '2019-07-09 20:46:41',
                'deleted_at' => NULL
            ),
            array(
                'id' => '268',
                'user_id' => $superAdminId,
                'pariwisata_id' => '69',
                'file' => 'suasana-di-warkop-asiang_5d255fa1016c2.jpg',
                'created_at' => '2019-07-09 20:46:41',
                'updated_at' => '2019-07-09 20:46:41',
                'deleted_at' => NULL
            ),
            array(
                'id' => '269',
                'user_id' => $superAdminId,
                'pariwisata_id' => '70',
                'file' => '5_5d25624c3be25.jpg',
                'created_at' => '2019-07-09 20:58:04',
                'updated_at' => '2019-07-09 20:58:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '270',
                'user_id' => $superAdminId,
                'pariwisata_id' => '70',
                'file' => '069111900_1466229655-IMG-20160524-WA053_5d25624c3c652.jpg',
                'created_at' => '2019-07-09 20:58:04',
                'updated_at' => '2019-07-09 20:58:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '271',
                'user_id' => $superAdminId,
                'pariwisata_id' => '70',
                'file' => 'suasana-malam-hari-kedai-kopi-aming_5d25624c3cb22.jpg',
                'created_at' => '2019-07-09 20:58:04',
                'updated_at' => '2019-07-09 20:58:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '272',
                'user_id' => $superAdminId,
                'pariwisata_id' => '70',
                'file' => 'warung-kopi-aming_5d25624c3cfe2.jpg',
                'created_at' => '2019-07-09 20:58:04',
                'updated_at' => '2019-07-09 20:58:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '273',
                'user_id' => $superAdminId,
                'pariwisata_id' => '71',
                'file' => '10213942_S30twRScutm0MkhegoCS99UPHYaKf9l7bZ_KP-eIV3g_5d256c44d6876.jpg',
                'created_at' => '2019-07-09 21:40:36',
                'updated_at' => '2019-07-09 21:40:36',
                'deleted_at' => NULL
            ),
            array(
                'id' => '274',
                'user_id' => $superAdminId,
                'pariwisata_id' => '71',
                'file' => '23354750_5SFa70Nfo-ciwX93-b50uLZDfhHp4VtvR0QVSjIKARs_5d256c4545f9c.jpg',
                'created_at' => '2019-07-09 21:40:37',
                'updated_at' => '2019-07-09 21:40:37',
                'deleted_at' => NULL
            ),
            array(
                'id' => '275',
                'user_id' => $superAdminId,
                'pariwisata_id' => '71',
                'file' => 'IMG_20180323_181915914_5d256c45466ca.jpg',
                'created_at' => '2019-07-09 21:40:37',
                'updated_at' => '2019-07-09 21:40:37',
                'deleted_at' => NULL
            ),
            array(
                'id' => '276',
                'user_id' => $superAdminId,
                'pariwisata_id' => '72',
                'file' => 'download_5d256e303b0ff.jpg',
                'created_at' => '2019-07-09 21:48:48',
                'updated_at' => '2019-07-09 21:48:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '277',
                'user_id' => $superAdminId,
                'pariwisata_id' => '72',
                'file' => 'melda_5d256e303b67c.jpg',
                'created_at' => '2019-07-09 21:48:48',
                'updated_at' => '2019-07-09 21:48:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '278',
                'user_id' => $superAdminId,
                'pariwisata_id' => '72',
                'file' => 'rumah-makan-melda-cabang-pontianak_5d256e303ba22.jpg',
                'created_at' => '2019-07-09 21:48:48',
                'updated_at' => '2019-07-09 21:48:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '279',
                'user_id' => $superAdminId,
                'pariwisata_id' => '73',
                'file' => '1508016256447_5d2579eaadd95.jpg',
                'created_at' => '2019-07-09 22:38:50',
                'updated_at' => '2019-07-09 22:38:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '280',
                'user_id' => $superAdminId,
                'pariwisata_id' => '73',
                'file' => '1508016332602-1_5d2579eaae456.jpg',
                'created_at' => '2019-07-09 22:38:50',
                'updated_at' => '2019-07-09 22:38:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '281',
                'user_id' => $superAdminId,
                'pariwisata_id' => '73',
                'file' => 'lh3_5d2579eaae819.googleusercontent',
                'created_at' => '2019-07-09 22:38:50',
                'updated_at' => '2019-07-09 22:38:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '282',
                'user_id' => $superAdminId,
                'pariwisata_id' => '74',
                'file' => '34a21db291914a936aca2c2763e09a35_5d257d312d281.jpg',
                'created_at' => '2019-07-09 22:52:49',
                'updated_at' => '2019-07-09 22:52:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '283',
                'user_id' => $superAdminId,
                'pariwisata_id' => '74',
                'file' => 'cafe-di-pontianak-tenggara_5d257d312d8f5.jpg',
                'created_at' => '2019-07-09 22:52:49',
                'updated_at' => '2019-07-09 22:52:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '284',
                'user_id' => $superAdminId,
                'pariwisata_id' => '74',
                'file' => 'download_5d257d312dceb.png',
                'created_at' => '2019-07-09 22:52:49',
                'updated_at' => '2019-07-09 22:52:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '285',
                'user_id' => $superAdminId,
                'pariwisata_id' => '75',
                'file' => '56178991_1998712780434941_3801087717326098438_n_5d257f696313c.jpg',
                'created_at' => '2019-07-09 23:02:17',
                'updated_at' => '2019-07-09 23:02:17',
                'deleted_at' => NULL
            ),
            array(
                'id' => '286',
                'user_id' => $superAdminId,
                'pariwisata_id' => '75',
                'file' => 'cafe-serasan-di-pontianak-_5d257f6963705.jpg',
                'created_at' => '2019-07-09 23:02:17',
                'updated_at' => '2019-07-09 23:02:17',
                'deleted_at' => NULL
            ),
            array(
                'id' => '287',
                'user_id' => $superAdminId,
                'pariwisata_id' => '75',
                'file' => 'qahwah-cafe-resto_20170520_210332_5d257f6963af6.jpg',
                'created_at' => '2019-07-09 23:02:17',
                'updated_at' => '2019-07-09 23:02:17',
                'deleted_at' => NULL
            ),
            array(
                'id' => '288',
                'user_id' => $superAdminId,
                'pariwisata_id' => '76',
                'file' => '32298937_30kX0JkT694xzdmZgXpwFiScD8Pn5Stj9WOAfLI7Xyk_5d2580b1a871e.jpg',
                'created_at' => '2019-07-09 23:07:45',
                'updated_at' => '2019-07-09 23:07:45',
                'deleted_at' => NULL
            ),
            array(
                'id' => '289',
                'user_id' => $superAdminId,
                'pariwisata_id' => '76',
                'file' => '30000002000427532_wh_9_5d2580b1a8ccb.jpg',
                'created_at' => '2019-07-09 23:07:45',
                'updated_at' => '2019-07-09 23:07:45',
                'deleted_at' => NULL
            ),
            array(
                'id' => '290',
                'user_id' => $superAdminId,
                'pariwisata_id' => '76',
                'file' => 'DSC00160_5d2580b1a9057.jpg',
                'created_at' => '2019-07-09 23:07:45',
                'updated_at' => '2019-07-09 23:07:45',
                'deleted_at' => NULL
            ),
            array(
                'id' => '294',
                'user_id' => $superAdminId,
                'pariwisata_id' => '78',
                'file' => 'img_6414-16_5d25859ca1b60.jpg',
                'created_at' => '2019-07-09 23:28:44',
                'updated_at' => '2019-07-09 23:28:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '295',
                'user_id' => $superAdminId,
                'pariwisata_id' => '78',
                'file' => 'P_20190108_125652_5d25859ca2208.jpg',
                'created_at' => '2019-07-09 23:28:44',
                'updated_at' => '2019-07-09 23:28:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '296',
                'user_id' => $superAdminId,
                'pariwisata_id' => '78',
                'file' => 'xyJEzeBH_5d25859ca25ad.jpg',
                'created_at' => '2019-07-09 23:28:44',
                'updated_at' => '2019-07-09 23:28:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '297',
                'user_id' => $superAdminId,
                'pariwisata_id' => '79',
                'file' => 'crop_email_5d258744b62fa.jpg',
                'created_at' => '2019-07-09 23:35:48',
                'updated_at' => '2019-07-09 23:35:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '298',
                'user_id' => $superAdminId,
                'pariwisata_id' => '79',
                'file' => 'download_5d258744b69d2.jpg',
                'created_at' => '2019-07-09 23:35:48',
                'updated_at' => '2019-07-09 23:35:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '299',
                'user_id' => $superAdminId,
                'pariwisata_id' => '79',
                'file' => 'warunk-upnormal_20180428_080937_5d258744b6e15.jpg',
                'created_at' => '2019-07-09 23:35:48',
                'updated_at' => '2019-07-09 23:35:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '300',
                'user_id' => $superAdminId,
                'pariwisata_id' => '57',
                'file' => 'Kapuas Palace_5d25aba8e1596.jpg',
                'created_at' => '2019-07-10 02:11:04',
                'updated_at' => '2019-07-10 02:11:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '301',
                'user_id' => $superAdminId,
                'pariwisata_id' => '57',
                'file' => 'Kapuas Palace2_5d25aba8e1e43.jpg',
                'created_at' => '2019-07-10 02:11:04',
                'updated_at' => '2019-07-10 02:11:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '302',
                'user_id' => $superAdminId,
                'pariwisata_id' => '55',
                'file' => 'hotel ibis 2_5d25ade7a2a15.jpg',
                'created_at' => '2019-07-10 02:20:39',
                'updated_at' => '2019-07-10 02:20:39',
                'deleted_at' => NULL
            ),
            array(
                'id' => '303',
                'user_id' => $superAdminId,
                'pariwisata_id' => '55',
                'file' => 'hotel ibis_5d25ade7a2fcb.jpg',
                'created_at' => '2019-07-10 02:20:39',
                'updated_at' => '2019-07-10 02:20:39',
                'deleted_at' => NULL
            ),
            array(
                'id' => '304',
                'user_id' => $superAdminId,
                'pariwisata_id' => '54',
                'file' => 'hotel santika_5d25aefacbb00.jpg',
                'created_at' => '2019-07-10 02:25:14',
                'updated_at' => '2019-07-10 02:25:14',
                'deleted_at' => NULL
            ),
            array(
                'id' => '305',
                'user_id' => $superAdminId,
                'pariwisata_id' => '54',
                'file' => 'kamar-santika-suite-hotel-santika-pontianak_5d25aefacc117.jpg',
                'created_at' => '2019-07-10 02:25:14',
                'updated_at' => '2019-07-10 02:25:14',
                'deleted_at' => NULL
            ),
            array(
                'id' => '306',
                'user_id' => $superAdminId,
                'pariwisata_id' => '36',
                'file' => 'Green leaf in_5d268825457d3.jpg',
                'created_at' => '2019-07-10 17:51:49',
                'updated_at' => '2019-07-10 17:51:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '307',
                'user_id' => $superAdminId,
                'pariwisata_id' => '36',
                'file' => 'Green leaf in2_5d26882545c8a.jpg',
                'created_at' => '2019-07-10 17:51:49',
                'updated_at' => '2019-07-10 17:51:49',
                'deleted_at' => NULL
            ),
            array(
                'id' => '308',
                'user_id' => $superAdminId,
                'pariwisata_id' => '37',
                'file' => 'hotel surya 2_5d2688892119e.jpg',
                'created_at' => '2019-07-10 17:53:29',
                'updated_at' => '2019-07-10 17:53:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '309',
                'user_id' => $superAdminId,
                'pariwisata_id' => '37',
                'file' => 'hotel surya_5d2688892182e.jpg',
                'created_at' => '2019-07-10 17:53:29',
                'updated_at' => '2019-07-10 17:53:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '310',
                'user_id' => $superAdminId,
                'pariwisata_id' => '37',
                'file' => 'hotel surya 2_5d26888d9ee28.jpg',
                'created_at' => '2019-07-10 17:53:33',
                'updated_at' => '2019-07-10 17:53:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '311',
                'user_id' => $superAdminId,
                'pariwisata_id' => '37',
                'file' => 'hotel surya_5d26888d9f309.jpg',
                'created_at' => '2019-07-10 17:53:33',
                'updated_at' => '2019-07-10 17:53:33',
                'deleted_at' => NULL
            ),
            array(
                'id' => '313',
                'user_id' => $superAdminId,
                'pariwisata_id' => '38',
                'file' => 'Kapuas Dharma_5d26891dc9449.jpg',
                'created_at' => '2019-07-10 17:55:57',
                'updated_at' => '2019-07-10 17:55:57',
                'deleted_at' => NULL
            ),
            array(
                'id' => '314',
                'user_id' => $superAdminId,
                'pariwisata_id' => '39',
                'file' => 'star hotel_5d26895f28bc9.jpg',
                'created_at' => '2019-07-10 17:57:03',
                'updated_at' => '2019-07-10 17:57:03',
                'deleted_at' => NULL
            ),
            array(
                'id' => '315',
                'user_id' => $superAdminId,
                'pariwisata_id' => '39',
                'file' => 'star hotel2_5d26895f2928b.jpg',
                'created_at' => '2019-07-10 17:57:03',
                'updated_at' => '2019-07-10 17:57:03',
                'deleted_at' => NULL
            ),
            array(
                'id' => '316',
                'user_id' => $superAdminId,
                'pariwisata_id' => '40',
                'file' => 'grand kartika hotel 2_5d2689ca2540c.jpg',
                'created_at' => '2019-07-10 17:58:50',
                'updated_at' => '2019-07-10 17:58:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '317',
                'user_id' => $superAdminId,
                'pariwisata_id' => '40',
                'file' => 'grand kartika hotel_5d2689ca25961.jpg',
                'created_at' => '2019-07-10 17:58:50',
                'updated_at' => '2019-07-10 17:58:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '318',
                'user_id' => $superAdminId,
                'pariwisata_id' => '41',
                'file' => 'sentosa guest house 2_5d268ac0e8260.jpg',
                'created_at' => '2019-07-10 18:02:56',
                'updated_at' => '2019-07-10 18:02:56',
                'deleted_at' => NULL
            ),
            array(
                'id' => '319',
                'user_id' => $superAdminId,
                'pariwisata_id' => '41',
                'file' => 'sentosa guest house_5d268ac0e878b.jpg',
                'created_at' => '2019-07-10 18:02:56',
                'updated_at' => '2019-07-10 18:02:56',
                'deleted_at' => NULL
            ),
            array(
                'id' => '320',
                'user_id' => $superAdminId,
                'pariwisata_id' => '42',
                'file' => 'oyo 899 gold line 2_5d268b575b93e.jpg',
                'created_at' => '2019-07-10 18:05:27',
                'updated_at' => '2019-07-10 18:05:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '321',
                'user_id' => $superAdminId,
                'pariwisata_id' => '42',
                'file' => 'oyo 899 gold line_5d268b575bf27.jpg',
                'created_at' => '2019-07-10 18:05:27',
                'updated_at' => '2019-07-10 18:05:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '322',
                'user_id' => $superAdminId,
                'pariwisata_id' => '43',
                'file' => 'g hotel_5d268ca6d5405.jpg',
                'created_at' => '2019-07-10 18:11:02',
                'updated_at' => '2019-07-10 18:11:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '323',
                'user_id' => $superAdminId,
                'pariwisata_id' => '43',
                'file' => 'g hotel2_5d268ca6d5bfb.jpg',
                'created_at' => '2019-07-10 18:11:02',
                'updated_at' => '2019-07-10 18:11:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '324',
                'user_id' => $superAdminId,
                'pariwisata_id' => '41',
                'file' => 'sentosa guest house 3_5d268cdef39fd.jpg',
                'created_at' => '2019-07-10 18:11:58',
                'updated_at' => '2019-07-10 18:11:58',
                'deleted_at' => NULL
            ),
            array(
                'id' => '325',
                'user_id' => $superAdminId,
                'pariwisata_id' => '45',
                'file' => 'garuda hotel_5d268d81915c8.jpg',
                'created_at' => '2019-07-10 18:14:41',
                'updated_at' => '2019-07-10 18:14:41',
                'deleted_at' => NULL
            ),
            array(
                'id' => '326',
                'user_id' => $superAdminId,
                'pariwisata_id' => '45',
                'file' => 'garuda hotel2_5d268d8191c86.jpg',
                'created_at' => '2019-07-10 18:14:41',
                'updated_at' => '2019-07-10 18:14:41',
                'deleted_at' => NULL
            ),
            array(
                'id' => '327',
                'user_id' => $superAdminId,
                'pariwisata_id' => '46',
                'file' => 'hotel harmony 2_5d268dff1894b.jpg',
                'created_at' => '2019-07-10 18:16:47',
                'updated_at' => '2019-07-10 18:16:47',
                'deleted_at' => NULL
            ),
            array(
                'id' => '328',
                'user_id' => $superAdminId,
                'pariwisata_id' => '46',
                'file' => 'hotel harmony_5d268dff18feb.jpg',
                'created_at' => '2019-07-10 18:16:47',
                'updated_at' => '2019-07-10 18:16:47',
                'deleted_at' => NULL
            ),
            array(
                'id' => '329',
                'user_id' => $superAdminId,
                'pariwisata_id' => '47',
                'file' => 'airy eco_5d268e983c079.jpg',
                'created_at' => '2019-07-10 18:19:20',
                'updated_at' => '2019-07-10 18:19:20',
                'deleted_at' => NULL
            ),
            array(
                'id' => '330',
                'user_id' => $superAdminId,
                'pariwisata_id' => '47',
                'file' => 'airy eco2_5d268e983c743.jpg',
                'created_at' => '2019-07-10 18:19:20',
                'updated_at' => '2019-07-10 18:19:20',
                'deleted_at' => NULL
            ),
            array(
                'id' => '331',
                'user_id' => $superAdminId,
                'pariwisata_id' => '48',
                'file' => 'gardenia resort and spa_5d268f168d2d2.jpg',
                'created_at' => '2019-07-10 18:21:26',
                'updated_at' => '2019-07-10 18:21:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '332',
                'user_id' => $superAdminId,
                'pariwisata_id' => '48',
                'file' => 'gardenia resort and spa2_5d268f168d82c.jpg',
                'created_at' => '2019-07-10 18:21:26',
                'updated_at' => '2019-07-10 18:21:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '333',
                'user_id' => $superAdminId,
                'pariwisata_id' => '49',
                'file' => 'harris hotel_5d268fcd22353.jpg',
                'created_at' => '2019-07-10 18:24:29',
                'updated_at' => '2019-07-10 18:24:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '334',
                'user_id' => $superAdminId,
                'pariwisata_id' => '49',
                'file' => 'harris hotel2_5d268fcd22953.jpg',
                'created_at' => '2019-07-10 18:24:29',
                'updated_at' => '2019-07-10 18:24:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '335',
                'user_id' => $superAdminId,
                'pariwisata_id' => '50',
                'file' => 'hotel neo gm_5d2690544cee1.jpg',
                'created_at' => '2019-07-10 18:26:44',
                'updated_at' => '2019-07-10 18:26:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '336',
                'user_id' => $superAdminId,
                'pariwisata_id' => '50',
                'file' => 'hotel neo gm2_5d2690544d41f.jpg',
                'created_at' => '2019-07-10 18:26:44',
                'updated_at' => '2019-07-10 18:26:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '337',
                'user_id' => $superAdminId,
                'pariwisata_id' => '51',
                'file' => 'aston hotel3_5d2690e83c1ca.jpg',
                'created_at' => '2019-07-10 18:29:12',
                'updated_at' => '2019-07-10 18:29:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '338',
                'user_id' => $superAdminId,
                'pariwisata_id' => '51',
                'file' => 'aston hotel_5d2690e83c79a.jpg',
                'created_at' => '2019-07-10 18:29:12',
                'updated_at' => '2019-07-10 18:29:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '339',
                'user_id' => $superAdminId,
                'pariwisata_id' => '51',
                'file' => 'aston hotel2_5d2690e83cbaa.jpg',
                'created_at' => '2019-07-10 18:29:12',
                'updated_at' => '2019-07-10 18:29:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '340',
                'user_id' => $superAdminId,
                'pariwisata_id' => '53',
                'file' => 'maestro hotel_5d26916390054.jpg',
                'created_at' => '2019-07-10 18:31:15',
                'updated_at' => '2019-07-10 18:31:15',
                'deleted_at' => NULL
            ),
            array(
                'id' => '341',
                'user_id' => $superAdminId,
                'pariwisata_id' => '53',
                'file' => 'maestro hotel2_5d269163907ae.jpg',
                'created_at' => '2019-07-10 18:31:15',
                'updated_at' => '2019-07-10 18:31:15',
                'deleted_at' => NULL
            ),
            array(
                'id' => '342',
                'user_id' => $superAdminId,
                'pariwisata_id' => '38',
                'file' => 'kapuas dharma3_5d2694abf39fc.jpg',
                'created_at' => '2019-07-10 18:45:15',
                'updated_at' => '2019-07-10 18:45:15',
                'deleted_at' => NULL
            ),
            array(
                'id' => '343',
                'user_id' => $superAdminId,
                'pariwisata_id' => '80',
                'file' => 'fasilitas-kamar_5d26ea7d2eec4.jpg',
                'created_at' => '2019-07-10 17:51:25',
                'updated_at' => '2019-07-10 17:51:25',
                'deleted_at' => NULL
            ),
            array(
                'id' => '344',
                'user_id' => $superAdminId,
                'pariwisata_id' => '80',
                'file' => 'tampilan-hotel-borneo_5d26ea7d2f668.jpg',
                'created_at' => '2019-07-10 17:51:25',
                'updated_at' => '2019-07-10 17:51:25',
                'deleted_at' => NULL
            ),
            array(
                'id' => '345',
                'user_id' => $superAdminId,
                'pariwisata_id' => '80',
                'file' => 'Y973732017_5d26ea7d2fa89.jpg',
                'created_at' => '2019-07-10 17:51:25',
                'updated_at' => '2019-07-10 17:51:25',
                'deleted_at' => NULL
            ),
            array(
                'id' => '346',
                'user_id' => $superAdminId,
                'pariwisata_id' => '81',
                'file' => 'HI134806591_5d26ed28347ab.jpg',
                'created_at' => '2019-07-10 18:02:48',
                'updated_at' => '2019-07-10 18:02:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '347',
                'user_id' => $superAdminId,
                'pariwisata_id' => '81',
                'file' => 'HI134806598_5d26ed2834ec8.jpg',
                'created_at' => '2019-07-10 18:02:48',
                'updated_at' => '2019-07-10 18:02:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '348',
                'user_id' => $superAdminId,
                'pariwisata_id' => '82',
                'file' => 'cbk_5d26f0ff6c4ae.jpg',
                'created_at' => '2019-07-10 18:19:11',
                'updated_at' => '2019-07-10 18:19:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '349',
                'user_id' => $superAdminId,
                'pariwisata_id' => '82',
                'file' => 'unnamed_5d26f0ff6cbf1.jpg',
                'created_at' => '2019-07-10 18:19:11',
                'updated_at' => '2019-07-10 18:19:11',
                'deleted_at' => NULL
            ),
            array(
                'id' => '351',
                'user_id' => $superAdminId,
                'pariwisata_id' => '84',
                'file' => 'profile picture_5d26f9d6460e5.jpg',
                'created_at' => '2019-07-10 18:56:54',
                'updated_at' => '2019-07-10 18:56:54',
                'deleted_at' => NULL
            ),
            array(
                'id' => '352',
                'user_id' => $superAdminId,
                'pariwisata_id' => '85',
                'file' => 'download_5d2701e6d4716.jpg',
                'created_at' => '2019-07-10 19:31:18',
                'updated_at' => '2019-07-10 19:31:18',
                'deleted_at' => NULL
            ),
            array(
                'id' => '353',
                'user_id' => $superAdminId,
                'pariwisata_id' => '85',
                'file' => 'g;jhb_5d2701e6d5030.jpg',
                'created_at' => '2019-07-10 19:31:18',
                'updated_at' => '2019-07-10 19:31:18',
                'deleted_at' => NULL
            ),
            array(
                'id' => '354',
                'user_id' => $superAdminId,
                'pariwisata_id' => '86',
                'file' => 'unnamed_5d270503a9232.jpg',
                'created_at' => '2019-07-10 19:44:35',
                'updated_at' => '2019-07-10 19:44:35',
                'deleted_at' => NULL
            ),
            array(
                'id' => '355',
                'user_id' => $superAdminId,
                'pariwisata_id' => '87',
                'file' => '52540075_5d2707cb8a77e.jpg',
                'created_at' => '2019-07-10 19:56:27',
                'updated_at' => '2019-07-10 19:56:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '356',
                'user_id' => $superAdminId,
                'pariwisata_id' => '88',
                'file' => 'hqdefault_5d2708b581f67.jpg',
                'created_at' => '2019-07-10 20:00:21',
                'updated_at' => '2019-07-10 20:00:21',
                'deleted_at' => NULL
            ),
            array(
                'id' => '357',
                'user_id' => $superAdminId,
                'pariwisata_id' => '89',
                'file' => 'IMG-20160511-WA0022-300x169_5d270af799840.jpg',
                'created_at' => '2019-07-10 20:09:59',
                'updated_at' => '2019-07-10 20:09:59',
                'deleted_at' => NULL
            ),
            array(
                'id' => '358',
                'user_id' => $superAdminId,
                'pariwisata_id' => '90',
                'file' => 'md_259743943_5d270bc164703.jpg',
                'created_at' => '2019-07-10 20:13:21',
                'updated_at' => '2019-07-10 20:13:21',
                'deleted_at' => NULL
            ),
            array(
                'id' => '359',
                'user_id' => $superAdminId,
                'pariwisata_id' => '91',
                'file' => 'Untitled_5d280bf835384.png',
                'created_at' => '2019-07-11 14:26:32',
                'updated_at' => '2019-07-11 14:26:32',
                'deleted_at' => NULL
            ),
            array(
                'id' => '360',
                'user_id' => $superAdminId,
                'pariwisata_id' => '92',
                'file' => 'unnamed_5d280e04e606c.jpg',
                'created_at' => '2019-07-11 14:35:16',
                'updated_at' => '2019-07-11 14:35:16',
                'deleted_at' => NULL
            ),
            array(
                'id' => '361',
                'user_id' => $superAdminId,
                'pariwisata_id' => '31',
                'file' => 'download_5d280ef06e5ed.jpg',
                'created_at' => '2019-07-11 14:39:12',
                'updated_at' => '2019-07-11 14:39:12',
                'deleted_at' => NULL
            ),
            array(
                'id' => '363',
                'user_id' => $superAdminId,
                'pariwisata_id' => '93',
                'file' => 'restoran_6376f7e89694c.jpg',
                'created_at' => '2022-11-18 03:11:36',
                'updated_at' => '2022-11-18 03:11:36',
                'deleted_at' => NULL
            ),
            array(
                'id' => '364',
                'user_id' => $superAdminId,
                'pariwisata_id' => '94',
                'file' => 'restoran_6376f982a146c.jpg',
                'created_at' => '2022-11-18 03:18:26',
                'updated_at' => '2022-11-18 03:18:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '365',
                'user_id' => $superAdminId,
                'pariwisata_id' => '95',
                'file' => 'restoran_6376faa851a9d.jpg',
                'created_at' => '2022-11-18 03:23:20',
                'updated_at' => '2022-11-18 03:23:20',
                'deleted_at' => NULL
            ),
            array(
                'id' => '366',
                'user_id' => $superAdminId,
                'pariwisata_id' => '95',
                'file' => 'restoran_6376fb78e0f2c.jpg',
                'created_at' => '2022-11-18 03:26:48',
                'updated_at' => '2022-11-18 03:26:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '367',
                'user_id' => $superAdminId,
                'pariwisata_id' => '96',
                'file' => 'restoran_6376fc885579e.jpg',
                'created_at' => '2022-11-18 03:31:20',
                'updated_at' => '2022-11-18 03:31:20',
                'deleted_at' => NULL
            ),
            array(
                'id' => '368',
                'user_id' => $superAdminId,
                'pariwisata_id' => '97',
                'file' => 'restoran_6376fd128bbe3.jpg',
                'created_at' => '2022-11-18 03:33:38',
                'updated_at' => '2022-11-18 03:33:38',
                'deleted_at' => NULL
            ),
            array(
                'id' => '369',
                'user_id' => $superAdminId,
                'pariwisata_id' => '98',
                'file' => 'restoran_6376fd89ca73a.jpg',
                'created_at' => '2022-11-18 03:35:37',
                'updated_at' => '2022-11-18 03:35:37',
                'deleted_at' => NULL
            ),
            array(
                'id' => '372',
                'user_id' => $superAdminId,
                'pariwisata_id' => '101',
                'file' => 'restoran_6376feeea54b4.jpg',
                'created_at' => '2022-11-18 03:41:34',
                'updated_at' => '2022-11-18 03:41:34',
                'deleted_at' => NULL
            ),
            array(
                'id' => '373',
                'user_id' => $superAdminId,
                'pariwisata_id' => '102',
                'file' => 'restoran_6376ff367af16.jpg',
                'created_at' => '2022-11-18 03:42:46',
                'updated_at' => '2022-11-18 03:42:46',
                'deleted_at' => NULL
            ),
            array(
                'id' => '374',
                'user_id' => $superAdminId,
                'pariwisata_id' => '103',
                'file' => 'restoran_6376ffc2f02e6.jpg',
                'created_at' => '2022-11-18 03:45:06',
                'updated_at' => '2022-11-18 03:45:06',
                'deleted_at' => NULL
            ),
            array(
                'id' => '375',
                'user_id' => $superAdminId,
                'pariwisata_id' => '104',
                'file' => 'restoran_6377040f58ac8.jpg',
                'created_at' => '2022-11-18 04:03:27',
                'updated_at' => '2022-11-18 04:03:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '376',
                'user_id' => $superAdminId,
                'pariwisata_id' => '105',
                'file' => 'restoran_63770483e25e7.jpg',
                'created_at' => '2022-11-18 04:05:23',
                'updated_at' => '2022-11-18 04:05:23',
                'deleted_at' => NULL
            ),
            array(
                'id' => '377',
                'user_id' => $superAdminId,
                'pariwisata_id' => '106',
                'file' => 'restoran_637ebd02af6cb.jpg',
                'created_at' => '2022-11-24 00:38:26',
                'updated_at' => '2022-11-24 00:38:26',
                'deleted_at' => NULL
            ),
            array(
                'id' => '378',
                'user_id' => $superAdminId,
                'pariwisata_id' => '107',
                'file' => 'restoran_637ebd8d54cd6.jpg',
                'created_at' => '2022-11-24 00:40:45',
                'updated_at' => '2022-11-24 00:40:45',
                'deleted_at' => NULL
            ),
            array(
                'id' => '379',
                'user_id' => $superAdminId,
                'pariwisata_id' => '108',
                'file' => 'restoran_637ebf42d72a9.jpg',
                'created_at' => '2022-11-24 00:48:02',
                'updated_at' => '2022-11-24 00:48:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '380',
                'user_id' => $superAdminId,
                'pariwisata_id' => '109',
                'file' => '333_65f3f85f3e648.png',
                'created_at' => '2024-03-15 07:27:27',
                'updated_at' => '2024-03-15 07:27:27',
                'deleted_at' => NULL
            ),
            array(
                'id' => '381',
                'user_id' => $superAdminId,
                'pariwisata_id' => '109',
                'file' => '333_65f3f945cf4f0.png',
                'created_at' => '2024-03-15 07:31:17',
                'updated_at' => '2024-03-15 07:31:17',
                'deleted_at' => NULL
            ),
            array(
                'id' => '382',
                'user_id' => $superAdminId,
                'pariwisata_id' => '110',
                'file' => 'Kings_65f78cbcb3b8f.png',
                'created_at' => '2024-03-18 00:37:16',
                'updated_at' => '2024-03-18 00:37:16',
                'deleted_at' => NULL
            ),
            array(
                'id' => '384',
                'user_id' => $superAdminId,
                'pariwisata_id' => '112',
                'file' => 'Ayam Dadakan_65f78e50f0fd7.png',
                'created_at' => '2024-03-18 00:44:00',
                'updated_at' => '2024-03-18 00:44:00',
                'deleted_at' => NULL
            ),
            array(
                'id' => '385',
                'user_id' => $superAdminId,
                'pariwisata_id' => '113',
                'file' => 'Wong Tie_65f78f6c87b87.png',
                'created_at' => '2024-03-18 00:48:44',
                'updated_at' => '2024-03-18 00:48:44',
                'deleted_at' => NULL
            ),
            array(
                'id' => '387',
                'user_id' => $superAdminId,
                'pariwisata_id' => '115',
                'file' => 'Toss_65f79094c5ef3.png',
                'created_at' => '2024-03-18 00:53:40',
                'updated_at' => '2024-03-18 00:53:40',
                'deleted_at' => NULL
            ),
            array(
                'id' => '388',
                'user_id' => $superAdminId,
                'pariwisata_id' => '116',
                'file' => 'Gepuk_65f791f1d7fea.png',
                'created_at' => '2024-03-18 00:59:29',
                'updated_at' => '2024-03-18 00:59:29',
                'deleted_at' => NULL
            ),
            array(
                'id' => '390',
                'user_id' => $superAdminId,
                'pariwisata_id' => '118',
                'file' => 'Mie Ayam Jakarta 991_65f794427b053.png',
                'created_at' => '2024-03-18 01:09:22',
                'updated_at' => '2024-03-18 01:09:22',
                'deleted_at' => NULL
            ),
            array(
                'id' => '393',
                'user_id' => $superAdminId,
                'pariwisata_id' => '93',
                'file' => 'image_2024-03-18_082151556_65f7974bad25f.png',
                'created_at' => '2024-03-18 01:22:19',
                'updated_at' => '2024-03-18 01:22:19',
                'deleted_at' => NULL
            ),
            array(
                'id' => '395',
                'user_id' => $superAdminId,
                'pariwisata_id' => '122',
                'file' => 'Raja UDuk_65f799c283b18.png',
                'created_at' => '2024-03-18 01:32:50',
                'updated_at' => '2024-03-18 01:32:50',
                'deleted_at' => NULL
            ),
            array(
                'id' => '396',
                'user_id' => $superAdminId,
                'pariwisata_id' => '93',
                'file' => '2023-04-11_65f79a1906119.jpg',
                'created_at' => '2024-03-18 01:34:17',
                'updated_at' => '2024-03-18 01:34:17',
                'deleted_at' => NULL
            )
        );

        $images = array();

        $kulinerIdExist = array(
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '19',
            '20',
            '21',
            '22',
            '23',
            '35',
            '56',
            '59',
            '60',
            '61',
            '62',
            '63',
            '64',
            '65',
            '66',
            '67',
            '68',
            '69',
            '70',
            '71',
            '72',
            '73',
            '74',
            '75',
            '76',
            '77',
            '78',
            '79',
            '93',
            '94',
            '95',
            '96',
            '97',
            '98',
            '99',
            '100',
            '101',
            '102',
            '103',
            '104',
            '105',
            '106',
            '107',
            '108',
            '109',
            '110',
            '112',
            '113',
            '115',
            '116',
            '118',
            '122',
            '123',
        );
        foreach ($info_hotel_restoran_detail as $value) {
            if (in_array($value['pariwisata_id'], $kulinerIdExist)) {
                $images[] = $value;
            }
        }

        $events = DB::table('events')->select(['id', 'user_id', 'location', 'created_at', 'updated_at', 'deleted_at'])->get();


        DB::beginTransaction();
        try {
            foreach ($info_hotel_restoran as $value) {
                $kuliner = DB::table('pariwisata')->insertGetId([
                    'user_id' => $value['user_id'],
                    'master_id' => $value['master_id'],
                    'name' => $value['name'],
                    'address' => $value['address'],
                    'latitude' => $value['latitude'],
                    'longitude' => $value['longitude'],
                    'phone' => $value['phone'],
                    'email' => $value['email'],
                    'district' => $value['district'],
                    'description' => $value['description'],
                    'halal' => $value['halal'],
                    'category_id' => $value['category_id'],
                    'created_at' => $value['created_at'],
                    'updated_at' => $value['updated_at'],
                    'deleted_at' => $value['deleted_at'],
                ]);

                // ! Gambar Kuliner
                foreach ($images as $image) {
                    if ($value['id_lama'] ==  $image['pariwisata_id']) {
                        DB::table('pariwisata_images')->insert([
                            'user_id' => $image['user_id'],
                            'pariwisata_id' => $kuliner,
                            'file' => $image['file'],
                            'created_at' => $image['created_at'],
                            'updated_at' => $image['updated_at'],
                            'deleted_at' => $image['deleted_at'],
                        ]);
                    }
                }

                // ! Menambah data Lokasi Event
                foreach ($events as $event) {
                    $data = json_decode($event->location, true);
                    if (isset($data['K'])) {
                        $eventKulinerIds = $data['K'];
                        foreach ($eventKulinerIds as $eventKulinerId) {
                            if ($kuliner == $eventKulinerId) {
                                DB::table('event_locations')->insert([
                                    'user_id' => $event->user_id,
                                    'event_id' => $event->id,
                                    'pariwisata_id' => $kuliner,
                                    'created_at' => $event->created_at,
                                    'updated_at' => $event->updated_at,
                                    'deleted_at' => $event->deleted_at,
                                ]);
                            }
                        }
                    }
                }
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
