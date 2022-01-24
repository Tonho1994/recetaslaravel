<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'Tonho',
            'email'=> 'tonho@correo.com',
            'password'=> Hash::make('12345678'),
            'url'=> 'http://simitio.com',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'name'=>'Meno',
            'email'=> 'meno@correo.com',
            'password'=> Hash::make('12345678'),
            'url'=> 'http://simitia.com',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
        ]);
    }
}
