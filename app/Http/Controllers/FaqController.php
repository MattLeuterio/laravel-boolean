<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    private $prima;
    private $dopo;

    public function __construct() {
        $this->prima = config('faq.prima');
        $this->dopo = config('faq.dopo');
    }

    public function faq() {
        $prima = $this->prima;
        $dopo = $this->dopo;
        return view('faq', compact('prima', 'dopo'));
    }
}
