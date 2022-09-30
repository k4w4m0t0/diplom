<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Documenttype;
use App\Models\Speciality;
use App\Models\Abiturient;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();

        // Post::factory(10)->create();

        // User::factory(1)->create();

        Documenttype::insert([
            ['name_document' => 'Аттестат'],
            ['name_document' => 'Диплом'],
        ]);

        Speciality::insert([
            [
                'number' => 1,
                'title' => "Информационные системы и программирование",
                'shortcut' => "ИСиП",
                'count' => 25,
            ],
            [
                'number' => 2,
                'title' => "Физическая культура",
                'shortcut' => "ФК",
                'count' => 25,
            ],
            [
                'number' => 3,
                'title' => "Преподователь начальных классов",
                'shortcut' => "ПНК",
                'count' => 25,
            ],
            [
                'number' => 4,
                'title' => "Преподователь изобразительного исскуства",
                'shortcut' => "ПИИ",
                'count' => 25,
            ],
        ]);

        for($i=1;$i<=50;$i++){
            $abiturient = Abiturient::factory()->create();
            $abiturient->reg_number = $abiturient->id. $abiturient->speciality->shortcut;
            $abiturient->save();
        }
    }
}
