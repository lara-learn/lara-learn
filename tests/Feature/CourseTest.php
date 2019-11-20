<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Course;
use App\Teacher;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class CourseTest extends TestCase
{
    use DatabaseMigrations;

    public function test_teacher_can_create_course(): void
    {
        /**
         * @var Teacher
         */
        $teacher = factory(Teacher::class)->create();

        /**
         * @var Course
         */
        $course = factory(Course::class)->make();

        $teacher->courses()->save($course);

//        $this->actingAs($teacher)
//            ->get('/courses')
//            ->assertSeeText($course->name);
    }
}
