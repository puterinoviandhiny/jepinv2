<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\CommodityPrice\CommodityPrice100KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice10KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice110KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice120KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice130KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice140KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice150KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice160KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice170KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice180KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice190KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice200KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice20KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice210KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice220KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice230KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice240KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice250KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice260KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice270KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice280KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice288KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice295KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice303KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice30KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice40KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice50KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice60KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice70KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice80KSeeder;
use Database\Seeders\CommodityPrice\CommodityPrice90KSeeder;
use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

// use database\Seeders\CommoditySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
            ProfileSeeder::class,
            SettingSeeder::class,
            InfographicsSeeder::class,
            VideoSeeder::class,
            // SocialMediaSeeder::class,
            SliderCategorySeeder::class,
            SliderSeeder::class,
            MarketSeeder::class,
            PariwisataMasterSeeder::class,
            PariwisataCategorySeeder::class,
            EventCategorySeeder::class,
            FeedbackSeeder::class,
            FeedbackReplySeeder::class,
            CommoditySeeder::class,
            CommodityPrice10KSeeder::class,
            CommodityPrice20KSeeder::class,
            CommodityPrice30KSeeder::class,
            CommodityPrice40KSeeder::class,
            CommodityPrice50KSeeder::class,
            CommodityPrice60KSeeder::class,
            CommodityPrice70KSeeder::class,
            CommodityPrice80KSeeder::class,
            CommodityPrice90KSeeder::class,
            CommodityPrice100KSeeder::class,
            CommodityPrice110KSeeder::class,
            CommodityPrice120KSeeder::class,
            CommodityPrice130KSeeder::class,
            CommodityPrice140KSeeder::class,
            CommodityPrice150KSeeder::class,
            CommodityPrice160KSeeder::class,
            CommodityPrice170KSeeder::class,
            CommodityPrice180KSeeder::class,
            CommodityPrice190KSeeder::class,
            CommodityPrice200KSeeder::class,
            CommodityPrice210KSeeder::class,
            CommodityPrice220KSeeder::class,
            CommodityPrice230KSeeder::class,
            CommodityPrice240KSeeder::class,
            CommodityPrice250KSeeder::class,
            CommodityPrice260KSeeder::class,
            CommodityPrice270KSeeder::class,
            CommodityPrice280KSeeder::class,
            CommodityPrice288KSeeder::class,
            CommodityPrice295KSeeder::class,
            CommodityPrice303KSeeder::class,
            EventSeeder::class,
            PariwisataDataWisataSeeder::class,
            PariwisataDataPenginapanSeeder::class,
            PariwisataDataKulinerSeeder::class,
            PariwisataDataOlehSeeder::class,
        ]);

        // ! Pengahpusan Kolom Location pada tabel EVENT
        Schema::table('events', function (Blueprint $table) {
            if (Schema::hasColumn('events', 'location')) {
                $table->dropColumn('location');
            }
        });
    }

    public function down()
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('location');
        });
    }
}
