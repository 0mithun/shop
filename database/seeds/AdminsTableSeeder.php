<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name'      =>  'Mithun Halder',
            'email'     =>  'halderm86@gmail.com',
            'password'  =>  bcrypt(123456789)
        ]);
    }
}
