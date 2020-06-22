<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \App\Setting::create([
        'blog_name'=> 'A&A Blog' ,
        'phone_number'=> '00996644' ,
        'blog_email'=> 'a&a@test.com' ,
        'address'=> 'Syria-lattakia'
       ]);
    }
}
