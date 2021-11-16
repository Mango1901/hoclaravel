<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = $this->getProductData();
        foreach($data as $key => $value){
        Product::create($value);
        }
    }
    private function getProductData()
    {
        return
        [
          [
              'category_id'=>'1',
              'name'=>'Trà Sữa',
              "price"=>"50000",
              'image'=>'download4990.png',
              'description'=>'Iphone',
              'content'=>'Iphone',
              'status'=>'2'
          ]
        ];
    }
}
