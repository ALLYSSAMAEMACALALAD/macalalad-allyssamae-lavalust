<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    // ==========================================
    // HOME
    // URL: /LavaLust/index.php/student
    // ==========================================
    public function index()
    {
        $data['student'] = $this->student_data();

        $this->call->view('student/home', $data);
    }

    // ==========================================
    // STUDENT PROFILE
    // URL: /LavaLust/index.php/student/profile
    // ==========================================
    public function profile()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Check if student has access
        if (
            !isset($_SESSION['student_access']) ||
            $_SESSION['student_access'] !== true
        ) {
            redirect('student');
            exit;
        }

        $data['student'] = $this->student_data();

        $this->call->view('student/profile', $data);
    }

    // ==========================================
    // GRANT ACCESS
    // URL: /LavaLust/index.php/student/access
    // ==========================================
    public function access()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        redirect('student/profile');
        exit;
    }

    // ==========================================
    // REVOKE ACCESS
    // URL: /LavaLust/index.php/student/logout
    // ==========================================
    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        unset($_SESSION['student_access']);

        redirect('student');
        exit;
    }

    // ==========================================
    // STUDENT INFORMATION
    // ==========================================
    private function student_data()
    {
        return [
            'student_id'  => 'MCC2024 - 00222',
            'name'        => 'Allyssa Mae R. Macalalad',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => '3 - F5',
            'email'       => 'allyssamaemacalalad11@gmail.com',
            'address'     => 'Bayani, Naujan, Oriental Mindoro, Philippines',
            'contact_no'  => '09931478407',
            'hobbies'     => 'Sleeping, Eating, Watching University Series and Playing Clash of Clans and Mobile Legends',
            'description' => 'A BS Information Technology student who enjoys relaxing, eating, and watching university series.'
        ];
    }
}