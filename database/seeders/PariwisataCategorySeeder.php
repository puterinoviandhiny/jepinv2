<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PariwisataCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $masterWisataId = DB::table('pariwisata_master')->select(['id', 'name'])->where('name', 'Wisata')->first()->id;
        $masterKulinerId = DB::table('pariwisata_master')->select(['id', 'name'])->where('name', 'Kuliner')->first()->id;
        $masterPenginapanId = DB::table('pariwisata_master')->select(['id', 'name'])->where('name', 'Penginapan')->first()->id;
        $masterOlehId = DB::table('pariwisata_master')->select(['id', 'name'])->where('name', 'Oleh-Oleh')->first()->id;

        DB::beginTransaction();
        try {
            DB::table('pariwisata_category')->insert([
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterWisataId,
                    'category' => 'Umum',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterWisataId,
                    'category' => 'Kota',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterWisataId,
                    'category' => 'Religius',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterWisataId,
                    'category' => 'Budaya',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterWisataId,
                    'category' => 'Taman Bermain',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterKulinerId,
                    'category' => 'Umum',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterKulinerId,
                    'category' => 'Warung Kopi',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterKulinerId,
                    'category' => 'Rumah Makan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterKulinerId,
                    'category' => 'Restoran',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterKulinerId,
                    'category' => 'Cafe',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Hotel Bintang 5',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Hotel Bintang 4',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Hotel Bintang 3',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Hotel Bintang 2',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Hotel Bintang 1',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Wisma',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Asrama',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Hotel',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Guest House',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Mess',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterPenginapanId,
                    'category' => 'Umum',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterOlehId,
                    'category' => 'Umum',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterOlehId,
                    'category' => 'Makanan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'user_id' => $superAdminId,
                    'master_id' => $masterOlehId,
                    'category' => 'Minuman',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
