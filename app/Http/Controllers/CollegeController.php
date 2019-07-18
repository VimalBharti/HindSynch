<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;

class CollegeController extends Controller
{
    public function __construct(){
        $this->middleware('auth:college');
    }

    public function index(){
        return view('College.index');
    }
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    
    public function dashboard(){
        return view('College.dashboard');
    }
    
}
