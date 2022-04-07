@extends('layouts.app')
@section('title-block')
    Edit employee info
@endsection
@section('content')
    <h1>Edit form</h1>
    @if($errors -> any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                    return redirect()->route('newemployee')->withInputs()->withErrors();
            </ul>
        </div>
    @endif

    <form action="{{ route('stafflist-update-accept', $data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">First name</label>
            <input type="text" name="firstName" value="{{$data->firstName}}" placeholder="First name" id="firstName" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Last name</label>
            <input type="text" name="lastName" value="{{$data->lastName}}" placeholder="Last name" id="lastName" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Salary</label>
            <input type="number" name="salary" value="{{$data->salary}}" placeholder="Salary" id="salary" class="form-control">
        </div>
        <div class="form-group">
            <label for="name">Birthday</label>
            <input type="date" name="birthday" value="{{$data->birthday}}" placeholder="Birthday" id="birthday" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Accept</button>
    </form>
@endsection
