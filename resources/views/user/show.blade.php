@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h2 class="title">Show Details</h2>
        <a class="btn btn-back" href="{{ route('user.index') }}">Back</a>
    </div>
    <table class="table" border="1">
        <thead>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone Number</th>
        </thead>
        <tbody>
            <td>{{ $user->full_name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone_number }}</td>
        </tbody>
    </table>
@endsection
