<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CallCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $telepon_penting = array(
            array(
                'id' => '1',
                'user_id' => $superAdminId,
                'phone' => '0561-733040',
                'service_name' => 'Kantor Walikota Pontianak',
                'address' => 'Jl. Rahadi Usman',
                'created_at' => '2021-02-28 14:06:05',
                'updated_at' => '2021-02-28 14:06:05',
                'deleted_at' => NULL
            ),
            array(
                'id' => '2',
                'user_id' => $superAdminId,
                'phone' => '0561-732465 - 7415135',
                'service_name' => 'Kodam XII',
                'address' => 'Jl. Trans Kalimantan',
                'created_at' => '2021-02-28 14:44:25',
                'updated_at' => '2021-02-28 14:44:25',
                'deleted_at' => NULL
            ),
            array(
                'id' => '3',
                'user_id' => $superAdminId,
                'phone' => '0561-7415135',
                'service_name' => 'Polda Kalbar 1',
                'address' => 'Jl. Ayani',
                'created_at' => '2021-02-28 16:38:31',
                'updated_at' => '2021-07-01 13:59:51',
                'deleted_at' => NULL
            ),
            array(
                'id' => '4',
                'user_id' => $superAdminId,
                'phone' => '0561-734900',
                'service_name' => 'Polresta Pontianak',
                'address' => 'Jl. Gusti Johan Idrus No. 1',
                'created_at' => '2021-02-28 16:38:56',
                'updated_at' => '2021-02-28 16:38:56',
                'deleted_at' => NULL
            ),
            array(
                'id' => '5',
                'user_id' => $superAdminId,
                'phone' => '0561-7558880',
                'service_name' => 'Polsek Pontianak Kota',
                'address' => 'Jl. Ampera',
                'created_at' => '2021-02-28 16:39:16',
                'updated_at' => '2021-02-28 16:39:16',
                'deleted_at' => NULL
            ),
            array(
                'id' => '6',
                'user_id' => $superAdminId,
                'phone' => '0561-774766',
                'service_name' => 'Polsek Pontianak Barat',
                'address' => 'Jl. Komyos Sudarso',
                'created_at' => '2021-02-28 16:39:48',
                'updated_at' => '2021-02-28 16:39:48',
                'deleted_at' => NULL
            ),
            array(
                'id' => '7',
                'user_id' => $superAdminId,
                'phone' => '0561-736184',
                'service_name' => 'Polsek Pontianak Selatan',
                'address' => 'Jl. Letjen Sutoyo',
                'created_at' => '2021-02-28 16:40:04',
                'updated_at' => '2021-02-28 16:40:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '8',
                'user_id' => $superAdminId,
                'phone' => '0561-883126',
                'service_name' => 'Polsek Pontianak Utara',
                'address' => 'Jl. Gusti Situt Mahmud',
                'created_at' => '2021-02-28 16:41:21',
                'updated_at' => '2021-02-28 16:41:21',
                'deleted_at' => NULL
            ),
            array(
                'id' => '9',
                'user_id' => $superAdminId,
                'phone' => '0561-742910',
                'service_name' => 'Polsek Pontianak Timur',
                'address' => 'Jl. Perintis kemerdekaan No.2',
                'created_at' => '2021-02-28 16:41:40',
                'updated_at' => '2021-02-28 16:41:40',
                'deleted_at' => NULL
            ),
            array(
                'id' => '10',
                'user_id' => $superAdminId,
                'phone' => '0561-721148',
                'service_name' => 'Polsek Sungai Raya',
                'address' => 'Jl. Adi Sucipto',
                'created_at' => '2021-02-28 16:42:04',
                'updated_at' => '2021-02-28 16:42:04',
                'deleted_at' => NULL
            ),
            array(
                'id' => '11',
                'user_id' => $superAdminId,
                'phone' => '0561-6783039',
                'service_name' => 'Rumkit Umum Sultan Sy.Muhammad Alkadrie Pontianak',
                'address' => 'Jl. Komyos Sudarso',
                'created_at' => '2021-02-28 16:50:09',
                'updated_at' => '2021-02-28 16:50:09',
                'deleted_at' => NULL
            ),
            array(
                'id' => '12',
                'user_id' => $superAdminId,
                'phone' => '0561-737701',
                'service_name' => 'RSUD Soedarso Pontianak',
                'address' => 'Jl. DR. Soedarso No.1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '13',
                'user_id' => $superAdminId,
                'phone' => '0561- 732101',
                'service_name' => 'RS Umum St.Antonius Pontianak',
                'address' => 'Jl. Khw. Hasyim No.249',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '14',
                'user_id' => $superAdminId,
                'phone' => '0561-739630',
                'service_name' => 'Rs Universitas Tanjungpura Pontianak',
                'address' => 'Jl. Prof. Hadari Nawawi komp.Untan',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '15',
                'user_id' => $superAdminId,
                'phone' => '0561-734373',
                'service_name' => 'RS Umum Kharitas Bhakti Pontianak',
                'address' => 'Jl. Siam no.153',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '16',
                'user_id' => $superAdminId,
                'phone' => '0561-584888',
                'service_name' => 'RS Mitra Medika Pontianak',
                'address' => 'Jl. Sutan Abdurahman no.25',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '17',
                'user_id' => $superAdminId,
                'phone' => '0561-739685',
                'service_name' => 'RS Islam YARSI Pontianak',
                'address' => 'Jl. Tanjung Raya II',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '18',
                'user_id' => $superAdminId,
                'phone' => '0561-767525',
                'service_name' => 'RS Jiwa Daerah Sungaibangkong Ponntianak',
                'address' => 'Jl. Alianyang no.1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '19',
                'user_id' => $superAdminId,
                'phone' => '0561-739042',
                'service_name' => 'RS Pro MEDIKA Pontianak',
                'address' => 'Jl. Gusti Sulung Lelanang',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '20',
                'user_id' => $superAdminId,
                'phone' => '0561-581818',
                'service_name' => 'RS Anugerah Bunda Khatulistiwa Pontianak',
                'address' => 'Jl. Ayani',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '21',
                'user_id' => $superAdminId,
                'phone' => '0561-736610',
                'service_name' => 'RS Anton Soejarwo  Pontianak',
                'address' => 'Jl. K.S. Tubun no.14',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '22',
                'user_id' => $superAdminId,
                'phone' => '0561-765092',
                'service_name' => 'RS Bersalin Jeumpa Pontianak',
                'address' => 'Jl. Sutan Abdurahman no.54',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '23',
                'user_id' => $superAdminId,
                'phone' => '0561-7169594',
                'service_name' => 'RS Bersalin Nabasa Pontianak',
                'address' => 'Jl. Sei. Raya Dalam no.65',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '24',
                'user_id' => $superAdminId,
                'phone' => '0561-732181',
                'service_name' => 'Pelabuhan Dwikora Pontianak',
                'address' => 'Jl. Pak Kasih',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '25',
                'user_id' => $superAdminId,
                'phone' => '0561-730897',
                'service_name' => 'Dinas Kebakaran Kota Pontianak',
                'address' => 'Jl. Letjen Sutoyo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '26',
                'user_id' => $superAdminId,
                'phone' => '0561-75274534',
                'service_name' => 'Pemadam Mitra Jawi',
                'address' => 'Jl. Hasanudin',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '27',
                'user_id' => $superAdminId,
                'phone' => '81345465527',
                'service_name' => 'Pemadam PPKJ',
                'address' => 'Jl. Komyos Sudarso',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '28',
                'user_id' => $superAdminId,
                'phone' => '0813 5266 2287',
                'service_name' => 'Bhakti 3 Serumpun',
                'address' => 'Jl. Komyos Sudarso Perum II',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '29',
                'user_id' => $superAdminId,
                'phone' => '0561 – 7171066',
                'service_name' => 'Bhakti Sei. Beliung',
                'address' => 'Jl. Komyos Sudarso',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '30',
                'user_id' => $superAdminId,
                'phone' => '0561 – 795569',
                'service_name' => 'Swadesi Borneo',
                'address' => 'Jl. Tabrani Ahmad',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '31',
                'user_id' => $superAdminId,
                'phone' => '0812 5604 5454',
                'service_name' => 'Redam 21',
                'address' => 'Jl. Komyos Sudarso Gg. Karya Tani',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '32',
                'user_id' => $superAdminId,
                'phone' => '0823 6017 2578',
                'service_name' => 'Pemadam Kota Baru',
                'address' => 'Jl. Komyos Sudarso',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '33',
                'user_id' => $superAdminId,
                'phone' => '0561 – 740916',
                'service_name' => 'Pemadam Panca Bakti',
                'address' => 'Jl. Suprapto No. 30',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '34',
                'user_id' => $superAdminId,
                'phone' => '0561 – 739200',
                'service_name' => 'Pemadam Budi Pekerti',
                'address' => 'Jl. Gajahmada No. 147',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '35',
                'user_id' => $superAdminId,
                'phone' => '0561 – 747349',
                'service_name' => 'Pemadam Mitra Bhakti',
                'address' => 'Jl. Siam',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '36',
                'user_id' => $superAdminId,
                'phone' => '0561 – 7511899',
                'service_name' => 'Pemadam YPKK',
                'address' => 'Jl. Kedah',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '37',
                'user_id' => $superAdminId,
                'phone' => '0813 4529 7347',
                'service_name' => 'Pemadam Pandu Siaga',
                'address' => 'Jl. Wonobaru',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '38',
                'user_id' => $superAdminId,
                'phone' => '0821 5928 0006',
                'service_name' => 'Pemadam Join Fitrah',
                'address' => 'Jl. Adisucipto Gg. Fitrah',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '39',
                'user_id' => $superAdminId,
                'phone' => '0812 5678 5544',
                'service_name' => 'Pemadam Purnama',
                'address' => 'Jl. Purnama',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '40',
                'user_id' => $superAdminId,
                'phone' => '0852 4525 6444',
                'service_name' => 'Pemadam Kapuas Bhakti',
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '41',
                'user_id' => $superAdminId,
                'phone' => '0812 5676 6669',
                'service_name' => 'Pemadam Armed',
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '42',
                'user_id' => $superAdminId,
                'phone' => '0813 4594 5401',
                'service_name' => 'Pemadam Bintang Timur',
                'address' => 'Jl. Saman Hadi Perum III',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '43',
                'user_id' => $superAdminId,
                'phone' => '0561 – 571420',
                'service_name' => 'Pemadam Hikmah',
                'address' => 'Jl. Tanjung Raya Gg. Alhuda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '44',
                'user_id' => $superAdminId,
                'phone' => '000000',
                'service_name' => 'Pemadam PKPA 86',
                'address' => 'Jl. Ya’ M. Sabran No. 86',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '45',
                'user_id' => $superAdminId,
                'phone' => '0561 – 883030',
                'service_name' => 'Pemadam BPAS',
                'address' => 'Jl. Situt Mahmud No. 16 A',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '46',
                'user_id' => $superAdminId,
                'phone' => '0561 – 887450',
                'service_name' => 'Pemadam UPKGR',
                'address' => 'Gg. Selat Sunda',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '47',
                'user_id' => $superAdminId,
                'phone' => '0821 5945 5685',
                'service_name' => 'Pemadam CSK',
                'address' => 'Jl. Situt Mahmud Gg. Selat Madura',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '48',
                'user_id' => $superAdminId,
                'phone' => '0853 4606 1331',
                'service_name' => 'Pemadam Tri Tura',
                'address' => 'Jl. Tanjung Raya I',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '49',
                'user_id' => $superAdminId,
                'phone' => '0561- 734120',
                'service_name' => 'PLN Gangguan Pontianak',
                'address' => 'Jl. Gusti Sulung Lelanang No.3',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '50',
                'user_id' => $superAdminId,
                'phone' => '0561-7510000 3',
                'service_name' => 'PDAM Pontianak',
                'address' => 'Jl. Imam Bonjol No.430',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '51',
                'user_id' => $superAdminId,
                'phone' => '0561-7344481',
                'service_name' => 'Kodim 1207 Pontianak',
                'address' => 'Benua Melayu Darat, Pontianak Selatan',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '52',
                'user_id' => $superAdminId,
                'phone' => '0561-884469',
                'service_name' => 'Koramil 01 Pontianak Utara',
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '53',
                'user_id' => $superAdminId,
                'phone' => '0561-732475',
                'service_name' => 'Koramil 02 Pontianak Barat',
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '54',
                'user_id' => $superAdminId,
                'phone' => '0561-743475',
                'service_name' => 'Koramil 03 Pontianak Selatan',
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '55',
                'user_id' => $superAdminId,
                'phone' => '0561-761916',
                'service_name' => 'Koramil 04 Pontianak Timur',
                'address' => 'Jl. Perintis Kemerdekaan No.2',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '56',
                'user_id' => $superAdminId,
                'phone' => '0561-731202',
                'service_name' => 'Satpol PP Kota Pontianak',
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL
            ),
            array(
                'id' => '1334',
                'user_id' => $superAdminId,
                'phone' => '0561-732465',
                'service_name' => 'Polda Kalbar 2',
                'address' => 'Jl. Ayani',
                'created_at' => '2021-07-01 14:00:16',
                'updated_at' => '2021-07-01 14:00:16',
                'deleted_at' => NULL
            ),
            array(
                'id' => '1335',
                'user_id' => $superAdminId,
                'phone' => '0811573119',
                'service_name' => 'PSC119 Dinkes Kota Pontianak',
                'address' => 'Jl. Jend. Ahmad Yani Kelurahan Parit Tokaya, Kecamatan Pontianak Selatan.',
                'created_at' => '2023-07-12 04:47:50',
                'updated_at' => '2023-07-12 04:47:50',
                'deleted_at' => NULL
            )
        );

        DB::beginTransaction();
        try {
            DB::table('call_centers')->insert($telepon_penting);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
