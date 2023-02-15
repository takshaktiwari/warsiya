<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            $grade = Grade::create(['name' => 'Class ' . $i]);
            $subjects = Subject::inRandomOrder()->limit(rand(6, 12))->pluck('id');
            $grade->subjects()->sync($subjects);
        }
    }
}
