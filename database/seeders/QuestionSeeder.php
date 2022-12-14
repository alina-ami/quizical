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
                'title' => 'Give me the 3 reasons why you choose adore me over your other favorite intimates/lingerie brand (please precise the name of this other brand).',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 5,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'What do you do more often skip or pause?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 5,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 1,
                'title' => 'During what period of the month do you shop?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 7,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 1,
                'title' => 'Do you like eco recycled cotton?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 5,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 1,
                'title' => 'What is one sustainability project you like and would like us to implement?',
                'type' => 'text',
                'points_for_answer' => 1,
                'points_for_relevance' => 10,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], [
                'brand_id' => 1,
                'title' => 'How oftern do you buy per month?',
                'type' => 'text',
                'points_for_answer' => 3,
                'points_for_relevance' => 5,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'What other brands simillar to us do you buy from?',
                'type' => 'text',
                'points_for_answer' => 3,
                'points_for_relevance' => 7,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'With who would you like to see us collaborate with?',
                'type' => 'text',
                'points_for_answer' => 3,
                'points_for_relevance' => 10,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'What is the first word that would describe us?',
                'type' => 'text',
                'points_for_answer' => 2,
                'points_for_relevance' => 5,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'What is one feature you love from us?',
                'type' => 'text',
                'points_for_answer' => 2,
                'points_for_relevance' => 3,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'What is one thing you would change to our order placement flow?',
                'type' => 'text',
                'points_for_answer' => 2,
                'points_for_relevance' => 7,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'brand_id' => 1,
                'title' => 'What is one make-up product you use everyday?',
                'type' => 'text',
                'points_for_answer' => 2,
                'points_for_relevance' => 7,
                'min_age' => 20,
                'max_age' => 40,
                'min_reach' => 100,
                'genders' => json_encode(['female', 'male', 'non-binary', 'transgender', 'intersex', 'unspecified']),
                'due_at' => Carbon::now()->addWeek(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
