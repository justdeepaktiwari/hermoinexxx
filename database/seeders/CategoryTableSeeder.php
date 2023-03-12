<?php
  
namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Seeder;
  

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
           'Category - 1',
           'Category - 2',
           'Category - 3',
           'Category - 4',
           'Category - 5',
        ];
        
        $tags = [
            'Tag - 1',
            'Tag - 2',
            'Tag - 3',
            'Tag - 4',
            'Tag - 5',
        ];

        foreach ($category as $cat) {
            Category::create(['name' => $cat]);
        }

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }
    }
}