<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{   
    private $students;

    public function __construct() {
        $this->students = config('students');
    }

    public function index() {
        $students = $this->students;
        return view('students.index', compact('students'));
    }

    public function show($id) {
        $student = $this->searchStudent($id, $this->students);
        if (!$student) {
            abort('404');
        }
        return view('students.show', compact('student'));
    }

    /** UTILITIES **/
    // check students exists
    private function searchStudent($id, $array) {
        foreach($array as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return false;
    }
}
