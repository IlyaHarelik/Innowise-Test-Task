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

        return redirect()->route('stafflist')->with('success', 'New employee was added to list');
    }
    public function allData()
    {
        return view('stafflist', ['data' => Stafflist::Paginate(10)]);
    }

    public function updateStafflist($id)
    {
        $stafflist = new Stafflist;
        return view('stafflist-update', ['data' => $stafflist->find($id)]);
    }

    public function updateStafflistAccept($id, Request $req)
    {
        $req->validate([
            'firstName' => 'required|min:2|max:20',
            'lastName' => 'required|min:2|max:20',
            'salary' => 'required|numeric|between:50,20000',
            'birthday' => 'required|before:tomorrow'
        ]);

        $stafflists = Stafflist::find($id);
        $stafflists->firstName = $req->input('firstName');
        $stafflists->lastName = $req->input('lastName');
        $stafflists->salary = $req->input('salary');
        $stafflists->birthday = $req->input('birthday');
        $stafflists->save();

        return redirect()->route('stafflist')->with('success', 'Employee data was edited');
    }

    public function deleteStafflist($id)
    {
        $stafflist = new Stafflist;
        Stafflist::find($id)->delete();
        return redirect()->route('stafflist')->with('success', 'The employee was removed from the list');
    }


    public function sortByName($name = 'id', $type = 'asc')
    {
        $stafflist = Stafflist::orderBy($name, $type)->paginate(10);
        return view('stafflist', ['data' => $stafflist]);

    }

}
