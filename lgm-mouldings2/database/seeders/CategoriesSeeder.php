<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categories = ['Moderno', 'Antico', 'Vintage'];

        foreach($categories as $category_name){
            $category = new Category();

            $category->name = $category_name;
            $category->slug = Str::slug($category_name, '-');

            $category->save();

        }
    }
}
