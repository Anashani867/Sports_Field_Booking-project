@extends('admin.layouts.app')

@section('title', 'Edit Profile')

@section('content')
    <h1>Edit Admin Profile</h1>
    <form action="{{ route('admin.profile.update') }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ auth('admin')->user()->name }}" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ auth('admin')->user()->email }}" required>

        <button type="submit">Save Changes</button>
    </form>
@endsection
