<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">Edit  User</div>
        @if (Session::has('fail'))
            <span class="alert alert-danger p-2">{{Session::get('fail')}}</span>
        @endif
        <div class="card-body">
            <form action="{{ route('users.update') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" id="" value="{{$user->id}}">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Full Name</label>
                    <input type="text" name="full_name" value="{{$user->name}}" class="form-control" id="formGroupExampleInput" placeholder="Enter Full Name">
                    @error('full_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$user->email}}" id="formGroupExampleInput2" placeholder="Enter Email">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Phone Number</label>
                    <input type="number" name="phone_number" value="{{$user->phone_number}}" class="form-control" id="formGroupExampleInput2" placeholder="Enter Phone Number">
                    @error('phone_number')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Save</button>

            </form>

        </div>
    </div>
</div>
</body>
</html>
