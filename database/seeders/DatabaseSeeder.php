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
            'eng_month' => 'January',
            'dzo_month' => 'ཟླ་ ༡ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'February',
            'dzo_month' => 'ཟླ་ ༢ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'March',
            'dzo_month' => 'ཟླ་ ༣ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'Apiril',
            'dzo_month' => 'ཟླ་ ༤ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'May',
            'dzo_month' => 'ཟླ་ ༥ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'June',
            'dzo_month' => 'ཟླ་ ༦ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'July',
            'dzo_month' => 'ཟླ་ ༧ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'August',
            'dzo_month' => 'ཟླ་ ༨ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'September',
            'dzo_month' => 'ཟླ་ ༩ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'October',
            'dzo_month' => 'ཟླ་ ༡༠ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'November',
            'dzo_month' => 'ཟླ་ ༡༡ པ།'
        ]);
        DB::table('months')->insert([
            'eng_month' => 'December',
            'dzo_month' => 'ཟླ་ ༡༢ པ།'
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
