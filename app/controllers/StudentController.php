<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $student = [
            'student_id' => '2026-0001',
            'name'       => 'Allyssa Mae Macalalad',
            'course'     => 'BS Information Technology',
            'year'       => '2nd Year',
            'section'    => 'A',
            'email'      => 'allyssa@example.com'
        ];

        $this->call->view('student/home', $student);
    }

    public function profile()
    {
        $student = [
            'student_id' => ' MCC 2024 - 00222',
            'name'       => 'Allyssa Mae R. Macalalad',
            'course'     => 'BS Information Technology',
            'year'       => 'Third Year',
            'section'    => '3-F5',
            'email'      => 'allyssamaemacalalad11@gmail.com',
            'hobby'      => 'Sleeping, Watching Short Series, Playing Mobile Legends and Clash of Clans'
        ];

        $this->call->view('student/profile', $student);
    }
}