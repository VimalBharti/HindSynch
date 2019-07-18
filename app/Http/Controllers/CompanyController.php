<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function __construct(){
        $this->middleware('auth:company');
    }

    public function index(){
        return view('Company.index');
    }
    public function create(){}
    public function store(Request $request){}
    public function show($id){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
    
    public function dashboard(){
        return view('Company.dashboard');
    }
    
}
