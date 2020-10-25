<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->getCategoryData();
        foreach($data as $key=>$value){
            Category::create($value);
        }
    }
    private function getCategoryData()
    {
        return
        [
            [
                'category_name'=> 'GamePad',
                'category_slug'=> 'GamePad',
                'category_description'=>'GamePad',
                'meta_keywords'=>'GamePad',
                'category_parent'=> '0',
                'category_status'=>'2'
            ],
            [
                'category_name'=> 'Xbox-360',
                'category_slug'=> 'xbox-360',
                'category_description'=>'xbox-360',
                'meta_keywords'=>'xbox-360',
                'category_parent'=> '1',
                'category_status'=>'2'
            ],
            [
                'category_name'=> 'Ps4',
                'category_slug'=> 'Ps4',
                'category_description'=>'Ps4',
                'meta_keywords'=>'Ps4',
                'category_parent'=> '1',
                'category_status'=>'2'
            ]
        ];
    }
}
