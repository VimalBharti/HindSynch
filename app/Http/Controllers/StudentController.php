<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StudentController extends Controller
{

    public function index(){}
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    
    public function dashboard(){
        return view('student.dashboard');
    }
    public function resume(){
        return view('student.resume');
    }
    public function profile(){
        $users = User::all();
        return view('student.profile', compact('users'));
    }
    
}
