<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackReplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $replies = array(
            // array(
            //     'id' => '1',
            //     'user_id' => DB::table('feedbacks')->find('27')->user_id,
            //     'feedback_id' => '27',
            //     'message' => 'test',
            //     'created_at' => '2024-02-27 06:43:01',
            //     'updated_at' => '2024-02-27 06:43:01'
            // ),
            // array(
            //     'id' => '2',
            //     'user_id' => DB::table('feedbacks')->find('27')->user_id,
            //     'feedback_id' => '27',
            //     'message' => 'tes 2',
            //     'created_at' => '2024-02-27 07:08:39',
            //     'updated_at' => '2024-02-27 07:08:39'
            // ),
            // array(
            //     'id' => '3',
            //     'user_id' => DB::table('feedbacks')->find('28')->user_id,
            //     'feedback_id' => '28',
            //     'message' => 'testing replies',
            //     'created_at' => '2024-02-27 08:11:29',
            //     'updated_at' => '2024-02-27 08:11:29'
            // ),
            // array(
            //     'id' => '4',
            //     'user_id' => DB::table('feedbacks')->find('27')->user_id,
            //     'feedback_id' => '27',
            //     'message' => 'Baik',
            //     'created_at' => '2024-02-27 08:26:47',
            //     'updated_at' => '2024-02-27 08:26:47'
            // ),
            // array(
            //     'id' => '5',
            //     'user_id' => DB::table('feedbacks')->find('27')->user_id,
            //     'feedback_id' => '27',
            //     'message' => 'Baik',
            //     'created_at' => '2024-02-27 08:26:49',
            //     'updated_at' => '2024-02-27 08:26:49'
            // ),
            array(
                'id' => '6',
                'user_id' => DB::table('feedbacks')->find('25')->user_id,
                'feedback_id' => '25',
                'message' => 'Baik. terima kasih atas masukannya',
                'created_at' => '2024-02-29 02:43:06',
                'updated_at' => '2024-02-29 02:43:06'
            ),
            // array(
            //     'id' => '7',
            //     'user_id' => DB::table('feedbacks')->find('30')->user_id,
            //     'feedback_id' => '30',
            //     'message' => 'test balas satu dua tiga',
            //     'created_at' => '2024-03-06 06:27:21',
            //     'updated_at' => '2024-03-06 06:27:21'
            // ),
            // array(
            //     'id' => '8',
            //     'user_id' => DB::table('feedbacks')->find('29')->user_id,
            //     'feedback_id' => '29',
            //     'message' => 'balasan test saran',
            //     'created_at' => '2024-03-06 06:27:38',
            //     'updated_at' => '2024-03-06 06:27:38'
            // ),
            // array(
            //     'id' => '9',
            //     'user_id' => DB::table('feedbacks')->find('30')->user_id,
            //     'feedback_id' => '30',
            //     'message' => 'testing',
            //     'created_at' => '2024-03-14 07:07:36',
            //     'updated_at' => '2024-03-14 07:07:36'
            // ),
            // array(
            //     'id' => '10',
            //     'user_id' => DB::table('feedbacks')->find('30')->user_id,
            //     'feedback_id' => '30',
            //     'message' => 'testing',
            //     'created_at' => '2024-03-14 07:07:59',
            //     'updated_at' => '2024-03-14 07:07:59'
            // ),
            // array(
            //     'id' => '11',
            //     'user_id' => DB::table('feedbacks')->find('29')->user_id,
            //     'feedback_id' => '29',
            //     'message' => 'test',
            //     'created_at' => '2024-03-15 01:19:43',
            //     'updated_at' => '2024-03-15 01:19:43'
            // ),
            array(
                'id' => '13',
                'user_id' => DB::table('feedbacks')->find('35')->user_id,
                'feedback_id' => '35',
                'message' => 'sedang dikembangkan',
                'created_at' => '2024-08-08 14:48:01',
                'updated_at' => '2024-08-08 14:48:01'
            ),
            // array(
            //     'id' => '14',
            //     'user_id' => DB::table('feedbacks')->find('38')->user_id,
            //     'feedback_id' => '38',
            //     'message' => 'sabar',
            //     'created_at' => '2024-08-08 14:53:18',
            //     'updated_at' => '2024-08-08 14:53:18'
            // )
        );

        DB::beginTransaction();
        try {
            DB::table('feedback_replies')->insert($replies);
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
