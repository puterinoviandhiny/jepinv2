<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $feedbacks = array(
            array(
                'id' => '4',
                'user_id' => '220',
                'message' => 'bakat terpendam yang sebaiknya dipendam saja',
                'created_at' => '2021-07-06 15:44:52',
                'updated_at' => '2021-07-06 15:44:52'
            ),
            array(
                'id' => '6',
                'user_id' => '458',
                'message' => 'terimakasih dengan aplikasi ini.semoga bisa semua tempat ada kamera beginikah saya bisa tau mana macet mana tidak',
                'created_at' => '2022-03-28 22:05:19',
                'updated_at' => '2022-03-28 22:05:19'
            ),
            array(
                'id' => '7',
                'user_id' => '462',
                'message' => 'Selalu mau liat update kota pontianak',
                'created_at' => '2022-03-30 07:41:42',
                'updated_at' => '2022-03-30 07:41:42'
            ),
            array(
                'id' => '8',
                'user_id' => '475',
                'message' => 'untuk CCTV mohon diperbaiki, karna ada yang gak bisa ditampilkan',
                'created_at' => '2022-04-04 23:01:52',
                'updated_at' => '2022-04-04 23:01:52'
            ),
            array(
                'id' => '9',
                'user_id' => '494',
                'message' => 'simpang desa kapur masukin juga  biar enak mantau nya',
                'created_at' => '2022-04-08 20:19:16',
                'updated_at' => '2022-04-08 20:19:16'
            ),
            array(
                'id' => '10',
                'user_id' => '520',
                'message' => 'Kami Warga Indonesia Kalimantan Barat Pontianak Kota',
                'created_at' => '2022-04-12 09:00:52',
                'updated_at' => '2022-04-12 09:00:52'
            ),
            array(
                'id' => '11',
                'user_id' => '617',
                'message' => 'Kalau bisa smua cctv bisa di buka biar lebih mudah melihat kondisi jalan yang rawan mcet',
                'created_at' => '2022-05-13 04:40:17',
                'updated_at' => '2022-05-13 04:40:17'
            ),
            array(
                'id' => '12',
                'user_id' => '669',
                'message' => 'loading terus pas buka map',
                'created_at' => '2022-06-06 08:07:11',
                'updated_at' => '2022-06-06 08:07:11'
            ),
            array(
                'id' => '13',
                'user_id' => '686',
                'message' => 'kenapa pas dipeta saya mau buka sisi TV yg pas dijembatan macet apa tidak kok tidak bisa kebuka yaa malah puter2, mohon kejelasannya Terimakasih.',
                'created_at' => '2022-06-09 06:22:58',
                'updated_at' => '2022-06-09 06:22:58'
            ),
            array(
                'id' => '14',
                'user_id' => '760',
                'message' => 'Semoga bisa di tambahkan lagi pantauan cctv live di semua titik penting di pontianak... dan di perbaiki lagi buat semua cctv yg bermasalah... semoga cepat di laksanakan...',
                'created_at' => '2022-06-21 09:33:26',
                'updated_at' => '2022-06-21 09:33:26'
            ),
            array(
                'id' => '15',
                'user_id' => '760',
                'message' => 'live cctv nya... semoga bisa banyak titik yang bisa di tayangkan... secepatnya',
                'created_at' => '2022-06-27 11:55:26',
                'updated_at' => '2022-06-27 11:55:26'
            ),
            array(
                'id' => '16',
                'user_id' => '760',
                'message' => 'kritik saya min... supaya segera memperbaiki cctv live yang sudah terpasang... karena banyak sekali yang rusak... mohon juga saran nya untuk menambah lagi titik2 cctv live di tempat2 ramai.. dan di persimpangan yang padat.. agar kami masyarakat dapat memantau kondisi di jalanan bagaimana sebelum berkendara.. semoga cepat di upgrade..',
                'created_at' => '2022-07-04 12:50:10',
                'updated_at' => '2022-07-04 12:50:10'
            ),
            array(
                'id' => '17',
                'user_id' => '815',
                'message' => 'Yth. Admin, terima kasih atas layanan aplikasi ini, sangat membantu. sedikit masukan, layanan streaming CCTVnya  harap diperiksa berkala. banyak yg tidak berfungsi. salam utk pontianak maju',
                'created_at' => '2022-07-27 16:58:55',
                'updated_at' => '2022-07-27 16:58:55'
            ),
            array(
                'id' => '18',
                'user_id' => '881',
                'message' => 'melihat cctv jalanan',
                'created_at' => '2022-08-21 23:26:58',
                'updated_at' => '2022-08-21 23:26:58'
            ),
            array(
                'id' => '19',
                'user_id' => '948',
                'message' => 'Cctv tidak bisa dibuka',
                'created_at' => '2022-09-21 19:24:13',
                'updated_at' => '2022-09-21 19:24:13'
            ),
            array(
                'id' => '20',
                'user_id' => '1026',
                'message' => 'min , pantau cctv kok g ad lg?',
                'created_at' => '2023-01-27 01:26:10',
                'updated_at' => '2023-01-27 01:26:10'
            ),
            array(
                'id' => '21',
                'user_id' => '109',
                'message' => 'selamat siang Min, min untuk cctv online Pontianak sudah tidak bisa lagi yach?',
                'created_at' => '2023-02-03 04:34:14',
                'updated_at' => '2023-02-03 04:34:14'
            ),
            array(
                'id' => '22',
                'user_id' => '1042',
                'message' => 'seharusnya bisa akses cctv . tolong dong pemkot',
                'created_at' => '2023-02-10 13:16:44',
                'updated_at' => '2023-02-10 13:16:44'
            ),
            array(
                'id' => '23',
                'user_id' => '1077',
                'message' => 'tidak muncul menu petanya',
                'created_at' => '2023-03-25 02:49:54',
                'updated_at' => '2023-03-25 02:49:54'
            ),
            array(
                'id' => '24',
                'user_id' => '1182',
                'message' => 'web sering Error ya',
                'created_at' => '2023-05-13 16:10:36',
                'updated_at' => '2023-05-13 16:10:36'
            ),
            array(
                'id' => '25',
                'user_id' => '1182',
                'message' => 'Tambahan Destinas Wisata : Kampong Wisata Budaye Bansir,.Kampong Bangka,dan Kampong Tudong Pontianak Lokasi di Gg Ramadhan, Gg Busri dan GG Mendawai Laut Kelurahan Bansir Luat',
                'created_at' => '2023-05-13 16:14:36',
                'updated_at' => '2023-05-13 16:14:36'
            ),
            array(
                'id' => '26',
                'user_id' => '1394',
                'message' => 'Tidak ada akses cctv pada aplikasi sebelumnya ada tapi ini tidak dan tidak berkembang aplikasi ini malah semakin menurun',
                'created_at' => '2024-01-16 07:24:52',
                'updated_at' => '2024-01-16 07:24:52'
            ),
            array(
                'id' => '31',
                'user_id' => '1534',
                'message' => 'Halo Halo, Satu Dua Tiga',
                'created_at' => '2024-03-06 07:10:06',
                'updated_at' => '2024-03-06 07:10:06'
            ),
            array(
                'id' => '32',
                'user_id' => '1573',
                'message' => 'admin mohon diupdate aplikasinya',
                'created_at' => '2024-06-14 14:37:12',
                'updated_at' => '2024-06-14 14:37:12'
            ),
            array(
                'id' => '35',
                'user_id' => '1573',
                'message' => 'Terus berkembang',
                'created_at' => '2024-07-23 10:52:49',
                'updated_at' => '2024-07-23 10:52:49'
            ),
            array(
                'id' => '36',
                'user_id' => '1573',
                'message' => 'ditunggu updatenya min!',
                'created_at' => '2024-08-08 14:17:56',
                'updated_at' => '2024-08-08 14:17:56'
            ),
            array(
                'id' => '39',
                'user_id' => '1573',
                'message' => 'segera ya min',
                'created_at' => '2024-08-21 14:16:57',
                'updated_at' => '2024-08-21 14:16:57'
            ),
            array(
                'id' => '40',
                'user_id' => '1673',
                'message' => 'tampilan menarik, informasi jg update. ditingkatkan terus yaaa.',
                'created_at' => '2024-08-29 09:42:12',
                'updated_at' => '2024-08-29 09:42:12'
            )
        );

        DB::beginTransaction();
        try {
            DB::table('feedbacks')->insert($feedbacks);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
