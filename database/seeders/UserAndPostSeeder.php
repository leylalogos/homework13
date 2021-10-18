<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserAndPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'John', 'mobile' => '0998222332', 'password' => bcrypt('123456'), 'email' => 'ete@gg.com'],
            ['id' => 2, 'name' => 'ali', 'mobile' => '0999722332', 'password' => bcrypt('123456'), 'email' => 'etue@gg.com'],
            ['id' => 3, 'name' => 'ahmad', 'mobile' => '0997222332', 'password' => bcrypt('123456'), 'email' => 'ethe@gg.com'],
            ['id' => 4, 'name' => 'abbas', 'mobile' => '0959222332', 'password' => bcrypt('123456'), 'email' => 'etke@gg.com'],
            ['id' => 5, 'name' => 'zari', 'mobile' => '0994222332', 'password' => bcrypt('123456'), 'email' => 'ete@lgg.com']
        ]);
        DB::table('posts')->insert([

            ['user_id' => 1, 'title' => 'پزشکی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 1, 'title' => 'ورزشی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],

            ['user_id' => 2, 'title' => 'سیاسی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 3, 'title' => 'طبیعت', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],

            ['user_id' => 4, 'title' => 'دام', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 4, 'title' => 'خبر', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 5, 'title' => 'مذهبی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],


        ]);
    }
}
