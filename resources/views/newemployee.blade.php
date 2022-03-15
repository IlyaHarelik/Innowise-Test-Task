@extends('layouts.app')

@section('content')
    <h1>Form for adding new employees</h1>
    <form action="/newemployee/submit" method="post">
        <div class="for-group">
            <label for="name">First name</label>
            <input type="text" name="firstName" placeholder="First name" id="firstName" class="form-control">
        </div>
        <div class="for-group">
            <label for="name">Last name</label>
            <input type="text" name="lastName" placeholder="Last name" id="lastName" class="form-control">
        </div>
        <div class="for-group">
            <label for="name">Salary</label>
            <input type="text" name="salary" placeholder="Salary" id="salary" class="form-control">
        </div>
        <div class="for-group">
            <label for="name">Date of birth</label>
            <input type="text" name="birth" placeholder="Date of birth" id="birth" class="form-control">
        </div>
    </form>
    @endsection
