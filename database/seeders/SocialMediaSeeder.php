<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;

        DB::beginTransaction();
        try {
            DB::table('pariwisata_category')->insert([
                [
                    'user_id' => $superAdminId,
                    'name' => 'Website',
                    'slug' => 'website',
                    'url' => 'https://jepin.pontianak.go.id/',
                    'type_icon' => 'gambar',
                    'icon' => 'null',
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
