<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewEmpController extends Controller {
    public function accept(Request $req){
        $validation = $req ->validate([
            'firstName' => 'required|min:2|max:20',
            'lastName' => 'required|min:2|max:20',
            'salary' => 'required|min:50|max:20000'
        ]);
    }
}
