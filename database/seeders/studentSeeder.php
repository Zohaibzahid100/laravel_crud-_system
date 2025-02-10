<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
       $students =  student::truncate();

    $students = collect([

        [
            'studnet_name' => 'zohaib',
            'studnet_email' => 'zohaib@gmail.com',
            'studnet_phone' => '12345',
            'studnet_course_enrolls'=> 'ai interage',
               'studnet_db' => '2012-10-01'

        ],
        [
            'studnet_name' => 'ali',
            'studnet_email' => 'ali@gmail.com',
            'studnet_phone' => '12375',
            'studnet_course_enrolls'=> 'accp interage',
               'studnet_db' => '2012-12-12'

        ],
        [
            'studnet_name' => 'hassan',
            'studnet_email' => 'hassan@gmail.com',
            'studnet_phone' => '123876',
            'studnet_course_enrolls'=> 'web development',
               'studnet_db' => '2002-1-11'
        ],
         [
            'studnet_name' => 'ebad',
            'studnet_email' => 'ebad@gmail.com',
            'studnet_phone' => '1227766',
            'studnet_course_enrolls'=> 'web design',
               'studnet_db' => '2005-12-11'
         ],
         [
            'studnet_name' => 'khan',
            'studnet_email' => 'khan@gmail.com',
            'studnet_phone' => '134375364',
            'studnet_course_enrolls'=> 'UI UX Designer',
               'studnet_db' => '2000-01-22'
         ],
         [
            'studnet_name' => 'azharkhan',
            'studnet_email' => 'azharkhan@gmail.com',
            'studnet_phone' => '112244',
            'studnet_course_enrolls'=> 'UI Designer',
               'studnet_db' => '1992-12-11'
         ]







    ]);
    $students->each(function($student){
         student::create($student);
    });

        
    }
}
