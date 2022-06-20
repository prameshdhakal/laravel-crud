@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h2>Edit User</h2>
        <a href="{{ route('user.index') }}">Back </a>
    </div>
    <form method="POST" action="{{ route('user.update', $user->id) }}" class="form">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label>Full Name:</label>
            <input type="text" name="full_name" value="{{ $user->full_name }}" class="form-control"
                placeholder="Full Name">
        </div>
        @error('full_name')
            <div class="errors">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email">
        </div>
        @error('email')
            <div class="errors">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label>Phone Number:</label>
            <input type="number" name="phone_number" value="{{ $user->phone_number }}" class="form-control"
                placeholder="Phone Number">
        </div>
        @error('phone_number')
            <div class="errors">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-submit">Update</button>
    </form>
@endsection
