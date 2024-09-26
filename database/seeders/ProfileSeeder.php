<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;

        $user_details = array(
            array(
                'id' => '1',
                'user_id' => '28',
                'identity_number' => '12345',
                'date_born' => '2019-01-03',
                'gender' => 'L',
                'phone' => '0898',
                'address' => 'Kubu Raya',
                'created_at' => '2019-07-05 00:49:06',
                'updated_at' => '2019-07-05 02:57:27'
            ),
            array(
                'id' => '3',
                'user_id' => '35',
                'identity_number' => '3201516041',
                'date_born' => '2019-07-11',
                'gender' => 'L',
                'phone' => '08988382108',
                'address' => 'Kallbar',
                'created_at' => '2019-07-10 17:01:15',
                'updated_at' => '2019-07-10 17:01:26'
            ),
            array(
                'id' => '4',
                'user_id' => '38',
                'identity_number' => '6101021103890007',
                'date_born' => '1989-03-11',
                'gender' => 'L',
                'phone' => '089693440043',
                'address' => 'Jl. Karangan blok C no.14 komplek untan, bansir laut, pontianak tenggara',
                'created_at' => '2019-07-11 20:56:38',
                'updated_at' => '2019-07-11 20:56:58'
            ),
            array(
                'id' => '5',
                'user_id' => '46',
                'identity_number' => '6108074205990007',
                'date_born' => '2020-09-29',
                'gender' => 'P',
                'phone' => '081520403860',
                'address' => 'jln putri dara hitam GG tani 4',
                'created_at' => '2020-09-28 13:02:21',
                'updated_at' => '2020-09-28 13:02:21'
            ),
            array(
                'id' => '6',
                'user_id' => '48',
                'identity_number' => '6112011201950010',
                'date_born' => '1995-01-12',
                'gender' => 'L',
                'phone' => '081285761761',
                'address' => 'Parit Pangeran',
                'created_at' => '2020-09-28 16:21:10',
                'updated_at' => '2020-09-28 16:21:10'
            ),
            array(
                'id' => '7',
                'user_id' => '49',
                'identity_number' => '6171011712920002',
                'date_born' => '1992-12-17',
                'gender' => 'L',
                'phone' => '082322846069',
                'address' => 'Jl. Karna Sosial Komp. Asuransi No. 5, Pontianak',
                'created_at' => '2020-09-28 23:36:41',
                'updated_at' => '2020-09-28 23:36:41'
            ),
            array(
                'id' => '8',
                'user_id' => '110',
                'identity_number' => '6171030709730005',
                'date_born' => '2020-10-14',
                'gender' => 'L',
                'phone' => '089634379679',
                'address' => 'jl. Tabrani Ahmad',
                'created_at' => '2020-10-13 17:08:47',
                'updated_at' => '2020-10-13 17:09:20'
            ),
            array(
                'id' => '9',
                'user_id' => '116',
                'identity_number' => '61010623078770001',
                'date_born' => '1987-07-23',
                'gender' => 'L',
                'phone' => '085750000724',
                'address' => 'Parit Mayor',
                'created_at' => '2020-10-19 13:01:37',
                'updated_at' => '2020-10-19 13:01:37'
            ),
            array(
                'id' => '10',
                'user_id' => '119',
                'identity_number' => '-611205011080001',
                'date_born' => '2020-10-21',
                'gender' => 'L',
                'phone' => '-082158691032',
                'address' => 'Pontianak',
                'created_at' => '2020-10-20 23:05:10',
                'updated_at' => '2020-10-20 23:05:33'
            ),
            array(
                'id' => '15',
                'user_id' => '123',
                'identity_number' => '-6112050110880001',
                'date_born' => '2020-10-22',
                'gender' => 'L',
                'phone' => '-082158691032',
                'address' => '-pontianak',
                'created_at' => '2020-10-21 14:06:39',
                'updated_at' => '2020-10-21 14:07:35'
            ),
            array(
                'id' => '16',
                'user_id' => '134',
                'identity_number' => '- 0161978070620131201',
                'date_born' => '1978-07-06',
                'gender' => 'L',
                'phone' => '081256071799',
                'address' => '- Dr Wahidin sepakat',
                'created_at' => '2020-10-25 21:11:48',
                'updated_at' => '2020-10-25 21:12:29'
            ),
            array(
                'id' => '17',
                'user_id' => '135',
                'identity_number' => '-6112091108690008',
                'date_born' => '2020-10-26',
                'gender' => 'L',
                'phone' => '-082358513060',
                'address' => '-Samping Tower Telkomsel RT.4/RW.I Dusun Karya Utama Desa Jeruju Besar Kecamatan Sungai Kakap Kabupaten Kuburaya Propinsi Kalimantan Barat kodepos 78381',
                'created_at' => '2020-10-26 02:40:21',
                'updated_at' => '2020-10-26 02:40:21'
            ),
            array(
                'id' => '18',
                'user_id' => '139',
                'identity_number' => '6171032806830006',
                'date_born' => '2020-10-28',
                'gender' => 'L',
                'phone' => '081348757215',
                'address' => 'Jalan Tanjung Raya 2 Perumahan Almutahar Ceria Nomor 1A Kelurahan Parit Mayor Kecamatan Pontianak Timur Kota Pontianak',
                'created_at' => '2020-10-28 00:28:08',
                'updated_at' => '2020-10-28 00:28:30'
            ),
            array(
                'id' => '19',
                'user_id' => '145',
                'identity_number' => '-6171036101970005',
                'date_born' => '1997-01-21',
                'gender' => 'P',
                'phone' => '-089601076989',
                'address' => 'jalan kom Yos Sudarso gg.duku baru dalam no.90 b',
                'created_at' => '2020-10-29 13:33:23',
                'updated_at' => '2020-10-29 13:33:34'
            ),
            array(
                'id' => '20',
                'user_id' => '146',
                'identity_number' => '6171062303830002',
                'date_born' => '1983-03-23',
                'gender' => 'L',
                'phone' => '081253000968',
                'address' => 'Jl.sei raya dalam komp.permata agung no bb.8 kel.bangka belitung darat kec.pontianak tenggara',
                'created_at' => '2020-10-29 13:56:55',
                'updated_at' => '2020-10-29 13:56:55'
            ),
            array(
                'id' => '21',
                'user_id' => '148',
                'identity_number' => '6171012809970005',
                'date_born' => '1997-09-28',
                'gender' => 'L',
                'phone' => '089684074200',
                'address' => '-',
                'created_at' => '2020-10-30 14:03:08',
                'updated_at' => '2020-10-30 14:03:08'
            ),
            array(
                'id' => '22',
                'user_id' => '149',
                'identity_number' => '-6112096608910002',
                'date_born' => '2020-11-02',
                'gender' => 'P',
                'phone' => '-085245990810',
                'address' => '-jl karya komp karya indah 2',
                'created_at' => '2020-11-01 17:13:12',
                'updated_at' => '2020-11-01 17:13:12'
            ),
            array(
                'id' => '23',
                'user_id' => '160',
                'identity_number' => '6112082303950002',
                'date_born' => '1995-03-23',
                'gender' => 'L',
                'phone' => '085820686701',
                'address' => 'Jl. Adisucipto Gg. H. Haris No.31',
                'created_at' => '2020-11-04 15:45:20',
                'updated_at' => '2020-11-04 15:45:20'
            ),
            array(
                'id' => '24',
                'user_id' => '162',
                'identity_number' => '-6171031510740010',
                'date_born' => '1974-10-15',
                'gender' => 'L',
                'phone' => '-085787049817',
                'address' => 'Pontianak',
                'created_at' => '2020-11-08 10:00:00',
                'updated_at' => '2020-11-08 10:00:00'
            ),
            array(
                'id' => '25',
                'user_id' => '168',
                'identity_number' => '-',
                'date_born' => '1987-05-21',
                'gender' => 'L',
                'phone' => '082158696869',
                'address' => 'pontianak',
                'created_at' => '2020-11-12 02:12:40',
                'updated_at' => '2020-11-12 02:12:40'
            ),
            array(
                'id' => '26',
                'user_id' => '173',
                'identity_number' => '-6101132612860003',
                'date_born' => '1986-12-26',
                'gender' => 'L',
                'phone' => '-082255245081',
                'address' => '-JL. H. R. A Rahman Gg. Bandahara No.8, Kel.Sungai Jawi Dalam, Kec. Pontianak Barat',
                'created_at' => '2020-11-15 05:11:33',
                'updated_at' => '2020-11-15 05:11:33'
            ),
            array(
                'id' => '27',
                'user_id' => '176',
                'identity_number' => '6171021312980003',
                'date_born' => '2020-11-16',
                'gender' => 'L',
                'phone' => '089693753933',
                'address' => 'Jl. tanjung raya 2. gg nusa indah parit mayor',
                'created_at' => '2020-11-16 02:09:53',
                'updated_at' => '2020-11-16 02:10:58'
            ),
            array(
                'id' => '29',
                'user_id' => '197',
                'identity_number' => '-6171035906650008',
                'date_born' => '1965-06-19',
                'gender' => 'P',
                'phone' => '-081253562332',
                'address' => 'Puskesmas Pal lima Pontianak',
                'created_at' => '2020-12-07 19:13:04',
                'updated_at' => '2020-12-07 19:13:04'
            ),
            array(
                'id' => '30',
                'user_id' => '202',
                'identity_number' => '6171045202000014',
                'date_born' => '2000-02-12',
                'gender' => 'P',
                'phone' => '089693427416',
                'address' => 'Siantan hilir, Pontianak Utara',
                'created_at' => '2020-12-09 20:47:30',
                'updated_at' => '2020-12-09 20:47:30'
            ),
            array(
                'id' => '32',
                'user_id' => '208',
                'identity_number' => '6171020408110011',
                'date_born' => '1991-11-27',
                'gender' => 'L',
                'phone' => '087840128537',
                'address' => 'pontianak timur kelurahan parit mayor',
                'created_at' => '2020-12-16 00:02:53',
                'updated_at' => '2020-12-16 00:02:53'
            ),
            array(
                'id' => '33',
                'user_id' => '213',
                'identity_number' => '-6171041908900004',
                'date_born' => '2020-12-21',
                'gender' => 'L',
                'phone' => '-082255084678',
                'address' => '-Jl.khatulistiwa Gg.Karya Bakti  RT/RW 001/019 Kelurahan Batulayang Kecamatan Pontianak Utara.',
                'created_at' => '2020-12-20 14:09:22',
                'updated_at' => '2020-12-20 14:11:13'
            ),
            array(
                'id' => '34',
                'user_id' => '216',
                'identity_number' => '-6112092801980005',
                'date_born' => '2020-12-23',
                'gender' => 'L',
                'phone' => '-085750134894',
                'address' => 'pontianak selatan',
                'created_at' => '2020-12-22 10:49:29',
                'updated_at' => '2020-12-22 10:50:02'
            ),
            array(
                'id' => '36',
                'user_id' => '349',
                'identity_number' => '-',
                'date_born' => '1981-12-03',
                'gender' => 'L',
                'phone' => '-089614754164',
                'address' => 'kalimantan barat',
                'created_at' => '2021-07-04 00:34:13',
                'updated_at' => '2021-07-04 00:34:26'
            ),
            array(
                'id' => '37',
                'user_id' => '220',
                'identity_number' => '-',
                'date_born' => '1999-05-19',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2021-07-04 13:19:05',
                'updated_at' => '2021-07-04 13:19:05'
            ),
            array(
                'id' => '38',
                'user_id' => '356',
                'identity_number' => '-',
                'date_born' => '1994-12-13',
                'gender' => 'P',
                'phone' => '089693219341',
                'address' => 'Sungai Raya Dalam',
                'created_at' => '2021-07-06 11:57:52',
                'updated_at' => '2021-07-06 11:57:52'
            ),
            array(
                'id' => '39',
                'user_id' => '358',
                'identity_number' => '-',
                'date_born' => '1999-10-29',
                'gender' => 'P',
                'phone' => '081257129509',
                'address' => 'Jl. Puyuh no 26',
                'created_at' => '2021-07-10 11:53:13',
                'updated_at' => '2021-07-10 11:53:13'
            ),
            array(
                'id' => '40',
                'user_id' => '362',
                'identity_number' => '-',
                'date_born' => '1985-06-04',
                'gender' => 'P',
                'phone' => '-081256455823',
                'address' => '-jl.Tabrani Ahmad Gg.bersama 3 no.73/67',
                'created_at' => '2021-07-20 16:05:17',
                'updated_at' => '2021-07-20 16:05:17'
            ),
            array(
                'id' => '41',
                'user_id' => '217',
                'identity_number' => '-',
                'date_born' => '1999-04-21',
                'gender' => 'L',
                'phone' => '08993298366',
                'address' => NULL,
                'created_at' => '2021-07-24 22:47:54',
                'updated_at' => '2021-07-24 22:47:54'
            ),
            array(
                'id' => '42',
                'user_id' => '199',
                'identity_number' => '-',
                'date_born' => '1990-11-30',
                'gender' => 'L',
                'phone' => '-082331366143',
                'address' => '-',
                'created_at' => '2021-08-04 13:20:18',
                'updated_at' => '2021-08-04 13:20:18'
            ),
            array(
                'id' => '43',
                'user_id' => '372',
                'identity_number' => '-',
                'date_born' => '1978-07-28',
                'gender' => 'L',
                'phone' => '085650891256',
                'address' => 'Pontianak Tenggara',
                'created_at' => '2021-08-13 14:29:26',
                'updated_at' => '2021-08-13 14:29:26'
            ),
            array(
                'id' => '44',
                'user_id' => '378',
                'identity_number' => '-',
                'date_born' => '1999-11-10',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2021-08-25 12:19:17',
                'updated_at' => '2021-08-25 12:19:17'
            ),
            array(
                'id' => '45',
                'user_id' => '394',
                'identity_number' => '-',
                'date_born' => '1961-09-24',
                'gender' => 'L',
                'phone' => '-089526820088',
                'address' => 'Jalan Swadiri No. 7 Tanjung Raya 2 Kel. Banjar Serasan RT. 004 RW. 002 Kecamatan Pontianak Timur',
                'created_at' => '2021-09-25 00:31:14',
                'updated_at' => '2021-09-25 00:32:41'
            ),
            array(
                'id' => '46',
                'user_id' => '396',
                'identity_number' => '-',
                'date_born' => '1986-01-24',
                'gender' => 'L',
                'phone' => '081250228374',
                'address' => 'Kota Baru',
                'created_at' => '2021-09-30 18:51:19',
                'updated_at' => '2021-09-30 18:51:19'
            ),
            array(
                'id' => '47',
                'user_id' => '280',
                'identity_number' => '-',
                'date_born' => '1988-10-18',
                'gender' => 'L',
                'phone' => '081345610032',
                'address' => 'Jl. Tebu Gg. Rahmad No. 4 RT. 003 RW. 032 Kel. Sungai Beliung Kec. Pontianak Barat',
                'created_at' => '2021-10-10 09:53:50',
                'updated_at' => '2021-10-10 09:53:50'
            ),
            array(
                'id' => '48',
                'user_id' => '400',
                'identity_number' => '-',
                'date_born' => '1976-12-20',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2021-10-13 04:12:19',
                'updated_at' => '2021-10-13 04:12:19'
            ),
            array(
                'id' => '49',
                'user_id' => '402',
                'identity_number' => '-',
                'date_born' => '1991-05-04',
                'gender' => 'P',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2021-10-18 06:01:47',
                'updated_at' => '2021-10-18 06:01:47'
            ),
            array(
                'id' => '50',
                'user_id' => '414',
                'identity_number' => '-',
                'date_born' => '1991-06-21',
                'gender' => 'L',
                'phone' => '-082123457073',
                'address' => '-',
                'created_at' => '2021-10-28 23:05:23',
                'updated_at' => '2021-10-28 23:05:23'
            ),
            array(
                'id' => '51',
                'user_id' => '419',
                'identity_number' => '-',
                'date_born' => '2022-03-08',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-03-14 00:17:32',
                'updated_at' => '2022-03-14 00:17:32'
            ),
            array(
                'id' => '52',
                'user_id' => '431',
                'identity_number' => '-',
                'date_born' => '2006-01-30',
                'gender' => 'P',
                'phone' => '08971231410',
                'address' => '-',
                'created_at' => '2022-03-17 00:05:22',
                'updated_at' => '2022-03-17 00:05:22'
            ),
            array(
                'id' => '53',
                'user_id' => '462',
                'identity_number' => '-',
                'date_born' => '1995-08-17',
                'gender' => 'L',
                'phone' => '-085654044213',
                'address' => '-Jln.Ujung pandang 2',
                'created_at' => '2022-03-30 07:40:16',
                'updated_at' => '2022-03-30 07:40:50'
            ),
            array(
                'id' => '54',
                'user_id' => '467',
                'identity_number' => '-',
                'date_born' => '1990-06-17',
                'gender' => 'L',
                'phone' => '-081549284923',
                'address' => '-jln tanjung harapan gg. mitra bersama',
                'created_at' => '2022-03-31 22:18:53',
                'updated_at' => '2022-03-31 22:18:53'
            ),
            array(
                'id' => '55',
                'user_id' => '471',
                'identity_number' => '-',
                'date_born' => '1997-05-22',
                'gender' => 'L',
                'phone' => '-089670012381',
                'address' => 'Jl. Tabrani Ahmad Komp. Tabrani Indah B8',
                'created_at' => '2022-04-01 05:20:38',
                'updated_at' => '2022-04-01 05:20:38'
            ),
            array(
                'id' => '56',
                'user_id' => '473',
                'identity_number' => '-',
                'date_born' => '1979-01-01',
                'gender' => 'L',
                'phone' => '-082148777364',
                'address' => '-jalan parit pangeran gg permata sari no 20 siantan',
                'created_at' => '2022-04-02 04:48:28',
                'updated_at' => '2022-04-02 04:48:28'
            ),
            array(
                'id' => '57',
                'user_id' => '476',
                'identity_number' => '-',
                'date_born' => '1999-12-09',
                'gender' => 'P',
                'phone' => '085787174191',
                'address' => 'Jl Tani Gg Rimba',
                'created_at' => '2022-04-05 03:43:58',
                'updated_at' => '2022-04-05 03:43:58'
            ),
            array(
                'id' => '58',
                'user_id' => '488',
                'identity_number' => '-',
                'date_born' => '1997-12-20',
                'gender' => 'L',
                'phone' => '081346894092',
                'address' => 'KOTA PONTIANAK KALIMANTAN BARAT',
                'created_at' => '2022-04-06 21:58:05',
                'updated_at' => '2022-04-06 21:58:05'
            ),
            array(
                'id' => '59',
                'user_id' => '420',
                'identity_number' => '-',
                'date_born' => '1994-09-24',
                'gender' => 'L',
                'phone' => '-081649120245',
                'address' => '-JL. PERDAMAIAN KOMP. ARI KARYA INDAH 4',
                'created_at' => '2022-04-11 23:45:51',
                'updated_at' => '2022-04-11 23:45:51'
            ),
            array(
                'id' => '60',
                'user_id' => '520',
                'identity_number' => '-',
                'date_born' => '1997-04-17',
                'gender' => 'L',
                'phone' => '-085821463955 -081522552854',
                'address' => 'Kalimantan Barat Pontianak Utara Jl,28 Oktober Gg,Kerakterdest Jalur.II No.5D',
                'created_at' => '2022-04-12 08:50:36',
                'updated_at' => '2022-07-12 13:59:16'
            ),
            array(
                'id' => '61',
                'user_id' => '525',
                'identity_number' => '-',
                'date_born' => '1978-06-29',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-04-13 21:23:24',
                'updated_at' => '2022-04-13 21:23:24'
            ),
            array(
                'id' => '62',
                'user_id' => '571',
                'identity_number' => '-',
                'date_born' => '1986-07-15',
                'gender' => 'L',
                'phone' => '+6282157873524',
                'address' => 'Jl. Prof. Dr. Hamka',
                'created_at' => '2022-05-03 23:58:25',
                'updated_at' => '2022-05-03 23:58:25'
            ),
            array(
                'id' => '63',
                'user_id' => '611',
                'identity_number' => '-',
                'date_born' => '1999-02-03',
                'gender' => 'L',
                'phone' => '085348324005',
                'address' => 'Jl. Sepakat 2',
                'created_at' => '2022-05-11 04:40:35',
                'updated_at' => '2022-05-11 04:40:35'
            ),
            array(
                'id' => '64',
                'user_id' => '505',
                'identity_number' => '-',
                'date_born' => '1983-06-06',
                'gender' => 'L',
                'phone' => '-081350951795',
                'address' => '-JL.HRA.RACHMAN GG BANDAHARA NO.17 SUNGAIJAWI DALAM PONTIANAKBARAT',
                'created_at' => '2022-05-11 08:26:53',
                'updated_at' => '2022-05-11 08:26:53'
            ),
            array(
                'id' => '65',
                'user_id' => '619',
                'identity_number' => '-',
                'date_born' => '1992-09-28',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-05-13 09:04:35',
                'updated_at' => '2022-05-13 09:04:35'
            ),
            array(
                'id' => '66',
                'user_id' => '626',
                'identity_number' => '-',
                'date_born' => '1999-12-10',
                'gender' => 'P',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-05-17 09:18:50',
                'updated_at' => '2022-05-17 09:18:50'
            ),
            array(
                'id' => '67',
                'user_id' => '628',
                'identity_number' => '-',
                'date_born' => '1995-02-27',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-05-18 00:25:26',
                'updated_at' => '2022-05-18 00:25:26'
            ),
            array(
                'id' => '68',
                'user_id' => '629',
                'identity_number' => '-',
                'date_born' => '1991-09-13',
                'gender' => 'L',
                'phone' => '082274407003',
                'address' => 'jl. padat karya, komp. didis permai 6 no. a12',
                'created_at' => '2022-05-18 20:27:01',
                'updated_at' => '2022-05-18 20:27:01'
            ),
            array(
                'id' => '69',
                'user_id' => '633',
                'identity_number' => '-',
                'date_born' => '1982-07-08',
                'gender' => 'L',
                'phone' => '081649797866',
                'address' => 'Jl H Rais A Rachman. Komplek Pawan Permai. No.88B Pontianak.',
                'created_at' => '2022-05-21 18:48:18',
                'updated_at' => '2022-05-21 18:48:18'
            ),
            array(
                'id' => '70',
                'user_id' => '673',
                'identity_number' => '-',
                'date_born' => '2001-04-24',
                'gender' => 'P',
                'phone' => '085393578631',
                'address' => 'Jln. Adi Sucipto Gg.H.Saleh No. 142',
                'created_at' => '2022-06-07 07:58:34',
                'updated_at' => '2022-06-07 07:58:34'
            ),
            array(
                'id' => '71',
                'user_id' => '395',
                'identity_number' => '-',
                'date_born' => '1970-06-02',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-Batam',
                'created_at' => '2022-06-09 02:22:56',
                'updated_at' => '2022-06-09 02:22:56'
            ),
            array(
                'id' => '72',
                'user_id' => '690',
                'identity_number' => '-',
                'date_born' => '1991-04-27',
                'gender' => 'L',
                'phone' => '085249977237',
                'address' => 'Jl Karya, Komp Ari Karya Indah 1 No A 2',
                'created_at' => '2022-06-11 06:27:53',
                'updated_at' => '2022-06-11 06:27:53'
            ),
            array(
                'id' => '73',
                'user_id' => '762',
                'identity_number' => '-',
                'date_born' => '1995-03-28',
                'gender' => 'P',
                'phone' => '089671565180',
                'address' => 'gg.selat bangka .siantan hulu pontianak utara kalimantan barat',
                'created_at' => '2022-06-25 20:38:43',
                'updated_at' => '2022-06-25 20:38:43'
            ),
            array(
                'id' => '74',
                'user_id' => '767',
                'identity_number' => '-',
                'date_born' => '1994-08-19',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-07-02 15:40:30',
                'updated_at' => '2022-07-02 15:40:30'
            ),
            array(
                'id' => '75',
                'user_id' => '768',
                'identity_number' => '-',
                'date_born' => '1980-05-25',
                'gender' => 'L',
                'phone' => '08975636010',
                'address' => 'jln tanjung harapan GG Muhajirin no 03 Pontianak timur',
                'created_at' => '2022-07-03 05:36:55',
                'updated_at' => '2022-07-03 05:36:55'
            ),
            array(
                'id' => '76',
                'user_id' => '680',
                'identity_number' => '-',
                'date_born' => '2022-07-08',
                'gender' => 'L',
                'phone' => '082148781797',
                'address' => 'JL. Tanjung Harapan Gang Banjar Sari no. 11',
                'created_at' => '2022-07-07 21:11:31',
                'updated_at' => '2022-07-07 21:11:31'
            ),
            array(
                'id' => '77',
                'user_id' => '784',
                'identity_number' => '-',
                'date_born' => '1991-04-04',
                'gender' => 'L',
                'phone' => '085171713940',
                'address' => 'Jl. Parit Haji Husin 2 Komplek Rimbawan No.27',
                'created_at' => '2022-07-08 22:23:48',
                'updated_at' => '2022-07-08 22:23:48'
            ),
            array(
                'id' => '78',
                'user_id' => '796',
                'identity_number' => '-',
                'date_born' => '1984-04-13',
                'gender' => 'L',
                'phone' => '-0895609985518',
                'address' => '-jalan purnama dua komplek purnama hijau jalur 2 c11',
                'created_at' => '2022-07-16 09:25:23',
                'updated_at' => '2022-07-16 09:25:23'
            ),
            array(
                'id' => '79',
                'user_id' => '43',
                'identity_number' => '-',
                'date_born' => '1983-04-23',
                'gender' => 'L',
                'phone' => '08125678583',
                'address' => 'Jl. HRA Rachman Gg. Gunung Palong No. 17 A',
                'created_at' => '2022-07-24 03:57:54',
                'updated_at' => '2022-07-24 03:57:54'
            ),
            array(
                'id' => '80',
                'user_id' => '836',
                'identity_number' => '-',
                'date_born' => '2001-10-01',
                'gender' => 'L',
                'phone' => '-089699732944',
                'address' => 'Jalan. Nurul Huda 2 Gang. Mandiri Utama No. 44',
                'created_at' => '2022-08-01 19:43:40',
                'updated_at' => '2022-08-01 19:43:40'
            ),
            array(
                'id' => '81',
                'user_id' => '841',
                'identity_number' => '-',
                'date_born' => '1992-02-07',
                'gender' => 'P',
                'phone' => '081257274307',
                'address' => 'sepakat 2, ayani',
                'created_at' => '2022-08-02 14:44:48',
                'updated_at' => '2022-08-02 14:44:48'
            ),
            array(
                'id' => '82',
                'user_id' => '855',
                'identity_number' => '-',
                'date_born' => '2002-08-15',
                'gender' => 'P',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-08-09 01:01:51',
                'updated_at' => '2022-08-09 01:01:51'
            ),
            array(
                'id' => '83',
                'user_id' => '856',
                'identity_number' => '-',
                'date_born' => '2001-01-02',
                'gender' => 'L',
                'phone' => '0895321141040',
                'address' => 'Jln.Komyosudarso,GG Kelapa 1 No.10',
                'created_at' => '2022-08-09 01:02:42',
                'updated_at' => '2022-08-10 09:47:21'
            ),
            array(
                'id' => '84',
                'user_id' => '851',
                'identity_number' => '-',
                'date_born' => '2001-12-24',
                'gender' => 'L',
                'phone' => '0895329600904',
                'address' => 'jl. parit haji husein 2, wanabhakti 2 kompleks meranti indah blok e22',
                'created_at' => '2022-08-09 01:04:16',
                'updated_at' => '2022-08-09 01:04:16'
            ),
            array(
                'id' => '85',
                'user_id' => '854',
                'identity_number' => '-',
                'date_born' => '2002-04-16',
                'gender' => 'L',
                'phone' => '089693225405',
                'address' => 'Jalan Parwasal Komp Garden Mas 1 Jalur 3 Blok A4',
                'created_at' => '2022-08-09 01:04:24',
                'updated_at' => '2022-08-09 01:04:24'
            ),
            array(
                'id' => '86',
                'user_id' => '867',
                'identity_number' => '-',
                'date_born' => '2003-09-11',
                'gender' => 'P',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2022-08-15 12:26:37',
                'updated_at' => '2022-08-15 12:26:37'
            ),
            array(
                'id' => '87',
                'user_id' => '760',
                'identity_number' => '-',
                'date_born' => '2022-08-19',
                'gender' => 'L',
                'phone' => '082251415024',
                'address' => 'sanggau',
                'created_at' => '2022-08-19 07:06:07',
                'updated_at' => '2022-08-19 07:06:07'
            ),
            array(
                'id' => '88',
                'user_id' => '897',
                'identity_number' => '-',
                'date_born' => '1999-07-03',
                'gender' => 'L',
                'phone' => '-083151730460',
                'address' => '-Singkawang',
                'created_at' => '2022-08-29 03:43:15',
                'updated_at' => '2022-08-29 03:43:15'
            ),
            array(
                'id' => '89',
                'user_id' => '906',
                'identity_number' => '-',
                'date_born' => '2003-09-06',
                'gender' => 'L',
                'phone' => '089510798804',
                'address' => '-',
                'created_at' => '2022-08-31 14:23:56',
                'updated_at' => '2022-08-31 14:23:56'
            ),
            array(
                'id' => '90',
                'user_id' => '908',
                'identity_number' => '-',
                'date_born' => '1990-02-16',
                'gender' => 'P',
                'phone' => '081351409127',
                'address' => 'Jl. Adi Sucipto gg. Mandiri 5',
                'created_at' => '2022-09-02 10:05:57',
                'updated_at' => '2022-09-02 10:05:57'
            ),
            array(
                'id' => '91',
                'user_id' => '913',
                'identity_number' => '-',
                'date_born' => '2001-07-30',
                'gender' => 'P',
                'phone' => '-081520989248',
                'address' => '- jln swadaya komplek perumahan Kinara Puri',
                'created_at' => '2022-09-07 20:29:37',
                'updated_at' => '2022-09-07 20:29:37'
            ),
            array(
                'id' => '92',
                'user_id' => '914',
                'identity_number' => '-',
                'date_born' => '1980-12-06',
                'gender' => 'L',
                'phone' => '-0816224098',
                'address' => '-Istana Kadriah',
                'created_at' => '2022-09-07 23:41:06',
                'updated_at' => '2022-09-07 23:41:06'
            ),
            array(
                'id' => '93',
                'user_id' => '928',
                'identity_number' => '-',
                'date_born' => '2004-04-25',
                'gender' => 'L',
                'phone' => '085754283081',
                'address' => '-',
                'created_at' => '2022-09-11 15:01:35',
                'updated_at' => '2022-09-11 15:01:35'
            ),
            array(
                'id' => '94',
                'user_id' => '979',
                'identity_number' => '-',
                'date_born' => '1972-02-29',
                'gender' => 'L',
                'phone' => '-085348584819',
                'address' => '-Jalan Ratu Sepudak ,Komplek Setapuk Asri Blok Asoka No. 83, RT.008 RW.003 Kel. Setapuk Kecil, Kec. Singkawang Utara,Kota Singkawang',
                'created_at' => '2023-01-06 09:25:29',
                'updated_at' => '2023-01-06 09:25:57'
            ),
            array(
                'id' => '95',
                'user_id' => '983',
                'identity_number' => '-',
                'date_born' => '1996-05-29',
                'gender' => 'L',
                'phone' => '082193144269',
                'address' => '-',
                'created_at' => '2023-01-08 09:37:48',
                'updated_at' => '2023-01-08 09:37:48'
            ),
            array(
                'id' => '96',
                'user_id' => '1032',
                'identity_number' => '-',
                'date_born' => '1992-10-20',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2023-02-03 04:10:33',
                'updated_at' => '2023-02-03 04:10:33'
            ),
            array(
                'id' => '97',
                'user_id' => '109',
                'identity_number' => '-',
                'date_born' => '1982-04-08',
                'gender' => 'L',
                'phone' => '085248009700',
                'address' => 'jln PNK GG. lestari no 88',
                'created_at' => '2023-02-03 04:28:49',
                'updated_at' => '2023-02-03 04:28:49'
            ),
            array(
                'id' => '98',
                'user_id' => '1037',
                'identity_number' => '-',
                'date_born' => '1988-12-30',
                'gender' => 'L',
                'phone' => '081255656700',
                'address' => 'Jl.Tabrani Ahmad Komplek Duta Marta Dua B-1, Pal Lima, Pontianak Barat, Kota Pontianak',
                'created_at' => '2023-02-05 00:42:58',
                'updated_at' => '2023-02-05 00:42:58'
            ),
            array(
                'id' => '99',
                'user_id' => '1042',
                'identity_number' => '-',
                'date_born' => '1997-03-01',
                'gender' => 'L',
                'phone' => '085393951111',
                'address' => 'pontianak travel',
                'created_at' => '2023-02-10 13:18:51',
                'updated_at' => '2023-02-10 13:18:56'
            ),
            array(
                'id' => '100',
                'user_id' => '1048',
                'identity_number' => '-',
                'date_born' => '1995-12-04',
                'gender' => 'L',
                'phone' => '081250606075',
                'address' => 'Jln Husein Hamzah Gg Rumput Permai No 05 Pontianak, Pontianak Barat, Sungai Jawi Dalam, 78115',
                'created_at' => '2023-02-22 11:11:40',
                'updated_at' => '2023-05-18 11:38:09'
            ),
            array(
                'id' => '101',
                'user_id' => '1061',
                'identity_number' => '-',
                'date_born' => '2001-10-25',
                'gender' => 'P',
                'phone' => '082158870367',
                'address' => 'Jl. Adisucipto Gg. Nursalihin',
                'created_at' => '2023-03-05 17:37:26',
                'updated_at' => '2023-03-05 17:37:26'
            ),
            array(
                'id' => '102',
                'user_id' => '1065',
                'identity_number' => '-',
                'date_born' => '2001-06-06',
                'gender' => 'L',
                'phone' => '089681081593',
                'address' => 'Jl.Khatulistiwa',
                'created_at' => '2023-03-09 16:56:19',
                'updated_at' => '2023-03-09 16:56:19'
            ),
            array(
                'id' => '103',
                'user_id' => '1066',
                'identity_number' => '-',
                'date_born' => '2004-06-27',
                'gender' => 'P',
                'phone' => '0881010886395',
                'address' => 'jl.prof m yamin,gg.melati 2',
                'created_at' => '2023-03-16 03:12:49',
                'updated_at' => '2023-03-16 03:12:49'
            ),
            array(
                'id' => '104',
                'user_id' => '1077',
                'identity_number' => '-',
                'date_born' => '1984-03-12',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-pontianak',
                'created_at' => '2023-03-25 02:50:52',
                'updated_at' => '2023-03-25 02:50:52'
            ),
            array(
                'id' => '105',
                'user_id' => '1105',
                'identity_number' => '-',
                'date_born' => '1997-01-26',
                'gender' => 'P',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2023-04-18 06:29:44',
                'updated_at' => '2023-04-18 06:29:44'
            ),
            array(
                'id' => '106',
                'user_id' => '1182',
                'identity_number' => '-',
                'date_born' => '1986-03-25',
                'gender' => 'L',
                'phone' => '08988520466',
                'address' => 'Jl Tanjung Sari Pontianak Tenggara',
                'created_at' => '2023-05-13 16:10:05',
                'updated_at' => '2023-05-13 16:10:05'
            ),
            array(
                'id' => '107',
                'user_id' => '1186',
                'identity_number' => '-',
                'date_born' => '2002-03-12',
                'gender' => 'P',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2023-05-21 04:55:09',
                'updated_at' => '2023-05-21 04:55:09'
            ),
            array(
                'id' => '108',
                'user_id' => '1190',
                'identity_number' => '-',
                'date_born' => '1988-06-12',
                'gender' => 'L',
                'phone' => '-081352177531',
                'address' => '.',
                'created_at' => '2023-05-30 06:36:21',
                'updated_at' => '2023-05-30 06:36:48'
            ),
            array(
                'id' => '109',
                'user_id' => '1208',
                'identity_number' => '-',
                'date_born' => '1993-09-08',
                'gender' => 'L',
                'phone' => '081250231870',
                'address' => '-',
                'created_at' => '2023-06-08 17:32:03',
                'updated_at' => '2023-06-08 17:32:03'
            ),
            array(
                'id' => '110',
                'user_id' => '1210',
                'identity_number' => '-',
                'date_born' => '2003-06-06',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2023-06-15 02:52:33',
                'updated_at' => '2023-06-15 02:52:33'
            ),
            array(
                'id' => '111',
                'user_id' => '1214',
                'identity_number' => '-',
                'date_born' => '1984-05-07',
                'gender' => 'P',
                'phone' => '-081546777199',
                'address' => 'rengas permai',
                'created_at' => '2023-06-25 16:44:22',
                'updated_at' => '2023-06-25 16:44:22'
            ),
            array(
                'id' => '112',
                'user_id' => '1238',
                'identity_number' => '-',
                'date_born' => '2004-12-25',
                'gender' => 'L',
                'phone' => '089516753320',
                'address' => NULL,
                'created_at' => '2023-07-21 07:09:35',
                'updated_at' => '2023-07-21 07:09:35'
            ),
            array(
                'id' => '113',
                'user_id' => '1239',
                'identity_number' => '-',
                'date_born' => '1997-05-03',
                'gender' => 'P',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2023-07-21 17:30:50',
                'updated_at' => '2023-07-21 17:30:50'
            ),
            array(
                'id' => '114',
                'user_id' => '1241',
                'identity_number' => '-',
                'date_born' => '1983-06-12',
                'gender' => 'L',
                'phone' => '-08115712683',
                'address' => '-Jln. Teluk Selamat GG. Selamat 9',
                'created_at' => '2023-07-31 06:25:37',
                'updated_at' => '2023-07-31 06:25:37'
            ),
            array(
                'id' => '115',
                'user_id' => '1246',
                'identity_number' => '-',
                'date_born' => '1988-02-01',
                'gender' => 'L',
                'phone' => '081347791168',
                'address' => '-jalan karet',
                'created_at' => '2023-08-23 10:41:15',
                'updated_at' => '2023-08-23 10:41:15'
            ),
            array(
                'id' => '116',
                'user_id' => '1275',
                'identity_number' => '-',
                'date_born' => '1978-05-08',
                'gender' => 'L',
                'phone' => '08125780797',
                'address' => 'Jalan P.H.Husin 2 Gang Barokah No.B9 Pontianak Tenggara',
                'created_at' => '2023-10-18 02:01:33',
                'updated_at' => '2023-10-18 02:01:33'
            ),
            array(
                'id' => '117',
                'user_id' => '1305',
                'identity_number' => '-',
                'date_born' => '2008-06-24',
                'gender' => 'L',
                'phone' => '-089523233261',
                'address' => '-',
                'created_at' => '2023-11-03 07:51:25',
                'updated_at' => '2023-11-03 07:51:25'
            ),
            array(
                'id' => '118',
                'user_id' => '1306',
                'identity_number' => '-',
                'date_born' => '2000-01-31',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2023-11-03 07:51:34',
                'updated_at' => '2023-11-03 07:51:34'
            ),
            array(
                'id' => '119',
                'user_id' => '1320',
                'identity_number' => '-',
                'date_born' => '1997-12-14',
                'gender' => 'P',
                'phone' => '-08999328549',
                'address' => '-',
                'created_at' => '2023-11-07 12:48:38',
                'updated_at' => '2023-11-07 12:48:38'
            ),
            array(
                'id' => '120',
                'user_id' => '1462',
                'identity_number' => '-',
                'date_born' => '1982-05-20',
                'gender' => 'L',
                'phone' => '+62565042020',
                'address' => '-',
                'created_at' => '2024-01-31 01:29:27',
                'updated_at' => '2024-01-31 01:29:27'
            ),
            array(
                'id' => '121',
                'user_id' => '1499',
                'identity_number' => '-',
                'date_born' => '1984-02-22',
                'gender' => 'L',
                'phone' => '-',
                'address' => '-',
                'created_at' => '2024-02-15 12:29:32',
                'updated_at' => '2024-02-15 12:29:32'
            ),
            array(
                'id' => '122',
                'user_id' => '1531',
                'identity_number' => '-',
                'date_born' => '1997-04-17',
                'gender' => 'L',
                'phone' => '085159441440',
                'address' => 'Jl. Budi Utomo, Komplek Surya Kencana 2, No. B8',
                'created_at' => '2024-03-03 22:18:56',
                'updated_at' => '2024-03-03 22:18:56'
            ),
            array(
                'id' => '123',
                'user_id' => '1544',
                'identity_number' => '-',
                'date_born' => '1992-01-02',
                'gender' => 'L',
                'phone' => '08112813611',
                'address' => 'Jl. Sei Raya Dalam, Komplek Vila Kencana C.5 RT.001/RW.014 Bangka Belitung Darat, Pontianak Tenggara, Kota Madya Pontianak, Kalimantan Barat 78124',
                'created_at' => '2024-03-16 22:05:34',
                'updated_at' => '2024-03-16 22:05:34'
            ),
            array(
                'id' => '124',
                'user_id' => '1555',
                'identity_number' => '-',
                'date_born' => '1987-09-07',
                'gender' => 'L',
                'phone' => '-089621272722',
                'address' => 'purnama 2',
                'created_at' => '2024-03-23 21:38:57',
                'updated_at' => '2024-03-23 21:38:57'
            ),
            array(
                'id' => '125',
                'user_id' => '1562',
                'identity_number' => '-',
                'date_born' => '2003-04-15',
                'gender' => 'P',
                'phone' => '089660381503',
                'address' => '-',
                'created_at' => '2024-03-30 03:02:38',
                'updated_at' => '2024-03-30 03:02:38'
            ),
            array(
                'id' => '126',
                'user_id' => '1575',
                'identity_number' => '-',
                'date_born' => '2004-03-30',
                'gender' => 'P',
                'phone' => '089694134617',
                'address' => 'Serdam',
                'created_at' => '2024-05-01 02:23:16',
                'updated_at' => '2024-05-01 02:23:16'
            ),
            array(
                'id' => '127',
                'user_id' => '1589',
                'identity_number' => '-',
                'date_born' => '1986-05-28',
                'gender' => 'P',
                'phone' => '-085754186196',
                'address' => '-Ruko No. 1 Pertigaan, Jl. Abdullah, dan Starborneo Jl. Raya Desa Kapur No.10 Kav. 1, Kec. Sungai Raya, Kabupaten Kubu Raya',
                'created_at' => '2024-05-08 21:02:14',
                'updated_at' => '2024-05-08 21:02:14'
            ),
            array(
                'id' => '128',
                'user_id' => '1590',
                'identity_number' => '-',
                'date_born' => '1995-03-01',
                'gender' => 'L',
                'phone' => '08993342166',
                'address' => 'Jl. A. Yani I Gg. Sepakat 2 Blok E2 No. 81',
                'created_at' => '2024-05-09 00:26:47',
                'updated_at' => '2024-05-09 00:26:47'
            ),
            array(
                'id' => '129',
                'user_id' => '1597',
                'identity_number' => '-',
                'date_born' => '1981-02-18',
                'gender' => 'L',
                'phone' => '-082155644138',
                'address' => '-Perumahan Qeysha Indah Permai A34',
                'created_at' => '2024-06-05 18:04:40',
                'updated_at' => '2024-06-05 18:04:40'
            ),
            array(
                'id' => '130',
                'user_id' => '1599',
                'identity_number' => '-',
                'date_born' => '1984-07-28',
                'gender' => 'L',
                'phone' => '-081396088330',
                'address' => '-',
                'created_at' => '2024-06-19 20:48:03',
                'updated_at' => '2024-06-19 20:48:03'
            ),
            array(
                'id' => '131',
                'user_id' => '1607',
                'identity_number' => '-',
                'date_born' => '1982-07-09',
                'gender' => 'L',
                'phone' => '08125717042',
                'address' => '-jalan Suprapto 4 no 11',
                'created_at' => '2024-07-12 22:48:16',
                'updated_at' => '2024-07-12 22:48:16'
            ),
            array(
                'id' => '132',
                'user_id' => '1608',
                'identity_number' => '-',
                'date_born' => '1979-12-29',
                'gender' => 'L',
                'phone' => '081257876116',
                'address' => 'Jl.Karna Sosial gg.purwosari 1 kelurahan akcaya pontianak selatan',
                'created_at' => '2024-07-13 10:13:44',
                'updated_at' => '2024-07-13 10:13:44'
            ),
            array(
                'id' => '133',
                'user_id' => '1573',
                'identity_number' => '-',
                'date_born' => NULL,
                'gender' => 'L',
                'phone' => '08165715232',
                'address' => 'Diskominfo',
                'created_at' => '2024-08-20 08:23:32',
                'updated_at' => '2024-08-26 10:16:53'
            ),
            array(
                'id' => '142',
                'user_id' => '1673',
                'identity_number' => '-',
                'date_born' => NULL,
                'gender' => 'L',
                'phone' => '081345463645',
                'address' => NULL,
                'created_at' => '2024-08-29 09:41:19',
                'updated_at' => '2024-08-29 09:41:19'
            )
        );

        DB::beginTransaction();
        try {
            DB::table('profiles')->insert($user_details);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
