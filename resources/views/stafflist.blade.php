@extends('layouts.app')

@section('content')
    <h2>Staff list</h2>
    <div class="container mt-5">
        @include('inc.staff')
    </div>
        <table border="1" rules="all" width="95%" bordercolor="black" >
            <tr>
                <th>id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Salary</th>
                <th>Birthday</th>
            </tr>
            @foreach($data as $el)
                <tr>
                <td>{{ $el->id }}</td>
                <td>{{ $el->firstName }}</td>
                <td>{{ $el->lastName }}</td>
                <td>{{ $el->salary }}</td>
                <td>{{ $el->birthday}}</td>
                </tr>


            @endforeach
        </table>
@endsection
