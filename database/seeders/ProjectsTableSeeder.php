<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Faker\Generator as Faker;


class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<30; $i++){
            $new_project = new Project();
            $new_project->name = $faker->name();
            $new_project->version = $faker->randomFloat(2, 3, 5);
            $new_project->description = $faker->words(300,true);
            $new_project->date_updated = $faker->date();
            $new_project->slug = Project::generateSlug($new_project->name);

            $new_project->save();
        }

    }
}
