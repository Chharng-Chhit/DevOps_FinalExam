<?php
use App\Models\Student;
use function PHPUnit\Framework\assertTrue;
it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('create student', function () {
    $student = Student::create([
        'name' => 'John Doe',
        'email' => '<your_name>@itc.edu.kh',
        'phone' => '012 345 678',
        'dob' => '2003-10-01'
    ]);
    assertTrue($student->exists());
});
