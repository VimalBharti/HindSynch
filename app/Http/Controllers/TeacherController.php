<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function __construct(){
        $this->middleware('auth:teacher');
    }

    public function index(){
        return view('Teacher.index');
    }
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    
    public function dashboard(){
        return view('Teacher.dashboard');
    }
    
}
