<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $video = array(
            array(
                'id' => '1',
                'user_id' => $superAdminId,
                'title' => 'Protokol Kesehatan di Lapak PKL Pedagang Kaki Lima',
                'description' => 'Untuk mengantisipasi rencana reaktivasi kembali kegiatan usaha, berikut protokol kesehatan untuk pengelola dan pengunjung pusat perbelanjaan saat ...',
                'url' => 'https://www.youtube.com/embed/7exzSAna_3U',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '2',
                'user_id' => $superAdminId,
                'title' => 'Protokol Kesehatan di Pusat Perbelanjaan',
                'description' => 'Untuk mengantisipasi rencana reaktivasi kembali kegiatan usaha, berikut protokol kesehatan untuk pengelola dan pengunjung pusat perbelanjaan saat ...',
                'url' => 'https://www.youtube.com/embed/3HUKYxYvGhM',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '3',
                'user_id' => $superAdminId,
                'title' => 'Protokol Kesehatan di Cafe atau Restoran',
                'description' => 'Untuk mengantisipasi rencana reaktivasi kembali kegiatan usaha, berikut protokol kesehatan untuk pengelola dan pengunjung Cafe atau Restoran saat ...',
                'url' => 'https://www.youtube.com/embed/x3epmQkVSVU',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '4',
                'user_id' => $superAdminId,
                'title' => 'UMKM Center',
                'description' => '',
                'url' => 'https://www.youtube.com/embed/u1q-IdH_VOs',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '5',
                'user_id' => $superAdminId,
                'title' => 'Profile Diskominfo',
                'description' => '',
                'url' => 'https://www.youtube.com/embed/LztUZBEnBHQ',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '6',
                'user_id' => $superAdminId,
                'title' => 'Profile Kota Pontianak Smart City 2019 convert',
                'description' => '',
                'url' => 'https://www.youtube.com/embed/IKioqBuCHNw',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '7',
                'user_id' => $superAdminId,
                'title' => 'LANDMARK DESTINASI',
                'description' => 'LANDMARK DESTINASI kota pontianak..jangan lupa like share dan subscribe.',
                'url' => 'https://www.youtube.com/embed/isK9DQlUQyg',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '8',
                'user_id' => $superAdminId,
                'title' => 'Pontianak Smart City   Kompas TV SAPA PONTIANAK',
                'description' => 'Program Sapa Pontianak dengan tema "Pontianak Smart City" bersama narasumbernya dari Dinas Komunikasi dan Informatika Kota Pontianak, bersama Bpk.',
                'url' => 'https://www.youtube.com/embed/pulTzS67imM',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '9',
                'user_id' => $superAdminId,
                'title' => 'Satu Data Kota Pontianak',
                'description' => 'Data Data adalah catatan atas kumpulan fakta. Data merupakan bentuk jamak dari datum, berasal dari bahasa Latin yang berarti "sesuatu yang diberikan".',
                'url' => 'https://www.youtube.com/embed/1MwMDOugCpA',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '10',
                'user_id' => $superAdminId,
                'title' => 'Video Jalan',
                'description' => 'jalan kota pontianak.',
                'url' => 'https://www.youtube.com/embed/h6ZmIIBPQOY',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '11',
                'user_id' => $superAdminId,
                'title' => 'PU   DRAINASE',
                'description' => 'drainase.',
                'url' => 'https://www.youtube.com/embed/YN-ilahXMzM',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '12',
                'user_id' => $superAdminId,
                'title' => 'Profil Kota Pontianak',
                'description' => 'Kota Pontianak adalah ibukota provinsi Kalimantan Barat, Indonesia. Kota ini dikenal sebagai Kota Khatulistiwa karena dilalui garis khatulistiwa. Di utara kota ...',
                'url' => 'https://www.youtube.com/embed/SEmOb9QJ57g',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '13',
                'user_id' => $superAdminId,
                'title' => 'Smart City Kota Pontianak',
                'description' => 'Smart Branding : Memberikan berbagai informasi dan pelayanan publik secara dinamis dan Meningkatkan brand value Kota Pontianak guna mendorong ...',
                'url' => 'https://www.youtube.com/embed/lUQak1JnWxw',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '14',
                'user_id' => $superAdminId,
                'title' => 'SECERAH KELABU',
                'description' => 'Juara III Perlombaan film/video pendek kebijakan pemerintah pada dinas komunikasi dan informatika kota pontianak, BC SQUAD SMK NEGERI 2 PONTIANAK.',
                'url' => 'https://www.youtube.com/embed/mRaiCk0-0tE',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '15',
                'user_id' => $superAdminId,
                'title' => 'SMA ST.FRANSISKUS ASISI (kebakaran hutan)',
                'description' => 'Juara II perlombaan file/video pendek kebijakan pemerintah pada dinas komunikasi dan informatika kota pontianak dari SMA ST.FRANSISKUS ASISI0.',
                'url' => 'https://www.youtube.com/embed/DACZ8slwsJk',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '16',
                'user_id' => $superAdminId,
                'title' => '(MAN 1 PONTIANAK - EKSPLORASI KOTA KHATULISTIWA)',
                'description' => 'Juara 1 perlombaaan film/video pendek kebijakan Pemerintah Kota Pontianak pada Dinas Komunikasi dan Informatika Kota Pontianak.',
                'url' => 'https://www.youtube.com/embed/2FCPvckT9so',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '17',
                'user_id' => $superAdminId,
                'title' => 'Kapal Wisata Kota Pontianak',
                'description' => 'Kapal Wisata di Kota Pontianak.',
                'url' => 'https://www.youtube.com/embed/h-xJL61hKhk',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '18',
                'user_id' => $superAdminId,
                'title' => 'Penerapan SIK di UPTD Puskesmas Kecamatan Pontianak Barat',
                'description' => 'Penerapan SIK di UPTD Puskesmas Kecamatan Pontianak Barat.',
                'url' => 'https://www.youtube.com/embed/sCSDjcrnhyk',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '19',
                'user_id' => $superAdminId,
                'title' => 'Pontianak Tempoe Doeloe',
                'description' => 'Pontianak Tempoe Doeloe.',
                'url' => 'https://www.youtube.com/embed/KE9jykji-og',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '20',
                'user_id' => $superAdminId,
                'title' => 'profile pontive',
                'description' => '',
                'url' => 'https://www.youtube.com/embed/jHVIbhSc5Cw',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '21',
                'user_id' => $superAdminId,
                'title' => 'Golden MAMA Pontianak',
                'description' => '',
                'url' => 'https://www.youtube.com/embed/jrwJKGwZAn4',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '22',
                'user_id' => $superAdminId,
                'title' => 'Peresmian Rumah Baca Pontianak',
                'description' => '',
                'url' => 'https://www.youtube.com/embed/c6IyjSBVCy8',
                'created_at' => '2021-09-08 17:23:02',
                'updated_at' => '2021-09-08 17:23:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '23',
                'user_id' => $superAdminId,
                'title' => 'Penghargaan Yang Diterima Tahun 2017 Pemkot Pontianak',
                'description' => 'Penghargaan yang diterima ada tahun 2017.',
                'url' => 'https://www.youtube.com/embed/2puMNxBqdOY',
                'created_at' => '2021-09-08 17:23:03',
                'updated_at' => '2021-09-08 17:23:03',
                'deleted_at' => NULL
            )
        );

        DB::beginTransaction();
        try {
            DB::table('videos')->insert($video);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
