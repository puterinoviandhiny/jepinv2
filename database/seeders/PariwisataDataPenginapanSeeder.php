<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PariwisataDataPenginapanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $penginapanId = DB::table('pariwisata_master')->where('name', 'Penginapan')->first()->id;

        $info_hotel = array(
            array(
                'id' => 2,
                'id_lama' => 2,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Transera Hotel Pontianak",
                'address' => 'Jl. Gajah Mada, Gajah Mada 21, Pusat Kota Pontianak, Pontianak, Indonesia 78121.',
                'latitude' => '-0.035494',
                'longitude' => '109.34431100000006',
                'phone' => '(0561) 570555',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 03:49:58',
                'updated_at' => '2019-07-08 20:47:59',
                'deleted_at' => '2019-07-08 20:47:59',
                'description' => "<div>Para tamu dapat bersantai di sauna atau menikmati perawatan pijat yang ada di Transera Hotel Pontianak. Staf siap melayani Anda sepanjang hari dan dapat membantu pengurusan paket tur atau tiket atraksi wisata. Transera Hotel Pontianak menawarkan 133 kamar yang ber-AC dan modis. Hotel juga memiliki beberapa kamar yang terhubung sehingga cocok untuk sekeluarga.</div>
                        <div>Para tamu yang tinggal di Transera Hotel Pontianak dapat menikmati pengalaman bersantap yang unik di restoran yang tersedia, bertempat strategis untuk mereka yang ini ingin tinggal dekat untuk mencicipi makanan. Pada malam hari, tamu dapat menikmati minuman di lounge bar yang asik.</div>
                        <div>Bandara Internasional Supadio terletak sekitar 25 menit dengan naik kendaraan dari hotel. Transfer shuttle ke bandara juga tersedia.</div>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 3,
                'id_lama' => 3,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Mercure Pontianak City Center",
                'address' => 'Jalan Jenderal Ahmad Yani No.91 Bangka Belitung Laut South Pontianak, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124',
                'latitude' => '-0.052751',
                'longitude' => '109.34682499999997',
                'phone' => '(0561) 577888',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 03:50:49',
                'updated_at' => '2019-07-08 20:44:12',
                'deleted_at' => '2019-07-08 20:44:12',
                'description' => "<p>A stay at Mercure Pontianak City Center places you in the heart of Pontianak, just a 3-minute walk from Ayani Mega Mall and within a 5-minute drive of Gajah Mada Shopping Complex. This 4-star hotel is 3.1 mi (5 km) from Alun Alun Kapuas and 7.3 mi (11.7 km) from Equator Monument.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 4,
                'id_lama' => 4,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Grand Hotel Pontianak",
                'address' => 'Jalan Gajah Mada No.71-73, Benua Melayu Darat, Pontianak Selatan, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '(0561) 8121663',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 03:52:34',
                'updated_at' => '2019-07-08 20:38:29',
                'deleted_at' => '2019-07-08 20:38:29',
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 5,
                'id_lama' => 5,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Grand Mahkota Hotel",
                'address' => 'Jl. Sidas No.8, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.022007',
                'longitude' => '109.33548999999994',
                'phone' => '(0561) 736022',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:20:45',
                'updated_at' => '2019-07-08 20:36:45',
                'deleted_at' => '2019-07-08 20:36:45',
                'description' => "<p>Terletak di tengah kota Pontianak yang ramai, Grand Mahkota Pontianak merupakan hotel mewah dengan bermacam-macam fasilitas seperti pusat bisnis, agen travel, salon kecantikan, ruang pertemuan, dan lain-lain. Setiap kamar di Grand Mahkota Pontianak didesain dengan kemewahan dan dilengkapi dengan fasilitas modern seperti AC, televisi layar datar, kamar mandi dengan shower/bathtub, dan lain-lain.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 6,
                'id_lama' => 6,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Gajahmada",
                'address' => 'Jl. Gajah Mada No.177-183, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.034396',
                'longitude' => '109.34150399999999',
                'phone' => '(0561) 761598',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:21:29',
                'updated_at' => '2019-07-08 20:28:36',
                'deleted_at' => '2019-07-08 20:28:36',
                'description' => "<p>Terletak di Pontianak, Hotel Gajahmada menyediakan pelayanan yang ramah dan fasilitas modern. Kami menjamin masa menginap yang menyenangkan bagi para tamu dengan layanan kami yang personal dan berbagai macam fasilitas modern yang tersedia di hotel kami</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 7,
                'id_lama' => 7,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Richard's Home",
                'address' => 'Jl. Media No.4, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.05001',
                'longitude' => '109.34817299999997',
                'phone' => '(0561) 8175110',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:22:31',
                'updated_at' => '2019-07-08 20:22:38',
                'deleted_at' => '2019-07-08 20:22:38',
                'description' => "<p>Richard's Home sebuah hunian yang berlokasi di Pontianak. Suasana ruangan yang bersih dan nyaman, cocok bagi Anda yang akan berlibur atau mengadakan kunjungan bisnis. Lokasi yang strategis sehingga mudah untuk diakses, dan harga yang terjangkau bisa menjadi pilihan akomodasi perjalanan Anda.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 8,
                'id_lama' => 8,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Merpati",
                'address' => 'Jl. Imam Bonjol No.60, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112',
                'latitude' => '-0.047178',
                'longitude' => '109.35501699999998',
                'phone' => '(0561) 745481',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:25:33',
                'updated_at' => '2019-07-08 20:20:56',
                'deleted_at' => '2019-07-08 20:20:56',
                'description' => "<p>Merpati Hotel terletak di Pontianak, menawarkan kamar-kamar simpel yang ber-AC dengan pemandangan kota. Hotel ini memiliki restoran, juga menyediakan meja depan 24 jam dan akses Wi-Fi gratis di area umumnya.</p>
                <p>Kamar-kamar di Hotel Merpati dilengkapi dengan TV, AC, dan meja. Area tempat duduk, sofa, dan brankas juga tersedia di kamar. Kamar mandi dalamnya menawarkan shower atau bathtub, dan perlengkapan mandi gratis.</p>
                <p>Mahoni Restaurant menyajikan aneka masakan Indonesia, selain itu layanan kamar juga tersedia. Pilihan lainnya, Anda dapat menemukan RM Simpang Ampat yang menyediakan makanan Padang, terletak sejauh 10 menit berkendara.</p>
                <p>Layanan binatu dan bagasi tersedia dengan biaya tambahan. Staf di hotel dapat membantu dengan layanan antar-jemput bandara. Tempat parkir gratis tersedia di hotel.</p>
                <p>Hotel ini berjarak 10 menit berkendara dari Megamall Pontianak, 15 menit berkendara dari pusat kota Pontianak serta Alun-Alun Kapuas, dan 30 menit berkendara dari Tugu Khatulistiwa. Bandara Internasional Supadio dapat dicapai dalam 25 menit berkendara dari hotel.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 9,
                'id_lama' => 9,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Orchardz Hotel Ayani Pontianak",
                'address' => 'Jl. Perdana No.8, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124, Indonesia',
                'latitude' => '-0.05324',
                'longitude' => '109.34419600000001',
                'phone' => '62 561 576 888',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:29:24',
                'updated_at' => '2019-07-08 20:18:09',
                'deleted_at' => '2019-07-08 20:18:09',
                'description' => "<p>Akomodasi yang berlokasi strategis di kota Pontianak dekat dengan pusat bisnis, perkantoran, universitas, pusat perbelanjaan dan bandara. Hotel yang bersih, nyaman dan cukup luas sangat cocok bagi para pelancong yang ingin berbisnis maupun wisata karena menyediakan ruang pertemuan, ruang meeting dan dekat dengan pusat perbelanjaan.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 10,
                'id_lama' => 10,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Golden Tulip Pontianak",
                'address' => 'Jalan Teuku Umar No.39, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117',
                'latitude' => '-0.031243',
                'longitude' => '109.33486300000004',
                'phone' => '(0561) 6597889',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:31:23',
                'updated_at' => '2019-07-08 20:15:41',
                'deleted_at' => '2019-07-08 20:15:41',
                'description' => "<div>Golden Tulip Essential Pontianak menyediakan 186 kamar yang nyaman dan juga menawarkan fasilitas kolam renang. Hotel yang nyaman ini menyediakan fasilitas layanan kamar 24 jam, check-in/check-out ekspres dan kafe.</div>
                <div>Tersedia beraneka sarana di Golden Tulip Essential Pontianak yang para tamu dapat manfaatkan termasuk di antaranya internet nirkabel (Wi-Fi) di ruangan umum, meja penyewaan mobil dan brankas. Pekerja siap melayani tamu sepanjang hari dan dapat membantu pengurusan paket tur atau tiket atraksi wisata.</div>
                <div>Golden Tulip Essential Pontianak memberikan baik restoran maupun bar sehingga para tamu bisa beristirahat pada akhir hari dengan makan malam dan segelas minuman. Hotel juga menyediakan sarapan setiap pagi.</div>
                <div>Bandara Internasional Supadio berlokasi kurang dari 35 menit dengan naik kendaraan dari Golden Tulip Essential Pontianak.</div>
                <div>&nbsp;</div>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 11,
                'id_lama' => 11,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Kini Pontianak",
                'address' => 'Jl. Nusa Indah III, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.025633',
                'longitude' => '109.33917700000006',
                'phone' => '0857-8784-7756',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-06-14 04:32:11',
                'updated_at' => '2019-07-08 20:11:06',
                'deleted_at' => '2019-07-08 20:11:06',
                'description' => '<div id="summary" class="" data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1 customGoal:BUeeHNSPdMPISWXGBbLPYO:1
            customGoal:BUeeHNSPBAcHLT:1
            customGoal:BUeeHNSPBMcHXIZGPHe:1
            customGoal:BUeeHNSPBMcHXIHLT:1
            customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1" data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2 customGoal:BUeeHNSPdMPISWXGBbLPYO:2
            customGoal:BUeeHNSPBAcHLT:2
            customGoal:BUeeHNSPBMcHXIZGPHe:2
            customGoal:BUeeHNSPBMcHXIHLT:2
            customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2">
                    <div id="property_description_content">
                        <p>Hanya 5 menit jalan kaki dari pasar Sudirman, Hotel Kini Pontianak yang memiliki 2 restoran ini menawarkan penginapan modern. Anda dapat menikmati layanan pijat yang memanjakan di spa. Tersedia akses Wi-Fi gratis di seluruh areanya.</p>
                        <p>Didekorasi dengan warna coklat, kamar ber-AC di Hotel Kini Pontianak memiliki TV kabel layar datar, ketel listrik, dan kulkas. Tersedia juga area tempat duduk untuk bersantai. Kamar mandi dalamnya dilengkapi dengan shower dan satu set perlengkapan mandi gratis.</p>
                        <p>Hotel ini hanya berselang 2 menit jalan kaki dari stadion Kebun Sayur dan 20 menit berkendara dari bandara Supadio.</p>
                        <p>Resepsionis yang buka 24 jam dapat membantu anda mengatur penyewaan mobil dan antar-jemput bandara dengan tambahan biaya. Layanan binatu dan fasilitas karaoke juga tersedia.</p>
                        <p>Golden Palace Restaurant menyajikan masakan Cina, sedangkan Blue Saphire Caf&eacute; menawarkan beragam hidangan Asia. Makanan juga dapat dikirim ke kamar Anda</p>
                    </div>
                </div>
                <p class="hp-desc-review-highlight">Akomodasi ini juga berada di salah satu kawasan paling favorit di Pontianak! Tamu lebih senang di sini dibandingkan dengan di akomodasi lain di area yang sama.</p>
                <p class="hp-desc-review-highlight hp-desc-traveller-type--ph-v0">Pasangan paling suka lokasinya &mdash; mereka memberi nilai&nbsp;<strong>8,3</strong>&nbsp;untuk perjalanan dua orang.</p>
                <p class="hp-desc-review-highlight">Akomodasi ini juga dinilai memiliki harga terbaik di Pontianak! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota ini.</p>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 18,
                'id_lama' => 18,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Metro",
                'address' => 'Jl. Perdana',
                'latitude' => '-0.019572',
                'longitude' => '109.33945900000003',
                'phone' => '(0561) 8176671',
                'email' => 'metro@email.com',
                'district' => 'Pontianak Barat',
                'created_at' => '2019-06-24 01:58:33',
                'updated_at' => '2019-06-24 01:59:07',
                'deleted_at' => '2019-06-24 01:59:07',
                'description' => "<p>Hotel terbaik di Jalan Perdana</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id,
            ),

            array(
                'id' => 24,
                'id_lama' => 24,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Kini Pontianak",
                'address' => 'Jl. Nusa Indah III, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.025633',
                'longitude' => '109.33917700000006',
                'phone' => '0857-8784-7756',
                'email' => NULL,
                'district' => 'Pontianak Barat',
                'created_at' => '2019-07-08 20:14:30',
                'updated_at' => '2019-07-08 23:30:44',
                'deleted_at' => NULL,
                'description' => "<p>Hanya 5 menit jalan kaki dari pasar Sudirman,&nbsp;<em>Hotel Kini Pontianak</em>&nbsp;yang memiliki 2 restoran ini menawarkan penginapan modern</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 25,
                'id_lama' => 25,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Golden Tulip Pontianak",
                'address' => 'Jalan Teuku Umar No.39, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78117',
                'latitude' => '-0.031243',
                'longitude' => '109.33486300000004',
                'phone' => '(0561) 6597889',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 20:17:27',
                'updated_at' => '2019-07-10 19:03:05',
                'deleted_at' => NULL,
                'description' => "<p>Golden Tulip Pontianak terletak di Pontianak, menawarkan sebuah kolam renang outdoor dan akses WiFi gratis di seluruh arenya. Taman Alun Kapuas berjarak hanya 5 menit berkendara dari hotel.</p>
                <p>Masing-masing kamar ber-AC di hotel ini menyediakan TV kabel layar datar, brankas pribadi, dan area tempat duduk. Kulkas dan minibar juga ada. Kamar mandi pribadinya menawarkan shower, jubah mandi, dan perlengkapan mandi gratis. Anda dapat menikmati pemandangan kota dari kamar.</p>
                <p>Di Golden Tulip Pontianak Anda akan menemukan meja depan 24 jam yang dapat membantu Anda dengan layanan binatu, dry cleaning, dan menyetrika. Layanan pramutamu dapat membantu Anda dengan fasilitas penitipan bagasi, selain itu Anda juga dapat menggunakan pusat bisnis sesuai dengan kebutuhan Anda. Fasilitas lain yang ditawarkan di hotel antara lain fasilitas rapat/perjamuan, pusat kebugaran, dan Dedari Spa and Wellness Centre. Hotel ini menawarkan tempat parkir gratis.</p>
                <p>Branche Restaurant, Bar &amp; Lounge buka untuk bersantap sepanjang hari, dan menyajikan berbagai hidangan Indonesia dan barat yang lezat, sedangkan makanan ringan dan minuman yang menyegarkan dapat dinikmati di Copacabana Pool Lounge.</p>
                <p>Hotel ini berjarak 10 menit berkendara dari Ayani Mega Mall dan 20 menit berkendara dari Bandara Supadio.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 4')->first()->id
            ),

            array(
                'id' => 26,
                'id_lama' => 26,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Orchardz Hotel Ayani Pontianak",
                'address' => 'Jl. Perdana No.8, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124, Indonesia',
                'latitude' => '-0.05324',
                'longitude' => '109.34419600000001',
                'phone' => '62 561 576 888',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 20:19:39',
                'updated_at' => '2019-07-10 19:18:42',
                'deleted_at' => NULL,
                'description' => `<div id="summary" class="" data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1 customGoal:BUeeHNSPdMPISWXGBbLPYO:1
            customGoal:BUeeHNSPBAcHLT:1
            customGoal:BUeeHNSPBAcTVWZffIBXO:1
            customGoal:BUeeHNSPMWdMOdUBMHT:1
            customGoal:BUeeHNSPdQEeWFWZTDWFC:1
            customGoal:BUeeHNSPMWdMOdUEXXO:1
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:1
            customGoal:BUeeHNSPBMcHXIZGPHe:1
            customGoal:BUeeHNSPBMcHXIHLT:1
            customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1" data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2 customGoal:BUeeHNSPdMPISWXGBbLPYO:2
            customGoal:BUeeHNSPBAcHLT:2
            customGoal:BUeeHNSPBAcTVWZffIBXO:2
            customGoal:BUeeHNSPMWdMOdUBMHT:2
            customGoal:BUeeHNSPdQEeWFWZTDWFC:2
            customGoal:BUeeHNSPMWdMOdUEXXO:2
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:2
            customGoal:BUeeHNSPBMcHXIZGPHe:2
            customGoal:BUeeHNSPBMcHXIHLT:2
            customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2">
                    <div id="property_description_content">
                        <p>Orchardz Hotel Ayani Pontianak menawarkan pusat kebugaran dan layanan kamar 24 jam. Kamar-kamar ber-AC-nya yang modern memiliki TV layar datar dan Wi-Fi gratis. Hanya dibutuhkan waktu 15 menit berkendara dari Bandara Supadio. Tersedia parkir gratis.</p>
                        <p>Semua kamarnya dilengkapi dengan minibar dan pembuat teh/kopi. Kamar mandi pribadinya dilengkapi dengan shower dan perlengkapan mandi.</p>
                        <p>Orchardz Hotel Ayani Pontianak berada dalam jarak berjalan kaki ke mal-mal perbelanjaan dan 20 menit berkendara dari Menara Khatulistiwa. Antar-jemput bandara dapat diatur dengan biaya tambahan.</p>
                        <p>Anda dapat menikmati kenyamanan pusat bisnis dan ruang pertemuan. Koran dan layanan penyewaan mobil disediakan di meja depan.</p>
                        <p>Ritz Cafe menyajikan hidangan Asia dan Barat, sementara Bumbu Desa Restaurant menawarkan masakan otentik Indonesia. Minuman dan makanan ringan dapat dinikmati di Lobby Lounge.</p>
                    </div>
                </div>
                <p class="hp-desc-review-highlight">Akomodasi ini juga dinilai memiliki harga terbaik di Pontianak! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota ini.</p>`,
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 27,
                'id_lama' => 27,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Merpati",
                'address' => 'Jl. Imam Bonjol No.60, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112',
                'latitude' => '-0.047178',
                'longitude' => '109.35501699999998',
                'phone' => '(0561) 745481',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 20:22:23',
                'updated_at' => '2019-07-08 20:22:23',
                'deleted_at' => NULL,
                'description' => "<p>Merpati Hotel terletak di Pontianak, menawarkan kamar-kamar simpel yang ber-AC dengan pemandangan kota. Hotel ini memiliki restoran, juga menyediakan meja depan 24 jam dan akses Wi-Fi gratis di area umumnya.</p>
                <p>Kamar-kamar di Hotel Merpati dilengkapi dengan TV, AC, dan meja. Area tempat duduk, sofa, dan brankas juga tersedia di kamar. Kamar mandi dalamnya menawarkan shower atau bathtub, dan perlengkapan mandi gratis.</p>
                <p>Mahoni Restaurant menyajikan aneka masakan Indonesia, selain itu layanan kamar juga tersedia. Pilihan lainnya, Anda dapat menemukan RM Simpang Ampat yang menyediakan makanan Padang, terletak sejauh 10 menit berkendara.</p>
                <p>Layanan binatu dan bagasi tersedia dengan biaya tambahan. Staf di hotel dapat membantu dengan layanan antar-jemput bandara. Tempat parkir gratis tersedia di hotel.</p>
                <p>Hotel ini berjarak 10 menit berkendara dari Megamall Pontianak, 15 menit berkendara dari pusat kota Pontianak serta Alun-Alun Kapuas, dan 30 menit berkendara dari Tugu Khatulistiwa. Bandara Internasional Supadio dapat dicapai dalam 25 menit berkendara dari hotel.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 4')->first()->id
            ),

            array(
                'id' => 28,
                'id_lama' => 28,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Richard's Home",
                'address' => 'Jl. Media No.4, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.04998722454402722',
                'longitude' => '109.34817537913318',
                'phone' => '(0561) 8175110',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 20:26:58',
                'updated_at' => '2019-07-11 17:01:31',
                'deleted_at' => NULL,
                'description' => "<p>Richard's Home sebuah hunian yang berlokasi di Pontianak. Suasana ruangan yang bersih dan nyaman, cocok bagi Anda yang akan berlibur atau mengadakan kunjungan bisnis. Lokasi yang strategis sehingga mudah untuk diakses, dan harga yang terjangkau bisa menjadi pilihan akomodasi perjalanan Anda.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Wisma')->first()->id
            ),

            array(
                'id' => 29,
                'id_lama' => 29,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Gajahmada",
                'address' => 'Jl. Gajah Mada No.177-183, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.034396',
                'longitude' => '109.34150399999999',
                'phone' => '(0561) 761598',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 20:30:05',
                'updated_at' => '2019-07-10 19:50:50',
                'deleted_at' => NULL,
                'description' => '<div id="summary" class="" data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1 customGoal:BUeeHNSPdMPISWXGBbLPYO:1
            customGoal:BUeeHNSPBAcHLT:1
            customGoal:BUeeHNSPBAcTVWZffIBXO:1
            customGoal:BUeeHNSPMWdMOdUBMHT:1
            customGoal:BUeeHNSPdQEeWFWZTDWFC:1
            customGoal:BUeeHNSPMWdMOdUEXXO:1
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:1
            customGoal:BUeeHNSPBMcHXIZGPHe:1
            customGoal:BUeeHNSPBMcHXIHLT:1
            customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1" data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2 customGoal:BUeeHNSPdMPISWXGBbLPYO:2
            customGoal:BUeeHNSPBAcHLT:2
            customGoal:BUeeHNSPBAcTVWZffIBXO:2
            customGoal:BUeeHNSPMWdMOdUBMHT:2
            customGoal:BUeeHNSPdQEeWFWZTDWFC:2
            customGoal:BUeeHNSPMWdMOdUEXXO:2
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:2
            customGoal:BUeeHNSPBMcHXIZGPHe:2
            customGoal:BUeeHNSPBMcHXIHLT:2
            customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2">
                    <div id="property_description_content">
                        <p>Hotel Gajah Mada memiliki pusat kebugaran, 2 tempat bersantap dan fasilitas karaoke. Hotel ini menyediakan kamar-kamar modern ber-AC dengan bathtub dan Wi-Fi gratis di seluruh area hotel. Layanan antar-jemput bandara tersedia berdasarkan permintaan.</p>
                        <p>Hotel ini berjarak 15 menit berkendara dari Mega Mall Pontianak dan 30 menit dari Bandara Internasional Supadio. Kampung tradisional Dayak dan Museum Kalimantan Barat dapat dijangkau dengan berkendara 15 menit.</p>
                        <p>Kamar-kamar Hotel Gajah Mada menampilkan pencahayaan hangat dan seprai yang baru dicuci. Semua kamar menawarkan meja kerja, TV, dan perlengkapan mandi gratis. Sebagian kamar dilengkapi TV layar datar, area tempat duduk, dan menampilkan pemandangan kota.</p>
                        <p>Gladden Coffee Shop menyajikan menu internasional, juga masakan khas lokal. G Lounge menyajikan makanan ringan dan minuman, lengkap dengan fasilitas karaoke dan pertunjukan musik live. Anda juga dapat bersantap dalam kenyamanan kamar.</p>
                        <p>Meja layanan wisata di Hotel Gajah Mada dapat membantu Anda mengatur perjalanan ke tempat-tempat wisata. Hotel ini menyediakan fasilitas penyewaan mobil jika Anda ingin menjelajahi daerah sekitar. Layanan lain yang disediakan oleh hotel ini termasuk binatu dan penukaran mata uang.</p>
                    </div>
                </div>
                <p class="hp-desc-review-highlight">Akomodasi ini juga berada di salah satu kawasan paling favorit di Pontianak! Tamu lebih senang di sini dibandingkan dengan di akomodasi lain di area yang sama.</p>
                <p class="hp-desc-review-highlight hp-desc-traveller-type--ph-v0">Pasangan paling suka lokasinya &mdash; mereka memberi nilai&nbsp;<strong>8,8</strong>&nbsp;untuk perjalanan dua orang.</p>
                <p class="hp-desc-review-highlight">Akomodasi ini juga dinilai memiliki harga terbaik di Pontianak! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota ini.</p>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 30,
                'id_lama' => 30,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Grand Mahkota Hotel",
                'address' => 'Jl. Sidas No.8, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.022007',
                'longitude' => '109.33548999999994',
                'phone' => '(0561) 736022',
                'email' => NULL,
                'district' => 'Pontianak Barat',
                'created_at' => '2019-07-08 20:36:33',
                'updated_at' => '2019-07-08 20:36:33',
                'deleted_at' => NULL,
                'description' => '<div id="summary" class="" data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1 customGoal:BUeeHNSPdMPISWXGBbLPYO:1
            customGoal:BUeeHNSPBAcHLT:1
            customGoal:BUeeHNSPBAcTVWZffIBXO:1
            customGoal:BUeeHNSPMWdMOdUBMHT:1
            customGoal:BUeeHNSPdQEeWFWZTDWFC:1
            customGoal:BUeeHNSPMWdMOdUEXXO:1
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:1
            customGoal:BUeeHNSPBMcHXIZGPHe:1
            customGoal:BUeeHNSPBMcHXIHLT:1
            customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1" data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2 customGoal:BUeeHNSPdMPISWXGBbLPYO:2
            customGoal:BUeeHNSPBAcHLT:2
            customGoal:BUeeHNSPBAcTVWZffIBXO:2
            customGoal:BUeeHNSPMWdMOdUBMHT:2
            customGoal:BUeeHNSPdQEeWFWZTDWFC:2
            customGoal:BUeeHNSPMWdMOdUEXXO:2
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:2
            customGoal:BUeeHNSPBMcHXIZGPHe:2
            customGoal:BUeeHNSPBMcHXIHLT:2
            customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2">
                    <div id="property_description_content">
                        <p>Grand Mahkota Hotel Pontianak memiliki meja depan yang buka 24 jam, dan berjarak 5 menit berkendara dari Jembatan Kapuas yang terkenal. Hotel ini menyediakan tempat parkir gratis dan menawarkan akses Wi-Fi gratis di seluruh areanya.</p>
                        <p>Kamar-kamar ber-AC yang modern memiliki lantai berkarpet, juga menyediakan TV kabel layar datar, ketel listrik, dan area tempat duduk. Minibar dan fasilitas membuat teh/kopi juga tersedia di kamar. Kamar mandi dalamnya menawarkan bathtub, shower, dan perlengkapan mandi gratis.</p>
                        <p>Staf pramutamu dapat membantu dengan layanan penitipan bagasi, antar-jemput bandara, dan mengatur pertemuan/perjamuan. Anda juga dapat menikmati layanan parkir valet gratis yang nyaman. Fasilitas lain yang ditawarkan meliputi layanan tiket, meja layanan wisata, dan pusat bisnis dengan layanan faks/fotokopi. Layanan pijat untuk relaksasi tersedia berdasarkan permintaan.</p>
                        <p>Sukadana Coffee Shop, yang juga memiliki restoran, menawarkan berbagai hidangan lezat untuk Anda pilih. Aneka minuman tersedia di Lobby Lounge &amp; Executive Karaoke Lounge.</p>
                        <p>Jika Anda datang melalui Bandara Supadio, hotel ini dapat dicapai dalam 25 menit berkendara.</p>
                    </div>
                </div>
                <p class="hp-desc-review-highlight hp-desc-traveller-type--ph-v0">Pasangan paling suka lokasinya &mdash; mereka memberi nilai&nbsp;<strong>8,1</strong>&nbsp;untuk perjalanan dua orang.</p>
                <p class="hp-desc-review-highlight">Akomodasi ini juga dinilai memiliki harga terbaik di Pontianak! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota ini.</p>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 31,
                'id_lama' => 31,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Grand Hotel Pontianak",
                'address' => 'Jalan Gajah Mada No.71-73, Benua Melayu Darat, Pontianak Selatan, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.03313',
                'longitude' => '109.34049099999993',
                'phone' => '(0561) 8121663',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 20:42:14',
                'updated_at' => '2019-07-11 14:39:12',
                'deleted_at' => NULL,
                'description' => "<p>Grand Hotel Wijaya Pontianak merupakan salah satu hotel berbintang 2 di Pontianak, Hotel ini terletak di salah satu tempat yang strategis, suasana alam yang indah, nyaman dan juga sangat bersih. Hotel Grand Hotel Wijaya Pontianak sangat banyak diminati oleh wisatawan saat mereka berlibur ke Pontianak. Grand Hotel Wijaya Pontianak merupakan hotel idaman bagi mereka yang sedang liburan keluarga, menghadiri acara bisnis dan juga sangat cocok untuk mereka yang sedang ingin berbulan madu, selain harganya yang relatif murah dan terjangkau untuk semua kalangan, hotel ini mempunyai fasilitas yang sangat lengkap. Hotel Grand Hotel Wijaya Pontianak bisa menjadi pilihan yang tepat untuk anda yang sedang mencari penginapan di Pontianak.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 2')->first()->id
            ),

            array(
                'id' => 32,
                'id_lama' => 32,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Mercure Pontianak City Center",
                'address' => 'Jalan Jenderal Ahmad Yani No.91 Bangka Belitung Laut South Pontianak, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124',
                'latitude' => '-0.052751',
                'longitude' => '109.34682499999997',
                'phone' => '(0561) 577888',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 20:46:03',
                'updated_at' => '2019-07-08 20:46:03',
                'deleted_at' => NULL,
                'description' => '<div id="summary" class="" data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1 customGoal:BUeeHNSPdMPISWXGBbLPYO:1
            customGoal:BUeeHNSPBAcHLT:1
            customGoal:BUeeHNSPBAcTVWZffIBXO:1
            customGoal:BUeeHNSPMWdMOdUBMHT:1
            customGoal:BUeeHNSPdQEeWFWZTDWFC:1
            customGoal:BUeeHNSPMWdMOdUEXXO:1
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:1
            customGoal:BUeeHNSPBMcHXIZGPHe:1
            customGoal:BUeeHNSPBMcHXIHLT:1
            customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1" data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2 customGoal:BUeeHNSPdMPISWXGBbLPYO:2
            customGoal:BUeeHNSPBAcHLT:2
            customGoal:BUeeHNSPBAcTVWZffIBXO:2
            customGoal:BUeeHNSPMWdMOdUBMHT:2
            customGoal:BUeeHNSPdQEeWFWZTDWFC:2
            customGoal:BUeeHNSPMWdMOdUEXXO:2
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:2
            customGoal:BUeeHNSPBMcHXIZGPHe:2
            customGoal:BUeeHNSPBMcHXIHLT:2
            customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2">
                    <div id="property_description_content">
                        <p>Mercure Pontianak City Centre menawarkan akomodasi kontemporer di Kalimantan Barat, berjarak hanya 15 menit berkendara dari Bandara Internasional Supadio. Hotel ini menyediakan akses Wi-Fi gratis, spa dengan perawatan wajah dan tubuh, dan kolam renang outdoor.</p>
                        <p>Kamar-kamar di Mercure memadukan dekorasi tradisional dengan perabot desainer. Masing-masing dilengkapi AC dan saluran TV satelit. Terdapat juga area untuk duduk bersantai yang luas dan kamar mandi pribadi dengan pengering rambut dan mantel mandi.</p>
                        <p>Ebony Restaurant and Bar menyajikan perpaduan antara hidangan Asia, Indonesia Barat, dan otentik, dengan dapur terbuka yang menarik.</p>
                        <p>Fasilitas lain di Mercure Pontianak City Center termasuk gym yang lengkap dan layanan antar-jemput bandara.</p>
                        <p>Terletak dekat dengan kompleks pusat perbelanjaan terbesar di Kalimantan Barat, hotel ini menawarkan banyak pilihan tempat berbelanja dan hiburan. Tersedia juga tempat parkir pribadi gratis di lokasinya.</p>
                    </div>
                </div>
                <p class="hp-desc-review-highlight hp-desc-traveller-type--ph-v0">Pasangan paling suka lokasinya &mdash; mereka memberi nilai&nbsp;<strong>8,1</strong>&nbsp;untuk perjalanan dua orang.</p>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 33,
                'id_lama' => 33,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Transera Hotel Pontianak",
                'address' => 'Jl. Gajah Mada, Gajah Mada 21, Pusat Kota Pontianak, Pontianak, Indonesia 78121.',
                'latitude' => '-0.035494',
                'longitude' => '109.34431100000006',
                'phone' => '(0561) 570555',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 20:49:50',
                'updated_at' => '2019-07-10 19:38:31',
                'deleted_at' => NULL,
                'description' => '<div id="summary" class="" data-et-mouseenter="customGoal:BUeeZaTaTaBEKMPXLae:1 customGoal:BUeeHNSPdMPISWXGBbLPYO:1
            customGoal:BUeeHNSPBAcHLT:1
            customGoal:BUeeHNSPBAcTVWZffIBXO:1
            customGoal:BUeeHNSPMWdMOdUBMHT:1
            customGoal:BUeeHNSPdQEeWFWZTDWFC:1
            customGoal:BUeeHNSPMWdMOdUEXXO:1
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:1
            customGoal:BUeeHNSPBMcHXIZGPHe:1
            customGoal:BUeeHNSPBMcHXIHLT:1
            customGoal:BUeeHNSPCaASBaRDSGEXO:1 customGoal:BUeeZdbaBMRbBYWKOBLHXT:1" data-et-click="customGoal:BUeeZaTaTaBEKMPXLae:2 customGoal:BUeeHNSPdMPISWXGBbLPYO:2
            customGoal:BUeeHNSPBAcHLT:2
            customGoal:BUeeHNSPBAcTVWZffIBXO:2
            customGoal:BUeeHNSPMWdMOdUBMHT:2
            customGoal:BUeeHNSPdQEeWFWZTDWFC:2
            customGoal:BUeeHNSPMWdMOdUEXXO:2
            customGoal:BUeeHNSPdQEeXXaNSPRXXe:2
            customGoal:BUeeHNSPBMcHXIZGPHe:2
            customGoal:BUeeHNSPBMcHXIHLT:2
            customGoal:BUeeHNSPCaASBaRDSGEXO:2 customGoal:BUeeZdbaBMRbBYWKOBLHXT:2">
                    <div id="property_description_content">
                        <p>Transera Hotel Pontianak terletak di pusat Kota Khatulistiwa di jalan Gajah Mada 21. Hotel ini memiliki restoran, spa, dan restoran di puncak gedung. Kamar-kamarnya menampilkan interior modern dan dilengkapi AC.</p>
                        <p>Semua kamar di Transera Hotel Pontianak menampilkan dekorasi yang stylish, dengan penerangan yang lembut dan karya seni bertema. Tersedia TV satelit layar datar di semua kamar. Beberapa kamar menyuguhkan pemandangan kota dan memiliki area untuk duduk bersantai terpisah dengan sofa. Kamar mandi pribadinya menyediakan shower dan perlengkapan mandi gratis.</p>
                        <p>Transera Hotel Pontianak berjarak sekitar 10 menit berkendara dari Ahmad Yani Mall dan Pelabuhan Dwikora. Bandara Soepadio dapat dijangkau dengan 20 menit berkendara, sementara Tugu Khatulistiwa dapat dicapai dengan 25 menit berkendara. Layanan antar-jemput bandara tersedia berdasarkan permintaan dan dikenakan biaya tambahan.</p>
                        <p>Grand River-X Spa and Health Centre yang berada di lantai 2 menawarkan sauna serta whirlpool dengan air panas dan dingin. Layanan lain yang tersedia meliputi layanan binatu, penyewaan mobil, dan layanan pijat. Staf bagian penerima tamu siap memenuhi kebutuhan Anda 24 jam setiap hari. Anda juga dapat memeriksa email di pusat bisnis.</p>
                        <p>TeraSky Restaurant di puncak gedung menyajikan beragam hidangan khas Indonesia dan Barat dalam suasana bersantap indoor dan outdoor, serta menyuguhkan pemandangan kota dan sungai Kapuas. Anda dapat menikmati makan malam sambil menyaksikan pemandangan lampu-lampu kota, atau bersantap di dalam kamar Anda dengan nyaman.</p>
                    </div>
                </div>
                <p class="hp-desc-review-highlight hp-desc-traveller-type--ph-v0">Pasangan paling suka lokasinya &mdash; mereka memberi nilai&nbsp;<strong>8,1</strong>&nbsp;untuk perjalanan dua orang.</p>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 34,
                'id_lama' => 34,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Santika Pontianak GM",
                'address' => 'Jl. Gajah Mada No.65, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.027714',
                'longitude' => '109.341629',
                'phone' => '(0561) 769622',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:11:21',
                'updated_at' => '2019-07-10 02:22:59',
                'deleted_at' => '2019-07-10 02:22:59',
                'description' => "<p>Hotel Santika Pontianak, salah satu hotel terbaik di kota, berlokasi strategis di jantung pusat bisnis, perdagangan, dan kawasan perbelanjaan. Hotel ini menawarkan 129 kamar dan suite yang dirancang khusus dan dilengkapi dengan fasilitas modern dan layanan professional. Sebuah akomodasi yang tepat bagi liburan dan bisnis Anda di Pontianak.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 36,
                'id_lama' => 36,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Green Leaf Inn",
                'address' => 'Jl. Gajah Mada No.65, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.031398',
                'longitude' => '109.33975399999997',
                'phone' => '(0561) 769622',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:13:29',
                'updated_at' => '2019-07-10 17:51:49',
                'deleted_at' => NULL,
                'description' => "<p>Akomodasi Green Leaf Inn terletak di Pontianak. Hotel transit bagi para wisatawan yang ingin wisata ataupun perjalanan bisnis. Kamar-kamar tamu yang nyaman tersedia dengan fasilitas lengkap yang baik untuk memenuhi kebutuhan para tamu. Adanya Green Leaf Coffee Shop dan restoran yang menyajikan masakan Indonesia.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 37,
                'id_lama' => 37,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Surya",
                'address' => 'Jl. Sidas No.11A, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.021257',
                'longitude' => '109.33597600000007',
                'phone' => '(0561) 734337',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:20:59',
                'updated_at' => '2019-07-10 17:53:33',
                'deleted_at' => NULL,
                'description' => "<p>Akomodasi yang tak kalah nyaman dan terjangkau. Hotel Surya Pontianak sebuah penginapan yang luar biasa berlokasi strategis. Pilihan yang fantastis untuk mendapatkan pengalaman yang tidak terlupakan. Nikmati layanan professional, penuh perhatian, dan ramah demi kenyamanan Anda selama menginap.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 38,
                'id_lama' => 38,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Kapuas Dharma",
                'address' => 'Jl. Imam Bonjol No.89, Benua Melayu Laut, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.042362',
                'longitude' => '109.34984199999997',
                'phone' => '(0561) 766669',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 23:23:32',
                'updated_at' => '2019-07-10 19:26:47',
                'deleted_at' => NULL,
                'description' => "<p>Terletak di tengah kota Pontianak, Hotel Kapuas Dharma menyediakan pelayanan yang ramah dan fasilitas modern. Kami menjamin masa menginap yang menyenangkan bagi para tamu dengan layanan kami yang personal dan berbagai macam fasilitas modern yang tersedia di hotel kami.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 39,
                'id_lama' => 39,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Star Hotel Pontianak",
                'address' => 'Jl. Gajah Mada No.189, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.039027',
                'longitude' => '109.34304999999995',
                'phone' => '0819-7774-0661',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:26:33',
                'updated_at' => '2019-07-10 17:57:03',
                'deleted_at' => NULL,
                'description' => "<p>Star Hotel adalah akomodasi bintang 3 terdiri dari 90 kamar dengan bangunan modern menghadirkan suasana yang hangat. Terletak strategis di kota Pontianak menawarkan akses mudah ke setiap tempat-tempat menarik yang wajib dikunjungi. Tersedia beragam fasilitas dan layanan terbaik untuk menambah kenyaman Anda.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 40,
                'id_lama' => 40,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Grand Kartika Hotel",
                'address' => 'Jl. Rahadi Usman, Tengah, Pontianak Kota, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.020972',
                'longitude' => '109.33866999999998',
                'phone' => '(0561) 734401',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:28:58',
                'updated_at' => '2019-07-10 17:58:50',
                'deleted_at' => NULL,
                'description' => "<p>Grand Kartika Hotel berlokasi di Pontianak letaknya di samping &ldquo;Sungai Kapuas&rdquo; dengan nuansa yang romantis dan nyaman untuk bersantai sejenak bersama pasangan atau keluarga. Dapatkan kenyamanan menginap dan nikmatnya sajian makanan istimewa dari Grand Kartika Hotel. Untuk memberikan kenyamanan bagi tamu beristirahat, kami menyediakan kamar dengan fasilitas lengkap &amp; modern.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 41,
                'id_lama' => 41,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Sentosa Guest House",
                'address' => 'Gang 4 No.83, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.031385',
                'longitude' => '109.34270700000002',
                'phone' => '(0561) 576896',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:31:45',
                'updated_at' => '2019-07-10 18:11:58',
                'deleted_at' => NULL,
                'description' => "<p>Sentosa Guest House sebuah hunian yang berlokasi di Pontianak. Suasana ruangan yang bersih dan nyaman, cocok bagi Anda yang akan berlibur atau mengadakan kunjungan bisnis. Lokasi yang strategis sehingga mudah untuk diakses, dan harga yang terjangkau bisa menjadi pilihan akomodasi perjalanan Anda.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Guest House')->first()->id
            ),

            array(
                'id' => 42,
                'id_lama' => 42,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "OYO 899 Gold Line Guest House",
                'address' => 'Jl. Adi Sucipto, Darat Sekip, Kec. Sungai Raya, Kota Pontianak, Kalimantan Barat 78233',
                'latitude' => '-0.102418',
                'longitude' => '109.40779799999996',
                'phone' => '(021) 8063006',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:33:38',
                'updated_at' => '2019-07-11 16:47:17',
                'deleted_at' => NULL,
                'description' => "<p>OYO 899 Gold Line Guest House is located in the heart of the business area of Pontianak Which is safe, comfortable, away from the noise of city and suitable for businessman and expatriates.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Guest House')->first()->id
            ),

            array(
                'id' => 43,
                'id_lama' => 43,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "G-Hotel Pontianak",
                'address' => 'Jl. Jendral Urip No.73, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.025459',
                'longitude' => '109.333302',
                'phone' => '(0561) 762932',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:36:26',
                'updated_at' => '2019-07-10 19:04:23',
                'deleted_at' => NULL,
                'description' => "<p>Sebuah penginapan dengan bangunan modern tersedia nya 50 kamar bisa menampung tamu lebih banyak. Semua kamar di desain secara modern minimalis dan furniture yang berkualitas menambah kenyamanan Anda Selama menginap. Berlokasi strategis menawarkan akses mudah ke setiap tempat menarik yang ingin dikunjungi.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 44,
                'id_lama' => 44,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Merpati",
                'address' => 'Jl. Imam Bonjol No.60, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112',
                'latitude' => '-0.047239',
                'longitude' => '109.35501699999998',
                'phone' => '(0561) 745481',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:38:07',
                'updated_at' => '2019-07-08 23:39:04',
                'deleted_at' => '2019-07-08 23:39:04',
                'description' => "<p>Akomodasi yang berlantai 3 terdiri dari 173 kamar dengan bangunan semi modern menghadirkan suasana yang lain. Terletak strategis di kota Pontianak menawarkan akses mudah ke setiap tempat-tempat menarik yang dikunjungi. Tersedia beragam fasilitas dan layanan terbaik menambah kenyaman Anda.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 45,
                'id_lama' => 45,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Garuda Hotel",
                'address' => 'Jl. Pahlawan No.40, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.039504',
                'longitude' => '109.34760200000005',
                'phone' => '(0561) 736890',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:41:20',
                'updated_at' => '2019-07-10 19:06:14',
                'deleted_at' => NULL,
                'description' => "<p>Terletak di tengah kota Pontianak, Garuda Hotel Pontianak menyediakan pelayanan yang ramah dan fasilitas modern. Kami menjamin masa menginap yang menyenangkan bagi para tamu dengan layanan kami yang personal dan berbagai macam fasilitas modern yang tersedia di hotel kami.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 46,
                'id_lama' => 46,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Harmony In & Karaoke",
                'address' => 'Jl. Sungai Raya Dalam No.79, Sungai Raya, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat 78116',
                'latitude' => '-0.09275',
                'longitude' => '109.34732800000006',
                'phone' => '(0561) 712170',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:43:32',
                'updated_at' => '2019-07-10 18:16:47',
                'deleted_at' => NULL,
                'description' => "<p>Hotel Harmony di ini terletak di daerah Pontianak yang tenang. Menawarkan semua jenis tamu dengan layanan yang luar biasa dan berbagai fasilitas, Hotel Harmony In akan memastikan bahwa tinggal Anda senyaman mungkin. Hotel ini menawarkan berbagai fasilitas modern dan Fasilitas untuk memenuhi semua jenis tamu.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 47,
                'id_lama' => 47,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Airy Eco",
                'address' => 'Jl. Reformasi Gang Teknik No.2, Bansir Darat, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78115',
                'latitude' => '-0.065042',
                'longitude' => '109.33798300000001',
                'phone' => '0804 111 2479',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-08 23:45:22',
                'updated_at' => '2019-07-11 16:51:30',
                'deleted_at' => NULL,
                'description' => "<p>Airy Eco Pontianak Tenggara Reformasi Gang Teknik 2 hunian yang bersih dan nyaman tidak harus menguras isi kantong, cocok bagi Anda yang akan berlibur atau mengadakan kunjungan bisnis. Lokasi yang strategis sehingga mudah untuk diakses dengan fasilitas yang akan membuat pengalaman menginap Anda tidak terlupakan.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 48,
                'id_lama' => 48,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Gardenia Resort and Spa",
                'address' => 'Jl. Ahmad Yani II, Arang Limbung, Kec. Sungai Raya, Kabupaten Kubu Raya, Kalimantan Barat 78391',
                'latitude' => '-0.125393',
                'longitude' => '109.40250000000003',
                'phone' => '(0561) 6726446',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:49:28',
                'updated_at' => '2021-01-11 17:14:24',
                'deleted_at' => '2021-01-11 17:14:24',
                'description' => "<p>Vila pribadi yang mewah dengan konsep rumah panggung seperti rumah traditional di Kalimantan. Memberikan nuansa elegan dan tradisional dan pemandangan taman alami di sekitarnya. Gardenia Resort and Spa menawarkan berbagai pilihan fasilitas olahraga dan rekreasi yang luar biasa seperti kolam renang (anak-anak), layanan pemijatan, kolam renang, dan banyak lagi.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 49,
                'id_lama' => 49,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Harris Hotel Pontianak",
                'address' => 'Jl. Gajah Mada No.150, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.038069',
                'longitude' => '109.34352200000001',
                'phone' => '(0561) 8120888',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:52:07',
                'updated_at' => '2019-07-10 18:24:29',
                'deleted_at' => NULL,
                'description' => "<p>HARRIS Hotel Pontianak adalah hotel bintang 4 modern yang menawarkan pengalaman dengan gaya hidup sehat, dilengkapi dengan fasilitas yang dirancang sesuai dengan kebutuhan Anda. Nikmati pelayanan istimewa dan fasilitas yang unggul akan membuat pengalaman menginap anda tidak terlupakan. Lingkungan yang aman, bersih, dan ramah menambah daya tarik penginapan ini.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 50,
                'id_lama' => 50,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Neo Gajah Mada Pontianak",
                'address' => 'Jalan Gajah Mada No.177, Benua Melayu Darat, Pontianak Selatan, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.038508',
                'longitude' => '109.34305199999994',
                'phone' => '(0561) 8172020',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:53:57',
                'updated_at' => '2019-07-10 18:26:44',
                'deleted_at' => NULL,
                'description' => "<p>Sebuah hunian yang nyaman, bersih, dan desain yang minimalis. Hotel Neo Gajahmada Pontianak menawarkan pelayanan yang istimewa dan fasilitas yang akan membuat pengalaman menginap Anda tidak terlupakan, seperti Wi-Fi gratis di semua kamar, TV, AC, restoran, layanan kebersihan, resepsionis yang ramah, Wi-fi di tempat umum, serta beberapa fasilitas yang lainnya.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 51,
                'id_lama' => 51,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Aston Pontianak Hotel and Convention Center",
                'address' => 'Gg. Gajahmada 21, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.036001',
                'longitude' => '109.34345000000008',
                'phone' => '(0561) 761118',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-08 23:55:48',
                'updated_at' => '2019-07-10 19:09:13',
                'deleted_at' => NULL,
                'description' => "<p>Aston Pontianak Hotel and Convention Center terletak di pusat kota Pontianak, dengan akses mudah dari Bandara dan lokasi-lokasi menarik di Pontianak. Semua Hotel Aston memancarkan rasa kehangatan, keramahan dan kenyamanan sambil memberikan layanan yang tulus dan fasilitas yang memenuhi segala kebutuhan wisatawan seperti ruang pertemuan dengan Wi-Fi, restoran, lounge, kolam renang dan spa.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 52,
                'id_lama' => 52,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Orchardz Hotel Ayani",
                'address' => 'Jl. Perdana No.8, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124',
                'latitude' => '0.053245',
                'longitude' => '109.34419700000001',
                'phone' => '(0561) 576888',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:57:42',
                'updated_at' => '2019-07-09 20:53:11',
                'deleted_at' => '2019-07-09 20:53:11',
                'description' => "<p>Akomodasi yang berlokasi strategis di kota Pontianak dekat dengan pusat bisnis, perkantoran, universitas, pusat perbelanjaan dan bandara. Hotel yang bersih, nyaman dan cukup luas sangat cocok bagi para pelancong yang ingin berbisnis maupun wisata karena menyediakan ruang pertemuan, ruang meeting dan dekat dengan pusat perbelanjaan.</p>
                <p>&nbsp;</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 53,
                'id_lama' => 53,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Maestro Hotel Kota Baru",
                'address' => 'Jl. Slt. Abdurrahman No.72 - 74, Akcaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.03828',
                'longitude' => '109.32989499999996',
                'phone' => '(0561) 8100000',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-08 23:59:37',
                'updated_at' => '2019-07-10 19:11:44',
                'deleted_at' => NULL,
                'description' => "<p>Maestro Hotel Kota Baru adalah pilihan yang cocok untuk Anda dengan kamar fungsi besar dan lengkap untuk memenuhi kebutuhan Anda. Dari acara bisnis untuk corporate gathering, Maestro Hotel Kota Baru menyediakan layanan yang lengkap dan fasilitas yang Anda dan kolega Anda butuhkan. Have fun dengan berbagai fasilitas yang menghibur untuk Anda dan seluruh keluarga di Maestro Hotel Kota Baru.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 54,
                'id_lama' => 54,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Santika Pontianak",
                'address' => 'Jalan Diponegoro No.46 Darat Sekip Pontianak Kota, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78123',
                'latitude' => '-0.027714',
                'longitude' => '109.34162900000001',
                'phone' => '(0561) 733777',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-09 00:03:46',
                'updated_at' => '2019-07-10 17:43:48',
                'deleted_at' => NULL,
                'description' => "<p>Hotel Santika Pontianak menawarkan kolam renang luar ruangan dan sauna, dan juga menyediakan jacuzzi. Menawarkan kamar ber-AC bintang 3 dan restoran yang trendi. Hotel yang modis dan terletak di pusat Pontianak ini menyediakan beragam fasilitas contohnya layanan kamar 24 jam, kolam anak-anak dan parkir valet. Fasilitas untuk korporasi yang tersedia antara lain ruang rapat dan pusat bisnis. Tamu dapat memanfaatkan fasilitas kendaraan antar jemput ke kota dan juga layanan pemesanan tiket masuk ke tempat-tempat wisata yang disediakan pihak hotel.</p>
                <p>Para tamu yang menginap di Hotel Santika Pontianak dapat menikmati kamar mewah yang dilengkapi dengan pembuat teh/kopi, mini bar dan kulkas. Semuanya dilengkapi dengan botol air, TV layar datar dan internet nirkabel (Wi-Fi) di kamar.</p>
                <p>Para tamu yang tinggal di Hotel Santika Pontianak dapat menikmati pengalaman bersantap yang unik di restoran yang ada, berlokasi ideal untuk mereka yang ini ingin tinggal dekat untuk duduk dan bersantap. Pada malam hari, tamu bisa menikmati minuman di lounge bar yang asik. Bandara Internasional Supadio berlokasi kurang dari 30 menit dengan naik mobil dari Hotel Santika Pontianak.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 55,
                'id_lama' => 55,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Ibis Pontianak",
                'address' => 'Jl. Jenderal Ahmad Yani No.81, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.048935',
                'longitude' => '109.34383700000001',
                'phone' => '(0561) 8107888',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-09 00:05:23',
                'updated_at' => '2019-07-10 02:20:39',
                'deleted_at' => NULL,
                'description' => "<p>Ibis Pontianak City Centre di Pontianak menyediakan akomodasi khusus dewasa dengan sepeda gratis, taman, bar, resepsionis 24 jam, layanan kamar, dan penitipan bagasi.</p>
                <p>Kamar-kamarnya dilengkapi dengan AC, TV layar datar dengan saluran satelit, ketel, pancuran, pengering rambut, meja, kamar mandi pribadi, pemandangan kota, serta area tempat duduk.</p>
                <p>Tersedia juga sarapan kontinental dan prasmanan setiap hari serta restoran yang menyajikan masakan Indonesia dan internasional.</p>
                <p>Anda dapat bersepeda di area sekitarnya.</p>
                <p>Fasilitas lainnya adalah penyewaan mobil untuk menjelajahi daerah sekitarnya, pusat bisnis, koran yang tersedia di tempat, serta layanan antar-jemput bandara berbayar.</p>
                <p>ibis Pontianak City Center berjarak 3,4 km dari Ayani Mega Mall dan 16 km dari Bandara Supadio.</p>
                <p>Akomodasi ini juga berada di salah satu kawasan paling favorit di Pontianak! Tamu lebih senang di sini dibandingkan dengan di akomodasi lain di area yang sama.</p>
                <p>Pasangan paling suka lokasinya &mdash; mereka memberi nilai&nbsp;<strong>8,7</strong>&nbsp;untuk perjalanan dua orang.</p>
                <p>Akomodasi ini juga dinilai memiliki harga terbaik di Pontianak! Tamu mendapatkan fasilitas lebih banyak untuk uang yang mereka keluarkan dibandingkan akomodasi lain di kota ini.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 57,
                'id_lama' => 57,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Kapuas Palace Pontianak",
                'address' => 'Jl. Budi Karya, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.042775',
                'longitude' => '109.34788500000002',
                'phone' => '(0561) 736122',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-09 00:07:01',
                'updated_at' => '2019-07-10 17:33:26',
                'deleted_at' => NULL,
                'description' => "<p>Penginapan tenang dan nyaman di Hotel Kapuas Palace Pontianak</p>
                <p>Hotel Kapuas Palace pontianak adalah hotel yang berorientasi untuk keluarga dan MICE di Pontianak , Kalimantan Barat .Ini adalah tempat yang sempurna untuk menikmati pontianak dan sekitarnya dan lokasi yang baik untuk akses ke jalan tempat wisata</p>
                <p>Hotel Kapuas Palace Pontianak menawarkan tempat bermalam yang nyaman dengan pelayanan yang akan membuat kunjungan Anda semakin menyenangkan dan tak terlupakan. Dengan lokasinya yang strategis, tepatnya di Jalan Gajahmada No. 889, Pontianak, dari Bandara Supadio Anda hanya perlu menempuh perjalanan sekitar 26 menit untuk sampai ke lokasi hotel.</p>
                <p>Memiliki 190 unit kamar yang terbagi menjadi beberapa pilihan tipe, setiap kamar di Hotel Kapuas Palace Pontianak didesain dengan balutan desain kontemporer dan perpaduan warna krem yang nyaman dilihat. Di dalamnya, tersedia sejumlah fasilitas seperti kasur yang empuk dan nyaman, TV layar datar dengan saluran local, nasional dan internasional, akses Wifi gratis, meja dan kursi, kamar mandi dengan standing shower, serta perlengkapan mandi.</p>
                <p>Untuk urusan bersantap, Anda tidak perlu bingung karena Hotel Kapuas Palace Pontianak memiliki restoran dengan beragam pilihan menu yang lezat. Agar Anda senantiasa relaks selama berlibur atau melakukan perjalanan bisnis ke Pontianak, tersedia sejumlah fasilitas penunjang seperti kolam renang di luar ruangan. Layanan binatu, serta penitipan bagasi.</p>
                <p>Bagi Anda yang ingin mengadakan kegiatan bisnis, Anda pun tidak perlu khawatir karena Hotel Kapuas Palace Pontianak memiliki fasilitas bisnis dan ruang rapat yang cukup mumpuni. Selain itu, ada juga ballroom untuk mengadakan acara besar seperti seminar atau resepsi pernikahan.</p>
                <p>Untuk pilihan tempat wisata terdekat, Anda bisa berkunjung ke Museum Kalimantan Barat dan Rumah Betang yang berjarak sekitar 7 menit berkendara dari Hotel Kapuas Palace Pontianak. Sedangkan jika ingin berkunjung ke Alun-alun Kapuas, dari hotel Anda perlu menempuh perjalanan sekitar 8 menit untuk sampai ke sana.<br />Berlokasi di Pontianak. Hotel Kapuas Palace Pontianak merupakan tempat yang sempurna untuk menikmati Pontianak dan sekitarnya. Penginapan ini memiliki lokasi yang bagus dan menyediakan akses ke obyek wisata terbesar di kota ini. Dengan lokasinya yang strategis, penginapan ini menawarkan akses mudah ke destinasi yang wajib dikunjungi di kota ini.<br />Hotel Kapuas Palace Pontianak menawarkan tempat bermalam yang nyaman dengan pelayanan yang akan membuat kunjungan Anda semakin menyenangkan dan tak terlupakan. Dengan lokasinya yang strategis, tepatnya di Jalan Gajahmada No. 889, Pontianak, dari Bandara Supadio Anda hanya perlu menempuh perjalanan sekitar 26 menit untuk sampai ke lokasi hotel.</p>
                <p>Memiliki 190 unit kamar yang terbagi menjadi beberapa pilihan tipe, setiap kamar di Hotel Kapuas Palace Pontianak didesain dengan balutan desain kontemporer dan perpaduan warna krem yang nyaman dipandang. Di dalamnya, tersedia sejumlah fasilitas seperti kasur yang empuk dan nyaman, TV layar datar dengan saluran local, nasional dan internasional, akses Wifi gratis, meja dan kursi, kamar mandi dengan standing shower, serta perlengkapan mandi.</p>
                <p>Untuk urusan bersantap, Anda tidak perlu bingung karena Hotel Kapuas Palace Pontianak memiliki restoran dengan beragam pilihan menu yang lezat. Agar Anda senantiasa relaks selama berlibur atau melakukan perjalanan bisnis ke Pontianak, tersedia sejumlah fasilitas penunjang seperti kolam renang di luar ruangan. Layanan binatu, serta penitipan bagasi.</p>
                <p>Bagi Anda yang ingin mengadakan kegiatan bisnis, Anda pun tidak perlu khawatir karena Hotel Kapuas Palace Pontianak memiliki fasilitas bisnis dan ruang rapat yang cukup mumpuni. Selain itu, ada juga ballroom untuk mengadakan acara besar seperti seminar atau resepsi pernikahan.</p>
                <p>Untuk pilihan tempat wisata terdekat, Anda bisa berkunjung ke Museum Kalimantan Barat dan Rumah Betang yang berjarak sekitar 7 menit berkendara dari Hotel Kapuas Palace Pontianak. Sedangkan jika ingin berkunjung ke Alun-alun Kapuas, dari hotel Anda perlu menempuh perjalanan sekitar 8 menit untuk sampai ke sana.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 58,
                'id_lama' => 58,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Mercure Pontianak City Center",
                'address' => 'Jalan Jenderal Ahmad Yani No.91 Bangka Belitung Laut South Pontianak, Bansir Laut, Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124',
                'latitude' => '-0.052756',
                'longitude' => '109.34682999999995',
                'phone' => '(0561) 577888',
                'email' => NULL,
                'district' => NULL,
                'created_at' => '2019-07-09 00:08:47',
                'updated_at' => '2019-07-09 20:55:20',
                'deleted_at' => '2019-07-09 20:55:20',
                'description' => "<p>Mercure Pontianak City Centre menawarkan akomodasi kontemporer di Kalimantan Barat, berjarak hanya 15 menit berkendara dari Bandara Internasional Supadio. Hotel ini menyediakan akses Wi-Fi gratis, spa dengan perawatan wajah dan tubuh, dan kolam renang outdoor.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 80,
                'id_lama' => 80,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Borneo",
                'address' => 'Jalan Merdeka Barat No. 428 Mariana Pontianak Barat, Tengah, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78244',
                'latitude' => '-0.02343',
                'longitude' => '109.32891399999994',
                'phone' => '(0561) 768111',
                'email' => NULL,
                'district' => 'Pontianak Kota',
                'created_at' => '2019-07-10 17:51:24',
                'updated_at' => '2019-07-11 16:01:49',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 81,
                'id_lama' => 81,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Khatulistiwa",
                'address' => 'Jl. Diponegoro No.56, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.028266',
                'longitude' => '109.33963799999992',
                'phone' => '(0561) 736793',
                'email' => NULL,
                'district' => 'Pontianak Kota',
                'created_at' => '2019-07-10 18:02:46',
                'updated_at' => '2019-07-10 18:02:46',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 82,
                'id_lama' => 82,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Duta Inn",
                'address' => 'Jl. Gusti Suluung Lelanang Komp. Pontianak Mall AA 52',
                'latitude' => '-0.032136',
                'longitude' => '109.33464900000001',
                'phone' => '(0561) 769370',
                'email' => NULL,
                'district' => 'Pontianak Kota',
                'created_at' => '2019-07-10 18:19:11',
                'updated_at' => '2019-07-10 18:19:11',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 84,
                'id_lama' => 84,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "GUEST HOUSE MERANTI",
                'address' => 'Jl. Meranti No.31A, Darat Sekip, Kec. Pontianak Kota, Kota Pontianak, Kalimantan Barat 78423',
                'latitude' => '-0.029737',
                'longitude' => '109.33308699999998',
                'phone' => '(0561) 731783',
                'email' => NULL,
                'district' => 'Pontianak Kota',
                'created_at' => '2019-07-10 18:56:53',
                'updated_at' => '2019-07-10 19:48:31',
                'deleted_at' => NULL,
                'description' => "<div>Range Harga (Price)<br /><br /></div>
                <p><br /><br /><br /><br /><br /><br /></p>
                <ul>
                    <li>Ekonomi &nbsp;: IDR.110.000</li>
                    <li>Standard 1 &nbsp;: IDR.130.000</li>
                    <li>Standard 2 : IDR.140.000</li>
                    <li>Superior : IDR.160.000</li>
                </ul>
                <p><br /><br />Fasilitas (Facilities)</p>
                <p>&nbsp;</p>
                <ul>
                    <li>Full Air Conditioner (AC)</li>
                    <li>Morning Tea /Coffee</li>
                    <li>Extra Bed : IDR.70.000</li>
                </ul>
                <p>Reservasi dan Lain-Lain (Reservation &amp; Other)</p>
                <ul>
                    <li>(0561)731783</li>
                </ul>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Guest House')->first()->id
            ),

            array(
                'id' => 85,
                'id_lama' => 85,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Pondok Jaya",
                'address' => 'Jl. 28 Oktober No.89, Siantan Hulu, Pontianak Utara, Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.005849',
                'longitude' => '109.36284799999999',
                'phone' => '(0561) 884234',
                'email' => NULL,
                'district' => 'Pontianak Utara',
                'created_at' => '2019-07-10 19:31:18',
                'updated_at' => '2019-07-10 19:31:18',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 86,
                'id_lama' => 86,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel 2000",
                'address' => 'Jl. Gajah Mada No.84, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.03443289202371308',
                'longitude' => '109.34169744907376',
                'phone' => '(0561) 735062',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-10 19:44:34',
                'updated_at' => '2019-07-10 19:44:34',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 87,
                'id_lama' => 87,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Orchardz Gajahmada",
                'address' => 'Jl. Gajah Mada No.99, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.037554',
                'longitude' => '109.34344899999996',
                'phone' => '(0561) 768999',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-10 19:56:27',
                'updated_at' => '2021-01-12 12:35:28',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 88,
                'id_lama' => 88,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Hijas",
                'address' => 'Jl. Hijas No.106, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78166',
                'latitude' => '-0.03650528432359391',
                'longitude' => '109.3450378277837',
                'phone' => '(0561) 744068',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-10 20:00:21',
                'updated_at' => '2021-01-18 14:09:25',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 89,
                'id_lama' => 89,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Metro Perdana Inn",
                'address' => 'Jalan Perdana No.101, Parit Tokaya, Pontianak Tenggara, Parit Tokaya, Pontianak, Kota Pontianak, Kalimantan Barat 78115',
                'latitude' => '-0.061244',
                'longitude' => '109.33818900000006',
                'phone' => '0812-5542-5230',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2019-07-10 20:09:59',
                'updated_at' => '2019-07-10 20:09:59',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 90,
                'id_lama' => 90,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Wisma Nusantara",
                'address' => 'Jl. Letjend Suprapto No.14, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.038597',
                'longitude' => '109.34173899999996',
                'phone' => '(0561) 736181',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-10 20:13:21',
                'updated_at' => '2019-07-10 20:13:21',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Wisma')->first()->id
            ),

            array(
                'id' => 91,
                'id_lama' => 91,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Mess Graha Dekopinwil Kalbar",
                'address' => 'Jl. Letnan Jendral Sutoyo No.125, Parit Tokaya, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.049314',
                'longitude' => '109.33977800000002',
                'phone' => '(0561) 767229',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2019-07-11 14:26:31',
                'updated_at' => '2019-07-11 14:26:31',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel Bintang 5')->first()->id
            ),

            array(
                'id' => 92,
                'id_lama' => 92,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Benua Mas",
                'address' => 'JL. 28 Oktober, Siantan Hulu, Pontianak Utara, Kota Pontianak, Kalimantan Barat 78242',
                'latitude' => '-0.003333',
                'longitude' => '109.363428',
                'phone' => '(0561) 883210',
                'email' => NULL,
                'district' => 'Pontianak Utara',
                'created_at' => '2019-07-11 14:35:16',
                'updated_at' => '2021-01-06 17:53:18',
                'deleted_at' => NULL,
                'description' => "<p>-</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 111,
                'id_lama' => 111,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel My Home",
                'address' => 'Jl. WR Supratman No.33, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78243',
                'latitude' => '-0.03690360833132633',
                'longitude' => '109.34074777892508',
                'phone' => '(0561) 738252',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2024-03-18 00:39:41',
                'updated_at' => '2024-03-28 07:06:30',
                'deleted_at' => '2024-03-28 07:06:30',
                'description' => '<div class="P1LL5e">Hotel kasual ini berjarak 6 menit berjalan kaki dari rumah makan dan pertokoan di Jalan Gajah Mada dan 2 km dari Museum Kalimantan Barat. Hotel ini berjarak 17 km dari Bandara Internasional Supadio.</div>
                <div class="P1LL5e">Kamar nyaman dengan dekorasi simpel menyediakan TV layar datar serta alat pembuat teh dan kopi. Kamar di kelas yang lebih tinggi memiliki jendela. Beberapa kamar memiliki balkon dan/atau panorama kota.</div>
                <div class="P1LL5e">Ada kafe bernuansa cerah, serta teras di atap yang menghadap ke kota.</div>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 114,
                'id_lama' => 114,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Gajahmada Avara Boutique Hotel",
                'address' => 'Jl. Gajah Mada No.86-88, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78121',
                'latitude' => '-0.03442543677394785',
                'longitude' => '109.3418962386273',
                'phone' => '(0561) 732878',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2024-03-18 00:49:24',
                'updated_at' => '2024-03-28 07:05:51',
                'deleted_at' => '2024-03-28 07:05:51',
                'description' => '<div class="P1LL5e">Hotel modern yang indah ini terletak di jalanan ramai dengan toko-toko serta bisnis kecil, berjarak 2 km dari air mancur dan tempat populer Taman Alun Kapuas, yang membentang sepanjang Sungai Kapuas, atau 4 km dari istana Keraton Kadriah Pontianak yang dibangun pada abad ke-18.</div>
                <div class="P1LL5e">Tersedia beragam kamar serta suite santai, mulai dari yang bernuansa kasual dan luas hingga mewah dan elegan, serta banyak di antaranya memiliki pemandangan kota. Kamar mandi memiliki dinding kaca, serta ada fasilitas alat pembuat teh dan kopi, TV layar datar, meja kerja, juga room service.</div>
                <div class="P1LL5e">Fasilitas meliputi ruang kebugaran modern bernuansa cerah, restoran dengan teras di atap, dan bar.</div>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 117,
                'id_lama' => 117,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Rumah Dempo Syariah",
                'address' => 'Jl. Sepakat II No.8, Bansir Darat, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112',
                'latitude' => '-0.059394980987301546',
                'longitude' => '109.35159456561536',
                'phone' => '(021) 80629666',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2024-03-18 01:05:42',
                'updated_at' => '2024-03-28 07:06:01',
                'deleted_at' => '2024-03-28 07:06:01',
                'description' => "<p>Berdasarkan tempat tinggal dengan kemudahan saat jalan-jalan, rekreasi, dan berkeliling.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Guest House')->first()->id
            ),

            array(
                'id' => 119,
                'id_lama' => 119,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Hotel Berlian",
                'address' => 'Jl. Tanjung Pura No.91, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78122',
                'latitude' => '-0.03549794044866312',
                'longitude' => '109.34639189445058',
                'phone' => '0811-5698-999',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2024-03-18 01:13:07',
                'updated_at' => '2024-03-28 07:06:07',
                'deleted_at' => '2024-03-28 07:06:07',
                'description' => "<p>Sangat bagus dikunjungi pada saat&nbsp;jalan-jalan, rekreasi, dan berkeliling</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 120,
                'id_lama' => 120,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "9-HAAN GUEST HOUSE",
                'address' => 'Jl. Parit H. Husin II Kavling Florence No.1, Bangka Belitung Darat, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78124',
                'latitude' => '-0.08644387264529013',
                'longitude' => '109.34334898266569',
                'phone' => '0821-5982-4697',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2024-03-18 01:20:17',
                'updated_at' => '2024-03-28 07:06:12',
                'deleted_at' => '2024-03-28 07:06:12',
                'description' => '<div class="MmD1mb fontBodyMedium">Bagus dikunjungi pada saat jalan-jalan, rekreasi, dan berkeliling</div>',
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Guest House')->first()->id
            ),

            array(
                'id' => 121,
                'id_lama' => 121,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "BEST HOME",
                'address' => 'Jl. Adi Sucipto No.208, Bangka Belitung Laut, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112',
                'latitude' => '-0.05135092148556044',
                'longitude' => '109.35973970979211',
                'phone' => '0813-5217-6528',
                'email' => NULL,
                'district' => 'Pontianak Tenggara',
                'created_at' => '2024-03-18 01:29:24',
                'updated_at' => '2024-03-28 07:06:17',
                'deleted_at' => '2024-03-28 07:06:17',
                'description' => "<p>Best Home adalah pilihan tepat bagi Anda yang ingin menginap di kota Pontianak dengan harga yang terjangkau. Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. WiFi tersedia di seluruh area publik properti . Fasilitas lengkap , nyaman dan memuaskan menurut sebagian besar tamu.Best Home adalah pilihan cerdas bagi para wisatawan yang berkunjung ke Pontianak.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Hotel')->first()->id
            ),

            array(
                'id' => 124,
                'id_lama' => 124,
                'user_id' => $superAdminId,
                'master_id' => $penginapanId,
                'name' => "Cico Home",
                'address' => 'Jl. S. Parman Gg. Swadaya No.19, Benua Melayu Darat, Kec. Pontianak Sel., Kota Pontianak, Kalimantan Barat 78113',
                'latitude' => '-0.03541608084027436',
                'longitude' => '109.33801609759558',
                'phone' => '0811-5765-500',
                'email' => NULL,
                'district' => 'Pontianak Selatan',
                'created_at' => '2024-03-18 01:45:36',
                'updated_at' => '2024-03-28 07:05:43',
                'deleted_at' => '2024-03-28 07:05:43',
                'description' => "<p>Cico Home menawarkan akomodasi di Pontianak Selatan, Pontianak dan berjarak 2 km dari Waterfront City Pontianak. Properti ini memiliki akses WiFi gratis dan kolam renang.<br />Setiap kamar dilengkapi dengan AC dan smart TV. Shower tersedia di kamar mandi.<br />Tamu dapat menikmati makanan di Bebek Bekaes. Pilihan tempat makan lain juga tersedia di sekitar properti.<br />Fasilitas lain yang tersedia di Cico Home adalah tersedia area parkir dan resepsionis 24 jam.<br />Bandara terdekat adalah Bandar Udara Internasional Supadio, 15,9 km dari properti.</p>",
                'halal' => NULL,
                'category_id' => DB::table('pariwisata_category')->where('master_id', 2)->where('category', 'Guest House')->first()->id
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

        $PenginapanIdExist = array(
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9,
            10,
            11,
            18,
            24,
            25,
            26,
            27,
            28,
            29,
            30,
            31,
            32,
            33,
            34,
            36,
            37,
            38,
            39,
            40,
            41,
            42,
            43,
            44,
            45,
            46,
            47,
            48,
            49,
            50,
            51,
            52,
            53,
            54,
            55,
            57,
            58,
            80,
            81,
            82,
            84,
            85,
            86,
            87,
            88,
            89,
            90,
            91,
            92,
            111,
            114,
            117,
            119,
            120,
            121,
            124,
        );
        foreach ($info_hotel_restoran_detail as $value) {
            if (in_array($value['pariwisata_id'], $PenginapanIdExist)) {
                $images[] = $value;
            }
        }

        $events = DB::table('events')->select(['id', 'user_id', 'location', 'created_at', 'updated_at', 'deleted_at'])->get();

        DB::beginTransaction();
        try {
            foreach ($info_hotel as $value) {
                $penginapan = DB::table('pariwisata')->insertGetId([
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

                // ! Gambar Penginapan
                foreach ($images as $image) {
                    if ($value['id_lama'] ==  $image['pariwisata_id']) {
                        DB::table('pariwisata_images')->insert([
                            'user_id' => $image['user_id'],
                            'pariwisata_id' => $penginapan,
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
                    if (isset($data['H'])) {
                        $eventPenginapanIds = $data['H'];
                        foreach ($eventPenginapanIds as $eventPenginapanId) {
                            if ($penginapan == $eventPenginapanId) {
                                DB::table('event_locations')->insert([
                                    'user_id' => $event->user_id,
                                    'event_id' => $event->id,
                                    'pariwisata_id' => $penginapan,
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
