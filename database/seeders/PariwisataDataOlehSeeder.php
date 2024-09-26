<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PariwisataDataOlehSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $olehId = DB::table('pariwisata_master')->where('name', 'Oleh-Oleh')->first()->id;
        // ! Oleh - Oleh
        $info_oleh_oleh = array(
            array(
                'id' => '1',
                'id_lama' => '1',
                'user_id' => $superAdminId,
                'master_id' => $olehId,
                'name' => 'PSP Pusat Oleh-Oleh',
                'address' => 'Jl. Patimura, Kelurahan Darat Sekip, Kecamatan Pontianak Kota, Kota Pontianak, Kalimantan Barat, 78243',
                'latitude' => '-0.025555',
                'longitude' => '109.337959',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Darat Sekip',
                'created_at' => '2024-08-07 15:00:51',
                'updated_at' => '2024-08-19 13:59:37',
                'deleted_at' => NULL,
                'description' => '<p style="text-align: justify;">Pusat oleh-oleh PSP yang terletak di Jalan Pattimura Pontianak ini merupakan pusat berbagai macam oleh-oleh khas Pontianak. Kuliner,<br />kerajinan tangan, produk lokal dan berabgai oleh-oleh khas Pontianak dapat ditemui di sini. Lokasi PSP terletak di Jalan Patimura dan dekat dengan tempattempat wisata kuliner serta pusat perbelanjaan di Pontianak, sehingga sangat mudah diakses.</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 4)->where('category', 'Umum')->first()->id
            ),
            array(
                'id' => '2',
                'id_lama' => '2',
                'user_id' => $superAdminId,
                'master_id' => $olehId,
                'name' => 'UMKM Center Dekranasda Kota Pontianak',
                'address' => 'Jl. Slt. Abdurrahman No. 140, Kelurahan Akcaya, Kecamatan Pontianak Selatan, Kota Pontianak, Kalimantan Barat, 78116.',
                'latitude' => '-0.019572',
                'longitude' => '109.339459',
                'phone' => NULL,
                'email' => NULL,
                'district' => 'Akcaya',
                'created_at' => '2024-08-07 15:01:14',
                'updated_at' => '2024-08-19 14:14:57',
                'deleted_at' => NULL,
                'description' => '<p>-</p>',
                'category_id' => DB::table('pariwisata_category')->where('master_id', 4)->where('category', 'Umum')->first()->id
            )
        );

        $info_oleh_oleh_detail = array(
            array(
                'id' => '3',
                'user_id' => $superAdminId,
                'pariwisata_id' => '1',
                'file' => 'psp 3_66c2ed345e355.jpg',
                'created_at' => '2024-08-19 13:59:00',
                'updated_at' => '2024-08-19 13:59:00',
                'deleted_at' => NULL
            ),
            array(
                'id' => '4',
                'user_id' => $superAdminId,
                'pariwisata_id' => '2',
                'file' => 'umkm_66c2ef169e30a.jpg',
                'created_at' => '2024-08-19 14:07:02',
                'updated_at' => '2024-08-19 14:07:02',
                'deleted_at' => NULL
            ),
            array(
                'id' => '5',
                'user_id' => $superAdminId,
                'pariwisata_id' => '2',
                'file' => 'umkm 2_66c2f0f169296.jpg',
                'created_at' => '2024-08-19 14:14:57',
                'updated_at' => '2024-08-19 14:14:57',
                'deleted_at' => NULL
            )
        );

        DB::beginTransaction();
        try {
            foreach ($info_oleh_oleh as $value) {
                $olehOleh = DB::table('pariwisata')->insertGetId([
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
                    'category_id' => $value['category_id'],
                    'created_at' => $value['created_at'],
                    'updated_at' => $value['updated_at'],
                    'deleted_at' => $value['deleted_at'],
                ]);

                foreach ($info_oleh_oleh_detail as $image) {
                    if ($value['id_lama'] ==  $image['pariwisata_id']) {
                        DB::table('pariwisata_images')->insert([
                            'user_id' => $image['user_id'],
                            'pariwisata_id' => $olehOleh,
                            'file' => $image['file'],
                            'created_at' => $image['created_at'],
                            'updated_at' => $image['updated_at'],
                            'deleted_at' => $image['deleted_at'],
                        ]);
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
