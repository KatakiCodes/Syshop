<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'vestuario' => ['name' => 'Vestuário'],
            'electoronicos' => ['name' => 'Electoronicos'],
            'acessorios' => ['name' => 'Acessórios'],
            'trends' => ['name' => 'Trends'],
            'alimento' => ['name' => 'Alimento'],
        ] ;
        foreach($categories as $key => $category)
        {
            Category::create($category);
        }
    }
}
