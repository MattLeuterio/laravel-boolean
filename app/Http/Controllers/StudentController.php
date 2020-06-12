<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{   
    private $students;
    private $genders;

    public function __construct() {
        // nel config array associativo:
        $this->students = config('students.students');
        $this->genders = config('students.genders');
    }

    public function index() {
        $students = $this->students;
        $genders = $this->genders;
        return view('students.index', compact('students', 'genders'));
    }

    public function show($slug) {
        $student = $this->searchStudent($slug, $this->students);
        if (!$student) {
            abort('404');
        }
        return view('students.show', compact('student'));
    }

    /** UTILITIES **/
    // check students exists
    private function searchStudent($slug, $array) {
        foreach($array as $item) {
            if ($item['slug'] == $slug) {
                return $item;
            }
        }
        return false;
    }
}
