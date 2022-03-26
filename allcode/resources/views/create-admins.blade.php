@extends('layouts.admin')
@section('title')
    <h4 class="page-title">Create Course</h4>
@endsection
@section('admin')

    <form action='{{route('user.store')}}' method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="simpleinput" class="form-label">User Name</label>
            <input type="text" id="simpleinput" class="form-control" placeholder="ahmad,moh,..... " name="name" required value={{old('name')}}>
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">Email</label>
            <input type="email" id="simpleinput" class="form-control" placeholder='example@gmail.com' name="email" required value={{old('email')}}>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">
                Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password"
                       class="form-control"
                       placeholder="Enter your password" name="password">
                <div class="input-group-text" data-password="false">
                    <span class="password-eye"></span>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="example-fileinput" class="form-label"> image</label>
            <input type="file" id="example-fileinput"
                   class="form-control" name="img" required value={{old('img')}}>
        </div>
        <div class="mb-3">
            <label for="example-fileinput" class="form-label"> phone </label>
            <input type="text" id="example-fileinput"
                   class="form-control" name="phone" required value={{old('phone')}}>
        </div>

        <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="singledaterange" name="date_of_birth" value={{old('date_of_birth')}}>
        </div>
        <div class="mb-3">
            <label class="form-label">Major</label>
            <input type="text" class="form-control" id="singledaterange" name="major" value={{old('major')}}>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
