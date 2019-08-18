<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function our_purpose(){
        return view('our_purpose');
    }
    public function whyServe(){
        return view('serve');
    }

    public function whyUs(){
        return view('why_us');
    }
    public function refProgram(){
        return view('ref_program');
    }
    public function ItServices(){
        return view('IT_services');
    }
    public function supSpecialist(){
        return view('proposal');
    }
    public function ItConsulting(){
        return view('IT_consulting');
    }
    public function cloudComputing(){
        return view('cloud_computing');
    }
    public function comSecurity(){
        return view('network_security');
    }
    public function backupRecovery(){
        return view('backup_recovery');
    }
    public function careers(){
        return view('careers');
    }






    
}
