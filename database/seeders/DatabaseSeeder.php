<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //user
        DB::table('users')->insert([
            'name' => 'Druk Zakar',
            'email' => 'drukzakar.admin@gmail.com',
            'password' => Hash::make('drukzakar@2021'),
        ]);
        
        //Months
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༡ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༢ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༣ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༤ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༥ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༦ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༧ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༨ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༩ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༡༠ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༡༡ པ།'
        ]);
        DB::table('months')->insert([
            'dzo_month' => 'རང་ཟླ་ ༡༢ པ།'
        ]);

        // Days
        DB::table('days')->insert([
            'eng_day' => 'Monday',
            'dzo_day' => 'དམིག་དམར།'
        ]);
        DB::table('days')->insert([
            'eng_day' => 'Tuesday',
            'dzo_day' => 'ལྷག་པ།'
        ]);
        DB::table('days')->insert([
            'eng_day' => 'Wednesday',
            'dzo_day' => 'ཕུར་བུ།'
        ]);
        DB::table('days')->insert([
            'eng_day' => 'Thursday',
            'dzo_day' => 'པ་སངས།'
        ]);
        DB::table('days')->insert([
            'eng_day' => 'Friday',
            'dzo_day' => 'སྤེན་པ།'
        ]);
        DB::table('days')->insert([
            'eng_day' => 'Saturday',
            'dzo_day' => 'ཉི་མ།'
        ]);
        DB::table('days')->insert([
            'eng_day' => 'Sunday',
            'dzo_day' => 'ཟླ་བ།'
        ]);
    }
}
