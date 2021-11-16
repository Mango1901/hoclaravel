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
                'category_name'=> 'Đồ uống',
                'category_description'=>'Đồ uống',
                'category_status'=>'1'
            ],
            [
                'category_name'=> 'Đồ ăn nhanh',
                'category_description'=>'Đồ ăn nhanh',
                'category_status'=>'1'
            ],
            [
                'category_name'=> 'Món tráng miệng',
                'category_description'=>'Món tráng miệng',
                'category_status'=>'1'
            ]
        ];
    }
}
