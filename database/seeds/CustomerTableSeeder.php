<?php

use Illuminate\Database\Seeder;
use App\Customers;
class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = $this->getCustomerData();
        foreach ($data as $key => $value){
            Customers::create($value);
        }
    }
    private function getCustomerData()
    {
        return
        [
          [
              'customer_name' => 'Mango',
              'customer_email' => 'deagleka1@gmail.com',
              'customer_password' => 'e10adc3949ba59abbe56e057f20f883e',
              'customer_address' => 'L.A',
              'customer_phone' => '0935356789',
          ]
        ];
    }
}
