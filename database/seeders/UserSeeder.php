<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = array(
            array(
                'id' => '1',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'superadmin')->first()->id,
                'name' => 'superadmin',
                'username' => 'superadmin',
                'email' => 'admin@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$h9VzjxtY4m5CpMDBfy3ArOwCLZS7brgtHsXGHa0bOxo10Nnbba3n.',
                'description' => '<p>ini adalah deskripsi superadmin</p>',
                'remember_token' => 'Lucsf0wzYMq1ClmzJuBOJWtFBVS28sYoIrRWITKvzziJR0790dpWzOcBMGHx',
                'created_at' => '2018-10-14 22:05:59',
                'updated_at' => '2021-10-05 01:24:20'
            ),

            array(
                'id' => '2',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'Editor',
                'username' => 'editor',
                'email' => 'editor@example.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZKUa.TkXSygK.BaOB4EOPe0qVGoUXPp9ks0hZSvBJUhSehCquaD96',
                'description' => '<p>untuk anak magang</p>',
                'remember_token' => 'TmZAmuYxj7DltzuUwhZiiIwuUhV69zUPfuoqqVpLyeIZYmxalJNIQTYWRPNg',
                'created_at' => '2018-10-14 22:05:59',
                'updated_at' => '2024-09-02 08:27:10',
            ),

            array(
                'id' => '3',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ferdhika Yudira',
                'username' => 'ferdhika31',
                'email' => 'rpl4rt08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nFAL7DY.SddZ/Aa/UrszluhE/2uaKrLlfuMXuP5ZfMsOCzz9LB0t2',
                'description' => '<p>&nbsp; &nbsp;&nbsp;</p>',
                'remember_token' => 'Zq3IdtTG4T8w8dvV2LUECbSNPHvdgqDeaSnFxlDEvFgAmcF7ak42upR1CNjX',
                'created_at' => '2018-10-14 22:05:59',
                'updated_at' => '2020-09-27 14:13:36'
            ),

            array(
                'id' => '4',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Idekite',
                'username' => 'idekite',
                'email' => 'idekite@email.com',
                'email_verified_at' => NULL,
                'password' => '$2a$12$XTCVgjVTYYTwchXrRJRtfeeqSTsqe8u9JJ1kHaUMqC9uVRyVgNXzG',
                'description' => NULL,
                'remember_token' => 'cvCfJLR0YlhcvrEpQYwLPrOEIHQsTtp8kdXsXarn5zvmlXjGrmtPSZVHNYAd',
                'created_at' => '2018-10-14 22:05:59',
                'updated_at' => '2018-10-14 22:05:59'
            ),

            array(
                'id' => '5',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rangga Saputra',
                'username' => 'sabiran',
                'email' => 'sabiran@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.1AI9m.0f9CeF8NWVUNc4uDV9RUDGidrVpD./WavkBOGIW3ql2ptm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-23 10:39:34',
                'updated_at' => '2019-07-04 05:45:21'
            ),

            array(
                'id' => '6',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ahmad Syahroni',
                'username' => 'roni',
                'email' => 'roni@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$yzF37JcHdhXuQH.2PvQ7hOr9O0E50y/iJPgD/dF7FGOmnKkCr0Jw.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-23 10:57:37',
                'updated_at' => '2019-06-23 10:57:37'
            ),

            array(
                'id' => '8',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anugrah Savari',
                'username' => 'anugrahsavari',
                'email' => 'anugrah@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0w8Em3NTzwDS7SbAW/L9MeNlfjjE1kElXt6W8E70in8Jgr0qN/jUi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-23 16:54:34',
                'updated_at' => '2019-06-23 16:54:34'
            ),

            array(
                'id' => '10',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anugrah Savari',
                'username' => 'anugrah_savari',
                'email' => 'anugrah_savari@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Gi.BXmQvRBMMQyWSzXsRFOAbCbBLmz2X3/QNm9e.jnBByNWxrhQr6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-23 17:03:35',
                'updated_at' => '2019-06-23 17:03:35'
            ),

            array(
                'id' => '11',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anugrah Savari',
                'username' => 'anugrah',
                'email' => 'anu@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IzgNB8EScoP6Ant3zXuEC.OxObPgrHcnXUjp4180xcwjs6pIxBjPW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-23 17:37:02',
                'updated_at' => '2019-06-23 17:37:02'
            ),

            array(
                'id' => '12',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'David Simarmata',
                'username' => 'david',
                'email' => 'david@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wEbdAW2/U6AVCvlI2Mj0OOrfm91YXTPxNJsHIhbqwU4Iuz05M2bgu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 01:01:52',
                'updated_at' => '2019-06-24 01:01:52'
            ),

            array(
                'id' => '13',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'David Simarmata Bagian 2',
                'username' => 'davidke-2',
                'email' => 'davidke-2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4u5uB7ckhiRXgpFAIZv1p.A5DNANazPbpMGZiWWREv.8pTUV8Y6p2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 01:13:30',
                'updated_at' => '2019-06-24 01:13:30'
            ),

            array(
                'id' => '14',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'David Simarmata Bagian 3',
                'username' => 'davidke-3',
                'email' => 'davidke-3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Aydg.MWNtKPGQaz7GUbSgO2p1MnUZ64wcmrkWSnUEVKHBL3rbCf/i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 02:01:19',
                'updated_at' => '2019-06-24 02:01:19'
            ),

            array(
                'id' => '15',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'David Simarmata Bagian 4',
                'username' => 'davidke-4',
                'email' => 'davidke-4@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Up3oR3MZOhp6WoMHrq4oyueORmYgvEbNYlzaZGmUY6KQ6ps1wvP/S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 02:05:44',
                'updated_at' => '2019-06-24 02:05:44'
            ),

            array(
                'id' => '16',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'seibu1',
                'username' => 'seibu1',
                'email' => 'seibu1@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4jrDoWSmYR8zaNzosfBdMO1kQf12D9Hb569spyzdmYHeIp/0TzCLO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 02:07:03',
                'updated_at' => '2019-06-24 02:07:03'
            ),

            array(
                'id' => '17',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'David Simarmata Bagian 5',
                'username' => 'davidke-5',
                'email' => 'davidke-5@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yoc0Lj479O8bUdZntDto1uUiPQ6y6XH0vFOedLJybs3ERVoG7owVu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 02:09:27',
                'updated_at' => '2019-06-24 02:09:27'
            ),

            array(
                'id' => '18',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'seibu2',
                'username' => 'seibu2',
                'email' => 'seibu2@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6g5WpkHj1dme1e/g3jXsW.YD8dvxWiFbjhej1sNorsdmL4uzJjgUu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 02:09:27',
                'updated_at' => '2019-06-24 02:09:27'
            ),

            array(
                'id' => '20',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'seibu4',
                'username' => 'seibu4',
                'email' => 'seibu4@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5ylC6qQMO/B8sFJRWV1cAuY.NmI56bQoYXfxMDFSZVBIzSi4azxpm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-06-24 02:09:46',
                'updated_at' => '2019-06-24 02:09:46'
            ),

            array(
                'id' => '21',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nabila',
                'username' => 'nabila',
                'email' => 'nabilacantik@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$42Qt0yJw1O6QgeUnbD66WeLCeosNVw5OlLqcN4w5/x7bocP0wd2NO',
                'description' => '<p>nabila cantik</p>',
                'remember_token' => 'pOokCKDOAjGAjmPHN2RUybRJAc6MXa98dlA9BTV9iTRvDBKEMLr9Z9r5tD0r',
                'created_at' => '2019-06-24 02:15:41',
                'updated_at' => '2019-06-27 01:06:12',
            ),

            array(
                'id' => '23',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'gita',
                'username' => 'gitaa',
                'email' => 'gita@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MYpuQperNao7VArr21fb7ODVClk.ugKgJAB9GmRxlG3zSzZqHfToO',
                'description' => '<p>gita</p>',
                'remember_token' => NULL,
                'created_at' => '2019-06-25 21:02:41',
                'updated_at' => '2019-06-25 21:02:41',
            ),

            array(
                'id' => '24',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nabila1',
                'username' => 'nabila1',
                'email' => 'nabila1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q7ddjAwOsbqjX3lxVIwi7Ow3L31SwvYDDmU4TwEfp6PaH6CrAGikm',
                'description' => '<p>nabila1</p>',
                'remember_token' => '9n3FH9Zyz8lhMNSyFursNl9fJfx9AadQgd3M6Qro361W4Yb6gX74BHZ5DEzM',
                'created_at' => '2019-06-27 01:10:05',
                'updated_at' => '2019-06-27 01:10:05',
            ),

            array(
                'id' => '25',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'disperindag')->first()->id,
                'name' => 'disperindag',
                'username' => 'disperindag',
                'email' => 'disperindag@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zmaPSESPayiDmQrdI757HuX1BWyjF/Rab43U6r8NRB7SJEsuWU7tG',
                'description' => '<p>disperindag</p>',
                'remember_token' => '9rpAFWFHvvYudzCWdrESm8PdMVTzZO3Sc1PyVdAOL0xrzLZSPZcfhGKIa7Sb',
                'created_at' => '2019-06-27 01:12:33',
                'updated_at' => '2019-06-27 01:12:33',
            ),

            array(
                'id' => '26',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'bocil1',
                'username' => 'bocil1',
                'email' => 'bocil1@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wMxpYPk4ujF0vTMoET61V.JKOPwtn7UCsE5hk4eB3nYHM2kuBsq9O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-04 04:59:36',
                'updated_at' => '2019-07-04 04:59:36'
            ),

            array(
                'id' => '27',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'bocil2',
                'username' => 'bocil2',
                'email' => 'bocil2@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$A1I8.vNGkKShMbtPbCsMSOw4/ZPIwxRGKACcw03R3ThFUtiVO.mKy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-04 05:07:44',
                'updated_at' => '2019-07-04 05:07:44'
            ),

            array(
                'id' => '28',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rangga Saputra',
                'username' => 'ranggalb',
                'email' => 'rangga.lb1998@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ahxgqIgtWUcwxiljyBt8geHuuTKfS6e2JRdjSbSDzsR.YeXO7CO8W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-04 17:35:16',
                'updated_at' => '2019-07-05 02:57:27'
            ),

            array(
                'id' => '29',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ahmadsyahroni',
                'username' => 'syahroni',
                'email' => 'syahroni@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sZHdHmSiSkv3Iyr.0TVnPex.1sfECnEJu9gcq8Rbfbf0WD1CStZle',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-05 02:38:23',
                'updated_at' => '2019-07-05 02:38:23'
            ),

            array(
                'id' => '30',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Seibu Tomasua',
                'username' => 'seibu',
                'email' => 'seibutomasua07@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oVJSYFQU1LPZPg6c3NkIh.nNp7l4jv1g2ePzqiPC68FtpY9cBbDEO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-07 19:01:45',
                'updated_at' => '2019-07-07 19:01:45'
            ),

            array(
                'id' => '31',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hafiz',
                'username' => 'Fizz',
                'email' => 'hafizptr.14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Y0VjfxaWd5mwtBYkxp85e.Av3xovOIUVE9PysJ/KDQMDnfgvFiWuS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-08 21:08:41',
                'updated_at' => '2019-07-08 21:08:41'
            ),

            array(
                'id' => '32',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ali',
                'username' => 'ali',
                'email' => 'alimustofa2727@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$C3ccLz4XW/DM1HvhNBuFb.8plULkvbGLJ49Maq.6cecUF228JiQ3O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-08 22:31:14',
                'updated_at' => '2019-07-08 22:31:35'
            ),

            array(
                'id' => '33',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'HERY SUHARDIAN',
                'username' => 'TeeMBe',
                'email' => 'hs@teembe.co.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hV84OQSganxZmxwiPkZmD.59k2UglLlk6B5.AJyUMsvKh42qOGj0q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-10 04:31:56',
                'updated_at' => '2019-07-10 04:36:17'
            ),

            array(
                'id' => '35',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anugrah Ramadhan',
                'username' => 'anu',
                'email' => 'anu@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iCSLAqNCc6wrcdW2z524T.5Nk6S4ai4tLIUr5LFWSYsj8nxqJCnCG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-10 16:39:53',
                'updated_at' => '2019-07-10 17:01:26'
            ),

            array(
                'id' => '37',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'pagun',
                'username' => 'abdul',
                'email' => 'pagun.abdul5528@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PPSLKg2aw6yTVuT06gWkB.9ePZmUcDwPEKd2wcdVyQRHhLdCbyf5m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-10 19:13:26',
                'updated_at' => '2019-07-10 19:15:39'
            ),

            array(
                'id' => '38',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Faurizal',
                'username' => 'Rizal',
                'email' => 'rizalssc53@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9VM3707f32bmDddjfghd8OhgOEoNJYjkB4sx/j/Hh07drlaUGSKP6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-11 20:54:41',
                'updated_at' => '2019-07-11 20:56:58'
            ),

            array(
                'id' => '39',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nanda afrilriska',
                'username' => 'nandaafrilriska05',
                'email' => 'nandaafrilriska@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/xTSOgDabePUlqGgeklz/uo0INoXX4I0xiQ9Jlrs0rzC4devbeq4S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2019-07-12 20:20:13',
                'updated_at' => '2019-07-12 20:20:13'
            ),

            array(
                'id' => '41',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yulianto Setiawan',
                'username' => 'Wawan.senghie',
                'email' => 'yuliantosetiawan.dishub@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$o1NmW2QqH7KELgNToJ7g1.2E546bxKDnE.wndOZfItVdVLUnN8Uf2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-22 14:04:13',
                'updated_at' => '2020-09-22 14:04:13'
            ),

            array(
                'id' => '42',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammadilham',
                'username' => 'tuandmudailham',
                'email' => 'mhmdilham203@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.BJi.RzTIO6V1IDx0dHNXu0sezO8os/sh3GOA9GtRlfzlEVegRxcC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-26 13:30:05',
                'updated_at' => '2020-09-26 13:30:05'
            ),

            array(
                'id' => '43',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dede Devi Ermanto',
                'username' => 'Alex_Xandre',
                'email' => 'alexdevi22pk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CRMNWqBlZsZuOxz.V.1BM.CqJ89BZMdtadzIg0.D4ASWLUOFrfb16',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-26 15:58:29',
                'updated_at' => '2022-07-24 03:58:05'
            ),

            array(
                'id' => '44',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hadimi',
                'username' => 'dhimy',
                'email' => 'had_imi@yahoo.co.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3UNyxQn0bcHIyYGCZbPdE.QO.IzdFBgybyB8sPQKv273lMbJOwBKq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-27 08:41:28',
                'updated_at' => '2020-09-27 08:41:28'
            ),

            array(
                'id' => '45',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Enda Tobing',
                'username' => 'Enda Tobing',
                'email' => 'enda.tobing@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xXNbwxZ7GjdcPWzS7Hk46.f0lrpSnZ.2MtY.WJIxTDW9yOdAZPWK6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-27 10:19:20',
                'updated_at' => '2020-09-27 10:20:48'
            ),

            array(
                'id' => '46',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fransiska peran',
                'username' => 'peran',
                'email' => 'fransiskaperan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2aPCKwqn9WOnJefrP5qwwO6q0xsoWGXpXE/ztuihCW9HCM.1UulTS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-28 12:57:31',
                'updated_at' => '2020-09-28 13:03:02'
            ),

            array(
                'id' => '47',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'disperindag')->first()->id,
                'name' => 'DISKUMDAG',
                'username' => 'diskumdag',
                'email' => 'diskumdag@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cp3KkqxQ6OL/zPEZo1rW7OKAg8FXwbxLaLAGOiuOnCgSa4rOdYIDG',
                'description' => '<p>&nbsp; &nbsp;</p>',
                'remember_token' => '27XYJ0pVuTFOeIeHnUvJCvjyyD0O1fEF56OABuE51HvJpHHx82CwssR0KRSJ',
                'created_at' => '2020-09-28 14:00:09',
                'updated_at' => '2020-09-28 14:00:09',
            ),

            array(
                'id' => '48',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Arif Dawami',
                'username' => 'dawami',
                'email' => 'arifdawami@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8lxBmXCHRxnFuO.7JFHd4O8.ncizQapzN8PKjuKrTQClvvDeZQY3m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-28 16:20:07',
                'updated_at' => '2020-09-28 16:21:13'
            ),

            array(
                'id' => '49',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Adibrata Iriansyah, S.IP., M.A.',
                'username' => 'adibratairiansyah',
                'email' => 'adhibradtha@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cR46o7pfEapK8/x7A1oYuOCH5ru5af3c9jk07wJSTNEIuqNMAYlGa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-28 23:35:39',
                'updated_at' => '2020-09-28 23:37:06'
            ),

            array(
                'id' => '50',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Wayan Arum Pandini',
                'username' => 'w__arr',
                'email' => 'dpan6725@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FJncmIjL76lBix8FvIPVg.uIqLf.aBQCkCaS8.K8Y1JEDpGk2JWU.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-29 11:41:36',
                'updated_at' => '2020-09-29 11:42:20'
            ),

            array(
                'id' => '51',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'syaifur rohman',
                'username' => 'rohman',
                'email' => 'rahmanasus88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4zA8ocw9sZyAUCjhnwJ.gu4pTitqwfeykPJ5UVuFa0LKDg7suCtTa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-09-30 06:02:03',
                'updated_at' => '2020-09-30 06:02:03'
            ),

            array(
                'id' => '52',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Taufikurrahman',
                'username' => 'taufik1972',
                'email' => 'taufikkkr@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hJfkwtVLkLIJztPZAfpTDuW/3TPGpYf6bHjAKiVC/bH5u30vtghGC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-01 13:50:12',
                'updated_at' => '2020-10-01 13:50:12'
            ),

            array(
                'id' => '54',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'disperindag')->first()->id,
                'name' => 'Dinas Koperasi UKM dan Perdagangan',
                'username' => 'perdagangan',
                'email' => 'diskumdag@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QNsGRa6jL1FZXfCcWaMpIOV5.KvoBTERLMo4gODPFOXWtNmgropIC',
                'description' => '<p>akun dinas Perdagangan untuk upload info pangan</p>',
                'remember_token' => 'nps4GCgmpvbLtVSnbzvBbugvFi7G9ZNnpMQthzjZSrLf9mI2AXw1XqDRsz2e',
                'created_at' => '2020-10-01 13:51:23',
                'updated_at' => '2020-10-01 13:51:23',
            ),

            array(
                'id' => '55',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'erik rahwanda',
                'username' => 'rahwanda',
                'email' => 'erikrahwanda96@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aDIkeNNBk/ZYdezmJXqu5u5y/9WNj9o299jGiwxXuijFQz1rQFAKm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-01 18:37:21',
                'updated_at' => '2020-10-01 18:37:21'
            ),

            array(
                'id' => '56',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'abdullah',
                'username' => 'abdullah',
                'email' => 'abdullahhh785@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RDhglBm9he8J1kzxJHZcb.UeTy/aSK4QjRVKAJrttXJrJy44e4Lga',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-01 21:41:27',
                'updated_at' => '2020-10-01 21:41:27'
            ),

            array(
                'id' => '57',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rezha Armeinda',
                'username' => 'Rezha',
                'email' => 'Rarmeinda@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JllNsLneUVFfg36ZZOLUrepS1KwoFCORW1.uwFpedd8MAVoFPolt.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-02 19:56:33',
                'updated_at' => '2020-10-02 19:56:33'
            ),

            array(
                'id' => '58',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'YUCES PERMATA.LISNA',
                'username' => 'yuces',
                'email' => 'mailcez91@gmail.comcl',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nNTavI64cQygT9PyVTXmJurRJ7yZ19UsPta6r2eqll3xUiRzMB0ZG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-04 23:03:51',
                'updated_at' => '2020-10-04 23:03:51'
            ),

            array(
                'id' => '59',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nur azizah',
                'username' => 'nur azizah',
                'email' => 'nurazizah12071997@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6aWwn9bmZ13gDhCGuEBjIuJzyGU63ecv66k/Ea2veH1qDkrdooj8e',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-04 23:16:49',
                'updated_at' => '2020-10-04 23:16:49'
            ),

            array(
                'id' => '60',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'SEKDA',
                'username' => 'sekda',
                'email' => 'sekda@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Df8nkpR1SpaiwyvjP./3U.ZUvJAA6qqvwkBIFP1GFBJrkA3xAPAOa',
                'description' => '<p>&nbsp; &nbsp;&nbsp;</p>',
                'remember_token' => 'Y774ppKh1QTAmwdeY7l8VJ5cSqpO1nwzlF7RS60pKoWiHv8wH6JQOWxhfsiz',
                'created_at' => '2020-10-05 12:40:29',
                'updated_at' => '2020-10-05 12:40:29',
            ),

            array(
                'id' => '61',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ramakadri',
                'username' => 'rama',
                'email' => 'ramakadri599@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.q9Kd4HUDZ7pgk6XHae40ebanAbCm/m79j/BWM0f7Gk615uEcvdrG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-05 12:46:22',
                'updated_at' => '2020-10-05 12:46:22'
            ),

            array(
                'id' => '62',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DPRD',
                'username' => 'DPRD',
                'email' => 'dprd@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BuJQaRogJ6aBpKc0bwsWjecRSTD2nxaAzW0ptqnyy5KmoHNzWjHTW',
                'description' => '<p>&nbsp; &nbsp; &nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:06:11',
                'updated_at' => '2020-10-05 13:06:11'
            ),

            array(
                'id' => '64',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'SATPOLPP',
                'username' => 'SATPOLPP',
                'email' => 'satpolpp@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$utdPcC48sZEK1OcvDI7CjeouPl0ATHWDT2xZLM5dTQN2xHVcfX8N6',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:08:31',
                'updated_at' => '2020-10-05 13:08:31',
            ),

            array(
                'id' => '65',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'KESBANGSOSPOL',
                'username' => 'KESBANGSOSPOL',
                'email' => 'kesbangsospol@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fVINjX9pP/dc6PsHR/QYa.V0GshNQPcjR4OTeTXHiXnOqm5QyvsHO',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:14:17',
                'updated_at' => '2020-10-05 13:14:17',
            ),

            array(
                'id' => '66',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'BAPPEDA',
                'username' => 'BAPPEDA',
                'email' => 'bappeda@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DcUrdEttTNvMeT4ncT6cC.VQBIpR22zeDBLujbHSfUC0qBdxG.5O6',
                'description' => '<p>&nbsp; &nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:15:26',
                'updated_at' => '2020-10-05 13:15:26'
            ),

            array(
                'id' => '67',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'BKPSDM',
                'username' => 'BKPSDM',
                'email' => 'bkpsdm@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3tRwVwnimHKIalnB8SKfReajnKGSzzP/AhRMEc/Q8XwHSHGFnK2VC',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:16:09',
                'updated_at' => '2020-10-05 13:16:09',
            ),

            array(
                'id' => '68',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'BKD',
                'username' => 'BKD',
                'email' => 'bkd@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$51u7wPuOxfQwSch5E0PdkOvdFr0SaNXLEB04qJ5uywwTQxGLULN2.',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:16:58',
                'updated_at' => '2020-10-05 13:16:58',
            ),

            array(
                'id' => '69',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'BPBD',
                'username' => 'BPBD',
                'email' => 'bpbd@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$b720vinsRGMl2coXpkIx8.KmjDT/58VOC7qhW2cQbi9uw9BSzvnsi',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:17:34',
                'updated_at' => '2020-10-05 13:17:34',
            ),

            array(
                'id' => '70',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DISKOMINFO',
                'username' => 'DISKOMINFO',
                'email' => 'diskominfo@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rKx6CDjd9hcbgvXPwqOEfeu5vEEDPunYtPINLBgfdPPdXrOhkLk8C',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => 'hsrU6cefDALx8D7GFweeg8O0DMZtuStrJG2yLtIZBMAauKNRXv70SK1ATbl7',
                'created_at' => '2020-10-05 13:18:16',
                'updated_at' => '2020-10-05 13:18:16',
            ),

            array(
                'id' => '71',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DLH',
                'username' => 'DLH',
                'email' => 'dlh@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1e30vwHGPlFYQkP9fYwfPeozNq4ESuLIFqDAy84hQxK3fkZGtzx2.',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:18:49',
                'updated_at' => '2020-10-05 13:18:49',
            ),

            array(
                'id' => '72',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DINDIK',
                'username' => 'DINDIK',
                'email' => 'dindik@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sF9rySmZ5j1z2OB7qPgO1.JAHZobAKOmT41xUohWdFY7zrmWXJD0i',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:19:36',
                'updated_at' => '2020-10-05 13:19:36',
            ),

            array(
                'id' => '73',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DINKES',
                'username' => 'DINKES',
                'email' => 'dinkes@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aC6dGl7IQLTpogcQmCPaduvfPy7ndi0peXc8d1AQBeluWJl.I9MCq',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:20:10',
                'updated_at' => '2020-10-05 13:20:10',
            ),

            array(
                'id' => '74',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DISTAKA',
                'username' => 'DISTAKA',
                'email' => 'distaka@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rnStAysw/BbuHahJj5kxV.eHNxC6fU52r/qR7TKms/IywM4xn0ecW',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:20:50',
                'updated_at' => '2020-10-05 13:20:50',
            ),

            array(
                'id' => '75',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DISPORAPAR',
                'username' => 'DISPORAPAR',
                'email' => 'disporapar@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FiVuBRBaETvXI9wtsH7yPOhSt3yjtTOAQ871RC6E2Tps55Yhu6aY.',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:21:45',
                'updated_at' => '2020-10-05 13:21:45',
            ),

            array(
                'id' => '76',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DISHUB',
                'username' => 'DISHUB',
                'email' => 'dishub@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$spJphbMSU8KqJR8V6UU.LOwediNNrRTTMrk4Z0OqXzuPguZewvLXK',
                'description' => '<p>&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:23:21',
                'updated_at' => '2020-10-05 13:23:21',
            ),

            array(
                'id' => '77',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'PUPR',
                'username' => 'PUPR',
                'email' => 'pupr@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yzg.SzVvsyF6yWyfwZQfj.vewh4Ux4YWjJqAJX2/ldKyRh0d8jfQ6',
                'description' => '<p>&nbsp; &nbsp; &nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:24:04',
                'updated_at' => '2020-10-05 13:24:04',
            ),

            array(
                'id' => '78',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DINSOS',
                'username' => 'DINSOS',
                'email' => 'dinsos@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IGGwUMq8HH/vtggp1Ob2juaehEoRgmZLEVq/tb6p9uTMXTSd1gvVS',
                'description' => '<p>&nbsp; &nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:24:37',
                'updated_at' => '2020-10-05 13:24:37',
            ),

            array(
                'id' => '79',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DISDUKCAPIL',
                'username' => 'DISDUKCAPIL',
                'email' => 'disduk@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q4IGTadZnOYc1wwVER32lOkFd8ADyPcUrFEDUXbZWO2FiWjNo2Gha',
                'description' => '<p>&nbsp; &nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:25:16',
                'updated_at' => '2020-10-05 13:25:16'
            ),

            array(
                'id' => '80',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DKUMP',
                'username' => 'DKUMP',
                'email' => 'dkump@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q9nHTfr.e/kLZ3VvR8pVTuSMv1jucXMOFU.c.bfVZRxOkLhuIMuYO',
                'description' => '<p>&nbsp; &nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:25:55',
                'updated_at' => '2020-10-05 13:25:55',
            ),

            array(
                'id' => '81',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DPRKP',
                'username' => 'DPRKP',
                'email' => 'dprkp@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5TgKzkpRJUJ.ZCs8/yw3tuCMML0W0NBd/wGSmEBCFX.2WNlbsadnC',
                'description' => '<p>&nbsp; &nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:26:25',
                'updated_at' => '2020-10-05 13:26:25',
            ),

            array(
                'id' => '82',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DPMTKPTSP',
                'username' => 'DPMTKPTSP',
                'email' => 'dpmtkptsp@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fb6I.2cZQTFyaG2UqB.S4uBJm1gHhcOXPrazjpV5FyOAqC5PqvIpC',
                'description' => '<p>&nbsp; &nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:27:49',
                'updated_at' => '2020-10-05 13:27:49',
            ),

            array(
                'id' => '83',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DP3',
                'username' => 'DP3',
                'email' => 'dp3@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VDwnktHPWuygASsxDUIMMOAaYsbSBVMIYf35q6e8G9dVbSec2edAG',
                'description' => '<p>&nbsp; &nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:29:10',
                'updated_at' => '2020-10-05 13:29:10'
            ),

            array(
                'id' => '84',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'DP2KBP3A',
                'username' => 'DP2KBP3A',
                'email' => 'dp2kbp3a@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tlC0nzpr2vUwjJlxoiLOXeRoZNXgra1ntrrBnqmL5s0PzQK9w7ZUO',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 13:29:54',
                'updated_at' => '2020-10-05 13:29:54',
            ),

            array(
                'id' => '91',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'danu',
                'username' => 'tisuwajah',
                'email' => 'tisuwajah405@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YG2ktirSA7OJiBYqJRwNNeLZRqaqLPaf.y2sl3pOFG7SZ8QqaEXJm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-05 14:01:42',
                'updated_at' => '2020-10-05 14:01:42'
            ),

            array(
                'id' => '92',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wildani',
                'username' => 'wildan',
                'email' => 'wilbsi90@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kQkwWt4de7uZwZ4SkiFxJuAhhRul6p4BmQo9id8F7Lo6W6h9Kv73i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-05 14:18:04',
                'updated_at' => '2020-10-05 14:18:04'
            ),

            array(
                'id' => '93',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'INSPEKTORAT',
                'username' => 'INSPEKTORAT',
                'email' => 'inspektorat@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lWXeR5SGD5vuXWv8EOT7cu2fTimYGhxHAPdRCuPxBhZRRHcdGMFma',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 15:43:33',
                'updated_at' => '2020-10-05 15:43:33',
            ),

            array(
                'id' => '94',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'KECAMATAN PONTIANAK BARAT',
                'username' => 'KEC.BARAT',
                'email' => 'camatpontianakbarat@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GUptedg64/kAwSwb0tZxSOz0/IuCQxSOdbZmOA3cw9NHZBRGkoyZ6',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 15:45:04',
                'updated_at' => '2020-10-05 15:45:04'
            ),

            array(
                'id' => '95',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'KECAMATAN PONTIANAK KOTA',
                'username' => 'KEC.KOTA',
                'email' => 'camatpontianakkota@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3eOqQk50XjzzNFFAf9ZsneWQN7qhZKW8dX/GUKBrQz/rhrSPDtjF2',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 15:45:39',
                'updated_at' => '2020-10-05 15:45:39',
            ),

            array(
                'id' => '96',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'KECAMATAN PONTIANAK SELATAN',
                'username' => 'KEC.SELATAN',
                'email' => 'camatpontianakselatan@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/b.Jkx8JgBO4i17P.N7P1uvJV551pzG2/WYZG1cnYXpCH.0LOS05S',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 15:46:22',
                'updated_at' => '2020-10-05 15:46:22'
            ),

            array(
                'id' => '97',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'KECAMATAN PONTIANAK TENGGARA',
                'username' => 'KEC.TENGGARA',
                'email' => 'camatpontianaktenggara@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d3IWXKAUm2OQmpLN4DpKie6oQTkeJed1iwywhXq5qaqk/l5IG44l6',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 15:47:05',
                'updated_at' => '2020-10-05 15:47:05'
            ),

            array(
                'id' => '98',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'KECAMATAN PONTIANAK UTARA',
                'username' => 'KEC.UTARA',
                'email' => 'camatpontianakutara@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lp95hasbM7XbwUzAFhyVtuS/Od4vSpwwuE/j3AB22CyGWYNOaSPEa',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 15:48:19',
                'updated_at' => '2020-10-05 15:48:19'
            ),

            array(
                'id' => '99',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'editor')->first()->id,
                'name' => 'KECAMATAN PONTIANAK TIMUR',
                'username' => 'KEC.TIMUR',
                'email' => 'camatpontianaktimur@pontianakkota.go.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$plg9eu4/9dnJ3YkySbSal.PRlPN0XouMlquF8W6wKaBUgUu0LVV.m',
                'description' => '<p>&nbsp;&nbsp;</p>',
                'remember_token' => NULL,
                'created_at' => '2020-10-05 15:49:01',
                'updated_at' => '2020-10-05 15:49:01'
            ),

            array(
                'id' => '100',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Fikri Nugroho',
                'username' => 'mfikrinugroho',
                'email' => 'agancoffee75@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.zvMEYA/gQgP3cMvHwfdHesITMulub7gT1NnyFkdJkTAqpYmtMnu.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-06 16:57:53',
                'updated_at' => '2020-10-06 16:57:53'
            ),

            array(
                'id' => '101',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'febriyanto',
                'username' => 'febri',
                'email' => 'sivebrianto@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AUnNJyrfwsWiF3TAg.7DOuXxdHOXpFrk46/nIg.rg./JUp31/oO1O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-06 19:46:14',
                'updated_at' => '2020-10-06 19:46:14'
            ),

            array(
                'id' => '102',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Surya Lesmana',
                'username' => 'Eghapiss',
                'email' => 'nadyashafwah00@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p7.LBe5R1cgW/9hxvtHp8OD9fbSO0LdHHI2Awi7EAhIrYo3jtU9ne',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-06 20:30:23',
                'updated_at' => '2020-10-06 20:30:23'
            ),

            array(
                'id' => '103',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Arul',
                'username' => 'arulid',
                'email' => 'arul.onesolutions@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ErehzAhoRkHtEFkAmDuMf.PcH60eCs3zNYkfTfIIZWzZ2SfItp0c.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-08 21:11:02',
                'updated_at' => '2020-10-08 21:11:02'
            ),

            array(
                'id' => '104',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Kholif Badarul',
                'username' => '@badaarul_',
                'email' => 'kholifbadarul332@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WB9Vc7SoplRSWGHIj/OfG.T/iMbRYmsuv/.CUoWrSDFQxDYt22fz6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-09 00:59:26',
                'updated_at' => '2020-10-09 00:59:26'
            ),

            array(
                'id' => '105',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sensisensa',
                'username' => 'sensa',
                'email' => 'maskersensi782@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lHZBd9I5sAydlcxmrg1l8ORHTS4ElhtrXjGNU6GUcMdxnwVr3sd2q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-09 15:21:06',
                'updated_at' => '2020-10-09 15:21:06'
            ),

            array(
                'id' => '106',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Agustian',
                'username' => 'Agustian Muhammad',
                'email' => 'muhammadagustian481998@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YMeRGxV/2PWxDhiGs2aXLukaun2rEeF7y1m/5YGjGJX25zFhcqETO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-10 05:41:13',
                'updated_at' => '2020-10-10 05:41:13'
            ),

            array(
                'id' => '107',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'FARWAN LEONARDI',
                'username' => 'farwan',
                'email' => 'farwanleonardie@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2eJO03hfkK1RhPix0IB4BOG.1s/NKVjmFDZ4coaT0SKGqwV/hQIZS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-11 12:38:00',
                'updated_at' => '2020-10-11 12:38:00'
            ),

            array(
                'id' => '108',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Diana Ekayani',
                'username' => 'miss.dhiean',
                'email' => 'diana.ekayani@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ziZldE4Bow4iOrNd0exFEuUmgjuq17t5NpH0ZScCknq5Y3oJ.zlmi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-12 13:48:28',
                'updated_at' => '2020-10-12 13:50:58'
            ),

            array(
                'id' => '109',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'victor',
                'username' => 'vic xie',
                'email' => 'victor.chia666@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$81XLHOYZv8VJ5x9ujLWSRu/.CoNVusoAssUUFvq9hu.RgGqMAMOFG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-12 23:09:36',
                'updated_at' => '2023-02-03 04:28:49'
            ),

            array(
                'id' => '110',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'syarif abdurrakhim',
                'username' => 'jimmy',
                'email' => 'syarifjimmy@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$i4W.0jboFW2O4iPnVsExve7iyj90uz6qRuDcEOu051ODMoPDEyfWe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-13 17:04:35',
                'updated_at' => '2020-10-13 17:09:20'
            ),

            array(
                'id' => '111',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dicky candra',
                'username' => 'dicky',
                'email' => 'dickyecandra@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LgO7yhzJJotkRlww2XQike4/.MOTEgZNEPmRv2yEQHYR7y6ddEFjO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-14 18:01:30',
                'updated_at' => '2020-10-14 18:01:30'
            ),

            array(
                'id' => '113',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nur Laili Azizah',
                'username' => 'lailyazizah',
                'email' => 'nyettt29@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GSIdJRn8oulegABDa4tjJ.AdcCmcyCDXUyKS/PBjprONHNyr1GSny',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-17 01:58:43',
                'updated_at' => '2020-10-20 23:45:20'
            ),

            array(
                'id' => '114',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Friti',
                'username' => 'thisisfriti_',
                'email' => 'friti.rpl@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K8Q7bfRfhSa/uBSJBS9PeenrcOmomZRJ56lHwr1woUqTE92jZ//tq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-18 11:04:18',
                'updated_at' => '2020-10-18 11:04:18'
            ),

            array(
                'id' => '115',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wahyudi',
                'username' => 'khucaii',
                'email' => 'yudikhucaii@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VIRZwPlG/pLxRDORJwXkfuHFHfj5Y.IMGfo0EUlXWaXpBgNCm6x8G',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-18 17:09:26',
                'updated_at' => '2020-10-18 17:09:26'
            ),

            array(
                'id' => '116',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dedi',
                'username' => 'Dedi Khansa',
                'email' => 'oeoidedi@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VK3zfe5g3V55x7wg37r/QOGHMEYIN6cl6JTcxCHdTx3BvxF8P4az6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-19 12:59:18',
                'updated_at' => '2020-10-19 13:02:08'
            ),

            array(
                'id' => '117',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Asep Budiman',
                'username' => 'Aboed',
                'email' => 'asepbudiman74@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6oAYjlwLeBuBAbPg0XzVYeuuBtOIszZ55cKRNDTKP9JXUnbt8YWuS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-20 02:48:05',
                'updated_at' => '2020-10-20 02:48:05'
            ),

            array(
                'id' => '118',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ardiansyah',
                'username' => 'ARDJA',
                'email' => 'ardipan97@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CJBYnrWZK5ZG/fgqvYWaNewLcWtrjYJ3md3MW4P1YCCbWq9iA7Ohy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-20 22:14:42',
                'updated_at' => '2020-10-20 22:14:42'
            ),

            array(
                'id' => '119',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agus sugianto',
                'username' => 'agus2020',
                'email' => 'agussugianto2020@.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1lGGv4l2RjxQX8RwvXt3cOihHMwRcuGyOUDtBrgpx3tMwfR8hWtyG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-20 23:02:17',
                'updated_at' => '2020-10-20 23:10:04'
            ),

            array(
                'id' => '123',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agus sugianto',
                'username' => 'agus sugianto',
                'email' => 'anakbaru2020@.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P4KrY9F0HVUw2iFB4cG93uEflTD/xLf/ogyt0Ru/vW1Bfm.DY27kW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-20 23:19:23',
                'updated_at' => '2020-10-21 14:07:35'
            ),

            array(
                'id' => '124',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rahmawati',
                'username' => 'rahmawati',
                'email' => 'rahmawatiekaaprillianti21236@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kH/hokK4z18IgFTgi06n6ee48p3ONJb9.ItTCW9eNns9661mb2rTC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-21 00:47:43',
                'updated_at' => '2020-10-21 00:47:43'
            ),

            array(
                'id' => '125',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dian hasanuddin',
                'username' => 'dianhasanuddin',
                'email' => 'dianzbox@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LNALPla9tL9.wVb6weXe2uF/d7sktAS5HOLE3cBPnqjlvKTGQ/H/W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-21 14:05:21',
                'updated_at' => '2020-10-21 14:05:21'
            ),

            array(
                'id' => '126',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Samsiana Firmayanti Rahayu',
                'username' => 'Samsiana',
                'email' => 'samsiana@student.untan.ac.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UMz2.BRjEy5q4fBt7GytTeOK52DJ5P8K8fyAUwmd/qpnDLHXCRY6W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-25 16:51:31',
                'updated_at' => '2021-09-12 16:11:27'
            ),

            array(
                'id' => '127',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Shalahudin',
                'username' => 'Abi_Sholah',
                'email' => 'shalahuddienabi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EaQDHq/gk0mVk.MLTB9Lge.RyF28y0v5/yp7R4noYXCEJd6iA95te',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-25 19:02:23',
                'updated_at' => '2020-10-25 19:02:23'
            ),

            array(
                'id' => '133',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Medi Yuwono Tharam',
                'username' => 'myth',
                'email' => 'mytharam@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2.h206y0.CyD8UiQ3AdWEe0.VxF6QUaXm3EOq102931aJxKwey4X6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-25 21:09:31',
                'updated_at' => '2020-10-25 21:09:31'
            ),

            array(
                'id' => '134',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Doddy junaidi',
                'username' => 'doddy',
                'email' => 'Doddy.broadcaster@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JjJYg57xmVp7B795sQu6AuMhozgrYIScH4XuJTqusT6ddCGNOHUx.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-25 21:10:09',
                'updated_at' => '2020-10-25 21:12:32'
            ),

            array(
                'id' => '135',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammadraisbusni@gmail.com',
                'username' => 'M.RAIS BUSNI',
                'email' => 'Muhammadraisbusni@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q78mqG4FjbvLwP/xEIn1iuBl30hz.klYw9N2DZYrKveZDqXVEaVya',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-26 02:31:56',
                'updated_at' => '2020-10-26 02:43:46'
            ),

            array(
                'id' => '138',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M.RAIS BUSNI',
                'username' => 'Rais',
                'email' => 'Muhammadraisbusni69@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$g9Hfx.davYkaDOXRX7B4o.gCeNuTS5MdPIMsng2zXVU7TH0mtDDfC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-26 02:42:44',
                'updated_at' => '2020-10-26 02:42:44'
            ),

            array(
                'id' => '139',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Uray Rachmad Haryanto',
                'username' => 'urayrachmadharyanto',
                'email' => 'urayrachmadharyanto@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ADtodmrTgz7lMSOof/.n4ehEfz2X4ZeUNCX1rGq5Ubz5.ilcNMUeS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-28 00:24:41',
                'updated_at' => '2020-10-28 00:28:30'
            ),

            array(
                'id' => '140',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'abdulrahim',
                'username' => 'gopeng',
                'email' => 'abdrahim22061995@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cayNGC.O/kam8SVhuiVaL.132bzewiSgxe8SxlCU1rjT5F1.m5Wya',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-28 00:31:00',
                'updated_at' => '2020-10-28 00:31:00'
            ),

            array(
                'id' => '141',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Benito Siagian',
                'username' => 'buwongpuyuhh',
                'email' => 'benitosiagian@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nlSgTYPpHuzIBCGDOWbd/.Uw/lM2H/IlFRAZpL/Bm2eRqCzejkMmq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-28 00:42:00',
                'updated_at' => '2020-10-28 00:42:00'
            ),

            array(
                'id' => '142',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Budi Haryanto',
                'username' => 'Budi Haryanto',
                'email' => 'budiharyanto840@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9BXimcmC/2jKDj08jLxC6uufnXV8BJmTX74mcSoG/1uJ1e6FUCFCC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-28 04:01:27',
                'updated_at' => '2020-10-28 04:01:27'
            ),

            array(
                'id' => '143',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M.Mauludin',
                'username' => 'Didin',
                'email' => 'didianear@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1Zm/.wOlc1HHTb052BXrLO9iFmqLx0UJTtf9JijjiozMReF21DEEy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-28 08:54:27',
                'updated_at' => '2020-10-28 08:54:43'
            ),

            array(
                'id' => '144',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Mohammad Taufik Hidayat',
                'username' => 'taufik42',
                'email' => 'skytaufik01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$60FBv7pAVjs9sG9o8Pse0OsbrNG6Z47GxHC2wPywG7ErtAiuwH9Ry',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-29 13:18:13',
                'updated_at' => '2020-10-29 13:18:13'
            ),

            array(
                'id' => '145',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sari ramadhania',
                'username' => 'sariramadhania0402@gmail.com',
                'email' => 'sariramadhania0402@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KVpnRm8LNvu.JBxp7/r4gOzgdytA25YUVL4TSTwIh4LH7H/XGMdZi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-29 13:28:30',
                'updated_at' => '2020-10-29 13:59:15'
            ),

            array(
                'id' => '146',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ghazalj',
                'username' => 'dengzzz',
                'email' => 'daengz4l@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DPa5jgdAf9EOYcqkgSRVZexxFBo4XtVaI5i8CKz.jHDwuvRgBDSgW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-29 13:54:25',
                'updated_at' => '2020-10-29 13:56:58'
            ),

            array(
                'id' => '147',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yusni umar',
                'username' => 'yusni1981',
                'email' => 'umaryusni@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7tgdpxR4YAsxiYNW3vDvSOjhXTHsIY3T3NJgf3gQjMqEdeEHozkl2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-29 14:47:06',
                'updated_at' => '2020-10-29 14:47:06'
            ),

            array(
                'id' => '148',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Hermawan',
                'username' => 'muhammad_hermawan',
                'email' => 'muhammadhermawan11@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$j31QNV5nuslkSHbC32e9SumZq.ZC92salubRpAM7Tqe8PVtnimIw6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-10-30 14:02:07',
                'updated_at' => '2020-10-30 14:03:13'
            ),

            array(
                'id' => '149',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sri faryanti',
                'username' => 'sf26',
                'email' => 'srifaryanti91@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kUjSCR/Y6VIzeMh7v.Gf8.ISLdxSYa/kPOEKnXbHvvC9FwAx1ZQ8C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-01 17:09:48',
                'updated_at' => '2020-11-01 17:13:24'
            ),

            array(
                'id' => '150',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Didik suhartono',
                'username' => 'diksuhar87',
                'email' => 'diksuhar87@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YKEO7QJ7TW0EGWxpMLuL9uyVtkp/3fvi5j7RaEJMtfusUR4jdI2oq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-01 18:51:41',
                'updated_at' => '2020-11-01 18:51:41'
            ),

            array(
                'id' => '151',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Feby Etriadi',
                'username' => 'feby10',
                'email' => 'febyetriadi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K9V7HBomKG3fRLQx0hrMz.whSu3zZTJ06w.Heh7b/5ZaAUcY4MwxS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-01 21:02:49',
                'updated_at' => '2020-11-01 21:02:49'
            ),

            array(
                'id' => '152',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhamad sulthaana saputra',
                'username' => 'aan',
                'email' => 'sulthaanan123@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SSt5nbQxLXiMqJD8RK9DgO1jD3l5.K4mXNHPux9amIRkE7EDB27Xm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-01 22:43:40',
                'updated_at' => '2020-11-01 22:44:28'
            ),

            array(
                'id' => '153',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'faizal',
                'username' => 'acropora',
                'email' => 'acropora212@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vXnEzyQAmXfT5eyEBGWGuOjrAW6Q/Vef9ZN7qykHkCh5XVVMM.Y7G',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-01 22:46:39',
                'updated_at' => '2020-11-01 22:46:39'
            ),

            array(
                'id' => '154',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'lian',
                'username' => 'lian',
                'email' => 'kasersin712@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gk4n3ksgIJJXQ3dIu4pMcOskjOUOtPGr6e90ztkkpY2G5E5DUOP3.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-02 06:55:23',
                'updated_at' => '2020-11-02 06:55:23'
            ),

            array(
                'id' => '155',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Radiansyah',
                'username' => 'Radi',
                'email' => 'radi.doank86@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lmMEGDTunXXsMlFqR5yxh.2Nsd25vkpd7avdhBYFEcPwr88DXQJ4C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-02 12:17:26',
                'updated_at' => '2020-11-02 12:17:26'
            ),

            array(
                'id' => '156',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Arrini G. Situmorang',
                'username' => 'Arrini',
                'email' => 'arrinigs1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nRSANWycYa2PywdQrquWtuy.errU1CQnJDN1oD5Q7z40J7yoQ/b3e',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-02 22:45:19',
                'updated_at' => '2020-11-02 22:45:32'
            ),

            array(
                'id' => '157',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'supriyadi',
                'username' => 'supriyadi',
                'email' => 'supriyadiskrd@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x95Nn1tdgBF51dCNqeTPk.oyOJfNKW7v9hS8b1JAFljtpVFKhk54W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-03 16:08:18',
                'updated_at' => '2020-11-03 16:08:18'
            ),

            array(
                'id' => '158',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andi Handoko',
                'username' => 'Andi',
                'email' => 'Handokoandi88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oMfj41aRhiWQpO/vfiJGj.aj8lhW/Lme6Gk0jiAIoYcRdaE2zkrK.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-03 18:48:43',
                'updated_at' => '2021-02-14 07:53:04'
            ),

            array(
                'id' => '159',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tezar farizi',
                'username' => 'SegGaft',
                'email' => 'tezarfarizi59@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iKHg66.abjF6wZIc8qKLIOHPn.u1cBJmiXvfRk3J/fGQbsykLpmSK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-03 20:27:03',
                'updated_at' => '2020-11-03 20:27:03'
            ),

            array(
                'id' => '160',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andra Azhari',
                'username' => 'andra.azhari',
                'email' => 'azhariandra1995@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JPzDLP6X9dUKJ57G3g/tfOYx0sLJkhujJh1veLdw24GrVOm3P4FbC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-04 15:41:47',
                'updated_at' => '2021-02-21 20:32:46'
            ),

            array(
                'id' => '161',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'junaidi',
                'username' => 'junay29',
                'email' => 'junaypratama@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6m7O8ycznrWMfPRiSoFCo.oG8KTlbMuIpZ56M27TTfxdMxyvCu5Nu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-04 19:57:31',
                'updated_at' => '2020-11-04 19:57:31'
            ),

            array(
                'id' => '162',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'NUPRIADI',
                'username' => 'Nupriadi',
                'email' => 'adinupri97@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8F4MgCmNtAaSD362mZ926OPSjuGipfBiVl5NlhetGCIRSPFnDc88G',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-08 09:55:56',
                'updated_at' => '2020-11-08 10:00:18'
            ),

            array(
                'id' => '163',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ivan Christiandi',
                'username' => 'Ivan Christiandi',
                'email' => 'ivanchristiandi24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$J3aQLio77jkdhAJauonSp.FKxn8ZILKNMfCT2Jli0tej28xYcgJm.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-08 16:05:49',
                'updated_at' => '2020-11-08 16:05:49'
            ),

            array(
                'id' => '164',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yan Budiman',
                'username' => 'Yan Budiman',
                'email' => 'yan.budiman01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CKxVkEo06zGu0NF2EZ2WVunK1wX9.uNAxBVpkm16Ex4bviQ8gPram',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-08 16:08:13',
                'updated_at' => '2020-11-08 16:08:52'
            ),

            array(
                'id' => '165',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Kwe Tina',
                'username' => 'Tina',
                'email' => 'kwetina77@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2LuQIvj0xsjymaOSQ487i.HJxVn0lZzKvkPuiPAFpfoIY3oE/TABG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-08 16:13:38',
                'updated_at' => '2020-11-08 16:13:38'
            ),

            array(
                'id' => '166',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'I DEWA MADE AGUNG',
                'username' => 'agung',
                'email' => 'madeagungdeea@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/K7rFw.p1.Mt2bW409IbdOXC4nCPM6E8nBGDArsWaLjeOaIBNA1V2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-08 16:37:00',
                'updated_at' => '2020-11-08 16:37:00'
            ),

            array(
                'id' => '167',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Arief Handayani',
                'username' => 'arief14',
                'email' => 'ariefserdam14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d4qKvsV1CtVJnFRpUq4riu1bFeHj6w849DeFcuY3SCamYO/kIY9dS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-08 20:31:41',
                'updated_at' => '2020-11-08 20:31:41'
            ),

            array(
                'id' => '168',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ari prima',
                'username' => 'palonk21',
                'email' => 'ericpalonk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7Q826jlvM5uxCY3s2zj8nu10oYBh8P6YwGJchgZtnQz1DcHOF.tMm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-09 17:20:27',
                'updated_at' => '2022-12-14 10:14:16'
            ),

            array(
                'id' => '169',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mirdad ahrari',
                'username' => 'mirdad',
                'email' => 'mirdadahrari13@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ypp8Ffd7sut9Pl04gI1NBOan.jKNR31puy/ZmuU9M4beT/ZVW5hfK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-09 19:46:12',
                'updated_at' => '2020-11-09 19:46:12'
            ),

            array(
                'id' => '170',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'lukito',
                'username' => 'lukito',
                'email' => 'lukito.pu.bm@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UQ27pGeTA/IibWkSbEu2w.rtHQQ2.T5mrnDRc3kNbZBY5SR.LGwo2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-10 17:30:19',
                'updated_at' => '2020-11-10 17:30:19'
            ),

            array(
                'id' => '171',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'i putu agus ekayana tusan',
                'username' => 'ekayanatusan',
                'email' => 'putu.aet@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4oJdtR3mgaSWGk71gkfqWueDiVu4.mkpjX88f267gkt4ISlD4vEG2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-12 17:46:02',
                'updated_at' => '2020-11-12 17:46:02'
            ),

            array(
                'id' => '172',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Edwin',
                'username' => 'Edwinweng',
                'email' => 'brillianthazel88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1XiE8SUGmqZ.Bg.VSQp7xOvyHzUxNpDnW.wblYVSHsZmTI8uRIbpG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-14 12:56:16',
                'updated_at' => '2020-11-14 12:56:16'
            ),

            array(
                'id' => '173',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Taufiq Akbar',
                'username' => 'Taufiq',
                'email' => 'alongakbar86@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LqF5Yi2ya71o7J8nyX.etOR8WbhGXSj8fBC7STZ8ASmkZCvdSTHtK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-15 05:07:57',
                'updated_at' => '2020-11-15 05:11:41'
            ),

            array(
                'id' => '174',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Heronimus',
                'username' => 'hero_padhil',
                'email' => 'hero.mrpanda@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WaXzZFflo4vYFp1m6Rkqiuu6koVbQV0eGzwG/J3y5aQReuXxmZJVO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-15 17:24:42',
                'updated_at' => '2020-11-15 17:24:42'
            ),

            array(
                'id' => '175',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rendra Wahyudi',
                'username' => 'rendra',
                'email' => 'wahyudire@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3HFK5Gl0Dr8l8FO3ccBIfOwIqrAQASbSY2OoAwhDbosCQ1/GYvESa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-15 17:25:37',
                'updated_at' => '2020-11-15 17:25:37'
            ),

            array(
                'id' => '176',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Hairudin',
                'username' => 'Hairudin Muhammad',
                'email' => 'muhammadhairudin13@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XJSPNI.w2gXJap8PlwUqVe3C/nPXmFan2HKsBJ122zpcF0/45QLbO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-16 02:07:08',
                'updated_at' => '2020-11-16 02:11:09'
            ),

            array(
                'id' => '177',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'basna yanti',
                'username' => 'basna_11',
                'email' => 'basnayanti@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QUbTK/5YHo/H83D8DN5VfuaqAzzuw/RK0IYtCddZIzupf5NEZwulW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-16 17:09:16',
                'updated_at' => '2020-11-16 17:09:16'
            ),

            array(
                'id' => '178',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dimas Wahyu Putra Prasetyo',
                'username' => 'dimaswp17',
                'email' => 'dimaspb777@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$S/RSiYk2MgoHp4iTqYjYxu8sAF3iiLyIOftokawkyMi5dMoo/3r/q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-17 15:51:06',
                'updated_at' => '2020-11-17 15:51:45'
            ),

            array(
                'id' => '179',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'herman hidayat',
                'username' => 'hermanhidayat',
                'email' => 'hermanhidayat004@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t7BTxoNAA6D8y/bZWzkle.Tnr5QER22YCIfctITk6T4qRX68Abx6C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-18 15:55:52',
                'updated_at' => '2020-11-18 15:55:52'
            ),

            array(
                'id' => '180',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Triatmanto Saputro',
                'username' => 'triatmanto',
                'email' => 'triatmantosaputro@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UQrafcrZN0b65towTQgl/.5zGufYZ/gCyeil4UkZwYN6zkHdHFw2.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-18 20:27:21',
                'updated_at' => '2020-11-18 20:27:21'
            ),

            array(
                'id' => '181',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Agatha Rita',
                'username' => 'atha2407',
                'email' => 'atha.flyzone@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vKw7DWH.gKGRwMaV29HxiOUJautPb4U9dh7J5QongwBDEUkV2JsVO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-19 00:27:01',
                'updated_at' => '2020-11-19 00:27:01'
            ),

            array(
                'id' => '182',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Abdu',
                'username' => 'abdu',
                'email' => 'abdu1439mg@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RM0IgymjN3raPR4FT0UJ9eBD/szT9x8CWSZOz0MJL8vf45KpHyAH6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-21 23:00:54',
                'updated_at' => '2020-11-21 23:01:57'
            ),

            array(
                'id' => '183',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Helena Ivana Lim',
                'username' => 'helena_ivana',
                'email' => 'helenaivanalim123@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eyBDXfBuR/hfbXxa7U0kCuPZfyiWLj0uGKjLUh39OpFTn3.Vc2xFa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-24 00:13:42',
                'updated_at' => '2020-11-24 00:13:42'
            ),

            array(
                'id' => '184',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jekky ilhamsyah',
                'username' => 'jekky',
                'email' => 'jekkyilhamsyah140@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YVMSqftBs6npPh.UnluCw.O9DY/letIEDBHGK1saF/4fhh4HwzjVG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-27 01:30:55',
                'updated_at' => '2020-11-27 01:30:55'
            ),

            array(
                'id' => '185',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Cecep Lukmana',
                'username' => 'cecep',
                'email' => 'cecep.lukmana86@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DzESFwvcIdNInQM1JbDp1.yzjkukZBzV6ZKnMmsR797Ow1kl3Q7TO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-29 17:35:45',
                'updated_at' => '2020-11-29 17:35:45'
            ),

            array(
                'id' => '190',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'andreasfrogy',
                'username' => 'andreasfrogy',
                'email' => 'Andreasfrogy363@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$b.0sR/avddb2c8/GvQ5ARelNCjtaNbkZHM7oee9jF6DDFG1l0mfjy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-11-30 19:13:30',
                'updated_at' => '2020-11-30 19:13:30'
            ),

            array(
                'id' => '191',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'johan',
                'username' => 'johantesla',
                'email' => 'gjr.manson@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9ScovGhOK/Ykz03NEtit9OOlIDd4v.L65S24jX/AYjNed40LUc.NS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-01 00:58:03',
                'updated_at' => '2020-12-01 00:58:03'
            ),

            array(
                'id' => '192',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Tiara',
                'username' => 'Tiara',
                'email' => 'tiaragty1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q./jt6O45CImltmpPlkxqOCa9UTgDXtxjHj0qXG7rMwqbGrz5zrVO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-03 02:50:29',
                'updated_at' => '2020-12-03 02:50:29'
            ),

            array(
                'id' => '193',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'AGUS IRAWAN',
                'username' => 'Agus Irawan',
                'email' => 'ai2821552@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZQwwLpGwW5rVN2gjQoitfe2Nvs4jkRSe0/CPhXK4PpYBeCnNVM5mq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-03 20:01:53',
                'updated_at' => '2020-12-03 20:01:53'
            ),

            array(
                'id' => '194',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Fathur H',
                'username' => 'fathurh',
                'email' => 'fathurhafizhi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vHoh4bwKz4a49nadj5is8ee5HqmXShT5Vfqp6uhGrE6OcxtXVrpgi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-03 23:55:10',
                'updated_at' => '2020-12-03 23:55:10'
            ),

            array(
                'id' => '195',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'baharudin',
                'username' => 'bahar',
                'email' => 'baharzdr@yahoo.co.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HE0khWr3Ie5zI9vrrI2yeOSAMBVJFVqyGKWXLlFc6O6w9tPVXej4a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-06 21:22:57',
                'updated_at' => '2020-12-06 21:22:57'
            ),

            array(
                'id' => '196',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syarif M. Nizar Zulmi',
                'username' => 'Syarif Nizar',
                'email' => 'syarifnizarzulmi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QgtjEQYAjHiHq9LInwwTfO2FuSyDZn7VBUJ/9k5ZUxwm4GgywG.52',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-07 13:08:59',
                'updated_at' => '2020-12-07 13:08:59'
            ),

            array(
                'id' => '197',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wirasmini.Amd.Kep',
                'username' => 'wiras.65',
                'email' => 'wirasmini65@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lrAAyTvJnaEr6YjOmBe0f.9QiakOnaFPav9tvNrXE2p5LWkO5Sd0O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-07 18:54:48',
                'updated_at' => '2020-12-07 19:13:36'
            ),

            array(
                'id' => '198',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'penta dessari',
                'username' => 'pentaaaaa',
                'email' => 'dessaripenta25@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EKXkZP18I9hyvlV3I.O/ueaf4PXhaBnhn2jFb.7GwaVAEWOGTeQLy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-08 11:23:21',
                'updated_at' => '2020-12-08 11:23:21'
            ),

            array(
                'id' => '199',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'SUKRON',
                'username' => 'SUKRON',
                'email' => 'makmunsyukron191@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SajUwZZQudK0BmK6I.I9U.RJavHyrLi/wCusM5mHyfpTeyQUQO4Xe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-08 12:47:26',
                'updated_at' => '2021-08-04 13:20:21'
            ),

            array(
                'id' => '200',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sondy Putra Nauly',
                'username' => 'sondypn',
                'email' => 'sondy.pn@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TcECbbbzTA/ejGF2ZnCttOVUm3APk9kOuDB/81anckDizg8EodC.m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-08 13:23:26',
                'updated_at' => '2020-12-08 13:23:48'
            ),

            array(
                'id' => '201',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rama',
                'username' => 'aristiyo',
                'email' => 'ramaaristiyo@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q8xhDXmvSM4684UfCzsd6.QARO/12jP1HOZQammbZ1KfGgm5ECgm.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-09 20:29:56',
                'updated_at' => '2021-02-14 17:46:46'
            ),

            array(
                'id' => '202',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dewi Valentin',
                'username' => 'dewivalentin',
                'email' => 'dewivalentin2612@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gLSNZg9hBdbONPtYXE0kFuB1nde20ROhD66BJaa0MET6aGcj/Ts9W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-09 20:46:30',
                'updated_at' => '2020-12-09 20:47:32'
            ),

            array(
                'id' => '203',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wadideka',
                'username' => 'Gwadi',
                'email' => 'gwadii1998@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aPql2A2id3AK69BwjJLiiOkXHmOSe3OjD6usIRnEuMwXN.4d1iioK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-10 03:59:34',
                'updated_at' => '2024-08-29 16:48:26'
            ),

            array(
                'id' => '204',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ray mundus',
                'username' => 'rei',
                'email' => 'rayska03@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kJjO8SnFDfkag3wdfSm6zuw05msg8gWMNfv.hOOVjAM4sjCfP.x4y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-10 16:52:10',
                'updated_at' => '2020-12-10 16:53:45'
            ),

            array(
                'id' => '205',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sukianto',
                'username' => 'MAR',
                'email' => 'ac3r08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eaICsCEDtWVFCbvZgjTR0OaRNU2Hs6EMPGaCY2s9zwEs9CE8nJnR.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-10 17:38:49',
                'updated_at' => '2020-12-10 17:38:49'
            ),

            array(
                'id' => '206',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Prima Sulistyo',
                'username' => 'Sulistyo7883',
                'email' => 'sulistyop121ma@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YGOHdDEc9KALfn0MbngDwOdqMSpBGaUZsDneiFswywXM714JuxNS.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-12 09:58:05',
                'updated_at' => '2020-12-12 09:58:05'
            ),

            array(
                'id' => '207',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Mettalysa Malini',
                'username' => 'Mettalysamalini',
                'email' => 'mettalysafiquemalini@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M/m5M2OYE/y2Zgo3zeG8YudeGcn/uYMStWloVKNHmGFSxmG0TaYwe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-15 17:45:13',
                'updated_at' => '2020-12-15 17:45:13'
            ),

            array(
                'id' => '208',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Merdian Adicahya',
                'username' => 'Aan77',
                'email' => 'adicahyamerdian@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OLSvxw69UWEwbsUH3r6GGOZubeW1wEBRBGQdVZi9e8G39bzOLXOmi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-15 23:56:17',
                'updated_at' => '2020-12-16 00:02:58'
            ),

            array(
                'id' => '209',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Aditya',
                'username' => 'aditya24',
                'email' => 'adityahendrik@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AZIwl42.d5RAyRB9t.y1pOPTWtWuCnHRFJWMVThFw6UzHrR4GldNy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-18 15:28:49',
                'updated_at' => '2020-12-18 15:28:49'
            ),

            array(
                'id' => '210',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rafli Ihsanul Fikri',
                'username' => 'Rafli',
                'email' => 'rafliihsanulfikri78@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZIv34b4OBYxeOXtVgOXIQ.zsOOVYgngCMxpZncTPC8iHYpwY8sL96',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-19 01:59:32',
                'updated_at' => '2020-12-19 01:59:32'
            ),

            array(
                'id' => '213',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rio gusnandar',
                'username' => 'bangroy',
                'email' => 'kingrebellions_esport@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7bU3lTZMBZableg/8gq6eeN0ux6cu6ywowiO9zP/u.Eu8Ib8H0da.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-20 14:04:30',
                'updated_at' => '2020-12-20 14:11:13'
            ),

            array(
                'id' => '214',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'behdi',
                'username' => 'bedy BM',
                'email' => 'fatir.bennery@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DTiI0i5mIVvOBcQ.iwt73./lRz25xYXOu7AQRHhPXXGQg8y6ptmta',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-20 14:11:21',
                'updated_at' => '2020-12-20 14:11:21'
            ),

            array(
                'id' => '215',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'herman',
                'username' => 'herman',
                'email' => 'namhersu@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f4x7/GHzfyP293kXNIpeX.fGK7OXiarqPJbEUWOkYkLqUj3pDQtrm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-20 18:48:58',
                'updated_at' => '2020-12-20 18:48:58'
            ),

            array(
                'id' => '216',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syahrul',
                'username' => 'Boboboi',
                'email' => 'sahru.sa.sahrul@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BMc3kqnsATey8txDzkUB.uHTsqv8bcsMkYrOBRsmtAF7ZAy6l6hF6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-22 10:46:43',
                'updated_at' => '2020-12-22 10:50:02'
            ),

            array(
                'id' => '217',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Waldy',
                'username' => 'waldybei',
                'email' => 'waldy.bei234@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CIHK3W.Fr94GsUnnmQjLz.A6OLBQvxzw6mrs.QZvAq.Z77LyrDN6m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2020-12-29 11:53:50',
                'updated_at' => '2021-07-24 22:47:54'
            ),

            array(
                'id' => '218',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sri wulani rezeki elida',
                'username' => 'nickyelida',
                'email' => 'sriwulani@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VJB3StDUMDOLIlNQimObYemjFphPPeuh5X/EyqbqWhGxA4LvGpQWe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-06 18:09:55',
                'updated_at' => '2021-01-19 10:40:42'
            ),

            array(
                'id' => '219',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'asfarul',
                'username' => 'asfarul',
                'email' => 'asfarul@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QtWye3rvJl6HgY74tDL4tO68v994nDk31IwoMQyAA51j9ftTtdf.C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-07 13:46:17',
                'updated_at' => '2021-02-09 18:16:46'
            ),

            array(
                'id' => '220',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Asfarul haq',
                'username' => 'arul',
                'email' => 'arul@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wC2VbRFxFJf2DJr3d4VXZ.Fiv.j4GtnG59cx.jSr63UNiZh0tP/La',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-11 14:18:41',
                'updated_at' => '2021-07-04 13:19:09'
            ),

            array(
                'id' => '221',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'elmy',
                'username' => 'elmilianus',
                'email' => 'elmy.elmilianus@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MYgjKeBNGSBCG4iiukXiN.74Mx9MD8DdyEcGms2knBPn3c3comGSW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-15 15:30:57',
                'updated_at' => '2021-01-15 15:30:57'
            ),

            array(
                'id' => '222',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Toni Haryanto Tumbelaka',
                'username' => 'Toni',
                'email' => 'toniharyanto98590@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MUCxGSlOIT5o8ejYxnQT7.9PVklR0g8AQFIVJ6V4/XczUeZVHOS4C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-15 19:20:57',
                'updated_at' => '2021-01-15 19:20:57'
            ),

            array(
                'id' => '223',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Azhar zaen',
                'username' => 'azhrzn',
                'email' => 'azhrzn@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$O..ogHYp0Np/Lqohb/S3kejGOQrF4RvekxXxO8Q7OLm85EHIEcqUy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-16 22:51:19',
                'updated_at' => '2021-09-04 17:33:01'
            ),

            array(
                'id' => '224',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad',
                'username' => 'fadlysyahab',
                'email' => 'halo.fadlysyahab@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YxsNV4DnpFbb5T8z6yhuiujlvz/zbCYBdj2hnXRa4jPHQ0sfe9xYC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-18 17:45:35',
                'updated_at' => '2021-01-18 17:45:35'
            ),

            array(
                'id' => '225',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wiki tanora',
                'username' => 'wiki',
                'email' => 'wikitanora@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ro.eKlIvFKqFf7DMHTwsFOWFetKlDEdvjMYLPDaNyv3Vg/tVGWcFa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-19 09:50:54',
                'updated_at' => '2021-01-19 09:50:54'
            ),

            array(
                'id' => '226',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dewa Mahardika',
                'username' => 'Wawa',
                'email' => 'dwmhrdk11.wixsite.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sjaZ4Rkh.lXMMyuCzjcb5OYD0vqcNIcD4oHk6537TF1owsuLLoPyS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-20 17:26:16',
                'updated_at' => '2021-01-20 17:26:16'
            ),

            array(
                'id' => '227',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'AAN AJI PRAYOGI',
                'username' => 'aan_aji_prayogi',
                'email' => 'aanajiprayogi6@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bmJv/yQKsc2AFM.1DXWf/eDOd3/GQ3110EEBhJHP18A01h3xVKl9a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-23 05:36:44',
                'updated_at' => '2021-01-23 05:38:19'
            ),

            array(
                'id' => '228',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ego fatum',
                'username' => 'egofatum',
                'email' => 'ndlntm@unpas.ac.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q/Syz86jWvCSBeDzl4JVLuVpYDKlT0SCbTit3xUO6uyDaP687A2RC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-24 01:47:19',
                'updated_at' => '2021-01-24 01:47:19'
            ),

            array(
                'id' => '229',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yogi',
                'username' => 'yogi',
                'email' => 'yramadhan776@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$z5OWAL.Ft4zqyhn9TAxvDeRclbkd2dfETlh7tvfsJbhaAIqsxM.1u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-01-26 15:36:59',
                'updated_at' => '2021-01-26 15:36:59'
            ),

            array(
                'id' => '230',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yusrizal',
                'username' => 'yus',
                'email' => 'yusrizal.sas@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LOBWjfPKsZHsWYppIFNeT.wVJrpr7t3YSRwHc.J2DaxPHdCLL/Vsm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-05 11:59:01',
                'updated_at' => '2021-02-05 11:59:01'
            ),

            array(
                'id' => '247',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'raka sulham',
                'username' => 'raka',
                'email' => 'rakasulham007@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jxEYsP/wxB8LPku.qU00ReUDuhjkgebpoOCpNwPXmBA9dA8lvnVZG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-10 06:21:33',
                'updated_at' => '2021-02-10 06:21:33'
            ),

            array(
                'id' => '248',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sendy Prananda',
                'username' => 'Sendy',
                'email' => 'sendyprananda05@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EWoUKctgp0mHcWmDxancL.ndofZMRL.ppHYVGWrWJkOhkbWJU/XcO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-10 11:00:54',
                'updated_at' => '2021-02-10 11:00:54'
            ),

            array(
                'id' => '249',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => '@Sari_alice',
                'username' => 'Sary',
                'email' => '@sarynuriyanty',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p85pfhEqMxRv3.Pb6qa47uhQlWsKmkJZS2nj9Hx1uJoKCiZnGIn66',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-10 23:05:12',
                'updated_at' => '2021-02-10 23:05:12'
            ),

            array(
                'id' => '250',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rio',
                'username' => 'rio',
                'email' => 'yesen.shuriken11@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VKQASYmDJfCcbRo1XeYZL.pn4PG6txBcXKV6QTZ5T.KRYEF9wmAO.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-12 18:14:23',
                'updated_at' => '2021-02-12 18:14:23'
            ),

            array(
                'id' => '251',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hendriyono',
                'username' => 'hendriyono',
                'email' => 'hendriyononorman@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nEjG1ufLAaC3L2CklCBpnunMsOiUeltqXHwf0xKO1vDcwFMybymfW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-14 15:40:40',
                'updated_at' => '2021-02-14 15:40:40'
            ),

            array(
                'id' => '252',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yogi',
                'username' => 'ramadhan',
                'email' => 'yramadhan843@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xX6yp/iQy0XetYuKH45d.ed7MPw3XDIG2wuOJufh02rN7n6Ge/dRe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-15 06:29:51',
                'updated_at' => '2021-02-15 06:30:19'
            ),

            array(
                'id' => '253',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ANGGI SASSISKA PUTRI',
                'username' => 'RANGKUTI',
                'email' => 'anggiptk99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TunEJQroj3xx12FCvwJUneaT8QyaHsijP2UyeJpO6x7LvP58lgmJa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-15 22:52:47',
                'updated_at' => '2021-02-15 22:52:47'
            ),

            array(
                'id' => '258',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ANGGI SASSISKA PUTRI',
                'username' => 'RANGKUTI',
                'email' => 'anggisassiska@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$arJxJNNsaLY2Pz.gv3DvbeNlveT6Um8AOs.hYbpmCTFpP6n1T2RoK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-15 22:58:07',
                'updated_at' => '2021-02-15 22:58:44'
            ),

            array(
                'id' => '259',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'frederik bambang',
                'username' => 'frederikbambang',
                'email' => 'ng.frederik@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ebJbJuS/ex4PvMVneY4l1uT1EFq8oPYozbSzfO/0UvR/y2WoPfvNW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-17 15:38:06',
                'updated_at' => '2021-02-17 15:39:21'
            ),

            array(
                'id' => '260',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anton Trimaryanto',
                'username' => 'antontri',
                'email' => 'anton.trimaryanto@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4zUdAqQNLUDfrdL3C0NCWe7ENUnoktj4ch1WyhIw0wY.ZTadTdDha',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-21 20:35:23',
                'updated_at' => '2021-02-21 20:35:23'
            ),

            array(
                'id' => '261',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Christian Runtu',
                'username' => 'Christian Runtu',
                'email' => 'christiannussy1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9aDS.eBNfK.U1zgGUsKUdOybNDKd2grgxd1U8jHbKdk3gd8EG2TVK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-22 12:36:52',
                'updated_at' => '2021-02-22 12:36:52'
            ),

            array(
                'id' => '262',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Maulidya Istiqomah',
                'username' => 'maulidyaistiq',
                'email' => 'maulidyaaa.istiqomah@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$al1sRzOOJkH1hdQudHcfR.FI26w4F7dG0lU0EkLdZ3Ktu5TbGJooS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-02-22 23:46:21',
                'updated_at' => '2021-02-22 23:46:21'
            ),

            array(
                'id' => '263',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jeremi',
                'username' => 'jeri',
                'email' => 'jerimia02@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CgEIvizChSbC6jRLhPBh7Ot0ID8C5iUX/SGLs./CN.z.vgHLjCIFi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-01 10:56:45',
                'updated_at' => '2021-03-01 10:56:45'
            ),

            array(
                'id' => '264',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nurul Ramadhani',
                'username' => 'nurulrama',
                'email' => 'nurulramadhani.sgf@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QfQmD4tDMEn3Ef5V2pgpeOWH1yuumS/ScZ1tYMt0wczJEXZ0wjr6m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-02 08:47:26',
                'updated_at' => '2021-03-02 08:47:26'
            ),

            array(
                'id' => '265',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Joni',
                'username' => 'ayahjon',
                'email' => 'ayahjon@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iu/yf7SsO7tTzBMGPCGgy.Axes929E6YhZSRiXmBpGPsehS1SZKTS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-03 16:42:25',
                'updated_at' => '2021-03-03 16:42:25'
            ),

            array(
                'id' => '266',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deti Wahyuningsih',
                'username' => 'detywahyuningsih',
                'email' => 'detiwahyuningsih1990@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2ZGsEAcC1gRXj1d36DI8IuBOJYRfW7AYz9o7T8lL.snLfZ9Z/C16W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-03 16:44:49',
                'updated_at' => '2021-03-03 16:47:21'
            ),

            array(
                'id' => '267',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Martino Hadi Bowo',
                'username' => 'Martino',
                'email' => 'martinohadibowo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zV3RgscS29Mqkmn0Q9bKrOdPIaOO9hEo.1293ckPgUFAIjohDI85C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-03 16:49:21',
                'updated_at' => '2021-03-03 16:50:32'
            ),

            array(
                'id' => '268',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'desi',
                'username' => 'desi',
                'email' => 'desisaniyati@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nJY.SSsQ.TTqiIeBtc06XOj8US2ww6aYdmXhGnvxjSc4WIVl8AU1W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-03 16:52:13',
                'updated_at' => '2021-03-03 16:52:13'
            ),

            array(
                'id' => '269',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Julianto',
                'username' => 'Julianto',
                'email' => 'julianto.julz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4jA.P8hYLEser2Pa/.Z4Gu8yjUG99eSBwqfTuI.Gx6AFvLpvaXqQ6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-06 12:05:21',
                'updated_at' => '2021-03-06 12:06:34'
            ),

            array(
                'id' => '270',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Fahrulrozzi Iriansyah',
                'username' => 'fchrulrziirian',
                'email' => 'fchrulrziiriam@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BVxx.ZqpbIjC/iBxz7T.9ehrPHprjfMLXVI1I9I/1pbL3CEPLixjy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-07 02:36:57',
                'updated_at' => '2021-03-07 02:36:57'
            ),

            array(
                'id' => '271',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ririt',
                'username' => 'ririt',
                'email' => 'comeprete@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eEoGv0Q1pF/5wkRYo9S4Z.KKdavgpNu6l33js/qFm7uu.IRjCkmLK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-07 13:29:03',
                'updated_at' => '2022-03-17 06:54:11'
            ),

            array(
                'id' => '272',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Arief Farhan Maulana',
                'username' => 'arief farhan',
                'email' => 'paanarief24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FwYGmyV/0mm75JW/1WJQLOCjf0walb9eBU.2Z42IPSenRRKvBZ1IW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-08 00:01:12',
                'updated_at' => '2021-03-08 00:01:12'
            ),

            array(
                'id' => '273',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Rizal fahruji',
                'username' => 'dyo',
                'email' => 'muhammadfauzi12361@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rjV9X8UZBcJpaUR56bAP8udp109SfYuxonww84.ylcdKzEOhBDcEO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-09 17:14:17',
                'updated_at' => '2021-03-09 17:16:20'
            ),

            array(
                'id' => '274',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'santi hariyani',
                'username' => 'Santi Hariyani',
                'email' => 'santihariyani250175@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3p6eglqqC2/hWvtyjFmLOuiAC/r6vR90Dfzym83quQ3ln4AUty032',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-16 07:37:52',
                'updated_at' => '2021-03-16 07:41:42'
            ),

            array(
                'id' => '276',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'atkmarketpontianak',
                'username' => 'atkmart',
                'email' => 'atkmarket01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ntSRaYIcWlllG3PYumLD9OPWLiCI8rVP6TkVFUJWR3EHCQPz4w/uq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-16 10:37:05',
                'updated_at' => '2021-03-16 10:37:05'
            ),

            array(
                'id' => '277',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Indriani Hasibuan',
                'username' => 'indri',
                'email' => 'indrianihasibuan12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kYu7wRvgPkoFnFKNrPCVGuyhSqOFpPx996VQdS/3r458GtWF6hN.u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-16 11:10:57',
                'updated_at' => '2021-03-16 11:11:49'
            ),

            array(
                'id' => '278',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yulianti',
                'username' => 'yuli2001',
                'email' => 'yuliyanti20011989@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SZ.PFRbqXEFrsLAssNw2/ukBu7MzBw.Lntok2rD2wviGF1Q5bVLYm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-16 23:29:31',
                'updated_at' => '2021-03-16 23:29:31'
            ),

            array(
                'id' => '279',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'handre dasiyas sandy',
                'username' => 'jhon handre',
                'email' => 'handredasiyas2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f30cIQBPzEVDNi6iGJ8P2OKr5siYiO67ahj1CKNTs81bgWbzQ9ULe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-17 21:35:06',
                'updated_at' => '2021-03-17 21:35:06'
            ),

            array(
                'id' => '280',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'HARIS CAESARIA SAPUTRA',
                'username' => 'haris_caesaria',
                'email' => 'haris_caesaria@yahoo.co.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$riQ0JRC5CgmAy5vDEB7eJeXb74KXdF3cWv3IewFzLqll.Gxcx2U5C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-19 16:02:04',
                'updated_at' => '2021-10-10 09:53:50'
            ),

            array(
                'id' => '281',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'akbar mustika',
                'username' => 'akbar1985',
                'email' => 'bar.driv3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4oESkZXHHqelz6lkhejoYucGncnZwzidFFlZpxVM9uOuONVFDj9wO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-26 17:36:58',
                'updated_at' => '2021-03-26 17:38:36'
            ),

            array(
                'id' => '291',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Cipta',
                'username' => 'Cipta',
                'email' => 'ciptachandra2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sI3lNgauRyqo0PaDmdqN1uA/U7DMl6F7FIKkLwBAqmSgwtvfyr8Y6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-30 19:47:08',
                'updated_at' => '2021-03-30 19:47:08'
            ),

            array(
                'id' => '292',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Putri Retno Anzani',
                'username' => 'putriretnoanzani',
                'email' => 'ra.putriretnoanzani@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MdJvwR79Eko5UhNJAcg1HeqtCDsFCm/rVW7WCQAiLOh5QohdDg.Lu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-31 16:51:16',
                'updated_at' => '2021-03-31 16:51:16'
            ),

            array(
                'id' => '293',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sri',
                'username' => 'Rezeki',
                'email' => 'srirezeki081@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5xHx8U0bOmsiQ6v7xaMkO.XWM77YjvRSgxOyXh4MFRG81yPjS8Dh2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-31 16:51:55',
                'updated_at' => '2021-03-31 16:52:26'
            ),

            array(
                'id' => '294',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deni Kurniawan',
                'username' => 'DKurniawan',
                'email' => 'dennykurniawan012@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$opbjf5PK7sNVxnZQnwhGQ.F2bsktdFkM4AHncP0pkXnBdGxRl3yCe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-31 16:52:12',
                'updated_at' => '2021-03-31 16:52:12'
            ),

            array(
                'id' => '295',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ulfa Sipahutar',
                'username' => 'ulfasphtr',
                'email' => 'ulfa.elvsocga@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yQDnPJh3uqxutU3Xdp8vs.YKSjMB14J/7hgtfwFZtrG4D6LBYFrie',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-03-31 16:52:58',
                'updated_at' => '2021-03-31 16:54:01'
            ),

            array(
                'id' => '296',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Esti Pratiwi',
                'username' => 'estiprtwi',
                'email' => 'pratiwiesti581@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6BYSb./wT.7riS0N98tnd./95KZIvmZz4ADtYw6Jh.NK1rcfe4vre',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-01 21:40:56',
                'updated_at' => '2021-04-01 21:42:21'
            ),

            array(
                'id' => '297',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ferry Riniadi',
                'username' => 'ferryriniadi',
                'email' => 'ferryriniadi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9dSR9kfUgOQUyPHAXrbcM.Tm21GLPL.kzzHIfthUqobsMzm1wXbFm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-02 00:40:04',
                'updated_at' => '2021-04-02 00:40:04'
            ),

            array(
                'id' => '298',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hanif Ramad',
                'username' => 'haniframada',
                'email' => 'haniframada@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NsdVuN1hZHwXqHEsw4UyO.IC9g2/goVlV/OnvPLTwgNNFD0FLZgh2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-02 23:11:29',
                'updated_at' => '2021-04-02 23:11:29'
            ),

            array(
                'id' => '299',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'laora kartika',
                'username' => 'lora',
                'email' => 'laora137@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fnPBX8ka9lQZpUAZj/uIR.HRmBtN4.D76Wwo3BlaaPSoxhaJ10Auy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-05 17:08:17',
                'updated_at' => '2021-04-05 17:08:17'
            ),

            array(
                'id' => '300',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rosaria octaviani',
                'username' => 'via',
                'email' => 'rosaria310@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GptTVRk77w3Y/Ei9iMx5IeAMgcAK1j9p8nnB7rOdze07OV6a1H17W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-06 12:16:54',
                'updated_at' => '2021-04-06 13:05:55'
            ),

            array(
                'id' => '301',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yulizar Rofiq',
                'username' => 'yrofiq777@gmail.com',
                'email' => 'yrofiq777@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SrjmvtQxTYc.9iOEINUTZurbT3JaPKLFGca4wyNehI6tYNldmsePK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-07 21:59:22',
                'updated_at' => '2021-04-08 00:34:33'
            ),

            array(
                'id' => '302',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'm Kamal yasir',
                'username' => 'kamal',
                'email' => 'kamalyasir88@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sn4Uenl6thKotbrN5y3lVuDztTwjo5PHwXI4UCotnJfwCH9Xav11a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-12 22:02:12',
                'updated_at' => '2021-04-12 22:02:12'
            ),

            array(
                'id' => '303',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Adiwahyudi',
                'username' => 'yudie',
                'email' => 'adiwahyudi197@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P.5lU/.9w70byw/FdXSszOg.98AAWpIR.aS3l3a.W59qkbLu6em2y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-20 20:13:13',
                'updated_at' => '2021-04-20 20:13:13'
            ),

            array(
                'id' => '304',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ery Dharmawan',
                'username' => 'Ery',
                'email' => 'erydharmawan2204@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zD5v6o4BCDYUYUnVC.iEJ.NHhhShgSNhYn1Coystr5XTHgP8VfHmS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-21 13:13:24',
                'updated_at' => '2021-04-21 13:13:24'
            ),

            array(
                'id' => '305',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nur Fitriati',
                'username' => 'Fitriaa',
                'email' => 'nurfitriati55@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p4Vh4.prst9VkieZB76eUOyD2ToaklwYFnBKosOmhBkZS0BEyWT0u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-25 16:57:11',
                'updated_at' => '2021-04-25 16:57:11'
            ),

            array(
                'id' => '306',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sofi anggala',
                'username' => 'anggala',
                'email' => 'anggalahestu@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UU7s.miafYrrbRj6pawj6uwvcmNGFXHlb906AZnUrJjZf1bCLwsZS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-25 16:58:12',
                'updated_at' => '2021-04-25 16:58:12'
            ),

            array(
                'id' => '307',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'parti',
                'username' => 'partii',
                'email' => 'dhafitanizzanurdina@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cDk5Rzg/9doW9yJIS9XWM.nsHqtHqc46b0pH0O3iCCoYWdhYx.RRS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-25 16:59:49',
                'updated_at' => '2021-04-25 16:59:49'
            ),

            array(
                'id' => '308',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'kharismadhany',
                'username' => 'dhanyrisma',
                'email' => 'kharismadhanyistisyhad@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1LLV/OXQHI51yP0KHFq4WOdT6p6DPxjX8.KvgKnz0/.V0LnT2BkR.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-04-25 17:00:23',
                'updated_at' => '2021-04-25 17:01:38'
            ),

            array(
                'id' => '309',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sudosu',
                'username' => 'sudosu',
                'email' => 'sudosu@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zEMQ7ygCvpmVwsySfB.OauIFFVMxztkxG76qCb.NdWnfEfSttzvNy',
                'description' => '<p>superadmin1</p>',
                'remember_token' => 'WGdDnhjBqEVzU8Pa16uYYwJAymnx0qAY2P0WAjCCSeXxbD1c1jMZ7Cr7wJeO',
                'created_at' => '2021-05-02 13:25:53',
                'updated_at' => '2021-05-02 16:09:04'
            ),

            array(
                'id' => '310',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syanur Pitrianti',
                'username' => 'Nur',
                'email' => 'naikhun81@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TDSgmk4jDWhxg9yY03dP8.Si7ye8P/cEN8pGLWCLMo6GSOOURC0fy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-04 00:42:45',
                'updated_at' => '2021-05-04 00:42:45'
            ),

            array(
                'id' => '316',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dimas eko',
                'username' => 'dimaseko43',
                'email' => 'ekodimas43@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ymyXZlzr39TxTMMjFImHFOdeInLHI6U0IvSOVgJ2yRqPUjZaRowne',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-05 14:19:05',
                'updated_at' => '2021-05-05 14:19:05'
            ),

            array(
                'id' => '317',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'victoria putra haribuan syahna',
                'username' => 'victor_98',
                'email' => 'victoroppo2017@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$doMrB.L2PJAgLCZn1emzsOFnspkjhtyZR.Ual0Yuxs2uhy0kCRlke',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-06 01:27:12',
                'updated_at' => '2021-05-16 03:07:59'
            ),

            array(
                'id' => '318',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'text',
                'username' => 'text',
                'email' => 'text',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RZLfLUaWwNvez4gkKdqF0uVq37mimSoLng8Hp8n.I9Xl.KIQuf/H6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-06 17:12:52',
                'updated_at' => '2021-05-06 17:12:52'
            ),

            array(
                'id' => '319',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Irva Anggita',
                'username' => 'irvaanggitaa',
                'email' => 'irvaanggita123@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4HKSXW88bjN2eoxwlLiWv.6Ncg7ACbupfo.2k/XR/b3K1IcfKZRoK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-07 18:36:06',
                'updated_at' => '2021-05-26 13:08:35'
            ),

            array(
                'id' => '320',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hendry Falentine',
                'username' => 'KickRog',
                'email' => 'hendrymask@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HFhxlbJlmzU8o1TRGy1M5.BVOiosPFdVnLMGo.O1f/flUC7uU19Qi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-07 19:00:33',
                'updated_at' => '2021-05-07 19:02:09'
            ),

            array(
                'id' => '321',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sahril Pratama',
                'username' => 'sahrilpratamaa',
                'email' => 'sahrilpratama07@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kzc4Xmvap4ALv7tNg1UilebCadwC8PzIyIXJ7DeVnFYamEvQkgFfq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-09 01:47:33',
                'updated_at' => '2021-05-09 01:47:33'
            ),

            array(
                'id' => '322',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Erwan Kurnianto',
                'username' => 'ekuto',
                'email' => 'erwankurnianto@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U2WNhYCQVHiy/IKjsFUvuedrR7Sx3J.SzUz.cW/efETBCDCizooZW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-14 08:39:32',
                'updated_at' => '2021-05-14 08:39:32'
            ),

            array(
                'id' => '323',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anggy Retno W H',
                'username' => 'anggyretno',
                'email' => 'anggyrwh08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HZaMlDcAKxtcxKfdkmDfhuf5ZSHqICSLHsE3i2m/gtWZyq39PJfWa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-18 17:40:13',
                'updated_at' => '2021-05-18 17:40:13'
            ),

            array(
                'id' => '324',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dini Haiti Zulfany',
                'username' => 'diniehz',
                'email' => 'hazelniez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hSza4earvQa3tdARoBdr4uguWeVcBZCtAmhoiOlr51Tm2TpNQikPq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-22 21:54:13',
                'updated_at' => '2021-05-28 15:02:21'
            ),

            array(
                'id' => '325',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'reni nandasari',
                'username' => 'reni',
                'email' => 'tamilthambi13@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9mc6ba1klRU39gXk2ChVueLPno8T27R0GdxpXjAKAQKYjp2pwhXpu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-23 00:01:55',
                'updated_at' => '2021-05-23 00:01:55'
            ),

            array(
                'id' => '326',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tamilthambi',
                'username' => 'tamilthambi',
                'email' => 'tamilthambi13gamil.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DgfLfGBYpOV864p0rWAUYOWiUYD4SefOZaCpay0Mi1S/npUqhbkzO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-23 00:04:46',
                'updated_at' => '2021-05-23 00:04:46'
            ),

            array(
                'id' => '332',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammadun',
                'username' => 'almadun',
                'email' => 'airhitam19@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MryxJOpj3yaMlpyZnuodyOrLpIF96YHJbMnwrt/EX/i0RMtCykGcu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-28 13:51:10',
                'updated_at' => '2021-05-28 13:51:10'
            ),

            array(
                'id' => '333',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dela',
                'username' => 'delaaa',
                'email' => 'delaanggraini28@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wtq9NrXX4NlbrdSEpENI3eCl9fnUZkKPyS1KzZWfEgZJBLiz3Qobq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-05-30 20:57:48',
                'updated_at' => '2022-05-22 21:25:09'
            ),

            array(
                'id' => '334',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Risky Fathurrahman Sam',
                'username' => 'Risky',
                'email' => 'rizqifathurrahmansam@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DKU81HL7VjVMBLgGheSJ8u4xGIkFJc7jjfw8bmoUdZSuISr.KJk/S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-01 01:28:09',
                'updated_at' => '2021-06-01 01:28:09'
            ),

            array(
                'id' => '335',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agus aritonang',
                'username' => 'artonsnow',
                'email' => 'agriton1975@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d5u5BWSuM7e/LWxsHXeFkOv/SinUXuFKkh2qQqKVqsi49IX4tZZwS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-06 16:40:40',
                'updated_at' => '2021-06-06 16:40:40'
            ),

            array(
                'id' => '336',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Danny Indrayana',
                'username' => 'danzindrayana',
                'email' => 'dannyindrayanaft@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iVZIPjZRhADatHyuBXBb3usfGea1YTPQRT5mUyKxdYg.OmCcZYxpa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-09 17:51:14',
                'updated_at' => '2021-06-09 17:56:10'
            ),

            array(
                'id' => '337',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'septian rinaldi marpaung',
                'username' => 'tian889',
                'email' => 'bimantara9999@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fECzHOPcArO1EMf1vC0HHeGqcIjMWgLS8Oc4MLWHAlk/vtdf4ONN6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-14 19:16:20',
                'updated_at' => '2021-06-14 19:16:20'
            ),

            array(
                'id' => '338',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'emelda',
                'username' => 'mel',
                'email' => 'emelda2589@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.0Y6XIvz4ji0zLbZsdEm4ObWNEH8jaroIfiZbffbGozJjH.xs8SXC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-16 02:34:38',
                'updated_at' => '2021-06-16 12:25:09'
            ),

            array(
                'id' => '339',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Joo Ayik',
                'username' => 'jaenudin33',
                'email' => 'jaenudin33@protonmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dpTw2hB4MhG99.FHz1kDCOp3cRsZnzvyyS1wYvPOg07.pzSmgBTcK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-24 16:42:52',
                'updated_at' => '2021-06-24 16:42:52'
            ),

            array(
                'id' => '340',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Lip Heng',
                'username' => 'Aheng',
                'email' => 'lenovoaheng88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$o9BPkYadQry1z/oY9cj7JucPULHA6r2.UzJGNi/si0Y0mKIL0CuRK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-28 00:07:07',
                'updated_at' => '2021-06-28 00:09:05'
            ),

            array(
                'id' => '341',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ade dedi noviardi',
                'username' => 'aden74',
                'email' => 'ade.dedi74@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AWDZpMgrpuJjSFFRUh6AGOBNgsbhPEPWC/4o.xz89f9wXizlcjaMm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-28 13:27:09',
                'updated_at' => '2021-06-28 13:27:09'
            ),

            array(
                'id' => '342',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nurainiramadani',
                'username' => 'nurainiramadani',
                'email' => 'nurainiramadani0@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3va/7VQ3SgsSfiz6G1lbCOgFfFKufuEkbFgNMS1mRJONB0u7pqzwi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-28 16:40:28',
                'updated_at' => '2021-06-28 16:40:28'
            ),

            array(
                'id' => '343',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'taminasih',
                'username' => 'qweasdzxc',
                'email' => 'apotik.sbs12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aE.QQgIQZ.w2gnaQH.l.zO6gWdKv68.2uU7HIBTrPeF.Dc6tjE8AS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-28 16:41:49',
                'updated_at' => '2021-06-28 16:41:49'
            ),

            array(
                'id' => '349',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tomi eko',
                'username' => 'tomi',
                'email' => 'etomi546@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZugybqgamrMocn0NAYoQs.g.DQQTSB7n1QNdtMttfOoXa4Q1ze4aK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-06-29 22:18:07',
                'updated_at' => '2021-07-04 00:34:26'
            ),

            array(
                'id' => '352',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'victor',
                'username' => 'hyakken',
                'email' => 'v1ct012.chia666@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$z951ywVKq3JyA70ceDOdFuGIXXuoU65Bo/ogZiXcr.j3scGK4a5AC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-01 10:16:15',
                'updated_at' => '2021-07-01 10:16:15'
            ),

            array(
                'id' => '353',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'masroni',
                'username' => 'Rono',
                'email' => 'masronipanda@gmsil.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$30M4jX0t7eoY1318O7ESIOfZTQaL0um0vBluXxm5wsgZY3JOJ3/aW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-02 17:29:39',
                'updated_at' => '2021-07-02 17:29:39'
            ),

            array(
                'id' => '354',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tarsis oktavianto',
                'username' => 'tarsis',
                'email' => 'tarsishandoko888@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CywRJzpbJ3pgGguQRvCmyuRs9V50Sy79AhdjDN20BksSLZdH//tYy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-04 00:34:19',
                'updated_at' => '2021-07-04 00:34:19'
            ),

            array(
                'id' => '355',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'farich',
                'username' => 'bukanwartawan',
                'email' => 'richyfrz@gmai.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ABYvVkIg5jBGtm0IFWhxIuqyEmsjv.DLZpYa62goV.3I/1IRO0.yW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-06 11:56:30',
                'updated_at' => '2021-07-06 11:56:30'
            ),

            array(
                'id' => '356',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Monica Risya Alfirda',
                'username' => 'mrisyaa',
                'email' => 'monicalfirda5@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NRBDgUsCtcw7sbC2fi/Qo.MiQTnbWLwwIDkhzsHHIyqFd8k/HluLS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-06 11:56:47',
                'updated_at' => '2021-07-06 11:57:54'
            ),

            array(
                'id' => '357',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'farich',
                'username' => 'bukanwartawan',
                'email' => 'richyfrz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fwaZL/RZKtyWcF3VECLxm.NUvoTb1QxyFLsg4FsP9u1IYko/Bj1EO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-06 11:57:57',
                'updated_at' => '2021-07-06 11:57:57'
            ),

            array(
                'id' => '358',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Mega Sanjaya',
                'username' => 'Mega33',
                'email' => 'Mega.1sanjaya@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YdklP3tm.SdMxV9CGuCsme0nPLbm7zBWgmcTShKGqxCPP0eFze9VO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-10 11:51:30',
                'updated_at' => '2021-07-10 11:53:15'
            ),

            array(
                'id' => '359',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Suwandhi Wijaya',
                'username' => 'swijaya',
                'email' => 'wijayasuwandhi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9SL9pwdia1Sy146iUA7DeOG5I6NwgNCsww3zr2bRznba19ZigSyvW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-13 01:07:44',
                'updated_at' => '2021-07-13 01:07:44'
            ),

            array(
                'id' => '360',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sajidin muttaqin putra',
                'username' => 'jidin',
                'email' => 'sajidin.mput@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$H4rYPyTM47UEHtMgkdZoyecKZ3.agv/Zz4oHKD.P0BPqjy6MRpOXa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-13 20:47:07',
                'updated_at' => '2021-07-13 20:47:07'
            ),

            array(
                'id' => '361',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'abdurrohman',
                'username' => 'rohman',
                'email' => 'rohmanerni22@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HIq7ptIzMD1TSXo4D29Rn.fzk5jeJ/uJ6Er.IErtepGnuYFPQJP/q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-17 02:49:21',
                'updated_at' => '2021-07-17 02:49:21'
            ),

            array(
                'id' => '362',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sari perdani',
                'username' => 'shari',
                'email' => 'wanmaryani44@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3Ia/aGBEK5Tu2pK4P4w0hOa2Tif.N6vuvktuFlXb94v4CUuTv6FEO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-20 16:03:28',
                'updated_at' => '2021-07-29 17:25:43'
            ),

            array(
                'id' => '363',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Egla Chryshantie Donna',
                'username' => 'chryshantie',
                'email' => 'chryshantie@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7dP4YyoAD5cOBSzqBHmAJuyiIkifhbaGi0X/ZSnCXc8YeM21sz9zW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-21 01:17:42',
                'updated_at' => '2021-07-21 01:17:42'
            ),

            array(
                'id' => '364',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'RIADI',
                'username' => 'ady7667',
                'email' => 'ady766775@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jMF0k/hOz3BSJLOXEMoI..gRx2UxUjFf6JuT3estNA0pYvGpbBcmW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-21 03:28:57',
                'updated_at' => '2021-07-21 03:28:57'
            ),

            array(
                'id' => '365',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'surianto',
                'username' => 'surianto88',
                'email' => 'surianto88@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rtpysK28ctEPuHQ843dqxu3zO07fNyVdAyB/8c3.q.kAjVLoyq0xO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-21 09:32:05',
                'updated_at' => '2021-07-21 09:32:05'
            ),

            array(
                'id' => '366',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Desiana',
                'username' => 'Desiana',
                'email' => 'desiana.123mpw@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9yHgbzb6y6iP866d3qRXfOISna0TcUZOHLIxKCzADSJPNGw6zlYBu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-22 22:41:20',
                'updated_at' => '2021-07-22 22:41:20'
            ),

            array(
                'id' => '367',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ehm',
                'username' => 'ehm',
                'email' => 'irwannov75bbm@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t2ORqnB7DBq0EZ0W2lbkquEhmi6myCiMTDKK9B7UyPVs3.QYLFidK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-07-30 00:02:15',
                'updated_at' => '2023-09-19 13:15:27'
            ),

            array(
                'id' => '371',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M. Kamal Yasir',
                'username' => 'kamal',
                'email' => 'rongrong.embul30@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OATozzCaoCqyRO4vhTkaoOywo54iolRWG70NQ1DCNP226uGrkxZ36',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-12 08:59:57',
                'updated_at' => '2021-08-12 08:59:57'
            ),

            array(
                'id' => '372',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yasin',
                'username' => 'Yasin Untan',
                'email' => 'kiosq.usman@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dp3QYjGAZtmf8.s3olR2m.wywjbqT/h3O0Q9EuapPR3ceTNhMOKJ.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-13 14:28:06',
                'updated_at' => '2021-08-13 14:29:54'
            ),

            array(
                'id' => '373',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nicholas Cannavaro',
                'username' => 'nick2000',
                'email' => 'nicholascannavaro1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5Ts0YU.AtNpwJ5SpEeoNBuVDe04s6wfm03X5XHZNTWlMEMKoPVUhK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-15 21:41:06',
                'updated_at' => '2021-08-15 21:41:06'
            ),

            array(
                'id' => '374',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'PANDU RIZKI',
                'username' => 'prwisudawan28',
                'email' => 'prwisudawan28@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Nm7MmTmYFkFAZmHOZVpwvedcY44vJgHxalpfJI3UpzNq8zOXZqreu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-16 03:20:47',
                'updated_at' => '2021-08-16 03:45:03'
            ),

            array(
                'id' => '375',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Natalia Artika',
                'username' => 'nata',
                'email' => 'natadetyca@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3Wnc.CKnYQ7weM15znR90.pAlo5WCD.G6/Z/OC/FW2rorDp2C2mBS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-17 14:31:59',
                'updated_at' => '2021-08-17 14:31:59'
            ),

            array(
                'id' => '376',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Adi pratama',
                'username' => 'Adi',
                'email' => 'adikuburaya.ptk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1m7/KtDZWyrOLN0zh3FnSuKuJw1zZog0g7AV9gOzZPzNTlpQGc.Yu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-24 23:48:10',
                'updated_at' => '2021-08-24 23:48:10'
            ),

            array(
                'id' => '377',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Adi pratama',
                'username' => 'Adi_79',
                'email' => 'adipratama',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qxPTNfeeftAQg17RizIMJOXAjSP49B0RogJr3XKzdaW0LvUiZ8ryK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-24 23:49:26',
                'updated_at' => '2021-08-24 23:49:26'
            ),

            array(
                'id' => '378',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dicky Novirianto',
                'username' => 'Dicky',
                'email' => 'albertusdicky48@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XeKnDTG7jO5YeqMSUYzO1uhSIylV8tWcgBmQP.bP1a558TLzU./Xu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-25 12:18:49',
                'updated_at' => '2021-08-25 12:19:17'
            ),

            array(
                'id' => '379',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Koko Mafaza',
                'username' => 'kokomafaza',
                'email' => 'kokomafaza@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VgBfDda0FpmveNbSfBfkh.dpW.44Js7GrtxfaZemJuCNFW83pqsRK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-25 16:48:18',
                'updated_at' => '2021-08-25 16:48:18'
            ),

            array(
                'id' => '380',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Riki Irmanda',
                'username' => 'riki',
                'email' => 'gundamseedzero@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NClRkEUx56t4m9dX9/kF2uqQMxRu7hTequutqvr1vobz.aMproezm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-27 16:28:11',
                'updated_at' => '2021-08-27 16:28:11'
            ),

            array(
                'id' => '381',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Almizan Putra Hastama',
                'username' => 'almizanph',
                'email' => 'almizanph2020@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$X/DLVLulvBk6Zp25osQ8KuK2dNSPaaH/LMXPwlKPYK/9tJ7COKVk2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-08-31 22:19:09',
                'updated_at' => '2021-08-31 22:19:09'
            ),

            array(
                'id' => '385',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'johan djapri',
                'username' => 'johandjapri',
                'email' => 'johan.tan83@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$E8KP73hc.1QdTe3jiME4iuRSNDE7zGJjRgqa6fubw8GwxOy.ore9i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-04 19:57:02',
                'updated_at' => '2021-09-04 19:57:02'
            ),

            array(
                'id' => '386',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anton Pryadi',
                'username' => 'Anton',
                'email' => 'kreasiadiyatamagemintang@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3iI2eAseNfdbcWJTYzXlv.3ZrxcJQNxjdWZeGR7DEcqUlP0YmQrtu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-07 19:41:29',
                'updated_at' => '2021-09-07 19:41:29'
            ),

            array(
                'id' => '387',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anton Pryadi',
                'username' => 'anton',
                'email' => 'kreasiadiyatamagemintang@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$G.je/DHpmwct9jXqfUKK7e85EHscxzV.qH.K3o0Pz3pp5P2gKMpU.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-07 19:43:29',
                'updated_at' => '2021-09-07 19:43:29'
            ),

            array(
                'id' => '388',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Leonardo',
                'username' => 'leonardoptk',
                'email' => 'leonardoleoz1997@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JCeK0CTUcRCX74HsXwYrFuPq9rySl4IdOoahXm1yJf6ZwD6PXYDBu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-08 01:38:23',
                'updated_at' => '2021-09-08 01:38:23'
            ),

            array(
                'id' => '389',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Kristiawan Balasa',
                'username' => 'Balasa',
                'email' => 'kristiawanbalasa710@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wAg9/Yj13FsS2TakLrKTAOWjH9RAwxRg/CMbz0ogdII/6zbMnMGee',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-08 13:56:09',
                'updated_at' => '2021-09-08 13:56:09'
            ),

            array(
                'id' => '390',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mizwar',
                'username' => 'mizwar',
                'email' => 'shadowp64@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$21tvCiYxRmD5UQZxfvKLbu/ChTAoohW4feC.nYusHVfVe00oG3LmO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-14 11:12:10',
                'updated_at' => '2021-09-14 11:12:10'
            ),

            array(
                'id' => '391',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Herysius Parman',
                'username' => 'herysius96',
                'email' => 'herysiusparman96@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ziB4i60uSuZyBF0hvTkzteeeCImwov/YgAygtu76BHNXeGv88LQwS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-14 16:29:55',
                'updated_at' => '2021-09-14 16:29:55'
            ),

            array(
                'id' => '392',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'omio s',
                'username' => 'romi',
                'email' => 'romiosilitonga@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cmcr5zGI4lg/8tDQlSM7a.Mi/H6mcUdlWuKdEFBf3/vevAyB4L4hu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-16 07:18:05',
                'updated_at' => '2021-09-16 07:18:05'
            ),

            array(
                'id' => '393',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jailani',
                'username' => 'jai',
                'email' => 'gtapontianak@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cer6K10VTqJ1QVLpATCfJ.e/MMeyMLs2EM8UzmJpt8Kp/yiqfZ.VG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-18 00:33:05',
                'updated_at' => '2021-09-18 00:33:05'
            ),

            array(
                'id' => '394',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andi Samidin',
                'username' => 'andis',
                'email' => 'andi.nidimas@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JAgj.1OYpYSgRh/1sFny0epxVbf2IuSq1LDgqi/IP/7mbWlTf5O0i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-25 00:28:22',
                'updated_at' => '2021-09-25 00:33:32'
            ),

            array(
                'id' => '395',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dame Parhimpunan Siregar',
                'username' => 'Dsiregar',
                'email' => 'dame.siregar2670.ds@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hbGZzHo.EqSNcEbWUG6/V./0YNjVHjsBOLRU0Q0fwpbCyybaPSEDu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-26 19:42:07',
                'updated_at' => '2022-06-09 02:22:56'
            ),

            array(
                'id' => '396',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ruba\'i',
                'username' => 'RUBAI',
                'email' => 'powerbai86@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qSqEJ79PzryunFG8kb6HX.Nqn2ijVqPZGgr/bVZNPoT.EXorh8Avq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-09-30 18:50:06',
                'updated_at' => '2021-09-30 18:51:19'
            ),

            array(
                'id' => '399',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'm Kamal yasir',
                'username' => 'kamal29',
                'email' => 'buapakdiee08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QXWbEuVc7T2k7XhTc8gZS.5ZXSfWy8BU3r7Ya/2q20Dq1E36D59X.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-12 01:40:20',
                'updated_at' => '2021-10-12 01:40:20'
            ),

            array(
                'id' => '400',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Riduwansyah',
                'username' => 'mriduwansyah',
                'email' => 'muhammad.riduwansyah@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U/X0VlBvfqWvh5YZDk8HieCp1qD4MtM69HlIRpQCdvyXi85AarETK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-13 04:11:07',
                'updated_at' => '2021-10-13 04:12:18'
            ),

            array(
                'id' => '401',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ICAL',
                'username' => 'ICAL',
                'email' => 'ichalborneo1987halo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4aw5Qc8KqyGI9EIxpRWk2.Ot0gJuDuO/0m2WeRommJM6bW655EOHS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-17 11:17:04',
                'updated_at' => '2021-10-17 11:17:04'
            ),

            array(
                'id' => '402',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ria fransiska',
                'username' => 'riafransiska91',
                'email' => 'riafransiska89@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M8Q.RMk2okrtMHYK1FjycOYrCwsjSMeKSClYEWR7CtosFVdav.Gre',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-18 06:00:05',
                'updated_at' => '2021-10-18 06:01:47'
            ),

            array(
                'id' => '403',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Helmi ajis',
                'username' => 'Jimii',
                'email' => 'jimmyptk8899@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fZOFupqM1EPCkNtOHdZFv.SnYzYoIn.Tjqork9vxoueTsqFid5FqK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 07:46:57',
                'updated_at' => '2021-10-26 07:46:57'
            ),

            array(
                'id' => '404',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'try fitriyadi',
                'username' => 'tryambon',
                'email' => 'tryfitriyadi1994@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lic1GIBbRmRz79dHbhJIqODkcquM9zGT4kEHGIRqfPk16cjDfSQ6C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 08:49:18',
                'updated_at' => '2021-10-26 08:49:18'
            ),

            array(
                'id' => '405',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'feri murrahman',
                'username' => 'viro',
                'email' => 'feri.murrahman18@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mOZydwxSCnygISGPynETUugvBaW0YmQcL/68ELXkVzT42z5X8EKiS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 12:19:31',
                'updated_at' => '2021-10-26 12:19:31'
            ),

            array(
                'id' => '406',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dody gunawan',
                'username' => 'gunawan20',
                'email' => 'dodygunawan89@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$T0craGxSrYZXoR4CazXYEerEC3C5YD1d9oMsgwdR2hN4A2nZMXW2O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 17:53:19',
                'updated_at' => '2021-10-26 17:53:19'
            ),

            array(
                'id' => '407',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dani sury',
                'username' => 'daansyzz',
                'email' => 'adrton@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pzcqgZFR7Pv.e7dnm4m8tex1jMZQvVJ/TSxu4R/g1BMGMCPkVYEHu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 22:56:36',
                'updated_at' => '2021-10-26 22:56:36'
            ),

            array(
                'id' => '408',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Danisurya',
                'username' => 'Daanzzy',
                'email' => 'adrtpn@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uzZYPqTorNXHRalO.SFzYuRzdMW0G/1XcObIGSAmxXh9gxOlytmey',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-26 22:57:20',
                'updated_at' => '2021-10-26 22:57:20'
            ),

            array(
                'id' => '409',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rusdi',
                'username' => 'Rusdi',
                'email' => 'rusdiras@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DdUxK3R3wrO358tZ737be.EjYY/Oi2dCqg37Y0s.gtuQb/F66s1oK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-27 01:01:35',
                'updated_at' => '2021-10-27 01:01:35'
            ),

            array(
                'id' => '411',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'syaparudin',
                'username' => 'udin',
                'email' => 'zidan019@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zv8hY47ADIooa5KruZa8k.t1we7eGwZaTPybn3iwMZeojLxLHdPl2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-27 05:26:59',
                'updated_at' => '2021-10-27 05:26:59'
            ),

            array(
                'id' => '412',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'diana',
                'username' => 'dianaokta',
                'email' => 'diana9c09@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZoXfPgUJnPGCb6hGrA9lmuuk6vvCAW2n4S7xIL8GrzWXR2pKGSGSi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-28 19:41:03',
                'updated_at' => '2021-10-28 19:41:03'
            ),

            array(
                'id' => '413',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'irvan',
                'username' => 'anak',
                'email' => 'irvananakrantau12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lFJ1l9uVjaVBoJMjGpsyf.nRMSLjvSgjPY6GOM2x8Ba95ldWg47V.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-28 19:41:33',
                'updated_at' => '2021-10-28 19:41:33'
            ),

            array(
                'id' => '414',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Candra Pratama Debataraja',
                'username' => 'debatarajaa',
                'email' => 'debatarajapratama@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DnNdoQF0uMER9zh3j.lmsuqtp20jY.DNIrFOqC4zLFoCVAjNHssea',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-10-28 23:03:39',
                'updated_at' => '2021-10-28 23:05:23'
            ),

            array(
                'id' => '415',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nicolas',
                'username' => 'valery',
                'email' => 'nvalery87@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QiPOq.70GgKf84elozOOUO9wFoejI1.8gJ9CK3Q8jUISbNXUUiyS.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-11-02 01:26:35',
                'updated_at' => '2021-11-02 01:26:35'
            ),

            array(
                'id' => '416',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nur Yahya',
                'username' => 'Yahya',
                'email' => 'beatboxyahya@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xZIi3XWUzokLbDhXOk5en.f8pqvJH73w9eBtlZIYFl8XOQKttYOvi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-11-02 05:39:56',
                'updated_at' => '2021-11-02 05:39:56'
            ),

            array(
                'id' => '417',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rawira',
                'username' => 'CanRawr',
                'email' => 'siera_86@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ygB4FyafyaYJl.36kDgCsOENzyLKAn9D.2pFZVdMeLWVo0ezYxP7q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2021-11-04 02:38:58',
                'updated_at' => '2021-11-04 02:38:58'
            ),

            array(
                'id' => '418',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yudha',
                'username' => 'ini_yudha',
                'email' => 'yudhaa@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$J2WFr7J05Q6/vw4p0EgIfOa8TTRWiC.pmGDFOI1pdiqwXOoJXbn/m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-13 20:53:57',
                'updated_at' => '2022-03-13 20:53:57'
            ),

            array(
                'id' => '419',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arul',
                'username' => 'arulss',
                'email' => 'arulss@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8OMEd0ppwJF2XA0r4K1zT.FybrGRbHXjC9N0sfJB8LgqdFfA0Y/.q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-14 00:00:11',
                'updated_at' => '2022-03-14 00:17:32'
            ),

            array(
                'id' => '420',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'HELMI KURNIAWAN',
                'username' => 'helmi7kurniawan',
                'email' => 'helmi7kurniawan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$v9aakNqAszWOFvLSEc1w3eIwxk2oXGq3qzCES/XXinvqZY2t9G0kS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-16 00:51:56',
                'updated_at' => '2022-04-11 23:46:02'
            ),

            array(
                'id' => '430',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'bung sahril',
                'username' => 'bungsahril',
                'email' => 'bungsahril98@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Qe4oRyWHRPPE0PYjePXp5OF7PXFvRrgcMfitN30QSAW7w.iJ77T3i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-16 03:07:42',
                'updated_at' => '2022-03-16 03:07:42'
            ),

            array(
                'id' => '431',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alisya syifa salsabila',
                'username' => 'abilsyfa',
                'email' => 'alisyfaa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$meFzRf4jy06i22bsmZ86j.r3o7yzDPGzviGC5NuRCDmfjRx/Woxii',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-17 00:00:50',
                'updated_at' => '2022-03-17 00:05:28'
            ),

            array(
                'id' => '434',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'asfarul haq',
                'username' => 'aruls',
                'email' => 'asfarulhaq@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0FrtYIYHpX2uKB459KiSputgwT.ObIJwTFwTCeqFpb1c.fIexc/k6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-17 07:18:27',
                'updated_at' => '2022-03-17 07:18:27'
            ),

            array(
                'id' => '435',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hendra agus kurniawansyah',
                'username' => 'hendra',
                'email' => 'hendraaquilla@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e8kpnSxWAHfejfZVpwcncOj.gkHwKGvB1PCe/Y.PaxitYco3uHii6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-19 08:09:54',
                'updated_at' => '2022-03-19 08:09:54'
            ),

            array(
                'id' => '436',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Galang',
                'username' => 'Galang123',
                'email' => 'galangp816@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yBkHRy8L22i0DAyStMXYT.VCslCCTNG9NGJDlTdYAJCPy3L9Wye.a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-20 19:53:38',
                'updated_at' => '2022-03-20 19:53:38'
            ),

            array(
                'id' => '437',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hansen',
                'username' => 'hans',
                'email' => 'hansen230893@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tQHuReqz6F7kz2LjjnCcUegvNN/pv/h8SI5kKEPTN2s1kzSmzxMLu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-21 06:05:15',
                'updated_at' => '2022-03-21 06:05:15'
            ),

            array(
                'id' => '438',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Shakira Alfisyahri',
                'username' => 'justwinter',
                'email' => 'shakiraalfisyahri88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0aw6qZVUk3fI79vv7me93eSEucYKwqEgbzMqctoHHZpN7A5/6v82y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-22 01:50:02',
                'updated_at' => '2022-03-22 01:50:02'
            ),

            array(
                'id' => '439',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Triraharjo',
                'username' => 'triraharjo',
                'email' => 'tripleajo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l7lyFIs6SqDuQl5nkLBECONVVGcvV5Pg/S7VndO4zqdBcusI9Moba',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-22 20:28:06',
                'updated_at' => '2022-03-22 20:28:06'
            ),

            array(
                'id' => '440',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Iqbal',
                'username' => 'ox',
                'email' => 'milvw97@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TDGeASUnH3IXTY/7k0Y9/uUiY7Gl0zSzGlGiBXapoFILlbI6wQCWi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-23 01:41:16',
                'updated_at' => '2022-03-23 01:41:16'
            ),

            array(
                'id' => '441',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'imamuddin',
                'username' => 'imam12',
                'email' => 'imamuddingrab@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AUGxH//CwcpOAwEC9rvu.uOSHLwtpV7zaCWXafH4tdM6tziAdky4.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-25 05:53:43',
                'updated_at' => '2022-03-25 05:53:43'
            ),

            array(
                'id' => '443',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sabarudin',
                'username' => 'sabat',
                'email' => 'saebhar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DM259mtjabwFTFhpZZ9L/uzpUZu4ps/h2SNTO.ciQuP8fRevTINse',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-25 23:17:16',
                'updated_at' => '2022-03-25 23:17:16'
            ),

            array(
                'id' => '444',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ya Muhammad ikhsandi',
                'username' => 'neinzero',
                'email' => 'neinzero.nz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JRo5/S7OUIPiqZJFDwEqz.0AsLUtibTlYaH69eFpNhNp4k7e7tfB2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-25 23:21:17',
                'updated_at' => '2022-03-25 23:21:17'
            ),

            array(
                'id' => '445',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rizky',
                'username' => 'RIKYY',
                'email' => 'rizkyajiejulianto@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hh.Iol0RQhE1FY4qQyBIkOnVhDUSu/UlHuTisCwbFgDivubgLDUvK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-25 23:28:56',
                'updated_at' => '2022-03-25 23:28:56'
            ),

            array(
                'id' => '446',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Fikri',
                'username' => 'VLadimir PutiN',
                'email' => 'mff230023@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oGVzUP6kxLKop1fLNS5nSOrojgJlUPs4phVzR3IuWQ7C4tDuw2pxm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-26 04:45:36',
                'updated_at' => '2022-03-26 04:45:36'
            ),

            array(
                'id' => '447',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'isa',
                'username' => 'isasa',
                'email' => 'marisaskw51@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M.IWyP/u7eALEAs5jAFya.x6KBNuXXDSL0c1Crfk0rRF8WF8DRkdW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-27 11:52:00',
                'updated_at' => '2022-03-27 11:52:00'
            ),

            array(
                'id' => '448',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Rabuan',
                'username' => 'Bubu',
                'email' => 'rabuone09@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K1VgA2ZCa4RzWy/zvcuRru9aoVKU27fobb.bXB5krDIZoYyUW9nTm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-27 22:38:08',
                'updated_at' => '2022-03-27 22:38:08'
            ),

            array(
                'id' => '449',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mulyadi',
                'username' => 'yadipontianak11',
                'email' => 'yadimulyadi873@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0ld4/bZZXz1KgbnaH0K8uuyolzbVyFMBlNReYM2.fwtFEh/PkwnPi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-27 23:42:56',
                'updated_at' => '2022-03-27 23:42:56'
            ),

            array(
                'id' => '456',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mulyadi',
                'username' => 'mulyadi1122334455',
                'email' => 'yadi4729511@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ap3OCaxrHRVYEonakm84RunGvSikVhw1Jcs1rtfcsFqG9Opf3dKkS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-28 09:46:23',
                'updated_at' => '2022-03-28 09:46:23'
            ),

            array(
                'id' => '457',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'erdian ramadhan',
                'username' => 'ramadhan',
                'email' => 'erdian8848@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PUfgiEgUqFqBXVGoFLAsYOKmASiAYEoaBIWPNI5aQNeoif38LDGte',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-28 10:43:12',
                'updated_at' => '2022-03-28 10:43:12'
            ),

            array(
                'id' => '458',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rudi',
                'username' => 'rudi',
                'email' => 'pdduniajasa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EVbRjCax.OHCUbjXWC1o9Og8ccr2OdsPtFFfsU/3F6WRNDAwrErqa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-28 20:55:25',
                'updated_at' => '2022-03-28 22:04:29'
            ),

            array(
                'id' => '459',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Delfi Maria Betti',
                'username' => 'delfi',
                'email' => 'Delfi betti@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$T1EtewKAMVcqM7TppeI3iuoryuzPCQKxgHtolIOgplKROk0EoNOwW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-30 04:30:08',
                'updated_at' => '2022-03-30 04:30:08'
            ),

            array(
                'id' => '460',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'junz',
                'username' => 'junzliu',
                'email' => 'junzliu85 gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rCy5PR6K.W.RCwCvOUCqHufZm/tAJIS8a/8wsmieMcMZ.ld6.GsSe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-30 06:21:08',
                'updated_at' => '2022-03-30 06:21:08'
            ),

            array(
                'id' => '461',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M.Nawir',
                'username' => 'Awik Hunter',
                'email' => 'Petualang972@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.GHJ.0fDu2uY.jUdC.qiM.7Dgvosb/m2Jo0rJosSudrgwx4Sutn6S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-30 07:37:07',
                'updated_at' => '2022-03-30 07:37:07'
            ),

            array(
                'id' => '462',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M.Nawir',
                'username' => 'Awik',
                'email' => 'Huntersalamsatuaspal72@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4k9dF4O2PyXNJKI.mWXZoeHluAR0VQfe/ymZGeZ5ltz6jkEFC33Ce',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-30 07:38:43',
                'updated_at' => '2022-03-30 07:41:09'
            ),

            array(
                'id' => '463',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'norhasan',
                'username' => 'nali1',
                'email' => 'hnor25042@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$n7Vl33Qa0JlSJUr7bceuFuApB8SQHgrPGPeNFDW6sXKB2ieSP27ri',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-30 13:26:05',
                'updated_at' => '2022-03-30 13:26:05'
            ),

            array(
                'id' => '464',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muchlas',
                'username' => 'MMST90',
                'email' => 'mmuchlasidm@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qaz/H7GJreeYXAQGG2dif.2pM4K1SYDuo8ufqwdn1laAk/Ngfr/QC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-31 03:18:07',
                'updated_at' => '2022-03-31 03:18:07'
            ),

            array(
                'id' => '465',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'andri setiawan',
                'username' => 'andri',
                'email' => 'as4310632@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qFmlfjx94OpTBtW7dS/Yi.yz0tSAxPsthKvYjcqZthIHYDC093H2O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-31 04:24:55',
                'updated_at' => '2022-03-31 04:24:55'
            ),

            array(
                'id' => '466',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'indra syachlevi',
                'username' => 'indra',
                'email' => 'indrasyachlevi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KzEiXprAio5TkP9U1Zlke.cUTPiAFQKxEeO9HZ1lO/CjVgb3gTMji',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-31 06:23:55',
                'updated_at' => '2022-03-31 06:23:55'
            ),

            array(
                'id' => '467',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hojin ashari',
                'username' => 'hojin',
                'email' => 'salsabilan782@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s0J8yWuXjPZRAtNKtAIRq.PkCEiPhYP8kTSFs4I756H2rxnd.zi86',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-03-31 10:48:39',
                'updated_at' => '2022-03-31 22:18:53'
            ),

            array(
                'id' => '468',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Edy Marbun',
                'username' => 'edymarbun94',
                'email' => 'edytigerptk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$O1e2espOGCbcibqv9tBtguNI79PJsUUsT0d5zQSPlSrDQux6AWiza',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-01 00:49:09',
                'updated_at' => '2022-04-01 00:49:09'
            ),

            array(
                'id' => '469',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alfian',
                'username' => 'syah',
                'email' => 'alfian.ptk93@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7DFE8AcPl8TLhESyPFlg9eHebLj1.SLq0Z0/Zwib/lidS035e1pPe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-01 03:57:57',
                'updated_at' => '2022-04-01 03:57:57'
            ),

            array(
                'id' => '470',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammad arifin',
                'username' => 'arifin',
                'email' => 'izzatulmazaya10@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$I5VUKdfi7CqEqRUsfx2JDeqpxdqbKIYSX5jP3P4PyKQ7w1VfzncdS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-01 05:02:16',
                'updated_at' => '2022-04-01 05:02:16'
            ),

            array(
                'id' => '471',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'idzal irdiantara',
                'username' => 'idzal',
                'email' => 'idzalirdiantara@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BeJw.Nv.uWki0x.LZ/1R3ep.7j.SsJN7D4B4W.uENoJd98cMo0mFe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-01 05:06:16',
                'updated_at' => '2022-04-01 05:20:38'
            ),

            array(
                'id' => '472',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Agus Susanto',
                'username' => 'agus',
                'email' => 'aphenaphen6@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tFlTWzBtIM9WKnoGAJGRU.ivzqzdNN8xOHN0yR1pMT4HsXYnAAnL6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-01 05:08:09',
                'updated_at' => '2022-04-01 05:08:09'
            ),

            array(
                'id' => '473',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'masod abdul azis',
                'username' => 'masod1',
                'email' => 'orengpeniraman050@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0p3aupM2AF0iOwGUewnztO53coW38d6o00LSPIm03qTy6OSZb6AGu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-02 04:47:15',
                'updated_at' => '2022-04-02 04:48:28'
            ),

            array(
                'id' => '474',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fadillah',
                'username' => 'fadilay',
                'email' => 'fadilsy3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M8ekXp/Yz2gsPQaZlB/o3u7lA4RCDmRWGSdMelB75y9lpdQLy19qO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-04 10:15:06',
                'updated_at' => '2022-04-04 10:15:06'
            ),

            array(
                'id' => '475',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nanda Murianto',
                'username' => 'Nanda',
                'email' => 'nandamurianto19@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HxyHU5K6GkLRAX/bOaLU9ej3dd1arQyWZ8mieNbq6rLvsuI4qry0.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-04 23:01:11',
                'updated_at' => '2022-04-04 23:01:11'
            ),

            array(
                'id' => '476',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muzaimah',
                'username' => 'muzaimah',
                'email' => 'muzaimah92@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cdZ7KLjnHnKygX40VWU1Ne18MVPG6s4uih1BWkc4muK9XbG08DXVu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-05 03:42:43',
                'updated_at' => '2022-04-05 03:44:00'
            ),

            array(
                'id' => '477',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sepri',
                'username' => 'sepri',
                'email' => 'Sepriprisepri3749@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jFv/B1l/7e1jMZwKHwn9S.O1aS8DjAM5Qb1mcktqfBjq7cS/Eul.W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-05 04:39:17',
                'updated_at' => '2022-04-05 04:39:17'
            ),

            array(
                'id' => '480',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ucop azhura',
                'username' => 'ucop',
                'email' => 'ucopazhura909@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KDSpe7pod0xEYzFN7hywpuuiqdP5OkmjSiyfwG6LXnuKyIjnkWzY.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-05 05:56:30',
                'updated_at' => '2022-04-05 05:56:30'
            ),

            array(
                'id' => '481',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dedi sutomo',
                'username' => 'dedi84',
                'email' => 'bospangkas84@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rIxO/gDAvb59.woK4C4FDuDKul8h7/8WnE4HJH/IX2htcVI/VTxiC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-05 21:21:55',
                'updated_at' => '2022-04-05 21:21:55'
            ),

            array(
                'id' => '482',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'computer',
                'username' => 'com',
                'email' => 'computer190771@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qn1LhZp68NeLJ4uPo7SH1e.c2iGaQYbSrsor57YbF44tDLBIT3AsK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 00:49:17',
                'updated_at' => '2022-04-06 00:49:17'
            ),

            array(
                'id' => '483',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'berry feriandi',
                'username' => 'berry',
                'email' => 'berryjr117@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/R71F4Qrt5wqvDQreMEnS.y/12daQIFnRjiFQ3IvMi8nx41S46wzy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 00:56:26',
                'updated_at' => '2022-04-06 00:56:26'
            ),

            array(
                'id' => '484',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Wendy tandra',
                'username' => 'wendyheni01092021',
                'email' => 'wendytandra311297@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ICA472tO3csX4abYECxzBOI/OK2eLmpogIsYdyj/MH6cs4UE2Vvba',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 03:37:37',
                'updated_at' => '2022-04-06 03:37:37'
            ),

            array(
                'id' => '485',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Asfarul Haq',
                'username' => 'asfarul',
                'email' => 'asfarul@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FXs3lD1he1iExsmWe5NWge92BYyortNMbuTXfttoJ8AIn2jpVm.rO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 21:22:15',
                'updated_at' => '2022-04-06 21:22:15'
            ),

            array(
                'id' => '486',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Aroel',
                'username' => 'aroel',
                'email' => 'aroel@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4DAWyD.Xks3A4T7QF4HapOMFPzyfLS.SbaiqLrf2gajnxgycWjQ7y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 21:22:48',
                'updated_at' => '2022-04-06 21:22:48'
            ),

            array(
                'id' => '487',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Bruakakak',
                'username' => 'bruakak',
                'email' => 'bruakak@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KZif46Zy8Q2PwMJ7B3kQ2eQrjvgO3a/SnlvcMs..xh1W50oWyn0cu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 21:23:47',
                'updated_at' => '2022-04-06 21:23:47'
            ),

            array(
                'id' => '488',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'TOPIK BINTANG CERIA',
                'username' => 'TOPIK',
                'email' => 'bintangceriatopik@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wIAHX1N19IGNv8We2L7mxOV6/vSu94ut3yiEzCWEURnZcTaZ7WHJG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 21:41:25',
                'updated_at' => '2022-04-08 05:02:01'
            ),

            array(
                'id' => '489',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dwahyudi',
                'username' => 'Dwahyudi',
                'email' => 'kanamuthaqi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$STq5cKTtguEBKb4qPXITtONZt3NbD6Cf8D3aBJIo7P/TDYNj6Djr.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-06 23:56:57',
                'updated_at' => '2022-04-06 23:56:57'
            ),

            array(
                'id' => '490',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'annisa resdeva',
                'username' => 'annisarsdva',
                'email' => 'annisaresdeva167@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FltOZKQdFfwWJdiGLO6zieF/rHuKKHZumRXWbZwpxjCeK7/ggkrUy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-07 01:32:31',
                'updated_at' => '2022-04-07 01:32:31'
            ),

            array(
                'id' => '491',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dendent',
                'username' => 'Dendent',
                'email' => 'dendentraibintang66@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.AA5reyVZF9IZmneR6yY.OohCLbUYfbvzXBpapZSZm2yzA1vtIa6u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-07 06:56:57',
                'updated_at' => '2022-04-07 06:56:57'
            ),

            array(
                'id' => '493',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'maskur',
                'username' => 'maskur',
                'email' => '085828167561',
                'email_verified_at' => NULL,
                'password' => '$2y$10$j5mBk15qDh0125PLCiha2en74aCbzBC7NbpejLjgm54XFKsSmezTe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-08 20:08:31',
                'updated_at' => '2022-04-08 20:08:31'
            ),

            array(
                'id' => '494',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'maskur',
                'username' => 'maskur',
                'email' => 'jayumar44@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RaAxTYNwnHHRBJJg.qx7NuzQuro/PxlNmyg5/piDg0SVLJb5/ilha',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-08 20:10:17',
                'updated_at' => '2022-04-08 20:10:17'
            ),

            array(
                'id' => '499',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deny Hermawan',
                'username' => 'Deny_80',
                'email' => 'hdeny851@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$W2sK6fedcuhMKiYFE2sH9ORxEvOQsRugO1RoMeO7tu2u7CDyoFUMy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-09 00:56:47',
                'updated_at' => '2022-04-09 00:56:47'
            ),

            array(
                'id' => '502',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Bernadeta Nopriyanti',
                'username' => 'Bernadeta.N',
                'email' => 'bernadetanopriyantii@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IT17TBFEpWRJL6x6wYXrFOY1n7RJzcXhOLMuILifOpYvNX99U72me',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-09 06:03:58',
                'updated_at' => '2022-04-09 06:04:15'
            ),

            array(
                'id' => '503',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yoga dharmawan',
                'username' => 'yoga',
                'email' => 'yogadharmawan77@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OQoydhrEZYU.U7y/7n9.z.bDxKMM3kKIJMaVtLHCfQdrl9diPL5nW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-09 16:33:47',
                'updated_at' => '2022-04-09 16:33:47'
            ),

            array(
                'id' => '504',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'asep maulindra',
                'username' => 'asep',
                'email' => 'asepmaulindra@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OdXM4YFJFmAHm/u5iAKbq.c9ckyIwPItirbgvj5/pnAhyDCdWM01C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-09 17:11:26',
                'updated_at' => '2022-04-09 17:11:26'
            ),

            array(
                'id' => '505',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Suryadi',
                'username' => 'Sahabat1771',
                'email' => 'sahabatonline269@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$B6MYAdXHsskVDwuCWysU2up8UuLdVHA4l3pdS/PiVeEdTxWj3lORu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-09 21:52:06',
                'updated_at' => '2022-05-11 08:27:24'
            ),

            array(
                'id' => '506',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad',
                'username' => 'Ridho',
                'email' => 'Redomarquez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ALdRvFoEP9rjutY2C57eS.kHfPYwxHfYg3/ch9EiVzrrXqyUycZLi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-10 06:33:29',
                'updated_at' => '2022-04-10 06:33:29'
            ),

            array(
                'id' => '507',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rudy',
                'username' => 'rudy.ponti',
                'email' => 'rudy.whitebear88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UkfGW4bbRQj9gpPlWEhSjuFecHwNz7C5g35S4KGcwWsbLM4StYOx6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-10 16:15:55',
                'updated_at' => '2022-04-10 16:15:55'
            ),

            array(
                'id' => '508',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yudhi pratama',
                'username' => 'tama.1908',
                'email' => 'tama.nerazzurri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ot9H/y83FXVR81kzy.dwWOi2Rp2g5VDSXdEuJM8BxLNpmOMe7SIFq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-10 19:19:17',
                'updated_at' => '2022-04-10 19:19:17'
            ),

            array(
                'id' => '509',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'min.on',
                'username' => 'alexander bernard',
                'email' => 'christianwendy12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HZmpp24l01HayTUonR.yKuuybZiM6CTeY4rZjoIUh9qdTczfARiOC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-10 21:31:50',
                'updated_at' => '2022-04-10 21:31:50'
            ),

            array(
                'id' => '514',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'syafiuddin',
                'username' => 'Dhient Aj',
                'email' => 'aldody250919@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9iwdKMMRYYwSbH.ICoXfTOrk8s3UnEZ5w2VhHPGdK4TVenP0/VuVW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-11 01:35:18',
                'updated_at' => '2022-04-11 01:35:18'
            ),

            array(
                'id' => '515',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rendy',
                'username' => 'rendy',
                'email' => 'rendy.andrian8152@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R2H/C1bqvsZmXcNUo/yXNejvknG.T3wE/YVeQrbgextH0/mMFslTu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-11 09:40:23',
                'updated_at' => '2022-04-11 09:40:23'
            ),

            array(
                'id' => '520',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'DANDI',
                'username' => 'DN',
                'email' => 'dandi.arjuna99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qhGbS1z6rSGk0UTuXgSQQuHgUtJNWO217dv3gunjCbTIpQkerCjFq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-12 08:45:15',
                'updated_at' => '2022-09-17 17:02:52'
            ),

            array(
                'id' => '521',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'samuel',
                'username' => 'sam',
                'email' => 'ptksepuluh10@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fn2zusHnsFyP9Z.TdSl/mu9VepWnIOv7FxnUy9O9hy4duA3XKzFKK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-12 09:28:03',
                'updated_at' => '2022-04-12 09:28:03'
            ),

            array(
                'id' => '522',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad farid',
                'username' => 'farid',
                'email' => 'm.farid2610@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ijVqZIitQVSdzIUkwHuIUuNSgtdRJlAYh3SVELvF4p7Lqx.BzCDEW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-13 04:27:52',
                'updated_at' => '2022-04-13 04:27:52'
            ),

            array(
                'id' => '523',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'aminuddin',
                'username' => 'amin',
                'email' => 'aminmala31@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CdKgPAs/oBNWk2lAOjO8SeXqMmyEg4OJONFju7pIWgTfBKAbtbPiO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-13 12:01:07',
                'updated_at' => '2022-04-13 12:01:07'
            ),

            array(
                'id' => '524',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Medibta Yardha',
                'username' => 'dibta_vk',
                'email' => 'yardha.1988@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TFsHxuIqhfgMClh48j2NRuBZRUtDdfJ/.aVtugAxWBjDzgJGSvEU.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-13 20:53:43',
                'updated_at' => '2022-04-13 20:53:43'
            ),

            array(
                'id' => '525',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'deden',
                'username' => 'abahdeden',
                'email' => 'dedengunawan1102@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SLLR3pQgUZN1OoFC/BpAh.9rY8Li81Chhq3yFzwWLnvk0vD7feSvS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-13 21:22:30',
                'updated_at' => '2022-04-13 21:23:24'
            ),

            array(
                'id' => '526',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'adrianus ange',
                'username' => 'ange',
                'email' => 'angelagimikir@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CcOTBliN1fUPjgyAP.OLpe3HeMWTFXQkj5kgKJdB7c9xJkMLstIT6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-15 01:27:49',
                'updated_at' => '2022-04-15 01:27:49'
            ),

            array(
                'id' => '527',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wahyu pratama',
                'username' => 'wahyu',
                'email' => 'emailwahyupratama@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NvtQpmlxOQDhlUn4hSE5t.Et5ERQzU1bcndgDmtzKL1cSu65y4bza',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-16 23:04:34',
                'updated_at' => '2022-04-16 23:04:34'
            ),

            array(
                'id' => '528',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wahyu pratama',
                'username' => 'wahyu',
                'email' => 'wahyuprtma99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.NUga8n5SVhyEIlUl0L8qeOiYcUaWbGoPucoLzsOCMoKNt/Wgu.Mu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-16 23:05:27',
                'updated_at' => '2022-04-16 23:05:27'
            ),

            array(
                'id' => '529',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Angga prayoga',
                'username' => 'vipyoga',
                'email' => 'anggayoga471@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$y/0GeHL6dGEk8x2aAzBkxe6H3TvFhvLML1bG1EvBJ9ox7TLDqP3BS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-17 20:36:06',
                'updated_at' => '2022-04-17 20:36:06'
            ),

            array(
                'id' => '530',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'patricia windya sari',
                'username' => 'patriciaws',
                'email' => 'patriciawindyasari224@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6SpvLxrK94gao4mdZp/Z3.HePzkk5UbZ636YYLn275HmD/.S4R/bK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-17 21:07:13',
                'updated_at' => '2022-04-17 21:07:13'
            ),

            array(
                'id' => '531',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'aswin kurniawan',
                'username' => 'aswan87',
                'email' => 'aswankur87@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ag/ZbSpmde7vrq4tv.VcYePLXqNrQKD1eqmcyE7SypJGF9DjyD/d6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-18 19:33:00',
                'updated_at' => '2022-04-18 19:33:00'
            ),

            array(
                'id' => '532',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ardi desvian',
                'username' => 'ardi99',
                'email' => 'ardidesvian99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0CgwfHQJwrruuoPVnArWG.iy2vRLTh.EHnNrrhX1h4o.X/pljLBGe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-20 01:03:57',
                'updated_at' => '2022-04-20 01:03:57'
            ),

            array(
                'id' => '534',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deni Priyatna',
                'username' => 'Deni07',
                'email' => 'denipriyatna07@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p3SzjzoCj9YRh9AEslhy9O2HSevZsYww0z29pXZ.Gztp4NkzxGXvK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-21 19:16:58',
                'updated_at' => '2022-04-21 19:16:58'
            ),

            array(
                'id' => '535',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'juanda',
                'username' => 'juanda randa',
                'email' => 'juandaranda7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zvz2xZIIDw24La4u.jfeKurBHMAwUOLZAfHB3iGKpNzhppiUoOMR6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-22 07:19:38',
                'updated_at' => '2022-04-22 07:19:38'
            ),

            array(
                'id' => '536',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sy junaidi',
                'username' => 'junaidi',
                'email' => 'alaydrus7859@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XGbOx0YVqfYY6w7NNkgkKOvUSka/IIihH0fTqpQJZwIkdy4IJHJSi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-23 06:20:36',
                'updated_at' => '2022-04-23 06:20:36'
            ),

            array(
                'id' => '537',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yanti',
                'username' => 'Yanti',
                'email' => 'yantiirawati1997@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eo6ekDINK2s462TUvaUq2.aRJOoUQhYfgmSGqUQ38tO13sXG6FLFa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-24 23:41:43',
                'updated_at' => '2022-04-24 23:41:43'
            ),

            array(
                'id' => '538',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'm.sarmin',
                'username' => 'joni7447',
                'email' => 'jonirentalmobil@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sBAfzA.Y2ShdX2fccZBjve/pRdpkwt4IGkLfdUUhOqyFTdT.dal2S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-25 06:25:13',
                'updated_at' => '2022-04-25 06:25:13'
            ),

            array(
                'id' => '539',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nikola Yogha',
                'username' => 'Yogha',
                'email' => 'nikolayogha06@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$diTOLU7bIe7A.Ha515nj.ObBwgjdkwdSNf6IiqRTFC4Ousfph/4Bq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-25 08:55:19',
                'updated_at' => '2022-04-25 08:55:19'
            ),

            array(
                'id' => '540',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hengky exduard',
                'username' => 'edward hoky',
                'email' => 'edward.ptk88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Nf3H32GR7dKnoa2b/bWTKea6wXRBqlKeito/fGbb5b5kGvQ2q9cY2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-25 09:07:03',
                'updated_at' => '2022-04-25 09:07:03'
            ),

            array(
                'id' => '541',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'FAHRI GUSTI NOVIYAN',
                'username' => 'FAHRI',
                'email' => 'novianfahri2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xbyu76Vaq2YqErhDYD3/k.Ang55Kav/so.OB9tzfatJzCrnAM8qRO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-25 10:19:03',
                'updated_at' => '2022-04-25 10:19:03'
            ),

            array(
                'id' => '542',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rahmat',
                'username' => 'hidayat',
                'email' => 'hidayatrahmat256@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hR7iahJABN.i2QF2Xk7p3e50UDN5COhaUpwKyuRFa9q5mKGgKkxQK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-25 17:53:25',
                'updated_at' => '2022-04-25 17:53:25'
            ),

            array(
                'id' => '543',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Khairil aksa',
                'username' => 'khairilaksa',
                'email' => 'khairilaksa6@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6p.MssokruDb0980.RD3MeuJfG9BtUOLXIl5KaIs2c0iVfU7js8tq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-26 08:46:21',
                'updated_at' => '2022-04-26 08:46:21'
            ),

            array(
                'id' => '544',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'krisda',
                'username' => 'krisdacu',
                'email' => 'krisdacu2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$u80Fa2OeeQWVvigMmkVWTOkCzWMbjDp/3UaUoaQyoOtfaX5laOfE6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-26 21:33:48',
                'updated_at' => '2022-04-26 21:33:48'
            ),

            array(
                'id' => '547',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Eldwin',
                'username' => 'Eldwin kendareal',
                'email' => 'eldwinkendareal406@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$68VVIkkwegwqx.xpJkfHWeyvIY.LY1oLpxE5qB6//ZLiO7Td89tGi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-26 23:28:07',
                'updated_at' => '2022-04-26 23:28:07'
            ),

            array(
                'id' => '556',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'widi',
                'username' => 'widi',
                'email' => 'widikresna24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$njnzEViyRmIp.lrXdjUBL.6r9bzGPO7bi4z2C9lsCuGCbJ0CI0BMm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-26 23:51:44',
                'updated_at' => '2022-04-26 23:51:44'
            ),

            array(
                'id' => '557',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Robby Mardian Asmara',
                'username' => 'Robby8781',
                'email' => 'robby.asmara@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UGT1RRR21Y6zwgiQhh4w5OGVh56bFbSvd68r94yBx423BPVAaLpEe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-27 02:07:26',
                'updated_at' => '2022-04-27 02:07:26'
            ),

            array(
                'id' => '558',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'lukman',
                'username' => 'fatwa',
                'email' => 'dhifaaurel42@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$N92Qgqn74QJ1nNs9hUjoRuNDpc4tcOio3hxscvF3sGJe4crx2ZwVG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-27 03:21:03',
                'updated_at' => '2022-04-27 03:21:03'
            ),

            array(
                'id' => '559',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'putra amril',
                'username' => 'pmahaldie',
                'email' => 'pmarniati@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$siYI3p1eWbe32/1bbuPrwe8vMzC7VfTPsNtnIME1w0GlbY4UWRZpO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-28 01:00:04',
                'updated_at' => '2022-04-28 01:00:04'
            ),

            array(
                'id' => '560',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hendra',
                'username' => 'hendra',
                'email' => 'hendragunawan6969@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LA11YwW9e5qFO/NvG0veQejkxQwVqqR/4QzrrPI8ZbD3r8MfzoiUK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-28 07:47:48',
                'updated_at' => '2022-04-28 07:47:48'
            ),

            array(
                'id' => '561',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Riki',
                'username' => 'riki',
                'email' => 'rikyasring999@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dEk62w67SHZyz9yi9URGTuc14jjaqkw68r/SGax.tDxzJnkQpOYTS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-28 19:48:03',
                'updated_at' => '2022-04-28 19:48:03'
            ),

            array(
                'id' => '562',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'vivi',
                'username' => 'vilest4ri',
                'email' => 'vilest4ri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pcvv0C2LkADIn.b.p1XBD.ws/.bZ9tHzduHLcQFioshRi7SSLzbme',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-29 07:48:55',
                'updated_at' => '2022-04-29 07:48:55'
            ),

            array(
                'id' => '563',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'riski',
                'username' => 'yak',
                'email' => 'riskiyak463@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7hUb0KicQjYdBEm2y0bknefxtGpFLSfz7gltNhflft9BXtmRvVJte',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-29 09:35:49',
                'updated_at' => '2022-04-29 09:35:49'
            ),

            array(
                'id' => '566',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Julamus Panco',
                'username' => 'cho',
                'email' => 'julamuspanco@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$r1Hxm8OyVRAMqKDuz3yDLOXN7ZhSxoquxT9wKdtulAaZrQ7th.D6C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-04-30 08:42:39',
                'updated_at' => '2022-04-30 08:42:39'
            ),

            array(
                'id' => '567',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'WENDY',
                'username' => 'WENDY88',
                'email' => 'kelvinredmi2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d2TPYtEtQa8XAt2eK0CGUea3IUveb73CFv3bw8DD9CFEeHUqA/GR.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-02 16:40:00',
                'updated_at' => '2022-05-02 16:40:00'
            ),

            array(
                'id' => '568',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Jemi Ibrahim',
                'username' => 'gibrhaimov',
                'email' => 'gibrahimov@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/KlNIjbg0XbInfq.PaE5Ju5vlMMBxxsbslAjA2.8MxqcqMzOyKEje',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-03 05:09:41',
                'updated_at' => '2022-05-03 05:09:41'
            ),

            array(
                'id' => '569',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Danang Prasetyo',
                'username' => 'Danang',
                'email' => 'masdanang24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qiUYd5gJSTEiDPeUcsoTWeuNp09FK0SvB/mDyLxH2/cHR5zi7lE2a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-03 05:33:33',
                'updated_at' => '2022-05-03 05:33:33'
            ),

            array(
                'id' => '570',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ade Ismanto',
                'username' => 'Deto99',
                'email' => 'adeismanto72@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ViJcyP3NLt9n6TVIuzTloOKD7v1DbR9YOiiAMmz138PsPhg3D9p3C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-03 19:33:42',
                'updated_at' => '2022-05-03 19:33:42'
            ),

            array(
                'id' => '571',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'irwansyah',
                'username' => '1n0u3',
                'email' => 'ijunichi52@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0jeCPbPsFKoOJ4fXXzfCVOBMbEwIRbb2gi8q.7dJM.FM7BcbLJ3gm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-03 23:57:20',
                'updated_at' => '2022-05-03 23:58:25'
            ),

            array(
                'id' => '572',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Beni Susanto',
                'username' => 'beniqno',
                'email' => 'benin5203@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GVaGzcRTsNaDaVJxmYrC3eUKJznVrMFPp/6T0hsqZ5uZxlKcqKf0i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-04 01:06:20',
                'updated_at' => '2022-05-04 01:06:20'
            ),

            array(
                'id' => '573',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'H.Ramdaniansyah',
                'username' => 'ramdaniansyah',
                'email' => 'ramdaniansyahsip@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FJN.pP7s/CACHxi10ePlFOz.02p1ISAgqIblTcpUPAluQCNcmV.vK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-04 22:45:29',
                'updated_at' => '2022-05-04 22:45:29'
            ),

            array(
                'id' => '574',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yoga firmansyah',
                'username' => 'ryuga19',
                'email' => 'ponaiyuli19@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lj/2B6KiF/8m9qCJKK0iZOhZEOSeEPbLA2YIwJ88S8IdaIfKLqZk.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-05 08:02:26',
                'updated_at' => '2022-05-05 08:02:26'
            ),

            array(
                'id' => '575',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Wahyu',
                'username' => 'Wahyu Hetfield',
                'email' => 'wahyuhetfield01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$E.qxT9t20.FWKBs2yAI2S.0L8f7uIs5MdjqdBEJ4lV6FYrqI8wuu2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-05 18:40:18',
                'updated_at' => '2022-05-05 18:40:18'
            ),

            array(
                'id' => '576',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Baktu Purwarudiyanto',
                'username' => 'baktipurwa',
                'email' => 'baktipurwa77@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$otIWGmG1hEn74O00BfoPOe9xeaK20BeDqN4MnJPFr5n1aQ/Uj.bzm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-06 01:37:29',
                'updated_at' => '2022-05-06 01:37:29'
            ),

            array(
                'id' => '577',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fahri',
                'username' => 'gusti',
                'email' => 'novianfahri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nnJKDfZOql4MFoyWDiC9UeY/auoa6AkmsMW2C0LvyNqJrD/jDwqCW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-06 06:42:44',
                'updated_at' => '2022-05-06 06:42:44'
            ),

            array(
                'id' => '578',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ari ismail',
                'username' => 'ari ismail',
                'email' => 'ariismail75@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cjLyUSQU0rr5Uw/9gislL.JB8khivDHlZj3Yi1U7cVksGbZIeZtVC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-06 19:08:29',
                'updated_at' => '2022-05-06 19:08:29'
            ),

            array(
                'id' => '579',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hermawandi',
                'username' => 'yogayoga',
                'email' => 'yoga.ponti86@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ic9mu5W2vcw2I4KkXcRn0OVlbBNIUh.PWSiun6U/QKzVuD7h9woFq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-07 02:25:34',
                'updated_at' => '2022-05-07 02:25:34'
            ),

            array(
                'id' => '580',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'juupri',
                'username' => 'conslet28',
                'email' => 'adijupri378@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PgyBjKNYpWHy31GF2Un7CuaG5eElpqb0Yn46zq18slv/sQtDsNmca',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-07 03:14:52',
                'updated_at' => '2022-05-07 03:14:52'
            ),

            array(
                'id' => '581',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rully dwira lesmana',
                'username' => 'uwi',
                'email' => 'uwiimul8280@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HHoC.2/kwUUlxUaV5ivJv.Hyp4mxC0bJlsrPI0rF7fhfrvFieNM8i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-07 07:48:44',
                'updated_at' => '2022-05-07 07:48:44'
            ),

            array(
                'id' => '582',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hermanto',
                'username' => '77_Herman.',
                'email' => 'faleajayamandiri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IdUOdohqNO6pDL/xbbiTYOzdrfxQb6OZcJLHq7lMohnsapr6FaGCG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-07 22:15:59',
                'updated_at' => '2022-05-07 22:15:59'
            ),

            array(
                'id' => '583',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Natha naek alpha rendy',
                'username' => 'natha',
                'email' => 'endikjak@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$M2AulikNnc9ktVVD35nYRu1Sk6YBZf1D/lnP1/c4ijCqbvVZ.xjWi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 01:36:08',
                'updated_at' => '2022-05-08 01:36:08'
            ),

            array(
                'id' => '589',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tarsis',
                'username' => 'tarsis',
                'email' => 'tarsishandoko88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HS4/kzjwEHqrUEvLv66FIOpIRnXlZf2IuXWnpCaTj8Gh16XeJVk8e',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 02:02:10',
                'updated_at' => '2022-05-08 02:02:10'
            ),

            array(
                'id' => '590',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ridwan Prasetyo',
                'username' => 'pras996',
                'email' => 'officialpras14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Qqda07LKXE0cIsOZNbINg.73Noymcw17O/OZllAUhLIejRIUnDSEu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 03:16:50',
                'updated_at' => '2022-05-08 03:16:50'
            ),

            array(
                'id' => '591',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ridwan',
                'username' => 'yoyok1234',
                'email' => 'ridwanprasetyo63@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iqXFnaskAIAh.ziOhVRq5eH3FmlanijpbzSTcHxXUa7gYIF43Pm8a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 03:18:28',
                'updated_at' => '2022-05-08 03:18:28'
            ),

            array(
                'id' => '592',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'edi sutriana',
                'username' => 'edi',
                'email' => 'esutriana7gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$c98nCIxf5bSy6SKYyyifqObE4oyinEiw3zmX.lPe0S7M2HFW4OB06',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 04:41:15',
                'updated_at' => '2022-05-08 04:41:15'
            ),

            array(
                'id' => '593',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'iwan',
                'username' => 'iwaniwan',
                'email' => 'kurniawanarrasyiid@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NejtQ/TZtVa2z6BYjzSUwe0le8QaISTT/AzhfLsp/FGZJTtpBwN86',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 04:44:15',
                'updated_at' => '2022-05-08 04:44:15'
            ),

            array(
                'id' => '594',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'DODY HARDIANTO',
                'username' => 'DODY',
                'email' => 'dodee.hardianto22@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zk//OUpYS3XvrXOdQIFeBu7siUHdNju.IYs1uzlgktm6mg9qTZMgK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 06:18:30',
                'updated_at' => '2022-05-08 06:18:30'
            ),

            array(
                'id' => '595',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Adji',
                'username' => 'Salim',
                'email' => 'adjiborneo19@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OC9G1XTR4nBt165Vly0o.uY2HZGRBpT2bIW9zo0XlSUkIANPiixz6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 08:29:43',
                'updated_at' => '2022-05-08 08:29:43'
            ),

            array(
                'id' => '596',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Aisyah Ramadhanti',
                'username' => 'aisyhhh',
                'email' => 'ica.ramadhanti@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$k6976JUmfRovyfqmrqNTLOsema83YLacTc7lKYfFaC4I1qdAwsCq2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 16:44:57',
                'updated_at' => '2022-05-08 16:44:57'
            ),

            array(
                'id' => '597',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'solonk dibee',
                'username' => 'solonk',
                'email' => 'solong@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YqlQHIKt11mbLaeNTX7Piu821L9kGBxwqqlcoLNmGVfveHH4UqW2u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 21:36:50',
                'updated_at' => '2022-05-08 21:36:50'
            ),

            array(
                'id' => '598',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arif',
                'username' => 'arief88',
                'email' => 'ariefahmad544@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$590aOWejgxJIUaontB.iv.hkrlMlsnmcgfA/6P81UTZW6MllG7qHy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-08 21:55:51',
                'updated_at' => '2022-05-08 21:55:51'
            ),

            array(
                'id' => '599',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agung setiawan',
                'username' => 'aggstwn',
                'email' => 'agungsetiawan9418@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0RO2TPNfvWNHQnq.VS6k0OYwcyZe4TeeQZKD46AswyLB/FI78oz1i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-09 00:55:31',
                'updated_at' => '2022-05-09 00:55:31'
            ),

            array(
                'id' => '600',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Rasidin',
                'username' => 'rasyid.2410',
                'email' => 'muhammadrasidin24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bvFvOZ9tR5SWcM3urLJZTO/8XngUAgU4hsee2J8zEcMFyZSEtPTxG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-09 02:12:02',
                'updated_at' => '2022-05-09 02:12:02'
            ),

            array(
                'id' => '601',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'aini',
                'username' => 'aini',
                'email' => 'jumaini83@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VXs.2NyS9C4KxNmVrKN8B.LJD95zl0MVs6D1bIULK1yLrDPip73wO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-09 05:00:57',
                'updated_at' => '2022-05-09 05:00:57'
            ),

            array(
                'id' => '605',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jepri',
                'username' => 'jepri',
                'email' => 'egi.pras89@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9OUxUeHfxFzbagIZE2/ZS.Pqah6aONTOgUXq5iTsFt651EfbeO0o6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-10 01:10:38',
                'updated_at' => '2022-05-10 01:10:38'
            ),

            array(
                'id' => '606',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'delfi apriani',
                'username' => 'delfi',
                'email' => 'delfiaprianti@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$efKfYQPQCmOv6rJlVKisee5pxzBbfgroYZsYvpw5CCWPqttw8GeU2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-10 01:26:43',
                'updated_at' => '2022-05-10 01:26:43'
            ),

            array(
                'id' => '609',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad nur',
                'username' => 'Muhammad nurul',
                'email' => 'muhammadnurullah589@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gZ8bfvCAa5RBZk9urlgsa.DsespHzw85m359WJvxtjcmUufozUOQq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-10 06:07:06',
                'updated_at' => '2022-05-10 06:07:06'
            ),

            array(
                'id' => '610',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Aditya',
                'username' => 'ahmad',
                'email' => 'aureliahmad7316@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ibxHfQp/y0oQ0DyqId6eiuw/A8QCxtOKSUYQnW4XliD/Oh31PXV4a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-11 03:51:35',
                'updated_at' => '2022-05-11 03:51:35'
            ),

            array(
                'id' => '611',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andreas Markus',
                'username' => 'Andreas',
                'email' => 'andreasmarkus60@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wndacSmyCI4izexiht/6Sub4sJ5prwXvnx3sqdlt8xTp2UGnjRY2q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-11 04:39:24',
                'updated_at' => '2022-05-11 04:40:38'
            ),

            array(
                'id' => '612',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'eyres purnomo',
                'username' => 'eris',
                'email' => 'wallaeris@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oNcuZV5RqA9vSmZKoge5eOtMHPjlqVBoVd7bXo32bs5kzauzbII2i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-11 09:24:26',
                'updated_at' => '2022-05-11 09:24:26'
            ),

            array(
                'id' => '613',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Leo Rivaldo',
                'username' => 'Leooo',
                'email' => 'leorivaldo45@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kJGzoagWE7v.tKmj5MTqZeSemwYW/La1zuCA/.UO10jtRPkp6puh2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-11 22:49:33',
                'updated_at' => '2022-05-11 22:49:33'
            ),

            array(
                'id' => '614',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ahmad Agung Nugroho',
                'username' => 'Agung',
                'email' => 'agungsdsb506@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kkVtKoQ6WLHQcKKRNbJPdOT65Z0fFCCBvaYMMMnjblm97VlSyk5B2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-13 00:16:38',
                'updated_at' => '2022-05-13 00:16:38'
            ),

            array(
                'id' => '615',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammad adi nugroho',
                'username' => 'vladivostoc',
                'email' => 'adi.blackmamba@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2SxNwL7hDSIBqw35eQh1K.Bzi9tg.JfKur3LPTXzVLhK6H01Si1GS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-13 00:21:01',
                'updated_at' => '2022-05-13 00:21:01'
            ),

            array(
                'id' => '616',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'boni',
                'username' => 'boniem',
                'email' => 'boniem001@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ma9wFFjN9VPN0lVJsFFjOOM0wGnhbSyltxKekfW6wtQicN974QncO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-13 04:35:51',
                'updated_at' => '2022-05-13 04:35:51'
            ),

            array(
                'id' => '617',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Fajar Ramadhan',
                'username' => 'Kiranababa',
                'email' => 'rockymerpaung@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ns13GpWDR7EIAzeM7MkyEOVTPetvpsx3mtHbSMni791gPTR/IZ4ua',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-13 04:35:57',
                'updated_at' => '2022-05-13 04:35:57'
            ),

            array(
                'id' => '618',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ari Nurul adha',
                'username' => 'ari',
                'email' => 'arinurul190497@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$w5s/UuGxUkeeMbX7peHQZOiIPoCz/7MPrUn3bkyPMkJD/gqRgF5LC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-13 07:01:40',
                'updated_at' => '2022-05-13 07:01:40'
            ),

            array(
                'id' => '619',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Donkey',
                'username' => 'Dregd29',
                'email' => 'worngzone@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dnol9CyOzt9WHcznX9Sv4OFTTGLdHK8vsVhPtRLwl4sGk5IletCV6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-13 09:03:37',
                'updated_at' => '2022-05-13 09:04:35'
            ),

            array(
                'id' => '620',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M. yusuf',
                'username' => 'yusuf',
                'email' => 'yusufsuf373@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2AUxuVwkWcGH94zn07YH/.ndz3Ezgjqi6XBcy40SjB7wW/bOeFtua',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-14 07:50:54',
                'updated_at' => '2022-05-14 07:50:54'
            ),

            array(
                'id' => '621',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jumain',
                'username' => 'wak_iin',
                'email' => 'iinbudbus@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$J9ZFdvOUNUfy6wiVuJT48OD0i9ptLz1E2K/fTP3X1F.6Gun4vTFJK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-14 08:39:32',
                'updated_at' => '2022-05-14 08:40:06'
            ),

            array(
                'id' => '622',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muamar ridzah',
                'username' => 'amar',
                'email' => 'muamarsfo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UhOnGhw0bpaegfffQnpB9eW0WNGIxrT4F3PRSTgXqDbCqvvbgFE16',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-14 09:20:01',
                'updated_at' => '2022-05-14 09:20:01'
            ),

            array(
                'id' => '623',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Acep Eka kurniawan',
                'username' => 'achev',
                'email' => 'ach3v75@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CIxButrUZzlBG53UZETXPuoJp9QL5dcfCUyV4w/rUiE7/kZB/XEQi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-14 22:06:53',
                'updated_at' => '2022-05-14 22:06:53'
            ),

            array(
                'id' => '624',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'imam',
                'username' => 'imamjak',
                'email' => 'imamsyafelix@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1YRnTBUjJY/3AyEGE758D.wne0BSJEs2x2qikYJO7gOiRn1cjvHcC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-16 02:41:02',
                'updated_at' => '2022-05-16 02:41:02'
            ),

            array(
                'id' => '625',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ZUQNJ',
                'username' => 'zuqni_88',
                'email' => 'zuqniarrahman@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5U6xWwUZoe2ndaqM35/P6OJW4TieFmnug1biy.kJNxip72xlEQ/X2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-17 04:55:00',
                'updated_at' => '2022-05-17 04:55:00'
            ),

            array(
                'id' => '626',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sari Ingkiriwang',
                'username' => '@iam_spi99',
                'email' => 'sariingkiriwang99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kzB6epO4GBYmOEqSt8nhceqdk5tAAQOISs7MZgmlOKS2M0BqGZFqq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-17 09:17:12',
                'updated_at' => '2022-05-17 09:18:50'
            ),

            array(
                'id' => '627',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ferry radiansyah',
                'username' => 'ferrad',
                'email' => 'ferryrad223@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IHeIt77CL0zOoqdsSSlWC.0BlE/ubHkfB6SiD8pyenm7o2xa0hJ2i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-18 00:22:00',
                'updated_at' => '2022-05-18 00:22:00'
            ),

            array(
                'id' => '628',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ferry Radiansyah',
                'username' => 'feri_radi',
                'email' => 'ferryradiansyah@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$URRQF8jR4rQK0vAPg3QJ3ObI2tBvA0uP2uXxdUgjBG5XnO8pHp3gG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-18 00:24:17',
                'updated_at' => '2022-05-18 00:25:33'
            ),

            array(
                'id' => '629',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'gunawan prasetio rafael nainggolan',
                'username' => 'gunawan03',
                'email' => 'gunawannainggolan03@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fb78LhQ/qedm97rsrrabF.wdWt1ttn99wBELaZCyKgjbBhAXcpJYm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-18 20:25:25',
                'updated_at' => '2022-05-18 20:27:05'
            ),

            array(
                'id' => '630',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'steven',
                'username' => 'steven77',
                'email' => 'stevenleander907@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FvuZgYmF8rFBcwTBFBtVe.gMfddpXrKLURt3/v/JNWtjm.Uxtfh6G',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-20 05:10:45',
                'updated_at' => '2022-05-20 05:10:45'
            ),

            array(
                'id' => '631',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yogie Septian Jaas Swananda',
                'username' => 'Yogieseptian',
                'email' => 'yogieswananda@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IRYwT5VqOdNeUX9Bhd6kZ.wDYezYQjCTeKXJr13qLDnt/fIGJVFqa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-21 03:55:14',
                'updated_at' => '2022-05-21 03:55:14'
            ),

            array(
                'id' => '632',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'daed suryanto',
                'username' => 'suryanto',
                'email' => 'suryantoelsea@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2lywszJTSssl9QFg0xLUTeUe9rfFmQyCCi72hosrsu9T2O13m9ySm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-21 07:52:40',
                'updated_at' => '2022-05-21 07:52:40'
            ),

            array(
                'id' => '633',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yopi Yuliansyah',
                'username' => 'Yopi',
                'email' => 'yopiyuliansyah87@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tawnjWR6r0gD2YgwqKG4nOi8BKtLNLKKQjLI1x6YlaOccE3Vk/6CS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-21 18:43:38',
                'updated_at' => '2022-05-21 18:48:18'
            ),

            array(
                'id' => '634',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'deni rahmat',
                'username' => 'matapi113',
                'email' => 'denirahmat6565@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/qcsljiLcek330zYDwPrLeoO8xbvSLtQV4gHzje0qF5LjVsaqmkwe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-22 02:41:50',
                'updated_at' => '2022-05-22 02:41:50'
            ),

            array(
                'id' => '635',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'badarul',
                'username' => 'your.saturnus',
                'email' => 'badarul.ym3ci@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AuXXos8KFyVseatN8I5vJ./GlTx1uqLeYtcJ8OA9tiN/7Sdf5aBAC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-22 03:52:50',
                'updated_at' => '2022-05-22 03:52:50'
            ),

            array(
                'id' => '636',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dicki',
                'username' => 'dicki afhsyah',
                'email' => 'dickimensere@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$D7BAH1ffGgp5zyKprVJt6OkObLwnTGOLcMs.z9zYBEeLrBxdBIeta',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-22 19:57:25',
                'updated_at' => '2022-05-22 19:57:25'
            ),

            array(
                'id' => '637',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ajeng Desnoly',
                'username' => 'desi',
                'email' => 'ajengdesnoly64@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fvxgdZY.mpsrWcs8EgkXv.zyeVYFxSR.H6QbnNkA/b7.O.lm2zGV.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-22 21:33:31',
                'updated_at' => '2022-05-22 21:33:31'
            ),

            array(
                'id' => '638',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'elsa',
                'username' => 'elsa',
                'email' => 'elsaagustiasafitri21@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dupdClWAGFhr6IGwqFkBeODU7RB3jWMUvdNe9a4F5B/21j4FFqJtC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-22 23:22:16',
                'updated_at' => '2022-05-22 23:30:43'
            ),

            array(
                'id' => '639',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'matruji',
                'username' => 'bang adjie',
                'email' => 'adjieymc@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IaO5k8LMrO0WOSnL5Nc0Y.BqmV8B8iHZxjTI3sI3twatT6xZy5ysi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-23 06:59:12',
                'updated_at' => '2022-05-23 06:59:12'
            ),

            array(
                'id' => '640',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syerina',
                'username' => 'Syerina_12',
                'email' => 'e1011201010@student.ubtan.ac.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JjFeQtZD0n9vmmOQwAj74.1YIoW./Mv2jx6DCnHCiTxx9Y1mUMR.u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-23 07:40:21',
                'updated_at' => '2022-05-23 07:40:21'
            ),

            array(
                'id' => '641',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syerina',
                'username' => 'Syerina12',
                'email' => 'e1011201010@student.untan.ac.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QtowqCztOxZeiEQrVN4iie9dFKiyWCVwbsDRFQ3jddcIOrtvWv/ZC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-23 07:41:30',
                'updated_at' => '2022-05-23 07:41:30'
            ),

            array(
                'id' => '642',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'farhan',
                'username' => 'frhn.rhm',
                'email' => 'farhanrahmadummaulid09@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9lbOjzsCDtgOakZ.7sz7CuXBlt7oejK3ODQQ6qtttSUHJP2gqBkeG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-24 06:39:40',
                'updated_at' => '2022-05-24 06:39:40'
            ),

            array(
                'id' => '657',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'MUHAMMAD ZULKARNAIN',
                'username' => 'mdzqrn',
                'email' => 'desertwaltz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/U7hPmzjp/X3eh0EAlt3Qe7o1OZJhNnXthz9v.LqtP5p3.1dvdVwC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-24 22:48:39',
                'updated_at' => '2022-05-24 22:48:39'
            ),

            array(
                'id' => '658',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'desy fitriyani',
                'username' => 'desyf_12',
                'email' => 'desy.fitriyani0303@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$avMQ1l1xizbZGAzok8A8FOqsmRyzhmTVPeFYkcDh5lwzG4G7C.xza',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-26 02:09:48',
                'updated_at' => '2022-05-26 02:09:48'
            ),

            array(
                'id' => '659',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dett',
                'username' => 'dedet',
                'email' => 'dedi_yansyah@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bDgmCWftLG8qAdvze0ieFOqdJFdG/zsdzV3ytEpVzE8BoElYTziea',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-28 07:27:57',
                'updated_at' => '2022-05-28 07:27:57'
            ),

            array(
                'id' => '660',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dedi yansyah',
                'username' => 'dedet',
                'email' => 'dedy_yansyah@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pvU7BB2bCJ04wmS6kqwEpebSDFHwETGYrAvM/xlXGVYM8qvxLUKPu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-28 07:29:34',
                'updated_at' => '2022-05-28 07:29:34'
            ),

            array(
                'id' => '661',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deni Permadi',
                'username' => 'Kundel Uwell',
                'email' => 'deni.kundel@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aktHn9WGz.Yd48GDQKSvtuznHJShmUXwy4t9QopUNkTyEKhagxWaS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-31 00:48:05',
                'updated_at' => '2022-05-31 00:48:05'
            ),

            array(
                'id' => '662',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mikmasjaya',
                'username' => 'dhohol',
                'email' => 'maskuya@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GMEeqle0Usr743oDvwWQNeDRK8cxg20TZwx9NG5Jk/DLmEE4WqlpW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-02 01:31:58',
                'updated_at' => '2022-06-02 01:31:58'
            ),

            array(
                'id' => '663',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Nur Rofik',
                'username' => 'jackrofik97',
                'email' => 'jackrofik97@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZORAabn6IbXoVh/zvQ5CSu/DTISbz5lL2QtUDoBUzK8lpj6Y8H/wO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-02 02:29:51',
                'updated_at' => '2022-06-02 02:29:51'
            ),

            array(
                'id' => '664',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'iqbal_sysputra',
                'username' => 'iqbal _sysputra',
                'email' => 'ikbal001syaputra@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Sj5TeTq/PKYzXgB9eWzMsuBnaqYfkr3dv27Xa.jcxJiiF8Vg16VuC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-02 07:22:57',
                'updated_at' => '2022-06-02 07:22:57'
            ),

            array(
                'id' => '665',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yesi Putri Anggraini',
                'username' => 'Yesizyy',
                'email' => 'yesiputri899@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AEIot3.y9rgzkRShUNhRFuzoCL5U97NVOqgHEimo0OaYvzTgmVq3m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-03 01:48:05',
                'updated_at' => '2023-08-26 17:37:40'
            ),

            array(
                'id' => '666',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad faridz muttaqien',
                'username' => 'faridzmuttaqien',
                'email' => 'faridzborneo027@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iBwh57rUmJJbyn4I2zEA4uUyY1JHIADx/Zovh1plKOFm6CDH4ek8i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-04 01:02:19',
                'updated_at' => '2022-06-04 01:02:19'
            ),

            array(
                'id' => '667',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ARIF RAHMAN',
                'username' => 'ARIF',
                'email' => 'arifnibos003@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IytbTDf6fpWc1E5E/0qPDubY0eUi39g4i7oE35cxnwUMjOx2AdlxC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-04 21:53:38',
                'updated_at' => '2022-06-04 21:53:38'
            ),

            array(
                'id' => '668',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Prasetya Ariska',
                'username' => 'prasetya08',
                'email' => 'nadhiraheveasari@gmail.co.',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fF8HqfucoRX2Z6zDIQn08.Ktzr2NLGCjtjz.Co6nOnYCg/ESCeMGG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-05 22:32:06',
                'updated_at' => '2022-06-05 22:32:06'
            ),

            array(
                'id' => '669',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Winda',
                'username' => 'Wnd',
                'email' => 'windalie471@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t/6TG9rFer6Zq1R4uPRGy.5oiRaYBsY8VKFEoWSRb3eEeLW1VZAQa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-06 06:40:02',
                'updated_at' => '2022-06-06 08:06:42'
            ),

            array(
                'id' => '670',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Suma Hafizh Annurfi',
                'username' => 'Suma0597',
                'email' => 'sumahafizhannurfi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ikOTdDiYklSv289vBJ/Ll.DsKee0yKmd5dyIXQY/8ftMTpgfBpQRW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-06 17:23:05',
                'updated_at' => '2022-06-06 17:23:05'
            ),

            array(
                'id' => '671',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Joko susilo',
                'username' => 'joko',
                'email' => 'joko94695@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.A0Q9.gcdCjgEqkKPtSBceVq1qUGft0RO1JJOgPR7WfNDtFk59iN6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-07 02:55:57',
                'updated_at' => '2022-06-07 02:55:57'
            ),

            array(
                'id' => '672',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'erwin',
                'username' => 'erwin',
                'email' => 'fransalvin7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fsxm3uluXBpplOBIIh/c8OYiXWKHdbZbSruFQRKZrNEJkYQl.cWcG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-07 03:48:31',
                'updated_at' => '2022-06-07 03:48:31'
            ),

            array(
                'id' => '673',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Siti Rahimah',
                'username' => 'imah',
                'email' => 'imaaah24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ffah/2XNXi6/ZgZx.l4Fs.m10s9.ReJzkBcpM/E2TeNPyZBQ4s76S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-07 07:57:04',
                'updated_at' => '2022-06-07 07:58:34'
            ),

            array(
                'id' => '674',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wahab van gobel',
                'username' => '@vangobel',
                'email' => 'wahabvangobel77@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CREsE2hlzdGWPl51Z6HRD.YqXxdgp47Zz8.zSKUGFVU7iyDYFjY5e',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-07 18:49:10',
                'updated_at' => '2022-06-07 18:49:10'
            ),

            array(
                'id' => '679',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M.arbi.p',
                'username' => 'arr',
                'email' => 'thelordarbi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vzflo6d4PBcT8Qo84yqrvuT8I4JzCSUarqblYm8IocC2kI1HMoOqW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-08 01:47:39',
                'updated_at' => '2022-06-08 01:47:39'
            ),

            array(
                'id' => '680',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ridwan',
                'username' => 'ridwanriborn',
                'email' => 'ridzhem@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dstB3zsx2TILTWSY/HpqE.arHVItAccjKFyl9Tq0Lh6.63a7nhYGC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-08 05:45:20',
                'updated_at' => '2022-07-07 21:11:33'
            ),

            array(
                'id' => '681',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rendra',
                'username' => 'rendra carlo',
                'email' => 'rendravaart@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IX3K9bg0.w4IgoGVawR58uOakfmG7evX2wUD6q/Yz62VdbLOQr/RC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-08 15:54:04',
                'updated_at' => '2022-06-08 15:54:04'
            ),

            array(
                'id' => '682',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'syarif agus ibrahim alkadire',
                'username' => '41M',
                'email' => 'aimqadrie@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zs/5Yde/POzEzyCKJMOQxOy.pH8nxzLckRc7HVaMIjhaLgNWT/mRu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-08 21:27:01',
                'updated_at' => '2022-06-08 21:27:01'
            ),

            array(
                'id' => '683',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Farras Abyan',
                'username' => 'Farras Abyan',
                'email' => 'farrasabyan1111@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.5.MsZ1ZvEuLzbKoxXftxeqh.yaa6/V8SoLy88ahPVTgysdXm/.G2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-09 00:02:06',
                'updated_at' => '2022-06-09 00:02:06'
            ),

            array(
                'id' => '684',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'imam',
                'username' => 'hanafi',
                'email' => 'imamhanafireptile@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2ZQ68Cp1Ug/iSilvIVcAb.zPpotpXllflo7LqMP4CGIBI3.67iH6a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-09 00:56:15',
                'updated_at' => '2022-06-09 00:56:15'
            ),

            array(
                'id' => '685',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Adi Y.',
                'username' => 'adioranan',
                'email' => 'adioranan@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3RSKB7iEqcm4xe1p3v52b.t14OrduS8lSf9x2NWe/kWYk1jqY8Brm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-09 02:04:52',
                'updated_at' => '2022-06-09 02:04:52'
            ),

            array(
                'id' => '686',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ruji',
                'username' => 'Ojie',
                'email' => '0ji3ulf4@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OwVurtoPikKd8SbA7/Xfn.tJy3CLpyZQDZgUYqfPaTFwM9/ZwjlsW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-09 06:19:45',
                'updated_at' => '2022-06-09 06:19:45'
            ),

            array(
                'id' => '687',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Aidil Hidayat',
                'username' => '24aidilhidayat',
                'email' => '24aidilhidayat@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aubI5eKPYskO5K.QcVQbfOrUSIU8my1c3IAcRsiXlT5G/Zd7cXnOK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-09 15:42:48',
                'updated_at' => '2022-06-09 15:42:48'
            ),

            array(
                'id' => '688',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ozi all',
                'username' => 'koplenk71',
                'email' => 'alroziazwar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CvpdMHhBZQKKb5WPyAdOV.CeD2IQWP69zQcs05jnimvLijsfI1dLO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-10 05:54:39',
                'updated_at' => '2022-06-10 06:08:16'
            ),

            array(
                'id' => '689',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'syaefullah',
                'username' => 'fullah',
                'email' => 'fullahjak@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lm7wzdyT7mJYyb0O6H2yjO/se.7NQQONOlNb53ZYmYLeI5Yu04mFS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-10 15:12:59',
                'updated_at' => '2022-06-10 15:12:59'
            ),

            array(
                'id' => '690',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Herman Matondang',
                'username' => 'tondangado',
                'email' => 'hermanmtd@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SkfOlLLLuQ1b.0wDg0H7GeG4Iwf.njxXPgkre7k0aXH8Ecr54Q.lC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-11 06:26:46',
                'updated_at' => '2022-06-11 06:27:53'
            ),

            array(
                'id' => '691',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'luthfie satria',
                'username' => 'memet',
                'email' => 'memet135@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/KAWn.BeNLkx5iuW5SfjPOtV2b9dexQA4wGLvCvCciZPWWYJ6XnXO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-12 10:53:47',
                'updated_at' => '2022-06-12 10:53:47'
            ),

            array(
                'id' => '692',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wahyuni',
                'username' => 'ayu',
                'email' => 'axsa78342@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$o1nDe6Zpr9XasqgE19Qbc.Ld2AqvUV5qd5n7yjAVKgQM6vTwVwbdK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-13 04:16:41',
                'updated_at' => '2022-06-13 04:16:41'
            ),

            array(
                'id' => '693',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M Firman Jeriyadi',
                'username' => 'firmanjeriyadi',
                'email' => 'fjeriyadi28@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SmBZttXvF7IXh4T5OTWiJe27ElUmw1uW6cxupTb0fIUv4b3XOjrOO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-14 03:52:46',
                'updated_at' => '2022-06-14 03:52:46'
            ),

            array(
                'id' => '694',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'susanto',
                'username' => 'fie',
                'email' => 'susanto.fi79@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4.Opfk2KMqcHH9o8ZU6tg.2EHOt2u5/VhIw.z/u/DhgV/tvVekz/2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-14 06:09:20',
                'updated_at' => '2022-06-14 06:09:20'
            ),

            array(
                'id' => '695',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'achmad mudassir',
                'username' => 'sigra1391',
                'email' => 'achmadmudassir16@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/dt97ZX9gUS.9IuueEnhVO8FvIYPQn8wPkB8DSTWBg6JievAkh.eC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-14 23:42:08',
                'updated_at' => '2022-06-14 23:42:08'
            ),

            array(
                'id' => '696',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Izzy Tawi Hendria',
                'username' => 'Grip',
                'email' => 'Eazygrip21@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$a8Eb/M5R9pxXiPMj10USXekQh1kSf6ONjirmwNiFLHKY36/MOJaAG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-17 02:46:44',
                'updated_at' => '2022-06-17 02:46:44'
            ),

            array(
                'id' => '740',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sablianto',
                'username' => 'liant',
                'email' => 'liant.tuqo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Dui78UqL.uVMWNGzwxT3S.SZdmXVcvHihefA8VUn4qKxxycTmxwV2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-17 19:46:49',
                'updated_at' => '2022-06-17 19:46:49'
            ),

            array(
                'id' => '741',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ilham safuan',
                'username' => 'qtela',
                'email' => 'nofi070120@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$daLsoeR3EWPfo5sOh/dmFeXcubVZP3Ab2i08REouWcJFzz8zEmN9O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-18 05:34:56',
                'updated_at' => '2022-06-18 05:34:56'
            ),

            array(
                'id' => '742',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nurul Islamiah Wulandari',
                'username' => 'nurulwlndrr',
                'email' => 'nurulislaa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Sosaz3g7TGtR8/oYcxnIQuRaXifbk/1wIs49l.jC4dAfTre2BHRwq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-20 01:04:39',
                'updated_at' => '2022-06-20 01:04:39'
            ),

            array(
                'id' => '743',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sebastian liano',
                'username' => 'sebastian',
                'email' => 'truesekker@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Is0E/SuHDWyM4iI/KUBeQuxAI5WvHb5wqWkaAFa56mmd0xrt7J8Dy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-20 08:08:53',
                'updated_at' => '2022-06-20 08:08:53'
            ),

            array(
                'id' => '744',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Gian',
                'username' => 'gian',
                'email' => 'gianpangestu92@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ym0s7g.QNSy.8EEnjvR/7OK5zPsYMPdkvy1SfYcY6c1X5PHxLLX4K',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-21 02:58:35',
                'updated_at' => '2022-06-21 02:58:35'
            ),

            array(
                'id' => '760',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alfonsusDeliguoriHilmi',
                'username' => 'Alfonsus',
                'email' => 'alfondh3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HXnbwbjPbygA2gN8OUnUmuMUTC9ARA9QySplMgAw646bwf2Zig6Gu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-21 04:53:40',
                'updated_at' => '2022-08-19 07:08:53'
            ),

            array(
                'id' => '761',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jefri fernando',
                'username' => 'jefri389',
                'email' => 'jefrif25@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8L5Uo/uLisBKdfIJeG7Z1.W8/KTfnnCGgCRgXGVW41XwZd7JK1ajS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-21 07:19:57',
                'updated_at' => '2022-06-21 07:19:57'
            ),

            array(
                'id' => '762',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nia mardiana',
                'username' => 'mamanino',
                'email' => 'niamardiananino@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KpfDrgCKNTuL2AuKWTksp.ws5yC5GaEBBTlS4FsjnV0BF9539aRri',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-25 20:35:40',
                'updated_at' => '2022-06-25 20:38:47'
            ),

            array(
                'id' => '763',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'veri zuliawan',
                'username' => 'veri',
                'email' => 'verizuliawan300@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5fmcRszajVh88CnyDTwrBOB3drb/4z1k9jEAULdHZezJktVYQ16/W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-27 03:51:17',
                'updated_at' => '2022-06-27 03:51:17'
            ),

            array(
                'id' => '764',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ibnufadli',
                'username' => 'ibnu',
                'email' => 'ibnufadli082@.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vdZyRMmfRDWpMGUvVR4ho.msNSh9gtlLrjqhwOiwIdjASciEWEKVO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-06-30 03:30:31',
                'updated_at' => '2022-06-30 03:30:31'
            ),

            array(
                'id' => '765',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sumimah',
                'username' => 'mimi',
                'email' => 'umi.mempawah123@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d0a1vFLmCheIGYUdQnIKku7.eXX5SoDopby5o9iQoAbYQ/NzcPACW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-02 03:04:05',
                'updated_at' => '2022-07-02 03:04:05'
            ),

            array(
                'id' => '766',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Khayrul Hamsyah',
                'username' => 'Udinbor1',
                'email' => 'khyrulh01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$61GB.6xaP1CFrLqxwXFi/ux6C2OgcHoTTf1Xw1X7e5HPLU/htksuu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-02 06:29:47',
                'updated_at' => '2022-07-02 06:29:47'
            ),

            array(
                'id' => '767',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andi Achmad Maulidan',
                'username' => 'andiamaulidan',
                'email' => 'andiamaulidan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1xoxG7i4z/WgMBF.DNuIseS1s6AXD2IaB31/Pfj9jNrqG49nJLc/a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-02 15:37:23',
                'updated_at' => '2022-07-02 15:40:30'
            ),

            array(
                'id' => '768',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Khairil Anwar',
                'username' => 'Aan Anwar',
                'email' => 'usaidafanajid@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jZaLti.cm.pYxOG6a9jtauH7bi1kIDDC2.YZIR0Si4weIDqqV9phW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-03 05:35:06',
                'updated_at' => '2022-07-03 05:37:04'
            ),

            array(
                'id' => '769',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yopi',
                'username' => 'yopi',
                'email' => 'yopihitam417@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q8thbQdA1BQp908DtsAzJue3WWHT.RYgRgBV3uo4/SxPhGcZIkYWC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-04 06:16:18',
                'updated_at' => '2022-07-04 06:16:18'
            ),

            array(
                'id' => '770',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'leo christio',
                'username' => 'leo',
                'email' => 'leo.christio@bankmega.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.UWYVS7HB0bfBHYcLwBX2OEt7jUGz6QSxbArH0PRTXphvWxSHFU.6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-04 22:08:49',
                'updated_at' => '2022-07-04 22:08:49'
            ),

            array(
                'id' => '771',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hansen Tanjaya',
                'username' => 'wilfridus',
                'email' => 'hansentanjaya44@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KgecSsy7zKh3R3Cmy9b94.kAq.WQz1dzxUNTLc569zTC9WNiQ/Qn6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-05 03:16:19',
                'updated_at' => '2022-07-05 03:16:19'
            ),

            array(
                'id' => '779',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Herman',
                'username' => 'Herman',
                'email' => 'podpkalbar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$13xCMhj6/TfZSCybnw9iwOFpS9.o.KGFWcG85boYGG4g1anslflAy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-05 18:23:40',
                'updated_at' => '2022-07-05 18:23:40'
            ),

            array(
                'id' => '780',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Eko Miharja',
                'username' => 'ezza',
                'email' => 'ezzabokiz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nEL/mkafRqvdB2hdFWNmDOZS/PgCuhkDhrvot0eBHfo6jCvx8yXk.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-08 01:52:48',
                'updated_at' => '2022-07-08 01:52:48'
            ),

            array(
                'id' => '784',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rifky Perdhana',
                'username' => 'Rifkiddo',
                'email' => 'rifkyperdhana@ymail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YFCIp9Y/uLyjLyvsnM9gfu2bPDQjhoGxy.8F8wdFDugC6nYMK8W7a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-08 22:22:30',
                'updated_at' => '2022-07-08 22:23:47'
            ),

            array(
                'id' => '785',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'zaip',
                'username' => 'ciboy',
                'email' => 'anamzaipul97@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/q2VcaSoU1HHqbOGB9ajReRpzJ2jM4siouoGpfz6UgSyGD8stBIcq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-13 00:39:05',
                'updated_at' => '2022-07-13 00:39:05'
            ),

            array(
                'id' => '786',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fitria hasanah',
                'username' => 'myqueen',
                'email' => 'hasanahfitria16@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rcQDKYhhSl0YpMEYhteOOecfaKiZz2pg7Ih8Ujyw2xe6dAPqp0Tc.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-14 05:02:10',
                'updated_at' => '2022-07-14 05:02:10'
            ),

            array(
                'id' => '795',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'supriyadi',
                'username' => 'adi',
                'email' => 'alekshua@gmai.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZFq7chV3C9CVao2JLtYKeO3kWYhKAohKg7u7ossj5SG4ovVZdTXtC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-16 09:15:39',
                'updated_at' => '2022-07-16 09:15:39'
            ),

            array(
                'id' => '796',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'supriyadi',
                'username' => 'supriyadi',
                'email' => 'alekshua@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LWam45RkPbZxMa2E.9ysuel3yPfBwZeQmQW3JJw.O6wl1Mada48z6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-16 09:22:20',
                'updated_at' => '2022-07-16 09:25:25'
            ),

            array(
                'id' => '797',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'JAXSON AUSTIN BAIDER',
                'username' => 'jaxsonbaider',
                'email' => 'jaxsonaustinbaider@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gMgPeExXUcngKrPO3VYYD.zUOCWALKnrFtazbwCK8SSdkcU59v2.O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-16 10:36:46',
                'updated_at' => '2022-07-16 10:36:46'
            ),

            array(
                'id' => '798',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Slamet Hidayat',
                'username' => 'XlmtHdyt',
                'email' => 'xlamt.hidayat@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bDbACpaIW0gnhOlvZ1vPB.ElcxQaj9yvibWpwo.lN1iDpIbUUnB/u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-16 22:51:58',
                'updated_at' => '2022-07-16 22:51:58'
            ),

            array(
                'id' => '799',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Fahrul Diansyah',
                'username' => 'fahrul85',
                'email' => 'fahruldiansyah85@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fXMj/dCUmNC6RNjwG4hCAuG.dQg7GOH8CrDcvsiJblTBPUTtMPFq.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-17 05:32:50',
                'updated_at' => '2022-07-17 05:32:50'
            ),

            array(
                'id' => '800',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dimas prasetyaw',
                'username' => 'dimaswardana12',
                'email' => 'dimaswardana12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/kg3ufoYKpW0yDWuch3HleooDVwMXSvG5TxehWzRdHFUYZmHiv08.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-17 08:15:32',
                'updated_at' => '2022-07-17 08:15:32'
            ),

            array(
                'id' => '801',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'budiraharjo',
                'username' => 'budi',
                'email' => 'zifaraharjo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p.stnVSaAgTliIv6S4LxuODUgUMktkHgbHc8SJzpiO8dVivIuSgTa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-17 23:03:13',
                'updated_at' => '2022-07-17 23:03:13'
            ),

            array(
                'id' => '802',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Shobur Ary Paratama',
                'username' => 'shoburpratama',
                'email' => 'shoburpratama@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GQYqfSKe.NwttWdTmlQL/OEBMaHnh3Q.6RPWRH1mKqTzo6fYu3zQG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-20 04:36:44',
                'updated_at' => '2022-07-20 04:36:44'
            ),

            array(
                'id' => '810',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wendy',
                'username' => 'wendy',
                'email' => 'wendzztan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q357Llki6Luz8gDF4op7wujaNGOoJDR5smUEqWkLbhFZH2WAoQNbW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-21 18:39:45',
                'updated_at' => '2022-08-24 17:44:07'
            ),

            array(
                'id' => '811',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'anggar',
                'username' => 'angga',
                'email' => 'aphon1188@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ej6n98SAZ4zDLyF5BgRa/OeYlVxaq/gmmW14fLzLISdtBBvM.dwHq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-21 22:48:27',
                'updated_at' => '2022-07-21 22:48:27'
            ),

            array(
                'id' => '813',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'budi',
                'username' => 'budibppw',
                'email' => 'teriosnakamichi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PqEE2RLQYYEb8LJjjMckTuI7CcXZVEyZXxezsxwUAioCDncv/ROyi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-25 23:41:58',
                'updated_at' => '2022-07-25 23:41:58'
            ),

            array(
                'id' => '814',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nopoy',
                'username' => 'bebcell',
                'email' => 'bebcellbebcell24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NqH5xowqgSxEiwxPPcjHJOKMoCxtvlbatB1ez95T.CaknG99iGp4W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-27 13:05:59',
                'updated_at' => '2022-07-27 13:05:59'
            ),

            array(
                'id' => '815',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Iqbal Alydrus',
                'username' => 'iqbal37',
                'email' => 'alydrus.iqbal88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$N/hcgSjyBpbsPjiaYZH4fO3vjidIgDOODR4aCCI47Oq/kdmcASSay',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-27 16:48:31',
                'updated_at' => '2022-07-27 16:48:31'
            ),

            array(
                'id' => '816',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syarif Muhammad Zein Almuthahar',
                'username' => 'Zein Muthahar',
                'email' => 'Bebzhein@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1DRmsZ9hIz/et/27HNGq.eaW.occr/jZo9KNRnAAY2bWx3vbusxeS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-27 23:08:21',
                'updated_at' => '2022-07-27 23:08:21'
            ),

            array(
                'id' => '818',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'imam',
                'username' => 'imam',
                'email' => 'iseptian911@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1Nryy8sft2kp9h3nyAa47usjtN83WuiLGgckHl4rHmJC5VuC2iYKy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-28 03:20:26',
                'updated_at' => '2022-07-28 03:20:26'
            ),

            array(
                'id' => '819',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andrea Pratama',
                'username' => 'andrea86',
                'email' => 'andrea.pratama90@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2hnVUBsUnv2q2PrL/JYvH.XWm3196pzNJerQLrP733nTdVR6VaMGe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-28 04:47:33',
                'updated_at' => '2022-07-28 04:47:33'
            ),

            array(
                'id' => '820',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'abdullah thanthowi',
                'username' => 'tatan',
                'email' => 'thanthowi12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BEmdcV8jlFFU1Vt3FA0U1eHJryDXsvqNIUJpOd0yyPj6kfabfIZuK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-28 09:25:46',
                'updated_at' => '2022-07-28 09:25:46'
            ),

            array(
                'id' => '822',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Edi gunawan',
                'username' => 'edi',
                'email' => 'edigunawan8617@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ujjLaRoOtH8OiBWQc.xGa.F46qlOtPfczX1JZXujvdEpItX1.gJpC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-28 19:55:33',
                'updated_at' => '2022-07-28 19:55:33'
            ),

            array(
                'id' => '823',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Thayib Subakti',
                'username' => 'oyibz',
                'email' => 'oyibz.yibz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hZsxxvhsmJrrhHtSE8WIduThPD3teFkOuHJ/mjae9Lk8/AnKYtLf.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-29 01:45:23',
                'updated_at' => '2022-07-29 01:45:23'
            ),

            array(
                'id' => '824',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ihdina Nurkarima',
                'username' => 'Dina',
                'email' => 'ihdinanurkarima2020@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.NDwhC5AVgiCplmw5wgl4ep9UMuJwslXr3bJPrHVyCFN0WenV03NK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-29 03:24:26',
                'updated_at' => '2022-07-29 03:24:26'
            ),

            array(
                'id' => '825',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nordin',
                'username' => 'nordin',
                'email' => 'ninjaboyboy431@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sGMK1GmVfYYq6arazjBFm.0Aglco1wcLrgw4V9Hp7Jj4O13ZPvDKa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-29 04:35:07',
                'updated_at' => '2022-07-29 04:35:07'
            ),

            array(
                'id' => '826',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rinaldidinarta',
                'username' => 'rinaldi',
                'email' => 'rinaldidinarta@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3AEf7LTR6P5T5HvruZLSuecUDhS4xID1gDLUuAwMY8q1HmAHcPe8y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-30 08:15:43',
                'updated_at' => '2022-07-30 08:15:43'
            ),

            array(
                'id' => '827',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rinaldijenggo',
                'username' => 'rinaldi',
                'email' => 'rinaldijenggo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$08eWOHDe6wIozt7b.Atnvex.i8F3ZPWON4ZO909t90A71SpCtQwrG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-30 08:17:23',
                'updated_at' => '2022-07-30 08:17:23'
            ),

            array(
                'id' => '828',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nabila',
                'username' => 'nabila',
                'email' => 'narizka98@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bkOfCT3SgbCyctOBs8TlT.smp7yLXCRXIgfViQrua5KGsTxOAwF7C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-30 20:03:44',
                'updated_at' => '2022-07-30 20:03:44'
            ),

            array(
                'id' => '829',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'veronica caroline',
                'username' => 'veronica caroline',
                'email' => 'veronicacaroline198@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$elW5p/m0LqTBqc9sDRCiWOC.bPLzPvAxqoOr/azkhC10aD8C8t8oi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-31 00:45:47',
                'updated_at' => '2022-07-31 00:45:47'
            ),

            array(
                'id' => '830',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yongki wahyudi',
                'username' => 'yongki',
                'email' => 'yongkiwahyudi007@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hbNkuzTIsWXahpR/jNF4YujsJJZn.IUgX1VWvO2eJsCFFOG4WImLO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-31 01:45:48',
                'updated_at' => '2022-07-31 01:45:48'
            ),

            array(
                'id' => '831',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'maya yunita',
                'username' => 'maya',
                'email' => 'Maya.yunita1906@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ev9e.ClAzJc5wQIfmC2wSeEPZUCUslJ02c87coK/BFW.l1nkiH4NO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-07-31 02:07:52',
                'updated_at' => '2022-07-31 02:07:52'
            ),

            array(
                'id' => '832',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Praja',
                'username' => 'Pradja',
                'email' => 'pradjatirta14amarta@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XK.YA8xJrIYJp81h8Ftpeucodpvmn7KUm6BeRDksrMgP/AyXNPImC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-01 04:42:13',
                'updated_at' => '2022-08-30 04:43:37'
            ),

            array(
                'id' => '833',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mycle simamora',
                'username' => 'catApult',
                'email' => 'myclegunawan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XvlvIEW8Iw2b1Q0HppFV/eKFQRLKkfqDjaHiHvIsYI5oc/vrdax8q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-01 07:18:12',
                'updated_at' => '2022-08-01 07:18:12'
            ),

            array(
                'id' => '834',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'setiady gunawan',
                'username' => 'setiady gunawan',
                'email' => 'setiady1888@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$N12o853E.RzBSTSMOQafk.AmGehoawDL0kAbxevEm98UXRZzlMom2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-01 08:05:29',
                'updated_at' => '2022-08-01 08:05:29'
            ),

            array(
                'id' => '835',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Wangsa Waruna',
                'username' => 'Alzast',
                'email' => 'lordalzast@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$J9gYOq5OI2rLGI46lJSL/e75G6V3xZd6s6MtDc5O7IONUjdRoygjm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-01 18:40:46',
                'updated_at' => '2022-08-01 18:40:46'
            ),

            array(
                'id' => '836',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Ridho Daffa Alfachry',
                'username' => 'RidhoDaffa',
                'email' => 'ridho.alfachry@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yXdS4xckdFCpbiHS5qqB1Oj5vVT3rYjue4NK1J15.hklrebwnSNkm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-01 19:42:18',
                'updated_at' => '2022-08-01 19:43:47'
            ),

            array(
                'id' => '837',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mustikawati',
                'username' => 'mustika',
                'email' => 'mustikawati.14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wrN5Zy2PB5RVDx5GmekrieEJQDL0XVbYlxecBvM/aL1kh26YVeCNS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-01 19:49:01',
                'updated_at' => '2022-08-01 19:49:01'
            ),

            array(
                'id' => '838',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Riyan Dwi Saputra',
                'username' => 'iyannone13',
                'email' => 'riyandwisyaputra@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gTF19IE21pMy3YZiPWon1ONKiEwqyFzl0i3yAmlFInfMk/fTSsmvS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-01 20:04:47',
                'updated_at' => '2022-08-01 20:04:47'
            ),

            array(
                'id' => '839',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Chelsea Wijaya',
                'username' => 'chelseawjy',
                'email' => 'chelsea.wijayax@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cauwZp/3fzFoaA3wxs8O3uGwljAN2yfq6vyeNbA90dym016IUu.my',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-02 00:25:45',
                'updated_at' => '2022-08-02 00:25:45'
            ),

            array(
                'id' => '840',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Linda Christanti',
                'username' => 'overbeauties',
                'email' => 'lupanamaku2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U3kXKI4RsbDz0DOHoFtk2OYlofPkA5xsRf6576Squ83siVLvV3lKi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-02 10:07:01',
                'updated_at' => '2022-08-02 10:07:01'
            ),

            array(
                'id' => '841',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ristha Febrianti',
                'username' => 'tita.RF',
                'email' => 'tita.febrianti.tf@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ufdekJBb2R.mBdlZbM/9OuO5hkZWlg20jmKLv/uPSGYFK8SCjTv3a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-02 14:43:20',
                'updated_at' => '2022-08-02 14:45:06'
            ),

            array(
                'id' => '842',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arya pradiga',
                'username' => 'arya pradiga',
                'email' => 'arya.pradiga@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KP5ZLZva.zvCDOOyru208e7e1S1lBZDQhC3Awi5A8PcCIoiEyuMqW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-03 01:37:27',
                'updated_at' => '2022-08-03 01:37:27'
            ),

            array(
                'id' => '843',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rizky Januaryansyah',
                'username' => 'Rizky.Jr',
                'email' => 'rizky.jr7192@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pP8us.VSNOclgC2sjnDECuzvAe/3JJR3WP7xvFvCgnKtXqVJK.MhO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-03 04:20:55',
                'updated_at' => '2022-08-03 04:20:55'
            ),

            array(
                'id' => '844',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yudimeiliono.',
                'username' => 'yudi4321',
                'email' => 'yudimeiliono086@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Jo2omvQWlVoVMYOPiUTxFefsjanC/Y6sQyVrmUzyC5tut.JwCW5DO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-03 04:53:06',
                'updated_at' => '2022-08-03 04:53:06'
            ),

            array(
                'id' => '845',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'meidik hafsal',
                'username' => 'meidik006',
                'email' => 'meidikhafsal7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$w4rpwtd0SpuOVb/69mJ2jOUJd5j/z.oTbK8jaEVLVeGetfGssV3Ae',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-05 03:02:47',
                'updated_at' => '2022-08-05 03:02:47'
            ),

            array(
                'id' => '846',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'darmawan',
                'username' => 'mwputra',
                'email' => 'mwn.saputra88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qvPUuie0OqMm8yETIJlZGu46LfasIdhoD8MURIKeubWgrt7Ttrnfm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-06 00:15:20',
                'updated_at' => '2022-08-06 00:15:20'
            ),

            array(
                'id' => '849',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'gilberto',
                'username' => 'gilberto',
                'email' => 'abetlo021@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ACRbEhAur7ePLVCVkwDDS.Yn4b9m8fjYSAhJMwlF8iK67cQLDkqGq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-06 02:03:26',
                'updated_at' => '2022-08-06 02:03:26'
            ),

            array(
                'id' => '850',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'feri febriansyah',
                'username' => 'feri',
                'email' => 'aranzatathyadharaka@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eyqBT44BajMUpzS4UGzUbuZiWcV7ycBkWemCkdRcuy/2Kr8PAzBqW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-08 09:26:11',
                'updated_at' => '2022-08-08 09:26:11'
            ),

            array(
                'id' => '851',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'chrisdyanto lumban batu',
                'username' => 'chris',
                'email' => 'chrismarbunlb@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$D4gUECjfpngGu6QnPupAAuzAVm9mosA1WOicQNHzrclgUMLQ.xz0G',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 00:28:19',
                'updated_at' => '2022-08-09 01:04:19'
            ),

            array(
                'id' => '852',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad',
                'username' => 'Iqbal',
                'email' => 'anolanol104@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DQIk7c74oBY2gA6XYVm/aO.qrRLJ7OQXT74lfru.zfRmBIfjIVcem',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 00:29:00',
                'updated_at' => '2022-08-09 00:29:00'
            ),

            array(
                'id' => '854',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ahmad Rizky Pratama',
                'username' => 'Rizkypratama',
                'email' => 'rizkypratama3605@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yeCamkOfOamWCqHMkVQZpeNbzk7OLtIxH9Nn8EJ1M3Mhq1dUt6GbS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 00:30:22',
                'updated_at' => '2022-08-09 01:04:28'
            ),

            array(
                'id' => '855',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Agustin Sinta Pratiwi',
                'username' => 'Agustinsinta',
                'email' => 'agustinsinta08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bFxnZd/AYAtidkHXtUN/4.GSUXrlZgQOkx3DIUB8NXa1WqmQ5nNLi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 01:00:45',
                'updated_at' => '2022-08-09 01:01:51'
            ),

            array(
                'id' => '856',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Fahmi',
                'username' => 'Fahmi',
                'email' => 'fahmijacx@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TJVm5S6am/L7Mj7/5UMZ3uiNYjwPuQrqsNb.14fMJMokU4XojY4aC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 01:01:44',
                'updated_at' => '2022-08-10 09:47:21'
            ),

            array(
                'id' => '857',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Eva',
                'username' => 'Eva sinaga',
                'email' => 'evasinaga@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$h/5517HT2K4Nu01q/cTwlu5PIRM7e/P.VYhQHv08GEhukK8VKjVhK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 01:01:48',
                'updated_at' => '2022-08-09 01:01:48'
            ),

            array(
                'id' => '858',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Eva Sinaga',
                'username' => 'Eva Sinaga',
                'email' => 'evasinagaeva@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JrUZOgamzSOiOt/4n6aKRePEXy6DGIcsSmnoL/Uxf1gRIzYLPE9E6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 01:03:11',
                'updated_at' => '2022-08-09 01:03:11'
            ),

            array(
                'id' => '859',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Raqif Adam Fahrezi',
                'username' => 'Raqif Adam',
                'email' => 'fahreziraqif@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SJf3aQDbbgJm7AADoD8cuedaCnShDORZprD/Zx4TrJ7ajFElkAWV6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-09 01:07:28',
                'updated_at' => '2022-08-09 01:07:28'
            ),

            array(
                'id' => '861',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'david octavianto',
                'username' => 'davidoctavianto',
                'email' => 't.davidoctavianto@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3RWuXBSsy5Lo3iX3ihOQsup.5j70lHOYyqHrJhgpSz4UyRoYfbx1O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-10 02:42:35',
                'updated_at' => '2022-08-10 02:42:35'
            ),

            array(
                'id' => '862',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Letysia Page',
                'username' => 'letysiapage',
                'email' => 'pagelety72@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wqQ5x.88hNvo2a8J71azC.umjyz6jpasLLt4ftovD1tuzaRzzBe9O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-10 04:11:18',
                'updated_at' => '2022-08-10 22:23:43'
            ),

            array(
                'id' => '863',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'aldi',
                'username' => 'aldi',
                'email' => 'knighthenry90@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TZyacit3NrxYYi90TpqUEO4RXlI01lPyTh8JoA9e7EmIUczAackEC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-11 10:15:27',
                'updated_at' => '2022-08-11 10:15:27'
            ),

            array(
                'id' => '864',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hermansyah',
                'username' => 'dudung',
                'email' => 'mantul393901@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NtR5Q5bwi0eGCiV9ZvZoauayJyvV050E9az8PgU1zZvxpbTi4Itkq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-13 21:14:23',
                'updated_at' => '2022-08-13 21:14:23'
            ),

            array(
                'id' => '865',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammad',
                'username' => 'umar',
                'email' => 'umaralfaro436@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tf0ZhYZqJlwqsY/wXw4b7ulTu17COpK0bG8yT9N/.MH08zPefoINq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-14 01:18:54',
                'updated_at' => '2022-08-14 01:21:39'
            ),

            array(
                'id' => '866',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alfon',
                'username' => 'alfon1',
                'email' => 'alfond94@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$48um7GUGgYtzBG5LeFyrtecLpERuC0.HEz45lIuQmd7RvH9TDnCou',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-15 01:55:37',
                'updated_at' => '2022-08-15 01:55:37'
            ),

            array(
                'id' => '867',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nanda Kartika',
                'username' => 'Kartika11',
                'email' => 'nandakartika311@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d/pjOIESpo2ZZp05VFd69um9YF2Sgcdzp3mq6DhKi2NJc9bVPFzQa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-15 12:23:28',
                'updated_at' => '2022-08-15 12:26:37'
            ),

            array(
                'id' => '868',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'faeyza',
                'username' => 'faeyza',
                'email' => 'faries586@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1.cxzuG/h9lqxg8J6UJMYeBQSunXbVmQMysMTncT8yjeh0KDsrf/a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-16 00:42:52',
                'updated_at' => '2022-08-16 00:42:52'
            ),

            array(
                'id' => '869',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'maryanto',
                'username' => 'maryanto',
                'email' => 'maryantomj02@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$V8sw2Z.fG7J27GkFooi2SOKrEleNw9RpAQtvIr1pQ0LOdN4MaaZTm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-16 01:41:53',
                'updated_at' => '2022-08-16 01:41:53'
            ),

            array(
                'id' => '870',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hanny .M. Putri',
                'username' => 'Hannymartika',
                'email' => 'hannymartika.p@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kuW45Lh.ZaEkdZrkr1.pGeFfTz5mW6yWKpPSplBAB/5RWIGz/Kvym',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-16 09:52:16',
                'updated_at' => '2022-08-16 09:52:16'
            ),

            array(
                'id' => '871',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syarifmuhammadreza',
                'username' => 'Reza',
                'email' => 'sy.m.reza92@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OonYgRVMzlOcvQcvmx1CNuzqvSI7iOT0bKGmWISIqpkxfLURRaocC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-17 03:31:10',
                'updated_at' => '2022-08-17 03:31:10'
            ),

            array(
                'id' => '872',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'budi',
                'username' => 'stephenbudianto',
                'email' => 'cmikalimantan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$21Y7HmhN74eOYai.VoE1EeQATn/bgX1asei/smtZV8h8gtGa/x9Hy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-19 05:01:11',
                'updated_at' => '2022-08-19 05:01:11'
            ),

            array(
                'id' => '873',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Lionar Frendi',
                'username' => 'lionar',
                'email' => 'lionarfrendi12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FED4042ZvGDcN1w1MuXUJe5INjgnbFfR..7QCoqpWdHTI2FR4EfTG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-20 01:13:35',
                'updated_at' => '2022-08-20 01:13:35'
            ),

            array(
                'id' => '874',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Putri handayani',
                'username' => 'putri',
                'email' => 'handayani270621@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YqigNXaaNHm1ZFDT6m1IWuL5Y1sP.k6vCg3U8EkwFoJYfB/SUmT92',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-20 02:06:10',
                'updated_at' => '2022-08-20 02:06:10'
            ),

            array(
                'id' => '875',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hanafi',
                'username' => 'hanafi',
                'email' => 'hanafimuhammad712@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/jVrTMs80AoUwoRKYJhXbux8EoQAqW7EMFf8tnGDEC1da7q6TXzdq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-20 03:04:24',
                'updated_at' => '2022-08-20 03:04:24'
            ),

            array(
                'id' => '880',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'vivi novianti',
                'username' => 'vie18',
                'email' => 'vie.novianti18@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KPFo3koYtj7rgNkOfZRave1j.KZfllbPiEvjNzRIvQpqL/gnc0Dge',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-21 05:52:12',
                'updated_at' => '2022-08-21 05:52:12'
            ),

            array(
                'id' => '881',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'kristi',
                'username' => 'kristi',
                'email' => 'yubatkristoforua07@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5VbkIQANf8CbcGepdK0vW.rq1oKuUxevTDdpdP4cjzKVCTL5Ds9CO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-21 12:00:41',
                'updated_at' => '2022-08-21 12:00:41'
            ),

            array(
                'id' => '882',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fitra ardiyatna',
                'username' => 'fitra',
                'email' => 'buyungboy95@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BlvzSN98UiiZ636.5IcISeuQGgMkPHlhKXPEAzwuEbg00W587ZeGa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-21 19:40:55',
                'updated_at' => '2022-08-21 19:40:55'
            ),

            array(
                'id' => '883',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'eries prisasmito',
                'username' => 'eries',
                'email' => 'prisasmitoeries@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$k2ZPOrt1uLTYh0afYJv8p.qDvFYvRXNKKV5zxmiEfsh0Mv4f3zZSu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-21 19:48:20',
                'updated_at' => '2022-08-21 19:48:20'
            ),

            array(
                'id' => '884',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'HERU HADI SAPUTRO',
                'username' => 'hrhdsptr182',
                'email' => 'heruhadisaputro182@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IIsusQJBqAxs2CXteTSWcevMN2HrI1zxCYDYTnji.SHE8EJ4/9loq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-21 21:15:35',
                'updated_at' => '2022-08-21 21:15:35'
            ),

            array(
                'id' => '885',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'firman apriansyah',
                'username' => 'firman26',
                'email' => 'firmanapriansyah26@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9XNbBSssLLyFyna3fkC8SucjKMrqt1O2dMwcogVuqvp1DYLCkQwtG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-21 22:47:43',
                'updated_at' => '2022-08-21 22:47:43'
            ),

            array(
                'id' => '886',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'LR Transport',
                'username' => 'lrtrans96',
                'email' => 'lrtransport7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KOi.c6OIUIVR/UVY3gIeNOyaysPiunr2NC1w9wP8sxpYXRMnxi.Aa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-22 00:46:11',
                'updated_at' => '2022-08-22 00:46:11'
            ),

            array(
                'id' => '887',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'udin',
                'username' => 'udiinn',
                'email' => 'udinn@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l3LyB6NZFIuUMnwCr3pKp.PHtI/9cwuPd4tgueys2OWTcbLN7QrFm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-22 02:42:40',
                'updated_at' => '2022-08-22 02:42:40'
            ),

            array(
                'id' => '888',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nasrullah',
                'username' => 'nasroell_',
                'email' => 'nasroelll17@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FFjvevF1nYYIlN.giQ4HjehbQzQMgwf.XZB4eHOUtVRfD1naepH3q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-23 13:54:21',
                'updated_at' => '2022-08-23 13:54:21'
            ),

            array(
                'id' => '889',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rexy',
                'username' => 'rexy',
                'email' => 'adrianusrexy51@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qSbTrjkHE4I.D3ga5x5Ewe.5NEFZCrmF5R/oJtZRPnQDxcxkC0eV6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-23 21:23:03',
                'updated_at' => '2022-08-23 21:23:03'
            ),

            array(
                'id' => '890',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Christian Eko Febriatno',
                'username' => 'cekof0295',
                'email' => 'cekofebriatno@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/CmPXHBnOhHnMGj.IZqaXOcScPTDVzkFZd1iFmXyxSKIru8vD.7cK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-24 21:59:43',
                'updated_at' => '2022-08-24 21:59:43'
            ),

            array(
                'id' => '891',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Tika Eliana',
                'username' => 'Tika',
                'email' => 'erwinendha15@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ddz/ZNIh8FxpvA1sb8/jZeBwG.4Zce8.NZjfvBFFGiO31MbxUIMDC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-25 07:41:14',
                'updated_at' => '2022-08-25 07:41:14'
            ),

            array(
                'id' => '892',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rangga',
                'username' => 'ranggarians',
                'email' => 'ranggadeseverians@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iHgNEL2W8dyBrP0BRGGLeeCLeMDX9i0rFxeRINALbUDsTxrquWCQW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-26 18:33:55',
                'updated_at' => '2022-08-26 18:33:55'
            ),

            array(
                'id' => '893',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ikyy',
                'username' => 'ikyylesmana',
                'email' => 'ikyylesmana@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NoB9eimB4.WZUbAQ93Tlv.7PvqG1EPDzuPgkz7IDJNg1IBfqpI4J.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-27 00:04:05',
                'updated_at' => '2022-08-27 00:04:05'
            ),

            array(
                'id' => '894',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'septhary yunidha',
                'username' => 'thary',
                'email' => 'septhary@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/AMeuCUnfraAlQqwMrWnhevVQHtr47vd9QUYWF.qAAfBl/TG.MsMy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-27 07:53:13',
                'updated_at' => '2022-08-27 07:53:13'
            ),

            array(
                'id' => '895',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Bobby Aria',
                'username' => 'aryoobby',
                'email' => 'aryoobby69@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fw2RT4O5noaGevXKwXHnz.G.J6oNCy.MJ1azEF7lvvffS7XKfhWxa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-27 20:19:06',
                'updated_at' => '2022-08-27 20:19:06'
            ),

            array(
                'id' => '896',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'aryodhi',
                'username' => 'aryo20',
                'email' => 'didyreza20@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R8d7ice4H9OGVVFqJiAjp.Pz/pt28vQn9nGeg2utX23D4WRTNUrdW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-28 04:27:55',
                'updated_at' => '2022-08-28 04:27:55'
            ),

            array(
                'id' => '897',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'MUHAMMAD AQMAL HATI SERAGI',
                'username' => 'Aqmal123',
                'email' => 'hatiseragi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JS1OvQCQbIbgd332MYWl/uD/VsxXH5mbgm4iD3r7Z/v/8mIrzi0Hy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-29 03:40:29',
                'updated_at' => '2022-08-29 03:43:23'
            ),

            array(
                'id' => '898',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Riwanda',
                'username' => 'Riwanda',
                'email' => 'moycumoy@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TDw61ul5SYAFVKkCbIO4MODjZYikZBdjIX2i7gdo.2s9hqBTlt4Gy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-30 00:49:53',
                'updated_at' => '2022-08-30 00:49:53'
            ),

            array(
                'id' => '899',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Habib Abdullah',
                'username' => 'habiebzone',
                'email' => 'z@habieb.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qlsOQ7wiTND9U/.zMGuPu.5EVOqEnNA.RLRXNfkmYbU5SNNuIque6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-30 03:54:16',
                'updated_at' => '2022-08-30 03:54:16'
            ),

            array(
                'id' => '900',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Pak Hariku',
                'username' => 'pakhariku',
                'email' => 'harikurniawan12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$grr8FEpgzAKiK.gpPPnU6.XE1SkBJv.H1uKF1MTZnAikf6/HhNXr6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-30 04:44:52',
                'updated_at' => '2022-08-30 04:44:52'
            ),

            array(
                'id' => '904',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tribunal coolb',
                'username' => 'Tribunal16',
                'email' => 'coolb6867@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pPiJuteVTDtEULDTeajn0eD/nA/asNqse6MS3lc6YIv5.wgzalNx2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-31 00:30:43',
                'updated_at' => '2022-08-31 00:30:43'
            ),

            array(
                'id' => '905',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ledi',
                'username' => 'searez',
                'email' => 'afun.adi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s1v3qLLJmzVTlzGl7MhCGOFenHz1lcPLilFAd3CABPUOo2edNOyWi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-31 02:41:01',
                'updated_at' => '2022-08-31 02:41:01'
            ),

            array(
                'id' => '906',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Irgi Virgiansyah',
                'username' => 'irgivirgiansyah',
                'email' => 'elvirgiansyah11@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$at1tnZFRChLD5OvAPi6AyeqX.Nl2/VbUjycBPbggAcAfdpHBrfs1q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-08-31 14:23:15',
                'updated_at' => '2022-08-31 14:23:56'
            ),

            array(
                'id' => '907',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhamad jubri',
                'username' => 'jubri',
                'email' => 'muhamadjubri15@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$u8t9zKPPliRCttGUG6xso.sz4..pgTFVHsQgbzRHgwQVAERT7PkvG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-01 04:25:50',
                'updated_at' => '2022-09-01 04:25:50'
            ),

            array(
                'id' => '908',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sri Wahyuniarti',
                'username' => 'uniusman',
                'email' => 'wahyuniartis@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0/ufFWWdMPcUzNSlcEvHGeEsynV0WgL4dElEKfA6P.S0q4l2Gfc5a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-02 10:04:41',
                'updated_at' => '2022-09-02 10:06:02'
            ),

            array(
                'id' => '909',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'satria',
                'username' => 'satsat',
                'email' => 'satsat1208@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xUaLMfY2vtOv5OeIhISn8Oz3gxHYoQudrhZoER2mKzZswLpqAXFnu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-06 18:04:06',
                'updated_at' => '2022-09-06 18:04:06'
            ),

            array(
                'id' => '911',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Binar Bintari Athala',
                'username' => 'Bibinathala',
                'email' => 'bibinathala@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$alie.TAmQrNbl09n.JJTu.7uNP4eN1ZwNhp1nr7hPo3JUuoDkUD5W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-06 20:29:18',
                'updated_at' => '2022-09-06 20:29:18'
            ),

            array(
                'id' => '912',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hariadi',
                'username' => 'adi',
                'email' => 'haria747@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fvIustkWUE9qEC5dLKCplOoopB86J3t.OmnoVOAFddcmwMF/pxTAu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-07 03:56:22',
                'updated_at' => '2022-09-07 03:56:22'
            ),

            array(
                'id' => '913',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Petrin Familia Dea',
                'username' => 'Petrin Familia Dea',
                'email' => 'bbtestvivodigi855@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5OPphS1H2iiQuYTV.pZ2/eYrF/dHsISULvI0CGPcyGaAkDFdBxNFe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-07 20:28:21',
                'updated_at' => '2023-03-24 03:50:55'
            ),

            array(
                'id' => '914',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Donny Iswara',
                'username' => 'Pak Lang',
                'email' => 'donnyiswara@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.Oja3UQvKoFTNehyIjVphO7Ca4hjw4pAsteCNGL1d8jHIUfGZxAlC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-07 23:39:42',
                'updated_at' => '2022-09-07 23:41:06'
            ),

            array(
                'id' => '915',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'andri',
                'username' => 'dede',
                'email' => 'dedspeed8@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6PGINlA/RtMCyTiIEHqo.eM8Q6V2BrognI8zv2rUl4RDOkACisebK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-08 00:30:45',
                'updated_at' => '2022-09-08 00:30:45'
            ),

            array(
                'id' => '916',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ari',
                'username' => 'Hadari',
                'email' => 'mhadari47@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K7YBXY7/4Q/v3LRsq0i5W.pba4oFY4d42y97M1XCi/35bX74tjTVC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-08 04:09:38',
                'updated_at' => '2022-09-08 04:09:38'
            ),

            array(
                'id' => '917',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Chintya Ulfa Hidayah',
                'username' => 'chintya03',
                'email' => 'chintya2016akbar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BmQveYmtEmr2qhUOqYKNFe4N7EswYP25PX/abHxp/RVdSpDV2cl3W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-10 16:00:02',
                'updated_at' => '2022-09-10 16:00:02'
            ),

            array(
                'id' => '918',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Herra',
                'username' => 'herrananda_',
                'email' => 'herranandadesherrya@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ez6U6tweinYFOSLRMJysOOw5rV4/bhsHvU9awYYPiDP5YETWwV/R6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-10 18:54:57',
                'updated_at' => '2022-09-10 18:59:09'
            ),

            array(
                'id' => '919',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Duwi Yuliyanti',
                'username' => 'duwiyuliyantii',
                'email' => 'duwiyuliyanti.dy@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BmMQC6jA.eQT.9yEdAKwlOdFz6/UXU9guNvCnRLZnknftEhv1UvvK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-10 18:58:43',
                'updated_at' => '2022-09-10 18:58:43'
            ),

            array(
                'id' => '920',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Fikri Zhalifunnas',
                'username' => 'firzha14',
                'email' => 'fikrizhalifunnas14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ghILs3eNDRqpRsEejXCdTOgrzPMlLFZb0cYPmgiv46CXkSjFT/Kxu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-10 19:32:14',
                'updated_at' => '2022-09-10 19:32:14'
            ),

            array(
                'id' => '921',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hanna Angelica',
                'username' => 'hanna_anp',
                'email' => 'angelica.hanna1286@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$v1AOvC5Uh9ZTEg6Hi9q0/e7EAdi2F/otD3yIqMst83HhwqhMVhITq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-10 19:48:27',
                'updated_at' => '2022-09-10 19:48:27'
            ),

            array(
                'id' => '922',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'felda putri',
                'username' => 'felda',
                'email' => 'fldaptriaurellia25@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Dvll6eI4hsBOIOrirMwMSup2MbaEKMSlZdgDyNf2bsC94wfjoXVfS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-10 20:11:25',
                'updated_at' => '2022-09-10 20:11:25'
            ),

            array(
                'id' => '923',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ara ara',
                'username' => 'araa',
                'email' => 'rismaayaa89@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mceQsmKtvfeZ8iM/7hIUFuC.onHP2ikeDx2MBs4t7u5pi7yv4Kjtq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-10 22:02:08',
                'updated_at' => '2022-09-10 22:02:08'
            ),

            array(
                'id' => '925',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nisa Maulidia',
                'username' => 'nisa_',
                'email' => 'paristriangle06@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9jIofb/1.ztPZpxaer63kuBAk0sDlE1VD7kMIpohkDeNZKxWqI.om',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-11 07:35:35',
                'updated_at' => '2022-09-11 07:35:35'
            ),

            array(
                'id' => '926',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sari despin',
                'username' => 'despin',
                'email' => 'nnayla829@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZKPh88CchhfJy/xrGHI4ue2g0SETV0KkkD1wdhdctdnOG/AOUfKLi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-11 09:00:32',
                'updated_at' => '2022-09-11 09:00:32'
            ),

            array(
                'id' => '927',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dinda ayudia',
                'username' => 'dindaay__',
                'email' => 'dindaayu27@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8b1ILRPe4AWDkw6Vl/bBtuvmhbND4N3RaLbY1v54gDS2ogn5yckgW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-11 11:55:40',
                'updated_at' => '2022-09-11 11:55:40'
            ),

            array(
                'id' => '928',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ardiansyah',
                'username' => 'rsyahh.arr',
                'email' => 'ardiansyahmia165@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dX7ypYnMsXmKEEyzmLr6seLDHbNRkR1j4IdGTyECIwM8nsU5YEV.a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-11 15:00:51',
                'updated_at' => '2022-09-11 15:01:35'
            ),

            array(
                'id' => '929',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dimas Bayu Prasetya',
                'username' => 'dimasbayu',
                'email' => 'dimasbayu004@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dkQBoQaU7NDksTcnyQNFkept6njpDThjLcQ/DUkvf0D1iFkkVTdu.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-11 20:10:26',
                'updated_at' => '2022-09-11 20:10:26'
            ),

            array(
                'id' => '930',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nugi',
                'username' => 'vk_87',
                'email' => 'nugrahapatriawan9999@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$K8A9yHEQQ66zOT38OyECfepgen1JM49hkI5RFfeb3ZoG7pwJ5U.zS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-12 00:30:31',
                'updated_at' => '2022-09-12 00:30:31'
            ),

            array(
                'id' => '931',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'khoiril septian',
                'username' => 'irilsptn..',
                'email' => 'khoirilseptian30@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Kf0TLGZyS40DPOHco36H6uc.QmkSC4MnNANy0Tkpy/7xFN87vZ7mK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-12 05:41:51',
                'updated_at' => '2022-09-12 05:41:51'
            ),

            array(
                'id' => '932',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'farchan',
                'username' => 'farchan',
                'email' => 'frhnglhstyji@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P4oD7l8vmmLy35Gdnfij6O6Pf0uQF5kvailR.7jtURktgyiIb6N3m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-12 10:39:55',
                'updated_at' => '2022-09-12 10:39:55'
            ),

            array(
                'id' => '933',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'kamarul ihsan',
                'username' => 'icann13',
                'email' => 'kamarulihsan0@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8uXH4Jm7F1Ldp5HtyfLBYOIGpXa0Oit22b/BFyX2XBdpm0ZXgUpwa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-12 11:34:52',
                'updated_at' => '2022-09-12 11:34:52'
            ),

            array(
                'id' => '934',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'kevin',
                'username' => 'kepinnn',
                'email' => 'kepin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eAkZqcuW.gSuc/56JIW6iOd7NmYkBBe1asMrJaCZFI1MKweyRs1BW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-12 23:31:35',
                'updated_at' => '2022-09-12 23:31:35'
            ),

            array(
                'id' => '935',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'riski',
                'username' => 'riski',
                'email' => 'riskienth@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0bG99zDWWdq0wTZtVN9.juK3nPfoz0CtRd6y9w9OhE9Wl33JJ7M/m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-13 00:58:14',
                'updated_at' => '2022-09-13 00:58:14'
            ),

            array(
                'id' => '936',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hendi',
                'username' => 'dhay99',
                'email' => 'hendi.minarto@outlook.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$N0sb1cPdjS.lxfD8kv/W5eOEO0Xf.D1lFc6nvjBRGn6T/NZQHK.my',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-13 01:54:02',
                'updated_at' => '2022-09-13 01:54:02'
            ),

            array(
                'id' => '937',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Jonathan Andika Dewanto',
                'username' => 'Jonathan',
                'email' => 'jonathandewanto@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DAsxnzi7uiZRwn.Pxri.z.knehHIa4vygboX0bw6gHPOzRNn1I/IK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-13 02:01:51',
                'updated_at' => '2022-09-13 02:01:51'
            ),

            array(
                'id' => '938',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Hairudin',
                'username' => 'Putra Bungsu',
                'email' => 'bungsuu13@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jc6/urV7JDuMTG4MAwdn0uI0PAY1Wuyt6/AJTb4oUeMbqTtP.2nTy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-13 04:06:04',
                'updated_at' => '2022-09-13 04:06:04'
            ),

            array(
                'id' => '939',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alfiyansyah',
                'username' => 'muhammadalpiansah',
                'email' => 'muhammadalpiansah617@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tW9zRUN0iqvLGs/OX7ZcXuvfWcXP4u.N2MOCebCJjYo11fGBK2hZy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-13 06:17:54',
                'updated_at' => '2022-09-13 06:17:54'
            ),

            array(
                'id' => '940',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Taufan Aulia Ramadhan',
                'username' => 'Taufan',
                'email' => 'taufan061221@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XRqKgX9iXbDsTdVregGBQOLOl7FGrm2iK8mHzfB99008I9/FnlLs6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-13 07:57:52',
                'updated_at' => '2022-09-13 07:57:52'
            ),

            array(
                'id' => '941',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dodi lesmana',
                'username' => 'dodilesmanaa',
                'email' => 'dlesmana3300@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wzj2YeMx8CfB8ULtozETO.lQmRwOrxg1dUFTAl3UXMz2bIeC8phTq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-14 03:01:32',
                'updated_at' => '2022-09-14 03:01:32'
            ),

            array(
                'id' => '942',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Bams',
                'username' => 'bamsse60@gmail.com',
                'email' => 'bamsse60@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$j4LdNNpmMt1C.hweNk0wmuBnLvOM9zZSWM4UqHL23fte4CuD7KjZm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-15 08:11:47',
                'updated_at' => '2022-09-15 08:11:47'
            ),

            array(
                'id' => '943',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dafa',
                'username' => 'dafa44',
                'email' => 'dafa445577@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6WdW3dOJ/p5Z5F.CH2qqbuxg2D2elAmIPPjtPYWzgYHFb4.qztOAa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-15 10:05:07',
                'updated_at' => '2022-09-15 10:05:07'
            ),

            array(
                'id' => '944',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Emil Sibarani',
                'username' => 'emil',
                'email' => 'emil.leonardy85@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HCaCWnPI0AeAFOjYSZ6.qOBjoSJWepbWxNsuBWcVTsaTWUTIJMH0W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-15 16:36:24',
                'updated_at' => '2022-09-15 16:36:24'
            ),

            array(
                'id' => '945',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'peter',
                'username' => 'feyylly',
                'email' => 'petersiantanz@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dftqCwICNVq9FmMISl7fjuBrueMqODHsCxk7O.hfVtfcoemiXElVq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-16 08:59:33',
                'updated_at' => '2022-09-16 08:59:33'
            ),

            array(
                'id' => '946',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'regie',
                'username' => 'regie septiawan',
                'email' => 'cargo4611@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$w.FdKuQD9CG.NXTIT2xby.J1B0EnT93Q4QceNHLen35R8BPriqVoa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-21 02:16:59',
                'updated_at' => '2022-09-21 02:16:59'
            ),

            array(
                'id' => '947',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'samsul arifin',
                'username' => 'bangsul',
                'email' => 'samsularifin160101@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lQk6cr3jY2QYR9Me4dIhc.ZDw7ttfmpY/jFqbJTuMMTnhOkZ2UE72',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-21 06:24:23',
                'updated_at' => '2022-09-21 06:24:23'
            ),

            array(
                'id' => '948',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rizqi Muhammad Maulana Qodar',
                'username' => 'drizzlesf21',
                'email' => 'drizzlesf43@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UNOX5kafkX1DRcBPTXN8Gu8KiHNsbpvbHItbxivuu2BHBYlAJ2kE2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-09-21 19:16:19',
                'updated_at' => '2022-09-21 19:16:19'
            ),

            array(
                'id' => '949',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arul arul',
                'username' => 'arul123',
                'email' => 'arul@arul.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$W4tB/GDc5rEytxwoD26ooO6xicP6EqfbFBSO55YMRmfojw667To9K',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-11-22 06:09:50',
                'updated_at' => '2022-11-22 06:09:50'
            ),

            array(
                'id' => '950',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arul',
                'username' => 'asd',
                'email' => 'asdwad',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hsrxA4JI03y7uzuKZA1yWuFgsDd7I0hb7dU71kmSMBv06AVdOQPaq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-11-22 06:10:50',
                'updated_at' => '2022-11-22 06:10:50'
            ),

            array(
                'id' => '951',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammad reza ramadhan',
                'username' => 'bang reza',
                'email' => 'rezaramadhan019@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hwD8QQUIPe/xclSmMc/Qy.uzb0JL9p3LpJbztuHr9GG1AKXLplfqG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-11-23 18:40:47',
                'updated_at' => '2022-11-23 18:40:47'
            ),

            array(
                'id' => '952',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ade Alamsyah',
                'username' => 'ade0803',
                'email' => 'adealamsyah12.aa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$b6p2hIihPIEf6qYk00Jo3.pxgYHnjXCet0Wk5vVZ3epfIXqbU8.S6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-02 09:26:51',
                'updated_at' => '2022-12-02 09:26:51'
            ),

            array(
                'id' => '953',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'kuro',
                'username' => 'kuropoy',
                'email' => 'kuropoy3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xTvNtvguwsDA8aWKn8yX4OUOeqzbAmRYUdo8Y0ZJek2ermTUer/wq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-04 07:24:26',
                'updated_at' => '2022-12-04 07:24:26'
            ),

            array(
                'id' => '954',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hansen',
                'username' => 'Hansen903',
                'email' => 'hansenqwaaa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dpJ0EowA4yY0AQ4FW8LVxOALjbISEm/4gQvvhEwdpYIxJN9dIZ67e',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-05 09:39:11',
                'updated_at' => '2022-12-05 09:39:11'
            ),

            array(
                'id' => '955',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yongky wibowo',
                'username' => 'yongky',
                'email' => 'yongky.wibowo14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$B3sissGM5pM5GzQB.rHxfeaoSNn0X2p3qytm4i4AnXkIaCXlwTOfu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-07 09:13:42',
                'updated_at' => '2022-12-07 09:13:42'
            ),

            array(
                'id' => '956',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sukmawati',
                'username' => 'sukmawati',
                'email' => 'ginasukmawati80@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PeMImGYJSOV4GSddtjsxX.hs7d4qSLJIRiVVHi3pNCe0FQmPIkyHi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-07 09:24:46',
                'updated_at' => '2022-12-07 09:24:46'
            ),

            array(
                'id' => '957',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'putri nanda nurulia',
                'username' => 'putri nanda',
                'email' => 'putrinandaa02@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2GDSUYvXn11RQlCerMz/0O7hHUzWmfFvWehxoSbhkdRM7C3ztk1NK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-07 09:53:27',
                'updated_at' => '2022-12-07 09:53:27'
            ),

            array(
                'id' => '958',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fitriani',
                'username' => 'fitriani',
                'email' => 'fitrianiardillah@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$V3yUU9Js9x2lLtvgosO6ju38Z0Y1oixSfHjYwhLa5LIhRljZSO1aa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-07 11:07:21',
                'updated_at' => '2022-12-07 11:07:21'
            ),

            array(
                'id' => '959',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ibnun nizham',
                'username' => 'ibnun',
                'email' => 'nizhamibnu3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P/j51HpS6yGhwv7rkurEeerWeE5wt7Ha7me2CjH9STx9iE/pP6fQO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-08 03:04:55',
                'updated_at' => '2022-12-08 03:04:55'
            ),

            array(
                'id' => '963',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arie prima',
                'username' => 'palonk21',
                'email' => 'iklaninborneo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JejxHxKVcfkFLlo1FQx8Ru9m.uWKyAIrlUUeymZ0JOJoomi8z3ezW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-14 09:47:38',
                'updated_at' => '2022-12-14 09:47:38'
            ),

            array(
                'id' => '964',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'setiawan',
                'username' => 'setiawan',
                'email' => 'setiawan.butsure@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rlclflcIW7fXsR15GkivWOC0pAte6QwwYu5PadNuXv.SwlEIKKMre',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-17 07:39:47',
                'updated_at' => '2022-12-17 07:39:47'
            ),

            array(
                'id' => '965',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Zico ferry',
                'username' => 'Zico ferry',
                'email' => 'ferrypacik16@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NKxofhKtz9hRun0rlGnPpe75hoqmJb6DDRvWQHeSbJEuUCd8NEWLe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-17 13:35:41',
                'updated_at' => '2022-12-17 13:35:41'
            ),

            array(
                'id' => '966',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'robert kurniawan',
                'username' => 'stadium99',
                'email' => 'robertkurniawan67@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Jhx.r1z2cRm1H8Xa3XUE4OtJWAzVTxePYMBqLstxJ5JOjo5lz5iG.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-18 08:55:03',
                'updated_at' => '2022-12-18 08:55:03'
            ),

            array(
                'id' => '967',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'idink',
                'username' => 'idink1',
                'email' => 'idink005@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MX7ahA9z0PEcbwnn3Q8ZKecLIIOk3rRw03oRAsQN5/v1WHPemMReC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-19 06:21:21',
                'updated_at' => '2022-12-19 06:21:21'
            ),

            array(
                'id' => '968',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Wadiiah Nurfadhilah',
                'username' => 'nrf98',
                'email' => 'wadiiahnrf0908@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SHATDTHVUkI7i0xeepEYbu1vx6LOWzMpMmkb5bVb8vpZqFCajzFoa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-20 01:51:19',
                'updated_at' => '2022-12-20 01:51:19'
            ),

            array(
                'id' => '969',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Iqbal Fiqri Ramadhan',
                'username' => 'Iqbal',
                'email' => 'iqbalultraorb17@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3l8ag2yWiL6o3hJGdAG0p.2ldi/N6teGgJPy3mdxTnWFcP9yKyyi2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-20 01:51:40',
                'updated_at' => '2022-12-20 01:51:40'
            ),

            array(
                'id' => '970',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad harry',
                'username' => 'harry',
                'email' => 'muhammadharry1505@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OtbRHBTe354tzkb.FJVR1.rfOyuUACvdGwVD.Zlp1pom9bzQWnfJu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-27 07:16:38',
                'updated_at' => '2022-12-27 07:16:38'
            ),

            array(
                'id' => '971',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'natalis cris',
                'username' => 'nata999',
                'email' => 'nataliuscristian819@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kFchiU7wQ53wWeXLw7pCyOkYWejfwOTctCUsW577jiXJHNge7U0tO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-28 07:31:59',
                'updated_at' => '2022-12-28 07:31:59'
            ),

            array(
                'id' => '972',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'haris hasyari',
                'username' => 'haris',
                'email' => 'harishasyari@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$09531c9TXV5WvjHPCMASyOs1Tp9dWBnWkP2t4hCYfKZKIpdTIHsOK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-30 10:33:39',
                'updated_at' => '2022-12-30 10:33:39'
            ),

            array(
                'id' => '973',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'akiun',
                'username' => '@kiun',
                'email' => 'joeshua4u99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7MlcamRjWS4uQz3tDupBW.34E0mUoGmRTQD4.wrbA4rD51Gu0fG0.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-31 10:53:57',
                'updated_at' => '2022-12-31 10:53:57'
            ),

            array(
                'id' => '974',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'abdul kowi',
                'username' => 'abdul kowi',
                'email' => 'abdulqowi232@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$A6hvYVBxToRSQTO0Oj.bTea5pANMHEFw/BYcbKpP.ow/KjaqzPpk6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-12-31 11:54:18',
                'updated_at' => '2022-12-31 11:54:18'
            ),

            array(
                'id' => '975',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Kapuas Pratama',
                'username' => 'Willy777',
                'email' => 'kapuaspratama83@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NUoG22Tak9y3vdOGyb0XUOz.mSSdEh9o6wt6iCaR0ZssTTyRdyJw.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-01 02:39:11',
                'updated_at' => '2023-01-01 02:39:11'
            ),

            array(
                'id' => '976',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tirtasubarkah',
                'username' => 'trtasbrkh',
                'email' => 'tsubarkah01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SmV16ExMb18tyD/nt78Y3ug6aORc1za4U7SojwsSqr8s5NXKIUew2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-01 06:50:06',
                'updated_at' => '2023-01-01 06:50:06'
            ),

            array(
                'id' => '977',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'bos',
                'username' => 'besar',
                'email' => 'bejobosbesar1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JBeEW1kBmi/vCU5OmxHMi.j4HhoislZZD1mSOIDTuKUiCD/cce1XW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-03 09:54:31',
                'updated_at' => '2023-01-03 09:54:31'
            ),

            array(
                'id' => '978',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rizal',
                'username' => 'rizal',
                'email' => 'rizalmhrdika@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$J05AfpS/IHSP0myNyEtHJOqge8GuaUhmpGU8Db/mdVvhjQk.vhdVi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-05 04:08:20',
                'updated_at' => '2023-01-05 04:08:20'
            ),

            array(
                'id' => '979',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Budiarto',
                'username' => 'budiar2902',
                'email' => 'budiarto724@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pegIVYfGjJ6PZ09l7BYiheDkA/7DOQcUoxSBjME5IV5VG59Quby4S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-06 09:23:24',
                'updated_at' => '2023-01-06 09:25:57'
            ),

            array(
                'id' => '980',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Maisurivaldi Sigit Prasetio',
                'username' => 'sgtprasetio',
                'email' => 'valdisigit@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m08i1w6VNvlRtxUxp6WY8uhGoc58Sj3eCetqdSH0V9u7S70zovATS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-06 12:59:22',
                'updated_at' => '2023-01-06 12:59:22'
            ),

            array(
                'id' => '981',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Riski andriana',
                'username' => 'riski',
                'email' => 'sintya0303@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hFT6h52vBjStjD8ylBRQrO5G.Y8kVqPc5xYpl6cUILGkJ4/YNsdqu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-06 23:24:10',
                'updated_at' => '2023-01-06 23:24:10'
            ),

            array(
                'id' => '982',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dimas',
                'username' => 'dimas',
                'email' => 'victordimas251102@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QJGO12npCtY9gi5dQuUW7eEuH.VmszanNx/7W3vUIOC9bXhj7IQni',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-07 07:02:46',
                'updated_at' => '2023-01-07 07:02:46'
            ),

            array(
                'id' => '983',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rio Gunawan',
                'username' => 'riogunawan',
                'email' => 'riogunawan29@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$a7jnm5jjw222JQaPINdp2egcvi699vWK4v0F8rdRk6hoOkFynkTeO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-08 09:36:58',
                'updated_at' => '2023-01-08 09:37:48'
            ),

            array(
                'id' => '984',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hizki',
                'username' => 'alfredo',
                'email' => 'hiizkialfredo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QCsbo6pVkRZHUmRMUL93iell1qJ3AaK/ripJVQ0d9jm.dTf3KdKi2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-08 13:02:38',
                'updated_at' => '2023-01-08 13:02:38'
            ),

            array(
                'id' => '985',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mimo suryadi',
                'username' => 'mimosuryadi',
                'email' => 'mimo.suryadi93@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$O5yB/GHVyQwLQz3y7Zb.Ge1JpODqVQy4prWYwZD8ar5dzI.UTNzgG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-09 10:19:50',
                'updated_at' => '2023-01-09 10:19:50'
            ),

            array(
                'id' => '990',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'MIMO SURYADI',
                'username' => 'mimosuryadi',
                'email' => 'mimo.suryadi93@student.untan.ac.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$leQqbDESlhsj3DPAJv27j.windcOur5Bojl3ql2DZOdlfDYf2WTtq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-09 10:43:27',
                'updated_at' => '2023-01-09 10:43:27'
            ),

            array(
                'id' => '991',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'haikal paderi',
                'username' => 'haikal221',
                'email' => 'peshoki46@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ab0OQnt.5H35KCVBt2ljjudHvHjWc1YKISrDRQ5gSfc6MrR.45BlO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-10 10:11:59',
                'updated_at' => '2023-01-10 10:11:59'
            ),

            array(
                'id' => '992',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rendy',
                'username' => 'gunawan',
                'email' => 'oppopnk27@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dKbq7Ali66AQIDbcWMogvOqhQssAVHeiV7glp7ABg1K1t7yUdqx0u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-14 17:11:23',
                'updated_at' => '2023-01-14 17:11:23'
            ),

            array(
                'id' => '993',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syarif Muhammad Zein Almuthahar',
                'username' => 'Syarif Muhammad Zein',
                'email' => 'MuhammadZein@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rWpNr083oTtY0vmFn0HXEeQbMcIGwaelaAHurYeUVogXbf0NjNfF.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-14 17:17:36',
                'updated_at' => '2023-01-14 17:17:36'
            ),

            array(
                'id' => '994',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ica',
                'username' => 'icake.jpg',
                'email' => 'nrnnsarsy@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VdT20nS/89JqFl7nIK03UO4tp/UtP0p/U1ObilWFrXZC7FxD3Q.iC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-15 05:37:02',
                'updated_at' => '2023-01-15 05:37:02'
            ),

            array(
                'id' => '995',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Edy Gunawan',
                'username' => 'dygu99',
                'email' => 'afogunawan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9tfP01uosKnpftCuWY3PKuhTizzbwbLqb1le723rBEAFONTgWU1UC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-15 06:22:18',
                'updated_at' => '2023-01-15 06:22:18'
            ),

            array(
                'id' => '996',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jaki hasan',
                'username' => 'jack_hannn',
                'email' => 'zackymayky@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P7hrNpsLq1n04IGNs8P9i./xDCI2H.otoh9TLXad0P5vq7N1vEVjW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-15 08:15:57',
                'updated_at' => '2023-01-15 08:15:57'
            ),

            array(
                'id' => '997',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Milasari Andani',
                'username' => 'milafionne',
                'email' => 'milafionne@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YX9Hr/rc7bdw3MzsNkLdc.iCzV6lwBRdyRh8sjrroyBSHwACxngMS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-15 14:22:15',
                'updated_at' => '2023-01-15 14:22:15'
            ),

            array(
                'id' => '1003',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tri',
                'username' => 'twrdn',
                'email' => 'salmonavocaddo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qrcepmzYpROVP4QKTYvB3.FbvhddXS/.oxnGTy/fA3bLvI5MlzbOu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-15 18:22:44',
                'updated_at' => '2023-01-15 18:22:44'
            ),

            array(
                'id' => '1004',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'susanto',
                'username' => 'byanto93',
                'email' => 'tosusan13@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YK2f53qDLJa72tTO6ysaluT9n6ArU54Pso2.F/91XOM9Oa8udkKtK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-16 00:09:37',
                'updated_at' => '2023-01-16 00:09:37'
            ),

            array(
                'id' => '1005',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Irfan',
                'username' => 'irfan',
                'email' => 'irfan.mma99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YVutPh3/djGqXnI3/VSNXuQx7dMM0XRB8Y3WKIwcnt4ZIUNKD8TZm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-16 09:50:34',
                'updated_at' => '2023-01-16 09:50:34'
            ),

            array(
                'id' => '1006',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yus',
                'username' => 'Yus',
                'email' => 'yusdiqomarullah.12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tx6N2LjsMZAWz8rPdvybE.nd1f.b3jdlEBwP1HrqzjZnZtw3RaryK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-17 08:16:24',
                'updated_at' => '2023-01-17 08:16:24'
            ),

            array(
                'id' => '1007',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syahrul',
                'username' => '12345',
                'email' => 'syahrul_goleng3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YMK7mfK.fhsLe32gkuBwR.EtDP9V.GWwzC2lOoBSXwT.JK/Nfx2Xi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-18 03:31:31',
                'updated_at' => '2023-01-18 03:31:31'
            ),

            array(
                'id' => '1008',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syahrul',
                'username' => '12345',
                'email' => 'syahrulgoleng3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uvV5oax9EAi/v0ijdfOjI.3qItFDo4PQGzXI8W/Xbe9vsxcUmM1om',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-18 03:33:16',
                'updated_at' => '2023-01-18 03:33:16'
            ),

            array(
                'id' => '1009',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ity nur',
                'username' => 'fitrior',
                'email' => 'nurfitriading@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$rffq0/uUPKwWXTR6o1Ha9eXIcCmKUaVK33yyo7KNlvEd3HIZLlAEe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-18 16:32:48',
                'updated_at' => '2023-01-18 16:32:48'
            ),

            array(
                'id' => '1010',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dewita putri',
                'username' => 'xerabe',
                'email' => 'dwitaptri18@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UbY17TdWlhTejW81zfckgelqiEcNv8HQKtHVNo./O1fRHLRV5G/PK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-21 09:07:33',
                'updated_at' => '2023-01-21 09:07:33'
            ),

            array(
                'id' => '1011',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'DANNY',
                'username' => 'DANNYKUR1310',
                'email' => 'dannykurniawan600@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DjkarcmT0DXsN8aBbeY3deAqasq5Xv0esrGqg7ykP5cDC.uqNqcCa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-21 09:51:08',
                'updated_at' => '2023-01-21 09:51:08'
            ),

            array(
                'id' => '1012',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rudi',
                'username' => 'erhabe',
                'email' => 'erhabegaming16@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aVdhsdB/lTFxz0FAAIiTLutlJrEQpbTsZAqgTGvE5OvAdSUg0Vffe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-21 16:48:46',
                'updated_at' => '2023-01-21 16:48:46'
            ),

            array(
                'id' => '1013',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'meidik hafsal',
                'username' => 'meidik',
                'email' => 'meidikhafsal009@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$919/srocNyZYhHe1/LIKy.f5PCQVHXbIAUVjW.lJCeJ74YWJai1bq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-22 10:52:12',
                'updated_at' => '2023-01-22 10:52:12'
            ),

            array(
                'id' => '1014',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'seng te yeng',
                'username' => 'sengteyeng',
                'email' => 'sengteyeng@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iNnU.NZeDSMi.z7aWP3zMePe3WFfRq.0yx/sGs5At7B9mRZDW5qgi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-22 16:02:55',
                'updated_at' => '2023-01-22 16:02:55'
            ),

            array(
                'id' => '1015',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'suriansyah',
                'username' => 'iyanizal',
                'email' => 'iyanizal@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$g/paj3Zf5z3kzwg/eEk5t.jiXp3.myqzjgBjJmbFVj/y23.l8pipC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-23 09:40:04',
                'updated_at' => '2023-01-23 09:40:04'
            ),

            array(
                'id' => '1016',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'keynu putra ramadhan',
                'username' => 'keynu',
                'email' => 'adekkabbang27@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JQMuj.oj8TaERv.l3.xpo.mZRyJs9fya2tvgcHWq4bZtQ5lnhDI8.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-23 09:49:35',
                'updated_at' => '2023-01-23 09:49:35'
            ),

            array(
                'id' => '1021',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fahmi mural',
                'username' => 'fahmi',
                'email' => 'fahmimural10@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$05p3hTBmgXxB9sGZ.XObyeLeUM5bRcsX7J0EYXjewlVI.RUMUeMPW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-24 14:29:26',
                'updated_at' => '2023-01-24 14:29:26'
            ),

            array(
                'id' => '1022',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sonysanggau',
                'username' => 'sony',
                'email' => 'sonysanggau5@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LzLz8L.odXNjvh9gHah7l.v3v/Uw/N8pnFLJZHo.NwHgRd8SbQlqu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-24 14:31:58',
                'updated_at' => '2023-01-24 14:31:58'
            ),

            array(
                'id' => '1023',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rabil fazari',
                'username' => 'rabil12',
                'email' => 'rabilfazari12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.KdJ4DQP8dPu.YwsmQo8n.fodDfUFdL9DD87T/mn2vIq1RaRY4ize',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-26 02:27:34',
                'updated_at' => '2023-01-26 02:27:34'
            ),

            array(
                'id' => '1025',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nadhira',
                'username' => 'nadhiraal',
                'email' => 'skyforgazing@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lyOxkGAkXuGKUMkTDfdFPOa2qLFR1JmK8wBLl3FZgyBM.9xAeWYOq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-26 16:59:11',
                'updated_at' => '2023-01-26 16:59:11'
            ),

            array(
                'id' => '1026',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wawan',
                'username' => 'wawanted',
                'email' => 'wawangalaxi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pKkxBKDrbVqiQMa4kt6iVeSvFxSO4oQ.LOKnH4abdVlS2k9K9hSUO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-27 01:25:23',
                'updated_at' => '2023-01-27 01:25:23'
            ),

            array(
                'id' => '1027',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'roby',
                'username' => 'lilac',
                'email' => 'roby.lilac@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qszZw/ue/DSzuMtW5AuCUeUZKBrYT0Rdypoe1AEnSq/KWC9zcf9YC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-30 00:07:28',
                'updated_at' => '2023-01-30 00:07:28'
            ),

            array(
                'id' => '1028',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'septian rinaldi marpaung',
                'username' => 'tian999',
                'email' => 'septianrinaldimarpaung999@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DmjfRoRqvJCdCtdVNZmUCeaWtQlEHrlN8Xk.6iE.8Sq6Z9E9XGLi2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-30 09:17:06',
                'updated_at' => '2023-01-30 09:17:06'
            ),

            array(
                'id' => '1029',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'putra',
                'username' => 'whizzy',
                'email' => 'chaniputra3@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$..iqIzjCvSwjXEpgat/ZtebCX.grcwI9.zWUhwEsJUC0swYXjxF8C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-01-31 08:12:16',
                'updated_at' => '2023-01-31 08:12:16'
            ),

            array(
                'id' => '1030',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rizka putri wardhani',
                'username' => 'rizkaputri',
                'email' => 'rizkaputriwardhani.88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9nGN3lkMNT54WesHvNKoVO.7i10q629HiGxsxKrzQYk8Dh12on4oK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-01 03:35:54',
                'updated_at' => '2023-02-01 03:35:54'
            ),

            array(
                'id' => '1031',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Arifin Aribowo',
                'username' => 'Arifin',
                'email' => 'arifinaribowo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p4o5qR0Yo0x65golIffXEOutwyLQQR9K4KveEGp4RW8S7F/U3byje',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-03 01:23:40',
                'updated_at' => '2023-02-03 01:23:40'
            ),

            array(
                'id' => '1032',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sriwidodo',
                'username' => 'sriwiidodo',
                'email' => 'sriwiidodo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aE/Mkq5J4ClUi3yLaz/6F..x3ZpylAvMzy3zsf4zaHH4W93L6UMT2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-03 04:09:45',
                'updated_at' => '2023-02-03 04:10:33'
            ),

            array(
                'id' => '1033',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'een ternando',
                'username' => 'een',
                'email' => 'een9693@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fDGZcguqF.qlYBlJ2yhVzObiNIUm.prVtyO0ddvvxe3CO3IUfONoW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-03 04:42:28',
                'updated_at' => '2023-02-03 04:42:28'
            ),

            array(
                'id' => '1034',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sony',
                'username' => 'pangestu',
                'email' => 'sonipangestu1212@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$asfGYAwmviyVaU8uPrwC6eV/Gy3i0q41fvZBDTt3cQiYd/TH66nWi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-03 12:35:14',
                'updated_at' => '2023-02-03 12:35:14'
            ),

            array(
                'id' => '1035',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'supardiansyah',
                'username' => 'dick89',
                'email' => 'yahyafyar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BsDIwFjbvFWnEQbWznySo.Yu8SlZwLs5KFWHSYdt.otPow9B1hjLm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-03 14:28:08',
                'updated_at' => '2023-02-03 14:28:08'
            ),

            array(
                'id' => '1036',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'supardiansyah',
                'username' => 'diam',
                'email' => 'supardiansyah660@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$2vdlLqsD8RBzHg6qo4cim.KTfENiduSBcC..Vq3FOsKQ/VxXVeO8.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-03 14:29:18',
                'updated_at' => '2023-02-03 14:29:18'
            ),

            array(
                'id' => '1037',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syarif Dody Cafri',
                'username' => 'price@lqadrie',
                'email' => 'syarifdodycafri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mwt4lTkwkQEdb5Y3SttTceKvCcuO7oPcOFakXYaE3hCOePYs8ydFq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-05 00:39:03',
                'updated_at' => '2023-02-05 00:43:01'
            ),

            array(
                'id' => '1038',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'farhan',
                'username' => 'farhan123',
                'email' => 'farhanfirmansyah2203@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TEaJZM/hSjJtyNOb.yJoweLBjJqBVc8XC8l4YV/lIxozYmD1IJgLu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-05 04:47:51',
                'updated_at' => '2023-02-05 04:47:51'
            ),

            array(
                'id' => '1039',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'saman',
                'username' => 'brembo',
                'email' => 'saman99brembo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9egRoyf/vCkkoQGLm1ekQuhGfRM0Y0NECho1YIIWiqEClJTdl36Tu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-05 15:09:47',
                'updated_at' => '2023-02-05 15:09:47'
            ),

            array(
                'id' => '1040',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alexgunaili',
                'username' => 'lex',
                'email' => 'alexgunaili07@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NqMyl5SOYdjjhqVXfOdRWuc1QQb31gFsDGIzCTn0xLvoKSj/h6ZHK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-07 07:26:51',
                'updated_at' => '2023-02-07 07:26:51'
            ),

            array(
                'id' => '1041',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ismail',
                'username' => 'ish',
                'email' => 'ishroxy03@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gD45NhadyycIwMTX399DkOp2k4h/LvPXi1YjGONHvzUuPmj9ez1ma',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-07 13:50:10',
                'updated_at' => '2023-02-07 13:50:10'
            ),

            array(
                'id' => '1042',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'riskiramadani',
                'username' => 'riskiramadani',
                'email' => 'riskiparma68@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$phuRAmuApCka3Jx.GlDPrOJJCqUYPGPuFUc3xbC8qCLNYE.5ZfYei',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-10 13:16:13',
                'updated_at' => '2023-02-10 13:18:56'
            ),

            array(
                'id' => '1043',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'viana zavian',
                'username' => 'viana',
                'email' => 'viana.raka@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$F6znPXs4TOwO9pLMvuVmteHEjB08cw3zb4vTzccqxserKtzyyr4UO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-11 10:45:34',
                'updated_at' => '2023-02-11 10:45:34'
            ),

            array(
                'id' => '1044',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Ari pangestu',
                'username' => 'Ari pangestu',
                'email' => 'aripangestu7765@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hpdWSUDmI0U.S7njRIM5luKggeUcxoP4PtfHwd9uw4NLlYNZti3Ne',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-12 09:27:54',
                'updated_at' => '2023-02-12 09:32:00'
            ),

            array(
                'id' => '1045',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rizqi senja',
                'username' => 'rizsnj',
                'email' => 'mrizqi281@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SwIxU3ffXFObl5QBwqNTY.fcoWVB9jRKGFgvBlkJypaf/KOkEhOYW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-13 08:18:56',
                'updated_at' => '2023-02-13 08:18:56'
            ),

            array(
                'id' => '1046',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hendri',
                'username' => 'gio',
                'email' => 'ahoihoi18@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zDesdV/nS/Z3Lva94jDxie7q3PhDa3HzOn8Dc1PGVmKFa1JCKmKdO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-17 03:03:13',
                'updated_at' => '2023-02-17 03:03:13'
            ),

            array(
                'id' => '1047',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rachell',
                'username' => 'chell',
                'email' => 'rachelmantiri9@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$X6EpvHzicFrIQq33m4kmAOIdCnTjzLyiLZoTJdJUIa3Mn2vq5G3g.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-19 08:53:34',
                'updated_at' => '2023-02-19 08:53:34'
            ),

            array(
                'id' => '1048',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rahmat Indrawan',
                'username' => 'rahmat.indrawan',
                'email' => 'rahmat.indrawan1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9j3oGR42eYwrV/cWX.EQyu5HiVB2hSvaTnmUSn9QhOhpzJsV16db6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-22 11:10:57',
                'updated_at' => '2023-05-18 11:38:09'
            ),

            array(
                'id' => '1049',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yovita Tri Utami',
                'username' => 'Yovita',
                'email' => 'yovitatriutami61@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YknHSsKnOu6bSwDgumSXcO0y5KNp0D2lkZCmHYwFh.U7b.qRBUUj.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-23 04:57:02',
                'updated_at' => '2023-02-23 04:57:02'
            ),

            array(
                'id' => '1050',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anugrah Rizky Putra Pratama',
                'username' => 'Anugrah Rizky',
                'email' => 'rizky10062018@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5havS.6xkZnkJxGddodf7OEKM4hQ.Dnzv.vX5.iUL2rUh/3lmcOQu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-02-28 15:02:50',
                'updated_at' => '2023-02-28 15:02:50'
            ),

            array(
                'id' => '1061',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anggraini',
                'username' => 'Anggi',
                'email' => 'anggraini8965@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uwZGDhgL6kXCsen8yiu2We82nNGhAjamvNckq4ZA.2.hE2TegV9Xq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-05 17:36:02',
                'updated_at' => '2023-03-05 17:37:26'
            ),

            array(
                'id' => '1062',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jindre',
                'username' => 'indr',
                'email' => 'feihumgwong@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hBTXodDCcV/QDl7d.L3DnuNJtQxoi4RdPyQCwf5ai54zrciPQKQDm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-05 18:58:55',
                'updated_at' => '2023-03-05 18:58:55'
            ),

            array(
                'id' => '1063',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dermanto',
                'username' => 'antho86',
                'email' => 'antho.outsiders86@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$V2QvmVmC5Dx3/h6GJcpGDuaz4pDSIIIFee44apV/2U6XVpqN2xfUG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-07 00:45:00',
                'updated_at' => '2023-03-07 00:45:00'
            ),

            array(
                'id' => '1064',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yudha kurniawanto',
                'username' => 'yudha',
                'email' => 'yudhabintang.bca@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$J8reBMkzjxyfl7Jc5EuoU.o8sftZR1Ddw1RC5yVsY6mRicPWudZ6y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-08 19:20:04',
                'updated_at' => '2023-03-08 19:20:04'
            ),

            array(
                'id' => '1065',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Erlangga',
                'username' => '@sentua_msf',
                'email' => 'erlanggasaad@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$o6lYKeADy4I7bw6Wq0oQ4us5jNxsHarJI3BJvgaXriDRUt/kxvyVe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-09 16:55:12',
                'updated_at' => '2023-03-09 16:56:19'
            ),

            array(
                'id' => '1066',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'aisyah mozza rinjani hafianto',
                'username' => 'mozza',
                'email' => 'aisyahmozzamozzarinjani@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gDsBIjbbsKWI7REHprQ4v.dqg7QRjbXmATHut17z8zjyU2JV0egou',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-16 03:11:37',
                'updated_at' => '2023-03-16 03:12:52'
            ),

            array(
                'id' => '1070',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'LR Transport',
                'username' => 'lrtransport30',
                'email' => 'lokasicctv@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/K1aDHgtETObvvzO7zcsiO7yG51NJERwqLSx1ZEBVZmJp8BYuDWFm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-18 07:14:47',
                'updated_at' => '2023-03-18 07:14:47'
            ),

            array(
                'id' => '1071',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sutria Ningsih',
                'username' => 'ssutria',
                'email' => 'sutrianingsih1245@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$q2byCUe7lcrlcfrppbTQP.hZqBugAbSbvBevy0Wyi3Ir9/vrpq/L6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-19 06:41:43',
                'updated_at' => '2023-03-19 06:41:43'
            ),

            array(
                'id' => '1072',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ferdi apriandi',
                'username' => 'ferdy79',
                'email' => 'ferdyapriandy79@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$hVbKrwyZS9aLBTDrsM55iObRnee5CMR9gl.5R0PtY1cZi63mPnpxy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-19 16:19:33',
                'updated_at' => '2023-03-19 16:19:33'
            ),

            array(
                'id' => '1073',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dinan Arianda',
                'username' => 'dinan',
                'email' => 'dinanarianda07@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bTZ4g4MiyXzkGCgEMGTog.lh2rJ8M1ubgzfgsd94Q5XHiRCXZsMS.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-20 09:26:06',
                'updated_at' => '2023-03-20 09:26:06'
            ),

            array(
                'id' => '1074',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agus priyanto',
                'username' => 'cech10',
                'email' => 'aguspriyanto357509@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cp53sQ86TEWCaYxBJ9U9iu4Xg3dAuHwraOpKxATGXdHnuuUX3j7V.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-21 13:09:01',
                'updated_at' => '2023-03-21 13:09:01'
            ),

            array(
                'id' => '1075',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Uito',
                'username' => 'Uito',
                'email' => 'chong_meng@ymail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/IkE8XLU1Xg1u2maQ8Bp.Ovc2Yfctnozz4zvME5giM/XW2cg4Mij.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-21 15:23:29',
                'updated_at' => '2023-03-21 15:23:29'
            ),

            array(
                'id' => '1076',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'smart',
                'username' => 'ponti',
                'email' => 'maryonokikuk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Bd6CcrEAcMRBeIf0ZZYqx.JISc1QMZYNGRcsOetaDVwdsKscG2ZvW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-22 13:45:15',
                'updated_at' => '2023-03-22 13:45:15'
            ),

            array(
                'id' => '1077',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yani',
                'username' => 'roy',
                'email' => 'liaraponti12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DvDuMtxtSOMM2EG8U8wk0.XdGM25vIcvRu7XZfGWPsBviqAmZFrKS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-25 02:42:09',
                'updated_at' => '2023-03-25 02:50:55'
            ),

            array(
                'id' => '1078',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rey bareto',
                'username' => 'rey137',
                'email' => 'reyborneo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ib.ZCmHFa4U0xFfT8X.33OKH1aM2Xbv.69V5X30frDb6VTMUZ7Z4W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-27 11:40:40',
                'updated_at' => '2023-03-27 11:40:40'
            ),

            array(
                'id' => '1079',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yudi Hariyanda',
                'username' => 'Yudi Hariyanda',
                'email' => 'yudihariyanda9@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6OilN/sE9OjoSzjE8KSPeufVNFAsxW8YvsKdY4N1n4Jaj3IhqJHBS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-03-31 06:48:30',
                'updated_at' => '2023-03-31 06:48:30'
            ),

            array(
                'id' => '1080',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Irfan Marindra',
                'username' => 'fansmaniac',
                'email' => 'fansmaniac@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pi/w1Z0pyOUmyFn.K38iXezIvUc3BT/KrmfM/NrM/TCeGoKPzAiAa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-01 14:15:09',
                'updated_at' => '2023-04-01 14:15:09'
            ),

            array(
                'id' => '1081',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dadang Mulia',
                'username' => 'Dadang',
                'email' => 'da2ng.mulia@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ldvmSApENJ7hP2Q8tgwpMOeUYkVYAXIKRymKSBW2zf7HGqIur8CM.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-03 08:58:35',
                'updated_at' => '2023-04-03 08:58:35'
            ),

            array(
                'id' => '1082',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Diki Febrianto',
                'username' => 'Dbenj',
                'email' => 'Dzeeturn@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zRfnc0ifxdyBpG4smWEw5e/vEuaGcW6pa9WqtXZ0OV7JevjZ2EIrq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-04 17:57:14',
                'updated_at' => '2023-04-04 17:57:14'
            ),

            array(
                'id' => '1083',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arip',
                'username' => 'arip',
                'email' => 'ahmadarifffff.25@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zEbDAAJmiiSOyN8mlzUCguv0eToaQr5yKwJvRW3LWUl8bY2zHrhDm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-05 03:06:59',
                'updated_at' => '2023-04-05 03:06:59'
            ),

            array(
                'id' => '1084',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tedi eriyadi',
                'username' => 'tedi eriyadi',
                'email' => 'tedi.eriyadi2017@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$DhCc91dSmwAGIaulZgwIhuszQxZx/Ri7yYNLYN9Qj.U0VrwqMIwh.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-05 09:34:44',
                'updated_at' => '2023-04-05 09:34:44'
            ),

            array(
                'id' => '1085',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'christopher gagas',
                'username' => 'gagad',
                'email' => 'gagasgagis5@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XccMXYs.YvBhlRkSGS4eTOpt/jEKhYnoSmiq5Cp1BiG0eJ8oUMIzi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-05 10:10:48',
                'updated_at' => '2023-04-05 10:10:48'
            ),

            array(
                'id' => '1086',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mira',
                'username' => 'mirra',
                'email' => 'mseptiani929@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xkZK5u5yhFLm4i7LUmTfA..jBvnzJRJHPSUk9He5xgOyT/RzmgdK2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-05 11:39:53',
                'updated_at' => '2023-04-05 11:39:53'
            ),

            array(
                'id' => '1090',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dede kurnia',
                'username' => 'ade',
                'email' => 'dedekurniyansyah05@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9wLr523W8U7BRqwzstbyAOdqaXNjwrUu0h6ASU6eorNutZvdCIX9O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-05 18:24:42',
                'updated_at' => '2023-04-05 18:24:42'
            ),

            array(
                'id' => '1092',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yudkkkk',
                'username' => 'yudkkkk',
                'email' => 'selviwatiwati@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$in6XlCMf2knjUMi2TY1v1eiNE.VuwpV7Pr9eiAGYZB.BN2US9v7cK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-05 19:12:31',
                'updated_at' => '2023-04-05 19:12:31'
            ),

            array(
                'id' => '1093',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Agung Yudistira',
                'username' => 'agungyudistira',
                'email' => 'agungyudistira01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$nPyLB2DAEKGKExRoVK1gVevkZ3LcVDbJrUmATyltqS/jDYom3y6.y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-05 21:21:19',
                'updated_at' => '2023-04-05 21:21:19'
            ),

            array(
                'id' => '1094',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andy',
                'username' => 'Andy',
                'email' => 'andyss8850@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Vt8YA9JBZm2ixCwp1tv4CeAxCu/oQ0EkhIAOggjInz1yEtXwFliS6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-09 17:29:08',
                'updated_at' => '2023-04-09 17:29:08'
            ),

            array(
                'id' => '1095',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'REZEKI',
                'username' => 'raps',
                'email' => 'edulceriah@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vIVPMEnrjLTRlenYsgLjiOvpp7CPD75X2NvCxx/ngNSwiqk222GTm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-12 18:44:59',
                'updated_at' => '2023-04-12 18:44:59'
            ),

            array(
                'id' => '1096',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'panca',
                'username' => 'panca',
                'email' => 'pancaimoet82@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4n6ByudlWWc3GJlE9LXhEO/jCGqwmYy6mw7JnicMwTbq1CSa9.9bm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-14 07:59:18',
                'updated_at' => '2023-04-14 08:02:09'
            ),

            array(
                'id' => '1097',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'guntursetiadi',
                'username' => 'Redminote9',
                'email' => 'Setiadiguntur960@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sK0I8e66FtpHmHYzF44zTezZ6B2BMkxiCVtJ86vB/AxFj5lb4SxH.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-15 08:15:44',
                'updated_at' => '2023-04-15 08:15:44'
            ),

            array(
                'id' => '1104',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Billy',
                'username' => 'billy',
                'email' => 'hpku1272@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xd8vDx/RKepk3bedwA4LMe3Op2yY0zAJE9bt8P4tV14FEfgnsFoJa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-17 20:45:27',
                'updated_at' => '2023-04-17 20:45:27'
            ),

            array(
                'id' => '1105',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Maria Elika',
                'username' => 'mariaelika97',
                'email' => 'mariaelika97@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eJJVldT41b1/2GSDbCV9LujjoH1.u/EjkEs/qlwFJwAnGuzWOC05W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-18 06:28:53',
                'updated_at' => '2023-04-18 06:29:47'
            ),

            array(
                'id' => '1106',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'panca leo santoso',
                'username' => 'panca',
                'email' => 'panca.leo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wdkDAd/dxRFUkgeObrdl8e78WHlr3So2FcjqqOIDHNu.qb1TGu7I6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-18 10:21:53',
                'updated_at' => '2023-04-18 10:21:53'
            ),

            array(
                'id' => '1107',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yeskiel',
                'username' => 'onadio',
                'email' => 'yeskielonadio@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$D1C/QOQrKGK.ResrghDr3OZIbHTyEzbb3YD2dAUgjshkslJ7UBabm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-18 11:35:41',
                'updated_at' => '2023-04-18 11:35:41'
            ),

            array(
                'id' => '1108',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'andi',
                'username' => 'an~~',
                'email' => 'andicsj156@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gL9TUPeJ8LVzjVdMFoDugOjfw.u3Koq.F1QxJDdFeM2bhWMWVI31u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-18 14:51:36',
                'updated_at' => '2023-04-18 14:51:36'
            ),

            array(
                'id' => '1113',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'cahaya baru',
                'username' => 'cahaya',
                'email' => 'zainroy685@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YWC.QVPYosh693V7SCOgv.5B0aU/1pl9EuT2aYzbUVKXNU6ub0xqa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-19 05:35:26',
                'updated_at' => '2023-04-19 05:35:26'
            ),

            array(
                'id' => '1114',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Riza pahlefi',
                'username' => 'pahlefi88',
                'email' => 'lembiru212@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fbfKvLr1DINrk/exXF0KrOhmHWufXirJur3zFpn0WUk9wAt00yLvi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-20 02:20:04',
                'updated_at' => '2023-04-20 02:20:04'
            ),

            array(
                'id' => '1115',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hairul agil',
                'username' => 'agil',
                'email' => 'hairulagil6@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jmc/3c7eFD9MU4o7NYwejOQppXRP/o27lRDX1v717IB49Pv.zWTwi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-20 05:30:31',
                'updated_at' => '2023-04-20 05:30:31'
            ),

            array(
                'id' => '1116',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Junaedy',
                'username' => 'Juna',
                'email' => 'joenkusma@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4JitBs0X69Xs9YMbTqkJT.EuIiU42j0R4ogNi6iMpfqdo6HwzLsaO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-22 13:22:58',
                'updated_at' => '2023-04-22 13:22:58'
            ),

            array(
                'id' => '1117',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'haekal',
                'username' => 'haekal_ak',
                'email' => 'haekalak24@gmai.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9lLR/iDnEJehZ1UG/y5hPOjMAi5nQnmeXnbG0flXWMcEbVkF5pxr2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-22 15:07:01',
                'updated_at' => '2023-04-22 15:07:01'
            ),

            array(
                'id' => '1118',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mulyadi',
                'username' => 'yadi',
                'email' => 'yadi47295@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Wd2OHYhdK00EWj3EPFCW8Ot8hRHBMhEopW4bLn8TEfgZ.UFSyStiG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-23 03:45:01',
                'updated_at' => '2023-04-23 03:45:01'
            ),

            array(
                'id' => '1126',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'murtada',
                'username' => 'murtada',
                'email' => 'pb8410047@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.Vr9fpez8sk3vrW7fXAlXOMGGQhsD.hGmu.K5QOELGjaITc6VCD3i',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-23 06:09:30',
                'updated_at' => '2023-04-23 06:09:30'
            ),

            array(
                'id' => '1127',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fareljhonkishenmare',
                'username' => 'farel',
                'email' => 'fareljkm17@gmal.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9jcSy5tHYJzzQ0X09OInU.V9yQ7IiQzxb/8XPoAc/QMLNByJ/8Z4C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-23 08:23:22',
                'updated_at' => '2023-04-23 08:23:22'
            ),

            array(
                'id' => '1128',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'farel',
                'username' => 'farel',
                'email' => 'fareljkm17@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$P0tziJnH6RgF7KOrWfq0ueGXmjIUWKEUd98QE9ZHhk.E2ppZ2.wOO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-23 08:24:42',
                'updated_at' => '2023-04-23 08:24:42'
            ),

            array(
                'id' => '1129',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dwi Jatmoko',
                'username' => 'Dwi Jatmoko',
                'email' => 'dwijatmokohadi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lQ2PBVJRHS1ehuDs9AytF.dUElvC12zu2p.b4viACx7bnLcL8Bgre',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-23 09:34:12',
                'updated_at' => '2023-04-23 09:34:12'
            ),

            array(
                'id' => '1130',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yudhi',
                'username' => 'triyudhip',
                'email' => 'triyudhip@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.UGaJhfyDthzSF9M9BZuxOeVmm6/2gTwd3ubExjip2IVOtQVKvERG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-23 11:53:38',
                'updated_at' => '2023-04-23 11:53:38'
            ),

            array(
                'id' => '1131',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muha',
                'username' => 'mmad',
                'email' => 'khotibm339@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oikKeSSfo3MaULp4Eu2rfuyVZg/rNpC5jeCYw8rTFf9qwNP8u4Ku6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-23 21:05:46',
                'updated_at' => '2023-04-23 21:05:46'
            ),

            array(
                'id' => '1132',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Syarifah Fathimah Ali AlMuthahar',
                'username' => 'Ummu Ali Urayhi',
                'email' => 'ummualiuraydhialaydrus@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Srwe1lR4HDbKFNqMh.d23Ow077pmPA87tCoQfOukqbk9cUxlsrfWS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-24 03:15:07',
                'updated_at' => '2023-04-24 03:15:07'
            ),

            array(
                'id' => '1133',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hendi safela',
                'username' => 'hendi',
                'email' => 'hendisafela22@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ntyn.ASk4MaWkFA2H6CVzeKwBW6NszFpKVeJftshYhY6l8oVyFSjO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-24 07:20:00',
                'updated_at' => '2023-04-24 07:20:00'
            ),

            array(
                'id' => '1134',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Bayu sugara',
                'username' => 'Bayu',
                'email' => 'bayucay198@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/eRM4qMnlGzUH2j3j6myp.RMD9gCv55YeWpKXe0avMV3AaDn/epj6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-24 12:00:18',
                'updated_at' => '2023-04-24 12:00:18'
            ),

            array(
                'id' => '1135',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fitria hasanah',
                'username' => 'fitriaa',
                'email' => 'hasanahfitria06@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JQn5aCHnYBZHIYoDy5qCxeJasYZWXyNcN8tJZNGxjket/HhxkxLJm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-24 13:05:24',
                'updated_at' => '2023-04-24 13:05:24'
            ),

            array(
                'id' => '1136',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agus',
                'username' => 'agus',
                'email' => 'pontianakjayaabadi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$42NF/RFNEbVNd.qmVvK/JOM3MIizE617zCWLsyvvoGlg2wB/f3qG6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-24 16:27:16',
                'updated_at' => '2023-04-24 16:27:16'
            ),

            array(
                'id' => '1137',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'arifin',
                'username' => 'ariraffael',
                'email' => 'bisnispontianak88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kbQRaCxb83gkixwiehY6T.igXhmY5rdx5Xuh5oKIcdIcoU8YLDp2y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-25 08:24:58',
                'updated_at' => '2023-04-25 08:24:58'
            ),

            array(
                'id' => '1138',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'emanius',
                'username' => 'iman',
                'email' => 'emaniusiman2018@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UJ6cME01qu2fAxN5Ot6rHOYWjZmSmd50l817KeB2WJi.jNKWqVLj6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-25 19:00:27',
                'updated_at' => '2023-04-25 19:00:27'
            ),

            array(
                'id' => '1139',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Hasyim HM',
                'username' => 'Hasyim Ponty',
                'email' => 'jihanhasyim@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TTvYg2lPZT4o.LSOIWSZaeiX6Lzz43oDqXn46wQivsbVpi7cltQcS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-26 06:11:13',
                'updated_at' => '2023-04-26 06:11:13'
            ),

            array(
                'id' => '1145',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dens',
                'username' => 'zack',
                'email' => 'densbitclub@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LUG.v4cTFdsQyN/5ZnwB0u7Me4i.k60qWFADNh9KeyROtYXoEtdsm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-26 13:08:31',
                'updated_at' => '2023-04-26 13:08:31'
            ),

            array(
                'id' => '1146',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Anisa',
                'username' => 'Nisa',
                'email' => 'nisarditi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wKX2XDkmeSwfDLHceb61rOe.rThR.y9o3yMMMuMFaBxvMtCj0y9xi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-26 16:21:03',
                'updated_at' => '2023-04-26 16:21:03'
            ),

            array(
                'id' => '1147',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'shamsidy',
                'username' => 'shamsidy',
                'email' => 'shamsidy,ss@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OCsHnlw3HobuaORnxtTVMuV07Dk5rvDG1NIa0evI2/v0QB2CAyn7q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-27 03:19:21',
                'updated_at' => '2023-04-27 03:19:21'
            ),

            array(
                'id' => '1148',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'shamsidy',
                'username' => 'shamsidy',
                'email' => 'shamsidy.ss@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JccKr4duJFVaxzkALkuHoe3rqDYFAI7eEsIL6P1KoxIF5lfdFE1OK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-27 03:19:56',
                'updated_at' => '2023-04-27 03:19:56'
            ),

            array(
                'id' => '1154',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sham',
                'username' => 'shamsidy',
                'email' => 'shamsidy@yahoo.co.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RtkTgJZBd5wPiaJxF.EYbuwveWStIc14FyAzGoRFPLt5/RhPd8prq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-27 03:27:40',
                'updated_at' => '2023-04-27 03:27:40'
            ),

            array(
                'id' => '1155',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nurul khaffifah',
                'username' => 'popoy',
                'email' => 'nurulkhaffifah@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YMDAfYmTOdOIvXm0Rj52fumlhTT0geix3UcoH3K4luneoQRcXG6rC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-28 09:15:03',
                'updated_at' => '2023-04-28 09:15:03'
            ),

            array(
                'id' => '1156',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mel gibson',
                'username' => 'mel gibson',
                'email' => 'melgibson807@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Wm6KxHd48ECKE8eR3457l.KQpTw0TEQx7WbEaWtDywblom9/DMFzm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-29 00:44:37',
                'updated_at' => '2023-04-29 00:44:37'
            ),

            array(
                'id' => '1157',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deki',
                'username' => 'Deki',
                'email' => 'yanocm56@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6AGhliPCPcKaaXfficPjgu2/qASWn9L2aSsl6Wd1R6Ky2c6Zu57fC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-29 14:09:13',
                'updated_at' => '2023-04-29 14:09:13'
            ),

            array(
                'id' => '1158',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nuar',
                'username' => 'Nuar',
                'email' => 'Smartidpro99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LWm.oP6pqo2WXHh4O9Cx7eJOsINgYmemwqlTOmnYRU5OzJDwNFyzG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-30 08:46:58',
                'updated_at' => '2023-04-30 08:46:58'
            ),

            array(
                'id' => '1159',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'harun',
                'username' => 'harunrsyd',
                'email' => 'harunrsyd247@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KvzeIU3S0WPOpurT8fW10u9rNXg/O.wR.5l8s5hfTyc7ZO8rwegg6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-30 11:12:59',
                'updated_at' => '2023-04-30 11:12:59'
            ),

            array(
                'id' => '1160',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jovianka ivy',
                'username' => 'jovianka ivy',
                'email' => 'joviankaivy0804@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tttRZVT09fAtnwbRCLjSL.H/VvffVnKwL9wCwoE7hdCFPYG3Oy7dC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-30 12:56:17',
                'updated_at' => '2023-04-30 12:56:17'
            ),

            array(
                'id' => '1161',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rafaa',
                'username' => 'rafapratama',
                'email' => 'rafapbm100507@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$z.ocPXQ3xjroJ14qyVnm5OsxXA5Pnqs/CoAHSzpf0CvRqGtCUNzJu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-04-30 13:44:28',
                'updated_at' => '2023-04-30 13:44:28'
            ),

            array(
                'id' => '1162',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rifai',
                'username' => 'rifai_109',
                'email' => 'rifaiadikaputra8@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wiBfwz4YySetfbYatewlnuUKLXPX5bdB2sMslRNgj7w6JPU.FaMn6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-01 07:16:31',
                'updated_at' => '2023-05-01 07:16:31'
            ),

            array(
                'id' => '1163',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'erwin',
                'username' => 'win',
                'email' => 'erwinbloog@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5t4yYSzRhlNrFnMYXEt9xOacRLrVciFCBxZIMWgWO6erNY0mNyO0C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-01 08:15:35',
                'updated_at' => '2023-05-01 08:15:35'
            ),

            array(
                'id' => '1164',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'cynthia',
                'username' => 'cynthia.lumbangaol',
                'email' => 'cynthiamagdalena08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$kU9A1uugPoJ/LSOnkV2JGuYmYr4IWBUj9WYqeVDbuPqHBMGed4xDC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-01 08:41:24',
                'updated_at' => '2023-05-01 08:41:24'
            ),

            array(
                'id' => '1172',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dini imanudin',
                'username' => 'dini',
                'email' => 'siidenyy@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oeMWkBosIAl9VZA5Yc4toeZagnoUNiZYI.z9P5kd6blXr.KMXP5kG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-02 12:49:58',
                'updated_at' => '2023-05-02 12:49:58'
            ),

            array(
                'id' => '1173',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'caleb',
                'username' => 'caleb17',
                'email' => 'clbjr07@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mSjzXbhTmlK.HV0C/GMAk.i4kw.ceWhipsxgxOMUnL7ib61UohYvS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-02 17:34:20',
                'updated_at' => '2023-05-02 17:34:20'
            ),

            array(
                'id' => '1179',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'anugerah pratama',
                'username' => 'anugerah',
                'email' => 'anugrahvivos1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cZwOHeskYU5germpxBcI/.qS.jcMqegDFcR/efNije7SNydLxCHna',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-03 05:17:28',
                'updated_at' => '2023-05-03 05:17:28'
            ),

            array(
                'id' => '1180',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'walidi juniarso',
                'username' => '@walidi87',
                'email' => 'walidi.juniarso@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8TEodt1SHJjfEtaOyhDOJORtche8ReBEcf/SDADWwim5lp8EMOc5.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-05 06:07:55',
                'updated_at' => '2023-05-05 06:07:55'
            ),

            array(
                'id' => '1181',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'cosmas',
                'username' => 'krisna',
                'email' => 'purwosarisen1@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KenbbhrAfG8sBisklNHqfei1NgsT2FktqCMTv1ykfFLo6P5YtelDC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-10 07:44:50',
                'updated_at' => '2023-05-10 07:44:50'
            ),

            array(
                'id' => '1182',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sahri Amarta',
                'username' => 'LPM_BL',
                'email' => 'amartasahri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$FRp10TkyCEVC5hPkq8w7mu3X06D/tyJT/5dUdAqd7zwtfBrIhC9D2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-13 16:08:50',
                'updated_at' => '2023-05-13 16:10:15'
            ),

            array(
                'id' => '1183',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sambo',
                'username' => 'Sambo4444',
                'email' => 'sambo4444@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Bhv0OIGS0Qqf0QBEMoV02eQFVN49VZmyH.7rA1Q81pMOY2l3HLqm2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-15 10:01:26',
                'updated_at' => '2023-05-15 10:01:26'
            ),

            array(
                'id' => '1184',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Firmansyah',
                'username' => 'mansaf702',
                'email' => 'mansafirman7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$k.9bOUaHp2QFeaQiBhjn4eTZc/L0Z9WYyISnsJxIjxDo22apUOt7m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-16 03:02:29',
                'updated_at' => '2023-05-16 03:02:29'
            ),

            array(
                'id' => '1185',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammad sultan',
                'username' => 'sultan',
                'email' => 'sultanprayoga03@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4Y/oHxcRCovACrVG4cv2wuMsGbioGOfOGDJwdpC1nrPpaFeiZV1f.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-20 10:15:02',
                'updated_at' => '2023-05-20 10:15:02'
            ),

            array(
                'id' => '1186',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'DEVA ALTIS DEVISTA',
                'username' => 'Deva Devista',
                'email' => 'devadevista12@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4n9NTO/J7oJBV6QQYLgr8O3mstboAZ3RCs5vjSiy2/nOG9yziUTcO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-21 04:53:48',
                'updated_at' => '2023-05-21 04:55:09'
            ),

            array(
                'id' => '1187',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'haikal',
                'username' => 'haikalllawarr',
                'email' => 'warengbacin18@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7fz.ly8kO79EdN74oVvatOsFY1dMt16zsBxEB0BdSLV0L3x7SsPTO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-22 02:18:50',
                'updated_at' => '2023-05-22 02:18:50'
            ),

            array(
                'id' => '1189',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sity.kamilah25@gmail.com',
                'username' => 'Siti Kamilah',
                'email' => 'sity.kamilah25@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mYPN.dfJh1KW/PnLgG/ase91pTN7XfPp0WZ.GsHCVbjNDHzdJTxAi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-22 11:24:51',
                'updated_at' => '2023-05-22 11:24:51'
            ),

            array(
                'id' => '1190',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ridwan',
                'username' => 'ridwan120688',
                'email' => 'randika9118@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$E62HktXPSYJaidPfCk57xOzEFNHrNPAGaBCv2CQLFMgAadIBn2f2u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-05-30 06:33:24',
                'updated_at' => '2023-05-30 06:37:03'
            ),

            array(
                'id' => '1191',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Supriyatun',
                'username' => 'Supriyatun',
                'email' => 'Ditarahmadita91@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QsDpJkbMDGCAmbl5GT01be8HPdbrPDSfkgaIBhGZnvWtU28Xx/ova',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-01 13:43:54',
                'updated_at' => '2023-06-01 13:43:54'
            ),

            array(
                'id' => '1199',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'bayu sugara',
                'username' => 'bayu',
                'email' => 'baycay198@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IZ4Vzk4nfbJz4mdlMS3FkOtmqkbHxa1vkTV5UDRVmplR5Bqfm6B1a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-02 04:22:16',
                'updated_at' => '2023-06-02 04:22:16'
            ),

            array(
                'id' => '1200',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'cici apriyani',
                'username' => 'cie',
                'email' => 'ciciapriyanitiara@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TzwVXzEiwjmpK3C6GvqaI.aCFSh7kbbcwrO0eC5CHZ5xoOx.VJGZe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-03 09:23:08',
                'updated_at' => '2023-06-03 09:23:08'
            ),

            array(
                'id' => '1201',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Abdulkadir',
                'username' => 'kadir78',
                'email' => '0003008@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Eox10EBVOxpIDqtsuaRNce9VSFN7hjXMp5lRvwpjjrbzFVuCT6kbi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-04 09:59:57',
                'updated_at' => '2023-06-04 09:59:57'
            ),

            array(
                'id' => '1202',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Rizki Muliawan',
                'username' => 'Rizki.Atha',
                'email' => 'rizki5991@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LxoSdv3TenNoxw/tdMUf4On5FWQ9WBeDhGJoeXUtK60zzwlZ39qoC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-05 15:46:43',
                'updated_at' => '2023-06-05 15:46:43'
            ),

            array(
                'id' => '1203',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fatimah',
                'username' => 'fatimah',
                'email' => 'Ftmhta3522@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U.9JsBZDPAIBn6hsomWGou3cr8LmVNazI23bL6DuzIoHzm6zPAw4.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-05 15:55:50',
                'updated_at' => '2023-06-05 15:55:50'
            ),

            array(
                'id' => '1204',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fatimah',
                'username' => 'fatimah',
                'email' => 'fatimahzar28@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TlokGMI7g4anA3xbyPnM6O0Ks/rbx7mDuwWOResGdMH9qR9Di2sSm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-05 16:03:55',
                'updated_at' => '2023-06-05 16:03:55'
            ),

            array(
                'id' => '1205',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'andreas purwandi',
                'username' => '_purwandi',
                'email' => 'Andreaspurwandi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vbdZT8nlfeKwdqPpyvRcaOz2tRbiCMKJeC9VU7Ylr633TyDln1PM2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-06 13:02:10',
                'updated_at' => '2023-06-06 13:02:10'
            ),

            array(
                'id' => '1206',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dede',
                'username' => 'Wulandari',
                'email' => 'dedewulandari2004@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$V4vGXjdBeOaqP25X4iyeA.JLENReuyBv/16zquHTYE5YMVLL.DpkG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-08 01:52:15',
                'updated_at' => '2023-06-08 01:52:15'
            ),

            array(
                'id' => '1207',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dede',
                'username' => 'wulandari',
                'email' => 'incesdede290@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q.5TmfgFMVctth7jatn75OZKPph1qfoAK2YK5jxW.A7zh6uX2VohG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-08 01:54:07',
                'updated_at' => '2023-06-08 01:54:07'
            ),

            array(
                'id' => '1208',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Findy Junhakim',
                'username' => 'fmcfindy',
                'email' => 'findy_fmc@outlook.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cWfP.jrVd/4zjNZTsnMHQunZQye4M9Wpn2zKiAeG4th/a9Nlr6wt.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-08 17:31:09',
                'updated_at' => '2023-06-08 17:32:03'
            ),

            array(
                'id' => '1209',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'budi',
                'username' => 'budi',
                'email' => 'budianzonk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$v5OpqqtwA5.I6j3I/HgCOO1rfmWfVpyRGpjWhRmMoypL/7gXyUU0y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-11 09:37:22',
                'updated_at' => '2023-06-11 09:37:22'
            ),

            array(
                'id' => '1210',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Iqbal',
                'username' => 'Iqbal',
                'email' => 'miqbal010118@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6xnHTtrTI4eH4y2y8yKZRuPuGB17wirPsbI59qrg/YB5KYIuvZvaW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-15 02:52:01',
                'updated_at' => '2023-06-15 02:52:33'
            ),

            array(
                'id' => '1211',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ikhwan Dwi Susanto',
                'username' => 'Wann',
                'email' => 'ikhwan5570@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EShKd6leOnDKmqjh3SzosuLJauSo3lQMwTspNmwJ2tA3nlNcilwpC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-15 02:53:00',
                'updated_at' => '2023-06-15 02:53:00'
            ),

            array(
                'id' => '1214',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ester pamela',
                'username' => 'ester',
                'email' => 'esteralbertsamuel@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IBIT.QYa2hD4RVYUwp14Z.keJWJOI/1mQo0C1tPylh/WJU91VHIaS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-25 16:42:01',
                'updated_at' => '2023-06-25 16:44:28'
            ),

            array(
                'id' => '1215',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hansen nicholas',
                'username' => 'hansennicholas03',
                'email' => 'hansennicholas04@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VCMVaiZGZXdsf57gW0YfEe1lL9NZFu9OdzGxt1KY46Mfqy0IaKXi.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-27 15:18:24',
                'updated_at' => '2023-06-27 15:18:24'
            ),

            array(
                'id' => '1219',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'riski',
                'username' => 'ramadani',
                'email' => 'akuusufa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$LB4Zzfv0DllwznDnk8xVx.Q4WbxyzSOUxRguvh2J630.PABxw0pFq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-06-28 19:09:29',
                'updated_at' => '2023-06-28 19:09:29'
            ),

            array(
                'id' => '1220',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hario Nugroho',
                'username' => 'Hario',
                'email' => 'harionugroho178@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AtWZpyn5GYZhiFD9wHaC4O7nJFcjhINdUintYMtQpSOzm6c5bidBK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-01 09:52:29',
                'updated_at' => '2023-07-01 09:52:29'
            ),

            array(
                'id' => '1221',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rizky Mahardika Catur BratayudhaMenggala',
                'username' => 'yudha15',
                'email' => 'rizkymenggala15@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$wsgJqqWH.bSOE7eCao0dR.7GuCAlkNi8RtOuMC89c4DtypCJhSgJy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-02 16:21:34',
                'updated_at' => '2023-07-02 16:21:34'
            ),

            array(
                'id' => '1222',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'deki',
                'username' => 'deki',
                'email' => 'dekiariansyah19@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$igc/TF1/jAN6/voQjGknCOanHPgVBLOdzyQowZrm4sxOFSkKyfTDW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-04 09:39:38',
                'updated_at' => '2023-07-04 09:39:38'
            ),

            array(
                'id' => '1223',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rosmiati',
                'username' => 'mia',
                'email' => 'hami24621@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R7xN3OsZCIhR4pdTVls5Z.QUu1uO7R7s1uUwLAdUQBB3TR/QTz4Te',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-07 23:45:50',
                'updated_at' => '2023-07-07 23:45:50'
            ),

            array(
                'id' => '1224',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ade wahyu',
                'username' => 'ade',
                'email' => 'setiawanadew@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IGHQtt8XD/c8GQWBY6697uxkV.Y5XX0qGmtqluwnpmYbdzdfS.1DG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-09 14:00:10',
                'updated_at' => '2023-07-09 14:00:10'
            ),

            array(
                'id' => '1225',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'hairul',
                'username' => 'irul',
                'email' => 'hairulhairul1511@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8PMzBdWVZnsRmyMZhZgKyO4KUafJ/atddL9xhCJaFnngBcKQEQKc.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-09 18:53:54',
                'updated_at' => '2023-07-09 18:53:54'
            ),

            array(
                'id' => '1226',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alzie',
                'username' => 'zie88',
                'email' => 'ziebaqodrie@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pn29r/o60O78oH0WRls2pOh9Qux/NA1Y8F1rOOt99MR1S8lmkYM4m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-10 12:47:37',
                'updated_at' => '2023-07-10 12:47:37'
            ),

            array(
                'id' => '1227',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'mohamad azizul farid',
                'username' => 'papaNaya',
                'email' => 'faridalkaff@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iCEIhHAk3vCDeOpd11w8lO51sC213wVtppCSsKl0ZVPL3/7h2thzq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-10 13:52:49',
                'updated_at' => '2023-07-10 13:52:49'
            ),

            array(
                'id' => '1228',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Auwali Ikhsani',
                'username' => 'Auwali',
                'email' => 'auwaliikhsani11@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.OhYzxXqBjJeHoVXoUX8QeJ2mbvWY5gpwERp4DVCaAAh8NvsQWWf6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-13 03:23:02',
                'updated_at' => '2023-07-13 03:23:02'
            ),

            array(
                'id' => '1229',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'firlani danti nanda novea',
                'username' => 'firlani12',
                'email' => 'firlanidanti09@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KvsGV81fxJ85nLDQG5JoxecwxVRSTE5t/yan1VCoHyu.s72wtDhLO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-13 17:16:32',
                'updated_at' => '2023-07-13 17:16:32'
            ),

            array(
                'id' => '1230',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'suryaa',
                'username' => 'suya',
                'email' => 'masnen.0147@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BpwOnjCHDgoxKqviY6EOme9TSFAZ2pL7O05FhqUShG42Umi2HoewG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-15 21:56:13',
                'updated_at' => '2023-07-15 21:56:13'
            ),

            array(
                'id' => '1231',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'SUDARSONO',
                'username' => 'darson20',
                'email' => 'darsonpalace@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QZfWT4gl.uvtMlAhc5ACR.djvWU/NFQPOvkYym.LCG27HakvxQqnS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-18 01:57:22',
                'updated_at' => '2023-07-18 01:57:22'
            ),

            array(
                'id' => '1232',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'andri ade anugrah',
                'username' => 'ade anugrah',
                'email' => 'andriade05082004@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5W550Mn64LmAVHeX0BjScOl9NauYHBsB0q4nnvdqOj9JdshY3BjDe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-19 06:48:35',
                'updated_at' => '2023-07-19 06:48:35'
            ),

            array(
                'id' => '1233',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'gilang',
                'username' => 'Gilang',
                'email' => 'muhammadgilanguser869@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$63LQiKP7NaTOScbLpCkBN.SCeZvvgJPC0wzJaf9YQ53Ud4JFZaTV6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-19 07:13:25',
                'updated_at' => '2023-07-19 07:13:25'
            ),

            array(
                'id' => '1234',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rey pinem',
                'username' => 'rey@6',
                'email' => 'pencarirecceh@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NVeIGaperYYIIz5CPw6PUu.bg4rx.7XD7tAXvzH2vfCxucEA2IhkC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-20 02:48:39',
                'updated_at' => '2023-07-20 02:48:39'
            ),

            array(
                'id' => '1235',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alexhalmar',
                'username' => 'alexhalmar',
                'email' => 'zainmalikalkalifi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TxeODj2BWTLmxUIKrzXrFeE6YsO5r5k7mpGO2kKZVtdms3./k05ZG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-20 10:31:24',
                'updated_at' => '2023-07-20 10:31:24'
            ),

            array(
                'id' => '1236',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'januar nagata',
                'username' => 'januarn13',
                'email' => 'januarnagata@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.9O39afUqksXdIPovFLwmeOED6BoPsFcMOjGXfygPJwDj5puC2.0.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-20 19:24:09',
                'updated_at' => '2023-07-20 19:24:09'
            ),

            array(
                'id' => '1237',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dzauqi ikhsan',
                'username' => 'Ikhsan',
                'email' => 'dzauqi8@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GvMykciO7WH2k9dWrmtoSeqfq18mr6TR0c5j6NUuUUVcBc7hvJD6a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-21 07:03:51',
                'updated_at' => '2023-07-21 07:03:51'
            ),

            array(
                'id' => '1238',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deronimus Chrismas',
                'username' => 'Dillo',
                'email' => 'deronimuschrismas@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WH6Q5XCjNo8kS64mvV0WAuPKC9Xzznl1.4bs4BpnMUwa/U6TJc/ES',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-21 07:07:50',
                'updated_at' => '2023-07-21 07:09:42'
            ),

            array(
                'id' => '1239',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Meiti Sudaina',
                'username' => 'meitisudaina',
                'email' => 'meitisudaina55@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$c3yvwEOt146w.4wuBbj/jO.glRnYtD33dWz768J9z8ueby.tMPR7.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-21 17:30:12',
                'updated_at' => '2023-07-21 17:30:50'
            ),

            array(
                'id' => '1240',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'asep',
                'username' => 'asep',
                'email' => 'okdahlah4@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gqPXhoMwrUtygvgPp59V9.vN8lP2cO2a.okZar5rRgXVvKFKyOuqO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-31 06:02:27',
                'updated_at' => '2023-07-31 06:02:27'
            ),

            array(
                'id' => '1241',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Basri',
                'username' => '@B45RI1212',
                'email' => 'basri.ptk83@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1iQMArEx6YDHmaaXJw36qOPMyACN9BJa1ibZWzf4Le7YmvUnnsdnC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-07-31 06:22:09',
                'updated_at' => '2023-07-31 06:25:42'
            ),

            array(
                'id' => '1242',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'YUSUF',
                'username' => 'YUSUF1507',
                'email' => 'yusufsihombing333@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7IuAHm.Vdh/Xafa2rSc9n.J7MHNnKLSNXmzHBXKskv4XiGz0AyVsC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-08-04 05:23:24',
                'updated_at' => '2023-08-04 05:23:24'
            ),

            array(
                'id' => '1243',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'zuqni',
                'username' => 'zuqni',
                'email' => 'arrahmanzuqni@google.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p6/qqvYZQS7b2luUHZa4feXn1yh0HcXmat9Pb0HD4zmNOX2htZ3um',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-08-20 02:28:47',
                'updated_at' => '2023-08-20 02:28:47'
            ),

            array(
                'id' => '1244',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'bos muda',
                'username' => 'bos muda',
                'email' => 'black_i90@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$zJ.i4VhMfagiNXPkwtN83uFSGunOtw/0WBsuZiId7dyL8ZR8l4hRS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-08-20 20:43:18',
                'updated_at' => '2023-08-20 20:43:18'
            ),

            array(
                'id' => '1245',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Reno',
                'username' => 'Renovirgiawan7',
                'email' => 'renovirgiawan99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$KlBlnFOdHUvs/eEHDnWWZ.5yMEyxtmSvL8./aP2xKBZbT01Wv1b56',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-08-23 08:36:07',
                'updated_at' => '2023-08-23 08:36:07'
            ),

            array(
                'id' => '1246',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'setiadi ersaputra',
                'username' => 'setiadi',
                'email' => 'setiadiersaputra.se@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bYfP0p1kG.Cyb8vr9JYZ5.uGjxPS/w4p5Ys147uBKn78XXPUygLae',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-08-23 10:27:44',
                'updated_at' => '2023-08-23 10:41:15'
            ),

            array(
                'id' => '1247',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Very',
                'username' => 'Very',
                'email' => 'very.naga@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mIAx2DP4mZFii.mRTybD2egRrjL/dpEVwHhUdCdoeIPTG5keQJq/m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-08-24 07:44:19',
                'updated_at' => '2023-08-24 07:44:19'
            ),

            array(
                'id' => '1248',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Intan Rosmiati',
                'username' => 'Tan',
                'email' => 'intan.ptk88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tHYAk2UYXyl25MWs.YJ8B.XU3a0YqRtztk3g5R4D04K/qdgbwBh26',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-01 06:38:39',
                'updated_at' => '2023-11-04 10:21:59'
            ),

            array(
                'id' => '1249',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jaa khairuni',
                'username' => 'jaa khairuni',
                'email' => 'khairunijaa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lSGkeU3pynmbOonOxwddTu36Yfd7LuoC43oEl7BTIe.tLjJ8hSDVi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-10 13:34:15',
                'updated_at' => '2023-09-10 13:34:15'
            ),

            array(
                'id' => '1250',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sinta',
                'username' => 'soyssss',
                'email' => 'sinta290304@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pQmKwozqp78wA5GPbqUoMOnq9Gf.983cqV.gjqoEvrMlrdBevyJAe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-10 16:54:53',
                'updated_at' => '2023-09-10 16:54:53'
            ),

            array(
                'id' => '1251',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rani',
                'username' => 'ranilia',
                'email' => 'e1011211072@student.ac.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mnORK/7pshHGKDKDEXDzeOoDiINTDgu57878W36gRbkm5TioL3ATa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-18 13:46:53',
                'updated_at' => '2023-09-18 13:46:53'
            ),

            array(
                'id' => '1252',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rani',
                'username' => 'ranilia',
                'email' => 'e1011211072@student.untan.ac.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4ORY9xLYd4DM1RqKDjITV.cG/a9aziFJZDWcXEFvGAPtJw17izEa2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-18 13:48:18',
                'updated_at' => '2023-09-18 14:42:48'
            ),

            array(
                'id' => '1253',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'andi',
                'username' => 'andi190',
                'email' => 'andihahaha@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$sdHstuSO1yOT53wK/uHtl.Q0jj3HHgulrAzsOYKIQP924B/q1hmzi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-18 15:09:12',
                'updated_at' => '2023-09-18 15:09:12'
            ),

            array(
                'id' => '1254',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'kuwat santoso',
                'username' => 'kuwat08',
                'email' => 'kuwatsantoso08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f0OPNbTV23IA9GFUvDEynuKJMcPga8yTmAZ69lWZFn57Hg8im2hvS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-19 12:41:46',
                'updated_at' => '2023-09-19 12:41:46'
            ),

            array(
                'id' => '1255',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'RIZQI',
                'username' => 'rizqimb',
                'email' => 'gabansariban@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$u9uIvgc0A..qhDnFWDvT2efNxScCHqms0SZ21OH7cZSS0TX2COJsm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-20 06:20:06',
                'updated_at' => '2023-09-20 06:20:06'
            ),

            array(
                'id' => '1256',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Antonius Arand',
                'username' => 'arandsosok',
                'email' => 'arandsosok@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4BRLbZpa0E7KM8H2K8Ra7OKk.P5ZgDAZ0pKhI69FRJ/Jw5D0E6y1q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-23 14:56:01',
                'updated_at' => '2023-09-23 14:56:01'
            ),

            array(
                'id' => '1257',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Akmal Faiq Khadafi L',
                'username' => 'akmal08',
                'email' => 'muhmdakmal08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pZZINyztAgZxbsN7/o5w3.f40vjMHrJ1ZgYgcKV7fspv1p1JqbpTq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-25 21:56:07',
                'updated_at' => '2023-09-25 21:56:07'
            ),

            array(
                'id' => '1258',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yogieyansha',
                'username' => 'YOGI',
                'email' => 'yogieyansha17@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oGzO3c0DMRCaZ19mCny1yuBZb76gmR/BDALsnffbXDl5wfvRxliUK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-26 07:16:55',
                'updated_at' => '2023-09-26 07:16:55'
            ),

            array(
                'id' => '1266',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'slamet',
                'username' => 'slamet 007',
                'email' => 'andy48955@gamail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t2PeGKGhhYV8s8NGifKTpucH6EIR05Nu2fLJF7lS.ovnBNxmvDxy2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-27 09:27:21',
                'updated_at' => '2023-09-27 09:27:21'
            ),

            array(
                'id' => '1267',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ujang',
                'username' => 'ujang',
                'email' => 'jalansunyi1099@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BH7iebHPJWwgwMitNBwPfO6oNF1yKD7vUvpriJya.DXeVbuDMhHDq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-09-27 19:24:04',
                'updated_at' => '2023-09-27 19:24:04'
            ),

            array(
                'id' => '1272',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yuza Fahrul Mujtahid',
                'username' => 'yuza20a',
                'email' => 'yuzafahrul@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CaDIklThphc2mp6Yi.9sWecBOqJUs9827u2AXXwWllPetuUQt0W8W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-02 03:24:53',
                'updated_at' => '2023-10-02 03:24:53'
            ),

            array(
                'id' => '1273',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Lio Febrianto',
                'username' => 'liohez1298',
                'email' => 'liofebrianto98@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cCXmUtUsse8vgBp3pEw6keQGwam0dnY0TyGxF3wHTr0Bvdo.HbNFa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-07 04:14:09',
                'updated_at' => '2023-10-07 04:14:09'
            ),

            array(
                'id' => '1274',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'regie septiawan',
                'username' => 'regie',
                'email' => 'pontianakregie@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Tub2Gpsc9FElyvdr6sun1uouwqgjf3ttt6o7kl85F6nFX7b7qpC4S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-08 11:22:35',
                'updated_at' => '2023-10-08 11:22:35'
            ),

            array(
                'id' => '1275',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Nedi Suryadi',
                'username' => 'ladaeng',
                'email' => 'ladaengitunedi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e8VseoxOZt0YGeIjB6SonOpeOssCkRPwdON0lAkeCT7XE6qzarF4a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-18 01:58:32',
                'updated_at' => '2023-10-18 02:01:33'
            ),

            array(
                'id' => '1276',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Arief Ramadhabi',
                'username' => 'Areeframa',
                'email' => 'areef.ramarama@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SqNXW6rNebCTf7/XSw3jpelAdVxV.2GxkZiFo3jXW55199KbOPNG.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-19 02:50:32',
                'updated_at' => '2023-10-19 02:50:32'
            ),

            array(
                'id' => '1277',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'tawfiq',
                'username' => 'faeyza',
                'email' => 'tawfiq.alfarizqi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Uc9UANvY5j94LKHkG.OUD.1jud1a3.thG5D5ijn2iNlEunAt1Vz46',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-20 09:02:41',
                'updated_at' => '2023-10-20 09:02:41'
            ),

            array(
                'id' => '1278',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammad yudi',
                'username' => 'yudi4469',
                'email' => 'yudic4469@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EfOdzVYnya/H4gTAXkoG3.PcRZSXUcFhZJQuKvsj1unnW3uK2Ld.S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-23 08:04:14',
                'updated_at' => '2023-10-23 08:04:14'
            ),

            array(
                'id' => '1279',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Sholeh Putra Ik',
                'username' => 'Muhammad Sholeh',
                'email' => 'solehputra097@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GSRnim/CrrhYEO/7D4S9L.a75uUp6t8EFC70U9atRNyGadVmK9.nO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-23 09:09:20',
                'updated_at' => '2023-10-23 09:09:20'
            ),

            array(
                'id' => '1298',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Billy Metarid',
                'username' => 'billymetarid',
                'email' => 'billymetarid12345@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4zEMGGd5JiHIp63LUk05nOQk.0lEVtcqTk3Z60GE8axUuyRipvG0a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-10-29 02:13:36',
                'updated_at' => '2023-10-29 02:13:36'
            ),

            array(
                'id' => '1299',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sandy',
                'username' => 'storiamos',
                'email' => 'renathalurp@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BcMJRNqAD1Yw5xhIM9bOXuIk6.8La7LNJF0ClRlKoGW8be1ZTQy66',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-02 01:11:30',
                'updated_at' => '2023-11-02 01:11:30'
            ),

            array(
                'id' => '1304',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Danny Prasetyo',
                'username' => 'dannyp',
                'email' => 'santosodaniar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Gmulhr2rTrsidHwn9.39O.vQFNa0UwkTXj5kI7Ovq3sOz4Cf4chvW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-03 07:31:11',
                'updated_at' => '2023-11-03 07:31:11'
            ),

            array(
                'id' => '1305',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alessandro',
                'username' => 'alex',
                'email' => 'tholib.ale@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$x3nSVIqJEeMhYiwidnph0OIijN2.uqYW1.MbrT.8lBkdFMK6qd4Ma',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-03 07:49:40',
                'updated_at' => '2023-11-03 07:51:25'
            ),

            array(
                'id' => '1306',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rahmat',
                'username' => 'rhmtmcy',
                'email' => 'inirahmatasli@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fd85ii3.5/BLtngtJbdiAeBC.KWj5jM5tIgYg5wRkuwLp2HcEqTqa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-03 07:50:20',
                'updated_at' => '2023-11-03 07:51:34'
            ),

            array(
                'id' => '1307',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'fahry',
                'username' => 'fahry',
                'email' => 'fahryambawang@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gajCQjK9k0U9.lTjozwWH.ZzmEEL1sKcaOVeS/1JimaI.u7h0DYwm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-05 16:05:03',
                'updated_at' => '2023-11-05 16:05:03'
            ),

            array(
                'id' => '1308',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ZuliamHamdyQurniawan',
                'username' => 'ZuliamHamdyQurniawan',
                'email' => 'zuliamhamdyqurniawanhaha@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1.GMD5DEMuydl0XSIoOKUOhCQUi5Lv05VPeHXMXSPC3MlCvUxKQkq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 10:54:47',
                'updated_at' => '2023-11-07 10:54:47'
            ),

            array(
                'id' => '1309',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Dicky saputra',
                'username' => 'dickysaputra56',
                'email' => 'ds409705@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$knlcbL1GbRk8naCmVGIAJOEUoG8CmR0LdIpzuBwiXXxDs16pnvFja',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 10:55:00',
                'updated_at' => '2023-11-07 10:55:00'
            ),

            array(
                'id' => '1310',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'IRSAN JULIAN ALDIRGA',
                'username' => 'irsan',
                'email' => 'irsyanjulian@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jWxYxwrLCbehfYy/WI2Pq.pBraP4W1YJ9FQWZG5EU2x1YzoEIoAXS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 10:55:10',
                'updated_at' => '2023-11-07 10:55:10'
            ),

            array(
                'id' => '1311',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'dhika',
                'username' => 'vgdhika88',
                'email' => 'vgdhika.work@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7y5L8gdiXkUv44P48l3ugO90x3Zy9SlDbTdJBp4/5hZivjzEjrtLy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 10:57:05',
                'updated_at' => '2023-11-07 10:57:05'
            ),

            array(
                'id' => '1312',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'iksan',
                'username' => 'iksanauliaa',
                'email' => 'iksanaulia303@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Dcw7GQDDKyneZcc.QzmEm.EVIbfEGI299RhkhsFquQ7zHLQeZn7zu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 10:59:18',
                'updated_at' => '2023-11-07 10:59:18'
            ),

            array(
                'id' => '1313',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'syhcfarelsawalana',
                'username' => 'indonesia',
                'email' => 'syhcfarelsawalana1@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MZMz2bgXEEFIX8AO9xf50.pV.F2Vn7o6btVXwSFWpwNfnW24QikVC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 11:00:43',
                'updated_at' => '2023-11-07 11:00:43'
            ),

            array(
                'id' => '1314',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad ikbal',
                'username' => 'ikbal',
                'email' => 'iqbalvivo734@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$moJhtFhcFkfiBS3F0gDCkedJZ1coLDwwc8iChl5Ca5th7mhF48Eg6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 11:01:27',
                'updated_at' => '2023-11-07 11:01:27'
            ),

            array(
                'id' => '1315',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'farrel',
                'username' => 'farrel',
                'email' => 'spakzpro@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/tCTVrQR1CpdnvgjqtaElep6tweqo3Ro9t2PT2eObFD/TWeFirzl.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 11:18:09',
                'updated_at' => '2023-11-07 11:18:09'
            ),

            array(
                'id' => '1316',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rahmat hidayat',
                'username' => 'Abang driver',
                'email' => 'haryadi.oppo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$OuQysDXBIumTY75VOkWxEO9Jy2aHgX.zZFKWvDAn.zPi6ZiUcXiHS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 11:45:01',
                'updated_at' => '2023-11-07 11:45:01'
            ),

            array(
                'id' => '1317',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Kelvin William',
                'username' => 'Kelvin',
                'email' => 'Kelvinwill213@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oQQ4NkFdB8Z/z5BPOozSDuxh4TnXQNvP3XMHACZ//uI4mvaPZfO7q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 12:08:49',
                'updated_at' => '2023-11-07 12:08:49'
            ),

            array(
                'id' => '1318',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'joanarcadia',
                'username' => 'Joan',
                'email' => 'joanarcadiaa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AdrKYyY9DcG.2hJ9IcrVMOTs6XZN8rBQzU6d6SiRQb3AIlGOxuhuW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 12:23:14',
                'updated_at' => '2023-11-07 12:23:14'
            ),

            array(
                'id' => '1319',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Zahra1004',
                'username' => 'zahra1004',
                'email' => 'octorizky662@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YynMH752nq3QF9g1FjT4yu.QR6dJvqzEWmmKBor3kRqsIf2XizQoG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 12:37:11',
                'updated_at' => '2023-11-07 12:37:11'
            ),

            array(
                'id' => '1320',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ratna dewi kurniasih',
                'username' => '1ratna',
                'email' => 'hafidzfiqrat3011@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9maV0QfjpnkGngkqMmileuas.23s6ULPsHhyad0Sgqm0A.qWxWBgC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 12:47:47',
                'updated_at' => '2023-11-07 12:48:38'
            ),

            array(
                'id' => '1321',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ibnu',
                'username' => 'Ibnu awal',
                'email' => 'fikuysptwn@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$y1MBPulA2Y49ErNCX5BjWORLouoJqAnV6btITYEBxwOrMcmjSLoQ.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 13:14:11',
                'updated_at' => '2023-11-07 13:14:11'
            ),

            array(
                'id' => '1322',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agun saputra',
                'username' => 'babangkumis',
                'email' => 'pakutehr@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TefA1a6ZFEQ/NRHvFgV3EuYGxYO5bQfj.uFqKmBRlPsasGe6xu8q2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-07 18:10:17',
                'updated_at' => '2023-11-07 18:10:17'
            ),

            array(
                'id' => '1323',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Heriansyah',
                'username' => 'heri',
                'email' => 'heriansyah.ptk33@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Wrrf0XajcpwfBPhYK7tBrujQmtJ8B9p5vgNqshrZRaR7yGel3Wd22',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-08 03:21:55',
                'updated_at' => '2023-11-08 03:21:55'
            ),

            array(
                'id' => '1327',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'heriansyah',
                'username' => 'hery',
                'email' => 'heriansyahptk99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VjctDMxAT8KMxP4aHXpSduZ9M8G4NRh2dqxiyvo6fyNfFIN3Uq2aa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-08 03:24:45',
                'updated_at' => '2023-11-08 03:24:45'
            ),

            array(
                'id' => '1328',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'trio agatha',
                'username' => 'pemayo',
                'email' => 'trioagatha15@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$F44BarnMjyyfnTxMOUUK1uBoduWmqNas3wKZzfJo19vPHPjMmsKdm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-08 10:20:45',
                'updated_at' => '2023-11-08 10:20:45'
            ),

            array(
                'id' => '1329',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Thesar adyaksa',
                'username' => 'tesar',
                'email' => 'mtadyaksa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.sBnIfuh8nmLvPojdaQzquqcr36EAhJMY6aNej9.mnuripGS/NB1C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-09 00:43:18',
                'updated_at' => '2023-11-09 00:43:18'
            ),

            array(
                'id' => '1330',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad iqbal',
                'username' => 'Saud',
                'email' => 'miqbal.a099@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$narHT6rMIH5RSEQtaWctNetbHN4MpGP90ijgv8dmST2KQ3ts.rDz.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-09 08:05:14',
                'updated_at' => '2023-11-09 08:05:14'
            ),

            array(
                'id' => '1355',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andre Tolani',
                'username' => 'atolani9330',
                'email' => 'atolani9330@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yu9KmTJMASDhqEbqbfmAzOjCAU./6odK46AVS6jppnnYtCOxbdHIa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-09 11:18:46',
                'updated_at' => '2023-11-09 11:18:46'
            ),

            array(
                'id' => '1359',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andre Tolani',
                'username' => 'tolaniandre070',
                'email' => 'tolaniandre070@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ViVzGhQgBV/AnrGBW5MoiurRejQOLMBUhRRLBx.68MVLTuYqw1UGq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-09 11:21:40',
                'updated_at' => '2023-11-09 11:21:40'
            ),

            array(
                'id' => '1360',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Niek',
                'username' => 'Niek',
                'email' => 'nielsenpherensius@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$p2zrhJkH5ahRBWuzKnSWl.nGh6f30OdYYyO3gK5gnFU3bbRp.53BK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-11 03:58:07',
                'updated_at' => '2023-11-11 03:58:07'
            ),

            array(
                'id' => '1361',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ikhsan Restu Prasetyo',
                'username' => 'restu444',
                'email' => 'restuikhsan11@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3fOgD/TL1u3ahXgXzQ1srOpq9ndgEEMMGQXuDpHhAb6rVhr4q98rC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-11 17:58:21',
                'updated_at' => '2023-11-11 17:58:21'
            ),

            array(
                'id' => '1362',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'zaky alfarizi',
                'username' => 'zaky',
                'email' => 'zalfarizi813@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$B36zo8qDtn5W1syrweuKzecACqNYkHWveIhsN2eoL52Q/9ym0GB4q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-15 11:03:09',
                'updated_at' => '2023-11-15 11:03:09'
            ),

            array(
                'id' => '1363',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'RAHMAN HAKIM',
                'username' => 'Bangman',
                'email' => 'ayahfeeza@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xV0BmXcZjMo1OReK9pxnEOwCp6wiRWNqwjMWv4J4wHQAVvH4HC/gi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-17 03:23:08',
                'updated_at' => '2023-11-17 03:23:08'
            ),

            array(
                'id' => '1364',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Mang Ujang',
                'username' => 'munkjunk',
                'email' => 'Munkjunk66@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$SOwFmwjY9NQVyRf2IU2wiu9Mj4Rb3Sw0LUQvQK69S1q.FuBa7m8M6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-18 11:41:10',
                'updated_at' => '2023-11-18 11:41:10'
            ),

            array(
                'id' => '1365',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'oesman',
                'username' => 'man',
                'email' => 'symanz93@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GFZABevp3vLz.Izfv2uL/Oz1jt1NTAoXL35RgVTpBP4XVapEm52Ma',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-19 06:46:13',
                'updated_at' => '2023-11-19 06:46:13'
            ),

            array(
                'id' => '1366',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'feby seviola',
                'username' => 'feby',
                'email' => 'febyseviola01@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TWtdZocVT7qTstOrSzxBJevCGkRnPze1QNWyWaGfVRFOVPKujS9wa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-29 05:15:44',
                'updated_at' => '2023-11-29 05:15:44'
            ),

            array(
                'id' => '1367',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ritno Agung',
                'username' => 'Ritno1',
                'email' => 'ritnoagung89@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$km9lyTMaSk.CziFdv2piru/uP.L0/1d7Gekm97D1Xh2mGn54HtFNG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-11-29 20:55:07',
                'updated_at' => '2023-11-29 20:55:07'
            ),

            array(
                'id' => '1368',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ari mauludin',
                'username' => 'ari88',
                'email' => 'arimauludin10@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AC1N8j4LuJHUABfX4MX19OHtK5ZrN7tjMYM9zNCyUNw3DxRSOWoGG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-01 01:11:00',
                'updated_at' => '2023-12-01 01:11:00'
            ),

            array(
                'id' => '1369',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sine',
                'username' => 'nyyel',
                'email' => 'nyy180783@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Cc3NSL9IKjJDiI/LxQ8H5uocBkQgUjcTHKMv6C9aKgPlfONq6YRd6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-02 00:58:09',
                'updated_at' => '2023-12-02 00:58:09'
            ),

            array(
                'id' => '1370',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ali',
                'username' => 'mas ali',
                'email' => 'alikhaidir406@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$O87aYh6Zx9AuNvFc4NWdW.sHZtDRkGBbXtGoEIsJ9wyNanVJozmca',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-02 11:09:06',
                'updated_at' => '2023-12-02 11:09:06'
            ),

            array(
                'id' => '1383',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rico',
                'username' => 'Tjung',
                'email' => 'rctjung@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$S0TXgyiaJqlp//tk1h33AuK3wHGsiT.vU1bvCtDAp.WKldGzo2.3K',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-02 15:33:01',
                'updated_at' => '2023-12-02 15:33:01'
            ),

            array(
                'id' => '1384',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'susan',
                'username' => 'susan',
                'email' => 'susantyb61@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Asvehv7waDZoZTOatrmOz.yzh1X.94Y12eZTw4s40ZQP8JKcldLHS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-14 03:32:00',
                'updated_at' => '2023-12-14 03:32:00'
            ),

            array(
                'id' => '1385',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sela',
                'username' => 'sela123',
                'email' => 'indrasela@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$EzAnpJoBHt63zjIpqze8kOhTGhm/hOy68NpcOaSaCbujzaHH8fsNK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-22 06:28:42',
                'updated_at' => '2023-12-22 06:28:42'
            ),

            array(
                'id' => '1386',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'gweneth',
                'username' => 'gwen',
                'email' => 'gweneth632@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R/ehzU6onscO1UZLN1jyJuJvWXZeqqVh.Yl7Xm6YgFKGv1lqn9GLy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-25 16:57:47',
                'updated_at' => '2023-12-25 16:57:47'
            ),

            array(
                'id' => '1387',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'helmi rismanto',
                'username' => 'raden',
                'email' => 'kekitaajabosku@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XmmQb0cLCmKrc/mV.Zdd4u5/BkbBYrRrdi1wYZMV2pSi4s5cEN5WG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-26 09:44:53',
                'updated_at' => '2023-12-26 09:44:53'
            ),

            array(
                'id' => '1388',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Eric Dharmawan',
                'username' => 'ericdharmawaan',
                'email' => 'ericdharmawan.ed@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$l7ehyB9/hYL7gMz6gkoEKuMltuKEl5wsEB/nrN0hbycPVxjX3RHnW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-28 04:47:11',
                'updated_at' => '2023-12-28 04:47:11'
            ),

            array(
                'id' => '1389',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Mulyadi Darmadi',
                'username' => 'Mulyadi',
                'email' => 'alfianputrapratama833@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$afeV6oc2CsQIzaxovc/MzePDlunJMzKr/smoweHGaq6ejhldCUnU6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-30 03:58:20',
                'updated_at' => '2023-12-30 03:58:20'
            ),

            array(
                'id' => '1391',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hermanto',
                'username' => 'hermanto',
                'email' => 'hermanto.sgm@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$S0VXPNoaDEa.220XBHGpc.OgxxWKrL8hV29CpegPu5bA1eMH0LrtK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2023-12-30 12:49:04',
                'updated_at' => '2023-12-30 12:49:04'
            ),

            array(
                'id' => '1393',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andreas Kurniawan',
                'username' => 'andreasrk_',
                'email' => 'andreasriziq23@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$MmfZew9IrQeRqSBE2S4Q..HTkGRdpjhnVEES7HJ8XXjMvLA1hjbyu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-09 15:49:26',
                'updated_at' => '2024-01-09 15:49:26'
            ),

            array(
                'id' => '1394',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'eka',
                'username' => 'eka',
                'email' => 'ekanovitasari94@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$A0Tm9CD0Tg1q9DhGg9PLCuRvJTSVeWC6CKWohONuOsHYpX7qWUQ86',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-16 07:23:32',
                'updated_at' => '2024-01-16 07:23:32'
            ),

            array(
                'id' => '1395',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Farhan rivai',
                'username' => 'farhan',
                'email' => 'farhanrifal13341@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XBCKQxR4HL2kxxXZk39Ps.yqFGdfVQcHSWTjeTO/NhFCiYCrHIfbm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-16 12:54:58',
                'updated_at' => '2024-01-16 12:54:58'
            ),

            array(
                'id' => '1404',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nawang',
                'username' => 'nawang24',
                'email' => 'nawangkencana24@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NlGI/jeJephDqPE/sax07OoakKtgNbijZkoWbauSfbcRI/ICYswKy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-18 14:39:35',
                'updated_at' => '2024-01-18 14:39:35'
            ),

            array(
                'id' => '1409',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nawang kencana dewi',
                'username' => 'dewi24',
                'email' => 'kencana.dewi.2003@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fTQfP4cKwalmzZvxCgfDo.QB/hXIJbHkQ2uYiDwwZIAM.1bnQZg1y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-18 14:42:00',
                'updated_at' => '2024-01-18 14:42:00'
            ),

            array(
                'id' => '1413',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deni Arief Rochmat',
                'username' => 'Dendent',
                'email' => 'deniarief@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U6NX54yVwsUesuYSqGr.eefJkGqMT90ByXzcPcrPCKBR/zvPjWKr6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-19 09:51:22',
                'updated_at' => '2024-01-19 09:51:22'
            ),

            array(
                'id' => '1414',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'nurhot Aulia.s',
                'username' => 'nurhot030878',
                'email' => 'cvmutiaragosyen497@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$L7wnmlsrUpCg3nVjVBxaKuNpMyEQpYTNwOY/NbuDBkcMFbeAdonfa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-21 03:17:16',
                'updated_at' => '2024-01-21 03:17:16'
            ),

            array(
                'id' => '1415',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'merry yunita',
                'username' => 'merry',
                'email' => 'merrysibarani00@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ORxELzsCz6xnClfOwo3v4evEFZGV.GUZw5XyKKaxr2fGgKF7zfoYC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-21 03:20:09',
                'updated_at' => '2024-01-21 03:20:09'
            ),

            array(
                'id' => '1461',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'irwan',
                'username' => 'xmass',
                'email' => 'irwan.christmas2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$e20rwlkb77vfuQHOJ91jvu9hhoQgBhO/FpeSvGVG4IdnkRjlrt.Eu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-31 00:21:40',
                'updated_at' => '2024-01-31 00:21:40'
            ),

            array(
                'id' => '1462',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'jayaraya',
                'username' => 'jayaraya',
                'email' => 'jayarayarentcar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZWGXAoFiBV.ZlXZfT4H80efcL4SSAIF2.BJvOzcdF2NNGlEFeIWaK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-31 01:27:49',
                'updated_at' => '2024-01-31 01:29:27'
            ),

            array(
                'id' => '1463',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Seto Nurcahyo',
                'username' => 'SetGo!',
                'email' => '04setonrc@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YRnRwUU7BR0taiygSKcnYuRAoovNy9LPY.jp.l/lyuXH5G1FYpjLu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-31 12:45:28',
                'updated_at' => '2024-01-31 12:45:28'
            ),

            array(
                'id' => '1464',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rena Andreani',
                'username' => 'Rena',
                'email' => 'stupidtralala@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$gUfZ75yxV9WJRh/QnBjgwe.Xe62OYNk6VzaJbMT9zvemwYJeqN.mC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-01-31 21:16:41',
                'updated_at' => '2024-01-31 21:16:41'
            ),

            array(
                'id' => '1468',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rohid Nazari Sultan',
                'username' => 'mambrosaladass',
                'email' => 'rohidnazarisultan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$j0oQDsrvdnWymbGv9MH5nes25ymTCSdroEWDawNI3FozV9fK0uU4S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-01 03:16:13',
                'updated_at' => '2024-02-01 03:16:13'
            ),

            array(
                'id' => '1469',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ary',
                'username' => 'Ar store',
                'email' => 'aryglodok178@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tom/Rt49NQM2DK10UFT3g.559DdCnvni4Ka63X0l3K0en4hmz/r3y',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-01 03:40:23',
                'updated_at' => '2024-02-01 03:40:23'
            ),

            array(
                'id' => '1485',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rahmat',
                'username' => 'risky',
                'email' => 'pokokkeladi231@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9b407s7o5hDyljYxr2WKduAMKl4Eddis8b880.defskl5C0SY0Lm2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-01 14:54:08',
                'updated_at' => '2024-02-01 14:54:08'
            ),

            array(
                'id' => '1486',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rahmat',
                'username' => 'risky',
                'email' => 'pokokkeladi321@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q2a0jQZQQUA4EmACW/b7R.RwnzakjZoLrign4/Zvt3liGz0C64maq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-01 14:56:26',
                'updated_at' => '2024-02-01 14:56:26'
            ),

            array(
                'id' => '1487',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'abah dzovan',
                'username' => 'abah',
                'email' => 'abahdzovan234@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m.DRapjNU/4/UdImsn8cIekOCLOR1//yOBS/JQv2wwp0JYqH3C1QO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-02 13:22:11',
                'updated_at' => '2024-02-02 13:22:11'
            ),

            array(
                'id' => '1489',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'R. Izzuddin Ilmy',
                'username' => 'Ilmy2008',
                'email' => 'izzuddinilmy2008@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5fHoTHkv3zvyAAdBNTEvhOs7PWw6nBhP2bKnon1leIoYaRZgxY496',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-10 07:47:58',
                'updated_at' => '2024-02-10 07:47:58'
            ),

            array(
                'id' => '1490',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yendi aszarizal',
                'username' => 'yendi',
                'email' => 'percetakan.amanda.davita@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yjttypuuoecft.c0W0mwbOGZ4/W/LCIhfyATc367EgBU0UuH4fmjW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-11 13:10:26',
                'updated_at' => '2024-02-11 13:10:26'
            ),

            array(
                'id' => '1494',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'agus',
                'username' => 'aguslim05',
                'email' => 'aguslim774@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$PAM04mk4HoUr42KR/V7hOuv4JvXERxbHKWaB.n5lrKIuMoxDJFi/u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-13 10:12:13',
                'updated_at' => '2024-02-13 10:12:13'
            ),

            array(
                'id' => '1498',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Hendra gunawan',
                'username' => 'Hendra_6969',
                'email' => 'brekhelee888@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tn3aGG/mTGCzvyFcolfq5OOG1j/o8tkjqvX9MPaFSBP/uGLiJT1bG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-14 07:43:02',
                'updated_at' => '2024-02-14 07:43:02'
            ),

            array(
                'id' => '1499',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'marcio',
                'username' => 'da nobrega medeiros',
                'email' => 'marciodanobregamedeiros@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5k5C4cQ655f8kf0y.VuKc.rypfpBYot6y7nXpCLcETVxiurTmGH0e',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-15 12:26:56',
                'updated_at' => '2024-02-15 12:29:32'
            ),

            array(
                'id' => '1501',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Reny Wulandari',
                'username' => 'Reny',
                'email' => 'renywulandari18@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7HQySQi9cyYbdQtLynmBWuCYgXMYxxHgxISqDs7auPU/IVdopoV.u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-27 02:41:22',
                'updated_at' => '2024-02-27 02:41:22'
            ),

            array(
                'id' => '1502',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Irfan Yudha',
                'username' => 'irfanyudha91',
                'email' => 'irfanyudha@email.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yx.G250Up75pB6K/SyM6DO1kJG5xzV7FwFoKzpZQwCINmysWsFG6C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-27 07:51:23',
                'updated_at' => '2024-02-27 07:51:23'
            ),

            array(
                'id' => '1503',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Puteri Noviandhiny',
                'username' => 'puterinoviandhiny',
                'email' => 'puterinoviandhiny@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Sx06zKLhv1unWSb640JszuhnJRVhvJEyb75ihUKJcaiHrUKBwKqlS',
                'description' => '<p>testt</p>',
                'remember_token' => '5ma19Xq5vqINr3j2udc54PwtzK3sAkf3IVR1CLBpukvenY28NzL9mOGsp6f7',
                'created_at' => '2024-02-27 08:07:57',
                'updated_at' => '2024-05-06 07:19:17'
            ),

            array(
                'id' => '1515',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'M.JANi',
                'username' => 'jani',
                'email' => 'rocker11994@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VzvzkPDmTvcLZ1.5hNVX0.0AAkISkNkODXe4gGXMMJEU/.Pf6D7Gq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-27 22:12:26',
                'updated_at' => '2024-02-27 22:12:26'
            ),

            array(
                'id' => '1516',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad yani',
                'username' => 'amat',
                'email' => 'agustinakiki99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$XDscoMWvCddNd1TU3qgj1uqSrTY8hhOSWBFjl6N88WajDXNG5dNeW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-02-27 22:15:14',
                'updated_at' => '2024-02-27 22:15:14'
            ),

            array(
                'id' => '1522',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Januardi Ridho Hikmawan',
                'username' => 'Edho Anyone',
                'email' => 'januardiridho@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TZIDAVOXF4OlEXSxfqF78.fB7b8k/0O/AcmbAvJ/d4HGnMUsE3Bte',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 10:29:13',
                'updated_at' => '2024-03-03 10:29:13'
            ),

            array(
                'id' => '1523',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'juvenus suryadika',
                'username' => 'vg_dhika',
                'email' => 'vgdhikaps21@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WUfH.SC44APAOsM07Ak9xuMfe8ky8Ldq9UAM6yxHf/7yYFo5SL6/2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 10:29:14',
                'updated_at' => '2024-03-03 10:29:14'
            ),

            array(
                'id' => '1524',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'peter',
                'username' => 'peter',
                'email' => 'peterxmp4@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$oCfZgsn1tYUku7ytR8bz/ef/gZB17gLz59UIijm6J0iaPhpX5PzJ6',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 10:30:52',
                'updated_at' => '2024-03-03 10:30:52'
            ),

            array(
                'id' => '1525',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'afendi',
                'username' => 'afendi',
                'email' => 'afendi.julianto112@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bYRZX9Ff9RDDA0EjAgsOgOjanVg2asaAd.VyKTlVNwkmTA/7bVc6W',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 10:35:11',
                'updated_at' => '2024-03-03 10:35:11'
            ),

            array(
                'id' => '1526',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'gunawan',
                'username' => 'ayoung7',
                'email' => 'agroyoung.ay@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Lze4/pSBgu2bVMKS9WNhvuFt62pEGCcElw8qvaQsF.Znntyt1GapK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 10:37:58',
                'updated_at' => '2024-03-03 10:37:58'
            ),

            array(
                'id' => '1527',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ipeh',
                'username' => 'ipeh',
                'email' => 'syfvania@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jVkxG4RcG/UXw.iHV1NkqeDp/vBe3Ezx8efix/9tukQGv1Imx65Ia',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 10:49:42',
                'updated_at' => '2024-03-03 10:49:42'
            ),

            array(
                'id' => '1528',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sukaimi',
                'username' => 'kemi',
                'email' => 'maximsukaimi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$AuTAUkegxwDe/oUKl68kRexY8LbkMaoXbPzF7w3nU3GxtVUweQmo2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 11:31:58',
                'updated_at' => '2024-03-03 11:31:58'
            ),

            array(
                'id' => '1529',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Faisal Wijaya',
                'username' => 'fwijaya70',
                'email' => 'faisalwijayavibe@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QcY6d8BxBksIaFvxSss8d.uK8K7w0yipKxktkHE.0wCw.IM3QgKLm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 12:27:13',
                'updated_at' => '2024-03-03 12:27:13'
            ),

            array(
                'id' => '1530',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Herra',
                'username' => 'herrananda',
                'email' => 'herranandads@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pXvQuikzQg7cArxgesuQ2.Zfg2nr4g2VYaO4K78oGyKeZaQPbNylS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 13:34:18',
                'updated_at' => '2024-03-03 13:34:18'
            ),

            array(
                'id' => '1531',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Surya Murdiono',
                'username' => 'suryamurdionoo',
                'email' => 'suryamurdionoo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YEImb7CDdND/BAONjrILDuG3gfQ9QBKt7mIPgqS9tcYM2I.ndSAsi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-03 22:17:49',
                'updated_at' => '2024-03-03 22:18:56'
            ),

            array(
                'id' => '1532',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Amien',
                'username' => 'Amin',
                'email' => 'Amienyak221@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$i/X3skVK6VxaQkX30FMqH.4U79D72BUJysmLz2z1zr46GgInp0qWK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-05 02:50:01',
                'updated_at' => '2024-03-05 02:50:01'
            ),

            array(
                'id' => '1533',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Hilmy',
                'username' => 'Hallo_Mii',
                'email' => 'muhammadhilmy013@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$knDc9nMesLp2mGNHW/fJ0.YWpFXqLsdnbYKmcuKMeBxyW3bj0CAh.',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-06 02:17:33',
                'updated_at' => '2024-03-06 02:17:33'
            ),

            array(
                'id' => '1534',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Eric Dharmawan',
                'username' => 'Eric',
                'email' => 'dharmawaneric.ed@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mYO3Ba.veGbSdlVy55FXWueSgsFiqjxDvoJ3y6.k6jpynvPUWFA1K',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-06 07:09:42',
                'updated_at' => '2024-03-06 07:09:42'
            ),

            array(
                'id' => '1535',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'aulia restianda',
                'username' => 'resti',
                'email' => 'auliarestianda14@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WYkOOltXrRb1m.aMTIAgRuqTf8wVVEgHbSj3MpuODdexRkBWYFX9O',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-06 08:52:24',
                'updated_at' => '2024-03-06 08:52:24'
            ),

            array(
                'id' => '1536',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'reno buchari',
                'username' => 'ren',
                'email' => 'renstars08@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$d3wqL1itKqSPQ94K7GIsU.7R56.TZ/olFEBjsWKX/okgQjfqt88Ja',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-06 11:58:19',
                'updated_at' => '2024-03-06 11:58:19'
            ),

            array(
                'id' => '1537',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Rifky nurvianto hidayat',
                'username' => 'kyy',
                'email' => 'rifkynurvianto19@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jHZl9mGQCJb01EUwgK6qf.YKOi2Z5cTg0enpk3n/vvnu4WWXX8mEu',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-07 09:41:12',
                'updated_at' => '2024-03-07 09:41:12'
            ),

            array(
                'id' => '1538',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ilham',
                'username' => 'ilham',
                'email' => 'ilham@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$T/CYLbcaA1zq39qKAG6l0O4FnaPE00pwcXqALGIgKH6wF6aPzl7jK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-07 12:21:25',
                'updated_at' => '2024-03-07 12:21:25'
            ),

            array(
                'id' => '1539',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'alif',
                'username' => 'bt',
                'email' => 'alifbt683@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$UfUtIErJMuZFte6AhDJUa.8RZ.xWsCNADutTJzWrWdYGhWo2hWOUW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-09 09:39:36',
                'updated_at' => '2024-03-09 09:39:36'
            ),

            array(
                'id' => '1544',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Susakti Wibowo',
                'username' => 'Susakti92',
                'email' => 'susaktiwibowo@ymail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s1IQW3Zur/ohvQPiA.F2duDNdrNkyNaeDIb9.nUiww.1/fIUCUiNq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-16 22:04:04',
                'updated_at' => '2024-03-16 22:05:39'
            ),

            array(
                'id' => '1545',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ricki septria',
                'username' => 'Ricki',
                'email' => 'septriaricki@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$GZe3VrjzElploL9xFi9whuHnxpRAdsh2uTpgLYbOjERmoL6g1P1KS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-18 13:34:05',
                'updated_at' => '2024-03-18 13:34:05'
            ),

            array(
                'id' => '1546',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'LUQMAN RISWANDA',
                'username' => 'riswan',
                'email' => 'luckyriez@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HbT0.5KyYT0zasLvYE5W6e1Eu0CBnsLyzIMKYoH26akMY2rBF4AsK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-20 14:20:08',
                'updated_at' => '2024-03-20 14:20:08'
            ),

            array(
                'id' => '1547',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'chou',
                'username' => 'chou666',
                'email' => 'chouxselena69@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qqiLfdHCdux1kGvBhL.qhOvymRY7rGYp5TQ1Ltm3Z6DVokpNl9yHi',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-20 23:42:02',
                'updated_at' => '2024-03-20 23:42:02'
            ),

            array(
                'id' => '1548',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Boerhannudin Hartono',
                'username' => 'burhanhtn',
                'email' => 'boerhannudinhartono@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f6hbTXK85XkkJtSz61Rde.e1Wg/cL8OsfeVaHEPFTOoLNlMmT0.lO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-21 13:31:27',
                'updated_at' => '2024-03-21 13:31:27'
            ),

            array(
                'id' => '1549',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'budiman',
                'username' => 'budiman',
                'email' => 'baimw2584@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$uY1x/o4qzDgH0/dUJZVZ9uu8rW1IKtdR5punPFs.GqKycem3js82q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-22 08:07:43',
                'updated_at' => '2024-03-22 08:07:43'
            ),

            array(
                'id' => '1550',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ikbar',
                'username' => 'mv',
                'email' => 'khairuddinikbar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mLLz2D3TIsOYqpypRzKdXei9.aaArjF2vKkD64qRkDgnFi6wOOaXC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-23 02:02:08',
                'updated_at' => '2024-03-23 02:02:08'
            ),

            array(
                'id' => '1551',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Agus Prianto',
                'username' => 'boncoy',
                'email' => 'aguscool99@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$R/yTwaKRnSmKWklkF.Y09upt2we0r0iM9WL.jrJMirtov6oFWxJ8q',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-23 21:35:51',
                'updated_at' => '2024-03-23 21:35:51'
            ),

            array(
                'id' => '1555',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Boncoy cool',
                'username' => 'boncoy',
                'email' => 'boncoycool@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$lX2DoS2acNZ095GzxQNv.unOIstBn5bbURrLtYYgTVggkqRLEiV/2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-23 21:37:42',
                'updated_at' => '2024-03-23 21:38:57'
            ),

            array(
                'id' => '1560',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'zulhaidir',
                'username' => 'zoule',
                'email' => 'zulhaidir61@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WIWPg2NOYp1fycuAyJZRhex5vwP2DEHh1AzVMGkxfr./6Ndn4XLJO',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-25 05:56:43',
                'updated_at' => '2024-03-25 05:56:43'
            ),

            array(
                'id' => '1561',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'yenny',
                'username' => 'zoeyceline',
                'email' => 'yennybenz@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vueAoHEmC3x4rsSNXt8tDOuFtaWpFywOhkxy/fmHk86jVDUlGpFfa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-25 17:33:22',
                'updated_at' => '2024-03-25 17:33:22'
            ),

            array(
                'id' => '1562',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Fara Esy',
                'username' => 'Faraesy_',
                'email' => 'farrraesy@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$atiZVedbwouZT4HK5nerneqqT2OrAaPq.l8V/BJqI8mGE22QyKrwK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-03-30 02:59:41',
                'updated_at' => '2024-03-30 03:02:42'
            ),

            array(
                'id' => '1563',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'MOUVAN AFFANDI',
                'username' => 'fandi98',
                'email' => 'mouvanaffandi61@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VCz/pCtpQavLepcVm78bWurIdKsA6x6O32iAujy4eOy6dZipF.HFm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-04-01 04:47:49',
                'updated_at' => '2024-04-01 04:47:49'
            ),

            array(
                'id' => '1568',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wildan desta',
                'username' => 'wil85',
                'email' => 'wildan15.rwk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.TyH.Ld89XM8FG728a49cex9ha0utD2Cu8H7kkLJejP1i9fS/9zrm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-04-05 13:11:40',
                'updated_at' => '2024-04-05 13:11:40'
            ),

            array(
                'id' => '1570',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'irfan',
                'username' => 'irfanlie',
                'email' => 'irfanlie736@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$H81qJ.X/awRYoCiUTs5wtupqvMq1Gb1auJv7QTymJKLow/vPZ6xLa',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-04-08 12:51:40',
                'updated_at' => '2024-04-08 12:51:40'
            ),

            array(
                'id' => '1571',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rofik',
                'username' => 'rofik1003',
                'email' => 'ropikptk27@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iQwW4z8Ybg6JwpUVKxAXM.DJ2F/pXie2dzaL/O4TDPnElgvOdUXHW',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-04-19 11:55:16',
                'updated_at' => '2024-04-19 11:55:16'
            ),

            array(
                'id' => '1572',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Muhammad Naufal Saputra',
                'username' => 'noval',
                'email' => 'novalssaputr@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Ofgg1V1EUaMZAVg5VDcZ6.WmjXyw7pByQBU4Di8L0Pt8M.8s4Ncki',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-04-22 10:53:06',
                'updated_at' => '2024-04-22 10:53:06'
            ),

            array(
                'id' => '1573',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'rendi97',
                'username' => 'rendi97',
                'email' => 'rendi97rendi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YCzyKhWGJNCgCdz508m7v.simZeaL45958vqo8X0h5H54FpuvArM2',
                'description' => NULL,
                'remember_token' => 'NDE3PEQB0ffJaUzA1csYTGvLvMEv2LhURBrdxEtt4KIwwtLrwJZeTCN7PEBL',
                'created_at' => '2024-04-23 04:33:41',
                'updated_at' => '2024-08-26 10:16:53'
            ),

            array(
                'id' => '1574',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Sathiya',
                'username' => 'ersa',
                'email' => 'sathiyaersa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ah9P8Clh892GPB9faMlFiOMMYhb4LOlK.bBr/Nef.dr.88iu1PsD2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-04-23 07:59:32',
                'updated_at' => '2024-04-23 07:59:32'
            ),

            array(
                'id' => '1575',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Siti Hajar',
                'username' => 'Siha',
                'email' => 'stihjaar@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$tO2K/hTmwWRhDxStre8L0.zhLv52e.z8n.plq5owmketsSieJEwuK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-01 02:22:20',
                'updated_at' => '2024-05-01 02:23:16'
            ),

            array(
                'id' => '1576',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Aprilia Rikeliansa',
                'username' => 'apriliarike',
                'email' => 'apriliarr17@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xMmd7ba5RJ313O97yNxl3uue2cuDVmjMma7hvKDSwFnWO3WwnW53a',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-01 02:22:31',
                'updated_at' => '2024-05-01 02:22:31'
            ),

            array(
                'id' => '1577',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Marciana Erfiana',
                'username' => 'erfiii',
                'email' => 'marcianaerfiana@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$81ThBfykpp2ZTCkyypKPquAZDrY7n5aH91KSL4VwaR6tPQal.3kay',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-01 15:38:39',
                'updated_at' => '2024-05-01 15:38:39'
            ),

            array(
                'id' => '1578',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'RaSaQa',
                'username' => 'RSQ',
                'email' => 'hanadulsetye@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$pXH0tLfFYDbS4TH7xJGHxuMyK9AND7gQ73iRPQ7VA5j22oEJiCS3K',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-03 15:13:07',
                'updated_at' => '2024-05-03 15:13:07'
            ),

            array(
                'id' => '1583',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'windi rahmaniar',
                'username' => 'windi rahmaniar',
                'email' => 'windirahmaniar06@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$0KZdfgz7LXYPeSJQsHZJ6OsSv5EQ53iXWCGH74z3kf6KBITS6e0Vq',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-04 00:49:03',
                'updated_at' => '2024-05-04 00:49:03'
            ),

            array(
                'id' => '1584',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Ester',
                'username' => 'ester12',
                'email' => 'ester123putri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yXi883OvOIWt90YCMrgQD.Axh/7dGVl6oXlS4HoLdX7bBDsjUK1sm',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-04 07:57:40',
                'updated_at' => '2024-05-04 07:57:40'
            ),

            array(
                'id' => '1586',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'iwan',
                'username' => 'Iwanmasbr',
                'email' => 'iwanmasbroww@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$70CC3k7B.IJHUntFlRMdzewiQWtuREHUp7TYYGgAlSdFjXaLX3292',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-08 04:42:56',
                'updated_at' => '2024-05-08 04:42:56'
            ),

            array(
                'id' => '1589',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Heni yarty',
                'username' => 'heniyarty22',
                'email' => 'hanihardianti452@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4N/JZxFUGWDpCXZhWGMQYeaBDWH3MkkO.VWUPMU5VZ4CKFhkTVNhS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-08 21:00:35',
                'updated_at' => '2024-05-08 21:02:22'
            ),

            array(
                'id' => '1590',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Deni Ramadhani',
                'username' => 'deniramadhani',
                'email' => 'deniramadhaniskm@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$m.LhX29XrogXEwJyEHuS5ugTCxTHJuaGIPrg9yiTkEp.oZEHeIqBe',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-09 00:23:36',
                'updated_at' => '2024-05-09 00:26:47'
            ),

            array(
                'id' => '1591',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'TY',
                'username' => 'he_15',
                'email' => 'tonytonyy882@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$U2Lu7q8X3FOiWsYcOAJzpOfjvSwrMI.zhv35OpnwQ.fXg0Ar2pVT2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-22 08:04:33',
                'updated_at' => '2024-05-22 08:04:33'
            ),

            array(
                'id' => '1592',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Wilsen Handyka',
                'username' => 'wilsenhandyka',
                'email' => 'wilsenhandykaa@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ry4T9RSl5n1vZoHhutGTH.6z0lF9C/so4Ghx0RuDtsSczCzgLzn52',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-24 14:55:59',
                'updated_at' => '2024-05-24 14:55:59'
            ),

            array(
                'id' => '1593',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'wirta firnando',
                'username' => 'nando firnando',
                'email' => 'wirtafirnando6@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mShxFgMg39SCzD6KH7OEjOOTY.Jen7.wRVNUpE6A9iDJFcXQPaE62',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-26 10:31:19',
                'updated_at' => '2024-05-26 10:31:19'
            ),

            array(
                'id' => '1594',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'muhammad fadhil',
                'username' => 'neo171',
                'email' => 'mfadhil171@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$dQo/KCjHSb2TNLmm4K1aEuQ11FFyDW3pkQ60WWB01gkO8eRzLVv4C',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-28 06:35:19',
                'updated_at' => '2024-05-28 06:35:19'
            ),

            array(
                'id' => '1595',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Budhi Soelistiana',
                'username' => 'budhi',
                'email' => 'budhisoelistiana2014@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xwCu/IfkkECFVsZBpTJvLulXjj.IG6avIdtuKrV295JMIGYj5Nn3S',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-30 07:16:32',
                'updated_at' => '2024-05-30 07:16:32'
            ),

            array(
                'id' => '1596',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Eziliansyah',
                'username' => 'Eziliansyah',
                'email' => 'eziliansyah29@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$f5RU.2s5vn0b0Bmoy0uCbOnwV7O9oaKTqcp8mD029r1pBTANUWEPK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-05-30 22:37:21',
                'updated_at' => '2024-05-30 22:37:21'
            ),

            array(
                'id' => '1597',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ahmad hidayat',
                'username' => 'dyt7777',
                'email' => 'ahmadhid02@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q.Maddi7DkYil8obMnmAUuSPN44CFrCBhS7FqTTVdUq6xnk4COGra',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-06-05 18:02:32',
                'updated_at' => '2024-06-05 18:04:40'
            ),

            array(
                'id' => '1598',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sultan',
                'username' => 'dm659778@gmail.com',
                'email' => 'dm659778@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$yOS0HRA1e/78P5QDpmKj0uY5MBTIesJTzxObP095oQVKAFJbAMvUS',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-06-14 16:05:32',
                'updated_at' => '2024-06-14 16:05:32'
            ),

            array(
                'id' => '1599',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'awalludin',
                'username' => 'awalludin84',
                'email' => 'awallu679@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$5QKh6Ej//31SDiDSvsk2euyY.gR.ObMhv43v3T6ofY44UdHhmVk7G',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-06-19 20:46:53',
                'updated_at' => '2024-06-19 20:48:03'
            ),

            array(
                'id' => '1600',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Amanda lara putri',
                'username' => 'amanda',
                'email' => 'amandalaraputri@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1.SwSPxeyw1vKVgizjDc0.MZcRDmOw2jc5AocycqwmdsFywYEvW2u',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-06-26 10:20:10',
                'updated_at' => '2024-06-26 10:20:10'
            ),

            array(
                'id' => '1601',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'erwin gustami samsidar',
                'username' => 'erwin.gs',
                'email' => 'erwingustami@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$RdW3wAKNC.pOZY4e3bYqtOpr9JkdauxklkXGZe3QyKA5oB.Vv98fK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-06-26 19:47:45',
                'updated_at' => '2024-06-26 19:47:45'
            ),

            array(
                'id' => '1607',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'albert dily',
                'username' => 'dily',
                'email' => 'albertdily7@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$cpr0SG1HsFRZgPWVXlJZsOqYTgq6zu60y7FZ8K1xTNcyR01N0Lq4G',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-07-12 22:47:12',
                'updated_at' => '2024-07-12 22:48:16'
            ),

            array(
                'id' => '1608',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Raden hardiyono',
                'username' => 'raden79',
                'email' => 'radenhardiyonohardiyono5731@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$po5R/oWMgE1Ug4EDgdFSAedLSdRn2xl93POpH9w0MQDtNf4Ziedo2',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-07-13 10:11:36',
                'updated_at' => '2024-07-13 10:13:46'
            ),

            array(
                'id' => '1609',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Yohanes.Prayogi',
                'username' => 'Yogi77',
                'email' => 'yohanesprayogi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1Rpp8AYJkaD/AKBkqyG5ZORwOj3o4gNkZAV3EGQ.0cfyePbtNyAlK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-07-15 20:49:35',
                'updated_at' => '2024-07-15 20:49:35'
            ),

            array(
                'id' => '1610',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'diva aulya',
                'username' => 'diva',
                'email' => 'eli138533@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$9UCnlnT2MBl/.gjvBp.0BO6gqiby5Bfa.qEX85WYSW9k6a2LPLM1m',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-07-18 17:06:47',
                'updated_at' => '2024-07-18 17:06:47'
            ),

            array(
                'id' => '1611',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Andika Saputra',
                'username' => 'andikalemon252',
                'email' => 'andikalemon500@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Gb7ukb2l/pESyjPhLyAvd.s3anmp6ozTtjPxu.CpBZdQll/t.JDQy',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-07-23 08:03:41',
                'updated_at' => '2024-07-23 08:03:41'
            ),

            array(
                'id' => '1617',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'ddmdmdmm',
                'username' => 'dmdnfbdm',
                'email' => 'hsk@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Wle2wOND7CBmnBLR8.Yp2eec3XezwH5ZwWq2ZGzAvNa7lCPdgzYYC',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-08-01 10:15:26',
                'updated_at' => '2024-08-01 10:15:26'
            ),

            array(
                'id' => '1620',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Agus Budiman',
                'username' => '4guztt',
                'email' => '4guztt@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$YRzmRdTIcNjYbeW2Ep4XTefXyWDPzbTwQqUwEdT8lNXADRv/n3KUK',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-08-22 19:46:53',
                'updated_at' => '2024-08-22 19:46:53'
            ),

            array(
                'id' => '1662',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'Bima Ismail Qurba',
                'username' => 'bmiq',
                'email' => 'bima.grabpnk@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WIUFthTAm86xiyzkAIe54ORlN21aAW.sncDNQ7.61PAiTYl/1lKky',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-08-27 14:50:33',
                'updated_at' => '2024-08-27 14:52:10'
            ),

            array(
                'id' => '1673',
                'role_id' => DB::table('roles')->select(['id', 'role'])->where('role', 'pengguna')->first()->id,
                'name' => 'sri wulami rezeki elida',
                'username' => 'nickyelida',
                'email' => 'wulani.elida@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HfgUEia7xPefKbKk0opK3eQ/XPSo42fLxnHM7HSrcxSdAAz16JGXG',
                'description' => NULL,
                'remember_token' => NULL,
                'created_at' => '2024-08-29 09:41:19',
                'updated_at' => '2024-08-29 09:41:19'
            )
        );

        DB::beginTransaction();
        try {
            DB::table('users')->insert($users);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
