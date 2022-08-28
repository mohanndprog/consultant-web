<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Course = array(
            array(
                'course_name' => 'Web'
            ),
            array(
                'course_name' => 'English'
            ),
            array(
                'course_name' => 'IT'
            ),
            array(
                'course_name' => 'Finance'
            ),
            array(
                'course_name' => 'Technology'
            ),
            array(
                'course_name' => 'Sports'
            ),
            array(
                'course_name' => 'Medical'
            ),
            array(
                'course_name' => 'Buisness'
            ),
        );

        Course::insert($Course);
    }
}