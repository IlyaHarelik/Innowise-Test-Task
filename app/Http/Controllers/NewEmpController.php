<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stafflist;

class NewEmpController extends Controller
{
    public function accept(Request $req)
    {
        $validation = $req->validate([
            'firstName' => 'required|min:2|max:20',
            'lastName' => 'required|min:2|max:20',
            'salary' => 'required|numeric|between:50,20000',
            'birthday' => 'required|before:tomorrow'
        ]);
        $stafflists = new Stafflist();
        $stafflists->firstName = $req->input('firstName');
        $stafflists->lastName = $req->input('lastName');
        $stafflists->salary = $req->input('salary');
        $stafflists->birthday = $req->input('birthday');
        $stafflists->save();
        return redirect()->route('stafflist')->with('success', 'New employee was added to database');
}

}
