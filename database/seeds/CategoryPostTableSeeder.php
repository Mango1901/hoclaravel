<?php

use Illuminate\Database\Seeder;
use App\CategoryPost;
class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

     $data =$this->getCategoryPostData();
        foreach($data as $key => $value){
            CategoryPost::create($value);
        }
    }
    private function getCategoryPostData()
    {
        return[
              [
                  'post_category_name'=> 'Phone',
                  'post_category_slug'=> 'Phone',
                  'post_category_description'=>'Phone',
                  'post_category_meta_keywords'=>'Phone',
                  'post_category_status'=>'2'
              ],
            [
                'post_category_name'=> 'Nutrition',
                'post_category_slug'=> 'Nutrition',
                'post_category_description'=>'Nutrition',
                'post_category_meta_keywords'=>'Nutrition',
                'post_category_status'=>'2'
            ],
            [
                'post_category_name'=> 'GamePad',
                'post_category_slug'=> 'GamePad',
                'post_category_description'=>'GamePad',
                'post_category_meta_keywords'=>'GamePad',
                'post_category_status'=>'2'
            ]

        ];
    }
}
