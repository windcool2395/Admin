<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['username' => 'ngocthuong','password'=> '123456', 'firstname'=>'Ngoc', 'lastname'=>'Thuong', 'email'=> 'windcool2395@gmail.com', 'address'=>'99 Nguyen Chi Thanh - Dong Da - Ha Noi', 'phone_number'=>'0869242395', 'gender'=> '1', 'bod'=>'1995/09/23','group_id'=>'1' ]);
    }
}
