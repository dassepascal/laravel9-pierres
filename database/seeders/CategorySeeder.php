<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['rouge','orange','jaune','vert','bleu','indigo','violet','rose','blanc','noir'];

        for ($i = 0;$i < count($categories);$i ++) {
            Category::create([
                'label'=>$categories[$i],
            ]);
        }
    }
}
