@extends('layouts.admin')
@section('title')
    <h4 class="page-title">Edit admin</h4>
@endsection
@section('admin')

    <form action='{{route('admin.update',$admin->id)}}' method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="simpleinput" class="form-label">admin Name</label>
            <input type="text" id="simpleinput" class="form-control"  name="name" required value={{$admin->name}} >
        </div>
        <div class="mb-3">
            <label for="simpleinput" class="form-label">email</label>
            <input type="email" id="simpleinput" class="form-control"  name="email" required value={{$admin->email}}>
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
            <img class="rounded" src="{{$admin->img}}" alt="img" height="48">
            <label for="example-fileinput" class="form-label">admin img</label>
            <input type="file" id="example-fileinput"
                   class="form-control" name="img" required value={{$admin->img}}>
        </div>

        <div class="mb-3">
            <label for="example-fileinput" class="form-label"> phone </label>
            <input type="text" id="example-fileinput"
                   class="form-control" name="phone" required value={{$admin->phone}}>
        </div>

        <div class="mb-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control" id="singledaterange" name="date_of_birth" value={{$admin->date_of_birth}}>
        </div>
        <div class="mb-3">
            <label class="form-label">Major</label>
            <input type="text" class="form-control" id="singledaterange" name="major" value={{$admin->major}}>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
