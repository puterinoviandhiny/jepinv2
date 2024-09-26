<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;

        DB::beginTransaction();
        try {
            DB::table('markets')->insert([
                [
                    'id' => '2',
                    'user_id' => $superAdminId,
                    'name' => 'Pasar Flamboyan',
                    'location' => 'Lokasi A',
                    'image' => 'uploads/pasar/MDk6NDk6MDZhbVBhc2FyLnBuZw==.webp',
                    'latitude' => '-0.02545140170423497',
                    'longitude' => '109.33928871154785',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '3',
                    'user_id' => $superAdminId,
                    'name' => 'Pasar Dahlia',
                    'location' => 'Lokasi B',
                    'image' => 'uploads/pasar/MDk6NDg6NTRhbVBhc2FyLnBuZw==.webp',
                    'latitude' => '-0.030944565099382024',
                    'longitude' => '109.3657661060181',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '4',
                    'user_id' => $superAdminId,
                    'name' => 'Pasar Teratai',
                    'location' => 'Lokasi C',
                    'image' => 'uploads/pasar/MDk6NDg6MDRhbVBhc2FyLnBuZw==.webp',
                    'latitude' => '-0.019486169316499644',
                    'longitude' => '109.32636982000736',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '8',
                    'user_id' => $superAdminId,
                    'name' => 'Pasar Kemuning',
                    'location' => 'Lokasi D',
                    'image' => 'uploads/pasar/MDE6MTk6NTVwbXBhc2FyIGtlbXVuaW5nLmpwZw==.webp',
                    'latitude' => '-0.019572',
                    'longitude' => '109.33945900000003',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '9',
                    'user_id' => $superAdminId,
                    'name' => 'Pasar Puring',
                    'location' => 'Lokasi E',
                    'image' => 'uploads/pasar/MDE6MjA6NDBwbXB1cmluZy5qcGc=.webp',
                    'latitude' => '-0.019572',
                    'longitude' => '109.33945900000003',
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
