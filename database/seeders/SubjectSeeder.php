<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $subject = Subject::create([
                'name'      =>  $faker->company . '-' . rand(0, 9)
            ]);
            for ($j = 0; $j < rand(0, 5); $j++) {
                Subject::create([
                    'name'      =>  $faker->company . $subject->id,
                    'subject_id'    =>  $subject->id
                ]);
            }
        }

        for ($i = 0; $i < 15; $i++) {
            Subject::create([
                'name'      =>  $faker->company . '-' . rand(0, 9)
            ]);
        }
    }
}
