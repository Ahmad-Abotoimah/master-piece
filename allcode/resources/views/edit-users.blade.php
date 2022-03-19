@extends('layouts.admin')
@section('title')
    <h4 class="page-title">Edit User</h4>
@endsection
@section('admin')

    <form action='{{route('user.update',$user->id)}}' method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="simpleinput" class="form-label">User Name</label>
            <input type="text" id="simpleinput" class="form-control"  name="name" required value={{$user->name}} >
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">email</label>
            <input type="email" id="simpleinput" class="form-control"  name="email" required value={{$user->email}}>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">
                Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password"
                       class="form-control"
                       placeholder="Enter your password" name="password" required>
                <div class="input-group-text" data-password="false">
                    <span class="password-eye"></span>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <img class="rounded" src="{{$user->img}}" alt="img" height="48">
            <label for="example-fileinput" class="form-label">user img</label>
            <input type="file" id="example-fileinput"
                   class="form-control" name="img" required value={{$user->img}}>
        </div>

        <div class="mb-3">
            <label for="example-fileinput" class="form-label"> phone </label>
            <input type="text" id="example-fileinput"
                   class="form-control" name="phone" required value={{$user->phone}}>
        </div>

        <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="singledaterange" name="date_of_birth" value={{$user->date_of_birth}}>
        </div>
        <div class="mb-3">
            <label class="form-label">Major</label>
            <input type="text" class="form-control" id="singledaterange" name="major" value={{$user->major}}>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
