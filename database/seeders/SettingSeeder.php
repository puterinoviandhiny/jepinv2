<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {
            DB::table('settings')->insert([
                [
                    'key' => 'nama_aplikasi',
                    'value' => 'JePin',
                    'description' => 'Nama Aplikasi',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'key' => 'copyright',
                    'value' => 'Dinas Komunikasi dan Informatika Kota Pontianak © 2019 All Rights Reserved',
                    'description' => 'Copyright Website',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),

                ],
                [
                    'key' => 'production_year',
                    'value' => '2019',
                    'description' => 'Tahun Pembuatan',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),

                ],
                [
                    'key' => 'logo_web',
                    'value' => 'uploads/pengaturan/web/Jepin1601944293.webp',
                    'description' => 'Logo JePin untuk Website',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),

                ],
                [
                    'key' => 'logo_mobile',
                    'value' => 'uploads/pengaturan/apps/Jepin1601944294.webp',
                    'description' => 'Logo JePin untuk Mobile',
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
