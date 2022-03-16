@extends('layouts.app')

@section('content')
    <h1>Form for adding new employees</h1>

    @if($errors ->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('newaccepted') }}" method="post">
        @csrf
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
            <input type="number" name="salary" placeholder="Salary" id="salary" class="form-control">
        </div>
        <div class="for-group">
            <label for="name">Date of birth</label>
            <input type="date" name="birth" placeholder="Date of birth" id="birth" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Accept</button>
    </form>
    @endsection