<?php

use Illuminate\Database\Seeder;
use App\Coupon;
class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = $this->getCouponData();
        foreach($data as $key => $value){
            Coupon::create($value);
        }
    }
    private function getCouponData()
    {
        return
        [
          [
              'coupon_name'=>'Discount 30%',
              'coupon_number'=>'30',
              'coupon_code'=>'HDH375Y',
              'coupon_time'=>'30',
              'coupon_condition'=>'1',
          ],
          [
              'coupon_name'=>'Discount 100000VND',
              'coupon_number'=>'100000',
              'coupon_code'=>'HDH458Y',
              'coupon_time'=>'100',
              'coupon_condition'=>'2',
          ],
        ];
    }
}
