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
        $this->withoutExceptionHandling();
        $teacher = factory(Teacher::class)->create();
        $course = factory(Course::class)->make([
            'teacher_id' => $teacher->id,
        ]);

        $teacher->courses()->save($course);

        $this->actingAs($teacher)
            ->get('/courses')
            ->assertSeeText($course->name);
    }
}
