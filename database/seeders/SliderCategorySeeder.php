<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::beginTransaction();
        try {
            DB::table('slider_category')->insert([
                [
                    'category' => 'beranda',
                ],
                [
                    'category' => 'komoditas',
                ],
                [
                    'category' => 'wisata',
                ],
                [
                    'category' => 'penginapan',
                ],
                [
                    'category' => 'kuliner',
                ],
                [
                    'category' => 'oleh-oleh',
                ],
            ]);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
