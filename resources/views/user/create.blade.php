@extends('layouts.app')

@section('content')
    <div class="page-title">
        <h2>Add Users</h2>
        <button class="btn btn-submit"><a href="{{ route('user.index') }}">Back</a></button>
    </div>
    <form action="{{ route('user.store') }}" class="form" method="POST">
        @csrf
        <label>Full Name:<span>*</span></label>
        <div class="form-group">
            <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control"
                placeholder="Full Name">
        </div>
        @error('full_name')
            <div class="errors">{{ $message }}</div>
        @enderror
        <label>Email:<span>*</span></label>
        <div class="form-group">
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email">
        </div>
        @error('email')
            <div class="errors">{{ $message }}</div>
        @enderror
        <label>Phone Number:</label>
        <div class="form-group">
            <input type="number" name="phone_number" value="{{ old('phone_number') }}" class="form-control"
                placeholder="Phone Number">
        </div>
        @error('phone_number')
            <div class="errors">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-submit">Submit</button>
    </form>
@endsection
