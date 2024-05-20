<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobController extends Controller
{
    public function index()
    {
        $data = [];
        $data['ev'] = Jobs::All();
        return view('pages.recruiters.index',$data);
    }
}
