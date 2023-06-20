<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run () {
        //db.php option
        $projects = config('db.projects');
        
        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->title = $project['title'];
            $new_project->user_id = 1;
            $new_project->slug = Str::slug($new_project->title, '-');
            $new_project->made_by = $project['made_by'];
            $new_project->description = $project['description'];
            $new_project->creation_date = $project['date'];
            $new_project->cover = 'placeholders/' . $project['cover'];
            $new_project->link = $project['link'];
            $new_project->code_link = $project['code_link'];
            $new_project->trace = $project['trace'];
            $new_project->save();
        }
    }
    
    // public function run(Faker $faker)
    // {
    //     //faker Option
    //     for ($i=0; $i < 10; $i++) { 
            
    //         $project = new Project();
    //         $project->title = $faker->sentence(3);
    //         $project->user_id = 1;
    //         $project->slug = Str::slug($project->title, '-');
    //         $project->made_by = $faker->name();
    //         $project->description = $faker->paragraph(2);
    //         $project->creation_date = $faker->dateTimeThisYear();
    //         $project->cover = 'placeholders/' . $faker->image('storage/app/public/placeholders/', fullPath: false, category: 'Projects', word: $project->title, gray: true);
    //         $project->link = $faker->url();
    //         $project->code_link = $faker->url();
    //         $project->trace = $faker->paragraph(3);
    //         $project->save();
    //     }
    
    // }
}