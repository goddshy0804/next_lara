<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SanPham extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//   for ($i=0; $i<20; $i++) {
//        \DB::table('san_pham')->insert([
//            'ten_sp' => 'Dell '. rand(0,10),
//            'gia'=> rand(10000,100000),
//            'id_loai'=> rand(0,10)
//        ]);
//     }//for


\DB::table('users')->insert([
'name' => 'Admin',
'email' => 'admin@example',
'password' => bcrypt('password'),



]);

    }}
