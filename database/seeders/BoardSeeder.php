<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Board;
use App\Models\Grade;
use App\Models\Subject;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 6; $i++) {
            $board = Board::create([
                'short_name'  =>  $faker->company,
                'name'  =>  $faker->company
            ]);

            for ($j = 1; $j < 10; $j++) {
                $grade = Grade::create([
                    'name' => 'Class ' . $j,
                    'board_id'  =>  $board->id,
                ]);
                $subjects = Subject::inRandomOrder()->limit(rand(6, 12))->pluck('id');
                $grade->subjects()->sync($subjects);
            }
        }
    }
}
