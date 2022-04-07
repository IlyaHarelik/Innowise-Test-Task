@extends('layouts.app')
@section('title-block')
    Stafflist
@endsection
@section('content')
    <h2>Staff list</h2>
    <div class="container mt-5">
        @include('inc.staff')
    </div>
        <table border="1" rules="all" width="95%" bordercolor="black" >
            <tr>
                <th align="center">id</th>
                <th>
                    <a>First Name</a>
                    <a href="{{route('stafflist-sort-name', ['firstName', 'asc'])}}">˄</a>
                    <a href="{{route('stafflist-sort-name', ['firstName', 'desc'])}}">˅</a>
                </th>
                <th>Last Name</th>
                <th>Salary</th>
                <th>Birthday</th>
                <th>Options</th>
            </tr>
            @foreach($data as $el)
                <tr>
                <td>{{ $el->id }}</td>
                <td>{{ $el->firstName }}</td>
                <td>{{ $el->lastName }}</td>
                <td>{{ $el->salary }}</td>
                <td>{{ $el->birthday}}</td>
                <td>
                    <a href="{{route('stafflist-update', $el->id)}}"><button class="btn btn-primary">Edit</button></a>
                    <a href="{{route('stafflist-delete', $el->id)}}"><button class="btn btn-danger">Delete</button></a>
                </td>
                </tr>
            @endforeach
        </table>
    {{ $data->links() }}

@endsection
