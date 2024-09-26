<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminId = DB::table('users')->select(['id', 'name'])->where('name', 'superadmin')->first()->id;
        $komoditi = array(
            array(
                'id' => '39',
                'user_id' => $superAdminId,
                'commodity' => 'Beras Khusus (Beras Merah) /Kg',
                'unit' => 'Kg',
                'position' => '14',
                'image' => 'uploads/komoditi/MDY6MTc6MDZhbUlNR18xOTEwLmpwZWc=.webp',
                'created_at' => '2019-06-24 01:39:52',
                'updated_at' => '2024-03-07 01:00:22'
            ),
            array(
                'id' => '42',
                'user_id' => $superAdminId,
                'commodity' => 'Beras Bulog SPHP /Kg',
                'unit' => 'Kg',
                'position' => '11',
                'image' => 'uploads/komoditi/MDc6NTg6NDRhbWt6czNqM2pqYTEwYnh3ei5qcGVn.webp',
                'created_at' => '2019-06-24 01:46:45',
                'updated_at' => '2024-03-07 00:58:52'
            ),
            array(
                'id' => '46',
                'user_id' => $superAdminId,
                'commodity' => 'Beras CK /Kg',
                'unit' => 'Kg',
                'position' => '9',
                'image' => 'uploads/komoditi/MDc6NTc6MjFhbWlkLTExMTM0MjA3LTdxdWt4LWxqOGFmZjZ1c3kwMTg2LmpwZWc=.webp',
                'created_at' => '2019-06-24 02:00:27',
                'updated_at' => '2024-03-07 00:57:29'
            ),
            array(
                'id' => '47',
                'user_id' => $superAdminId,
                'commodity' => 'Beras Cap Mangkok /Kg',
                'unit' => 'Kg',
                'position' => '6',
                'image' => 'uploads/komoditi/MDE6MDE6MjRwbWNhcCBtYW5na29rLmpwZw==.webp',
                'created_at' => '2019-06-24 02:01:25',
                'updated_at' => '2024-03-07 00:52:07'
            ),
            array(
                'id' => '48',
                'user_id' => $superAdminId,
                'commodity' => 'Jagung Pipilan /Kg',
                'unit' => 'Kg',
                'position' => '119',
                'image' => 'uploads/komoditi/MDE6MTQ6MDZwbUp1YWwtSkFHVU5HLVBJUElMLUtFUklORy5qcGc=.webp',
                'created_at' => '2019-06-24 02:14:07',
                'updated_at' => '2024-03-07 02:06:38'
            ),
            array(
                'id' => '50',
                'user_id' => $superAdminId,
                'commodity' => 'Gula Pasir Curah /Kg',
                'unit' => 'Kg',
                'position' => '31',
                'image' => 'uploads/komoditi/MDE6MTg6MTJwbWd1bGEgcGFzaXIgY3VyYWguanBn.webp',
                'created_at' => '2019-06-24 02:18:12',
                'updated_at' => '2024-03-07 01:04:47'
            ),
            array(
                'id' => '53',
                'user_id' => $superAdminId,
                'commodity' => 'Tomat /Kg',
                'unit' => 'Kg',
                'position' => '103',
                'image' => 'uploads/komoditi/MDE6MzY6MTlwbXRvbWF0LmpwZw==.webp',
                'created_at' => '2019-06-24 02:36:20',
                'updated_at' => '2024-03-07 02:01:13'
            ),
            array(
                'id' => '55',
                'user_id' => $superAdminId,
                'commodity' => 'Sawi Hijau /Kg',
                'unit' => 'Kg',
                'position' => '107',
                'image' => 'uploads/komoditi/MDE6NDA6MjVwbTk2NGM3NzU3ZjZlZmRhM2ZmNzUzNDJjNDBhYTJhMWVmLmpwZw==.webp',
                'created_at' => '2019-06-24 02:40:26',
                'updated_at' => '2024-03-07 02:02:12'
            ),
            array(
                'id' => '57',
                'user_id' => $superAdminId,
                'commodity' => 'Kentang /Kg',
                'unit' => 'Kg',
                'position' => '113',
                'image' => 'uploads/komoditi/MDM6MTQ6MjZwbWRvd25sb2FkICgxMSkuamZpZg==.webp',
                'created_at' => '2019-06-24 02:42:20',
                'updated_at' => '2024-03-07 02:05:54'
            ),
            array(
                'id' => '59',
                'user_id' => $superAdminId,
                'commodity' => 'Kangkung /Kg',
                'unit' => 'Kg',
                'position' => '109',
                'image' => 'uploads/komoditi/MDE6NDM6NThwbUJpamlfMTIwX0JlbmloX1NheXVyX0thbmdrdW5nX0JBTkdLT0tfTFBfMS5qcGc=.webp',
                'created_at' => '2019-06-24 02:43:59',
                'updated_at' => '2024-03-07 02:05:14'
            ),
            array(
                'id' => '60',
                'user_id' => $superAdminId,
                'commodity' => 'Kacang Panjang /Kg',
                'unit' => 'Kg',
                'position' => '111',
                'image' => 'uploads/komoditi/MDE6NDQ6NThwbUthY2FuZ19QYW5qYW5nXzEyMDB4MTIwMC5qcGc=.webp',
                'created_at' => '2019-06-24 02:44:59',
                'updated_at' => '2024-03-07 02:05:12'
            ),
            array(
                'id' => '65',
                'user_id' => $superAdminId,
                'commodity' => 'Ayam Kampung Ukuran Sedang /Ekor',
                'unit' => 'Ekor',
                'position' => '132',
                'image' => 'uploads/komoditi/MDI6MzU6NTJwbWltYWdlLXRpcHMtbXVkYWgtc3VwYXlhLWRhZ2luZy1heWFtLWthbXB1bmcta2FtdS1lbXB1ay5qcGc=.webp',
                'created_at' => '2019-06-24 03:35:53',
                'updated_at' => '2024-03-07 02:13:44'
            ),
            array(
                'id' => '73',
                'user_id' => $superAdminId,
                'commodity' => 'Ikan Tongkol Hitam /Kg',
                'unit' => 'Kg',
                'position' => '64',
                'image' => 'uploads/komoditi/MDM6MjQ6MDFwbXRvbmdrb2wucG5n.webp',
                'created_at' => '2019-06-24 04:24:02',
                'updated_at' => '2024-03-07 01:57:50'
            ),
            array(
                'id' => '75',
                'user_id' => $superAdminId,
                'commodity' => 'Ikan Kembung /Kg',
                'unit' => 'Kg',
                'position' => '61',
                'image' => 'uploads/komoditi/MTA6MTI6MzVwbWxhcmdlLXJlc2VwLXBlcGVzLWlrYW4ta2VtYnVuZy0xNjktMWI1M2IyYmE1ZjU1ZGZmY2U0MjI0NmJkYzJhMjBiNDAuanBn.webp',
                'created_at' => '2019-06-24 04:31:02',
                'updated_at' => '2024-03-07 01:56:38'
            ),
            array(
                'id' => '81',
                'user_id' => $superAdminId,
                'commodity' => 'Minyak Goreng Curah /Liter',
                'unit' => 'Liter',
                'position' => '34',
                'image' => 'uploads/komoditi/MDU6MDY6MjFwbW1pbnlhay1nb3JlbmctY3VyYWgtZGktcGFzYXItdHJhZGlzaW9uYWwuanBn.webp',
                'created_at' => '2019-06-24 06:06:21',
                'updated_at' => '2024-03-07 01:05:08'
            ),
            array(
                'id' => '82',
                'user_id' => $superAdminId,
                'commodity' => 'Minyak Goreng Kemasan Premium /Liter',
                'unit' => 'Liter',
                'position' => '36',
                'image' => 'uploads/komoditi/MDU6MDc6MjFwbTBfMjNhZmFlNzAtODM3OS00NmUxLTg1NTUtYTAzOWYwZDA4ODBkXzgwMF84MDAuanBn.webp',
                'created_at' => '2019-06-24 06:07:21',
                'updated_at' => '2024-03-07 01:05:24'
            ),
            array(
                'id' => '86',
                'user_id' => $superAdminId,
                'commodity' => 'Susu Bubuk (Dancow 400gr)',
                'unit' => 'Pak',
                'position' => '128',
                'image' => 'uploads/komoditi/MDc6MzQ6MjlwbTEwMTA1MTMzNDZfMTMzMWZmMzYtMGNkYi00NjAyLWFkOGQtMWVlY2QxNTU2ZmZjXzEwMjRfMTAyNC5qcGc=.webp',
                'created_at' => '2019-06-24 06:11:42',
                'updated_at' => '2024-03-07 02:12:02'
            ),
            array(
                'id' => '87',
                'user_id' => $superAdminId,
                'commodity' => 'Telur Ayam Kampung /Kg',
                'unit' => 'Kg',
                'position' => '134',
                'image' => 'uploads/komoditi/MDU6MTQ6MDNwbVRlbHVyX0F5YW1fS2FtcHVuZ19Bc2xpLmpwZw==.webp',
                'created_at' => '2019-06-24 06:14:04',
                'updated_at' => '2024-03-07 02:14:35'
            ),
            array(
                'id' => '91',
                'user_id' => $superAdminId,
                'commodity' => 'Telur Ayam Ras /Kg',
                'unit' => 'Kg',
                'position' => '45',
                'image' => 'uploads/komoditi/MDU6MTg6NTBwbWltYWdlcyAoMSkuanBn.webp',
                'created_at' => '2019-06-24 06:18:51',
                'updated_at' => '2024-03-07 01:07:14'
            ),
            array(
                'id' => '95',
                'user_id' => $superAdminId,
                'commodity' => 'Garam Halus /Kg',
                'unit' => 'Kg',
                'position' => '124',
                'image' => 'uploads/komoditi/MTA6MjQ6NTFhbWRkYmNhMWNkMzQ2NzIwODE3ZTBmNTliODJiYWY3MzA2LmpwZWc=.webp',
                'created_at' => '2019-06-24 06:24:05',
                'updated_at' => '2024-03-07 02:08:36'
            ),
            array(
                'id' => '97',
                'user_id' => $superAdminId,
                'commodity' => 'Kedelai Impor /Kg',
                'unit' => 'Kg',
                'position' => '18',
                'image' => 'uploads/komoditi/MDU6MjU6NTFwbUNhcmEtTWVuYW5hbS1LYWNhbmctS2VkZWxhaS1EZW5nYW4tQmVuYXItRGFuLVRlcGF0LmpwZw==.webp',
                'created_at' => '2019-06-24 06:25:51',
                'updated_at' => '2024-03-07 01:01:34'
            ),
            array(
                'id' => '98',
                'user_id' => $superAdminId,
                'commodity' => 'Kacang Tanah /Kg',
                'unit' => 'Kg',
                'position' => '138',
                'image' => 'uploads/komoditi/MDU6Mjg6MjFwbVBlYW51dC1hbmQtR3JvdW5kbnV0LVdpdGhvdXQtU2hlbGwuanBnXzM1MHgzNTAuanBn.webp',
                'created_at' => '2019-06-24 06:28:21',
                'updated_at' => '2024-03-07 02:17:06'
            ),
            array(
                'id' => '99',
                'user_id' => $superAdminId,
                'commodity' => 'Kacang Hijau /Kg',
                'unit' => 'Kg',
                'position' => '136',
                'image' => 'uploads/komoditi/MDk6MTY6NTBhbTk5OTcyOTA5XzJhOWI4NTY2LWE3YzgtNGYyOS05OGIyLTljZWJmYjdjYWZhYl8xMDMyXzEwMzIuanBlZw==.webp',
                'created_at' => '2019-06-24 06:29:40',
                'updated_at' => '2024-03-07 02:16:51'
            ),
            array(
                'id' => '102',
                'user_id' => $superAdminId,
                'commodity' => 'Bawang Merah /Kg',
                'unit' => 'Kg',
                'position' => '29',
                'image' => 'uploads/komoditi/MDU6MzM6NTVwbXBlbWVyaW50YWgtYmVyaS10aXBzLWtlbmFsaS1iYXdhbmctbWVyYWgtcGFsc3UuanBn.webp',
                'created_at' => '2019-06-24 06:33:55',
                'updated_at' => '2024-03-07 01:04:32'
            ),
            array(
                'id' => '103',
                'user_id' => $superAdminId,
                'commodity' => 'Bawang Putih Honan /Kg',
                'unit' => 'Kg',
                'position' => '74',
                'image' => 'uploads/komoditi/MDU6MzU6MjJwbUJlcmJhZ2FpLU1hbmZhYXQtTWVuZ2VqdXRrYW4tTWFrYW4tQmF3YW5nLVB1dGloLmpwZw==.webp',
                'created_at' => '2019-06-24 06:35:23',
                'updated_at' => '2024-03-07 02:00:40'
            ),
            array(
                'id' => '104',
                'user_id' => $superAdminId,
                'commodity' => 'Bawang Bombay /Kg',
                'unit' => 'Kg',
                'position' => '101',
                'image' => 'uploads/komoditi/MDU6MzU6NDlwbWJhd2FuZy1ib21iYWkuanBn.webp',
                'created_at' => '2019-06-24 06:35:49',
                'updated_at' => '2024-03-07 02:01:16'
            ),
            array(
                'id' => '105',
                'user_id' => $superAdminId,
                'commodity' => 'Cabe Rawit Merah /Kg',
                'unit' => 'Kg',
                'position' => '25',
                'image' => 'uploads/komoditi/MDU6MzY6NThwbWNhYmFpX3Jhd2l0X21lcmFoLmpwZw==.webp',
                'created_at' => '2019-06-24 06:36:59',
                'updated_at' => '2024-03-07 01:03:46'
            ),
            array(
                'id' => '106',
                'user_id' => $superAdminId,
                'commodity' => 'Cabe Rawit Hijau /Kg',
                'unit' => 'Kg',
                'position' => '27',
                'image' => 'uploads/komoditi/MDU6Mzg6NDJwbTE0ODI1NjIyNTNfY2FiZS01Nzh4MzMwLmpwZw==.webp',
                'created_at' => '2019-06-24 06:38:42',
                'updated_at' => '2024-03-07 01:04:14'
            ),
            array(
                'id' => '110',
                'user_id' => $superAdminId,
                'commodity' => 'Tepung Terigu ( Segitiga Biru ) /Kg',
                'unit' => 'Kg',
                'position' => '41',
                'image' => 'uploads/komoditi/MDU6NDM6MTdwbTM5ODYwNDdfZDZhNjYyYmUtOGU3NS00YzVmLWI2NzMtOWNkN2Q5OTI2YTk4XzEyMjRfMTIyNC5qcGc=.webp',
                'created_at' => '2019-06-24 06:43:18',
                'updated_at' => '2024-03-07 01:06:27'
            ),
            array(
                'id' => '117',
                'user_id' => $superAdminId,
                'commodity' => 'Beras Medium /Kg',
                'unit' => 'Kg',
                'position' => '3',
                'image' => 'uploads/komoditi/MDI6Mjc6MjhwbWJlcmFzLmpmaWY=.webp',
                'created_at' => '2024-02-02 07:27:40',
                'updated_at' => '2024-03-07 00:50:11'
            ),
            array(
                'id' => '118',
                'user_id' => $superAdminId,
                'commodity' => 'Minyak Kita /Liter',
                'unit' => 'Liter',
                'position' => '38',
                'image' => 'uploads/komoditi/MDI6MzY6NTVwbTIzNTcwMjI0NDcud2VicA==.webp',
                'created_at' => '2024-02-02 07:37:05',
                'updated_at' => '2024-03-07 01:05:48'
            ),
            array(
                'id' => '119',
                'user_id' => $superAdminId,
                'commodity' => 'Cabai Merah Keriting /Kg',
                'unit' => 'Kg',
                'position' => '20',
                'image' => 'uploads/komoditi/MDI6Mzg6NTVwbWRvd25sb2FkLmpmaWY=.webp',
                'created_at' => '2024-02-02 07:39:06',
                'updated_at' => '2024-03-07 01:02:02'
            ),
            array(
                'id' => '122',
                'user_id' => $superAdminId,
                'commodity' => 'Daging Sapi Paha Depan /Kg',
                'unit' => 'Kg',
                'position' => '49',
                'image' => 'uploads/komoditi/MDI6NDk6MTdwbTlhMTE1ZjcxZDNiYmE2OGYwMjhkNDk0YTIzN2Q0NmE1LmpmaWY=.webp',
                'created_at' => '2024-02-02 07:49:26',
                'updated_at' => '2024-03-07 01:08:12'
            ),
            array(
                'id' => '124',
                'user_id' => $superAdminId,
                'commodity' => 'Daging Sapi Tetelan /Kg',
                'unit' => 'Kg',
                'position' => '52',
                'image' => 'uploads/komoditi/MDI6NTE6MTRwbUNhcmEtQmlraW4tRGFnaW5nLVRldGVsYW4tRW1wdWsud2VicA==.webp',
                'created_at' => '2024-02-02 07:51:23',
                'updated_at' => '2024-03-07 01:09:28'
            ),
            array(
                'id' => '128',
                'user_id' => $superAdminId,
                'commodity' => 'Ikan Bandeng /Kg',
                'unit' => 'Kg',
                'position' => '58',
                'image' => 'uploads/komoditi/MDM6MDQ6MTdwbWRvd25sb2FkICg2KS5qZmlm.webp',
                'created_at' => '2024-02-02 08:04:25',
                'updated_at' => '2024-03-07 01:56:40'
            ),
            array(
                'id' => '130',
                'user_id' => $superAdminId,
                'commodity' => 'Ikan Teri Asin /Kg',
                'unit' => 'Kg',
                'position' => '66',
                'image' => 'uploads/komoditi/MDM6MDY6MDhwbWI2MzUwMGMyLThlODMtNDUyZS05NWZlLWNhOTAwYmU2ZTIzMC5qcGc=.webp',
                'created_at' => '2024-02-02 08:06:18',
                'updated_at' => '2024-03-07 01:57:48'
            ),
            array(
                'id' => '131',
                'user_id' => $superAdminId,
                'commodity' => 'Udang Segar/Kg',
                'unit' => 'Kg',
                'position' => '68',
                'image' => 'uploads/komoditi/MDM6MDc6MDNwbWRvd25sb2FkICg4KS5qZmlm.webp',
                'created_at' => '2024-02-02 08:07:12',
                'updated_at' => '2024-03-07 01:58:09'
            ),
            array(
                'id' => '132',
                'user_id' => $superAdminId,
                'commodity' => 'Tempe Kedelai /Kg',
                'unit' => 'Kg',
                'position' => '70',
                'image' => 'uploads/komoditi/MDM6MDg6MDZwbTE3MTdkYTA1LTdiN2MtNDUwNC05NWMwLTBmMTJlNGYxZDIyY180My5qcGVn.webp',
                'created_at' => '2024-02-02 08:08:16',
                'updated_at' => '2024-03-07 01:58:39'
            ),
            array(
                'id' => '133',
                'user_id' => $superAdminId,
                'commodity' => 'Tahu Mentah Putih /Kg',
                'unit' => 'Kg',
                'position' => '72',
                'image' => 'uploads/komoditi/MDM6MTA6MThwbWRvd25sb2FkICg5KS5qZmlm.webp',
                'created_at' => '2024-02-02 08:10:27',
                'updated_at' => '2024-03-07 01:59:13'
            ),
            array(
                'id' => '134',
                'user_id' => $superAdminId,
                'commodity' => 'Ketimun /Kg',
                'unit' => 'Kg',
                'position' => '105',
                'image' => 'uploads/komoditi/MDM6MTE6NTVwbWRvd25sb2FkICgxMCkuamZpZg==.webp',
                'created_at' => '2024-02-02 08:12:03',
                'updated_at' => '2024-03-07 02:02:09'
            ),
            array(
                'id' => '135',
                'user_id' => $superAdminId,
                'commodity' => 'Pisang Lokal /Kg',
                'unit' => 'Kg',
                'position' => '115',
                'image' => 'uploads/komoditi/MDM6MTU6MTBwbWRvd25sb2FkICgxMikuamZpZg==.webp',
                'created_at' => '2024-02-02 08:15:19',
                'updated_at' => '2024-03-07 02:05:53'
            ),
            array(
                'id' => '136',
                'user_id' => $superAdminId,
                'commodity' => 'Jeruk Lokal /Kg',
                'unit' => 'Kg',
                'position' => '117',
                'image' => 'uploads/komoditi/MDM6MTY6MzJwbWRvd25sb2FkICgxMykuamZpZg==.webp',
                'created_at' => '2024-02-02 08:16:40',
                'updated_at' => '2024-03-07 02:06:19'
            ),
            array(
                'id' => '137',
                'user_id' => $superAdminId,
                'commodity' => 'Mie Instan Kari /Bks',
                'unit' => 'Bks',
                'position' => '121',
                'image' => 'uploads/komoditi/MDk6MDg6MDZhbTMzMjEyOGRhNzk0OTM5MDM2YTA0OTgyMTMzYmVlM2QwLmpwZw==.webp',
                'created_at' => '2024-02-02 08:18:28',
                'updated_at' => '2024-03-07 02:08:08'
            ),
            array(
                'id' => '138',
                'user_id' => $superAdminId,
                'commodity' => 'Susu Kental Manis Kaleng (Frisian Flag 370gr)',
                'unit' => 'Pak',
                'position' => '126',
                'image' => 'uploads/komoditi/MDk6MTI6MDFhbTdkNGU3Njg5MDY0ZTM1ODFiMWQwOTA1ZjQ3MGEzMy5qcGc=.webp',
                'created_at' => '2024-02-02 08:20:29',
                'updated_at' => '2024-03-07 02:12:03'
            ),
            array(
                'id' => '139',
                'user_id' => $superAdminId,
                'commodity' => 'Ketela Pohon /Kg',
                'unit' => 'Kg',
                'position' => '130',
                'image' => 'uploads/komoditi/MDk6MTM6MTlhbUlNR18yMDIzMDUwOF8xNTU2MzYuanBn.webp',
                'created_at' => '2024-02-02 08:22:16',
                'updated_at' => '2024-03-07 02:13:20'
            ),
            array(
                'id' => '140',
                'user_id' => $superAdminId,
                'commodity' => 'Cabe Merah Besar /Kg',
                'unit' => 'Kg',
                'position' => '22',
                'image' => 'uploads/komoditi/MTE6MzM6MTdhbUlNR18xODI4LmpwZWc=.webp',
                'created_at' => '2024-02-03 04:33:27',
                'updated_at' => '2024-03-07 01:03:06'
            ),
            array(
                'id' => '141',
                'user_id' => $superAdminId,
                'commodity' => 'Daging Kerbau Beku /Kg',
                'unit' => 'Kg',
                'position' => '54',
                'image' => 'uploads/komoditi/MDU6NTk6MzFhbUlNR18xOTA5LmpwZWc=.webp',
                'created_at' => '2024-02-04 22:59:37',
                'updated_at' => '2024-03-07 01:09:28'
            ),
            array(
                'id' => '142',
                'user_id' => $superAdminId,
                'commodity' => 'Daging Ayam Ras /Kg',
                'unit' => 'Kg',
                'position' => '43',
                'image' => 'uploads/komoditi/MDI6Mzc6MzlwbWRhZ2luZy1heWFtLmpwZw==.webp',
                'created_at' => '2024-02-05 09:17:09',
                'updated_at' => '2024-03-07 01:06:56'
            ),
            array(
                'id' => '143',
                'user_id' => $superAdminId,
                'commodity' => 'Daging Sapi Paha Belakang /Kg',
                'unit' => 'Kg',
                'position' => '47',
                'image' => 'uploads/komoditi/MDE6NTE6MzhwbXNodXR0ZXJzdG9ja18xODc2MjcyNjIuanBn.webp',
                'created_at' => '2019-06-24 02:51:39',
                'updated_at' => '2024-03-07 01:08:14'
            )
        );

        DB::beginTransaction();
        try {
            DB::table('commodities')->insert($komoditi);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
