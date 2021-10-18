<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

            ['user_id' => 1, 'created_at' => Carbon::now(), 'title' => 'پزشکی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 1, 'created_at' => Carbon::now()->subDays(2), 'title' => 'ورزشی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],

            ['user_id' => 2, 'created_at' => Carbon::now()->subDays(3), 'title' => 'سیاسی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 3, 'created_at' => Carbon::now()->subDays(4), 'title' => 'طبیعت', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],

            ['user_id' => 4, 'created_at' => Carbon::now()->subDays(5), 'title' => 'دام', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 4, 'created_at' => Carbon::now()->subDays(6), 'title' => 'خبر', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 5, 'created_at' => Carbon::now()->subDays(7), 'title' => 'علوم', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 5, 'created_at' => Carbon::now()->subDays(8), 'title' => 'دبیر', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 3, 'created_at' => Carbon::now()->subDays(9), 'title' => 'مجلس', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 2, 'created_at' => Carbon::now()->subDays(10), 'title' => 'ورزشی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],
            ['user_id' => 1, 'created_at' => Carbon::now()->subDays(11), 'title' => 'عروسی', 'content' => 'شما میتوانید هم از طریق گیت هاب و هم از طریق وبسایت راکت اقدام به دانلود این قالب کنید'],


        ]);
    }
}
