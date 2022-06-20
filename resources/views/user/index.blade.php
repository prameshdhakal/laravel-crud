@extends('layouts.app')

@section('content')
    @if (session()->has('message'))
        <small>{{ session()->get('message') }}</small>
    @endif
    <div class="page-title">
        <h2>All Users</h2>
        <button class="btn btn-submit"><a href="{{ route('user.create') }}">Add User</a></button>
    </div>
    <table class="table" border="1">
        <thead>
            <td>ID</td>
            <td>Full Name</td>
            <td>Email Address</td>
            <td>Phone Number</td>
            <td colspan="2">Action</td>
        </thead>
        @forelse ($users as $user)
            <tbody>
                <td>{{ $user->id }}</td>
                <td>{{ $user->full_name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone_number }}</td>
                <td class="action">
                    <a href="{{ route('user.show', $user->id) }}">Show</a>
                    <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            @empty
                <p>No data found</p>
            </tbody>
        @endforelse
    </table>
@endsection
