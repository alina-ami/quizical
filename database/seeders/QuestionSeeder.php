<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'brand_id' => 1,
                'title' => 'What do you do more often skip or pause?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 5,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 2,
                'title' => 'During what period of the month do you shop?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 7,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 3,
                'title' => 'Do you like eco recycled cotton?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 5,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 1,
                'title' => 'What is one sustainability project you like and would like us to implement?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 10,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 4,
                'title' => 'How oftern do you buy per month?',
                'type' => 'text',
                'points_for_answer' => 3,
                'points_for_relevance' => 5,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 5,
                'title' => 'What other brands simillar to us do you buy from?',
                'type' => 'text',
                'points_for_answer' => 3,
                'points_for_relevance' => 7,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'With who would you like to see us collaborate with?',
                'type' => 'text',
                'points_for_answer' => 3,
                'points_for_relevance' => 10,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 2,
                'title' => 'What is the first word that would describe us?',
                'type' => 'text',
                'points_for_answer' => 2,
                'points_for_relevance' => 5,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'What is one feature you love from us?',
                'type' => 'text',
                'points_for_answer' => 2,
                'points_for_relevance' => 3,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 6,
                'title' => 'What is one thing you would change to our order placement flow?',
                'type' => 'text',
                'points_for_answer' => 2,
                'points_for_relevance' => 7,
                'minimum_age' => 20,
                'maximum_age' => 40,
                'minimum_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_date' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
