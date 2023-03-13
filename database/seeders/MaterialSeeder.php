<?php

namespace Database\Seeders;

use App\Models\Grade;
use App\Models\Material;
use App\Models\MaterialItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Takshak\Imager\Facades\Picsum;
use Faker\Generator as Faker;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $grades = Grade::get();

        foreach ($grades as $grade) {
            foreach ($grade->subjects as $subject) {
                for ($i = 0; $i < rand(3, 15); $i++) {

                    $material = Material::create([
                        'title' =>  $faker->realText(rand(20, 80), 2),
                        'description' =>  $faker->realText(rand(200, 500), 2),
                        'grade_id'  =>  $grade->id,
                        'subject_id'    => $subject->id
                    ]);

                    for ($j = 0; $j < rand(2, 8); $j++) {
                        $fileName = str()->of(microtime())->slug('-')->append('.jpg')->prepend('materials/');
                        Picsum::dimensions(800, 800)
                            ->save(Storage::disk('public')->path($fileName))
                            ->destroy();

                        MaterialItem::create([
                            'material_id'   =>  $material->id,
                            'file_path'     =>  $fileName
                        ]);
                    }
                }
            }
        }
    }
}
