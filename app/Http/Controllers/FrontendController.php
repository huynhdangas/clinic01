<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class FrontendController extends Controller
{
    public function index() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        
        $doctors = Appointment::where('date', date('Y-m-d'))->get();
        
        return view('welcome', compact('doctors'));
    }
}
