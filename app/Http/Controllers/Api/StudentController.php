<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * STUDENT FILTERED BY GENDER
     */

     public function gender(Request $request) 
     {
        $students = config('students.students');
        $genders = config('students.genders');

        // Metodo ALL() prendo tutti i dati che mi sono stati inviati
        //$data = $request->all();
        //dd($gender);

        //così settiamo il tipo di input 
        $gender = $request->input('filter');

        $result = [
            'error' => '',
            'response' => []
        ];

        if(in_array($gender, $genders)) {
             if($gender == 'all') {
                $result['response'] = $students;
             } else {
                 foreach($students as $student) {
                     if($student['genere'] == $gender) {
                         $result['response'][] = $student;
                     }
                 }
             }
        } else {
            $result['error'] = 'Filter not allowed';
        }

        return response()->json($result);
     }
}
