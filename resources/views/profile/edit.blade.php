@extends('layouts.app') <!-- امتداد القالب الأساسي -->

@section('title', 'Profile') <!-- تعيين عنوان الصفحة -->

@section('content') <!-- محتوى الصفحة -->
<div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
        <h3 class="fs-5 fw-semibold">Profile Information</h3>
        <p class="small text-white-50">Manage your profile information below.</p>
    </div>
    <div class="card-body">
        <dl class="row">
            <dt class="col-sm-4 text-muted">Name</dt>
            <dd class="col-sm-8">{{ $user->name }}</dd>

            <dt class="col-sm-4 text-muted">Email</dt>
            <dd class="col-sm-8">{{ $user->email }}</dd>

            <dt class="col-sm-4 text-muted">Profile Picture</dt>
            <dd class="col-sm-8">
                @if($user->profile_image)
                    <img src="{{ asset('storage/' . $user->profile_image) }}" alt="Profile Image" class="rounded-circle border img-thumbnail" style="height: 64px; width: 64px;">
                @else
                    <span class="text-muted">No profile image</span>
                @endif
            </dd>
        </dl>
    </div>
</div>

<div class="card shadow-sm mt-4 border-0">
    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-header bg-light">
            <h3 class="fs-5 fw-semibold">Update Profile</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label text-dark">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-dark">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="profile_image" class="form-label text-dark">Profile Picture</label>
                <input type="file" id="profile_image" name="profile_image" class="form-control">
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </form>
</div>
@endsection
